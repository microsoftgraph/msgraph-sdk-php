<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingAttendanceReport File
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
* MeetingAttendanceReport class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingAttendanceReport extends Entity
{

     /** 
     * Gets the attendanceRecords
    * The list of attendance records.
     *
     * @return array|null The attendanceRecords
     */
    public function getAttendanceRecords()
    {
        if (array_key_exists("attendanceRecords", $this->_propDict)) {
           return $this->_propDict["attendanceRecords"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the attendanceRecords
    * The list of attendance records.
    *
    * @param AttendanceRecord $val The attendanceRecords
    *
    * @return MeetingAttendanceReport
    */
    public function setAttendanceRecords($val)
    {
        $this->_propDict["attendanceRecords"] = $val;
        return $this;
    }
    
    /**
    * Gets the totalParticipantCount
    * Total number of participants.
    *
    * @return int|null The totalParticipantCount
    */
    public function getTotalParticipantCount()
    {
        if (array_key_exists("totalParticipantCount", $this->_propDict)) {
            return $this->_propDict["totalParticipantCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalParticipantCount
    * Total number of participants.
    *
    * @param int $val The totalParticipantCount
    *
    * @return MeetingAttendanceReport
    */
    public function setTotalParticipantCount($val)
    {
        $this->_propDict["totalParticipantCount"] = intval($val);
        return $this;
    }
    
}
