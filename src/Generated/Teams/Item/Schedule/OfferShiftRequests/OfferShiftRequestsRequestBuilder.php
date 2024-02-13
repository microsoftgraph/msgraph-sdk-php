<?php

namespace Microsoft\Graph\Generated\Teams\Item\Schedule\OfferShiftRequests;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OfferShiftRequest;
use Microsoft\Graph\Generated\Models\OfferShiftRequestCollectionResponse;
use Microsoft\Graph\Generated\Teams\Item\Schedule\OfferShiftRequests\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\OfferShiftRequests\Item\OfferShiftRequestItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the offerShiftRequests property of the microsoft.graph.schedule entity.
*/
class OfferShiftRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the offerShiftRequests property of the microsoft.graph.schedule entity.
     * @param string $offerShiftRequestId The unique identifier of offerShiftRequest
     * @return OfferShiftRequestItemRequestBuilder
    */
    public function byOfferShiftRequestId(string $offerShiftRequestId): OfferShiftRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['offerShiftRequest%2Did'] = $offerShiftRequestId;
        return new OfferShiftRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OfferShiftRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teams/{team%2Did}/schedule/offerShiftRequests{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the properties and relationships of all offerShiftRequest objects in a team.
     * @param OfferShiftRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OfferShiftRequestCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/offershiftrequest-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?OfferShiftRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OfferShiftRequestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create an instance of an offerShiftRequest.
     * @param OfferShiftRequest $body The request body
     * @param OfferShiftRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OfferShiftRequest|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/offershiftrequest-post?view=graph-rest-1.0 Find more info here
    */
    public function post(OfferShiftRequest $body, ?OfferShiftRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OfferShiftRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the properties and relationships of all offerShiftRequest objects in a team.
     * @param OfferShiftRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OfferShiftRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create an instance of an offerShiftRequest.
     * @param OfferShiftRequest $body The request body
     * @param OfferShiftRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OfferShiftRequest $body, ?OfferShiftRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/teams/{team%2Did}/schedule/offerShiftRequests';
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
     * @return OfferShiftRequestsRequestBuilder
    */
    public function withUrl(string $rawUrl): OfferShiftRequestsRequestBuilder {
        return new OfferShiftRequestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
