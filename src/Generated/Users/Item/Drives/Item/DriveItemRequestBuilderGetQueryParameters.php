<?php

namespace Microsoft\Graph\Generated\Users\Item\Drives\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of drives available for this user. Read-only.
*/
class DriveItemRequestBuilderGetQueryParameters 
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
