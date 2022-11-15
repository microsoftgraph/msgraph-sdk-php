<?php

namespace Microsoft\Graph\Generated\Me\Messages;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Me\Messages\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Me\Messages\Delta\DeltaRequestBuilder;
use Microsoft\Graph\Generated\Models\Message;
use Microsoft\Graph\Generated\Models\MessageCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class MessagesRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Instantiates a new MessagesRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/messages{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get the messages in the signed-in user's mailbox (including the Deleted Items and Clutter folders). Depending on the page size and mailbox data, getting messages from a mailbox can incur multiple requests. The default page size is 10 messages. Use `$top` to customize the page size, within the range of 1 and 1000. To improve the operation response time, use `$select` to specify the exact properties you need; see example 1 below. Fine-tune the values for `$select` and `$top`, especially when you must use a larger page size, as returning a page with hundreds of messages each with a full response payload may trigger the gateway timeout (HTTP 504). To get the next page of messages, simply apply the entire URL returned in `@odata.nextLink` to the next get-messages request. This URL includes any query parameters you may have specified in the initial request.  Do not try to extract the `$skip` value from the `@odata.nextLink` URL to manipulate responses. This API uses the `$skip` value to keep count of all the items it has gone through in the user's mailbox to return a page of message-type items. It's therefore possible that even in the initial response, the `$skip` value is larger than the page size. For more information, see Paging Microsoft Graph data in your app. Currently, this operation returns message bodies in only HTML format. There are two scenarios where an app can get messages in another user's mail folder:
     * @param MessagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?MessagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * Create a draft of a new message in either JSON or MIME format. When using JSON format, you can:- Include an attachment to the **message**.- Update the draft later to add content to the **body** or change other message properties. When using MIME format:- Provide the applicable Internet message headers and the MIME content, all encoded in **base64** format in the request body.- /* Add any attachments and S/MIME properties to the MIME content. By default, this operation saves the draft in the Drafts folder. Send the draft message in a subsequent operation. Alternatively, send a new message in a single operation, or create a draft to forward, reply and reply-all to an existing message.
     * @param Message $body 
     * @param MessagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPostRequestInformation(Message $body, ?MessagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to call the delta method.
     * @return DeltaRequestBuilder
    */
    public function delta(): DeltaRequestBuilder {
        return new DeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Get the messages in the signed-in user's mailbox (including the Deleted Items and Clutter folders). Depending on the page size and mailbox data, getting messages from a mailbox can incur multiple requests. The default page size is 10 messages. Use `$top` to customize the page size, within the range of 1 and 1000. To improve the operation response time, use `$select` to specify the exact properties you need; see example 1 below. Fine-tune the values for `$select` and `$top`, especially when you must use a larger page size, as returning a page with hundreds of messages each with a full response payload may trigger the gateway timeout (HTTP 504). To get the next page of messages, simply apply the entire URL returned in `@odata.nextLink` to the next get-messages request. This URL includes any query parameters you may have specified in the initial request.  Do not try to extract the `$skip` value from the `@odata.nextLink` URL to manipulate responses. This API uses the `$skip` value to keep count of all the items it has gone through in the user's mailbox to return a page of message-type items. It's therefore possible that even in the initial response, the `$skip` value is larger than the page size. For more information, see Paging Microsoft Graph data in your app. Currently, this operation returns message bodies in only HTML format. There are two scenarios where an app can get messages in another user's mail folder:
     * @param MessagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?MessagesRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [MessageCollectionResponse::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create a draft of a new message in either JSON or MIME format. When using JSON format, you can:- Include an attachment to the **message**.- Update the draft later to add content to the **body** or change other message properties. When using MIME format:- Provide the applicable Internet message headers and the MIME content, all encoded in **base64** format in the request body.- /* Add any attachments and S/MIME properties to the MIME content. By default, this operation saves the draft in the Drafts folder. Send the draft message in a subsequent operation. Alternatively, send a new message in a single operation, or create a draft to forward, reply and reply-all to an existing message.
     * @param Message $body 
     * @param MessagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function post(Message $body, ?MessagesRequestBuilderPostRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Message::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
