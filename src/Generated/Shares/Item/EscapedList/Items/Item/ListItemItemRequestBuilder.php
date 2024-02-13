<?php

namespace Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ListItem;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\Analytics\AnalyticsRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\CreatedByUser\CreatedByUserRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\CreateLink\CreateLinkRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\DocumentSetVersions\DocumentSetVersionsRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\DriveItem\DriveItemRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\Fields\FieldsRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\GetActivitiesByInterval\GetActivitiesByIntervalRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithInterval\GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\LastModifiedByUser\LastModifiedByUserRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\Versions\VersionsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the items property of the microsoft.graph.list entity.
*/
class ListItemItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the analytics property of the microsoft.graph.listItem entity.
    */
    public function analytics(): AnalyticsRequestBuilder {
        return new AnalyticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the createdByUser property of the microsoft.graph.baseItem entity.
    */
    public function createdByUser(): CreatedByUserRequestBuilder {
        return new CreatedByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createLink method.
    */
    public function createLink(): CreateLinkRequestBuilder {
        return new CreateLinkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the documentSetVersions property of the microsoft.graph.listItem entity.
    */
    public function documentSetVersions(): DocumentSetVersionsRequestBuilder {
        return new DocumentSetVersionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the driveItem property of the microsoft.graph.listItem entity.
    */
    public function driveItem(): DriveItemRequestBuilder {
        return new DriveItemRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the fields property of the microsoft.graph.listItem entity.
    */
    public function fields(): FieldsRequestBuilder {
        return new FieldsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getActivitiesByInterval method.
    */
    public function getActivitiesByInterval(): GetActivitiesByIntervalRequestBuilder {
        return new GetActivitiesByIntervalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the lastModifiedByUser property of the microsoft.graph.baseItem entity.
    */
    public function lastModifiedByUser(): LastModifiedByUserRequestBuilder {
        return new LastModifiedByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the versions property of the microsoft.graph.listItem entity.
    */
    public function versions(): VersionsRequestBuilder {
        return new VersionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ListItemItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shares/{sharedDriveItem%2Did}/list/items/{listItem%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Removes an item from a [list][].
     * @param ListItemItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/listitem-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?ListItemItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Returns the metadata for an [item][] in a [list][].
     * @param ListItemItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListItem|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/listitem-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ListItemItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ListItem::class, 'createFromDiscriminatorValue'], $errorMappings);
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
     * Update the navigation property items in shares
     * @param ListItem $body The request body
     * @param ListItemItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListItem|null>
     * @throws Exception
    */
    public function patch(ListItem $body, ?ListItemItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ListItem::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Removes an item from a [list][].
     * @param ListItemItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ListItemItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/shares/{sharedDriveItem%2Did}/list/items/{listItem%2Did}';
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
     * Returns the metadata for an [item][] in a [list][].
     * @param ListItemItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ListItemItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property items in shares
     * @param ListItem $body The request body
     * @param ListItemItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ListItem $body, ?ListItemItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/shares/{sharedDriveItem%2Did}/list/items/{listItem%2Did}';
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
     * @return ListItemItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ListItemItemRequestBuilder {
        return new ListItemItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
