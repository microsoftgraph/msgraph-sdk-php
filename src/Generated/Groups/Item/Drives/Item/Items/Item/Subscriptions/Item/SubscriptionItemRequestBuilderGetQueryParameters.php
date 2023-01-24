<?php

namespace Microsoft\Graph\Generated\Groups\Item\Drives\Item\Items\Item\Subscriptions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The set of subscriptions on the item. Only supported on the root of a drive.
*/
class SubscriptionItemRequestBuilderGetQueryParameters 
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
