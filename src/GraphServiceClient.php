<?php
/**
 * Copyright (c) Microsoft Corporation.  All Rights Reserved.
 * Licensed under the MIT License.  See License in the project root
 * for license information.
 */


namespace Microsoft\Graph;

use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAuthenticationProvider;
use Microsoft\Graph\Core\NationalCloud;
use Microsoft\Graph\Generated\BaseGraphClient;
use Microsoft\Graph\Generated\Users\Item\UserItemRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Authentication\Oauth\ClientCredentialContext;
use Microsoft\Kiota\Authentication\Oauth\TokenRequestContext;

/**
 * Class GraphServiceClient
 *
 * @package Microsoft\Graph
 * @copyright 2022 Microsoft Corporation
 * @license https://opensource.org/licenses/MIT MIT License
 * @link https://developer.microsoft.com/graph
 */
class GraphServiceClient extends BaseGraphClient
{
    /**
     * @param TokenRequestContext $tokenRequestContext
     * @param array<string> $scopes Defaults to "https://[graph national cloud host]/.default" scope
     * @param string $nationalCloud Defaults to https://graph.microsoft.com. See
     * https://learn.microsoft.com/en-us/graph/deployments
     * @param RequestAdapter|null $requestAdapter. Use createWithRequestAdapter() to set the request adapter.
     */
    public function __construct(
        TokenRequestContext $tokenRequestContext,
        array $scopes = [],
        string $nationalCloud = NationalCloud::GLOBAL,
        ?RequestAdapter $requestAdapter = null
    )
    {
        if ($requestAdapter) {
            parent::__construct($requestAdapter);
            return;
        }
        parent::__construct(new GraphRequestAdapter(new GraphPhpLeagueAuthenticationProvider(
            $tokenRequestContext, $scopes, $nationalCloud
        )));
    }

    /**
     * Get an instance of GraphServiceClient that uses $requestAdapter
     *
     * @param RequestAdapter $requestAdapter
     * @param string $nationalCloud Used to build base URL of $requestAdapter if none has been specified
     * Defaults to https://graph.microsoft.com. See https://learn.microsoft.com/en-us/graph/deployments
     * @return GraphServiceClient
     */
    public static function createWithRequestAdapter(
        RequestAdapter $requestAdapter,
        string $nationalCloud = NationalCloud::GLOBAL
    ): GraphServiceClient
    {
        if (!$requestAdapter->getBaseUrl()) {
            $requestAdapter->setBaseUrl("$nationalCloud/v1.0");
        }
        $placeholder = new ClientCredentialContext('tenant', 'client', 'secret');
        return new GraphServiceClient($placeholder, [], 'placeholder', $requestAdapter);
    }

    /**
     * Returns the request adapter instance in use
     *
     * @return RequestAdapter
     */
    public function getRequestAdapter(): RequestAdapter
    {
        return $this->requestAdapter;
    }

    /**
     * A method that abstracts the /me endpoint and users /users/{{user-id}} under
     * the hood.
     */
    public function me(): UserItemRequestBuilder {
        $urlTplParameters = $this->pathParameters;
        $urlTplParameters['user%2Did'] = 'me-token-to-replace';
        return new UserItemRequestBuilder($urlTplParameters, $this->requestAdapter);
    }
}
