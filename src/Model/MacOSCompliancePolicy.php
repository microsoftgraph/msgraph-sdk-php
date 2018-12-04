<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSCompliancePolicy File
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
* MacOSCompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MacOSCompliancePolicy extends DeviceCompliancePolicy
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
    * @return MacOSCompliancePolicy
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
    * @return MacOSCompliancePolicy
    */
    public function setPasswordBlockSimple($val)
    {
        $this->_propDict["passwordBlockSimple"] = boolval($val);
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
    * @return MacOSCompliancePolicy
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
    * @return MacOSCompliancePolicy
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
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
    * @return MacOSCompliancePolicy
    */
    public function setPasswordMinutesOfInactivityBeforeLock($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeLock"] = intval($val);
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
    * @return MacOSCompliancePolicy
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
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
    * @return MacOSCompliancePolicy
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
            if (is_a($this->_propDict["passwordRequiredType"], "Microsoft\Graph\Model\RequiredPasswordType")) {
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
    * @return MacOSCompliancePolicy
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
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
    * @return MacOSCompliancePolicy
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
    * @return MacOSCompliancePolicy
    */
    public function setOsMaximumVersion($val)
    {
        $this->_propDict["osMaximumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the systemIntegrityProtectionEnabled
    *
    * @return bool The systemIntegrityProtectionEnabled
    */
    public function getSystemIntegrityProtectionEnabled()
    {
        if (array_key_exists("systemIntegrityProtectionEnabled", $this->_propDict)) {
            return $this->_propDict["systemIntegrityProtectionEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the systemIntegrityProtectionEnabled
    *
    * @param bool $val The systemIntegrityProtectionEnabled
    *
    * @return MacOSCompliancePolicy
    */
    public function setSystemIntegrityProtectionEnabled($val)
    {
        $this->_propDict["systemIntegrityProtectionEnabled"] = boolval($val);
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
    * @return MacOSCompliancePolicy
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
    * @return MacOSCompliancePolicy
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel($val)
    {
        $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"] = $val;
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
    * @return MacOSCompliancePolicy
    */
    public function setStorageRequireEncryption($val)
    {
        $this->_propDict["storageRequireEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallEnabled
    *
    * @return bool The firewallEnabled
    */
    public function getFirewallEnabled()
    {
        if (array_key_exists("firewallEnabled", $this->_propDict)) {
            return $this->_propDict["firewallEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallEnabled
    *
    * @param bool $val The firewallEnabled
    *
    * @return MacOSCompliancePolicy
    */
    public function setFirewallEnabled($val)
    {
        $this->_propDict["firewallEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallBlockAllIncoming
    *
    * @return bool The firewallBlockAllIncoming
    */
    public function getFirewallBlockAllIncoming()
    {
        if (array_key_exists("firewallBlockAllIncoming", $this->_propDict)) {
            return $this->_propDict["firewallBlockAllIncoming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallBlockAllIncoming
    *
    * @param bool $val The firewallBlockAllIncoming
    *
    * @return MacOSCompliancePolicy
    */
    public function setFirewallBlockAllIncoming($val)
    {
        $this->_propDict["firewallBlockAllIncoming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallEnableStealthMode
    *
    * @return bool The firewallEnableStealthMode
    */
    public function getFirewallEnableStealthMode()
    {
        if (array_key_exists("firewallEnableStealthMode", $this->_propDict)) {
            return $this->_propDict["firewallEnableStealthMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallEnableStealthMode
    *
    * @param bool $val The firewallEnableStealthMode
    *
    * @return MacOSCompliancePolicy
    */
    public function setFirewallEnableStealthMode($val)
    {
        $this->_propDict["firewallEnableStealthMode"] = boolval($val);
        return $this;
    }
    
}