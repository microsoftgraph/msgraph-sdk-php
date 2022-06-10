<?php

namespace Microsoft\Graph\Agreements;

use Microsoft\Kiota\Abstractions\QueryParameter;

class AgreementsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
