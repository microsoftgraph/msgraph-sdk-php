<?php

namespace Microsoft\Graph\Generated\Planner\Buckets\Item\Tasks\Item\AssignedToTaskBoardFormat;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the properties and relationships of a **plannerAssignedToTaskBoardTaskFormat** object.
*/
class AssignedToTaskBoardFormatRequestBuilderGetQueryParameters 
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
