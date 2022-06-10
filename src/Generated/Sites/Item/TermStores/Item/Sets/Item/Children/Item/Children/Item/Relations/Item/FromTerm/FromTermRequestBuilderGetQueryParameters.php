<?php

namespace Microsoft\Graph\Sites\Item\TermStores\Item\Sets\Item\Children\Item\Children\Item\Relations\Item\FromTerm;

use Microsoft\Kiota\Abstractions\QueryParameter;

class FromTermRequestBuilderGetQueryParameters 
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
