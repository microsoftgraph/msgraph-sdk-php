<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\TermsOfUse\AgreementAcceptances\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the current status of a user's response to a company's customizable terms of use agreement.
*/
class AgreementAcceptanceItemRequestBuilderGetQueryParameters 
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
