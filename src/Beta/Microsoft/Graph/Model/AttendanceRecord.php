<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttendanceRecord File
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
* AttendanceRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttendanceRecord extends Entity
{

    /**
    * Gets the attendanceIntervals
    * List of time periods between joining and leaving.
    *
    * @return AttendanceInterval The attendanceIntervals
    */
    public function getAttendanceIntervals()
    {
        if (array_key_exists("attendanceIntervals", $this->_propDict)) {
            if (is_a($this->_propDict["attendanceIntervals"], "\Beta\Microsoft\Graph\Model\AttendanceInterval")) {
                return $this->_propDict["attendanceIntervals"];
            } else {
                $this->_propDict["attendanceIntervals"] = new AttendanceInterval($this->_propDict["attendanceIntervals"]);
                return $this->_propDict["attendanceIntervals"];
            }
        }
        return null;
    }

    /**
    * Sets the attendanceIntervals
    * List of time periods between joining and leaving.
    *
    * @param AttendanceInterval $val The value to assign to the attendanceIntervals
    *
    * @return AttendanceRecord The AttendanceRecord
    */
    public function setAttendanceIntervals($val)
    {
        $this->_propDict["attendanceIntervals"] = $val;
         return $this;
    }
    /**
    * Gets the emailAddress
    * Email address.
    *
    * @return string The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            return $this->_propDict["emailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailAddress
    * Email address.
    *
    * @param string $val The value of the emailAddress
    *
    * @return AttendanceRecord
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }

    /**
    * Gets the identity
    * Identifier, such as display name.
    *
    * @return Identity The identity
    */
    public function getIdentity()
    {
        if (array_key_exists("identity", $this->_propDict)) {
            if (is_a($this->_propDict["identity"], "\Beta\Microsoft\Graph\Model\Identity")) {
                return $this->_propDict["identity"];
            } else {
                $this->_propDict["identity"] = new Identity($this->_propDict["identity"]);
                return $this->_propDict["identity"];
            }
        }
        return null;
    }

    /**
    * Sets the identity
    * Identifier, such as display name.
    *
    * @param Identity $val The value to assign to the identity
    *
    * @return AttendanceRecord The AttendanceRecord
    */
    public function setIdentity($val)
    {
        $this->_propDict["identity"] = $val;
         return $this;
    }
    /**
    * Gets the role
    * Role of the attendee. Possible values are None, Attendee, Presenter, and Organizer.
    *
    * @return string The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            return $this->_propDict["role"];
        } else {
            return null;
        }
    }

    /**
    * Sets the role
    * Role of the attendee. Possible values are None, Attendee, Presenter, and Organizer.
    *
    * @param string $val The value of the role
    *
    * @return AttendanceRecord
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }
    /**
    * Gets the totalAttendanceInSeconds
    * Total duration of the attendances in seconds.
    *
    * @return int The totalAttendanceInSeconds
    */
    public function getTotalAttendanceInSeconds()
    {
        if (array_key_exists("totalAttendanceInSeconds", $this->_propDict)) {
            return $this->_propDict["totalAttendanceInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalAttendanceInSeconds
    * Total duration of the attendances in seconds.
    *
    * @param int $val The value of the totalAttendanceInSeconds
    *
    * @return AttendanceRecord
    */
    public function setTotalAttendanceInSeconds($val)
    {
        $this->_propDict["totalAttendanceInSeconds"] = $val;
        return $this;
    }
}
