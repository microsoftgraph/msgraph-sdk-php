<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Channels\Item\Messages\Item\Replies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ChatMessage;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Channels\Item\Messages\Item\Replies\Item\HostedContents\HostedContentsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Channels\Item\Messages\Item\Replies\Item\SetReaction\SetReactionRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Channels\Item\Messages\Item\Replies\Item\SoftDelete\SoftDeleteRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Channels\Item\Messages\Item\Replies\Item\UndoSoftDelete\UndoSoftDeleteRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Channels\Item\Messages\Item\Replies\Item\UnsetReaction\UnsetReactionRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the replies property of the microsoft.graph.chatMessage entity.
*/
class ChatMessageItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the hostedContents property of the microsoft.graph.chatMessage entity.
    */
    public function hostedContents(): HostedContentsRequestBuilder {
        return new HostedContentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setReaction method.
    */
    public function setReaction(): SetReactionRequestBuilder {
        return new SetReactionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the softDelete method.
    */
    public function softDelete(): SoftDeleteRequestBuilder {
        return new SoftDeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the undoSoftDelete method.
    */
    public function undoSoftDelete(): UndoSoftDeleteRequestBuilder {
        return new UndoSoftDeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unsetReaction method.
    */
    public function unsetReaction(): UnsetReactionRequestBuilder {
        return new UnsetReactionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ChatMessageItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/joinedTeams/{team%2Did}/channels/{channel%2Did}/messages/{chatMessage%2Did}/replies/{chatMessage%2Did1}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property replies for users
     * @param ChatMessageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ChatMessageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Replies for a specified message. Supports $expand for channel messages.
     * @param ChatMessageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ChatMessage|null>
     * @throws Exception
    */
    public function get(?ChatMessageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ChatMessage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property replies in users
     * @param ChatMessage $body The request body
     * @param ChatMessageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ChatMessage|null>
     * @throws Exception
    */
    public function patch(ChatMessage $body, ?ChatMessageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ChatMessage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property replies for users
     * @param ChatMessageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ChatMessageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Replies for a specified message. Supports $expand for channel messages.
     * @param ChatMessageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ChatMessageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property replies in users
     * @param ChatMessage $body The request body
     * @param ChatMessageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ChatMessage $body, ?ChatMessageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ChatMessageItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ChatMessageItemRequestBuilder {
        return new ChatMessageItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
