<?php

namespace Microsoft\Graph\Generated\Me\Drives\Item\Following\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of items the user is following. Only in OneDrive for Business.
*/
class DriveItemItemRequestBuilderGetQueryParameters 
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
