<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicySettingStateSummaries\Item\DeviceComplianceSettingStates\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceComplianceSettingStateItemRequestBuilderGetRequestConfiguration 
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
     * @var DeviceComplianceSettingStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceComplianceSettingStateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceComplianceSettingStateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceComplianceSettingStateItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DeviceComplianceSettingStateItemRequestBuilderGetQueryParameters {
        return new DeviceComplianceSettingStateItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new DeviceComplianceSettingStateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DeviceComplianceSettingStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceComplianceSettingStateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
