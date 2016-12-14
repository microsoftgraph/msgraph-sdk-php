<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DateTimeTimeZone File
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
* DateTimeTimeZone class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DateTimeTimeZone extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * DateTimeTimeZone constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return DateTimeTimeZone
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the DateTimeTimeZone
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the dateTime
    *
    * @return string The dateTime
    */
    public function getDateTime()
    {
        if (array_key_exists("dateTime", $this->_propDict)) {
            return $this->_propDict["dateTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dateTime
    *
    * @param string $val The value of the dateTime
    *
    * @return DateTimeTimeZone
    */
    public function setDateTime($val)
    {
        $this->_propDict["date_time"] = $val;
        return $this;
    }
    
    /**
    * Gets the timeZone
    *
    * @return string The timeZone
    */
    public function getTimeZone()
    {
        if (array_key_exists("timeZone", $this->_propDict)) {
            return $this->_propDict["timeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeZone
    *
    * @param string $val The value of the timeZone
    *
    * @return DateTimeTimeZone
    */
    public function setTimeZone($val)
    {
        $this->_propDict["time_zone"] = $val;
        return $this;
    }
}
