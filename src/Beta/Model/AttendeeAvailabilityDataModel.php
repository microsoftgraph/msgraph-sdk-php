<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttendeeAvailabilityDataModel File
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
* AttendeeAvailabilityDataModel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AttendeeAvailabilityDataModel extends Entity
{

    /**
    * Gets the attendee
    *
    * @return AttendeeGriffin The attendee
    */
    public function getAttendee()
    {
        if (array_key_exists("attendee", $this->_propDict)) {
            if (is_a($this->_propDict["attendee"], "Microsoft\Graph\Model\AttendeeGriffin")) {
                return $this->_propDict["attendee"];
            } else {
                $this->_propDict["attendee"] = new AttendeeGriffin($this->_propDict["attendee"]);
                return $this->_propDict["attendee"];
            }
        }
        return null;
    }

    /**
    * Sets the attendee
    *
    * @param AttendeeGriffin $val The value to assign to the attendee
    *
    * @return AttendeeAvailabilityDataModel The AttendeeAvailabilityDataModel
    */
    public function setAttendee($val)
    {
        $this->_propDict["attendee"] = $val;
         return $this;
    }

    /**
    * Gets the availability
    *
    * @return AvailabilityStatus The availability
    */
    public function getAvailability()
    {
        if (array_key_exists("availability", $this->_propDict)) {
            if (is_a($this->_propDict["availability"], "Microsoft\Graph\Model\AvailabilityStatus")) {
                return $this->_propDict["availability"];
            } else {
                $this->_propDict["availability"] = new AvailabilityStatus($this->_propDict["availability"]);
                return $this->_propDict["availability"];
            }
        }
        return null;
    }

    /**
    * Sets the availability
    *
    * @param AvailabilityStatus $val The value to assign to the availability
    *
    * @return AttendeeAvailabilityDataModel The AttendeeAvailabilityDataModel
    */
    public function setAvailability($val)
    {
        $this->_propDict["availability"] = $val;
         return $this;
    }
}
