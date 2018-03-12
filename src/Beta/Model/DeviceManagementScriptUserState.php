<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementScriptUserState File
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
* DeviceManagementScriptUserState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementScriptUserState extends Entity
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
    * @return DeviceManagementScriptUserState
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
    * @return DeviceManagementScriptUserState
    */
    public function setErrorDeviceCount($val)
    {
        $this->_propDict["errorDeviceCount"] = intval($val);
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
    * @return DeviceManagementScriptUserState
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceRunStates
     *
     * @return array The deviceRunStates
     */
    public function getDeviceRunStates()
    {
        if (array_key_exists("deviceRunStates", $this->_propDict)) {
           return $this->_propDict["deviceRunStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceRunStates
    *
    * @param DeviceManagementScriptDeviceState $val The deviceRunStates
    *
    * @return DeviceManagementScriptUserState
    */
    public function setDeviceRunStates($val)
    {
		$this->_propDict["deviceRunStates"] = $val;
        return $this;
    }
    
}