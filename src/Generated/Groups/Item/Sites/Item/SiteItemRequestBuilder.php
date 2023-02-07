<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Analytics\AnalyticsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\ContentTypesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\Item\ContentTypeItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Drive\DriveRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\ExternalColumns\ExternalColumnsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Items\Item\BaseItemItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Items\ItemsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Lists\Item\ListItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Lists\ListsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\MicrosoftGraphGetActivitiesByInterval\MicrosoftGraphGetActivitiesByIntervalRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\MicrosoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithInterval\MicrosoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\MicrosoftGraphGetApplicableContentTypesForListWithListId\MicrosoftGraphGetApplicableContentTypesForListWithListIdRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\MicrosoftGraphGetByPathWithPath\MicrosoftGraphGetByPathWithPathRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Operations\Item\RichLongRunningOperationItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Permissions\Item\PermissionItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Permissions\PermissionsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Sites\SitesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStore\TermStoreRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStores\Item\StoreItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStores\TermStoresRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Site;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the sites property of the microsoft.graph.group entity.
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
     * Provides operations to call the getActivitiesByInterval method.
    */
    public function microsoftGraphGetActivitiesByInterval(): MicrosoftGraphGetActivitiesByIntervalRequestBuilder {
        return new MicrosoftGraphGetActivitiesByIntervalRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @return \Microsoft\Graph\Generated\Groups\Item\Sites\Item\Columns\Item\ColumnDefinitionItemRequestBuilder
    */
    public function columnsById(string $id): \Microsoft\Graph\Generated\Groups\Item\Sites\Item\Columns\Item\ColumnDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnDefinition%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Groups\Item\Sites\Item\Columns\Item\ColumnDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Instantiates a new SiteItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group%2Did}/sites/{site%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the contentTypes property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return ContentTypeItemRequestBuilder
    */
    public function contentTypesById(string $id): ContentTypeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contentType%2Did'] = $id;
        return new ContentTypeItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the drives property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive%2Did'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the externalColumns property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Groups\Item\Sites\Item\ExternalColumns\Item\ColumnDefinitionItemRequestBuilder
    */
    public function externalColumnsById(string $id): \Microsoft\Graph\Generated\Groups\Item\Sites\Item\ExternalColumns\Item\ColumnDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnDefinition%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Groups\Item\Sites\Item\ExternalColumns\Item\ColumnDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * The list of SharePoint sites in this group. Access the default site with /sites/root.
     * @param SiteItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?SiteItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Site::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the items property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return BaseItemItemRequestBuilder
    */
    public function itemsById(string $id): BaseItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['baseItem%2Did'] = $id;
        return new BaseItemItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the lists property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return ListItemRequestBuilder
    */
    public function listsById(string $id): ListItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['list%2Did'] = $id;
        return new ListItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to call the getActivitiesByInterval method.
     * @param string $endDateTime Usage: endDateTime='{endDateTime}'
     * @param string $interval Usage: interval='{interval}'
     * @param string $startDateTime Usage: startDateTime='{startDateTime}'
     * @return MicrosoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder
    */
    public function microsoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithInterval(string $endDateTime, string $interval, string $startDateTime): MicrosoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder {
        return new MicrosoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $interval, $startDateTime);
    }

    /**
     * Provides operations to call the getApplicableContentTypesForList method.
     * @param string $listId Usage: listId='{listId}'
     * @return MicrosoftGraphGetApplicableContentTypesForListWithListIdRequestBuilder
    */
    public function microsoftGraphGetApplicableContentTypesForListWithListId(string $listId): MicrosoftGraphGetApplicableContentTypesForListWithListIdRequestBuilder {
        return new MicrosoftGraphGetApplicableContentTypesForListWithListIdRequestBuilder($this->pathParameters, $this->requestAdapter, $listId);
    }

    /**
     * Provides operations to call the getByPath method.
     * @param string $path Usage: path='{path}'
     * @return MicrosoftGraphGetByPathWithPathRequestBuilder
    */
    public function microsoftGraphGetByPathWithPath(string $path): MicrosoftGraphGetByPathWithPathRequestBuilder {
        return new MicrosoftGraphGetByPathWithPathRequestBuilder($this->pathParameters, $this->requestAdapter, $path);
    }

    /**
     * Provides operations to manage the operations property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return RichLongRunningOperationItemRequestBuilder
    */
    public function operationsById(string $id): RichLongRunningOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['richLongRunningOperation%2Did'] = $id;
        return new RichLongRunningOperationItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Update the navigation property sites in groups
     * @param Site $body The request body
     * @param SiteItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(Site $body, ?SiteItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Site::class, 'createFromDiscriminatorValue'], $errorMappings);
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
        return new PermissionItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the sites property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Groups\Item\Sites\Item\Sites\Item\SiteItemRequestBuilder
    */
    public function sitesById(string $id): \Microsoft\Graph\Generated\Groups\Item\Sites\Item\Sites\Item\SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site%2Did1'] = $id;
        return new \Microsoft\Graph\Generated\Groups\Item\Sites\Item\Sites\Item\SiteItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the termStores property of the microsoft.graph.site entity.
     * @param string $id Unique identifier of the item
     * @return StoreItemRequestBuilder
    */
    public function termStoresById(string $id): StoreItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['store%2Did'] = $id;
        return new StoreItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * The list of SharePoint sites in this group. Access the default site with /sites/root.
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
     * Update the navigation property sites in groups
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
