<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Group extends DirectoryObject 
{
    /** @var array<DirectoryObject>|null $acceptedSenders The list of users or groups that are allowed to create post's or calendar events in this group. If this list is non-empty then only users or groups listed here are allowed to post. */
    private ?array $acceptedSenders = null;
    
    /** @var bool|null $allowExternalSenders Indicates if people external to the organization can send messages to the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). */
    private ?bool $allowExternalSenders = null;
    
    /** @var array<AppRoleAssignment>|null $appRoleAssignments Represents the app roles a group has been granted for an application. Supports $expand. */
    private ?array $appRoleAssignments = null;
    
    /** @var array<AssignedLabel>|null $assignedLabels The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select. Read-only. */
    private ?array $assignedLabels = null;
    
    /** @var array<AssignedLicense>|null $assignedLicenses The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq).Read-only. */
    private ?array $assignedLicenses = null;
    
    /** @var bool|null $autoSubscribeNewMembers Indicates if new members added to the group will be auto-subscribed to receive email notifications. You can set this property in a PATCH request for the group; do not set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). */
    private ?bool $autoSubscribeNewMembers = null;
    
    /** @var Calendar|null $calendar The group's calendar. Read-only. */
    private ?Calendar $calendar = null;
    
    /** @var array<Event>|null $calendarView The calendar view for the calendar. Read-only. */
    private ?array $calendarView = null;
    
    /** @var string|null $classification Describes a classification for the group (such as low, medium or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith). */
    private ?string $classification = null;
    
    /** @var array<Conversation>|null $conversations The group's conversations. */
    private ?array $conversations = null;
    
    /** @var DateTime|null $createdDateTime Timestamp of when the group was created. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only. */
    private ?DateTime $createdDateTime = null;
    
    /** @var DirectoryObject|null $createdOnBehalfOf The user (or application) that created the group. NOTE: This is not set if the user is an administrator. Read-only. */
    private ?DirectoryObject $createdOnBehalfOf = null;
    
    /** @var string|null $description An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search. */
    private ?string $description = null;
    
    /** @var string|null $displayName The display name for the group. This property is required when a group is created and cannot be cleared during updates. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy. */
    private ?string $displayName = null;
    
    /** @var Drive|null $drive The group's default drive. Read-only. */
    private ?Drive $drive = null;
    
    /** @var array<Drive>|null $drives The group's drives. Read-only. */
    private ?array $drives = null;
    
    /** @var array<Event>|null $events The group's calendar events. */
    private ?array $events = null;
    
    /** @var DateTime|null $expirationDateTime Timestamp of when the group is set to expire. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only. */
    private ?DateTime $expirationDateTime = null;
    
    /** @var array<Extension>|null $extensions The collection of open extensions defined for the group. Read-only. Nullable. */
    private ?array $extensions = null;
    
    /** @var array<GroupLifecyclePolicy>|null $groupLifecyclePolicies The collection of lifecycle policies for this group. Read-only. Nullable. */
    private ?array $groupLifecyclePolicies = null;
    
    /** @var array<string>|null $groupTypes Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it's either a security group or distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not). */
    private ?array $groupTypes = null;
    
    /** @var bool|null $hasMembersWithLicenseErrors Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true). See an example. Supports $filter (eq). */
    private ?bool $hasMembersWithLicenseErrors = null;
    
    /** @var bool|null $hideFromAddressLists True if the group is not displayed in certain parts of the Outlook UI: the Address Book, address lists for selecting message recipients, and the Browse Groups dialog for searching groups; otherwise, false. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). */
    private ?bool $hideFromAddressLists = null;
    
    /** @var bool|null $hideFromOutlookClients True if the group is not displayed in Outlook clients, such as Outlook for Windows and Outlook on the web; otherwise, false. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). */
    private ?bool $hideFromOutlookClients = null;
    
    /** @var bool|null $isArchived When a group is associated with a team this property deternunes whether the team is in read-only mode. */
    private ?bool $isArchived = null;
    
    /** @var bool|null $isAssignableToRole Indicates whether this group can be assigned to an Azure Active Directory role or not. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true and the group cannot be a dynamic group (that is, groupTypes cannot contain DynamicMembership). Only callers in Global administrator and Privileged role administrator roles can set this property. The caller must be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Azure AD role assignmentsReturned by default. Supports $filter (eq, ne, not). */
    private ?bool $isAssignableToRole = null;
    
    /** @var bool|null $isSubscribedByMail Indicates whether the signed-in user is subscribed to receive email conversations. Default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). */
    private ?bool $isSubscribedByMail = null;
    
    /** @var LicenseProcessingState|null $licenseProcessingState Indicates status of the group license assignment to all members of the group. Default value is false. Read-only. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete.Returned only on $select. Read-only. */
    private ?LicenseProcessingState $licenseProcessingState = null;
    
    /** @var string|null $mail The SMTP address for the group, for example, 'serviceadmins@contoso.onmicrosoft.com'. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
    private ?string $mail = null;
    
    /** @var bool|null $mailEnabled Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not). */
    private ?bool $mailEnabled = null;
    
    /** @var string|null $mailNickname The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following: @ () / [] ' ; : . <> , SPACE. Required. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
    private ?string $mailNickname = null;
    
    /** @var array<DirectoryObject>|null $memberOf Groups that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand. */
    private ?array $memberOf = null;
    
    /** @var array<DirectoryObject>|null $members The members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=members($select=id,userPrincipalName,displayName). */
    private ?array $members = null;
    
    /** @var string|null $membershipRule The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith). */
    private ?string $membershipRule = null;
    
    /** @var string|null $membershipRuleProcessingState Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in). */
    private ?string $membershipRuleProcessingState = null;
    
    /** @var array<DirectoryObject>|null $membersWithLicenseErrors A list of group members with license errors from this group-based license assignment. Read-only. */
    private ?array $membersWithLicenseErrors = null;
    
    /** @var Onenote|null $onenote Read-only. */
    private ?Onenote $onenote = null;
    
    /** @var string|null $onPremisesDomainName Contains the on-premises domain FQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only. */
    private ?string $onPremisesDomainName = null;
    
    /** @var DateTime|null $onPremisesLastSyncDateTime Indicates the last time at which the group was synced with the on-premises directory.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in). */
    private ?DateTime $onPremisesLastSyncDateTime = null;
    
    /** @var string|null $onPremisesNetBiosName Contains the on-premises netBios name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only. */
    private ?string $onPremisesNetBiosName = null;
    
    /** @var array<OnPremisesProvisioningError>|null $onPremisesProvisioningErrors Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not). */
    private ?array $onPremisesProvisioningErrors = null;
    
    /** @var string|null $onPremisesSamAccountName Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only. */
    private ?string $onPremisesSamAccountName = null;
    
    /** @var string|null $onPremisesSecurityIdentifier Contains the on-premises security identifier (SID) for the group that was synchronized from on-premises to the cloud. Returned by default. Supports $filter (eq including on null values). Read-only. */
    private ?string $onPremisesSecurityIdentifier = null;
    
    /** @var bool|null $onPremisesSyncEnabled true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values). */
    private ?bool $onPremisesSyncEnabled = null;
    
    /** @var array<DirectoryObject>|null $owners The owners of the group. Limited to 100 owners. Nullable. If this property is not specified when creating a Microsoft 365 group, the calling user is automatically assigned as the group owner. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=owners($select=id,userPrincipalName,displayName). */
    private ?array $owners = null;
    
    /** @var array<ResourceSpecificPermissionGrant>|null $permissionGrants The permission that has been granted for a group to a specific application. Supports $expand. */
    private ?array $permissionGrants = null;
    
    /** @var ProfilePhoto|null $photo The group's profile photo */
    private ?ProfilePhoto $photo = null;
    
    /** @var array<ProfilePhoto>|null $photos The profile photos owned by the group. Read-only. Nullable. */
    private ?array $photos = null;
    
    /** @var PlannerGroup|null $planner Entry-point to Planner resource that might exist for a Unified Group. */
    private ?PlannerGroup $planner = null;
    
    /** @var string|null $preferredDataLocation The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator's preferred data location. To set this property, the calling user must be assigned one of the following Azure AD roles:  Global Administrator  User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default. */
    private ?string $preferredDataLocation = null;
    
    /** @var string|null $preferredLanguage The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values). */
    private ?string $preferredLanguage = null;
    
    /** @var array<string>|null $proxyAddresses Email addresses for the group that direct to the same group mailbox. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. The any operator is required to filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith). */
    private ?array $proxyAddresses = null;
    
    /** @var array<DirectoryObject>|null $rejectedSenders The list of users or groups that are not allowed to create posts or calendar events in this group. Nullable */
    private ?array $rejectedSenders = null;
    
    /** @var DateTime|null $renewedDateTime Timestamp of when the group was last renewed. This cannot be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only. */
    private ?DateTime $renewedDateTime = null;
    
    /** @var bool|null $securityEnabled Specifies whether the group is a security group. Required. Returned by default. Supports $filter (eq, ne, not, in). */
    private ?bool $securityEnabled = null;
    
    /** @var string|null $securityIdentifier Security identifier of the group, used in Windows scenarios. Returned by default. */
    private ?string $securityIdentifier = null;
    
    /** @var array<GroupSetting>|null $settings Settings that can govern this group's behavior, like whether members can invite guest users to the group. Nullable. */
    private ?array $settings = null;
    
    /** @var array<Site>|null $sites The list of SharePoint sites in this group. Access the default site with /sites/root. */
    private ?array $sites = null;
    
    /** @var Team|null $team The team property */
    private ?Team $team = null;
    
    /** @var string|null $theme Specifies a Microsoft 365 group's color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange or Red. Returned by default. */
    private ?string $theme = null;
    
    /** @var array<ConversationThread>|null $threads The group's conversation threads. Nullable. */
    private ?array $threads = null;
    
    /** @var array<DirectoryObject>|null $transitiveMemberOf The transitiveMemberOf property */
    private ?array $transitiveMemberOf = null;
    
    /** @var array<DirectoryObject>|null $transitiveMembers The transitiveMembers property */
    private ?array $transitiveMembers = null;
    
    /** @var int|null $unseenCount Count of conversations that have received new posts since the signed-in user last visited the group. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). */
    private ?int $unseenCount = null;
    
    /** @var string|null $visibility Specifies the group join policy and group content visibility for groups. Possible values are: Private, Public, or Hiddenmembership. Hiddenmembership can be set only for Microsoft 365 groups, when the groups are created. It can't be updated later. Other values of visibility can be updated after group creation. If visibility value is not specified during group creation on Microsoft Graph, a security group is created as Private by default and Microsoft 365 group is Public. Groups assignable to roles are always Private. See group visibility options to learn more. Returned by default. Nullable. */
    private ?string $visibility = null;
    
    /**
     * Instantiates a new group and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Group
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Group {
        return new Group();
    }

    /**
     * Gets the acceptedSenders property value. The list of users or groups that are allowed to create post's or calendar events in this group. If this list is non-empty then only users or groups listed here are allowed to post.
     * @return array<DirectoryObject>|null
    */
    public function getAcceptedSenders(): ?array {
        return $this->acceptedSenders;
    }

    /**
     * Gets the allowExternalSenders property value. Indicates if people external to the organization can send messages to the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getAllowExternalSenders(): ?bool {
        return $this->allowExternalSenders;
    }

    /**
     * Gets the appRoleAssignments property value. Represents the app roles a group has been granted for an application. Supports $expand.
     * @return array<AppRoleAssignment>|null
    */
    public function getAppRoleAssignments(): ?array {
        return $this->appRoleAssignments;
    }

    /**
     * Gets the assignedLabels property value. The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select. Read-only.
     * @return array<AssignedLabel>|null
    */
    public function getAssignedLabels(): ?array {
        return $this->assignedLabels;
    }

    /**
     * Gets the assignedLicenses property value. The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq).Read-only.
     * @return array<AssignedLicense>|null
    */
    public function getAssignedLicenses(): ?array {
        return $this->assignedLicenses;
    }

    /**
     * Gets the autoSubscribeNewMembers property value. Indicates if new members added to the group will be auto-subscribed to receive email notifications. You can set this property in a PATCH request for the group; do not set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getAutoSubscribeNewMembers(): ?bool {
        return $this->autoSubscribeNewMembers;
    }

    /**
     * Gets the calendar property value. The group's calendar. Read-only.
     * @return Calendar|null
    */
    public function getCalendar(): ?Calendar {
        return $this->calendar;
    }

    /**
     * Gets the calendarView property value. The calendar view for the calendar. Read-only.
     * @return array<Event>|null
    */
    public function getCalendarView(): ?array {
        return $this->calendarView;
    }

    /**
     * Gets the classification property value. Describes a classification for the group (such as low, medium or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     * @return string|null
    */
    public function getClassification(): ?string {
        return $this->classification;
    }

    /**
     * Gets the conversations property value. The group's conversations.
     * @return array<Conversation>|null
    */
    public function getConversations(): ?array {
        return $this->conversations;
    }

    /**
     * Gets the createdDateTime property value. Timestamp of when the group was created. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the createdOnBehalfOf property value. The user (or application) that created the group. NOTE: This is not set if the user is an administrator. Read-only.
     * @return DirectoryObject|null
    */
    public function getCreatedOnBehalfOf(): ?DirectoryObject {
        return $this->createdOnBehalfOf;
    }

    /**
     * Gets the description property value. An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name for the group. This property is required when a group is created and cannot be cleared during updates. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the drive property value. The group's default drive. Read-only.
     * @return Drive|null
    */
    public function getDrive(): ?Drive {
        return $this->drive;
    }

    /**
     * Gets the drives property value. The group's drives. Read-only.
     * @return array<Drive>|null
    */
    public function getDrives(): ?array {
        return $this->drives;
    }

    /**
     * Gets the events property value. The group's calendar events.
     * @return array<Event>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * Gets the expirationDateTime property value. Timestamp of when the group is set to expire. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the group. Read-only. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'acceptedSenders' => function (self $o, ParseNode $n) { $o->setAcceptedSenders($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'allowExternalSenders' => function (self $o, ParseNode $n) { $o->setAllowExternalSenders($n->getBooleanValue()); },
            'appRoleAssignments' => function (self $o, ParseNode $n) { $o->setAppRoleAssignments($n->getCollectionOfObjectValues(AppRoleAssignment::class)); },
            'assignedLabels' => function (self $o, ParseNode $n) { $o->setAssignedLabels($n->getCollectionOfObjectValues(AssignedLabel::class)); },
            'assignedLicenses' => function (self $o, ParseNode $n) { $o->setAssignedLicenses($n->getCollectionOfObjectValues(AssignedLicense::class)); },
            'autoSubscribeNewMembers' => function (self $o, ParseNode $n) { $o->setAutoSubscribeNewMembers($n->getBooleanValue()); },
            'calendar' => function (self $o, ParseNode $n) { $o->setCalendar($n->getObjectValue(Calendar::class)); },
            'calendarView' => function (self $o, ParseNode $n) { $o->setCalendarView($n->getCollectionOfObjectValues(Event::class)); },
            'classification' => function (self $o, ParseNode $n) { $o->setClassification($n->getStringValue()); },
            'conversations' => function (self $o, ParseNode $n) { $o->setConversations($n->getCollectionOfObjectValues(Conversation::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'createdOnBehalfOf' => function (self $o, ParseNode $n) { $o->setCreatedOnBehalfOf($n->getObjectValue(DirectoryObject::class)); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'drive' => function (self $o, ParseNode $n) { $o->setDrive($n->getObjectValue(Drive::class)); },
            'drives' => function (self $o, ParseNode $n) { $o->setDrives($n->getCollectionOfObjectValues(Drive::class)); },
            'events' => function (self $o, ParseNode $n) { $o->setEvents($n->getCollectionOfObjectValues(Event::class)); },
            'expirationDateTime' => function (self $o, ParseNode $n) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'extensions' => function (self $o, ParseNode $n) { $o->setExtensions($n->getCollectionOfObjectValues(Extension::class)); },
            'groupLifecyclePolicies' => function (self $o, ParseNode $n) { $o->setGroupLifecyclePolicies($n->getCollectionOfObjectValues(GroupLifecyclePolicy::class)); },
            'groupTypes' => function (self $o, ParseNode $n) { $o->setGroupTypes($n->getCollectionOfPrimitiveValues()); },
            'hasMembersWithLicenseErrors' => function (self $o, ParseNode $n) { $o->setHasMembersWithLicenseErrors($n->getBooleanValue()); },
            'hideFromAddressLists' => function (self $o, ParseNode $n) { $o->setHideFromAddressLists($n->getBooleanValue()); },
            'hideFromOutlookClients' => function (self $o, ParseNode $n) { $o->setHideFromOutlookClients($n->getBooleanValue()); },
            'isArchived' => function (self $o, ParseNode $n) { $o->setIsArchived($n->getBooleanValue()); },
            'isAssignableToRole' => function (self $o, ParseNode $n) { $o->setIsAssignableToRole($n->getBooleanValue()); },
            'isSubscribedByMail' => function (self $o, ParseNode $n) { $o->setIsSubscribedByMail($n->getBooleanValue()); },
            'licenseProcessingState' => function (self $o, ParseNode $n) { $o->setLicenseProcessingState($n->getObjectValue(LicenseProcessingState::class)); },
            'mail' => function (self $o, ParseNode $n) { $o->setMail($n->getStringValue()); },
            'mailEnabled' => function (self $o, ParseNode $n) { $o->setMailEnabled($n->getBooleanValue()); },
            'mailNickname' => function (self $o, ParseNode $n) { $o->setMailNickname($n->getStringValue()); },
            'memberOf' => function (self $o, ParseNode $n) { $o->setMemberOf($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'members' => function (self $o, ParseNode $n) { $o->setMembers($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'membershipRule' => function (self $o, ParseNode $n) { $o->setMembershipRule($n->getStringValue()); },
            'membershipRuleProcessingState' => function (self $o, ParseNode $n) { $o->setMembershipRuleProcessingState($n->getStringValue()); },
            'membersWithLicenseErrors' => function (self $o, ParseNode $n) { $o->setMembersWithLicenseErrors($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'onenote' => function (self $o, ParseNode $n) { $o->setOnenote($n->getObjectValue(Onenote::class)); },
            'onPremisesDomainName' => function (self $o, ParseNode $n) { $o->setOnPremisesDomainName($n->getStringValue()); },
            'onPremisesLastSyncDateTime' => function (self $o, ParseNode $n) { $o->setOnPremisesLastSyncDateTime($n->getDateTimeValue()); },
            'onPremisesNetBiosName' => function (self $o, ParseNode $n) { $o->setOnPremisesNetBiosName($n->getStringValue()); },
            'onPremisesProvisioningErrors' => function (self $o, ParseNode $n) { $o->setOnPremisesProvisioningErrors($n->getCollectionOfObjectValues(OnPremisesProvisioningError::class)); },
            'onPremisesSamAccountName' => function (self $o, ParseNode $n) { $o->setOnPremisesSamAccountName($n->getStringValue()); },
            'onPremisesSecurityIdentifier' => function (self $o, ParseNode $n) { $o->setOnPremisesSecurityIdentifier($n->getStringValue()); },
            'onPremisesSyncEnabled' => function (self $o, ParseNode $n) { $o->setOnPremisesSyncEnabled($n->getBooleanValue()); },
            'owners' => function (self $o, ParseNode $n) { $o->setOwners($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'permissionGrants' => function (self $o, ParseNode $n) { $o->setPermissionGrants($n->getCollectionOfObjectValues(ResourceSpecificPermissionGrant::class)); },
            'photo' => function (self $o, ParseNode $n) { $o->setPhoto($n->getObjectValue(ProfilePhoto::class)); },
            'photos' => function (self $o, ParseNode $n) { $o->setPhotos($n->getCollectionOfObjectValues(ProfilePhoto::class)); },
            'planner' => function (self $o, ParseNode $n) { $o->setPlanner($n->getObjectValue(PlannerGroup::class)); },
            'preferredDataLocation' => function (self $o, ParseNode $n) { $o->setPreferredDataLocation($n->getStringValue()); },
            'preferredLanguage' => function (self $o, ParseNode $n) { $o->setPreferredLanguage($n->getStringValue()); },
            'proxyAddresses' => function (self $o, ParseNode $n) { $o->setProxyAddresses($n->getCollectionOfPrimitiveValues()); },
            'rejectedSenders' => function (self $o, ParseNode $n) { $o->setRejectedSenders($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'renewedDateTime' => function (self $o, ParseNode $n) { $o->setRenewedDateTime($n->getDateTimeValue()); },
            'securityEnabled' => function (self $o, ParseNode $n) { $o->setSecurityEnabled($n->getBooleanValue()); },
            'securityIdentifier' => function (self $o, ParseNode $n) { $o->setSecurityIdentifier($n->getStringValue()); },
            'settings' => function (self $o, ParseNode $n) { $o->setSettings($n->getCollectionOfObjectValues(GroupSetting::class)); },
            'sites' => function (self $o, ParseNode $n) { $o->setSites($n->getCollectionOfObjectValues(Site::class)); },
            'team' => function (self $o, ParseNode $n) { $o->setTeam($n->getObjectValue(Team::class)); },
            'theme' => function (self $o, ParseNode $n) { $o->setTheme($n->getStringValue()); },
            'threads' => function (self $o, ParseNode $n) { $o->setThreads($n->getCollectionOfObjectValues(ConversationThread::class)); },
            'transitiveMemberOf' => function (self $o, ParseNode $n) { $o->setTransitiveMemberOf($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'transitiveMembers' => function (self $o, ParseNode $n) { $o->setTransitiveMembers($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'unseenCount' => function (self $o, ParseNode $n) { $o->setUnseenCount($n->getIntegerValue()); },
            'visibility' => function (self $o, ParseNode $n) { $o->setVisibility($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the groupLifecyclePolicies property value. The collection of lifecycle policies for this group. Read-only. Nullable.
     * @return array<GroupLifecyclePolicy>|null
    */
    public function getGroupLifecyclePolicies(): ?array {
        return $this->groupLifecyclePolicies;
    }

    /**
     * Gets the groupTypes property value. Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it's either a security group or distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not).
     * @return array<string>|null
    */
    public function getGroupTypes(): ?array {
        return $this->groupTypes;
    }

    /**
     * Gets the hasMembersWithLicenseErrors property value. Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true). See an example. Supports $filter (eq).
     * @return bool|null
    */
    public function getHasMembersWithLicenseErrors(): ?bool {
        return $this->hasMembersWithLicenseErrors;
    }

    /**
     * Gets the hideFromAddressLists property value. True if the group is not displayed in certain parts of the Outlook UI: the Address Book, address lists for selecting message recipients, and the Browse Groups dialog for searching groups; otherwise, false. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getHideFromAddressLists(): ?bool {
        return $this->hideFromAddressLists;
    }

    /**
     * Gets the hideFromOutlookClients property value. True if the group is not displayed in Outlook clients, such as Outlook for Windows and Outlook on the web; otherwise, false. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getHideFromOutlookClients(): ?bool {
        return $this->hideFromOutlookClients;
    }

    /**
     * Gets the isArchived property value. When a group is associated with a team this property deternunes whether the team is in read-only mode.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        return $this->isArchived;
    }

    /**
     * Gets the isAssignableToRole property value. Indicates whether this group can be assigned to an Azure Active Directory role or not. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true and the group cannot be a dynamic group (that is, groupTypes cannot contain DynamicMembership). Only callers in Global administrator and Privileged role administrator roles can set this property. The caller must be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Azure AD role assignmentsReturned by default. Supports $filter (eq, ne, not).
     * @return bool|null
    */
    public function getIsAssignableToRole(): ?bool {
        return $this->isAssignableToRole;
    }

    /**
     * Gets the isSubscribedByMail property value. Indicates whether the signed-in user is subscribed to receive email conversations. Default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getIsSubscribedByMail(): ?bool {
        return $this->isSubscribedByMail;
    }

    /**
     * Gets the licenseProcessingState property value. Indicates status of the group license assignment to all members of the group. Default value is false. Read-only. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete.Returned only on $select. Read-only.
     * @return LicenseProcessingState|null
    */
    public function getLicenseProcessingState(): ?LicenseProcessingState {
        return $this->licenseProcessingState;
    }

    /**
     * Gets the mail property value. The SMTP address for the group, for example, 'serviceadmins@contoso.onmicrosoft.com'. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getMail(): ?string {
        return $this->mail;
    }

    /**
     * Gets the mailEnabled property value. Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not).
     * @return bool|null
    */
    public function getMailEnabled(): ?bool {
        return $this->mailEnabled;
    }

    /**
     * Gets the mailNickname property value. The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following: @ () / [] ' ; : . <> , SPACE. Required. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getMailNickname(): ?string {
        return $this->mailNickname;
    }

    /**
     * Gets the memberOf property value. Groups that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getMemberOf(): ?array {
        return $this->memberOf;
    }

    /**
     * Gets the members property value. The members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=members($select=id,userPrincipalName,displayName).
     * @return array<DirectoryObject>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the membershipRule property value. The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     * @return string|null
    */
    public function getMembershipRule(): ?string {
        return $this->membershipRule;
    }

    /**
     * Gets the membershipRuleProcessingState property value. Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in).
     * @return string|null
    */
    public function getMembershipRuleProcessingState(): ?string {
        return $this->membershipRuleProcessingState;
    }

    /**
     * Gets the membersWithLicenseErrors property value. A list of group members with license errors from this group-based license assignment. Read-only.
     * @return array<DirectoryObject>|null
    */
    public function getMembersWithLicenseErrors(): ?array {
        return $this->membersWithLicenseErrors;
    }

    /**
     * Gets the onenote property value. Read-only.
     * @return Onenote|null
    */
    public function getOnenote(): ?Onenote {
        return $this->onenote;
    }

    /**
     * Gets the onPremisesDomainName property value. Contains the on-premises domain FQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
     * @return string|null
    */
    public function getOnPremisesDomainName(): ?string {
        return $this->onPremisesDomainName;
    }

    /**
     * Gets the onPremisesLastSyncDateTime property value. Indicates the last time at which the group was synced with the on-premises directory.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in).
     * @return DateTime|null
    */
    public function getOnPremisesLastSyncDateTime(): ?DateTime {
        return $this->onPremisesLastSyncDateTime;
    }

    /**
     * Gets the onPremisesNetBiosName property value. Contains the on-premises netBios name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
     * @return string|null
    */
    public function getOnPremisesNetBiosName(): ?string {
        return $this->onPremisesNetBiosName;
    }

    /**
     * Gets the onPremisesProvisioningErrors property value. Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not).
     * @return array<OnPremisesProvisioningError>|null
    */
    public function getOnPremisesProvisioningErrors(): ?array {
        return $this->onPremisesProvisioningErrors;
    }

    /**
     * Gets the onPremisesSamAccountName property value. Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only.
     * @return string|null
    */
    public function getOnPremisesSamAccountName(): ?string {
        return $this->onPremisesSamAccountName;
    }

    /**
     * Gets the onPremisesSecurityIdentifier property value. Contains the on-premises security identifier (SID) for the group that was synchronized from on-premises to the cloud. Returned by default. Supports $filter (eq including on null values). Read-only.
     * @return string|null
    */
    public function getOnPremisesSecurityIdentifier(): ?string {
        return $this->onPremisesSecurityIdentifier;
    }

    /**
     * Gets the onPremisesSyncEnabled property value. true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     * @return bool|null
    */
    public function getOnPremisesSyncEnabled(): ?bool {
        return $this->onPremisesSyncEnabled;
    }

    /**
     * Gets the owners property value. The owners of the group. Limited to 100 owners. Nullable. If this property is not specified when creating a Microsoft 365 group, the calling user is automatically assigned as the group owner. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=owners($select=id,userPrincipalName,displayName).
     * @return array<DirectoryObject>|null
    */
    public function getOwners(): ?array {
        return $this->owners;
    }

    /**
     * Gets the permissionGrants property value. The permission that has been granted for a group to a specific application. Supports $expand.
     * @return array<ResourceSpecificPermissionGrant>|null
    */
    public function getPermissionGrants(): ?array {
        return $this->permissionGrants;
    }

    /**
     * Gets the photo property value. The group's profile photo
     * @return ProfilePhoto|null
    */
    public function getPhoto(): ?ProfilePhoto {
        return $this->photo;
    }

    /**
     * Gets the photos property value. The profile photos owned by the group. Read-only. Nullable.
     * @return array<ProfilePhoto>|null
    */
    public function getPhotos(): ?array {
        return $this->photos;
    }

    /**
     * Gets the planner property value. Entry-point to Planner resource that might exist for a Unified Group.
     * @return PlannerGroup|null
    */
    public function getPlanner(): ?PlannerGroup {
        return $this->planner;
    }

    /**
     * Gets the preferredDataLocation property value. The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator's preferred data location. To set this property, the calling user must be assigned one of the following Azure AD roles:  Global Administrator  User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default.
     * @return string|null
    */
    public function getPreferredDataLocation(): ?string {
        return $this->preferredDataLocation;
    }

    /**
     * Gets the preferredLanguage property value. The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getPreferredLanguage(): ?string {
        return $this->preferredLanguage;
    }

    /**
     * Gets the proxyAddresses property value. Email addresses for the group that direct to the same group mailbox. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. The any operator is required to filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getProxyAddresses(): ?array {
        return $this->proxyAddresses;
    }

    /**
     * Gets the rejectedSenders property value. The list of users or groups that are not allowed to create posts or calendar events in this group. Nullable
     * @return array<DirectoryObject>|null
    */
    public function getRejectedSenders(): ?array {
        return $this->rejectedSenders;
    }

    /**
     * Gets the renewedDateTime property value. Timestamp of when the group was last renewed. This cannot be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @return DateTime|null
    */
    public function getRenewedDateTime(): ?DateTime {
        return $this->renewedDateTime;
    }

    /**
     * Gets the securityEnabled property value. Specifies whether the group is a security group. Required. Returned by default. Supports $filter (eq, ne, not, in).
     * @return bool|null
    */
    public function getSecurityEnabled(): ?bool {
        return $this->securityEnabled;
    }

    /**
     * Gets the securityIdentifier property value. Security identifier of the group, used in Windows scenarios. Returned by default.
     * @return string|null
    */
    public function getSecurityIdentifier(): ?string {
        return $this->securityIdentifier;
    }

    /**
     * Gets the settings property value. Settings that can govern this group's behavior, like whether members can invite guest users to the group. Nullable.
     * @return array<GroupSetting>|null
    */
    public function getSettings(): ?array {
        return $this->settings;
    }

    /**
     * Gets the sites property value. The list of SharePoint sites in this group. Access the default site with /sites/root.
     * @return array<Site>|null
    */
    public function getSites(): ?array {
        return $this->sites;
    }

    /**
     * Gets the team property value. The team property
     * @return Team|null
    */
    public function getTeam(): ?Team {
        return $this->team;
    }

    /**
     * Gets the theme property value. Specifies a Microsoft 365 group's color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange or Red. Returned by default.
     * @return string|null
    */
    public function getTheme(): ?string {
        return $this->theme;
    }

    /**
     * Gets the threads property value. The group's conversation threads. Nullable.
     * @return array<ConversationThread>|null
    */
    public function getThreads(): ?array {
        return $this->threads;
    }

    /**
     * Gets the transitiveMemberOf property value. The transitiveMemberOf property
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMemberOf(): ?array {
        return $this->transitiveMemberOf;
    }

    /**
     * Gets the transitiveMembers property value. The transitiveMembers property
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMembers(): ?array {
        return $this->transitiveMembers;
    }

    /**
     * Gets the unseenCount property value. Count of conversations that have received new posts since the signed-in user last visited the group. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return int|null
    */
    public function getUnseenCount(): ?int {
        return $this->unseenCount;
    }

    /**
     * Gets the visibility property value. Specifies the group join policy and group content visibility for groups. Possible values are: Private, Public, or Hiddenmembership. Hiddenmembership can be set only for Microsoft 365 groups, when the groups are created. It can't be updated later. Other values of visibility can be updated after group creation. If visibility value is not specified during group creation on Microsoft Graph, a security group is created as Private by default and Microsoft 365 group is Public. Groups assignable to roles are always Private. See group visibility options to learn more. Returned by default. Nullable.
     * @return string|null
    */
    public function getVisibility(): ?string {
        return $this->visibility;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acceptedSenders', $this->acceptedSenders);
        $writer->writeBooleanValue('allowExternalSenders', $this->allowExternalSenders);
        $writer->writeCollectionOfObjectValues('appRoleAssignments', $this->appRoleAssignments);
        $writer->writeCollectionOfObjectValues('assignedLabels', $this->assignedLabels);
        $writer->writeCollectionOfObjectValues('assignedLicenses', $this->assignedLicenses);
        $writer->writeBooleanValue('autoSubscribeNewMembers', $this->autoSubscribeNewMembers);
        $writer->writeObjectValue('calendar', $this->calendar);
        $writer->writeCollectionOfObjectValues('calendarView', $this->calendarView);
        $writer->writeStringValue('classification', $this->classification);
        $writer->writeCollectionOfObjectValues('conversations', $this->conversations);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('createdOnBehalfOf', $this->createdOnBehalfOf);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('drive', $this->drive);
        $writer->writeCollectionOfObjectValues('drives', $this->drives);
        $writer->writeCollectionOfObjectValues('events', $this->events);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeCollectionOfObjectValues('groupLifecyclePolicies', $this->groupLifecyclePolicies);
        $writer->writeCollectionOfPrimitiveValues('groupTypes', $this->groupTypes);
        $writer->writeBooleanValue('hasMembersWithLicenseErrors', $this->hasMembersWithLicenseErrors);
        $writer->writeBooleanValue('hideFromAddressLists', $this->hideFromAddressLists);
        $writer->writeBooleanValue('hideFromOutlookClients', $this->hideFromOutlookClients);
        $writer->writeBooleanValue('isArchived', $this->isArchived);
        $writer->writeBooleanValue('isAssignableToRole', $this->isAssignableToRole);
        $writer->writeBooleanValue('isSubscribedByMail', $this->isSubscribedByMail);
        $writer->writeObjectValue('licenseProcessingState', $this->licenseProcessingState);
        $writer->writeStringValue('mail', $this->mail);
        $writer->writeBooleanValue('mailEnabled', $this->mailEnabled);
        $writer->writeStringValue('mailNickname', $this->mailNickname);
        $writer->writeCollectionOfObjectValues('memberOf', $this->memberOf);
        $writer->writeCollectionOfObjectValues('members', $this->members);
        $writer->writeStringValue('membershipRule', $this->membershipRule);
        $writer->writeStringValue('membershipRuleProcessingState', $this->membershipRuleProcessingState);
        $writer->writeCollectionOfObjectValues('membersWithLicenseErrors', $this->membersWithLicenseErrors);
        $writer->writeObjectValue('onenote', $this->onenote);
        $writer->writeStringValue('onPremisesDomainName', $this->onPremisesDomainName);
        $writer->writeDateTimeValue('onPremisesLastSyncDateTime', $this->onPremisesLastSyncDateTime);
        $writer->writeStringValue('onPremisesNetBiosName', $this->onPremisesNetBiosName);
        $writer->writeCollectionOfObjectValues('onPremisesProvisioningErrors', $this->onPremisesProvisioningErrors);
        $writer->writeStringValue('onPremisesSamAccountName', $this->onPremisesSamAccountName);
        $writer->writeStringValue('onPremisesSecurityIdentifier', $this->onPremisesSecurityIdentifier);
        $writer->writeBooleanValue('onPremisesSyncEnabled', $this->onPremisesSyncEnabled);
        $writer->writeCollectionOfObjectValues('owners', $this->owners);
        $writer->writeCollectionOfObjectValues('permissionGrants', $this->permissionGrants);
        $writer->writeObjectValue('photo', $this->photo);
        $writer->writeCollectionOfObjectValues('photos', $this->photos);
        $writer->writeObjectValue('planner', $this->planner);
        $writer->writeStringValue('preferredDataLocation', $this->preferredDataLocation);
        $writer->writeStringValue('preferredLanguage', $this->preferredLanguage);
        $writer->writeCollectionOfPrimitiveValues('proxyAddresses', $this->proxyAddresses);
        $writer->writeCollectionOfObjectValues('rejectedSenders', $this->rejectedSenders);
        $writer->writeDateTimeValue('renewedDateTime', $this->renewedDateTime);
        $writer->writeBooleanValue('securityEnabled', $this->securityEnabled);
        $writer->writeStringValue('securityIdentifier', $this->securityIdentifier);
        $writer->writeCollectionOfObjectValues('settings', $this->settings);
        $writer->writeCollectionOfObjectValues('sites', $this->sites);
        $writer->writeObjectValue('team', $this->team);
        $writer->writeStringValue('theme', $this->theme);
        $writer->writeCollectionOfObjectValues('threads', $this->threads);
        $writer->writeCollectionOfObjectValues('transitiveMemberOf', $this->transitiveMemberOf);
        $writer->writeCollectionOfObjectValues('transitiveMembers', $this->transitiveMembers);
        $writer->writeIntegerValue('unseenCount', $this->unseenCount);
        $writer->writeStringValue('visibility', $this->visibility);
    }

    /**
     * Sets the acceptedSenders property value. The list of users or groups that are allowed to create post's or calendar events in this group. If this list is non-empty then only users or groups listed here are allowed to post.
     *  @param array<DirectoryObject>|null $value Value to set for the acceptedSenders property.
    */
    public function setAcceptedSenders(?array $value ): void {
        $this->acceptedSenders = $value;
    }

    /**
     * Sets the allowExternalSenders property value. Indicates if people external to the organization can send messages to the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     *  @param bool|null $value Value to set for the allowExternalSenders property.
    */
    public function setAllowExternalSenders(?bool $value ): void {
        $this->allowExternalSenders = $value;
    }

    /**
     * Sets the appRoleAssignments property value. Represents the app roles a group has been granted for an application. Supports $expand.
     *  @param array<AppRoleAssignment>|null $value Value to set for the appRoleAssignments property.
    */
    public function setAppRoleAssignments(?array $value ): void {
        $this->appRoleAssignments = $value;
    }

    /**
     * Sets the assignedLabels property value. The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select. Read-only.
     *  @param array<AssignedLabel>|null $value Value to set for the assignedLabels property.
    */
    public function setAssignedLabels(?array $value ): void {
        $this->assignedLabels = $value;
    }

    /**
     * Sets the assignedLicenses property value. The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq).Read-only.
     *  @param array<AssignedLicense>|null $value Value to set for the assignedLicenses property.
    */
    public function setAssignedLicenses(?array $value ): void {
        $this->assignedLicenses = $value;
    }

    /**
     * Sets the autoSubscribeNewMembers property value. Indicates if new members added to the group will be auto-subscribed to receive email notifications. You can set this property in a PATCH request for the group; do not set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     *  @param bool|null $value Value to set for the autoSubscribeNewMembers property.
    */
    public function setAutoSubscribeNewMembers(?bool $value ): void {
        $this->autoSubscribeNewMembers = $value;
    }

    /**
     * Sets the calendar property value. The group's calendar. Read-only.
     *  @param Calendar|null $value Value to set for the calendar property.
    */
    public function setCalendar(?Calendar $value ): void {
        $this->calendar = $value;
    }

    /**
     * Sets the calendarView property value. The calendar view for the calendar. Read-only.
     *  @param array<Event>|null $value Value to set for the calendarView property.
    */
    public function setCalendarView(?array $value ): void {
        $this->calendarView = $value;
    }

    /**
     * Sets the classification property value. Describes a classification for the group (such as low, medium or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     *  @param string|null $value Value to set for the classification property.
    */
    public function setClassification(?string $value ): void {
        $this->classification = $value;
    }

    /**
     * Sets the conversations property value. The group's conversations.
     *  @param array<Conversation>|null $value Value to set for the conversations property.
    */
    public function setConversations(?array $value ): void {
        $this->conversations = $value;
    }

    /**
     * Sets the createdDateTime property value. Timestamp of when the group was created. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the createdOnBehalfOf property value. The user (or application) that created the group. NOTE: This is not set if the user is an administrator. Read-only.
     *  @param DirectoryObject|null $value Value to set for the createdOnBehalfOf property.
    */
    public function setCreatedOnBehalfOf(?DirectoryObject $value ): void {
        $this->createdOnBehalfOf = $value;
    }

    /**
     * Sets the description property value. An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name for the group. This property is required when a group is created and cannot be cleared during updates. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the drive property value. The group's default drive. Read-only.
     *  @param Drive|null $value Value to set for the drive property.
    */
    public function setDrive(?Drive $value ): void {
        $this->drive = $value;
    }

    /**
     * Sets the drives property value. The group's drives. Read-only.
     *  @param array<Drive>|null $value Value to set for the drives property.
    */
    public function setDrives(?array $value ): void {
        $this->drives = $value;
    }

    /**
     * Sets the events property value. The group's calendar events.
     *  @param array<Event>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value ): void {
        $this->events = $value;
    }

    /**
     * Sets the expirationDateTime property value. Timestamp of when the group is set to expire. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the group. Read-only. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the groupLifecyclePolicies property value. The collection of lifecycle policies for this group. Read-only. Nullable.
     *  @param array<GroupLifecyclePolicy>|null $value Value to set for the groupLifecyclePolicies property.
    */
    public function setGroupLifecyclePolicies(?array $value ): void {
        $this->groupLifecyclePolicies = $value;
    }

    /**
     * Sets the groupTypes property value. Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it's either a security group or distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not).
     *  @param array<string>|null $value Value to set for the groupTypes property.
    */
    public function setGroupTypes(?array $value ): void {
        $this->groupTypes = $value;
    }

    /**
     * Sets the hasMembersWithLicenseErrors property value. Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true). See an example. Supports $filter (eq).
     *  @param bool|null $value Value to set for the hasMembersWithLicenseErrors property.
    */
    public function setHasMembersWithLicenseErrors(?bool $value ): void {
        $this->hasMembersWithLicenseErrors = $value;
    }

    /**
     * Sets the hideFromAddressLists property value. True if the group is not displayed in certain parts of the Outlook UI: the Address Book, address lists for selecting message recipients, and the Browse Groups dialog for searching groups; otherwise, false. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     *  @param bool|null $value Value to set for the hideFromAddressLists property.
    */
    public function setHideFromAddressLists(?bool $value ): void {
        $this->hideFromAddressLists = $value;
    }

    /**
     * Sets the hideFromOutlookClients property value. True if the group is not displayed in Outlook clients, such as Outlook for Windows and Outlook on the web; otherwise, false. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     *  @param bool|null $value Value to set for the hideFromOutlookClients property.
    */
    public function setHideFromOutlookClients(?bool $value ): void {
        $this->hideFromOutlookClients = $value;
    }

    /**
     * Sets the isArchived property value. When a group is associated with a team this property deternunes whether the team is in read-only mode.
     *  @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value ): void {
        $this->isArchived = $value;
    }

    /**
     * Sets the isAssignableToRole property value. Indicates whether this group can be assigned to an Azure Active Directory role or not. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true and the group cannot be a dynamic group (that is, groupTypes cannot contain DynamicMembership). Only callers in Global administrator and Privileged role administrator roles can set this property. The caller must be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Azure AD role assignmentsReturned by default. Supports $filter (eq, ne, not).
     *  @param bool|null $value Value to set for the isAssignableToRole property.
    */
    public function setIsAssignableToRole(?bool $value ): void {
        $this->isAssignableToRole = $value;
    }

    /**
     * Sets the isSubscribedByMail property value. Indicates whether the signed-in user is subscribed to receive email conversations. Default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     *  @param bool|null $value Value to set for the isSubscribedByMail property.
    */
    public function setIsSubscribedByMail(?bool $value ): void {
        $this->isSubscribedByMail = $value;
    }

    /**
     * Sets the licenseProcessingState property value. Indicates status of the group license assignment to all members of the group. Default value is false. Read-only. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete.Returned only on $select. Read-only.
     *  @param LicenseProcessingState|null $value Value to set for the licenseProcessingState property.
    */
    public function setLicenseProcessingState(?LicenseProcessingState $value ): void {
        $this->licenseProcessingState = $value;
    }

    /**
     * Sets the mail property value. The SMTP address for the group, for example, 'serviceadmins@contoso.onmicrosoft.com'. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the mail property.
    */
    public function setMail(?string $value ): void {
        $this->mail = $value;
    }

    /**
     * Sets the mailEnabled property value. Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not).
     *  @param bool|null $value Value to set for the mailEnabled property.
    */
    public function setMailEnabled(?bool $value ): void {
        $this->mailEnabled = $value;
    }

    /**
     * Sets the mailNickname property value. The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following: @ () / [] ' ; : . <> , SPACE. Required. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value ): void {
        $this->mailNickname = $value;
    }

    /**
     * Sets the memberOf property value. Groups that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value ): void {
        $this->memberOf = $value;
    }

    /**
     * Sets the members property value. The members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=members($select=id,userPrincipalName,displayName).
     *  @param array<DirectoryObject>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the membershipRule property value. The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     *  @param string|null $value Value to set for the membershipRule property.
    */
    public function setMembershipRule(?string $value ): void {
        $this->membershipRule = $value;
    }

    /**
     * Sets the membershipRuleProcessingState property value. Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in).
     *  @param string|null $value Value to set for the membershipRuleProcessingState property.
    */
    public function setMembershipRuleProcessingState(?string $value ): void {
        $this->membershipRuleProcessingState = $value;
    }

    /**
     * Sets the membersWithLicenseErrors property value. A list of group members with license errors from this group-based license assignment. Read-only.
     *  @param array<DirectoryObject>|null $value Value to set for the membersWithLicenseErrors property.
    */
    public function setMembersWithLicenseErrors(?array $value ): void {
        $this->membersWithLicenseErrors = $value;
    }

    /**
     * Sets the onenote property value. Read-only.
     *  @param Onenote|null $value Value to set for the onenote property.
    */
    public function setOnenote(?Onenote $value ): void {
        $this->onenote = $value;
    }

    /**
     * Sets the onPremisesDomainName property value. Contains the on-premises domain FQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
     *  @param string|null $value Value to set for the onPremisesDomainName property.
    */
    public function setOnPremisesDomainName(?string $value ): void {
        $this->onPremisesDomainName = $value;
    }

    /**
     * Sets the onPremisesLastSyncDateTime property value. Indicates the last time at which the group was synced with the on-premises directory.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in).
     *  @param DateTime|null $value Value to set for the onPremisesLastSyncDateTime property.
    */
    public function setOnPremisesLastSyncDateTime(?DateTime $value ): void {
        $this->onPremisesLastSyncDateTime = $value;
    }

    /**
     * Sets the onPremisesNetBiosName property value. Contains the on-premises netBios name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
     *  @param string|null $value Value to set for the onPremisesNetBiosName property.
    */
    public function setOnPremisesNetBiosName(?string $value ): void {
        $this->onPremisesNetBiosName = $value;
    }

    /**
     * Sets the onPremisesProvisioningErrors property value. Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not).
     *  @param array<OnPremisesProvisioningError>|null $value Value to set for the onPremisesProvisioningErrors property.
    */
    public function setOnPremisesProvisioningErrors(?array $value ): void {
        $this->onPremisesProvisioningErrors = $value;
    }

    /**
     * Sets the onPremisesSamAccountName property value. Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only.
     *  @param string|null $value Value to set for the onPremisesSamAccountName property.
    */
    public function setOnPremisesSamAccountName(?string $value ): void {
        $this->onPremisesSamAccountName = $value;
    }

    /**
     * Sets the onPremisesSecurityIdentifier property value. Contains the on-premises security identifier (SID) for the group that was synchronized from on-premises to the cloud. Returned by default. Supports $filter (eq including on null values). Read-only.
     *  @param string|null $value Value to set for the onPremisesSecurityIdentifier property.
    */
    public function setOnPremisesSecurityIdentifier(?string $value ): void {
        $this->onPremisesSecurityIdentifier = $value;
    }

    /**
     * Sets the onPremisesSyncEnabled property value. true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     *  @param bool|null $value Value to set for the onPremisesSyncEnabled property.
    */
    public function setOnPremisesSyncEnabled(?bool $value ): void {
        $this->onPremisesSyncEnabled = $value;
    }

    /**
     * Sets the owners property value. The owners of the group. Limited to 100 owners. Nullable. If this property is not specified when creating a Microsoft 365 group, the calling user is automatically assigned as the group owner. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=owners($select=id,userPrincipalName,displayName).
     *  @param array<DirectoryObject>|null $value Value to set for the owners property.
    */
    public function setOwners(?array $value ): void {
        $this->owners = $value;
    }

    /**
     * Sets the permissionGrants property value. The permission that has been granted for a group to a specific application. Supports $expand.
     *  @param array<ResourceSpecificPermissionGrant>|null $value Value to set for the permissionGrants property.
    */
    public function setPermissionGrants(?array $value ): void {
        $this->permissionGrants = $value;
    }

    /**
     * Sets the photo property value. The group's profile photo
     *  @param ProfilePhoto|null $value Value to set for the photo property.
    */
    public function setPhoto(?ProfilePhoto $value ): void {
        $this->photo = $value;
    }

    /**
     * Sets the photos property value. The profile photos owned by the group. Read-only. Nullable.
     *  @param array<ProfilePhoto>|null $value Value to set for the photos property.
    */
    public function setPhotos(?array $value ): void {
        $this->photos = $value;
    }

    /**
     * Sets the planner property value. Entry-point to Planner resource that might exist for a Unified Group.
     *  @param PlannerGroup|null $value Value to set for the planner property.
    */
    public function setPlanner(?PlannerGroup $value ): void {
        $this->planner = $value;
    }

    /**
     * Sets the preferredDataLocation property value. The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator's preferred data location. To set this property, the calling user must be assigned one of the following Azure AD roles:  Global Administrator  User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default.
     *  @param string|null $value Value to set for the preferredDataLocation property.
    */
    public function setPreferredDataLocation(?string $value ): void {
        $this->preferredDataLocation = $value;
    }

    /**
     * Sets the preferredLanguage property value. The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the preferredLanguage property.
    */
    public function setPreferredLanguage(?string $value ): void {
        $this->preferredLanguage = $value;
    }

    /**
     * Sets the proxyAddresses property value. Email addresses for the group that direct to the same group mailbox. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. The any operator is required to filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith).
     *  @param array<string>|null $value Value to set for the proxyAddresses property.
    */
    public function setProxyAddresses(?array $value ): void {
        $this->proxyAddresses = $value;
    }

    /**
     * Sets the rejectedSenders property value. The list of users or groups that are not allowed to create posts or calendar events in this group. Nullable
     *  @param array<DirectoryObject>|null $value Value to set for the rejectedSenders property.
    */
    public function setRejectedSenders(?array $value ): void {
        $this->rejectedSenders = $value;
    }

    /**
     * Sets the renewedDateTime property value. Timestamp of when the group was last renewed. This cannot be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     *  @param DateTime|null $value Value to set for the renewedDateTime property.
    */
    public function setRenewedDateTime(?DateTime $value ): void {
        $this->renewedDateTime = $value;
    }

    /**
     * Sets the securityEnabled property value. Specifies whether the group is a security group. Required. Returned by default. Supports $filter (eq, ne, not, in).
     *  @param bool|null $value Value to set for the securityEnabled property.
    */
    public function setSecurityEnabled(?bool $value ): void {
        $this->securityEnabled = $value;
    }

    /**
     * Sets the securityIdentifier property value. Security identifier of the group, used in Windows scenarios. Returned by default.
     *  @param string|null $value Value to set for the securityIdentifier property.
    */
    public function setSecurityIdentifier(?string $value ): void {
        $this->securityIdentifier = $value;
    }

    /**
     * Sets the settings property value. Settings that can govern this group's behavior, like whether members can invite guest users to the group. Nullable.
     *  @param array<GroupSetting>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the sites property value. The list of SharePoint sites in this group. Access the default site with /sites/root.
     *  @param array<Site>|null $value Value to set for the sites property.
    */
    public function setSites(?array $value ): void {
        $this->sites = $value;
    }

    /**
     * Sets the team property value. The team property
     *  @param Team|null $value Value to set for the team property.
    */
    public function setTeam(?Team $value ): void {
        $this->team = $value;
    }

    /**
     * Sets the theme property value. Specifies a Microsoft 365 group's color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange or Red. Returned by default.
     *  @param string|null $value Value to set for the theme property.
    */
    public function setTheme(?string $value ): void {
        $this->theme = $value;
    }

    /**
     * Sets the threads property value. The group's conversation threads. Nullable.
     *  @param array<ConversationThread>|null $value Value to set for the threads property.
    */
    public function setThreads(?array $value ): void {
        $this->threads = $value;
    }

    /**
     * Sets the transitiveMemberOf property value. The transitiveMemberOf property
     *  @param array<DirectoryObject>|null $value Value to set for the transitiveMemberOf property.
    */
    public function setTransitiveMemberOf(?array $value ): void {
        $this->transitiveMemberOf = $value;
    }

    /**
     * Sets the transitiveMembers property value. The transitiveMembers property
     *  @param array<DirectoryObject>|null $value Value to set for the transitiveMembers property.
    */
    public function setTransitiveMembers(?array $value ): void {
        $this->transitiveMembers = $value;
    }

    /**
     * Sets the unseenCount property value. Count of conversations that have received new posts since the signed-in user last visited the group. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     *  @param int|null $value Value to set for the unseenCount property.
    */
    public function setUnseenCount(?int $value ): void {
        $this->unseenCount = $value;
    }

    /**
     * Sets the visibility property value. Specifies the group join policy and group content visibility for groups. Possible values are: Private, Public, or Hiddenmembership. Hiddenmembership can be set only for Microsoft 365 groups, when the groups are created. It can't be updated later. Other values of visibility can be updated after group creation. If visibility value is not specified during group creation on Microsoft Graph, a security group is created as Private by default and Microsoft 365 group is Public. Groups assignable to roles are always Private. See group visibility options to learn more. Returned by default. Nullable.
     *  @param string|null $value Value to set for the visibility property.
    */
    public function setVisibility(?string $value ): void {
        $this->visibility = $value;
    }

}
