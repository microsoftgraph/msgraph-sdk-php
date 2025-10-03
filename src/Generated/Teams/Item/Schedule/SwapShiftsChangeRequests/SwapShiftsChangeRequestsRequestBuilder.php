<?php

namespace Microsoft\\Graph\\Generated\Teams\Item\Schedule\SwapShiftsChangeRequests;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\SwapShiftsChangeRequest;
use Microsoft\\Graph\\Generated\Models\SwapShiftsChangeRequestCollectionResponse;
use Microsoft\\Graph\\Generated\Teams\Item\Schedule\SwapShiftsChangeRequests\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Teams\Item\Schedule\SwapShiftsChangeRequests\Item\SwapShiftsChangeRequestItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the swapShiftsChangeRequests property of the microsoft.graph.schedule entity.
*/
class SwapShiftsChangeRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the swapShiftsChangeRequests property of the microsoft.graph.schedule entity.
     * @param string $swapShiftsChangeRequestId The unique identifier of swapShiftsChangeRequest
     * @return SwapShiftsChangeRequestItemRequestBuilder
    */
    public function bySwapShiftsChangeRequestId(string $swapShiftsChangeRequestId): SwapShiftsChangeRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['swapShiftsChangeRequest%2Did'] = $swapShiftsChangeRequestId;
        return new SwapShiftsChangeRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SwapShiftsChangeRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teams/{team%2Did}/schedule/swapShiftsChangeRequests{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of swapShiftsChangeRequest objects in the team.
     * @param SwapShiftsChangeRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SwapShiftsChangeRequestCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/swapshiftschangerequest-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?SwapShiftsChangeRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SwapShiftsChangeRequestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create an instance of a swapShiftsChangeRequest object.
     * @param SwapShiftsChangeRequest $body The request body
     * @param SwapShiftsChangeRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SwapShiftsChangeRequest|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/swapshiftschangerequest-post?view=graph-rest-1.0 Find more info here
    */
    public function post(SwapShiftsChangeRequest $body, ?SwapShiftsChangeRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SwapShiftsChangeRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of swapShiftsChangeRequest objects in the team.
     * @param SwapShiftsChangeRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SwapShiftsChangeRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create an instance of a swapShiftsChangeRequest object.
     * @param SwapShiftsChangeRequest $body The request body
     * @param SwapShiftsChangeRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SwapShiftsChangeRequest $body, ?SwapShiftsChangeRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SwapShiftsChangeRequestsRequestBuilder
    */
    public function withUrl(string $rawUrl): SwapShiftsChangeRequestsRequestBuilder {
        return new SwapShiftsChangeRequestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
