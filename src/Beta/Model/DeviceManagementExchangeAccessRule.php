<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementExchangeAccessRule File
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
* DeviceManagementExchangeAccessRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementExchangeAccessRule extends Entity
{

    /**
    * Gets the deviceClass
    *
    * @return DeviceManagementExchangeDeviceClass The deviceClass
    */
    public function getDeviceClass()
    {
        if (array_key_exists("deviceClass", $this->_propDict)) {
            if (is_a($this->_propDict["deviceClass"], "Microsoft\Graph\Model\DeviceManagementExchangeDeviceClass")) {
                return $this->_propDict["deviceClass"];
            } else {
                $this->_propDict["deviceClass"] = new DeviceManagementExchangeDeviceClass($this->_propDict["deviceClass"]);
                return $this->_propDict["deviceClass"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceClass
    *
    * @param DeviceManagementExchangeDeviceClass $val The value to assign to the deviceClass
    *
    * @return DeviceManagementExchangeAccessRule The DeviceManagementExchangeAccessRule
    */
    public function setDeviceClass($val)
    {
        $this->_propDict["deviceClass"] = $val;
         return $this;
    }

    /**
    * Gets the accessLevel
    *
    * @return DeviceManagementExchangeAccessLevel The accessLevel
    */
    public function getAccessLevel()
    {
        if (array_key_exists("accessLevel", $this->_propDict)) {
            if (is_a($this->_propDict["accessLevel"], "Microsoft\Graph\Model\DeviceManagementExchangeAccessLevel")) {
                return $this->_propDict["accessLevel"];
            } else {
                $this->_propDict["accessLevel"] = new DeviceManagementExchangeAccessLevel($this->_propDict["accessLevel"]);
                return $this->_propDict["accessLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the accessLevel
    *
    * @param DeviceManagementExchangeAccessLevel $val The value to assign to the accessLevel
    *
    * @return DeviceManagementExchangeAccessRule The DeviceManagementExchangeAccessRule
    */
    public function setAccessLevel($val)
    {
        $this->_propDict["accessLevel"] = $val;
         return $this;
    }
}
