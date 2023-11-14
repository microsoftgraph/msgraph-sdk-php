<?php

namespace Microsoft\Graph\Generated\Users\Item\EmployeeExperience\LearningCourseActivities;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\LearningCourseActivityCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\EmployeeExperience\LearningCourseActivities\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\EmployeeExperience\LearningCourseActivities\Item\LearningCourseActivityItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the learningCourseActivities property of the microsoft.graph.employeeExperienceUser entity.
*/
class LearningCourseActivitiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the learningCourseActivities property of the microsoft.graph.employeeExperienceUser entity.
     * @param string $learningCourseActivityId The unique identifier of learningCourseActivity
     * @return LearningCourseActivityItemRequestBuilder
    */
    public function byLearningCourseActivityId(string $learningCourseActivityId): LearningCourseActivityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['learningCourseActivity%2Did'] = $learningCourseActivityId;
        return new LearningCourseActivityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LearningCourseActivitiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/employeeExperience/learningCourseActivities{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the learningCourseActivity objects (assigned or self-initiated) for a user. This API is available in the following national cloud deployments.
     * @param LearningCourseActivitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LearningCourseActivityCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/learningcourseactivity-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?LearningCourseActivitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LearningCourseActivityCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the learningCourseActivity objects (assigned or self-initiated) for a user. This API is available in the following national cloud deployments.
     * @param LearningCourseActivitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LearningCourseActivitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return LearningCourseActivitiesRequestBuilder
    */
    public function withUrl(string $rawUrl): LearningCourseActivitiesRequestBuilder {
        return new LearningCourseActivitiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
