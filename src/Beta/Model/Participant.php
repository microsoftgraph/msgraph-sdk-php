<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Participant File
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
* Participant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Participant extends Entity
{
    /**
    * Gets the info
    *
    * @return ParticipantInfo The info
    */
    public function getInfo()
    {
        if (array_key_exists("info", $this->_propDict)) {
            if (is_a($this->_propDict["info"], "Microsoft\Graph\Beta\Model\ParticipantInfo")) {
                return $this->_propDict["info"];
            } else {
                $this->_propDict["info"] = new ParticipantInfo($this->_propDict["info"]);
                return $this->_propDict["info"];
            }
        }
        return null;
    }
    
    /**
    * Sets the info
    *
    * @param ParticipantInfo $val The info
    *
    * @return Participant
    */
    public function setInfo($val)
    {
        $this->_propDict["info"] = $val;
        return $this;
    }
    
    /**
    * Gets the recordingInfo
    *
    * @return RecordingInfo The recordingInfo
    */
    public function getRecordingInfo()
    {
        if (array_key_exists("recordingInfo", $this->_propDict)) {
            if (is_a($this->_propDict["recordingInfo"], "Microsoft\Graph\Beta\Model\RecordingInfo")) {
                return $this->_propDict["recordingInfo"];
            } else {
                $this->_propDict["recordingInfo"] = new RecordingInfo($this->_propDict["recordingInfo"]);
                return $this->_propDict["recordingInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recordingInfo
    *
    * @param RecordingInfo $val The recordingInfo
    *
    * @return Participant
    */
    public function setRecordingInfo($val)
    {
        $this->_propDict["recordingInfo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mediaStreams
     *
     * @return array The mediaStreams
     */
    public function getMediaStreams()
    {
        if (array_key_exists("mediaStreams", $this->_propDict)) {
           return $this->_propDict["mediaStreams"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mediaStreams
    *
    * @param MediaStream $val The mediaStreams
    *
    * @return Participant
    */
    public function setMediaStreams($val)
    {
		$this->_propDict["mediaStreams"] = $val;
        return $this;
    }
    
    /**
    * Gets the metadata
    *
    * @return string The metadata
    */
    public function getMetadata()
    {
        if (array_key_exists("metadata", $this->_propDict)) {
            return $this->_propDict["metadata"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the metadata
    *
    * @param string $val The metadata
    *
    * @return Participant
    */
    public function setMetadata($val)
    {
        $this->_propDict["metadata"] = $val;
        return $this;
    }
    
    /**
    * Gets the isMuted
    *
    * @return bool The isMuted
    */
    public function getIsMuted()
    {
        if (array_key_exists("isMuted", $this->_propDict)) {
            return $this->_propDict["isMuted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isMuted
    *
    * @param bool $val The isMuted
    *
    * @return Participant
    */
    public function setIsMuted($val)
    {
        $this->_propDict["isMuted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isInLobby
    *
    * @return bool The isInLobby
    */
    public function getIsInLobby()
    {
        if (array_key_exists("isInLobby", $this->_propDict)) {
            return $this->_propDict["isInLobby"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isInLobby
    *
    * @param bool $val The isInLobby
    *
    * @return Participant
    */
    public function setIsInLobby($val)
    {
        $this->_propDict["isInLobby"] = boolval($val);
        return $this;
    }
    
}