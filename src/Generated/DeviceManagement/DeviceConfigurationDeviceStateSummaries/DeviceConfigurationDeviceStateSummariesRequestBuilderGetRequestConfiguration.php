<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurationDeviceStateSummaries;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceConfigurationDeviceStateSummariesRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var DeviceConfigurationDeviceStateSummariesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceConfigurationDeviceStateSummariesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new deviceConfigurationDeviceStateSummariesRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceConfigurationDeviceStateSummariesRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DeviceConfigurationDeviceStateSummariesRequestBuilderGetQueryParameters {
        return new DeviceConfigurationDeviceStateSummariesRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new deviceConfigurationDeviceStateSummariesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DeviceConfigurationDeviceStateSummariesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceConfigurationDeviceStateSummariesRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
