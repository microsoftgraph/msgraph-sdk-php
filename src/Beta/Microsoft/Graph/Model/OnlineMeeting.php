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
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* OnlineMeeting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnlineMeeting extends Entity
{
    /**
    * Gets the accessLevel
    *
    * @return AccessLevel The accessLevel
    */
    public function getAccessLevel()
    {
        if (array_key_exists("accessLevel", $this->_propDict)) {
            if (is_a($this->_propDict["accessLevel"], "Beta\Microsoft\Graph\Model\AccessLevel")) {
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
    * The phone access (dial-in) information for an online meeting. Read-only.
    *
    * @return AudioConferencing The audioConferencing
    */
    public function getAudioConferencing()
    {
        if (array_key_exists("audioConferencing", $this->_propDict)) {
            if (is_a($this->_propDict["audioConferencing"], "Beta\Microsoft\Graph\Model\AudioConferencing")) {
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
    * The phone access (dial-in) information for an online meeting. Read-only.
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
    * Gets the chatInfo
    * The chat information associated with this online meeting.
    *
    * @return ChatInfo The chatInfo
    */
    public function getChatInfo()
    {
        if (array_key_exists("chatInfo", $this->_propDict)) {
            if (is_a($this->_propDict["chatInfo"], "Beta\Microsoft\Graph\Model\ChatInfo")) {
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
    * The chat information associated with this online meeting.
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
    * Gets the creationDateTime
    * The meeting creation time in UTC. Read-only.
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
    * The meeting creation time in UTC. Read-only.
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
    * Gets the endDateTime
    * The meeting end time in UTC.
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
    * The meeting end time in UTC.
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
    * Gets the externalId
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalId
    *
    * @param string $val The externalId
    *
    * @return OnlineMeeting
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
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
    * Gets the isEntryExitAnnounced
    *
    * @return bool The isEntryExitAnnounced
    */
    public function getIsEntryExitAnnounced()
    {
        if (array_key_exists("isEntryExitAnnounced", $this->_propDict)) {
            return $this->_propDict["isEntryExitAnnounced"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEntryExitAnnounced
    *
    * @param bool $val The isEntryExitAnnounced
    *
    * @return OnlineMeeting
    */
    public function setIsEntryExitAnnounced($val)
    {
        $this->_propDict["isEntryExitAnnounced"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the joinInformation
    * The join information in the language and locale variant specified in the Accept-Language request HTTP header. Read-only.
    *
    * @return ItemBody The joinInformation
    */
    public function getJoinInformation()
    {
        if (array_key_exists("joinInformation", $this->_propDict)) {
            if (is_a($this->_propDict["joinInformation"], "Beta\Microsoft\Graph\Model\ItemBody")) {
                return $this->_propDict["joinInformation"];
            } else {
                $this->_propDict["joinInformation"] = new ItemBody($this->_propDict["joinInformation"]);
                return $this->_propDict["joinInformation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the joinInformation
    * The join information in the language and locale variant specified in the Accept-Language request HTTP header. Read-only.
    *
    * @param ItemBody $val The joinInformation
    *
    * @return OnlineMeeting
    */
    public function setJoinInformation($val)
    {
        $this->_propDict["joinInformation"] = $val;
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
    * Gets the lobbyBypassSettings
    *
    * @return LobbyBypassSettings The lobbyBypassSettings
    */
    public function getLobbyBypassSettings()
    {
        if (array_key_exists("lobbyBypassSettings", $this->_propDict)) {
            if (is_a($this->_propDict["lobbyBypassSettings"], "Beta\Microsoft\Graph\Model\LobbyBypassSettings")) {
                return $this->_propDict["lobbyBypassSettings"];
            } else {
                $this->_propDict["lobbyBypassSettings"] = new LobbyBypassSettings($this->_propDict["lobbyBypassSettings"]);
                return $this->_propDict["lobbyBypassSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lobbyBypassSettings
    *
    * @param LobbyBypassSettings $val The lobbyBypassSettings
    *
    * @return OnlineMeeting
    */
    public function setLobbyBypassSettings($val)
    {
        $this->_propDict["lobbyBypassSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the participants
    * The participants associated with the online meeting.  This includes the organizer and the attendees.
    *
    * @return MeetingParticipants The participants
    */
    public function getParticipants()
    {
        if (array_key_exists("participants", $this->_propDict)) {
            if (is_a($this->_propDict["participants"], "Beta\Microsoft\Graph\Model\MeetingParticipants")) {
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
    * The participants associated with the online meeting.  This includes the organizer and the attendees.
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
    * Gets the startDateTime
    * The meeting start time in UTC.
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
    * The meeting start time in UTC.
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
    * Gets the subject
    * The subject of the online meeting.
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
    * The subject of the online meeting.
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
    * Gets the videoTeleconferenceId
    * The video teleconferencing ID. Read-only.
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
    * The video teleconferencing ID. Read-only.
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