<?php

namespace Microsoft\Graph\Generated\Users\Item\ScopedRoleMemberOf\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get scopedRoleMemberOf from users
*/
class ScopedRoleMembershipItemRequestBuilderGetQueryParameters 
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
