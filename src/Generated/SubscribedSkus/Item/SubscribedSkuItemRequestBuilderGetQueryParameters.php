<?php

namespace Microsoft\Graph\SubscribedSkus\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class SubscribedSkuItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
