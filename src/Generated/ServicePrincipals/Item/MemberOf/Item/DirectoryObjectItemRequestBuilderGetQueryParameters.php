<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Roles that this service principal is a member of. HTTP Methods: GET Read-only. Nullable. Supports $expand.
*/
class DirectoryObjectItemRequestBuilderGetQueryParameters 
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
