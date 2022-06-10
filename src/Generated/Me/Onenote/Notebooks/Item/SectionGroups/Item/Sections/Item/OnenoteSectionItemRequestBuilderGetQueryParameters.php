<?php

namespace Microsoft\Graph\Me\Onenote\Notebooks\Item\SectionGroups\Item\Sections\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

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
