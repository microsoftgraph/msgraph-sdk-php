<?php

namespace Microsoft\Graph\Agreements\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class AgreementItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
