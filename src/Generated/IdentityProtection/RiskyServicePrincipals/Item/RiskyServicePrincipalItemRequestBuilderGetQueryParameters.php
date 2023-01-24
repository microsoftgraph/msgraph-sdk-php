<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Azure AD service principals that are at risk.
*/
class RiskyServicePrincipalItemRequestBuilderGetQueryParameters 
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
