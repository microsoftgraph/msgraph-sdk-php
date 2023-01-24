<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * All assignments associated with this class. Nullable.
*/
class EducationAssignmentItemRequestBuilderGetQueryParameters 
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
