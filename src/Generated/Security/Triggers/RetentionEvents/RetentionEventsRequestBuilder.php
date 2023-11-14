<?php

namespace Microsoft\Graph\Generated\Security\Triggers\RetentionEvents;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\RetentionEvent;
use Microsoft\Graph\Generated\Models\Security\RetentionEventCollectionResponse;
use Microsoft\Graph\Generated\Security\Triggers\RetentionEvents\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\Triggers\RetentionEvents\Item\RetentionEventItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the retentionEvents property of the microsoft.graph.security.triggersRoot entity.
*/
class RetentionEventsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the retentionEvents property of the microsoft.graph.security.triggersRoot entity.
     * @param string $retentionEventId The unique identifier of retentionEvent
     * @return RetentionEventItemRequestBuilder
    */
    public function byRetentionEventId(string $retentionEventId): RetentionEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['retentionEvent%2Did'] = $retentionEventId;
        return new RetentionEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RetentionEventsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/triggers/retentionEvents{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the retentionEvent objects and their properties. This API is available in the following national cloud deployments.
     * @param RetentionEventsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RetentionEventCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-retentionevent-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?RetentionEventsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RetentionEventCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new retentionEvent object. This API is available in the following national cloud deployments.
     * @param RetentionEvent $body The request body
     * @param RetentionEventsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RetentionEvent|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-retentionevent-post?view=graph-rest-1.0 Find more info here
    */
    public function post(RetentionEvent $body, ?RetentionEventsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RetentionEvent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the retentionEvent objects and their properties. This API is available in the following national cloud deployments.
     * @param RetentionEventsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetentionEventsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new retentionEvent object. This API is available in the following national cloud deployments.
     * @param RetentionEvent $body The request body
     * @param RetentionEventsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RetentionEvent $body, ?RetentionEventsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RetentionEventsRequestBuilder
    */
    public function withUrl(string $rawUrl): RetentionEventsRequestBuilder {
        return new RetentionEventsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
