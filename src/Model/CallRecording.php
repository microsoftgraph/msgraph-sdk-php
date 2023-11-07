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
namespace Microsoft\Graph\Model;

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
            if (is_a($this->_propDict["meetingOrganizer"], "\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["meetingOrganizer"])) {
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
    * Gets the recordingContentUrl
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
