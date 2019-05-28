<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerCompliancePolicy File
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
* AndroidDeviceOwnerCompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidDeviceOwnerCompliancePolicy extends DeviceCompliancePolicy
{
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
    * @return AndroidDeviceOwnerCompliancePolicy
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
    * @return AndroidDeviceOwnerCompliancePolicy
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
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setMinAndroidSecurityPatchLevel($val)
    {
        $this->_propDict["minAndroidSecurityPatchLevel"] = $val;
        return $this;
    }
    
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
    * @return AndroidDeviceOwnerCompliancePolicy
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
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLetterCharacters
    * Indicates the minimum number of letter characters required for device password. Valid values 1 to 16
    *
    * @return int The passwordMinimumLetterCharacters
    */
    public function getPasswordMinimumLetterCharacters()
    {
        if (array_key_exists("passwordMinimumLetterCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumLetterCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumLetterCharacters
    * Indicates the minimum number of letter characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumLetterCharacters
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumLetterCharacters($val)
    {
        $this->_propDict["passwordMinimumLetterCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLowerCaseCharacters
    * Indicates the minimum number of lower case characters required for device password. Valid values 1 to 16
    *
    * @return int The passwordMinimumLowerCaseCharacters
    */
    public function getPasswordMinimumLowerCaseCharacters()
    {
        if (array_key_exists("passwordMinimumLowerCaseCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumLowerCaseCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumLowerCaseCharacters
    * Indicates the minimum number of lower case characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumLowerCaseCharacters
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumLowerCaseCharacters($val)
    {
        $this->_propDict["passwordMinimumLowerCaseCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumNonLetterCharacters
    * Indicates the minimum number of non-letter characters required for device password. Valid values 1 to 16
    *
    * @return int The passwordMinimumNonLetterCharacters
    */
    public function getPasswordMinimumNonLetterCharacters()
    {
        if (array_key_exists("passwordMinimumNonLetterCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumNonLetterCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumNonLetterCharacters
    * Indicates the minimum number of non-letter characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumNonLetterCharacters
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumNonLetterCharacters($val)
    {
        $this->_propDict["passwordMinimumNonLetterCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumNumericCharacters
    * Indicates the minimum number of numeric characters required for device password. Valid values 1 to 16
    *
    * @return int The passwordMinimumNumericCharacters
    */
    public function getPasswordMinimumNumericCharacters()
    {
        if (array_key_exists("passwordMinimumNumericCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumNumericCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumNumericCharacters
    * Indicates the minimum number of numeric characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumNumericCharacters
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumNumericCharacters($val)
    {
        $this->_propDict["passwordMinimumNumericCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumSymbolCharacters
    * Indicates the minimum number of symbol characters required for device password. Valid values 1 to 16
    *
    * @return int The passwordMinimumSymbolCharacters
    */
    public function getPasswordMinimumSymbolCharacters()
    {
        if (array_key_exists("passwordMinimumSymbolCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumSymbolCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumSymbolCharacters
    * Indicates the minimum number of symbol characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumSymbolCharacters
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumSymbolCharacters($val)
    {
        $this->_propDict["passwordMinimumSymbolCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumUpperCaseCharacters
    * Indicates the minimum number of upper case letter characters required for device password. Valid values 1 to 16
    *
    * @return int The passwordMinimumUpperCaseCharacters
    */
    public function getPasswordMinimumUpperCaseCharacters()
    {
        if (array_key_exists("passwordMinimumUpperCaseCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumUpperCaseCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumUpperCaseCharacters
    * Indicates the minimum number of upper case letter characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumUpperCaseCharacters
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumUpperCaseCharacters($val)
    {
        $this->_propDict["passwordMinimumUpperCaseCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredType
    * Type of characters in password
    *
    * @return AndroidDeviceOwnerRequiredPasswordType The passwordRequiredType
    */
    public function getPasswordRequiredType()
    {
        if (array_key_exists("passwordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequiredType"], "Microsoft\Graph\Beta\Model\AndroidDeviceOwnerRequiredPasswordType")) {
                return $this->_propDict["passwordRequiredType"];
            } else {
                $this->_propDict["passwordRequiredType"] = new AndroidDeviceOwnerRequiredPasswordType($this->_propDict["passwordRequiredType"]);
                return $this->_propDict["passwordRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passwordRequiredType
    * Type of characters in password
    *
    * @param AndroidDeviceOwnerRequiredPasswordType $val The passwordRequiredType
    *
    * @return AndroidDeviceOwnerCompliancePolicy
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
    * @return AndroidDeviceOwnerCompliancePolicy
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
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordPreviousPasswordCountToBlock
    * Number of previous passwords to block. Valid values 1 to 24
    *
    * @return int The passwordPreviousPasswordCountToBlock
    */
    public function getPasswordPreviousPasswordCountToBlock()
    {
        if (array_key_exists("passwordPreviousPasswordCountToBlock", $this->_propDict)) {
            return $this->_propDict["passwordPreviousPasswordCountToBlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordPreviousPasswordCountToBlock
    * Number of previous passwords to block. Valid values 1 to 24
    *
    * @param int $val The passwordPreviousPasswordCountToBlock
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordPreviousPasswordCountToBlock($val)
    {
        $this->_propDict["passwordPreviousPasswordCountToBlock"] = intval($val);
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
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setStorageRequireEncryption($val)
    {
        $this->_propDict["storageRequireEncryption"] = boolval($val);
        return $this;
    }
    
}