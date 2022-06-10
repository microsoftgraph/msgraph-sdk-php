<?php

namespace Microsoft\Graph\Groups\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Groups\Item\AcceptedSenders\AcceptedSendersRequestBuilder;
use Microsoft\Graph\Groups\Item\AcceptedSenders\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGroupsItemAcceptedSendersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Groups\Item\AddFavorite\AddFavoriteRequestBuilder;
use Microsoft\Graph\Groups\Item\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Groups\Item\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Groups\Item\AssignLicense\AssignLicenseRequestBuilder;
use Microsoft\Graph\Groups\Item\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Groups\Item\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Groups\Item\CalendarView\Item\EventItemRequestBuilder as MicrosoftGraphGroupsItemCalendarViewItemEventItemRequestBuilder;
use Microsoft\Graph\Groups\Item\CheckGrantedPermissionsForApp\CheckGrantedPermissionsForAppRequestBuilder;
use Microsoft\Graph\Groups\Item\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Groups\Item\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Groups\Item\Conversations\ConversationsRequestBuilder;
use Microsoft\Graph\Groups\Item\Conversations\Item\ConversationItemRequestBuilder;
use Microsoft\Graph\Groups\Item\CreatedOnBehalfOf\CreatedOnBehalfOfRequestBuilder;
use Microsoft\Graph\Groups\Item\Drive\DriveRequestBuilder;
use Microsoft\Graph\Groups\Item\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Groups\Item\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Groups\Item\Events\EventsRequestBuilder;
use Microsoft\Graph\Groups\Item\Events\Item\EventItemRequestBuilder as MicrosoftGraphGroupsItemEventsItemEventItemRequestBuilder;
use Microsoft\Graph\Groups\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Groups\Item\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Groups\Item\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Groups\Item\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Groups\Item\GroupLifecyclePolicies\GroupLifecyclePoliciesRequestBuilder;
use Microsoft\Graph\Groups\Item\GroupLifecyclePolicies\Item\GroupLifecyclePolicyItemRequestBuilder;
use Microsoft\Graph\Groups\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGroupsItemMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Groups\Item\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Groups\Item\Members\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGroupsItemMembersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Groups\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Groups\Item\MembersWithLicenseErrors\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGroupsItemMembersWithLicenseErrorsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Groups\Item\MembersWithLicenseErrors\MembersWithLicenseErrorsRequestBuilder;
use Microsoft\Graph\Groups\Item\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Groups\Item\Owners\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGroupsItemOwnersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Groups\Item\Owners\OwnersRequestBuilder;
use Microsoft\Graph\Groups\Item\PermissionGrants\Item\ResourceSpecificPermissionGrantItemRequestBuilder;
use Microsoft\Graph\Groups\Item\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Groups\Item\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Groups\Item\Photos\Item\ProfilePhotoItemRequestBuilder;
use Microsoft\Graph\Groups\Item\Photos\PhotosRequestBuilder;
use Microsoft\Graph\Groups\Item\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Groups\Item\RejectedSenders\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGroupsItemRejectedSendersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Groups\Item\RejectedSenders\RejectedSendersRequestBuilder;
use Microsoft\Graph\Groups\Item\RemoveFavorite\RemoveFavoriteRequestBuilder;
use Microsoft\Graph\Groups\Item\Renew\RenewRequestBuilder;
use Microsoft\Graph\Groups\Item\ResetUnseenCount\ResetUnseenCountRequestBuilder;
use Microsoft\Graph\Groups\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Groups\Item\Settings\Item\GroupSettingItemRequestBuilder;
use Microsoft\Graph\Groups\Item\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Groups\Item\Sites\Item\SiteItemRequestBuilder;
use Microsoft\Graph\Groups\Item\Sites\SitesRequestBuilder;
use Microsoft\Graph\Groups\Item\SubscribeByMail\SubscribeByMailRequestBuilder;
use Microsoft\Graph\Groups\Item\Team\TeamRequestBuilder;
use Microsoft\Graph\Groups\Item\Threads\Item\ConversationThreadItemRequestBuilder;
use Microsoft\Graph\Groups\Item\Threads\ThreadsRequestBuilder;
use Microsoft\Graph\Groups\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGroupsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Groups\Item\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Groups\Item\TransitiveMembers\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGroupsItemTransitiveMembersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Groups\Item\TransitiveMembers\TransitiveMembersRequestBuilder;
use Microsoft\Graph\Groups\Item\UnsubscribeByMail\UnsubscribeByMailRequestBuilder;
use Microsoft\Graph\Groups\Item\ValidateProperties\ValidatePropertiesRequestBuilder;
use Microsoft\Graph\Models\Group;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class GroupItemRequestBuilder 
{
    /**
     * The acceptedSenders property
    */
    public function acceptedSenders(): AcceptedSendersRequestBuilder {
        return new AcceptedSendersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The addFavorite property
    */
    public function addFavorite(): AddFavoriteRequestBuilder {
        return new AddFavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The appRoleAssignments property
    */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder {
        return new AppRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The assignLicense property
    */
    public function assignLicense(): AssignLicenseRequestBuilder {
        return new AssignLicenseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendar property
    */
    public function calendar(): CalendarRequestBuilder {
        return new CalendarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendarView property
    */
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkGrantedPermissionsForApp property
    */
    public function checkGrantedPermissionsForApp(): CheckGrantedPermissionsForAppRequestBuilder {
        return new CheckGrantedPermissionsForAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberGroups property
    */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberObjects property
    */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The conversations property
    */
    public function conversations(): ConversationsRequestBuilder {
        return new ConversationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The createdOnBehalfOf property
    */
    public function createdOnBehalfOf(): CreatedOnBehalfOfRequestBuilder {
        return new CreatedOnBehalfOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The drive property
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The drives property
    */
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The events property
    */
    public function events(): EventsRequestBuilder {
        return new EventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The extensions property
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberGroups property
    */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberObjects property
    */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The groupLifecyclePolicies property
    */
    public function groupLifecyclePolicies(): GroupLifecyclePoliciesRequestBuilder {
        return new GroupLifecyclePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The memberOf property
    */
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The members property
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The membersWithLicenseErrors property
    */
    public function membersWithLicenseErrors(): MembersWithLicenseErrorsRequestBuilder {
        return new MembersWithLicenseErrorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The onenote property
    */
    public function onenote(): OnenoteRequestBuilder {
        return new OnenoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The owners property
    */
    public function owners(): OwnersRequestBuilder {
        return new OwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The permissionGrants property
    */
    public function permissionGrants(): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The photo property
    */
    public function photo(): PhotoRequestBuilder {
        return new PhotoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The photos property
    */
    public function photos(): PhotosRequestBuilder {
        return new PhotosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The planner property
    */
    public function planner(): PlannerRequestBuilder {
        return new PlannerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The rejectedSenders property
    */
    public function rejectedSenders(): RejectedSendersRequestBuilder {
        return new RejectedSendersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removeFavorite property
    */
    public function removeFavorite(): RemoveFavoriteRequestBuilder {
        return new RemoveFavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The renew property
    */
    public function renew(): RenewRequestBuilder {
        return new RenewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The resetUnseenCount property
    */
    public function resetUnseenCount(): ResetUnseenCountRequestBuilder {
        return new ResetUnseenCountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The restore property
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The settings property
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sites property
    */
    public function sites(): SitesRequestBuilder {
        return new SitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscribeByMail property
    */
    public function subscribeByMail(): SubscribeByMailRequestBuilder {
        return new SubscribeByMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The team property
    */
    public function team(): TeamRequestBuilder {
        return new TeamRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The threads property
    */
    public function threads(): ThreadsRequestBuilder {
        return new ThreadsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transitiveMemberOf property
    */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transitiveMembers property
    */
    public function transitiveMembers(): TransitiveMembersRequestBuilder {
        return new TransitiveMembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unsubscribeByMail property
    */
    public function unsubscribeByMail(): UnsubscribeByMailRequestBuilder {
        return new UnsubscribeByMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The validateProperties property
    */
    public function validateProperties(): ValidatePropertiesRequestBuilder {
        return new ValidatePropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph.groups.item.acceptedSenders.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGroupsItemAcceptedSendersItemDirectoryObjectItemRequestBuilder
    */
    public function acceptedSendersById(string $id): MicrosoftGraphGroupsItemAcceptedSendersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphGroupsItemAcceptedSendersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.appRoleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return AppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignmentsById(string $id): AppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment%2Did'] = $id;
        return new AppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.calendarView.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGroupsItemCalendarViewItemEventItemRequestBuilder
    */
    public function calendarViewById(string $id): MicrosoftGraphGroupsItemCalendarViewItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new MicrosoftGraphGroupsItemCalendarViewItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GroupItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.conversations.item collection
     * @param string $id Unique identifier of the item
     * @return ConversationItemRequestBuilder
    */
    public function conversationsById(string $id): ConversationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversation%2Did'] = $id;
        return new ConversationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Deletes a group. When deleted, Microsoft 365 groups are moved to a temporary container and can be restored within 30 days. After that time, they are permanently deleted. This isn't applicable to Security groups and Distribution groups which are permanently deleted immediately. To learn more, see deletedItems.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?GroupItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get the properties and relationships of a group object. This operation returns by default only a subset of all the available properties, as noted in the Properties section. To get properties that are _not_ returned by default, specify them in a `$select` OData query option. The **hasMembersWithLicenseErrors** property is an exception and is not returned in the `$select` query. Because the **group** resource supports extensions, you can also use the `GET` operation to get custom properties and extension data in a **group** instance.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?GroupItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a group object.
     * @param Group $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Group $body, ?GroupItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Deletes a group. When deleted, Microsoft 365 groups are moved to a temporary container and can be restored within 30 days. After that time, they are permanently deleted. This isn't applicable to Security groups and Distribution groups which are permanently deleted immediately. To learn more, see deletedItems.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?GroupItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Gets an item from the Microsoft\Graph.groups.item.drives.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive%2Did'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.events.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGroupsItemEventsItemEventItemRequestBuilder
    */
    public function eventsById(string $id): MicrosoftGraphGroupsItemEventsItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new MicrosoftGraphGroupsItemEventsItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.extensions.item collection
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension%2Did'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get the properties and relationships of a group object. This operation returns by default only a subset of all the available properties, as noted in the Properties section. To get properties that are _not_ returned by default, specify them in a `$select` OData query option. The **hasMembersWithLicenseErrors** property is an exception and is not returned in the `$select` query. Because the **group** resource supports extensions, you can also use the `GET` operation to get custom properties and extension data in a **group** instance.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?GroupItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Group::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.groupLifecyclePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return GroupLifecyclePolicyItemRequestBuilder
    */
    public function groupLifecyclePoliciesById(string $id): GroupLifecyclePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupLifecyclePolicy%2Did'] = $id;
        return new GroupLifecyclePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.memberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGroupsItemMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): MicrosoftGraphGroupsItemMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphGroupsItemMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.members.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGroupsItemMembersItemDirectoryObjectItemRequestBuilder
    */
    public function membersById(string $id): MicrosoftGraphGroupsItemMembersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphGroupsItemMembersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.membersWithLicenseErrors.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGroupsItemMembersWithLicenseErrorsItemDirectoryObjectItemRequestBuilder
    */
    public function membersWithLicenseErrorsById(string $id): MicrosoftGraphGroupsItemMembersWithLicenseErrorsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphGroupsItemMembersWithLicenseErrorsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.owners.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGroupsItemOwnersItemDirectoryObjectItemRequestBuilder
    */
    public function ownersById(string $id): MicrosoftGraphGroupsItemOwnersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphGroupsItemOwnersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the properties of a group object.
     * @param Group $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Group $body, ?GroupItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Gets an item from the Microsoft\Graph.groups.item.permissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return ResourceSpecificPermissionGrantItemRequestBuilder
    */
    public function permissionGrantsById(string $id): ResourceSpecificPermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceSpecificPermissionGrant%2Did'] = $id;
        return new ResourceSpecificPermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.photos.item collection
     * @param string $id Unique identifier of the item
     * @return ProfilePhotoItemRequestBuilder
    */
    public function photosById(string $id): ProfilePhotoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['profilePhoto%2Did'] = $id;
        return new ProfilePhotoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.rejectedSenders.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGroupsItemRejectedSendersItemDirectoryObjectItemRequestBuilder
    */
    public function rejectedSendersById(string $id): MicrosoftGraphGroupsItemRejectedSendersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphGroupsItemRejectedSendersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.settings.item collection
     * @param string $id Unique identifier of the item
     * @return GroupSettingItemRequestBuilder
    */
    public function settingsById(string $id): GroupSettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupSetting%2Did'] = $id;
        return new GroupSettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.sites.item collection
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder
    */
    public function sitesById(string $id): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site%2Did'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.threads.item collection
     * @param string $id Unique identifier of the item
     * @return ConversationThreadItemRequestBuilder
    */
    public function threadsById(string $id): ConversationThreadItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversationThread%2Did'] = $id;
        return new ConversationThreadItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.transitiveMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGroupsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): MicrosoftGraphGroupsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphGroupsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item.transitiveMembers.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGroupsItemTransitiveMembersItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMembersById(string $id): MicrosoftGraphGroupsItemTransitiveMembersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphGroupsItemTransitiveMembersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
