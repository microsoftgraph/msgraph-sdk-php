<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStores\Item\Sets\Item\ParentGroup\Sets\Item\Terms\Item\Children\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Children of current term.
*/
class TermItemRequestBuilderGetQueryParameters 
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
