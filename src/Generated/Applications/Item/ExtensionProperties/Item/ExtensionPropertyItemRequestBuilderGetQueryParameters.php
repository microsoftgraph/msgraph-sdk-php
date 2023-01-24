<?php

namespace Microsoft\Graph\Generated\Applications\Item\ExtensionProperties\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0).
*/
class ExtensionPropertyItemRequestBuilderGetQueryParameters 
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
