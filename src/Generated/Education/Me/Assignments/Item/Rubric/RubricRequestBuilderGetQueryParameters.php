<?php

namespace Microsoft\Graph\Generated\Education\Me\Assignments\Item\Rubric;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the educationRubric object attached to an educationAssignment, if one exists. Only teachers, students, and applications with application permissions can perform this operation.
*/
class RubricRequestBuilderGetQueryParameters 
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
