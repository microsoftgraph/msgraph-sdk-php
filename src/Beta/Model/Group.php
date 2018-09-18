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
namespace Microsoft\Graph\Beta\Model;

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
    * Gets the classification
    *
    * @return string The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            return $this->_propDict["classification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classification
    *
    * @param string $val The classification
    *
    * @return Group
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Timestamp of when the group was created. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Timestamp of when the group was created. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Group
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
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
    * Gets the mail
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
    * Gets the membershipRule
    *
    * @return string The membershipRule
    */
    public function getMembershipRule()
    {
        if (array_key_exists("membershipRule", $this->_propDict)) {
            return $this->_propDict["membershipRule"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the membershipRule
    *
    * @param string $val The membershipRule
    *
    * @return Group
    */
    public function setMembershipRule($val)
    {
        $this->_propDict["membershipRule"] = $val;
        return $this;
    }
    
    /**
    * Gets the membershipRuleProcessingState
    *
    * @return string The membershipRuleProcessingState
    */
    public function getMembershipRuleProcessingState()
    {
        if (array_key_exists("membershipRuleProcessingState", $this->_propDict)) {
            return $this->_propDict["membershipRuleProcessingState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the membershipRuleProcessingState
    *
    * @param string $val The membershipRuleProcessingState
    *
    * @return Group
    */
    public function setMembershipRuleProcessingState($val)
    {
        $this->_propDict["membershipRuleProcessingState"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesLastSyncDateTime
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
     * Gets the onPremisesProvisioningErrors
     *
     * @return array The onPremisesProvisioningErrors
     */
    public function getOnPremisesProvisioningErrors()
    {
        if (array_key_exists("onPremisesProvisioningErrors", $this->_propDict)) {
           return $this->_propDict["onPremisesProvisioningErrors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the onPremisesProvisioningErrors
    *
    * @param OnPremisesProvisioningError $val The onPremisesProvisioningErrors
    *
    * @return Group
    */
    public function setOnPremisesProvisioningErrors($val)
    {
		$this->_propDict["onPremisesProvisioningErrors"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSecurityIdentifier
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
    * Gets the preferredLanguage
    *
    * @return string The preferredLanguage
    */
    public function getPreferredLanguage()
    {
        if (array_key_exists("preferredLanguage", $this->_propDict)) {
            return $this->_propDict["preferredLanguage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preferredLanguage
    *
    * @param string $val The preferredLanguage
    *
    * @return Group
    */
    public function setPreferredLanguage($val)
    {
        $this->_propDict["preferredLanguage"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyAddresses
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
    * Gets the renewedDateTime
    * Timestamp of when the group was last renewed. This cannot be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only.
    *
    * @return \DateTime The renewedDateTime
    */
    public function getRenewedDateTime()
    {
        if (array_key_exists("renewedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["renewedDateTime"], "\DateTime")) {
                return $this->_propDict["renewedDateTime"];
            } else {
                $this->_propDict["renewedDateTime"] = new \DateTime($this->_propDict["renewedDateTime"]);
                return $this->_propDict["renewedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the renewedDateTime
    * Timestamp of when the group was last renewed. This cannot be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only.
    *
    * @param \DateTime $val The renewedDateTime
    *
    * @return Group
    */
    public function setRenewedDateTime($val)
    {
        $this->_propDict["renewedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the securityEnabled
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
    * Gets the theme
    *
    * @return string The theme
    */
    public function getTheme()
    {
        if (array_key_exists("theme", $this->_propDict)) {
            return $this->_propDict["theme"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the theme
    *
    * @param string $val The theme
    *
    * @return Group
    */
    public function setTheme($val)
    {
        $this->_propDict["theme"] = $val;
        return $this;
    }
    
    /**
    * Gets the visibility
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
    * Gets the accessType
    *
    * @return GroupAccessType The accessType
    */
    public function getAccessType()
    {
        if (array_key_exists("accessType", $this->_propDict)) {
            if (is_a($this->_propDict["accessType"], "Microsoft\Graph\Beta\Model\GroupAccessType")) {
                return $this->_propDict["accessType"];
            } else {
                $this->_propDict["accessType"] = new GroupAccessType($this->_propDict["accessType"]);
                return $this->_propDict["accessType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessType
    *
    * @param GroupAccessType $val The accessType
    *
    * @return Group
    */
    public function setAccessType($val)
    {
        $this->_propDict["accessType"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowExternalSenders
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
    * Gets the isFavorite
    *
    * @return bool The isFavorite
    */
    public function getIsFavorite()
    {
        if (array_key_exists("isFavorite", $this->_propDict)) {
            return $this->_propDict["isFavorite"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isFavorite
    *
    * @param bool $val The isFavorite
    *
    * @return Group
    */
    public function setIsFavorite($val)
    {
        $this->_propDict["isFavorite"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isSubscribedByMail
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
    * Gets the unseenCount
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
    * Gets the unseenConversationsCount
    *
    * @return int The unseenConversationsCount
    */
    public function getUnseenConversationsCount()
    {
        if (array_key_exists("unseenConversationsCount", $this->_propDict)) {
            return $this->_propDict["unseenConversationsCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unseenConversationsCount
    *
    * @param int $val The unseenConversationsCount
    *
    * @return Group
    */
    public function setUnseenConversationsCount($val)
    {
        $this->_propDict["unseenConversationsCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the unseenMessagesCount
    *
    * @return int The unseenMessagesCount
    */
    public function getUnseenMessagesCount()
    {
        if (array_key_exists("unseenMessagesCount", $this->_propDict)) {
            return $this->_propDict["unseenMessagesCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unseenMessagesCount
    *
    * @param int $val The unseenMessagesCount
    *
    * @return Group
    */
    public function setUnseenMessagesCount($val)
    {
        $this->_propDict["unseenMessagesCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the extensions
     *
     * @return array The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extensions
    *
    * @param Extension $val The extensions
    *
    * @return Group
    */
    public function setExtensions($val)
    {
		$this->_propDict["extensions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the members
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
     * Gets the memberOf
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
    * Gets the createdOnBehalfOf
    *
    * @return DirectoryObject The createdOnBehalfOf
    */
    public function getCreatedOnBehalfOf()
    {
        if (array_key_exists("createdOnBehalfOf", $this->_propDict)) {
            if (is_a($this->_propDict["createdOnBehalfOf"], "Microsoft\Graph\Beta\Model\DirectoryObject")) {
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
     * Gets the owners
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
     * Gets the settings
     *
     * @return array The settings
     */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
           return $this->_propDict["settings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the settings
    *
    * @param DirectorySetting $val The settings
    *
    * @return Group
    */
    public function setSettings($val)
    {
		$this->_propDict["settings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the endpoints
     *
     * @return array The endpoints
     */
    public function getEndpoints()
    {
        if (array_key_exists("endpoints", $this->_propDict)) {
           return $this->_propDict["endpoints"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the endpoints
    *
    * @param Endpoint $val The endpoints
    *
    * @return Group
    */
    public function setEndpoints($val)
    {
		$this->_propDict["endpoints"] = $val;
        return $this;
    }
    

     /** 
     * Gets the threads
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
    
    /**
    * Gets the calendar
    *
    * @return Calendar The calendar
    */
    public function getCalendar()
    {
        if (array_key_exists("calendar", $this->_propDict)) {
            if (is_a($this->_propDict["calendar"], "Microsoft\Graph\Beta\Model\Calendar")) {
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
     * Gets the events
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
     * Gets the conversations
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
    * Gets the photo
    *
    * @return ProfilePhoto The photo
    */
    public function getPhoto()
    {
        if (array_key_exists("photo", $this->_propDict)) {
            if (is_a($this->_propDict["photo"], "Microsoft\Graph\Beta\Model\ProfilePhoto")) {
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
     * Gets the photos
     *
     * @return array The photos
     */
    public function getPhotos()
    {
        if (array_key_exists("photos", $this->_propDict)) {
           return $this->_propDict["photos"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the photos
    *
    * @param ProfilePhoto $val The photos
    *
    * @return Group
    */
    public function setPhotos($val)
    {
		$this->_propDict["photos"] = $val;
        return $this;
    }
    

     /** 
     * Gets the acceptedSenders
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
     * Gets the rejectedSenders
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
    * Gets the drive
    *
    * @return Drive The drive
    */
    public function getDrive()
    {
        if (array_key_exists("drive", $this->_propDict)) {
            if (is_a($this->_propDict["drive"], "Microsoft\Graph\Beta\Model\Drive")) {
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
     * Gets the drives
     *
     * @return array The drives
     */
    public function getDrives()
    {
        if (array_key_exists("drives", $this->_propDict)) {
           return $this->_propDict["drives"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the drives
    *
    * @param Drive $val The drives
    *
    * @return Group
    */
    public function setDrives($val)
    {
		$this->_propDict["drives"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sites
     *
     * @return array The sites
     */
    public function getSites()
    {
        if (array_key_exists("sites", $this->_propDict)) {
           return $this->_propDict["sites"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sites
    *
    * @param Site $val The sites
    *
    * @return Group
    */
    public function setSites($val)
    {
		$this->_propDict["sites"] = $val;
        return $this;
    }
    
    /**
    * Gets the planner
    *
    * @return PlannerGroup The planner
    */
    public function getPlanner()
    {
        if (array_key_exists("planner", $this->_propDict)) {
            if (is_a($this->_propDict["planner"], "Microsoft\Graph\Beta\Model\PlannerGroup")) {
                return $this->_propDict["planner"];
            } else {
                $this->_propDict["planner"] = new PlannerGroup($this->_propDict["planner"]);
                return $this->_propDict["planner"];
            }
        }
        return null;
    }
    
    /**
    * Sets the planner
    *
    * @param PlannerGroup $val The planner
    *
    * @return Group
    */
    public function setPlanner($val)
    {
        $this->_propDict["planner"] = $val;
        return $this;
    }
    
    /**
    * Gets the onenote
    *
    * @return Onenote The onenote
    */
    public function getOnenote()
    {
        if (array_key_exists("onenote", $this->_propDict)) {
            if (is_a($this->_propDict["onenote"], "Microsoft\Graph\Beta\Model\Onenote")) {
                return $this->_propDict["onenote"];
            } else {
                $this->_propDict["onenote"] = new Onenote($this->_propDict["onenote"]);
                return $this->_propDict["onenote"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onenote
    *
    * @param Onenote $val The onenote
    *
    * @return Group
    */
    public function setOnenote($val)
    {
        $this->_propDict["onenote"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupLifecyclePolicies
     *
     * @return array The groupLifecyclePolicies
     */
    public function getGroupLifecyclePolicies()
    {
        if (array_key_exists("groupLifecyclePolicies", $this->_propDict)) {
           return $this->_propDict["groupLifecyclePolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the groupLifecyclePolicies
    *
    * @param GroupLifecyclePolicy $val The groupLifecyclePolicies
    *
    * @return Group
    */
    public function setGroupLifecyclePolicies($val)
    {
		$this->_propDict["groupLifecyclePolicies"] = $val;
        return $this;
    }
    
}