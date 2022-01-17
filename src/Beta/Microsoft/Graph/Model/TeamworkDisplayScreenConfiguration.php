<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkDisplayScreenConfiguration File
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
* TeamworkDisplayScreenConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkDisplayScreenConfiguration extends Entity
{
    /**
    * Gets the backlightBrightness
    *
    * @return int|null The backlightBrightness
    */
    public function getBacklightBrightness()
    {
        if (array_key_exists("backlightBrightness", $this->_propDict)) {
            return $this->_propDict["backlightBrightness"];
        } else {
            return null;
        }
    }

    /**
    * Sets the backlightBrightness
    *
    * @param int $val The value of the backlightBrightness
    *
    * @return TeamworkDisplayScreenConfiguration
    */
    public function setBacklightBrightness($val)
    {
        $this->_propDict["backlightBrightness"] = $val;
        return $this;
    }

    /**
    * Gets the backlightTimeout
    *
    * @return \DateInterval|null The backlightTimeout
    */
    public function getBacklightTimeout()
    {
        if (array_key_exists("backlightTimeout", $this->_propDict)) {
            if (is_a($this->_propDict["backlightTimeout"], "\DateInterval") || is_null($this->_propDict["backlightTimeout"])) {
                return $this->_propDict["backlightTimeout"];
            } else {
                $this->_propDict["backlightTimeout"] = new \DateInterval($this->_propDict["backlightTimeout"]);
                return $this->_propDict["backlightTimeout"];
            }
        }
        return null;
    }

    /**
    * Sets the backlightTimeout
    *
    * @param \DateInterval $val The value to assign to the backlightTimeout
    *
    * @return TeamworkDisplayScreenConfiguration The TeamworkDisplayScreenConfiguration
    */
    public function setBacklightTimeout($val)
    {
        $this->_propDict["backlightTimeout"] = $val;
         return $this;
    }
    /**
    * Gets the isHighContrastEnabled
    *
    * @return bool|null The isHighContrastEnabled
    */
    public function getIsHighContrastEnabled()
    {
        if (array_key_exists("isHighContrastEnabled", $this->_propDict)) {
            return $this->_propDict["isHighContrastEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isHighContrastEnabled
    *
    * @param bool $val The value of the isHighContrastEnabled
    *
    * @return TeamworkDisplayScreenConfiguration
    */
    public function setIsHighContrastEnabled($val)
    {
        $this->_propDict["isHighContrastEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isScreensaverEnabled
    *
    * @return bool|null The isScreensaverEnabled
    */
    public function getIsScreensaverEnabled()
    {
        if (array_key_exists("isScreensaverEnabled", $this->_propDict)) {
            return $this->_propDict["isScreensaverEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isScreensaverEnabled
    *
    * @param bool $val The value of the isScreensaverEnabled
    *
    * @return TeamworkDisplayScreenConfiguration
    */
    public function setIsScreensaverEnabled($val)
    {
        $this->_propDict["isScreensaverEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the screensaverTimeout
    *
    * @return \DateInterval|null The screensaverTimeout
    */
    public function getScreensaverTimeout()
    {
        if (array_key_exists("screensaverTimeout", $this->_propDict)) {
            if (is_a($this->_propDict["screensaverTimeout"], "\DateInterval") || is_null($this->_propDict["screensaverTimeout"])) {
                return $this->_propDict["screensaverTimeout"];
            } else {
                $this->_propDict["screensaverTimeout"] = new \DateInterval($this->_propDict["screensaverTimeout"]);
                return $this->_propDict["screensaverTimeout"];
            }
        }
        return null;
    }

    /**
    * Sets the screensaverTimeout
    *
    * @param \DateInterval $val The value to assign to the screensaverTimeout
    *
    * @return TeamworkDisplayScreenConfiguration The TeamworkDisplayScreenConfiguration
    */
    public function setScreensaverTimeout($val)
    {
        $this->_propDict["screensaverTimeout"] = $val;
         return $this;
    }
}
