<?php

namespace Microsoft\Graph\Generated\Users\Item\Drives\Item\Root\ListItem;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * For drives in SharePoint, the associated document library list item. Read-only. Nullable.
*/
class ListItemRequestBuilderGetQueryParameters 
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
