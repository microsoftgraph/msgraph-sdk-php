<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10CompliancePolicy File
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
* Windows10CompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Windows10CompliancePolicy extends DeviceCompliancePolicy
{
    /**
    * Gets the passwordRequired
    *
    * @return bool The passwordRequired
    */
    public function getPasswordRequired()
    {
        if (array_key_exists("passwordRequired", $this->_propDict)) {
            return $this->_propDict["passwordRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordRequired
    *
    * @param bool $val The passwordRequired
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockSimple
    *
    * @return bool The passwordBlockSimple
    */
    public function getPasswordBlockSimple()
    {
        if (array_key_exists("passwordBlockSimple", $this->_propDict)) {
            return $this->_propDict["passwordBlockSimple"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockSimple
    *
    * @param bool $val The passwordBlockSimple
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordBlockSimple($val)
    {
        $this->_propDict["passwordBlockSimple"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredToUnlockFromIdle
    *
    * @return bool The passwordRequiredToUnlockFromIdle
    */
    public function getPasswordRequiredToUnlockFromIdle()
    {
        if (array_key_exists("passwordRequiredToUnlockFromIdle", $this->_propDict)) {
            return $this->_propDict["passwordRequiredToUnlockFromIdle"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordRequiredToUnlockFromIdle
    *
    * @param bool $val The passwordRequiredToUnlockFromIdle
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordRequiredToUnlockFromIdle($val)
    {
        $this->_propDict["passwordRequiredToUnlockFromIdle"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinutesOfInactivityBeforeLock
    *
    * @return int The passwordMinutesOfInactivityBeforeLock
    */
    public function getPasswordMinutesOfInactivityBeforeLock()
    {
        if (array_key_exists("passwordMinutesOfInactivityBeforeLock", $this->_propDict)) {
            return $this->_propDict["passwordMinutesOfInactivityBeforeLock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinutesOfInactivityBeforeLock
    *
    * @param int $val The passwordMinutesOfInactivityBeforeLock
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordMinutesOfInactivityBeforeLock($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeLock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordExpirationDays
    *
    * @return int The passwordExpirationDays
    */
    public function getPasswordExpirationDays()
    {
        if (array_key_exists("passwordExpirationDays", $this->_propDict)) {
            return $this->_propDict["passwordExpirationDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordExpirationDays
    *
    * @param int $val The passwordExpirationDays
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLength
    *
    * @return int The passwordMinimumLength
    */
    public function getPasswordMinimumLength()
    {
        if (array_key_exists("passwordMinimumLength", $this->_propDict)) {
            return $this->_propDict["passwordMinimumLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumLength
    *
    * @param int $val The passwordMinimumLength
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumCharacterSetCount
    *
    * @return int The passwordMinimumCharacterSetCount
    */
    public function getPasswordMinimumCharacterSetCount()
    {
        if (array_key_exists("passwordMinimumCharacterSetCount", $this->_propDict)) {
            return $this->_propDict["passwordMinimumCharacterSetCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumCharacterSetCount
    *
    * @param int $val The passwordMinimumCharacterSetCount
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordMinimumCharacterSetCount($val)
    {
        $this->_propDict["passwordMinimumCharacterSetCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredType
    *
    * @return RequiredPasswordType The passwordRequiredType
    */
    public function getPasswordRequiredType()
    {
        if (array_key_exists("passwordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequiredType"], "Microsoft\Graph\Beta\Model\RequiredPasswordType")) {
                return $this->_propDict["passwordRequiredType"];
            } else {
                $this->_propDict["passwordRequiredType"] = new RequiredPasswordType($this->_propDict["passwordRequiredType"]);
                return $this->_propDict["passwordRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passwordRequiredType
    *
    * @param RequiredPasswordType $val The passwordRequiredType
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordPreviousPasswordBlockCount
    *
    * @return int The passwordPreviousPasswordBlockCount
    */
    public function getPasswordPreviousPasswordBlockCount()
    {
        if (array_key_exists("passwordPreviousPasswordBlockCount", $this->_propDict)) {
            return $this->_propDict["passwordPreviousPasswordBlockCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordPreviousPasswordBlockCount
    *
    * @param int $val The passwordPreviousPasswordBlockCount
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the requireHealthyDeviceReport
    *
    * @return bool The requireHealthyDeviceReport
    */
    public function getRequireHealthyDeviceReport()
    {
        if (array_key_exists("requireHealthyDeviceReport", $this->_propDict)) {
            return $this->_propDict["requireHealthyDeviceReport"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requireHealthyDeviceReport
    *
    * @param bool $val The requireHealthyDeviceReport
    *
    * @return Windows10CompliancePolicy
    */
    public function setRequireHealthyDeviceReport($val)
    {
        $this->_propDict["requireHealthyDeviceReport"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the osMinimumVersion
    *
    * @return string The osMinimumVersion
    */
    public function getOsMinimumVersion()
    {
        if (array_key_exists("osMinimumVersion", $this->_propDict)) {
            return $this->_propDict["osMinimumVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osMinimumVersion
    *
    * @param string $val The osMinimumVersion
    *
    * @return Windows10CompliancePolicy
    */
    public function setOsMinimumVersion($val)
    {
        $this->_propDict["osMinimumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the osMaximumVersion
    *
    * @return string The osMaximumVersion
    */
    public function getOsMaximumVersion()
    {
        if (array_key_exists("osMaximumVersion", $this->_propDict)) {
            return $this->_propDict["osMaximumVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osMaximumVersion
    *
    * @param string $val The osMaximumVersion
    *
    * @return Windows10CompliancePolicy
    */
    public function setOsMaximumVersion($val)
    {
        $this->_propDict["osMaximumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the mobileOsMinimumVersion
    *
    * @return string The mobileOsMinimumVersion
    */
    public function getMobileOsMinimumVersion()
    {
        if (array_key_exists("mobileOsMinimumVersion", $this->_propDict)) {
            return $this->_propDict["mobileOsMinimumVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mobileOsMinimumVersion
    *
    * @param string $val The mobileOsMinimumVersion
    *
    * @return Windows10CompliancePolicy
    */
    public function setMobileOsMinimumVersion($val)
    {
        $this->_propDict["mobileOsMinimumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the mobileOsMaximumVersion
    *
    * @return string The mobileOsMaximumVersion
    */
    public function getMobileOsMaximumVersion()
    {
        if (array_key_exists("mobileOsMaximumVersion", $this->_propDict)) {
            return $this->_propDict["mobileOsMaximumVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mobileOsMaximumVersion
    *
    * @param string $val The mobileOsMaximumVersion
    *
    * @return Windows10CompliancePolicy
    */
    public function setMobileOsMaximumVersion($val)
    {
        $this->_propDict["mobileOsMaximumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the earlyLaunchAntiMalwareDriverEnabled
    *
    * @return bool The earlyLaunchAntiMalwareDriverEnabled
    */
    public function getEarlyLaunchAntiMalwareDriverEnabled()
    {
        if (array_key_exists("earlyLaunchAntiMalwareDriverEnabled", $this->_propDict)) {
            return $this->_propDict["earlyLaunchAntiMalwareDriverEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the earlyLaunchAntiMalwareDriverEnabled
    *
    * @param bool $val The earlyLaunchAntiMalwareDriverEnabled
    *
    * @return Windows10CompliancePolicy
    */
    public function setEarlyLaunchAntiMalwareDriverEnabled($val)
    {
        $this->_propDict["earlyLaunchAntiMalwareDriverEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerEnabled
    *
    * @return bool The bitLockerEnabled
    */
    public function getBitLockerEnabled()
    {
        if (array_key_exists("bitLockerEnabled", $this->_propDict)) {
            return $this->_propDict["bitLockerEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bitLockerEnabled
    *
    * @param bool $val The bitLockerEnabled
    *
    * @return Windows10CompliancePolicy
    */
    public function setBitLockerEnabled($val)
    {
        $this->_propDict["bitLockerEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the secureBootEnabled
    *
    * @return bool The secureBootEnabled
    */
    public function getSecureBootEnabled()
    {
        if (array_key_exists("secureBootEnabled", $this->_propDict)) {
            return $this->_propDict["secureBootEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the secureBootEnabled
    *
    * @param bool $val The secureBootEnabled
    *
    * @return Windows10CompliancePolicy
    */
    public function setSecureBootEnabled($val)
    {
        $this->_propDict["secureBootEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the codeIntegrityEnabled
    *
    * @return bool The codeIntegrityEnabled
    */
    public function getCodeIntegrityEnabled()
    {
        if (array_key_exists("codeIntegrityEnabled", $this->_propDict)) {
            return $this->_propDict["codeIntegrityEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the codeIntegrityEnabled
    *
    * @param bool $val The codeIntegrityEnabled
    *
    * @return Windows10CompliancePolicy
    */
    public function setCodeIntegrityEnabled($val)
    {
        $this->_propDict["codeIntegrityEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageRequireEncryption
    *
    * @return bool The storageRequireEncryption
    */
    public function getStorageRequireEncryption()
    {
        if (array_key_exists("storageRequireEncryption", $this->_propDict)) {
            return $this->_propDict["storageRequireEncryption"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageRequireEncryption
    *
    * @param bool $val The storageRequireEncryption
    *
    * @return Windows10CompliancePolicy
    */
    public function setStorageRequireEncryption($val)
    {
        $this->_propDict["storageRequireEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the activeFirewallRequired
    *
    * @return bool The activeFirewallRequired
    */
    public function getActiveFirewallRequired()
    {
        if (array_key_exists("activeFirewallRequired", $this->_propDict)) {
            return $this->_propDict["activeFirewallRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activeFirewallRequired
    *
    * @param bool $val The activeFirewallRequired
    *
    * @return Windows10CompliancePolicy
    */
    public function setActiveFirewallRequired($val)
    {
        $this->_propDict["activeFirewallRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the uacRequired
    *
    * @return bool The uacRequired
    */
    public function getUacRequired()
    {
        if (array_key_exists("uacRequired", $this->_propDict)) {
            return $this->_propDict["uacRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uacRequired
    *
    * @param bool $val The uacRequired
    *
    * @return Windows10CompliancePolicy
    */
    public function setUacRequired($val)
    {
        $this->_propDict["uacRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderEnabled
    *
    * @return bool The defenderEnabled
    */
    public function getDefenderEnabled()
    {
        if (array_key_exists("defenderEnabled", $this->_propDict)) {
            return $this->_propDict["defenderEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderEnabled
    *
    * @param bool $val The defenderEnabled
    *
    * @return Windows10CompliancePolicy
    */
    public function setDefenderEnabled($val)
    {
        $this->_propDict["defenderEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderVersion
    *
    * @return string The defenderVersion
    */
    public function getDefenderVersion()
    {
        if (array_key_exists("defenderVersion", $this->_propDict)) {
            return $this->_propDict["defenderVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderVersion
    *
    * @param string $val The defenderVersion
    *
    * @return Windows10CompliancePolicy
    */
    public function setDefenderVersion($val)
    {
        $this->_propDict["defenderVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the signatureOutOfDate
    *
    * @return bool The signatureOutOfDate
    */
    public function getSignatureOutOfDate()
    {
        if (array_key_exists("signatureOutOfDate", $this->_propDict)) {
            return $this->_propDict["signatureOutOfDate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signatureOutOfDate
    *
    * @param bool $val The signatureOutOfDate
    *
    * @return Windows10CompliancePolicy
    */
    public function setSignatureOutOfDate($val)
    {
        $this->_propDict["signatureOutOfDate"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the rtpEnabled
    *
    * @return bool The rtpEnabled
    */
    public function getRtpEnabled()
    {
        if (array_key_exists("rtpEnabled", $this->_propDict)) {
            return $this->_propDict["rtpEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rtpEnabled
    *
    * @param bool $val The rtpEnabled
    *
    * @return Windows10CompliancePolicy
    */
    public function setRtpEnabled($val)
    {
        $this->_propDict["rtpEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the validOperatingSystemBuildRanges
     *
     * @return array The validOperatingSystemBuildRanges
     */
    public function getValidOperatingSystemBuildRanges()
    {
        if (array_key_exists("validOperatingSystemBuildRanges", $this->_propDict)) {
           return $this->_propDict["validOperatingSystemBuildRanges"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the validOperatingSystemBuildRanges
    *
    * @param OperatingSystemVersionRange $val The validOperatingSystemBuildRanges
    *
    * @return Windows10CompliancePolicy
    */
    public function setValidOperatingSystemBuildRanges($val)
    {
		$this->_propDict["validOperatingSystemBuildRanges"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceThreatProtectionEnabled
    *
    * @return bool The deviceThreatProtectionEnabled
    */
    public function getDeviceThreatProtectionEnabled()
    {
        if (array_key_exists("deviceThreatProtectionEnabled", $this->_propDict)) {
            return $this->_propDict["deviceThreatProtectionEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceThreatProtectionEnabled
    *
    * @param bool $val The deviceThreatProtectionEnabled
    *
    * @return Windows10CompliancePolicy
    */
    public function setDeviceThreatProtectionEnabled($val)
    {
        $this->_propDict["deviceThreatProtectionEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceThreatProtectionRequiredSecurityLevel
    *
    * @return DeviceThreatProtectionLevel The deviceThreatProtectionRequiredSecurityLevel
    */
    public function getDeviceThreatProtectionRequiredSecurityLevel()
    {
        if (array_key_exists("deviceThreatProtectionRequiredSecurityLevel", $this->_propDict)) {
            if (is_a($this->_propDict["deviceThreatProtectionRequiredSecurityLevel"], "Microsoft\Graph\Beta\Model\DeviceThreatProtectionLevel")) {
                return $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"];
            } else {
                $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"] = new DeviceThreatProtectionLevel($this->_propDict["deviceThreatProtectionRequiredSecurityLevel"]);
                return $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceThreatProtectionRequiredSecurityLevel
    *
    * @param DeviceThreatProtectionLevel $val The deviceThreatProtectionRequiredSecurityLevel
    *
    * @return Windows10CompliancePolicy
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel($val)
    {
        $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"] = $val;
        return $this;
    }
    
}