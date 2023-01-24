<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStores\Item\Sets\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection of all sets available in the term store. This relationship can only be used to load a specific term set.
*/
class SetItemRequestBuilderGetQueryParameters 
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
