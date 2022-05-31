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
use Microsoft\Kiota\Abstractions\Authentication\AnonymousAuthenticationProvider;
use Microsoft\Kiota\Abstractions\Authentication\AuthenticationProvider;
use Microsoft\Kiota\Authentication\Oauth\TokenRequestContext;
use Microsoft\Kiota\Authentication\PhpLeagueAuthenticationProvider;

class GraphRequestAdapter extends BaseGraphRequestAdapter
{
    /**
     * @param TokenRequestContext $context
     * @param array $scopes
     * @return GraphRequestAdapter
     */
    public static function createWithTokenRequestContext(TokenRequestContext $context, array $scopes = []): self
    {
        $authProvider = new PhpLeagueAuthenticationProvider($context, $scopes);
        return new GraphRequestAdapter($authProvider, self::getTelemetryConfig());
    }

    /**
     * @param AuthenticationProvider $authProvider
     * @return static
     */
    public static function createWithAuthenticationProvider(AuthenticationProvider $authProvider): self
    {
        return new GraphRequestAdapter($authProvider, self::getTelemetryConfig());
    }

    /**
     * @param Client $client
     * @return static
     */
    public static function createWithHttpClient(Client $client): self
    {
        return new GraphRequestAdapter(new AnonymousAuthenticationProvider(), self::getTelemetryConfig(), null, null, $client);
    }

    /**
     * @return GraphTelemetryOption
     */
    private static function getTelemetryConfig(): GraphTelemetryOption
    {
        return new GraphTelemetryOption(GraphConstants::API_VERSION, GraphConstants::SDK_VERSION);
    }
}
