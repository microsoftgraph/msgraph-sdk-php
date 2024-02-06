<?php

namespace Microsoft\Graph\Generated\Shares\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SharedDriveItem;
use Microsoft\Graph\Generated\Shares\Item\CreatedByUser\CreatedByUserRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\DriveItem\DriveItemRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\EscapedList\ListRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\Items\ItemsRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\LastModifiedByUser\LastModifiedByUserRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\ListItem\ListItemRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\Permission\PermissionRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\Root\RootRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\Site\SiteRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of sharedDriveItem entities.
*/
class SharedDriveItemItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the createdByUser property of the microsoft.graph.baseItem entity.
    */
    public function createdByUser(): CreatedByUserRequestBuilder {
        return new CreatedByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the driveItem property of the microsoft.graph.sharedDriveItem entity.
    */
    public function driveItem(): DriveItemRequestBuilder {
        return new DriveItemRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the list property of the microsoft.graph.sharedDriveItem entity.
    */
    public function escapedList(): ListRequestBuilder {
        return new ListRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the items property of the microsoft.graph.sharedDriveItem entity.
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
     * Provides operations to manage the listItem property of the microsoft.graph.sharedDriveItem entity.
    */
    public function listItem(): ListItemRequestBuilder {
        return new ListItemRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the permission property of the microsoft.graph.sharedDriveItem entity.
    */
    public function permission(): PermissionRequestBuilder {
        return new PermissionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the root property of the microsoft.graph.sharedDriveItem entity.
    */
    public function root(): RootRequestBuilder {
        return new RootRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the site property of the microsoft.graph.sharedDriveItem entity.
    */
    public function site(): SiteRequestBuilder {
        return new SiteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SharedDriveItemItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shares/{sharedDriveItem%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete entity from shares
     * @param SharedDriveItemItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?SharedDriveItemItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Access a shared DriveItem or a collection of shared items by using a shareId or sharing URL. To use a sharing URL with this API, your app needs to transform the URL into a sharing token.
     * @param SharedDriveItemItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharedDriveItem|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/shares-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?SharedDriveItemItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharedDriveItem::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update entity in shares
     * @param SharedDriveItem $body The request body
     * @param SharedDriveItemItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharedDriveItem|null>
     * @throws Exception
    */
    public function patch(SharedDriveItem $body, ?SharedDriveItemItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharedDriveItem::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete entity from shares
     * @param SharedDriveItemItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?SharedDriveItemItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Access a shared DriveItem or a collection of shared items by using a shareId or sharing URL. To use a sharing URL with this API, your app needs to transform the URL into a sharing token.
     * @param SharedDriveItemItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SharedDriveItemItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update entity in shares
     * @param SharedDriveItem $body The request body
     * @param SharedDriveItemItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(SharedDriveItem $body, ?SharedDriveItemItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SharedDriveItemItemRequestBuilder
    */
    public function withUrl(string $rawUrl): SharedDriveItemItemRequestBuilder {
        return new SharedDriveItemItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
