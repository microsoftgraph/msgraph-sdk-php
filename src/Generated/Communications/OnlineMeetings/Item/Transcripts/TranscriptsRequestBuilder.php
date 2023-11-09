<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\Transcripts;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\Transcripts\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\Transcripts\Item\CallTranscriptItemRequestBuilder;
use Microsoft\Graph\Generated\Models\CallTranscript;
use Microsoft\Graph\Generated\Models\CallTranscriptCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the transcripts property of the microsoft.graph.onlineMeeting entity.
*/
class TranscriptsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the transcripts property of the microsoft.graph.onlineMeeting entity.
     * @param string $callTranscriptId The unique identifier of callTranscript
     * @return CallTranscriptItemRequestBuilder
    */
    public function byCallTranscriptId(string $callTranscriptId): CallTranscriptItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['callTranscript%2Did'] = $callTranscriptId;
        return new CallTranscriptItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TranscriptsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/onlineMeetings/{onlineMeeting%2Did}/transcripts{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the list of callTranscript objects associated with a scheduled onlineMeeting. This API doesn't support getting call transcripts from channel meetings. This API is available in the following national cloud deployments.
     * @param TranscriptsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CallTranscriptCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onlinemeeting-list-transcripts?view=graph-rest-1.0 Find more info here
    */
    public function get(?TranscriptsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CallTranscriptCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to transcripts for communications
     * @param CallTranscript $body The request body
     * @param TranscriptsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CallTranscript|null>
     * @throws Exception
    */
    public function post(CallTranscript $body, ?TranscriptsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CallTranscript::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the list of callTranscript objects associated with a scheduled onlineMeeting. This API doesn't support getting call transcripts from channel meetings. This API is available in the following national cloud deployments.
     * @param TranscriptsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TranscriptsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create new navigation property to transcripts for communications
     * @param CallTranscript $body The request body
     * @param TranscriptsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CallTranscript $body, ?TranscriptsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return TranscriptsRequestBuilder
    */
    public function withUrl(string $rawUrl): TranscriptsRequestBuilder {
        return new TranscriptsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
