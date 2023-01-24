<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\AppRoleAssignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * App role assignment for another app or service, granted to this service principal. Supports $expand.
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
