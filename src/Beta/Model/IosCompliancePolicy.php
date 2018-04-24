<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosCompliancePolicy File
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
* IosCompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosCompliancePolicy extends DeviceCompliancePolicy
{
    /**
    * Gets the passcodeBlockSimple
    *
    * @return bool The passcodeBlockSimple
    */
    public function getPasscodeBlockSimple()
    {
        if (array_key_exists("passcodeBlockSimple", $this->_propDict)) {
            return $this->_propDict["passcodeBlockSimple"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeBlockSimple
    *
    * @param bool $val The passcodeBlockSimple
    *
    * @return IosCompliancePolicy
    */
    public function setPasscodeBlockSimple($val)
    {
        $this->_propDict["passcodeBlockSimple"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeExpirationDays
    *
    * @return int The passcodeExpirationDays
    */
    public function getPasscodeExpirationDays()
    {
        if (array_key_exists("passcodeExpirationDays", $this->_propDict)) {
            return $this->_propDict["passcodeExpirationDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeExpirationDays
    *
    * @param int $val The passcodeExpirationDays
    *
    * @return IosCompliancePolicy
    */
    public function setPasscodeExpirationDays($val)
    {
        $this->_propDict["passcodeExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeMinimumLength
    *
    * @return int The passcodeMinimumLength
    */
    public function getPasscodeMinimumLength()
    {
        if (array_key_exists("passcodeMinimumLength", $this->_propDict)) {
            return $this->_propDict["passcodeMinimumLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeMinimumLength
    *
    * @param int $val The passcodeMinimumLength
    *
    * @return IosCompliancePolicy
    */
    public function setPasscodeMinimumLength($val)
    {
        $this->_propDict["passcodeMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeMinutesOfInactivityBeforeLock
    *
    * @return int The passcodeMinutesOfInactivityBeforeLock
    */
    public function getPasscodeMinutesOfInactivityBeforeLock()
    {
        if (array_key_exists("passcodeMinutesOfInactivityBeforeLock", $this->_propDict)) {
            return $this->_propDict["passcodeMinutesOfInactivityBeforeLock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeMinutesOfInactivityBeforeLock
    *
    * @param int $val The passcodeMinutesOfInactivityBeforeLock
    *
    * @return IosCompliancePolicy
    */
    public function setPasscodeMinutesOfInactivityBeforeLock($val)
    {
        $this->_propDict["passcodeMinutesOfInactivityBeforeLock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodePreviousPasscodeBlockCount
    *
    * @return int The passcodePreviousPasscodeBlockCount
    */
    public function getPasscodePreviousPasscodeBlockCount()
    {
        if (array_key_exists("passcodePreviousPasscodeBlockCount", $this->_propDict)) {
            return $this->_propDict["passcodePreviousPasscodeBlockCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodePreviousPasscodeBlockCount
    *
    * @param int $val The passcodePreviousPasscodeBlockCount
    *
    * @return IosCompliancePolicy
    */
    public function setPasscodePreviousPasscodeBlockCount($val)
    {
        $this->_propDict["passcodePreviousPasscodeBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeMinimumCharacterSetCount
    *
    * @return int The passcodeMinimumCharacterSetCount
    */
    public function getPasscodeMinimumCharacterSetCount()
    {
        if (array_key_exists("passcodeMinimumCharacterSetCount", $this->_propDict)) {
            return $this->_propDict["passcodeMinimumCharacterSetCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeMinimumCharacterSetCount
    *
    * @param int $val The passcodeMinimumCharacterSetCount
    *
    * @return IosCompliancePolicy
    */
    public function setPasscodeMinimumCharacterSetCount($val)
    {
        $this->_propDict["passcodeMinimumCharacterSetCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeRequiredType
    *
    * @return RequiredPasswordType The passcodeRequiredType
    */
    public function getPasscodeRequiredType()
    {
        if (array_key_exists("passcodeRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passcodeRequiredType"], "Microsoft\Graph\Beta\Model\RequiredPasswordType")) {
                return $this->_propDict["passcodeRequiredType"];
            } else {
                $this->_propDict["passcodeRequiredType"] = new RequiredPasswordType($this->_propDict["passcodeRequiredType"]);
                return $this->_propDict["passcodeRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passcodeRequiredType
    *
    * @param RequiredPasswordType $val The passcodeRequiredType
    *
    * @return IosCompliancePolicy
    */
    public function setPasscodeRequiredType($val)
    {
        $this->_propDict["passcodeRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the passcodeRequired
    *
    * @return bool The passcodeRequired
    */
    public function getPasscodeRequired()
    {
        if (array_key_exists("passcodeRequired", $this->_propDict)) {
            return $this->_propDict["passcodeRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeRequired
    *
    * @param bool $val The passcodeRequired
    *
    * @return IosCompliancePolicy
    */
    public function setPasscodeRequired($val)
    {
        $this->_propDict["passcodeRequired"] = boolval($val);
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
    * @return IosCompliancePolicy
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
    * @return IosCompliancePolicy
    */
    public function setOsMaximumVersion($val)
    {
        $this->_propDict["osMaximumVersion"] = $val;
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
    * @return IosCompliancePolicy
    */
    public function setSecurityBlockJailbrokenDevices($val)
    {
        $this->_propDict["securityBlockJailbrokenDevices"] = boolval($val);
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
    * @return IosCompliancePolicy
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
    * @return IosCompliancePolicy
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel($val)
    {
        $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedEmailProfileRequired
    *
    * @return bool The managedEmailProfileRequired
    */
    public function getManagedEmailProfileRequired()
    {
        if (array_key_exists("managedEmailProfileRequired", $this->_propDict)) {
            return $this->_propDict["managedEmailProfileRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedEmailProfileRequired
    *
    * @param bool $val The managedEmailProfileRequired
    *
    * @return IosCompliancePolicy
    */
    public function setManagedEmailProfileRequired($val)
    {
        $this->_propDict["managedEmailProfileRequired"] = boolval($val);
        return $this;
    }
    
}