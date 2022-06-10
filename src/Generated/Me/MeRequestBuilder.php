<?php

namespace Microsoft\Graph\Me;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Me\Activities\ActivitiesRequestBuilder;
use Microsoft\Graph\Me\Activities\Item\UserActivityItemRequestBuilder;
use Microsoft\Graph\Me\AgreementAcceptances\AgreementAcceptancesRequestBuilder;
use Microsoft\Graph\Me\AgreementAcceptances\Item\AgreementAcceptanceItemRequestBuilder;
use Microsoft\Graph\Me\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Me\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Me\AssignLicense\AssignLicenseRequestBuilder;
use Microsoft\Graph\Me\Authentication\AuthenticationRequestBuilder;
use Microsoft\Graph\Me\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Me\CalendarGroups\CalendarGroupsRequestBuilder;
use Microsoft\Graph\Me\CalendarGroups\Item\CalendarGroupItemRequestBuilder;
use Microsoft\Graph\Me\Calendars\CalendarsRequestBuilder;
use Microsoft\Graph\Me\Calendars\Item\CalendarItemRequestBuilder;
use Microsoft\Graph\Me\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Me\CalendarView\Item\EventItemRequestBuilder as MicrosoftGraphMeCalendarViewItemEventItemRequestBuilder;
use Microsoft\Graph\Me\ChangePassword\ChangePasswordRequestBuilder;
use Microsoft\Graph\Me\Chats\ChatsRequestBuilder;
use Microsoft\Graph\Me\Chats\Item\ChatItemRequestBuilder;
use Microsoft\Graph\Me\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Me\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Me\ContactFolders\ContactFoldersRequestBuilder;
use Microsoft\Graph\Me\ContactFolders\Item\ContactFolderItemRequestBuilder;
use Microsoft\Graph\Me\Contacts\ContactsRequestBuilder;
use Microsoft\Graph\Me\Contacts\Item\ContactItemRequestBuilder;
use Microsoft\Graph\Me\CreatedObjects\CreatedObjectsRequestBuilder;
use Microsoft\Graph\Me\CreatedObjects\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphMeCreatedObjectsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Me\DeviceManagementTroubleshootingEvents\DeviceManagementTroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Me\DeviceManagementTroubleshootingEvents\Item\DeviceManagementTroubleshootingEventItemRequestBuilder;
use Microsoft\Graph\Me\DirectReports\DirectReportsRequestBuilder;
use Microsoft\Graph\Me\DirectReports\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphMeDirectReportsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Me\Drive\DriveRequestBuilder;
use Microsoft\Graph\Me\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Me\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Me\Events\EventsRequestBuilder;
use Microsoft\Graph\Me\Events\Item\EventItemRequestBuilder as MicrosoftGraphMeEventsItemEventItemRequestBuilder;
use Microsoft\Graph\Me\ExportPersonalData\ExportPersonalDataRequestBuilder;
use Microsoft\Graph\Me\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Me\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Me\FindMeetingTimes\FindMeetingTimesRequestBuilder;
use Microsoft\Graph\Me\FollowedSites\FollowedSitesRequestBuilder;
use Microsoft\Graph\Me\FollowedSites\Item\SiteItemRequestBuilder;
use Microsoft\Graph\Me\GetMailTips\GetMailTipsRequestBuilder;
use Microsoft\Graph\Me\GetManagedAppDiagnosticStatuses\GetManagedAppDiagnosticStatusesRequestBuilder;
use Microsoft\Graph\Me\GetManagedAppPolicies\GetManagedAppPoliciesRequestBuilder;
use Microsoft\Graph\Me\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Me\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Me\InferenceClassification\InferenceClassificationRequestBuilder;
use Microsoft\Graph\Me\Insights\InsightsRequestBuilder;
use Microsoft\Graph\Me\JoinedTeams\Item\TeamItemRequestBuilder;
use Microsoft\Graph\Me\JoinedTeams\JoinedTeamsRequestBuilder;
use Microsoft\Graph\Me\LicenseDetails\Item\LicenseDetailsItemRequestBuilder;
use Microsoft\Graph\Me\LicenseDetails\LicenseDetailsRequestBuilder;
use Microsoft\Graph\Me\MailFolders\Item\MailFolderItemRequestBuilder;
use Microsoft\Graph\Me\MailFolders\MailFoldersRequestBuilder;
use Microsoft\Graph\Me\ManagedAppRegistrations\Item\ManagedAppRegistrationItemRequestBuilder;
use Microsoft\Graph\Me\ManagedAppRegistrations\ManagedAppRegistrationsRequestBuilder;
use Microsoft\Graph\Me\ManagedDevices\Item\ManagedDeviceItemRequestBuilder;
use Microsoft\Graph\Me\ManagedDevices\ManagedDevicesRequestBuilder;
use Microsoft\Graph\Me\Manager\ManagerRequestBuilder;
use Microsoft\Graph\Me\MemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphMeMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Me\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Me\Messages\Item\MessageItemRequestBuilder;
use Microsoft\Graph\Me\Messages\MessagesRequestBuilder;
use Microsoft\Graph\Me\Oauth2PermissionGrants\Item\OAuth2PermissionGrantItemRequestBuilder;
use Microsoft\Graph\Me\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\Me\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Me\OnlineMeetings\Item\OnlineMeetingItemRequestBuilder;
use Microsoft\Graph\Me\OnlineMeetings\OnlineMeetingsRequestBuilder;
use Microsoft\Graph\Me\Outlook\OutlookRequestBuilder;
use Microsoft\Graph\Me\OwnedDevices\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphMeOwnedDevicesItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Me\OwnedDevices\OwnedDevicesRequestBuilder;
use Microsoft\Graph\Me\OwnedObjects\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphMeOwnedObjectsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Me\OwnedObjects\OwnedObjectsRequestBuilder;
use Microsoft\Graph\Me\People\Item\PersonItemRequestBuilder;
use Microsoft\Graph\Me\People\PeopleRequestBuilder;
use Microsoft\Graph\Me\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Me\Photos\Item\ProfilePhotoItemRequestBuilder;
use Microsoft\Graph\Me\Photos\PhotosRequestBuilder;
use Microsoft\Graph\Me\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Me\Presence\PresenceRequestBuilder;
use Microsoft\Graph\Me\RegisteredDevices\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphMeRegisteredDevicesItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Me\RegisteredDevices\RegisteredDevicesRequestBuilder;
use Microsoft\Graph\Me\ReminderViewWithStartDateTimeWithEndDateTime\ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Me\RemoveAllDevicesFromManagement\RemoveAllDevicesFromManagementRequestBuilder;
use Microsoft\Graph\Me\ReprocessLicenseAssignment\ReprocessLicenseAssignmentRequestBuilder;
use Microsoft\Graph\Me\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Me\RevokeSignInSessions\RevokeSignInSessionsRequestBuilder;
use Microsoft\Graph\Me\ScopedRoleMemberOf\Item\ScopedRoleMembershipItemRequestBuilder;
use Microsoft\Graph\Me\ScopedRoleMemberOf\ScopedRoleMemberOfRequestBuilder;
use Microsoft\Graph\Me\SendMail\SendMailRequestBuilder;
use Microsoft\Graph\Me\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Me\Teamwork\TeamworkRequestBuilder;
use Microsoft\Graph\Me\Todo\TodoRequestBuilder;
use Microsoft\Graph\Me\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphMeTransitiveMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Me\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Me\TranslateExchangeIds\TranslateExchangeIdsRequestBuilder;
use Microsoft\Graph\Me\WipeManagedAppRegistrationsByDeviceTag\WipeManagedAppRegistrationsByDeviceTagRequestBuilder;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Graph\Models\User;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class MeRequestBuilder 
{
    /**
     * The activities property
    */
    public function activities(): ActivitiesRequestBuilder {
        return new ActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The agreementAcceptances property
    */
    public function agreementAcceptances(): AgreementAcceptancesRequestBuilder {
        return new AgreementAcceptancesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * The authentication property
    */
    public function authentication(): AuthenticationRequestBuilder {
        return new AuthenticationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendar property
    */
    public function calendar(): CalendarRequestBuilder {
        return new CalendarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendarGroups property
    */
    public function calendarGroups(): CalendarGroupsRequestBuilder {
        return new CalendarGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendars property
    */
    public function calendars(): CalendarsRequestBuilder {
        return new CalendarsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendarView property
    */
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The changePassword property
    */
    public function changePassword(): ChangePasswordRequestBuilder {
        return new ChangePasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The chats property
    */
    public function chats(): ChatsRequestBuilder {
        return new ChatsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * The contactFolders property
    */
    public function contactFolders(): ContactFoldersRequestBuilder {
        return new ContactFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The contacts property
    */
    public function contacts(): ContactsRequestBuilder {
        return new ContactsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The createdObjects property
    */
    public function createdObjects(): CreatedObjectsRequestBuilder {
        return new CreatedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceManagementTroubleshootingEvents property
    */
    public function deviceManagementTroubleshootingEvents(): DeviceManagementTroubleshootingEventsRequestBuilder {
        return new DeviceManagementTroubleshootingEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The directReports property
    */
    public function directReports(): DirectReportsRequestBuilder {
        return new DirectReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * The exportPersonalData property
    */
    public function exportPersonalData(): ExportPersonalDataRequestBuilder {
        return new ExportPersonalDataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The extensions property
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The findMeetingTimes property
    */
    public function findMeetingTimes(): FindMeetingTimesRequestBuilder {
        return new FindMeetingTimesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The followedSites property
    */
    public function followedSites(): FollowedSitesRequestBuilder {
        return new FollowedSitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMailTips property
    */
    public function getMailTips(): GetMailTipsRequestBuilder {
        return new GetMailTipsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * The inferenceClassification property
    */
    public function inferenceClassification(): InferenceClassificationRequestBuilder {
        return new InferenceClassificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The insights property
    */
    public function insights(): InsightsRequestBuilder {
        return new InsightsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The joinedTeams property
    */
    public function joinedTeams(): JoinedTeamsRequestBuilder {
        return new JoinedTeamsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The licenseDetails property
    */
    public function licenseDetails(): LicenseDetailsRequestBuilder {
        return new LicenseDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The mailFolders property
    */
    public function mailFolders(): MailFoldersRequestBuilder {
        return new MailFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The managedAppRegistrations property
    */
    public function managedAppRegistrations(): ManagedAppRegistrationsRequestBuilder {
        return new ManagedAppRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The managedDevices property
    */
    public function managedDevices(): ManagedDevicesRequestBuilder {
        return new ManagedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The manager property
    */
    public function manager(): ManagerRequestBuilder {
        return new ManagerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The memberOf property
    */
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The messages property
    */
    public function messages(): MessagesRequestBuilder {
        return new MessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The oauth2PermissionGrants property
    */
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder {
        return new Oauth2PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The onenote property
    */
    public function onenote(): OnenoteRequestBuilder {
        return new OnenoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The onlineMeetings property
    */
    public function onlineMeetings(): OnlineMeetingsRequestBuilder {
        return new OnlineMeetingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The outlook property
    */
    public function outlook(): OutlookRequestBuilder {
        return new OutlookRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The ownedDevices property
    */
    public function ownedDevices(): OwnedDevicesRequestBuilder {
        return new OwnedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The ownedObjects property
    */
    public function ownedObjects(): OwnedObjectsRequestBuilder {
        return new OwnedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The people property
    */
    public function people(): PeopleRequestBuilder {
        return new PeopleRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * The presence property
    */
    public function presence(): PresenceRequestBuilder {
        return new PresenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The registeredDevices property
    */
    public function registeredDevices(): RegisteredDevicesRequestBuilder {
        return new RegisteredDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removeAllDevicesFromManagement property
    */
    public function removeAllDevicesFromManagement(): RemoveAllDevicesFromManagementRequestBuilder {
        return new RemoveAllDevicesFromManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reprocessLicenseAssignment property
    */
    public function reprocessLicenseAssignment(): ReprocessLicenseAssignmentRequestBuilder {
        return new ReprocessLicenseAssignmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The restore property
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The revokeSignInSessions property
    */
    public function revokeSignInSessions(): RevokeSignInSessionsRequestBuilder {
        return new RevokeSignInSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The scopedRoleMemberOf property
    */
    public function scopedRoleMemberOf(): ScopedRoleMemberOfRequestBuilder {
        return new ScopedRoleMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sendMail property
    */
    public function sendMail(): SendMailRequestBuilder {
        return new SendMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The settings property
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The teamwork property
    */
    public function teamwork(): TeamworkRequestBuilder {
        return new TeamworkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The todo property
    */
    public function todo(): TodoRequestBuilder {
        return new TodoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transitiveMemberOf property
    */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The translateExchangeIds property
    */
    public function translateExchangeIds(): TranslateExchangeIdsRequestBuilder {
        return new TranslateExchangeIdsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The wipeManagedAppRegistrationsByDeviceTag property
    */
    public function wipeManagedAppRegistrationsByDeviceTag(): WipeManagedAppRegistrationsByDeviceTagRequestBuilder {
        return new WipeManagedAppRegistrationsByDeviceTagRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph.me.activities.item collection
     * @param string $id Unique identifier of the item
     * @return UserActivityItemRequestBuilder
    */
    public function activitiesById(string $id): UserActivityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userActivity%2Did'] = $id;
        return new UserActivityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.agreementAcceptances.item collection
     * @param string $id Unique identifier of the item
     * @return AgreementAcceptanceItemRequestBuilder
    */
    public function agreementAcceptancesById(string $id): AgreementAcceptanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreementAcceptance%2Did'] = $id;
        return new AgreementAcceptanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.appRoleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return AppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignmentsById(string $id): AppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment%2Did'] = $id;
        return new AppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.calendarGroups.item collection
     * @param string $id Unique identifier of the item
     * @return CalendarGroupItemRequestBuilder
    */
    public function calendarGroupsById(string $id): CalendarGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendarGroup%2Did'] = $id;
        return new CalendarGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.calendars.item collection
     * @param string $id Unique identifier of the item
     * @return CalendarItemRequestBuilder
    */
    public function calendarsById(string $id): CalendarItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendar%2Did'] = $id;
        return new CalendarItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.calendarView.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphMeCalendarViewItemEventItemRequestBuilder
    */
    public function calendarViewById(string $id): MicrosoftGraphMeCalendarViewItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new MicrosoftGraphMeCalendarViewItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.chats.item collection
     * @param string $id Unique identifier of the item
     * @return ChatItemRequestBuilder
    */
    public function chatsById(string $id): ChatItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chat%2Did'] = $id;
        return new ChatItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MeRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Gets an item from the Microsoft\Graph.me.contactFolders.item collection
     * @param string $id Unique identifier of the item
     * @return ContactFolderItemRequestBuilder
    */
    public function contactFoldersById(string $id): ContactFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contactFolder%2Did'] = $id;
        return new ContactFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.contacts.item collection
     * @param string $id Unique identifier of the item
     * @return ContactItemRequestBuilder
    */
    public function contactsById(string $id): ContactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contact%2Did'] = $id;
        return new ContactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.createdObjects.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphMeCreatedObjectsItemDirectoryObjectItemRequestBuilder
    */
    public function createdObjectsById(string $id): MicrosoftGraphMeCreatedObjectsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphMeCreatedObjectsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Retrieve the properties and relationships of user object. This operation returns by default only a subset of the more commonly used properties for each user. These _default_ properties are noted in the Properties section. To get properties that are _not_ returned by default, do a GET operation for the user and specify the properties in a `$select` OData query option. Because the **user** resource supports extensions, you can also use the `GET` operation to get custom properties and extension data in a **user** instance.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?MeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a user object. Not all properties can be updated by Member or Guest users with their default permissions without Administrator roles. Compare member and guest default permissions to see properties they can manage.
     * @param User $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(User $body, ?MeRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph.me.deviceManagementTroubleshootingEvents.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementTroubleshootingEventItemRequestBuilder
    */
    public function deviceManagementTroubleshootingEventsById(string $id): DeviceManagementTroubleshootingEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementTroubleshootingEvent%2Did'] = $id;
        return new DeviceManagementTroubleshootingEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.directReports.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphMeDirectReportsItemDirectoryObjectItemRequestBuilder
    */
    public function directReportsById(string $id): MicrosoftGraphMeDirectReportsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphMeDirectReportsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.drives.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive%2Did'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.events.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphMeEventsItemEventItemRequestBuilder
    */
    public function eventsById(string $id): MicrosoftGraphMeEventsItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new MicrosoftGraphMeEventsItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.extensions.item collection
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension%2Did'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.followedSites.item collection
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder
    */
    public function followedSitesById(string $id): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site%2Did'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Retrieve the properties and relationships of user object. This operation returns by default only a subset of the more commonly used properties for each user. These _default_ properties are noted in the Properties section. To get properties that are _not_ returned by default, do a GET operation for the user and specify the properties in a `$select` OData query option. Because the **user** resource supports extensions, you can also use the `GET` operation to get custom properties and extension data in a **user** instance.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?MeRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(User::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getManagedAppDiagnosticStatuses method.
     * @return GetManagedAppDiagnosticStatusesRequestBuilder
    */
    public function getManagedAppDiagnosticStatuses(): GetManagedAppDiagnosticStatusesRequestBuilder {
        return new GetManagedAppDiagnosticStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getManagedAppPolicies method.
     * @return GetManagedAppPoliciesRequestBuilder
    */
    public function getManagedAppPolicies(): GetManagedAppPoliciesRequestBuilder {
        return new GetManagedAppPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.joinedTeams.item collection
     * @param string $id Unique identifier of the item
     * @return TeamItemRequestBuilder
    */
    public function joinedTeamsById(string $id): TeamItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['team%2Did'] = $id;
        return new TeamItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.licenseDetails.item collection
     * @param string $id Unique identifier of the item
     * @return LicenseDetailsItemRequestBuilder
    */
    public function licenseDetailsById(string $id): LicenseDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['licenseDetails%2Did'] = $id;
        return new LicenseDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.mailFolders.item collection
     * @param string $id Unique identifier of the item
     * @return MailFolderItemRequestBuilder
    */
    public function mailFoldersById(string $id): MailFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailFolder%2Did'] = $id;
        return new MailFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.managedAppRegistrations.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedAppRegistrationItemRequestBuilder
    */
    public function managedAppRegistrationsById(string $id): ManagedAppRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppRegistration%2Did'] = $id;
        return new ManagedAppRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.managedDevices.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceItemRequestBuilder
    */
    public function managedDevicesById(string $id): ManagedDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDevice%2Did'] = $id;
        return new ManagedDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.memberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphMeMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): MicrosoftGraphMeMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphMeMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.messages.item collection
     * @param string $id Unique identifier of the item
     * @return MessageItemRequestBuilder
    */
    public function messagesById(string $id): MessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['message%2Did'] = $id;
        return new MessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.oauth2PermissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return OAuth2PermissionGrantItemRequestBuilder
    */
    public function oauth2PermissionGrantsById(string $id): OAuth2PermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oAuth2PermissionGrant%2Did'] = $id;
        return new OAuth2PermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.onlineMeetings.item collection
     * @param string $id Unique identifier of the item
     * @return OnlineMeetingItemRequestBuilder
    */
    public function onlineMeetingsById(string $id): OnlineMeetingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onlineMeeting%2Did'] = $id;
        return new OnlineMeetingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.ownedDevices.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphMeOwnedDevicesItemDirectoryObjectItemRequestBuilder
    */
    public function ownedDevicesById(string $id): MicrosoftGraphMeOwnedDevicesItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphMeOwnedDevicesItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.ownedObjects.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphMeOwnedObjectsItemDirectoryObjectItemRequestBuilder
    */
    public function ownedObjectsById(string $id): MicrosoftGraphMeOwnedObjectsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphMeOwnedObjectsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the properties of a user object. Not all properties can be updated by Member or Guest users with their default permissions without Administrator roles. Compare member and guest default permissions to see properties they can manage.
     * @param User $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(User $body, ?MeRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Gets an item from the Microsoft\Graph.me.people.item collection
     * @param string $id Unique identifier of the item
     * @return PersonItemRequestBuilder
    */
    public function peopleById(string $id): PersonItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['person%2Did'] = $id;
        return new PersonItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.photos.item collection
     * @param string $id Unique identifier of the item
     * @return ProfilePhotoItemRequestBuilder
    */
    public function photosById(string $id): ProfilePhotoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['profilePhoto%2Did'] = $id;
        return new ProfilePhotoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.registeredDevices.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphMeRegisteredDevicesItemDirectoryObjectItemRequestBuilder
    */
    public function registeredDevicesById(string $id): MicrosoftGraphMeRegisteredDevicesItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphMeRegisteredDevicesItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the reminderView method.
     * @param string $endDateTime Usage: EndDateTime='{EndDateTime}'
     * @param string $startDateTime Usage: StartDateTime='{StartDateTime}'
     * @return ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function reminderViewWithStartDateTimeWithEndDateTime(string $endDateTime, string $startDateTime): ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.scopedRoleMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return ScopedRoleMembershipItemRequestBuilder
    */
    public function scopedRoleMemberOfById(string $id): ScopedRoleMembershipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['scopedRoleMembership%2Did'] = $id;
        return new ScopedRoleMembershipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.me.transitiveMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphMeTransitiveMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): MicrosoftGraphMeTransitiveMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphMeTransitiveMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
