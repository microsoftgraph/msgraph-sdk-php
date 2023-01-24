<?php

namespace Microsoft\Graph\Generated\Agreements\Item\File\Localizations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The localized version of the terms of use agreement files attached to the agreement.
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
