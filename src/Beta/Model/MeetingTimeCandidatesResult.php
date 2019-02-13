<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingTimeCandidatesResult File
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
* MeetingTimeCandidatesResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MeetingTimeCandidatesResult extends Entity
{

    /**
    * Gets the meetingTimeSlots
    *
    * @return MeetingTimeCandidate The meetingTimeSlots
    */
    public function getMeetingTimeSlots()
    {
        if (array_key_exists("meetingTimeSlots", $this->_propDict)) {
            if (is_a($this->_propDict["meetingTimeSlots"], "Microsoft\Graph\Beta\Model\MeetingTimeCandidate")) {
                return $this->_propDict["meetingTimeSlots"];
            } else {
                $this->_propDict["meetingTimeSlots"] = new MeetingTimeCandidate($this->_propDict["meetingTimeSlots"]);
                return $this->_propDict["meetingTimeSlots"];
            }
        }
        return null;
    }

    /**
    * Sets the meetingTimeSlots
    *
    * @param MeetingTimeCandidate $val The value to assign to the meetingTimeSlots
    *
    * @return MeetingTimeCandidatesResult The MeetingTimeCandidatesResult
    */
    public function setMeetingTimeSlots($val)
    {
        $this->_propDict["meetingTimeSlots"] = $val;
         return $this;
    }
    /**
    * Gets the emptySuggestionsHint
    *
    * @return string The emptySuggestionsHint
    */
    public function getEmptySuggestionsHint()
    {
        if (array_key_exists("emptySuggestionsHint", $this->_propDict)) {
            return $this->_propDict["emptySuggestionsHint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emptySuggestionsHint
    *
    * @param string $val The value of the emptySuggestionsHint
    *
    * @return MeetingTimeCandidatesResult
    */
    public function setEmptySuggestionsHint($val)
    {
        $this->_propDict["emptySuggestionsHint"] = $val;
        return $this;
    }
}
