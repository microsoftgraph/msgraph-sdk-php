<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkGeneralDeviceConfiguration File
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
* AndroidForWorkGeneralDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AndroidForWorkGeneralDeviceConfiguration extends DeviceConfiguration
{
    /**
    * Gets the passwordBlockFingerprintUnlock
    *
    * @return bool The passwordBlockFingerprintUnlock
    */
    public function getPasswordBlockFingerprintUnlock()
    {
        if (array_key_exists("passwordBlockFingerprintUnlock", $this->_propDict)) {
            return $this->_propDict["passwordBlockFingerprintUnlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockFingerprintUnlock
    *
    * @param bool $val The passwordBlockFingerprintUnlock
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setPasswordBlockFingerprintUnlock($val)
    {
        $this->_propDict["passwordBlockFingerprintUnlock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockTrustAgents
    *
    * @return bool The passwordBlockTrustAgents
    */
    public function getPasswordBlockTrustAgents()
    {
        if (array_key_exists("passwordBlockTrustAgents", $this->_propDict)) {
            return $this->_propDict["passwordBlockTrustAgents"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockTrustAgents
    *
    * @param bool $val The passwordBlockTrustAgents
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setPasswordBlockTrustAgents($val)
    {
        $this->_propDict["passwordBlockTrustAgents"] = boolval($val);
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
    * @return AndroidForWorkGeneralDeviceConfiguration
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
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return int The passwordMinutesOfInactivityBeforeScreenTimeout
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout()
    {
        if (array_key_exists("passwordMinutesOfInactivityBeforeScreenTimeout", $this->_propDict)) {
            return $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinutesOfInactivityBeforeScreenTimeout
    *
    * @param int $val The passwordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
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
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordSignInFailureCountBeforeFactoryReset
    *
    * @return int The passwordSignInFailureCountBeforeFactoryReset
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset()
    {
        if (array_key_exists("passwordSignInFailureCountBeforeFactoryReset", $this->_propDict)) {
            return $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordSignInFailureCountBeforeFactoryReset
    *
    * @param int $val The passwordSignInFailureCountBeforeFactoryReset
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredType
    *
    * @return AndroidForWorkRequiredPasswordType The passwordRequiredType
    */
    public function getPasswordRequiredType()
    {
        if (array_key_exists("passwordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequiredType"], "Microsoft\Graph\Beta\Model\AndroidForWorkRequiredPasswordType")) {
                return $this->_propDict["passwordRequiredType"];
            } else {
                $this->_propDict["passwordRequiredType"] = new AndroidForWorkRequiredPasswordType($this->_propDict["passwordRequiredType"]);
                return $this->_propDict["passwordRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passwordRequiredType
    *
    * @param AndroidForWorkRequiredPasswordType $val The passwordRequiredType
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the workProfileDataSharingType
    *
    * @return AndroidForWorkCrossProfileDataSharingType The workProfileDataSharingType
    */
    public function getWorkProfileDataSharingType()
    {
        if (array_key_exists("workProfileDataSharingType", $this->_propDict)) {
            if (is_a($this->_propDict["workProfileDataSharingType"], "Microsoft\Graph\Beta\Model\AndroidForWorkCrossProfileDataSharingType")) {
                return $this->_propDict["workProfileDataSharingType"];
            } else {
                $this->_propDict["workProfileDataSharingType"] = new AndroidForWorkCrossProfileDataSharingType($this->_propDict["workProfileDataSharingType"]);
                return $this->_propDict["workProfileDataSharingType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the workProfileDataSharingType
    *
    * @param AndroidForWorkCrossProfileDataSharingType $val The workProfileDataSharingType
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfileDataSharingType($val)
    {
        $this->_propDict["workProfileDataSharingType"] = $val;
        return $this;
    }
    
    /**
    * Gets the workProfileBlockNotificationsWhileDeviceLocked
    *
    * @return bool The workProfileBlockNotificationsWhileDeviceLocked
    */
    public function getWorkProfileBlockNotificationsWhileDeviceLocked()
    {
        if (array_key_exists("workProfileBlockNotificationsWhileDeviceLocked", $this->_propDict)) {
            return $this->_propDict["workProfileBlockNotificationsWhileDeviceLocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileBlockNotificationsWhileDeviceLocked
    *
    * @param bool $val The workProfileBlockNotificationsWhileDeviceLocked
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfileBlockNotificationsWhileDeviceLocked($val)
    {
        $this->_propDict["workProfileBlockNotificationsWhileDeviceLocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileBlockAddingAccounts
    *
    * @return bool The workProfileBlockAddingAccounts
    */
    public function getWorkProfileBlockAddingAccounts()
    {
        if (array_key_exists("workProfileBlockAddingAccounts", $this->_propDict)) {
            return $this->_propDict["workProfileBlockAddingAccounts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileBlockAddingAccounts
    *
    * @param bool $val The workProfileBlockAddingAccounts
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfileBlockAddingAccounts($val)
    {
        $this->_propDict["workProfileBlockAddingAccounts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileBluetoothEnableContactSharing
    *
    * @return bool The workProfileBluetoothEnableContactSharing
    */
    public function getWorkProfileBluetoothEnableContactSharing()
    {
        if (array_key_exists("workProfileBluetoothEnableContactSharing", $this->_propDict)) {
            return $this->_propDict["workProfileBluetoothEnableContactSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileBluetoothEnableContactSharing
    *
    * @param bool $val The workProfileBluetoothEnableContactSharing
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfileBluetoothEnableContactSharing($val)
    {
        $this->_propDict["workProfileBluetoothEnableContactSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileBlockCrossProfileCopyPaste
    *
    * @return bool The workProfileBlockCrossProfileCopyPaste
    */
    public function getWorkProfileBlockCrossProfileCopyPaste()
    {
        if (array_key_exists("workProfileBlockCrossProfileCopyPaste", $this->_propDict)) {
            return $this->_propDict["workProfileBlockCrossProfileCopyPaste"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileBlockCrossProfileCopyPaste
    *
    * @param bool $val The workProfileBlockCrossProfileCopyPaste
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfileBlockCrossProfileCopyPaste($val)
    {
        $this->_propDict["workProfileBlockCrossProfileCopyPaste"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileDefaultAppPermissionPolicy
    *
    * @return AndroidForWorkDefaultAppPermissionPolicyType The workProfileDefaultAppPermissionPolicy
    */
    public function getWorkProfileDefaultAppPermissionPolicy()
    {
        if (array_key_exists("workProfileDefaultAppPermissionPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["workProfileDefaultAppPermissionPolicy"], "Microsoft\Graph\Beta\Model\AndroidForWorkDefaultAppPermissionPolicyType")) {
                return $this->_propDict["workProfileDefaultAppPermissionPolicy"];
            } else {
                $this->_propDict["workProfileDefaultAppPermissionPolicy"] = new AndroidForWorkDefaultAppPermissionPolicyType($this->_propDict["workProfileDefaultAppPermissionPolicy"]);
                return $this->_propDict["workProfileDefaultAppPermissionPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the workProfileDefaultAppPermissionPolicy
    *
    * @param AndroidForWorkDefaultAppPermissionPolicyType $val The workProfileDefaultAppPermissionPolicy
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfileDefaultAppPermissionPolicy($val)
    {
        $this->_propDict["workProfileDefaultAppPermissionPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordBlockFingerprintUnlock
    *
    * @return bool The workProfilePasswordBlockFingerprintUnlock
    */
    public function getWorkProfilePasswordBlockFingerprintUnlock()
    {
        if (array_key_exists("workProfilePasswordBlockFingerprintUnlock", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordBlockFingerprintUnlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordBlockFingerprintUnlock
    *
    * @param bool $val The workProfilePasswordBlockFingerprintUnlock
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordBlockFingerprintUnlock($val)
    {
        $this->_propDict["workProfilePasswordBlockFingerprintUnlock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordBlockTrustAgents
    *
    * @return bool The workProfilePasswordBlockTrustAgents
    */
    public function getWorkProfilePasswordBlockTrustAgents()
    {
        if (array_key_exists("workProfilePasswordBlockTrustAgents", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordBlockTrustAgents"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordBlockTrustAgents
    *
    * @param bool $val The workProfilePasswordBlockTrustAgents
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordBlockTrustAgents($val)
    {
        $this->_propDict["workProfilePasswordBlockTrustAgents"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordExpirationDays
    *
    * @return int The workProfilePasswordExpirationDays
    */
    public function getWorkProfilePasswordExpirationDays()
    {
        if (array_key_exists("workProfilePasswordExpirationDays", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordExpirationDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordExpirationDays
    *
    * @param int $val The workProfilePasswordExpirationDays
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordExpirationDays($val)
    {
        $this->_propDict["workProfilePasswordExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordMinimumLength
    *
    * @return int The workProfilePasswordMinimumLength
    */
    public function getWorkProfilePasswordMinimumLength()
    {
        if (array_key_exists("workProfilePasswordMinimumLength", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinimumLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordMinimumLength
    *
    * @param int $val The workProfilePasswordMinimumLength
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinimumLength($val)
    {
        $this->_propDict["workProfilePasswordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return int The workProfilePasswordMinutesOfInactivityBeforeScreenTimeout
    */
    public function getWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout()
    {
        if (array_key_exists("workProfilePasswordMinutesOfInactivityBeforeScreenTimeout", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinutesOfInactivityBeforeScreenTimeout"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordMinutesOfInactivityBeforeScreenTimeout
    *
    * @param int $val The workProfilePasswordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["workProfilePasswordMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordPreviousPasswordBlockCount
    *
    * @return int The workProfilePasswordPreviousPasswordBlockCount
    */
    public function getWorkProfilePasswordPreviousPasswordBlockCount()
    {
        if (array_key_exists("workProfilePasswordPreviousPasswordBlockCount", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordPreviousPasswordBlockCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordPreviousPasswordBlockCount
    *
    * @param int $val The workProfilePasswordPreviousPasswordBlockCount
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["workProfilePasswordPreviousPasswordBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordSignInFailureCountBeforeFactoryReset
    *
    * @return int The workProfilePasswordSignInFailureCountBeforeFactoryReset
    */
    public function getWorkProfilePasswordSignInFailureCountBeforeFactoryReset()
    {
        if (array_key_exists("workProfilePasswordSignInFailureCountBeforeFactoryReset", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordSignInFailureCountBeforeFactoryReset"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordSignInFailureCountBeforeFactoryReset
    *
    * @param int $val The workProfilePasswordSignInFailureCountBeforeFactoryReset
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["workProfilePasswordSignInFailureCountBeforeFactoryReset"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordRequiredType
    *
    * @return AndroidForWorkRequiredPasswordType The workProfilePasswordRequiredType
    */
    public function getWorkProfilePasswordRequiredType()
    {
        if (array_key_exists("workProfilePasswordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["workProfilePasswordRequiredType"], "Microsoft\Graph\Beta\Model\AndroidForWorkRequiredPasswordType")) {
                return $this->_propDict["workProfilePasswordRequiredType"];
            } else {
                $this->_propDict["workProfilePasswordRequiredType"] = new AndroidForWorkRequiredPasswordType($this->_propDict["workProfilePasswordRequiredType"]);
                return $this->_propDict["workProfilePasswordRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the workProfilePasswordRequiredType
    *
    * @param AndroidForWorkRequiredPasswordType $val The workProfilePasswordRequiredType
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordRequiredType($val)
    {
        $this->_propDict["workProfilePasswordRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the workProfileRequirePassword
    *
    * @return bool The workProfileRequirePassword
    */
    public function getWorkProfileRequirePassword()
    {
        if (array_key_exists("workProfileRequirePassword", $this->_propDict)) {
            return $this->_propDict["workProfileRequirePassword"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileRequirePassword
    *
    * @param bool $val The workProfileRequirePassword
    *
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setWorkProfileRequirePassword($val)
    {
        $this->_propDict["workProfileRequirePassword"] = boolval($val);
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
    * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public function setSecurityRequireVerifyApps($val)
    {
        $this->_propDict["securityRequireVerifyApps"] = boolval($val);
        return $this;
    }
    
}