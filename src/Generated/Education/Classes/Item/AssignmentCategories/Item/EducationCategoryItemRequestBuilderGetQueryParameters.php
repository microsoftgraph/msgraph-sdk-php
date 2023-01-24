<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\AssignmentCategories\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * All categories associated with this class. Nullable.
*/
class EducationCategoryItemRequestBuilderGetQueryParameters 
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
