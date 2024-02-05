<?php

namespace Microsoft\Graph\Generated\EmployeeExperience;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\EmployeeExperience\LearningCourseActivities\LearningCourseActivitiesRequestBuilder;
use Microsoft\Graph\Generated\EmployeeExperience\LearningCourseActivitiesWithExternalcourseActivityId\LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilder;
use Microsoft\Graph\Generated\EmployeeExperience\LearningProviders\LearningProvidersRequestBuilder;
use Microsoft\Graph\Generated\Models\EmployeeExperience;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the employeeExperience singleton.
*/
class EmployeeExperienceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the learningCourseActivities property of the microsoft.graph.employeeExperience entity.
    */
    public function learningCourseActivities(): LearningCourseActivitiesRequestBuilder {
        return new LearningCourseActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the learningProviders property of the microsoft.graph.employeeExperience entity.
    */
    public function learningProviders(): LearningProvidersRequestBuilder {
        return new LearningProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new EmployeeExperienceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/employeeExperience{?%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get employeeExperience
     * @param EmployeeExperienceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EmployeeExperience|null>
     * @throws Exception
    */
    public function get(?EmployeeExperienceRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EmployeeExperience::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to manage the learningCourseActivities property of the microsoft.graph.employeeExperience entity.
     * @param string $externalcourseActivityId Alternate key of learningCourseActivity
     * @return LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilder
    */
    public function learningCourseActivitiesWithExternalcourseActivityId(string $externalcourseActivityId): LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilder {
        return new LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilder($this->pathParameters, $this->requestAdapter, $externalcourseActivityId);
    }

    /**
     * Update employeeExperience
     * @param EmployeeExperience $body The request body
     * @param EmployeeExperienceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EmployeeExperience|null>
     * @throws Exception
    */
    public function patch(EmployeeExperience $body, ?EmployeeExperienceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EmployeeExperience::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get employeeExperience
     * @param EmployeeExperienceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EmployeeExperienceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update employeeExperience
     * @param EmployeeExperience $body The request body
     * @param EmployeeExperienceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EmployeeExperience $body, ?EmployeeExperienceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EmployeeExperienceRequestBuilder
    */
    public function withUrl(string $rawUrl): EmployeeExperienceRequestBuilder {
        return new EmployeeExperienceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
