<?php

namespace Microsoft\Graph\Generated\Users\Item\Drives\Item\Root\Permissions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The set of permissions for the item. Read-only. Nullable.
*/
class PermissionItemRequestBuilderGetQueryParameters 
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
