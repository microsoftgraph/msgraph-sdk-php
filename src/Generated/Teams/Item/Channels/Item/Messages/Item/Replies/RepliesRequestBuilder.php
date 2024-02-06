<?php

namespace Microsoft\Graph\Generated\Teams\Item\Channels\Item\Messages\Item\Replies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ChatMessage;
use Microsoft\Graph\Generated\Models\ChatMessageCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\Messages\Item\Replies\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\Messages\Item\Replies\Delta\DeltaRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\Messages\Item\Replies\Item\ChatMessageItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the replies property of the microsoft.graph.chatMessage entity.
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
     * Provides operations to call the delta method.
    */
    public function delta(): DeltaRequestBuilder {
        return new DeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the replies property of the microsoft.graph.chatMessage entity.
     * @param string $chatMessageId1 The unique identifier of chatMessage
     * @return ChatMessageItemRequestBuilder
    */
    public function byChatMessageId1(string $chatMessageId1): ChatMessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chatMessage%2Did1'] = $chatMessageId1;
        return new ChatMessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RepliesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teams/{team%2Did}/channels/{channel%2Did}/messages/{chatMessage%2Did}/replies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List all the replies to a message in a channel of a team. This method lists only the replies of the specified message, if any. To get the message itself, simply call get channel message.
     * @param RepliesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ChatMessageCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/chatmessage-list-replies?view=graph-rest-1.0 Find more info here
    */
    public function get(?RepliesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ChatMessageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Send a new reply to a chatMessage in a specified channel.
     * @param ChatMessage $body The request body
     * @param RepliesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ChatMessage|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/chatmessage-post-replies?view=graph-rest-1.0 Find more info here
    */
    public function post(ChatMessage $body, ?RepliesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ChatMessage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List all the replies to a message in a channel of a team. This method lists only the replies of the specified message, if any. To get the message itself, simply call get channel message.
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
     * Send a new reply to a chatMessage in a specified channel.
     * @param ChatMessage $body The request body
     * @param RepliesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ChatMessage $body, ?RepliesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
