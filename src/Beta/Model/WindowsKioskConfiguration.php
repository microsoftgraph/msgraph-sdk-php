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
namespace Microsoft\Graph\Model;

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
    * This policy setting allows to define a list of Kiosk profiles for a Kiosk configuration. This collection can contain a maximum of 3 elements.
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
    * This policy setting allows to define a list of Kiosk profiles for a Kiosk configuration. This collection can contain a maximum of 3 elements.
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
    * Specify the default URL the browser should navigate to on launch.
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
    * Specify the default URL the browser should navigate to on launch.
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
    * Enable the kiosk browser's home button. By default, the home button is disabled.
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
    * Enable the kiosk browser's home button. By default, the home button is disabled.
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
    * Enable the kiosk browser's navigation buttons(forward/back). By default, the navigation buttons are disabled.
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
    * Enable the kiosk browser's navigation buttons(forward/back). By default, the navigation buttons are disabled.
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
    * Enable the kiosk browser's end session button. By default, the end session button is disabled.
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
    * Enable the kiosk browser's end session button. By default, the end session button is disabled.
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
    * Specify the number of minutes the session is idle until the kiosk browser restarts in a fresh state.  Valid values are 1-1440. Valid values 1 to 1440
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
    * Specify the number of minutes the session is idle until the kiosk browser restarts in a fresh state.  Valid values are 1-1440. Valid values 1 to 1440
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
    * Specify URLs that the kiosk browsers should not navigate to
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
    * Specify URLs that the kiosk browsers should not navigate to
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
    * Specify URLs that the kiosk browser is allowed to navigate to
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
    * Specify URLs that the kiosk browser is allowed to navigate to
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
    
    /**
    * Gets the edgeKioskEnablePublicBrowsing
    * Enable public browsing kiosk mode for the Microsoft Edge browser. The Default is false.
    *
    * @return bool The edgeKioskEnablePublicBrowsing
    */
    public function getEdgeKioskEnablePublicBrowsing()
    {
        if (array_key_exists("edgeKioskEnablePublicBrowsing", $this->_propDict)) {
            return $this->_propDict["edgeKioskEnablePublicBrowsing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeKioskEnablePublicBrowsing
    * Enable public browsing kiosk mode for the Microsoft Edge browser. The Default is false.
    *
    * @param bool $val The edgeKioskEnablePublicBrowsing
    *
    * @return WindowsKioskConfiguration
    */
    public function setEdgeKioskEnablePublicBrowsing($val)
    {
        $this->_propDict["edgeKioskEnablePublicBrowsing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeKioskResetAfterIdleTimeInMinutes
    * Specifies the time in minutes from the last user activity before Microsoft Edge kiosk resets.  Valid values are 0-1440. The default is 5. 0 indicates no reset. Valid values 0 to 1440
    *
    * @return int The edgeKioskResetAfterIdleTimeInMinutes
    */
    public function getEdgeKioskResetAfterIdleTimeInMinutes()
    {
        if (array_key_exists("edgeKioskResetAfterIdleTimeInMinutes", $this->_propDict)) {
            return $this->_propDict["edgeKioskResetAfterIdleTimeInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeKioskResetAfterIdleTimeInMinutes
    * Specifies the time in minutes from the last user activity before Microsoft Edge kiosk resets.  Valid values are 0-1440. The default is 5. 0 indicates no reset. Valid values 0 to 1440
    *
    * @param int $val The edgeKioskResetAfterIdleTimeInMinutes
    *
    * @return WindowsKioskConfiguration
    */
    public function setEdgeKioskResetAfterIdleTimeInMinutes($val)
    {
        $this->_propDict["edgeKioskResetAfterIdleTimeInMinutes"] = intval($val);
        return $this;
    }
    
}