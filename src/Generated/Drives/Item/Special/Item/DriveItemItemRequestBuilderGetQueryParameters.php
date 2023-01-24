<?php

namespace Microsoft\Graph\Generated\Drives\Item\Special\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection of common folders available in OneDrive. Read-only. Nullable.
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
