<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTaskRecurrence File
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
* PlannerTaskRecurrence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTaskRecurrence extends Entity
{
    /**
    * Gets the nextInSeriesTaskId
    *
    * @return string|null The nextInSeriesTaskId
    */
    public function getNextInSeriesTaskId()
    {
        if (array_key_exists("nextInSeriesTaskId", $this->_propDict)) {
            return $this->_propDict["nextInSeriesTaskId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nextInSeriesTaskId
    *
    * @param string $val The value of the nextInSeriesTaskId
    *
    * @return PlannerTaskRecurrence
    */
    public function setNextInSeriesTaskId($val)
    {
        $this->_propDict["nextInSeriesTaskId"] = $val;
        return $this;
    }
    /**
    * Gets the occurrenceId
    *
    * @return int|null The occurrenceId
    */
    public function getOccurrenceId()
    {
        if (array_key_exists("occurrenceId", $this->_propDict)) {
            return $this->_propDict["occurrenceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the occurrenceId
    *
    * @param int $val The value of the occurrenceId
    *
    * @return PlannerTaskRecurrence
    */
    public function setOccurrenceId($val)
    {
        $this->_propDict["occurrenceId"] = $val;
        return $this;
    }
    /**
    * Gets the previousInSeriesTaskId
    *
    * @return string|null The previousInSeriesTaskId
    */
    public function getPreviousInSeriesTaskId()
    {
        if (array_key_exists("previousInSeriesTaskId", $this->_propDict)) {
            return $this->_propDict["previousInSeriesTaskId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the previousInSeriesTaskId
    *
    * @param string $val The value of the previousInSeriesTaskId
    *
    * @return PlannerTaskRecurrence
    */
    public function setPreviousInSeriesTaskId($val)
    {
        $this->_propDict["previousInSeriesTaskId"] = $val;
        return $this;
    }

    /**
    * Gets the recurrenceStartDateTime
    *
    * @return \DateTime|null The recurrenceStartDateTime
    */
    public function getRecurrenceStartDateTime()
    {
        if (array_key_exists("recurrenceStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["recurrenceStartDateTime"], "\DateTime") || is_null($this->_propDict["recurrenceStartDateTime"])) {
                return $this->_propDict["recurrenceStartDateTime"];
            } else {
                $this->_propDict["recurrenceStartDateTime"] = new \DateTime($this->_propDict["recurrenceStartDateTime"]);
                return $this->_propDict["recurrenceStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the recurrenceStartDateTime
    *
    * @param \DateTime $val The value to assign to the recurrenceStartDateTime
    *
    * @return PlannerTaskRecurrence The PlannerTaskRecurrence
    */
    public function setRecurrenceStartDateTime($val)
    {
        $this->_propDict["recurrenceStartDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the schedule
    *
    * @return PlannerRecurrenceSchedule|null The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Beta\Microsoft\Graph\Model\PlannerRecurrenceSchedule") || is_null($this->_propDict["schedule"])) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new PlannerRecurrenceSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }

    /**
    * Sets the schedule
    *
    * @param PlannerRecurrenceSchedule $val The value to assign to the schedule
    *
    * @return PlannerTaskRecurrence The PlannerTaskRecurrence
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
         return $this;
    }
    /**
    * Gets the seriesId
    *
    * @return string|null The seriesId
    */
    public function getSeriesId()
    {
        if (array_key_exists("seriesId", $this->_propDict)) {
            return $this->_propDict["seriesId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the seriesId
    *
    * @param string $val The value of the seriesId
    *
    * @return PlannerTaskRecurrence
    */
    public function setSeriesId($val)
    {
        $this->_propDict["seriesId"] = $val;
        return $this;
    }
}
