<?php

namespace Microsoft\Graph\Generated\Education\Reports\ReflectCheckInResponses;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Education\Reports\ReflectCheckInResponses\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Education\Reports\ReflectCheckInResponses\Item\ReflectCheckInResponseItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ReflectCheckInResponse;
use Microsoft\Graph\Generated\Models\ReflectCheckInResponseCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the reflectCheckInResponses property of the microsoft.graph.reportsRoot entity.
*/
class ReflectCheckInResponsesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reflectCheckInResponses property of the microsoft.graph.reportsRoot entity.
     * @param string $reflectCheckInResponseId The unique identifier of reflectCheckInResponse
     * @return ReflectCheckInResponseItemRequestBuilder
    */
    public function byReflectCheckInResponseId(string $reflectCheckInResponseId): ReflectCheckInResponseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['reflectCheckInResponse%2Did'] = $reflectCheckInResponseId;
        return new ReflectCheckInResponseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReflectCheckInResponsesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/reports/reflectCheckInResponses{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of Reflect check-ins that were submitted by a student.
     * @param ReflectCheckInResponsesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReflectCheckInResponseCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportsroot-list-reflectcheckinresponses?view=graph-rest-1.0 Find more info here
    */
    public function get(?ReflectCheckInResponsesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReflectCheckInResponseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to reflectCheckInResponses for education
     * @param ReflectCheckInResponse $body The request body
     * @param ReflectCheckInResponsesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReflectCheckInResponse|null>
     * @throws Exception
    */
    public function post(ReflectCheckInResponse $body, ?ReflectCheckInResponsesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReflectCheckInResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of Reflect check-ins that were submitted by a student.
     * @param ReflectCheckInResponsesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReflectCheckInResponsesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to reflectCheckInResponses for education
     * @param ReflectCheckInResponse $body The request body
     * @param ReflectCheckInResponsesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ReflectCheckInResponse $body, ?ReflectCheckInResponsesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ReflectCheckInResponsesRequestBuilder
    */
    public function withUrl(string $rawUrl): ReflectCheckInResponsesRequestBuilder {
        return new ReflectCheckInResponsesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
