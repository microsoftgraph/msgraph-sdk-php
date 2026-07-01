<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\ScheduledActionsForRule\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of scheduled action per rule for this compliance policy. This is a required property when creating any individual per-platform compliance policies. Original name: DeviceComplianceScheduledActionForRuleItemRequestBuilderGetQueryParameters
*/
class DeviceComplianceScheduledActionForRuleItemRequestBuilde_0a52da58 
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
     * Instantiates a new DeviceComplianceScheduledActionForRuleItemRequestBuilde_0a52da58 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
