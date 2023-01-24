<?php

namespace Microsoft\Graph\Generated\Domains\Item\FederationConfiguration\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Domain settings configured by a customer when federated with Azure AD. Supports $expand.
*/
class InternalDomainFederationItemRequestBuilderGetQueryParameters 
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
