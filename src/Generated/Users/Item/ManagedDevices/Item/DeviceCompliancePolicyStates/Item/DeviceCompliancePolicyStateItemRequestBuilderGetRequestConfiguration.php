<?php

namespace Microsoft\\Graph\\Generated\Users\Item\ManagedDevices\Item\DeviceCompliancePolicyStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceCompliancePolicyStateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceCompliancePolicyStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceCompliancePolicyStateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceCompliancePolicyStateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceCompliancePolicyStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceCompliancePolicyStateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceCompliancePolicyStateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceCompliancePolicyStateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceCompliancePolicyStateItemRequestBuilderGetQueryParameters {
        return new DeviceCompliancePolicyStateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
