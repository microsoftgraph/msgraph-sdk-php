<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\ScheduledActionsForRule\Item\ScheduledActionConfigurations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of scheduled action configurations for this compliance policy. Compliance policy must have one and only one block scheduled action.
*/
class DeviceComplianceActionItemItemRequestBuilderGetQueryParameters 
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
