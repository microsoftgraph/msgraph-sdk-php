<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionPolicy File
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
* WindowsInformationProtectionPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsInformationProtectionPolicy extends WindowsInformationProtection
{
    /**
    * Gets the revokeOnMdmHandoffDisabled
    *
    * @return bool The revokeOnMdmHandoffDisabled
    */
    public function getRevokeOnMdmHandoffDisabled()
    {
        if (array_key_exists("revokeOnMdmHandoffDisabled", $this->_propDict)) {
            return $this->_propDict["revokeOnMdmHandoffDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the revokeOnMdmHandoffDisabled
    *
    * @param bool $val The revokeOnMdmHandoffDisabled
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setRevokeOnMdmHandoffDisabled($val)
    {
        $this->_propDict["revokeOnMdmHandoffDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the mdmEnrollmentUrl
    *
    * @return string The mdmEnrollmentUrl
    */
    public function getMdmEnrollmentUrl()
    {
        if (array_key_exists("mdmEnrollmentUrl", $this->_propDict)) {
            return $this->_propDict["mdmEnrollmentUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mdmEnrollmentUrl
    *
    * @param string $val The mdmEnrollmentUrl
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setMdmEnrollmentUrl($val)
    {
        $this->_propDict["mdmEnrollmentUrl"] = $val;
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
    * @return WindowsInformationProtectionPolicy
    */
    public function setWindowsHelloForBusinessBlocked($val)
    {
        $this->_propDict["windowsHelloForBusinessBlocked"] = boolval($val);
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
    * @return WindowsInformationProtectionPolicy
    */
    public function setPinMinimumLength($val)
    {
        $this->_propDict["pinMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinUppercaseLetters
    *
    * @return WindowsInformationProtectionPinCharacterRequirements The pinUppercaseLetters
    */
    public function getPinUppercaseLetters()
    {
        if (array_key_exists("pinUppercaseLetters", $this->_propDict)) {
            if (is_a($this->_propDict["pinUppercaseLetters"], "Microsoft\Graph\Beta\Model\WindowsInformationProtectionPinCharacterRequirements")) {
                return $this->_propDict["pinUppercaseLetters"];
            } else {
                $this->_propDict["pinUppercaseLetters"] = new WindowsInformationProtectionPinCharacterRequirements($this->_propDict["pinUppercaseLetters"]);
                return $this->_propDict["pinUppercaseLetters"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinUppercaseLetters
    *
    * @param WindowsInformationProtectionPinCharacterRequirements $val The pinUppercaseLetters
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setPinUppercaseLetters($val)
    {
        $this->_propDict["pinUppercaseLetters"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinLowercaseLetters
    *
    * @return WindowsInformationProtectionPinCharacterRequirements The pinLowercaseLetters
    */
    public function getPinLowercaseLetters()
    {
        if (array_key_exists("pinLowercaseLetters", $this->_propDict)) {
            if (is_a($this->_propDict["pinLowercaseLetters"], "Microsoft\Graph\Beta\Model\WindowsInformationProtectionPinCharacterRequirements")) {
                return $this->_propDict["pinLowercaseLetters"];
            } else {
                $this->_propDict["pinLowercaseLetters"] = new WindowsInformationProtectionPinCharacterRequirements($this->_propDict["pinLowercaseLetters"]);
                return $this->_propDict["pinLowercaseLetters"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinLowercaseLetters
    *
    * @param WindowsInformationProtectionPinCharacterRequirements $val The pinLowercaseLetters
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setPinLowercaseLetters($val)
    {
        $this->_propDict["pinLowercaseLetters"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinSpecialCharacters
    *
    * @return WindowsInformationProtectionPinCharacterRequirements The pinSpecialCharacters
    */
    public function getPinSpecialCharacters()
    {
        if (array_key_exists("pinSpecialCharacters", $this->_propDict)) {
            if (is_a($this->_propDict["pinSpecialCharacters"], "Microsoft\Graph\Beta\Model\WindowsInformationProtectionPinCharacterRequirements")) {
                return $this->_propDict["pinSpecialCharacters"];
            } else {
                $this->_propDict["pinSpecialCharacters"] = new WindowsInformationProtectionPinCharacterRequirements($this->_propDict["pinSpecialCharacters"]);
                return $this->_propDict["pinSpecialCharacters"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinSpecialCharacters
    *
    * @param WindowsInformationProtectionPinCharacterRequirements $val The pinSpecialCharacters
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setPinSpecialCharacters($val)
    {
        $this->_propDict["pinSpecialCharacters"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinExpirationDays
    *
    * @return int The pinExpirationDays
    */
    public function getPinExpirationDays()
    {
        if (array_key_exists("pinExpirationDays", $this->_propDict)) {
            return $this->_propDict["pinExpirationDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinExpirationDays
    *
    * @param int $val The pinExpirationDays
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setPinExpirationDays($val)
    {
        $this->_propDict["pinExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfPastPinsRemembered
    *
    * @return int The numberOfPastPinsRemembered
    */
    public function getNumberOfPastPinsRemembered()
    {
        if (array_key_exists("numberOfPastPinsRemembered", $this->_propDict)) {
            return $this->_propDict["numberOfPastPinsRemembered"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfPastPinsRemembered
    *
    * @param int $val The numberOfPastPinsRemembered
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setNumberOfPastPinsRemembered($val)
    {
        $this->_propDict["numberOfPastPinsRemembered"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMaximumAttemptCount
    *
    * @return int The passwordMaximumAttemptCount
    */
    public function getPasswordMaximumAttemptCount()
    {
        if (array_key_exists("passwordMaximumAttemptCount", $this->_propDict)) {
            return $this->_propDict["passwordMaximumAttemptCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMaximumAttemptCount
    *
    * @param int $val The passwordMaximumAttemptCount
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setPasswordMaximumAttemptCount($val)
    {
        $this->_propDict["passwordMaximumAttemptCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minutesOfInactivityBeforeDeviceLock
    *
    * @return int The minutesOfInactivityBeforeDeviceLock
    */
    public function getMinutesOfInactivityBeforeDeviceLock()
    {
        if (array_key_exists("minutesOfInactivityBeforeDeviceLock", $this->_propDict)) {
            return $this->_propDict["minutesOfInactivityBeforeDeviceLock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minutesOfInactivityBeforeDeviceLock
    *
    * @param int $val The minutesOfInactivityBeforeDeviceLock
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setMinutesOfInactivityBeforeDeviceLock($val)
    {
        $this->_propDict["minutesOfInactivityBeforeDeviceLock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the daysWithoutContactBeforeUnenroll
    *
    * @return int The daysWithoutContactBeforeUnenroll
    */
    public function getDaysWithoutContactBeforeUnenroll()
    {
        if (array_key_exists("daysWithoutContactBeforeUnenroll", $this->_propDict)) {
            return $this->_propDict["daysWithoutContactBeforeUnenroll"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the daysWithoutContactBeforeUnenroll
    *
    * @param int $val The daysWithoutContactBeforeUnenroll
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setDaysWithoutContactBeforeUnenroll($val)
    {
        $this->_propDict["daysWithoutContactBeforeUnenroll"] = intval($val);
        return $this;
    }
    
}