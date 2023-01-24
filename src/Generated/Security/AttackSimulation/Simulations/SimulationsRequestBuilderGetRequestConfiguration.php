<?php

namespace Microsoft\Graph\Generated\Security\AttackSimulation\Simulations;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SimulationsRequestBuilderGetRequestConfiguration 
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
     * @var SimulationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SimulationsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
