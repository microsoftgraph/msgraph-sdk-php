<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AdvancedThreatProtectionOnboardingStateSummary File
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
* AdvancedThreatProtectionOnboardingStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AdvancedThreatProtectionOnboardingStateSummary extends Entity
{
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
    * @return AdvancedThreatProtectionOnboardingStateSummary
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
    * @return AdvancedThreatProtectionOnboardingStateSummary
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
    * @return AdvancedThreatProtectionOnboardingStateSummary
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
    * @return AdvancedThreatProtectionOnboardingStateSummary
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
    * @return AdvancedThreatProtectionOnboardingStateSummary
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
    * @return AdvancedThreatProtectionOnboardingStateSummary
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
    * @return AdvancedThreatProtectionOnboardingStateSummary
    */
    public function setConflictDeviceCount($val)
    {
        $this->_propDict["conflictDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notAssignedDeviceCount
    *
    * @return int The notAssignedDeviceCount
    */
    public function getNotAssignedDeviceCount()
    {
        if (array_key_exists("notAssignedDeviceCount", $this->_propDict)) {
            return $this->_propDict["notAssignedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notAssignedDeviceCount
    *
    * @param int $val The notAssignedDeviceCount
    *
    * @return AdvancedThreatProtectionOnboardingStateSummary
    */
    public function setNotAssignedDeviceCount($val)
    {
        $this->_propDict["notAssignedDeviceCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the advancedThreatProtectionOnboardingDeviceSettingStates
     *
     * @return array The advancedThreatProtectionOnboardingDeviceSettingStates
     */
    public function getAdvancedThreatProtectionOnboardingDeviceSettingStates()
    {
        if (array_key_exists("advancedThreatProtectionOnboardingDeviceSettingStates", $this->_propDict)) {
           return $this->_propDict["advancedThreatProtectionOnboardingDeviceSettingStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the advancedThreatProtectionOnboardingDeviceSettingStates
    *
    * @param AdvancedThreatProtectionOnboardingDeviceSettingState $val The advancedThreatProtectionOnboardingDeviceSettingStates
    *
    * @return AdvancedThreatProtectionOnboardingStateSummary
    */
    public function setAdvancedThreatProtectionOnboardingDeviceSettingStates($val)
    {
		$this->_propDict["advancedThreatProtectionOnboardingDeviceSettingStates"] = $val;
        return $this;
    }
    
}