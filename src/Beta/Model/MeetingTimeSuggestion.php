<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingTimeSuggestion File
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
* MeetingTimeSuggestion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MeetingTimeSuggestion extends Entity
{

    /**
    * Gets the meetingTimeSlot
    *
    * @return TimeSlot The meetingTimeSlot
    */
    public function getMeetingTimeSlot()
    {
        if (array_key_exists("meetingTimeSlot", $this->_propDict)) {
            if (is_a($this->_propDict["meetingTimeSlot"], "Microsoft\Graph\Beta\Model\TimeSlot")) {
                return $this->_propDict["meetingTimeSlot"];
            } else {
                $this->_propDict["meetingTimeSlot"] = new TimeSlot($this->_propDict["meetingTimeSlot"]);
                return $this->_propDict["meetingTimeSlot"];
            }
        }
        return null;
    }

    /**
    * Sets the meetingTimeSlot
    *
    * @param TimeSlot $val The value to assign to the meetingTimeSlot
    *
    * @return MeetingTimeSuggestion The MeetingTimeSuggestion
    */
    public function setMeetingTimeSlot($val)
    {
        $this->_propDict["meetingTimeSlot"] = $val;
         return $this;
    }
    /**
    * Gets the confidence
    *
    * @return float The confidence
    */
    public function getConfidence()
    {
        if (array_key_exists("confidence", $this->_propDict)) {
            return $this->_propDict["confidence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the confidence
    *
    * @param float $val The value of the confidence
    *
    * @return MeetingTimeSuggestion
    */
    public function setConfidence($val)
    {
        $this->_propDict["confidence"] = $val;
        return $this;
    }

    /**
    * Gets the organizerAvailability
    *
    * @return FreeBusyStatus The organizerAvailability
    */
    public function getOrganizerAvailability()
    {
        if (array_key_exists("organizerAvailability", $this->_propDict)) {
            if (is_a($this->_propDict["organizerAvailability"], "Microsoft\Graph\Beta\Model\FreeBusyStatus")) {
                return $this->_propDict["organizerAvailability"];
            } else {
                $this->_propDict["organizerAvailability"] = new FreeBusyStatus($this->_propDict["organizerAvailability"]);
                return $this->_propDict["organizerAvailability"];
            }
        }
        return null;
    }

    /**
    * Sets the organizerAvailability
    *
    * @param FreeBusyStatus $val The value to assign to the organizerAvailability
    *
    * @return MeetingTimeSuggestion The MeetingTimeSuggestion
    */
    public function setOrganizerAvailability($val)
    {
        $this->_propDict["organizerAvailability"] = $val;
         return $this;
    }

    /**
    * Gets the attendeeAvailability
    *
    * @return AttendeeAvailability The attendeeAvailability
    */
    public function getAttendeeAvailability()
    {
        if (array_key_exists("attendeeAvailability", $this->_propDict)) {
            if (is_a($this->_propDict["attendeeAvailability"], "Microsoft\Graph\Beta\Model\AttendeeAvailability")) {
                return $this->_propDict["attendeeAvailability"];
            } else {
                $this->_propDict["attendeeAvailability"] = new AttendeeAvailability($this->_propDict["attendeeAvailability"]);
                return $this->_propDict["attendeeAvailability"];
            }
        }
        return null;
    }

    /**
    * Sets the attendeeAvailability
    *
    * @param AttendeeAvailability $val The value to assign to the attendeeAvailability
    *
    * @return MeetingTimeSuggestion The MeetingTimeSuggestion
    */
    public function setAttendeeAvailability($val)
    {
        $this->_propDict["attendeeAvailability"] = $val;
         return $this;
    }

    /**
    * Gets the locations
    *
    * @return Location The locations
    */
    public function getLocations()
    {
        if (array_key_exists("locations", $this->_propDict)) {
            if (is_a($this->_propDict["locations"], "Microsoft\Graph\Beta\Model\Location")) {
                return $this->_propDict["locations"];
            } else {
                $this->_propDict["locations"] = new Location($this->_propDict["locations"]);
                return $this->_propDict["locations"];
            }
        }
        return null;
    }

    /**
    * Sets the locations
    *
    * @param Location $val The value to assign to the locations
    *
    * @return MeetingTimeSuggestion The MeetingTimeSuggestion
    */
    public function setLocations($val)
    {
        $this->_propDict["locations"] = $val;
         return $this;
    }
    /**
    * Gets the suggestionReason
    *
    * @return string The suggestionReason
    */
    public function getSuggestionReason()
    {
        if (array_key_exists("suggestionReason", $this->_propDict)) {
            return $this->_propDict["suggestionReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the suggestionReason
    *
    * @param string $val The value of the suggestionReason
    *
    * @return MeetingTimeSuggestion
    */
    public function setSuggestionReason($val)
    {
        $this->_propDict["suggestionReason"] = $val;
        return $this;
    }
}
