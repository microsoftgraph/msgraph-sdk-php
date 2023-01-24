<?php

namespace Microsoft\Graph\Generated\Teams\Item\Schedule\SwapShiftsChangeRequests\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get swapShiftsChangeRequests from teams
*/
class SwapShiftsChangeRequestItemRequestBuilderGetQueryParameters 
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
