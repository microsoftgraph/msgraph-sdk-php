<?php

namespace Microsoft\Graph\Generated\Groups\Item\Planner\Plans\Item\Tasks\Item\BucketTaskBoardFormat;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BucketTaskBoardFormatRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var BucketTaskBoardFormatRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BucketTaskBoardFormatRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new bucketTaskBoardFormatRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BucketTaskBoardFormatRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): BucketTaskBoardFormatRequestBuilderGetQueryParameters {
        return new BucketTaskBoardFormatRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new bucketTaskBoardFormatRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param BucketTaskBoardFormatRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BucketTaskBoardFormatRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
