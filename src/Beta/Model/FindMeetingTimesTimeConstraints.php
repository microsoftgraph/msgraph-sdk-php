<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FindMeetingTimesTimeConstraints File
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
* FindMeetingTimesTimeConstraints class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class FindMeetingTimesTimeConstraints extends Entity
{

    /**
    * Gets the activityDomain
    *
    * @return ActivityDomain The activityDomain
    */
    public function getActivityDomain()
    {
        if (array_key_exists("activityDomain", $this->_propDict)) {
            if (is_a($this->_propDict["activityDomain"], "Microsoft\Graph\Model\ActivityDomain")) {
                return $this->_propDict["activityDomain"];
            } else {
                $this->_propDict["activityDomain"] = new ActivityDomain($this->_propDict["activityDomain"]);
                return $this->_propDict["activityDomain"];
            }
        }
        return null;
    }

    /**
    * Sets the activityDomain
    *
    * @param ActivityDomain $val The value to assign to the activityDomain
    *
    * @return FindMeetingTimesTimeConstraints The FindMeetingTimesTimeConstraints
    */
    public function setActivityDomain($val)
    {
        $this->_propDict["activityDomain"] = $val;
         return $this;
    }

    /**
    * Gets the timeSlots
    *
    * @return SearchWindowTimeSlot The timeSlots
    */
    public function getTimeSlots()
    {
        if (array_key_exists("timeSlots", $this->_propDict)) {
            if (is_a($this->_propDict["timeSlots"], "Microsoft\Graph\Model\SearchWindowTimeSlot")) {
                return $this->_propDict["timeSlots"];
            } else {
                $this->_propDict["timeSlots"] = new SearchWindowTimeSlot($this->_propDict["timeSlots"]);
                return $this->_propDict["timeSlots"];
            }
        }
        return null;
    }

    /**
    * Sets the timeSlots
    *
    * @param SearchWindowTimeSlot $val The value to assign to the timeSlots
    *
    * @return FindMeetingTimesTimeConstraints The FindMeetingTimesTimeConstraints
    */
    public function setTimeSlots($val)
    {
        $this->_propDict["timeSlots"] = $val;
         return $this;
    }
}
