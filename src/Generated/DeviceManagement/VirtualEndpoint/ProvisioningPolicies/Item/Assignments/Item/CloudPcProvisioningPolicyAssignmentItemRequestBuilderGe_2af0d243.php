<?php

namespace Microsoft\Graph\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CloudPcProvisioningPolicyAssignmentItemRequestBuilderGetRequestConfiguration
*/
class CloudPcProvisioningPolicyAssignmentItemRequestBuilderGe_2af0d243 extends BaseRequestConfiguration 
{
    /**
     * @var CloudPcProvisioningPolicyAssignmentItemRequestBuilderGe_f8c1f4a1|null $queryParameters Request query parameters
    */
    public ?CloudPcProvisioningPolicyAssignmentItemRequestBuilderGe_f8c1f4a1 $queryParameters = null;
    
    /**
     * Instantiates a new CloudPcProvisioningPolicyAssignmentItemRequestBuilderGe_2af0d243 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CloudPcProvisioningPolicyAssignmentItemRequestBuilderGe_f8c1f4a1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CloudPcProvisioningPolicyAssignmentItemRequestBuilderGe_f8c1f4a1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CloudPcProvisioningPolicyAssignmentItemRequestBuilderGe_f8c1f4a1.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CloudPcProvisioningPolicyAssignmentItemRequestBuilderGe_f8c1f4a1
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CloudPcProvisioningPolicyAssignmentItemRequestBuilderGe_f8c1f4a1 {
        return new CloudPcProvisioningPolicyAssignmentItemRequestBuilderGe_f8c1f4a1($expand, $select);
    }

}
