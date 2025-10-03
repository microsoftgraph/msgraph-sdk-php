<?php

namespace Microsoft\\Graph\\Generated\Solutions\BookingBusinesses\Item\CalendarView\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The set of appointments of this business in a specified date range. Read-only. Nullable.
*/
class BookingAppointmentItemRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $end The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
    */
    public ?string $end = null;
    
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
    
    /**
     * @var string|null $start The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
    */
    public ?string $start = null;
    
    /**
     * Instantiates a new BookingAppointmentItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $end The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @param string|null $start The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
    */
    public function __construct(?string $end = null, ?array $expand = null, ?array $select = null, ?string $start = null) {
        $this->end = $end;
        $this->expand = $expand;
        $this->select = $select;
        $this->start = $start;
    }

}
