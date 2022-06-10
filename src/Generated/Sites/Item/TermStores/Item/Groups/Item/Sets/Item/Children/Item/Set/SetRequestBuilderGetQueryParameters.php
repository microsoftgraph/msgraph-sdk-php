<?php

namespace Microsoft\Graph\Sites\Item\TermStores\Item\Groups\Item\Sets\Item\Children\Item\Set;

use Microsoft\Kiota\Abstractions\QueryParameter;

class SetRequestBuilderGetQueryParameters 
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
