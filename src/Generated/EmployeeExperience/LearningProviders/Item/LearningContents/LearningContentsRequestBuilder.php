<?php

namespace Microsoft\Graph\Generated\EmployeeExperience\LearningProviders\Item\LearningContents;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\EmployeeExperience\LearningProviders\Item\LearningContents\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\EmployeeExperience\LearningProviders\Item\LearningContents\Item\LearningContentItemRequestBuilder;
use Microsoft\Graph\Generated\Models\LearningContent;
use Microsoft\Graph\Generated\Models\LearningContentCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the learningContents property of the microsoft.graph.learningProvider entity.
*/
class LearningContentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the learningContents property of the microsoft.graph.learningProvider entity.
     * @param string $learningContentId The unique identifier of learningContent
     * @return LearningContentItemRequestBuilder
    */
    public function byLearningContentId(string $learningContentId): LearningContentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['learningContent%2Did'] = $learningContentId;
        return new LearningContentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LearningContentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/employeeExperience/learningProviders/{learningProvider%2Did}/learningContents{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the learningContent resources and their properties. This list represents the metadata of the specified provider's content in Viva Learning.
     * @param LearningContentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LearningContentCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/learningprovider-list-learningcontents?view=graph-rest-1.0 Find more info here
    */
    public function get(?LearningContentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LearningContentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to learningContents for employeeExperience
     * @param LearningContent $body The request body
     * @param LearningContentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LearningContent|null>
     * @throws Exception
    */
    public function post(LearningContent $body, ?LearningContentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LearningContent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the learningContent resources and their properties. This list represents the metadata of the specified provider's content in Viva Learning.
     * @param LearningContentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LearningContentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to learningContents for employeeExperience
     * @param LearningContent $body The request body
     * @param LearningContentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(LearningContent $body, ?LearningContentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return LearningContentsRequestBuilder
    */
    public function withUrl(string $rawUrl): LearningContentsRequestBuilder {
        return new LearningContentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
