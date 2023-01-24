<?php

namespace Microsoft\Graph\Generated\Sites\Item\TermStores\Item\Groups\Item\Sets\Item\Relations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Indicates which terms have been pinned or reused directly under the set.
*/
class RelationItemRequestBuilderGetQueryParameters 
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
