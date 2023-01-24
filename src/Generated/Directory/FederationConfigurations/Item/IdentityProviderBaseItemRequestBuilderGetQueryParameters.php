<?php

namespace Microsoft\Graph\Generated\Directory\FederationConfigurations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
*/
class IdentityProviderBaseItemRequestBuilderGetQueryParameters 
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
