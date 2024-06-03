<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Schedule\SchedulingGroups\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The logical grouping of users in the schedule (usually by role).
*/
class SchedulingGroupItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new SchedulingGroupItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
