<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementScriptDeviceState File
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
* DeviceManagementScriptDeviceState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementScriptDeviceState extends Entity
{
    /**
    * Gets the runState
    *
    * @return RunState The runState
    */
    public function getRunState()
    {
        if (array_key_exists("runState", $this->_propDict)) {
            if (is_a($this->_propDict["runState"], "Microsoft\Graph\Beta\Model\RunState")) {
                return $this->_propDict["runState"];
            } else {
                $this->_propDict["runState"] = new RunState($this->_propDict["runState"]);
                return $this->_propDict["runState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the runState
    *
    * @param RunState $val The runState
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setRunState($val)
    {
        $this->_propDict["runState"] = $val;
        return $this;
    }
    
    /**
    * Gets the resultMessage
    *
    * @return string The resultMessage
    */
    public function getResultMessage()
    {
        if (array_key_exists("resultMessage", $this->_propDict)) {
            return $this->_propDict["resultMessage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resultMessage
    *
    * @param string $val The resultMessage
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setResultMessage($val)
    {
        $this->_propDict["resultMessage"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastStateUpdateDateTime
    *
    * @return \DateTime The lastStateUpdateDateTime
    */
    public function getLastStateUpdateDateTime()
    {
        if (array_key_exists("lastStateUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastStateUpdateDateTime"], "\DateTime")) {
                return $this->_propDict["lastStateUpdateDateTime"];
            } else {
                $this->_propDict["lastStateUpdateDateTime"] = new \DateTime($this->_propDict["lastStateUpdateDateTime"]);
                return $this->_propDict["lastStateUpdateDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastStateUpdateDateTime
    *
    * @param \DateTime $val The lastStateUpdateDateTime
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setLastStateUpdateDateTime($val)
    {
        $this->_propDict["lastStateUpdateDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the errorCode
    *
    * @return int The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorCode
    *
    * @param int $val The errorCode
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorDescription
    *
    * @return string The errorDescription
    */
    public function getErrorDescription()
    {
        if (array_key_exists("errorDescription", $this->_propDict)) {
            return $this->_propDict["errorDescription"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorDescription
    *
    * @param string $val The errorDescription
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setErrorDescription($val)
    {
        $this->_propDict["errorDescription"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDevice
    *
    * @return ManagedDevice The managedDevice
    */
    public function getManagedDevice()
    {
        if (array_key_exists("managedDevice", $this->_propDict)) {
            if (is_a($this->_propDict["managedDevice"], "Microsoft\Graph\Beta\Model\ManagedDevice")) {
                return $this->_propDict["managedDevice"];
            } else {
                $this->_propDict["managedDevice"] = new ManagedDevice($this->_propDict["managedDevice"]);
                return $this->_propDict["managedDevice"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managedDevice
    *
    * @param ManagedDevice $val The managedDevice
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setManagedDevice($val)
    {
        $this->_propDict["managedDevice"] = $val;
        return $this;
    }
    
}