<?php

namespace Microsoft\Graph\Generated\Users\Item\Drives\Item\Items\Item\Children\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable.
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
