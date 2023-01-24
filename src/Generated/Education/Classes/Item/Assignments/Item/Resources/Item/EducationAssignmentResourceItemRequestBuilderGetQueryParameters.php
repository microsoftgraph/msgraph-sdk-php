<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\Resources\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Learning objects that are associated with this assignment.  Only teachers can modify this list. Nullable.
*/
class EducationAssignmentResourceItemRequestBuilderGetQueryParameters 
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
