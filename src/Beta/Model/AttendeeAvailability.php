<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttendeeAvailability File
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
* AttendeeAvailability class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AttendeeAvailability extends Entity
{

    /**
    * Gets the attendee
    *
    * @return AttendeeBase The attendee
    */
    public function getAttendee()
    {
        if (array_key_exists("attendee", $this->_propDict)) {
            if (is_a($this->_propDict["attendee"], "Microsoft\Graph\Beta\Model\AttendeeBase")) {
                return $this->_propDict["attendee"];
            } else {
                $this->_propDict["attendee"] = new AttendeeBase($this->_propDict["attendee"]);
                return $this->_propDict["attendee"];
            }
        }
        return null;
    }

    /**
    * Sets the attendee
    *
    * @param AttendeeBase $val The value to assign to the attendee
    *
    * @return AttendeeAvailability The AttendeeAvailability
    */
    public function setAttendee($val)
    {
        $this->_propDict["attendee"] = $val;
         return $this;
    }

    /**
    * Gets the availability
    *
    * @return FreeBusyStatus The availability
    */
    public function getAvailability()
    {
        if (array_key_exists("availability", $this->_propDict)) {
            if (is_a($this->_propDict["availability"], "Microsoft\Graph\Beta\Model\FreeBusyStatus")) {
                return $this->_propDict["availability"];
            } else {
                $this->_propDict["availability"] = new FreeBusyStatus($this->_propDict["availability"]);
                return $this->_propDict["availability"];
            }
        }
        return null;
    }

    /**
    * Sets the availability
    *
    * @param FreeBusyStatus $val The value to assign to the availability
    *
    * @return AttendeeAvailability The AttendeeAvailability
    */
    public function setAvailability($val)
    {
        $this->_propDict["availability"] = $val;
         return $this;
    }
}
