<?php

namespace Microsoft\\Graph\\Generated\DeviceManagement\DeviceCompliancePolicies\Item\DeviceSettingStateSummaries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SettingStateDeviceSummaryItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SettingStateDeviceSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SettingStateDeviceSummaryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SettingStateDeviceSummaryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SettingStateDeviceSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SettingStateDeviceSummaryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SettingStateDeviceSummaryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SettingStateDeviceSummaryItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SettingStateDeviceSummaryItemRequestBuilderGetQueryParameters {
        return new SettingStateDeviceSummaryItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
