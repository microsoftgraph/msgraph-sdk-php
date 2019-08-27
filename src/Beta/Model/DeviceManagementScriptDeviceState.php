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
    * State of latest run of the device management script.
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
    * State of latest run of the device management script.
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
    * Details of execution output.
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
    * Details of execution output.
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
    * Latest time the device management script executes.
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
    * Latest time the device management script executes.
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
    * Error code corresponding to erroneous execution of the device management script.
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
    * Error code corresponding to erroneous execution of the device management script.
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
    * Error description corresponding to erroneous execution of the device management script.
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
    * Error description corresponding to erroneous execution of the device management script.
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
    * Gets the lastSyncDateTime
    * The latest time that Intune Managment Extension syncs to Intune.
    *
    * @return \DateTime The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncDateTime
    * The latest time that Intune Managment Extension syncs to Intune.
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the preRemediationDetectionScriptOutput
    * Output of the detection script before remediation.
    *
    * @return string The preRemediationDetectionScriptOutput
    */
    public function getPreRemediationDetectionScriptOutput()
    {
        if (array_key_exists("preRemediationDetectionScriptOutput", $this->_propDict)) {
            return $this->_propDict["preRemediationDetectionScriptOutput"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preRemediationDetectionScriptOutput
    * Output of the detection script before remediation.
    *
    * @param string $val The preRemediationDetectionScriptOutput
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setPreRemediationDetectionScriptOutput($val)
    {
        $this->_propDict["preRemediationDetectionScriptOutput"] = $val;
        return $this;
    }
    
    /**
    * Gets the remediationScriptError
    * Error output of the remediation script.
    *
    * @return string The remediationScriptError
    */
    public function getRemediationScriptError()
    {
        if (array_key_exists("remediationScriptError", $this->_propDict)) {
            return $this->_propDict["remediationScriptError"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remediationScriptError
    * Error output of the remediation script.
    *
    * @param string $val The remediationScriptError
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setRemediationScriptError($val)
    {
        $this->_propDict["remediationScriptError"] = $val;
        return $this;
    }
    
    /**
    * Gets the postRemediationDetectionScriptOutput
    * Detection script output after remediation.
    *
    * @return string The postRemediationDetectionScriptOutput
    */
    public function getPostRemediationDetectionScriptOutput()
    {
        if (array_key_exists("postRemediationDetectionScriptOutput", $this->_propDict)) {
            return $this->_propDict["postRemediationDetectionScriptOutput"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the postRemediationDetectionScriptOutput
    * Detection script output after remediation.
    *
    * @param string $val The postRemediationDetectionScriptOutput
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setPostRemediationDetectionScriptOutput($val)
    {
        $this->_propDict["postRemediationDetectionScriptOutput"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDevice
    * The managed devices that executes the device management script.
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
    * The managed devices that executes the device management script.
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