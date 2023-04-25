<?php

namespace Microsoft\Graph\Generated\Planner\Plans\Item\Tasks\Item\BucketTaskBoardFormat;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BucketTaskBoardFormatRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BucketTaskBoardFormatRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BucketTaskBoardFormatRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new bucketTaskBoardFormatRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BucketTaskBoardFormatRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BucketTaskBoardFormatRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new bucketTaskBoardFormatRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BucketTaskBoardFormatRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BucketTaskBoardFormatRequestBuilderGetQueryParameters {
        return new BucketTaskBoardFormatRequestBuilderGetQueryParameters($expand, $select);
    }

}
