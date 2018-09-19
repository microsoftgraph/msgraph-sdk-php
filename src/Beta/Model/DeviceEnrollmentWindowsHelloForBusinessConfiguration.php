<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEnrollmentWindowsHelloForBusinessConfiguration File
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
* DeviceEnrollmentWindowsHelloForBusinessConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceEnrollmentWindowsHelloForBusinessConfiguration extends DeviceEnrollmentConfiguration
{
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
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
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
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setPinMaximumLength($val)
    {
        $this->_propDict["pinMaximumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinUppercaseCharactersUsage
    *
    * @return WindowsHelloForBusinessPinUsage The pinUppercaseCharactersUsage
    */
    public function getPinUppercaseCharactersUsage()
    {
        if (array_key_exists("pinUppercaseCharactersUsage", $this->_propDict)) {
            if (is_a($this->_propDict["pinUppercaseCharactersUsage"], "Microsoft\Graph\Beta\Model\WindowsHelloForBusinessPinUsage")) {
                return $this->_propDict["pinUppercaseCharactersUsage"];
            } else {
                $this->_propDict["pinUppercaseCharactersUsage"] = new WindowsHelloForBusinessPinUsage($this->_propDict["pinUppercaseCharactersUsage"]);
                return $this->_propDict["pinUppercaseCharactersUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinUppercaseCharactersUsage
    *
    * @param WindowsHelloForBusinessPinUsage $val The pinUppercaseCharactersUsage
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setPinUppercaseCharactersUsage($val)
    {
        $this->_propDict["pinUppercaseCharactersUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinLowercaseCharactersUsage
    *
    * @return WindowsHelloForBusinessPinUsage The pinLowercaseCharactersUsage
    */
    public function getPinLowercaseCharactersUsage()
    {
        if (array_key_exists("pinLowercaseCharactersUsage", $this->_propDict)) {
            if (is_a($this->_propDict["pinLowercaseCharactersUsage"], "Microsoft\Graph\Beta\Model\WindowsHelloForBusinessPinUsage")) {
                return $this->_propDict["pinLowercaseCharactersUsage"];
            } else {
                $this->_propDict["pinLowercaseCharactersUsage"] = new WindowsHelloForBusinessPinUsage($this->_propDict["pinLowercaseCharactersUsage"]);
                return $this->_propDict["pinLowercaseCharactersUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinLowercaseCharactersUsage
    *
    * @param WindowsHelloForBusinessPinUsage $val The pinLowercaseCharactersUsage
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setPinLowercaseCharactersUsage($val)
    {
        $this->_propDict["pinLowercaseCharactersUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinSpecialCharactersUsage
    *
    * @return WindowsHelloForBusinessPinUsage The pinSpecialCharactersUsage
    */
    public function getPinSpecialCharactersUsage()
    {
        if (array_key_exists("pinSpecialCharactersUsage", $this->_propDict)) {
            if (is_a($this->_propDict["pinSpecialCharactersUsage"], "Microsoft\Graph\Beta\Model\WindowsHelloForBusinessPinUsage")) {
                return $this->_propDict["pinSpecialCharactersUsage"];
            } else {
                $this->_propDict["pinSpecialCharactersUsage"] = new WindowsHelloForBusinessPinUsage($this->_propDict["pinSpecialCharactersUsage"]);
                return $this->_propDict["pinSpecialCharactersUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinSpecialCharactersUsage
    *
    * @param WindowsHelloForBusinessPinUsage $val The pinSpecialCharactersUsage
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setPinSpecialCharactersUsage($val)
    {
        $this->_propDict["pinSpecialCharactersUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return Enablement The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Microsoft\Graph\Beta\Model\Enablement")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new Enablement($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param Enablement $val The state
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
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
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
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
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setUnlockWithBiometricsEnabled($val)
    {
        $this->_propDict["unlockWithBiometricsEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the remotePassportEnabled
    *
    * @return bool The remotePassportEnabled
    */
    public function getRemotePassportEnabled()
    {
        if (array_key_exists("remotePassportEnabled", $this->_propDict)) {
            return $this->_propDict["remotePassportEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remotePassportEnabled
    *
    * @param bool $val The remotePassportEnabled
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setRemotePassportEnabled($val)
    {
        $this->_propDict["remotePassportEnabled"] = boolval($val);
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
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setPinPreviousBlockCount($val)
    {
        $this->_propDict["pinPreviousBlockCount"] = intval($val);
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
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setPinExpirationInDays($val)
    {
        $this->_propDict["pinExpirationInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the enhancedBiometricsState
    *
    * @return Enablement The enhancedBiometricsState
    */
    public function getEnhancedBiometricsState()
    {
        if (array_key_exists("enhancedBiometricsState", $this->_propDict)) {
            if (is_a($this->_propDict["enhancedBiometricsState"], "Microsoft\Graph\Beta\Model\Enablement")) {
                return $this->_propDict["enhancedBiometricsState"];
            } else {
                $this->_propDict["enhancedBiometricsState"] = new Enablement($this->_propDict["enhancedBiometricsState"]);
                return $this->_propDict["enhancedBiometricsState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enhancedBiometricsState
    *
    * @param Enablement $val The enhancedBiometricsState
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setEnhancedBiometricsState($val)
    {
        $this->_propDict["enhancedBiometricsState"] = $val;
        return $this;
    }
    
}