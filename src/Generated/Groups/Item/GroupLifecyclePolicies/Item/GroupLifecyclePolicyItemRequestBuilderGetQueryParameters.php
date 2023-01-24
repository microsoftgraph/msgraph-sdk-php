<?php

namespace Microsoft\Graph\Generated\Groups\Item\GroupLifecyclePolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of lifecycle policies for this group. Read-only. Nullable.
*/
class GroupLifecyclePolicyItemRequestBuilderGetQueryParameters 
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
