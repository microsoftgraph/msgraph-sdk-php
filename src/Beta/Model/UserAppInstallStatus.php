<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserAppInstallStatus File
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
* UserAppInstallStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class UserAppInstallStatus extends Entity
{
    /**
    * Gets the userName
    *
    * @return string The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userName
    *
    * @param string $val The userName
    *
    * @return UserAppInstallStatus
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    *
    * @param string $val The userPrincipalName
    *
    * @return UserAppInstallStatus
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the installedDeviceCount
    *
    * @return int The installedDeviceCount
    */
    public function getInstalledDeviceCount()
    {
        if (array_key_exists("installedDeviceCount", $this->_propDict)) {
            return $this->_propDict["installedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the installedDeviceCount
    *
    * @param int $val The installedDeviceCount
    *
    * @return UserAppInstallStatus
    */
    public function setInstalledDeviceCount($val)
    {
        $this->_propDict["installedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the failedDeviceCount
    *
    * @return int The failedDeviceCount
    */
    public function getFailedDeviceCount()
    {
        if (array_key_exists("failedDeviceCount", $this->_propDict)) {
            return $this->_propDict["failedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedDeviceCount
    *
    * @param int $val The failedDeviceCount
    *
    * @return UserAppInstallStatus
    */
    public function setFailedDeviceCount($val)
    {
        $this->_propDict["failedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notInstalledDeviceCount
    *
    * @return int The notInstalledDeviceCount
    */
    public function getNotInstalledDeviceCount()
    {
        if (array_key_exists("notInstalledDeviceCount", $this->_propDict)) {
            return $this->_propDict["notInstalledDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notInstalledDeviceCount
    *
    * @param int $val The notInstalledDeviceCount
    *
    * @return UserAppInstallStatus
    */
    public function setNotInstalledDeviceCount($val)
    {
        $this->_propDict["notInstalledDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the app
    *
    * @return MobileApp The app
    */
    public function getApp()
    {
        if (array_key_exists("app", $this->_propDict)) {
            if (is_a($this->_propDict["app"], "Microsoft\Graph\Model\MobileApp")) {
                return $this->_propDict["app"];
            } else {
                $this->_propDict["app"] = new MobileApp($this->_propDict["app"]);
                return $this->_propDict["app"];
            }
        }
        return null;
    }
    
    /**
    * Sets the app
    *
    * @param MobileApp $val The app
    *
    * @return UserAppInstallStatus
    */
    public function setApp($val)
    {
        $this->_propDict["app"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStatuses
     *
     * @return array The deviceStatuses
     */
    public function getDeviceStatuses()
    {
        if (array_key_exists("deviceStatuses", $this->_propDict)) {
           return $this->_propDict["deviceStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceStatuses
    *
    * @param MobileAppInstallStatus $val The deviceStatuses
    *
    * @return UserAppInstallStatus
    */
    public function setDeviceStatuses($val)
    {
		$this->_propDict["deviceStatuses"] = $val;
        return $this;
    }
    
}