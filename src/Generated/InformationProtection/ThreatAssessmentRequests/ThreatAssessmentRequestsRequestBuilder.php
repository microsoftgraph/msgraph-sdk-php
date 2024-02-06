<?php

namespace Microsoft\Graph\Generated\InformationProtection\ThreatAssessmentRequests;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\InformationProtection\ThreatAssessmentRequests\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\InformationProtection\ThreatAssessmentRequests\Item\ThreatAssessmentRequestItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ThreatAssessmentRequest;
use Microsoft\Graph\Generated\Models\ThreatAssessmentRequestCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the threatAssessmentRequests property of the microsoft.graph.informationProtection entity.
*/
class ThreatAssessmentRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the threatAssessmentRequests property of the microsoft.graph.informationProtection entity.
     * @param string $threatAssessmentRequestId The unique identifier of threatAssessmentRequest
     * @return ThreatAssessmentRequestItemRequestBuilder
    */
    public function byThreatAssessmentRequestId(string $threatAssessmentRequestId): ThreatAssessmentRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['threatAssessmentRequest%2Did'] = $threatAssessmentRequestId;
        return new ThreatAssessmentRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ThreatAssessmentRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/informationProtection/threatAssessmentRequests{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of threatAssessmentRequest objects. A threat assessment request can be one of the following types:
     * @param ThreatAssessmentRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ThreatAssessmentRequestCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/informationprotection-list-threatassessmentrequests?view=graph-rest-1.0 Find more info here
    */
    public function get(?ThreatAssessmentRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ThreatAssessmentRequestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new threat assessment request. A threat assessment request can be one of the following types:
     * @param ThreatAssessmentRequest $body The request body
     * @param ThreatAssessmentRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ThreatAssessmentRequest|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/informationprotection-post-threatassessmentrequests?view=graph-rest-1.0 Find more info here
    */
    public function post(ThreatAssessmentRequest $body, ?ThreatAssessmentRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ThreatAssessmentRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of threatAssessmentRequest objects. A threat assessment request can be one of the following types:
     * @param ThreatAssessmentRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ThreatAssessmentRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new threat assessment request. A threat assessment request can be one of the following types:
     * @param ThreatAssessmentRequest $body The request body
     * @param ThreatAssessmentRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ThreatAssessmentRequest $body, ?ThreatAssessmentRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ThreatAssessmentRequestsRequestBuilder
    */
    public function withUrl(string $rawUrl): ThreatAssessmentRequestsRequestBuilder {
        return new ThreatAssessmentRequestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
