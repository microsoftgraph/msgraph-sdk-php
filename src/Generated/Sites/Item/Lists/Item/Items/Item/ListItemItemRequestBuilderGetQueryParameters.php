<?php

namespace Microsoft\Graph\Generated\Sites\Item\Lists\Item\Items\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * All items contained in the list.
*/
class ListItemItemRequestBuilderGetQueryParameters 
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
