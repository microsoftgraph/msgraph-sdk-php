<?php

namespace Microsoft\Graph\Subscriptions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class SubscriptionItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
