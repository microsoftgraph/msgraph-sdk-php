<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AccessPackageAssignmentPolicyItemRequestBuilderGetRequestConfiguration
*/
class AccessPackageAssignmentPolicyItemRequestBuilderGetReque_4d932dbc extends BaseRequestConfiguration 
{
    /**
     * @var AccessPackageAssignmentPolicyItemRequestBuilderGetQuery_a54c5f6a|null $queryParameters Request query parameters
    */
    public ?AccessPackageAssignmentPolicyItemRequestBuilderGetQuery_a54c5f6a $queryParameters = null;
    
    /**
     * Instantiates a new AccessPackageAssignmentPolicyItemRequestBuilderGetReque_4d932dbc and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessPackageAssignmentPolicyItemRequestBuilderGetQuery_a54c5f6a|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessPackageAssignmentPolicyItemRequestBuilderGetQuery_a54c5f6a $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessPackageAssignmentPolicyItemRequestBuilderGetQuery_a54c5f6a.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessPackageAssignmentPolicyItemRequestBuilderGetQuery_a54c5f6a
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessPackageAssignmentPolicyItemRequestBuilderGetQuery_a54c5f6a {
        return new AccessPackageAssignmentPolicyItemRequestBuilderGetQuery_a54c5f6a($expand, $select);
    }

}
