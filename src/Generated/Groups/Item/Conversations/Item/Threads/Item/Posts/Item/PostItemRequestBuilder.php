<?php

namespace Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\Attachments\AttachmentsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\Attachments\Item\AttachmentItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\Forward\ForwardRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\InReplyTo\InReplyToRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\MultiValueExtendedProperties\Item\MultiValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\MultiValueExtendedProperties\MultiValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\Reply\ReplyRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\SingleValueExtendedProperties\Item\SingleValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\SingleValueExtendedProperties\SingleValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Post;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class PostItemRequestBuilder 
{
    /**
     * The attachments property
    */
    public function attachments(): AttachmentsRequestBuilder {
        return new AttachmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The extensions property
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The forward property
    */
    public function forward(): ForwardRequestBuilder {
        return new ForwardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The inReplyTo property
    */
    public function inReplyTo(): InReplyToRequestBuilder {
        return new InReplyToRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The multiValueExtendedProperties property
    */
    public function multiValueExtendedProperties(): MultiValueExtendedPropertiesRequestBuilder {
        return new MultiValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The reply property
    */
    public function reply(): ReplyRequestBuilder {
        return new ReplyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The singleValueExtendedProperties property
    */
    public function singleValueExtendedProperties(): SingleValueExtendedPropertiesRequestBuilder {
        return new SingleValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.conversations.item.threads.item.posts.item.attachments.item collection
     * @param string $id Unique identifier of the item
     * @return AttachmentItemRequestBuilder
    */
    public function attachmentsById(string $id): AttachmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['attachment%2Did'] = $id;
        return new AttachmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PostItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group%2Did}/conversations/{conversation%2Did}/threads/{conversationThread%2Did}/posts/{post%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get posts from groups
     * @param PostItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?PostItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph\Generated.groups.item.conversations.item.threads.item.posts.item.extensions.item collection
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension%2Did'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get posts from groups
     * @param PostItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?PostItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Post::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.conversations.item.threads.item.posts.item.multiValueExtendedProperties.item collection
     * @param string $id Unique identifier of the item
     * @return MultiValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function multiValueExtendedPropertiesById(string $id): MultiValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['multiValueLegacyExtendedProperty%2Did'] = $id;
        return new MultiValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.conversations.item.threads.item.posts.item.singleValueExtendedProperties.item collection
     * @param string $id Unique identifier of the item
     * @return SingleValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function singleValueExtendedPropertiesById(string $id): SingleValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['singleValueLegacyExtendedProperty%2Did'] = $id;
        return new SingleValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
