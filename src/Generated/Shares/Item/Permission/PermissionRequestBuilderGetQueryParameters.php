<?php

namespace Microsoft\Graph\Generated\Shares\Item\Permission;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Used to access the permission representing the underlying sharing link
*/
class PermissionRequestBuilderGetQueryParameters 
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
