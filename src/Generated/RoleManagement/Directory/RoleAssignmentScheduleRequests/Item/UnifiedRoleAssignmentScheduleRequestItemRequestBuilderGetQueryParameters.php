<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentScheduleRequests\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Requests for active role assignments to principals through PIM.
*/
class UnifiedRoleAssignmentScheduleRequestItemRequestBuilderGetQueryParameters 
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
