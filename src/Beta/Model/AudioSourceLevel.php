<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AudioSourceLevel File
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
* AudioSourceLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AudioSourceLevel extends Entity
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
    * @return AudioSourceLevel
    */
    public function setParticipant($val)
    {
        $this->_propDict["participant"] = $val;
        return $this;
    }
    /**
    * Gets the duckOthers
    *
    * @return bool The duckOthers
    */
    public function getDuckOthers()
    {
        if (array_key_exists("duckOthers", $this->_propDict)) {
            return $this->_propDict["duckOthers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the duckOthers
    *
    * @param bool $val The value of the duckOthers
    *
    * @return AudioSourceLevel
    */
    public function setDuckOthers($val)
    {
        $this->_propDict["duckOthers"] = $val;
        return $this;
    }
    /**
    * Gets the level
    *
    * @return int The level
    */
    public function getLevel()
    {
        if (array_key_exists("level", $this->_propDict)) {
            return $this->_propDict["level"];
        } else {
            return null;
        }
    }

    /**
    * Sets the level
    *
    * @param int $val The value of the level
    *
    * @return AudioSourceLevel
    */
    public function setLevel($val)
    {
        $this->_propDict["level"] = $val;
        return $this;
    }
}
