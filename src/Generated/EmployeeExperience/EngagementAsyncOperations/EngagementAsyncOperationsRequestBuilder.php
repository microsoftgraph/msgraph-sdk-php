<?php

namespace Microsoft\\Graph\\Generated\EmployeeExperience\EngagementAsyncOperations;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\EmployeeExperience\EngagementAsyncOperations\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\EmployeeExperience\EngagementAsyncOperations\Item\EngagementAsyncOperationItemRequestBuilder;
use Microsoft\\Graph\\Generated\Models\EngagementAsyncOperation;
use Microsoft\\Graph\\Generated\Models\EngagementAsyncOperationCollectionResponse;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the engagementAsyncOperations property of the microsoft.graph.employeeExperience entity.
*/
class EngagementAsyncOperationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the engagementAsyncOperations property of the microsoft.graph.employeeExperience entity.
     * @param string $engagementAsyncOperationId The unique identifier of engagementAsyncOperation
     * @return EngagementAsyncOperationItemRequestBuilder
    */
    public function byEngagementAsyncOperationId(string $engagementAsyncOperationId): EngagementAsyncOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['engagementAsyncOperation%2Did'] = $engagementAsyncOperationId;
        return new EngagementAsyncOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EngagementAsyncOperationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/employeeExperience/engagementAsyncOperations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get an engagementAsyncOperation to track a long-running operation request.
     * @param EngagementAsyncOperationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EngagementAsyncOperationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?EngagementAsyncOperationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EngagementAsyncOperationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to engagementAsyncOperations for employeeExperience
     * @param EngagementAsyncOperation $body The request body
     * @param EngagementAsyncOperationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EngagementAsyncOperation|null>
     * @throws Exception
    */
    public function post(EngagementAsyncOperation $body, ?EngagementAsyncOperationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EngagementAsyncOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get an engagementAsyncOperation to track a long-running operation request.
     * @param EngagementAsyncOperationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EngagementAsyncOperationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to engagementAsyncOperations for employeeExperience
     * @param EngagementAsyncOperation $body The request body
     * @param EngagementAsyncOperationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EngagementAsyncOperation $body, ?EngagementAsyncOperationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EngagementAsyncOperationsRequestBuilder
    */
    public function withUrl(string $rawUrl): EngagementAsyncOperationsRequestBuilder {
        return new EngagementAsyncOperationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
