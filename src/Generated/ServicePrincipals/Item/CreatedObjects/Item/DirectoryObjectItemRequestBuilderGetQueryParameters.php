<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\CreatedObjects\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Directory objects created by this service principal. Read-only. Nullable.
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
