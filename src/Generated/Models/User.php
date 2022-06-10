<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class User extends DirectoryObject implements Parsable 
{
    /**
     * @var string|null $aboutMe A freeform text entry field for the user to describe themselves. Returned only on $select.
    */
    private ?string $aboutMe = null;
    
    /**
     * @var bool|null $accountEnabled true if the account is enabled; otherwise, false. This property is required when a user is created. Supports $filter (eq, ne, not, and in).
    */
    private ?bool $accountEnabled = null;
    
    /**
     * @var array<UserActivity>|null $activities The user's activities across devices. Read-only. Nullable.
    */
    private ?array $activities = null;
    
    /**
     * @var string|null $ageGroup Sets the age group of the user. Allowed values: null, Minor, NotAdult and Adult. Refer to the legal age group property definitions for further information. Supports $filter (eq, ne, not, and in).
    */
    private ?string $ageGroup = null;
    
    /**
     * @var array<AgreementAcceptance>|null $agreementAcceptances The user's terms of use acceptance statuses. Read-only. Nullable.
    */
    private ?array $agreementAcceptances = null;
    
    /**
     * @var array<AppRoleAssignment>|null $appRoleAssignments Represents the app roles a user has been granted for an application. Supports $expand.
    */
    private ?array $appRoleAssignments = null;
    
    /**
     * @var array<AssignedLicense>|null $assignedLicenses The licenses that are assigned to the user, including inherited (group-based) licenses. Not nullable. Supports $filter (eq, not, and counting empty collections).
    */
    private ?array $assignedLicenses = null;
    
    /**
     * @var array<AssignedPlan>|null $assignedPlans The plans that are assigned to the user. Read-only. Not nullable.Supports $filter (eq and not).
    */
    private ?array $assignedPlans = null;
    
    /**
     * @var Authentication|null $authentication The authentication methods that are supported for the user.
    */
    private ?Authentication $authentication = null;
    
    /**
     * @var DateTime|null $birthday The birthday of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Returned only on $select.
    */
    private ?DateTime $birthday = null;
    
    /**
     * @var array<string>|null $businessPhones The telephone numbers for the user. Only one number can be set for this property. Read-only for users synced from on-premises directory. Supports $filter (eq, not, ge, le, startsWith).
    */
    private ?array $businessPhones = null;
    
    /**
     * @var Calendar|null $calendar The user's primary calendar. Read-only.
    */
    private ?Calendar $calendar = null;
    
    /**
     * @var array<CalendarGroup>|null $calendarGroups The user's calendar groups. Read-only. Nullable.
    */
    private ?array $calendarGroups = null;
    
    /**
     * @var array<Calendar>|null $calendars The user's calendars. Read-only. Nullable.
    */
    private ?array $calendars = null;
    
    /**
     * @var array<Event>|null $calendarView The calendar view for the calendar. Read-only. Nullable.
    */
    private ?array $calendarView = null;
    
    /**
     * @var array<Chat>|null $chats The chats property
    */
    private ?array $chats = null;
    
    /**
     * @var string|null $city The city in which the user is located. Maximum length is 128 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $city = null;
    
    /**
     * @var string|null $companyName The company name which the user is associated. This property can be useful for describing the company that an external user comes from. The maximum length is 64 characters.Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $companyName = null;
    
    /**
     * @var string|null $consentProvidedForMinor Sets whether consent has been obtained for minors. Allowed values: null, Granted, Denied and NotRequired. Refer to the legal age group property definitions for further information. Supports $filter (eq, ne, not, and in).
    */
    private ?string $consentProvidedForMinor = null;
    
    /**
     * @var array<ContactFolder>|null $contactFolders The user's contacts folders. Read-only. Nullable.
    */
    private ?array $contactFolders = null;
    
    /**
     * @var array<Contact>|null $contacts The user's contacts. Read-only. Nullable.
    */
    private ?array $contacts = null;
    
    /**
     * @var string|null $country The country/region in which the user is located; for example, US or UK. Maximum length is 128 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $country = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time the user was created. The value cannot be modified and is automatically populated when the entity is created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. Property is nullable. A null value indicates that an accurate creation time couldn't be determined for the user. Read-only. Supports $filter (eq, ne, not , ge, le, in).
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<DirectoryObject>|null $createdObjects Directory objects that were created by the user. Read-only. Nullable.
    */
    private ?array $createdObjects = null;
    
    /**
     * @var string|null $creationType Indicates whether the user account was created through one of the following methods:  As a regular school or work account (null). As an external account (Invitation). As a local account for an Azure Active Directory B2C tenant (LocalAccount). Through self-service sign-up by an internal user using email verification (EmailVerified). Through self-service sign-up by an external user signing up through a link that is part of a user flow (SelfServiceSignUp).  Read-only.Supports $filter (eq, ne, not, and in).
    */
    private ?string $creationType = null;
    
    /**
     * @var string|null $department The name for the department in which the user works. Maximum length is 64 characters.Supports $filter (eq, ne, not , ge, le, in, and eq on null values).
    */
    private ?string $department = null;
    
    /**
     * @var int|null $deviceEnrollmentLimit The limit on the maximum number of devices that the user is permitted to enroll. Allowed values are 5 or 1000.
    */
    private ?int $deviceEnrollmentLimit = null;
    
    /**
     * @var array<DeviceManagementTroubleshootingEvent>|null $deviceManagementTroubleshootingEvents The list of troubleshooting events for this user.
    */
    private ?array $deviceManagementTroubleshootingEvents = null;
    
    /**
     * @var array<DirectoryObject>|null $directReports The users and contacts that report to the user. (The users and contacts that have their manager property set to this user.) Read-only. Nullable. Supports $expand.
    */
    private ?array $directReports = null;
    
    /**
     * @var string|null $displayName The name displayed in the address book for the user. This value is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Maximum length is 256 characters. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values), $orderBy, and $search.
    */
    private ?string $displayName = null;
    
    /**
     * @var Drive|null $drive The user's OneDrive. Read-only.
    */
    private ?Drive $drive = null;
    
    /**
     * @var array<Drive>|null $drives A collection of drives available for this user. Read-only.
    */
    private ?array $drives = null;
    
    /**
     * @var DateTime|null $employeeHireDate The date and time when the user was hired or will start work in case of a future hire. Supports $filter (eq, ne, not , ge, le, in).
    */
    private ?DateTime $employeeHireDate = null;
    
    /**
     * @var string|null $employeeId The employee identifier assigned to the user by the organization. The maximum length is 16 characters.Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
    */
    private ?string $employeeId = null;
    
    /**
     * @var EmployeeOrgData|null $employeeOrgData Represents organization data (e.g. division and costCenter) associated with a user. Supports $filter (eq, ne, not , ge, le, in).
    */
    private ?EmployeeOrgData $employeeOrgData = null;
    
    /**
     * @var string|null $employeeType Captures enterprise worker type. For example, Employee, Contractor, Consultant, or Vendor. Supports $filter (eq, ne, not , ge, le, in, startsWith).
    */
    private ?string $employeeType = null;
    
    /**
     * @var array<Event>|null $events The user's events. Default is to show events under the Default Calendar. Read-only. Nullable.
    */
    private ?array $events = null;
    
    /**
     * @var array<Extension>|null $extensions The collection of open extensions defined for the user. Nullable.
    */
    private ?array $extensions = null;
    
    /**
     * @var string|null $externalUserState For an external user invited to the tenant using the invitation API, this property represents the invited user's invitation status. For invited users, the state can be PendingAcceptance or Accepted, or null for all other users. Supports $filter (eq, ne, not , in).
    */
    private ?string $externalUserState = null;
    
    /**
     * @var DateTime|null $externalUserStateChangeDateTime Shows the timestamp for the latest change to the externalUserState property. Supports $filter (eq, ne, not , in).
    */
    private ?DateTime $externalUserStateChangeDateTime = null;
    
    /**
     * @var string|null $faxNumber The fax number of the user. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
    */
    private ?string $faxNumber = null;
    
    /**
     * @var array<Site>|null $followedSites The followedSites property
    */
    private ?array $followedSites = null;
    
    /**
     * @var string|null $givenName The given name (first name) of the user. Maximum length is 64 characters. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
    */
    private ?string $givenName = null;
    
    /**
     * @var DateTime|null $hireDate The hire date of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Returned only on $select.  Note: This property is specific to SharePoint Online. We recommend using the native employeeHireDate property to set and update hire date values using Microsoft Graph APIs.
    */
    private ?DateTime $hireDate = null;
    
    /**
     * @var array<ObjectIdentity>|null $identities Represents the identities that can be used to sign in to this user account. An identity can be provided by Microsoft (also known as a local account), by organizations, or by social identity providers such as Facebook, Google, and Microsoft, and tied to a user account. May contain multiple items with the same signInType value. Supports $filter (eq) including on null values, only where the signInType is not userPrincipalName.
    */
    private ?array $identities = null;
    
    /**
     * @var array<string>|null $imAddresses The instant message voice over IP (VOIP) session initiation protocol (SIP) addresses for the user. Read-only. Supports $filter (eq, not, ge, le, startsWith).
    */
    private ?array $imAddresses = null;
    
    /**
     * @var InferenceClassification|null $inferenceClassification Relevance classification of the user's messages based on explicit designations which override inferred relevance or importance.
    */
    private ?InferenceClassification $inferenceClassification = null;
    
    /**
     * @var OfficeGraphInsights|null $insights The insights property
    */
    private ?OfficeGraphInsights $insights = null;
    
    /**
     * @var array<string>|null $interests A list for the user to describe their interests. Returned only on $select.
    */
    private ?array $interests = null;
    
    /**
     * @var bool|null $isResourceAccount Do not use – reserved for future use.
    */
    private ?bool $isResourceAccount = null;
    
    /**
     * @var string|null $jobTitle The user's job title. Maximum length is 128 characters. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
    */
    private ?string $jobTitle = null;
    
    /**
     * @var array<Team>|null $joinedTeams The Microsoft Teams teams that the user is a member of. Read-only. Nullable.
    */
    private ?array $joinedTeams = null;
    
    /**
     * @var DateTime|null $lastPasswordChangeDateTime The time when this Azure AD user last changed their password or when their password was created, , whichever date the latest action was performed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Returned only on $select.
    */
    private ?DateTime $lastPasswordChangeDateTime = null;
    
    /**
     * @var string|null $legalAgeGroupClassification Used by enterprise applications to determine the legal age group of the user. This property is read-only and calculated based on ageGroup and consentProvidedForMinor properties. Allowed values: null, MinorWithOutParentalConsent, MinorWithParentalConsent, MinorNoParentalConsentRequired, NotAdult and Adult. Refer to the legal age group property definitions for further information. Returned only on $select.
    */
    private ?string $legalAgeGroupClassification = null;
    
    /**
     * @var array<LicenseAssignmentState>|null $licenseAssignmentStates State of license assignments for this user. Read-only. Returned only on $select.
    */
    private ?array $licenseAssignmentStates = null;
    
    /**
     * @var array<LicenseDetails>|null $licenseDetails A collection of this user's license details. Read-only.
    */
    private ?array $licenseDetails = null;
    
    /**
     * @var string|null $mail The SMTP address for the user, for example, admin@contoso.com. Changes to this property will also update the user's proxyAddresses collection to include the value as an SMTP address. For Azure AD B2C accounts, this property can be updated up to only ten times with unique SMTP addresses. This property cannot contain accent characters.  Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith, and eq on null values).
    */
    private ?string $mail = null;
    
    /**
     * @var MailboxSettings|null $mailboxSettings Settings for the primary mailbox of the signed-in user. You can get or update settings for sending automatic replies to incoming messages, locale, and time zone. For more information, see User preferences for languages and regional formats. Returned only on $select.
    */
    private ?MailboxSettings $mailboxSettings = null;
    
    /**
     * @var array<MailFolder>|null $mailFolders The user's mail folders. Read-only. Nullable.
    */
    private ?array $mailFolders = null;
    
    /**
     * @var string|null $mailNickname The mail alias for the user. This property must be specified when a user is created. Maximum length is 64 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $mailNickname = null;
    
    /**
     * @var array<ManagedAppRegistration>|null $managedAppRegistrations Zero or more managed app registrations that belong to the user.
    */
    private ?array $managedAppRegistrations = null;
    
    /**
     * @var array<ManagedDevice>|null $managedDevices The managed devices associated with the user.
    */
    private ?array $managedDevices = null;
    
    /**
     * @var DirectoryObject|null $manager The user or contact that is this user's manager. Read-only. (HTTP Methods: GET, PUT, DELETE.). Supports $expand.
    */
    private ?DirectoryObject $manager = null;
    
    /**
     * @var array<DirectoryObject>|null $memberOf The groups, directory roles and administrative units that the user is a member of. Read-only. Nullable. Supports $expand.
    */
    private ?array $memberOf = null;
    
    /**
     * @var array<Message>|null $messages The messages in a mailbox or folder. Read-only. Nullable.
    */
    private ?array $messages = null;
    
    /**
     * @var string|null $mobilePhone The primary cellular telephone number for the user. Read-only for users synced from on-premises directory.  Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $mobilePhone = null;
    
    /**
     * @var string|null $mySite The URL for the user's personal site. Returned only on $select.
    */
    private ?string $mySite = null;
    
    /**
     * @var array<OAuth2PermissionGrant>|null $oauth2PermissionGrants The oauth2PermissionGrants property
    */
    private ?array $oauth2PermissionGrants = null;
    
    /**
     * @var string|null $officeLocation The office location in the user's place of business. Maximum length is 128 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $officeLocation = null;
    
    /**
     * @var Onenote|null $onenote The onenote property
    */
    private ?Onenote $onenote = null;
    
    /**
     * @var array<OnlineMeeting>|null $onlineMeetings The onlineMeetings property
    */
    private ?array $onlineMeetings = null;
    
    /**
     * @var string|null $onPremisesDistinguishedName Contains the on-premises Active Directory distinguished name or DN. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only.
    */
    private ?string $onPremisesDistinguishedName = null;
    
    /**
     * @var string|null $onPremisesDomainName Contains the on-premises domainFQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only.
    */
    private ?string $onPremisesDomainName = null;
    
    /**
     * @var OnPremisesExtensionAttributes|null $onPremisesExtensionAttributes Contains extensionAttributes1-15 for the user. The individual extension attributes are neither selectable nor filterable. For an onPremisesSyncEnabled user, the source of authority for this set of properties is the on-premises and is read-only. For a cloud-only user (where onPremisesSyncEnabled is false), these properties can be set during creation or update of a user object.  For a cloud-only user previously synced from on-premises Active Directory, these properties are read-only in Microsoft Graph but can be fully managed through the Exchange Admin Center or the Exchange Online V2 module in PowerShell. These extension attributes are also known as Exchange custom attributes 1-15. Returned only on $select.
    */
    private ?OnPremisesExtensionAttributes $onPremisesExtensionAttributes = null;
    
    /**
     * @var string|null $onPremisesImmutableId This property is used to associate an on-premises Active Directory user account to their Azure AD user object. This property must be specified when creating a new user account in the Graph if you are using a federated domain for the user's userPrincipalName (UPN) property. Note: The $ and _ characters cannot be used when specifying this property. Supports $filter (eq, ne, not, ge, le, in).
    */
    private ?string $onPremisesImmutableId = null;
    
    /**
     * @var DateTime|null $onPremisesLastSyncDateTime Indicates the last time at which the object was synced with the on-premises directory; for example: '2013-02-16T03:04:54Z'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter (eq, ne, not, ge, le, in).
    */
    private ?DateTime $onPremisesLastSyncDateTime = null;
    
    /**
     * @var array<OnPremisesProvisioningError>|null $onPremisesProvisioningErrors Errors when using Microsoft synchronization product during provisioning.  Supports $filter (eq, not, ge, le).
    */
    private ?array $onPremisesProvisioningErrors = null;
    
    /**
     * @var string|null $onPremisesSamAccountName Contains the on-premises sAMAccountName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith).
    */
    private ?string $onPremisesSamAccountName = null;
    
    /**
     * @var string|null $onPremisesSecurityIdentifier Contains the on-premises security identifier (SID) for the user that was synchronized from on-premises to the cloud. Read-only. Supports $filter (eq including on null values).
    */
    private ?string $onPremisesSecurityIdentifier = null;
    
    /**
     * @var bool|null $onPremisesSyncEnabled true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
    */
    private ?bool $onPremisesSyncEnabled = null;
    
    /**
     * @var string|null $onPremisesUserPrincipalName Contains the on-premises userPrincipalName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith).
    */
    private ?string $onPremisesUserPrincipalName = null;
    
    /**
     * @var array<string>|null $otherMails A list of additional email addresses for the user; for example: ['bob@contoso.com', 'Robert@fabrikam.com'].NOTE: This property cannot contain accent characters.Supports $filter (eq, not, ge, le, in, startsWith, and counting empty collections).
    */
    private ?array $otherMails = null;
    
    /**
     * @var OutlookUser|null $outlook Selective Outlook services available to the user. Read-only. Nullable.
    */
    private ?OutlookUser $outlook = null;
    
    /**
     * @var array<DirectoryObject>|null $ownedDevices Devices that are owned by the user. Read-only. Nullable. Supports $expand.
    */
    private ?array $ownedDevices = null;
    
    /**
     * @var array<DirectoryObject>|null $ownedObjects Directory objects that are owned by the user. Read-only. Nullable. Supports $expand.
    */
    private ?array $ownedObjects = null;
    
    /**
     * @var string|null $passwordPolicies Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two may be specified together; for example: DisablePasswordExpiration, DisableStrongPassword. For more information on the default password policies, see Azure AD pasword policies. Supports $filter (ne, not, and eq on null values).
    */
    private ?string $passwordPolicies = null;
    
    /**
     * @var PasswordProfile|null $passwordProfile Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required. NOTE: For Azure B2C tenants, the forceChangePasswordNextSignIn property should be set to false and instead use custom policies and user flows to force password reset at first logon. See Force password reset at first logon. Supports $filter (eq, ne, not, in, and eq on null values).
    */
    private ?PasswordProfile $passwordProfile = null;
    
    /**
     * @var array<string>|null $pastProjects A list for the user to enumerate their past projects. Returned only on $select.
    */
    private ?array $pastProjects = null;
    
    /**
     * @var array<Person>|null $people Read-only. The most relevant people to the user. The collection is ordered by their relevance to the user, which is determined by the user's communication, collaboration and business relationships. A person is an aggregation of information from across mail, contacts and social networks.
    */
    private ?array $people = null;
    
    /**
     * @var ProfilePhoto|null $photo The user's profile photo. Read-only.
    */
    private ?ProfilePhoto $photo = null;
    
    /**
     * @var array<ProfilePhoto>|null $photos The photos property
    */
    private ?array $photos = null;
    
    /**
     * @var PlannerUser|null $planner Selective Planner services available to the user. Read-only. Nullable.
    */
    private ?PlannerUser $planner = null;
    
    /**
     * @var string|null $postalCode The postal code for the user's postal address. The postal code is specific to the user's country/region. In the United States of America, this attribute contains the ZIP code. Maximum length is 40 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $postalCode = null;
    
    /**
     * @var string|null $preferredDataLocation The preferred data location for the user. For more information, see OneDrive Online Multi-Geo.
    */
    private ?string $preferredDataLocation = null;
    
    /**
     * @var string|null $preferredLanguage The preferred language for the user. Should follow ISO 639-1 Code; for example en-US. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $preferredLanguage = null;
    
    /**
     * @var string|null $preferredName The preferred name for the user. Returned only on $select.
    */
    private ?string $preferredName = null;
    
    /**
     * @var Presence|null $presence The presence property
    */
    private ?Presence $presence = null;
    
    /**
     * @var array<ProvisionedPlan>|null $provisionedPlans The plans that are provisioned for the user. Read-only. Not nullable. Supports $filter (eq, not, ge, le).
    */
    private ?array $provisionedPlans = null;
    
    /**
     * @var array<string>|null $proxyAddresses For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. Changes to the mail property will also update this collection to include the value as an SMTP address. For more information, see mail and proxyAddresses properties. The proxy address prefixed with SMTP (capitalized) is the primary proxy address while those prefixed with smtp are the secondary proxy addresses. For Azure AD B2C accounts, this property has a limit of ten unique addresses. Read-only in Microsoft Graph; you can update this property only through the Microsoft 365 admin center. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, and counting empty collections).
    */
    private ?array $proxyAddresses = null;
    
    /**
     * @var array<DirectoryObject>|null $registeredDevices Devices that are registered for the user. Read-only. Nullable. Supports $expand.
    */
    private ?array $registeredDevices = null;
    
    /**
     * @var array<string>|null $responsibilities A list for the user to enumerate their responsibilities. Returned only on $select.
    */
    private ?array $responsibilities = null;
    
    /**
     * @var array<string>|null $schools A list for the user to enumerate the schools they have attended. Returned only on $select.
    */
    private ?array $schools = null;
    
    /**
     * @var array<ScopedRoleMembership>|null $scopedRoleMemberOf The scoped-role administrative unit memberships for this user. Read-only. Nullable.
    */
    private ?array $scopedRoleMemberOf = null;
    
    /**
     * @var UserSettings|null $settings The settings property
    */
    private ?UserSettings $settings = null;
    
    /**
     * @var bool|null $showInAddressList Do not use in Microsoft Graph. Manage this property through the Microsoft 365 admin center instead. Represents whether the user should be included in the Outlook global address list. See Known issue.
    */
    private ?bool $showInAddressList = null;
    
    /**
     * @var DateTime|null $signInSessionsValidFromDateTime Any refresh tokens or sessions tokens (session cookies) issued before this time are invalid, and applications will get an error when using an invalid refresh or sessions token to acquire a delegated access token (to access APIs such as Microsoft Graph).  If this happens, the application will need to acquire a new refresh token by making a request to the authorize endpoint. Read-only. Use revokeSignInSessions to reset.
    */
    private ?DateTime $signInSessionsValidFromDateTime = null;
    
    /**
     * @var array<string>|null $skills A list for the user to enumerate their skills. Returned only on $select.
    */
    private ?array $skills = null;
    
    /**
     * @var string|null $state The state or province in the user's address. Maximum length is 128 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $state = null;
    
    /**
     * @var string|null $streetAddress The street address of the user's place of business. Maximum length is 1024 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $streetAddress = null;
    
    /**
     * @var string|null $surname The user's surname (family name or last name). Maximum length is 64 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $surname = null;
    
    /**
     * @var UserTeamwork|null $teamwork A container for Microsoft Teams features available for the user. Read-only. Nullable.
    */
    private ?UserTeamwork $teamwork = null;
    
    /**
     * @var Todo|null $todo Represents the To Do services available to a user.
    */
    private ?Todo $todo = null;
    
    /**
     * @var array<DirectoryObject>|null $transitiveMemberOf The transitiveMemberOf property
    */
    private ?array $transitiveMemberOf = null;
    
    /**
     * @var string|null $usageLocation A two letter country code (ISO standard 3166). Required for users that will be assigned licenses due to legal requirement to check for availability of services in countries.  Examples include: US, JP, and GB. Not nullable. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $usageLocation = null;
    
    /**
     * @var string|null $userPrincipalName The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant's collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of organization.NOTE: This property cannot contain accent characters. Only the following characters are allowed A - Z, a - z, 0 - 9, ' . - _ ! # ^ ~. For the complete list of allowed characters, see username policies. Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith) and $orderBy.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * @var string|null $userType A String value that can be used to classify user types in your directory, such as Member and Guest. Supports $filter (eq, ne, not, in, and eq on null values). NOTE: For more information about the permissions for member and guest users, see What are the default user permissions in Azure Active Directory?
    */
    private ?string $userType = null;
    
    /**
     * Instantiates a new User and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->aboutMe;
    }

    /**
     * Gets the accountEnabled property value. true if the account is enabled; otherwise, false. This property is required when a user is created. Supports $filter (eq, ne, not, and in).
     * @return bool|null
    */
    public function getAccountEnabled(): ?bool {
        return $this->accountEnabled;
    }

    /**
     * Gets the activities property value. The user's activities across devices. Read-only. Nullable.
     * @return array<UserActivity>|null
    */
    public function getActivities(): ?array {
        return $this->activities;
    }

    /**
     * Gets the ageGroup property value. Sets the age group of the user. Allowed values: null, Minor, NotAdult and Adult. Refer to the legal age group property definitions for further information. Supports $filter (eq, ne, not, and in).
     * @return string|null
    */
    public function getAgeGroup(): ?string {
        return $this->ageGroup;
    }

    /**
     * Gets the agreementAcceptances property value. The user's terms of use acceptance statuses. Read-only. Nullable.
     * @return array<AgreementAcceptance>|null
    */
    public function getAgreementAcceptances(): ?array {
        return $this->agreementAcceptances;
    }

    /**
     * Gets the appRoleAssignments property value. Represents the app roles a user has been granted for an application. Supports $expand.
     * @return array<AppRoleAssignment>|null
    */
    public function getAppRoleAssignments(): ?array {
        return $this->appRoleAssignments;
    }

    /**
     * Gets the assignedLicenses property value. The licenses that are assigned to the user, including inherited (group-based) licenses. Not nullable. Supports $filter (eq, not, and counting empty collections).
     * @return array<AssignedLicense>|null
    */
    public function getAssignedLicenses(): ?array {
        return $this->assignedLicenses;
    }

    /**
     * Gets the assignedPlans property value. The plans that are assigned to the user. Read-only. Not nullable.Supports $filter (eq and not).
     * @return array<AssignedPlan>|null
    */
    public function getAssignedPlans(): ?array {
        return $this->assignedPlans;
    }

    /**
     * Gets the authentication property value. The authentication methods that are supported for the user.
     * @return Authentication|null
    */
    public function getAuthentication(): ?Authentication {
        return $this->authentication;
    }

    /**
     * Gets the birthday property value. The birthday of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Returned only on $select.
     * @return DateTime|null
    */
    public function getBirthday(): ?DateTime {
        return $this->birthday;
    }

    /**
     * Gets the businessPhones property value. The telephone numbers for the user. Only one number can be set for this property. Read-only for users synced from on-premises directory. Supports $filter (eq, not, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getBusinessPhones(): ?array {
        return $this->businessPhones;
    }

    /**
     * Gets the calendar property value. The user's primary calendar. Read-only.
     * @return Calendar|null
    */
    public function getCalendar(): ?Calendar {
        return $this->calendar;
    }

    /**
     * Gets the calendarGroups property value. The user's calendar groups. Read-only. Nullable.
     * @return array<CalendarGroup>|null
    */
    public function getCalendarGroups(): ?array {
        return $this->calendarGroups;
    }

    /**
     * Gets the calendars property value. The user's calendars. Read-only. Nullable.
     * @return array<Calendar>|null
    */
    public function getCalendars(): ?array {
        return $this->calendars;
    }

    /**
     * Gets the calendarView property value. The calendar view for the calendar. Read-only. Nullable.
     * @return array<Event>|null
    */
    public function getCalendarView(): ?array {
        return $this->calendarView;
    }

    /**
     * Gets the chats property value. The chats property
     * @return array<Chat>|null
    */
    public function getChats(): ?array {
        return $this->chats;
    }

    /**
     * Gets the city property value. The city in which the user is located. Maximum length is 128 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the companyName property value. The company name which the user is associated. This property can be useful for describing the company that an external user comes from. The maximum length is 64 characters.Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the consentProvidedForMinor property value. Sets whether consent has been obtained for minors. Allowed values: null, Granted, Denied and NotRequired. Refer to the legal age group property definitions for further information. Supports $filter (eq, ne, not, and in).
     * @return string|null
    */
    public function getConsentProvidedForMinor(): ?string {
        return $this->consentProvidedForMinor;
    }

    /**
     * Gets the contactFolders property value. The user's contacts folders. Read-only. Nullable.
     * @return array<ContactFolder>|null
    */
    public function getContactFolders(): ?array {
        return $this->contactFolders;
    }

    /**
     * Gets the contacts property value. The user's contacts. Read-only. Nullable.
     * @return array<Contact>|null
    */
    public function getContacts(): ?array {
        return $this->contacts;
    }

    /**
     * Gets the country property value. The country/region in which the user is located; for example, US or UK. Maximum length is 128 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the createdDateTime property value. The date and time the user was created. The value cannot be modified and is automatically populated when the entity is created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. Property is nullable. A null value indicates that an accurate creation time couldn't be determined for the user. Read-only. Supports $filter (eq, ne, not , ge, le, in).
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the createdObjects property value. Directory objects that were created by the user. Read-only. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getCreatedObjects(): ?array {
        return $this->createdObjects;
    }

    /**
     * Gets the creationType property value. Indicates whether the user account was created through one of the following methods:  As a regular school or work account (null). As an external account (Invitation). As a local account for an Azure Active Directory B2C tenant (LocalAccount). Through self-service sign-up by an internal user using email verification (EmailVerified). Through self-service sign-up by an external user signing up through a link that is part of a user flow (SelfServiceSignUp).  Read-only.Supports $filter (eq, ne, not, and in).
     * @return string|null
    */
    public function getCreationType(): ?string {
        return $this->creationType;
    }

    /**
     * Gets the department property value. The name for the department in which the user works. Maximum length is 64 characters.Supports $filter (eq, ne, not , ge, le, in, and eq on null values).
     * @return string|null
    */
    public function getDepartment(): ?string {
        return $this->department;
    }

    /**
     * Gets the deviceEnrollmentLimit property value. The limit on the maximum number of devices that the user is permitted to enroll. Allowed values are 5 or 1000.
     * @return int|null
    */
    public function getDeviceEnrollmentLimit(): ?int {
        return $this->deviceEnrollmentLimit;
    }

    /**
     * Gets the deviceManagementTroubleshootingEvents property value. The list of troubleshooting events for this user.
     * @return array<DeviceManagementTroubleshootingEvent>|null
    */
    public function getDeviceManagementTroubleshootingEvents(): ?array {
        return $this->deviceManagementTroubleshootingEvents;
    }

    /**
     * Gets the directReports property value. The users and contacts that report to the user. (The users and contacts that have their manager property set to this user.) Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getDirectReports(): ?array {
        return $this->directReports;
    }

    /**
     * Gets the displayName property value. The name displayed in the address book for the user. This value is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Maximum length is 256 characters. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values), $orderBy, and $search.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the drive property value. The user's OneDrive. Read-only.
     * @return Drive|null
    */
    public function getDrive(): ?Drive {
        return $this->drive;
    }

    /**
     * Gets the drives property value. A collection of drives available for this user. Read-only.
     * @return array<Drive>|null
    */
    public function getDrives(): ?array {
        return $this->drives;
    }

    /**
     * Gets the employeeHireDate property value. The date and time when the user was hired or will start work in case of a future hire. Supports $filter (eq, ne, not , ge, le, in).
     * @return DateTime|null
    */
    public function getEmployeeHireDate(): ?DateTime {
        return $this->employeeHireDate;
    }

    /**
     * Gets the employeeId property value. The employee identifier assigned to the user by the organization. The maximum length is 16 characters.Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getEmployeeId(): ?string {
        return $this->employeeId;
    }

    /**
     * Gets the employeeOrgData property value. Represents organization data (e.g. division and costCenter) associated with a user. Supports $filter (eq, ne, not , ge, le, in).
     * @return EmployeeOrgData|null
    */
    public function getEmployeeOrgData(): ?EmployeeOrgData {
        return $this->employeeOrgData;
    }

    /**
     * Gets the employeeType property value. Captures enterprise worker type. For example, Employee, Contractor, Consultant, or Vendor. Supports $filter (eq, ne, not , ge, le, in, startsWith).
     * @return string|null
    */
    public function getEmployeeType(): ?string {
        return $this->employeeType;
    }

    /**
     * Gets the events property value. The user's events. Default is to show events under the Default Calendar. Read-only. Nullable.
     * @return array<Event>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the user. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * Gets the externalUserState property value. For an external user invited to the tenant using the invitation API, this property represents the invited user's invitation status. For invited users, the state can be PendingAcceptance or Accepted, or null for all other users. Supports $filter (eq, ne, not , in).
     * @return string|null
    */
    public function getExternalUserState(): ?string {
        return $this->externalUserState;
    }

    /**
     * Gets the externalUserStateChangeDateTime property value. Shows the timestamp for the latest change to the externalUserState property. Supports $filter (eq, ne, not , in).
     * @return DateTime|null
    */
    public function getExternalUserStateChangeDateTime(): ?DateTime {
        return $this->externalUserStateChangeDateTime;
    }

    /**
     * Gets the faxNumber property value. The fax number of the user. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getFaxNumber(): ?string {
        return $this->faxNumber;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aboutMe' => function (ParseNode $n) use ($o) { $o->setAboutMe($n->getStringValue()); },
            'accountEnabled' => function (ParseNode $n) use ($o) { $o->setAccountEnabled($n->getBooleanValue()); },
            'activities' => function (ParseNode $n) use ($o) { $o->setActivities($n->getCollectionOfObjectValues(array(UserActivity::class, 'createFromDiscriminatorValue'))); },
            'ageGroup' => function (ParseNode $n) use ($o) { $o->setAgeGroup($n->getStringValue()); },
            'agreementAcceptances' => function (ParseNode $n) use ($o) { $o->setAgreementAcceptances($n->getCollectionOfObjectValues(array(AgreementAcceptance::class, 'createFromDiscriminatorValue'))); },
            'appRoleAssignments' => function (ParseNode $n) use ($o) { $o->setAppRoleAssignments($n->getCollectionOfObjectValues(array(AppRoleAssignment::class, 'createFromDiscriminatorValue'))); },
            'assignedLicenses' => function (ParseNode $n) use ($o) { $o->setAssignedLicenses($n->getCollectionOfObjectValues(array(AssignedLicense::class, 'createFromDiscriminatorValue'))); },
            'assignedPlans' => function (ParseNode $n) use ($o) { $o->setAssignedPlans($n->getCollectionOfObjectValues(array(AssignedPlan::class, 'createFromDiscriminatorValue'))); },
            'authentication' => function (ParseNode $n) use ($o) { $o->setAuthentication($n->getObjectValue(array(Authentication::class, 'createFromDiscriminatorValue'))); },
            'birthday' => function (ParseNode $n) use ($o) { $o->setBirthday($n->getDateTimeValue()); },
            'businessPhones' => function (ParseNode $n) use ($o) { $o->setBusinessPhones($n->getCollectionOfPrimitiveValues()); },
            'calendar' => function (ParseNode $n) use ($o) { $o->setCalendar($n->getObjectValue(array(Calendar::class, 'createFromDiscriminatorValue'))); },
            'calendarGroups' => function (ParseNode $n) use ($o) { $o->setCalendarGroups($n->getCollectionOfObjectValues(array(CalendarGroup::class, 'createFromDiscriminatorValue'))); },
            'calendars' => function (ParseNode $n) use ($o) { $o->setCalendars($n->getCollectionOfObjectValues(array(Calendar::class, 'createFromDiscriminatorValue'))); },
            'calendarView' => function (ParseNode $n) use ($o) { $o->setCalendarView($n->getCollectionOfObjectValues(array(Event::class, 'createFromDiscriminatorValue'))); },
            'chats' => function (ParseNode $n) use ($o) { $o->setChats($n->getCollectionOfObjectValues(array(Chat::class, 'createFromDiscriminatorValue'))); },
            'city' => function (ParseNode $n) use ($o) { $o->setCity($n->getStringValue()); },
            'companyName' => function (ParseNode $n) use ($o) { $o->setCompanyName($n->getStringValue()); },
            'consentProvidedForMinor' => function (ParseNode $n) use ($o) { $o->setConsentProvidedForMinor($n->getStringValue()); },
            'contactFolders' => function (ParseNode $n) use ($o) { $o->setContactFolders($n->getCollectionOfObjectValues(array(ContactFolder::class, 'createFromDiscriminatorValue'))); },
            'contacts' => function (ParseNode $n) use ($o) { $o->setContacts($n->getCollectionOfObjectValues(array(Contact::class, 'createFromDiscriminatorValue'))); },
            'country' => function (ParseNode $n) use ($o) { $o->setCountry($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'createdObjects' => function (ParseNode $n) use ($o) { $o->setCreatedObjects($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'creationType' => function (ParseNode $n) use ($o) { $o->setCreationType($n->getStringValue()); },
            'department' => function (ParseNode $n) use ($o) { $o->setDepartment($n->getStringValue()); },
            'deviceEnrollmentLimit' => function (ParseNode $n) use ($o) { $o->setDeviceEnrollmentLimit($n->getIntegerValue()); },
            'deviceManagementTroubleshootingEvents' => function (ParseNode $n) use ($o) { $o->setDeviceManagementTroubleshootingEvents($n->getCollectionOfObjectValues(array(DeviceManagementTroubleshootingEvent::class, 'createFromDiscriminatorValue'))); },
            'directReports' => function (ParseNode $n) use ($o) { $o->setDirectReports($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'drive' => function (ParseNode $n) use ($o) { $o->setDrive($n->getObjectValue(array(Drive::class, 'createFromDiscriminatorValue'))); },
            'drives' => function (ParseNode $n) use ($o) { $o->setDrives($n->getCollectionOfObjectValues(array(Drive::class, 'createFromDiscriminatorValue'))); },
            'employeeHireDate' => function (ParseNode $n) use ($o) { $o->setEmployeeHireDate($n->getDateTimeValue()); },
            'employeeId' => function (ParseNode $n) use ($o) { $o->setEmployeeId($n->getStringValue()); },
            'employeeOrgData' => function (ParseNode $n) use ($o) { $o->setEmployeeOrgData($n->getObjectValue(array(EmployeeOrgData::class, 'createFromDiscriminatorValue'))); },
            'employeeType' => function (ParseNode $n) use ($o) { $o->setEmployeeType($n->getStringValue()); },
            'events' => function (ParseNode $n) use ($o) { $o->setEvents($n->getCollectionOfObjectValues(array(Event::class, 'createFromDiscriminatorValue'))); },
            'extensions' => function (ParseNode $n) use ($o) { $o->setExtensions($n->getCollectionOfObjectValues(array(Extension::class, 'createFromDiscriminatorValue'))); },
            'externalUserState' => function (ParseNode $n) use ($o) { $o->setExternalUserState($n->getStringValue()); },
            'externalUserStateChangeDateTime' => function (ParseNode $n) use ($o) { $o->setExternalUserStateChangeDateTime($n->getDateTimeValue()); },
            'faxNumber' => function (ParseNode $n) use ($o) { $o->setFaxNumber($n->getStringValue()); },
            'followedSites' => function (ParseNode $n) use ($o) { $o->setFollowedSites($n->getCollectionOfObjectValues(array(Site::class, 'createFromDiscriminatorValue'))); },
            'givenName' => function (ParseNode $n) use ($o) { $o->setGivenName($n->getStringValue()); },
            'hireDate' => function (ParseNode $n) use ($o) { $o->setHireDate($n->getDateTimeValue()); },
            'identities' => function (ParseNode $n) use ($o) { $o->setIdentities($n->getCollectionOfObjectValues(array(ObjectIdentity::class, 'createFromDiscriminatorValue'))); },
            'imAddresses' => function (ParseNode $n) use ($o) { $o->setImAddresses($n->getCollectionOfPrimitiveValues()); },
            'inferenceClassification' => function (ParseNode $n) use ($o) { $o->setInferenceClassification($n->getObjectValue(array(InferenceClassification::class, 'createFromDiscriminatorValue'))); },
            'insights' => function (ParseNode $n) use ($o) { $o->setInsights($n->getObjectValue(array(OfficeGraphInsights::class, 'createFromDiscriminatorValue'))); },
            'interests' => function (ParseNode $n) use ($o) { $o->setInterests($n->getCollectionOfPrimitiveValues()); },
            'isResourceAccount' => function (ParseNode $n) use ($o) { $o->setIsResourceAccount($n->getBooleanValue()); },
            'jobTitle' => function (ParseNode $n) use ($o) { $o->setJobTitle($n->getStringValue()); },
            'joinedTeams' => function (ParseNode $n) use ($o) { $o->setJoinedTeams($n->getCollectionOfObjectValues(array(Team::class, 'createFromDiscriminatorValue'))); },
            'lastPasswordChangeDateTime' => function (ParseNode $n) use ($o) { $o->setLastPasswordChangeDateTime($n->getDateTimeValue()); },
            'legalAgeGroupClassification' => function (ParseNode $n) use ($o) { $o->setLegalAgeGroupClassification($n->getStringValue()); },
            'licenseAssignmentStates' => function (ParseNode $n) use ($o) { $o->setLicenseAssignmentStates($n->getCollectionOfObjectValues(array(LicenseAssignmentState::class, 'createFromDiscriminatorValue'))); },
            'licenseDetails' => function (ParseNode $n) use ($o) { $o->setLicenseDetails($n->getCollectionOfObjectValues(array(LicenseDetails::class, 'createFromDiscriminatorValue'))); },
            'mail' => function (ParseNode $n) use ($o) { $o->setMail($n->getStringValue()); },
            'mailboxSettings' => function (ParseNode $n) use ($o) { $o->setMailboxSettings($n->getObjectValue(array(MailboxSettings::class, 'createFromDiscriminatorValue'))); },
            'mailFolders' => function (ParseNode $n) use ($o) { $o->setMailFolders($n->getCollectionOfObjectValues(array(MailFolder::class, 'createFromDiscriminatorValue'))); },
            'mailNickname' => function (ParseNode $n) use ($o) { $o->setMailNickname($n->getStringValue()); },
            'managedAppRegistrations' => function (ParseNode $n) use ($o) { $o->setManagedAppRegistrations($n->getCollectionOfObjectValues(array(ManagedAppRegistration::class, 'createFromDiscriminatorValue'))); },
            'managedDevices' => function (ParseNode $n) use ($o) { $o->setManagedDevices($n->getCollectionOfObjectValues(array(ManagedDevice::class, 'createFromDiscriminatorValue'))); },
            'manager' => function (ParseNode $n) use ($o) { $o->setManager($n->getObjectValue(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'memberOf' => function (ParseNode $n) use ($o) { $o->setMemberOf($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'messages' => function (ParseNode $n) use ($o) { $o->setMessages($n->getCollectionOfObjectValues(array(Message::class, 'createFromDiscriminatorValue'))); },
            'mobilePhone' => function (ParseNode $n) use ($o) { $o->setMobilePhone($n->getStringValue()); },
            'mySite' => function (ParseNode $n) use ($o) { $o->setMySite($n->getStringValue()); },
            'oauth2PermissionGrants' => function (ParseNode $n) use ($o) { $o->setOauth2PermissionGrants($n->getCollectionOfObjectValues(array(OAuth2PermissionGrant::class, 'createFromDiscriminatorValue'))); },
            'officeLocation' => function (ParseNode $n) use ($o) { $o->setOfficeLocation($n->getStringValue()); },
            'onenote' => function (ParseNode $n) use ($o) { $o->setOnenote($n->getObjectValue(array(Onenote::class, 'createFromDiscriminatorValue'))); },
            'onlineMeetings' => function (ParseNode $n) use ($o) { $o->setOnlineMeetings($n->getCollectionOfObjectValues(array(OnlineMeeting::class, 'createFromDiscriminatorValue'))); },
            'onPremisesDistinguishedName' => function (ParseNode $n) use ($o) { $o->setOnPremisesDistinguishedName($n->getStringValue()); },
            'onPremisesDomainName' => function (ParseNode $n) use ($o) { $o->setOnPremisesDomainName($n->getStringValue()); },
            'onPremisesExtensionAttributes' => function (ParseNode $n) use ($o) { $o->setOnPremisesExtensionAttributes($n->getObjectValue(array(OnPremisesExtensionAttributes::class, 'createFromDiscriminatorValue'))); },
            'onPremisesImmutableId' => function (ParseNode $n) use ($o) { $o->setOnPremisesImmutableId($n->getStringValue()); },
            'onPremisesLastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setOnPremisesLastSyncDateTime($n->getDateTimeValue()); },
            'onPremisesProvisioningErrors' => function (ParseNode $n) use ($o) { $o->setOnPremisesProvisioningErrors($n->getCollectionOfObjectValues(array(OnPremisesProvisioningError::class, 'createFromDiscriminatorValue'))); },
            'onPremisesSamAccountName' => function (ParseNode $n) use ($o) { $o->setOnPremisesSamAccountName($n->getStringValue()); },
            'onPremisesSecurityIdentifier' => function (ParseNode $n) use ($o) { $o->setOnPremisesSecurityIdentifier($n->getStringValue()); },
            'onPremisesSyncEnabled' => function (ParseNode $n) use ($o) { $o->setOnPremisesSyncEnabled($n->getBooleanValue()); },
            'onPremisesUserPrincipalName' => function (ParseNode $n) use ($o) { $o->setOnPremisesUserPrincipalName($n->getStringValue()); },
            'otherMails' => function (ParseNode $n) use ($o) { $o->setOtherMails($n->getCollectionOfPrimitiveValues()); },
            'outlook' => function (ParseNode $n) use ($o) { $o->setOutlook($n->getObjectValue(array(OutlookUser::class, 'createFromDiscriminatorValue'))); },
            'ownedDevices' => function (ParseNode $n) use ($o) { $o->setOwnedDevices($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'ownedObjects' => function (ParseNode $n) use ($o) { $o->setOwnedObjects($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'passwordPolicies' => function (ParseNode $n) use ($o) { $o->setPasswordPolicies($n->getStringValue()); },
            'passwordProfile' => function (ParseNode $n) use ($o) { $o->setPasswordProfile($n->getObjectValue(array(PasswordProfile::class, 'createFromDiscriminatorValue'))); },
            'pastProjects' => function (ParseNode $n) use ($o) { $o->setPastProjects($n->getCollectionOfPrimitiveValues()); },
            'people' => function (ParseNode $n) use ($o) { $o->setPeople($n->getCollectionOfObjectValues(array(Person::class, 'createFromDiscriminatorValue'))); },
            'photo' => function (ParseNode $n) use ($o) { $o->setPhoto($n->getObjectValue(array(ProfilePhoto::class, 'createFromDiscriminatorValue'))); },
            'photos' => function (ParseNode $n) use ($o) { $o->setPhotos($n->getCollectionOfObjectValues(array(ProfilePhoto::class, 'createFromDiscriminatorValue'))); },
            'planner' => function (ParseNode $n) use ($o) { $o->setPlanner($n->getObjectValue(array(PlannerUser::class, 'createFromDiscriminatorValue'))); },
            'postalCode' => function (ParseNode $n) use ($o) { $o->setPostalCode($n->getStringValue()); },
            'preferredDataLocation' => function (ParseNode $n) use ($o) { $o->setPreferredDataLocation($n->getStringValue()); },
            'preferredLanguage' => function (ParseNode $n) use ($o) { $o->setPreferredLanguage($n->getStringValue()); },
            'preferredName' => function (ParseNode $n) use ($o) { $o->setPreferredName($n->getStringValue()); },
            'presence' => function (ParseNode $n) use ($o) { $o->setPresence($n->getObjectValue(array(Presence::class, 'createFromDiscriminatorValue'))); },
            'provisionedPlans' => function (ParseNode $n) use ($o) { $o->setProvisionedPlans($n->getCollectionOfObjectValues(array(ProvisionedPlan::class, 'createFromDiscriminatorValue'))); },
            'proxyAddresses' => function (ParseNode $n) use ($o) { $o->setProxyAddresses($n->getCollectionOfPrimitiveValues()); },
            'registeredDevices' => function (ParseNode $n) use ($o) { $o->setRegisteredDevices($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'responsibilities' => function (ParseNode $n) use ($o) { $o->setResponsibilities($n->getCollectionOfPrimitiveValues()); },
            'schools' => function (ParseNode $n) use ($o) { $o->setSchools($n->getCollectionOfPrimitiveValues()); },
            'scopedRoleMemberOf' => function (ParseNode $n) use ($o) { $o->setScopedRoleMemberOf($n->getCollectionOfObjectValues(array(ScopedRoleMembership::class, 'createFromDiscriminatorValue'))); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getObjectValue(array(UserSettings::class, 'createFromDiscriminatorValue'))); },
            'showInAddressList' => function (ParseNode $n) use ($o) { $o->setShowInAddressList($n->getBooleanValue()); },
            'signInSessionsValidFromDateTime' => function (ParseNode $n) use ($o) { $o->setSignInSessionsValidFromDateTime($n->getDateTimeValue()); },
            'skills' => function (ParseNode $n) use ($o) { $o->setSkills($n->getCollectionOfPrimitiveValues()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getStringValue()); },
            'streetAddress' => function (ParseNode $n) use ($o) { $o->setStreetAddress($n->getStringValue()); },
            'surname' => function (ParseNode $n) use ($o) { $o->setSurname($n->getStringValue()); },
            'teamwork' => function (ParseNode $n) use ($o) { $o->setTeamwork($n->getObjectValue(array(UserTeamwork::class, 'createFromDiscriminatorValue'))); },
            'todo' => function (ParseNode $n) use ($o) { $o->setTodo($n->getObjectValue(array(Todo::class, 'createFromDiscriminatorValue'))); },
            'transitiveMemberOf' => function (ParseNode $n) use ($o) { $o->setTransitiveMemberOf($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'usageLocation' => function (ParseNode $n) use ($o) { $o->setUsageLocation($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
            'userType' => function (ParseNode $n) use ($o) { $o->setUserType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the followedSites property value. The followedSites property
     * @return array<Site>|null
    */
    public function getFollowedSites(): ?array {
        return $this->followedSites;
    }

    /**
     * Gets the givenName property value. The given name (first name) of the user. Maximum length is 64 characters. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->givenName;
    }

    /**
     * Gets the hireDate property value. The hire date of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Returned only on $select.  Note: This property is specific to SharePoint Online. We recommend using the native employeeHireDate property to set and update hire date values using Microsoft Graph APIs.
     * @return DateTime|null
    */
    public function getHireDate(): ?DateTime {
        return $this->hireDate;
    }

    /**
     * Gets the identities property value. Represents the identities that can be used to sign in to this user account. An identity can be provided by Microsoft (also known as a local account), by organizations, or by social identity providers such as Facebook, Google, and Microsoft, and tied to a user account. May contain multiple items with the same signInType value. Supports $filter (eq) including on null values, only where the signInType is not userPrincipalName.
     * @return array<ObjectIdentity>|null
    */
    public function getIdentities(): ?array {
        return $this->identities;
    }

    /**
     * Gets the imAddresses property value. The instant message voice over IP (VOIP) session initiation protocol (SIP) addresses for the user. Read-only. Supports $filter (eq, not, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getImAddresses(): ?array {
        return $this->imAddresses;
    }

    /**
     * Gets the inferenceClassification property value. Relevance classification of the user's messages based on explicit designations which override inferred relevance or importance.
     * @return InferenceClassification|null
    */
    public function getInferenceClassification(): ?InferenceClassification {
        return $this->inferenceClassification;
    }

    /**
     * Gets the insights property value. The insights property
     * @return OfficeGraphInsights|null
    */
    public function getInsights(): ?OfficeGraphInsights {
        return $this->insights;
    }

    /**
     * Gets the interests property value. A list for the user to describe their interests. Returned only on $select.
     * @return array<string>|null
    */
    public function getInterests(): ?array {
        return $this->interests;
    }

    /**
     * Gets the isResourceAccount property value. Do not use – reserved for future use.
     * @return bool|null
    */
    public function getIsResourceAccount(): ?bool {
        return $this->isResourceAccount;
    }

    /**
     * Gets the jobTitle property value. The user's job title. Maximum length is 128 characters. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getJobTitle(): ?string {
        return $this->jobTitle;
    }

    /**
     * Gets the joinedTeams property value. The Microsoft Teams teams that the user is a member of. Read-only. Nullable.
     * @return array<Team>|null
    */
    public function getJoinedTeams(): ?array {
        return $this->joinedTeams;
    }

    /**
     * Gets the lastPasswordChangeDateTime property value. The time when this Azure AD user last changed their password or when their password was created, , whichever date the latest action was performed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Returned only on $select.
     * @return DateTime|null
    */
    public function getLastPasswordChangeDateTime(): ?DateTime {
        return $this->lastPasswordChangeDateTime;
    }

    /**
     * Gets the legalAgeGroupClassification property value. Used by enterprise applications to determine the legal age group of the user. This property is read-only and calculated based on ageGroup and consentProvidedForMinor properties. Allowed values: null, MinorWithOutParentalConsent, MinorWithParentalConsent, MinorNoParentalConsentRequired, NotAdult and Adult. Refer to the legal age group property definitions for further information. Returned only on $select.
     * @return string|null
    */
    public function getLegalAgeGroupClassification(): ?string {
        return $this->legalAgeGroupClassification;
    }

    /**
     * Gets the licenseAssignmentStates property value. State of license assignments for this user. Read-only. Returned only on $select.
     * @return array<LicenseAssignmentState>|null
    */
    public function getLicenseAssignmentStates(): ?array {
        return $this->licenseAssignmentStates;
    }

    /**
     * Gets the licenseDetails property value. A collection of this user's license details. Read-only.
     * @return array<LicenseDetails>|null
    */
    public function getLicenseDetails(): ?array {
        return $this->licenseDetails;
    }

    /**
     * Gets the mail property value. The SMTP address for the user, for example, admin@contoso.com. Changes to this property will also update the user's proxyAddresses collection to include the value as an SMTP address. For Azure AD B2C accounts, this property can be updated up to only ten times with unique SMTP addresses. This property cannot contain accent characters.  Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith, and eq on null values).
     * @return string|null
    */
    public function getMail(): ?string {
        return $this->mail;
    }

    /**
     * Gets the mailboxSettings property value. Settings for the primary mailbox of the signed-in user. You can get or update settings for sending automatic replies to incoming messages, locale, and time zone. For more information, see User preferences for languages and regional formats. Returned only on $select.
     * @return MailboxSettings|null
    */
    public function getMailboxSettings(): ?MailboxSettings {
        return $this->mailboxSettings;
    }

    /**
     * Gets the mailFolders property value. The user's mail folders. Read-only. Nullable.
     * @return array<MailFolder>|null
    */
    public function getMailFolders(): ?array {
        return $this->mailFolders;
    }

    /**
     * Gets the mailNickname property value. The mail alias for the user. This property must be specified when a user is created. Maximum length is 64 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getMailNickname(): ?string {
        return $this->mailNickname;
    }

    /**
     * Gets the managedAppRegistrations property value. Zero or more managed app registrations that belong to the user.
     * @return array<ManagedAppRegistration>|null
    */
    public function getManagedAppRegistrations(): ?array {
        return $this->managedAppRegistrations;
    }

    /**
     * Gets the managedDevices property value. The managed devices associated with the user.
     * @return array<ManagedDevice>|null
    */
    public function getManagedDevices(): ?array {
        return $this->managedDevices;
    }

    /**
     * Gets the manager property value. The user or contact that is this user's manager. Read-only. (HTTP Methods: GET, PUT, DELETE.). Supports $expand.
     * @return DirectoryObject|null
    */
    public function getManager(): ?DirectoryObject {
        return $this->manager;
    }

    /**
     * Gets the memberOf property value. The groups, directory roles and administrative units that the user is a member of. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getMemberOf(): ?array {
        return $this->memberOf;
    }

    /**
     * Gets the messages property value. The messages in a mailbox or folder. Read-only. Nullable.
     * @return array<Message>|null
    */
    public function getMessages(): ?array {
        return $this->messages;
    }

    /**
     * Gets the mobilePhone property value. The primary cellular telephone number for the user. Read-only for users synced from on-premises directory.  Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getMobilePhone(): ?string {
        return $this->mobilePhone;
    }

    /**
     * Gets the mySite property value. The URL for the user's personal site. Returned only on $select.
     * @return string|null
    */
    public function getMySite(): ?string {
        return $this->mySite;
    }

    /**
     * Gets the oauth2PermissionGrants property value. The oauth2PermissionGrants property
     * @return array<OAuth2PermissionGrant>|null
    */
    public function getOauth2PermissionGrants(): ?array {
        return $this->oauth2PermissionGrants;
    }

    /**
     * Gets the officeLocation property value. The office location in the user's place of business. Maximum length is 128 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        return $this->officeLocation;
    }

    /**
     * Gets the onenote property value. The onenote property
     * @return Onenote|null
    */
    public function getOnenote(): ?Onenote {
        return $this->onenote;
    }

    /**
     * Gets the onlineMeetings property value. The onlineMeetings property
     * @return array<OnlineMeeting>|null
    */
    public function getOnlineMeetings(): ?array {
        return $this->onlineMeetings;
    }

    /**
     * Gets the onPremisesDistinguishedName property value. Contains the on-premises Active Directory distinguished name or DN. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only.
     * @return string|null
    */
    public function getOnPremisesDistinguishedName(): ?string {
        return $this->onPremisesDistinguishedName;
    }

    /**
     * Gets the onPremisesDomainName property value. Contains the on-premises domainFQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only.
     * @return string|null
    */
    public function getOnPremisesDomainName(): ?string {
        return $this->onPremisesDomainName;
    }

    /**
     * Gets the onPremisesExtensionAttributes property value. Contains extensionAttributes1-15 for the user. The individual extension attributes are neither selectable nor filterable. For an onPremisesSyncEnabled user, the source of authority for this set of properties is the on-premises and is read-only. For a cloud-only user (where onPremisesSyncEnabled is false), these properties can be set during creation or update of a user object.  For a cloud-only user previously synced from on-premises Active Directory, these properties are read-only in Microsoft Graph but can be fully managed through the Exchange Admin Center or the Exchange Online V2 module in PowerShell. These extension attributes are also known as Exchange custom attributes 1-15. Returned only on $select.
     * @return OnPremisesExtensionAttributes|null
    */
    public function getOnPremisesExtensionAttributes(): ?OnPremisesExtensionAttributes {
        return $this->onPremisesExtensionAttributes;
    }

    /**
     * Gets the onPremisesImmutableId property value. This property is used to associate an on-premises Active Directory user account to their Azure AD user object. This property must be specified when creating a new user account in the Graph if you are using a federated domain for the user's userPrincipalName (UPN) property. Note: The $ and _ characters cannot be used when specifying this property. Supports $filter (eq, ne, not, ge, le, in).
     * @return string|null
    */
    public function getOnPremisesImmutableId(): ?string {
        return $this->onPremisesImmutableId;
    }

    /**
     * Gets the onPremisesLastSyncDateTime property value. Indicates the last time at which the object was synced with the on-premises directory; for example: '2013-02-16T03:04:54Z'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter (eq, ne, not, ge, le, in).
     * @return DateTime|null
    */
    public function getOnPremisesLastSyncDateTime(): ?DateTime {
        return $this->onPremisesLastSyncDateTime;
    }

    /**
     * Gets the onPremisesProvisioningErrors property value. Errors when using Microsoft synchronization product during provisioning.  Supports $filter (eq, not, ge, le).
     * @return array<OnPremisesProvisioningError>|null
    */
    public function getOnPremisesProvisioningErrors(): ?array {
        return $this->onPremisesProvisioningErrors;
    }

    /**
     * Gets the onPremisesSamAccountName property value. Contains the on-premises sAMAccountName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     * @return string|null
    */
    public function getOnPremisesSamAccountName(): ?string {
        return $this->onPremisesSamAccountName;
    }

    /**
     * Gets the onPremisesSecurityIdentifier property value. Contains the on-premises security identifier (SID) for the user that was synchronized from on-premises to the cloud. Read-only. Supports $filter (eq including on null values).
     * @return string|null
    */
    public function getOnPremisesSecurityIdentifier(): ?string {
        return $this->onPremisesSecurityIdentifier;
    }

    /**
     * Gets the onPremisesSyncEnabled property value. true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     * @return bool|null
    */
    public function getOnPremisesSyncEnabled(): ?bool {
        return $this->onPremisesSyncEnabled;
    }

    /**
     * Gets the onPremisesUserPrincipalName property value. Contains the on-premises userPrincipalName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     * @return string|null
    */
    public function getOnPremisesUserPrincipalName(): ?string {
        return $this->onPremisesUserPrincipalName;
    }

    /**
     * Gets the otherMails property value. A list of additional email addresses for the user; for example: ['bob@contoso.com', 'Robert@fabrikam.com'].NOTE: This property cannot contain accent characters.Supports $filter (eq, not, ge, le, in, startsWith, and counting empty collections).
     * @return array<string>|null
    */
    public function getOtherMails(): ?array {
        return $this->otherMails;
    }

    /**
     * Gets the outlook property value. Selective Outlook services available to the user. Read-only. Nullable.
     * @return OutlookUser|null
    */
    public function getOutlook(): ?OutlookUser {
        return $this->outlook;
    }

    /**
     * Gets the ownedDevices property value. Devices that are owned by the user. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getOwnedDevices(): ?array {
        return $this->ownedDevices;
    }

    /**
     * Gets the ownedObjects property value. Directory objects that are owned by the user. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getOwnedObjects(): ?array {
        return $this->ownedObjects;
    }

    /**
     * Gets the passwordPolicies property value. Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two may be specified together; for example: DisablePasswordExpiration, DisableStrongPassword. For more information on the default password policies, see Azure AD pasword policies. Supports $filter (ne, not, and eq on null values).
     * @return string|null
    */
    public function getPasswordPolicies(): ?string {
        return $this->passwordPolicies;
    }

    /**
     * Gets the passwordProfile property value. Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required. NOTE: For Azure B2C tenants, the forceChangePasswordNextSignIn property should be set to false and instead use custom policies and user flows to force password reset at first logon. See Force password reset at first logon. Supports $filter (eq, ne, not, in, and eq on null values).
     * @return PasswordProfile|null
    */
    public function getPasswordProfile(): ?PasswordProfile {
        return $this->passwordProfile;
    }

    /**
     * Gets the pastProjects property value. A list for the user to enumerate their past projects. Returned only on $select.
     * @return array<string>|null
    */
    public function getPastProjects(): ?array {
        return $this->pastProjects;
    }

    /**
     * Gets the people property value. Read-only. The most relevant people to the user. The collection is ordered by their relevance to the user, which is determined by the user's communication, collaboration and business relationships. A person is an aggregation of information from across mail, contacts and social networks.
     * @return array<Person>|null
    */
    public function getPeople(): ?array {
        return $this->people;
    }

    /**
     * Gets the photo property value. The user's profile photo. Read-only.
     * @return ProfilePhoto|null
    */
    public function getPhoto(): ?ProfilePhoto {
        return $this->photo;
    }

    /**
     * Gets the photos property value. The photos property
     * @return array<ProfilePhoto>|null
    */
    public function getPhotos(): ?array {
        return $this->photos;
    }

    /**
     * Gets the planner property value. Selective Planner services available to the user. Read-only. Nullable.
     * @return PlannerUser|null
    */
    public function getPlanner(): ?PlannerUser {
        return $this->planner;
    }

    /**
     * Gets the postalCode property value. The postal code for the user's postal address. The postal code is specific to the user's country/region. In the United States of America, this attribute contains the ZIP code. Maximum length is 40 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the preferredDataLocation property value. The preferred data location for the user. For more information, see OneDrive Online Multi-Geo.
     * @return string|null
    */
    public function getPreferredDataLocation(): ?string {
        return $this->preferredDataLocation;
    }

    /**
     * Gets the preferredLanguage property value. The preferred language for the user. Should follow ISO 639-1 Code; for example en-US. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getPreferredLanguage(): ?string {
        return $this->preferredLanguage;
    }

    /**
     * Gets the preferredName property value. The preferred name for the user. Returned only on $select.
     * @return string|null
    */
    public function getPreferredName(): ?string {
        return $this->preferredName;
    }

    /**
     * Gets the presence property value. The presence property
     * @return Presence|null
    */
    public function getPresence(): ?Presence {
        return $this->presence;
    }

    /**
     * Gets the provisionedPlans property value. The plans that are provisioned for the user. Read-only. Not nullable. Supports $filter (eq, not, ge, le).
     * @return array<ProvisionedPlan>|null
    */
    public function getProvisionedPlans(): ?array {
        return $this->provisionedPlans;
    }

    /**
     * Gets the proxyAddresses property value. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. Changes to the mail property will also update this collection to include the value as an SMTP address. For more information, see mail and proxyAddresses properties. The proxy address prefixed with SMTP (capitalized) is the primary proxy address while those prefixed with smtp are the secondary proxy addresses. For Azure AD B2C accounts, this property has a limit of ten unique addresses. Read-only in Microsoft Graph; you can update this property only through the Microsoft 365 admin center. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, and counting empty collections).
     * @return array<string>|null
    */
    public function getProxyAddresses(): ?array {
        return $this->proxyAddresses;
    }

    /**
     * Gets the registeredDevices property value. Devices that are registered for the user. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getRegisteredDevices(): ?array {
        return $this->registeredDevices;
    }

    /**
     * Gets the responsibilities property value. A list for the user to enumerate their responsibilities. Returned only on $select.
     * @return array<string>|null
    */
    public function getResponsibilities(): ?array {
        return $this->responsibilities;
    }

    /**
     * Gets the schools property value. A list for the user to enumerate the schools they have attended. Returned only on $select.
     * @return array<string>|null
    */
    public function getSchools(): ?array {
        return $this->schools;
    }

    /**
     * Gets the scopedRoleMemberOf property value. The scoped-role administrative unit memberships for this user. Read-only. Nullable.
     * @return array<ScopedRoleMembership>|null
    */
    public function getScopedRoleMemberOf(): ?array {
        return $this->scopedRoleMemberOf;
    }

    /**
     * Gets the settings property value. The settings property
     * @return UserSettings|null
    */
    public function getSettings(): ?UserSettings {
        return $this->settings;
    }

    /**
     * Gets the showInAddressList property value. Do not use in Microsoft Graph. Manage this property through the Microsoft 365 admin center instead. Represents whether the user should be included in the Outlook global address list. See Known issue.
     * @return bool|null
    */
    public function getShowInAddressList(): ?bool {
        return $this->showInAddressList;
    }

    /**
     * Gets the signInSessionsValidFromDateTime property value. Any refresh tokens or sessions tokens (session cookies) issued before this time are invalid, and applications will get an error when using an invalid refresh or sessions token to acquire a delegated access token (to access APIs such as Microsoft Graph).  If this happens, the application will need to acquire a new refresh token by making a request to the authorize endpoint. Read-only. Use revokeSignInSessions to reset.
     * @return DateTime|null
    */
    public function getSignInSessionsValidFromDateTime(): ?DateTime {
        return $this->signInSessionsValidFromDateTime;
    }

    /**
     * Gets the skills property value. A list for the user to enumerate their skills. Returned only on $select.
     * @return array<string>|null
    */
    public function getSkills(): ?array {
        return $this->skills;
    }

    /**
     * Gets the state property value. The state or province in the user's address. Maximum length is 128 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the streetAddress property value. The street address of the user's place of business. Maximum length is 1024 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getStreetAddress(): ?string {
        return $this->streetAddress;
    }

    /**
     * Gets the surname property value. The user's surname (family name or last name). Maximum length is 64 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->surname;
    }

    /**
     * Gets the teamwork property value. A container for Microsoft Teams features available for the user. Read-only. Nullable.
     * @return UserTeamwork|null
    */
    public function getTeamwork(): ?UserTeamwork {
        return $this->teamwork;
    }

    /**
     * Gets the todo property value. Represents the To Do services available to a user.
     * @return Todo|null
    */
    public function getTodo(): ?Todo {
        return $this->todo;
    }

    /**
     * Gets the transitiveMemberOf property value. The transitiveMemberOf property
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMemberOf(): ?array {
        return $this->transitiveMemberOf;
    }

    /**
     * Gets the usageLocation property value. A two letter country code (ISO standard 3166). Required for users that will be assigned licenses due to legal requirement to check for availability of services in countries.  Examples include: US, JP, and GB. Not nullable. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getUsageLocation(): ?string {
        return $this->usageLocation;
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant's collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of organization.NOTE: This property cannot contain accent characters. Only the following characters are allowed A - Z, a - z, 0 - 9, ' . - _ ! # ^ ~. For the complete list of allowed characters, see username policies. Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith) and $orderBy.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Gets the userType property value. A String value that can be used to classify user types in your directory, such as Member and Guest. Supports $filter (eq, ne, not, in, and eq on null values). NOTE: For more information about the permissions for member and guest users, see What are the default user permissions in Azure Active Directory?
     * @return string|null
    */
    public function getUserType(): ?string {
        return $this->userType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('aboutMe', $this->aboutMe);
        $writer->writeBooleanValue('accountEnabled', $this->accountEnabled);
        $writer->writeCollectionOfObjectValues('activities', $this->activities);
        $writer->writeStringValue('ageGroup', $this->ageGroup);
        $writer->writeCollectionOfObjectValues('agreementAcceptances', $this->agreementAcceptances);
        $writer->writeCollectionOfObjectValues('appRoleAssignments', $this->appRoleAssignments);
        $writer->writeCollectionOfObjectValues('assignedLicenses', $this->assignedLicenses);
        $writer->writeCollectionOfObjectValues('assignedPlans', $this->assignedPlans);
        $writer->writeObjectValue('authentication', $this->authentication);
        $writer->writeDateTimeValue('birthday', $this->birthday);
        $writer->writeCollectionOfPrimitiveValues('businessPhones', $this->businessPhones);
        $writer->writeObjectValue('calendar', $this->calendar);
        $writer->writeCollectionOfObjectValues('calendarGroups', $this->calendarGroups);
        $writer->writeCollectionOfObjectValues('calendars', $this->calendars);
        $writer->writeCollectionOfObjectValues('calendarView', $this->calendarView);
        $writer->writeCollectionOfObjectValues('chats', $this->chats);
        $writer->writeStringValue('city', $this->city);
        $writer->writeStringValue('companyName', $this->companyName);
        $writer->writeStringValue('consentProvidedForMinor', $this->consentProvidedForMinor);
        $writer->writeCollectionOfObjectValues('contactFolders', $this->contactFolders);
        $writer->writeCollectionOfObjectValues('contacts', $this->contacts);
        $writer->writeStringValue('country', $this->country);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('createdObjects', $this->createdObjects);
        $writer->writeStringValue('creationType', $this->creationType);
        $writer->writeStringValue('department', $this->department);
        $writer->writeIntegerValue('deviceEnrollmentLimit', $this->deviceEnrollmentLimit);
        $writer->writeCollectionOfObjectValues('deviceManagementTroubleshootingEvents', $this->deviceManagementTroubleshootingEvents);
        $writer->writeCollectionOfObjectValues('directReports', $this->directReports);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('drive', $this->drive);
        $writer->writeCollectionOfObjectValues('drives', $this->drives);
        $writer->writeDateTimeValue('employeeHireDate', $this->employeeHireDate);
        $writer->writeStringValue('employeeId', $this->employeeId);
        $writer->writeObjectValue('employeeOrgData', $this->employeeOrgData);
        $writer->writeStringValue('employeeType', $this->employeeType);
        $writer->writeCollectionOfObjectValues('events', $this->events);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeStringValue('externalUserState', $this->externalUserState);
        $writer->writeDateTimeValue('externalUserStateChangeDateTime', $this->externalUserStateChangeDateTime);
        $writer->writeStringValue('faxNumber', $this->faxNumber);
        $writer->writeCollectionOfObjectValues('followedSites', $this->followedSites);
        $writer->writeStringValue('givenName', $this->givenName);
        $writer->writeDateTimeValue('hireDate', $this->hireDate);
        $writer->writeCollectionOfObjectValues('identities', $this->identities);
        $writer->writeCollectionOfPrimitiveValues('imAddresses', $this->imAddresses);
        $writer->writeObjectValue('inferenceClassification', $this->inferenceClassification);
        $writer->writeObjectValue('insights', $this->insights);
        $writer->writeCollectionOfPrimitiveValues('interests', $this->interests);
        $writer->writeBooleanValue('isResourceAccount', $this->isResourceAccount);
        $writer->writeStringValue('jobTitle', $this->jobTitle);
        $writer->writeCollectionOfObjectValues('joinedTeams', $this->joinedTeams);
        $writer->writeDateTimeValue('lastPasswordChangeDateTime', $this->lastPasswordChangeDateTime);
        $writer->writeStringValue('legalAgeGroupClassification', $this->legalAgeGroupClassification);
        $writer->writeCollectionOfObjectValues('licenseAssignmentStates', $this->licenseAssignmentStates);
        $writer->writeCollectionOfObjectValues('licenseDetails', $this->licenseDetails);
        $writer->writeStringValue('mail', $this->mail);
        $writer->writeObjectValue('mailboxSettings', $this->mailboxSettings);
        $writer->writeCollectionOfObjectValues('mailFolders', $this->mailFolders);
        $writer->writeStringValue('mailNickname', $this->mailNickname);
        $writer->writeCollectionOfObjectValues('managedAppRegistrations', $this->managedAppRegistrations);
        $writer->writeCollectionOfObjectValues('managedDevices', $this->managedDevices);
        $writer->writeObjectValue('manager', $this->manager);
        $writer->writeCollectionOfObjectValues('memberOf', $this->memberOf);
        $writer->writeCollectionOfObjectValues('messages', $this->messages);
        $writer->writeStringValue('mobilePhone', $this->mobilePhone);
        $writer->writeStringValue('mySite', $this->mySite);
        $writer->writeCollectionOfObjectValues('oauth2PermissionGrants', $this->oauth2PermissionGrants);
        $writer->writeStringValue('officeLocation', $this->officeLocation);
        $writer->writeObjectValue('onenote', $this->onenote);
        $writer->writeCollectionOfObjectValues('onlineMeetings', $this->onlineMeetings);
        $writer->writeStringValue('onPremisesDistinguishedName', $this->onPremisesDistinguishedName);
        $writer->writeStringValue('onPremisesDomainName', $this->onPremisesDomainName);
        $writer->writeObjectValue('onPremisesExtensionAttributes', $this->onPremisesExtensionAttributes);
        $writer->writeStringValue('onPremisesImmutableId', $this->onPremisesImmutableId);
        $writer->writeDateTimeValue('onPremisesLastSyncDateTime', $this->onPremisesLastSyncDateTime);
        $writer->writeCollectionOfObjectValues('onPremisesProvisioningErrors', $this->onPremisesProvisioningErrors);
        $writer->writeStringValue('onPremisesSamAccountName', $this->onPremisesSamAccountName);
        $writer->writeStringValue('onPremisesSecurityIdentifier', $this->onPremisesSecurityIdentifier);
        $writer->writeBooleanValue('onPremisesSyncEnabled', $this->onPremisesSyncEnabled);
        $writer->writeStringValue('onPremisesUserPrincipalName', $this->onPremisesUserPrincipalName);
        $writer->writeCollectionOfPrimitiveValues('otherMails', $this->otherMails);
        $writer->writeObjectValue('outlook', $this->outlook);
        $writer->writeCollectionOfObjectValues('ownedDevices', $this->ownedDevices);
        $writer->writeCollectionOfObjectValues('ownedObjects', $this->ownedObjects);
        $writer->writeStringValue('passwordPolicies', $this->passwordPolicies);
        $writer->writeObjectValue('passwordProfile', $this->passwordProfile);
        $writer->writeCollectionOfPrimitiveValues('pastProjects', $this->pastProjects);
        $writer->writeCollectionOfObjectValues('people', $this->people);
        $writer->writeObjectValue('photo', $this->photo);
        $writer->writeCollectionOfObjectValues('photos', $this->photos);
        $writer->writeObjectValue('planner', $this->planner);
        $writer->writeStringValue('postalCode', $this->postalCode);
        $writer->writeStringValue('preferredDataLocation', $this->preferredDataLocation);
        $writer->writeStringValue('preferredLanguage', $this->preferredLanguage);
        $writer->writeStringValue('preferredName', $this->preferredName);
        $writer->writeObjectValue('presence', $this->presence);
        $writer->writeCollectionOfObjectValues('provisionedPlans', $this->provisionedPlans);
        $writer->writeCollectionOfPrimitiveValues('proxyAddresses', $this->proxyAddresses);
        $writer->writeCollectionOfObjectValues('registeredDevices', $this->registeredDevices);
        $writer->writeCollectionOfPrimitiveValues('responsibilities', $this->responsibilities);
        $writer->writeCollectionOfPrimitiveValues('schools', $this->schools);
        $writer->writeCollectionOfObjectValues('scopedRoleMemberOf', $this->scopedRoleMemberOf);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeBooleanValue('showInAddressList', $this->showInAddressList);
        $writer->writeDateTimeValue('signInSessionsValidFromDateTime', $this->signInSessionsValidFromDateTime);
        $writer->writeCollectionOfPrimitiveValues('skills', $this->skills);
        $writer->writeStringValue('state', $this->state);
        $writer->writeStringValue('streetAddress', $this->streetAddress);
        $writer->writeStringValue('surname', $this->surname);
        $writer->writeObjectValue('teamwork', $this->teamwork);
        $writer->writeObjectValue('todo', $this->todo);
        $writer->writeCollectionOfObjectValues('transitiveMemberOf', $this->transitiveMemberOf);
        $writer->writeStringValue('usageLocation', $this->usageLocation);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeStringValue('userType', $this->userType);
    }

    /**
     * Sets the aboutMe property value. A freeform text entry field for the user to describe themselves. Returned only on $select.
     *  @param string|null $value Value to set for the aboutMe property.
    */
    public function setAboutMe(?string $value ): void {
        $this->aboutMe = $value;
    }

    /**
     * Sets the accountEnabled property value. true if the account is enabled; otherwise, false. This property is required when a user is created. Supports $filter (eq, ne, not, and in).
     *  @param bool|null $value Value to set for the accountEnabled property.
    */
    public function setAccountEnabled(?bool $value ): void {
        $this->accountEnabled = $value;
    }

    /**
     * Sets the activities property value. The user's activities across devices. Read-only. Nullable.
     *  @param array<UserActivity>|null $value Value to set for the activities property.
    */
    public function setActivities(?array $value ): void {
        $this->activities = $value;
    }

    /**
     * Sets the ageGroup property value. Sets the age group of the user. Allowed values: null, Minor, NotAdult and Adult. Refer to the legal age group property definitions for further information. Supports $filter (eq, ne, not, and in).
     *  @param string|null $value Value to set for the ageGroup property.
    */
    public function setAgeGroup(?string $value ): void {
        $this->ageGroup = $value;
    }

    /**
     * Sets the agreementAcceptances property value. The user's terms of use acceptance statuses. Read-only. Nullable.
     *  @param array<AgreementAcceptance>|null $value Value to set for the agreementAcceptances property.
    */
    public function setAgreementAcceptances(?array $value ): void {
        $this->agreementAcceptances = $value;
    }

    /**
     * Sets the appRoleAssignments property value. Represents the app roles a user has been granted for an application. Supports $expand.
     *  @param array<AppRoleAssignment>|null $value Value to set for the appRoleAssignments property.
    */
    public function setAppRoleAssignments(?array $value ): void {
        $this->appRoleAssignments = $value;
    }

    /**
     * Sets the assignedLicenses property value. The licenses that are assigned to the user, including inherited (group-based) licenses. Not nullable. Supports $filter (eq, not, and counting empty collections).
     *  @param array<AssignedLicense>|null $value Value to set for the assignedLicenses property.
    */
    public function setAssignedLicenses(?array $value ): void {
        $this->assignedLicenses = $value;
    }

    /**
     * Sets the assignedPlans property value. The plans that are assigned to the user. Read-only. Not nullable.Supports $filter (eq and not).
     *  @param array<AssignedPlan>|null $value Value to set for the assignedPlans property.
    */
    public function setAssignedPlans(?array $value ): void {
        $this->assignedPlans = $value;
    }

    /**
     * Sets the authentication property value. The authentication methods that are supported for the user.
     *  @param Authentication|null $value Value to set for the authentication property.
    */
    public function setAuthentication(?Authentication $value ): void {
        $this->authentication = $value;
    }

    /**
     * Sets the birthday property value. The birthday of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Returned only on $select.
     *  @param DateTime|null $value Value to set for the birthday property.
    */
    public function setBirthday(?DateTime $value ): void {
        $this->birthday = $value;
    }

    /**
     * Sets the businessPhones property value. The telephone numbers for the user. Only one number can be set for this property. Read-only for users synced from on-premises directory. Supports $filter (eq, not, ge, le, startsWith).
     *  @param array<string>|null $value Value to set for the businessPhones property.
    */
    public function setBusinessPhones(?array $value ): void {
        $this->businessPhones = $value;
    }

    /**
     * Sets the calendar property value. The user's primary calendar. Read-only.
     *  @param Calendar|null $value Value to set for the calendar property.
    */
    public function setCalendar(?Calendar $value ): void {
        $this->calendar = $value;
    }

    /**
     * Sets the calendarGroups property value. The user's calendar groups. Read-only. Nullable.
     *  @param array<CalendarGroup>|null $value Value to set for the calendarGroups property.
    */
    public function setCalendarGroups(?array $value ): void {
        $this->calendarGroups = $value;
    }

    /**
     * Sets the calendars property value. The user's calendars. Read-only. Nullable.
     *  @param array<Calendar>|null $value Value to set for the calendars property.
    */
    public function setCalendars(?array $value ): void {
        $this->calendars = $value;
    }

    /**
     * Sets the calendarView property value. The calendar view for the calendar. Read-only. Nullable.
     *  @param array<Event>|null $value Value to set for the calendarView property.
    */
    public function setCalendarView(?array $value ): void {
        $this->calendarView = $value;
    }

    /**
     * Sets the chats property value. The chats property
     *  @param array<Chat>|null $value Value to set for the chats property.
    */
    public function setChats(?array $value ): void {
        $this->chats = $value;
    }

    /**
     * Sets the city property value. The city in which the user is located. Maximum length is 128 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value ): void {
        $this->city = $value;
    }

    /**
     * Sets the companyName property value. The company name which the user is associated. This property can be useful for describing the company that an external user comes from. The maximum length is 64 characters.Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value ): void {
        $this->companyName = $value;
    }

    /**
     * Sets the consentProvidedForMinor property value. Sets whether consent has been obtained for minors. Allowed values: null, Granted, Denied and NotRequired. Refer to the legal age group property definitions for further information. Supports $filter (eq, ne, not, and in).
     *  @param string|null $value Value to set for the consentProvidedForMinor property.
    */
    public function setConsentProvidedForMinor(?string $value ): void {
        $this->consentProvidedForMinor = $value;
    }

    /**
     * Sets the contactFolders property value. The user's contacts folders. Read-only. Nullable.
     *  @param array<ContactFolder>|null $value Value to set for the contactFolders property.
    */
    public function setContactFolders(?array $value ): void {
        $this->contactFolders = $value;
    }

    /**
     * Sets the contacts property value. The user's contacts. Read-only. Nullable.
     *  @param array<Contact>|null $value Value to set for the contacts property.
    */
    public function setContacts(?array $value ): void {
        $this->contacts = $value;
    }

    /**
     * Sets the country property value. The country/region in which the user is located; for example, US or UK. Maximum length is 128 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value ): void {
        $this->country = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time the user was created. The value cannot be modified and is automatically populated when the entity is created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. Property is nullable. A null value indicates that an accurate creation time couldn't be determined for the user. Read-only. Supports $filter (eq, ne, not , ge, le, in).
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the createdObjects property value. Directory objects that were created by the user. Read-only. Nullable.
     *  @param array<DirectoryObject>|null $value Value to set for the createdObjects property.
    */
    public function setCreatedObjects(?array $value ): void {
        $this->createdObjects = $value;
    }

    /**
     * Sets the creationType property value. Indicates whether the user account was created through one of the following methods:  As a regular school or work account (null). As an external account (Invitation). As a local account for an Azure Active Directory B2C tenant (LocalAccount). Through self-service sign-up by an internal user using email verification (EmailVerified). Through self-service sign-up by an external user signing up through a link that is part of a user flow (SelfServiceSignUp).  Read-only.Supports $filter (eq, ne, not, and in).
     *  @param string|null $value Value to set for the creationType property.
    */
    public function setCreationType(?string $value ): void {
        $this->creationType = $value;
    }

    /**
     * Sets the department property value. The name for the department in which the user works. Maximum length is 64 characters.Supports $filter (eq, ne, not , ge, le, in, and eq on null values).
     *  @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value ): void {
        $this->department = $value;
    }

    /**
     * Sets the deviceEnrollmentLimit property value. The limit on the maximum number of devices that the user is permitted to enroll. Allowed values are 5 or 1000.
     *  @param int|null $value Value to set for the deviceEnrollmentLimit property.
    */
    public function setDeviceEnrollmentLimit(?int $value ): void {
        $this->deviceEnrollmentLimit = $value;
    }

    /**
     * Sets the deviceManagementTroubleshootingEvents property value. The list of troubleshooting events for this user.
     *  @param array<DeviceManagementTroubleshootingEvent>|null $value Value to set for the deviceManagementTroubleshootingEvents property.
    */
    public function setDeviceManagementTroubleshootingEvents(?array $value ): void {
        $this->deviceManagementTroubleshootingEvents = $value;
    }

    /**
     * Sets the directReports property value. The users and contacts that report to the user. (The users and contacts that have their manager property set to this user.) Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the directReports property.
    */
    public function setDirectReports(?array $value ): void {
        $this->directReports = $value;
    }

    /**
     * Sets the displayName property value. The name displayed in the address book for the user. This value is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Maximum length is 256 characters. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values), $orderBy, and $search.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the drive property value. The user's OneDrive. Read-only.
     *  @param Drive|null $value Value to set for the drive property.
    */
    public function setDrive(?Drive $value ): void {
        $this->drive = $value;
    }

    /**
     * Sets the drives property value. A collection of drives available for this user. Read-only.
     *  @param array<Drive>|null $value Value to set for the drives property.
    */
    public function setDrives(?array $value ): void {
        $this->drives = $value;
    }

    /**
     * Sets the employeeHireDate property value. The date and time when the user was hired or will start work in case of a future hire. Supports $filter (eq, ne, not , ge, le, in).
     *  @param DateTime|null $value Value to set for the employeeHireDate property.
    */
    public function setEmployeeHireDate(?DateTime $value ): void {
        $this->employeeHireDate = $value;
    }

    /**
     * Sets the employeeId property value. The employee identifier assigned to the user by the organization. The maximum length is 16 characters.Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the employeeId property.
    */
    public function setEmployeeId(?string $value ): void {
        $this->employeeId = $value;
    }

    /**
     * Sets the employeeOrgData property value. Represents organization data (e.g. division and costCenter) associated with a user. Supports $filter (eq, ne, not , ge, le, in).
     *  @param EmployeeOrgData|null $value Value to set for the employeeOrgData property.
    */
    public function setEmployeeOrgData(?EmployeeOrgData $value ): void {
        $this->employeeOrgData = $value;
    }

    /**
     * Sets the employeeType property value. Captures enterprise worker type. For example, Employee, Contractor, Consultant, or Vendor. Supports $filter (eq, ne, not , ge, le, in, startsWith).
     *  @param string|null $value Value to set for the employeeType property.
    */
    public function setEmployeeType(?string $value ): void {
        $this->employeeType = $value;
    }

    /**
     * Sets the events property value. The user's events. Default is to show events under the Default Calendar. Read-only. Nullable.
     *  @param array<Event>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value ): void {
        $this->events = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the user. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the externalUserState property value. For an external user invited to the tenant using the invitation API, this property represents the invited user's invitation status. For invited users, the state can be PendingAcceptance or Accepted, or null for all other users. Supports $filter (eq, ne, not , in).
     *  @param string|null $value Value to set for the externalUserState property.
    */
    public function setExternalUserState(?string $value ): void {
        $this->externalUserState = $value;
    }

    /**
     * Sets the externalUserStateChangeDateTime property value. Shows the timestamp for the latest change to the externalUserState property. Supports $filter (eq, ne, not , in).
     *  @param DateTime|null $value Value to set for the externalUserStateChangeDateTime property.
    */
    public function setExternalUserStateChangeDateTime(?DateTime $value ): void {
        $this->externalUserStateChangeDateTime = $value;
    }

    /**
     * Sets the faxNumber property value. The fax number of the user. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the faxNumber property.
    */
    public function setFaxNumber(?string $value ): void {
        $this->faxNumber = $value;
    }

    /**
     * Sets the followedSites property value. The followedSites property
     *  @param array<Site>|null $value Value to set for the followedSites property.
    */
    public function setFollowedSites(?array $value ): void {
        $this->followedSites = $value;
    }

    /**
     * Sets the givenName property value. The given name (first name) of the user. Maximum length is 64 characters. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value ): void {
        $this->givenName = $value;
    }

    /**
     * Sets the hireDate property value. The hire date of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Returned only on $select.  Note: This property is specific to SharePoint Online. We recommend using the native employeeHireDate property to set and update hire date values using Microsoft Graph APIs.
     *  @param DateTime|null $value Value to set for the hireDate property.
    */
    public function setHireDate(?DateTime $value ): void {
        $this->hireDate = $value;
    }

    /**
     * Sets the identities property value. Represents the identities that can be used to sign in to this user account. An identity can be provided by Microsoft (also known as a local account), by organizations, or by social identity providers such as Facebook, Google, and Microsoft, and tied to a user account. May contain multiple items with the same signInType value. Supports $filter (eq) including on null values, only where the signInType is not userPrincipalName.
     *  @param array<ObjectIdentity>|null $value Value to set for the identities property.
    */
    public function setIdentities(?array $value ): void {
        $this->identities = $value;
    }

    /**
     * Sets the imAddresses property value. The instant message voice over IP (VOIP) session initiation protocol (SIP) addresses for the user. Read-only. Supports $filter (eq, not, ge, le, startsWith).
     *  @param array<string>|null $value Value to set for the imAddresses property.
    */
    public function setImAddresses(?array $value ): void {
        $this->imAddresses = $value;
    }

    /**
     * Sets the inferenceClassification property value. Relevance classification of the user's messages based on explicit designations which override inferred relevance or importance.
     *  @param InferenceClassification|null $value Value to set for the inferenceClassification property.
    */
    public function setInferenceClassification(?InferenceClassification $value ): void {
        $this->inferenceClassification = $value;
    }

    /**
     * Sets the insights property value. The insights property
     *  @param OfficeGraphInsights|null $value Value to set for the insights property.
    */
    public function setInsights(?OfficeGraphInsights $value ): void {
        $this->insights = $value;
    }

    /**
     * Sets the interests property value. A list for the user to describe their interests. Returned only on $select.
     *  @param array<string>|null $value Value to set for the interests property.
    */
    public function setInterests(?array $value ): void {
        $this->interests = $value;
    }

    /**
     * Sets the isResourceAccount property value. Do not use – reserved for future use.
     *  @param bool|null $value Value to set for the isResourceAccount property.
    */
    public function setIsResourceAccount(?bool $value ): void {
        $this->isResourceAccount = $value;
    }

    /**
     * Sets the jobTitle property value. The user's job title. Maximum length is 128 characters. Supports $filter (eq, ne, not , ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value ): void {
        $this->jobTitle = $value;
    }

    /**
     * Sets the joinedTeams property value. The Microsoft Teams teams that the user is a member of. Read-only. Nullable.
     *  @param array<Team>|null $value Value to set for the joinedTeams property.
    */
    public function setJoinedTeams(?array $value ): void {
        $this->joinedTeams = $value;
    }

    /**
     * Sets the lastPasswordChangeDateTime property value. The time when this Azure AD user last changed their password or when their password was created, , whichever date the latest action was performed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Returned only on $select.
     *  @param DateTime|null $value Value to set for the lastPasswordChangeDateTime property.
    */
    public function setLastPasswordChangeDateTime(?DateTime $value ): void {
        $this->lastPasswordChangeDateTime = $value;
    }

    /**
     * Sets the legalAgeGroupClassification property value. Used by enterprise applications to determine the legal age group of the user. This property is read-only and calculated based on ageGroup and consentProvidedForMinor properties. Allowed values: null, MinorWithOutParentalConsent, MinorWithParentalConsent, MinorNoParentalConsentRequired, NotAdult and Adult. Refer to the legal age group property definitions for further information. Returned only on $select.
     *  @param string|null $value Value to set for the legalAgeGroupClassification property.
    */
    public function setLegalAgeGroupClassification(?string $value ): void {
        $this->legalAgeGroupClassification = $value;
    }

    /**
     * Sets the licenseAssignmentStates property value. State of license assignments for this user. Read-only. Returned only on $select.
     *  @param array<LicenseAssignmentState>|null $value Value to set for the licenseAssignmentStates property.
    */
    public function setLicenseAssignmentStates(?array $value ): void {
        $this->licenseAssignmentStates = $value;
    }

    /**
     * Sets the licenseDetails property value. A collection of this user's license details. Read-only.
     *  @param array<LicenseDetails>|null $value Value to set for the licenseDetails property.
    */
    public function setLicenseDetails(?array $value ): void {
        $this->licenseDetails = $value;
    }

    /**
     * Sets the mail property value. The SMTP address for the user, for example, admin@contoso.com. Changes to this property will also update the user's proxyAddresses collection to include the value as an SMTP address. For Azure AD B2C accounts, this property can be updated up to only ten times with unique SMTP addresses. This property cannot contain accent characters.  Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith, and eq on null values).
     *  @param string|null $value Value to set for the mail property.
    */
    public function setMail(?string $value ): void {
        $this->mail = $value;
    }

    /**
     * Sets the mailboxSettings property value. Settings for the primary mailbox of the signed-in user. You can get or update settings for sending automatic replies to incoming messages, locale, and time zone. For more information, see User preferences for languages and regional formats. Returned only on $select.
     *  @param MailboxSettings|null $value Value to set for the mailboxSettings property.
    */
    public function setMailboxSettings(?MailboxSettings $value ): void {
        $this->mailboxSettings = $value;
    }

    /**
     * Sets the mailFolders property value. The user's mail folders. Read-only. Nullable.
     *  @param array<MailFolder>|null $value Value to set for the mailFolders property.
    */
    public function setMailFolders(?array $value ): void {
        $this->mailFolders = $value;
    }

    /**
     * Sets the mailNickname property value. The mail alias for the user. This property must be specified when a user is created. Maximum length is 64 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value ): void {
        $this->mailNickname = $value;
    }

    /**
     * Sets the managedAppRegistrations property value. Zero or more managed app registrations that belong to the user.
     *  @param array<ManagedAppRegistration>|null $value Value to set for the managedAppRegistrations property.
    */
    public function setManagedAppRegistrations(?array $value ): void {
        $this->managedAppRegistrations = $value;
    }

    /**
     * Sets the managedDevices property value. The managed devices associated with the user.
     *  @param array<ManagedDevice>|null $value Value to set for the managedDevices property.
    */
    public function setManagedDevices(?array $value ): void {
        $this->managedDevices = $value;
    }

    /**
     * Sets the manager property value. The user or contact that is this user's manager. Read-only. (HTTP Methods: GET, PUT, DELETE.). Supports $expand.
     *  @param DirectoryObject|null $value Value to set for the manager property.
    */
    public function setManager(?DirectoryObject $value ): void {
        $this->manager = $value;
    }

    /**
     * Sets the memberOf property value. The groups, directory roles and administrative units that the user is a member of. Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value ): void {
        $this->memberOf = $value;
    }

    /**
     * Sets the messages property value. The messages in a mailbox or folder. Read-only. Nullable.
     *  @param array<Message>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value ): void {
        $this->messages = $value;
    }

    /**
     * Sets the mobilePhone property value. The primary cellular telephone number for the user. Read-only for users synced from on-premises directory.  Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the mobilePhone property.
    */
    public function setMobilePhone(?string $value ): void {
        $this->mobilePhone = $value;
    }

    /**
     * Sets the mySite property value. The URL for the user's personal site. Returned only on $select.
     *  @param string|null $value Value to set for the mySite property.
    */
    public function setMySite(?string $value ): void {
        $this->mySite = $value;
    }

    /**
     * Sets the oauth2PermissionGrants property value. The oauth2PermissionGrants property
     *  @param array<OAuth2PermissionGrant>|null $value Value to set for the oauth2PermissionGrants property.
    */
    public function setOauth2PermissionGrants(?array $value ): void {
        $this->oauth2PermissionGrants = $value;
    }

    /**
     * Sets the officeLocation property value. The office location in the user's place of business. Maximum length is 128 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value ): void {
        $this->officeLocation = $value;
    }

    /**
     * Sets the onenote property value. The onenote property
     *  @param Onenote|null $value Value to set for the onenote property.
    */
    public function setOnenote(?Onenote $value ): void {
        $this->onenote = $value;
    }

    /**
     * Sets the onlineMeetings property value. The onlineMeetings property
     *  @param array<OnlineMeeting>|null $value Value to set for the onlineMeetings property.
    */
    public function setOnlineMeetings(?array $value ): void {
        $this->onlineMeetings = $value;
    }

    /**
     * Sets the onPremisesDistinguishedName property value. Contains the on-premises Active Directory distinguished name or DN. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only.
     *  @param string|null $value Value to set for the onPremisesDistinguishedName property.
    */
    public function setOnPremisesDistinguishedName(?string $value ): void {
        $this->onPremisesDistinguishedName = $value;
    }

    /**
     * Sets the onPremisesDomainName property value. Contains the on-premises domainFQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only.
     *  @param string|null $value Value to set for the onPremisesDomainName property.
    */
    public function setOnPremisesDomainName(?string $value ): void {
        $this->onPremisesDomainName = $value;
    }

    /**
     * Sets the onPremisesExtensionAttributes property value. Contains extensionAttributes1-15 for the user. The individual extension attributes are neither selectable nor filterable. For an onPremisesSyncEnabled user, the source of authority for this set of properties is the on-premises and is read-only. For a cloud-only user (where onPremisesSyncEnabled is false), these properties can be set during creation or update of a user object.  For a cloud-only user previously synced from on-premises Active Directory, these properties are read-only in Microsoft Graph but can be fully managed through the Exchange Admin Center or the Exchange Online V2 module in PowerShell. These extension attributes are also known as Exchange custom attributes 1-15. Returned only on $select.
     *  @param OnPremisesExtensionAttributes|null $value Value to set for the onPremisesExtensionAttributes property.
    */
    public function setOnPremisesExtensionAttributes(?OnPremisesExtensionAttributes $value ): void {
        $this->onPremisesExtensionAttributes = $value;
    }

    /**
     * Sets the onPremisesImmutableId property value. This property is used to associate an on-premises Active Directory user account to their Azure AD user object. This property must be specified when creating a new user account in the Graph if you are using a federated domain for the user's userPrincipalName (UPN) property. Note: The $ and _ characters cannot be used when specifying this property. Supports $filter (eq, ne, not, ge, le, in).
     *  @param string|null $value Value to set for the onPremisesImmutableId property.
    */
    public function setOnPremisesImmutableId(?string $value ): void {
        $this->onPremisesImmutableId = $value;
    }

    /**
     * Sets the onPremisesLastSyncDateTime property value. Indicates the last time at which the object was synced with the on-premises directory; for example: '2013-02-16T03:04:54Z'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter (eq, ne, not, ge, le, in).
     *  @param DateTime|null $value Value to set for the onPremisesLastSyncDateTime property.
    */
    public function setOnPremisesLastSyncDateTime(?DateTime $value ): void {
        $this->onPremisesLastSyncDateTime = $value;
    }

    /**
     * Sets the onPremisesProvisioningErrors property value. Errors when using Microsoft synchronization product during provisioning.  Supports $filter (eq, not, ge, le).
     *  @param array<OnPremisesProvisioningError>|null $value Value to set for the onPremisesProvisioningErrors property.
    */
    public function setOnPremisesProvisioningErrors(?array $value ): void {
        $this->onPremisesProvisioningErrors = $value;
    }

    /**
     * Sets the onPremisesSamAccountName property value. Contains the on-premises sAMAccountName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     *  @param string|null $value Value to set for the onPremisesSamAccountName property.
    */
    public function setOnPremisesSamAccountName(?string $value ): void {
        $this->onPremisesSamAccountName = $value;
    }

    /**
     * Sets the onPremisesSecurityIdentifier property value. Contains the on-premises security identifier (SID) for the user that was synchronized from on-premises to the cloud. Read-only. Supports $filter (eq including on null values).
     *  @param string|null $value Value to set for the onPremisesSecurityIdentifier property.
    */
    public function setOnPremisesSecurityIdentifier(?string $value ): void {
        $this->onPremisesSecurityIdentifier = $value;
    }

    /**
     * Sets the onPremisesSyncEnabled property value. true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     *  @param bool|null $value Value to set for the onPremisesSyncEnabled property.
    */
    public function setOnPremisesSyncEnabled(?bool $value ): void {
        $this->onPremisesSyncEnabled = $value;
    }

    /**
     * Sets the onPremisesUserPrincipalName property value. Contains the on-premises userPrincipalName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     *  @param string|null $value Value to set for the onPremisesUserPrincipalName property.
    */
    public function setOnPremisesUserPrincipalName(?string $value ): void {
        $this->onPremisesUserPrincipalName = $value;
    }

    /**
     * Sets the otherMails property value. A list of additional email addresses for the user; for example: ['bob@contoso.com', 'Robert@fabrikam.com'].NOTE: This property cannot contain accent characters.Supports $filter (eq, not, ge, le, in, startsWith, and counting empty collections).
     *  @param array<string>|null $value Value to set for the otherMails property.
    */
    public function setOtherMails(?array $value ): void {
        $this->otherMails = $value;
    }

    /**
     * Sets the outlook property value. Selective Outlook services available to the user. Read-only. Nullable.
     *  @param OutlookUser|null $value Value to set for the outlook property.
    */
    public function setOutlook(?OutlookUser $value ): void {
        $this->outlook = $value;
    }

    /**
     * Sets the ownedDevices property value. Devices that are owned by the user. Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the ownedDevices property.
    */
    public function setOwnedDevices(?array $value ): void {
        $this->ownedDevices = $value;
    }

    /**
     * Sets the ownedObjects property value. Directory objects that are owned by the user. Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the ownedObjects property.
    */
    public function setOwnedObjects(?array $value ): void {
        $this->ownedObjects = $value;
    }

    /**
     * Sets the passwordPolicies property value. Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two may be specified together; for example: DisablePasswordExpiration, DisableStrongPassword. For more information on the default password policies, see Azure AD pasword policies. Supports $filter (ne, not, and eq on null values).
     *  @param string|null $value Value to set for the passwordPolicies property.
    */
    public function setPasswordPolicies(?string $value ): void {
        $this->passwordPolicies = $value;
    }

    /**
     * Sets the passwordProfile property value. Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required. NOTE: For Azure B2C tenants, the forceChangePasswordNextSignIn property should be set to false and instead use custom policies and user flows to force password reset at first logon. See Force password reset at first logon. Supports $filter (eq, ne, not, in, and eq on null values).
     *  @param PasswordProfile|null $value Value to set for the passwordProfile property.
    */
    public function setPasswordProfile(?PasswordProfile $value ): void {
        $this->passwordProfile = $value;
    }

    /**
     * Sets the pastProjects property value. A list for the user to enumerate their past projects. Returned only on $select.
     *  @param array<string>|null $value Value to set for the pastProjects property.
    */
    public function setPastProjects(?array $value ): void {
        $this->pastProjects = $value;
    }

    /**
     * Sets the people property value. Read-only. The most relevant people to the user. The collection is ordered by their relevance to the user, which is determined by the user's communication, collaboration and business relationships. A person is an aggregation of information from across mail, contacts and social networks.
     *  @param array<Person>|null $value Value to set for the people property.
    */
    public function setPeople(?array $value ): void {
        $this->people = $value;
    }

    /**
     * Sets the photo property value. The user's profile photo. Read-only.
     *  @param ProfilePhoto|null $value Value to set for the photo property.
    */
    public function setPhoto(?ProfilePhoto $value ): void {
        $this->photo = $value;
    }

    /**
     * Sets the photos property value. The photos property
     *  @param array<ProfilePhoto>|null $value Value to set for the photos property.
    */
    public function setPhotos(?array $value ): void {
        $this->photos = $value;
    }

    /**
     * Sets the planner property value. Selective Planner services available to the user. Read-only. Nullable.
     *  @param PlannerUser|null $value Value to set for the planner property.
    */
    public function setPlanner(?PlannerUser $value ): void {
        $this->planner = $value;
    }

    /**
     * Sets the postalCode property value. The postal code for the user's postal address. The postal code is specific to the user's country/region. In the United States of America, this attribute contains the ZIP code. Maximum length is 40 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value ): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the preferredDataLocation property value. The preferred data location for the user. For more information, see OneDrive Online Multi-Geo.
     *  @param string|null $value Value to set for the preferredDataLocation property.
    */
    public function setPreferredDataLocation(?string $value ): void {
        $this->preferredDataLocation = $value;
    }

    /**
     * Sets the preferredLanguage property value. The preferred language for the user. Should follow ISO 639-1 Code; for example en-US. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the preferredLanguage property.
    */
    public function setPreferredLanguage(?string $value ): void {
        $this->preferredLanguage = $value;
    }

    /**
     * Sets the preferredName property value. The preferred name for the user. Returned only on $select.
     *  @param string|null $value Value to set for the preferredName property.
    */
    public function setPreferredName(?string $value ): void {
        $this->preferredName = $value;
    }

    /**
     * Sets the presence property value. The presence property
     *  @param Presence|null $value Value to set for the presence property.
    */
    public function setPresence(?Presence $value ): void {
        $this->presence = $value;
    }

    /**
     * Sets the provisionedPlans property value. The plans that are provisioned for the user. Read-only. Not nullable. Supports $filter (eq, not, ge, le).
     *  @param array<ProvisionedPlan>|null $value Value to set for the provisionedPlans property.
    */
    public function setProvisionedPlans(?array $value ): void {
        $this->provisionedPlans = $value;
    }

    /**
     * Sets the proxyAddresses property value. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. Changes to the mail property will also update this collection to include the value as an SMTP address. For more information, see mail and proxyAddresses properties. The proxy address prefixed with SMTP (capitalized) is the primary proxy address while those prefixed with smtp are the secondary proxy addresses. For Azure AD B2C accounts, this property has a limit of ten unique addresses. Read-only in Microsoft Graph; you can update this property only through the Microsoft 365 admin center. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, and counting empty collections).
     *  @param array<string>|null $value Value to set for the proxyAddresses property.
    */
    public function setProxyAddresses(?array $value ): void {
        $this->proxyAddresses = $value;
    }

    /**
     * Sets the registeredDevices property value. Devices that are registered for the user. Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the registeredDevices property.
    */
    public function setRegisteredDevices(?array $value ): void {
        $this->registeredDevices = $value;
    }

    /**
     * Sets the responsibilities property value. A list for the user to enumerate their responsibilities. Returned only on $select.
     *  @param array<string>|null $value Value to set for the responsibilities property.
    */
    public function setResponsibilities(?array $value ): void {
        $this->responsibilities = $value;
    }

    /**
     * Sets the schools property value. A list for the user to enumerate the schools they have attended. Returned only on $select.
     *  @param array<string>|null $value Value to set for the schools property.
    */
    public function setSchools(?array $value ): void {
        $this->schools = $value;
    }

    /**
     * Sets the scopedRoleMemberOf property value. The scoped-role administrative unit memberships for this user. Read-only. Nullable.
     *  @param array<ScopedRoleMembership>|null $value Value to set for the scopedRoleMemberOf property.
    */
    public function setScopedRoleMemberOf(?array $value ): void {
        $this->scopedRoleMemberOf = $value;
    }

    /**
     * Sets the settings property value. The settings property
     *  @param UserSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?UserSettings $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the showInAddressList property value. Do not use in Microsoft Graph. Manage this property through the Microsoft 365 admin center instead. Represents whether the user should be included in the Outlook global address list. See Known issue.
     *  @param bool|null $value Value to set for the showInAddressList property.
    */
    public function setShowInAddressList(?bool $value ): void {
        $this->showInAddressList = $value;
    }

    /**
     * Sets the signInSessionsValidFromDateTime property value. Any refresh tokens or sessions tokens (session cookies) issued before this time are invalid, and applications will get an error when using an invalid refresh or sessions token to acquire a delegated access token (to access APIs such as Microsoft Graph).  If this happens, the application will need to acquire a new refresh token by making a request to the authorize endpoint. Read-only. Use revokeSignInSessions to reset.
     *  @param DateTime|null $value Value to set for the signInSessionsValidFromDateTime property.
    */
    public function setSignInSessionsValidFromDateTime(?DateTime $value ): void {
        $this->signInSessionsValidFromDateTime = $value;
    }

    /**
     * Sets the skills property value. A list for the user to enumerate their skills. Returned only on $select.
     *  @param array<string>|null $value Value to set for the skills property.
    */
    public function setSkills(?array $value ): void {
        $this->skills = $value;
    }

    /**
     * Sets the state property value. The state or province in the user's address. Maximum length is 128 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the streetAddress property value. The street address of the user's place of business. Maximum length is 1024 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the streetAddress property.
    */
    public function setStreetAddress(?string $value ): void {
        $this->streetAddress = $value;
    }

    /**
     * Sets the surname property value. The user's surname (family name or last name). Maximum length is 64 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value ): void {
        $this->surname = $value;
    }

    /**
     * Sets the teamwork property value. A container for Microsoft Teams features available for the user. Read-only. Nullable.
     *  @param UserTeamwork|null $value Value to set for the teamwork property.
    */
    public function setTeamwork(?UserTeamwork $value ): void {
        $this->teamwork = $value;
    }

    /**
     * Sets the todo property value. Represents the To Do services available to a user.
     *  @param Todo|null $value Value to set for the todo property.
    */
    public function setTodo(?Todo $value ): void {
        $this->todo = $value;
    }

    /**
     * Sets the transitiveMemberOf property value. The transitiveMemberOf property
     *  @param array<DirectoryObject>|null $value Value to set for the transitiveMemberOf property.
    */
    public function setTransitiveMemberOf(?array $value ): void {
        $this->transitiveMemberOf = $value;
    }

    /**
     * Sets the usageLocation property value. A two letter country code (ISO standard 3166). Required for users that will be assigned licenses due to legal requirement to check for availability of services in countries.  Examples include: US, JP, and GB. Not nullable. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the usageLocation property.
    */
    public function setUsageLocation(?string $value ): void {
        $this->usageLocation = $value;
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant's collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of organization.NOTE: This property cannot contain accent characters. Only the following characters are allowed A - Z, a - z, 0 - 9, ' . - _ ! # ^ ~. For the complete list of allowed characters, see username policies. Supports $filter (eq, ne, not, ge, le, in, startsWith, endsWith) and $orderBy.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

    /**
     * Sets the userType property value. A String value that can be used to classify user types in your directory, such as Member and Guest. Supports $filter (eq, ne, not, in, and eq on null values). NOTE: For more information about the permissions for member and guest users, see What are the default user permissions in Azure Active Directory?
     *  @param string|null $value Value to set for the userType property.
    */
    public function setUserType(?string $value ): void {
        $this->userType = $value;
    }

}
