<?php

namespace Microsoft\Graph\Generated\Sites\Item\Items\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Used to address any item contained in this site. This collection can't be enumerated.
*/
class BaseItemItemRequestBuilderGetQueryParameters 
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
