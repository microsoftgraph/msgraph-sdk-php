<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\AppRoleAssignedTo\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * App role assignments for this app or service, granted to users, groups, and other service principals. Supports $expand.
*/
class AppRoleAssignmentItemRequestBuilderGetQueryParameters 
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
