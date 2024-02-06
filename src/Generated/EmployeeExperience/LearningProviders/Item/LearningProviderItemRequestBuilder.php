<?php

namespace Microsoft\Graph\Generated\EmployeeExperience\LearningProviders\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\EmployeeExperience\LearningProviders\Item\LearningContents\LearningContentsRequestBuilder;
use Microsoft\Graph\Generated\EmployeeExperience\LearningProviders\Item\LearningContentsWithExternalId\LearningContentsWithExternalIdRequestBuilder;
use Microsoft\Graph\Generated\EmployeeExperience\LearningProviders\Item\LearningCourseActivities\LearningCourseActivitiesRequestBuilder;
use Microsoft\Graph\Generated\EmployeeExperience\LearningProviders\Item\LearningCourseActivitiesWithExternalcourseActivityId\LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilder;
use Microsoft\Graph\Generated\Models\LearningProvider;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the learningProviders property of the microsoft.graph.employeeExperience entity.
*/
class LearningProviderItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the learningContents property of the microsoft.graph.learningProvider entity.
    */
    public function learningContents(): LearningContentsRequestBuilder {
        return new LearningContentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the learningCourseActivities property of the microsoft.graph.learningProvider entity.
    */
    public function learningCourseActivities(): LearningCourseActivitiesRequestBuilder {
        return new LearningCourseActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new LearningProviderItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/employeeExperience/learningProviders/{learningProvider%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a learningProvider resource and remove its registration in Viva Learning for a tenant.
     * @param LearningProviderItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/employeeexperience-delete-learningproviders?view=graph-rest-1.0 Find more info here
    */
    public function delete(?LearningProviderItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a learningProvider object.
     * @param LearningProviderItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LearningProvider|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/learningprovider-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?LearningProviderItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LearningProvider::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to manage the learningContents property of the microsoft.graph.learningProvider entity.
     * @param string $externalId Alternate key of learningContent
     * @return LearningContentsWithExternalIdRequestBuilder
    */
    public function learningContentsWithExternalId(string $externalId): LearningContentsWithExternalIdRequestBuilder {
        return new LearningContentsWithExternalIdRequestBuilder($this->pathParameters, $this->requestAdapter, $externalId);
    }

    /**
     * Provides operations to manage the learningCourseActivities property of the microsoft.graph.learningProvider entity.
     * @param string $externalcourseActivityId Alternate key of learningCourseActivity
     * @return LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilder
    */
    public function learningCourseActivitiesWithExternalcourseActivityId(string $externalcourseActivityId): LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilder {
        return new LearningCourseActivitiesWithExternalcourseActivityIdRequestBuilder($this->pathParameters, $this->requestAdapter, $externalcourseActivityId);
    }

    /**
     * Update the properties of a learningProvider object.
     * @param LearningProvider $body The request body
     * @param LearningProviderItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LearningProvider|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/learningprovider-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(LearningProvider $body, ?LearningProviderItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LearningProvider::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a learningProvider resource and remove its registration in Viva Learning for a tenant.
     * @param LearningProviderItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?LearningProviderItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a learningProvider object.
     * @param LearningProviderItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LearningProviderItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a learningProvider object.
     * @param LearningProvider $body The request body
     * @param LearningProviderItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(LearningProvider $body, ?LearningProviderItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return LearningProviderItemRequestBuilder
    */
    public function withUrl(string $rawUrl): LearningProviderItemRequestBuilder {
        return new LearningProviderItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
