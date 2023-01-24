<?php

namespace Microsoft\Graph\Generated\Applications\Item\FederatedIdentityCredentials\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Federated identities for applications. Supports $expand and $filter (startsWith, /$count eq 0, /$count ne 0).
*/
class FederatedIdentityCredentialItemRequestBuilderGetQueryParameters 
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
