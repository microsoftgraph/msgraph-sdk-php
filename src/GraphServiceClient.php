<?php
/**
 * Copyright (c) Microsoft Corporation.  All Rights Reserved.
 * Licensed under the MIT License.  See License in the project root
 * for license information.
 */


namespace Microsoft\Graph;

use Microsoft\Graph\Generated\BaseGraphClient;
use Microsoft\Graph\Generated\Users\Item\UserItemRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

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
     * @param RequestAdapter $requestAdapter
     */
    public function __construct(RequestAdapter $requestAdapter)
    {
        parent::__construct($requestAdapter);
    }

    public function me(): UserItemRequestBuilder {
        $urlTplParameters = $this->pathParameters;
        $urlTplParameters['user%2Did'] = 'me-token-to-replace';
        return new UserItemRequestBuilder($urlTplParameters, $this->requestAdapter);
    }
}
