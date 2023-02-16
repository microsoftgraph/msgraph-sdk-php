<?php

namespace Microsoft\Graph\Generated\Security\AttackSimulation\SimulationAutomations\Item\Runs\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SimulationAutomationRunItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var SimulationAutomationRunItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SimulationAutomationRunItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SimulationAutomationRunItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SimulationAutomationRunItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): SimulationAutomationRunItemRequestBuilderGetQueryParameters {
        return new SimulationAutomationRunItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new SimulationAutomationRunItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SimulationAutomationRunItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SimulationAutomationRunItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
