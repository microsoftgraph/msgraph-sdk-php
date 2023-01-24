<?php

namespace Microsoft\Graph\Generated\Drive\EscapedList;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * For drives in SharePoint, the underlying document library list. Read-only. Nullable.
*/
class ListRequestBuilderGetQueryParameters 
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
