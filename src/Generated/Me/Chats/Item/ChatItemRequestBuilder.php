<?php

namespace Microsoft\Graph\Generated\Me\Chats\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Me\Chats\Item\InstalledApps\InstalledAppsRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\InstalledApps\Item\TeamsAppInstallationItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\LastMessagePreview\LastMessagePreviewRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\Members\Item\ConversationMemberItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\Messages\Item\ChatMessageItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\Messages\MessagesRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\MicrosoftGraphHideForUser\MicrosoftGraphHideForUserRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\MicrosoftGraphMarkChatReadForUser\MicrosoftGraphMarkChatReadForUserRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\MicrosoftGraphMarkChatUnreadForUser\MicrosoftGraphMarkChatUnreadForUserRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\MicrosoftGraphSendActivityNotification\MicrosoftGraphSendActivityNotificationRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\MicrosoftGraphUnhideForUser\MicrosoftGraphUnhideForUserRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\PinnedMessages\Item\PinnedChatMessageInfoItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\PinnedMessages\PinnedMessagesRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\Tabs\Item\TeamsTabItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\Tabs\TabsRequestBuilder;
use Microsoft\Graph\Generated\Models\Chat;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the chats property of the microsoft.graph.user entity.
*/
class ChatItemRequestBuilder 
{
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
     * Provides operations to call the hideForUser method.
    */
    public function microsoftGraphHideForUser(): MicrosoftGraphHideForUserRequestBuilder {
        return new MicrosoftGraphHideForUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the markChatReadForUser method.
    */
    public function microsoftGraphMarkChatReadForUser(): MicrosoftGraphMarkChatReadForUserRequestBuilder {
        return new MicrosoftGraphMarkChatReadForUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the markChatUnreadForUser method.
    */
    public function microsoftGraphMarkChatUnreadForUser(): MicrosoftGraphMarkChatUnreadForUserRequestBuilder {
        return new MicrosoftGraphMarkChatUnreadForUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendActivityNotification method.
    */
    public function microsoftGraphSendActivityNotification(): MicrosoftGraphSendActivityNotificationRequestBuilder {
        return new MicrosoftGraphSendActivityNotificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unhideForUser method.
    */
    public function microsoftGraphUnhideForUser(): MicrosoftGraphUnhideForUserRequestBuilder {
        return new MicrosoftGraphUnhideForUserRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the tabs property of the microsoft.graph.chat entity.
    */
    public function tabs(): TabsRequestBuilder {
        return new TabsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ChatItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/chats/{chat%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property chats for me
     * @param ChatItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ChatItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get chats from me
     * @param ChatItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ChatItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Chat::class, 'createFromDiscriminatorValue'], $errorMappings);
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
     * Update the navigation property chats in me
     * @param Chat $body The request body
     * @param ChatItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(Chat $body, ?ChatItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Chat::class, 'createFromDiscriminatorValue'], $errorMappings);
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
     * Delete navigation property chats for me
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
     * Get chats from me
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
     * Update the navigation property chats in me
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
