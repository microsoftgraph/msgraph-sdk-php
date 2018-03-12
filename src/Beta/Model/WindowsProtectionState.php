<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsProtectionState File
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
* WindowsProtectionState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsProtectionState extends Entity
{
    /**
    * Gets the malwareProtectionEnabled
    *
    * @return bool The malwareProtectionEnabled
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
    * Gets the deviceState
    *
    * @return WindowsDeviceHealthState The deviceState
    */
    public function getDeviceState()
    {
        if (array_key_exists("deviceState", $this->_propDict)) {
            if (is_a($this->_propDict["deviceState"], "Microsoft\Graph\Model\WindowsDeviceHealthState")) {
                return $this->_propDict["deviceState"];
            } else {
                $this->_propDict["deviceState"] = new WindowsDeviceHealthState($this->_propDict["deviceState"]);
                return $this->_propDict["deviceState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceState
    *
    * @param WindowsDeviceHealthState $val The deviceState
    *
    * @return WindowsProtectionState
    */
    public function setDeviceState($val)
    {
        $this->_propDict["deviceState"] = $val;
        return $this;
    }
    
    /**
    * Gets the realTimeProtectionEnabled
    *
    * @return bool The realTimeProtectionEnabled
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
    * Gets the networkInspectionSystemEnabled
    *
    * @return bool The networkInspectionSystemEnabled
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
    * @return bool The quickScanOverdue
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
    * Gets the fullScanOverdue
    *
    * @return bool The fullScanOverdue
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
    * Gets the signatureUpdateOverdue
    *
    * @return bool The signatureUpdateOverdue
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
    * Gets the rebootRequired
    *
    * @return bool The rebootRequired
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
    * Gets the fullScanRequired
    *
    * @return bool The fullScanRequired
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
    * Gets the engineVersion
    *
    * @return string The engineVersion
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
    * Gets the signatureVersion
    *
    * @return string The signatureVersion
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
    * Gets the antiMalwareVersion
    *
    * @return string The antiMalwareVersion
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
    * Gets the lastQuickScanDateTime
    *
    * @return \DateTime The lastQuickScanDateTime
    */
    public function getLastQuickScanDateTime()
    {
        if (array_key_exists("lastQuickScanDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastQuickScanDateTime"], "\DateTime")) {
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
    * Gets the lastFullScanDateTime
    *
    * @return \DateTime The lastFullScanDateTime
    */
    public function getLastFullScanDateTime()
    {
        if (array_key_exists("lastFullScanDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastFullScanDateTime"], "\DateTime")) {
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
    * Gets the lastQuickScanSignatureVersion
    *
    * @return string The lastQuickScanSignatureVersion
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
    * Gets the lastFullScanSignatureVersion
    *
    * @return string The lastFullScanSignatureVersion
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
    * Gets the lastReportedDateTime
    *
    * @return \DateTime The lastReportedDateTime
    */
    public function getLastReportedDateTime()
    {
        if (array_key_exists("lastReportedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastReportedDateTime"], "\DateTime")) {
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
     * Gets the detectedMalwareState
     *
     * @return array The detectedMalwareState
     */
    public function getDetectedMalwareState()
    {
        if (array_key_exists("detectedMalwareState", $this->_propDict)) {
           return $this->_propDict["detectedMalwareState"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the detectedMalwareState
    *
    * @param WindowsDeviceMalwareState $val The detectedMalwareState
    *
    * @return WindowsProtectionState
    */
    public function setDetectedMalwareState($val)
    {
		$this->_propDict["detectedMalwareState"] = $val;
        return $this;
    }
    
}