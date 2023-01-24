<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleDefinitions\Item\InheritsPermissionsFrom\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only collection of role definitions that the given role definition inherits from. Only Azure AD built-in roles (isBuiltIn is true) support this attribute. Supports $expand.
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
