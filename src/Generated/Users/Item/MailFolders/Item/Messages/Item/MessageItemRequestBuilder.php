<?php

namespace Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\Message;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Item\Attachments\AttachmentsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Item\Copy\CopyRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Item\CreateForward\CreateForwardRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Item\CreateReply\CreateReplyRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Item\CreateReplyAll\CreateReplyAllRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Item\Forward\ForwardRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Item\Move\MoveRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Item\Reply\ReplyRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Item\ReplyAll\ReplyAllRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Item\Send\SendRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Item\Value\ContentRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the messages property of the microsoft.graph.mailFolder entity.
*/
class MessageItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the attachments property of the microsoft.graph.message entity.
    */
    public function attachments(): AttachmentsRequestBuilder {
        return new AttachmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the media for the user entity.
    */
    public function content(): ContentRequestBuilder {
        return new ContentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the copy method.
    */
    public function copy(): CopyRequestBuilder {
        return new CopyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createForward method.
    */
    public function createForward(): CreateForwardRequestBuilder {
        return new CreateForwardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createReply method.
    */
    public function createReply(): CreateReplyRequestBuilder {
        return new CreateReplyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createReplyAll method.
    */
    public function createReplyAll(): CreateReplyAllRequestBuilder {
        return new CreateReplyAllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the extensions property of the microsoft.graph.message entity.
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the forward method.
    */
    public function forward(): ForwardRequestBuilder {
        return new ForwardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the move method.
    */
    public function move(): MoveRequestBuilder {
        return new MoveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reply method.
    */
    public function reply(): ReplyRequestBuilder {
        return new ReplyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the replyAll method.
    */
    public function replyAll(): ReplyAllRequestBuilder {
        return new ReplyAllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the send method.
    */
    public function send(): SendRequestBuilder {
        return new SendRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MessageItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/mailFolders/{mailFolder%2Did}/messages/{message%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property messages for users
     * @param MessageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?MessageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The collection of messages in the mailFolder.
     * @param MessageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Message|null>
     * @throws Exception
    */
    public function get(?MessageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Message::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property messages in users
     * @param Message $body The request body
     * @param MessageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Message|null>
     * @throws Exception
    */
    public function patch(Message $body, ?MessageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Message::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property messages for users
     * @param MessageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MessageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The collection of messages in the mailFolder.
     * @param MessageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MessageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property messages in users
     * @param Message $body The request body
     * @param MessageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Message $body, ?MessageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MessageItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MessageItemRequestBuilder {
        return new MessageItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
