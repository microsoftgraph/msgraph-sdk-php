<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AvailabilityItem File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* AvailabilityItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AvailabilityItem extends Entity
{

    /**
    * Gets the endTime
    *
    * @return TimeOfDay|null The endTime
    */
    public function getEndTime()
    {
        if (array_key_exists("endTime", $this->_propDict)) {
            if (is_a($this->_propDict["endTime"], "\Microsoft\Graph\Model\TimeOfDay") || is_null($this->_propDict["endTime"])) {
                return $this->_propDict["endTime"];
            } else {
                $this->_propDict["endTime"] = new TimeOfDay($this->_propDict["endTime"]);
                return $this->_propDict["endTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endTime
    *
    * @param TimeOfDay $val The value to assign to the endTime
    *
    * @return AvailabilityItem The AvailabilityItem
    */
    public function setEndTime($val)
    {
        $this->_propDict["endTime"] = $val;
         return $this;
    }
    /**
    * Gets the serviceId
    * Indicates the service ID in case of 1:n appointments. If the appointment is of type 1:n, this field will be present, otherwise, null.
    *
    * @return string|null The serviceId
    */
    public function getServiceId()
    {
        if (array_key_exists("serviceId", $this->_propDict)) {
            return $this->_propDict["serviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceId
    * Indicates the service ID in case of 1:n appointments. If the appointment is of type 1:n, this field will be present, otherwise, null.
    *
    * @param string $val The value of the serviceId
    *
    * @return AvailabilityItem
    */
    public function setServiceId($val)
    {
        $this->_propDict["serviceId"] = $val;
        return $this;
    }

    /**
    * Gets the startTime
    *
    * @return TimeOfDay|null The startTime
    */
    public function getStartTime()
    {
        if (array_key_exists("startTime", $this->_propDict)) {
            if (is_a($this->_propDict["startTime"], "\Microsoft\Graph\Model\TimeOfDay") || is_null($this->_propDict["startTime"])) {
                return $this->_propDict["startTime"];
            } else {
                $this->_propDict["startTime"] = new TimeOfDay($this->_propDict["startTime"]);
                return $this->_propDict["startTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startTime
    *
    * @param TimeOfDay $val The value to assign to the startTime
    *
    * @return AvailabilityItem The AvailabilityItem
    */
    public function setStartTime($val)
    {
        $this->_propDict["startTime"] = $val;
         return $this;
    }

    /**
    * Gets the status
    * The status of the staff member. Possible values are: available, busy, slotsAvailable, outOfOffice, unknownFutureValue.
    *
    * @return BookingsAvailabilityStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\BookingsAvailabilityStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new BookingsAvailabilityStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the staff member. Possible values are: available, busy, slotsAvailable, outOfOffice, unknownFutureValue.
    *
    * @param BookingsAvailabilityStatus $val The value to assign to the status
    *
    * @return AvailabilityItem The AvailabilityItem
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
