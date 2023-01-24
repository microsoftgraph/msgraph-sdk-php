<?php

namespace Microsoft\Graph\Generated\Me\Calendars\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user's calendars. Read-only. Nullable.
*/
class CalendarItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
