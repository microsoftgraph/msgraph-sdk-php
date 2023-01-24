<?php

namespace Microsoft\Graph\Generated\Sites\Item\TermStore\Sets\Item\ParentGroup\Sets\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * All sets under the group in a term [store].
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
