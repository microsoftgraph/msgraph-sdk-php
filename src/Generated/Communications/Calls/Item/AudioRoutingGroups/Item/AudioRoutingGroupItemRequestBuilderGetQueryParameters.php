<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\AudioRoutingGroups\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get audioRoutingGroups from communications
*/
class AudioRoutingGroupItemRequestBuilderGetQueryParameters 
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
