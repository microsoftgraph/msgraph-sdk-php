<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceProtectionOverview File
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
* DeviceProtectionOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceProtectionOverview extends Entity
{
    /**
    * Gets the totalReportedDeviceCount
    *
    * @return int The totalReportedDeviceCount
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
    * Gets the inactiveThreatAgentDeviceCount
    *
    * @return int The inactiveThreatAgentDeviceCount
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
    * Gets the unknownStateThreatAgentDeviceCount
    *
    * @return int The unknownStateThreatAgentDeviceCount
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
    /**
    * Gets the pendingSignatureUpdateDeviceCount
    *
    * @return int The pendingSignatureUpdateDeviceCount
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
    * Gets the cleanDeviceCount
    *
    * @return int The cleanDeviceCount
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
    * Gets the pendingFullScanDeviceCount
    *
    * @return int The pendingFullScanDeviceCount
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
    * Gets the pendingRestartDeviceCount
    *
    * @return int The pendingRestartDeviceCount
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
    * Gets the pendingManualStepsDeviceCount
    *
    * @return int The pendingManualStepsDeviceCount
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
    *
    * @return int The pendingOfflineScanDeviceCount
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
    * Gets the criticalFailuresDeviceCount
    *
    * @return int The criticalFailuresDeviceCount
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
}
