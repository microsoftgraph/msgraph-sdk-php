<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceCompliancePolicySettingStateSummary File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* DeviceCompliancePolicySettingStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceCompliancePolicySettingStateSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the conflictDeviceCount
    *
    * @return int|null The conflictDeviceCount
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
    * Gets the errorDeviceCount
    *
    * @return int|null The errorDeviceCount
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
    * Gets the failedDeviceCount
    *
    * @return int|null The failedDeviceCount
    */
    public function getFailedDeviceCount()
    {
        if (array_key_exists("failedDeviceCount", $this->_propDict)) {
            return $this->_propDict["failedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedDeviceCount
    *
    * @param int $val The failedDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setFailedDeviceCount($val)
    {
        $this->_propDict["failedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the intuneAccountId
    *
    * @return string|null The intuneAccountId
    */
    public function getIntuneAccountId()
    {
        if (array_key_exists("intuneAccountId", $this->_propDict)) {
            return $this->_propDict["intuneAccountId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the intuneAccountId
    *
    * @param string $val The intuneAccountId
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setIntuneAccountId($val)
    {
        $this->_propDict["intuneAccountId"] = $val;
        return $this;
    }
    
    /**
    * Gets the intuneSettingId
    *
    * @return string|null The intuneSettingId
    */
    public function getIntuneSettingId()
    {
        if (array_key_exists("intuneSettingId", $this->_propDict)) {
            return $this->_propDict["intuneSettingId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the intuneSettingId
    *
    * @param string $val The intuneSettingId
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setIntuneSettingId($val)
    {
        $this->_propDict["intuneSettingId"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastRefreshedDateTime
    *
    * @return \DateTime|null The lastRefreshedDateTime
    */
    public function getLastRefreshedDateTime()
    {
        if (array_key_exists("lastRefreshedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRefreshedDateTime"], "\DateTime") || is_null($this->_propDict["lastRefreshedDateTime"])) {
                return $this->_propDict["lastRefreshedDateTime"];
            } else {
                $this->_propDict["lastRefreshedDateTime"] = new \DateTime($this->_propDict["lastRefreshedDateTime"]);
                return $this->_propDict["lastRefreshedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastRefreshedDateTime
    *
    * @param \DateTime $val The lastRefreshedDateTime
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setLastRefreshedDateTime($val)
    {
        $this->_propDict["lastRefreshedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the notApplicableDeviceCount
    *
    * @return int|null The notApplicableDeviceCount
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
    * Gets the pendingDeviceCount
    *
    * @return int|null The pendingDeviceCount
    */
    public function getPendingDeviceCount()
    {
        if (array_key_exists("pendingDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pendingDeviceCount
    *
    * @param int $val The pendingDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setPendingDeviceCount($val)
    {
        $this->_propDict["pendingDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the policyType
    *
    * @return string|null The policyType
    */
    public function getPolicyType()
    {
        if (array_key_exists("policyType", $this->_propDict)) {
            return $this->_propDict["policyType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the policyType
    *
    * @param string $val The policyType
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setPolicyType($val)
    {
        $this->_propDict["policyType"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingName
    *
    * @return string|null The settingName
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
    * Gets the succeededDeviceCount
    *
    * @return int|null The succeededDeviceCount
    */
    public function getSucceededDeviceCount()
    {
        if (array_key_exists("succeededDeviceCount", $this->_propDict)) {
            return $this->_propDict["succeededDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the succeededDeviceCount
    *
    * @param int $val The succeededDeviceCount
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setSucceededDeviceCount($val)
    {
        $this->_propDict["succeededDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the tenantDisplayName
    *
    * @return string|null The tenantDisplayName
    */
    public function getTenantDisplayName()
    {
        if (array_key_exists("tenantDisplayName", $this->_propDict)) {
            return $this->_propDict["tenantDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantDisplayName
    *
    * @param string $val The tenantDisplayName
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setTenantDisplayName($val)
    {
        $this->_propDict["tenantDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the tenantId
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return DeviceCompliancePolicySettingStateSummary
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
    
}
