<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ParticipantMixerLevel File
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
* ParticipantMixerLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ParticipantMixerLevel extends Entity
{
    /**
    * Gets the participant
    *
    * @return string The participant
    */
    public function getParticipant()
    {
        if (array_key_exists("participant", $this->_propDict)) {
            return $this->_propDict["participant"];
        } else {
            return null;
        }
    }

    /**
    * Sets the participant
    *
    * @param string $val The value of the participant
    *
    * @return ParticipantMixerLevel
    */
    public function setParticipant($val)
    {
        $this->_propDict["participant"] = $val;
        return $this;
    }

    /**
    * Gets the ducking
    *
    * @return AudioDuckingConfiguration The ducking
    */
    public function getDucking()
    {
        if (array_key_exists("ducking", $this->_propDict)) {
            if (is_a($this->_propDict["ducking"], "Microsoft\Graph\Beta\Model\AudioDuckingConfiguration")) {
                return $this->_propDict["ducking"];
            } else {
                $this->_propDict["ducking"] = new AudioDuckingConfiguration($this->_propDict["ducking"]);
                return $this->_propDict["ducking"];
            }
        }
        return null;
    }

    /**
    * Sets the ducking
    *
    * @param AudioDuckingConfiguration $val The value to assign to the ducking
    *
    * @return ParticipantMixerLevel The ParticipantMixerLevel
    */
    public function setDucking($val)
    {
        $this->_propDict["ducking"] = $val;
         return $this;
    }
    /**
    * Gets the exclusiveMode
    *
    * @return bool The exclusiveMode
    */
    public function getExclusiveMode()
    {
        if (array_key_exists("exclusiveMode", $this->_propDict)) {
            return $this->_propDict["exclusiveMode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exclusiveMode
    *
    * @param bool $val The value of the exclusiveMode
    *
    * @return ParticipantMixerLevel
    */
    public function setExclusiveMode($val)
    {
        $this->_propDict["exclusiveMode"] = $val;
        return $this;
    }

    /**
    * Gets the sourceLevels
    *
    * @return AudioSourceLevel The sourceLevels
    */
    public function getSourceLevels()
    {
        if (array_key_exists("sourceLevels", $this->_propDict)) {
            if (is_a($this->_propDict["sourceLevels"], "Microsoft\Graph\Beta\Model\AudioSourceLevel")) {
                return $this->_propDict["sourceLevels"];
            } else {
                $this->_propDict["sourceLevels"] = new AudioSourceLevel($this->_propDict["sourceLevels"]);
                return $this->_propDict["sourceLevels"];
            }
        }
        return null;
    }

    /**
    * Sets the sourceLevels
    *
    * @param AudioSourceLevel $val The value to assign to the sourceLevels
    *
    * @return ParticipantMixerLevel The ParticipantMixerLevel
    */
    public function setSourceLevels($val)
    {
        $this->_propDict["sourceLevels"] = $val;
         return $this;
    }
}
