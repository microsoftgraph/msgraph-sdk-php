<?php

namespace Microsoft\Graph\Users\Item\Calendars\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class CalendarItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
