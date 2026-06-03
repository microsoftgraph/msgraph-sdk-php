<?php

namespace Microsoft\Graph\Generated\Policies\RoleManagementPolicies\Item\EffectiveRules\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of effective rules like approval rules and expiration rules evaluated based on inherited referenced rules. For example, if there is a tenant-wide policy to enforce enabling an approval rule, the effective rule will be to enable approval even if the policy has a rule to disable approval. Supports $expand. Original name: UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQueryParameters
*/
class UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQue_88628048 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new UnifiedRoleManagementPolicyRuleItemRequestBuilderGetQue_88628048 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
