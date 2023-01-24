<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\ScheduledActionsForRule\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of scheduled action per rule for this compliance policy. This is a required property when creating any individual per-platform compliance policies.
*/
class DeviceComplianceScheduledActionForRuleItemRequestBuilderGetQueryParameters 
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
