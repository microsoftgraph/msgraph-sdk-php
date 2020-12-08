<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Presence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* Presence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Presence extends Entity
{
    /**
    * Gets the activity
    * The supplemental information to a user's availability. Possible values are Available, Away, BeRightBack,Busy, DoNotDisturb, InACall, InAConferenceCall, Inactive,InAMeeting, Offline, OffWork,OutOfOffice, PresenceUnknown,Presenting, UrgentInterruptionsOnly.
    *
    * @return string The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            return $this->_propDict["activity"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activity
    * The supplemental information to a user's availability. Possible values are Available, Away, BeRightBack,Busy, DoNotDisturb, InACall, InAConferenceCall, Inactive,InAMeeting, Offline, OffWork,OutOfOffice, PresenceUnknown,Presenting, UrgentInterruptionsOnly.
    *
    * @param string $val The activity
    *
    * @return Presence
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }
    
    /**
    * Gets the availability
    * The base presence information for a user. Possible values are Available, AvailableIdle,  Away, BeRightBack, Busy, BusyIdle, DoNotDisturb, Offline, PresenceUnknown
    *
    * @return string The availability
    */
    public function getAvailability()
    {
        if (array_key_exists("availability", $this->_propDict)) {
            return $this->_propDict["availability"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the availability
    * The base presence information for a user. Possible values are Available, AvailableIdle,  Away, BeRightBack, Busy, BusyIdle, DoNotDisturb, Offline, PresenceUnknown
    *
    * @param string $val The availability
    *
    * @return Presence
    */
    public function setAvailability($val)
    {
        $this->_propDict["availability"] = $val;
        return $this;
    }
    
}