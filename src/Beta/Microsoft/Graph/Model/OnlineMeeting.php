<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnlineMeeting File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* OnlineMeeting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnlineMeeting extends Entity
{
    /**
    * Gets the accessLevel
    *
    * @return AccessLevel|null The accessLevel
    */
    public function getAccessLevel()
    {
        if (array_key_exists("accessLevel", $this->_propDict)) {
            if (is_a($this->_propDict["accessLevel"], "\Beta\Microsoft\Graph\Model\AccessLevel") || is_null($this->_propDict["accessLevel"])) {
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
    * Gets the allowAttendeeToEnableCamera
    * Indicates whether attendees can turn on their camera.
    *
    * @return bool|null The allowAttendeeToEnableCamera
    */
    public function getAllowAttendeeToEnableCamera()
    {
        if (array_key_exists("allowAttendeeToEnableCamera", $this->_propDict)) {
            return $this->_propDict["allowAttendeeToEnableCamera"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowAttendeeToEnableCamera
    * Indicates whether attendees can turn on their camera.
    *
    * @param bool $val The allowAttendeeToEnableCamera
    *
    * @return OnlineMeeting
    */
    public function setAllowAttendeeToEnableCamera($val)
    {
        $this->_propDict["allowAttendeeToEnableCamera"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowAttendeeToEnableMic
    * Indicates whether attendees can turn on their microphone.
    *
    * @return bool|null The allowAttendeeToEnableMic
    */
    public function getAllowAttendeeToEnableMic()
    {
        if (array_key_exists("allowAttendeeToEnableMic", $this->_propDict)) {
            return $this->_propDict["allowAttendeeToEnableMic"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowAttendeeToEnableMic
    * Indicates whether attendees can turn on their microphone.
    *
    * @param bool $val The allowAttendeeToEnableMic
    *
    * @return OnlineMeeting
    */
    public function setAllowAttendeeToEnableMic($val)
    {
        $this->_propDict["allowAttendeeToEnableMic"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowedPresenters
    * Specifies who can be a presenter in a meeting. Possible values are listed in the following table.
    *
    * @return OnlineMeetingPresenters|null The allowedPresenters
    */
    public function getAllowedPresenters()
    {
        if (array_key_exists("allowedPresenters", $this->_propDict)) {
            if (is_a($this->_propDict["allowedPresenters"], "\Beta\Microsoft\Graph\Model\OnlineMeetingPresenters") || is_null($this->_propDict["allowedPresenters"])) {
                return $this->_propDict["allowedPresenters"];
            } else {
                $this->_propDict["allowedPresenters"] = new OnlineMeetingPresenters($this->_propDict["allowedPresenters"]);
                return $this->_propDict["allowedPresenters"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowedPresenters
    * Specifies who can be a presenter in a meeting. Possible values are listed in the following table.
    *
    * @param OnlineMeetingPresenters $val The allowedPresenters
    *
    * @return OnlineMeeting
    */
    public function setAllowedPresenters($val)
    {
        $this->_propDict["allowedPresenters"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowMeetingChat
    * Specifies the mode of meeting chat.
    *
    * @return MeetingChatMode|null The allowMeetingChat
    */
    public function getAllowMeetingChat()
    {
        if (array_key_exists("allowMeetingChat", $this->_propDict)) {
            if (is_a($this->_propDict["allowMeetingChat"], "\Beta\Microsoft\Graph\Model\MeetingChatMode") || is_null($this->_propDict["allowMeetingChat"])) {
                return $this->_propDict["allowMeetingChat"];
            } else {
                $this->_propDict["allowMeetingChat"] = new MeetingChatMode($this->_propDict["allowMeetingChat"]);
                return $this->_propDict["allowMeetingChat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowMeetingChat
    * Specifies the mode of meeting chat.
    *
    * @param MeetingChatMode $val The allowMeetingChat
    *
    * @return OnlineMeeting
    */
    public function setAllowMeetingChat($val)
    {
        $this->_propDict["allowMeetingChat"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowTeamworkReactions
    * Indicates if Teams reactions are enabled for the meeting.
    *
    * @return bool|null The allowTeamworkReactions
    */
    public function getAllowTeamworkReactions()
    {
        if (array_key_exists("allowTeamworkReactions", $this->_propDict)) {
            return $this->_propDict["allowTeamworkReactions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowTeamworkReactions
    * Indicates if Teams reactions are enabled for the meeting.
    *
    * @param bool $val The allowTeamworkReactions
    *
    * @return OnlineMeeting
    */
    public function setAllowTeamworkReactions($val)
    {
        $this->_propDict["allowTeamworkReactions"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the alternativeRecording
    * The content stream of the alternative recording of a live event. Read-only.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The alternativeRecording
    */
    public function getAlternativeRecording()
    {
        if (array_key_exists("alternativeRecording", $this->_propDict)) {
            if (is_a($this->_propDict["alternativeRecording"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["alternativeRecording"])) {
                return $this->_propDict["alternativeRecording"];
            } else {
                $this->_propDict["alternativeRecording"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["alternativeRecording"]);
                return $this->_propDict["alternativeRecording"];
            }
        }
        return null;
    }
    
    /**
    * Sets the alternativeRecording
    * The content stream of the alternative recording of a live event. Read-only.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The alternativeRecording
    *
    * @return OnlineMeeting
    */
    public function setAlternativeRecording($val)
    {
        $this->_propDict["alternativeRecording"] = $val;
        return $this;
    }
    
    /**
    * Gets the attendeeReport
    * The content stream of the attendee report of a live event. Read-only.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The attendeeReport
    */
    public function getAttendeeReport()
    {
        if (array_key_exists("attendeeReport", $this->_propDict)) {
            if (is_a($this->_propDict["attendeeReport"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["attendeeReport"])) {
                return $this->_propDict["attendeeReport"];
            } else {
                $this->_propDict["attendeeReport"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["attendeeReport"]);
                return $this->_propDict["attendeeReport"];
            }
        }
        return null;
    }
    
    /**
    * Sets the attendeeReport
    * The content stream of the attendee report of a live event. Read-only.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The attendeeReport
    *
    * @return OnlineMeeting
    */
    public function setAttendeeReport($val)
    {
        $this->_propDict["attendeeReport"] = $val;
        return $this;
    }
    
    /**
    * Gets the audioConferencing
    * The phone access (dial-in) information for an online meeting. Read-only.
    *
    * @return AudioConferencing|null The audioConferencing
    */
    public function getAudioConferencing()
    {
        if (array_key_exists("audioConferencing", $this->_propDict)) {
            if (is_a($this->_propDict["audioConferencing"], "\Beta\Microsoft\Graph\Model\AudioConferencing") || is_null($this->_propDict["audioConferencing"])) {
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
    * Gets the broadcastSettings
    * Settings related to a live event
    *
    * @return BroadcastMeetingSettings|null The broadcastSettings
    */
    public function getBroadcastSettings()
    {
        if (array_key_exists("broadcastSettings", $this->_propDict)) {
            if (is_a($this->_propDict["broadcastSettings"], "\Beta\Microsoft\Graph\Model\BroadcastMeetingSettings") || is_null($this->_propDict["broadcastSettings"])) {
                return $this->_propDict["broadcastSettings"];
            } else {
                $this->_propDict["broadcastSettings"] = new BroadcastMeetingSettings($this->_propDict["broadcastSettings"]);
                return $this->_propDict["broadcastSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the broadcastSettings
    * Settings related to a live event
    *
    * @param BroadcastMeetingSettings $val The broadcastSettings
    *
    * @return OnlineMeeting
    */
    public function setBroadcastSettings($val)
    {
        $this->_propDict["broadcastSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the canceledDateTime
    *
    * @return \DateTime|null The canceledDateTime
    */
    public function getCanceledDateTime()
    {
        if (array_key_exists("canceledDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["canceledDateTime"], "\DateTime") || is_null($this->_propDict["canceledDateTime"])) {
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
     * @return array|null The capabilities
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
    * @return ChatInfo|null The chatInfo
    */
    public function getChatInfo()
    {
        if (array_key_exists("chatInfo", $this->_propDict)) {
            if (is_a($this->_propDict["chatInfo"], "\Beta\Microsoft\Graph\Model\ChatInfo") || is_null($this->_propDict["chatInfo"])) {
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
    * @return \DateTime|null The creationDateTime
    */
    public function getCreationDateTime()
    {
        if (array_key_exists("creationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["creationDateTime"], "\DateTime") || is_null($this->_propDict["creationDateTime"])) {
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
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
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
    * @return bool|null The entryExitAnnouncement
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
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
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
    * The external ID. A custom ID. Optional.
    *
    * @return string|null The externalId
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
    * The external ID. A custom ID. Optional.
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
    * Indicates whether this is a live event.
    *
    * @return bool|null The isBroadcast
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
    * Indicates whether this is a live event.
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
    * @return bool|null The isCancelled
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
    * Whether or not to announce when callers join or leave.
    *
    * @return bool|null The isEntryExitAnnounced
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
    * Whether or not to announce when callers join or leave.
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
    * @return ItemBody|null The joinInformation
    */
    public function getJoinInformation()
    {
        if (array_key_exists("joinInformation", $this->_propDict)) {
            if (is_a($this->_propDict["joinInformation"], "\Beta\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["joinInformation"])) {
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
    * @return string|null The joinUrl
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
    * Specifies which participants can bypass the meeting   lobby.
    *
    * @return LobbyBypassSettings|null The lobbyBypassSettings
    */
    public function getLobbyBypassSettings()
    {
        if (array_key_exists("lobbyBypassSettings", $this->_propDict)) {
            if (is_a($this->_propDict["lobbyBypassSettings"], "\Beta\Microsoft\Graph\Model\LobbyBypassSettings") || is_null($this->_propDict["lobbyBypassSettings"])) {
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
    * Specifies which participants can bypass the meeting   lobby.
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
    * @return MeetingParticipants|null The participants
    */
    public function getParticipants()
    {
        if (array_key_exists("participants", $this->_propDict)) {
            if (is_a($this->_propDict["participants"], "\Beta\Microsoft\Graph\Model\MeetingParticipants") || is_null($this->_propDict["participants"])) {
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
    * Gets the recording
    * The content stream of the recording of a live event. Read-only.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The recording
    */
    public function getRecording()
    {
        if (array_key_exists("recording", $this->_propDict)) {
            if (is_a($this->_propDict["recording"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["recording"])) {
                return $this->_propDict["recording"];
            } else {
                $this->_propDict["recording"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["recording"]);
                return $this->_propDict["recording"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recording
    * The content stream of the recording of a live event. Read-only.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The recording
    *
    * @return OnlineMeeting
    */
    public function setRecording($val)
    {
        $this->_propDict["recording"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    * The meeting start time in UTC.
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
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
    * @return string|null The subject
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
    * @return string|null The videoTeleconferenceId
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
    
    /**
    * Gets the meetingAttendanceReport
    *
    * @return MeetingAttendanceReport|null The meetingAttendanceReport
    */
    public function getMeetingAttendanceReport()
    {
        if (array_key_exists("meetingAttendanceReport", $this->_propDict)) {
            if (is_a($this->_propDict["meetingAttendanceReport"], "\Beta\Microsoft\Graph\Model\MeetingAttendanceReport") || is_null($this->_propDict["meetingAttendanceReport"])) {
                return $this->_propDict["meetingAttendanceReport"];
            } else {
                $this->_propDict["meetingAttendanceReport"] = new MeetingAttendanceReport($this->_propDict["meetingAttendanceReport"]);
                return $this->_propDict["meetingAttendanceReport"];
            }
        }
        return null;
    }
    
    /**
    * Sets the meetingAttendanceReport
    *
    * @param MeetingAttendanceReport $val The meetingAttendanceReport
    *
    * @return OnlineMeeting
    */
    public function setMeetingAttendanceReport($val)
    {
        $this->_propDict["meetingAttendanceReport"] = $val;
        return $this;
    }
    
}
