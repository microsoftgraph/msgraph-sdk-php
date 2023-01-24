<?php

namespace Microsoft\Graph\Generated\Sites\Item\TermStore\Sets\Item\ParentGroup\Sets\Item\Children\Item\Children\Item\Relations\Item\ToTerm;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The to [term] of the relation. The term to which the relationship is defined.
*/
class ToTermRequestBuilderGetQueryParameters 
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
