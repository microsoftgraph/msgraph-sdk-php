<?php

namespace Microsoft\Graph\Generated\Policies\TokenIssuancePolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The policy that specifies the characteristics of SAML tokens issued by Azure AD.
*/
class TokenIssuancePolicyItemRequestBuilderGetQueryParameters 
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
