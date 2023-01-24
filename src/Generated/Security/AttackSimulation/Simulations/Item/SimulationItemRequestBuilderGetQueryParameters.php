<?php

namespace Microsoft\Graph\Generated\Security\AttackSimulation\Simulations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents an attack simulation training campaign in a tenant.
*/
class SimulationItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
