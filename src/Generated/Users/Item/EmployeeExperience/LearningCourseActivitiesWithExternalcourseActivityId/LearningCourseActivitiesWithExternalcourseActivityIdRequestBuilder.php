<?php

namespace Microsoft\Graph\Generated\Users\Item\EmployeeExperience\LearningCourseActivitiesWithExternalcourseActivityId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\LearningCourseActivity;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the learningCourseActivities property of the microsoft.graph.employeeExperienceUser entity.
*/
class LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $externalcourseActivityId Alternate key of learningCourseActivity
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $externalcourseActivityId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/employeeExperience/learningCourseActivities(externalcourseActivityId=\'{externalcourseActivityId}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['externalcourseActivityId'] = $externalcourseActivityId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get learningCourseActivities from users
     * @param LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LearningCourseActivity|null>
     * @throws Exception
    */
    public function get(?LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LearningCourseActivity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get learningCourseActivities from users
     * @param LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilder
    */
    public function withUrl(string $rawUrl): LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilder {
        return new LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
