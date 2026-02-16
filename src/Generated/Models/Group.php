<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents a Microsoft Entra group.
*/
class Group extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new Group and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.group');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Group
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Group {
        return new Group();
    }

    /**
     * Gets the acceptedSenders property value. The list of users or groups allowed to create posts or calendar events in this group. If this list is nonempty, then only users or groups listed here are allowed to post.
     * @return array<DirectoryObject>|null
    */
    public function getAcceptedSenders(): ?array {
        $val = $this->getBackingStore()->get('acceptedSenders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acceptedSenders'");
    }

    /**
     * Gets the allowExternalSenders property value. Indicates if people external to the organization can send messages to the group. The default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getAllowExternalSenders(): ?bool {
        $val = $this->getBackingStore()->get('allowExternalSenders');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowExternalSenders'");
    }

    /**
     * Gets the appRoleAssignments property value. Represents the app roles granted to a group for an application. Supports $expand.
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
     * Gets the assignedLabels property value. The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select. This property can be updated only in delegated scenarios where the caller requires both the Microsoft Graph permission and a supported administrator role.
     * @return array<AssignedLabel>|null
    */
    public function getAssignedLabels(): ?array {
        $val = $this->getBackingStore()->get('assignedLabels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssignedLabel::class);
            /** @var array<AssignedLabel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedLabels'");
    }

    /**
     * Gets the assignedLicenses property value. The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq). Read-only.
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
     * Gets the autoSubscribeNewMembers property value. Indicates if new members added to the group are autosubscribed to receive email notifications. You can set this property in a PATCH request for the group; don't set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getAutoSubscribeNewMembers(): ?bool {
        $val = $this->getBackingStore()->get('autoSubscribeNewMembers');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoSubscribeNewMembers'");
    }

    /**
     * Gets the calendar property value. The group's calendar. Read-only.
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
     * Gets the calendarView property value. The calendar view for the calendar. Read-only.
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
     * Gets the classification property value. Describes a classification for the group (such as low, medium, or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     * @return string|null
    */
    public function getClassification(): ?string {
        $val = $this->getBackingStore()->get('classification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classification'");
    }

    /**
     * Gets the conversations property value. The group's conversations.
     * @return array<Conversation>|null
    */
    public function getConversations(): ?array {
        $val = $this->getBackingStore()->get('conversations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Conversation::class);
            /** @var array<Conversation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conversations'");
    }

    /**
     * Gets the createdDateTime property value. Timestamp of when the group was created. The value can't be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only.
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
     * Gets the createdOnBehalfOf property value. The user (or application) that created the group. NOTE: This property isn't set if the user is an administrator. Read-only.
     * @return DirectoryObject|null
    */
    public function getCreatedOnBehalfOf(): ?DirectoryObject {
        $val = $this->getBackingStore()->get('createdOnBehalfOf');
        if (is_null($val) || $val instanceof DirectoryObject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdOnBehalfOf'");
    }

    /**
     * Gets the description property value. An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name for the group. This property is required when a group is created and can't be cleared during updates. Maximum length is 256 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
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
     * Gets the drive property value. The group's default drive. Read-only.
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
     * Gets the drives property value. The group's drives. Read-only.
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
     * Gets the events property value. The group's calendar events.
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
     * Gets the expirationDateTime property value. Timestamp of when the group is set to expire. It's null for security groups, but for Microsoft 365 groups, it represents when the group is set to expire as defined in the groupLifecyclePolicy. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the group. Read-only. Nullable.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acceptedSenders' => fn(ParseNode $n) => $o->setAcceptedSenders($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'allowExternalSenders' => fn(ParseNode $n) => $o->setAllowExternalSenders($n->getBooleanValue()),
            'appRoleAssignments' => fn(ParseNode $n) => $o->setAppRoleAssignments($n->getCollectionOfObjectValues([AppRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'assignedLabels' => fn(ParseNode $n) => $o->setAssignedLabels($n->getCollectionOfObjectValues([AssignedLabel::class, 'createFromDiscriminatorValue'])),
            'assignedLicenses' => fn(ParseNode $n) => $o->setAssignedLicenses($n->getCollectionOfObjectValues([AssignedLicense::class, 'createFromDiscriminatorValue'])),
            'autoSubscribeNewMembers' => fn(ParseNode $n) => $o->setAutoSubscribeNewMembers($n->getBooleanValue()),
            'calendar' => fn(ParseNode $n) => $o->setCalendar($n->getObjectValue([Calendar::class, 'createFromDiscriminatorValue'])),
            'calendarView' => fn(ParseNode $n) => $o->setCalendarView($n->getCollectionOfObjectValues([Event::class, 'createFromDiscriminatorValue'])),
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getStringValue()),
            'conversations' => fn(ParseNode $n) => $o->setConversations($n->getCollectionOfObjectValues([Conversation::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'createdOnBehalfOf' => fn(ParseNode $n) => $o->setCreatedOnBehalfOf($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'drive' => fn(ParseNode $n) => $o->setDrive($n->getObjectValue([Drive::class, 'createFromDiscriminatorValue'])),
            'drives' => fn(ParseNode $n) => $o->setDrives($n->getCollectionOfObjectValues([Drive::class, 'createFromDiscriminatorValue'])),
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfObjectValues([Event::class, 'createFromDiscriminatorValue'])),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'groupLifecyclePolicies' => fn(ParseNode $n) => $o->setGroupLifecyclePolicies($n->getCollectionOfObjectValues([GroupLifecyclePolicy::class, 'createFromDiscriminatorValue'])),
            'groupTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setGroupTypes($val);
            },
            'hasMembersWithLicenseErrors' => fn(ParseNode $n) => $o->setHasMembersWithLicenseErrors($n->getBooleanValue()),
            'hideFromAddressLists' => fn(ParseNode $n) => $o->setHideFromAddressLists($n->getBooleanValue()),
            'hideFromOutlookClients' => fn(ParseNode $n) => $o->setHideFromOutlookClients($n->getBooleanValue()),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'isAssignableToRole' => fn(ParseNode $n) => $o->setIsAssignableToRole($n->getBooleanValue()),
            'isManagementRestricted' => fn(ParseNode $n) => $o->setIsManagementRestricted($n->getBooleanValue()),
            'isSubscribedByMail' => fn(ParseNode $n) => $o->setIsSubscribedByMail($n->getBooleanValue()),
            'licenseProcessingState' => fn(ParseNode $n) => $o->setLicenseProcessingState($n->getObjectValue([LicenseProcessingState::class, 'createFromDiscriminatorValue'])),
            'mail' => fn(ParseNode $n) => $o->setMail($n->getStringValue()),
            'mailEnabled' => fn(ParseNode $n) => $o->setMailEnabled($n->getBooleanValue()),
            'mailNickname' => fn(ParseNode $n) => $o->setMailNickname($n->getStringValue()),
            'memberOf' => fn(ParseNode $n) => $o->setMemberOf($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'membershipRule' => fn(ParseNode $n) => $o->setMembershipRule($n->getStringValue()),
            'membershipRuleProcessingState' => fn(ParseNode $n) => $o->setMembershipRuleProcessingState($n->getStringValue()),
            'membersWithLicenseErrors' => fn(ParseNode $n) => $o->setMembersWithLicenseErrors($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'onenote' => fn(ParseNode $n) => $o->setOnenote($n->getObjectValue([Onenote::class, 'createFromDiscriminatorValue'])),
            'onPremisesDomainName' => fn(ParseNode $n) => $o->setOnPremisesDomainName($n->getStringValue()),
            'onPremisesLastSyncDateTime' => fn(ParseNode $n) => $o->setOnPremisesLastSyncDateTime($n->getDateTimeValue()),
            'onPremisesNetBiosName' => fn(ParseNode $n) => $o->setOnPremisesNetBiosName($n->getStringValue()),
            'onPremisesProvisioningErrors' => fn(ParseNode $n) => $o->setOnPremisesProvisioningErrors($n->getCollectionOfObjectValues([OnPremisesProvisioningError::class, 'createFromDiscriminatorValue'])),
            'onPremisesSamAccountName' => fn(ParseNode $n) => $o->setOnPremisesSamAccountName($n->getStringValue()),
            'onPremisesSecurityIdentifier' => fn(ParseNode $n) => $o->setOnPremisesSecurityIdentifier($n->getStringValue()),
            'onPremisesSyncBehavior' => fn(ParseNode $n) => $o->setOnPremisesSyncBehavior($n->getObjectValue([OnPremisesSyncBehavior::class, 'createFromDiscriminatorValue'])),
            'onPremisesSyncEnabled' => fn(ParseNode $n) => $o->setOnPremisesSyncEnabled($n->getBooleanValue()),
            'owners' => fn(ParseNode $n) => $o->setOwners($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'permissionGrants' => fn(ParseNode $n) => $o->setPermissionGrants($n->getCollectionOfObjectValues([ResourceSpecificPermissionGrant::class, 'createFromDiscriminatorValue'])),
            'photo' => fn(ParseNode $n) => $o->setPhoto($n->getObjectValue([ProfilePhoto::class, 'createFromDiscriminatorValue'])),
            'photos' => fn(ParseNode $n) => $o->setPhotos($n->getCollectionOfObjectValues([ProfilePhoto::class, 'createFromDiscriminatorValue'])),
            'planner' => fn(ParseNode $n) => $o->setPlanner($n->getObjectValue([PlannerGroup::class, 'createFromDiscriminatorValue'])),
            'preferredDataLocation' => fn(ParseNode $n) => $o->setPreferredDataLocation($n->getStringValue()),
            'preferredLanguage' => fn(ParseNode $n) => $o->setPreferredLanguage($n->getStringValue()),
            'proxyAddresses' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProxyAddresses($val);
            },
            'rejectedSenders' => fn(ParseNode $n) => $o->setRejectedSenders($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'renewedDateTime' => fn(ParseNode $n) => $o->setRenewedDateTime($n->getDateTimeValue()),
            'resourceBehaviorOptions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResourceBehaviorOptions($val);
            },
            'resourceProvisioningOptions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResourceProvisioningOptions($val);
            },
            'securityEnabled' => fn(ParseNode $n) => $o->setSecurityEnabled($n->getBooleanValue()),
            'securityIdentifier' => fn(ParseNode $n) => $o->setSecurityIdentifier($n->getStringValue()),
            'serviceProvisioningErrors' => fn(ParseNode $n) => $o->setServiceProvisioningErrors($n->getCollectionOfObjectValues([ServiceProvisioningError::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getCollectionOfObjectValues([GroupSetting::class, 'createFromDiscriminatorValue'])),
            'sites' => fn(ParseNode $n) => $o->setSites($n->getCollectionOfObjectValues([Site::class, 'createFromDiscriminatorValue'])),
            'team' => fn(ParseNode $n) => $o->setTeam($n->getObjectValue([Team::class, 'createFromDiscriminatorValue'])),
            'theme' => fn(ParseNode $n) => $o->setTheme($n->getStringValue()),
            'threads' => fn(ParseNode $n) => $o->setThreads($n->getCollectionOfObjectValues([ConversationThread::class, 'createFromDiscriminatorValue'])),
            'transitiveMemberOf' => fn(ParseNode $n) => $o->setTransitiveMemberOf($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'transitiveMembers' => fn(ParseNode $n) => $o->setTransitiveMembers($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'uniqueName' => fn(ParseNode $n) => $o->setUniqueName($n->getStringValue()),
            'unseenCount' => fn(ParseNode $n) => $o->setUnseenCount($n->getIntegerValue()),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getStringValue()),
        ]);
    }

    /**
     * Gets the groupLifecyclePolicies property value. The collection of lifecycle policies for this group. Read-only. Nullable.
     * @return array<GroupLifecyclePolicy>|null
    */
    public function getGroupLifecyclePolicies(): ?array {
        $val = $this->getBackingStore()->get('groupLifecyclePolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupLifecyclePolicy::class);
            /** @var array<GroupLifecyclePolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupLifecyclePolicies'");
    }

    /**
     * Gets the groupTypes property value. Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it's either a security group or a distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not).
     * @return array<string>|null
    */
    public function getGroupTypes(): ?array {
        $val = $this->getBackingStore()->get('groupTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupTypes'");
    }

    /**
     * Gets the hasMembersWithLicenseErrors property value. Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true). See an example. Supports $filter (eq).
     * @return bool|null
    */
    public function getHasMembersWithLicenseErrors(): ?bool {
        $val = $this->getBackingStore()->get('hasMembersWithLicenseErrors');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasMembersWithLicenseErrors'");
    }

    /**
     * Gets the hideFromAddressLists property value. True if the group isn't displayed in certain parts of the Outlook UI: the Address Book, address lists for selecting message recipients, and the Browse Groups dialog for searching groups; otherwise, false. The default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getHideFromAddressLists(): ?bool {
        $val = $this->getBackingStore()->get('hideFromAddressLists');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hideFromAddressLists'");
    }

    /**
     * Gets the hideFromOutlookClients property value. True if the group isn't displayed in Outlook clients, such as Outlook for Windows and Outlook on the web; otherwise, false. The default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getHideFromOutlookClients(): ?bool {
        $val = $this->getBackingStore()->get('hideFromOutlookClients');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hideFromOutlookClients'");
    }

    /**
     * Gets the isArchived property value. When a group is associated with a team, this property determines whether the team is in read-only mode.To read this property, use the /group/{groupId}/team endpoint or the Get team API. To update this property, use the archiveTeam and unarchiveTeam APIs.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        $val = $this->getBackingStore()->get('isArchived');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isArchived'");
    }

    /**
     * Gets the isAssignableToRole property value. Indicates whether this group can be assigned to a Microsoft Entra role. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true, visibility must be Hidden, and the group can't be a dynamic group (that is, groupTypes can't contain DynamicMembership). Only callers with at least the Privileged Role Administrator role can set this property. The caller must also be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Microsoft Entra role assignmentsUsing this feature requires a Microsoft Entra ID P1 license. Returned by default. Supports $filter (eq, ne, not).
     * @return bool|null
    */
    public function getIsAssignableToRole(): ?bool {
        $val = $this->getBackingStore()->get('isAssignableToRole');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAssignableToRole'");
    }

    /**
     * Gets the isManagementRestricted property value. Indicates whether the group is a member of a restricted management administrative unit. If not set, the default value is null and the default behavior is false. Read-only.  To manage a group member of a restricted management administrative unit, the administrator or calling app must be assigned a Microsoft Entra role at the scope of the restricted management administrative unit. Returned only on $select.
     * @return bool|null
    */
    public function getIsManagementRestricted(): ?bool {
        $val = $this->getBackingStore()->get('isManagementRestricted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isManagementRestricted'");
    }

    /**
     * Gets the isSubscribedByMail property value. Indicates whether the signed-in user is subscribed to receive email conversations. The default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getIsSubscribedByMail(): ?bool {
        $val = $this->getBackingStore()->get('isSubscribedByMail');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSubscribedByMail'");
    }

    /**
     * Gets the licenseProcessingState property value. Indicates the status of the group license assignment to all group members. The default value is false. Read-only. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete.Returned only on $select. Read-only.
     * @return LicenseProcessingState|null
    */
    public function getLicenseProcessingState(): ?LicenseProcessingState {
        $val = $this->getBackingStore()->get('licenseProcessingState');
        if (is_null($val) || $val instanceof LicenseProcessingState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licenseProcessingState'");
    }

    /**
     * Gets the mail property value. The SMTP address for the group, for example, 'serviceadmins@contoso.com'. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
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
     * Gets the mailEnabled property value. Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not).
     * @return bool|null
    */
    public function getMailEnabled(): ?bool {
        $val = $this->getBackingStore()->get('mailEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailEnabled'");
    }

    /**
     * Gets the mailNickname property value. The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following characters: @ () / [] ' ; : <> , SPACE. Required. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
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
     * Gets the memberOf property value. Groups that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand.
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
     * Gets the members property value. The members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=members($select=id,userPrincipalName,displayName).
     * @return array<DirectoryObject>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Gets the membershipRule property value. The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     * @return string|null
    */
    public function getMembershipRule(): ?string {
        $val = $this->getBackingStore()->get('membershipRule');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membershipRule'");
    }

    /**
     * Gets the membershipRuleProcessingState property value. Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in).
     * @return string|null
    */
    public function getMembershipRuleProcessingState(): ?string {
        $val = $this->getBackingStore()->get('membershipRuleProcessingState');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membershipRuleProcessingState'");
    }

    /**
     * Gets the membersWithLicenseErrors property value. A list of group members with license errors from this group-based license assignment. Read-only.
     * @return array<DirectoryObject>|null
    */
    public function getMembersWithLicenseErrors(): ?array {
        $val = $this->getBackingStore()->get('membersWithLicenseErrors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membersWithLicenseErrors'");
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
     * Gets the onPremisesDomainName property value. Contains the on-premises domain FQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect.Returned by default. Read-only.
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
     * Gets the onPremisesLastSyncDateTime property value. Indicates the last time at which the group was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in).
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
     * Gets the onPremisesNetBiosName property value. Contains the on-premises netBios name synchronized from the on-premises directory. The property is only populated for customers synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect.Returned by default. Read-only.
     * @return string|null
    */
    public function getOnPremisesNetBiosName(): ?string {
        $val = $this->getBackingStore()->get('onPremisesNetBiosName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesNetBiosName'");
    }

    /**
     * Gets the onPremisesProvisioningErrors property value. Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not).
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
     * Gets the onPremisesSamAccountName property value. Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only.
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
     * Gets the onPremisesSecurityIdentifier property value. Contains the on-premises security identifier (SID) for the group synchronized from on-premises to the cloud. Read-only. Returned by default. Supports $filter (eq including on null values).
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
     * Gets the onPremisesSyncBehavior property value. The onPremisesSyncBehavior property
     * @return OnPremisesSyncBehavior|null
    */
    public function getOnPremisesSyncBehavior(): ?OnPremisesSyncBehavior {
        $val = $this->getBackingStore()->get('onPremisesSyncBehavior');
        if (is_null($val) || $val instanceof OnPremisesSyncBehavior) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesSyncBehavior'");
    }

    /**
     * Gets the onPremisesSyncEnabled property value. true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
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
     * Gets the owners property value. The owners of the group who can be users or service principals. Limited to 100 owners. Nullable. If this property isn't specified when creating a Microsoft 365 group the calling user (admin or non-admin) is automatically assigned as the group owner. A non-admin user can't explicitly add themselves to this collection when they're creating the group. For more information, see the related known issue. For security groups, the admin user isn't automatically added to this collection. For more information, see the related known issue. Supports $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1); Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=owners($select=id,userPrincipalName,displayName).
     * @return array<DirectoryObject>|null
    */
    public function getOwners(): ?array {
        $val = $this->getBackingStore()->get('owners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owners'");
    }

    /**
     * Gets the permissionGrants property value. The permissionGrants property
     * @return array<ResourceSpecificPermissionGrant>|null
    */
    public function getPermissionGrants(): ?array {
        $val = $this->getBackingStore()->get('permissionGrants');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ResourceSpecificPermissionGrant::class);
            /** @var array<ResourceSpecificPermissionGrant>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionGrants'");
    }

    /**
     * Gets the photo property value. The group's profile photo
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
     * Gets the photos property value. The profile photos owned by the group. Read-only. Nullable.
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
     * Gets the planner property value. Entry-point to Planner resource that might exist for a Unified Group.
     * @return PlannerGroup|null
    */
    public function getPlanner(): ?PlannerGroup {
        $val = $this->getBackingStore()->get('planner');
        if (is_null($val) || $val instanceof PlannerGroup) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planner'");
    }

    /**
     * Gets the preferredDataLocation property value. The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator's preferred data location. To set this property, the calling app must be granted the Directory.ReadWrite.All permission and the user be assigned at least one of the following Microsoft Entra roles: User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default.
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
     * Gets the preferredLanguage property value. The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example, en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
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
     * Gets the proxyAddresses property value. Email addresses for the group that direct to the same group mailbox. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. The any operator is required to filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, /$count eq 0, /$count ne 0).
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
     * Gets the rejectedSenders property value. The list of users or groups not allowed to create posts or calendar events in this group. Nullable
     * @return array<DirectoryObject>|null
    */
    public function getRejectedSenders(): ?array {
        $val = $this->getBackingStore()->get('rejectedSenders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rejectedSenders'");
    }

    /**
     * Gets the renewedDateTime property value. Timestamp of when the group was last renewed. This value can't be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @return DateTime|null
    */
    public function getRenewedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('renewedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'renewedDateTime'");
    }

    /**
     * Gets the resourceBehaviorOptions property value. Specifies the group behaviors that can be set for a Microsoft 365 group during creation. This property can be set only as part of creation (POST). For the list of possible values, see Microsoft 365 group behaviors and provisioning options.
     * @return array<string>|null
    */
    public function getResourceBehaviorOptions(): ?array {
        $val = $this->getBackingStore()->get('resourceBehaviorOptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceBehaviorOptions'");
    }

    /**
     * Gets the resourceProvisioningOptions property value. Specifies the group resources that are associated with the Microsoft 365 group. The possible value is Team. For more information, see Microsoft 365 group behaviors and provisioning options. Returned by default. Supports $filter (eq, not, startsWith).
     * @return array<string>|null
    */
    public function getResourceProvisioningOptions(): ?array {
        $val = $this->getBackingStore()->get('resourceProvisioningOptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceProvisioningOptions'");
    }

    /**
     * Gets the securityEnabled property value. Specifies whether the group is a security group. Required. Returned by default. Supports $filter (eq, ne, not, in).
     * @return bool|null
    */
    public function getSecurityEnabled(): ?bool {
        $val = $this->getBackingStore()->get('securityEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityEnabled'");
    }

    /**
     * Gets the securityIdentifier property value. Security identifier of the group, used in Windows scenarios. Read-only. Returned by default.
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
     * Gets the serviceProvisioningErrors property value. Errors published by a federated service describing a nontransient, service-specific error regarding the properties or link from a group object.  Supports $filter (eq, not, for isResolved and serviceInstance).
     * @return array<ServiceProvisioningError>|null
    */
    public function getServiceProvisioningErrors(): ?array {
        $val = $this->getBackingStore()->get('serviceProvisioningErrors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ServiceProvisioningError::class);
            /** @var array<ServiceProvisioningError>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceProvisioningErrors'");
    }

    /**
     * Gets the settings property value. Settings that can govern this group's behavior, like whether members can invite guests to the group. Nullable.
     * @return array<GroupSetting>|null
    */
    public function getSettings(): ?array {
        $val = $this->getBackingStore()->get('settings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupSetting::class);
            /** @var array<GroupSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the sites property value. The list of SharePoint sites in this group. Access the default site with /sites/root.
     * @return array<Site>|null
    */
    public function getSites(): ?array {
        $val = $this->getBackingStore()->get('sites');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Site::class);
            /** @var array<Site>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sites'");
    }

    /**
     * Gets the team property value. The team associated with this group.
     * @return Team|null
    */
    public function getTeam(): ?Team {
        $val = $this->getBackingStore()->get('team');
        if (is_null($val) || $val instanceof Team) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'team'");
    }

    /**
     * Gets the theme property value. Specifies a Microsoft 365 group's color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange, or Red. Returned by default.
     * @return string|null
    */
    public function getTheme(): ?string {
        $val = $this->getBackingStore()->get('theme');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'theme'");
    }

    /**
     * Gets the threads property value. The group's conversation threads. Nullable.
     * @return array<ConversationThread>|null
    */
    public function getThreads(): ?array {
        $val = $this->getBackingStore()->get('threads');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConversationThread::class);
            /** @var array<ConversationThread>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threads'");
    }

    /**
     * Gets the transitiveMemberOf property value. The groups that a group is a member of, either directly or through nested membership. Nullable.
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
     * Gets the transitiveMembers property value. The direct and transitive members of a group. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMembers(): ?array {
        $val = $this->getBackingStore()->get('transitiveMembers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transitiveMembers'");
    }

    /**
     * Gets the uniqueName property value. The unique identifier that can be assigned to a group and used as an alternate key. Immutable. Read-only.
     * @return string|null
    */
    public function getUniqueName(): ?string {
        $val = $this->getBackingStore()->get('uniqueName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uniqueName'");
    }

    /**
     * Gets the unseenCount property value. Count of conversations that received new posts since the signed-in user last visited the group. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return int|null
    */
    public function getUnseenCount(): ?int {
        $val = $this->getBackingStore()->get('unseenCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unseenCount'");
    }

    /**
     * Gets the visibility property value. Specifies the group join policy and group content visibility for groups. The possible values are: Private, Public, or HiddenMembership. HiddenMembership can be set only for Microsoft 365 groups when the groups are created. It can't be updated later. Other values of visibility can be updated after group creation. If visibility value isn't specified during group creation on Microsoft Graph, a security group is created as Private by default, and the Microsoft 365 group is Public. Groups assignable to roles are always Private. To learn more, see group visibility options. Returned by default. Nullable.
     * @return string|null
    */
    public function getVisibility(): ?string {
        $val = $this->getBackingStore()->get('visibility');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'visibility'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acceptedSenders', $this->getAcceptedSenders());
        $writer->writeBooleanValue('allowExternalSenders', $this->getAllowExternalSenders());
        $writer->writeCollectionOfObjectValues('appRoleAssignments', $this->getAppRoleAssignments());
        $writer->writeCollectionOfObjectValues('assignedLabels', $this->getAssignedLabels());
        $writer->writeCollectionOfObjectValues('assignedLicenses', $this->getAssignedLicenses());
        $writer->writeBooleanValue('autoSubscribeNewMembers', $this->getAutoSubscribeNewMembers());
        $writer->writeObjectValue('calendar', $this->getCalendar());
        $writer->writeCollectionOfObjectValues('calendarView', $this->getCalendarView());
        $writer->writeStringValue('classification', $this->getClassification());
        $writer->writeCollectionOfObjectValues('conversations', $this->getConversations());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('createdOnBehalfOf', $this->getCreatedOnBehalfOf());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('drive', $this->getDrive());
        $writer->writeCollectionOfObjectValues('drives', $this->getDrives());
        $writer->writeCollectionOfObjectValues('events', $this->getEvents());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeCollectionOfObjectValues('groupLifecyclePolicies', $this->getGroupLifecyclePolicies());
        $writer->writeCollectionOfPrimitiveValues('groupTypes', $this->getGroupTypes());
        $writer->writeBooleanValue('hasMembersWithLicenseErrors', $this->getHasMembersWithLicenseErrors());
        $writer->writeBooleanValue('hideFromAddressLists', $this->getHideFromAddressLists());
        $writer->writeBooleanValue('hideFromOutlookClients', $this->getHideFromOutlookClients());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeBooleanValue('isAssignableToRole', $this->getIsAssignableToRole());
        $writer->writeBooleanValue('isManagementRestricted', $this->getIsManagementRestricted());
        $writer->writeBooleanValue('isSubscribedByMail', $this->getIsSubscribedByMail());
        $writer->writeObjectValue('licenseProcessingState', $this->getLicenseProcessingState());
        $writer->writeStringValue('mail', $this->getMail());
        $writer->writeBooleanValue('mailEnabled', $this->getMailEnabled());
        $writer->writeStringValue('mailNickname', $this->getMailNickname());
        $writer->writeCollectionOfObjectValues('memberOf', $this->getMemberOf());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeStringValue('membershipRule', $this->getMembershipRule());
        $writer->writeStringValue('membershipRuleProcessingState', $this->getMembershipRuleProcessingState());
        $writer->writeCollectionOfObjectValues('membersWithLicenseErrors', $this->getMembersWithLicenseErrors());
        $writer->writeObjectValue('onenote', $this->getOnenote());
        $writer->writeStringValue('onPremisesDomainName', $this->getOnPremisesDomainName());
        $writer->writeDateTimeValue('onPremisesLastSyncDateTime', $this->getOnPremisesLastSyncDateTime());
        $writer->writeStringValue('onPremisesNetBiosName', $this->getOnPremisesNetBiosName());
        $writer->writeCollectionOfObjectValues('onPremisesProvisioningErrors', $this->getOnPremisesProvisioningErrors());
        $writer->writeStringValue('onPremisesSamAccountName', $this->getOnPremisesSamAccountName());
        $writer->writeStringValue('onPremisesSecurityIdentifier', $this->getOnPremisesSecurityIdentifier());
        $writer->writeObjectValue('onPremisesSyncBehavior', $this->getOnPremisesSyncBehavior());
        $writer->writeBooleanValue('onPremisesSyncEnabled', $this->getOnPremisesSyncEnabled());
        $writer->writeCollectionOfObjectValues('owners', $this->getOwners());
        $writer->writeCollectionOfObjectValues('permissionGrants', $this->getPermissionGrants());
        $writer->writeObjectValue('photo', $this->getPhoto());
        $writer->writeCollectionOfObjectValues('photos', $this->getPhotos());
        $writer->writeObjectValue('planner', $this->getPlanner());
        $writer->writeStringValue('preferredDataLocation', $this->getPreferredDataLocation());
        $writer->writeStringValue('preferredLanguage', $this->getPreferredLanguage());
        $writer->writeCollectionOfPrimitiveValues('proxyAddresses', $this->getProxyAddresses());
        $writer->writeCollectionOfObjectValues('rejectedSenders', $this->getRejectedSenders());
        $writer->writeDateTimeValue('renewedDateTime', $this->getRenewedDateTime());
        $writer->writeCollectionOfPrimitiveValues('resourceBehaviorOptions', $this->getResourceBehaviorOptions());
        $writer->writeCollectionOfPrimitiveValues('resourceProvisioningOptions', $this->getResourceProvisioningOptions());
        $writer->writeBooleanValue('securityEnabled', $this->getSecurityEnabled());
        $writer->writeStringValue('securityIdentifier', $this->getSecurityIdentifier());
        $writer->writeCollectionOfObjectValues('serviceProvisioningErrors', $this->getServiceProvisioningErrors());
        $writer->writeCollectionOfObjectValues('settings', $this->getSettings());
        $writer->writeCollectionOfObjectValues('sites', $this->getSites());
        $writer->writeObjectValue('team', $this->getTeam());
        $writer->writeStringValue('theme', $this->getTheme());
        $writer->writeCollectionOfObjectValues('threads', $this->getThreads());
        $writer->writeCollectionOfObjectValues('transitiveMemberOf', $this->getTransitiveMemberOf());
        $writer->writeCollectionOfObjectValues('transitiveMembers', $this->getTransitiveMembers());
        $writer->writeStringValue('uniqueName', $this->getUniqueName());
        $writer->writeIntegerValue('unseenCount', $this->getUnseenCount());
        $writer->writeStringValue('visibility', $this->getVisibility());
    }

    /**
     * Sets the acceptedSenders property value. The list of users or groups allowed to create posts or calendar events in this group. If this list is nonempty, then only users or groups listed here are allowed to post.
     * @param array<DirectoryObject>|null $value Value to set for the acceptedSenders property.
    */
    public function setAcceptedSenders(?array $value): void {
        $this->getBackingStore()->set('acceptedSenders', $value);
    }

    /**
     * Sets the allowExternalSenders property value. Indicates if people external to the organization can send messages to the group. The default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @param bool|null $value Value to set for the allowExternalSenders property.
    */
    public function setAllowExternalSenders(?bool $value): void {
        $this->getBackingStore()->set('allowExternalSenders', $value);
    }

    /**
     * Sets the appRoleAssignments property value. Represents the app roles granted to a group for an application. Supports $expand.
     * @param array<AppRoleAssignment>|null $value Value to set for the appRoleAssignments property.
    */
    public function setAppRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('appRoleAssignments', $value);
    }

    /**
     * Sets the assignedLabels property value. The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select. This property can be updated only in delegated scenarios where the caller requires both the Microsoft Graph permission and a supported administrator role.
     * @param array<AssignedLabel>|null $value Value to set for the assignedLabels property.
    */
    public function setAssignedLabels(?array $value): void {
        $this->getBackingStore()->set('assignedLabels', $value);
    }

    /**
     * Sets the assignedLicenses property value. The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq). Read-only.
     * @param array<AssignedLicense>|null $value Value to set for the assignedLicenses property.
    */
    public function setAssignedLicenses(?array $value): void {
        $this->getBackingStore()->set('assignedLicenses', $value);
    }

    /**
     * Sets the autoSubscribeNewMembers property value. Indicates if new members added to the group are autosubscribed to receive email notifications. You can set this property in a PATCH request for the group; don't set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @param bool|null $value Value to set for the autoSubscribeNewMembers property.
    */
    public function setAutoSubscribeNewMembers(?bool $value): void {
        $this->getBackingStore()->set('autoSubscribeNewMembers', $value);
    }

    /**
     * Sets the calendar property value. The group's calendar. Read-only.
     * @param Calendar|null $value Value to set for the calendar property.
    */
    public function setCalendar(?Calendar $value): void {
        $this->getBackingStore()->set('calendar', $value);
    }

    /**
     * Sets the calendarView property value. The calendar view for the calendar. Read-only.
     * @param array<Event>|null $value Value to set for the calendarView property.
    */
    public function setCalendarView(?array $value): void {
        $this->getBackingStore()->set('calendarView', $value);
    }

    /**
     * Sets the classification property value. Describes a classification for the group (such as low, medium, or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     * @param string|null $value Value to set for the classification property.
    */
    public function setClassification(?string $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

    /**
     * Sets the conversations property value. The group's conversations.
     * @param array<Conversation>|null $value Value to set for the conversations property.
    */
    public function setConversations(?array $value): void {
        $this->getBackingStore()->set('conversations', $value);
    }

    /**
     * Sets the createdDateTime property value. Timestamp of when the group was created. The value can't be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the createdOnBehalfOf property value. The user (or application) that created the group. NOTE: This property isn't set if the user is an administrator. Read-only.
     * @param DirectoryObject|null $value Value to set for the createdOnBehalfOf property.
    */
    public function setCreatedOnBehalfOf(?DirectoryObject $value): void {
        $this->getBackingStore()->set('createdOnBehalfOf', $value);
    }

    /**
     * Sets the description property value. An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name for the group. This property is required when a group is created and can't be cleared during updates. Maximum length is 256 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the drive property value. The group's default drive. Read-only.
     * @param Drive|null $value Value to set for the drive property.
    */
    public function setDrive(?Drive $value): void {
        $this->getBackingStore()->set('drive', $value);
    }

    /**
     * Sets the drives property value. The group's drives. Read-only.
     * @param array<Drive>|null $value Value to set for the drives property.
    */
    public function setDrives(?array $value): void {
        $this->getBackingStore()->set('drives', $value);
    }

    /**
     * Sets the events property value. The group's calendar events.
     * @param array<Event>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->getBackingStore()->set('events', $value);
    }

    /**
     * Sets the expirationDateTime property value. Timestamp of when the group is set to expire. It's null for security groups, but for Microsoft 365 groups, it represents when the group is set to expire as defined in the groupLifecyclePolicy. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the group. Read-only. Nullable.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the groupLifecyclePolicies property value. The collection of lifecycle policies for this group. Read-only. Nullable.
     * @param array<GroupLifecyclePolicy>|null $value Value to set for the groupLifecyclePolicies property.
    */
    public function setGroupLifecyclePolicies(?array $value): void {
        $this->getBackingStore()->set('groupLifecyclePolicies', $value);
    }

    /**
     * Sets the groupTypes property value. Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it's either a security group or a distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not).
     * @param array<string>|null $value Value to set for the groupTypes property.
    */
    public function setGroupTypes(?array $value): void {
        $this->getBackingStore()->set('groupTypes', $value);
    }

    /**
     * Sets the hasMembersWithLicenseErrors property value. Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true). See an example. Supports $filter (eq).
     * @param bool|null $value Value to set for the hasMembersWithLicenseErrors property.
    */
    public function setHasMembersWithLicenseErrors(?bool $value): void {
        $this->getBackingStore()->set('hasMembersWithLicenseErrors', $value);
    }

    /**
     * Sets the hideFromAddressLists property value. True if the group isn't displayed in certain parts of the Outlook UI: the Address Book, address lists for selecting message recipients, and the Browse Groups dialog for searching groups; otherwise, false. The default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @param bool|null $value Value to set for the hideFromAddressLists property.
    */
    public function setHideFromAddressLists(?bool $value): void {
        $this->getBackingStore()->set('hideFromAddressLists', $value);
    }

    /**
     * Sets the hideFromOutlookClients property value. True if the group isn't displayed in Outlook clients, such as Outlook for Windows and Outlook on the web; otherwise, false. The default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @param bool|null $value Value to set for the hideFromOutlookClients property.
    */
    public function setHideFromOutlookClients(?bool $value): void {
        $this->getBackingStore()->set('hideFromOutlookClients', $value);
    }

    /**
     * Sets the isArchived property value. When a group is associated with a team, this property determines whether the team is in read-only mode.To read this property, use the /group/{groupId}/team endpoint or the Get team API. To update this property, use the archiveTeam and unarchiveTeam APIs.
     * @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->getBackingStore()->set('isArchived', $value);
    }

    /**
     * Sets the isAssignableToRole property value. Indicates whether this group can be assigned to a Microsoft Entra role. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true, visibility must be Hidden, and the group can't be a dynamic group (that is, groupTypes can't contain DynamicMembership). Only callers with at least the Privileged Role Administrator role can set this property. The caller must also be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Microsoft Entra role assignmentsUsing this feature requires a Microsoft Entra ID P1 license. Returned by default. Supports $filter (eq, ne, not).
     * @param bool|null $value Value to set for the isAssignableToRole property.
    */
    public function setIsAssignableToRole(?bool $value): void {
        $this->getBackingStore()->set('isAssignableToRole', $value);
    }

    /**
     * Sets the isManagementRestricted property value. Indicates whether the group is a member of a restricted management administrative unit. If not set, the default value is null and the default behavior is false. Read-only.  To manage a group member of a restricted management administrative unit, the administrator or calling app must be assigned a Microsoft Entra role at the scope of the restricted management administrative unit. Returned only on $select.
     * @param bool|null $value Value to set for the isManagementRestricted property.
    */
    public function setIsManagementRestricted(?bool $value): void {
        $this->getBackingStore()->set('isManagementRestricted', $value);
    }

    /**
     * Sets the isSubscribedByMail property value. Indicates whether the signed-in user is subscribed to receive email conversations. The default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @param bool|null $value Value to set for the isSubscribedByMail property.
    */
    public function setIsSubscribedByMail(?bool $value): void {
        $this->getBackingStore()->set('isSubscribedByMail', $value);
    }

    /**
     * Sets the licenseProcessingState property value. Indicates the status of the group license assignment to all group members. The default value is false. Read-only. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete.Returned only on $select. Read-only.
     * @param LicenseProcessingState|null $value Value to set for the licenseProcessingState property.
    */
    public function setLicenseProcessingState(?LicenseProcessingState $value): void {
        $this->getBackingStore()->set('licenseProcessingState', $value);
    }

    /**
     * Sets the mail property value. The SMTP address for the group, for example, 'serviceadmins@contoso.com'. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the mail property.
    */
    public function setMail(?string $value): void {
        $this->getBackingStore()->set('mail', $value);
    }

    /**
     * Sets the mailEnabled property value. Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not).
     * @param bool|null $value Value to set for the mailEnabled property.
    */
    public function setMailEnabled(?bool $value): void {
        $this->getBackingStore()->set('mailEnabled', $value);
    }

    /**
     * Sets the mailNickname property value. The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following characters: @ () / [] ' ; : <> , SPACE. Required. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value): void {
        $this->getBackingStore()->set('mailNickname', $value);
    }

    /**
     * Sets the memberOf property value. Groups that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value): void {
        $this->getBackingStore()->set('memberOf', $value);
    }

    /**
     * Sets the members property value. The members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=members($select=id,userPrincipalName,displayName).
     * @param array<DirectoryObject>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the membershipRule property value. The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     * @param string|null $value Value to set for the membershipRule property.
    */
    public function setMembershipRule(?string $value): void {
        $this->getBackingStore()->set('membershipRule', $value);
    }

    /**
     * Sets the membershipRuleProcessingState property value. Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in).
     * @param string|null $value Value to set for the membershipRuleProcessingState property.
    */
    public function setMembershipRuleProcessingState(?string $value): void {
        $this->getBackingStore()->set('membershipRuleProcessingState', $value);
    }

    /**
     * Sets the membersWithLicenseErrors property value. A list of group members with license errors from this group-based license assignment. Read-only.
     * @param array<DirectoryObject>|null $value Value to set for the membersWithLicenseErrors property.
    */
    public function setMembersWithLicenseErrors(?array $value): void {
        $this->getBackingStore()->set('membersWithLicenseErrors', $value);
    }

    /**
     * Sets the onenote property value. The onenote property
     * @param Onenote|null $value Value to set for the onenote property.
    */
    public function setOnenote(?Onenote $value): void {
        $this->getBackingStore()->set('onenote', $value);
    }

    /**
     * Sets the onPremisesDomainName property value. Contains the on-premises domain FQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect.Returned by default. Read-only.
     * @param string|null $value Value to set for the onPremisesDomainName property.
    */
    public function setOnPremisesDomainName(?string $value): void {
        $this->getBackingStore()->set('onPremisesDomainName', $value);
    }

    /**
     * Sets the onPremisesLastSyncDateTime property value. Indicates the last time at which the group was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in).
     * @param DateTime|null $value Value to set for the onPremisesLastSyncDateTime property.
    */
    public function setOnPremisesLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('onPremisesLastSyncDateTime', $value);
    }

    /**
     * Sets the onPremisesNetBiosName property value. Contains the on-premises netBios name synchronized from the on-premises directory. The property is only populated for customers synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect.Returned by default. Read-only.
     * @param string|null $value Value to set for the onPremisesNetBiosName property.
    */
    public function setOnPremisesNetBiosName(?string $value): void {
        $this->getBackingStore()->set('onPremisesNetBiosName', $value);
    }

    /**
     * Sets the onPremisesProvisioningErrors property value. Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not).
     * @param array<OnPremisesProvisioningError>|null $value Value to set for the onPremisesProvisioningErrors property.
    */
    public function setOnPremisesProvisioningErrors(?array $value): void {
        $this->getBackingStore()->set('onPremisesProvisioningErrors', $value);
    }

    /**
     * Sets the onPremisesSamAccountName property value. Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers synchronizing their on-premises directory to Microsoft Entra ID via Microsoft Entra Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only.
     * @param string|null $value Value to set for the onPremisesSamAccountName property.
    */
    public function setOnPremisesSamAccountName(?string $value): void {
        $this->getBackingStore()->set('onPremisesSamAccountName', $value);
    }

    /**
     * Sets the onPremisesSecurityIdentifier property value. Contains the on-premises security identifier (SID) for the group synchronized from on-premises to the cloud. Read-only. Returned by default. Supports $filter (eq including on null values).
     * @param string|null $value Value to set for the onPremisesSecurityIdentifier property.
    */
    public function setOnPremisesSecurityIdentifier(?string $value): void {
        $this->getBackingStore()->set('onPremisesSecurityIdentifier', $value);
    }

    /**
     * Sets the onPremisesSyncBehavior property value. The onPremisesSyncBehavior property
     * @param OnPremisesSyncBehavior|null $value Value to set for the onPremisesSyncBehavior property.
    */
    public function setOnPremisesSyncBehavior(?OnPremisesSyncBehavior $value): void {
        $this->getBackingStore()->set('onPremisesSyncBehavior', $value);
    }

    /**
     * Sets the onPremisesSyncEnabled property value. true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     * @param bool|null $value Value to set for the onPremisesSyncEnabled property.
    */
    public function setOnPremisesSyncEnabled(?bool $value): void {
        $this->getBackingStore()->set('onPremisesSyncEnabled', $value);
    }

    /**
     * Sets the owners property value. The owners of the group who can be users or service principals. Limited to 100 owners. Nullable. If this property isn't specified when creating a Microsoft 365 group the calling user (admin or non-admin) is automatically assigned as the group owner. A non-admin user can't explicitly add themselves to this collection when they're creating the group. For more information, see the related known issue. For security groups, the admin user isn't automatically added to this collection. For more information, see the related known issue. Supports $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1); Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=owners($select=id,userPrincipalName,displayName).
     * @param array<DirectoryObject>|null $value Value to set for the owners property.
    */
    public function setOwners(?array $value): void {
        $this->getBackingStore()->set('owners', $value);
    }

    /**
     * Sets the permissionGrants property value. The permissionGrants property
     * @param array<ResourceSpecificPermissionGrant>|null $value Value to set for the permissionGrants property.
    */
    public function setPermissionGrants(?array $value): void {
        $this->getBackingStore()->set('permissionGrants', $value);
    }

    /**
     * Sets the photo property value. The group's profile photo
     * @param ProfilePhoto|null $value Value to set for the photo property.
    */
    public function setPhoto(?ProfilePhoto $value): void {
        $this->getBackingStore()->set('photo', $value);
    }

    /**
     * Sets the photos property value. The profile photos owned by the group. Read-only. Nullable.
     * @param array<ProfilePhoto>|null $value Value to set for the photos property.
    */
    public function setPhotos(?array $value): void {
        $this->getBackingStore()->set('photos', $value);
    }

    /**
     * Sets the planner property value. Entry-point to Planner resource that might exist for a Unified Group.
     * @param PlannerGroup|null $value Value to set for the planner property.
    */
    public function setPlanner(?PlannerGroup $value): void {
        $this->getBackingStore()->set('planner', $value);
    }

    /**
     * Sets the preferredDataLocation property value. The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator's preferred data location. To set this property, the calling app must be granted the Directory.ReadWrite.All permission and the user be assigned at least one of the following Microsoft Entra roles: User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default.
     * @param string|null $value Value to set for the preferredDataLocation property.
    */
    public function setPreferredDataLocation(?string $value): void {
        $this->getBackingStore()->set('preferredDataLocation', $value);
    }

    /**
     * Sets the preferredLanguage property value. The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example, en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the preferredLanguage property.
    */
    public function setPreferredLanguage(?string $value): void {
        $this->getBackingStore()->set('preferredLanguage', $value);
    }

    /**
     * Sets the proxyAddresses property value. Email addresses for the group that direct to the same group mailbox. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. The any operator is required to filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, /$count eq 0, /$count ne 0).
     * @param array<string>|null $value Value to set for the proxyAddresses property.
    */
    public function setProxyAddresses(?array $value): void {
        $this->getBackingStore()->set('proxyAddresses', $value);
    }

    /**
     * Sets the rejectedSenders property value. The list of users or groups not allowed to create posts or calendar events in this group. Nullable
     * @param array<DirectoryObject>|null $value Value to set for the rejectedSenders property.
    */
    public function setRejectedSenders(?array $value): void {
        $this->getBackingStore()->set('rejectedSenders', $value);
    }

    /**
     * Sets the renewedDateTime property value. Timestamp of when the group was last renewed. This value can't be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on January 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @param DateTime|null $value Value to set for the renewedDateTime property.
    */
    public function setRenewedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('renewedDateTime', $value);
    }

    /**
     * Sets the resourceBehaviorOptions property value. Specifies the group behaviors that can be set for a Microsoft 365 group during creation. This property can be set only as part of creation (POST). For the list of possible values, see Microsoft 365 group behaviors and provisioning options.
     * @param array<string>|null $value Value to set for the resourceBehaviorOptions property.
    */
    public function setResourceBehaviorOptions(?array $value): void {
        $this->getBackingStore()->set('resourceBehaviorOptions', $value);
    }

    /**
     * Sets the resourceProvisioningOptions property value. Specifies the group resources that are associated with the Microsoft 365 group. The possible value is Team. For more information, see Microsoft 365 group behaviors and provisioning options. Returned by default. Supports $filter (eq, not, startsWith).
     * @param array<string>|null $value Value to set for the resourceProvisioningOptions property.
    */
    public function setResourceProvisioningOptions(?array $value): void {
        $this->getBackingStore()->set('resourceProvisioningOptions', $value);
    }

    /**
     * Sets the securityEnabled property value. Specifies whether the group is a security group. Required. Returned by default. Supports $filter (eq, ne, not, in).
     * @param bool|null $value Value to set for the securityEnabled property.
    */
    public function setSecurityEnabled(?bool $value): void {
        $this->getBackingStore()->set('securityEnabled', $value);
    }

    /**
     * Sets the securityIdentifier property value. Security identifier of the group, used in Windows scenarios. Read-only. Returned by default.
     * @param string|null $value Value to set for the securityIdentifier property.
    */
    public function setSecurityIdentifier(?string $value): void {
        $this->getBackingStore()->set('securityIdentifier', $value);
    }

    /**
     * Sets the serviceProvisioningErrors property value. Errors published by a federated service describing a nontransient, service-specific error regarding the properties or link from a group object.  Supports $filter (eq, not, for isResolved and serviceInstance).
     * @param array<ServiceProvisioningError>|null $value Value to set for the serviceProvisioningErrors property.
    */
    public function setServiceProvisioningErrors(?array $value): void {
        $this->getBackingStore()->set('serviceProvisioningErrors', $value);
    }

    /**
     * Sets the settings property value. Settings that can govern this group's behavior, like whether members can invite guests to the group. Nullable.
     * @param array<GroupSetting>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the sites property value. The list of SharePoint sites in this group. Access the default site with /sites/root.
     * @param array<Site>|null $value Value to set for the sites property.
    */
    public function setSites(?array $value): void {
        $this->getBackingStore()->set('sites', $value);
    }

    /**
     * Sets the team property value. The team associated with this group.
     * @param Team|null $value Value to set for the team property.
    */
    public function setTeam(?Team $value): void {
        $this->getBackingStore()->set('team', $value);
    }

    /**
     * Sets the theme property value. Specifies a Microsoft 365 group's color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange, or Red. Returned by default.
     * @param string|null $value Value to set for the theme property.
    */
    public function setTheme(?string $value): void {
        $this->getBackingStore()->set('theme', $value);
    }

    /**
     * Sets the threads property value. The group's conversation threads. Nullable.
     * @param array<ConversationThread>|null $value Value to set for the threads property.
    */
    public function setThreads(?array $value): void {
        $this->getBackingStore()->set('threads', $value);
    }

    /**
     * Sets the transitiveMemberOf property value. The groups that a group is a member of, either directly or through nested membership. Nullable.
     * @param array<DirectoryObject>|null $value Value to set for the transitiveMemberOf property.
    */
    public function setTransitiveMemberOf(?array $value): void {
        $this->getBackingStore()->set('transitiveMemberOf', $value);
    }

    /**
     * Sets the transitiveMembers property value. The direct and transitive members of a group. Nullable.
     * @param array<DirectoryObject>|null $value Value to set for the transitiveMembers property.
    */
    public function setTransitiveMembers(?array $value): void {
        $this->getBackingStore()->set('transitiveMembers', $value);
    }

    /**
     * Sets the uniqueName property value. The unique identifier that can be assigned to a group and used as an alternate key. Immutable. Read-only.
     * @param string|null $value Value to set for the uniqueName property.
    */
    public function setUniqueName(?string $value): void {
        $this->getBackingStore()->set('uniqueName', $value);
    }

    /**
     * Sets the unseenCount property value. Count of conversations that received new posts since the signed-in user last visited the group. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @param int|null $value Value to set for the unseenCount property.
    */
    public function setUnseenCount(?int $value): void {
        $this->getBackingStore()->set('unseenCount', $value);
    }

    /**
     * Sets the visibility property value. Specifies the group join policy and group content visibility for groups. The possible values are: Private, Public, or HiddenMembership. HiddenMembership can be set only for Microsoft 365 groups when the groups are created. It can't be updated later. Other values of visibility can be updated after group creation. If visibility value isn't specified during group creation on Microsoft Graph, a security group is created as Private by default, and the Microsoft 365 group is Public. Groups assignable to roles are always Private. To learn more, see group visibility options. Returned by default. Nullable.
     * @param string|null $value Value to set for the visibility property.
    */
    public function setVisibility(?string $value): void {
        $this->getBackingStore()->set('visibility', $value);
    }

}
