<?php

namespace Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ContentType;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\AssociateWithHubSites\AssociateWithHubSitesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\Base\BaseRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\BaseTypes\BaseTypesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\ColumnLinks\ColumnLinksRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\ColumnLinks\Item\ColumnLinkItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\ColumnPositions\ColumnPositionsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\ColumnPositions\Item\ColumnDefinitionItemRequestBuilder as MicrosoftGraphGeneratedSitesItemListsItemContentTypesItemColumnPositionsItemColumnDefinitionItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\Columns\Item\ColumnDefinitionItemRequestBuilder as MicrosoftGraphGeneratedSitesItemListsItemContentTypesItemColumnsItemColumnDefinitionItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\CopyToDefaultContentLocation\CopyToDefaultContentLocationRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\IsPublished\IsPublishedRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\Publish\PublishRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes\Item\Unpublish\UnpublishRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ContentTypeItemRequestBuilder 
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
    public function base(): BaseRequestBuilder {
        return new BaseRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to call the publish method.
    */
    public function publish(): PublishRequestBuilder {
        return new PublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to call the unpublish method.
    */
    public function unpublish(): UnpublishRequestBuilder {
        return new UnpublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the baseTypes property of the microsoft.graph.contentType entity.
     * @param string $id Unique identifier of the item
     * @return ContentTypeItemRequestBuilder
    */
    public function baseTypesById(string $id): ContentTypeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contentType%2Did1'] = $id;
        return new ContentTypeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the columnLinks property of the microsoft.graph.contentType entity.
     * @param string $id Unique identifier of the item
     * @return ColumnLinkItemRequestBuilder
    */
    public function columnLinksById(string $id): ColumnLinkItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnLink%2Did'] = $id;
        return new ColumnLinkItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the columnPositions property of the microsoft.graph.contentType entity.
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedSitesItemListsItemContentTypesItemColumnPositionsItemColumnDefinitionItemRequestBuilder
    */
    public function columnPositionsById(string $id): MicrosoftGraphGeneratedSitesItemListsItemContentTypesItemColumnPositionsItemColumnDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnDefinition%2Did'] = $id;
        return new MicrosoftGraphGeneratedSitesItemListsItemContentTypesItemColumnPositionsItemColumnDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the columns property of the microsoft.graph.contentType entity.
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedSitesItemListsItemContentTypesItemColumnsItemColumnDefinitionItemRequestBuilder
    */
    public function columnsById(string $id): MicrosoftGraphGeneratedSitesItemListsItemContentTypesItemColumnsItemColumnDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnDefinition%2Did'] = $id;
        return new MicrosoftGraphGeneratedSitesItemListsItemContentTypesItemColumnsItemColumnDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ContentTypeItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/sites/{site%2Did}/lists/{list%2Did}/contentTypes/{contentType%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property contentTypes for sites
     * @param ContentTypeItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?ContentTypeItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * The collection of content types present in this list.
     * @param ContentTypeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ContentTypeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property contentTypes in sites
     * @param ContentType $body 
     * @param ContentTypeItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ContentType $body, ?ContentTypeItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * Delete navigation property contentTypes for sites
     * @param ContentTypeItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ContentTypeItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
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
     * The collection of content types present in this list.
     * @param ContentTypeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ContentTypeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ContentType::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the isPublished method.
     * @return IsPublishedRequestBuilder
    */
    public function isPublished(): IsPublishedRequestBuilder {
        return new IsPublishedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Update the navigation property contentTypes in sites
     * @param ContentType $body 
     * @param ContentTypeItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ContentType $body, ?ContentTypeItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ContentType::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}