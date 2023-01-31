<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Communications\Calls\Item\AudioRoutingGroups\AudioRoutingGroupsRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\AudioRoutingGroups\Item\AudioRoutingGroupItemRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\ContentSharingSessions\ContentSharingSessionsRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\ContentSharingSessions\Item\ContentSharingSessionItemRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphAddLargeGalleryView\AddLargeGalleryViewRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphAnswer\AnswerRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphCancelMediaProcessing\CancelMediaProcessingRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphChangeScreenSharingRole\ChangeScreenSharingRoleRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphKeepAlive\KeepAliveRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphMute\MuteRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphPlayPrompt\PlayPromptRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphRecordResponse\RecordResponseRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphRedirect\RedirectRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphReject\RejectRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphSubscribeToTone\SubscribeToToneRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphTransfer\TransferRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphUnmute\UnmuteRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphUpdateRecordingStatus\UpdateRecordingStatusRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\Operations\Item\CommsOperationItemRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\Participants\Item\ParticipantItemRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\Participants\ParticipantsRequestBuilder;
use Microsoft\Graph\Generated\Models\Call;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the calls property of the microsoft.graph.cloudCommunications entity.
*/
class CallItemRequestBuilder 
{
    /**
     * Provides operations to manage the audioRoutingGroups property of the microsoft.graph.call entity.
    */
    public function audioRoutingGroups(): AudioRoutingGroupsRequestBuilder {
        return new AudioRoutingGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the contentSharingSessions property of the microsoft.graph.call entity.
    */
    public function contentSharingSessions(): ContentSharingSessionsRequestBuilder {
        return new ContentSharingSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the addLargeGalleryView method.
    */
    public function microsoftGraphAddLargeGalleryView(): AddLargeGalleryViewRequestBuilder {
        return new AddLargeGalleryViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the answer method.
    */
    public function microsoftGraphAnswer(): AnswerRequestBuilder {
        return new AnswerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cancelMediaProcessing method.
    */
    public function microsoftGraphCancelMediaProcessing(): CancelMediaProcessingRequestBuilder {
        return new CancelMediaProcessingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the changeScreenSharingRole method.
    */
    public function microsoftGraphChangeScreenSharingRole(): ChangeScreenSharingRoleRequestBuilder {
        return new ChangeScreenSharingRoleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the keepAlive method.
    */
    public function microsoftGraphKeepAlive(): KeepAliveRequestBuilder {
        return new KeepAliveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mute method.
    */
    public function microsoftGraphMute(): MuteRequestBuilder {
        return new MuteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the playPrompt method.
    */
    public function microsoftGraphPlayPrompt(): PlayPromptRequestBuilder {
        return new PlayPromptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the recordResponse method.
    */
    public function microsoftGraphRecordResponse(): RecordResponseRequestBuilder {
        return new RecordResponseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the redirect method.
    */
    public function microsoftGraphRedirect(): RedirectRequestBuilder {
        return new RedirectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reject method.
    */
    public function microsoftGraphReject(): RejectRequestBuilder {
        return new RejectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the subscribeToTone method.
    */
    public function microsoftGraphSubscribeToTone(): SubscribeToToneRequestBuilder {
        return new SubscribeToToneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the transfer method.
    */
    public function microsoftGraphTransfer(): TransferRequestBuilder {
        return new TransferRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unmute method.
    */
    public function microsoftGraphUnmute(): UnmuteRequestBuilder {
        return new UnmuteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateRecordingStatus method.
    */
    public function microsoftGraphUpdateRecordingStatus(): UpdateRecordingStatusRequestBuilder {
        return new UpdateRecordingStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.call entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the participants property of the microsoft.graph.call entity.
    */
    public function participants(): ParticipantsRequestBuilder {
        return new ParticipantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the audioRoutingGroups property of the microsoft.graph.call entity.
     * @param string $id Unique identifier of the item
     * @return AudioRoutingGroupItemRequestBuilder
    */
    public function audioRoutingGroupsById(string $id): AudioRoutingGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['audioRoutingGroup%2Did'] = $id;
        return new AudioRoutingGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CallItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $callId key: id of call
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $callId = null) {
        $this->urlTemplate = '{+baseurl}/communications/calls/{call%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['callId'] = $callId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

    /**
     * Provides operations to manage the contentSharingSessions property of the microsoft.graph.call entity.
     * @param string $id Unique identifier of the item
     * @return ContentSharingSessionItemRequestBuilder
    */
    public function contentSharingSessionsById(string $id): ContentSharingSessionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contentSharingSession%2Did'] = $id;
        return new ContentSharingSessionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property calls for communications
     * @param CallItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?CallItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Get calls from communications
     * @param CallItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?CallItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Call::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the operations property of the microsoft.graph.call entity.
     * @param string $id Unique identifier of the item
     * @return CommsOperationItemRequestBuilder
    */
    public function operationsById(string $id): CommsOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['commsOperation%2Did'] = $id;
        return new CommsOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the participants property of the microsoft.graph.call entity.
     * @param string $id Unique identifier of the item
     * @return ParticipantItemRequestBuilder
    */
    public function participantsById(string $id): ParticipantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['participant%2Did'] = $id;
        return new ParticipantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property calls in communications
     * @param CallItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(Call $body, ?CallItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Call::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property calls for communications
     * @param CallItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CallItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get calls from communications
     * @param CallItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CallItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property calls in communications
     * @param CallItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Call $body, ?CallItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
