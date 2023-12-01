<?php

namespace Microsoft\Graph\Generated\Users\Item\Todo\Lists\Item\Tasks\Item\Attachments\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\AttachmentBase;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Todo\Lists\Item\Tasks\Item\Attachments\Item\Value\ContentRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the attachments property of the microsoft.graph.todoTask entity.
*/
class AttachmentBaseItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the media for the user entity.
    */
    public function content(): ContentRequestBuilder {
        return new ContentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AttachmentBaseItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/todo/lists/{todoTaskList%2Did}/tasks/{todoTask%2Did}/attachments/{attachmentBase%2Did}{?%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a taskFileAttachment object from a todoTask resource.
     * @param AttachmentBaseItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/taskfileattachment-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?AttachmentBaseItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a taskFileAttachment object.
     * @param AttachmentBaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AttachmentBase|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/taskfileattachment-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?AttachmentBaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AttachmentBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a taskFileAttachment object from a todoTask resource.
     * @param AttachmentBaseItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AttachmentBaseItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a taskFileAttachment object.
     * @param AttachmentBaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AttachmentBaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AttachmentBaseItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AttachmentBaseItemRequestBuilder {
        return new AttachmentBaseItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
