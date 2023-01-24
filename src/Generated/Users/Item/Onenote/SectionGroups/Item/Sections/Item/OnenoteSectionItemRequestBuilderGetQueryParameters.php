<?php

namespace Microsoft\Graph\Generated\Users\Item\Onenote\SectionGroups\Item\Sections\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The sections in the section group. Read-only. Nullable.
*/
class OnenoteSectionItemRequestBuilderGetQueryParameters 
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
