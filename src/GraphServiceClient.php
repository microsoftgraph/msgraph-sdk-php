<?php
/**
 * Copyright (c) Microsoft Corporation.  All Rights Reserved.
 * Licensed under the MIT License.  See License in the project root
 * for license information.
 */


namespace Microsoft\Graph;

use GuzzleHttp\Client;
use Microsoft\Graph\Core\Core\Middleware\Option\GraphTelemetryOption;
use Microsoft\Graph\Core\GraphRequestAdapter;
use Microsoft\Kiota\Abstractions\Authentication\AnonymousAuthenticationProvider;
use Microsoft\Kiota\Abstractions\Authentication\AuthenticationProvider;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Authentication\Oauth\TokenRequestContext;
use Microsoft\Kiota\Authentication\PhpLeagueAuthenticationProvider;

/**
 * Class GraphServiceClient
 *
 * @package Microsoft\Graph
 * @copyright 2022 Microsoft Corporation
 * @license https://opensource.org/licenses/MIT MIT License
 * @link https://developer.microsoft.com/graph
 */
class GraphServiceClient extends Generated\BaseGraphClient
{
    /**
     * @param RequestAdapter $requestAdapter
     */
    private function __construct(RequestAdapter $requestAdapter)
    {
        parent::__construct($requestAdapter);
    }

    /**
     * @param TokenRequestContext $context
     * @param array $scopes
     * @return static
     */
    public static function createWithTokenRequestContext(TokenRequestContext $context, array $scopes = []): self
    {
        $authProvider = new PhpLeagueAuthenticationProvider($context, $scopes);
        return new GraphServiceClient(new GraphRequestAdapter($authProvider, self::getTelemetryConfig()));
    }

    /**
     * @param AuthenticationProvider $authProvider
     * @return static
     */
    public static function createWithAuthenticationProvider(AuthenticationProvider $authProvider): self
    {

        return new GraphServiceClient(new GraphRequestAdapter($authProvider, self::getTelemetryConfig()));
    }

    /**
     * @param Client $client
     * @return static
     */
    public static function createWithHttpClient(Client $client): self
    {
        return new GraphServiceClient(new GraphRequestAdapter(new AnonymousAuthenticationProvider(), self::getTelemetryConfig(), null, null, $client));
    }

    /**
     * @return GraphTelemetryOption
     */
    private static function getTelemetryConfig(): GraphTelemetryOption
    {
        return new GraphTelemetryOption(GraphConstants::API_VERSION, GraphConstants::SDK_VERSION);
    }
}
