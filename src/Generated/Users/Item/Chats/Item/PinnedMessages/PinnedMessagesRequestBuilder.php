<?php

namespace Microsoft\\Graph\\Generated\Users\Item\Chats\Item\PinnedMessages;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\PinnedChatMessageInfo;
use Microsoft\\Graph\\Generated\Models\PinnedChatMessageInfoCollectionResponse;
use Microsoft\\Graph\\Generated\Users\Item\Chats\Item\PinnedMessages\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Users\Item\Chats\Item\PinnedMessages\Item\PinnedChatMessageInfoItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the pinnedMessages property of the microsoft.graph.chat entity.
*/
class PinnedMessagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the pinnedMessages property of the microsoft.graph.chat entity.
     * @param string $pinnedChatMessageInfoId The unique identifier of pinnedChatMessageInfo
     * @return PinnedChatMessageInfoItemRequestBuilder
    */
    public function byPinnedChatMessageInfoId(string $pinnedChatMessageInfoId): PinnedChatMessageInfoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['pinnedChatMessageInfo%2Did'] = $pinnedChatMessageInfoId;
        return new PinnedChatMessageInfoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PinnedMessagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/chats/{chat%2Did}/pinnedMessages{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A collection of all the pinned messages in the chat. Nullable.
     * @param PinnedMessagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PinnedChatMessageInfoCollectionResponse|null>
     * @throws Exception
    */
    public function get(?PinnedMessagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PinnedChatMessageInfoCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to pinnedMessages for users
     * @param PinnedChatMessageInfo $body The request body
     * @param PinnedMessagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PinnedChatMessageInfo|null>
     * @throws Exception
    */
    public function post(PinnedChatMessageInfo $body, ?PinnedMessagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PinnedChatMessageInfo::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A collection of all the pinned messages in the chat. Nullable.
     * @param PinnedMessagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PinnedMessagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to pinnedMessages for users
     * @param PinnedChatMessageInfo $body The request body
     * @param PinnedMessagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PinnedChatMessageInfo $body, ?PinnedMessagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PinnedMessagesRequestBuilder
    */
    public function withUrl(string $rawUrl): PinnedMessagesRequestBuilder {
        return new PinnedMessagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
