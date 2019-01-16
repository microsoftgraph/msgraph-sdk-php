<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ScheduleInformation File
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
* ScheduleInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ScheduleInformation extends Entity
{
    /**
    * Gets the scheduleId
    *
    * @return string The scheduleId
    */
    public function getScheduleId()
    {
        if (array_key_exists("scheduleId", $this->_propDict)) {
            return $this->_propDict["scheduleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scheduleId
    *
    * @param string $val The value of the scheduleId
    *
    * @return ScheduleInformation
    */
    public function setScheduleId($val)
    {
        $this->_propDict["scheduleId"] = $val;
        return $this;
    }

    /**
    * Gets the scheduleItems
    *
    * @return ScheduleItem The scheduleItems
    */
    public function getScheduleItems()
    {
        if (array_key_exists("scheduleItems", $this->_propDict)) {
            if (is_a($this->_propDict["scheduleItems"], "Microsoft\Graph\Model\ScheduleItem")) {
                return $this->_propDict["scheduleItems"];
            } else {
                $this->_propDict["scheduleItems"] = new ScheduleItem($this->_propDict["scheduleItems"]);
                return $this->_propDict["scheduleItems"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduleItems
    *
    * @param ScheduleItem $val The value to assign to the scheduleItems
    *
    * @return ScheduleInformation The ScheduleInformation
    */
    public function setScheduleItems($val)
    {
        $this->_propDict["scheduleItems"] = $val;
         return $this;
    }
    /**
    * Gets the availabilityView
    *
    * @return string The availabilityView
    */
    public function getAvailabilityView()
    {
        if (array_key_exists("availabilityView", $this->_propDict)) {
            return $this->_propDict["availabilityView"];
        } else {
            return null;
        }
    }

    /**
    * Sets the availabilityView
    *
    * @param string $val The value of the availabilityView
    *
    * @return ScheduleInformation
    */
    public function setAvailabilityView($val)
    {
        $this->_propDict["availabilityView"] = $val;
        return $this;
    }

    /**
    * Gets the error
    *
    * @return FreeBusyError The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "Microsoft\Graph\Model\FreeBusyError")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new FreeBusyError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    *
    * @param FreeBusyError $val The value to assign to the error
    *
    * @return ScheduleInformation The ScheduleInformation
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
         return $this;
    }

    /**
    * Gets the workingHours
    *
    * @return WorkingHours The workingHours
    */
    public function getWorkingHours()
    {
        if (array_key_exists("workingHours", $this->_propDict)) {
            if (is_a($this->_propDict["workingHours"], "Microsoft\Graph\Model\WorkingHours")) {
                return $this->_propDict["workingHours"];
            } else {
                $this->_propDict["workingHours"] = new WorkingHours($this->_propDict["workingHours"]);
                return $this->_propDict["workingHours"];
            }
        }
        return null;
    }

    /**
    * Sets the workingHours
    *
    * @param WorkingHours $val The value to assign to the workingHours
    *
    * @return ScheduleInformation The ScheduleInformation
    */
    public function setWorkingHours($val)
    {
        $this->_propDict["workingHours"] = $val;
         return $this;
    }
}
