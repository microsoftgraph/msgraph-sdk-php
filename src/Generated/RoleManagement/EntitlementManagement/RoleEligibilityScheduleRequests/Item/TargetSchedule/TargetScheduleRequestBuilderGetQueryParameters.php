<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\Item\TargetSchedule;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The schedule for a role eligibility that is referenced through the targetScheduleId property. Supports $expand.
*/
class TargetScheduleRequestBuilderGetQueryParameters 
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
