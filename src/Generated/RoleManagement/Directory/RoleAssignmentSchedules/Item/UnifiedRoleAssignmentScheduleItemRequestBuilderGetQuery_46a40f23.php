<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentSchedules\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the schedule for an active role assignment operation. Original name: UnifiedRoleAssignmentScheduleItemRequestBuilderGetQueryParameters
*/
class UnifiedRoleAssignmentScheduleItemRequestBuilderGetQuery_46a40f23 
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
    
    /**
     * Instantiates a new UnifiedRoleAssignmentScheduleItemRequestBuilderGetQuery_46a40f23 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
