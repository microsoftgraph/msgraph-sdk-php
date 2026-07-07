<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\Messages\Item\Replies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\Messages\Item\Replies\Item\Conversation\ConversationRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\Messages\Item\Replies\Item\Reactions\ReactionsRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\Messages\Item\Replies\Item\ReplyTo\ReplyToRequestBuilder;
use Microsoft\Graph\Generated\Models\EngagementConversationMessage;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the replies property of the microsoft.graph.engagementConversationMessage entity.
*/
class EngagementConversationMessageItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the conversation property of the microsoft.graph.engagementConversationMessage entity.
    */
    public function conversation(): ConversationRequestBuilder {
        return new ConversationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reactions property of the microsoft.graph.engagementConversationMessage entity.
    */
    public function reactions(): ReactionsRequestBuilder {
        return new ReactionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the replyTo property of the microsoft.graph.engagementConversationMessage entity.
    */
    public function replyTo(): ReplyToRequestBuilder {
        return new ReplyToRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new EngagementConversationMessageItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/onlineMeetingConversations/{onlineMeetingEngagementConversation%2Did}/messages/{engagementConversationMessage%2Did}/replies/{engagementConversationMessage%2Did1}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property replies for communications
     * @param EngagementConversationMessageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?EngagementConversationMessageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * A collection of messages that are replies to this message and form a threaded discussion.
     * @param EngagementConversationMessageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EngagementConversationMessage|null>
     * @throws Exception
    */
    public function get(?EngagementConversationMessageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EngagementConversationMessage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property replies in communications
     * @param EngagementConversationMessage $body The request body
     * @param EngagementConversationMessageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EngagementConversationMessage|null>
     * @throws Exception
    */
    public function patch(EngagementConversationMessage $body, ?EngagementConversationMessageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EngagementConversationMessage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property replies for communications
     * @param EngagementConversationMessageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EngagementConversationMessageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * A collection of messages that are replies to this message and form a threaded discussion.
     * @param EngagementConversationMessageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EngagementConversationMessageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property replies in communications
     * @param EngagementConversationMessage $body The request body
     * @param EngagementConversationMessageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EngagementConversationMessage $body, ?EngagementConversationMessageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return EngagementConversationMessageItemRequestBuilder
    */
    public function withUrl(string $rawUrl): EngagementConversationMessageItemRequestBuilder {
        return new EngagementConversationMessageItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
