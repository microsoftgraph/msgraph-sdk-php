<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the properties and relationships of an assignment. Only teachers, students, and applications with application permissions can perform this operation. Students can only see assignments assigned to them; teachers and applications with application permissions can see all assignments in a class.
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
    
    /**
     * Instantiates a new EducationAssignmentItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
