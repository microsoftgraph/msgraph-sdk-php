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
    * @return Calendar
    */
    public function setEvents($val)
    {
		$this->_propDict["events"] = $val;
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
    * @return Calendar
    */
    public function setCalendarView($val)
    {
		$this->_propDict["calendarView"] = $val;
        return $this;
    }
    

     /** 
     * Gets the singleValueExtendedProperties
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
    
}