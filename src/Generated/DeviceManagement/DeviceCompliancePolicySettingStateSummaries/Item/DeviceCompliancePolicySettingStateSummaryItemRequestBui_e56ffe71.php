<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicySettingStateSummaries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceCompliancePolicySettingStateSummaryItemRequestBuilderGetRequestConfiguration
*/
class DeviceCompliancePolicySettingStateSummaryItemRequestBui_e56ffe71 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceCompliancePolicySettingStateSummaryItemRequestBui_2bc3e7b3|null $queryParameters Request query parameters
    */
    public ?DeviceCompliancePolicySettingStateSummaryItemRequestBui_2bc3e7b3 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceCompliancePolicySettingStateSummaryItemRequestBui_e56ffe71 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceCompliancePolicySettingStateSummaryItemRequestBui_2bc3e7b3|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceCompliancePolicySettingStateSummaryItemRequestBui_2bc3e7b3 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceCompliancePolicySettingStateSummaryItemRequestBui_2bc3e7b3.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceCompliancePolicySettingStateSummaryItemRequestBui_2bc3e7b3
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceCompliancePolicySettingStateSummaryItemRequestBui_2bc3e7b3 {
        return new DeviceCompliancePolicySettingStateSummaryItemRequestBui_2bc3e7b3($expand, $select);
    }

}
