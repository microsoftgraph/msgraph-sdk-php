<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleEligibilitySchedules\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the schedule for a role eligibility operation. Original name: UnifiedRoleEligibilityScheduleItemRequestBuilderGetQueryParameters
*/
class UnifiedRoleEligibilityScheduleItemRequestBuilderGetQuer_1b3104d1 
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
     * Instantiates a new UnifiedRoleEligibilityScheduleItemRequestBuilderGetQuer_1b3104d1 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
