<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskConfiguration File
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
* WindowsKioskConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsKioskConfiguration extends DeviceConfiguration
{

     /** 
     * Gets the kioskProfiles
     *
     * @return array The kioskProfiles
     */
    public function getKioskProfiles()
    {
        if (array_key_exists("kioskProfiles", $this->_propDict)) {
           return $this->_propDict["kioskProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the kioskProfiles
    *
    * @param WindowsKioskProfile $val The kioskProfiles
    *
    * @return WindowsKioskConfiguration
    */
    public function setKioskProfiles($val)
    {
		$this->_propDict["kioskProfiles"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskBrowserDefaultUrl
    *
    * @return string The kioskBrowserDefaultUrl
    */
    public function getKioskBrowserDefaultUrl()
    {
        if (array_key_exists("kioskBrowserDefaultUrl", $this->_propDict)) {
            return $this->_propDict["kioskBrowserDefaultUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskBrowserDefaultUrl
    *
    * @param string $val The kioskBrowserDefaultUrl
    *
    * @return WindowsKioskConfiguration
    */
    public function setKioskBrowserDefaultUrl($val)
    {
        $this->_propDict["kioskBrowserDefaultUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskBrowserEnableHomeButton
    *
    * @return bool The kioskBrowserEnableHomeButton
    */
    public function getKioskBrowserEnableHomeButton()
    {
        if (array_key_exists("kioskBrowserEnableHomeButton", $this->_propDict)) {
            return $this->_propDict["kioskBrowserEnableHomeButton"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskBrowserEnableHomeButton
    *
    * @param bool $val The kioskBrowserEnableHomeButton
    *
    * @return WindowsKioskConfiguration
    */
    public function setKioskBrowserEnableHomeButton($val)
    {
        $this->_propDict["kioskBrowserEnableHomeButton"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskBrowserEnableNavigationButtons
    *
    * @return bool The kioskBrowserEnableNavigationButtons
    */
    public function getKioskBrowserEnableNavigationButtons()
    {
        if (array_key_exists("kioskBrowserEnableNavigationButtons", $this->_propDict)) {
            return $this->_propDict["kioskBrowserEnableNavigationButtons"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskBrowserEnableNavigationButtons
    *
    * @param bool $val The kioskBrowserEnableNavigationButtons
    *
    * @return WindowsKioskConfiguration
    */
    public function setKioskBrowserEnableNavigationButtons($val)
    {
        $this->_propDict["kioskBrowserEnableNavigationButtons"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskBrowserEnableEndSessionButton
    *
    * @return bool The kioskBrowserEnableEndSessionButton
    */
    public function getKioskBrowserEnableEndSessionButton()
    {
        if (array_key_exists("kioskBrowserEnableEndSessionButton", $this->_propDict)) {
            return $this->_propDict["kioskBrowserEnableEndSessionButton"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskBrowserEnableEndSessionButton
    *
    * @param bool $val The kioskBrowserEnableEndSessionButton
    *
    * @return WindowsKioskConfiguration
    */
    public function setKioskBrowserEnableEndSessionButton($val)
    {
        $this->_propDict["kioskBrowserEnableEndSessionButton"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskBrowserRestartOnIdleTimeInMinutes
    *
    * @return int The kioskBrowserRestartOnIdleTimeInMinutes
    */
    public function getKioskBrowserRestartOnIdleTimeInMinutes()
    {
        if (array_key_exists("kioskBrowserRestartOnIdleTimeInMinutes", $this->_propDict)) {
            return $this->_propDict["kioskBrowserRestartOnIdleTimeInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskBrowserRestartOnIdleTimeInMinutes
    *
    * @param int $val The kioskBrowserRestartOnIdleTimeInMinutes
    *
    * @return WindowsKioskConfiguration
    */
    public function setKioskBrowserRestartOnIdleTimeInMinutes($val)
    {
        $this->_propDict["kioskBrowserRestartOnIdleTimeInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the kioskBrowserBlockedURLs
    *
    * @return string The kioskBrowserBlockedURLs
    */
    public function getKioskBrowserBlockedURLs()
    {
        if (array_key_exists("kioskBrowserBlockedURLs", $this->_propDict)) {
            return $this->_propDict["kioskBrowserBlockedURLs"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskBrowserBlockedURLs
    *
    * @param string $val The kioskBrowserBlockedURLs
    *
    * @return WindowsKioskConfiguration
    */
    public function setKioskBrowserBlockedURLs($val)
    {
        $this->_propDict["kioskBrowserBlockedURLs"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskBrowserBlockedUrlExceptions
    *
    * @return string The kioskBrowserBlockedUrlExceptions
    */
    public function getKioskBrowserBlockedUrlExceptions()
    {
        if (array_key_exists("kioskBrowserBlockedUrlExceptions", $this->_propDict)) {
            return $this->_propDict["kioskBrowserBlockedUrlExceptions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskBrowserBlockedUrlExceptions
    *
    * @param string $val The kioskBrowserBlockedUrlExceptions
    *
    * @return WindowsKioskConfiguration
    */
    public function setKioskBrowserBlockedUrlExceptions($val)
    {
        $this->_propDict["kioskBrowserBlockedUrlExceptions"] = $val;
        return $this;
    }
    
}