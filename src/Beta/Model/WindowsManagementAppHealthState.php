<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsManagementAppHealthState File
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
* WindowsManagementAppHealthState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsManagementAppHealthState extends Entity
{
    /**
    * Gets the healthState
    *
    * @return HealthState The healthState
    */
    public function getHealthState()
    {
        if (array_key_exists("healthState", $this->_propDict)) {
            if (is_a($this->_propDict["healthState"], "Microsoft\Graph\Beta\Model\HealthState")) {
                return $this->_propDict["healthState"];
            } else {
                $this->_propDict["healthState"] = new HealthState($this->_propDict["healthState"]);
                return $this->_propDict["healthState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the healthState
    *
    * @param HealthState $val The healthState
    *
    * @return WindowsManagementAppHealthState
    */
    public function setHealthState($val)
    {
        $this->_propDict["healthState"] = $val;
        return $this;
    }
    
    /**
    * Gets the installedVersion
    *
    * @return string The installedVersion
    */
    public function getInstalledVersion()
    {
        if (array_key_exists("installedVersion", $this->_propDict)) {
            return $this->_propDict["installedVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the installedVersion
    *
    * @param string $val The installedVersion
    *
    * @return WindowsManagementAppHealthState
    */
    public function setInstalledVersion($val)
    {
        $this->_propDict["installedVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastCheckInDateTime
    *
    * @return \DateTime The lastCheckInDateTime
    */
    public function getLastCheckInDateTime()
    {
        if (array_key_exists("lastCheckInDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastCheckInDateTime"], "\DateTime")) {
                return $this->_propDict["lastCheckInDateTime"];
            } else {
                $this->_propDict["lastCheckInDateTime"] = new \DateTime($this->_propDict["lastCheckInDateTime"]);
                return $this->_propDict["lastCheckInDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastCheckInDateTime
    *
    * @param \DateTime $val The lastCheckInDateTime
    *
    * @return WindowsManagementAppHealthState
    */
    public function setLastCheckInDateTime($val)
    {
        $this->_propDict["lastCheckInDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    *
    * @return string The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceName
    *
    * @param string $val The deviceName
    *
    * @return WindowsManagementAppHealthState
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceOSVersion
    *
    * @return string The deviceOSVersion
    */
    public function getDeviceOSVersion()
    {
        if (array_key_exists("deviceOSVersion", $this->_propDict)) {
            return $this->_propDict["deviceOSVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceOSVersion
    *
    * @param string $val The deviceOSVersion
    *
    * @return WindowsManagementAppHealthState
    */
    public function setDeviceOSVersion($val)
    {
        $this->_propDict["deviceOSVersion"] = $val;
        return $this;
    }
    
}