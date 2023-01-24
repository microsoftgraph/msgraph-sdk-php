<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskyUsers\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Users that are flagged as at-risk by Azure AD Identity Protection.
*/
class RiskyUserItemRequestBuilderGetQueryParameters 
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
