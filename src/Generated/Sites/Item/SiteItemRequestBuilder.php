<?php

namespace Microsoft\Graph\Generated\Sites\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Site;
use Microsoft\Graph\Generated\Sites\Item\Analytics\AnalyticsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Columns\Item\ColumnDefinitionItemRequestBuilder as MicrosoftGraphGeneratedSitesItemColumnsItemColumnDefinitionItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\ContentTypes\ContentTypesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\ContentTypes\Item\ContentTypeItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Drive\DriveRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\ExternalColumns\ExternalColumnsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\ExternalColumns\Item\ColumnDefinitionItemRequestBuilder as MicrosoftGraphGeneratedSitesItemExternalColumnsItemColumnDefinitionItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\GetActivitiesByInterval\GetActivitiesByIntervalRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithInterval\GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\GetApplicableContentTypesForListWithListId\GetApplicableContentTypesForListWithListIdRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\GetByPathWithPath\GetByPathWithPathRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Items\Item\BaseItemItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Items\ItemsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ListItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\ListsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Permissions\Item\PermissionItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Permissions\PermissionsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Sites\SitesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\TermStore\TermStoreRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\TermStores\Item\StoreItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\TermStores\TermStoresRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class SiteItemRequestBuilder 
{
    /**
     * The analytics property
    */
    public function analytics(): AnalyticsRequestBuilder {
        return new AnalyticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The columns property
    */
    public function columns(): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The contentTypes property
    */
    public function contentTypes(): ContentTypesRequestBuilder {
        return new ContentTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The drive property
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The drives property
    */
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The externalColumns property
    */
    public function externalColumns(): ExternalColumnsRequestBuilder {
        return new ExternalColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The items property
    */
    public function items(): ItemsRequestBuilder {
        return new ItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The lists property
    */
    public function lists(): ListsRequestBuilder {
        return new ListsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The onenote property
    */
    public function onenote(): OnenoteRequestBuilder {
        return new OnenoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The permissions property
    */
    public function permissions(): PermissionsRequestBuilder {
        return new PermissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The sites property
    */
    public function sites(): SitesRequestBuilder {
        return new SitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The termStore property
    */
    public function termStore(): TermStoreRequestBuilder {
        return new TermStoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The termStores property
    */
    public function termStores(): TermStoresRequestBuilder {
        return new TermStoresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.sites.item.columns.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedSitesItemColumnsItemColumnDefinitionItemRequestBuilder
    */
    public function columnsById(string $id): MicrosoftGraphGeneratedSitesItemColumnsItemColumnDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnDefinition_id'] = $id;
        return new MicrosoftGraphGeneratedSitesItemColumnsItemColumnDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SiteItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/sites/{site_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.sites.item.contentTypes.item collection
     * @param string $id Unique identifier of the item
     * @return ContentTypeItemRequestBuilder
    */
    public function contentTypesById(string $id): ContentTypeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contentType_id'] = $id;
        return new ContentTypeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete entity from sites
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
     * Get entity from sites by key
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
     * Update entity in sites
     * @param Site $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Site $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete entity from sites
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
     * Gets an item from the Microsoft\Graph\Generated.sites.item.drives.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive_id'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.sites.item.externalColumns.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedSitesItemExternalColumnsItemColumnDefinitionItemRequestBuilder
    */
    public function externalColumnsById(string $id): MicrosoftGraphGeneratedSitesItemExternalColumnsItemColumnDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnDefinition_id'] = $id;
        return new MicrosoftGraphGeneratedSitesItemExternalColumnsItemColumnDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get entity from sites by key
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Site::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getActivitiesByInterval method.
     * @return GetActivitiesByIntervalRequestBuilder
    */
    public function getActivitiesByInterval(): GetActivitiesByIntervalRequestBuilder {
        return new GetActivitiesByIntervalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getActivitiesByInterval method.
     * @param string $endDateTime Usage: endDateTime='{endDateTime}'
     * @param string $interval Usage: interval='{interval}'
     * @param string $startDateTime Usage: startDateTime='{startDateTime}'
     * @return GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder
    */
    public function getActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithInterval(string $endDateTime, string $interval, string $startDateTime): GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder {
        return new GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $interval, $startDateTime);
    }

    /**
     * Provides operations to call the getApplicableContentTypesForList method.
     * @param string $listId Usage: listId='{listId}'
     * @return GetApplicableContentTypesForListWithListIdRequestBuilder
    */
    public function getApplicableContentTypesForListWithListId(string $listId): GetApplicableContentTypesForListWithListIdRequestBuilder {
        return new GetApplicableContentTypesForListWithListIdRequestBuilder($this->pathParameters, $this->requestAdapter, $listId);
    }

    /**
     * Provides operations to call the getByPath method.
     * @param string $path Usage: path='{path}'
     * @return GetByPathWithPathRequestBuilder
    */
    public function getByPathWithPath(string $path): GetByPathWithPathRequestBuilder {
        return new GetByPathWithPathRequestBuilder($this->pathParameters, $this->requestAdapter, $path);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.sites.item.items.item collection
     * @param string $id Unique identifier of the item
     * @return BaseItemItemRequestBuilder
    */
    public function itemsById(string $id): BaseItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['baseItem_id'] = $id;
        return new BaseItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.sites.item.lists.item collection
     * @param string $id Unique identifier of the item
     * @return ListItemRequestBuilder
    */
    public function listsById(string $id): ListItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['list_id'] = $id;
        return new ListItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update entity in sites
     * @param Site $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Site $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.sites.item.permissions.item collection
     * @param string $id Unique identifier of the item
     * @return PermissionItemRequestBuilder
    */
    public function permissionsById(string $id): PermissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permission_id'] = $id;
        return new PermissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.sites.item.sites.item collection
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder
    */
    public function sitesById(string $id): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site_id1'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.sites.item.termStores.item collection
     * @param string $id Unique identifier of the item
     * @return StoreItemRequestBuilder
    */
    public function termStoresById(string $id): StoreItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['store_id'] = $id;
        return new StoreItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
