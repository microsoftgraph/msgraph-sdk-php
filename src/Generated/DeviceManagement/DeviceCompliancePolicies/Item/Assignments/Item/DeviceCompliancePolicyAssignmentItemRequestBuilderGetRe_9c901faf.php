<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceCompliancePolicyAssignmentItemRequestBuilderGetRequestConfiguration
*/
class DeviceCompliancePolicyAssignmentItemRequestBuilderGetRe_9c901faf extends BaseRequestConfiguration 
{
    /**
     * @var DeviceCompliancePolicyAssignmentItemRequestBuilderGetQu_e6892ff6|null $queryParameters Request query parameters
    */
    public ?DeviceCompliancePolicyAssignmentItemRequestBuilderGetQu_e6892ff6 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceCompliancePolicyAssignmentItemRequestBuilderGetRe_9c901faf and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceCompliancePolicyAssignmentItemRequestBuilderGetQu_e6892ff6|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceCompliancePolicyAssignmentItemRequestBuilderGetQu_e6892ff6 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceCompliancePolicyAssignmentItemRequestBuilderGetQu_e6892ff6.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceCompliancePolicyAssignmentItemRequestBuilderGetQu_e6892ff6
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceCompliancePolicyAssignmentItemRequestBuilderGetQu_e6892ff6 {
        return new DeviceCompliancePolicyAssignmentItemRequestBuilderGetQu_e6892ff6($expand, $select);
    }

}
