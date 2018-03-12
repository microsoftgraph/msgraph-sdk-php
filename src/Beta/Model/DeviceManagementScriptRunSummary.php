<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementScriptRunSummary File
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
* DeviceManagementScriptRunSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementScriptRunSummary extends Entity
{
    /**
    * Gets the successDeviceCount
    *
    * @return int The successDeviceCount
    */
    public function getSuccessDeviceCount()
    {
        if (array_key_exists("successDeviceCount", $this->_propDict)) {
            return $this->_propDict["successDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successDeviceCount
    *
    * @param int $val The successDeviceCount
    *
    * @return DeviceManagementScriptRunSummary
    */
    public function setSuccessDeviceCount($val)
    {
        $this->_propDict["successDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorDeviceCount
    *
    * @return int The errorDeviceCount
    */
    public function getErrorDeviceCount()
    {
        if (array_key_exists("errorDeviceCount", $this->_propDict)) {
            return $this->_propDict["errorDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorDeviceCount
    *
    * @param int $val The errorDeviceCount
    *
    * @return DeviceManagementScriptRunSummary
    */
    public function setErrorDeviceCount($val)
    {
        $this->_propDict["errorDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the successUserCount
    *
    * @return int The successUserCount
    */
    public function getSuccessUserCount()
    {
        if (array_key_exists("successUserCount", $this->_propDict)) {
            return $this->_propDict["successUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successUserCount
    *
    * @param int $val The successUserCount
    *
    * @return DeviceManagementScriptRunSummary
    */
    public function setSuccessUserCount($val)
    {
        $this->_propDict["successUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorUserCount
    *
    * @return int The errorUserCount
    */
    public function getErrorUserCount()
    {
        if (array_key_exists("errorUserCount", $this->_propDict)) {
            return $this->_propDict["errorUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorUserCount
    *
    * @param int $val The errorUserCount
    *
    * @return DeviceManagementScriptRunSummary
    */
    public function setErrorUserCount($val)
    {
        $this->_propDict["errorUserCount"] = intval($val);
        return $this;
    }
    
}