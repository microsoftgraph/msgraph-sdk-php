<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EBookInstallSummary File
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
* EBookInstallSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EBookInstallSummary extends Entity
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
    * @return EBookInstallSummary
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
    * @return EBookInstallSummary
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
    * @return EBookInstallSummary
    */
    public function setNotInstalledDeviceCount($val)
    {
        $this->_propDict["notInstalledDeviceCount"] = intval($val);
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
    * @return EBookInstallSummary
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
    * @return EBookInstallSummary
    */
    public function setFailedUserCount($val)
    {
        $this->_propDict["failedUserCount"] = intval($val);
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
    * @return EBookInstallSummary
    */
    public function setNotInstalledUserCount($val)
    {
        $this->_propDict["notInstalledUserCount"] = intval($val);
        return $this;
    }
    
}