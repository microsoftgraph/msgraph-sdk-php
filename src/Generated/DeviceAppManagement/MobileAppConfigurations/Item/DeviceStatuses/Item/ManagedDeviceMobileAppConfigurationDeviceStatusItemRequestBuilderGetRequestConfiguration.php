<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\DeviceStatuses\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilderGetQueryParameters {
        return new ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
