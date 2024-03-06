<?php

namespace Microsoft\Graph\Generated\Users\Item\Planner;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlannerRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PlannerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlannerRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PlannerRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PlannerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PlannerRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PlannerRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PlannerRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PlannerRequestBuilderGetQueryParameters {
        return new PlannerRequestBuilderGetQueryParameters($expand, $select);
    }

}
