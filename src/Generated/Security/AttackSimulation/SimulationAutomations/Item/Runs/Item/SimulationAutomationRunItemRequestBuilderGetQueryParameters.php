<?php

namespace Microsoft\Graph\Generated\Security\AttackSimulation\SimulationAutomations\Item\Runs\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of simulation automation runs.
*/
class SimulationAutomationRunItemRequestBuilderGetQueryParameters 
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
