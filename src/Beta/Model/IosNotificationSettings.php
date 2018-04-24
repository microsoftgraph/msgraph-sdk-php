<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosNotificationSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* IosNotificationSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosNotificationSettings extends Entity
{
    /**
    * Gets the bundleID
    *
    * @return string The bundleID
    */
    public function getBundleID()
    {
        if (array_key_exists("bundleID", $this->_propDict)) {
            return $this->_propDict["bundleID"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bundleID
    *
    * @param string $val The value of the bundleID
    *
    * @return IosNotificationSettings
    */
    public function setBundleID($val)
    {
        $this->_propDict["bundleID"] = $val;
        return $this;
    }
    /**
    * Gets the appName
    *
    * @return string The appName
    */
    public function getAppName()
    {
        if (array_key_exists("appName", $this->_propDict)) {
            return $this->_propDict["appName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appName
    *
    * @param string $val The value of the appName
    *
    * @return IosNotificationSettings
    */
    public function setAppName($val)
    {
        $this->_propDict["appName"] = $val;
        return $this;
    }
    /**
    * Gets the publisher
    *
    * @return string The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisher
    *
    * @param string $val The value of the publisher
    *
    * @return IosNotificationSettings
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    /**
    * Gets the enabled
    *
    * @return bool The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabled
    *
    * @param bool $val The value of the enabled
    *
    * @return IosNotificationSettings
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = $val;
        return $this;
    }
    /**
    * Gets the showInNotificationCenter
    *
    * @return bool The showInNotificationCenter
    */
    public function getShowInNotificationCenter()
    {
        if (array_key_exists("showInNotificationCenter", $this->_propDict)) {
            return $this->_propDict["showInNotificationCenter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showInNotificationCenter
    *
    * @param bool $val The value of the showInNotificationCenter
    *
    * @return IosNotificationSettings
    */
    public function setShowInNotificationCenter($val)
    {
        $this->_propDict["showInNotificationCenter"] = $val;
        return $this;
    }
    /**
    * Gets the showOnLockScreen
    *
    * @return bool The showOnLockScreen
    */
    public function getShowOnLockScreen()
    {
        if (array_key_exists("showOnLockScreen", $this->_propDict)) {
            return $this->_propDict["showOnLockScreen"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showOnLockScreen
    *
    * @param bool $val The value of the showOnLockScreen
    *
    * @return IosNotificationSettings
    */
    public function setShowOnLockScreen($val)
    {
        $this->_propDict["showOnLockScreen"] = $val;
        return $this;
    }

    /**
    * Gets the alertType
    *
    * @return IosNotificationAlertType The alertType
    */
    public function getAlertType()
    {
        if (array_key_exists("alertType", $this->_propDict)) {
            if (is_a($this->_propDict["alertType"], "Microsoft\Graph\Beta\Model\IosNotificationAlertType")) {
                return $this->_propDict["alertType"];
            } else {
                $this->_propDict["alertType"] = new IosNotificationAlertType($this->_propDict["alertType"]);
                return $this->_propDict["alertType"];
            }
        }
        return null;
    }

    /**
    * Sets the alertType
    *
    * @param IosNotificationAlertType $val The value to assign to the alertType
    *
    * @return IosNotificationSettings The IosNotificationSettings
    */
    public function setAlertType($val)
    {
        $this->_propDict["alertType"] = $val;
         return $this;
    }
    /**
    * Gets the badgesEnabled
    *
    * @return bool The badgesEnabled
    */
    public function getBadgesEnabled()
    {
        if (array_key_exists("badgesEnabled", $this->_propDict)) {
            return $this->_propDict["badgesEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the badgesEnabled
    *
    * @param bool $val The value of the badgesEnabled
    *
    * @return IosNotificationSettings
    */
    public function setBadgesEnabled($val)
    {
        $this->_propDict["badgesEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the soundsEnabled
    *
    * @return bool The soundsEnabled
    */
    public function getSoundsEnabled()
    {
        if (array_key_exists("soundsEnabled", $this->_propDict)) {
            return $this->_propDict["soundsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the soundsEnabled
    *
    * @param bool $val The value of the soundsEnabled
    *
    * @return IosNotificationSettings
    */
    public function setSoundsEnabled($val)
    {
        $this->_propDict["soundsEnabled"] = $val;
        return $this;
    }
}
