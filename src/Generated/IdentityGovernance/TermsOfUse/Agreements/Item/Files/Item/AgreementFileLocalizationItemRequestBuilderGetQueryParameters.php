<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\TermsOfUse\Agreements\Item\Files\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * PDFs linked to this agreement. This property is in the process of being deprecated. Use the  file property instead. Supports $expand.
*/
class AgreementFileLocalizationItemRequestBuilderGetQueryParameters 
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
