<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Modules\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the properties and relationships of a module. Only teachers, students, and applications with application permissions can perform this operation. Students can only see published modules; teachers and applications with application permissions can see all modules in a class.
*/
class EducationModuleItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new EducationModuleItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
