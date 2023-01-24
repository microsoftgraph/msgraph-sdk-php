<?php

namespace Microsoft\Graph\Generated\Groups\Item\Onenote\SectionGroups\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
*/
class SectionGroupItemRequestBuilderGetQueryParameters 
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
