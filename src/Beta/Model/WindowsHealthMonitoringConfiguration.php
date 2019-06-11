<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsHealthMonitoringConfiguration File
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
* WindowsHealthMonitoringConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsHealthMonitoringConfiguration extends DeviceConfiguration
{
    /**
    * Gets the allowDeviceHealthMonitoring
    * Enables device health monitoring on the device
    *
    * @return Enablement The allowDeviceHealthMonitoring
    */
    public function getAllowDeviceHealthMonitoring()
    {
        if (array_key_exists("allowDeviceHealthMonitoring", $this->_propDict)) {
            if (is_a($this->_propDict["allowDeviceHealthMonitoring"], "Microsoft\Graph\Beta\Model\Enablement")) {
                return $this->_propDict["allowDeviceHealthMonitoring"];
            } else {
                $this->_propDict["allowDeviceHealthMonitoring"] = new Enablement($this->_propDict["allowDeviceHealthMonitoring"]);
                return $this->_propDict["allowDeviceHealthMonitoring"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowDeviceHealthMonitoring
    * Enables device health monitoring on the device
    *
    * @param Enablement $val The allowDeviceHealthMonitoring
    *
    * @return WindowsHealthMonitoringConfiguration
    */
    public function setAllowDeviceHealthMonitoring($val)
    {
        $this->_propDict["allowDeviceHealthMonitoring"] = $val;
        return $this;
    }
    
    /**
    * Gets the configDeviceHealthMonitoringScope
    * Specifies set of events collected from the device where health monitoring is enabled
    *
    * @return WindowsHealthMonitoringScope The configDeviceHealthMonitoringScope
    */
    public function getConfigDeviceHealthMonitoringScope()
    {
        if (array_key_exists("configDeviceHealthMonitoringScope", $this->_propDict)) {
            if (is_a($this->_propDict["configDeviceHealthMonitoringScope"], "Microsoft\Graph\Beta\Model\WindowsHealthMonitoringScope")) {
                return $this->_propDict["configDeviceHealthMonitoringScope"];
            } else {
                $this->_propDict["configDeviceHealthMonitoringScope"] = new WindowsHealthMonitoringScope($this->_propDict["configDeviceHealthMonitoringScope"]);
                return $this->_propDict["configDeviceHealthMonitoringScope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configDeviceHealthMonitoringScope
    * Specifies set of events collected from the device where health monitoring is enabled
    *
    * @param WindowsHealthMonitoringScope $val The configDeviceHealthMonitoringScope
    *
    * @return WindowsHealthMonitoringConfiguration
    */
    public function setConfigDeviceHealthMonitoringScope($val)
    {
        $this->_propDict["configDeviceHealthMonitoringScope"] = $val;
        return $this;
    }
    
    /**
    * Gets the configDeviceHealthMonitoringCustomScope
    * Specifies custom set of events collected from the device where health monitoring is enabled
    *
    * @return string The configDeviceHealthMonitoringCustomScope
    */
    public function getConfigDeviceHealthMonitoringCustomScope()
    {
        if (array_key_exists("configDeviceHealthMonitoringCustomScope", $this->_propDict)) {
            return $this->_propDict["configDeviceHealthMonitoringCustomScope"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configDeviceHealthMonitoringCustomScope
    * Specifies custom set of events collected from the device where health monitoring is enabled
    *
    * @param string $val The configDeviceHealthMonitoringCustomScope
    *
    * @return WindowsHealthMonitoringConfiguration
    */
    public function setConfigDeviceHealthMonitoringCustomScope($val)
    {
        $this->_propDict["configDeviceHealthMonitoringCustomScope"] = $val;
        return $this;
    }
    
}