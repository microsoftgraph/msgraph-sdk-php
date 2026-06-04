<?php

namespace Microsoft\Graph\Generated\Policies\RoleManagementPolicies\Item\Rules\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UnifiedRoleManagementPolicyRuleItemRequestBuilderGetRequestConfiguration
*/
class UnifiedRoleManagementPolicyRuleItemRequestBuilderGetReq_0c22dde7 extends BaseRequestConfiguration 
{
    /**
     * @var UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQue_88628048|null $queryParameters Request query parameters
    */
    public ?UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQue_88628048 $queryParameters = null;
    
    /**
     * Instantiates a new UnifiedRoleManagementPolicyRuleItemRequestBuilderGetReq_0c22dde7 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQue_88628048|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQue_88628048 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQue_88628048.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQue_88628048
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQue_88628048 {
        return new UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQue_88628048($expand, $select);
    }

}
