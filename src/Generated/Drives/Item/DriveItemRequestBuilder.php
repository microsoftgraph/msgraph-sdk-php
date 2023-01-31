<?php

namespace Microsoft\Graph\Generated\Drives\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Drives\Item\Bundles\BundlesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\EscapedList\ListRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Following\FollowingRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\ItemsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\MicrosoftGraphRecent\RecentRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\MicrosoftGraphSearchWithQ\SearchWithQRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\MicrosoftGraphSharedWithMe\SharedWithMeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Root\RootRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Special\SpecialRequestBuilder;
use Microsoft\Graph\Generated\Models\Drive;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the collection of drive entities.
*/
class DriveItemRequestBuilder 
{
    /**
     * Provides operations to manage the bundles property of the microsoft.graph.drive entity.
    */
    public function bundles(): BundlesRequestBuilder {
        return new BundlesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the list property of the microsoft.graph.drive entity.
    */
    public function escapedList(): ListRequestBuilder {
        return new ListRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the following property of the microsoft.graph.drive entity.
    */
    public function following(): FollowingRequestBuilder {
        return new FollowingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the items property of the microsoft.graph.drive entity.
    */
    public function items(): ItemsRequestBuilder {
        return new ItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the recent method.
    */
    public function microsoftGraphRecent(): RecentRequestBuilder {
        return new RecentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sharedWithMe method.
    */
    public function microsoftGraphSharedWithMe(): SharedWithMeRequestBuilder {
        return new SharedWithMeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the root property of the microsoft.graph.drive entity.
    */
    public function root(): RootRequestBuilder {
        return new RootRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the special property of the microsoft.graph.drive entity.
    */
    public function special(): SpecialRequestBuilder {
        return new SpecialRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the bundles property of the microsoft.graph.drive entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Drives\Item\Bundles\Item\DriveItemItemRequestBuilder
    */
    public function bundlesById(string $id): \Microsoft\Graph\Generated\Drives\Item\Bundles\Item\DriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Drives\Item\Bundles\Item\DriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DriveItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $driveId key: id of drive
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $driveId = null) {
        $this->urlTemplate = '{+baseurl}/drives/{drive%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['driveId'] = $driveId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

    /**
     * Delete entity from drives
     * @param DriveItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?DriveItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Provides operations to manage the following property of the microsoft.graph.drive entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Drives\Item\Following\Item\DriveItemItemRequestBuilder
    */
    public function followingById(string $id): \Microsoft\Graph\Generated\Drives\Item\Following\Item\DriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Drives\Item\Following\Item\DriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Retrieve the properties and relationships of a Drive resource. A Drive is the top-level container for a file system, such as OneDrive or SharePoint document libraries.
     * @param DriveItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/drive-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DriveItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Drive::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the items property of the microsoft.graph.drive entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Drives\Item\Items\Item\DriveItemItemRequestBuilder
    */
    public function itemsById(string $id): \Microsoft\Graph\Generated\Drives\Item\Items\Item\DriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Drives\Item\Items\Item\DriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the search method.
     * @param string $q Usage: q='{q}'
     * @return SearchWithQRequestBuilder
    */
    public function microsoftGraphSearchWithQ(string $q): SearchWithQRequestBuilder {
        return new SearchWithQRequestBuilder($this->pathParameters, $this->requestAdapter, $q);
    }

    /**
     * Update entity in drives
     * @param DriveItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(Drive $body, ?DriveItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Drive::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the special property of the microsoft.graph.drive entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Drives\Item\Special\Item\DriveItemItemRequestBuilder
    */
    public function specialById(string $id): \Microsoft\Graph\Generated\Drives\Item\Special\Item\DriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Drives\Item\Special\Item\DriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete entity from drives
     * @param DriveItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DriveItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Retrieve the properties and relationships of a Drive resource. A Drive is the top-level container for a file system, such as OneDrive or SharePoint document libraries.
     * @param DriveItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DriveItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update entity in drives
     * @param DriveItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Drive $body, ?DriveItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
