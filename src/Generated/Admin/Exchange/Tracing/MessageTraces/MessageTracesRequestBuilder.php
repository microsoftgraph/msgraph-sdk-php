<?php

namespace Microsoft\Graph\Generated\Admin\Exchange\Tracing\MessageTraces;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\Exchange\Tracing\MessageTraces\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\Exchange\Tracing\MessageTraces\Item\ExchangeMessageTraceItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ExchangeMessageTrace;
use Microsoft\Graph\Generated\Models\ExchangeMessageTraceCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the messageTraces property of the microsoft.graph.messageTracingRoot entity.
*/
class MessageTracesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the messageTraces property of the microsoft.graph.messageTracingRoot entity.
     * @param string $exchangeMessageTraceId The unique identifier of exchangeMessageTrace
     * @return ExchangeMessageTraceItemRequestBuilder
    */
    public function byExchangeMessageTraceId(string $exchangeMessageTraceId): ExchangeMessageTraceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['exchangeMessageTrace%2Did'] = $exchangeMessageTraceId;
        return new ExchangeMessageTraceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MessageTracesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/exchange/tracing/messageTraces{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of exchangeMessageTrace objects.
     * @param MessageTracesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExchangeMessageTraceCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/messagetracingroot-list-messagetraces?view=graph-rest-1.0 Find more info here
    */
    public function get(?MessageTracesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExchangeMessageTraceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to messageTraces for admin
     * @param ExchangeMessageTrace $body The request body
     * @param MessageTracesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExchangeMessageTrace|null>
     * @throws Exception
    */
    public function post(ExchangeMessageTrace $body, ?MessageTracesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExchangeMessageTrace::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of exchangeMessageTrace objects.
     * @param MessageTracesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MessageTracesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to messageTraces for admin
     * @param ExchangeMessageTrace $body The request body
     * @param MessageTracesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ExchangeMessageTrace $body, ?MessageTracesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MessageTracesRequestBuilder
    */
    public function withUrl(string $rawUrl): MessageTracesRequestBuilder {
        return new MessageTracesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
