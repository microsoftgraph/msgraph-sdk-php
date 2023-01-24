<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CalendarView\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The set of appointments of this business in a specified date range. Read-only. Nullable.
*/
class BookingAppointmentItemRequestBuilderGetQueryParameters 
{
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
    
}
