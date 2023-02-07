<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Analytics\AnalyticsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Children\ChildrenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Content\ContentRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\ListItem\ListItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphCheckin\MicrosoftGraphCheckinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphCheckout\MicrosoftGraphCheckoutRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphCopy\MicrosoftGraphCopyRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphCreateLink\MicrosoftGraphCreateLinkRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphCreateUploadSession\MicrosoftGraphCreateUploadSessionRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphDelta\MicrosoftGraphDeltaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphDeltaWithToken\MicrosoftGraphDeltaWithTokenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphFollow\MicrosoftGraphFollowRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphGetActivitiesByInterval\MicrosoftGraphGetActivitiesByIntervalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithInterval\MicrosoftGraphGetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphInvite\MicrosoftGraphInviteRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphPreview\MicrosoftGraphPreviewRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphRestore\MicrosoftGraphRestoreRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphSearchWithQ\MicrosoftGraphSearchWithQRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphUnfollow\MicrosoftGraphUnfollowRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphValidatePermission\MicrosoftGraphValidatePermissionRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Permissions\Item\PermissionItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Permissions\PermissionsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Subscriptions\Item\SubscriptionItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Subscriptions\SubscriptionsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Thumbnails\Item\ThumbnailSetItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Thumbnails\ThumbnailsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Versions\Item\DriveItemVersionItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Versions\VersionsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\WorkbookRequestBuilder;
use Microsoft\Graph\Generated\Models\DriveItem;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the items property of the microsoft.graph.drive entity.
*/
class DriveItemItemRequestBuilder 
{
    /**
     * Provides operations to manage the analytics property of the microsoft.graph.driveItem entity.
    */
    public function analytics(): AnalyticsRequestBuilder {
        return new AnalyticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the children property of the microsoft.graph.driveItem entity.
    */
    public function children(): ChildrenRequestBuilder {
        return new ChildrenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the media for the drive entity.
    */
    public function content(): ContentRequestBuilder {
        return new ContentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the listItem property of the microsoft.graph.driveItem entity.
    */
    public function listItem(): ListItemRequestBuilder {
        return new ListItemRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkin method.
    */
    public function microsoftGraphCheckin(): MicrosoftGraphCheckinRequestBuilder {
        return new MicrosoftGraphCheckinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkout method.
    */
    public function microsoftGraphCheckout(): MicrosoftGraphCheckoutRequestBuilder {
        return new MicrosoftGraphCheckoutRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the copy method.
    */
    public function microsoftGraphCopy(): MicrosoftGraphCopyRequestBuilder {
        return new MicrosoftGraphCopyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createLink method.
    */
    public function microsoftGraphCreateLink(): MicrosoftGraphCreateLinkRequestBuilder {
        return new MicrosoftGraphCreateLinkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createUploadSession method.
    */
    public function microsoftGraphCreateUploadSession(): MicrosoftGraphCreateUploadSessionRequestBuilder {
        return new MicrosoftGraphCreateUploadSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the delta method.
    */
    public function microsoftGraphDelta(): MicrosoftGraphDeltaRequestBuilder {
        return new MicrosoftGraphDeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the follow method.
    */
    public function microsoftGraphFollow(): MicrosoftGraphFollowRequestBuilder {
        return new MicrosoftGraphFollowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getActivitiesByInterval method.
    */
    public function microsoftGraphGetActivitiesByInterval(): MicrosoftGraphGetActivitiesByIntervalRequestBuilder {
        return new MicrosoftGraphGetActivitiesByIntervalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the invite method.
    */
    public function microsoftGraphInvite(): MicrosoftGraphInviteRequestBuilder {
        return new MicrosoftGraphInviteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the preview method.
    */
    public function microsoftGraphPreview(): MicrosoftGraphPreviewRequestBuilder {
        return new MicrosoftGraphPreviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function microsoftGraphRestore(): MicrosoftGraphRestoreRequestBuilder {
        return new MicrosoftGraphRestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unfollow method.
    */
    public function microsoftGraphUnfollow(): MicrosoftGraphUnfollowRequestBuilder {
        return new MicrosoftGraphUnfollowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the validatePermission method.
    */
    public function microsoftGraphValidatePermission(): MicrosoftGraphValidatePermissionRequestBuilder {
        return new MicrosoftGraphValidatePermissionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the permissions property of the microsoft.graph.driveItem entity.
    */
    public function permissions(): PermissionsRequestBuilder {
        return new PermissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the subscriptions property of the microsoft.graph.driveItem entity.
    */
    public function subscriptions(): SubscriptionsRequestBuilder {
        return new SubscriptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the thumbnails property of the microsoft.graph.driveItem entity.
    */
    public function thumbnails(): ThumbnailsRequestBuilder {
        return new ThumbnailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the versions property of the microsoft.graph.driveItem entity.
    */
    public function versions(): VersionsRequestBuilder {
        return new VersionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the workbook property of the microsoft.graph.driveItem entity.
    */
    public function workbook(): WorkbookRequestBuilder {
        return new WorkbookRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the children property of the microsoft.graph.driveItem entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Drives\Item\Items\Item\Children\Item\DriveItemItemRequestBuilder
    */
    public function childrenById(string $id): \Microsoft\Graph\Generated\Drives\Item\Items\Item\Children\Item\DriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did1'] = $id;
        return new \Microsoft\Graph\Generated\Drives\Item\Items\Item\Children\Item\DriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DriveItemItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property items for drives
     * @param DriveItemItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?DriveItemItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * All items contained in the drive. Read-only. Nullable.
     * @param DriveItemItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?DriveItemItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DriveItem::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the delta method.
     * @param string $token Usage: token='{token}'
     * @return MicrosoftGraphDeltaWithTokenRequestBuilder
    */
    public function microsoftGraphDeltaWithToken(string $token): MicrosoftGraphDeltaWithTokenRequestBuilder {
        return new MicrosoftGraphDeltaWithTokenRequestBuilder($this->pathParameters, $this->requestAdapter, $token);
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
     * Provides operations to call the search method.
     * @param string $q Usage: q='{q}'
     * @return MicrosoftGraphSearchWithQRequestBuilder
    */
    public function microsoftGraphSearchWithQ(string $q): MicrosoftGraphSearchWithQRequestBuilder {
        return new MicrosoftGraphSearchWithQRequestBuilder($this->pathParameters, $this->requestAdapter, $q);
    }

    /**
     * Update the navigation property items in drives
     * @param DriveItem $body The request body
     * @param DriveItemItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(DriveItem $body, ?DriveItemItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DriveItem::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the permissions property of the microsoft.graph.driveItem entity.
     * @param string $id Unique identifier of the item
     * @return PermissionItemRequestBuilder
    */
    public function permissionsById(string $id): PermissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permission%2Did'] = $id;
        return new PermissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the subscriptions property of the microsoft.graph.driveItem entity.
     * @param string $id Unique identifier of the item
     * @return SubscriptionItemRequestBuilder
    */
    public function subscriptionsById(string $id): SubscriptionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscription%2Did'] = $id;
        return new SubscriptionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the thumbnails property of the microsoft.graph.driveItem entity.
     * @param string $id Unique identifier of the item
     * @return ThumbnailSetItemRequestBuilder
    */
    public function thumbnailsById(string $id): ThumbnailSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['thumbnailSet%2Did'] = $id;
        return new ThumbnailSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property items for drives
     * @param DriveItemItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DriveItemItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * All items contained in the drive. Read-only. Nullable.
     * @param DriveItemItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DriveItemItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property items in drives
     * @param DriveItem $body The request body
     * @param DriveItemItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DriveItem $body, ?DriveItemItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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

    /**
     * Provides operations to manage the versions property of the microsoft.graph.driveItem entity.
     * @param string $id Unique identifier of the item
     * @return DriveItemVersionItemRequestBuilder
    */
    public function versionsById(string $id): DriveItemVersionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItemVersion%2Did'] = $id;
        return new DriveItemVersionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
