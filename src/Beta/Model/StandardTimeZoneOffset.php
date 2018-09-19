<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StandardTimeZoneOffset File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* StandardTimeZoneOffset class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class StandardTimeZoneOffset extends Entity
{

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
    * @return StandardTimeZoneOffset The StandardTimeZoneOffset
    */
    public function setTime($val)
    {
        $this->_propDict["time"] = $val;
         return $this;
    }
    /**
    * Gets the dayOccurrence
    *
    * @return int The dayOccurrence
    */
    public function getDayOccurrence()
    {
        if (array_key_exists("dayOccurrence", $this->_propDict)) {
            return $this->_propDict["dayOccurrence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dayOccurrence
    *
    * @param int $val The value of the dayOccurrence
    *
    * @return StandardTimeZoneOffset
    */
    public function setDayOccurrence($val)
    {
        $this->_propDict["dayOccurrence"] = $val;
        return $this;
    }

    /**
    * Gets the dayOfWeek
    *
    * @return DayOfWeek The dayOfWeek
    */
    public function getDayOfWeek()
    {
        if (array_key_exists("dayOfWeek", $this->_propDict)) {
            if (is_a($this->_propDict["dayOfWeek"], "Microsoft\Graph\Beta\Model\DayOfWeek")) {
                return $this->_propDict["dayOfWeek"];
            } else {
                $this->_propDict["dayOfWeek"] = new DayOfWeek($this->_propDict["dayOfWeek"]);
                return $this->_propDict["dayOfWeek"];
            }
        }
        return null;
    }

    /**
    * Sets the dayOfWeek
    *
    * @param DayOfWeek $val The value to assign to the dayOfWeek
    *
    * @return StandardTimeZoneOffset The StandardTimeZoneOffset
    */
    public function setDayOfWeek($val)
    {
        $this->_propDict["dayOfWeek"] = $val;
         return $this;
    }
    /**
    * Gets the month
    *
    * @return int The month
    */
    public function getMonth()
    {
        if (array_key_exists("month", $this->_propDict)) {
            return $this->_propDict["month"];
        } else {
            return null;
        }
    }

    /**
    * Sets the month
    *
    * @param int $val The value of the month
    *
    * @return StandardTimeZoneOffset
    */
    public function setMonth($val)
    {
        $this->_propDict["month"] = $val;
        return $this;
    }
    /**
    * Gets the year
    *
    * @return int The year
    */
    public function getYear()
    {
        if (array_key_exists("year", $this->_propDict)) {
            return $this->_propDict["year"];
        } else {
            return null;
        }
    }

    /**
    * Sets the year
    *
    * @param int $val The value of the year
    *
    * @return StandardTimeZoneOffset
    */
    public function setYear($val)
    {
        $this->_propDict["year"] = $val;
        return $this;
    }
}
