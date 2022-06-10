<?php

namespace Microsoft\Graph\DeviceManagement\DeviceCompliancePolicies\Item\ScheduledActionsForRule\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

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
