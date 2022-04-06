<?php

namespace Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\AssociateWithHubSites\AssociateWithHubSitesRequestBuilder;
use Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\Base\BaseRequestBuilder;
use Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\BaseTypes\BaseTypesRequestBuilder;
use Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\ColumnLinks\ColumnLinksRequestBuilder;
use Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\ColumnLinks\Item\ColumnLinkItemRequestBuilder;
use Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\ColumnPositions\ColumnPositionsRequestBuilder;
use Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\ColumnPositions\Item\ColumnDefinitionItemRequestBuilder as MicrosoftGraphGeneratedDriveEscapedListContentTypesItemColumnPositionsItemColumnDefinitionItemRequestBuilder;
use Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\Columns\Item\ColumnDefinitionItemRequestBuilder as MicrosoftGraphGeneratedDriveEscapedListContentTypesItemColumnsItemColumnDefinitionItemRequestBuilder;
use Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\CopyToDefaultContentLocation\CopyToDefaultContentLocationRequestBuilder;
use Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\IsPublished\IsPublishedRequestBuilder;
use Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\Publish\PublishRequestBuilder;
use Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\Unpublish\UnpublishRequestBuilder;
use Microsoft\Graph\Generated\Models\ContentType;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
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
     * The associateWithHubSites property
    */
    public function associateWithHubSites(): AssociateWithHubSitesRequestBuilder {
        return new AssociateWithHubSitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The base property
    */
    public function base(): BaseRequestBuilder {
        return new BaseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The baseTypes property
    */
    public function baseTypes(): BaseTypesRequestBuilder {
        return new BaseTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The columnLinks property
    */
    public function columnLinks(): ColumnLinksRequestBuilder {
        return new ColumnLinksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The columnPositions property
    */
    public function columnPositions(): ColumnPositionsRequestBuilder {
        return new ColumnPositionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The columns property
    */
    public function columns(): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The copyToDefaultContentLocation property
    */
    public function copyToDefaultContentLocation(): CopyToDefaultContentLocationRequestBuilder {
        return new CopyToDefaultContentLocationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The publish property
    */
    public function publish(): PublishRequestBuilder {
        return new PublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The unpublish property
    */
    public function unpublish(): UnpublishRequestBuilder {
        return new UnpublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.drive.list.contentTypes.item.baseTypes.item collection
     * @param string $id Unique identifier of the item
     * @return ContentTypeItemRequestBuilder
    */
    public function baseTypesById(string $id): ContentTypeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contentType_id1'] = $id;
        return new ContentTypeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.drive.list.contentTypes.item.columnLinks.item collection
     * @param string $id Unique identifier of the item
     * @return ColumnLinkItemRequestBuilder
    */
    public function columnLinksById(string $id): ColumnLinkItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnLink_id'] = $id;
        return new ColumnLinkItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.drive.list.contentTypes.item.columnPositions.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedDriveEscapedListContentTypesItemColumnPositionsItemColumnDefinitionItemRequestBuilder
    */
    public function columnPositionsById(string $id): MicrosoftGraphGeneratedDriveEscapedListContentTypesItemColumnPositionsItemColumnDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnDefinition_id'] = $id;
        return new MicrosoftGraphGeneratedDriveEscapedListContentTypesItemColumnPositionsItemColumnDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.drive.list.contentTypes.item.columns.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedDriveEscapedListContentTypesItemColumnsItemColumnDefinitionItemRequestBuilder
    */
    public function columnsById(string $id): MicrosoftGraphGeneratedDriveEscapedListContentTypesItemColumnsItemColumnDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnDefinition_id'] = $id;
        return new MicrosoftGraphGeneratedDriveEscapedListContentTypesItemColumnsItemColumnDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ContentTypeItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/drive/list/contentTypes/{contentType_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property contentTypes for drive
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * The collection of content types present in this list.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property contentTypes in drive
     * @param ContentType $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ContentType $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property contentTypes for drive
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The collection of content types present in this list.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, ContentType::class, $responseHandler);
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
     * Update the navigation property contentTypes in drive
     * @param ContentType $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ContentType $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
