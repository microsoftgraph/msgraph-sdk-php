<?php

namespace Microsoft\Graph\Generated\Drive\Root\ListItem\Versions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of previous versions of the list item.
*/
class ListItemVersionItemRequestBuilderGetQueryParameters 
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
