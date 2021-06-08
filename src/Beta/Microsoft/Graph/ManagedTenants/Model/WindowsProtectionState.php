<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsProtectionState File
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
* WindowsProtectionState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsProtectionState extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the antiMalwareVersion
    *
    * @return string|null The antiMalwareVersion
    */
    public function getAntiMalwareVersion()
    {
        if (array_key_exists("antiMalwareVersion", $this->_propDict)) {
            return $this->_propDict["antiMalwareVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the antiMalwareVersion
    *
    * @param string $val The antiMalwareVersion
    *
    * @return WindowsProtectionState
    */
    public function setAntiMalwareVersion($val)
    {
        $this->_propDict["antiMalwareVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the attentionRequired
    *
    * @return bool|null The attentionRequired
    */
    public function getAttentionRequired()
    {
        if (array_key_exists("attentionRequired", $this->_propDict)) {
            return $this->_propDict["attentionRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the attentionRequired
    *
    * @param bool $val The attentionRequired
    *
    * @return WindowsProtectionState
    */
    public function setAttentionRequired($val)
    {
        $this->_propDict["attentionRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceDeleted
    *
    * @return bool|null The deviceDeleted
    */
    public function getDeviceDeleted()
    {
        if (array_key_exists("deviceDeleted", $this->_propDict)) {
            return $this->_propDict["deviceDeleted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceDeleted
    *
    * @param bool $val The deviceDeleted
    *
    * @return WindowsProtectionState
    */
    public function setDeviceDeleted($val)
    {
        $this->_propDict["deviceDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the devicePropertyRefreshDateTime
    *
    * @return \DateTime|null The devicePropertyRefreshDateTime
    */
    public function getDevicePropertyRefreshDateTime()
    {
        if (array_key_exists("devicePropertyRefreshDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["devicePropertyRefreshDateTime"], "\DateTime") || is_null($this->_propDict["devicePropertyRefreshDateTime"])) {
                return $this->_propDict["devicePropertyRefreshDateTime"];
            } else {
                $this->_propDict["devicePropertyRefreshDateTime"] = new \DateTime($this->_propDict["devicePropertyRefreshDateTime"]);
                return $this->_propDict["devicePropertyRefreshDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the devicePropertyRefreshDateTime
    *
    * @param \DateTime $val The devicePropertyRefreshDateTime
    *
    * @return WindowsProtectionState
    */
    public function setDevicePropertyRefreshDateTime($val)
    {
        $this->_propDict["devicePropertyRefreshDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the engineVersion
    *
    * @return string|null The engineVersion
    */
    public function getEngineVersion()
    {
        if (array_key_exists("engineVersion", $this->_propDict)) {
            return $this->_propDict["engineVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the engineVersion
    *
    * @param string $val The engineVersion
    *
    * @return WindowsProtectionState
    */
    public function setEngineVersion($val)
    {
        $this->_propDict["engineVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the fullScanOverdue
    *
    * @return bool|null The fullScanOverdue
    */
    public function getFullScanOverdue()
    {
        if (array_key_exists("fullScanOverdue", $this->_propDict)) {
            return $this->_propDict["fullScanOverdue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fullScanOverdue
    *
    * @param bool $val The fullScanOverdue
    *
    * @return WindowsProtectionState
    */
    public function setFullScanOverdue($val)
    {
        $this->_propDict["fullScanOverdue"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fullScanRequired
    *
    * @return bool|null The fullScanRequired
    */
    public function getFullScanRequired()
    {
        if (array_key_exists("fullScanRequired", $this->_propDict)) {
            return $this->_propDict["fullScanRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fullScanRequired
    *
    * @param bool $val The fullScanRequired
    *
    * @return WindowsProtectionState
    */
    public function setFullScanRequired($val)
    {
        $this->_propDict["fullScanRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastFullScanDateTime
    *
    * @return \DateTime|null The lastFullScanDateTime
    */
    public function getLastFullScanDateTime()
    {
        if (array_key_exists("lastFullScanDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastFullScanDateTime"], "\DateTime") || is_null($this->_propDict["lastFullScanDateTime"])) {
                return $this->_propDict["lastFullScanDateTime"];
            } else {
                $this->_propDict["lastFullScanDateTime"] = new \DateTime($this->_propDict["lastFullScanDateTime"]);
                return $this->_propDict["lastFullScanDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastFullScanDateTime
    *
    * @param \DateTime $val The lastFullScanDateTime
    *
    * @return WindowsProtectionState
    */
    public function setLastFullScanDateTime($val)
    {
        $this->_propDict["lastFullScanDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastFullScanSignatureVersion
    *
    * @return string|null The lastFullScanSignatureVersion
    */
    public function getLastFullScanSignatureVersion()
    {
        if (array_key_exists("lastFullScanSignatureVersion", $this->_propDict)) {
            return $this->_propDict["lastFullScanSignatureVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lastFullScanSignatureVersion
    *
    * @param string $val The lastFullScanSignatureVersion
    *
    * @return WindowsProtectionState
    */
    public function setLastFullScanSignatureVersion($val)
    {
        $this->_propDict["lastFullScanSignatureVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastQuickScanDateTime
    *
    * @return \DateTime|null The lastQuickScanDateTime
    */
    public function getLastQuickScanDateTime()
    {
        if (array_key_exists("lastQuickScanDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastQuickScanDateTime"], "\DateTime") || is_null($this->_propDict["lastQuickScanDateTime"])) {
                return $this->_propDict["lastQuickScanDateTime"];
            } else {
                $this->_propDict["lastQuickScanDateTime"] = new \DateTime($this->_propDict["lastQuickScanDateTime"]);
                return $this->_propDict["lastQuickScanDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastQuickScanDateTime
    *
    * @param \DateTime $val The lastQuickScanDateTime
    *
    * @return WindowsProtectionState
    */
    public function setLastQuickScanDateTime($val)
    {
        $this->_propDict["lastQuickScanDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastQuickScanSignatureVersion
    *
    * @return string|null The lastQuickScanSignatureVersion
    */
    public function getLastQuickScanSignatureVersion()
    {
        if (array_key_exists("lastQuickScanSignatureVersion", $this->_propDict)) {
            return $this->_propDict["lastQuickScanSignatureVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lastQuickScanSignatureVersion
    *
    * @param string $val The lastQuickScanSignatureVersion
    *
    * @return WindowsProtectionState
    */
    public function setLastQuickScanSignatureVersion($val)
    {
        $this->_propDict["lastQuickScanSignatureVersion"] = $val;
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
    * @return WindowsProtectionState
    */
    public function setLastRefreshedDateTime($val)
    {
        $this->_propDict["lastRefreshedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastReportedDateTime
    *
    * @return \DateTime|null The lastReportedDateTime
    */
    public function getLastReportedDateTime()
    {
        if (array_key_exists("lastReportedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastReportedDateTime"], "\DateTime") || is_null($this->_propDict["lastReportedDateTime"])) {
                return $this->_propDict["lastReportedDateTime"];
            } else {
                $this->_propDict["lastReportedDateTime"] = new \DateTime($this->_propDict["lastReportedDateTime"]);
                return $this->_propDict["lastReportedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastReportedDateTime
    *
    * @param \DateTime $val The lastReportedDateTime
    *
    * @return WindowsProtectionState
    */
    public function setLastReportedDateTime($val)
    {
        $this->_propDict["lastReportedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the malwareProtectionEnabled
    *
    * @return bool|null The malwareProtectionEnabled
    */
    public function getMalwareProtectionEnabled()
    {
        if (array_key_exists("malwareProtectionEnabled", $this->_propDict)) {
            return $this->_propDict["malwareProtectionEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the malwareProtectionEnabled
    *
    * @param bool $val The malwareProtectionEnabled
    *
    * @return WindowsProtectionState
    */
    public function setMalwareProtectionEnabled($val)
    {
        $this->_propDict["malwareProtectionEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the managedDeviceHealthState
    *
    * @return string|null The managedDeviceHealthState
    */
    public function getManagedDeviceHealthState()
    {
        if (array_key_exists("managedDeviceHealthState", $this->_propDict)) {
            return $this->_propDict["managedDeviceHealthState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceHealthState
    *
    * @param string $val The managedDeviceHealthState
    *
    * @return WindowsProtectionState
    */
    public function setManagedDeviceHealthState($val)
    {
        $this->_propDict["managedDeviceHealthState"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceId
    *
    * @return string|null The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceId
    *
    * @param string $val The managedDeviceId
    *
    * @return WindowsProtectionState
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceName
    *
    * @return string|null The managedDeviceName
    */
    public function getManagedDeviceName()
    {
        if (array_key_exists("managedDeviceName", $this->_propDict)) {
            return $this->_propDict["managedDeviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceName
    *
    * @param string $val The managedDeviceName
    *
    * @return WindowsProtectionState
    */
    public function setManagedDeviceName($val)
    {
        $this->_propDict["managedDeviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkInspectionSystemEnabled
    *
    * @return bool|null The networkInspectionSystemEnabled
    */
    public function getNetworkInspectionSystemEnabled()
    {
        if (array_key_exists("networkInspectionSystemEnabled", $this->_propDict)) {
            return $this->_propDict["networkInspectionSystemEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkInspectionSystemEnabled
    *
    * @param bool $val The networkInspectionSystemEnabled
    *
    * @return WindowsProtectionState
    */
    public function setNetworkInspectionSystemEnabled($val)
    {
        $this->_propDict["networkInspectionSystemEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the quickScanOverdue
    *
    * @return bool|null The quickScanOverdue
    */
    public function getQuickScanOverdue()
    {
        if (array_key_exists("quickScanOverdue", $this->_propDict)) {
            return $this->_propDict["quickScanOverdue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the quickScanOverdue
    *
    * @param bool $val The quickScanOverdue
    *
    * @return WindowsProtectionState
    */
    public function setQuickScanOverdue($val)
    {
        $this->_propDict["quickScanOverdue"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the realTimeProtectionEnabled
    *
    * @return bool|null The realTimeProtectionEnabled
    */
    public function getRealTimeProtectionEnabled()
    {
        if (array_key_exists("realTimeProtectionEnabled", $this->_propDict)) {
            return $this->_propDict["realTimeProtectionEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the realTimeProtectionEnabled
    *
    * @param bool $val The realTimeProtectionEnabled
    *
    * @return WindowsProtectionState
    */
    public function setRealTimeProtectionEnabled($val)
    {
        $this->_propDict["realTimeProtectionEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the rebootRequired
    *
    * @return bool|null The rebootRequired
    */
    public function getRebootRequired()
    {
        if (array_key_exists("rebootRequired", $this->_propDict)) {
            return $this->_propDict["rebootRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rebootRequired
    *
    * @param bool $val The rebootRequired
    *
    * @return WindowsProtectionState
    */
    public function setRebootRequired($val)
    {
        $this->_propDict["rebootRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the signatureUpdateOverdue
    *
    * @return bool|null The signatureUpdateOverdue
    */
    public function getSignatureUpdateOverdue()
    {
        if (array_key_exists("signatureUpdateOverdue", $this->_propDict)) {
            return $this->_propDict["signatureUpdateOverdue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signatureUpdateOverdue
    *
    * @param bool $val The signatureUpdateOverdue
    *
    * @return WindowsProtectionState
    */
    public function setSignatureUpdateOverdue($val)
    {
        $this->_propDict["signatureUpdateOverdue"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the signatureVersion
    *
    * @return string|null The signatureVersion
    */
    public function getSignatureVersion()
    {
        if (array_key_exists("signatureVersion", $this->_propDict)) {
            return $this->_propDict["signatureVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signatureVersion
    *
    * @param string $val The signatureVersion
    *
    * @return WindowsProtectionState
    */
    public function setSignatureVersion($val)
    {
        $this->_propDict["signatureVersion"] = $val;
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
    * @return WindowsProtectionState
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
    * @return WindowsProtectionState
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
    
}
