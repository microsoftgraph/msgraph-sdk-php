<?php

namespace Microsoft\Graph\Me\CalendarGroups\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class CalendarGroupItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
