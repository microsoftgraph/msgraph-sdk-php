<?php

namespace Microsoft\Graph\Generated\Sites\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Site;
use Microsoft\Graph\Generated\Sites\Item\Analytics\AnalyticsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\ContentTypes\ContentTypesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\CreatedByUser\CreatedByUserRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Drive\DriveRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\ExternalColumns\ExternalColumnsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\GetActivitiesByInterval\GetActivitiesByIntervalRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithInterval\GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\GetApplicableContentTypesForListWithListId\GetApplicableContentTypesForListWithListIdRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\GetByPathWithPath\GetByPathWithPathRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Items\ItemsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\LastModifiedByUser\LastModifiedByUserRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Lists\ListsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Pages\PagesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Permissions\PermissionsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Sites\SitesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\TermStore\TermStoreRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\TermStores\TermStoresRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of site entities.
*/
class SiteItemRequestBuilder extends BaseRequestBuilder 
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
     * Provides operations to manage the createdByUser property of the microsoft.graph.baseItem entity.
    */
    public function createdByUser(): CreatedByUserRequestBuilder {
        return new CreatedByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the getActivitiesByInterval method.
    */
    public function getActivitiesByInterval(): GetActivitiesByIntervalRequestBuilder {
        return new GetActivitiesByIntervalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the items property of the microsoft.graph.site entity.
    */
    public function items(): ItemsRequestBuilder {
        return new ItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the lastModifiedByUser property of the microsoft.graph.baseItem entity.
    */
    public function lastModifiedByUser(): LastModifiedByUserRequestBuilder {
        return new LastModifiedByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the pages property of the microsoft.graph.site entity.
    */
    public function pages(): PagesRequestBuilder {
        return new PagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the permissions property of the microsoft.graph.site entity.
    */
    public function permissions(): PermissionsRequestBuilder {
        return new PermissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
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
     * Instantiates a new SiteItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/{site%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve properties and relationships for a [site][] resource.A site resource represents a team site in SharePoint.
     * @param SiteItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Site|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/site-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?SiteItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Site::class, 'createFromDiscriminatorValue'], $errorMappings);
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
     * Update entity in sites
     * @param Site $body The request body
     * @param SiteItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Site|null>
     * @throws Exception
    */
    public function patch(Site $body, ?SiteItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Site::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve properties and relationships for a [site][] resource.A site resource represents a team site in SharePoint.
     * @param SiteItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SiteItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update entity in sites
     * @param Site $body The request body
     * @param SiteItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Site $body, ?SiteItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SiteItemRequestBuilder
    */
    public function withUrl(string $rawUrl): SiteItemRequestBuilder {
        return new SiteItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
