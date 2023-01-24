<?php

namespace Microsoft\Graph\Generated\Users\Item\LicenseDetails\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of this user's license details. Read-only.
*/
class LicenseDetailsItemRequestBuilderGetQueryParameters 
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
