<?php

namespace Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The policy that specifies the conditions under which consent can be granted.
*/
class PermissionGrantPolicyItemRequestBuilderGetQueryParameters 
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
