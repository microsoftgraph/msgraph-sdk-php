<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\WindowsInformationProtectionPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsInformationProtectionPolicyItemRequestBuilderGetRequestConfiguration
*/
class WindowsInformationProtectionPolicyItemRequestBuilderGet_a2790c14 extends BaseRequestConfiguration 
{
    /**
     * @var WindowsInformationProtectionPolicyItemRequestBuilderGet_1d665e64|null $queryParameters Request query parameters
    */
    public ?WindowsInformationProtectionPolicyItemRequestBuilderGet_1d665e64 $queryParameters = null;
    
    /**
     * Instantiates a new WindowsInformationProtectionPolicyItemRequestBuilderGet_a2790c14 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsInformationProtectionPolicyItemRequestBuilderGet_1d665e64|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsInformationProtectionPolicyItemRequestBuilderGet_1d665e64 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsInformationProtectionPolicyItemRequestBuilderGet_1d665e64.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsInformationProtectionPolicyItemRequestBuilderGet_1d665e64
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsInformationProtectionPolicyItemRequestBuilderGet_1d665e64 {
        return new WindowsInformationProtectionPolicyItemRequestBuilderGet_1d665e64($expand, $select);
    }

}
