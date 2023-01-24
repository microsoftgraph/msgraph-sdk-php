<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStore\Groups\Item\Sets\Item\Terms\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * All the terms under the set.
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
