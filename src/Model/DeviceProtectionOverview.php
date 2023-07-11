<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceProtectionOverview File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* DeviceProtectionOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceProtectionOverview extends Entity
{
    /**
    * Gets the cleanDeviceCount
    * Indicates number of devices reporting as clean
    *
    * @return int|null The cleanDeviceCount
    */
    public function getCleanDeviceCount()
    {
        if (array_key_exists("cleanDeviceCount", $this->_propDict)) {
            return $this->_propDict["cleanDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cleanDeviceCount
    * Indicates number of devices reporting as clean
    *
    * @param int $val The value of the cleanDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setCleanDeviceCount($val)
    {
        $this->_propDict["cleanDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the criticalFailuresDeviceCount
    * Indicates number of devices with critical failures
    *
    * @return int|null The criticalFailuresDeviceCount
    */
    public function getCriticalFailuresDeviceCount()
    {
        if (array_key_exists("criticalFailuresDeviceCount", $this->_propDict)) {
            return $this->_propDict["criticalFailuresDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the criticalFailuresDeviceCount
    * Indicates number of devices with critical failures
    *
    * @param int $val The value of the criticalFailuresDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setCriticalFailuresDeviceCount($val)
    {
        $this->_propDict["criticalFailuresDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the inactiveThreatAgentDeviceCount
    * Indicates number of devices with inactive threat agent
    *
    * @return int|null The inactiveThreatAgentDeviceCount
    */
    public function getInactiveThreatAgentDeviceCount()
    {
        if (array_key_exists("inactiveThreatAgentDeviceCount", $this->_propDict)) {
            return $this->_propDict["inactiveThreatAgentDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inactiveThreatAgentDeviceCount
    * Indicates number of devices with inactive threat agent
    *
    * @param int $val The value of the inactiveThreatAgentDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setInactiveThreatAgentDeviceCount($val)
    {
        $this->_propDict["inactiveThreatAgentDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingFullScanDeviceCount
    * Indicates number of devices pending full scan
    *
    * @return int|null The pendingFullScanDeviceCount
    */
    public function getPendingFullScanDeviceCount()
    {
        if (array_key_exists("pendingFullScanDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingFullScanDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingFullScanDeviceCount
    * Indicates number of devices pending full scan
    *
    * @param int $val The value of the pendingFullScanDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setPendingFullScanDeviceCount($val)
    {
        $this->_propDict["pendingFullScanDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingManualStepsDeviceCount
    * Indicates number of devices with pending manual steps
    *
    * @return int|null The pendingManualStepsDeviceCount
    */
    public function getPendingManualStepsDeviceCount()
    {
        if (array_key_exists("pendingManualStepsDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingManualStepsDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingManualStepsDeviceCount
    * Indicates number of devices with pending manual steps
    *
    * @param int $val The value of the pendingManualStepsDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setPendingManualStepsDeviceCount($val)
    {
        $this->_propDict["pendingManualStepsDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingOfflineScanDeviceCount
    * Indicates number of pending offline scan devices
    *
    * @return int|null The pendingOfflineScanDeviceCount
    */
    public function getPendingOfflineScanDeviceCount()
    {
        if (array_key_exists("pendingOfflineScanDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingOfflineScanDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingOfflineScanDeviceCount
    * Indicates number of pending offline scan devices
    *
    * @param int $val The value of the pendingOfflineScanDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setPendingOfflineScanDeviceCount($val)
    {
        $this->_propDict["pendingOfflineScanDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingQuickScanDeviceCount
    * Indicates the number of devices that have a pending full scan. Valid values -2147483648 to 2147483647
    *
    * @return int|null The pendingQuickScanDeviceCount
    */
    public function getPendingQuickScanDeviceCount()
    {
        if (array_key_exists("pendingQuickScanDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingQuickScanDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingQuickScanDeviceCount
    * Indicates the number of devices that have a pending full scan. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the pendingQuickScanDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setPendingQuickScanDeviceCount($val)
    {
        $this->_propDict["pendingQuickScanDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingRestartDeviceCount
    * Indicates number of devices pending restart
    *
    * @return int|null The pendingRestartDeviceCount
    */
    public function getPendingRestartDeviceCount()
    {
        if (array_key_exists("pendingRestartDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingRestartDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingRestartDeviceCount
    * Indicates number of devices pending restart
    *
    * @param int $val The value of the pendingRestartDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setPendingRestartDeviceCount($val)
    {
        $this->_propDict["pendingRestartDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingSignatureUpdateDeviceCount
    * Indicates number of devices with an old signature
    *
    * @return int|null The pendingSignatureUpdateDeviceCount
    */
    public function getPendingSignatureUpdateDeviceCount()
    {
        if (array_key_exists("pendingSignatureUpdateDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingSignatureUpdateDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingSignatureUpdateDeviceCount
    * Indicates number of devices with an old signature
    *
    * @param int $val The value of the pendingSignatureUpdateDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setPendingSignatureUpdateDeviceCount($val)
    {
        $this->_propDict["pendingSignatureUpdateDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the totalReportedDeviceCount
    * Total device count.
    *
    * @return int|null The totalReportedDeviceCount
    */
    public function getTotalReportedDeviceCount()
    {
        if (array_key_exists("totalReportedDeviceCount", $this->_propDict)) {
            return $this->_propDict["totalReportedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalReportedDeviceCount
    * Total device count.
    *
    * @param int $val The value of the totalReportedDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setTotalReportedDeviceCount($val)
    {
        $this->_propDict["totalReportedDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the unknownStateThreatAgentDeviceCount
    * Indicates number of devices with threat agent state as unknown
    *
    * @return int|null The unknownStateThreatAgentDeviceCount
    */
    public function getUnknownStateThreatAgentDeviceCount()
    {
        if (array_key_exists("unknownStateThreatAgentDeviceCount", $this->_propDict)) {
            return $this->_propDict["unknownStateThreatAgentDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unknownStateThreatAgentDeviceCount
    * Indicates number of devices with threat agent state as unknown
    *
    * @param int $val The value of the unknownStateThreatAgentDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setUnknownStateThreatAgentDeviceCount($val)
    {
        $this->_propDict["unknownStateThreatAgentDeviceCount"] = $val;
        return $this;
    }
}
