<?php
/**
 * Copyright (c) Microsoft Corporation.  All Rights Reserved.
 * Licensed under the MIT License.  See License in the project root
 * for license information.
 */


namespace Microsoft\Graph;

use Microsoft\Kiota\Abstractions\RequestAdapter;

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
    public function __construct(RequestAdapter $requestAdapter)
    {
        parent::__construct($requestAdapter);
    }
}
