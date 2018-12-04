<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecurrenceRange File
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
* RecurrenceRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RecurrenceRange extends Entity
{

    /**
    * Gets the type
    *
    * @return RecurrenceRangeType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "Microsoft\Graph\Model\RecurrenceRangeType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new RecurrenceRangeType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param RecurrenceRangeType $val The value to assign to the type
    *
    * @return RecurrenceRange The RecurrenceRange
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }

    /**
    * Gets the startDate
    *
    * @return \DateTime The startDate
    */
    public function getStartDate()
    {
        if (array_key_exists("startDate", $this->_propDict)) {
            if (is_a($this->_propDict["startDate"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["startDate"];
            } else {
                $this->_propDict["startDate"] = new \DateTime($this->_propDict["startDate"]);
                return $this->_propDict["startDate"];
            }
        }
        return null;
    }

    /**
    * Sets the startDate
    *
    * @param \DateTime $val The value to assign to the startDate
    *
    * @return RecurrenceRange The RecurrenceRange
    */
    public function setStartDate($val)
    {
        $this->_propDict["startDate"] = $val;
         return $this;
    }

    /**
    * Gets the endDate
    *
    * @return \DateTime The endDate
    */
    public function getEndDate()
    {
        if (array_key_exists("endDate", $this->_propDict)) {
            if (is_a($this->_propDict["endDate"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["endDate"];
            } else {
                $this->_propDict["endDate"] = new \DateTime($this->_propDict["endDate"]);
                return $this->_propDict["endDate"];
            }
        }
        return null;
    }

    /**
    * Sets the endDate
    *
    * @param \DateTime $val The value to assign to the endDate
    *
    * @return RecurrenceRange The RecurrenceRange
    */
    public function setEndDate($val)
    {
        $this->_propDict["endDate"] = $val;
         return $this;
    }
    /**
    * Gets the recurrenceTimeZone
    *
    * @return string The recurrenceTimeZone
    */
    public function getRecurrenceTimeZone()
    {
        if (array_key_exists("recurrenceTimeZone", $this->_propDict)) {
            return $this->_propDict["recurrenceTimeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recurrenceTimeZone
    *
    * @param string $val The value of the recurrenceTimeZone
    *
    * @return RecurrenceRange
    */
    public function setRecurrenceTimeZone($val)
    {
        $this->_propDict["recurrenceTimeZone"] = $val;
        return $this;
    }
    /**
    * Gets the numberOfOccurrences
    *
    * @return int The numberOfOccurrences
    */
    public function getNumberOfOccurrences()
    {
        if (array_key_exists("numberOfOccurrences", $this->_propDict)) {
            return $this->_propDict["numberOfOccurrences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfOccurrences
    *
    * @param int $val The value of the numberOfOccurrences
    *
    * @return RecurrenceRange
    */
    public function setNumberOfOccurrences($val)
    {
        $this->_propDict["numberOfOccurrences"] = $val;
        return $this;
    }
}
