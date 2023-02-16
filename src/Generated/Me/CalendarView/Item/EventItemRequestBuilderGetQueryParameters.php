<?php

namespace Microsoft\Graph\Generated\Me\CalendarView\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The calendar view for the calendar. Read-only. Nullable.
*/
class EventItemRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $endDateTime The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
    */
    public ?string $endDateTime = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * @var string|null $startDateTime The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
    */
    public ?string $startDateTime = null;
    
    /**
     * Instantiates a new EventItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $endDateTime The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
     * @param array<string>|null $select Select properties to be returned
     * @param string|null $startDateTime The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
    */
    public function __construct(?string $endDateTime = null, ?array $select = null, ?string $startDateTime = null) {
        $this->endDateTime = $endDateTime;
        $this->select = $select;
        $this->startDateTime = $startDateTime;
    }

}
