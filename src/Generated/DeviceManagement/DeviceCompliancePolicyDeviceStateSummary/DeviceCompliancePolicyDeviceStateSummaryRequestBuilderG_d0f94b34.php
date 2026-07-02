<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicyDeviceStateSummary;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: deviceCompliancePolicyDeviceStateSummaryRequestBuilderGetRequestConfiguration
*/
class DeviceCompliancePolicyDeviceStateSummaryRequestBuilderG_d0f94b34 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceCompliancePolicyDeviceStateSummaryRequestBuilderG_660fdc13|null $queryParameters Request query parameters
    */
    public ?DeviceCompliancePolicyDeviceStateSummaryRequestBuilderG_660fdc13 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceCompliancePolicyDeviceStateSummaryRequestBuilderG_d0f94b34 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceCompliancePolicyDeviceStateSummaryRequestBuilderG_660fdc13|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceCompliancePolicyDeviceStateSummaryRequestBuilderG_660fdc13 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceCompliancePolicyDeviceStateSummaryRequestBuilderG_660fdc13.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceCompliancePolicyDeviceStateSummaryRequestBuilderG_660fdc13
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceCompliancePolicyDeviceStateSummaryRequestBuilderG_660fdc13 {
        return new DeviceCompliancePolicyDeviceStateSummaryRequestBuilderG_660fdc13($expand, $select);
    }

}
