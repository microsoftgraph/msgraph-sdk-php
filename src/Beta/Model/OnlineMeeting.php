<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnlineMeeting File
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
* OnlineMeeting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OnlineMeeting extends Entity
{
    /**
    * Gets the creationTime
    *
    * @return \DateTime The creationTime
    */
    public function getCreationTime()
    {
        if (array_key_exists("creationTime", $this->_propDict)) {
            if (is_a($this->_propDict["creationTime"], "\DateTime")) {
                return $this->_propDict["creationTime"];
            } else {
                $this->_propDict["creationTime"] = new \DateTime($this->_propDict["creationTime"]);
                return $this->_propDict["creationTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the creationTime
    *
    * @param \DateTime $val The creationTime
    *
    * @return OnlineMeeting
    */
    public function setCreationTime($val)
    {
        $this->_propDict["creationTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the startTime
    *
    * @return \DateTime The startTime
    */
    public function getStartTime()
    {
        if (array_key_exists("startTime", $this->_propDict)) {
            if (is_a($this->_propDict["startTime"], "\DateTime")) {
                return $this->_propDict["startTime"];
            } else {
                $this->_propDict["startTime"] = new \DateTime($this->_propDict["startTime"]);
                return $this->_propDict["startTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startTime
    *
    * @param \DateTime $val The startTime
    *
    * @return OnlineMeeting
    */
    public function setStartTime($val)
    {
        $this->_propDict["startTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the endTime
    *
    * @return \DateTime The endTime
    */
    public function getEndTime()
    {
        if (array_key_exists("endTime", $this->_propDict)) {
            if (is_a($this->_propDict["endTime"], "\DateTime")) {
                return $this->_propDict["endTime"];
            } else {
                $this->_propDict["endTime"] = new \DateTime($this->_propDict["endTime"]);
                return $this->_propDict["endTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endTime
    *
    * @param \DateTime $val The endTime
    *
    * @return OnlineMeeting
    */
    public function setEndTime($val)
    {
        $this->_propDict["endTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the canceledTime
    *
    * @return \DateTime The canceledTime
    */
    public function getCanceledTime()
    {
        if (array_key_exists("canceledTime", $this->_propDict)) {
            if (is_a($this->_propDict["canceledTime"], "\DateTime")) {
                return $this->_propDict["canceledTime"];
            } else {
                $this->_propDict["canceledTime"] = new \DateTime($this->_propDict["canceledTime"]);
                return $this->_propDict["canceledTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the canceledTime
    *
    * @param \DateTime $val The canceledTime
    *
    * @return OnlineMeeting
    */
    public function setCanceledTime($val)
    {
        $this->_propDict["canceledTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationTime
    *
    * @return \DateTime The expirationTime
    */
    public function getExpirationTime()
    {
        if (array_key_exists("expirationTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationTime"], "\DateTime")) {
                return $this->_propDict["expirationTime"];
            } else {
                $this->_propDict["expirationTime"] = new \DateTime($this->_propDict["expirationTime"]);
                return $this->_propDict["expirationTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationTime
    *
    * @param \DateTime $val The expirationTime
    *
    * @return OnlineMeeting
    */
    public function setExpirationTime($val)
    {
        $this->_propDict["expirationTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the entryExitAnnouncement
    *
    * @return bool The entryExitAnnouncement
    */
    public function getEntryExitAnnouncement()
    {
        if (array_key_exists("entryExitAnnouncement", $this->_propDict)) {
            return $this->_propDict["entryExitAnnouncement"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the entryExitAnnouncement
    *
    * @param bool $val The entryExitAnnouncement
    *
    * @return OnlineMeeting
    */
    public function setEntryExitAnnouncement($val)
    {
        $this->_propDict["entryExitAnnouncement"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the joinUrl
    *
    * @return string The joinUrl
    */
    public function getJoinUrl()
    {
        if (array_key_exists("joinUrl", $this->_propDict)) {
            return $this->_propDict["joinUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the joinUrl
    *
    * @param string $val The joinUrl
    *
    * @return OnlineMeeting
    */
    public function setJoinUrl($val)
    {
        $this->_propDict["joinUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the subject
    *
    * @return string The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subject
    *
    * @param string $val The subject
    *
    * @return OnlineMeeting
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    
    /**
    * Gets the isCancelled
    *
    * @return bool The isCancelled
    */
    public function getIsCancelled()
    {
        if (array_key_exists("isCancelled", $this->_propDict)) {
            return $this->_propDict["isCancelled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isCancelled
    *
    * @param bool $val The isCancelled
    *
    * @return OnlineMeeting
    */
    public function setIsCancelled($val)
    {
        $this->_propDict["isCancelled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the participants
    *
    * @return MeetingParticipants The participants
    */
    public function getParticipants()
    {
        if (array_key_exists("participants", $this->_propDict)) {
            if (is_a($this->_propDict["participants"], "Microsoft\Graph\Beta\Model\MeetingParticipants")) {
                return $this->_propDict["participants"];
            } else {
                $this->_propDict["participants"] = new MeetingParticipants($this->_propDict["participants"]);
                return $this->_propDict["participants"];
            }
        }
        return null;
    }
    
    /**
    * Sets the participants
    *
    * @param MeetingParticipants $val The participants
    *
    * @return OnlineMeeting
    */
    public function setParticipants($val)
    {
        $this->_propDict["participants"] = $val;
        return $this;
    }
    
    /**
    * Gets the meetingType
    *
    * @return MeetingType The meetingType
    */
    public function getMeetingType()
    {
        if (array_key_exists("meetingType", $this->_propDict)) {
            if (is_a($this->_propDict["meetingType"], "Microsoft\Graph\Beta\Model\MeetingType")) {
                return $this->_propDict["meetingType"];
            } else {
                $this->_propDict["meetingType"] = new MeetingType($this->_propDict["meetingType"]);
                return $this->_propDict["meetingType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the meetingType
    *
    * @param MeetingType $val The meetingType
    *
    * @return OnlineMeeting
    */
    public function setMeetingType($val)
    {
        $this->_propDict["meetingType"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessLevel
    *
    * @return AccessLevel The accessLevel
    */
    public function getAccessLevel()
    {
        if (array_key_exists("accessLevel", $this->_propDict)) {
            if (is_a($this->_propDict["accessLevel"], "Microsoft\Graph\Beta\Model\AccessLevel")) {
                return $this->_propDict["accessLevel"];
            } else {
                $this->_propDict["accessLevel"] = new AccessLevel($this->_propDict["accessLevel"]);
                return $this->_propDict["accessLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessLevel
    *
    * @param AccessLevel $val The accessLevel
    *
    * @return OnlineMeeting
    */
    public function setAccessLevel($val)
    {
        $this->_propDict["accessLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the audioConferencing
    *
    * @return AudioConferencing The audioConferencing
    */
    public function getAudioConferencing()
    {
        if (array_key_exists("audioConferencing", $this->_propDict)) {
            if (is_a($this->_propDict["audioConferencing"], "Microsoft\Graph\Beta\Model\AudioConferencing")) {
                return $this->_propDict["audioConferencing"];
            } else {
                $this->_propDict["audioConferencing"] = new AudioConferencing($this->_propDict["audioConferencing"]);
                return $this->_propDict["audioConferencing"];
            }
        }
        return null;
    }
    
    /**
    * Sets the audioConferencing
    *
    * @param AudioConferencing $val The audioConferencing
    *
    * @return OnlineMeeting
    */
    public function setAudioConferencing($val)
    {
        $this->_propDict["audioConferencing"] = $val;
        return $this;
    }
    
    /**
    * Gets the chatInfo
    *
    * @return ChatInfo The chatInfo
    */
    public function getChatInfo()
    {
        if (array_key_exists("chatInfo", $this->_propDict)) {
            if (is_a($this->_propDict["chatInfo"], "Microsoft\Graph\Beta\Model\ChatInfo")) {
                return $this->_propDict["chatInfo"];
            } else {
                $this->_propDict["chatInfo"] = new ChatInfo($this->_propDict["chatInfo"]);
                return $this->_propDict["chatInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the chatInfo
    *
    * @param ChatInfo $val The chatInfo
    *
    * @return OnlineMeeting
    */
    public function setChatInfo($val)
    {
        $this->_propDict["chatInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the meetingInfo
    *
    * @return MeetingInfo The meetingInfo
    */
    public function getMeetingInfo()
    {
        if (array_key_exists("meetingInfo", $this->_propDict)) {
            if (is_a($this->_propDict["meetingInfo"], "Microsoft\Graph\Beta\Model\MeetingInfo")) {
                return $this->_propDict["meetingInfo"];
            } else {
                $this->_propDict["meetingInfo"] = new MeetingInfo($this->_propDict["meetingInfo"]);
                return $this->_propDict["meetingInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the meetingInfo
    *
    * @param MeetingInfo $val The meetingInfo
    *
    * @return OnlineMeeting
    */
    public function setMeetingInfo($val)
    {
        $this->_propDict["meetingInfo"] = $val;
        return $this;
    }
    
}