<?php

namespace Microsoft\Graph\Generated\Groups\Item\Planner\Plans\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlannerPlanItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PlannerPlanItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlannerPlanItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PlannerPlanItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PlannerPlanItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PlannerPlanItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PlannerPlanItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PlannerPlanItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PlannerPlanItemRequestBuilderGetQueryParameters {
        return new PlannerPlanItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
