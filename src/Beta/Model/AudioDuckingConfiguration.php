<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AudioDuckingConfiguration File
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
* AudioDuckingConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AudioDuckingConfiguration extends Entity
{
    /**
    * Gets the rampActive
    *
    * @return int The rampActive
    */
    public function getRampActive()
    {
        if (array_key_exists("rampActive", $this->_propDict)) {
            return $this->_propDict["rampActive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rampActive
    *
    * @param int $val The value of the rampActive
    *
    * @return AudioDuckingConfiguration
    */
    public function setRampActive($val)
    {
        $this->_propDict["rampActive"] = $val;
        return $this;
    }
    /**
    * Gets the rampInactive
    *
    * @return int The rampInactive
    */
    public function getRampInactive()
    {
        if (array_key_exists("rampInactive", $this->_propDict)) {
            return $this->_propDict["rampInactive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rampInactive
    *
    * @param int $val The value of the rampInactive
    *
    * @return AudioDuckingConfiguration
    */
    public function setRampInactive($val)
    {
        $this->_propDict["rampInactive"] = $val;
        return $this;
    }
    /**
    * Gets the lowerLevel
    *
    * @return int The lowerLevel
    */
    public function getLowerLevel()
    {
        if (array_key_exists("lowerLevel", $this->_propDict)) {
            return $this->_propDict["lowerLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lowerLevel
    *
    * @param int $val The value of the lowerLevel
    *
    * @return AudioDuckingConfiguration
    */
    public function setLowerLevel($val)
    {
        $this->_propDict["lowerLevel"] = $val;
        return $this;
    }
    /**
    * Gets the upperLevel
    *
    * @return int The upperLevel
    */
    public function getUpperLevel()
    {
        if (array_key_exists("upperLevel", $this->_propDict)) {
            return $this->_propDict["upperLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upperLevel
    *
    * @param int $val The value of the upperLevel
    *
    * @return AudioDuckingConfiguration
    */
    public function setUpperLevel($val)
    {
        $this->_propDict["upperLevel"] = $val;
        return $this;
    }
}
