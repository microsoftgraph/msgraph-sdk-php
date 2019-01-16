<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecordOperation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* RecordOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RecordOperation extends CommsOperation
{

     /** 
     * Gets the prompts
     *
     * @return array The prompts
     */
    public function getPrompts()
    {
        if (array_key_exists("prompts", $this->_propDict)) {
           return $this->_propDict["prompts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the prompts
    *
    * @param Prompt $val The prompts
    *
    * @return RecordOperation
    */
    public function setPrompts($val)
    {
		$this->_propDict["prompts"] = $val;
        return $this;
    }
    
    /**
    * Gets the bargeInAllowed
    *
    * @return bool The bargeInAllowed
    */
    public function getBargeInAllowed()
    {
        if (array_key_exists("bargeInAllowed", $this->_propDict)) {
            return $this->_propDict["bargeInAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bargeInAllowed
    *
    * @param bool $val The bargeInAllowed
    *
    * @return RecordOperation
    */
    public function setBargeInAllowed($val)
    {
        $this->_propDict["bargeInAllowed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the initialSilenceTimeoutInSeconds
    *
    * @return int The initialSilenceTimeoutInSeconds
    */
    public function getInitialSilenceTimeoutInSeconds()
    {
        if (array_key_exists("initialSilenceTimeoutInSeconds", $this->_propDict)) {
            return $this->_propDict["initialSilenceTimeoutInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the initialSilenceTimeoutInSeconds
    *
    * @param int $val The initialSilenceTimeoutInSeconds
    *
    * @return RecordOperation
    */
    public function setInitialSilenceTimeoutInSeconds($val)
    {
        $this->_propDict["initialSilenceTimeoutInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the maxSilenceTimeoutInSeconds
    *
    * @return int The maxSilenceTimeoutInSeconds
    */
    public function getMaxSilenceTimeoutInSeconds()
    {
        if (array_key_exists("maxSilenceTimeoutInSeconds", $this->_propDict)) {
            return $this->_propDict["maxSilenceTimeoutInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maxSilenceTimeoutInSeconds
    *
    * @param int $val The maxSilenceTimeoutInSeconds
    *
    * @return RecordOperation
    */
    public function setMaxSilenceTimeoutInSeconds($val)
    {
        $this->_propDict["maxSilenceTimeoutInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the maxRecordDurationInSeconds
    *
    * @return int The maxRecordDurationInSeconds
    */
    public function getMaxRecordDurationInSeconds()
    {
        if (array_key_exists("maxRecordDurationInSeconds", $this->_propDict)) {
            return $this->_propDict["maxRecordDurationInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maxRecordDurationInSeconds
    *
    * @param int $val The maxRecordDurationInSeconds
    *
    * @return RecordOperation
    */
    public function setMaxRecordDurationInSeconds($val)
    {
        $this->_propDict["maxRecordDurationInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the playBeep
    *
    * @return bool The playBeep
    */
    public function getPlayBeep()
    {
        if (array_key_exists("playBeep", $this->_propDict)) {
            return $this->_propDict["playBeep"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the playBeep
    *
    * @param bool $val The playBeep
    *
    * @return RecordOperation
    */
    public function setPlayBeep($val)
    {
        $this->_propDict["playBeep"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the streamWhileRecording
    *
    * @return bool The streamWhileRecording
    */
    public function getStreamWhileRecording()
    {
        if (array_key_exists("streamWhileRecording", $this->_propDict)) {
            return $this->_propDict["streamWhileRecording"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the streamWhileRecording
    *
    * @param bool $val The streamWhileRecording
    *
    * @return RecordOperation
    */
    public function setStreamWhileRecording($val)
    {
        $this->_propDict["streamWhileRecording"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the stopTones
    *
    * @return string The stopTones
    */
    public function getStopTones()
    {
        if (array_key_exists("stopTones", $this->_propDict)) {
            return $this->_propDict["stopTones"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the stopTones
    *
    * @param string $val The stopTones
    *
    * @return RecordOperation
    */
    public function setStopTones($val)
    {
        $this->_propDict["stopTones"] = $val;
        return $this;
    }
    
    /**
    * Gets the recordResourceLocation
    *
    * @return string The recordResourceLocation
    */
    public function getRecordResourceLocation()
    {
        if (array_key_exists("recordResourceLocation", $this->_propDict)) {
            return $this->_propDict["recordResourceLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recordResourceLocation
    *
    * @param string $val The recordResourceLocation
    *
    * @return RecordOperation
    */
    public function setRecordResourceLocation($val)
    {
        $this->_propDict["recordResourceLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the completionReason
    *
    * @return RecordCompletionReason The completionReason
    */
    public function getCompletionReason()
    {
        if (array_key_exists("completionReason", $this->_propDict)) {
            if (is_a($this->_propDict["completionReason"], "Microsoft\Graph\Model\RecordCompletionReason")) {
                return $this->_propDict["completionReason"];
            } else {
                $this->_propDict["completionReason"] = new RecordCompletionReason($this->_propDict["completionReason"]);
                return $this->_propDict["completionReason"];
            }
        }
        return null;
    }
    
    /**
    * Sets the completionReason
    *
    * @param RecordCompletionReason $val The completionReason
    *
    * @return RecordOperation
    */
    public function setCompletionReason($val)
    {
        $this->_propDict["completionReason"] = $val;
        return $this;
    }
    
}