<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\Item\AssociateWithHubSites\AssociateWithHubSitesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\Item\Base\EscapedBaseRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\Item\BaseTypes\BaseTypesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\Item\ColumnLinks\ColumnLinksRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\Item\ColumnPositions\ColumnPositionsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\Item\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\Item\CopyToDefaultContentLocation\CopyToDefaultContentLocationRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\Item\IsPublished\IsPublishedRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\Item\Publish\PublishRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\Item\Unpublish\UnpublishRequestBuilder;
use Microsoft\Graph\Generated\Models\ContentType;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the contentTypes property of the microsoft.graph.site entity.
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
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/sites/{site%2Did}/contentTypes/{contentType%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Remove a [content type][contentType] from a [list][] or a [site][].
     * @param ContentTypeItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/contenttype-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?ContentTypeItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Retrieve the metadata for a [content type][contentType] in a [site][] or a [list][].
     * @param ContentTypeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/contenttype-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ContentTypeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ContentType::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update a [content type][contentType].
     * @param ContentType $body The request body
     * @param ContentTypeItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/contenttype-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(ContentType $body, ?ContentTypeItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ContentType::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Remove a [content type][contentType] from a [list][] or a [site][].
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
        return $requestInfo;
    }

    /**
     * Retrieve the metadata for a [content type][contentType] in a [site][] or a [list][].
     * @param ContentTypeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ContentTypeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update a [content type][contentType].
     * @param ContentType $body The request body
     * @param ContentTypeItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ContentType $body, ?ContentTypeItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
