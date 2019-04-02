<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidCompliancePolicy File
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
* AndroidCompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidCompliancePolicy extends DeviceCompliancePolicy
{
    /**
    * Gets the passwordRequired
    * Require a password to unlock device.
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
    * Require a password to unlock device.
    *
    * @param bool $val The passwordRequired
    *
    * @return AndroidCompliancePolicy
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLength
    * Minimum password length. Valid values 4 to 16
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
    * Minimum password length. Valid values 4 to 16
    *
    * @param int $val The passwordMinimumLength
    *
    * @return AndroidCompliancePolicy
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredType
    * Type of characters in password. Possible values are: deviceDefault, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, numeric, numericComplex, any.
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
    * Type of characters in password. Possible values are: deviceDefault, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, numeric, numericComplex, any.
    *
    * @param AndroidRequiredPasswordType $val The passwordRequiredType
    *
    * @return AndroidCompliancePolicy
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordMinutesOfInactivityBeforeLock
    * Minutes of inactivity before a password is required.
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
    * Minutes of inactivity before a password is required.
    *
    * @param int $val The passwordMinutesOfInactivityBeforeLock
    *
    * @return AndroidCompliancePolicy
    */
    public function setPasswordMinutesOfInactivityBeforeLock($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeLock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordExpirationDays
    * Number of days before the password expires. Valid values 1 to 365
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
    * Number of days before the password expires. Valid values 1 to 365
    *
    * @param int $val The passwordExpirationDays
    *
    * @return AndroidCompliancePolicy
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordPreviousPasswordBlockCount
    * Number of previous passwords to block. Valid values 1 to 24
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
    * Number of previous passwords to block. Valid values 1 to 24
    *
    * @param int $val The passwordPreviousPasswordBlockCount
    *
    * @return AndroidCompliancePolicy
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the securityPreventInstallAppsFromUnknownSources
    * Require that devices disallow installation of apps from unknown sources.
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
    * Require that devices disallow installation of apps from unknown sources.
    *
    * @param bool $val The securityPreventInstallAppsFromUnknownSources
    *
    * @return AndroidCompliancePolicy
    */
    public function setSecurityPreventInstallAppsFromUnknownSources($val)
    {
        $this->_propDict["securityPreventInstallAppsFromUnknownSources"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityDisableUsbDebugging
    * Disable USB debugging on Android devices.
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
    * Disable USB debugging on Android devices.
    *
    * @param bool $val The securityDisableUsbDebugging
    *
    * @return AndroidCompliancePolicy
    */
    public function setSecurityDisableUsbDebugging($val)
    {
        $this->_propDict["securityDisableUsbDebugging"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireVerifyApps
    * Require the Android Verify apps feature is turned on.
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
    * Require the Android Verify apps feature is turned on.
    *
    * @param bool $val The securityRequireVerifyApps
    *
    * @return AndroidCompliancePolicy
    */
    public function setSecurityRequireVerifyApps($val)
    {
        $this->_propDict["securityRequireVerifyApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceThreatProtectionEnabled
    * Require that devices have enabled device threat protection.
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
    * Require that devices have enabled device threat protection.
    *
    * @param bool $val The deviceThreatProtectionEnabled
    *
    * @return AndroidCompliancePolicy
    */
    public function setDeviceThreatProtectionEnabled($val)
    {
        $this->_propDict["deviceThreatProtectionEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceThreatProtectionRequiredSecurityLevel
    * Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
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
    * Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
    *
    * @param DeviceThreatProtectionLevel $val The deviceThreatProtectionRequiredSecurityLevel
    *
    * @return AndroidCompliancePolicy
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel($val)
    {
        $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the securityBlockJailbrokenDevices
    * Devices must not be jailbroken or rooted.
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
    * Devices must not be jailbroken or rooted.
    *
    * @param bool $val The securityBlockJailbrokenDevices
    *
    * @return AndroidCompliancePolicy
    */
    public function setSecurityBlockJailbrokenDevices($val)
    {
        $this->_propDict["securityBlockJailbrokenDevices"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the osMinimumVersion
    * Minimum Android version.
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
    * Minimum Android version.
    *
    * @param string $val The osMinimumVersion
    *
    * @return AndroidCompliancePolicy
    */
    public function setOsMinimumVersion($val)
    {
        $this->_propDict["osMinimumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the osMaximumVersion
    * Maximum Android version.
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
    * Maximum Android version.
    *
    * @param string $val The osMaximumVersion
    *
    * @return AndroidCompliancePolicy
    */
    public function setOsMaximumVersion($val)
    {
        $this->_propDict["osMaximumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minAndroidSecurityPatchLevel
    * Minimum Android security patch level.
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
    * Minimum Android security patch level.
    *
    * @param string $val The minAndroidSecurityPatchLevel
    *
    * @return AndroidCompliancePolicy
    */
    public function setMinAndroidSecurityPatchLevel($val)
    {
        $this->_propDict["minAndroidSecurityPatchLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the storageRequireEncryption
    * Require encryption on Android devices.
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
    * Require encryption on Android devices.
    *
    * @param bool $val The storageRequireEncryption
    *
    * @return AndroidCompliancePolicy
    */
    public function setStorageRequireEncryption($val)
    {
        $this->_propDict["storageRequireEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireSafetyNetAttestationBasicIntegrity
    * Require the device to pass the SafetyNet basic integrity check.
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
    * Require the device to pass the SafetyNet basic integrity check.
    *
    * @param bool $val The securityRequireSafetyNetAttestationBasicIntegrity
    *
    * @return AndroidCompliancePolicy
    */
    public function setSecurityRequireSafetyNetAttestationBasicIntegrity($val)
    {
        $this->_propDict["securityRequireSafetyNetAttestationBasicIntegrity"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireSafetyNetAttestationCertifiedDevice
    * Require the device to pass the SafetyNet certified device check.
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
    * Require the device to pass the SafetyNet certified device check.
    *
    * @param bool $val The securityRequireSafetyNetAttestationCertifiedDevice
    *
    * @return AndroidCompliancePolicy
    */
    public function setSecurityRequireSafetyNetAttestationCertifiedDevice($val)
    {
        $this->_propDict["securityRequireSafetyNetAttestationCertifiedDevice"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireGooglePlayServices
    * Require Google Play Services to be installed and enabled on the device.
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
    * Require Google Play Services to be installed and enabled on the device.
    *
    * @param bool $val The securityRequireGooglePlayServices
    *
    * @return AndroidCompliancePolicy
    */
    public function setSecurityRequireGooglePlayServices($val)
    {
        $this->_propDict["securityRequireGooglePlayServices"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireUpToDateSecurityProviders
    * Require the device to have up to date security providers. The device will require Google Play Services to be enabled and up to date.
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
    * Require the device to have up to date security providers. The device will require Google Play Services to be enabled and up to date.
    *
    * @param bool $val The securityRequireUpToDateSecurityProviders
    *
    * @return AndroidCompliancePolicy
    */
    public function setSecurityRequireUpToDateSecurityProviders($val)
    {
        $this->_propDict["securityRequireUpToDateSecurityProviders"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireCompanyPortalAppIntegrity
    * Require the device to pass the Company Portal client app runtime integrity check.
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
    * Require the device to pass the Company Portal client app runtime integrity check.
    *
    * @param bool $val The securityRequireCompanyPortalAppIntegrity
    *
    * @return AndroidCompliancePolicy
    */
    public function setSecurityRequireCompanyPortalAppIntegrity($val)
    {
        $this->_propDict["securityRequireCompanyPortalAppIntegrity"] = boolval($val);
        return $this;
    }
    
}