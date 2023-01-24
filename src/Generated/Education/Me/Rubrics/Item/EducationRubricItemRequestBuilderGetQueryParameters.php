<?php

namespace Microsoft\Graph\Generated\Education\Me\Rubrics\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * When set, the grading rubric attached to the assignment.
*/
class EducationRubricItemRequestBuilderGetQueryParameters 
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
