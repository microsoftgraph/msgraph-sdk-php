<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Resource to grant access to users or groups.
*/
class UnifiedRoleAssignmentItemRequestBuilderGetQueryParameters 
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
