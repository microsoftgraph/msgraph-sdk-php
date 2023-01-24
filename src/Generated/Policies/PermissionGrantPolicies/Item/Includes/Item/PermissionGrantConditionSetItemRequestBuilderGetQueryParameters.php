<?php

namespace Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Includes\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Condition sets which are included in this permission grant policy. Automatically expanded on GET.
*/
class PermissionGrantConditionSetItemRequestBuilderGetQueryParameters 
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
