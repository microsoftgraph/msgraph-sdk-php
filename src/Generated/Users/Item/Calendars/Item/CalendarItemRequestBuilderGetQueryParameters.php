<?php

namespace Microsoft\Graph\Generated\Users\Item\Calendars\Item;

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
    
    /**
     * Instantiates a new CalendarItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
