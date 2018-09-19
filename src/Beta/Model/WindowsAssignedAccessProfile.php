<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAssignedAccessProfile File
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
* WindowsAssignedAccessProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsAssignedAccessProfile extends Entity
{
    /**
    * Gets the profileName
    *
    * @return string The profileName
    */
    public function getProfileName()
    {
        if (array_key_exists("profileName", $this->_propDict)) {
            return $this->_propDict["profileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the profileName
    *
    * @param string $val The profileName
    *
    * @return WindowsAssignedAccessProfile
    */
    public function setProfileName($val)
    {
        $this->_propDict["profileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the showTaskBar
    *
    * @return bool The showTaskBar
    */
    public function getShowTaskBar()
    {
        if (array_key_exists("showTaskBar", $this->_propDict)) {
            return $this->_propDict["showTaskBar"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showTaskBar
    *
    * @param bool $val The showTaskBar
    *
    * @return WindowsAssignedAccessProfile
    */
    public function setShowTaskBar($val)
    {
        $this->_propDict["showTaskBar"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appUserModelIds
    *
    * @return string The appUserModelIds
    */
    public function getAppUserModelIds()
    {
        if (array_key_exists("appUserModelIds", $this->_propDict)) {
            return $this->_propDict["appUserModelIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appUserModelIds
    *
    * @param string $val The appUserModelIds
    *
    * @return WindowsAssignedAccessProfile
    */
    public function setAppUserModelIds($val)
    {
        $this->_propDict["appUserModelIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the desktopAppPaths
    *
    * @return string The desktopAppPaths
    */
    public function getDesktopAppPaths()
    {
        if (array_key_exists("desktopAppPaths", $this->_propDict)) {
            return $this->_propDict["desktopAppPaths"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the desktopAppPaths
    *
    * @param string $val The desktopAppPaths
    *
    * @return WindowsAssignedAccessProfile
    */
    public function setDesktopAppPaths($val)
    {
        $this->_propDict["desktopAppPaths"] = $val;
        return $this;
    }
    
    /**
    * Gets the userAccounts
    *
    * @return string The userAccounts
    */
    public function getUserAccounts()
    {
        if (array_key_exists("userAccounts", $this->_propDict)) {
            return $this->_propDict["userAccounts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userAccounts
    *
    * @param string $val The userAccounts
    *
    * @return WindowsAssignedAccessProfile
    */
    public function setUserAccounts($val)
    {
        $this->_propDict["userAccounts"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuLayoutXml
    *
    * @return \GuzzleHttp\Psr7\Stream The startMenuLayoutXml
    */
    public function getStartMenuLayoutXml()
    {
        if (array_key_exists("startMenuLayoutXml", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuLayoutXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["startMenuLayoutXml"];
            } else {
                $this->_propDict["startMenuLayoutXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["startMenuLayoutXml"]);
                return $this->_propDict["startMenuLayoutXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuLayoutXml
    *
    * @param \GuzzleHttp\Psr7\Stream $val The startMenuLayoutXml
    *
    * @return WindowsAssignedAccessProfile
    */
    public function setStartMenuLayoutXml($val)
    {
        $this->_propDict["startMenuLayoutXml"] = $val;
        return $this;
    }
    
}