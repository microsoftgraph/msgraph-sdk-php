<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetingConversations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\OnlineMeetingEngagementConversationItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OnlineMeetingEngagementConversation;
use Microsoft\Graph\Generated\Models\OnlineMeetingEngagementConversationCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the onlineMeetingConversations property of the microsoft.graph.cloudCommunications entity.
*/
class OnlineMeetingConversationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onlineMeetingConversations property of the microsoft.graph.cloudCommunications entity.
     * @param string $onlineMeetingEngagementConversationId The unique identifier of onlineMeetingEngagementConversation
     * @return OnlineMeetingEngagementConversationItemRequestBuilder
    */
    public function byOnlineMeetingEngagementConversationId(string $onlineMeetingEngagementConversationId): OnlineMeetingEngagementConversationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onlineMeetingEngagementConversation%2Did'] = $onlineMeetingEngagementConversationId;
        return new OnlineMeetingEngagementConversationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OnlineMeetingConversationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/onlineMeetingConversations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A collection of structured question-and-answer (Q&A) threads in Teams directly associated with online meetings.
     * @param OnlineMeetingConversationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnlineMeetingEngagementConversationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?OnlineMeetingConversationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnlineMeetingEngagementConversationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to onlineMeetingConversations for communications
     * @param OnlineMeetingEngagementConversation $body The request body
     * @param OnlineMeetingConversationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnlineMeetingEngagementConversation|null>
     * @throws Exception
    */
    public function post(OnlineMeetingEngagementConversation $body, ?OnlineMeetingConversationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnlineMeetingEngagementConversation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A collection of structured question-and-answer (Q&A) threads in Teams directly associated with online meetings.
     * @param OnlineMeetingConversationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OnlineMeetingConversationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to onlineMeetingConversations for communications
     * @param OnlineMeetingEngagementConversation $body The request body
     * @param OnlineMeetingConversationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OnlineMeetingEngagementConversation $body, ?OnlineMeetingConversationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OnlineMeetingConversationsRequestBuilder
    */
    public function withUrl(string $rawUrl): OnlineMeetingConversationsRequestBuilder {
        return new OnlineMeetingConversationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
