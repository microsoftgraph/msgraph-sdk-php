<?php

namespace Microsoft\Graph\Me\Events\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class EventItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
