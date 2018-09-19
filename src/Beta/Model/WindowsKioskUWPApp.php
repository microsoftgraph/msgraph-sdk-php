<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskUWPApp File
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
* WindowsKioskUWPApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsKioskUWPApp extends WindowsKioskAppBase
{
    /**
    * Gets the appUserModelId
    *
    * @return string The appUserModelId
    */
    public function getAppUserModelId()
    {
        if (array_key_exists("appUserModelId", $this->_propDict)) {
            return $this->_propDict["appUserModelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appUserModelId
    *
    * @param string $val The value of the appUserModelId
    *
    * @return WindowsKioskUWPApp
    */
    public function setAppUserModelId($val)
    {
        $this->_propDict["appUserModelId"] = $val;
        return $this;
    }
    /**
    * Gets the appId
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    *
    * @param string $val The value of the appId
    *
    * @return WindowsKioskUWPApp
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    /**
    * Gets the containedAppId
    *
    * @return string The containedAppId
    */
    public function getContainedAppId()
    {
        if (array_key_exists("containedAppId", $this->_propDict)) {
            return $this->_propDict["containedAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the containedAppId
    *
    * @param string $val The value of the containedAppId
    *
    * @return WindowsKioskUWPApp
    */
    public function setContainedAppId($val)
    {
        $this->_propDict["containedAppId"] = $val;
        return $this;
    }
}
