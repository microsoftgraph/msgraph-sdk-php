<?php

namespace Microsoft\Graph\Generated\Policies\ClaimsMappingPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
*/
class ClaimsMappingPolicyItemRequestBuilderGetQueryParameters 
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
