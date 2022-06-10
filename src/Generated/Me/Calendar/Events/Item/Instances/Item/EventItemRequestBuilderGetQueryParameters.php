<?php

namespace Microsoft\Graph\Me\Calendar\Events\Item\Instances\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class EventItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
