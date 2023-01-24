<?php

namespace Microsoft\Graph\Generated\Agreements\Item\Files\Item\Versions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only. Customized versions of the terms of use agreement in the Azure AD tenant.
*/
class AgreementFileVersionItemRequestBuilderGetQueryParameters 
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
