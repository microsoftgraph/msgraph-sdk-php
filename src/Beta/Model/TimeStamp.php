<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeStamp File
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
* TimeStamp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class TimeStamp extends Entity
{

    /**
    * Gets the date
    *
    * @return \DateTime The date
    */
    public function getDate()
    {
        if (array_key_exists("date", $this->_propDict)) {
            if (is_a($this->_propDict["date"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["date"];
            } else {
                $this->_propDict["date"] = new \DateTime($this->_propDict["date"]);
                return $this->_propDict["date"];
            }
        }
        return null;
    }

    /**
    * Sets the date
    *
    * @param \DateTime $val The value to assign to the date
    *
    * @return TimeStamp The TimeStamp
    */
    public function setDate($val)
    {
        $this->_propDict["date"] = $val;
         return $this;
    }

    /**
    * Gets the time
    *
    * @return TimeOfDay The time
    */
    public function getTime()
    {
        if (array_key_exists("time", $this->_propDict)) {
            if (is_a($this->_propDict["time"], "Microsoft\Graph\Beta\Model\TimeOfDay")) {
                return $this->_propDict["time"];
            } else {
                $this->_propDict["time"] = new TimeOfDay($this->_propDict["time"]);
                return $this->_propDict["time"];
            }
        }
        return null;
    }

    /**
    * Sets the time
    *
    * @param TimeOfDay $val The value to assign to the time
    *
    * @return TimeStamp The TimeStamp
    */
    public function setTime($val)
    {
        $this->_propDict["time"] = $val;
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
    * @return TimeStamp
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
        return $this;
    }
}
