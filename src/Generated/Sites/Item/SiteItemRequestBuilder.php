<?php

namespace Microsoft\Graph\Generated\Sites\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Site;
use Microsoft\Graph\Generated\Sites\Item\Analytics\AnalyticsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\ContentTypes\ContentTypesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\ContentTypes\Item\ContentTypeItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Drive\DriveRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\ExternalColumns\ExternalColumnsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\GetActivitiesByInterval\GetActivitiesByIntervalRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithInterval\GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\GetApplicableContentTypesForListWithListId\GetApplicableContentTypesForListWithListIdRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\GetByPathWithPath\GetByPathWithPathRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Items\Item\BaseItemItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Items\ItemsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\Item\ListItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\ListsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Operations\Item\RichLongRunningOperationItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Permissions\Item\PermissionItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Permissions\PermissionsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Sites\SitesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\TermStore\TermStoreRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\TermStores\Item\StoreItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\TermStores\TermStoresRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the collection of site entities.
*/
class SiteItemRequestBuilder 
{
    /**
     * Provides operations to manage the analytics property of the microsoft.graph.site entity.
    */
    public function analytics(): AnalyticsRequestBuilder {
        return new AnalyticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the columns property of the microsoft.graph.site entity.
    */
    public function columns(): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the contentTypes property of the microsoft.graph.site entity.
    */
    public function contentTypes(): ContentTypesRequestBuilder {
        return new ContentTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drive property of the microsoft.graph.site entity.
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drives property of the microsoft.graph.site entity.
    */
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the externalColumns property of the microsoft.graph.site entity.
    */
    public function externalColumns(): ExternalColumnsRequestBuilder {
        return new ExternalColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the items property of the microsoft.graph.site entity.
    */
    public function items(): ItemsRequestBuilder {
        return new ItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the lists property of the microsoft.graph.site entity.
    */
    public function lists(): ListsRequestBuilder {
        return new ListsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onenote property of the microsoft.graph.site entity.
    */
    public function onenote(): OnenoteRequestBuilder {
        return new OnenoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.site entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the permissions property of the microsoft.graph.site entity.
    */
    public function permissions(): PermissionsRequestBuilder {
        return new PermissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the sites property of the microsoft.graph.site entity.
    */
    public function sites(): SitesRequestBuilder {
        return new SitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the termStore property of the microsoft.graph.site entity.
    */
    public function termStore(): TermStoreRequestBuilder {
        return new TermStoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the termStores property of the microsoft.graph.site entity.
    */
    public function termStores(): TermStoresRequestBuilder {
        return new TermStoresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the columns property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Sites\Item\Columns\Item\ColumnDefinitionItemRequestBuilder
    */
    public function columnsById(string $id): \Microsoft\Graph\Generated\Sites\Item\Columns\Item\ColumnDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnDefinition%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Sites\Item\Columns\Item\ColumnDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SiteItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/sites/{site%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Provides operations to manage the contentTypes property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return ContentTypeItemRequestBuilder
    */
    public function contentTypesById(string $id): ContentTypeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contentType%2Did'] = $id;
        return new ContentTypeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the drives property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive%2Did'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the externalColumns property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Sites\Item\ExternalColumns\Item\ColumnDefinitionItemRequestBuilder
    */
    public function externalColumnsById(string $id): \Microsoft\Graph\Generated\Sites\Item\ExternalColumns\Item\ColumnDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnDefinition%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Sites\Item\ExternalColumns\Item\ColumnDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Retrieve properties and relationships for a [site][] resource.A **site** resource represents a team site in SharePoint.
     * @param SiteItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/site-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?SiteItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Site::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
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
     * Provides operations to manage the items property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return BaseItemItemRequestBuilder
    */
    public function itemsById(string $id): BaseItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['baseItem%2Did'] = $id;
        return new BaseItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the lists property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return ListItemRequestBuilder
    */
    public function listsById(string $id): ListItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['list%2Did'] = $id;
        return new ListItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the operations property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return RichLongRunningOperationItemRequestBuilder
    */
    public function operationsById(string $id): RichLongRunningOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['richLongRunningOperation%2Did'] = $id;
        return new RichLongRunningOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update entity in sites by key (id)
     * @param Site $body The request body
     * @param SiteItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Site $body, ?SiteItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Site::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the permissions property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return PermissionItemRequestBuilder
    */
    public function permissionsById(string $id): PermissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permission%2Did'] = $id;
        return new PermissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the sites property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Sites\Item\Sites\Item\SiteItemRequestBuilder
    */
    public function sitesById(string $id): \Microsoft\Graph\Generated\Sites\Item\Sites\Item\SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site%2Did1'] = $id;
        return new \Microsoft\Graph\Generated\Sites\Item\Sites\Item\SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the termStores property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return StoreItemRequestBuilder
    */
    public function termStoresById(string $id): StoreItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['store%2Did'] = $id;
        return new StoreItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Retrieve properties and relationships for a [site][] resource.A **site** resource represents a team site in SharePoint.
     * @param SiteItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SiteItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update entity in sites by key (id)
     * @param Site $body The request body
     * @param SiteItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Site $body, ?SiteItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
