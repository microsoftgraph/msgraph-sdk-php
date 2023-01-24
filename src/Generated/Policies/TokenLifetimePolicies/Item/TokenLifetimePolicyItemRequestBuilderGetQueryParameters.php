<?php

namespace Microsoft\Graph\Generated\Policies\TokenLifetimePolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Azure AD.
*/
class TokenLifetimePolicyItemRequestBuilderGetQueryParameters 
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
