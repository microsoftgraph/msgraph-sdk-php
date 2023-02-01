<?php

namespace Microsoft\Graph\Generated\Me;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Me\Activities\ActivitiesRequestBuilder;
use Microsoft\Graph\Generated\Me\Activities\Item\UserActivityItemRequestBuilder;
use Microsoft\Graph\Generated\Me\AgreementAcceptances\AgreementAcceptancesRequestBuilder;
use Microsoft\Graph\Generated\Me\AgreementAcceptances\Item\AgreementAcceptanceItemRequestBuilder;
use Microsoft\Graph\Generated\Me\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Generated\Me\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\AuthenticationRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Generated\Me\CalendarGroups\CalendarGroupsRequestBuilder;
use Microsoft\Graph\Generated\Me\CalendarGroups\Item\CalendarGroupItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendars\CalendarsRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendars\Item\CalendarItemRequestBuilder;
use Microsoft\Graph\Generated\Me\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\ChatsRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\Item\ChatItemRequestBuilder;
use Microsoft\Graph\Generated\Me\ContactFolders\ContactFoldersRequestBuilder;
use Microsoft\Graph\Generated\Me\ContactFolders\Item\ContactFolderItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Contacts\ContactsRequestBuilder;
use Microsoft\Graph\Generated\Me\Contacts\Item\ContactItemRequestBuilder;
use Microsoft\Graph\Generated\Me\CreatedObjects\CreatedObjectsRequestBuilder;
use Microsoft\Graph\Generated\Me\DeviceManagementTroubleshootingEvents\DeviceManagementTroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Generated\Me\DeviceManagementTroubleshootingEvents\Item\DeviceManagementTroubleshootingEventItemRequestBuilder;
use Microsoft\Graph\Generated\Me\DirectReports\DirectReportsRequestBuilder;
use Microsoft\Graph\Generated\Me\Drive\DriveRequestBuilder;
use Microsoft\Graph\Generated\Me\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Generated\Me\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Events\EventsRequestBuilder;
use Microsoft\Graph\Generated\Me\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Generated\Me\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Generated\Me\FollowedSites\FollowedSitesRequestBuilder;
use Microsoft\Graph\Generated\Me\FollowedSites\Item\SiteItemRequestBuilder;
use Microsoft\Graph\Generated\Me\InferenceClassification\InferenceClassificationRequestBuilder;
use Microsoft\Graph\Generated\Me\Insights\InsightsRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\Item\TeamItemRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\JoinedTeamsRequestBuilder;
use Microsoft\Graph\Generated\Me\LicenseDetails\Item\LicenseDetailsItemRequestBuilder;
use Microsoft\Graph\Generated\Me\LicenseDetails\LicenseDetailsRequestBuilder;
use Microsoft\Graph\Generated\Me\MailFolders\Item\MailFolderItemRequestBuilder;
use Microsoft\Graph\Generated\Me\MailFolders\MailFoldersRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedAppRegistrations\Item\ManagedAppRegistrationItemRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedAppRegistrations\ManagedAppRegistrationsRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\Item\ManagedDeviceItemRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\ManagedDevicesRequestBuilder;
use Microsoft\Graph\Generated\Me\Manager\ManagerRequestBuilder;
use Microsoft\Graph\Generated\Me\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Generated\Me\Messages\Item\MessageItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Messages\MessagesRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphAssignLicense\AssignLicenseRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphChangePassword\ChangePasswordRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphCheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphCheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphExportDeviceAndAppManagementData\ExportDeviceAndAppManagementDataRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphExportDeviceAndAppManagementDataWithSkipWithTop\ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphExportPersonalData\ExportPersonalDataRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphFindMeetingTimes\FindMeetingTimesRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphGetMailTips\GetMailTipsRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphGetManagedAppDiagnosticStatuses\GetManagedAppDiagnosticStatusesRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphGetManagedAppPolicies\GetManagedAppPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphGetManagedDevicesWithAppFailures\GetManagedDevicesWithAppFailuresRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphGetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphGetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphReminderViewWithStartDateTimeWithEndDateTime\ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphRemoveAllDevicesFromManagement\RemoveAllDevicesFromManagementRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphReprocessLicenseAssignment\ReprocessLicenseAssignmentRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphRestore\RestoreRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphRevokeSignInSessions\RevokeSignInSessionsRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphSendMail\SendMailRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphTranslateExchangeIds\TranslateExchangeIdsRequestBuilder;
use Microsoft\Graph\Generated\Me\MicrosoftGraphWipeManagedAppRegistrationsByDeviceTag\WipeManagedAppRegistrationsByDeviceTagRequestBuilder;
use Microsoft\Graph\Generated\Me\Oauth2PermissionGrants\Item\OAuth2PermissionGrantItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\Generated\Me\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Generated\Me\OnlineMeetings\Item\OnlineMeetingItemRequestBuilder;
use Microsoft\Graph\Generated\Me\OnlineMeetings\OnlineMeetingsRequestBuilder;
use Microsoft\Graph\Generated\Me\Outlook\OutlookRequestBuilder;
use Microsoft\Graph\Generated\Me\OwnedDevices\OwnedDevicesRequestBuilder;
use Microsoft\Graph\Generated\Me\OwnedObjects\OwnedObjectsRequestBuilder;
use Microsoft\Graph\Generated\Me\People\Item\PersonItemRequestBuilder;
use Microsoft\Graph\Generated\Me\People\PeopleRequestBuilder;
use Microsoft\Graph\Generated\Me\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Generated\Me\Photos\Item\ProfilePhotoItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Photos\PhotosRequestBuilder;
use Microsoft\Graph\Generated\Me\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Generated\Me\Presence\PresenceRequestBuilder;
use Microsoft\Graph\Generated\Me\RegisteredDevices\RegisteredDevicesRequestBuilder;
use Microsoft\Graph\Generated\Me\ScopedRoleMemberOf\Item\ScopedRoleMembershipItemRequestBuilder;
use Microsoft\Graph\Generated\Me\ScopedRoleMemberOf\ScopedRoleMemberOfRequestBuilder;
use Microsoft\Graph\Generated\Me\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Generated\Me\Teamwork\TeamworkRequestBuilder;
use Microsoft\Graph\Generated\Me\Todo\TodoRequestBuilder;
use Microsoft\Graph\Generated\Me\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\User;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the user singleton.
*/
class MeRequestBuilder 
{
    /**
     * Provides operations to manage the activities property of the microsoft.graph.user entity.
    */
    public function activities(): ActivitiesRequestBuilder {
        return new ActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the agreementAcceptances property of the microsoft.graph.user entity.
    */
    public function agreementAcceptances(): AgreementAcceptancesRequestBuilder {
        return new AgreementAcceptancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appRoleAssignments property of the microsoft.graph.user entity.
    */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder {
        return new AppRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authentication property of the microsoft.graph.user entity.
    */
    public function authentication(): AuthenticationRequestBuilder {
        return new AuthenticationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendar property of the microsoft.graph.user entity.
    */
    public function calendar(): CalendarRequestBuilder {
        return new CalendarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendarGroups property of the microsoft.graph.user entity.
    */
    public function calendarGroups(): CalendarGroupsRequestBuilder {
        return new CalendarGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendars property of the microsoft.graph.user entity.
    */
    public function calendars(): CalendarsRequestBuilder {
        return new CalendarsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendarView property of the microsoft.graph.user entity.
    */
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the chats property of the microsoft.graph.user entity.
    */
    public function chats(): ChatsRequestBuilder {
        return new ChatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the contactFolders property of the microsoft.graph.user entity.
    */
    public function contactFolders(): ContactFoldersRequestBuilder {
        return new ContactFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the contacts property of the microsoft.graph.user entity.
    */
    public function contacts(): ContactsRequestBuilder {
        return new ContactsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the createdObjects property of the microsoft.graph.user entity.
    */
    public function createdObjects(): CreatedObjectsRequestBuilder {
        return new CreatedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceManagementTroubleshootingEvents property of the microsoft.graph.user entity.
    */
    public function deviceManagementTroubleshootingEvents(): DeviceManagementTroubleshootingEventsRequestBuilder {
        return new DeviceManagementTroubleshootingEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the directReports property of the microsoft.graph.user entity.
    */
    public function directReports(): DirectReportsRequestBuilder {
        return new DirectReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drive property of the microsoft.graph.user entity.
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drives property of the microsoft.graph.user entity.
    */
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the events property of the microsoft.graph.user entity.
    */
    public function events(): EventsRequestBuilder {
        return new EventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the extensions property of the microsoft.graph.user entity.
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the followedSites property of the microsoft.graph.user entity.
    */
    public function followedSites(): FollowedSitesRequestBuilder {
        return new FollowedSitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the inferenceClassification property of the microsoft.graph.user entity.
    */
    public function inferenceClassification(): InferenceClassificationRequestBuilder {
        return new InferenceClassificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the insights property of the microsoft.graph.user entity.
    */
    public function insights(): InsightsRequestBuilder {
        return new InsightsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the joinedTeams property of the microsoft.graph.user entity.
    */
    public function joinedTeams(): JoinedTeamsRequestBuilder {
        return new JoinedTeamsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the licenseDetails property of the microsoft.graph.user entity.
    */
    public function licenseDetails(): LicenseDetailsRequestBuilder {
        return new LicenseDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mailFolders property of the microsoft.graph.user entity.
    */
    public function mailFolders(): MailFoldersRequestBuilder {
        return new MailFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedAppRegistrations property of the microsoft.graph.user entity.
    */
    public function managedAppRegistrations(): ManagedAppRegistrationsRequestBuilder {
        return new ManagedAppRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDevices property of the microsoft.graph.user entity.
    */
    public function managedDevices(): ManagedDevicesRequestBuilder {
        return new ManagedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the manager property of the microsoft.graph.user entity.
    */
    public function manager(): ManagerRequestBuilder {
        return new ManagerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the memberOf property of the microsoft.graph.user entity.
    */
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the messages property of the microsoft.graph.user entity.
    */
    public function messages(): MessagesRequestBuilder {
        return new MessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the assignLicense method.
    */
    public function microsoftGraphAssignLicense(): AssignLicenseRequestBuilder {
        return new AssignLicenseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the changePassword method.
    */
    public function microsoftGraphChangePassword(): ChangePasswordRequestBuilder {
        return new ChangePasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberGroups method.
    */
    public function microsoftGraphCheckMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberObjects method.
    */
    public function microsoftGraphCheckMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the exportDeviceAndAppManagementData method.
    */
    public function microsoftGraphExportDeviceAndAppManagementData(): ExportDeviceAndAppManagementDataRequestBuilder {
        return new ExportDeviceAndAppManagementDataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the exportPersonalData method.
    */
    public function microsoftGraphExportPersonalData(): ExportPersonalDataRequestBuilder {
        return new ExportPersonalDataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the findMeetingTimes method.
    */
    public function microsoftGraphFindMeetingTimes(): FindMeetingTimesRequestBuilder {
        return new FindMeetingTimesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMailTips method.
    */
    public function microsoftGraphGetMailTips(): GetMailTipsRequestBuilder {
        return new GetMailTipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getManagedAppDiagnosticStatuses method.
    */
    public function microsoftGraphGetManagedAppDiagnosticStatuses(): GetManagedAppDiagnosticStatusesRequestBuilder {
        return new GetManagedAppDiagnosticStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getManagedAppPolicies method.
    */
    public function microsoftGraphGetManagedAppPolicies(): GetManagedAppPoliciesRequestBuilder {
        return new GetManagedAppPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getManagedDevicesWithAppFailures method.
    */
    public function microsoftGraphGetManagedDevicesWithAppFailures(): GetManagedDevicesWithAppFailuresRequestBuilder {
        return new GetManagedDevicesWithAppFailuresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberGroups method.
    */
    public function microsoftGraphGetMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberObjects method.
    */
    public function microsoftGraphGetMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeAllDevicesFromManagement method.
    */
    public function microsoftGraphRemoveAllDevicesFromManagement(): RemoveAllDevicesFromManagementRequestBuilder {
        return new RemoveAllDevicesFromManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reprocessLicenseAssignment method.
    */
    public function microsoftGraphReprocessLicenseAssignment(): ReprocessLicenseAssignmentRequestBuilder {
        return new ReprocessLicenseAssignmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function microsoftGraphRestore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the revokeSignInSessions method.
    */
    public function microsoftGraphRevokeSignInSessions(): RevokeSignInSessionsRequestBuilder {
        return new RevokeSignInSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendMail method.
    */
    public function microsoftGraphSendMail(): SendMailRequestBuilder {
        return new SendMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the translateExchangeIds method.
    */
    public function microsoftGraphTranslateExchangeIds(): TranslateExchangeIdsRequestBuilder {
        return new TranslateExchangeIdsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the wipeManagedAppRegistrationsByDeviceTag method.
    */
    public function microsoftGraphWipeManagedAppRegistrationsByDeviceTag(): WipeManagedAppRegistrationsByDeviceTagRequestBuilder {
        return new WipeManagedAppRegistrationsByDeviceTagRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the oauth2PermissionGrants property of the microsoft.graph.user entity.
    */
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder {
        return new Oauth2PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onenote property of the microsoft.graph.user entity.
    */
    public function onenote(): OnenoteRequestBuilder {
        return new OnenoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onlineMeetings property of the microsoft.graph.user entity.
    */
    public function onlineMeetings(): OnlineMeetingsRequestBuilder {
        return new OnlineMeetingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the outlook property of the microsoft.graph.user entity.
    */
    public function outlook(): OutlookRequestBuilder {
        return new OutlookRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the ownedDevices property of the microsoft.graph.user entity.
    */
    public function ownedDevices(): OwnedDevicesRequestBuilder {
        return new OwnedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the ownedObjects property of the microsoft.graph.user entity.
    */
    public function ownedObjects(): OwnedObjectsRequestBuilder {
        return new OwnedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the people property of the microsoft.graph.user entity.
    */
    public function people(): PeopleRequestBuilder {
        return new PeopleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the photo property of the microsoft.graph.user entity.
    */
    public function photo(): PhotoRequestBuilder {
        return new PhotoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the photos property of the microsoft.graph.user entity.
    */
    public function photos(): PhotosRequestBuilder {
        return new PhotosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the planner property of the microsoft.graph.user entity.
    */
    public function planner(): PlannerRequestBuilder {
        return new PlannerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the presence property of the microsoft.graph.user entity.
    */
    public function presence(): PresenceRequestBuilder {
        return new PresenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the registeredDevices property of the microsoft.graph.user entity.
    */
    public function registeredDevices(): RegisteredDevicesRequestBuilder {
        return new RegisteredDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the scopedRoleMemberOf property of the microsoft.graph.user entity.
    */
    public function scopedRoleMemberOf(): ScopedRoleMemberOfRequestBuilder {
        return new ScopedRoleMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the settings property of the microsoft.graph.user entity.
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the teamwork property of the microsoft.graph.user entity.
    */
    public function teamwork(): TeamworkRequestBuilder {
        return new TeamworkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the todo property of the microsoft.graph.user entity.
    */
    public function todo(): TodoRequestBuilder {
        return new TodoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the transitiveMemberOf property of the microsoft.graph.user entity.
    */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the activities property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return UserActivityItemRequestBuilder
    */
    public function activitiesById(string $id): UserActivityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userActivity%2Did'] = $id;
        return new UserActivityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the agreementAcceptances property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return AgreementAcceptanceItemRequestBuilder
    */
    public function agreementAcceptancesById(string $id): AgreementAcceptanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreementAcceptance%2Did'] = $id;
        return new AgreementAcceptanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the appRoleAssignments property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return AppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignmentsById(string $id): AppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment%2Did'] = $id;
        return new AppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the calendarGroups property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return CalendarGroupItemRequestBuilder
    */
    public function calendarGroupsById(string $id): CalendarGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendarGroup%2Did'] = $id;
        return new CalendarGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the calendars property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return CalendarItemRequestBuilder
    */
    public function calendarsById(string $id): CalendarItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendar%2Did'] = $id;
        return new CalendarItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the calendarView property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Me\CalendarView\Item\EventItemRequestBuilder
    */
    public function calendarViewById(string $id): \Microsoft\Graph\Generated\Me\CalendarView\Item\EventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Me\CalendarView\Item\EventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the chats property of the microsoft.graph.user entity.
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
     * Provides operations to manage the contactFolders property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ContactFolderItemRequestBuilder
    */
    public function contactFoldersById(string $id): ContactFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contactFolder%2Did'] = $id;
        return new ContactFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the contacts property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ContactItemRequestBuilder
    */
    public function contactsById(string $id): ContactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contact%2Did'] = $id;
        return new ContactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the createdObjects property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Me\CreatedObjects\Item\DirectoryObjectItemRequestBuilder
    */
    public function createdObjectsById(string $id): \Microsoft\Graph\Generated\Me\CreatedObjects\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Me\CreatedObjects\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the deviceManagementTroubleshootingEvents property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementTroubleshootingEventItemRequestBuilder
    */
    public function deviceManagementTroubleshootingEventsById(string $id): DeviceManagementTroubleshootingEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementTroubleshootingEvent%2Did'] = $id;
        return new DeviceManagementTroubleshootingEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the directReports property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Me\DirectReports\Item\DirectoryObjectItemRequestBuilder
    */
    public function directReportsById(string $id): \Microsoft\Graph\Generated\Me\DirectReports\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Me\DirectReports\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the drives property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive%2Did'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the events property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Me\Events\Item\EventItemRequestBuilder
    */
    public function eventsById(string $id): \Microsoft\Graph\Generated\Me\Events\Item\EventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Me\Events\Item\EventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the extensions property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension%2Did'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the followedSites property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder
    */
    public function followedSitesById(string $id): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site%2Did'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Returns the user or organizational contact assigned as the user's manager. Optionally, you can expand the manager's chain up to the root node.
     * @param MeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/user-list-manager?view=graph-rest-1.0 Find more info here
    */
    public function get(?MeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [User::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the joinedTeams property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return TeamItemRequestBuilder
    */
    public function joinedTeamsById(string $id): TeamItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['team%2Did'] = $id;
        return new TeamItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the licenseDetails property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return LicenseDetailsItemRequestBuilder
    */
    public function licenseDetailsById(string $id): LicenseDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['licenseDetails%2Did'] = $id;
        return new LicenseDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the mailFolders property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return MailFolderItemRequestBuilder
    */
    public function mailFoldersById(string $id): MailFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailFolder%2Did'] = $id;
        return new MailFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedAppRegistrations property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ManagedAppRegistrationItemRequestBuilder
    */
    public function managedAppRegistrationsById(string $id): ManagedAppRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppRegistration%2Did'] = $id;
        return new ManagedAppRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedDevices property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceItemRequestBuilder
    */
    public function managedDevicesById(string $id): ManagedDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDevice%2Did'] = $id;
        return new ManagedDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the memberOf property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Me\MemberOf\Item\DirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): \Microsoft\Graph\Generated\Me\MemberOf\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Me\MemberOf\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the messages property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return MessageItemRequestBuilder
    */
    public function messagesById(string $id): MessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['message%2Did'] = $id;
        return new MessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the exportDeviceAndAppManagementData method.
     * @param int $skip Usage: skip={skip}
     * @param int $top Usage: top={top}
     * @return ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder
    */
    public function microsoftGraphExportDeviceAndAppManagementDataWithSkipWithTop(int $skip, int $top): ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder {
        return new ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder($this->pathParameters, $this->requestAdapter, $skip, $top);
    }

    /**
     * Provides operations to call the reminderView method.
     * @param string $endDateTime Usage: EndDateTime='{EndDateTime}'
     * @param string $startDateTime Usage: StartDateTime='{StartDateTime}'
     * @return ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function microsoftGraphReminderViewWithStartDateTimeWithEndDateTime(string $endDateTime, string $startDateTime): ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to manage the oauth2PermissionGrants property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return OAuth2PermissionGrantItemRequestBuilder
    */
    public function oauth2PermissionGrantsById(string $id): OAuth2PermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oAuth2PermissionGrant%2Did'] = $id;
        return new OAuth2PermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the onlineMeetings property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return OnlineMeetingItemRequestBuilder
    */
    public function onlineMeetingsById(string $id): OnlineMeetingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onlineMeeting%2Did'] = $id;
        return new OnlineMeetingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the ownedDevices property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Me\OwnedDevices\Item\DirectoryObjectItemRequestBuilder
    */
    public function ownedDevicesById(string $id): \Microsoft\Graph\Generated\Me\OwnedDevices\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Me\OwnedDevices\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the ownedObjects property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Me\OwnedObjects\Item\DirectoryObjectItemRequestBuilder
    */
    public function ownedObjectsById(string $id): \Microsoft\Graph\Generated\Me\OwnedObjects\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Me\OwnedObjects\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the properties of a user object. Not all properties can be updated by Member or Guest users with their default permissions without Administrator roles. Compare member and guest default permissions to see properties they can manage.
     * @param User $body The request body
     * @param MeRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/user-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(User $body, ?MeRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [User::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the people property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return PersonItemRequestBuilder
    */
    public function peopleById(string $id): PersonItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['person%2Did'] = $id;
        return new PersonItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the photos property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ProfilePhotoItemRequestBuilder
    */
    public function photosById(string $id): ProfilePhotoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['profilePhoto%2Did'] = $id;
        return new ProfilePhotoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the registeredDevices property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Me\RegisteredDevices\Item\DirectoryObjectItemRequestBuilder
    */
    public function registeredDevicesById(string $id): \Microsoft\Graph\Generated\Me\RegisteredDevices\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Me\RegisteredDevices\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the scopedRoleMemberOf property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ScopedRoleMembershipItemRequestBuilder
    */
    public function scopedRoleMemberOfById(string $id): ScopedRoleMembershipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['scopedRoleMembership%2Did'] = $id;
        return new ScopedRoleMembershipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Returns the user or organizational contact assigned as the user's manager. Optionally, you can expand the manager's chain up to the root node.
     * @param MeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a user object. Not all properties can be updated by Member or Guest users with their default permissions without Administrator roles. Compare member and guest default permissions to see properties they can manage.
     * @param User $body The request body
     * @param MeRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(User $body, ?MeRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Provides operations to manage the transitiveMemberOf property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Me\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): \Microsoft\Graph\Generated\Me\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Me\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
