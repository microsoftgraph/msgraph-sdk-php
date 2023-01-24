<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Schools\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * All schools that this class is associated with. Nullable.
*/
class EducationSchoolItemRequestBuilderGetQueryParameters 
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
