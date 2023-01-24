<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\Item\History\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the risk history of Azure AD service principals.
*/
class RiskyServicePrincipalHistoryItemItemRequestBuilderGetQueryParameters 
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
