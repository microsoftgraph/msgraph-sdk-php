<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Calendar File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Calendar class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Calendar extends Entity
{
    /**
    * Gets the name
    * The calendar name.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    * The calendar name.
    *
    * @param string $val The name
    *
    * @return Calendar
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the color
    * Specifies the color theme to distinguish the calendar from other calendars in a UI. The property values are: LightBlue=0, LightGreen=1, LightOrange=2, LightGray=3, LightYellow=4, LightTeal=5, LightPink=6, LightBrown=7, LightRed=8, MaxColor=9, Auto=-1
    *
    * @return CalendarColor The color
    */
    public function getColor()
    {
        if (array_key_exists("color", $this->_propDict)) {
            if (is_a($this->_propDict["color"], "Microsoft\Graph\Model\CalendarColor")) {
                return $this->_propDict["color"];
            } else {
                $this->_propDict["color"] = new CalendarColor($this->_propDict["color"]);
                return $this->_propDict["color"];
            }
        }
        return null;
    }
    
    /**
    * Sets the color
    * Specifies the color theme to distinguish the calendar from other calendars in a UI. The property values are: LightBlue=0, LightGreen=1, LightOrange=2, LightGray=3, LightYellow=4, LightTeal=5, LightPink=6, LightBrown=7, LightRed=8, MaxColor=9, Auto=-1
    *
    * @param CalendarColor $val The color
    *
    * @return Calendar
    */
    public function setColor($val)
    {
        $this->_propDict["color"] = $val;
        return $this;
    }
    
    /**
    * Gets the changeKey
    * Identifies the version of the calendar object. Every time the calendar is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
    *
    * @return string The changeKey
    */
    public function getChangeKey()
    {
        if (array_key_exists("changeKey", $this->_propDict)) {
            return $this->_propDict["changeKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the changeKey
    * Identifies the version of the calendar object. Every time the calendar is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
    *
    * @param string $val The changeKey
    *
    * @return Calendar
    */
    public function setChangeKey($val)
    {
        $this->_propDict["changeKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the canShare
    * True if the user has the permission to share the calendar, false otherwise. Only the user who created the calendar can share it.
    *
    * @return bool The canShare
    */
    public function getCanShare()
    {
        if (array_key_exists("canShare", $this->_propDict)) {
            return $this->_propDict["canShare"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the canShare
    * True if the user has the permission to share the calendar, false otherwise. Only the user who created the calendar can share it.
    *
    * @param bool $val The canShare
    *
    * @return Calendar
    */
    public function setCanShare($val)
    {
        $this->_propDict["canShare"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the canViewPrivateItems
    * True if the user can read calendar items that have been marked private, false otherwise.
    *
    * @return bool The canViewPrivateItems
    */
    public function getCanViewPrivateItems()
    {
        if (array_key_exists("canViewPrivateItems", $this->_propDict)) {
            return $this->_propDict["canViewPrivateItems"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the canViewPrivateItems
    * True if the user can read calendar items that have been marked private, false otherwise.
    *
    * @param bool $val The canViewPrivateItems
    *
    * @return Calendar
    */
    public function setCanViewPrivateItems($val)
    {
        $this->_propDict["canViewPrivateItems"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the canEdit
    * True if the user can write to the calendar, false otherwise. This property is true for the user who created the calendar. This property is also true for a user who has been shared a calendar and granted write access.
    *
    * @return bool The canEdit
    */
    public function getCanEdit()
    {
        if (array_key_exists("canEdit", $this->_propDict)) {
            return $this->_propDict["canEdit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the canEdit
    * True if the user can write to the calendar, false otherwise. This property is true for the user who created the calendar. This property is also true for a user who has been shared a calendar and granted write access.
    *
    * @param bool $val The canEdit
    *
    * @return Calendar
    */
    public function setCanEdit($val)
    {
        $this->_propDict["canEdit"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the owner
    * If set, this represents the user who created or added the calendar. For a calendar that the user created or added, the owner property is set to the user. For a calendar shared with the user, the owner property is set to the person who shared that calendar with the user.
    *
    * @return EmailAddress The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            if (is_a($this->_propDict["owner"], "Microsoft\Graph\Model\EmailAddress")) {
                return $this->_propDict["owner"];
            } else {
                $this->_propDict["owner"] = new EmailAddress($this->_propDict["owner"]);
                return $this->_propDict["owner"];
            }
        }
        return null;
    }
    
    /**
    * Sets the owner
    * If set, this represents the user who created or added the calendar. For a calendar that the user created or added, the owner property is set to the user. For a calendar shared with the user, the owner property is set to the person who shared that calendar with the user.
    *
    * @param EmailAddress $val The owner
    *
    * @return Calendar
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }
    

     /** 
     * Gets the allowedOnlineMeetingProviders
    * Represent the online meeting service providers that can be used to create online meetings in this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
     *
     * @return array The allowedOnlineMeetingProviders
     */
    public function getAllowedOnlineMeetingProviders()
    {
        if (array_key_exists("allowedOnlineMeetingProviders", $this->_propDict)) {
           return $this->_propDict["allowedOnlineMeetingProviders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the allowedOnlineMeetingProviders
    * Represent the online meeting service providers that can be used to create online meetings in this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
    *
    * @param OnlineMeetingProviderType $val The allowedOnlineMeetingProviders
    *
    * @return Calendar
    */
    public function setAllowedOnlineMeetingProviders($val)
    {
		$this->_propDict["allowedOnlineMeetingProviders"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultOnlineMeetingProvider
    * The default online meeting provider for meetings sent from this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
    *
    * @return OnlineMeetingProviderType The defaultOnlineMeetingProvider
    */
    public function getDefaultOnlineMeetingProvider()
    {
        if (array_key_exists("defaultOnlineMeetingProvider", $this->_propDict)) {
            if (is_a($this->_propDict["defaultOnlineMeetingProvider"], "Microsoft\Graph\Model\OnlineMeetingProviderType")) {
                return $this->_propDict["defaultOnlineMeetingProvider"];
            } else {
                $this->_propDict["defaultOnlineMeetingProvider"] = new OnlineMeetingProviderType($this->_propDict["defaultOnlineMeetingProvider"]);
                return $this->_propDict["defaultOnlineMeetingProvider"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultOnlineMeetingProvider
    * The default online meeting provider for meetings sent from this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
    *
    * @param OnlineMeetingProviderType $val The defaultOnlineMeetingProvider
    *
    * @return Calendar
    */
    public function setDefaultOnlineMeetingProvider($val)
    {
        $this->_propDict["defaultOnlineMeetingProvider"] = $val;
        return $this;
    }
    
    /**
    * Gets the isTallyingResponses
    * Indicates whether this user calendar supports tracking of meeting responses. Only meeting invites sent from users' primary calendars support tracking of meeting responses.
    *
    * @return bool The isTallyingResponses
    */
    public function getIsTallyingResponses()
    {
        if (array_key_exists("isTallyingResponses", $this->_propDict)) {
            return $this->_propDict["isTallyingResponses"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isTallyingResponses
    * Indicates whether this user calendar supports tracking of meeting responses. Only meeting invites sent from users' primary calendars support tracking of meeting responses.
    *
    * @param bool $val The isTallyingResponses
    *
    * @return Calendar
    */
    public function setIsTallyingResponses($val)
    {
        $this->_propDict["isTallyingResponses"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isRemovable
    * Indicates whether this user calendar can be deleted from the user mailbox.
    *
    * @return bool The isRemovable
    */
    public function getIsRemovable()
    {
        if (array_key_exists("isRemovable", $this->_propDict)) {
            return $this->_propDict["isRemovable"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRemovable
    * Indicates whether this user calendar can be deleted from the user mailbox.
    *
    * @param bool $val The isRemovable
    *
    * @return Calendar
    */
    public function setIsRemovable($val)
    {
        $this->_propDict["isRemovable"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the calendar. Read-only. Nullable.
     *
     * @return array The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the calendar. Read-only. Nullable.
    *
    * @param SingleValueLegacyExtendedProperty $val The singleValueExtendedProperties
    *
    * @return Calendar
    */
    public function setSingleValueExtendedProperties($val)
    {
		$this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the calendar. Read-only. Nullable.
     *
     * @return array The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the calendar. Read-only. Nullable.
    *
    * @param MultiValueLegacyExtendedProperty $val The multiValueExtendedProperties
    *
    * @return Calendar
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the calendarPermissions
    * The permissions of the users with whom the calendar is shared.
     *
     * @return array The calendarPermissions
     */
    public function getCalendarPermissions()
    {
        if (array_key_exists("calendarPermissions", $this->_propDict)) {
           return $this->_propDict["calendarPermissions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the calendarPermissions
    * The permissions of the users with whom the calendar is shared.
    *
    * @param CalendarPermission $val The calendarPermissions
    *
    * @return Calendar
    */
    public function setCalendarPermissions($val)
    {
		$this->_propDict["calendarPermissions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the events
    * The events in the calendar. Navigation property. Read-only.
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
    * The events in the calendar. Navigation property. Read-only.
    *
    * @param Event $val The events
    *
    * @return Calendar
    */
    public function setEvents($val)
    {
		$this->_propDict["events"] = $val;
        return $this;
    }
    

     /** 
     * Gets the calendarView
    * The calendar view for the calendar. Navigation property. Read-only.
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
    * The calendar view for the calendar. Navigation property. Read-only.
    *
    * @param Event $val The calendarView
    *
    * @return Calendar
    */
    public function setCalendarView($val)
    {
		$this->_propDict["calendarView"] = $val;
        return $this;
    }
    
}