<?php

namespace Microsoft\Graph\Generated\Users\Item\CalendarGroups\Item\Calendars\Item\CalendarView\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The calendar view for the calendar. Navigation property. Read-only.
*/
class EventItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new EventItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
