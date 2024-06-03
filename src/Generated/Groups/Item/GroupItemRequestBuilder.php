<?php

namespace Microsoft\Graph\Generated\Groups\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Groups\Item\AcceptedSenders\AcceptedSendersRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\AddFavorite\AddFavoriteRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\AssignLicense\AssignLicenseRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CheckGrantedPermissionsForApp\CheckGrantedPermissionsForAppRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Conversations\ConversationsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\CreatedOnBehalfOf\CreatedOnBehalfOfRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drive\DriveRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Events\EventsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\GroupLifecyclePolicies\GroupLifecyclePoliciesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\MembersWithLicenseErrors\MembersWithLicenseErrorsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Owners\OwnersRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Photos\PhotosRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\RejectedSenders\RejectedSendersRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\RemoveFavorite\RemoveFavoriteRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Renew\RenewRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\ResetUnseenCount\ResetUnseenCountRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\RetryServiceProvisioning\RetryServiceProvisioningRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\ServiceProvisioningErrors\ServiceProvisioningErrorsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\SitesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\SubscribeByMail\SubscribeByMailRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\TeamRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Threads\ThreadsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\TransitiveMembers\TransitiveMembersRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\UnsubscribeByMail\UnsubscribeByMailRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\ValidateProperties\ValidatePropertiesRequestBuilder;
use Microsoft\Graph\Generated\Models\Group;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of group entities.
*/
class GroupItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the acceptedSenders property of the microsoft.graph.group entity.
    */
    public function acceptedSenders(): AcceptedSendersRequestBuilder {
        return new AcceptedSendersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the addFavorite method.
    */
    public function addFavorite(): AddFavoriteRequestBuilder {
        return new AddFavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appRoleAssignments property of the microsoft.graph.group entity.
    */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder {
        return new AppRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the assignLicense method.
    */
    public function assignLicense(): AssignLicenseRequestBuilder {
        return new AssignLicenseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendar property of the microsoft.graph.group entity.
    */
    public function calendar(): CalendarRequestBuilder {
        return new CalendarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendarView property of the microsoft.graph.group entity.
    */
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkGrantedPermissionsForApp method.
    */
    public function checkGrantedPermissionsForApp(): CheckGrantedPermissionsForAppRequestBuilder {
        return new CheckGrantedPermissionsForAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberGroups method.
    */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberObjects method.
    */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the conversations property of the microsoft.graph.group entity.
    */
    public function conversations(): ConversationsRequestBuilder {
        return new ConversationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the createdOnBehalfOf property of the microsoft.graph.group entity.
    */
    public function createdOnBehalfOf(): CreatedOnBehalfOfRequestBuilder {
        return new CreatedOnBehalfOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drive property of the microsoft.graph.group entity.
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drives property of the microsoft.graph.group entity.
    */
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the events property of the microsoft.graph.group entity.
    */
    public function events(): EventsRequestBuilder {
        return new EventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the extensions property of the microsoft.graph.group entity.
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberGroups method.
    */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberObjects method.
    */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupLifecyclePolicies property of the microsoft.graph.group entity.
    */
    public function groupLifecyclePolicies(): GroupLifecyclePoliciesRequestBuilder {
        return new GroupLifecyclePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the memberOf property of the microsoft.graph.group entity.
    */
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the members property of the microsoft.graph.group entity.
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the membersWithLicenseErrors property of the microsoft.graph.group entity.
    */
    public function membersWithLicenseErrors(): MembersWithLicenseErrorsRequestBuilder {
        return new MembersWithLicenseErrorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onenote property of the microsoft.graph.group entity.
    */
    public function onenote(): OnenoteRequestBuilder {
        return new OnenoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the owners property of the microsoft.graph.group entity.
    */
    public function owners(): OwnersRequestBuilder {
        return new OwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the permissionGrants property of the microsoft.graph.group entity.
    */
    public function permissionGrants(): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the photo property of the microsoft.graph.group entity.
    */
    public function photo(): PhotoRequestBuilder {
        return new PhotoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the photos property of the microsoft.graph.group entity.
    */
    public function photos(): PhotosRequestBuilder {
        return new PhotosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the planner property of the microsoft.graph.group entity.
    */
    public function planner(): PlannerRequestBuilder {
        return new PlannerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the rejectedSenders property of the microsoft.graph.group entity.
    */
    public function rejectedSenders(): RejectedSendersRequestBuilder {
        return new RejectedSendersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeFavorite method.
    */
    public function removeFavorite(): RemoveFavoriteRequestBuilder {
        return new RemoveFavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the renew method.
    */
    public function renew(): RenewRequestBuilder {
        return new RenewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the resetUnseenCount method.
    */
    public function resetUnseenCount(): ResetUnseenCountRequestBuilder {
        return new ResetUnseenCountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retryServiceProvisioning method.
    */
    public function retryServiceProvisioning(): RetryServiceProvisioningRequestBuilder {
        return new RetryServiceProvisioningRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The serviceProvisioningErrors property
    */
    public function serviceProvisioningErrors(): ServiceProvisioningErrorsRequestBuilder {
        return new ServiceProvisioningErrorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the settings property of the microsoft.graph.group entity.
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sites property of the microsoft.graph.group entity.
    */
    public function sites(): SitesRequestBuilder {
        return new SitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the subscribeByMail method.
    */
    public function subscribeByMail(): SubscribeByMailRequestBuilder {
        return new SubscribeByMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the team property of the microsoft.graph.group entity.
    */
    public function team(): TeamRequestBuilder {
        return new TeamRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the threads property of the microsoft.graph.group entity.
    */
    public function threads(): ThreadsRequestBuilder {
        return new ThreadsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the transitiveMemberOf property of the microsoft.graph.group entity.
    */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the transitiveMembers property of the microsoft.graph.group entity.
    */
    public function transitiveMembers(): TransitiveMembersRequestBuilder {
        return new TransitiveMembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unsubscribeByMail method.
    */
    public function unsubscribeByMail(): UnsubscribeByMailRequestBuilder {
        return new UnsubscribeByMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the validateProperties method.
    */
    public function validateProperties(): ValidatePropertiesRequestBuilder {
        return new ValidatePropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GroupItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete group. When deleted, Microsoft 365 groups are moved to a temporary container and can be restored within 30 days. After that time, they're permanently deleted. This isn't applicable to Security groups and Distribution groups which are permanently deleted immediately. To learn more, see deletedItems.
     * @param GroupItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/group-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?GroupItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the properties and relationships of a group object. This operation returns by default only a subset of all the available properties, as noted in the Properties section. To get properties that aren't_ returned by default, specify them in a $select OData query option. The hasMembersWithLicenseErrors and isArchived properties are an exception and aren't returned in the $select query.
     * @param GroupItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Group|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/group-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?GroupItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Group::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new group object if it doesn't exist, or update the properties of an existing group object.You can create or update the following types of group: By default, this operation returns only a subset of the properties for each group. For a list of properties that are returned by default, see the Properties section of the group resource. To get properties that are not returned by default, do a GET operation and specify the properties in a $select OData query option.
     * @param Group $body The request body
     * @param GroupItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Group|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/group-upsert?view=graph-rest-1.0 Find more info here
    */
    public function patch(Group $body, ?GroupItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Group::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete group. When deleted, Microsoft 365 groups are moved to a temporary container and can be restored within 30 days. After that time, they're permanently deleted. This isn't applicable to Security groups and Distribution groups which are permanently deleted immediately. To learn more, see deletedItems.
     * @param GroupItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?GroupItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get the properties and relationships of a group object. This operation returns by default only a subset of all the available properties, as noted in the Properties section. To get properties that aren't_ returned by default, specify them in a $select OData query option. The hasMembersWithLicenseErrors and isArchived properties are an exception and aren't returned in the $select query.
     * @param GroupItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GroupItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new group object if it doesn't exist, or update the properties of an existing group object.You can create or update the following types of group: By default, this operation returns only a subset of the properties for each group. For a list of properties that are returned by default, see the Properties section of the group resource. To get properties that are not returned by default, do a GET operation and specify the properties in a $select OData query option.
     * @param Group $body The request body
     * @param GroupItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Group $body, ?GroupItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GroupItemRequestBuilder
    */
    public function withUrl(string $rawUrl): GroupItemRequestBuilder {
        return new GroupItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
