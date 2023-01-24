<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleDefinitions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
*/
class UnifiedRoleDefinitionItemRequestBuilderGetQueryParameters 
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
