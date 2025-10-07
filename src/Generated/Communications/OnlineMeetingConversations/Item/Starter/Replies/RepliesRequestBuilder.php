<?php

namespace Microsoft\\Graph\\Generated\Communications\OnlineMeetingConversations\Item\Starter\Replies;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Communications\OnlineMeetingConversations\Item\Starter\Replies\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Communications\OnlineMeetingConversations\Item\Starter\Replies\Item\EngagementConversationMessageItemRequestBuilder;
use Microsoft\\Graph\\Generated\Models\EngagementConversationMessage;
use Microsoft\\Graph\\Generated\Models\EngagementConversationMessageCollectionResponse;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the replies property of the microsoft.graph.engagementConversationMessage entity.
*/
class RepliesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the replies property of the microsoft.graph.engagementConversationMessage entity.
     * @param string $engagementConversationMessageId The unique identifier of engagementConversationMessage
     * @return EngagementConversationMessageItemRequestBuilder
    */
    public function byEngagementConversationMessageId(string $engagementConversationMessageId): EngagementConversationMessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['engagementConversationMessage%2Did'] = $engagementConversationMessageId;
        return new EngagementConversationMessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RepliesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/onlineMeetingConversations/{onlineMeetingEngagementConversation%2Did}/starter/replies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A collection of messages that are replies to this message and form a threaded discussion.
     * @param RepliesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EngagementConversationMessageCollectionResponse|null>
     * @throws Exception
    */
    public function get(?RepliesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EngagementConversationMessageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to replies for communications
     * @param EngagementConversationMessage $body The request body
     * @param RepliesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EngagementConversationMessage|null>
     * @throws Exception
    */
    public function post(EngagementConversationMessage $body, ?RepliesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EngagementConversationMessage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A collection of messages that are replies to this message and form a threaded discussion.
     * @param RepliesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RepliesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to replies for communications
     * @param EngagementConversationMessage $body The request body
     * @param RepliesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EngagementConversationMessage $body, ?RepliesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RepliesRequestBuilder
    */
    public function withUrl(string $rawUrl): RepliesRequestBuilder {
        return new RepliesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
