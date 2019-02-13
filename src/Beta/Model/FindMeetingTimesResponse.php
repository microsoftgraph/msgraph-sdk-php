<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FindMeetingTimesResponse File
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
* FindMeetingTimesResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class FindMeetingTimesResponse extends Entity
{

    /**
    * Gets the meetingTimeSuggestions
    *
    * @return MeetingTimeSuggestionGriffin The meetingTimeSuggestions
    */
    public function getMeetingTimeSuggestions()
    {
        if (array_key_exists("meetingTimeSuggestions", $this->_propDict)) {
            if (is_a($this->_propDict["meetingTimeSuggestions"], "Microsoft\Graph\Beta\Model\MeetingTimeSuggestionGriffin")) {
                return $this->_propDict["meetingTimeSuggestions"];
            } else {
                $this->_propDict["meetingTimeSuggestions"] = new MeetingTimeSuggestionGriffin($this->_propDict["meetingTimeSuggestions"]);
                return $this->_propDict["meetingTimeSuggestions"];
            }
        }
        return null;
    }

    /**
    * Sets the meetingTimeSuggestions
    *
    * @param MeetingTimeSuggestionGriffin $val The value to assign to the meetingTimeSuggestions
    *
    * @return FindMeetingTimesResponse The FindMeetingTimesResponse
    */
    public function setMeetingTimeSuggestions($val)
    {
        $this->_propDict["meetingTimeSuggestions"] = $val;
         return $this;
    }
    /**
    * Gets the emptySuggestionsReason
    *
    * @return string The emptySuggestionsReason
    */
    public function getEmptySuggestionsReason()
    {
        if (array_key_exists("emptySuggestionsReason", $this->_propDict)) {
            return $this->_propDict["emptySuggestionsReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emptySuggestionsReason
    *
    * @param string $val The value of the emptySuggestionsReason
    *
    * @return FindMeetingTimesResponse
    */
    public function setEmptySuggestionsReason($val)
    {
        $this->_propDict["emptySuggestionsReason"] = $val;
        return $this;
    }
}
