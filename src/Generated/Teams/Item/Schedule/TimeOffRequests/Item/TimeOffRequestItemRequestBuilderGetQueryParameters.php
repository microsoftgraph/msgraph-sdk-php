<?php

namespace Microsoft\Graph\Generated\Teams\Item\Schedule\TimeOffRequests\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The time off requests in the schedule.
*/
class TimeOffRequestItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new TimeOffRequestItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
