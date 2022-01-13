<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkDateTimeConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* TeamworkDateTimeConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkDateTimeConfiguration extends Entity
{
    /**
    * Gets the dateFormat
    *
    * @return string|null The dateFormat
    */
    public function getDateFormat()
    {
        if (array_key_exists("dateFormat", $this->_propDict)) {
            return $this->_propDict["dateFormat"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dateFormat
    *
    * @param string $val The value of the dateFormat
    *
    * @return TeamworkDateTimeConfiguration
    */
    public function setDateFormat($val)
    {
        $this->_propDict["dateFormat"] = $val;
        return $this;
    }

    /**
    * Gets the officeHoursEndTime
    *
    * @return TimeOfDay|null The officeHoursEndTime
    */
    public function getOfficeHoursEndTime()
    {
        if (array_key_exists("officeHoursEndTime", $this->_propDict)) {
            if (is_a($this->_propDict["officeHoursEndTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay") || is_null($this->_propDict["officeHoursEndTime"])) {
                return $this->_propDict["officeHoursEndTime"];
            } else {
                $this->_propDict["officeHoursEndTime"] = new TimeOfDay($this->_propDict["officeHoursEndTime"]);
                return $this->_propDict["officeHoursEndTime"];
            }
        }
        return null;
    }

    /**
    * Sets the officeHoursEndTime
    *
    * @param TimeOfDay $val The value to assign to the officeHoursEndTime
    *
    * @return TeamworkDateTimeConfiguration The TeamworkDateTimeConfiguration
    */
    public function setOfficeHoursEndTime($val)
    {
        $this->_propDict["officeHoursEndTime"] = $val;
         return $this;
    }

    /**
    * Gets the officeHoursStartTime
    *
    * @return TimeOfDay|null The officeHoursStartTime
    */
    public function getOfficeHoursStartTime()
    {
        if (array_key_exists("officeHoursStartTime", $this->_propDict)) {
            if (is_a($this->_propDict["officeHoursStartTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay") || is_null($this->_propDict["officeHoursStartTime"])) {
                return $this->_propDict["officeHoursStartTime"];
            } else {
                $this->_propDict["officeHoursStartTime"] = new TimeOfDay($this->_propDict["officeHoursStartTime"]);
                return $this->_propDict["officeHoursStartTime"];
            }
        }
        return null;
    }

    /**
    * Sets the officeHoursStartTime
    *
    * @param TimeOfDay $val The value to assign to the officeHoursStartTime
    *
    * @return TeamworkDateTimeConfiguration The TeamworkDateTimeConfiguration
    */
    public function setOfficeHoursStartTime($val)
    {
        $this->_propDict["officeHoursStartTime"] = $val;
         return $this;
    }
    /**
    * Gets the timeFormat
    *
    * @return string|null The timeFormat
    */
    public function getTimeFormat()
    {
        if (array_key_exists("timeFormat", $this->_propDict)) {
            return $this->_propDict["timeFormat"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeFormat
    *
    * @param string $val The value of the timeFormat
    *
    * @return TeamworkDateTimeConfiguration
    */
    public function setTimeFormat($val)
    {
        $this->_propDict["timeFormat"] = $val;
        return $this;
    }
    /**
    * Gets the timeZone
    *
    * @return string|null The timeZone
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
    * @return TeamworkDateTimeConfiguration
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
        return $this;
    }
}
