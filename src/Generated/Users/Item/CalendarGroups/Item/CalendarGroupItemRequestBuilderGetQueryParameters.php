<?php

namespace Microsoft\Graph\Generated\Users\Item\CalendarGroups\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user's calendar groups. Read-only. Nullable.
*/
class CalendarGroupItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new CalendarGroupItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
