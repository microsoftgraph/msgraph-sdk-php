<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceCompliancePolicyDeviceStateSummary File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* DeviceCompliancePolicyDeviceStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceCompliancePolicyDeviceStateSummary extends Entity
{
    /**
    * Gets the compliantDeviceCount
    * Number of compliant devices
    *
    * @return int The compliantDeviceCount
    */
    public function getCompliantDeviceCount()
    {
        if (array_key_exists("compliantDeviceCount", $this->_propDict)) {
            return $this->_propDict["compliantDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the compliantDeviceCount
    * Number of compliant devices
    *
    * @param int $val The compliantDeviceCount
    *
    * @return DeviceCompliancePolicyDeviceStateSummary
    */
    public function setCompliantDeviceCount($val)
    {
        $this->_propDict["compliantDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the configManagerCount
    * Number of devices that have compliance managed by System Center Configuration Manager
    *
    * @return int The configManagerCount
    */
    public function getConfigManagerCount()
    {
        if (array_key_exists("configManagerCount", $this->_propDict)) {
            return $this->_propDict["configManagerCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configManagerCount
    * Number of devices that have compliance managed by System Center Configuration Manager
    *
    * @param int $val The configManagerCount
    *
    * @return DeviceCompliancePolicyDeviceStateSummary
    */
    public function setConfigManagerCount($val)
    {
        $this->_propDict["configManagerCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the conflictDeviceCount
    * Number of conflict devices
    *
    * @return int The conflictDeviceCount
    */
    public function getConflictDeviceCount()
    {
        if (array_key_exists("conflictDeviceCount", $this->_propDict)) {
            return $this->_propDict["conflictDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conflictDeviceCount
    * Number of conflict devices
    *
    * @param int $val The conflictDeviceCount
    *
    * @return DeviceCompliancePolicyDeviceStateSummary
    */
    public function setConflictDeviceCount($val)
    {
        $this->_propDict["conflictDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorDeviceCount
    * Number of error devices
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
    * Number of error devices
    *
    * @param int $val The errorDeviceCount
    *
    * @return DeviceCompliancePolicyDeviceStateSummary
    */
    public function setErrorDeviceCount($val)
    {
        $this->_propDict["errorDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the inGracePeriodCount
    * Number of devices that are in grace period
    *
    * @return int The inGracePeriodCount
    */
    public function getInGracePeriodCount()
    {
        if (array_key_exists("inGracePeriodCount", $this->_propDict)) {
            return $this->_propDict["inGracePeriodCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the inGracePeriodCount
    * Number of devices that are in grace period
    *
    * @param int $val The inGracePeriodCount
    *
    * @return DeviceCompliancePolicyDeviceStateSummary
    */
    public function setInGracePeriodCount($val)
    {
        $this->_propDict["inGracePeriodCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the nonCompliantDeviceCount
    * Number of NonCompliant devices
    *
    * @return int The nonCompliantDeviceCount
    */
    public function getNonCompliantDeviceCount()
    {
        if (array_key_exists("nonCompliantDeviceCount", $this->_propDict)) {
            return $this->_propDict["nonCompliantDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nonCompliantDeviceCount
    * Number of NonCompliant devices
    *
    * @param int $val The nonCompliantDeviceCount
    *
    * @return DeviceCompliancePolicyDeviceStateSummary
    */
    public function setNonCompliantDeviceCount($val)
    {
        $this->_propDict["nonCompliantDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicableDeviceCount
    * Number of not applicable devices
    *
    * @return int The notApplicableDeviceCount
    */
    public function getNotApplicableDeviceCount()
    {
        if (array_key_exists("notApplicableDeviceCount", $this->_propDict)) {
            return $this->_propDict["notApplicableDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicableDeviceCount
    * Number of not applicable devices
    *
    * @param int $val The notApplicableDeviceCount
    *
    * @return DeviceCompliancePolicyDeviceStateSummary
    */
    public function setNotApplicableDeviceCount($val)
    {
        $this->_propDict["notApplicableDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the remediatedDeviceCount
    * Number of remediated devices
    *
    * @return int The remediatedDeviceCount
    */
    public function getRemediatedDeviceCount()
    {
        if (array_key_exists("remediatedDeviceCount", $this->_propDict)) {
            return $this->_propDict["remediatedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remediatedDeviceCount
    * Number of remediated devices
    *
    * @param int $val The remediatedDeviceCount
    *
    * @return DeviceCompliancePolicyDeviceStateSummary
    */
    public function setRemediatedDeviceCount($val)
    {
        $this->_propDict["remediatedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the unknownDeviceCount
    * Number of unknown devices
    *
    * @return int The unknownDeviceCount
    */
    public function getUnknownDeviceCount()
    {
        if (array_key_exists("unknownDeviceCount", $this->_propDict)) {
            return $this->_propDict["unknownDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unknownDeviceCount
    * Number of unknown devices
    *
    * @param int $val The unknownDeviceCount
    *
    * @return DeviceCompliancePolicyDeviceStateSummary
    */
    public function setUnknownDeviceCount($val)
    {
        $this->_propDict["unknownDeviceCount"] = intval($val);
        return $this;
    }
    
}