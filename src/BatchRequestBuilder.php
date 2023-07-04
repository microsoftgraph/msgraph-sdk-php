<?php
/**
 * Copyright (c) Microsoft Corporation.  All Rights Reserved.
 * Licensed under the MIT License.  See License in the project root
 * for license information.
 */


namespace Microsoft\Graph;


use Microsoft\Graph\Core\Requests\BaseBatchRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Class BatchRequestBuilder
 *
 * Send requests to Graph's /$batch endpoint
 * @package Microsoft\Graph
 * @copyright 2023 Microsoft Corporation
 * @license https://opensource.org/licenses/MIT MIT License
 * @link https://developer.microsoft.com/graph
 */
class BatchRequestBuilder extends BaseBatchRequestBuilder
{
    /**
     * Send requests to Graph's /$batch endpoint
     *
     * @param RequestAdapter $requestAdapter
     */
    public function __construct(RequestAdapter $requestAdapter)
    {
        $errorMappings = [
            '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        parent::__construct($requestAdapter, $errorMappings);
    }
}
