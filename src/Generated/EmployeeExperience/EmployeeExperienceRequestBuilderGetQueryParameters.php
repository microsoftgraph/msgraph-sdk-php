<?php

namespace Microsoft\\Graph\\Generated\EmployeeExperience;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get employeeExperience
*/
class EmployeeExperienceRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new EmployeeExperienceRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
