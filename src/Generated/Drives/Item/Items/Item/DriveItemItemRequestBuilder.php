<?php

namespace Microsoft\\Graph\\Generated\Drives\Item\Items\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Analytics\AnalyticsRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\AssignSensitivityLabel\AssignSensitivityLabelRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Checkin\CheckinRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Checkout\CheckoutRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Children\ChildrenRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Content\ContentRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Copy\CopyRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\CreatedByUser\CreatedByUserRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\CreateLink\CreateLinkRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\CreateUploadSession\CreateUploadSessionRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Delta\DeltaRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\DeltaWithToken\DeltaWithTokenRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\DiscardCheckout\DiscardCheckoutRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\ExtractSensitivityLabels\ExtractSensitivityLabelsRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Follow\FollowRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\GetActivitiesByInterval\GetActivitiesByIntervalRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithInterval\GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Invite\InviteRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\LastModifiedByUser\LastModifiedByUserRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\ListItem\ListItemRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\PermanentDelete\PermanentDeleteRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Permissions\PermissionsRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Preview\PreviewRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Restore\RestoreRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\RetentionLabel\RetentionLabelRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\SearchWithQ\SearchWithQRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Subscriptions\SubscriptionsRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Thumbnails\ThumbnailsRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Unfollow\UnfollowRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\ValidatePermission\ValidatePermissionRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Versions\VersionsRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Workbook\WorkbookRequestBuilder;
use Microsoft\\Graph\\Generated\Models\DriveItem;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the items property of the microsoft.graph.drive entity.
*/
class DriveItemItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the analytics property of the microsoft.graph.driveItem entity.
    */
    public function analytics(): AnalyticsRequestBuilder {
        return new AnalyticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the assignSensitivityLabel method.
    */
    public function assignSensitivityLabel(): AssignSensitivityLabelRequestBuilder {
        return new AssignSensitivityLabelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkin method.
    */
    public function checkin(): CheckinRequestBuilder {
        return new CheckinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkout method.
    */
    public function checkout(): CheckoutRequestBuilder {
        return new CheckoutRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the copy method.
    */
    public function copy(): CopyRequestBuilder {
        return new CopyRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the createUploadSession method.
    */
    public function createUploadSession(): CreateUploadSessionRequestBuilder {
        return new CreateUploadSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the delta method.
    */
    public function delta(): DeltaRequestBuilder {
        return new DeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the discardCheckout method.
    */
    public function discardCheckout(): DiscardCheckoutRequestBuilder {
        return new DiscardCheckoutRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the extractSensitivityLabels method.
    */
    public function extractSensitivityLabels(): ExtractSensitivityLabelsRequestBuilder {
        return new ExtractSensitivityLabelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the follow method.
    */
    public function follow(): FollowRequestBuilder {
        return new FollowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getActivitiesByInterval method.
    */
    public function getActivitiesByInterval(): GetActivitiesByIntervalRequestBuilder {
        return new GetActivitiesByIntervalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the invite method.
    */
    public function invite(): InviteRequestBuilder {
        return new InviteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the lastModifiedByUser property of the microsoft.graph.baseItem entity.
    */
    public function lastModifiedByUser(): LastModifiedByUserRequestBuilder {
        return new LastModifiedByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the listItem property of the microsoft.graph.driveItem entity.
    */
    public function listItem(): ListItemRequestBuilder {
        return new ListItemRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the permanentDelete method.
    */
    public function permanentDelete(): PermanentDeleteRequestBuilder {
        return new PermanentDeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the permissions property of the microsoft.graph.driveItem entity.
    */
    public function permissions(): PermissionsRequestBuilder {
        return new PermissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the preview method.
    */
    public function preview(): PreviewRequestBuilder {
        return new PreviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the retentionLabel property of the microsoft.graph.driveItem entity.
    */
    public function retentionLabel(): RetentionLabelRequestBuilder {
        return new RetentionLabelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
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
     * Provides operations to call the unfollow method.
    */
    public function unfollow(): UnfollowRequestBuilder {
        return new UnfollowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the validatePermission method.
    */
    public function validatePermission(): ValidatePermissionRequestBuilder {
        return new ValidatePermissionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
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
     * Instantiates a new DriveItemItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property items for drives
     * @param DriveItemItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DriveItemItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Provides operations to call the delta method.
     * @param string $token Usage: token='{token}'
     * @return DeltaWithTokenRequestBuilder
    */
    public function deltaWithToken(string $token): DeltaWithTokenRequestBuilder {
        return new DeltaWithTokenRequestBuilder($this->pathParameters, $this->requestAdapter, $token);
    }

    /**
     * All items contained in the drive. Read-only. Nullable.
     * @param DriveItemItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveItem|null>
     * @throws Exception
    */
    public function get(?DriveItemItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveItem::class, 'createFromDiscriminatorValue'], $errorMappings);
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
     * Update the navigation property items in drives
     * @param DriveItem $body The request body
     * @param DriveItemItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveItem|null>
     * @throws Exception
    */
    public function patch(DriveItem $body, ?DriveItemItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveItem::class, 'createFromDiscriminatorValue'], $errorMappings);
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
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
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
     * @return DriveItemItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DriveItemItemRequestBuilder {
        return new DriveItemItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
