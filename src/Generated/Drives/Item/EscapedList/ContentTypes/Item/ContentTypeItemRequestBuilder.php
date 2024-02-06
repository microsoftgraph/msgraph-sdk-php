<?php

namespace Microsoft\Graph\Generated\Drives\Item\EscapedList\ContentTypes\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Drives\Item\EscapedList\ContentTypes\Item\AssociateWithHubSites\AssociateWithHubSitesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\EscapedList\ContentTypes\Item\Base\EscapedBaseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\EscapedList\ContentTypes\Item\BaseTypes\BaseTypesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\EscapedList\ContentTypes\Item\ColumnLinks\ColumnLinksRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\EscapedList\ContentTypes\Item\ColumnPositions\ColumnPositionsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\EscapedList\ContentTypes\Item\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\EscapedList\ContentTypes\Item\CopyToDefaultContentLocation\CopyToDefaultContentLocationRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\EscapedList\ContentTypes\Item\IsPublished\IsPublishedRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\EscapedList\ContentTypes\Item\Publish\PublishRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\EscapedList\ContentTypes\Item\Unpublish\UnpublishRequestBuilder;
use Microsoft\Graph\Generated\Models\ContentType;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the contentTypes property of the microsoft.graph.list entity.
*/
class ContentTypeItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the associateWithHubSites method.
    */
    public function associateWithHubSites(): AssociateWithHubSitesRequestBuilder {
        return new AssociateWithHubSitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the base property of the microsoft.graph.contentType entity.
    */
    public function base(): EscapedBaseRequestBuilder {
        return new EscapedBaseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the baseTypes property of the microsoft.graph.contentType entity.
    */
    public function baseTypes(): BaseTypesRequestBuilder {
        return new BaseTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the columnLinks property of the microsoft.graph.contentType entity.
    */
    public function columnLinks(): ColumnLinksRequestBuilder {
        return new ColumnLinksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the columnPositions property of the microsoft.graph.contentType entity.
    */
    public function columnPositions(): ColumnPositionsRequestBuilder {
        return new ColumnPositionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the columns property of the microsoft.graph.contentType entity.
    */
    public function columns(): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the copyToDefaultContentLocation method.
    */
    public function copyToDefaultContentLocation(): CopyToDefaultContentLocationRequestBuilder {
        return new CopyToDefaultContentLocationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isPublished method.
    */
    public function isPublished(): IsPublishedRequestBuilder {
        return new IsPublishedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the publish method.
    */
    public function publish(): PublishRequestBuilder {
        return new PublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unpublish method.
    */
    public function unpublish(): UnpublishRequestBuilder {
        return new UnpublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ContentTypeItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/list/contentTypes/{contentType%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property contentTypes for drives
     * @param ContentTypeItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ContentTypeItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The collection of content types present in this list.
     * @param ContentTypeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ContentType|null>
     * @throws Exception
    */
    public function get(?ContentTypeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ContentType::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property contentTypes in drives
     * @param ContentType $body The request body
     * @param ContentTypeItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ContentType|null>
     * @throws Exception
    */
    public function patch(ContentType $body, ?ContentTypeItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ContentType::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property contentTypes for drives
     * @param ContentTypeItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ContentTypeItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The collection of content types present in this list.
     * @param ContentTypeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ContentTypeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property contentTypes in drives
     * @param ContentType $body The request body
     * @param ContentTypeItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ContentType $body, ?ContentTypeItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ContentTypeItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ContentTypeItemRequestBuilder {
        return new ContentTypeItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
