<?php

namespace Microsoft\Graph\Teams\Item\Schedule\SchedulingGroups\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class SchedulingGroupItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
