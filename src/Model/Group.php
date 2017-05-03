<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Group File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Group class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Group extends DirectoryObject
{
    /**
    * Gets the allowExternalSenders
    * Default is false. Indicates if people external to the organization can send messages to the group.
    *
    * @return bool The allowExternalSenders
    */
    public function getAllowExternalSenders()
    {
        if (array_key_exists("allowExternalSenders", $this->_propDict)) {
            return $this->_propDict["allowExternalSenders"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowExternalSenders
    * Default is false. Indicates if people external to the organization can send messages to the group.
    *
    * @param bool $val The allowExternalSenders
    *
    * @return Group
    */
    public function setAllowExternalSenders($val)
    {
        $this->_propDict["allowExternalSenders"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the autoSubscribeNewMembers
    * Default is false. Indicates if new members added to the group will be auto-subscribed to receive email notifications. You can set this property in a PATCH request for the group; do not set it in the initial POST request that creates the group.
    *
    * @return bool The autoSubscribeNewMembers
    */
    public function getAutoSubscribeNewMembers()
    {
        if (array_key_exists("autoSubscribeNewMembers", $this->_propDict)) {
            return $this->_propDict["autoSubscribeNewMembers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the autoSubscribeNewMembers
    * Default is false. Indicates if new members added to the group will be auto-subscribed to receive email notifications. You can set this property in a PATCH request for the group; do not set it in the initial POST request that creates the group.
    *
    * @param bool $val The autoSubscribeNewMembers
    *
    * @return Group
    */
    public function setAutoSubscribeNewMembers($val)
    {
        $this->_propDict["autoSubscribeNewMembers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the description
    * An optional description for the group.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * An optional description for the group.
    *
    * @param string $val The description
    *
    * @return Group
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name for the group. This property is required when a group is created and it cannot be cleared during updates. Supports $filter and $orderby.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The display name for the group. This property is required when a group is created and it cannot be cleared during updates. Supports $filter and $orderby.
    *
    * @param string $val The displayName
    *
    * @return Group
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupTypes
    * Specifies the type of group to create. Possible values are Unified to create an Office 365 group, or DynamicMembership for dynamic groups.  For all other group types, like security-enabled groups and email-enabled security groups, do not set this property. Supports $filter.
    *
    * @return string The groupTypes
    */
    public function getGroupTypes()
    {
        if (array_key_exists("groupTypes", $this->_propDict)) {
            return $this->_propDict["groupTypes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupTypes
    * Specifies the type of group to create. Possible values are Unified to create an Office 365 group, or DynamicMembership for dynamic groups.  For all other group types, like security-enabled groups and email-enabled security groups, do not set this property. Supports $filter.
    *
    * @param string $val The groupTypes
    *
    * @return Group
    */
    public function setGroupTypes($val)
    {
        $this->_propDict["groupTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the isSubscribedByMail
    * Default value is true. Indicates whether the current user is subscribed to receive email conversations.
    *
    * @return bool The isSubscribedByMail
    */
    public function getIsSubscribedByMail()
    {
        if (array_key_exists("isSubscribedByMail", $this->_propDict)) {
            return $this->_propDict["isSubscribedByMail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSubscribedByMail
    * Default value is true. Indicates whether the current user is subscribed to receive email conversations.
    *
    * @param bool $val The isSubscribedByMail
    *
    * @return Group
    */
    public function setIsSubscribedByMail($val)
    {
        $this->_propDict["isSubscribedByMail"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the mail
    * The SMTP address for the group, for example, "serviceadmins@contoso.onmicrosoft.com". Read-only. Supports $filter.
    *
    * @return string The mail
    */
    public function getMail()
    {
        if (array_key_exists("mail", $this->_propDict)) {
            return $this->_propDict["mail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mail
    * The SMTP address for the group, for example, "serviceadmins@contoso.onmicrosoft.com". Read-only. Supports $filter.
    *
    * @param string $val The mail
    *
    * @return Group
    */
    public function setMail($val)
    {
        $this->_propDict["mail"] = $val;
        return $this;
    }
    
    /**
    * Gets the mailEnabled
    * Specifies whether the group is mail-enabled. If the securityEnabled property is also true, the group is a mail-enabled security group; otherwise, the group is a Microsoft Exchange distribution group.
    *
    * @return bool The mailEnabled
    */
    public function getMailEnabled()
    {
        if (array_key_exists("mailEnabled", $this->_propDict)) {
            return $this->_propDict["mailEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mailEnabled
    * Specifies whether the group is mail-enabled. If the securityEnabled property is also true, the group is a mail-enabled security group; otherwise, the group is a Microsoft Exchange distribution group.
    *
    * @param bool $val The mailEnabled
    *
    * @return Group
    */
    public function setMailEnabled($val)
    {
        $this->_propDict["mailEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the mailNickname
    * The mail alias for the group. This property must be specified when a group is created. Supports $filter.
    *
    * @return string The mailNickname
    */
    public function getMailNickname()
    {
        if (array_key_exists("mailNickname", $this->_propDict)) {
            return $this->_propDict["mailNickname"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mailNickname
    * The mail alias for the group. This property must be specified when a group is created. Supports $filter.
    *
    * @param string $val The mailNickname
    *
    * @return Group
    */
    public function setMailNickname($val)
    {
        $this->_propDict["mailNickname"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesLastSyncDateTime
    * Indicates the last time at which the group was synced with the on-premises directory.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only. Supports $filter.
    *
    * @return \DateTime The onPremisesLastSyncDateTime
    */
    public function getOnPremisesLastSyncDateTime()
    {
        if (array_key_exists("onPremisesLastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesLastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["onPremisesLastSyncDateTime"];
            } else {
                $this->_propDict["onPremisesLastSyncDateTime"] = new \DateTime($this->_propDict["onPremisesLastSyncDateTime"]);
                return $this->_propDict["onPremisesLastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onPremisesLastSyncDateTime
    * Indicates the last time at which the group was synced with the on-premises directory.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only. Supports $filter.
    *
    * @param \DateTime $val The onPremisesLastSyncDateTime
    *
    * @return Group
    */
    public function setOnPremisesLastSyncDateTime($val)
    {
        $this->_propDict["onPremisesLastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSecurityIdentifier
    * Contains the on-premises security identifier (SID) for the group that was synchronized from on-premises to the cloud. Read-only.
    *
    * @return string The onPremisesSecurityIdentifier
    */
    public function getOnPremisesSecurityIdentifier()
    {
        if (array_key_exists("onPremisesSecurityIdentifier", $this->_propDict)) {
            return $this->_propDict["onPremisesSecurityIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesSecurityIdentifier
    * Contains the on-premises security identifier (SID) for the group that was synchronized from on-premises to the cloud. Read-only.
    *
    * @param string $val The onPremisesSecurityIdentifier
    *
    * @return Group
    */
    public function setOnPremisesSecurityIdentifier($val)
    {
        $this->_propDict["onPremisesSecurityIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSyncEnabled
    * true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter.
    *
    * @return bool The onPremisesSyncEnabled
    */
    public function getOnPremisesSyncEnabled()
    {
        if (array_key_exists("onPremisesSyncEnabled", $this->_propDict)) {
            return $this->_propDict["onPremisesSyncEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesSyncEnabled
    * true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter.
    *
    * @param bool $val The onPremisesSyncEnabled
    *
    * @return Group
    */
    public function setOnPremisesSyncEnabled($val)
    {
        $this->_propDict["onPremisesSyncEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the proxyAddresses
    * The any operator is required for filter expressions on multi-valued properties. Read-only. Not nullable. Supports $filter.
    *
    * @return string The proxyAddresses
    */
    public function getProxyAddresses()
    {
        if (array_key_exists("proxyAddresses", $this->_propDict)) {
            return $this->_propDict["proxyAddresses"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the proxyAddresses
    * The any operator is required for filter expressions on multi-valued properties. Read-only. Not nullable. Supports $filter.
    *
    * @param string $val The proxyAddresses
    *
    * @return Group
    */
    public function setProxyAddresses($val)
    {
        $this->_propDict["proxyAddresses"] = $val;
        return $this;
    }
    
    /**
    * Gets the securityEnabled
    * Specifies whether the group is a security group. If the mailEnabled property is also true, the group is a mail-enabled security group; otherwise it is a security group. Must be false for Office 365 groups. Supports $filter.
    *
    * @return bool The securityEnabled
    */
    public function getSecurityEnabled()
    {
        if (array_key_exists("securityEnabled", $this->_propDict)) {
            return $this->_propDict["securityEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityEnabled
    * Specifies whether the group is a security group. If the mailEnabled property is also true, the group is a mail-enabled security group; otherwise it is a security group. Must be false for Office 365 groups. Supports $filter.
    *
    * @param bool $val The securityEnabled
    *
    * @return Group
    */
    public function setSecurityEnabled($val)
    {
        $this->_propDict["securityEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the unseenCount
    * Count of posts that the current  user has not seen since his last visit.
    *
    * @return int The unseenCount
    */
    public function getUnseenCount()
    {
        if (array_key_exists("unseenCount", $this->_propDict)) {
            return $this->_propDict["unseenCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unseenCount
    * Count of posts that the current  user has not seen since his last visit.
    *
    * @param int $val The unseenCount
    *
    * @return Group
    */
    public function setUnseenCount($val)
    {
        $this->_propDict["unseenCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the visibility
    * Specifies the visibility of an Office 365 group. Possible values are: Private, Public, or empty (which is interpreted as Public).
    *
    * @return string The visibility
    */
    public function getVisibility()
    {
        if (array_key_exists("visibility", $this->_propDict)) {
            return $this->_propDict["visibility"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the visibility
    * Specifies the visibility of an Office 365 group. Possible values are: Private, Public, or empty (which is interpreted as Public).
    *
    * @param string $val The visibility
    *
    * @return Group
    */
    public function setVisibility($val)
    {
        $this->_propDict["visibility"] = $val;
        return $this;
    }
    

     /** 
     * Gets the acceptedSenders
    * The list of users or groups that are allowed to create post's or calendar events in this group. If this list is non-empty then only users or groups listed here are allowed to post.
     *
     * @return array The acceptedSenders
     */
    public function getAcceptedSenders()
    {
        if (array_key_exists("acceptedSenders", $this->_propDict)) {
           return $this->_propDict["acceptedSenders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the acceptedSenders
    * The list of users or groups that are allowed to create post's or calendar events in this group. If this list is non-empty then only users or groups listed here are allowed to post.
    *
    * @param DirectoryObject $val The acceptedSenders
    *
    * @return Group
    */
    public function setAcceptedSenders($val)
    {
		$this->_propDict["acceptedSenders"] = $val;
        return $this;
    }
    
    /**
    * Gets the calendar
    * The group's calendar. Read-only.
    *
    * @return Calendar The calendar
    */
    public function getCalendar()
    {
        if (array_key_exists("calendar", $this->_propDict)) {
            if (is_a($this->_propDict["calendar"], "Microsoft\Graph\Model\Calendar")) {
                return $this->_propDict["calendar"];
            } else {
                $this->_propDict["calendar"] = new Calendar($this->_propDict["calendar"]);
                return $this->_propDict["calendar"];
            }
        }
        return null;
    }
    
    /**
    * Sets the calendar
    * The group's calendar. Read-only.
    *
    * @param Calendar $val The calendar
    *
    * @return Group
    */
    public function setCalendar($val)
    {
        $this->_propDict["calendar"] = $val;
        return $this;
    }
    

     /** 
     * Gets the calendarView
    * The calendar view for the calendar. Read-only.
     *
     * @return array The calendarView
     */
    public function getCalendarView()
    {
        if (array_key_exists("calendarView", $this->_propDict)) {
           return $this->_propDict["calendarView"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the calendarView
    * The calendar view for the calendar. Read-only.
    *
    * @param Event $val The calendarView
    *
    * @return Group
    */
    public function setCalendarView($val)
    {
		$this->_propDict["calendarView"] = $val;
        return $this;
    }
    

     /** 
     * Gets the conversations
    * The group's conversations.
     *
     * @return array The conversations
     */
    public function getConversations()
    {
        if (array_key_exists("conversations", $this->_propDict)) {
           return $this->_propDict["conversations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the conversations
    * The group's conversations.
    *
    * @param Conversation $val The conversations
    *
    * @return Group
    */
    public function setConversations($val)
    {
		$this->_propDict["conversations"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdOnBehalfOf
    * The user (or application) that created the group. NOTE: This is not set if the user is an administrator. Read-only.
    *
    * @return DirectoryObject The createdOnBehalfOf
    */
    public function getCreatedOnBehalfOf()
    {
        if (array_key_exists("createdOnBehalfOf", $this->_propDict)) {
            if (is_a($this->_propDict["createdOnBehalfOf"], "Microsoft\Graph\Model\DirectoryObject")) {
                return $this->_propDict["createdOnBehalfOf"];
            } else {
                $this->_propDict["createdOnBehalfOf"] = new DirectoryObject($this->_propDict["createdOnBehalfOf"]);
                return $this->_propDict["createdOnBehalfOf"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdOnBehalfOf
    * The user (or application) that created the group. NOTE: This is not set if the user is an administrator. Read-only.
    *
    * @param DirectoryObject $val The createdOnBehalfOf
    *
    * @return Group
    */
    public function setCreatedOnBehalfOf($val)
    {
        $this->_propDict["createdOnBehalfOf"] = $val;
        return $this;
    }
    
    /**
    * Gets the drive
    * The group's drive. Read-only.
    *
    * @return Drive The drive
    */
    public function getDrive()
    {
        if (array_key_exists("drive", $this->_propDict)) {
            if (is_a($this->_propDict["drive"], "Microsoft\Graph\Model\Drive")) {
                return $this->_propDict["drive"];
            } else {
                $this->_propDict["drive"] = new Drive($this->_propDict["drive"]);
                return $this->_propDict["drive"];
            }
        }
        return null;
    }
    
    /**
    * Sets the drive
    * The group's drive. Read-only.
    *
    * @param Drive $val The drive
    *
    * @return Group
    */
    public function setDrive($val)
    {
        $this->_propDict["drive"] = $val;
        return $this;
    }
    

     /** 
     * Gets the events
    * The group's calendar events.
     *
     * @return array The events
     */
    public function getEvents()
    {
        if (array_key_exists("events", $this->_propDict)) {
           return $this->_propDict["events"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the events
    * The group's calendar events.
    *
    * @param Event $val The events
    *
    * @return Group
    */
    public function setEvents($val)
    {
		$this->_propDict["events"] = $val;
        return $this;
    }
    

     /** 
     * Gets the memberOf
    * Groups that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable.
     *
     * @return array The memberOf
     */
    public function getMemberOf()
    {
        if (array_key_exists("memberOf", $this->_propDict)) {
           return $this->_propDict["memberOf"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the memberOf
    * Groups that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable.
    *
    * @param DirectoryObject $val The memberOf
    *
    * @return Group
    */
    public function setMemberOf($val)
    {
		$this->_propDict["memberOf"] = $val;
        return $this;
    }
    

     /** 
     * Gets the members
    * Users and groups that are members of this group. HTTP Methods: GET (supported for all groups), POST (supported for Office 365 groups, security groups and mail-enabled security groups), DELETE (supported for Office 365 groups and security groups) Nullable.
     *
     * @return array The members
     */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
           return $this->_propDict["members"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the members
    * Users and groups that are members of this group. HTTP Methods: GET (supported for all groups), POST (supported for Office 365 groups, security groups and mail-enabled security groups), DELETE (supported for Office 365 groups and security groups) Nullable.
    *
    * @param DirectoryObject $val The members
    *
    * @return Group
    */
    public function setMembers($val)
    {
		$this->_propDict["members"] = $val;
        return $this;
    }
    

     /** 
     * Gets the owners
    * The owners of the group. The owners are a set of non-admin users who are allowed to modify this object. Limited to 10 owners. HTTP Methods: GET (supported for all groups), POST (supported for Office 365 groups, security groups and mail-enabled security groups), DELETE (supported for Office 365 groups and security groups). Nullable.
     *
     * @return array The owners
     */
    public function getOwners()
    {
        if (array_key_exists("owners", $this->_propDict)) {
           return $this->_propDict["owners"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the owners
    * The owners of the group. The owners are a set of non-admin users who are allowed to modify this object. Limited to 10 owners. HTTP Methods: GET (supported for all groups), POST (supported for Office 365 groups, security groups and mail-enabled security groups), DELETE (supported for Office 365 groups and security groups). Nullable.
    *
    * @param DirectoryObject $val The owners
    *
    * @return Group
    */
    public function setOwners($val)
    {
		$this->_propDict["owners"] = $val;
        return $this;
    }
    
    /**
    * Gets the photo
    * The group's profile photo
    *
    * @return ProfilePhoto The photo
    */
    public function getPhoto()
    {
        if (array_key_exists("photo", $this->_propDict)) {
            if (is_a($this->_propDict["photo"], "Microsoft\Graph\Model\ProfilePhoto")) {
                return $this->_propDict["photo"];
            } else {
                $this->_propDict["photo"] = new ProfilePhoto($this->_propDict["photo"]);
                return $this->_propDict["photo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the photo
    * The group's profile photo
    *
    * @param ProfilePhoto $val The photo
    *
    * @return Group
    */
    public function setPhoto($val)
    {
        $this->_propDict["photo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rejectedSenders
    * The list of users or groups that are not allowed to create posts or calendar events in this group. Nullable
     *
     * @return array The rejectedSenders
     */
    public function getRejectedSenders()
    {
        if (array_key_exists("rejectedSenders", $this->_propDict)) {
           return $this->_propDict["rejectedSenders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rejectedSenders
    * The list of users or groups that are not allowed to create posts or calendar events in this group. Nullable
    *
    * @param DirectoryObject $val The rejectedSenders
    *
    * @return Group
    */
    public function setRejectedSenders($val)
    {
		$this->_propDict["rejectedSenders"] = $val;
        return $this;
    }
    

     /** 
     * Gets the threads
    * The group's conversation threads. Nullable.
     *
     * @return array The threads
     */
    public function getThreads()
    {
        if (array_key_exists("threads", $this->_propDict)) {
           return $this->_propDict["threads"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the threads
    * The group's conversation threads. Nullable.
    *
    * @param ConversationThread $val The threads
    *
    * @return Group
    */
    public function setThreads($val)
    {
		$this->_propDict["threads"] = $val;
        return $this;
    }
    
}