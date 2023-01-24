<?php

namespace Microsoft\Graph\Generated\Teams\Item\Schedule\OpenShifts\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get openShifts from teams
*/
class OpenShiftItemRequestBuilderGetQueryParameters 
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
