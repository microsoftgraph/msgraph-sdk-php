<?php

namespace Microsoft\Graph\Generated\Me\Planner\Plans\Item\Buckets\Item\Tasks\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only. Nullable. The collection of tasks in the bucket.
*/
class PlannerTaskItemRequestBuilderGetQueryParameters 
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
