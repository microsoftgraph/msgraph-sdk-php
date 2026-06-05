<?php

namespace Microsoft\Graph\Generated\Policies\RoleManagementPolicyAssignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UnifiedRoleManagementPolicyAssignmentItemRequestBuilderGetRequestConfiguration
*/
class UnifiedRoleManagementPolicyAssignmentItemRequestBuilder_07248b89 extends BaseRequestConfiguration 
{
    /**
     * @var UnifiedRoleManagementPolicyAssignmentItemRequestBuilder_d2156613|null $queryParameters Request query parameters
    */
    public ?UnifiedRoleManagementPolicyAssignmentItemRequestBuilder_d2156613 $queryParameters = null;
    
    /**
     * Instantiates a new UnifiedRoleManagementPolicyAssignmentItemRequestBuilder_07248b89 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnifiedRoleManagementPolicyAssignmentItemRequestBuilder_d2156613|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnifiedRoleManagementPolicyAssignmentItemRequestBuilder_d2156613 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnifiedRoleManagementPolicyAssignmentItemRequestBuilder_d2156613.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnifiedRoleManagementPolicyAssignmentItemRequestBuilder_d2156613
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnifiedRoleManagementPolicyAssignmentItemRequestBuilder_d2156613 {
        return new UnifiedRoleManagementPolicyAssignmentItemRequestBuilder_d2156613($expand, $select);
    }

}
