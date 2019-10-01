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
    * Gets the creationDateTime
    *
    * @return \DateTime The creationDateTime
    */
    public function getCreationDateTime()
    {
        if (array_key_exists("creationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["creationDateTime"], "\DateTime")) {
                return $this->_propDict["creationDateTime"];
            } else {
                $this->_propDict["creationDateTime"] = new \DateTime($this->_propDict["creationDateTime"]);
                return $this->_propDict["creationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the creationDateTime
    *
    * @param \DateTime $val The creationDateTime
    *
    * @return OnlineMeeting
    */
    public function setCreationDateTime($val)
    {
        $this->_propDict["creationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    *
    * @param \DateTime $val The startDateTime
    *
    * @return OnlineMeeting
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDateTime
    *
    * @return \DateTime The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endDateTime
    *
    * @param \DateTime $val The endDateTime
    *
    * @return OnlineMeeting
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the canceledDateTime
    *
    * @return \DateTime The canceledDateTime
    */
    public function getCanceledDateTime()
    {
        if (array_key_exists("canceledDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["canceledDateTime"], "\DateTime")) {
                return $this->_propDict["canceledDateTime"];
            } else {
                $this->_propDict["canceledDateTime"] = new \DateTime($this->_propDict["canceledDateTime"]);
                return $this->_propDict["canceledDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the canceledDateTime
    *
    * @param \DateTime $val The canceledDateTime
    *
    * @return OnlineMeeting
    */
    public function setCanceledDateTime($val)
    {
        $this->_propDict["canceledDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return OnlineMeeting
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
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
    * Gets the isBroadcast
    *
    * @return bool The isBroadcast
    */
    public function getIsBroadcast()
    {
        if (array_key_exists("isBroadcast", $this->_propDict)) {
            return $this->_propDict["isBroadcast"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isBroadcast
    *
    * @param bool $val The isBroadcast
    *
    * @return OnlineMeeting
    */
    public function setIsBroadcast($val)
    {
        $this->_propDict["isBroadcast"] = boolval($val);
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
     * Gets the capabilities
     *
     * @return array The capabilities
     */
    public function getCapabilities()
    {
        if (array_key_exists("capabilities", $this->_propDict)) {
           return $this->_propDict["capabilities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the capabilities
    *
    * @param MeetingCapabilities $val The capabilities
    *
    * @return OnlineMeeting
    */
    public function setCapabilities($val)
    {
		$this->_propDict["capabilities"] = $val;
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
    * Gets the videoTeleconferenceId
    *
    * @return string The videoTeleconferenceId
    */
    public function getVideoTeleconferenceId()
    {
        if (array_key_exists("videoTeleconferenceId", $this->_propDict)) {
            return $this->_propDict["videoTeleconferenceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the videoTeleconferenceId
    *
    * @param string $val The videoTeleconferenceId
    *
    * @return OnlineMeeting
    */
    public function setVideoTeleconferenceId($val)
    {
        $this->_propDict["videoTeleconferenceId"] = $val;
        return $this;
    }
    
}