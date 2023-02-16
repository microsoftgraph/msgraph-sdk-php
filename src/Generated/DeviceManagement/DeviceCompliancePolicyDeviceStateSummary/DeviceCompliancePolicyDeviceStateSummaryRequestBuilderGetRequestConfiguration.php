<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicyDeviceStateSummary;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceCompliancePolicyDeviceStateSummaryRequestBuilderGetRequestConfiguration 
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
     * @var DeviceCompliancePolicyDeviceStateSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceCompliancePolicyDeviceStateSummaryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new deviceCompliancePolicyDeviceStateSummaryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceCompliancePolicyDeviceStateSummaryRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DeviceCompliancePolicyDeviceStateSummaryRequestBuilderGetQueryParameters {
        return new DeviceCompliancePolicyDeviceStateSummaryRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new deviceCompliancePolicyDeviceStateSummaryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DeviceCompliancePolicyDeviceStateSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceCompliancePolicyDeviceStateSummaryRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
