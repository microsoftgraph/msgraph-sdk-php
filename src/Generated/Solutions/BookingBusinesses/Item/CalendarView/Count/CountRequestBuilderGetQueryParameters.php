<?php

namespace Microsoft\\Graph\\Generated\Solutions\BookingBusinesses\Item\CalendarView\Count;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the number of the resource
*/
class CountRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $end The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
    */
    public ?string $end = null;
    
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @var string|null $start The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
    */
    public ?string $start = null;
    
    /**
     * Instantiates a new CountRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $end The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param string|null $start The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
    */
    public function __construct(?string $end = null, ?string $filter = null, ?string $search = null, ?string $start = null) {
        $this->end = $end;
        $this->filter = $filter;
        $this->search = $search;
        $this->start = $start;
    }

}
