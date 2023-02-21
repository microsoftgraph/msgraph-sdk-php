<?php

namespace Microsoft\Graph\Generated\Groups\Item\Planner\Plans\Item\Buckets\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlannerBucketItemRequestBuilderGetRequestConfiguration 
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
     * @var PlannerBucketItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlannerBucketItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PlannerBucketItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PlannerBucketItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): PlannerBucketItemRequestBuilderGetQueryParameters {
        return new PlannerBucketItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new PlannerBucketItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param PlannerBucketItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PlannerBucketItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
