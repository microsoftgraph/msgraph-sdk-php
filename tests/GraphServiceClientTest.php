<?php

namespace Microsoft\Graph\Test;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use League\OAuth2\Client\Grant\AuthorizationCode;
use League\OAuth2\Client\Token\AccessToken;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAccessTokenProvider;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAuthenticationProvider;
use Microsoft\Graph\Core\NationalCloud;
use Microsoft\Graph\GraphRequestAdapter;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Abstractions\Authentication\AnonymousAuthenticationProvider;
use Microsoft\Kiota\Authentication\Cache\InMemoryAccessTokenCache;
use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;
use Microsoft\Kiota\Authentication\Oauth\ClientCredentialContext;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

class GraphServiceClientTest extends TestCase
{
    private string $testJWT;

    public function setUp(): void
    {
        $this->testJWT = "headers.".base64_encode(json_encode(['sub' => '123'])).".signature";
    }

    public function testsInit(): void
    {
        $client = GraphServiceClient::createWithRequestAdapter(new GuzzleRequestAdapter(new AnonymousAuthenticationProvider()));
        $this->assertInstanceOf(GraphServiceClient::class, $client);
        $testContext = new ClientCredentialContext('tenant', 'client', 'secret');
        $client = new GraphServiceClient($testContext);
        $this->assertInstanceOf(GraphServiceClient::class, $client);
        $client = new GraphServiceClient($testContext, ['Users.Read']);
        $this->assertInstanceOf(GraphServiceClient::class, $client);
    }

    public function testCorrectDefaultBaseUrlIsSetWhenRequestAdapterHasEmptyBaseUrl(): void
    {
        $requestAdapter = new GuzzleRequestAdapter(new AnonymousAuthenticationProvider());
        $client = GraphServiceClient::createWithRequestAdapter($requestAdapter);
        $this->assertEquals(NationalCloud::GLOBAL.'/v1.0', $client->getRequestAdapter()->getBaseUrl());

        $requestAdapter = new GuzzleRequestAdapter(new AnonymousAuthenticationProvider());
        $client = GraphServiceClient::createWithRequestAdapter($requestAdapter, NationalCloud::CHINA);
        $this->assertEquals(NationalCloud::CHINA.'/v1.0', $client->getRequestAdapter()->getBaseUrl());
    }

    public function testCustomBaseUrlIsNotOverriden(): void
    {
        $requestAdapter = new GuzzleRequestAdapter(new AnonymousAuthenticationProvider());
        $requestAdapter->setBaseUrl(NationalCloud::CHINA);
        $client = GraphServiceClient::createWithRequestAdapter($requestAdapter, NationalCloud::US_DOD);
        $this->assertEquals(NationalCloud::CHINA, $client->getRequestAdapter()->getBaseUrl());
    }

    public function testUsingCustomCache(): void
    {
        $customCache = new InMemoryAccessTokenCache();
        $tokenRequestContext = new AuthorizationCodeContext('tenant', 'clientId', 'clientSecret', 'redirectUri', 'code');
        $scopes = ['User.Read'];

        // Init access token provider
        $mockGuzzleTokenClient = new Client(['handler' => new MockHandler([
            new Response(200, [], json_encode(['access_token' => $this->testJWT, 'refresh_token' => 'refresh', 'expires_in' => 5])),
        ])]);
        $accessTokenProvider = GraphPhpLeagueAccessTokenProvider::createWithCache(
            $customCache,
            $tokenRequestContext,
            $scopes
        );
        $accessTokenProvider->getOauthProvider()->setHttpClient($mockGuzzleTokenClient);

        // Init request client
        $mockGuzzleClient = new Client(['handler' => new MockHandler([
            function (RequestInterface $request) {
                $this->assertTrue($request->hasHeader('Authorization'));
                $this->assertEquals('Bearer '.$this->testJWT, $request->getHeader('Authorization')[0]);
                return new Response(200);
            },
            function (RequestInterface $request) {
                $this->assertTrue($request->hasHeader('Authorization'));
                $this->assertEquals('Bearer '.$this->testJWT, $request->getHeader('Authorization')[0]);
                return new Response(200);
            },
        ])]);

        $requestAdapter = new GraphRequestAdapter(
            GraphPhpLeagueAuthenticationProvider::createWithAccessTokenProvider(
                $accessTokenProvider
            ),
            $mockGuzzleClient
        );
        $client = GraphServiceClient::createWithRequestAdapter($requestAdapter);
        $me = $client->me()->get()->wait();

        // cache is populated
        $this->assertInstanceOf(AccessToken::class, $customCache->getTokenWithContext($tokenRequestContext));
        $this->assertEquals($this->testJWT, $customCache->getTokenWithContext($tokenRequestContext)->getToken());

        // hydrate another cache for follow-up request
        $previousAccessToken = $customCache->getTokenWithContext($tokenRequestContext);
        $newTokenRequestContext = new AuthorizationCodeContext('tenant', 'clientId', 'clientSecret', 'redirectUri', 'code');
        $newCache = new InMemoryAccessTokenCache($newTokenRequestContext, $previousAccessToken);
        $accessTokenProvider = GraphPhpLeagueAccessTokenProvider::createWithCache(
            $newCache,
            $newTokenRequestContext,
            $scopes
        );
        $client = GraphServiceClient::createWithRequestAdapter(
            new GraphRequestAdapter(
                GraphPhpLeagueAuthenticationProvider::createWithAccessTokenProvider(
                    $accessTokenProvider
                ),
                $mockGuzzleClient
            )
        );

        $me = $client->me()->get()->wait();
        // cache is populated
        $this->assertInstanceOf(AccessToken::class, $newCache->getTokenWithContext($newTokenRequestContext));
        $this->assertEquals($this->testJWT, $newCache->getTokenWithContext($newTokenRequestContext)->getToken());
    }
}
