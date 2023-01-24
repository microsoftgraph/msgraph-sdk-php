<?php

namespace Microsoft\Graph\Generated\Policies\RoleManagementPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Specifies the various policies associated with scopes and roles.
*/
class UnifiedRoleManagementPolicyItemRequestBuilderGetQueryParameters 
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
    
}
