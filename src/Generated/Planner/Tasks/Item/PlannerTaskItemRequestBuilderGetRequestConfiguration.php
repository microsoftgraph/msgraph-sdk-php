<?php

namespace Microsoft\Graph\Generated\Planner\Tasks\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlannerTaskItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PlannerTaskItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlannerTaskItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PlannerTaskItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PlannerTaskItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PlannerTaskItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PlannerTaskItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PlannerTaskItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PlannerTaskItemRequestBuilderGetQueryParameters {
        return new PlannerTaskItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
