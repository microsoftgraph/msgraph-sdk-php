<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurationDeviceStateSummaries;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: deviceConfigurationDeviceStateSummariesRequestBuilderGetRequestConfiguration
*/
class DeviceConfigurationDeviceStateSummariesRequestBuilderGe_92f5d133 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceConfigurationDeviceStateSummariesRequestBuilderGe_ade8ea73|null $queryParameters Request query parameters
    */
    public ?DeviceConfigurationDeviceStateSummariesRequestBuilderGe_ade8ea73 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceConfigurationDeviceStateSummariesRequestBuilderGe_92f5d133 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceConfigurationDeviceStateSummariesRequestBuilderGe_ade8ea73|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceConfigurationDeviceStateSummariesRequestBuilderGe_ade8ea73 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceConfigurationDeviceStateSummariesRequestBuilderGe_ade8ea73.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceConfigurationDeviceStateSummariesRequestBuilderGe_ade8ea73
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceConfigurationDeviceStateSummariesRequestBuilderGe_ade8ea73 {
        return new DeviceConfigurationDeviceStateSummariesRequestBuilderGe_ade8ea73($expand, $select);
    }

}
