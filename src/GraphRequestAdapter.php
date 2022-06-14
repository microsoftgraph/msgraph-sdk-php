<?php
/**
 * Copyright (c) Microsoft Corporation.  All Rights Reserved.
 * Licensed under the MIT License.  See License in the project root
 * for license information.
 */


namespace Microsoft\Graph;


use GuzzleHttp\Client;
use Microsoft\Graph\Core\BaseGraphRequestAdapter;
use Microsoft\Graph\Core\Middleware\Option\GraphTelemetryOption;
use Microsoft\Kiota\Abstractions\Authentication\AuthenticationProvider;
use Microsoft\Kiota\Authentication\Oauth\TokenRequestContext;
use Microsoft\Kiota\Authentication\PhpLeagueAuthenticationProvider;

/**
 * Class GraphRequestAdapter
 * @package Microsoft\Graph
 * @copyright 2022 Microsoft Corporation
 * @license https://opensource.org/licenses/MIT MIT License
 * @link https://developer.microsoft.com/graph
 */
class GraphRequestAdapter extends BaseGraphRequestAdapter
{
    /**
     * @var AuthenticationProvider|null
     */
    private static ?AuthenticationProvider $authProvider = null;
    /**
     * @var Client|null
     */
    private static ?Client $httpClient = null;

    /**
     * @param TokenRequestContext $context
     * @param array $scopes
     * @return GraphRequestAdapter
     */
    public static function withTokenRequestContext(TokenRequestContext $context, array $scopes = []): self
    {
        self::$authProvider = new PhpLeagueAuthenticationProvider($context, $scopes);
        return self::getInstance();
    }

    /**
     * @param AuthenticationProvider $authProvider
     * @return static
     */
    public static function withAuthenticationProvider(AuthenticationProvider $authProvider): self
    {
        self::$authProvider = $authProvider;
        return self::getInstance();
    }

    /**
     * @param Client $client
     * @return static
     */
    public static function withHttpClient(Client $client): self
    {
        self::$httpClient = $client;
        return self::getInstance();
    }

    /**
     * @return static
     */
    private static function getInstance(): self
    {
        return new GraphRequestAdapter(self::$authProvider, self::getTelemetryConfig(), null, null, self::$httpClient);
    }

    /**
     * @return GraphTelemetryOption
     */
    private static function getTelemetryConfig(): GraphTelemetryOption
    {
        return new GraphTelemetryOption(GraphConstants::API_VERSION, GraphConstants::SDK_VERSION);
    }
}
