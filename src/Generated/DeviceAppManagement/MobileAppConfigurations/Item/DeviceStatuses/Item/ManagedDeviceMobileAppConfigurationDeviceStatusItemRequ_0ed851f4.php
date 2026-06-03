<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\DeviceStatuses\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of ManagedDeviceMobileAppConfigurationDeviceStatus. Original name: ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilderGetQueryParameters
*/
class ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_0ed851f4 
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
     * Instantiates a new ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_0ed851f4 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
