<?php

namespace Microsoft\Graph\Generated\Users\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\User;
use Microsoft\Graph\Generated\Users\Item\Activities\ActivitiesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Activities\Item\UserActivityItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\AgreementAcceptances\AgreementAcceptancesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\AgreementAcceptances\Item\AgreementAcceptanceItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\AssignLicense\AssignLicenseRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\AuthenticationRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarGroups\CalendarGroupsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarGroups\Item\CalendarGroupItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\CalendarsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Calendars\Item\CalendarItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CalendarView\Item\EventItemRequestBuilder as MicrosoftGraphGeneratedUsersItemCalendarViewItemEventItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ChangePassword\ChangePasswordRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Chats\ChatsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Chats\Item\ChatItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ContactFolders\ContactFoldersRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ContactFolders\Item\ContactFolderItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Contacts\ContactsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Contacts\Item\ContactItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CreatedObjects\CreatedObjectsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\CreatedObjects\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGeneratedUsersItemCreatedObjectsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\DeviceManagementTroubleshootingEvents\DeviceManagementTroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\DeviceManagementTroubleshootingEvents\Item\DeviceManagementTroubleshootingEventItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\DirectReports\DirectReportsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\DirectReports\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGeneratedUsersItemDirectReportsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Drive\DriveRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Events\EventsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Events\Item\EventItemRequestBuilder as MicrosoftGraphGeneratedUsersItemEventsItemEventItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ExportPersonalData\ExportPersonalDataRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\FindMeetingTimes\FindMeetingTimesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\FollowedSites\FollowedSitesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\FollowedSites\Item\SiteItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\GetMailTips\GetMailTipsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\GetManagedAppDiagnosticStatuses\GetManagedAppDiagnosticStatusesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\GetManagedAppPolicies\GetManagedAppPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\InferenceClassification\InferenceClassificationRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Insights\InsightsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\TeamItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\JoinedTeams\JoinedTeamsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\LicenseDetails\Item\LicenseDetailsItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\LicenseDetails\LicenseDetailsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\Item\MailFolderItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MailFolders\MailFoldersRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedAppRegistrations\Item\ManagedAppRegistrationItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedAppRegistrations\ManagedAppRegistrationsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\ManagedDeviceItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ManagedDevices\ManagedDevicesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Manager\ManagerRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGeneratedUsersItemMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\Item\MessageItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Messages\MessagesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Oauth2PermissionGrants\Item\OAuth2PermissionGrantItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\OnlineMeetings\Item\OnlineMeetingItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\OnlineMeetings\OnlineMeetingsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Outlook\OutlookRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\OwnedDevices\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGeneratedUsersItemOwnedDevicesItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\OwnedDevices\OwnedDevicesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\OwnedObjects\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGeneratedUsersItemOwnedObjectsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\OwnedObjects\OwnedObjectsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\People\Item\PersonItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\People\PeopleRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Photos\Item\ProfilePhotoItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Photos\PhotosRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Presence\PresenceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\RegisteredDevices\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGeneratedUsersItemRegisteredDevicesItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\RegisteredDevices\RegisteredDevicesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ReminderViewWithStartDateTimeWithEndDateTime\ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\RemoveAllDevicesFromManagement\RemoveAllDevicesFromManagementRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ReprocessLicenseAssignment\ReprocessLicenseAssignmentRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\RevokeSignInSessions\RevokeSignInSessionsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ScopedRoleMemberOf\Item\ScopedRoleMembershipItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\ScopedRoleMemberOf\ScopedRoleMemberOfRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\SendMail\SendMailRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Teamwork\TeamworkRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Todo\TodoRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGeneratedUsersItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\TranslateExchangeIds\TranslateExchangeIdsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\WipeManagedAppRegistrationsByDeviceTag\WipeManagedAppRegistrationsByDeviceTagRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class UserItemRequestBuilder 
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
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
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
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
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
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * The wipeManagedAppRegistrationsByDeviceTag property
    */
    public function wipeManagedAppRegistrationsByDeviceTag(): WipeManagedAppRegistrationsByDeviceTagRequestBuilder {
        return new WipeManagedAppRegistrationsByDeviceTagRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.activities.item collection
     * @param string $id Unique identifier of the item
     * @return UserActivityItemRequestBuilder
    */
    public function activitiesById(string $id): UserActivityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userActivity_id'] = $id;
        return new UserActivityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.agreementAcceptances.item collection
     * @param string $id Unique identifier of the item
     * @return AgreementAcceptanceItemRequestBuilder
    */
    public function agreementAcceptancesById(string $id): AgreementAcceptanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreementAcceptance_id'] = $id;
        return new AgreementAcceptanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.appRoleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return AppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignmentsById(string $id): AppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment_id'] = $id;
        return new AppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.calendarGroups.item collection
     * @param string $id Unique identifier of the item
     * @return CalendarGroupItemRequestBuilder
    */
    public function calendarGroupsById(string $id): CalendarGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendarGroup_id'] = $id;
        return new CalendarGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.calendars.item collection
     * @param string $id Unique identifier of the item
     * @return CalendarItemRequestBuilder
    */
    public function calendarsById(string $id): CalendarItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendar_id'] = $id;
        return new CalendarItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.calendarView.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedUsersItemCalendarViewItemEventItemRequestBuilder
    */
    public function calendarViewById(string $id): MicrosoftGraphGeneratedUsersItemCalendarViewItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event_id'] = $id;
        return new MicrosoftGraphGeneratedUsersItemCalendarViewItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.chats.item collection
     * @param string $id Unique identifier of the item
     * @return ChatItemRequestBuilder
    */
    public function chatsById(string $id): ChatItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chat_id'] = $id;
        return new ChatItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.contactFolders.item collection
     * @param string $id Unique identifier of the item
     * @return ContactFolderItemRequestBuilder
    */
    public function contactFoldersById(string $id): ContactFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contactFolder_id'] = $id;
        return new ContactFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.contacts.item collection
     * @param string $id Unique identifier of the item
     * @return ContactItemRequestBuilder
    */
    public function contactsById(string $id): ContactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contact_id'] = $id;
        return new ContactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete entity from users
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.createdObjects.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedUsersItemCreatedObjectsItemDirectoryObjectItemRequestBuilder
    */
    public function createdObjectsById(string $id): MicrosoftGraphGeneratedUsersItemCreatedObjectsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphGeneratedUsersItemCreatedObjectsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get entity from users by key
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update entity in users
     * @param User $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(User $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete entity from users
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.deviceManagementTroubleshootingEvents.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementTroubleshootingEventItemRequestBuilder
    */
    public function deviceManagementTroubleshootingEventsById(string $id): DeviceManagementTroubleshootingEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementTroubleshootingEvent_id'] = $id;
        return new DeviceManagementTroubleshootingEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.directReports.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedUsersItemDirectReportsItemDirectoryObjectItemRequestBuilder
    */
    public function directReportsById(string $id): MicrosoftGraphGeneratedUsersItemDirectReportsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphGeneratedUsersItemDirectReportsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.drives.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive_id'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.events.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedUsersItemEventsItemEventItemRequestBuilder
    */
    public function eventsById(string $id): MicrosoftGraphGeneratedUsersItemEventsItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event_id'] = $id;
        return new MicrosoftGraphGeneratedUsersItemEventsItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.extensions.item collection
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension_id'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.followedSites.item collection
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder
    */
    public function followedSitesById(string $id): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site_id'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get entity from users by key
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, User::class, $responseHandler);
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
     * Gets an item from the Microsoft\Graph\Generated.users.item.joinedTeams.item collection
     * @param string $id Unique identifier of the item
     * @return TeamItemRequestBuilder
    */
    public function joinedTeamsById(string $id): TeamItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['team_id'] = $id;
        return new TeamItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.licenseDetails.item collection
     * @param string $id Unique identifier of the item
     * @return LicenseDetailsItemRequestBuilder
    */
    public function licenseDetailsById(string $id): LicenseDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['licenseDetails_id'] = $id;
        return new LicenseDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.mailFolders.item collection
     * @param string $id Unique identifier of the item
     * @return MailFolderItemRequestBuilder
    */
    public function mailFoldersById(string $id): MailFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailFolder_id'] = $id;
        return new MailFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.managedAppRegistrations.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedAppRegistrationItemRequestBuilder
    */
    public function managedAppRegistrationsById(string $id): ManagedAppRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppRegistration_id'] = $id;
        return new ManagedAppRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.managedDevices.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceItemRequestBuilder
    */
    public function managedDevicesById(string $id): ManagedDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDevice_id'] = $id;
        return new ManagedDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.memberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedUsersItemMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): MicrosoftGraphGeneratedUsersItemMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphGeneratedUsersItemMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.messages.item collection
     * @param string $id Unique identifier of the item
     * @return MessageItemRequestBuilder
    */
    public function messagesById(string $id): MessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['message_id'] = $id;
        return new MessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.oauth2PermissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return OAuth2PermissionGrantItemRequestBuilder
    */
    public function oauth2PermissionGrantsById(string $id): OAuth2PermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oAuth2PermissionGrant_id'] = $id;
        return new OAuth2PermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.onlineMeetings.item collection
     * @param string $id Unique identifier of the item
     * @return OnlineMeetingItemRequestBuilder
    */
    public function onlineMeetingsById(string $id): OnlineMeetingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onlineMeeting_id'] = $id;
        return new OnlineMeetingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.ownedDevices.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedUsersItemOwnedDevicesItemDirectoryObjectItemRequestBuilder
    */
    public function ownedDevicesById(string $id): MicrosoftGraphGeneratedUsersItemOwnedDevicesItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphGeneratedUsersItemOwnedDevicesItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.ownedObjects.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedUsersItemOwnedObjectsItemDirectoryObjectItemRequestBuilder
    */
    public function ownedObjectsById(string $id): MicrosoftGraphGeneratedUsersItemOwnedObjectsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphGeneratedUsersItemOwnedObjectsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update entity in users
     * @param User $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(User $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.people.item collection
     * @param string $id Unique identifier of the item
     * @return PersonItemRequestBuilder
    */
    public function peopleById(string $id): PersonItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['person_id'] = $id;
        return new PersonItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.photos.item collection
     * @param string $id Unique identifier of the item
     * @return ProfilePhotoItemRequestBuilder
    */
    public function photosById(string $id): ProfilePhotoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['profilePhoto_id'] = $id;
        return new ProfilePhotoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.registeredDevices.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedUsersItemRegisteredDevicesItemDirectoryObjectItemRequestBuilder
    */
    public function registeredDevicesById(string $id): MicrosoftGraphGeneratedUsersItemRegisteredDevicesItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphGeneratedUsersItemRegisteredDevicesItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
     * Gets an item from the Microsoft\Graph\Generated.users.item.scopedRoleMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return ScopedRoleMembershipItemRequestBuilder
    */
    public function scopedRoleMemberOfById(string $id): ScopedRoleMembershipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['scopedRoleMembership_id'] = $id;
        return new ScopedRoleMembershipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.transitiveMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedUsersItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): MicrosoftGraphGeneratedUsersItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphGeneratedUsersItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
