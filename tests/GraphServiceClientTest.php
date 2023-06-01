<?php

namespace Microsoft\Graph\Test;

use Microsoft\Graph\Core\BaseGraphRequestAdapter;
use Microsoft\Graph\GraphRequestAdapter;
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
}
