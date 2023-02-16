<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\Shifts\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The shifts in the schedule.
*/
class ShiftItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new ShiftItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
