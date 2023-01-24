<?php

namespace Microsoft\Graph\Generated\Drive\Bundles\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection of [bundles][bundle] (albums and multi-select-shared sets of items). Only in personal OneDrive.
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
