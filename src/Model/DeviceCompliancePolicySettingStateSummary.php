<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceCompliancePolicySettingStateSummary File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* DeviceCompliancePolicySettingStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceCompliancePolicySettingStateSummary extends Entity
{
    /**
    * Gets the setting
    *
    * @return string The setting
    */
    public function getSetting()
    {
        if (array_key_exists("setting", $this->_propDict)) {
            return $this->_propDict["setting"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the setting
    *
    * @param string $val The setting
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setSetting($val)
    {
        $this->_propDict["setting"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingName
    *
    * @return string The settingName
    */
    public function getSettingName()
    {
        if (array_key_exists("settingName", $this->_propDict)) {
            return $this->_propDict["settingName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingName
    *
    * @param string $val The settingName
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setSettingName($val)
    {
        $this->_propDict["settingName"] = $val;
        return $this;
    }
    
    /**
    * Gets the platformType
    *
    * @return PolicyPlatformType The platformType
    */
    public function getPlatformType()
    {
        if (array_key_exists("platformType", $this->_propDict)) {
            if (is_a($this->_propDict["platformType"], "Microsoft\Graph\Model\PolicyPlatformType")) {
                return $this->_propDict["platformType"];
            } else {
                $this->_propDict["platformType"] = new PolicyPlatformType($this->_propDict["platformType"]);
                return $this->_propDict["platformType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the platformType
    *
    * @param PolicyPlatformType $val The platformType
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setPlatformType($val)
    {
        $this->_propDict["platformType"] = $val;
        return $this;
    }
    
    /**
    * Gets the unknownDeviceCount
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
    *
    * @param int $val The unknownDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setUnknownDeviceCount($val)
    {
        $this->_propDict["unknownDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicableDeviceCount
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
    *
    * @param int $val The notApplicableDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setNotApplicableDeviceCount($val)
    {
        $this->_propDict["notApplicableDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the compliantDeviceCount
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
    *
    * @param int $val The compliantDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setCompliantDeviceCount($val)
    {
        $this->_propDict["compliantDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the remediatedDeviceCount
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
    *
    * @param int $val The remediatedDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setRemediatedDeviceCount($val)
    {
        $this->_propDict["remediatedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the nonCompliantDeviceCount
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
    *
    * @param int $val The nonCompliantDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setNonCompliantDeviceCount($val)
    {
        $this->_propDict["nonCompliantDeviceCount"] = intval($val);
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
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setErrorDeviceCount($val)
    {
        $this->_propDict["errorDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the conflictDeviceCount
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
    *
    * @param int $val The conflictDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setConflictDeviceCount($val)
    {
        $this->_propDict["conflictDeviceCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the deviceComplianceSettingStates
     *
     * @return array The deviceComplianceSettingStates
     */
    public function getDeviceComplianceSettingStates()
    {
        if (array_key_exists("deviceComplianceSettingStates", $this->_propDict)) {
           return $this->_propDict["deviceComplianceSettingStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceComplianceSettingStates
    *
    * @param DeviceComplianceSettingState $val The deviceComplianceSettingStates
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setDeviceComplianceSettingStates($val)
    {
		$this->_propDict["deviceComplianceSettingStates"] = $val;
        return $this;
    }
    
}