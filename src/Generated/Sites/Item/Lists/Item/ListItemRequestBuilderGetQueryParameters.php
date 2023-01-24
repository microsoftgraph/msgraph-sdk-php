<?php

namespace Microsoft\Graph\Generated\Sites\Item\Lists\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of lists under this site.
*/
class ListItemRequestBuilderGetQueryParameters 
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
