<?php

namespace Microsoft\Graph\Generated\Security\AttackSimulation\SimulationAutomations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents simulation automation created to run on a tenant.
*/
class SimulationAutomationItemRequestBuilderGetQueryParameters 
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
