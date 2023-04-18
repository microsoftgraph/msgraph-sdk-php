<?php

namespace Microsoft\Graph\Generated\Me;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Me\Activities\ActivitiesRequestBuilder;
use Microsoft\Graph\Generated\Me\AgreementAcceptances\AgreementAcceptancesRequestBuilder;
use Microsoft\Graph\Generated\Me\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Generated\Me\AssignLicense\AssignLicenseRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\AuthenticationRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Generated\Me\CalendarGroups\CalendarGroupsRequestBuilder;
use Microsoft\Graph\Generated\Me\Calendars\CalendarsRequestBuilder;
use Microsoft\Graph\Generated\Me\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Generated\Me\ChangePassword\ChangePasswordRequestBuilder;
use Microsoft\Graph\Generated\Me\Chats\ChatsRequestBuilder;
use Microsoft\Graph\Generated\Me\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Me\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Me\ContactFolders\ContactFoldersRequestBuilder;
use Microsoft\Graph\Generated\Me\Contacts\ContactsRequestBuilder;
use Microsoft\Graph\Generated\Me\CreatedObjects\CreatedObjectsRequestBuilder;
use Microsoft\Graph\Generated\Me\DeviceManagementTroubleshootingEvents\DeviceManagementTroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Generated\Me\DirectReports\DirectReportsRequestBuilder;
use Microsoft\Graph\Generated\Me\Drive\DriveRequestBuilder;
use Microsoft\Graph\Generated\Me\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Generated\Me\Events\EventsRequestBuilder;
use Microsoft\Graph\Generated\Me\ExportDeviceAndAppManagementData\ExportDeviceAndAppManagementDataRequestBuilder;
use Microsoft\Graph\Generated\Me\ExportDeviceAndAppManagementDataWithSkipWithTop\ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder;
use Microsoft\Graph\Generated\Me\ExportPersonalData\ExportPersonalDataRequestBuilder;
use Microsoft\Graph\Generated\Me\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Generated\Me\FindMeetingTimes\FindMeetingTimesRequestBuilder;
use Microsoft\Graph\Generated\Me\FollowedSites\FollowedSitesRequestBuilder;
use Microsoft\Graph\Generated\Me\GetMailTips\GetMailTipsRequestBuilder;
use Microsoft\Graph\Generated\Me\GetManagedAppDiagnosticStatuses\GetManagedAppDiagnosticStatusesRequestBuilder;
use Microsoft\Graph\Generated\Me\GetManagedAppPolicies\GetManagedAppPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Me\GetManagedDevicesWithAppFailures\GetManagedDevicesWithAppFailuresRequestBuilder;
use Microsoft\Graph\Generated\Me\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Me\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Me\InferenceClassification\InferenceClassificationRequestBuilder;
use Microsoft\Graph\Generated\Me\Insights\InsightsRequestBuilder;
use Microsoft\Graph\Generated\Me\JoinedTeams\JoinedTeamsRequestBuilder;
use Microsoft\Graph\Generated\Me\LicenseDetails\LicenseDetailsRequestBuilder;
use Microsoft\Graph\Generated\Me\MailboxSettings\MailboxSettingsRequestBuilder;
use Microsoft\Graph\Generated\Me\MailFolders\MailFoldersRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedAppRegistrations\ManagedAppRegistrationsRequestBuilder;
use Microsoft\Graph\Generated\Me\ManagedDevices\ManagedDevicesRequestBuilder;
use Microsoft\Graph\Generated\Me\Manager\ManagerRequestBuilder;
use Microsoft\Graph\Generated\Me\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Generated\Me\Messages\MessagesRequestBuilder;
use Microsoft\Graph\Generated\Me\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\Generated\Me\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Generated\Me\OnlineMeetings\OnlineMeetingsRequestBuilder;
use Microsoft\Graph\Generated\Me\Outlook\OutlookRequestBuilder;
use Microsoft\Graph\Generated\Me\OwnedDevices\OwnedDevicesRequestBuilder;
use Microsoft\Graph\Generated\Me\OwnedObjects\OwnedObjectsRequestBuilder;
use Microsoft\Graph\Generated\Me\People\PeopleRequestBuilder;
use Microsoft\Graph\Generated\Me\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Generated\Me\Photos\PhotosRequestBuilder;
use Microsoft\Graph\Generated\Me\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Generated\Me\Presence\PresenceRequestBuilder;
use Microsoft\Graph\Generated\Me\RegisteredDevices\RegisteredDevicesRequestBuilder;
use Microsoft\Graph\Generated\Me\ReminderViewWithStartDateTimeWithEndDateTime\ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Me\RemoveAllDevicesFromManagement\RemoveAllDevicesFromManagementRequestBuilder;
use Microsoft\Graph\Generated\Me\ReprocessLicenseAssignment\ReprocessLicenseAssignmentRequestBuilder;
use Microsoft\Graph\Generated\Me\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Generated\Me\RevokeSignInSessions\RevokeSignInSessionsRequestBuilder;
use Microsoft\Graph\Generated\Me\ScopedRoleMemberOf\ScopedRoleMemberOfRequestBuilder;
use Microsoft\Graph\Generated\Me\SendMail\SendMailRequestBuilder;
use Microsoft\Graph\Generated\Me\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Generated\Me\Teamwork\TeamworkRequestBuilder;
use Microsoft\Graph\Generated\Me\Todo\TodoRequestBuilder;
use Microsoft\Graph\Generated\Me\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Generated\Me\TranslateExchangeIds\TranslateExchangeIdsRequestBuilder;
use Microsoft\Graph\Generated\Me\WipeManagedAppRegistrationsByDeviceTag\WipeManagedAppRegistrationsByDeviceTagRequestBuilder;
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
     * Provides operations to call the assignLicense method.
    */
    public function assignLicense(): AssignLicenseRequestBuilder {
        return new AssignLicenseRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the changePassword method.
    */
    public function changePassword(): ChangePasswordRequestBuilder {
        return new ChangePasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the chats property of the microsoft.graph.user entity.
    */
    public function chats(): ChatsRequestBuilder {
        return new ChatsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the exportDeviceAndAppManagementData method.
    */
    public function exportDeviceAndAppManagementData(): ExportDeviceAndAppManagementDataRequestBuilder {
        return new ExportDeviceAndAppManagementDataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the exportPersonalData method.
    */
    public function exportPersonalData(): ExportPersonalDataRequestBuilder {
        return new ExportPersonalDataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the extensions property of the microsoft.graph.user entity.
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the findMeetingTimes method.
    */
    public function findMeetingTimes(): FindMeetingTimesRequestBuilder {
        return new FindMeetingTimesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the followedSites property of the microsoft.graph.user entity.
    */
    public function followedSites(): FollowedSitesRequestBuilder {
        return new FollowedSitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMailTips method.
    */
    public function getMailTips(): GetMailTipsRequestBuilder {
        return new GetMailTipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getManagedAppDiagnosticStatuses method.
    */
    public function getManagedAppDiagnosticStatuses(): GetManagedAppDiagnosticStatusesRequestBuilder {
        return new GetManagedAppDiagnosticStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getManagedAppPolicies method.
    */
    public function getManagedAppPolicies(): GetManagedAppPoliciesRequestBuilder {
        return new GetManagedAppPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getManagedDevicesWithAppFailures method.
    */
    public function getManagedDevicesWithAppFailures(): GetManagedDevicesWithAppFailuresRequestBuilder {
        return new GetManagedDevicesWithAppFailuresRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * The mailboxSettings property
    */
    public function mailboxSettings(): MailboxSettingsRequestBuilder {
        return new MailboxSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the removeAllDevicesFromManagement method.
    */
    public function removeAllDevicesFromManagement(): RemoveAllDevicesFromManagementRequestBuilder {
        return new RemoveAllDevicesFromManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reprocessLicenseAssignment method.
    */
    public function reprocessLicenseAssignment(): ReprocessLicenseAssignmentRequestBuilder {
        return new ReprocessLicenseAssignmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to call the restore method.
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the revokeSignInSessions method.
    */
    public function revokeSignInSessions(): RevokeSignInSessionsRequestBuilder {
        return new RevokeSignInSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the scopedRoleMemberOf property of the microsoft.graph.user entity.
    */
    public function scopedRoleMemberOf(): ScopedRoleMemberOfRequestBuilder {
        return new ScopedRoleMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendMail method.
    */
    public function sendMail(): SendMailRequestBuilder {
        return new SendMailRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the translateExchangeIds method.
    */
    public function translateExchangeIds(): TranslateExchangeIdsRequestBuilder {
        return new TranslateExchangeIdsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to call the wipeManagedAppRegistrationsByDeviceTag method.
    */
    public function wipeManagedAppRegistrationsByDeviceTag(): WipeManagedAppRegistrationsByDeviceTagRequestBuilder {
        return new WipeManagedAppRegistrationsByDeviceTagRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to call the exportDeviceAndAppManagementData method.
     * @param int $skip Usage: skip={skip}
     * @param int $top Usage: top={top}
     * @return ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder
    */
    public function exportDeviceAndAppManagementDataWithSkipWithTop(int $skip, int $top): ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder {
        return new ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder($this->pathParameters, $this->requestAdapter, $skip, $top);
    }

    /**
     * Retrieve the properties and relationships of user object.
     * @param MeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/user-get?view=graph-rest-1.0 Find more info here
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
     * Provides operations to call the reminderView method.
     * @param string $endDateTime Usage: EndDateTime='{EndDateTime}'
     * @param string $startDateTime Usage: StartDateTime='{StartDateTime}'
     * @return ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function reminderViewWithStartDateTimeWithEndDateTime(string $endDateTime, string $startDateTime): ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Retrieve the properties and relationships of user object.
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

}
