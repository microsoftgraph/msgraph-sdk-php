<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Analytics\ItemActivityStats\Item\Activities\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Exposes the itemActivities represented in this itemActivityStat resource.
*/
class ItemActivityItemRequestBuilderGetQueryParameters 
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
