<?php

namespace Microsoft\Graph\Generated\Groups\Item\Drives\Item\Items\Item\Thumbnails\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection containing [ThumbnailSet][] objects associated with the item. For more info, see [getting thumbnails][]. Read-only. Nullable.
*/
class ThumbnailSetItemRequestBuilderGetQueryParameters 
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
