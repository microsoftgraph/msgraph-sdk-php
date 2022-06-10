<?php

namespace Microsoft\Graph\Users\Item\Drives\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Models\Drive;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Graph\Users\Item\Drives\Item\Bundles\BundlesRequestBuilder;
use Microsoft\Graph\Users\Item\Drives\Item\Bundles\Item\DriveItemItemRequestBuilder as MicrosoftGraphUsersItemDrivesItemBundlesItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Users\Item\Drives\Item\EscapedList\ListRequestBuilder;
use Microsoft\Graph\Users\Item\Drives\Item\Following\FollowingRequestBuilder;
use Microsoft\Graph\Users\Item\Drives\Item\Following\Item\DriveItemItemRequestBuilder as MicrosoftGraphUsersItemDrivesItemFollowingItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Users\Item\Drives\Item\Items\Item\DriveItemItemRequestBuilder as MicrosoftGraphUsersItemDrivesItemItemsItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Users\Item\Drives\Item\Items\ItemsRequestBuilder;
use Microsoft\Graph\Users\Item\Drives\Item\Recent\RecentRequestBuilder;
use Microsoft\Graph\Users\Item\Drives\Item\Root\RootRequestBuilder;
use Microsoft\Graph\Users\Item\Drives\Item\SearchWithQ\SearchWithQRequestBuilder;
use Microsoft\Graph\Users\Item\Drives\Item\SharedWithMe\SharedWithMeRequestBuilder;
use Microsoft\Graph\Users\Item\Drives\Item\Special\Item\DriveItemItemRequestBuilder as MicrosoftGraphUsersItemDrivesItemSpecialItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Users\Item\Drives\Item\Special\SpecialRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DriveItemRequestBuilder 
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
     * Gets an item from the Microsoft\Graph.users.item.drives.item.bundles.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphUsersItemDrivesItemBundlesItemDriveItemItemRequestBuilder
    */
    public function bundlesById(string $id): MicrosoftGraphUsersItemDrivesItemBundlesItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new MicrosoftGraphUsersItemDrivesItemBundlesItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DriveItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user%2Did}/drives/{drive%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property drives for users
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?DriveItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * A collection of drives available for this user. Read-only.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?DriveItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property drives in users
     * @param Drive $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Drive $body, ?DriveItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Delete navigation property drives for users
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?DriveItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
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
     * Gets an item from the Microsoft\Graph.users.item.drives.item.following.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphUsersItemDrivesItemFollowingItemDriveItemItemRequestBuilder
    */
    public function followingById(string $id): MicrosoftGraphUsersItemDrivesItemFollowingItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new MicrosoftGraphUsersItemDrivesItemFollowingItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * A collection of drives available for this user. Read-only.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?DriveItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Gets an item from the Microsoft\Graph.users.item.drives.item.items.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphUsersItemDrivesItemItemsItemDriveItemItemRequestBuilder
    */
    public function itemsById(string $id): MicrosoftGraphUsersItemDrivesItemItemsItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new MicrosoftGraphUsersItemDrivesItemItemsItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property drives in users
     * @param Drive $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Drive $body, ?DriveItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Gets an item from the Microsoft\Graph.users.item.drives.item.special.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphUsersItemDrivesItemSpecialItemDriveItemItemRequestBuilder
    */
    public function specialById(string $id): MicrosoftGraphUsersItemDrivesItemSpecialItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new MicrosoftGraphUsersItemDrivesItemSpecialItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
