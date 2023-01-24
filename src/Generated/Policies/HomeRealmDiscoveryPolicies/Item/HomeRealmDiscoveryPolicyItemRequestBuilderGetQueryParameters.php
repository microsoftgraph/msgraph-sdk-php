<?php

namespace Microsoft\Graph\Generated\Policies\HomeRealmDiscoveryPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The policy to control Azure AD authentication behavior for federated users.
*/
class HomeRealmDiscoveryPolicyItemRequestBuilderGetQueryParameters 
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
