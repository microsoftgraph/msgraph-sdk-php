<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallTranscript File
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
* CallTranscript class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallTranscript extends Entity
{
    /**
    * Gets the content
    * The content of the transcript. Read-only.
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
    * The content of the transcript. Read-only.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The content
    *
    * @return CallTranscript
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date and time at which the transcript was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
    * Date and time at which the transcript was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return CallTranscript
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the meetingId
    * The unique identifier of the online meeting related to this transcript. Read-only.
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
    * The unique identifier of the online meeting related to this transcript. Read-only.
    *
    * @param string $val The meetingId
    *
    * @return CallTranscript
    */
    public function setMeetingId($val)
    {
        $this->_propDict["meetingId"] = $val;
        return $this;
    }

    /**
    * Gets the meetingOrganizer
    * The identity information of the organizer of the onlineMeeting related to this transcript. Read-only.
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
    * The identity information of the organizer of the onlineMeeting related to this transcript. Read-only.
    *
    * @param IdentitySet $val The meetingOrganizer
    *
    * @return CallTranscript
    */
    public function setMeetingOrganizer($val)
    {
        $this->_propDict["meetingOrganizer"] = $val;
        return $this;
    }

    /**
    * Gets the meetingOrganizerId
    * The unique identifier of the organizer of the onlineMeeting related to this transcript. Read-only.
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
    * The unique identifier of the organizer of the onlineMeeting related to this transcript. Read-only.
    *
    * @param string $val The meetingOrganizerId
    *
    * @return CallTranscript
    */
    public function setMeetingOrganizerId($val)
    {
        $this->_propDict["meetingOrganizerId"] = $val;
        return $this;
    }

    /**
    * Gets the metadataContent
    * The time-aligned metadata of the utterances in the transcript. Read-only.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The metadataContent
    */
    public function getMetadataContent()
    {
        if (array_key_exists("metadataContent", $this->_propDict)) {
            if (is_a($this->_propDict["metadataContent"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["metadataContent"])) {
                return $this->_propDict["metadataContent"];
            } else {
                $this->_propDict["metadataContent"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["metadataContent"]);
                return $this->_propDict["metadataContent"];
            }
        }
        return null;
    }

    /**
    * Sets the metadataContent
    * The time-aligned metadata of the utterances in the transcript. Read-only.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The metadataContent
    *
    * @return CallTranscript
    */
    public function setMetadataContent($val)
    {
        $this->_propDict["metadataContent"] = $val;
        return $this;
    }

    /**
    * Gets the transcriptContentUrl
    * The URL which can be used to access the content of the transcript. Read-only.
    *
    * @return string|null The transcriptContentUrl
    */
    public function getTranscriptContentUrl()
    {
        if (array_key_exists("transcriptContentUrl", $this->_propDict)) {
            return $this->_propDict["transcriptContentUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the transcriptContentUrl
    * The URL which can be used to access the content of the transcript. Read-only.
    *
    * @param string $val The transcriptContentUrl
    *
    * @return CallTranscript
    */
    public function setTranscriptContentUrl($val)
    {
        $this->_propDict["transcriptContentUrl"] = $val;
        return $this;
    }

}
