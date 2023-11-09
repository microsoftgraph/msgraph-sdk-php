<?php

namespace Microsoft\Graph\Test;

use Microsoft\Graph\Core\NationalCloud;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Abstractions\Authentication\AnonymousAuthenticationProvider;
use Microsoft\Kiota\Authentication\Oauth\ClientCredentialContext;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use PHPUnit\Framework\TestCase;

class GraphServiceClientTest extends TestCase
{
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
}
