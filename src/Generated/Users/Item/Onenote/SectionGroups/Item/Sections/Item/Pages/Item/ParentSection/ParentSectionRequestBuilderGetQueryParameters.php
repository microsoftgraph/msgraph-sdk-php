<?php

namespace Microsoft\Graph\Generated\Users\Item\Onenote\SectionGroups\Item\Sections\Item\Pages\Item\ParentSection;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The section that contains the page. Read-only.
*/
class ParentSectionRequestBuilderGetQueryParameters 
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
