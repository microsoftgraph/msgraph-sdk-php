<?php

namespace Microsoft\Graph\DeviceManagement\DeviceCompliancePolicySettingStateSummaries\Item\DeviceComplianceSettingStates\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class DeviceComplianceSettingStateItemRequestBuilderGetQueryParameters 
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
