<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Permissions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The permissions associated with the site. Nullable.
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
