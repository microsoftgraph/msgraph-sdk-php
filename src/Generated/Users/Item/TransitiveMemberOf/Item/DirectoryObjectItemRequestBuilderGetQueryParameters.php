<?php

namespace Microsoft\Graph\Generated\Users\Item\TransitiveMemberOf\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The groups, including nested groups, and directory roles that a user is a member of. Nullable.
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
