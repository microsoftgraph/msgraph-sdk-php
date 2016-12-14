<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CalendarGroup File
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
* CalendarGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class CalendarGroup extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new CalendarGroup
    *
    * @param array $propDict A list of properties to set
    *
    * @return CalendarGroup
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the CalendarGroup
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
    * @return CalendarGroup
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the classId
    *
    * @return string The classId
    */
    public function getClassId()
    {
        if (array_key_exists("classId", $this->_propDict)) {
            return $this->_propDict["classId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the classId
    *
    * @param string $val The classId
    *
    * @return CalendarGroup
    */
    public function setClassId($val)
    {
        $this->_propDict["classId"] = $val;
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
    * @return CalendarGroup
    */
    public function setChangeKey($val)
    {
        $this->_propDict["changeKey"] = $val;
        return $this;
    }

    /** 
    * Gets the calendars
    *
    * @return array The calendars
    */
    public function getCalendars()
    {
        if (array_key_exists("calendars", $this->_propDict)) {
           return $this->_propDict["calendars"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the calendars
    *
    * @param string $val The calendars
    *
    * @return CalendarGroup
    */
    public function setCalendars($val)
    {
		$this->_propDict["calendars"] = $val;
        return $this;
    }

}