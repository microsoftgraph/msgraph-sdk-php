<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentScheduleRequests\Item\DirectoryScope;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The directory object that is the scope of the assignment. Read-only. Supports $expand.
*/
class DirectoryScopeRequestBuilderGetQueryParameters 
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
