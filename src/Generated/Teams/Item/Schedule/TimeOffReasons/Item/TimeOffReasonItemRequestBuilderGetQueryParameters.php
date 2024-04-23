<?php

namespace Microsoft\Graph\Generated\Teams\Item\Schedule\TimeOffReasons\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The set of reasons for a time off in the schedule.
*/
class TimeOffReasonItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new TimeOffReasonItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
