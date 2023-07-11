<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class User extends DirectoryObject implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new user and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.user');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return User
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): User {
        return new User();
    }

    /**
     * Gets the aboutMe property value. A freeform text entry field for the user to describe themselves. Returned only on $select.
     * @return string|null
    */
    public function getAboutMe(): ?string {
        $val = $this->getBackingStore()->get('aboutMe');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aboutMe'");
    }

    /**
     * Gets the accountEnabled property value. true if the account is enabled; otherwise, false. This property is required when a user is created. Returned only on $select. Supports $filter (eq, ne, not, and in).
     * @return bool|null
    */
    public function getAccountEnabled(): ?bool {
        $val = $this->getBackingStore()->get('accountEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountEnabled'");
    }

    /**
     * Gets the activities property value. The user's activities across devices. Read-only. Nullable.
     * @return array<UserActivity>|null
    */
    public function getActivities(): ?array {
        $val = $this->getBackingStore()->get('activities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserActivity::class);
            /** @var array<UserActivity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activities'");
    }

    /**
     * Gets the ageGroup property value. Sets the age group of the user. Allowed values: null, Minor, NotAdult and Adult. Refer to the legal age group property definitions for further information. Returned only on $select. Supports $filter (eq, ne, not, and in).
     * @return string|null
    */
    public function getAgeGroup(): ?string {
        $val = $this->getBackingStore()->get('ageGroup');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ageGroup'");
    }

    /**
     * Gets the agreementAcceptances property value. The user's terms of use acceptance statuses. Read-only. Nullable.
     * @return array<AgreementAcceptance>|null
    */
    public function getAgreementAcceptances(): ?array {
        $val = $this->getBackingStore()->get('agreementAcceptances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgreementAcceptance::class);
            /** @var array<AgreementAcceptance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agreementAcceptances'");
    }

    /**
     * Gets the appRoleAssignments property value. Represents the app roles a user has been granted for an application. Supports $expand.
     * @return array<AppRoleAssignment>|null
    */
    public function getAppRoleAssignments(): ?array {
        $val = $this->getBackingStore()->get('appRoleAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppRoleAssignment::class);
            /** @var array<AppRoleAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appRoleAssignments'");
    }

    /**
     * Gets the assignedLicenses property value. The licenses that are assigned to the user, including inherited (group-based) licenses. This property doesn't differentiate directly-assigned and inherited licenses. Use the licenseAssignmentStates property to identify the directly-assigned and inherited licenses.  Not nullable. Returned only on $select. Supports $filter (eq, not, /$count eq 0, /$count ne 0).
     * @return array<AssignedLicense>|null
    */
    public function getAssignedLicenses(): ?array {
        $val = $this->getBackingStore()->get('assignedLicenses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssignedLicense::class);
            /** @var array<AssignedLicense>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedLicenses'");
    }

    /**
     * Gets the assignedPlans property value. The plans that are assigned to the user. Read-only. Not nullable. Returned only on $select. Supports $filter (eq and not).
     * @return array<AssignedPlan>|null
    */
    public function getAssignedPlans(): ?array {
        $val = $this->getBackingStore()->get('assignedPlans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssignedPlan::class);
            /** @var array<AssignedPlan>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedPlans'");
    }

    /**
     * Gets the authentication property value. The authentication methods that are supported for the user.
     * @return Authentication|null
    */
    public function getAuthentication(): ?Authentication {
        $val = $this->getBackingStore()->get('authentication');
        if (is_null($val) || $val instanceof Authentication) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authentication'");
    }

    /**
     * Gets the authorizationInfo property value. The authorizationInfo property
     * @return AuthorizationInfo|null
    */
    public function getAuthorizationInfo(): ?AuthorizationInfo {
        $val = $this->getBackingStore()->get('authorizationInfo');
        if (is_null($val) || $val instanceof AuthorizationInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorizationInfo'");
    }

    /**
     * Gets the birthday property value. The birthday of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned only on $select.
     * @return DateTime|null
    */
    public function getBirthday(): ?DateTime {
        $val = $this->getBackingStore()->get('birthday');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'birthday'");
    }

    /**
     * Gets the businessPhones property value. The telephone numbers for the user. NOTE: Although this is a string collection, only one number can be set for this property. Read-only for users synced from on-premises directory. Returned by default. Supports $filter (eq, not, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getBusinessPhones(): ?array {
        $val = $this->getBackingStore()->get('businessPhones');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'businessPhones'");
    }

    /**
     * Gets the calendar property value. The user's primary calendar. Read-only.
     * @return Calendar|null
    */
    public function getCalendar(): ?Calendar {
        $val = $this->getBackingStore()->get('calendar');
        if (is_null($val) || $val instanceof Calendar) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calendar'");
    }

    /**
     * Gets the calendarGroups property value. The user's calendar groups. Read-only. Nullable.
     * @return array<CalendarGroup>|null
    */
    public function getCalendarGroups(): ?array {
        $val = $this->getBackingStore()->get('calendarGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CalendarGroup::class);
            /** @var array<CalendarGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calendarGroups'");
    }

    /**
     * Gets the calendars property value. The user's calendars. Read-only. Nullable.
     * @return array<Calendar>|null
    */
    public function getCalendars(): ?array {
        $val = $this->getBackingStore()->get('calendars');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Calendar::class);
            /** @var array<Calendar>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calendars'");
    }

    /**
     * Gets the calendarView property value. The calendar view for the calendar. Read-only. Nullable.
     * @return array<Event>|null
    */
    public function getCalendarView(): ?array {
        $val = $this->getBackingStore()->get('calendarView');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Event::class);
            /** @var array<Event>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calendarView'");
    }

    /**
     * Gets the chats property value. The chats property
     * @return array<Chat>|null
    */
    public function getChats(): ?array {
        $val = $this->getBackingStore()->get('chats');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Chat::class);
            /** @var array<Chat>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chats'");
    }

    /**
     * Gets the city property value. The city in which the user is located. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getCity(): ?string {
        $val = $this->getBackingStore()->get('city');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'city'");
    }

    /**
     * Gets the companyName property value. The company name which the user is associated. This property can be useful for describing the company that an external user comes from. The maximum length is 64 characters.Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getCompanyName(): ?string {
        $val = $this->getBackingStore()->get('companyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'companyName'");
    }

    /**
     * Gets the consentProvidedForMinor property value. Sets whether consent has been obtained for minors. Allowed values: null, Granted, Denied and NotRequired. Refer to the legal age group property definitions for further information. Returned only on $select. Supports $filter (eq, ne, not, and in).
     * @return string|null
    */
    public function getConsentProvidedForMinor(): ?string {
        $val = $this->getBackingStore()->get('consentProvidedForMinor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'consentProvidedForMinor'");
    }

    /**
     * Gets the contactFolders property value. The user's contacts folders. Read-only. Nullable.
     * @return array<ContactFolder>|null
    */
    public function getContactFolders(): ?array {
        $val = $this->getBackingStore()->get('contactFolders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ContactFolder::class);
            /** @var array<ContactFolder>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contactFolders'");
    }

    /**
     * Gets the contacts property value. The user's contacts. Read-only. Nullable.
     * @return array<Contact>|null
    */
    public function getContacts(): ?array {
        $val = $this->getBackingStore()->get('contacts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Contact::class);
            /** @var array<Contact>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contacts'");
    }

    /**
     * Gets the country property value. The country/region in which the user is located; for example, US or UK. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getCountry(): ?string {
        $val = $this->getBackingStore()->get('country');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'country'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the user was created, in ISO 8601 format and in UTC time. The value cannot be modified and is automatically populated when the entity is created. Nullable. For on-premises users, the value represents when they were first created in Azure AD. Property is null for some users created before June 2018 and on-premises users that were synced to Azure AD before June 2018. Read-only. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in).
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the createdObjects property value. Directory objects that were created by the user. Read-only. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getCreatedObjects(): ?array {
        $val = $this->getBackingStore()->get('createdObjects');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdObjects'");
    }

    /**
     * Gets the creationType property value. Indicates whether the user account was created through one of the following methods:  As a regular school or work account (null). As an external account (Invitation). As a local account for an Azure Active Directory B2C tenant (LocalAccount). Through self-service sign-up by an internal user using email verification (EmailVerified). Through self-service sign-up by an external user signing up through a link that is part of a user flow (SelfServiceSignUp). Read-only.Returned only on $select. Supports $filter (eq, ne, not, in).
     * @return string|null
    */
    public function getCreationType(): ?string {
        $val = $this->getBackingStore()->get('creationType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationType'");
    }

    /**
     * Gets the department property value. The name for the department in which the user works. Maximum length is 64 characters. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, and eq on null values).
     * @return string|null
    */
    public function getDepartment(): ?string {
        $val = $this->getBackingStore()->get('department');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'department'");
    }

    /**
     * Gets the deviceEnrollmentLimit property value. The limit on the maximum number of devices that the user is permitted to enroll. Allowed values are 5 or 1000.
     * @return int|null
    */
    public function getDeviceEnrollmentLimit(): ?int {
        $val = $this->getBackingStore()->get('deviceEnrollmentLimit');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceEnrollmentLimit'");
    }

    /**
     * Gets the deviceManagementTroubleshootingEvents property value. The list of troubleshooting events for this user.
     * @return array<DeviceManagementTroubleshootingEvent>|null
    */
    public function getDeviceManagementTroubleshootingEvents(): ?array {
        $val = $this->getBackingStore()->get('deviceManagementTroubleshootingEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementTroubleshootingEvent::class);
            /** @var array<DeviceManagementTroubleshootingEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceManagementTroubleshootingEvents'");
    }

    /**
     * Gets the directReports property value. The users and contacts that report to the user. (The users and contacts that have their manager property set to this user.) Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getDirectReports(): ?array {
        $val = $this->getBackingStore()->get('directReports');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directReports'");
    }

    /**
     * Gets the displayName property value. The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial and last name. This property is required when a user is created and it cannot be cleared during updates. Maximum length is 256 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values), $orderBy, and $search.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the drive property value. The user's OneDrive. Read-only.
     * @return Drive|null
    */
    public function getDrive(): ?Drive {
        $val = $this->getBackingStore()->get('drive');
        if (is_null($val) || $val instanceof Drive) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'drive'");
    }

    /**
     * Gets the drives property value. A collection of drives available for this user. Read-only.
     * @return array<Drive>|null
    */
    public function getDrives(): ?array {
        $val = $this->getBackingStore()->get('drives');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Drive::class);
            /** @var array<Drive>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'drives'");
    }

    /**
     * Gets the employeeExperience property value. The employeeExperience property
     * @return EmployeeExperienceUser|null
    */
    public function getEmployeeExperience(): ?EmployeeExperienceUser {
        $val = $this->getBackingStore()->get('employeeExperience');
        if (is_null($val) || $val instanceof EmployeeExperienceUser) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'employeeExperience'");
    }

    /**
     * Gets the employeeHireDate property value. The date and time when the user was hired or will start work in case of a future hire. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in).
     * @return DateTime|null
    */
    public function getEmployeeHireDate(): ?DateTime {
        $val = $this->getBackingStore()->get('employeeHireDate');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'employeeHireDate'");
    }

    /**
     * Gets the employeeId property value. The employee identifier assigned to the user by the organization. The maximum length is 16 characters. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getEmployeeId(): ?string {
        $val = $this->getBackingStore()->get('employeeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'employeeId'");
    }

    /**
     * Gets the employeeLeaveDateTime property value. The date and time when the user left or will leave the organization. To read this property, the calling app must be assigned the User-LifeCycleInfo.Read.All permission. To write this property, the calling app must be assigned the User.Read.All and User-LifeCycleInfo.ReadWrite.All permissions. To read this property in delegated scenarios, the admin needs one of the following Azure AD roles: Lifecycle Workflows Administrator, Global Reader, or Global Administrator. To write this property in delegated scenarios, the admin needs the Global Administrator role. Supports $filter (eq, ne, not , ge, le, in). For more information, see Configure the employeeLeaveDateTime property for a user.
     * @return DateTime|null
    */
    public function getEmployeeLeaveDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('employeeLeaveDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'employeeLeaveDateTime'");
    }

    /**
     * Gets the employeeOrgData property value. Represents organization data (e.g. division and costCenter) associated with a user. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in).
     * @return EmployeeOrgData|null
    */
    public function getEmployeeOrgData(): ?EmployeeOrgData {
        $val = $this->getBackingStore()->get('employeeOrgData');
        if (is_null($val) || $val instanceof EmployeeOrgData) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'employeeOrgData'");
    }

    /**
     * Gets the employeeType property value. Captures enterprise worker type. For example, Employee, Contractor, Consultant, or Vendor. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith).
     * @return string|null
    */
    public function getEmployeeType(): ?string {
        $val = $this->getBackingStore()->get('employeeType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'employeeType'");
    }

    /**
     * Gets the events property value. The user's events. Default is to show Events under the Default Calendar. Read-only. Nullable.
     * @return array<Event>|null
    */
    public function getEvents(): ?array {
        $val = $this->getBackingStore()->get('events');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Event::class);
            /** @var array<Event>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'events'");
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the user. Read-only. Supports $expand. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        $val = $this->getBackingStore()->get('extensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Extension::class);
            /** @var array<Extension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * Gets the externalUserState property value. For an external user invited to the tenant using the invitation API, this property represents the invited user's invitation status. For invited users, the state can be PendingAcceptance or Accepted, or null for all other users. Returned only on $select. Supports $filter (eq, ne, not , in).
     * @return string|null
    */
    public function getExternalUserState(): ?string {
        $val = $this->getBackingStore()->get('externalUserState');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalUserState'");
    }

    /**
     * Gets the externalUserStateChangeDateTime property value. Shows the timestamp for the latest change to the externalUserState property. Returned only on $select. Supports $filter (eq, ne, not , in).
     * @return DateTime|null
    */
    public function getExternalUserStateChangeDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('externalUserStateChangeDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalUserStateChangeDateTime'");
    }

    /**
     * Gets the faxNumber property value. The fax number of the user. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getFaxNumber(): ?string {
        $val = $this->getBackingStore()->get('faxNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'faxNumber'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aboutMe' => fn(ParseNode $n) => $o->setAboutMe($n->getStringValue()),
            'accountEnabled' => fn(ParseNode $n) => $o->setAccountEnabled($n->getBooleanValue()),
            'activities' => fn(ParseNode $n) => $o->setActivities($n->getCollectionOfObjectValues([UserActivity::class, 'createFromDiscriminatorValue'])),
            'ageGroup' => fn(ParseNode $n) => $o->setAgeGroup($n->getStringValue()),
            'agreementAcceptances' => fn(ParseNode $n) => $o->setAgreementAcceptances($n->getCollectionOfObjectValues([AgreementAcceptance::class, 'createFromDiscriminatorValue'])),
            'appRoleAssignments' => fn(ParseNode $n) => $o->setAppRoleAssignments($n->getCollectionOfObjectValues([AppRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'assignedLicenses' => fn(ParseNode $n) => $o->setAssignedLicenses($n->getCollectionOfObjectValues([AssignedLicense::class, 'createFromDiscriminatorValue'])),
            'assignedPlans' => fn(ParseNode $n) => $o->setAssignedPlans($n->getCollectionOfObjectValues([AssignedPlan::class, 'createFromDiscriminatorValue'])),
            'authentication' => fn(ParseNode $n) => $o->setAuthentication($n->getObjectValue([Authentication::class, 'createFromDiscriminatorValue'])),
            'authorizationInfo' => fn(ParseNode $n) => $o->setAuthorizationInfo($n->getObjectValue([AuthorizationInfo::class, 'createFromDiscriminatorValue'])),
            'birthday' => fn(ParseNode $n) => $o->setBirthday($n->getDateTimeValue()),
            'businessPhones' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBusinessPhones($val);
            },
            'calendar' => fn(ParseNode $n) => $o->setCalendar($n->getObjectValue([Calendar::class, 'createFromDiscriminatorValue'])),
            'calendarGroups' => fn(ParseNode $n) => $o->setCalendarGroups($n->getCollectionOfObjectValues([CalendarGroup::class, 'createFromDiscriminatorValue'])),
            'calendars' => fn(ParseNode $n) => $o->setCalendars($n->getCollectionOfObjectValues([Calendar::class, 'createFromDiscriminatorValue'])),
            'calendarView' => fn(ParseNode $n) => $o->setCalendarView($n->getCollectionOfObjectValues([Event::class, 'createFromDiscriminatorValue'])),
            'chats' => fn(ParseNode $n) => $o->setChats($n->getCollectionOfObjectValues([Chat::class, 'createFromDiscriminatorValue'])),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'companyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'consentProvidedForMinor' => fn(ParseNode $n) => $o->setConsentProvidedForMinor($n->getStringValue()),
            'contactFolders' => fn(ParseNode $n) => $o->setContactFolders($n->getCollectionOfObjectValues([ContactFolder::class, 'createFromDiscriminatorValue'])),
            'contacts' => fn(ParseNode $n) => $o->setContacts($n->getCollectionOfObjectValues([Contact::class, 'createFromDiscriminatorValue'])),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'createdObjects' => fn(ParseNode $n) => $o->setCreatedObjects($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'creationType' => fn(ParseNode $n) => $o->setCreationType($n->getStringValue()),
            'department' => fn(ParseNode $n) => $o->setDepartment($n->getStringValue()),
            'deviceEnrollmentLimit' => fn(ParseNode $n) => $o->setDeviceEnrollmentLimit($n->getIntegerValue()),
            'deviceManagementTroubleshootingEvents' => fn(ParseNode $n) => $o->setDeviceManagementTroubleshootingEvents($n->getCollectionOfObjectValues([DeviceManagementTroubleshootingEvent::class, 'createFromDiscriminatorValue'])),
            'directReports' => fn(ParseNode $n) => $o->setDirectReports($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'drive' => fn(ParseNode $n) => $o->setDrive($n->getObjectValue([Drive::class, 'createFromDiscriminatorValue'])),
            'drives' => fn(ParseNode $n) => $o->setDrives($n->getCollectionOfObjectValues([Drive::class, 'createFromDiscriminatorValue'])),
            'employeeExperience' => fn(ParseNode $n) => $o->setEmployeeExperience($n->getObjectValue([EmployeeExperienceUser::class, 'createFromDiscriminatorValue'])),
            'employeeHireDate' => fn(ParseNode $n) => $o->setEmployeeHireDate($n->getDateTimeValue()),
            'employeeId' => fn(ParseNode $n) => $o->setEmployeeId($n->getStringValue()),
            'employeeLeaveDateTime' => fn(ParseNode $n) => $o->setEmployeeLeaveDateTime($n->getDateTimeValue()),
            'employeeOrgData' => fn(ParseNode $n) => $o->setEmployeeOrgData($n->getObjectValue([EmployeeOrgData::class, 'createFromDiscriminatorValue'])),
            'employeeType' => fn(ParseNode $n) => $o->setEmployeeType($n->getStringValue()),
            'print' => fn(ParseNode $n) => $o->setPrint($n->getObjectValue([UserPrint::class, 'createFromDiscriminatorValue'])),
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfObjectValues([Event::class, 'createFromDiscriminatorValue'])),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'externalUserState' => fn(ParseNode $n) => $o->setExternalUserState($n->getStringValue()),
            'externalUserStateChangeDateTime' => fn(ParseNode $n) => $o->setExternalUserStateChangeDateTime($n->getDateTimeValue()),
            'faxNumber' => fn(ParseNode $n) => $o->setFaxNumber($n->getStringValue()),
            'followedSites' => fn(ParseNode $n) => $o->setFollowedSites($n->getCollectionOfObjectValues([Site::class, 'createFromDiscriminatorValue'])),
            'givenName' => fn(ParseNode $n) => $o->setGivenName($n->getStringValue()),
            'hireDate' => fn(ParseNode $n) => $o->setHireDate($n->getDateTimeValue()),
            'identities' => fn(ParseNode $n) => $o->setIdentities($n->getCollectionOfObjectValues([ObjectIdentity::class, 'createFromDiscriminatorValue'])),
            'imAddresses' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setImAddresses($val);
            },
            'inferenceClassification' => fn(ParseNode $n) => $o->setInferenceClassification($n->getObjectValue([InferenceClassification::class, 'createFromDiscriminatorValue'])),
            'insights' => fn(ParseNode $n) => $o->setInsights($n->getObjectValue([OfficeGraphInsights::class, 'createFromDiscriminatorValue'])),
            'interests' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setInterests($val);
            },
            'isResourceAccount' => fn(ParseNode $n) => $o->setIsResourceAccount($n->getBooleanValue()),
            'jobTitle' => fn(ParseNode $n) => $o->setJobTitle($n->getStringValue()),
            'joinedTeams' => fn(ParseNode $n) => $o->setJoinedTeams($n->getCollectionOfObjectValues([Team::class, 'createFromDiscriminatorValue'])),
            'lastPasswordChangeDateTime' => fn(ParseNode $n) => $o->setLastPasswordChangeDateTime($n->getDateTimeValue()),
            'legalAgeGroupClassification' => fn(ParseNode $n) => $o->setLegalAgeGroupClassification($n->getStringValue()),
            'licenseAssignmentStates' => fn(ParseNode $n) => $o->setLicenseAssignmentStates($n->getCollectionOfObjectValues([LicenseAssignmentState::class, 'createFromDiscriminatorValue'])),
            'licenseDetails' => fn(ParseNode $n) => $o->setLicenseDetails($n->getCollectionOfObjectValues([LicenseDetails::class, 'createFromDiscriminatorValue'])),
            'mail' => fn(ParseNode $n) => $o->setMail($n->getStringValue()),
            'mailboxSettings' => fn(ParseNode $n) => $o->setMailboxSettings($n->getObjectValue([MailboxSettings::class, 'createFromDiscriminatorValue'])),
            'mailFolders' => fn(ParseNode $n) => $o->setMailFolders($n->getCollectionOfObjectValues([MailFolder::class, 'createFromDiscriminatorValue'])),
            'mailNickname' => fn(ParseNode $n) => $o->setMailNickname($n->getStringValue()),
            'managedAppRegistrations' => fn(ParseNode $n) => $o->setManagedAppRegistrations($n->getCollectionOfObjectValues([ManagedAppRegistration::class, 'createFromDiscriminatorValue'])),
            'managedDevices' => fn(ParseNode $n) => $o->setManagedDevices($n->getCollectionOfObjectValues([ManagedDevice::class, 'createFromDiscriminatorValue'])),
            'manager' => fn(ParseNode $n) => $o->setManager($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'memberOf' => fn(ParseNode $n) => $o->setMemberOf($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'messages' => fn(ParseNode $n) => $o->setMessages($n->getCollectionOfObjectValues([Message::class, 'createFromDiscriminatorValue'])),
            'mobilePhone' => fn(ParseNode $n) => $o->setMobilePhone($n->getStringValue()),
            'mySite' => fn(ParseNode $n) => $o->setMySite($n->getStringValue()),
            'oauth2PermissionGrants' => fn(ParseNode $n) => $o->setOauth2PermissionGrants($n->getCollectionOfObjectValues([OAuth2PermissionGrant::class, 'createFromDiscriminatorValue'])),
            'officeLocation' => fn(ParseNode $n) => $o->setOfficeLocation($n->getStringValue()),
            'onenote' => fn(ParseNode $n) => $o->setOnenote($n->getObjectValue([Onenote::class, 'createFromDiscriminatorValue'])),
            'onlineMeetings' => fn(ParseNode $n) => $o->setOnlineMeetings($n->getCollectionOfObjectValues([OnlineMeeting::class, 'createFromDiscriminatorValue'])),
            'onPremisesDistinguishedName' => fn(ParseNode $n) => $o->setOnPremisesDistinguishedName($n->getStringValue()),
            'onPremisesDomainName' => fn(ParseNode $n) => $o->setOnPremisesDomainName($n->getStringValue()),
            'onPremisesExtensionAttributes' => fn(ParseNode $n) => $o->setOnPremisesExtensionAttributes($n->getObjectValue([OnPremisesExtensionAttributes::class, 'createFromDiscriminatorValue'])),
            'onPremisesImmutableId' => fn(ParseNode $n) => $o->setOnPremisesImmutableId($n->getStringValue()),
            'onPremisesLastSyncDateTime' => fn(ParseNode $n) => $o->setOnPremisesLastSyncDateTime($n->getDateTimeValue()),
            'onPremisesProvisioningErrors' => fn(ParseNode $n) => $o->setOnPremisesProvisioningErrors($n->getCollectionOfObjectValues([OnPremisesProvisioningError::class, 'createFromDiscriminatorValue'])),
            'onPremisesSamAccountName' => fn(ParseNode $n) => $o->setOnPremisesSamAccountName($n->getStringValue()),
            'onPremisesSecurityIdentifier' => fn(ParseNode $n) => $o->setOnPremisesSecurityIdentifier($n->getStringValue()),
            'onPremisesSyncEnabled' => fn(ParseNode $n) => $o->setOnPremisesSyncEnabled($n->getBooleanValue()),
            'onPremisesUserPrincipalName' => fn(ParseNode $n) => $o->setOnPremisesUserPrincipalName($n->getStringValue()),
            'otherMails' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOtherMails($val);
            },
            'outlook' => fn(ParseNode $n) => $o->setOutlook($n->getObjectValue([OutlookUser::class, 'createFromDiscriminatorValue'])),
            'ownedDevices' => fn(ParseNode $n) => $o->setOwnedDevices($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'ownedObjects' => fn(ParseNode $n) => $o->setOwnedObjects($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'passwordPolicies' => fn(ParseNode $n) => $o->setPasswordPolicies($n->getStringValue()),
            'passwordProfile' => fn(ParseNode $n) => $o->setPasswordProfile($n->getObjectValue([PasswordProfile::class, 'createFromDiscriminatorValue'])),
            'pastProjects' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPastProjects($val);
            },
            'people' => fn(ParseNode $n) => $o->setPeople($n->getCollectionOfObjectValues([Person::class, 'createFromDiscriminatorValue'])),
            'photo' => fn(ParseNode $n) => $o->setPhoto($n->getObjectValue([ProfilePhoto::class, 'createFromDiscriminatorValue'])),
            'photos' => fn(ParseNode $n) => $o->setPhotos($n->getCollectionOfObjectValues([ProfilePhoto::class, 'createFromDiscriminatorValue'])),
            'planner' => fn(ParseNode $n) => $o->setPlanner($n->getObjectValue([PlannerUser::class, 'createFromDiscriminatorValue'])),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'preferredDataLocation' => fn(ParseNode $n) => $o->setPreferredDataLocation($n->getStringValue()),
            'preferredLanguage' => fn(ParseNode $n) => $o->setPreferredLanguage($n->getStringValue()),
            'preferredName' => fn(ParseNode $n) => $o->setPreferredName($n->getStringValue()),
            'presence' => fn(ParseNode $n) => $o->setPresence($n->getObjectValue([Presence::class, 'createFromDiscriminatorValue'])),
            'provisionedPlans' => fn(ParseNode $n) => $o->setProvisionedPlans($n->getCollectionOfObjectValues([ProvisionedPlan::class, 'createFromDiscriminatorValue'])),
            'proxyAddresses' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProxyAddresses($val);
            },
            'registeredDevices' => fn(ParseNode $n) => $o->setRegisteredDevices($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'responsibilities' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResponsibilities($val);
            },
            'schools' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSchools($val);
            },
            'scopedRoleMemberOf' => fn(ParseNode $n) => $o->setScopedRoleMemberOf($n->getCollectionOfObjectValues([ScopedRoleMembership::class, 'createFromDiscriminatorValue'])),
            'securityIdentifier' => fn(ParseNode $n) => $o->setSecurityIdentifier($n->getStringValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([UserSettings::class, 'createFromDiscriminatorValue'])),
            'showInAddressList' => fn(ParseNode $n) => $o->setShowInAddressList($n->getBooleanValue()),
            'signInActivity' => fn(ParseNode $n) => $o->setSignInActivity($n->getObjectValue([SignInActivity::class, 'createFromDiscriminatorValue'])),
            'signInSessionsValidFromDateTime' => fn(ParseNode $n) => $o->setSignInSessionsValidFromDateTime($n->getDateTimeValue()),
            'skills' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSkills($val);
            },
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'streetAddress' => fn(ParseNode $n) => $o->setStreetAddress($n->getStringValue()),
            'surname' => fn(ParseNode $n) => $o->setSurname($n->getStringValue()),
            'teamwork' => fn(ParseNode $n) => $o->setTeamwork($n->getObjectValue([UserTeamwork::class, 'createFromDiscriminatorValue'])),
            'todo' => fn(ParseNode $n) => $o->setTodo($n->getObjectValue([Todo::class, 'createFromDiscriminatorValue'])),
            'transitiveMemberOf' => fn(ParseNode $n) => $o->setTransitiveMemberOf($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'usageLocation' => fn(ParseNode $n) => $o->setUsageLocation($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the followedSites property value. The followedSites property
     * @return array<Site>|null
    */
    public function getFollowedSites(): ?array {
        $val = $this->getBackingStore()->get('followedSites');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Site::class);
            /** @var array<Site>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'followedSites'");
    }

    /**
     * Gets the givenName property value. The given name (first name) of the user. Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getGivenName(): ?string {
        $val = $this->getBackingStore()->get('givenName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'givenName'");
    }

    /**
     * Gets the hireDate property value. The hire date of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned only on $select.  Note: This property is specific to SharePoint Online. We recommend using the native employeeHireDate property to set and update hire date values using Microsoft Graph APIs.
     * @return DateTime|null
    */
    public function getHireDate(): ?DateTime {
        $val = $this->getBackingStore()->get('hireDate');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hireDate'");
    }

    /**
     * Gets the identities property value. Represents the identities that can be used to sign in to this user account. An identity can be provided by Microsoft (also known as a local account), by organizations, or by social identity providers such as Facebook, Google, and Microsoft, and tied to a user account. May contain multiple items with the same signInType value. Returned only on $select. Supports $filter (eq) including on null values, only where the signInType is not userPrincipalName.
     * @return array<ObjectIdentity>|null
    */
    public function getIdentities(): ?array {
        $val = $this->getBackingStore()->get('identities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ObjectIdentity::class);
            /** @var array<ObjectIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identities'");
    }

    /**
     * Gets the imAddresses property value. The instant message voice over IP (VOIP) session initiation protocol (SIP) addresses for the user. Read-only. Returned only on $select. Supports $filter (eq, not, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getImAddresses(): ?array {
        $val = $this->getBackingStore()->get('imAddresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imAddresses'");
    }

    /**
     * Gets the inferenceClassification property value. Relevance classification of the user's messages based on explicit designations which override inferred relevance or importance.
     * @return InferenceClassification|null
    */
    public function getInferenceClassification(): ?InferenceClassification {
        $val = $this->getBackingStore()->get('inferenceClassification');
        if (is_null($val) || $val instanceof InferenceClassification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inferenceClassification'");
    }

    /**
     * Gets the insights property value. The insights property
     * @return OfficeGraphInsights|null
    */
    public function getInsights(): ?OfficeGraphInsights {
        $val = $this->getBackingStore()->get('insights');
        if (is_null($val) || $val instanceof OfficeGraphInsights) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'insights'");
    }

    /**
     * Gets the interests property value. A list for the user to describe their interests. Returned only on $select.
     * @return array<string>|null
    */
    public function getInterests(): ?array {
        $val = $this->getBackingStore()->get('interests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'interests'");
    }

    /**
     * Gets the isResourceAccount property value. Do not use – reserved for future use.
     * @return bool|null
    */
    public function getIsResourceAccount(): ?bool {
        $val = $this->getBackingStore()->get('isResourceAccount');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isResourceAccount'");
    }

    /**
     * Gets the jobTitle property value. The user's job title. Maximum length is 128 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getJobTitle(): ?string {
        $val = $this->getBackingStore()->get('jobTitle');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobTitle'");
    }

    /**
     * Gets the joinedTeams property value. The joinedTeams property
     * @return array<Team>|null
    */
    public function getJoinedTeams(): ?array {
        $val = $this->getBackingStore()->get('joinedTeams');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Team::class);
            /** @var array<Team>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinedTeams'");
    }

    /**
     * Gets the lastPasswordChangeDateTime property value. The time when this Azure AD user last changed their password or when their password was created, whichever date the latest action was performed. The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned only on $select.
     * @return DateTime|null
    */
    public function getLastPasswordChangeDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastPasswordChangeDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastPasswordChangeDateTime'");
    }

    /**
     * Gets the legalAgeGroupClassification property value. Used by enterprise applications to determine the legal age group of the user. This property is read-only and calculated based on ageGroup and consentProvidedForMinor properties. Allowed values: null, MinorWithOutParentalConsent, MinorWithParentalConsent, MinorNoParentalConsentRequired, NotAdult and Adult. Refer to the legal age group property definitions for further information. Returned only on $select.
     * @return string|null
    */
    public function getLegalAgeGroupClassification(): ?string {
        $val = $this->getBackingStore()->get('legalAgeGroupClassification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'legalAgeGroupClassification'");
    }

    /**
     * Gets the licenseAssignmentStates property value. State of license assignments for this user. Also indicates licenses that are directly-assigned and those that the user has inherited through group memberships. Read-only. Returned only on $select.
     * @return array<LicenseAssignmentState>|null
    */
    public function getLicenseAssignmentStates(): ?array {
        $val = $this->getBackingStore()->get('licenseAssignmentStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LicenseAssignmentState::class);
            /** @var array<LicenseAssignmentState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licenseAssignmentStates'");
    }

    /**
     * Gets the licenseDetails property value. A collection of this user's license details. Read-only.
     * @return array<LicenseDetails>|null
    */
    public function getLicenseDetails(): ?array {
        $val = $this->getBackingStore()->get('licenseDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LicenseDetails::class);
            /** @var array<LicenseDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licenseDetails'");
    }

    /**
     * Gets the mail property value. The SMTP address for the user, for example, jeff@contoso.onmicrosoft.com. Changes to this property will also update the user's proxyAddresses collection to include the value as an SMTP address. This property cannot contain accent characters.  NOTE: We do not recommend updating this property for Azure AD B2C user profiles. Use the otherMails property instead. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith, and eq on null values).
     * @return string|null
    */
    public function getMail(): ?string {
        $val = $this->getBackingStore()->get('mail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mail'");
    }

    /**
     * Gets the mailboxSettings property value. Settings for the primary mailbox of the signed-in user. You can get or update settings for sending automatic replies to incoming messages, locale and time zone. Returned only on $select.
     * @return MailboxSettings|null
    */
    public function getMailboxSettings(): ?MailboxSettings {
        $val = $this->getBackingStore()->get('mailboxSettings');
        if (is_null($val) || $val instanceof MailboxSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxSettings'");
    }

    /**
     * Gets the mailFolders property value. The user's mail folders. Read-only. Nullable.
     * @return array<MailFolder>|null
    */
    public function getMailFolders(): ?array {
        $val = $this->getBackingStore()->get('mailFolders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailFolder::class);
            /** @var array<MailFolder>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailFolders'");
    }

    /**
     * Gets the mailNickname property value. The mail alias for the user. This property must be specified when a user is created. Maximum length is 64 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getMailNickname(): ?string {
        $val = $this->getBackingStore()->get('mailNickname');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailNickname'");
    }

    /**
     * Gets the managedAppRegistrations property value. Zero or more managed app registrations that belong to the user.
     * @return array<ManagedAppRegistration>|null
    */
    public function getManagedAppRegistrations(): ?array {
        $val = $this->getBackingStore()->get('managedAppRegistrations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppRegistration::class);
            /** @var array<ManagedAppRegistration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedAppRegistrations'");
    }

    /**
     * Gets the managedDevices property value. The managed devices associated with the user.
     * @return array<ManagedDevice>|null
    */
    public function getManagedDevices(): ?array {
        $val = $this->getBackingStore()->get('managedDevices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDevice::class);
            /** @var array<ManagedDevice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDevices'");
    }

    /**
     * Gets the manager property value. The user or contact that is this user's manager. Read-only. (HTTP Methods: GET, PUT, DELETE.). Supports $expand.
     * @return DirectoryObject|null
    */
    public function getManager(): ?DirectoryObject {
        $val = $this->getBackingStore()->get('manager');
        if (is_null($val) || $val instanceof DirectoryObject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manager'");
    }

    /**
     * Gets the memberOf property value. The groups and directory roles that the user is a member of. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getMemberOf(): ?array {
        $val = $this->getBackingStore()->get('memberOf');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberOf'");
    }

    /**
     * Gets the messages property value. The messages in a mailbox or folder. Read-only. Nullable.
     * @return array<Message>|null
    */
    public function getMessages(): ?array {
        $val = $this->getBackingStore()->get('messages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Message::class);
            /** @var array<Message>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messages'");
    }

    /**
     * Gets the mobilePhone property value. The primary cellular telephone number for the user. Read-only for users synced from on-premises directory. Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values) and $search.
     * @return string|null
    */
    public function getMobilePhone(): ?string {
        $val = $this->getBackingStore()->get('mobilePhone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobilePhone'");
    }

    /**
     * Gets the mySite property value. The URL for the user's personal site. Returned only on $select.
     * @return string|null
    */
    public function getMySite(): ?string {
        $val = $this->getBackingStore()->get('mySite');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mySite'");
    }

    /**
     * Gets the oauth2PermissionGrants property value. The oauth2PermissionGrants property
     * @return array<OAuth2PermissionGrant>|null
    */
    public function getOauth2PermissionGrants(): ?array {
        $val = $this->getBackingStore()->get('oauth2PermissionGrants');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OAuth2PermissionGrant::class);
            /** @var array<OAuth2PermissionGrant>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oauth2PermissionGrants'");
    }

    /**
     * Gets the officeLocation property value. The office location in the user's place of business. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        $val = $this->getBackingStore()->get('officeLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'officeLocation'");
    }

    /**
     * Gets the onenote property value. The onenote property
     * @return Onenote|null
    */
    public function getOnenote(): ?Onenote {
        $val = $this->getBackingStore()->get('onenote');
        if (is_null($val) || $val instanceof Onenote) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onenote'");
    }

    /**
     * Gets the onlineMeetings property value. Information about a meeting, including the URL used to join a meeting, the attendees' list, and the description.
     * @return array<OnlineMeeting>|null
    */
    public function getOnlineMeetings(): ?array {
        $val = $this->getBackingStore()->get('onlineMeetings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnlineMeeting::class);
            /** @var array<OnlineMeeting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onlineMeetings'");
    }

    /**
     * Gets the onPremisesDistinguishedName property value. Contains the on-premises Active Directory distinguished name or DN. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Returned only on $select.
     * @return string|null
    */
    public function getOnPremisesDistinguishedName(): ?string {
        $val = $this->getBackingStore()->get('onPremisesDistinguishedName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesDistinguishedName'");
    }

    /**
     * Gets the onPremisesDomainName property value. Contains the on-premises domainFQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Returned only on $select.
     * @return string|null
    */
    public function getOnPremisesDomainName(): ?string {
        $val = $this->getBackingStore()->get('onPremisesDomainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesDomainName'");
    }

    /**
     * Gets the onPremisesExtensionAttributes property value. Contains extensionAttributes1-15 for the user. These extension attributes are also known as Exchange custom attributes 1-15. For an onPremisesSyncEnabled user, the source of authority for this set of properties is the on-premises and is read-only. For a cloud-only user (where onPremisesSyncEnabled is false), these properties can be set during creation or update of a user object.  For a cloud-only user previously synced from on-premises Active Directory, these properties are read-only in Microsoft Graph but can be fully managed through the Exchange Admin Center or the Exchange Online V2 module in PowerShell. Returned only on $select. Supports $filter (eq, ne, not, in).
     * @return OnPremisesExtensionAttributes|null
    */
    public function getOnPremisesExtensionAttributes(): ?OnPremisesExtensionAttributes {
        $val = $this->getBackingStore()->get('onPremisesExtensionAttributes');
        if (is_null($val) || $val instanceof OnPremisesExtensionAttributes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesExtensionAttributes'");
    }

    /**
     * Gets the onPremisesImmutableId property value. This property is used to associate an on-premises Active Directory user account to their Azure AD user object. This property must be specified when creating a new user account in the Graph if you are using a federated domain for the user's userPrincipalName (UPN) property. NOTE: The $ and _ characters cannot be used when specifying this property. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in)..
     * @return string|null
    */
    public function getOnPremisesImmutableId(): ?string {
        $val = $this->getBackingStore()->get('onPremisesImmutableId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesImmutableId'");
    }

    /**
     * Gets the onPremisesLastSyncDateTime property value. Indicates the last time at which the object was synced with the on-premises directory; for example: 2013-02-16T03:04:54Z. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in).
     * @return DateTime|null
    */
    public function getOnPremisesLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('onPremisesLastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesLastSyncDateTime'");
    }

    /**
     * Gets the onPremisesProvisioningErrors property value. Errors when using Microsoft synchronization product during provisioning. Returned only on $select. Supports $filter (eq, not, ge, le).
     * @return array<OnPremisesProvisioningError>|null
    */
    public function getOnPremisesProvisioningErrors(): ?array {
        $val = $this->getBackingStore()->get('onPremisesProvisioningErrors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnPremisesProvisioningError::class);
            /** @var array<OnPremisesProvisioningError>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesProvisioningErrors'");
    }

    /**
     * Gets the onPremisesSamAccountName property value. Contains the on-premises samAccountName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     * @return string|null
    */
    public function getOnPremisesSamAccountName(): ?string {
        $val = $this->getBackingStore()->get('onPremisesSamAccountName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesSamAccountName'");
    }

    /**
     * Gets the onPremisesSecurityIdentifier property value. Contains the on-premises security identifier (SID) for the user that was synchronized from on-premises to the cloud. Read-only. Returned only on $select.  Supports $filter (eq including on null values).
     * @return string|null
    */
    public function getOnPremisesSecurityIdentifier(): ?string {
        $val = $this->getBackingStore()->get('onPremisesSecurityIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesSecurityIdentifier'");
    }

    /**
     * Gets the onPremisesSyncEnabled property value. true if this user object is currently being synced from an on-premises Active Directory (AD); otherwise the user isn't being synced and can be managed in Azure Active Directory (Azure AD). Read-only. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values).
     * @return bool|null
    */
    public function getOnPremisesSyncEnabled(): ?bool {
        $val = $this->getBackingStore()->get('onPremisesSyncEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesSyncEnabled'");
    }

    /**
     * Gets the onPremisesUserPrincipalName property value. Contains the on-premises userPrincipalName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     * @return string|null
    */
    public function getOnPremisesUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('onPremisesUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesUserPrincipalName'");
    }

    /**
     * Gets the otherMails property value. A list of additional email addresses for the user; for example: ['bob@contoso.com', 'Robert@fabrikam.com']. NOTE: This property cannot contain accent characters. Returned only on $select. Supports $filter (eq, not, ge, le, in, startsWith, endsWith, /$count eq 0, /$count ne 0).
     * @return array<string>|null
    */
    public function getOtherMails(): ?array {
        $val = $this->getBackingStore()->get('otherMails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'otherMails'");
    }

    /**
     * Gets the outlook property value. The outlook property
     * @return OutlookUser|null
    */
    public function getOutlook(): ?OutlookUser {
        $val = $this->getBackingStore()->get('outlook');
        if (is_null($val) || $val instanceof OutlookUser) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outlook'");
    }

    /**
     * Gets the ownedDevices property value. Devices that are owned by the user. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
     * @return array<DirectoryObject>|null
    */
    public function getOwnedDevices(): ?array {
        $val = $this->getBackingStore()->get('ownedDevices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownedDevices'");
    }

    /**
     * Gets the ownedObjects property value. Directory objects that are owned by the user. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getOwnedObjects(): ?array {
        $val = $this->getBackingStore()->get('ownedObjects');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownedObjects'");
    }

    /**
     * Gets the passwordPolicies property value. Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two may be specified together; for example: DisablePasswordExpiration, DisableStrongPassword. Returned only on $select. For more information on the default password policies, see Azure AD pasword policies. Supports $filter (ne, not, and eq on null values).
     * @return string|null
    */
    public function getPasswordPolicies(): ?string {
        $val = $this->getBackingStore()->get('passwordPolicies');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordPolicies'");
    }

    /**
     * Gets the passwordProfile property value. Specifies the password profile for the user. The profile contains the user’s password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values).
     * @return PasswordProfile|null
    */
    public function getPasswordProfile(): ?PasswordProfile {
        $val = $this->getBackingStore()->get('passwordProfile');
        if (is_null($val) || $val instanceof PasswordProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordProfile'");
    }

    /**
     * Gets the pastProjects property value. A list for the user to enumerate their past projects. Returned only on $select.
     * @return array<string>|null
    */
    public function getPastProjects(): ?array {
        $val = $this->getBackingStore()->get('pastProjects');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pastProjects'");
    }

    /**
     * Gets the people property value. People that are relevant to the user. Read-only. Nullable.
     * @return array<Person>|null
    */
    public function getPeople(): ?array {
        $val = $this->getBackingStore()->get('people');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Person::class);
            /** @var array<Person>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'people'");
    }

    /**
     * Gets the photo property value. The user's profile photo. Read-only.
     * @return ProfilePhoto|null
    */
    public function getPhoto(): ?ProfilePhoto {
        $val = $this->getBackingStore()->get('photo');
        if (is_null($val) || $val instanceof ProfilePhoto) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'photo'");
    }

    /**
     * Gets the photos property value. The photos property
     * @return array<ProfilePhoto>|null
    */
    public function getPhotos(): ?array {
        $val = $this->getBackingStore()->get('photos');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProfilePhoto::class);
            /** @var array<ProfilePhoto>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'photos'");
    }

    /**
     * Gets the planner property value. Entry-point to the Planner resource that might exist for a user. Read-only.
     * @return PlannerUser|null
    */
    public function getPlanner(): ?PlannerUser {
        $val = $this->getBackingStore()->get('planner');
        if (is_null($val) || $val instanceof PlannerUser) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planner'");
    }

    /**
     * Gets the postalCode property value. The postal code for the user's postal address. The postal code is specific to the user's country/region. In the United States of America, this attribute contains the ZIP code. Maximum length is 40 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getPostalCode(): ?string {
        $val = $this->getBackingStore()->get('postalCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postalCode'");
    }

    /**
     * Gets the preferredDataLocation property value. The preferred data location for the user. For more information, see OneDrive Online Multi-Geo.
     * @return string|null
    */
    public function getPreferredDataLocation(): ?string {
        $val = $this->getBackingStore()->get('preferredDataLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preferredDataLocation'");
    }

    /**
     * Gets the preferredLanguage property value. The preferred language for the user. Should follow ISO 639-1 Code; for example en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values)
     * @return string|null
    */
    public function getPreferredLanguage(): ?string {
        $val = $this->getBackingStore()->get('preferredLanguage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preferredLanguage'");
    }

    /**
     * Gets the preferredName property value. The preferred name for the user. Not Supported. This attribute returns an empty string.Returned only on $select.
     * @return string|null
    */
    public function getPreferredName(): ?string {
        $val = $this->getBackingStore()->get('preferredName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preferredName'");
    }

    /**
     * Gets the presence property value. The presence property
     * @return Presence|null
    */
    public function getPresence(): ?Presence {
        $val = $this->getBackingStore()->get('presence');
        if (is_null($val) || $val instanceof Presence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'presence'");
    }

    /**
     * Gets the print property value. The print property
     * @return UserPrint|null
    */
    public function getPrint(): ?UserPrint {
        $val = $this->getBackingStore()->get('escapedPrint');
        if (is_null($val) || $val instanceof UserPrint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedPrint'");
    }

    /**
     * Gets the provisionedPlans property value. The plans that are provisioned for the user. Read-only. Not nullable. Returned only on $select. Supports $filter (eq, not, ge, le).
     * @return array<ProvisionedPlan>|null
    */
    public function getProvisionedPlans(): ?array {
        $val = $this->getBackingStore()->get('provisionedPlans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProvisionedPlan::class);
            /** @var array<ProvisionedPlan>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisionedPlans'");
    }

    /**
     * Gets the proxyAddresses property value. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. Changes to the mail property will also update this collection to include the value as an SMTP address. For more information, see mail and proxyAddresses properties. The proxy address prefixed with SMTP (capitalized) is the primary proxy address while those prefixed with smtp are the secondary proxy addresses. For Azure AD B2C accounts, this property has a limit of ten unique addresses. Read-only in Microsoft Graph; you can update this property only through the Microsoft 365 admin center. Not nullable. Returned only on $select. Supports $filter (eq, not, ge, le, startsWith, endsWith, /$count eq 0, /$count ne 0).
     * @return array<string>|null
    */
    public function getProxyAddresses(): ?array {
        $val = $this->getBackingStore()->get('proxyAddresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxyAddresses'");
    }

    /**
     * Gets the registeredDevices property value. Devices that are registered for the user. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getRegisteredDevices(): ?array {
        $val = $this->getBackingStore()->get('registeredDevices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registeredDevices'");
    }

    /**
     * Gets the responsibilities property value. A list for the user to enumerate their responsibilities. Returned only on $select.
     * @return array<string>|null
    */
    public function getResponsibilities(): ?array {
        $val = $this->getBackingStore()->get('responsibilities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responsibilities'");
    }

    /**
     * Gets the schools property value. A list for the user to enumerate the schools they have attended. Returned only on $select.
     * @return array<string>|null
    */
    public function getSchools(): ?array {
        $val = $this->getBackingStore()->get('schools');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schools'");
    }

    /**
     * Gets the scopedRoleMemberOf property value. The scopedRoleMemberOf property
     * @return array<ScopedRoleMembership>|null
    */
    public function getScopedRoleMemberOf(): ?array {
        $val = $this->getBackingStore()->get('scopedRoleMemberOf');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ScopedRoleMembership::class);
            /** @var array<ScopedRoleMembership>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopedRoleMemberOf'");
    }

    /**
     * Gets the securityIdentifier property value. Security identifier (SID) of the user, used in Windows scenarios. Read-only. Returned by default. Supports $select and $filter (eq, not, ge, le, startsWith).
     * @return string|null
    */
    public function getSecurityIdentifier(): ?string {
        $val = $this->getBackingStore()->get('securityIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityIdentifier'");
    }

    /**
     * Gets the settings property value. The settings property
     * @return UserSettings|null
    */
    public function getSettings(): ?UserSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof UserSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the showInAddressList property value. Do not use in Microsoft Graph. Manage this property through the Microsoft 365 admin center instead. Represents whether the user should be included in the Outlook global address list. See Known issue.
     * @return bool|null
    */
    public function getShowInAddressList(): ?bool {
        $val = $this->getBackingStore()->get('showInAddressList');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showInAddressList'");
    }

    /**
     * Gets the signInActivity property value. Get the last signed-in date and request ID of the sign-in for a given user. Read-only.Returned only on $select. Supports $filter (eq, ne, not, ge, le) but not with any other filterable properties. Note: Details for this property require an Azure AD Premium P1/P2 license and the AuditLog.Read.All permission.This property is not returned for a user who has never signed in or last signed in before April 2020.
     * @return SignInActivity|null
    */
    public function getSignInActivity(): ?SignInActivity {
        $val = $this->getBackingStore()->get('signInActivity');
        if (is_null($val) || $val instanceof SignInActivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInActivity'");
    }

    /**
     * Gets the signInSessionsValidFromDateTime property value. Any refresh tokens or sessions tokens (session cookies) issued before this time are invalid, and applications will get an error when using an invalid refresh or sessions token to acquire a delegated access token (to access APIs such as Microsoft Graph).  If this happens, the application will need to acquire a new refresh token by making a request to the authorize endpoint. Read-only. Use revokeSignInSessions to reset. Returned only on $select.
     * @return DateTime|null
    */
    public function getSignInSessionsValidFromDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('signInSessionsValidFromDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInSessionsValidFromDateTime'");
    }

    /**
     * Gets the skills property value. A list for the user to enumerate their skills. Returned only on $select.
     * @return array<string>|null
    */
    public function getSkills(): ?array {
        $val = $this->getBackingStore()->get('skills');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skills'");
    }

    /**
     * Gets the state property value. The state or province in the user's address. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getState(): ?string {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the streetAddress property value. The street address of the user's place of business. Maximum length is 1024 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getStreetAddress(): ?string {
        $val = $this->getBackingStore()->get('streetAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'streetAddress'");
    }

    /**
     * Gets the surname property value. The user's surname (family name or last name). Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getSurname(): ?string {
        $val = $this->getBackingStore()->get('surname');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'surname'");
    }

    /**
     * Gets the teamwork property value. A container for Microsoft Teams features available for the user. Read-only. Nullable.
     * @return UserTeamwork|null
    */
    public function getTeamwork(): ?UserTeamwork {
        $val = $this->getBackingStore()->get('teamwork');
        if (is_null($val) || $val instanceof UserTeamwork) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamwork'");
    }

    /**
     * Gets the todo property value. Represents the To Do services available to a user.
     * @return Todo|null
    */
    public function getTodo(): ?Todo {
        $val = $this->getBackingStore()->get('todo');
        if (is_null($val) || $val instanceof Todo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'todo'");
    }

    /**
     * Gets the transitiveMemberOf property value. The groups, including nested groups, and directory roles that a user is a member of. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMemberOf(): ?array {
        $val = $this->getBackingStore()->get('transitiveMemberOf');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transitiveMemberOf'");
    }

    /**
     * Gets the usageLocation property value. A two letter country code (ISO standard 3166). Required for users that will be assigned licenses due to legal requirement to check for availability of services in countries.  Examples include: US, JP, and GB. Not nullable. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getUsageLocation(): ?string {
        $val = $this->getBackingStore()->get('usageLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usageLocation'");
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant's collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of organization.NOTE: This property cannot contain accent characters. Only the following characters are allowed A - Z, a - z, 0 - 9, ' . - _ ! # ^ ~. For the complete list of allowed characters, see username policies. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith) and $orderBy.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Gets the userType property value. A string value that can be used to classify user types in your directory, such as Member and Guest. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values). NOTE: For more information about the permissions for member and guest users, see What are the default user permissions in Azure Active Directory?
     * @return string|null
    */
    public function getUserType(): ?string {
        $val = $this->getBackingStore()->get('userType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('aboutMe', $this->getAboutMe());
        $writer->writeBooleanValue('accountEnabled', $this->getAccountEnabled());
        $writer->writeCollectionOfObjectValues('activities', $this->getActivities());
        $writer->writeStringValue('ageGroup', $this->getAgeGroup());
        $writer->writeCollectionOfObjectValues('agreementAcceptances', $this->getAgreementAcceptances());
        $writer->writeCollectionOfObjectValues('appRoleAssignments', $this->getAppRoleAssignments());
        $writer->writeCollectionOfObjectValues('assignedLicenses', $this->getAssignedLicenses());
        $writer->writeCollectionOfObjectValues('assignedPlans', $this->getAssignedPlans());
        $writer->writeObjectValue('authentication', $this->getAuthentication());
        $writer->writeObjectValue('authorizationInfo', $this->getAuthorizationInfo());
        $writer->writeDateTimeValue('birthday', $this->getBirthday());
        $writer->writeCollectionOfPrimitiveValues('businessPhones', $this->getBusinessPhones());
        $writer->writeObjectValue('calendar', $this->getCalendar());
        $writer->writeCollectionOfObjectValues('calendarGroups', $this->getCalendarGroups());
        $writer->writeCollectionOfObjectValues('calendars', $this->getCalendars());
        $writer->writeCollectionOfObjectValues('calendarView', $this->getCalendarView());
        $writer->writeCollectionOfObjectValues('chats', $this->getChats());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('companyName', $this->getCompanyName());
        $writer->writeStringValue('consentProvidedForMinor', $this->getConsentProvidedForMinor());
        $writer->writeCollectionOfObjectValues('contactFolders', $this->getContactFolders());
        $writer->writeCollectionOfObjectValues('contacts', $this->getContacts());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('createdObjects', $this->getCreatedObjects());
        $writer->writeStringValue('creationType', $this->getCreationType());
        $writer->writeStringValue('department', $this->getDepartment());
        $writer->writeIntegerValue('deviceEnrollmentLimit', $this->getDeviceEnrollmentLimit());
        $writer->writeCollectionOfObjectValues('deviceManagementTroubleshootingEvents', $this->getDeviceManagementTroubleshootingEvents());
        $writer->writeCollectionOfObjectValues('directReports', $this->getDirectReports());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('drive', $this->getDrive());
        $writer->writeCollectionOfObjectValues('drives', $this->getDrives());
        $writer->writeObjectValue('employeeExperience', $this->getEmployeeExperience());
        $writer->writeDateTimeValue('employeeHireDate', $this->getEmployeeHireDate());
        $writer->writeStringValue('employeeId', $this->getEmployeeId());
        $writer->writeDateTimeValue('employeeLeaveDateTime', $this->getEmployeeLeaveDateTime());
        $writer->writeObjectValue('employeeOrgData', $this->getEmployeeOrgData());
        $writer->writeStringValue('employeeType', $this->getEmployeeType());
        $writer->writeObjectValue('print', $this->getPrint());
        $writer->writeCollectionOfObjectValues('events', $this->getEvents());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeStringValue('externalUserState', $this->getExternalUserState());
        $writer->writeDateTimeValue('externalUserStateChangeDateTime', $this->getExternalUserStateChangeDateTime());
        $writer->writeStringValue('faxNumber', $this->getFaxNumber());
        $writer->writeCollectionOfObjectValues('followedSites', $this->getFollowedSites());
        $writer->writeStringValue('givenName', $this->getGivenName());
        $writer->writeDateTimeValue('hireDate', $this->getHireDate());
        $writer->writeCollectionOfObjectValues('identities', $this->getIdentities());
        $writer->writeCollectionOfPrimitiveValues('imAddresses', $this->getImAddresses());
        $writer->writeObjectValue('inferenceClassification', $this->getInferenceClassification());
        $writer->writeObjectValue('insights', $this->getInsights());
        $writer->writeCollectionOfPrimitiveValues('interests', $this->getInterests());
        $writer->writeBooleanValue('isResourceAccount', $this->getIsResourceAccount());
        $writer->writeStringValue('jobTitle', $this->getJobTitle());
        $writer->writeCollectionOfObjectValues('joinedTeams', $this->getJoinedTeams());
        $writer->writeDateTimeValue('lastPasswordChangeDateTime', $this->getLastPasswordChangeDateTime());
        $writer->writeStringValue('legalAgeGroupClassification', $this->getLegalAgeGroupClassification());
        $writer->writeCollectionOfObjectValues('licenseAssignmentStates', $this->getLicenseAssignmentStates());
        $writer->writeCollectionOfObjectValues('licenseDetails', $this->getLicenseDetails());
        $writer->writeStringValue('mail', $this->getMail());
        $writer->writeObjectValue('mailboxSettings', $this->getMailboxSettings());
        $writer->writeCollectionOfObjectValues('mailFolders', $this->getMailFolders());
        $writer->writeStringValue('mailNickname', $this->getMailNickname());
        $writer->writeCollectionOfObjectValues('managedAppRegistrations', $this->getManagedAppRegistrations());
        $writer->writeCollectionOfObjectValues('managedDevices', $this->getManagedDevices());
        $writer->writeObjectValue('manager', $this->getManager());
        $writer->writeCollectionOfObjectValues('memberOf', $this->getMemberOf());
        $writer->writeCollectionOfObjectValues('messages', $this->getMessages());
        $writer->writeStringValue('mobilePhone', $this->getMobilePhone());
        $writer->writeStringValue('mySite', $this->getMySite());
        $writer->writeCollectionOfObjectValues('oauth2PermissionGrants', $this->getOauth2PermissionGrants());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('officeLocation', $this->getOfficeLocation());
        $writer->writeObjectValue('onenote', $this->getOnenote());
        $writer->writeCollectionOfObjectValues('onlineMeetings', $this->getOnlineMeetings());
        $writer->writeStringValue('onPremisesDistinguishedName', $this->getOnPremisesDistinguishedName());
        $writer->writeStringValue('onPremisesDomainName', $this->getOnPremisesDomainName());
        $writer->writeObjectValue('onPremisesExtensionAttributes', $this->getOnPremisesExtensionAttributes());
        $writer->writeStringValue('onPremisesImmutableId', $this->getOnPremisesImmutableId());
        $writer->writeDateTimeValue('onPremisesLastSyncDateTime', $this->getOnPremisesLastSyncDateTime());
        $writer->writeCollectionOfObjectValues('onPremisesProvisioningErrors', $this->getOnPremisesProvisioningErrors());
        $writer->writeStringValue('onPremisesSamAccountName', $this->getOnPremisesSamAccountName());
        $writer->writeStringValue('onPremisesSecurityIdentifier', $this->getOnPremisesSecurityIdentifier());
        $writer->writeBooleanValue('onPremisesSyncEnabled', $this->getOnPremisesSyncEnabled());
        $writer->writeStringValue('onPremisesUserPrincipalName', $this->getOnPremisesUserPrincipalName());
        $writer->writeCollectionOfPrimitiveValues('otherMails', $this->getOtherMails());
        $writer->writeObjectValue('outlook', $this->getOutlook());
        $writer->writeCollectionOfObjectValues('ownedDevices', $this->getOwnedDevices());
        $writer->writeCollectionOfObjectValues('ownedObjects', $this->getOwnedObjects());
        $writer->writeStringValue('passwordPolicies', $this->getPasswordPolicies());
        $writer->writeObjectValue('passwordProfile', $this->getPasswordProfile());
        $writer->writeCollectionOfPrimitiveValues('pastProjects', $this->getPastProjects());
        $writer->writeCollectionOfObjectValues('people', $this->getPeople());
        $writer->writeObjectValue('photo', $this->getPhoto());
        $writer->writeCollectionOfObjectValues('photos', $this->getPhotos());
        $writer->writeObjectValue('planner', $this->getPlanner());
        $writer->writeStringValue('postalCode', $this->getPostalCode());
        $writer->writeStringValue('preferredDataLocation', $this->getPreferredDataLocation());
        $writer->writeStringValue('preferredLanguage', $this->getPreferredLanguage());
        $writer->writeStringValue('preferredName', $this->getPreferredName());
        $writer->writeObjectValue('presence', $this->getPresence());
        $writer->writeCollectionOfObjectValues('provisionedPlans', $this->getProvisionedPlans());
        $writer->writeCollectionOfPrimitiveValues('proxyAddresses', $this->getProxyAddresses());
        $writer->writeCollectionOfObjectValues('registeredDevices', $this->getRegisteredDevices());
        $writer->writeCollectionOfPrimitiveValues('responsibilities', $this->getResponsibilities());
        $writer->writeCollectionOfPrimitiveValues('schools', $this->getSchools());
        $writer->writeCollectionOfObjectValues('scopedRoleMemberOf', $this->getScopedRoleMemberOf());
        $writer->writeStringValue('securityIdentifier', $this->getSecurityIdentifier());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeBooleanValue('showInAddressList', $this->getShowInAddressList());
        $writer->writeObjectValue('signInActivity', $this->getSignInActivity());
        $writer->writeDateTimeValue('signInSessionsValidFromDateTime', $this->getSignInSessionsValidFromDateTime());
        $writer->writeCollectionOfPrimitiveValues('skills', $this->getSkills());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('streetAddress', $this->getStreetAddress());
        $writer->writeStringValue('surname', $this->getSurname());
        $writer->writeObjectValue('teamwork', $this->getTeamwork());
        $writer->writeObjectValue('todo', $this->getTodo());
        $writer->writeCollectionOfObjectValues('transitiveMemberOf', $this->getTransitiveMemberOf());
        $writer->writeStringValue('usageLocation', $this->getUsageLocation());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeStringValue('userType', $this->getUserType());
    }

    /**
     * Sets the aboutMe property value. A freeform text entry field for the user to describe themselves. Returned only on $select.
     * @param string|null $value Value to set for the aboutMe property.
    */
    public function setAboutMe(?string $value): void {
        $this->getBackingStore()->set('aboutMe', $value);
    }

    /**
     * Sets the accountEnabled property value. true if the account is enabled; otherwise, false. This property is required when a user is created. Returned only on $select. Supports $filter (eq, ne, not, and in).
     * @param bool|null $value Value to set for the accountEnabled property.
    */
    public function setAccountEnabled(?bool $value): void {
        $this->getBackingStore()->set('accountEnabled', $value);
    }

    /**
     * Sets the activities property value. The user's activities across devices. Read-only. Nullable.
     * @param array<UserActivity>|null $value Value to set for the activities property.
    */
    public function setActivities(?array $value): void {
        $this->getBackingStore()->set('activities', $value);
    }

    /**
     * Sets the ageGroup property value. Sets the age group of the user. Allowed values: null, Minor, NotAdult and Adult. Refer to the legal age group property definitions for further information. Returned only on $select. Supports $filter (eq, ne, not, and in).
     * @param string|null $value Value to set for the ageGroup property.
    */
    public function setAgeGroup(?string $value): void {
        $this->getBackingStore()->set('ageGroup', $value);
    }

    /**
     * Sets the agreementAcceptances property value. The user's terms of use acceptance statuses. Read-only. Nullable.
     * @param array<AgreementAcceptance>|null $value Value to set for the agreementAcceptances property.
    */
    public function setAgreementAcceptances(?array $value): void {
        $this->getBackingStore()->set('agreementAcceptances', $value);
    }

    /**
     * Sets the appRoleAssignments property value. Represents the app roles a user has been granted for an application. Supports $expand.
     * @param array<AppRoleAssignment>|null $value Value to set for the appRoleAssignments property.
    */
    public function setAppRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('appRoleAssignments', $value);
    }

    /**
     * Sets the assignedLicenses property value. The licenses that are assigned to the user, including inherited (group-based) licenses. This property doesn't differentiate directly-assigned and inherited licenses. Use the licenseAssignmentStates property to identify the directly-assigned and inherited licenses.  Not nullable. Returned only on $select. Supports $filter (eq, not, /$count eq 0, /$count ne 0).
     * @param array<AssignedLicense>|null $value Value to set for the assignedLicenses property.
    */
    public function setAssignedLicenses(?array $value): void {
        $this->getBackingStore()->set('assignedLicenses', $value);
    }

    /**
     * Sets the assignedPlans property value. The plans that are assigned to the user. Read-only. Not nullable. Returned only on $select. Supports $filter (eq and not).
     * @param array<AssignedPlan>|null $value Value to set for the assignedPlans property.
    */
    public function setAssignedPlans(?array $value): void {
        $this->getBackingStore()->set('assignedPlans', $value);
    }

    /**
     * Sets the authentication property value. The authentication methods that are supported for the user.
     * @param Authentication|null $value Value to set for the authentication property.
    */
    public function setAuthentication(?Authentication $value): void {
        $this->getBackingStore()->set('authentication', $value);
    }

    /**
     * Sets the authorizationInfo property value. The authorizationInfo property
     * @param AuthorizationInfo|null $value Value to set for the authorizationInfo property.
    */
    public function setAuthorizationInfo(?AuthorizationInfo $value): void {
        $this->getBackingStore()->set('authorizationInfo', $value);
    }

    /**
     * Sets the birthday property value. The birthday of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned only on $select.
     * @param DateTime|null $value Value to set for the birthday property.
    */
    public function setBirthday(?DateTime $value): void {
        $this->getBackingStore()->set('birthday', $value);
    }

    /**
     * Sets the businessPhones property value. The telephone numbers for the user. NOTE: Although this is a string collection, only one number can be set for this property. Read-only for users synced from on-premises directory. Returned by default. Supports $filter (eq, not, ge, le, startsWith).
     * @param array<string>|null $value Value to set for the businessPhones property.
    */
    public function setBusinessPhones(?array $value): void {
        $this->getBackingStore()->set('businessPhones', $value);
    }

    /**
     * Sets the calendar property value. The user's primary calendar. Read-only.
     * @param Calendar|null $value Value to set for the calendar property.
    */
    public function setCalendar(?Calendar $value): void {
        $this->getBackingStore()->set('calendar', $value);
    }

    /**
     * Sets the calendarGroups property value. The user's calendar groups. Read-only. Nullable.
     * @param array<CalendarGroup>|null $value Value to set for the calendarGroups property.
    */
    public function setCalendarGroups(?array $value): void {
        $this->getBackingStore()->set('calendarGroups', $value);
    }

    /**
     * Sets the calendars property value. The user's calendars. Read-only. Nullable.
     * @param array<Calendar>|null $value Value to set for the calendars property.
    */
    public function setCalendars(?array $value): void {
        $this->getBackingStore()->set('calendars', $value);
    }

    /**
     * Sets the calendarView property value. The calendar view for the calendar. Read-only. Nullable.
     * @param array<Event>|null $value Value to set for the calendarView property.
    */
    public function setCalendarView(?array $value): void {
        $this->getBackingStore()->set('calendarView', $value);
    }

    /**
     * Sets the chats property value. The chats property
     * @param array<Chat>|null $value Value to set for the chats property.
    */
    public function setChats(?array $value): void {
        $this->getBackingStore()->set('chats', $value);
    }

    /**
     * Sets the city property value. The city in which the user is located. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->getBackingStore()->set('city', $value);
    }

    /**
     * Sets the companyName property value. The company name which the user is associated. This property can be useful for describing the company that an external user comes from. The maximum length is 64 characters.Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->getBackingStore()->set('companyName', $value);
    }

    /**
     * Sets the consentProvidedForMinor property value. Sets whether consent has been obtained for minors. Allowed values: null, Granted, Denied and NotRequired. Refer to the legal age group property definitions for further information. Returned only on $select. Supports $filter (eq, ne, not, and in).
     * @param string|null $value Value to set for the consentProvidedForMinor property.
    */
    public function setConsentProvidedForMinor(?string $value): void {
        $this->getBackingStore()->set('consentProvidedForMinor', $value);
    }

    /**
     * Sets the contactFolders property value. The user's contacts folders. Read-only. Nullable.
     * @param array<ContactFolder>|null $value Value to set for the contactFolders property.
    */
    public function setContactFolders(?array $value): void {
        $this->getBackingStore()->set('contactFolders', $value);
    }

    /**
     * Sets the contacts property value. The user's contacts. Read-only. Nullable.
     * @param array<Contact>|null $value Value to set for the contacts property.
    */
    public function setContacts(?array $value): void {
        $this->getBackingStore()->set('contacts', $value);
    }

    /**
     * Sets the country property value. The country/region in which the user is located; for example, US or UK. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->getBackingStore()->set('country', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the user was created, in ISO 8601 format and in UTC time. The value cannot be modified and is automatically populated when the entity is created. Nullable. For on-premises users, the value represents when they were first created in Azure AD. Property is null for some users created before June 2018 and on-premises users that were synced to Azure AD before June 2018. Read-only. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in).
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the createdObjects property value. Directory objects that were created by the user. Read-only. Nullable.
     * @param array<DirectoryObject>|null $value Value to set for the createdObjects property.
    */
    public function setCreatedObjects(?array $value): void {
        $this->getBackingStore()->set('createdObjects', $value);
    }

    /**
     * Sets the creationType property value. Indicates whether the user account was created through one of the following methods:  As a regular school or work account (null). As an external account (Invitation). As a local account for an Azure Active Directory B2C tenant (LocalAccount). Through self-service sign-up by an internal user using email verification (EmailVerified). Through self-service sign-up by an external user signing up through a link that is part of a user flow (SelfServiceSignUp). Read-only.Returned only on $select. Supports $filter (eq, ne, not, in).
     * @param string|null $value Value to set for the creationType property.
    */
    public function setCreationType(?string $value): void {
        $this->getBackingStore()->set('creationType', $value);
    }

    /**
     * Sets the department property value. The name for the department in which the user works. Maximum length is 64 characters. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, and eq on null values).
     * @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value): void {
        $this->getBackingStore()->set('department', $value);
    }

    /**
     * Sets the deviceEnrollmentLimit property value. The limit on the maximum number of devices that the user is permitted to enroll. Allowed values are 5 or 1000.
     * @param int|null $value Value to set for the deviceEnrollmentLimit property.
    */
    public function setDeviceEnrollmentLimit(?int $value): void {
        $this->getBackingStore()->set('deviceEnrollmentLimit', $value);
    }

    /**
     * Sets the deviceManagementTroubleshootingEvents property value. The list of troubleshooting events for this user.
     * @param array<DeviceManagementTroubleshootingEvent>|null $value Value to set for the deviceManagementTroubleshootingEvents property.
    */
    public function setDeviceManagementTroubleshootingEvents(?array $value): void {
        $this->getBackingStore()->set('deviceManagementTroubleshootingEvents', $value);
    }

    /**
     * Sets the directReports property value. The users and contacts that report to the user. (The users and contacts that have their manager property set to this user.) Read-only. Nullable. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the directReports property.
    */
    public function setDirectReports(?array $value): void {
        $this->getBackingStore()->set('directReports', $value);
    }

    /**
     * Sets the displayName property value. The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial and last name. This property is required when a user is created and it cannot be cleared during updates. Maximum length is 256 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values), $orderBy, and $search.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the drive property value. The user's OneDrive. Read-only.
     * @param Drive|null $value Value to set for the drive property.
    */
    public function setDrive(?Drive $value): void {
        $this->getBackingStore()->set('drive', $value);
    }

    /**
     * Sets the drives property value. A collection of drives available for this user. Read-only.
     * @param array<Drive>|null $value Value to set for the drives property.
    */
    public function setDrives(?array $value): void {
        $this->getBackingStore()->set('drives', $value);
    }

    /**
     * Sets the employeeExperience property value. The employeeExperience property
     * @param EmployeeExperienceUser|null $value Value to set for the employeeExperience property.
    */
    public function setEmployeeExperience(?EmployeeExperienceUser $value): void {
        $this->getBackingStore()->set('employeeExperience', $value);
    }

    /**
     * Sets the employeeHireDate property value. The date and time when the user was hired or will start work in case of a future hire. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in).
     * @param DateTime|null $value Value to set for the employeeHireDate property.
    */
    public function setEmployeeHireDate(?DateTime $value): void {
        $this->getBackingStore()->set('employeeHireDate', $value);
    }

    /**
     * Sets the employeeId property value. The employee identifier assigned to the user by the organization. The maximum length is 16 characters. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the employeeId property.
    */
    public function setEmployeeId(?string $value): void {
        $this->getBackingStore()->set('employeeId', $value);
    }

    /**
     * Sets the employeeLeaveDateTime property value. The date and time when the user left or will leave the organization. To read this property, the calling app must be assigned the User-LifeCycleInfo.Read.All permission. To write this property, the calling app must be assigned the User.Read.All and User-LifeCycleInfo.ReadWrite.All permissions. To read this property in delegated scenarios, the admin needs one of the following Azure AD roles: Lifecycle Workflows Administrator, Global Reader, or Global Administrator. To write this property in delegated scenarios, the admin needs the Global Administrator role. Supports $filter (eq, ne, not , ge, le, in). For more information, see Configure the employeeLeaveDateTime property for a user.
     * @param DateTime|null $value Value to set for the employeeLeaveDateTime property.
    */
    public function setEmployeeLeaveDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('employeeLeaveDateTime', $value);
    }

    /**
     * Sets the employeeOrgData property value. Represents organization data (e.g. division and costCenter) associated with a user. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in).
     * @param EmployeeOrgData|null $value Value to set for the employeeOrgData property.
    */
    public function setEmployeeOrgData(?EmployeeOrgData $value): void {
        $this->getBackingStore()->set('employeeOrgData', $value);
    }

    /**
     * Sets the employeeType property value. Captures enterprise worker type. For example, Employee, Contractor, Consultant, or Vendor. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith).
     * @param string|null $value Value to set for the employeeType property.
    */
    public function setEmployeeType(?string $value): void {
        $this->getBackingStore()->set('employeeType', $value);
    }

    /**
     * Sets the events property value. The user's events. Default is to show Events under the Default Calendar. Read-only. Nullable.
     * @param array<Event>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->getBackingStore()->set('events', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the user. Read-only. Supports $expand. Nullable.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the externalUserState property value. For an external user invited to the tenant using the invitation API, this property represents the invited user's invitation status. For invited users, the state can be PendingAcceptance or Accepted, or null for all other users. Returned only on $select. Supports $filter (eq, ne, not , in).
     * @param string|null $value Value to set for the externalUserState property.
    */
    public function setExternalUserState(?string $value): void {
        $this->getBackingStore()->set('externalUserState', $value);
    }

    /**
     * Sets the externalUserStateChangeDateTime property value. Shows the timestamp for the latest change to the externalUserState property. Returned only on $select. Supports $filter (eq, ne, not , in).
     * @param DateTime|null $value Value to set for the externalUserStateChangeDateTime property.
    */
    public function setExternalUserStateChangeDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('externalUserStateChangeDateTime', $value);
    }

    /**
     * Sets the faxNumber property value. The fax number of the user. Returned only on $select. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the faxNumber property.
    */
    public function setFaxNumber(?string $value): void {
        $this->getBackingStore()->set('faxNumber', $value);
    }

    /**
     * Sets the followedSites property value. The followedSites property
     * @param array<Site>|null $value Value to set for the followedSites property.
    */
    public function setFollowedSites(?array $value): void {
        $this->getBackingStore()->set('followedSites', $value);
    }

    /**
     * Sets the givenName property value. The given name (first name) of the user. Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value): void {
        $this->getBackingStore()->set('givenName', $value);
    }

    /**
     * Sets the hireDate property value. The hire date of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned only on $select.  Note: This property is specific to SharePoint Online. We recommend using the native employeeHireDate property to set and update hire date values using Microsoft Graph APIs.
     * @param DateTime|null $value Value to set for the hireDate property.
    */
    public function setHireDate(?DateTime $value): void {
        $this->getBackingStore()->set('hireDate', $value);
    }

    /**
     * Sets the identities property value. Represents the identities that can be used to sign in to this user account. An identity can be provided by Microsoft (also known as a local account), by organizations, or by social identity providers such as Facebook, Google, and Microsoft, and tied to a user account. May contain multiple items with the same signInType value. Returned only on $select. Supports $filter (eq) including on null values, only where the signInType is not userPrincipalName.
     * @param array<ObjectIdentity>|null $value Value to set for the identities property.
    */
    public function setIdentities(?array $value): void {
        $this->getBackingStore()->set('identities', $value);
    }

    /**
     * Sets the imAddresses property value. The instant message voice over IP (VOIP) session initiation protocol (SIP) addresses for the user. Read-only. Returned only on $select. Supports $filter (eq, not, ge, le, startsWith).
     * @param array<string>|null $value Value to set for the imAddresses property.
    */
    public function setImAddresses(?array $value): void {
        $this->getBackingStore()->set('imAddresses', $value);
    }

    /**
     * Sets the inferenceClassification property value. Relevance classification of the user's messages based on explicit designations which override inferred relevance or importance.
     * @param InferenceClassification|null $value Value to set for the inferenceClassification property.
    */
    public function setInferenceClassification(?InferenceClassification $value): void {
        $this->getBackingStore()->set('inferenceClassification', $value);
    }

    /**
     * Sets the insights property value. The insights property
     * @param OfficeGraphInsights|null $value Value to set for the insights property.
    */
    public function setInsights(?OfficeGraphInsights $value): void {
        $this->getBackingStore()->set('insights', $value);
    }

    /**
     * Sets the interests property value. A list for the user to describe their interests. Returned only on $select.
     * @param array<string>|null $value Value to set for the interests property.
    */
    public function setInterests(?array $value): void {
        $this->getBackingStore()->set('interests', $value);
    }

    /**
     * Sets the isResourceAccount property value. Do not use – reserved for future use.
     * @param bool|null $value Value to set for the isResourceAccount property.
    */
    public function setIsResourceAccount(?bool $value): void {
        $this->getBackingStore()->set('isResourceAccount', $value);
    }

    /**
     * Sets the jobTitle property value. The user's job title. Maximum length is 128 characters. Returned by default. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value): void {
        $this->getBackingStore()->set('jobTitle', $value);
    }

    /**
     * Sets the joinedTeams property value. The joinedTeams property
     * @param array<Team>|null $value Value to set for the joinedTeams property.
    */
    public function setJoinedTeams(?array $value): void {
        $this->getBackingStore()->set('joinedTeams', $value);
    }

    /**
     * Sets the lastPasswordChangeDateTime property value. The time when this Azure AD user last changed their password or when their password was created, whichever date the latest action was performed. The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned only on $select.
     * @param DateTime|null $value Value to set for the lastPasswordChangeDateTime property.
    */
    public function setLastPasswordChangeDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastPasswordChangeDateTime', $value);
    }

    /**
     * Sets the legalAgeGroupClassification property value. Used by enterprise applications to determine the legal age group of the user. This property is read-only and calculated based on ageGroup and consentProvidedForMinor properties. Allowed values: null, MinorWithOutParentalConsent, MinorWithParentalConsent, MinorNoParentalConsentRequired, NotAdult and Adult. Refer to the legal age group property definitions for further information. Returned only on $select.
     * @param string|null $value Value to set for the legalAgeGroupClassification property.
    */
    public function setLegalAgeGroupClassification(?string $value): void {
        $this->getBackingStore()->set('legalAgeGroupClassification', $value);
    }

    /**
     * Sets the licenseAssignmentStates property value. State of license assignments for this user. Also indicates licenses that are directly-assigned and those that the user has inherited through group memberships. Read-only. Returned only on $select.
     * @param array<LicenseAssignmentState>|null $value Value to set for the licenseAssignmentStates property.
    */
    public function setLicenseAssignmentStates(?array $value): void {
        $this->getBackingStore()->set('licenseAssignmentStates', $value);
    }

    /**
     * Sets the licenseDetails property value. A collection of this user's license details. Read-only.
     * @param array<LicenseDetails>|null $value Value to set for the licenseDetails property.
    */
    public function setLicenseDetails(?array $value): void {
        $this->getBackingStore()->set('licenseDetails', $value);
    }

    /**
     * Sets the mail property value. The SMTP address for the user, for example, jeff@contoso.onmicrosoft.com. Changes to this property will also update the user's proxyAddresses collection to include the value as an SMTP address. This property cannot contain accent characters.  NOTE: We do not recommend updating this property for Azure AD B2C user profiles. Use the otherMails property instead. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith, and eq on null values).
     * @param string|null $value Value to set for the mail property.
    */
    public function setMail(?string $value): void {
        $this->getBackingStore()->set('mail', $value);
    }

    /**
     * Sets the mailboxSettings property value. Settings for the primary mailbox of the signed-in user. You can get or update settings for sending automatic replies to incoming messages, locale and time zone. Returned only on $select.
     * @param MailboxSettings|null $value Value to set for the mailboxSettings property.
    */
    public function setMailboxSettings(?MailboxSettings $value): void {
        $this->getBackingStore()->set('mailboxSettings', $value);
    }

    /**
     * Sets the mailFolders property value. The user's mail folders. Read-only. Nullable.
     * @param array<MailFolder>|null $value Value to set for the mailFolders property.
    */
    public function setMailFolders(?array $value): void {
        $this->getBackingStore()->set('mailFolders', $value);
    }

    /**
     * Sets the mailNickname property value. The mail alias for the user. This property must be specified when a user is created. Maximum length is 64 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value): void {
        $this->getBackingStore()->set('mailNickname', $value);
    }

    /**
     * Sets the managedAppRegistrations property value. Zero or more managed app registrations that belong to the user.
     * @param array<ManagedAppRegistration>|null $value Value to set for the managedAppRegistrations property.
    */
    public function setManagedAppRegistrations(?array $value): void {
        $this->getBackingStore()->set('managedAppRegistrations', $value);
    }

    /**
     * Sets the managedDevices property value. The managed devices associated with the user.
     * @param array<ManagedDevice>|null $value Value to set for the managedDevices property.
    */
    public function setManagedDevices(?array $value): void {
        $this->getBackingStore()->set('managedDevices', $value);
    }

    /**
     * Sets the manager property value. The user or contact that is this user's manager. Read-only. (HTTP Methods: GET, PUT, DELETE.). Supports $expand.
     * @param DirectoryObject|null $value Value to set for the manager property.
    */
    public function setManager(?DirectoryObject $value): void {
        $this->getBackingStore()->set('manager', $value);
    }

    /**
     * Sets the memberOf property value. The groups and directory roles that the user is a member of. Read-only. Nullable. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value): void {
        $this->getBackingStore()->set('memberOf', $value);
    }

    /**
     * Sets the messages property value. The messages in a mailbox or folder. Read-only. Nullable.
     * @param array<Message>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value): void {
        $this->getBackingStore()->set('messages', $value);
    }

    /**
     * Sets the mobilePhone property value. The primary cellular telephone number for the user. Read-only for users synced from on-premises directory. Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values) and $search.
     * @param string|null $value Value to set for the mobilePhone property.
    */
    public function setMobilePhone(?string $value): void {
        $this->getBackingStore()->set('mobilePhone', $value);
    }

    /**
     * Sets the mySite property value. The URL for the user's personal site. Returned only on $select.
     * @param string|null $value Value to set for the mySite property.
    */
    public function setMySite(?string $value): void {
        $this->getBackingStore()->set('mySite', $value);
    }

    /**
     * Sets the oauth2PermissionGrants property value. The oauth2PermissionGrants property
     * @param array<OAuth2PermissionGrant>|null $value Value to set for the oauth2PermissionGrants property.
    */
    public function setOauth2PermissionGrants(?array $value): void {
        $this->getBackingStore()->set('oauth2PermissionGrants', $value);
    }

    /**
     * Sets the officeLocation property value. The office location in the user's place of business. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value): void {
        $this->getBackingStore()->set('officeLocation', $value);
    }

    /**
     * Sets the onenote property value. The onenote property
     * @param Onenote|null $value Value to set for the onenote property.
    */
    public function setOnenote(?Onenote $value): void {
        $this->getBackingStore()->set('onenote', $value);
    }

    /**
     * Sets the onlineMeetings property value. Information about a meeting, including the URL used to join a meeting, the attendees' list, and the description.
     * @param array<OnlineMeeting>|null $value Value to set for the onlineMeetings property.
    */
    public function setOnlineMeetings(?array $value): void {
        $this->getBackingStore()->set('onlineMeetings', $value);
    }

    /**
     * Sets the onPremisesDistinguishedName property value. Contains the on-premises Active Directory distinguished name or DN. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Returned only on $select.
     * @param string|null $value Value to set for the onPremisesDistinguishedName property.
    */
    public function setOnPremisesDistinguishedName(?string $value): void {
        $this->getBackingStore()->set('onPremisesDistinguishedName', $value);
    }

    /**
     * Sets the onPremisesDomainName property value. Contains the on-premises domainFQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Returned only on $select.
     * @param string|null $value Value to set for the onPremisesDomainName property.
    */
    public function setOnPremisesDomainName(?string $value): void {
        $this->getBackingStore()->set('onPremisesDomainName', $value);
    }

    /**
     * Sets the onPremisesExtensionAttributes property value. Contains extensionAttributes1-15 for the user. These extension attributes are also known as Exchange custom attributes 1-15. For an onPremisesSyncEnabled user, the source of authority for this set of properties is the on-premises and is read-only. For a cloud-only user (where onPremisesSyncEnabled is false), these properties can be set during creation or update of a user object.  For a cloud-only user previously synced from on-premises Active Directory, these properties are read-only in Microsoft Graph but can be fully managed through the Exchange Admin Center or the Exchange Online V2 module in PowerShell. Returned only on $select. Supports $filter (eq, ne, not, in).
     * @param OnPremisesExtensionAttributes|null $value Value to set for the onPremisesExtensionAttributes property.
    */
    public function setOnPremisesExtensionAttributes(?OnPremisesExtensionAttributes $value): void {
        $this->getBackingStore()->set('onPremisesExtensionAttributes', $value);
    }

    /**
     * Sets the onPremisesImmutableId property value. This property is used to associate an on-premises Active Directory user account to their Azure AD user object. This property must be specified when creating a new user account in the Graph if you are using a federated domain for the user's userPrincipalName (UPN) property. NOTE: The $ and _ characters cannot be used when specifying this property. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in)..
     * @param string|null $value Value to set for the onPremisesImmutableId property.
    */
    public function setOnPremisesImmutableId(?string $value): void {
        $this->getBackingStore()->set('onPremisesImmutableId', $value);
    }

    /**
     * Sets the onPremisesLastSyncDateTime property value. Indicates the last time at which the object was synced with the on-premises directory; for example: 2013-02-16T03:04:54Z. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in).
     * @param DateTime|null $value Value to set for the onPremisesLastSyncDateTime property.
    */
    public function setOnPremisesLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('onPremisesLastSyncDateTime', $value);
    }

    /**
     * Sets the onPremisesProvisioningErrors property value. Errors when using Microsoft synchronization product during provisioning. Returned only on $select. Supports $filter (eq, not, ge, le).
     * @param array<OnPremisesProvisioningError>|null $value Value to set for the onPremisesProvisioningErrors property.
    */
    public function setOnPremisesProvisioningErrors(?array $value): void {
        $this->getBackingStore()->set('onPremisesProvisioningErrors', $value);
    }

    /**
     * Sets the onPremisesSamAccountName property value. Contains the on-premises samAccountName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     * @param string|null $value Value to set for the onPremisesSamAccountName property.
    */
    public function setOnPremisesSamAccountName(?string $value): void {
        $this->getBackingStore()->set('onPremisesSamAccountName', $value);
    }

    /**
     * Sets the onPremisesSecurityIdentifier property value. Contains the on-premises security identifier (SID) for the user that was synchronized from on-premises to the cloud. Read-only. Returned only on $select.  Supports $filter (eq including on null values).
     * @param string|null $value Value to set for the onPremisesSecurityIdentifier property.
    */
    public function setOnPremisesSecurityIdentifier(?string $value): void {
        $this->getBackingStore()->set('onPremisesSecurityIdentifier', $value);
    }

    /**
     * Sets the onPremisesSyncEnabled property value. true if this user object is currently being synced from an on-premises Active Directory (AD); otherwise the user isn't being synced and can be managed in Azure Active Directory (Azure AD). Read-only. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values).
     * @param bool|null $value Value to set for the onPremisesSyncEnabled property.
    */
    public function setOnPremisesSyncEnabled(?bool $value): void {
        $this->getBackingStore()->set('onPremisesSyncEnabled', $value);
    }

    /**
     * Sets the onPremisesUserPrincipalName property value. Contains the on-premises userPrincipalName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     * @param string|null $value Value to set for the onPremisesUserPrincipalName property.
    */
    public function setOnPremisesUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('onPremisesUserPrincipalName', $value);
    }

    /**
     * Sets the otherMails property value. A list of additional email addresses for the user; for example: ['bob@contoso.com', 'Robert@fabrikam.com']. NOTE: This property cannot contain accent characters. Returned only on $select. Supports $filter (eq, not, ge, le, in, startsWith, endsWith, /$count eq 0, /$count ne 0).
     * @param array<string>|null $value Value to set for the otherMails property.
    */
    public function setOtherMails(?array $value): void {
        $this->getBackingStore()->set('otherMails', $value);
    }

    /**
     * Sets the outlook property value. The outlook property
     * @param OutlookUser|null $value Value to set for the outlook property.
    */
    public function setOutlook(?OutlookUser $value): void {
        $this->getBackingStore()->set('outlook', $value);
    }

    /**
     * Sets the ownedDevices property value. Devices that are owned by the user. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
     * @param array<DirectoryObject>|null $value Value to set for the ownedDevices property.
    */
    public function setOwnedDevices(?array $value): void {
        $this->getBackingStore()->set('ownedDevices', $value);
    }

    /**
     * Sets the ownedObjects property value. Directory objects that are owned by the user. Read-only. Nullable. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the ownedObjects property.
    */
    public function setOwnedObjects(?array $value): void {
        $this->getBackingStore()->set('ownedObjects', $value);
    }

    /**
     * Sets the passwordPolicies property value. Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two may be specified together; for example: DisablePasswordExpiration, DisableStrongPassword. Returned only on $select. For more information on the default password policies, see Azure AD pasword policies. Supports $filter (ne, not, and eq on null values).
     * @param string|null $value Value to set for the passwordPolicies property.
    */
    public function setPasswordPolicies(?string $value): void {
        $this->getBackingStore()->set('passwordPolicies', $value);
    }

    /**
     * Sets the passwordProfile property value. Specifies the password profile for the user. The profile contains the user’s password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values).
     * @param PasswordProfile|null $value Value to set for the passwordProfile property.
    */
    public function setPasswordProfile(?PasswordProfile $value): void {
        $this->getBackingStore()->set('passwordProfile', $value);
    }

    /**
     * Sets the pastProjects property value. A list for the user to enumerate their past projects. Returned only on $select.
     * @param array<string>|null $value Value to set for the pastProjects property.
    */
    public function setPastProjects(?array $value): void {
        $this->getBackingStore()->set('pastProjects', $value);
    }

    /**
     * Sets the people property value. People that are relevant to the user. Read-only. Nullable.
     * @param array<Person>|null $value Value to set for the people property.
    */
    public function setPeople(?array $value): void {
        $this->getBackingStore()->set('people', $value);
    }

    /**
     * Sets the photo property value. The user's profile photo. Read-only.
     * @param ProfilePhoto|null $value Value to set for the photo property.
    */
    public function setPhoto(?ProfilePhoto $value): void {
        $this->getBackingStore()->set('photo', $value);
    }

    /**
     * Sets the photos property value. The photos property
     * @param array<ProfilePhoto>|null $value Value to set for the photos property.
    */
    public function setPhotos(?array $value): void {
        $this->getBackingStore()->set('photos', $value);
    }

    /**
     * Sets the planner property value. Entry-point to the Planner resource that might exist for a user. Read-only.
     * @param PlannerUser|null $value Value to set for the planner property.
    */
    public function setPlanner(?PlannerUser $value): void {
        $this->getBackingStore()->set('planner', $value);
    }

    /**
     * Sets the postalCode property value. The postal code for the user's postal address. The postal code is specific to the user's country/region. In the United States of America, this attribute contains the ZIP code. Maximum length is 40 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->getBackingStore()->set('postalCode', $value);
    }

    /**
     * Sets the preferredDataLocation property value. The preferred data location for the user. For more information, see OneDrive Online Multi-Geo.
     * @param string|null $value Value to set for the preferredDataLocation property.
    */
    public function setPreferredDataLocation(?string $value): void {
        $this->getBackingStore()->set('preferredDataLocation', $value);
    }

    /**
     * Sets the preferredLanguage property value. The preferred language for the user. Should follow ISO 639-1 Code; for example en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values)
     * @param string|null $value Value to set for the preferredLanguage property.
    */
    public function setPreferredLanguage(?string $value): void {
        $this->getBackingStore()->set('preferredLanguage', $value);
    }

    /**
     * Sets the preferredName property value. The preferred name for the user. Not Supported. This attribute returns an empty string.Returned only on $select.
     * @param string|null $value Value to set for the preferredName property.
    */
    public function setPreferredName(?string $value): void {
        $this->getBackingStore()->set('preferredName', $value);
    }

    /**
     * Sets the presence property value. The presence property
     * @param Presence|null $value Value to set for the presence property.
    */
    public function setPresence(?Presence $value): void {
        $this->getBackingStore()->set('presence', $value);
    }

    /**
     * Sets the print property value. The print property
     * @param UserPrint|null $value Value to set for the EscapedPrint property.
    */
    public function setPrint(?UserPrint $value): void {
        $this->getBackingStore()->set('escapedPrint', $value);
    }

    /**
     * Sets the provisionedPlans property value. The plans that are provisioned for the user. Read-only. Not nullable. Returned only on $select. Supports $filter (eq, not, ge, le).
     * @param array<ProvisionedPlan>|null $value Value to set for the provisionedPlans property.
    */
    public function setProvisionedPlans(?array $value): void {
        $this->getBackingStore()->set('provisionedPlans', $value);
    }

    /**
     * Sets the proxyAddresses property value. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. Changes to the mail property will also update this collection to include the value as an SMTP address. For more information, see mail and proxyAddresses properties. The proxy address prefixed with SMTP (capitalized) is the primary proxy address while those prefixed with smtp are the secondary proxy addresses. For Azure AD B2C accounts, this property has a limit of ten unique addresses. Read-only in Microsoft Graph; you can update this property only through the Microsoft 365 admin center. Not nullable. Returned only on $select. Supports $filter (eq, not, ge, le, startsWith, endsWith, /$count eq 0, /$count ne 0).
     * @param array<string>|null $value Value to set for the proxyAddresses property.
    */
    public function setProxyAddresses(?array $value): void {
        $this->getBackingStore()->set('proxyAddresses', $value);
    }

    /**
     * Sets the registeredDevices property value. Devices that are registered for the user. Read-only. Nullable. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the registeredDevices property.
    */
    public function setRegisteredDevices(?array $value): void {
        $this->getBackingStore()->set('registeredDevices', $value);
    }

    /**
     * Sets the responsibilities property value. A list for the user to enumerate their responsibilities. Returned only on $select.
     * @param array<string>|null $value Value to set for the responsibilities property.
    */
    public function setResponsibilities(?array $value): void {
        $this->getBackingStore()->set('responsibilities', $value);
    }

    /**
     * Sets the schools property value. A list for the user to enumerate the schools they have attended. Returned only on $select.
     * @param array<string>|null $value Value to set for the schools property.
    */
    public function setSchools(?array $value): void {
        $this->getBackingStore()->set('schools', $value);
    }

    /**
     * Sets the scopedRoleMemberOf property value. The scopedRoleMemberOf property
     * @param array<ScopedRoleMembership>|null $value Value to set for the scopedRoleMemberOf property.
    */
    public function setScopedRoleMemberOf(?array $value): void {
        $this->getBackingStore()->set('scopedRoleMemberOf', $value);
    }

    /**
     * Sets the securityIdentifier property value. Security identifier (SID) of the user, used in Windows scenarios. Read-only. Returned by default. Supports $select and $filter (eq, not, ge, le, startsWith).
     * @param string|null $value Value to set for the securityIdentifier property.
    */
    public function setSecurityIdentifier(?string $value): void {
        $this->getBackingStore()->set('securityIdentifier', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param UserSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?UserSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the showInAddressList property value. Do not use in Microsoft Graph. Manage this property through the Microsoft 365 admin center instead. Represents whether the user should be included in the Outlook global address list. See Known issue.
     * @param bool|null $value Value to set for the showInAddressList property.
    */
    public function setShowInAddressList(?bool $value): void {
        $this->getBackingStore()->set('showInAddressList', $value);
    }

    /**
     * Sets the signInActivity property value. Get the last signed-in date and request ID of the sign-in for a given user. Read-only.Returned only on $select. Supports $filter (eq, ne, not, ge, le) but not with any other filterable properties. Note: Details for this property require an Azure AD Premium P1/P2 license and the AuditLog.Read.All permission.This property is not returned for a user who has never signed in or last signed in before April 2020.
     * @param SignInActivity|null $value Value to set for the signInActivity property.
    */
    public function setSignInActivity(?SignInActivity $value): void {
        $this->getBackingStore()->set('signInActivity', $value);
    }

    /**
     * Sets the signInSessionsValidFromDateTime property value. Any refresh tokens or sessions tokens (session cookies) issued before this time are invalid, and applications will get an error when using an invalid refresh or sessions token to acquire a delegated access token (to access APIs such as Microsoft Graph).  If this happens, the application will need to acquire a new refresh token by making a request to the authorize endpoint. Read-only. Use revokeSignInSessions to reset. Returned only on $select.
     * @param DateTime|null $value Value to set for the signInSessionsValidFromDateTime property.
    */
    public function setSignInSessionsValidFromDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('signInSessionsValidFromDateTime', $value);
    }

    /**
     * Sets the skills property value. A list for the user to enumerate their skills. Returned only on $select.
     * @param array<string>|null $value Value to set for the skills property.
    */
    public function setSkills(?array $value): void {
        $this->getBackingStore()->set('skills', $value);
    }

    /**
     * Sets the state property value. The state or province in the user's address. Maximum length is 128 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the streetAddress property value. The street address of the user's place of business. Maximum length is 1024 characters. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the streetAddress property.
    */
    public function setStreetAddress(?string $value): void {
        $this->getBackingStore()->set('streetAddress', $value);
    }

    /**
     * Sets the surname property value. The user's surname (family name or last name). Maximum length is 64 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value): void {
        $this->getBackingStore()->set('surname', $value);
    }

    /**
     * Sets the teamwork property value. A container for Microsoft Teams features available for the user. Read-only. Nullable.
     * @param UserTeamwork|null $value Value to set for the teamwork property.
    */
    public function setTeamwork(?UserTeamwork $value): void {
        $this->getBackingStore()->set('teamwork', $value);
    }

    /**
     * Sets the todo property value. Represents the To Do services available to a user.
     * @param Todo|null $value Value to set for the todo property.
    */
    public function setTodo(?Todo $value): void {
        $this->getBackingStore()->set('todo', $value);
    }

    /**
     * Sets the transitiveMemberOf property value. The groups, including nested groups, and directory roles that a user is a member of. Nullable.
     * @param array<DirectoryObject>|null $value Value to set for the transitiveMemberOf property.
    */
    public function setTransitiveMemberOf(?array $value): void {
        $this->getBackingStore()->set('transitiveMemberOf', $value);
    }

    /**
     * Sets the usageLocation property value. A two letter country code (ISO standard 3166). Required for users that will be assigned licenses due to legal requirement to check for availability of services in countries.  Examples include: US, JP, and GB. Not nullable. Returned only on $select. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the usageLocation property.
    */
    public function setUsageLocation(?string $value): void {
        $this->getBackingStore()->set('usageLocation', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant's collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of organization.NOTE: This property cannot contain accent characters. Only the following characters are allowed A - Z, a - z, 0 - 9, ' . - _ ! # ^ ~. For the complete list of allowed characters, see username policies. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith) and $orderBy.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the userType property value. A string value that can be used to classify user types in your directory, such as Member and Guest. Returned only on $select. Supports $filter (eq, ne, not, in, and eq on null values). NOTE: For more information about the permissions for member and guest users, see What are the default user permissions in Azure Active Directory?
     * @param string|null $value Value to set for the userType property.
    */
    public function setUserType(?string $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

}
