<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\DeviceStatuses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilderGetRequestConfiguration
*/
class ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_bcbcff21 extends BaseRequestConfiguration 
{
    /**
     * @var ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_0ed851f4|null $queryParameters Request query parameters
    */
    public ?ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_0ed851f4 $queryParameters = null;
    
    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_bcbcff21 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_0ed851f4|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_0ed851f4 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_0ed851f4.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_0ed851f4
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_0ed851f4 {
        return new ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_0ed851f4($expand, $select);
    }

}
