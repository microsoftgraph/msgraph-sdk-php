<?php

namespace Microsoft\Graph\Generated\Chats\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Chats\Item\HideForUser\HideForUserRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\InstalledApps\InstalledAppsRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\InstalledApps\Item\TeamsAppInstallationItemRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\LastMessagePreview\LastMessagePreviewRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\MarkChatReadForUser\MarkChatReadForUserRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\MarkChatUnreadForUser\MarkChatUnreadForUserRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\Members\Item\ConversationMemberItemRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\Messages\Item\ChatMessageItemRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\Messages\MessagesRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\PinnedMessages\Item\PinnedChatMessageInfoItemRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\PinnedMessages\PinnedMessagesRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\SendActivityNotification\SendActivityNotificationRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\Tabs\Item\TeamsTabItemRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\Tabs\TabsRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\UnhideForUser\UnhideForUserRequestBuilder;
use Microsoft\Graph\Generated\Models\Chat;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the collection of chat entities.
*/
class ChatItemRequestBuilder 
{
    /**
     * Provides operations to call the hideForUser method.
    */
    public function hideForUser(): HideForUserRequestBuilder {
        return new HideForUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the installedApps property of the microsoft.graph.chat entity.
    */
    public function installedApps(): InstalledAppsRequestBuilder {
        return new InstalledAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the lastMessagePreview property of the microsoft.graph.chat entity.
    */
    public function lastMessagePreview(): LastMessagePreviewRequestBuilder {
        return new LastMessagePreviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the markChatReadForUser method.
    */
    public function markChatReadForUser(): MarkChatReadForUserRequestBuilder {
        return new MarkChatReadForUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the markChatUnreadForUser method.
    */
    public function markChatUnreadForUser(): MarkChatUnreadForUserRequestBuilder {
        return new MarkChatUnreadForUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the members property of the microsoft.graph.chat entity.
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the messages property of the microsoft.graph.chat entity.
    */
    public function messages(): MessagesRequestBuilder {
        return new MessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the pinnedMessages property of the microsoft.graph.chat entity.
    */
    public function pinnedMessages(): PinnedMessagesRequestBuilder {
        return new PinnedMessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to call the sendActivityNotification method.
    */
    public function sendActivityNotification(): SendActivityNotificationRequestBuilder {
        return new SendActivityNotificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tabs property of the microsoft.graph.chat entity.
    */
    public function tabs(): TabsRequestBuilder {
        return new TabsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unhideForUser method.
    */
    public function unhideForUser(): UnhideForUserRequestBuilder {
        return new UnhideForUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ChatItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/chats/{chat%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete entity from chats by key (id)
     * @param ChatItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ChatItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Retrieve a single chat (without its messages). This method supports federation. To access a chat, at least one chat member must belong to the tenant the request initiated from.
     * @param ChatItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/chat-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ChatItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Chat::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the installedApps property of the microsoft.graph.chat entity.
     * @param string $id Unique identifier of the item
     * @return TeamsAppInstallationItemRequestBuilder
    */
    public function installedAppsById(string $id): TeamsAppInstallationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAppInstallation%2Did'] = $id;
        return new TeamsAppInstallationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the members property of the microsoft.graph.chat entity.
     * @param string $id Unique identifier of the item
     * @return ConversationMemberItemRequestBuilder
    */
    public function membersById(string $id): ConversationMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversationMember%2Did'] = $id;
        return new ConversationMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the messages property of the microsoft.graph.chat entity.
     * @param string $id Unique identifier of the item
     * @return ChatMessageItemRequestBuilder
    */
    public function messagesById(string $id): ChatMessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chatMessage%2Did'] = $id;
        return new ChatMessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the properties of a chat object.
     * @param Chat $body The request body
     * @param ChatItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/chat-patch?view=graph-rest-1.0 Find more info here
    */
    public function patch(Chat $body, ?ChatItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Chat::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the pinnedMessages property of the microsoft.graph.chat entity.
     * @param string $id Unique identifier of the item
     * @return PinnedChatMessageInfoItemRequestBuilder
    */
    public function pinnedMessagesById(string $id): PinnedChatMessageInfoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['pinnedChatMessageInfo%2Did'] = $id;
        return new PinnedChatMessageInfoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the tabs property of the microsoft.graph.chat entity.
     * @param string $id Unique identifier of the item
     * @return TeamsTabItemRequestBuilder
    */
    public function tabsById(string $id): TeamsTabItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsTab%2Did'] = $id;
        return new TeamsTabItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete entity from chats by key (id)
     * @param ChatItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ChatItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Retrieve a single chat (without its messages). This method supports federation. To access a chat, at least one chat member must belong to the tenant the request initiated from.
     * @param ChatItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ChatItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the properties of a chat object.
     * @param Chat $body The request body
     * @param ChatItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Chat $body, ?ChatItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
