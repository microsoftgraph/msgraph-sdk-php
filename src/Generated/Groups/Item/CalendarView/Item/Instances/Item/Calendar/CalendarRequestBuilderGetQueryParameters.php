<?php

namespace Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\Instances\Item\Calendar;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The calendar that contains the event. Navigation property. Read-only.
*/
class CalendarRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new CalendarRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
