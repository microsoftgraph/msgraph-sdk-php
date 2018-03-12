<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkCompliancePolicy File
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
* AndroidForWorkCompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AndroidForWorkCompliancePolicy extends DeviceCompliancePolicy
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
    * @return AndroidForWorkCompliancePolicy
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
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
    * @return AndroidForWorkCompliancePolicy
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredType
    *
    * @return AndroidRequiredPasswordType The passwordRequiredType
    */
    public function getPasswordRequiredType()
    {
        if (array_key_exists("passwordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequiredType"], "Microsoft\Graph\Model\AndroidRequiredPasswordType")) {
                return $this->_propDict["passwordRequiredType"];
            } else {
                $this->_propDict["passwordRequiredType"] = new AndroidRequiredPasswordType($this->_propDict["passwordRequiredType"]);
                return $this->_propDict["passwordRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passwordRequiredType
    *
    * @param AndroidRequiredPasswordType $val The passwordRequiredType
    *
    * @return AndroidForWorkCompliancePolicy
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
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
    * @return AndroidForWorkCompliancePolicy
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
    * @return AndroidForWorkCompliancePolicy
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = intval($val);
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
    * @return AndroidForWorkCompliancePolicy
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the securityPreventInstallAppsFromUnknownSources
    *
    * @return bool The securityPreventInstallAppsFromUnknownSources
    */
    public function getSecurityPreventInstallAppsFromUnknownSources()
    {
        if (array_key_exists("securityPreventInstallAppsFromUnknownSources", $this->_propDict)) {
            return $this->_propDict["securityPreventInstallAppsFromUnknownSources"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityPreventInstallAppsFromUnknownSources
    *
    * @param bool $val The securityPreventInstallAppsFromUnknownSources
    *
    * @return AndroidForWorkCompliancePolicy
    */
    public function setSecurityPreventInstallAppsFromUnknownSources($val)
    {
        $this->_propDict["securityPreventInstallAppsFromUnknownSources"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityDisableUsbDebugging
    *
    * @return bool The securityDisableUsbDebugging
    */
    public function getSecurityDisableUsbDebugging()
    {
        if (array_key_exists("securityDisableUsbDebugging", $this->_propDict)) {
            return $this->_propDict["securityDisableUsbDebugging"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityDisableUsbDebugging
    *
    * @param bool $val The securityDisableUsbDebugging
    *
    * @return AndroidForWorkCompliancePolicy
    */
    public function setSecurityDisableUsbDebugging($val)
    {
        $this->_propDict["securityDisableUsbDebugging"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireVerifyApps
    *
    * @return bool The securityRequireVerifyApps
    */
    public function getSecurityRequireVerifyApps()
    {
        if (array_key_exists("securityRequireVerifyApps", $this->_propDict)) {
            return $this->_propDict["securityRequireVerifyApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityRequireVerifyApps
    *
    * @param bool $val The securityRequireVerifyApps
    *
    * @return AndroidForWorkCompliancePolicy
    */
    public function setSecurityRequireVerifyApps($val)
    {
        $this->_propDict["securityRequireVerifyApps"] = boolval($val);
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
    * @return AndroidForWorkCompliancePolicy
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
            if (is_a($this->_propDict["deviceThreatProtectionRequiredSecurityLevel"], "Microsoft\Graph\Model\DeviceThreatProtectionLevel")) {
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
    * @return AndroidForWorkCompliancePolicy
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel($val)
    {
        $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the securityBlockJailbrokenDevices
    *
    * @return bool The securityBlockJailbrokenDevices
    */
    public function getSecurityBlockJailbrokenDevices()
    {
        if (array_key_exists("securityBlockJailbrokenDevices", $this->_propDict)) {
            return $this->_propDict["securityBlockJailbrokenDevices"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityBlockJailbrokenDevices
    *
    * @param bool $val The securityBlockJailbrokenDevices
    *
    * @return AndroidForWorkCompliancePolicy
    */
    public function setSecurityBlockJailbrokenDevices($val)
    {
        $this->_propDict["securityBlockJailbrokenDevices"] = boolval($val);
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
    * @return AndroidForWorkCompliancePolicy
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
    * @return AndroidForWorkCompliancePolicy
    */
    public function setOsMaximumVersion($val)
    {
        $this->_propDict["osMaximumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minAndroidSecurityPatchLevel
    *
    * @return string The minAndroidSecurityPatchLevel
    */
    public function getMinAndroidSecurityPatchLevel()
    {
        if (array_key_exists("minAndroidSecurityPatchLevel", $this->_propDict)) {
            return $this->_propDict["minAndroidSecurityPatchLevel"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minAndroidSecurityPatchLevel
    *
    * @param string $val The minAndroidSecurityPatchLevel
    *
    * @return AndroidForWorkCompliancePolicy
    */
    public function setMinAndroidSecurityPatchLevel($val)
    {
        $this->_propDict["minAndroidSecurityPatchLevel"] = $val;
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
    * @return AndroidForWorkCompliancePolicy
    */
    public function setStorageRequireEncryption($val)
    {
        $this->_propDict["storageRequireEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireSafetyNetAttestationBasicIntegrity
    *
    * @return bool The securityRequireSafetyNetAttestationBasicIntegrity
    */
    public function getSecurityRequireSafetyNetAttestationBasicIntegrity()
    {
        if (array_key_exists("securityRequireSafetyNetAttestationBasicIntegrity", $this->_propDict)) {
            return $this->_propDict["securityRequireSafetyNetAttestationBasicIntegrity"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityRequireSafetyNetAttestationBasicIntegrity
    *
    * @param bool $val The securityRequireSafetyNetAttestationBasicIntegrity
    *
    * @return AndroidForWorkCompliancePolicy
    */
    public function setSecurityRequireSafetyNetAttestationBasicIntegrity($val)
    {
        $this->_propDict["securityRequireSafetyNetAttestationBasicIntegrity"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireSafetyNetAttestationCertifiedDevice
    *
    * @return bool The securityRequireSafetyNetAttestationCertifiedDevice
    */
    public function getSecurityRequireSafetyNetAttestationCertifiedDevice()
    {
        if (array_key_exists("securityRequireSafetyNetAttestationCertifiedDevice", $this->_propDict)) {
            return $this->_propDict["securityRequireSafetyNetAttestationCertifiedDevice"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityRequireSafetyNetAttestationCertifiedDevice
    *
    * @param bool $val The securityRequireSafetyNetAttestationCertifiedDevice
    *
    * @return AndroidForWorkCompliancePolicy
    */
    public function setSecurityRequireSafetyNetAttestationCertifiedDevice($val)
    {
        $this->_propDict["securityRequireSafetyNetAttestationCertifiedDevice"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireGooglePlayServices
    *
    * @return bool The securityRequireGooglePlayServices
    */
    public function getSecurityRequireGooglePlayServices()
    {
        if (array_key_exists("securityRequireGooglePlayServices", $this->_propDict)) {
            return $this->_propDict["securityRequireGooglePlayServices"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityRequireGooglePlayServices
    *
    * @param bool $val The securityRequireGooglePlayServices
    *
    * @return AndroidForWorkCompliancePolicy
    */
    public function setSecurityRequireGooglePlayServices($val)
    {
        $this->_propDict["securityRequireGooglePlayServices"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireUpToDateSecurityProviders
    *
    * @return bool The securityRequireUpToDateSecurityProviders
    */
    public function getSecurityRequireUpToDateSecurityProviders()
    {
        if (array_key_exists("securityRequireUpToDateSecurityProviders", $this->_propDict)) {
            return $this->_propDict["securityRequireUpToDateSecurityProviders"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityRequireUpToDateSecurityProviders
    *
    * @param bool $val The securityRequireUpToDateSecurityProviders
    *
    * @return AndroidForWorkCompliancePolicy
    */
    public function setSecurityRequireUpToDateSecurityProviders($val)
    {
        $this->_propDict["securityRequireUpToDateSecurityProviders"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireCompanyPortalAppIntegrity
    *
    * @return bool The securityRequireCompanyPortalAppIntegrity
    */
    public function getSecurityRequireCompanyPortalAppIntegrity()
    {
        if (array_key_exists("securityRequireCompanyPortalAppIntegrity", $this->_propDict)) {
            return $this->_propDict["securityRequireCompanyPortalAppIntegrity"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityRequireCompanyPortalAppIntegrity
    *
    * @param bool $val The securityRequireCompanyPortalAppIntegrity
    *
    * @return AndroidForWorkCompliancePolicy
    */
    public function setSecurityRequireCompanyPortalAppIntegrity($val)
    {
        $this->_propDict["securityRequireCompanyPortalAppIntegrity"] = boolval($val);
        return $this;
    }
    
}