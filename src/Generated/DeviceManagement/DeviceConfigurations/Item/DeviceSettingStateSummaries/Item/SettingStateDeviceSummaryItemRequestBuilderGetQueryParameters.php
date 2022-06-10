<?php

namespace Microsoft\Graph\DeviceManagement\DeviceConfigurations\Item\DeviceSettingStateSummaries\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class SettingStateDeviceSummaryItemRequestBuilderGetQueryParameters 
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
