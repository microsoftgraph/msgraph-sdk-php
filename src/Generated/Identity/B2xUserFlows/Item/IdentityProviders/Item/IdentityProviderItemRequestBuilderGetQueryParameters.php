<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\IdentityProviders\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The identity providers included in the user flow.
*/
class IdentityProviderItemRequestBuilderGetQueryParameters 
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
