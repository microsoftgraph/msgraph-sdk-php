<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeConstraint File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* TimeConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class TimeConstraint extends Entity
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
    * @return TimeConstraint The TimeConstraint
    */
    public function setActivityDomain($val)
    {
        $this->_propDict["activityDomain"] = $val;
         return $this;
    }

    /**
    * Gets the timeslots
    *
    * @return TimeSlot The timeslots
    */
    public function getTimeslots()
    {
        if (array_key_exists("timeslots", $this->_propDict)) {
            if (is_a($this->_propDict["timeslots"], "Microsoft\Graph\Model\TimeSlot")) {
                return $this->_propDict["timeslots"];
            } else {
                $this->_propDict["timeslots"] = new TimeSlot($this->_propDict["timeslots"]);
                return $this->_propDict["timeslots"];
            }
        }
        return null;
    }

    /**
    * Sets the timeslots
    *
    * @param TimeSlot $val The value to assign to the timeslots
    *
    * @return TimeConstraint The TimeConstraint
    */
    public function setTimeslots($val)
    {
        $this->_propDict["timeslots"] = $val;
         return $this;
    }
}
