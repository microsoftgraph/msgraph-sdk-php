<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EventMessage File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* EventMessage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EventMessage extends Message
{
    /**
    * Gets the meetingMessageType
    *
    * @return MeetingMessageType The meetingMessageType
    */
    public function getMeetingMessageType()
    {
        if (array_key_exists("meetingMessageType", $this->_propDict)) {
            if (is_a($this->_propDict["meetingMessageType"], "MeetingMessageType")) {
                return $this->_propDict["meetingMessageType"];
            } else {
                $this->_propDict["meetingMessageType"] = new MeetingMessageType($this->_propDict["meetingMessageType"]);
                return $this->_propDict["meetingMessageType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the meetingMessageType
    *
    * @param string $val The meetingMessageType
    *
    * @return EventMessage
    */
    public function setMeetingMessageType($val)
    {
        $this->_propDict["meetingMessageType"] = $val;
        return $this;
    }
    
    /**
    * Gets the event
    *
    * @return Event The event
    */
    public function getEvent()
    {
        if (array_key_exists("event", $this->_propDict)) {
            if (is_a($this->_propDict["event"], "Event")) {
                return $this->_propDict["event"];
            } else {
                $this->_propDict["event"] = new Event($this->_propDict["event"]);
                return $this->_propDict["event"];
            }
        }
        return null;
    }
    
    /**
    * Sets the event
    *
    * @param string $val The event
    *
    * @return EventMessage
    */
    public function setEvent($val)
    {
        $this->_propDict["event"] = $val;
        return $this;
    }
    
}