<?php

namespace Microsoft\Graph\Generated\Security\AttackSimulation\SimulationAutomations\Item\Runs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SimulationAutomationRunItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SimulationAutomationRunItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SimulationAutomationRunItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SimulationAutomationRunItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SimulationAutomationRunItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SimulationAutomationRunItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SimulationAutomationRunItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SimulationAutomationRunItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SimulationAutomationRunItemRequestBuilderGetQueryParameters {
        return new SimulationAutomationRunItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
