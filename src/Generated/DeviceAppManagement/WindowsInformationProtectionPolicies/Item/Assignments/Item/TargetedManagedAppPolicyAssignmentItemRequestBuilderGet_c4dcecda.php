<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\WindowsInformationProtectionPolicies\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: TargetedManagedAppPolicyAssignmentItemRequestBuilderGetRequestConfiguration
*/
class TargetedManagedAppPolicyAssignmentItemRequestBuilderGet_c4dcecda extends BaseRequestConfiguration 
{
    /**
     * @var TargetedManagedAppPolicyAssignmentItemRequestBuilderGet_61e3e53b|null $queryParameters Request query parameters
    */
    public ?TargetedManagedAppPolicyAssignmentItemRequestBuilderGet_61e3e53b $queryParameters = null;
    
    /**
     * Instantiates a new TargetedManagedAppPolicyAssignmentItemRequestBuilderGet_c4dcecda and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TargetedManagedAppPolicyAssignmentItemRequestBuilderGet_61e3e53b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TargetedManagedAppPolicyAssignmentItemRequestBuilderGet_61e3e53b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TargetedManagedAppPolicyAssignmentItemRequestBuilderGet_61e3e53b.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TargetedManagedAppPolicyAssignmentItemRequestBuilderGet_61e3e53b
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TargetedManagedAppPolicyAssignmentItemRequestBuilderGet_61e3e53b {
        return new TargetedManagedAppPolicyAssignmentItemRequestBuilderGet_61e3e53b($expand, $select);
    }

}
