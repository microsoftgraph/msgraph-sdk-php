<?php

namespace Microsoft\Graph\Generated\Security\AttackSimulation;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AttackSimulationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AttackSimulationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AttackSimulationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new attackSimulationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AttackSimulationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AttackSimulationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new attackSimulationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AttackSimulationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AttackSimulationRequestBuilderGetQueryParameters {
        return new AttackSimulationRequestBuilderGetQueryParameters($expand, $select);
    }

}
