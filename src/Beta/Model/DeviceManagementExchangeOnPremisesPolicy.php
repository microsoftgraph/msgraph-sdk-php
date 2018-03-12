<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementExchangeOnPremisesPolicy File
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
* DeviceManagementExchangeOnPremisesPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementExchangeOnPremisesPolicy extends Entity
{
    /**
    * Gets the notificationContent
    *
    * @return \GuzzleHttp\Psr7\Stream The notificationContent
    */
    public function getNotificationContent()
    {
        if (array_key_exists("notificationContent", $this->_propDict)) {
            if (is_a($this->_propDict["notificationContent"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["notificationContent"];
            } else {
                $this->_propDict["notificationContent"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["notificationContent"]);
                return $this->_propDict["notificationContent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the notificationContent
    *
    * @param \GuzzleHttp\Psr7\Stream $val The notificationContent
    *
    * @return DeviceManagementExchangeOnPremisesPolicy
    */
    public function setNotificationContent($val)
    {
        $this->_propDict["notificationContent"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultAccessLevel
    *
    * @return DeviceManagementExchangeAccessLevel The defaultAccessLevel
    */
    public function getDefaultAccessLevel()
    {
        if (array_key_exists("defaultAccessLevel", $this->_propDict)) {
            if (is_a($this->_propDict["defaultAccessLevel"], "Microsoft\Graph\Beta\Model\DeviceManagementExchangeAccessLevel")) {
                return $this->_propDict["defaultAccessLevel"];
            } else {
                $this->_propDict["defaultAccessLevel"] = new DeviceManagementExchangeAccessLevel($this->_propDict["defaultAccessLevel"]);
                return $this->_propDict["defaultAccessLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultAccessLevel
    *
    * @param DeviceManagementExchangeAccessLevel $val The defaultAccessLevel
    *
    * @return DeviceManagementExchangeOnPremisesPolicy
    */
    public function setDefaultAccessLevel($val)
    {
        $this->_propDict["defaultAccessLevel"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessRules
     *
     * @return array The accessRules
     */
    public function getAccessRules()
    {
        if (array_key_exists("accessRules", $this->_propDict)) {
           return $this->_propDict["accessRules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessRules
    *
    * @param DeviceManagementExchangeAccessRule $val The accessRules
    *
    * @return DeviceManagementExchangeOnPremisesPolicy
    */
    public function setAccessRules($val)
    {
		$this->_propDict["accessRules"] = $val;
        return $this;
    }
    

     /** 
     * Gets the knownDeviceClasses
     *
     * @return array The knownDeviceClasses
     */
    public function getKnownDeviceClasses()
    {
        if (array_key_exists("knownDeviceClasses", $this->_propDict)) {
           return $this->_propDict["knownDeviceClasses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the knownDeviceClasses
    *
    * @param DeviceManagementExchangeDeviceClass $val The knownDeviceClasses
    *
    * @return DeviceManagementExchangeOnPremisesPolicy
    */
    public function setKnownDeviceClasses($val)
    {
		$this->_propDict["knownDeviceClasses"] = $val;
        return $this;
    }
    
    /**
    * Gets the conditionalAccessSettings
    *
    * @return OnPremisesConditionalAccessSettings The conditionalAccessSettings
    */
    public function getConditionalAccessSettings()
    {
        if (array_key_exists("conditionalAccessSettings", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccessSettings"], "Microsoft\Graph\Beta\Model\OnPremisesConditionalAccessSettings")) {
                return $this->_propDict["conditionalAccessSettings"];
            } else {
                $this->_propDict["conditionalAccessSettings"] = new OnPremisesConditionalAccessSettings($this->_propDict["conditionalAccessSettings"]);
                return $this->_propDict["conditionalAccessSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the conditionalAccessSettings
    *
    * @param OnPremisesConditionalAccessSettings $val The conditionalAccessSettings
    *
    * @return DeviceManagementExchangeOnPremisesPolicy
    */
    public function setConditionalAccessSettings($val)
    {
        $this->_propDict["conditionalAccessSettings"] = $val;
        return $this;
    }
    
}