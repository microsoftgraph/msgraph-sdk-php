<?php

namespace Microsoft\Graph\Generated\Security\AttackSimulation\SimulationAutomations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SimulationAutomationItemRequestBuilderGetRequestConfiguration 
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
     * @var SimulationAutomationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SimulationAutomationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SimulationAutomationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SimulationAutomationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SimulationAutomationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SimulationAutomationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SimulationAutomationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SimulationAutomationItemRequestBuilderGetQueryParameters {
        return new SimulationAutomationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
