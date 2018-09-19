<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppInstallSummary File
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
* MobileAppInstallSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MobileAppInstallSummary extends Entity
{
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
    * @return MobileAppInstallSummary
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
    * @return MobileAppInstallSummary
    */
    public function setFailedDeviceCount($val)
    {
        $this->_propDict["failedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicableDeviceCount
    *
    * @return int The notApplicableDeviceCount
    */
    public function getNotApplicableDeviceCount()
    {
        if (array_key_exists("notApplicableDeviceCount", $this->_propDict)) {
            return $this->_propDict["notApplicableDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicableDeviceCount
    *
    * @param int $val The notApplicableDeviceCount
    *
    * @return MobileAppInstallSummary
    */
    public function setNotApplicableDeviceCount($val)
    {
        $this->_propDict["notApplicableDeviceCount"] = intval($val);
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
    * @return MobileAppInstallSummary
    */
    public function setNotInstalledDeviceCount($val)
    {
        $this->_propDict["notInstalledDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pendingInstallDeviceCount
    *
    * @return int The pendingInstallDeviceCount
    */
    public function getPendingInstallDeviceCount()
    {
        if (array_key_exists("pendingInstallDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingInstallDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pendingInstallDeviceCount
    *
    * @param int $val The pendingInstallDeviceCount
    *
    * @return MobileAppInstallSummary
    */
    public function setPendingInstallDeviceCount($val)
    {
        $this->_propDict["pendingInstallDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the installedUserCount
    *
    * @return int The installedUserCount
    */
    public function getInstalledUserCount()
    {
        if (array_key_exists("installedUserCount", $this->_propDict)) {
            return $this->_propDict["installedUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the installedUserCount
    *
    * @param int $val The installedUserCount
    *
    * @return MobileAppInstallSummary
    */
    public function setInstalledUserCount($val)
    {
        $this->_propDict["installedUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the failedUserCount
    *
    * @return int The failedUserCount
    */
    public function getFailedUserCount()
    {
        if (array_key_exists("failedUserCount", $this->_propDict)) {
            return $this->_propDict["failedUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedUserCount
    *
    * @param int $val The failedUserCount
    *
    * @return MobileAppInstallSummary
    */
    public function setFailedUserCount($val)
    {
        $this->_propDict["failedUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicableUserCount
    *
    * @return int The notApplicableUserCount
    */
    public function getNotApplicableUserCount()
    {
        if (array_key_exists("notApplicableUserCount", $this->_propDict)) {
            return $this->_propDict["notApplicableUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicableUserCount
    *
    * @param int $val The notApplicableUserCount
    *
    * @return MobileAppInstallSummary
    */
    public function setNotApplicableUserCount($val)
    {
        $this->_propDict["notApplicableUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notInstalledUserCount
    *
    * @return int The notInstalledUserCount
    */
    public function getNotInstalledUserCount()
    {
        if (array_key_exists("notInstalledUserCount", $this->_propDict)) {
            return $this->_propDict["notInstalledUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notInstalledUserCount
    *
    * @param int $val The notInstalledUserCount
    *
    * @return MobileAppInstallSummary
    */
    public function setNotInstalledUserCount($val)
    {
        $this->_propDict["notInstalledUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pendingInstallUserCount
    *
    * @return int The pendingInstallUserCount
    */
    public function getPendingInstallUserCount()
    {
        if (array_key_exists("pendingInstallUserCount", $this->_propDict)) {
            return $this->_propDict["pendingInstallUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pendingInstallUserCount
    *
    * @param int $val The pendingInstallUserCount
    *
    * @return MobileAppInstallSummary
    */
    public function setPendingInstallUserCount($val)
    {
        $this->_propDict["pendingInstallUserCount"] = intval($val);
        return $this;
    }
    
}