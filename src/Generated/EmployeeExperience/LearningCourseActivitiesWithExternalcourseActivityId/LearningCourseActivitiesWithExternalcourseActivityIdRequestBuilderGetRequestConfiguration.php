<?php

namespace Microsoft\Graph\Generated\EmployeeExperience\LearningCourseActivitiesWithExternalcourseActivityId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetQueryParameters {
        return new LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetQueryParameters($expand, $select);
    }

}
