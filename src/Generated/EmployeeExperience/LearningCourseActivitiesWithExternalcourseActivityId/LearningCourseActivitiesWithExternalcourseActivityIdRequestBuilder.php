<?php

namespace Microsoft\Graph\Generated\EmployeeExperience\LearningCourseActivitiesWithExternalcourseActivityId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\LearningCourseActivity;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the learningCourseActivities property of the microsoft.graph.employeeExperience entity.
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
        parent::__construct($requestAdapter, [], '{+baseurl}/employeeExperience/learningCourseActivities(externalcourseActivityId=\'{externalcourseActivityId}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['externalcourseActivityId'] = $externalcourseActivityId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property learningCourseActivities for employeeExperience
     * @param LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the specified learningCourseActivity object using either an ID or an externalCourseActivityId of the learning provider, or a courseActivityId of a user.
     * @param LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LearningCourseActivity|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/learningcourseactivity-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LearningCourseActivity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property learningCourseActivities in employeeExperience
     * @param LearningCourseActivity $body The request body
     * @param LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LearningCourseActivity|null>
     * @throws Exception
    */
    public function patch(LearningCourseActivity $body, ?LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LearningCourseActivity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property learningCourseActivities for employeeExperience
     * @param LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Get the specified learningCourseActivity object using either an ID or an externalCourseActivityId of the learning provider, or a courseActivityId of a user.
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
     * Update the navigation property learningCourseActivities in employeeExperience
     * @param LearningCourseActivity $body The request body
     * @param LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(LearningCourseActivity $body, ?LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
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
