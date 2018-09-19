<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsIdentityProtectionConfiguration File
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
* WindowsIdentityProtectionConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsIdentityProtectionConfiguration extends DeviceConfiguration
{
    /**
    * Gets the enhancedAntiSpoofingForFacialFeaturesEnabled
    *
    * @return bool The enhancedAntiSpoofingForFacialFeaturesEnabled
    */
    public function getEnhancedAntiSpoofingForFacialFeaturesEnabled()
    {
        if (array_key_exists("enhancedAntiSpoofingForFacialFeaturesEnabled", $this->_propDict)) {
            return $this->_propDict["enhancedAntiSpoofingForFacialFeaturesEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enhancedAntiSpoofingForFacialFeaturesEnabled
    *
    * @param bool $val The enhancedAntiSpoofingForFacialFeaturesEnabled
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setEnhancedAntiSpoofingForFacialFeaturesEnabled($val)
    {
        $this->_propDict["enhancedAntiSpoofingForFacialFeaturesEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the pinMinimumLength
    *
    * @return int The pinMinimumLength
    */
    public function getPinMinimumLength()
    {
        if (array_key_exists("pinMinimumLength", $this->_propDict)) {
            return $this->_propDict["pinMinimumLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinMinimumLength
    *
    * @param int $val The pinMinimumLength
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinMinimumLength($val)
    {
        $this->_propDict["pinMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinMaximumLength
    *
    * @return int The pinMaximumLength
    */
    public function getPinMaximumLength()
    {
        if (array_key_exists("pinMaximumLength", $this->_propDict)) {
            return $this->_propDict["pinMaximumLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinMaximumLength
    *
    * @param int $val The pinMaximumLength
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinMaximumLength($val)
    {
        $this->_propDict["pinMaximumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinUppercaseCharactersUsage
    *
    * @return ConfigurationUsage The pinUppercaseCharactersUsage
    */
    public function getPinUppercaseCharactersUsage()
    {
        if (array_key_exists("pinUppercaseCharactersUsage", $this->_propDict)) {
            if (is_a($this->_propDict["pinUppercaseCharactersUsage"], "Microsoft\Graph\Beta\Model\ConfigurationUsage")) {
                return $this->_propDict["pinUppercaseCharactersUsage"];
            } else {
                $this->_propDict["pinUppercaseCharactersUsage"] = new ConfigurationUsage($this->_propDict["pinUppercaseCharactersUsage"]);
                return $this->_propDict["pinUppercaseCharactersUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinUppercaseCharactersUsage
    *
    * @param ConfigurationUsage $val The pinUppercaseCharactersUsage
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinUppercaseCharactersUsage($val)
    {
        $this->_propDict["pinUppercaseCharactersUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinLowercaseCharactersUsage
    *
    * @return ConfigurationUsage The pinLowercaseCharactersUsage
    */
    public function getPinLowercaseCharactersUsage()
    {
        if (array_key_exists("pinLowercaseCharactersUsage", $this->_propDict)) {
            if (is_a($this->_propDict["pinLowercaseCharactersUsage"], "Microsoft\Graph\Beta\Model\ConfigurationUsage")) {
                return $this->_propDict["pinLowercaseCharactersUsage"];
            } else {
                $this->_propDict["pinLowercaseCharactersUsage"] = new ConfigurationUsage($this->_propDict["pinLowercaseCharactersUsage"]);
                return $this->_propDict["pinLowercaseCharactersUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinLowercaseCharactersUsage
    *
    * @param ConfigurationUsage $val The pinLowercaseCharactersUsage
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinLowercaseCharactersUsage($val)
    {
        $this->_propDict["pinLowercaseCharactersUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinSpecialCharactersUsage
    *
    * @return ConfigurationUsage The pinSpecialCharactersUsage
    */
    public function getPinSpecialCharactersUsage()
    {
        if (array_key_exists("pinSpecialCharactersUsage", $this->_propDict)) {
            if (is_a($this->_propDict["pinSpecialCharactersUsage"], "Microsoft\Graph\Beta\Model\ConfigurationUsage")) {
                return $this->_propDict["pinSpecialCharactersUsage"];
            } else {
                $this->_propDict["pinSpecialCharactersUsage"] = new ConfigurationUsage($this->_propDict["pinSpecialCharactersUsage"]);
                return $this->_propDict["pinSpecialCharactersUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinSpecialCharactersUsage
    *
    * @param ConfigurationUsage $val The pinSpecialCharactersUsage
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinSpecialCharactersUsage($val)
    {
        $this->_propDict["pinSpecialCharactersUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinExpirationInDays
    *
    * @return int The pinExpirationInDays
    */
    public function getPinExpirationInDays()
    {
        if (array_key_exists("pinExpirationInDays", $this->_propDict)) {
            return $this->_propDict["pinExpirationInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinExpirationInDays
    *
    * @param int $val The pinExpirationInDays
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinExpirationInDays($val)
    {
        $this->_propDict["pinExpirationInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinPreviousBlockCount
    *
    * @return int The pinPreviousBlockCount
    */
    public function getPinPreviousBlockCount()
    {
        if (array_key_exists("pinPreviousBlockCount", $this->_propDict)) {
            return $this->_propDict["pinPreviousBlockCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinPreviousBlockCount
    *
    * @param int $val The pinPreviousBlockCount
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinPreviousBlockCount($val)
    {
        $this->_propDict["pinPreviousBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinRecoveryEnabled
    *
    * @return bool The pinRecoveryEnabled
    */
    public function getPinRecoveryEnabled()
    {
        if (array_key_exists("pinRecoveryEnabled", $this->_propDict)) {
            return $this->_propDict["pinRecoveryEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinRecoveryEnabled
    *
    * @param bool $val The pinRecoveryEnabled
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinRecoveryEnabled($val)
    {
        $this->_propDict["pinRecoveryEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityDeviceRequired
    *
    * @return bool The securityDeviceRequired
    */
    public function getSecurityDeviceRequired()
    {
        if (array_key_exists("securityDeviceRequired", $this->_propDict)) {
            return $this->_propDict["securityDeviceRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityDeviceRequired
    *
    * @param bool $val The securityDeviceRequired
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setSecurityDeviceRequired($val)
    {
        $this->_propDict["securityDeviceRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the unlockWithBiometricsEnabled
    *
    * @return bool The unlockWithBiometricsEnabled
    */
    public function getUnlockWithBiometricsEnabled()
    {
        if (array_key_exists("unlockWithBiometricsEnabled", $this->_propDict)) {
            return $this->_propDict["unlockWithBiometricsEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unlockWithBiometricsEnabled
    *
    * @param bool $val The unlockWithBiometricsEnabled
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setUnlockWithBiometricsEnabled($val)
    {
        $this->_propDict["unlockWithBiometricsEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the useCertificatesForOnPremisesAuthEnabled
    *
    * @return bool The useCertificatesForOnPremisesAuthEnabled
    */
    public function getUseCertificatesForOnPremisesAuthEnabled()
    {
        if (array_key_exists("useCertificatesForOnPremisesAuthEnabled", $this->_propDict)) {
            return $this->_propDict["useCertificatesForOnPremisesAuthEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the useCertificatesForOnPremisesAuthEnabled
    *
    * @param bool $val The useCertificatesForOnPremisesAuthEnabled
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setUseCertificatesForOnPremisesAuthEnabled($val)
    {
        $this->_propDict["useCertificatesForOnPremisesAuthEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsHelloForBusinessBlocked
    *
    * @return bool The windowsHelloForBusinessBlocked
    */
    public function getWindowsHelloForBusinessBlocked()
    {
        if (array_key_exists("windowsHelloForBusinessBlocked", $this->_propDict)) {
            return $this->_propDict["windowsHelloForBusinessBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsHelloForBusinessBlocked
    *
    * @param bool $val The windowsHelloForBusinessBlocked
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setWindowsHelloForBusinessBlocked($val)
    {
        $this->_propDict["windowsHelloForBusinessBlocked"] = boolval($val);
        return $this;
    }
    
}