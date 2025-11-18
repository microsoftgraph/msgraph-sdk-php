<?php

namespace Microsoft\\Graph\\Generated\EmployeeExperience\LearningCourseActivitiesWithExternalcourseActivityId;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the specified learningCourseActivity object using either an ID or an externalCourseActivityId of the learning provider, or a courseActivityId of a user.
*/
class LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetQueryParameters 
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
     * Instantiates a new LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
