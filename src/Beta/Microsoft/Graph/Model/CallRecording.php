<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallRecording File
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
* CallRecording class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallRecording extends Entity
{
    /**
    * Gets the content
    * The content of the recording. Read-only.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["content"])) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }

    /**
    * Sets the content
    * The content of the recording. Read-only.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The content
    *
    * @return CallRecording
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date and time at which the recording was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Date and time at which the recording was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return CallRecording
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the meetingId
    * The unique identifier of the onlineMeeting related to this recording. Read-only.
    *
    * @return string|null The meetingId
    */
    public function getMeetingId()
    {
        if (array_key_exists("meetingId", $this->_propDict)) {
            return $this->_propDict["meetingId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the meetingId
    * The unique identifier of the onlineMeeting related to this recording. Read-only.
    *
    * @param string $val The meetingId
    *
    * @return CallRecording
    */
    public function setMeetingId($val)
    {
        $this->_propDict["meetingId"] = $val;
        return $this;
    }

    /**
    * Gets the meetingOrganizer
    *
    * @return IdentitySet|null The meetingOrganizer
    */
    public function getMeetingOrganizer()
    {
        if (array_key_exists("meetingOrganizer", $this->_propDict)) {
            if (is_a($this->_propDict["meetingOrganizer"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["meetingOrganizer"])) {
                return $this->_propDict["meetingOrganizer"];
            } else {
                $this->_propDict["meetingOrganizer"] = new IdentitySet($this->_propDict["meetingOrganizer"]);
                return $this->_propDict["meetingOrganizer"];
            }
        }
        return null;
    }

    /**
    * Sets the meetingOrganizer
    *
    * @param IdentitySet $val The meetingOrganizer
    *
    * @return CallRecording
    */
    public function setMeetingOrganizer($val)
    {
        $this->_propDict["meetingOrganizer"] = $val;
        return $this;
    }

    /**
    * Gets the meetingOrganizerId
    * The unique identifier of the organizer of the onlineMeeting related to this recording. Read-only.
    *
    * @return string|null The meetingOrganizerId
    */
    public function getMeetingOrganizerId()
    {
        if (array_key_exists("meetingOrganizerId", $this->_propDict)) {
            return $this->_propDict["meetingOrganizerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the meetingOrganizerId
    * The unique identifier of the organizer of the onlineMeeting related to this recording. Read-only.
    *
    * @param string $val The meetingOrganizerId
    *
    * @return CallRecording
    */
    public function setMeetingOrganizerId($val)
    {
        $this->_propDict["meetingOrganizerId"] = $val;
        return $this;
    }

    /**
    * Gets the recordingContentUrl
    * The URL which can be used to access the content of the recording. Read-only.
    *
    * @return string|null The recordingContentUrl
    */
    public function getRecordingContentUrl()
    {
        if (array_key_exists("recordingContentUrl", $this->_propDict)) {
            return $this->_propDict["recordingContentUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recordingContentUrl
    * The URL which can be used to access the content of the recording. Read-only.
    *
    * @param string $val The recordingContentUrl
    *
    * @return CallRecording
    */
    public function setRecordingContentUrl($val)
    {
        $this->_propDict["recordingContentUrl"] = $val;
        return $this;
    }

}
