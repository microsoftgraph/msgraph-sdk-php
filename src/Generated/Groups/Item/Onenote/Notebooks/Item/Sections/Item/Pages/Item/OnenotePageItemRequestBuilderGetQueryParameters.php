<?php

namespace Microsoft\Graph\Generated\Groups\Item\Onenote\Notebooks\Item\Sections\Item\Pages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of pages in the section.  Read-only. Nullable.
*/
class OnenotePageItemRequestBuilderGetQueryParameters 
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
