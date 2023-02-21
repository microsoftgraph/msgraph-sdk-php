<?php

namespace Microsoft\Graph\Generated\Me\Planner\Plans\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlannerPlanItemRequestBuilderGetRequestConfiguration 
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
     * @var PlannerPlanItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlannerPlanItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PlannerPlanItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PlannerPlanItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): PlannerPlanItemRequestBuilderGetQueryParameters {
        return new PlannerPlanItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new PlannerPlanItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param PlannerPlanItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PlannerPlanItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
