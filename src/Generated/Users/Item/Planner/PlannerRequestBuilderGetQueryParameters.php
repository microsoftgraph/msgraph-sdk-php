<?php

namespace Microsoft\Graph\Generated\Users\Item\Planner;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Entry-point to the Planner resource that might exist for a user. Read-only.
*/
class PlannerRequestBuilderGetQueryParameters 
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
