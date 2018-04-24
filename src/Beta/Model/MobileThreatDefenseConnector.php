<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileThreatDefenseConnector File
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
* MobileThreatDefenseConnector class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MobileThreatDefenseConnector extends Entity
{
    /**
    * Gets the lastHeartbeatDateTime
    *
    * @return \DateTime The lastHeartbeatDateTime
    */
    public function getLastHeartbeatDateTime()
    {
        if (array_key_exists("lastHeartbeatDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastHeartbeatDateTime"], "\DateTime")) {
                return $this->_propDict["lastHeartbeatDateTime"];
            } else {
                $this->_propDict["lastHeartbeatDateTime"] = new \DateTime($this->_propDict["lastHeartbeatDateTime"]);
                return $this->_propDict["lastHeartbeatDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastHeartbeatDateTime
    *
    * @param \DateTime $val The lastHeartbeatDateTime
    *
    * @return MobileThreatDefenseConnector
    */
    public function setLastHeartbeatDateTime($val)
    {
        $this->_propDict["lastHeartbeatDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the partnerState
    *
    * @return MobileThreatPartnerTenantState The partnerState
    */
    public function getPartnerState()
    {
        if (array_key_exists("partnerState", $this->_propDict)) {
            if (is_a($this->_propDict["partnerState"], "Microsoft\Graph\Beta\Model\MobileThreatPartnerTenantState")) {
                return $this->_propDict["partnerState"];
            } else {
                $this->_propDict["partnerState"] = new MobileThreatPartnerTenantState($this->_propDict["partnerState"]);
                return $this->_propDict["partnerState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the partnerState
    *
    * @param MobileThreatPartnerTenantState $val The partnerState
    *
    * @return MobileThreatDefenseConnector
    */
    public function setPartnerState($val)
    {
        $this->_propDict["partnerState"] = $val;
        return $this;
    }
    
    /**
    * Gets the androidEnabled
    *
    * @return bool The androidEnabled
    */
    public function getAndroidEnabled()
    {
        if (array_key_exists("androidEnabled", $this->_propDict)) {
            return $this->_propDict["androidEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the androidEnabled
    *
    * @param bool $val The androidEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setAndroidEnabled($val)
    {
        $this->_propDict["androidEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iosEnabled
    *
    * @return bool The iosEnabled
    */
    public function getIosEnabled()
    {
        if (array_key_exists("iosEnabled", $this->_propDict)) {
            return $this->_propDict["iosEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iosEnabled
    *
    * @param bool $val The iosEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setIosEnabled($val)
    {
        $this->_propDict["iosEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsEnabled
    *
    * @return bool The windowsEnabled
    */
    public function getWindowsEnabled()
    {
        if (array_key_exists("windowsEnabled", $this->_propDict)) {
            return $this->_propDict["windowsEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsEnabled
    *
    * @param bool $val The windowsEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setWindowsEnabled($val)
    {
        $this->_propDict["windowsEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the macEnabled
    *
    * @return bool The macEnabled
    */
    public function getMacEnabled()
    {
        if (array_key_exists("macEnabled", $this->_propDict)) {
            return $this->_propDict["macEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the macEnabled
    *
    * @param bool $val The macEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setMacEnabled($val)
    {
        $this->_propDict["macEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the androidDeviceBlockedOnMissingPartnerData
    *
    * @return bool The androidDeviceBlockedOnMissingPartnerData
    */
    public function getAndroidDeviceBlockedOnMissingPartnerData()
    {
        if (array_key_exists("androidDeviceBlockedOnMissingPartnerData", $this->_propDict)) {
            return $this->_propDict["androidDeviceBlockedOnMissingPartnerData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the androidDeviceBlockedOnMissingPartnerData
    *
    * @param bool $val The androidDeviceBlockedOnMissingPartnerData
    *
    * @return MobileThreatDefenseConnector
    */
    public function setAndroidDeviceBlockedOnMissingPartnerData($val)
    {
        $this->_propDict["androidDeviceBlockedOnMissingPartnerData"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iosDeviceBlockedOnMissingPartnerData
    *
    * @return bool The iosDeviceBlockedOnMissingPartnerData
    */
    public function getIosDeviceBlockedOnMissingPartnerData()
    {
        if (array_key_exists("iosDeviceBlockedOnMissingPartnerData", $this->_propDict)) {
            return $this->_propDict["iosDeviceBlockedOnMissingPartnerData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iosDeviceBlockedOnMissingPartnerData
    *
    * @param bool $val The iosDeviceBlockedOnMissingPartnerData
    *
    * @return MobileThreatDefenseConnector
    */
    public function setIosDeviceBlockedOnMissingPartnerData($val)
    {
        $this->_propDict["iosDeviceBlockedOnMissingPartnerData"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsDeviceBlockedOnMissingPartnerData
    *
    * @return bool The windowsDeviceBlockedOnMissingPartnerData
    */
    public function getWindowsDeviceBlockedOnMissingPartnerData()
    {
        if (array_key_exists("windowsDeviceBlockedOnMissingPartnerData", $this->_propDict)) {
            return $this->_propDict["windowsDeviceBlockedOnMissingPartnerData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsDeviceBlockedOnMissingPartnerData
    *
    * @param bool $val The windowsDeviceBlockedOnMissingPartnerData
    *
    * @return MobileThreatDefenseConnector
    */
    public function setWindowsDeviceBlockedOnMissingPartnerData($val)
    {
        $this->_propDict["windowsDeviceBlockedOnMissingPartnerData"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the macDeviceBlockedOnMissingPartnerData
    *
    * @return bool The macDeviceBlockedOnMissingPartnerData
    */
    public function getMacDeviceBlockedOnMissingPartnerData()
    {
        if (array_key_exists("macDeviceBlockedOnMissingPartnerData", $this->_propDict)) {
            return $this->_propDict["macDeviceBlockedOnMissingPartnerData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the macDeviceBlockedOnMissingPartnerData
    *
    * @param bool $val The macDeviceBlockedOnMissingPartnerData
    *
    * @return MobileThreatDefenseConnector
    */
    public function setMacDeviceBlockedOnMissingPartnerData($val)
    {
        $this->_propDict["macDeviceBlockedOnMissingPartnerData"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the partnerUnsupportedOsVersionBlocked
    *
    * @return bool The partnerUnsupportedOsVersionBlocked
    */
    public function getPartnerUnsupportedOsVersionBlocked()
    {
        if (array_key_exists("partnerUnsupportedOsVersionBlocked", $this->_propDict)) {
            return $this->_propDict["partnerUnsupportedOsVersionBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the partnerUnsupportedOsVersionBlocked
    *
    * @param bool $val The partnerUnsupportedOsVersionBlocked
    *
    * @return MobileThreatDefenseConnector
    */
    public function setPartnerUnsupportedOsVersionBlocked($val)
    {
        $this->_propDict["partnerUnsupportedOsVersionBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the partnerUnresponsivenessThresholdInDays
    *
    * @return int The partnerUnresponsivenessThresholdInDays
    */
    public function getPartnerUnresponsivenessThresholdInDays()
    {
        if (array_key_exists("partnerUnresponsivenessThresholdInDays", $this->_propDict)) {
            return $this->_propDict["partnerUnresponsivenessThresholdInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the partnerUnresponsivenessThresholdInDays
    *
    * @param int $val The partnerUnresponsivenessThresholdInDays
    *
    * @return MobileThreatDefenseConnector
    */
    public function setPartnerUnresponsivenessThresholdInDays($val)
    {
        $this->_propDict["partnerUnresponsivenessThresholdInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the allowPartnerToCollectIOSApplicationMetadata
    *
    * @return bool The allowPartnerToCollectIOSApplicationMetadata
    */
    public function getAllowPartnerToCollectIOSApplicationMetadata()
    {
        if (array_key_exists("allowPartnerToCollectIOSApplicationMetadata", $this->_propDict)) {
            return $this->_propDict["allowPartnerToCollectIOSApplicationMetadata"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowPartnerToCollectIOSApplicationMetadata
    *
    * @param bool $val The allowPartnerToCollectIOSApplicationMetadata
    *
    * @return MobileThreatDefenseConnector
    */
    public function setAllowPartnerToCollectIOSApplicationMetadata($val)
    {
        $this->_propDict["allowPartnerToCollectIOSApplicationMetadata"] = boolval($val);
        return $this;
    }
    
}