<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecurrencePattern File
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
* RecurrencePattern class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class RecurrencePattern extends Entity
{

    /**
    * Gets the type
    *
    * @return RecurrencePatternType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "Microsoft\Graph\Model\RecurrencePatternType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new RecurrencePatternType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param RecurrencePatternType $val The value to assign to the type
    *
    * @return RecurrencePattern The RecurrencePattern
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
    /**
    * Gets the interval
    *
    * @return int The interval
    */
    public function getInterval()
    {
        if (array_key_exists("interval", $this->_propDict)) {
            return $this->_propDict["interval"];
        } else {
            return null;
        }
    }

    /**
    * Sets the interval
    *
    * @param int $val The value of the interval
    *
    * @return RecurrencePattern
    */
    public function setInterval($val)
    {
        $this->_propDict["interval"] = $val;
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
    * @return RecurrencePattern
    */
    public function setMonth($val)
    {
        $this->_propDict["month"] = $val;
        return $this;
    }
    /**
    * Gets the dayOfMonth
    *
    * @return int The dayOfMonth
    */
    public function getDayOfMonth()
    {
        if (array_key_exists("dayOfMonth", $this->_propDict)) {
            return $this->_propDict["dayOfMonth"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dayOfMonth
    *
    * @param int $val The value of the dayOfMonth
    *
    * @return RecurrencePattern
    */
    public function setDayOfMonth($val)
    {
        $this->_propDict["dayOfMonth"] = $val;
        return $this;
    }

    /**
    * Gets the daysOfWeek
    *
    * @return DayOfWeek The daysOfWeek
    */
    public function getDaysOfWeek()
    {
        if (array_key_exists("daysOfWeek", $this->_propDict)) {
            if (is_a($this->_propDict["daysOfWeek"], "Microsoft\Graph\Model\DayOfWeek")) {
                return $this->_propDict["daysOfWeek"];
            } else {
                $this->_propDict["daysOfWeek"] = new DayOfWeek($this->_propDict["daysOfWeek"]);
                return $this->_propDict["daysOfWeek"];
            }
        }
        return null;
    }

    /**
    * Sets the daysOfWeek
    *
    * @param DayOfWeek $val The value to assign to the daysOfWeek
    *
    * @return RecurrencePattern The RecurrencePattern
    */
    public function setDaysOfWeek($val)
    {
        $this->_propDict["daysOfWeek"] = $val;
         return $this;
    }

    /**
    * Gets the firstDayOfWeek
    *
    * @return DayOfWeek The firstDayOfWeek
    */
    public function getFirstDayOfWeek()
    {
        if (array_key_exists("firstDayOfWeek", $this->_propDict)) {
            if (is_a($this->_propDict["firstDayOfWeek"], "Microsoft\Graph\Model\DayOfWeek")) {
                return $this->_propDict["firstDayOfWeek"];
            } else {
                $this->_propDict["firstDayOfWeek"] = new DayOfWeek($this->_propDict["firstDayOfWeek"]);
                return $this->_propDict["firstDayOfWeek"];
            }
        }
        return null;
    }

    /**
    * Sets the firstDayOfWeek
    *
    * @param DayOfWeek $val The value to assign to the firstDayOfWeek
    *
    * @return RecurrencePattern The RecurrencePattern
    */
    public function setFirstDayOfWeek($val)
    {
        $this->_propDict["firstDayOfWeek"] = $val;
         return $this;
    }

    /**
    * Gets the index
    *
    * @return WeekIndex The index
    */
    public function getIndex()
    {
        if (array_key_exists("index", $this->_propDict)) {
            if (is_a($this->_propDict["index"], "Microsoft\Graph\Model\WeekIndex")) {
                return $this->_propDict["index"];
            } else {
                $this->_propDict["index"] = new WeekIndex($this->_propDict["index"]);
                return $this->_propDict["index"];
            }
        }
        return null;
    }

    /**
    * Sets the index
    *
    * @param WeekIndex $val The value to assign to the index
    *
    * @return RecurrencePattern The RecurrencePattern
    */
    public function setIndex($val)
    {
        $this->_propDict["index"] = $val;
         return $this;
    }
}
