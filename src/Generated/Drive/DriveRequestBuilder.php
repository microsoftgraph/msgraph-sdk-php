<?php

namespace Microsoft\Graph\Drive;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Drive\Bundles\BundlesRequestBuilder;
use Microsoft\Graph\Drive\Bundles\Item\DriveItemItemRequestBuilder as MicrosoftGraphDriveBundlesItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Drive\EscapedList\ListRequestBuilder;
use Microsoft\Graph\Drive\Following\FollowingRequestBuilder;
use Microsoft\Graph\Drive\Following\Item\DriveItemItemRequestBuilder as MicrosoftGraphDriveFollowingItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Drive\Items\Item\DriveItemItemRequestBuilder as MicrosoftGraphDriveItemsItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Drive\Items\ItemsRequestBuilder;
use Microsoft\Graph\Drive\Recent\RecentRequestBuilder;
use Microsoft\Graph\Drive\Root\RootRequestBuilder;
use Microsoft\Graph\Drive\SearchWithQ\SearchWithQRequestBuilder;
use Microsoft\Graph\Drive\SharedWithMe\SharedWithMeRequestBuilder;
use Microsoft\Graph\Drive\Special\Item\DriveItemItemRequestBuilder as MicrosoftGraphDriveSpecialItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Drive\Special\SpecialRequestBuilder;
use Microsoft\Graph\Models\Drive;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DriveRequestBuilder 
{
    /**
     * The bundles property
    */
    public function bundles(): BundlesRequestBuilder {
        return new BundlesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The list property
    */
    public function escapedList(): ListRequestBuilder {
        return new ListRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The following property
    */
    public function following(): FollowingRequestBuilder {
        return new FollowingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The items property
    */
    public function items(): ItemsRequestBuilder {
        return new ItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * The root property
    */
    public function root(): RootRequestBuilder {
        return new RootRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The special property
    */
    public function special(): SpecialRequestBuilder {
        return new SpecialRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph.drive.bundles.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphDriveBundlesItemDriveItemItemRequestBuilder
    */
    public function bundlesById(string $id): MicrosoftGraphDriveBundlesItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new MicrosoftGraphDriveBundlesItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DriveRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/drive{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get drive
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?DriveRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
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
     * Update drive
     * @param Drive $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Drive $body, ?DriveRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * Gets an item from the Microsoft\Graph.drive.following.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphDriveFollowingItemDriveItemItemRequestBuilder
    */
    public function followingById(string $id): MicrosoftGraphDriveFollowingItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new MicrosoftGraphDriveFollowingItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get drive
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?DriveRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Drive::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.drive.items.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphDriveItemsItemDriveItemItemRequestBuilder
    */
    public function itemsById(string $id): MicrosoftGraphDriveItemsItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new MicrosoftGraphDriveItemsItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update drive
     * @param Drive $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Drive $body, ?DriveRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the recent method.
     * @return RecentRequestBuilder
    */
    public function recent(): RecentRequestBuilder {
        return new RecentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the search method.
     * @param string $q Usage: q='{q}'
     * @return SearchWithQRequestBuilder
    */
    public function searchWithQ(string $q): SearchWithQRequestBuilder {
        return new SearchWithQRequestBuilder($this->pathParameters, $this->requestAdapter, $q);
    }

    /**
     * Provides operations to call the sharedWithMe method.
     * @return SharedWithMeRequestBuilder
    */
    public function sharedWithMe(): SharedWithMeRequestBuilder {
        return new SharedWithMeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.drive.special.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphDriveSpecialItemDriveItemItemRequestBuilder
    */
    public function specialById(string $id): MicrosoftGraphDriveSpecialItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new MicrosoftGraphDriveSpecialItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
