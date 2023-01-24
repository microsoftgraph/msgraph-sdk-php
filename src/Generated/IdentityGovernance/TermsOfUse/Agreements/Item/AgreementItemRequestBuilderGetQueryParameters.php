<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\TermsOfUse\Agreements\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents a tenant's customizable terms of use agreement that's created and managed with Azure Active Directory (Azure AD).
*/
class AgreementItemRequestBuilderGetQueryParameters 
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
