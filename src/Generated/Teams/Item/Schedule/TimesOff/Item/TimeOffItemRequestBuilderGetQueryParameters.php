<?php

namespace Microsoft\Graph\Generated\Teams\Item\Schedule\TimesOff\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The instances of times off in the schedule.
*/
class TimeOffItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new TimeOffItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
