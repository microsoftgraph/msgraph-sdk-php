<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Calendar File
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
* Calendar class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Calendar extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new Calendar
    *
    * @param array $propDict A list of properties to set
    *
    * @return Calendar
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the Calendar
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

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
            if (is_a($this->_propDict["color"], "CalendarColor")) {
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
    * @param string $val The color
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
    * @param string $val The events
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
    * @param string $val The calendarView
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
    * @param string $val The singleValueExtendedProperties
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
    * @param string $val The multiValueExtendedProperties
    *
    * @return Calendar
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }

}