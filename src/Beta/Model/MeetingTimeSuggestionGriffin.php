<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingTimeSuggestionGriffin File
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
* MeetingTimeSuggestionGriffin class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MeetingTimeSuggestionGriffin extends Entity
{
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
    * @return MeetingTimeSuggestionGriffin
    */
    public function setConfidence($val)
    {
        $this->_propDict["confidence"] = $val;
        return $this;
    }
    /**
    * Gets the order
    *
    * @return int The order
    */
    public function getOrder()
    {
        if (array_key_exists("order", $this->_propDict)) {
            return $this->_propDict["order"];
        } else {
            return null;
        }
    }

    /**
    * Sets the order
    *
    * @param int $val The value of the order
    *
    * @return MeetingTimeSuggestionGriffin
    */
    public function setOrder($val)
    {
        $this->_propDict["order"] = $val;
        return $this;
    }

    /**
    * Gets the organizerAvailability
    *
    * @return AvailabilityStatus The organizerAvailability
    */
    public function getOrganizerAvailability()
    {
        if (array_key_exists("organizerAvailability", $this->_propDict)) {
            if (is_a($this->_propDict["organizerAvailability"], "Microsoft\Graph\Beta\Model\AvailabilityStatus")) {
                return $this->_propDict["organizerAvailability"];
            } else {
                $this->_propDict["organizerAvailability"] = new AvailabilityStatus($this->_propDict["organizerAvailability"]);
                return $this->_propDict["organizerAvailability"];
            }
        }
        return null;
    }

    /**
    * Sets the organizerAvailability
    *
    * @param AvailabilityStatus $val The value to assign to the organizerAvailability
    *
    * @return MeetingTimeSuggestionGriffin The MeetingTimeSuggestionGriffin
    */
    public function setOrganizerAvailability($val)
    {
        $this->_propDict["organizerAvailability"] = $val;
         return $this;
    }

    /**
    * Gets the attendeeAvailability
    *
    * @return AttendeeAvailabilityDataModel The attendeeAvailability
    */
    public function getAttendeeAvailability()
    {
        if (array_key_exists("attendeeAvailability", $this->_propDict)) {
            if (is_a($this->_propDict["attendeeAvailability"], "Microsoft\Graph\Beta\Model\AttendeeAvailabilityDataModel")) {
                return $this->_propDict["attendeeAvailability"];
            } else {
                $this->_propDict["attendeeAvailability"] = new AttendeeAvailabilityDataModel($this->_propDict["attendeeAvailability"]);
                return $this->_propDict["attendeeAvailability"];
            }
        }
        return null;
    }

    /**
    * Sets the attendeeAvailability
    *
    * @param AttendeeAvailabilityDataModel $val The value to assign to the attendeeAvailability
    *
    * @return MeetingTimeSuggestionGriffin The MeetingTimeSuggestionGriffin
    */
    public function setAttendeeAvailability($val)
    {
        $this->_propDict["attendeeAvailability"] = $val;
         return $this;
    }

    /**
    * Gets the locations
    *
    * @return LocationDataModel The locations
    */
    public function getLocations()
    {
        if (array_key_exists("locations", $this->_propDict)) {
            if (is_a($this->_propDict["locations"], "Microsoft\Graph\Beta\Model\LocationDataModel")) {
                return $this->_propDict["locations"];
            } else {
                $this->_propDict["locations"] = new LocationDataModel($this->_propDict["locations"]);
                return $this->_propDict["locations"];
            }
        }
        return null;
    }

    /**
    * Sets the locations
    *
    * @param LocationDataModel $val The value to assign to the locations
    *
    * @return MeetingTimeSuggestionGriffin The MeetingTimeSuggestionGriffin
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
    * @return MeetingTimeSuggestionGriffin
    */
    public function setSuggestionReason($val)
    {
        $this->_propDict["suggestionReason"] = $val;
        return $this;
    }

    /**
    * Gets the meetingTimeSlot
    *
    * @return MeetingTimeSlotDataModel The meetingTimeSlot
    */
    public function getMeetingTimeSlot()
    {
        if (array_key_exists("meetingTimeSlot", $this->_propDict)) {
            if (is_a($this->_propDict["meetingTimeSlot"], "Microsoft\Graph\Beta\Model\MeetingTimeSlotDataModel")) {
                return $this->_propDict["meetingTimeSlot"];
            } else {
                $this->_propDict["meetingTimeSlot"] = new MeetingTimeSlotDataModel($this->_propDict["meetingTimeSlot"]);
                return $this->_propDict["meetingTimeSlot"];
            }
        }
        return null;
    }

    /**
    * Sets the meetingTimeSlot
    *
    * @param MeetingTimeSlotDataModel $val The value to assign to the meetingTimeSlot
    *
    * @return MeetingTimeSuggestionGriffin The MeetingTimeSuggestionGriffin
    */
    public function setMeetingTimeSlot($val)
    {
        $this->_propDict["meetingTimeSlot"] = $val;
         return $this;
    }
}
