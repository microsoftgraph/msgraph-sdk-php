<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\DeviceStatuses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceConfigurationDeviceStatusItemRequestBuilderGetRequestConfiguration
*/
class DeviceConfigurationDeviceStatusItemRequestBuilderGetReq_19f8d81b extends BaseRequestConfiguration 
{
    /**
     * @var DeviceConfigurationDeviceStatusItemRequestBuilderGetQue_fe1036f1|null $queryParameters Request query parameters
    */
    public ?DeviceConfigurationDeviceStatusItemRequestBuilderGetQue_fe1036f1 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceConfigurationDeviceStatusItemRequestBuilderGetReq_19f8d81b and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceConfigurationDeviceStatusItemRequestBuilderGetQue_fe1036f1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceConfigurationDeviceStatusItemRequestBuilderGetQue_fe1036f1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceConfigurationDeviceStatusItemRequestBuilderGetQue_fe1036f1.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceConfigurationDeviceStatusItemRequestBuilderGetQue_fe1036f1
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceConfigurationDeviceStatusItemRequestBuilderGetQue_fe1036f1 {
        return new DeviceConfigurationDeviceStatusItemRequestBuilderGetQue_fe1036f1($expand, $select);
    }

}
