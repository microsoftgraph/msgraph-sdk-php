<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerGeneralDeviceConfiguration File
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
* AndroidDeviceOwnerGeneralDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidDeviceOwnerGeneralDeviceConfiguration extends DeviceConfiguration
{
    /**
    * Gets the accountsBlockModification
    *
    * @return bool The accountsBlockModification
    */
    public function getAccountsBlockModification()
    {
        if (array_key_exists("accountsBlockModification", $this->_propDict)) {
            return $this->_propDict["accountsBlockModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountsBlockModification
    *
    * @param bool $val The accountsBlockModification
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setAccountsBlockModification($val)
    {
        $this->_propDict["accountsBlockModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appsAllowInstallFromUnknownSources
    *
    * @return bool The appsAllowInstallFromUnknownSources
    */
    public function getAppsAllowInstallFromUnknownSources()
    {
        if (array_key_exists("appsAllowInstallFromUnknownSources", $this->_propDict)) {
            return $this->_propDict["appsAllowInstallFromUnknownSources"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appsAllowInstallFromUnknownSources
    *
    * @param bool $val The appsAllowInstallFromUnknownSources
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setAppsAllowInstallFromUnknownSources($val)
    {
        $this->_propDict["appsAllowInstallFromUnknownSources"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appsAutoUpdatePolicy
    *
    * @return AndroidDeviceOwnerAppAutoUpdatePolicyType The appsAutoUpdatePolicy
    */
    public function getAppsAutoUpdatePolicy()
    {
        if (array_key_exists("appsAutoUpdatePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["appsAutoUpdatePolicy"], "Microsoft\Graph\Beta\Model\AndroidDeviceOwnerAppAutoUpdatePolicyType")) {
                return $this->_propDict["appsAutoUpdatePolicy"];
            } else {
                $this->_propDict["appsAutoUpdatePolicy"] = new AndroidDeviceOwnerAppAutoUpdatePolicyType($this->_propDict["appsAutoUpdatePolicy"]);
                return $this->_propDict["appsAutoUpdatePolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appsAutoUpdatePolicy
    *
    * @param AndroidDeviceOwnerAppAutoUpdatePolicyType $val The appsAutoUpdatePolicy
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setAppsAutoUpdatePolicy($val)
    {
        $this->_propDict["appsAutoUpdatePolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the appsDefaultPermissionPolicy
    *
    * @return AndroidDeviceOwnerDefaultAppPermissionPolicyType The appsDefaultPermissionPolicy
    */
    public function getAppsDefaultPermissionPolicy()
    {
        if (array_key_exists("appsDefaultPermissionPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["appsDefaultPermissionPolicy"], "Microsoft\Graph\Beta\Model\AndroidDeviceOwnerDefaultAppPermissionPolicyType")) {
                return $this->_propDict["appsDefaultPermissionPolicy"];
            } else {
                $this->_propDict["appsDefaultPermissionPolicy"] = new AndroidDeviceOwnerDefaultAppPermissionPolicyType($this->_propDict["appsDefaultPermissionPolicy"]);
                return $this->_propDict["appsDefaultPermissionPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appsDefaultPermissionPolicy
    *
    * @param AndroidDeviceOwnerDefaultAppPermissionPolicyType $val The appsDefaultPermissionPolicy
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setAppsDefaultPermissionPolicy($val)
    {
        $this->_propDict["appsDefaultPermissionPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the bluetoothBlockConfiguration
    *
    * @return bool The bluetoothBlockConfiguration
    */
    public function getBluetoothBlockConfiguration()
    {
        if (array_key_exists("bluetoothBlockConfiguration", $this->_propDict)) {
            return $this->_propDict["bluetoothBlockConfiguration"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bluetoothBlockConfiguration
    *
    * @param bool $val The bluetoothBlockConfiguration
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setBluetoothBlockConfiguration($val)
    {
        $this->_propDict["bluetoothBlockConfiguration"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bluetoothBlockContactSharing
    *
    * @return bool The bluetoothBlockContactSharing
    */
    public function getBluetoothBlockContactSharing()
    {
        if (array_key_exists("bluetoothBlockContactSharing", $this->_propDict)) {
            return $this->_propDict["bluetoothBlockContactSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bluetoothBlockContactSharing
    *
    * @param bool $val The bluetoothBlockContactSharing
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setBluetoothBlockContactSharing($val)
    {
        $this->_propDict["bluetoothBlockContactSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cameraBlocked
    *
    * @return bool The cameraBlocked
    */
    public function getCameraBlocked()
    {
        if (array_key_exists("cameraBlocked", $this->_propDict)) {
            return $this->_propDict["cameraBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cameraBlocked
    *
    * @param bool $val The cameraBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setCameraBlocked($val)
    {
        $this->_propDict["cameraBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockWiFiTethering
    *
    * @return bool The cellularBlockWiFiTethering
    */
    public function getCellularBlockWiFiTethering()
    {
        if (array_key_exists("cellularBlockWiFiTethering", $this->_propDict)) {
            return $this->_propDict["cellularBlockWiFiTethering"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockWiFiTethering
    *
    * @param bool $val The cellularBlockWiFiTethering
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setCellularBlockWiFiTethering($val)
    {
        $this->_propDict["cellularBlockWiFiTethering"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the dataRoamingBlocked
    *
    * @return bool The dataRoamingBlocked
    */
    public function getDataRoamingBlocked()
    {
        if (array_key_exists("dataRoamingBlocked", $this->_propDict)) {
            return $this->_propDict["dataRoamingBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dataRoamingBlocked
    *
    * @param bool $val The dataRoamingBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setDataRoamingBlocked($val)
    {
        $this->_propDict["dataRoamingBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the dateTimeConfigurationBlocked
    *
    * @return bool The dateTimeConfigurationBlocked
    */
    public function getDateTimeConfigurationBlocked()
    {
        if (array_key_exists("dateTimeConfigurationBlocked", $this->_propDict)) {
            return $this->_propDict["dateTimeConfigurationBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dateTimeConfigurationBlocked
    *
    * @param bool $val The dateTimeConfigurationBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setDateTimeConfigurationBlocked($val)
    {
        $this->_propDict["dateTimeConfigurationBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the factoryResetDeviceAdministratorEmails
    *
    * @return string The factoryResetDeviceAdministratorEmails
    */
    public function getFactoryResetDeviceAdministratorEmails()
    {
        if (array_key_exists("factoryResetDeviceAdministratorEmails", $this->_propDict)) {
            return $this->_propDict["factoryResetDeviceAdministratorEmails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the factoryResetDeviceAdministratorEmails
    *
    * @param string $val The factoryResetDeviceAdministratorEmails
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setFactoryResetDeviceAdministratorEmails($val)
    {
        $this->_propDict["factoryResetDeviceAdministratorEmails"] = $val;
        return $this;
    }
    
    /**
    * Gets the factoryResetBlocked
    *
    * @return bool The factoryResetBlocked
    */
    public function getFactoryResetBlocked()
    {
        if (array_key_exists("factoryResetBlocked", $this->_propDict)) {
            return $this->_propDict["factoryResetBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the factoryResetBlocked
    *
    * @param bool $val The factoryResetBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setFactoryResetBlocked($val)
    {
        $this->_propDict["factoryResetBlocked"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the kioskModeApps
     *
     * @return array The kioskModeApps
     */
    public function getKioskModeApps()
    {
        if (array_key_exists("kioskModeApps", $this->_propDict)) {
           return $this->_propDict["kioskModeApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the kioskModeApps
    *
    * @param AppListItem $val The kioskModeApps
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeApps($val)
    {
		$this->_propDict["kioskModeApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the microphoneForceMute
    *
    * @return bool The microphoneForceMute
    */
    public function getMicrophoneForceMute()
    {
        if (array_key_exists("microphoneForceMute", $this->_propDict)) {
            return $this->_propDict["microphoneForceMute"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the microphoneForceMute
    *
    * @param bool $val The microphoneForceMute
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setMicrophoneForceMute($val)
    {
        $this->_propDict["microphoneForceMute"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the networkEscapeHatchAllowed
    *
    * @return bool The networkEscapeHatchAllowed
    */
    public function getNetworkEscapeHatchAllowed()
    {
        if (array_key_exists("networkEscapeHatchAllowed", $this->_propDict)) {
            return $this->_propDict["networkEscapeHatchAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkEscapeHatchAllowed
    *
    * @param bool $val The networkEscapeHatchAllowed
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setNetworkEscapeHatchAllowed($val)
    {
        $this->_propDict["networkEscapeHatchAllowed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the nfcBlockOutgoingBeam
    *
    * @return bool The nfcBlockOutgoingBeam
    */
    public function getNfcBlockOutgoingBeam()
    {
        if (array_key_exists("nfcBlockOutgoingBeam", $this->_propDict)) {
            return $this->_propDict["nfcBlockOutgoingBeam"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nfcBlockOutgoingBeam
    *
    * @param bool $val The nfcBlockOutgoingBeam
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setNfcBlockOutgoingBeam($val)
    {
        $this->_propDict["nfcBlockOutgoingBeam"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockKeyguard
    *
    * @return bool The passwordBlockKeyguard
    */
    public function getPasswordBlockKeyguard()
    {
        if (array_key_exists("passwordBlockKeyguard", $this->_propDict)) {
            return $this->_propDict["passwordBlockKeyguard"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockKeyguard
    *
    * @param bool $val The passwordBlockKeyguard
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordBlockKeyguard($val)
    {
        $this->_propDict["passwordBlockKeyguard"] = boolval($val);
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
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
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
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
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
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordPreviousPasswordCountToBlock
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
    *
    * @param int $val The passwordPreviousPasswordCountToBlock
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordPreviousPasswordCountToBlock($val)
    {
        $this->_propDict["passwordPreviousPasswordCountToBlock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredType
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
    *
    * @param AndroidDeviceOwnerRequiredPasswordType $val The passwordRequiredType
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
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
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the safeBootBlocked
    *
    * @return bool The safeBootBlocked
    */
    public function getSafeBootBlocked()
    {
        if (array_key_exists("safeBootBlocked", $this->_propDict)) {
            return $this->_propDict["safeBootBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safeBootBlocked
    *
    * @param bool $val The safeBootBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSafeBootBlocked($val)
    {
        $this->_propDict["safeBootBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the screenCaptureBlocked
    *
    * @return bool The screenCaptureBlocked
    */
    public function getScreenCaptureBlocked()
    {
        if (array_key_exists("screenCaptureBlocked", $this->_propDict)) {
            return $this->_propDict["screenCaptureBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the screenCaptureBlocked
    *
    * @param bool $val The screenCaptureBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityAllowDebuggingFeatures
    *
    * @return bool The securityAllowDebuggingFeatures
    */
    public function getSecurityAllowDebuggingFeatures()
    {
        if (array_key_exists("securityAllowDebuggingFeatures", $this->_propDict)) {
            return $this->_propDict["securityAllowDebuggingFeatures"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityAllowDebuggingFeatures
    *
    * @param bool $val The securityAllowDebuggingFeatures
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSecurityAllowDebuggingFeatures($val)
    {
        $this->_propDict["securityAllowDebuggingFeatures"] = boolval($val);
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
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSecurityRequireVerifyApps($val)
    {
        $this->_propDict["securityRequireVerifyApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the statusBarBlocked
    *
    * @return bool The statusBarBlocked
    */
    public function getStatusBarBlocked()
    {
        if (array_key_exists("statusBarBlocked", $this->_propDict)) {
            return $this->_propDict["statusBarBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the statusBarBlocked
    *
    * @param bool $val The statusBarBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setStatusBarBlocked($val)
    {
        $this->_propDict["statusBarBlocked"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the stayOnModes
     *
     * @return array The stayOnModes
     */
    public function getStayOnModes()
    {
        if (array_key_exists("stayOnModes", $this->_propDict)) {
           return $this->_propDict["stayOnModes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the stayOnModes
    *
    * @param AndroidDeviceOwnerBatteryPluggedMode $val The stayOnModes
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setStayOnModes($val)
    {
		$this->_propDict["stayOnModes"] = $val;
        return $this;
    }
    
    /**
    * Gets the storageAllowUsb
    *
    * @return bool The storageAllowUsb
    */
    public function getStorageAllowUsb()
    {
        if (array_key_exists("storageAllowUsb", $this->_propDict)) {
            return $this->_propDict["storageAllowUsb"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageAllowUsb
    *
    * @param bool $val The storageAllowUsb
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setStorageAllowUsb($val)
    {
        $this->_propDict["storageAllowUsb"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageBlockExternalMedia
    *
    * @return bool The storageBlockExternalMedia
    */
    public function getStorageBlockExternalMedia()
    {
        if (array_key_exists("storageBlockExternalMedia", $this->_propDict)) {
            return $this->_propDict["storageBlockExternalMedia"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageBlockExternalMedia
    *
    * @param bool $val The storageBlockExternalMedia
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setStorageBlockExternalMedia($val)
    {
        $this->_propDict["storageBlockExternalMedia"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageBlockUsbFileTransfer
    *
    * @return bool The storageBlockUsbFileTransfer
    */
    public function getStorageBlockUsbFileTransfer()
    {
        if (array_key_exists("storageBlockUsbFileTransfer", $this->_propDict)) {
            return $this->_propDict["storageBlockUsbFileTransfer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageBlockUsbFileTransfer
    *
    * @param bool $val The storageBlockUsbFileTransfer
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setStorageBlockUsbFileTransfer($val)
    {
        $this->_propDict["storageBlockUsbFileTransfer"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the systemUpdateWindowStartMinutesAfterMidnight
    *
    * @return int The systemUpdateWindowStartMinutesAfterMidnight
    */
    public function getSystemUpdateWindowStartMinutesAfterMidnight()
    {
        if (array_key_exists("systemUpdateWindowStartMinutesAfterMidnight", $this->_propDict)) {
            return $this->_propDict["systemUpdateWindowStartMinutesAfterMidnight"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the systemUpdateWindowStartMinutesAfterMidnight
    *
    * @param int $val The systemUpdateWindowStartMinutesAfterMidnight
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSystemUpdateWindowStartMinutesAfterMidnight($val)
    {
        $this->_propDict["systemUpdateWindowStartMinutesAfterMidnight"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the systemUpdateWindowEndMinutesAfterMidnight
    *
    * @return int The systemUpdateWindowEndMinutesAfterMidnight
    */
    public function getSystemUpdateWindowEndMinutesAfterMidnight()
    {
        if (array_key_exists("systemUpdateWindowEndMinutesAfterMidnight", $this->_propDict)) {
            return $this->_propDict["systemUpdateWindowEndMinutesAfterMidnight"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the systemUpdateWindowEndMinutesAfterMidnight
    *
    * @param int $val The systemUpdateWindowEndMinutesAfterMidnight
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSystemUpdateWindowEndMinutesAfterMidnight($val)
    {
        $this->_propDict["systemUpdateWindowEndMinutesAfterMidnight"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the systemUpdateInstallType
    *
    * @return AndroidDeviceOwnerSystemUpdateInstallType The systemUpdateInstallType
    */
    public function getSystemUpdateInstallType()
    {
        if (array_key_exists("systemUpdateInstallType", $this->_propDict)) {
            if (is_a($this->_propDict["systemUpdateInstallType"], "Microsoft\Graph\Beta\Model\AndroidDeviceOwnerSystemUpdateInstallType")) {
                return $this->_propDict["systemUpdateInstallType"];
            } else {
                $this->_propDict["systemUpdateInstallType"] = new AndroidDeviceOwnerSystemUpdateInstallType($this->_propDict["systemUpdateInstallType"]);
                return $this->_propDict["systemUpdateInstallType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the systemUpdateInstallType
    *
    * @param AndroidDeviceOwnerSystemUpdateInstallType $val The systemUpdateInstallType
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSystemUpdateInstallType($val)
    {
        $this->_propDict["systemUpdateInstallType"] = $val;
        return $this;
    }
    
    /**
    * Gets the usersBlockAdd
    *
    * @return bool The usersBlockAdd
    */
    public function getUsersBlockAdd()
    {
        if (array_key_exists("usersBlockAdd", $this->_propDict)) {
            return $this->_propDict["usersBlockAdd"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usersBlockAdd
    *
    * @param bool $val The usersBlockAdd
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setUsersBlockAdd($val)
    {
        $this->_propDict["usersBlockAdd"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usersBlockRemove
    *
    * @return bool The usersBlockRemove
    */
    public function getUsersBlockRemove()
    {
        if (array_key_exists("usersBlockRemove", $this->_propDict)) {
            return $this->_propDict["usersBlockRemove"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usersBlockRemove
    *
    * @param bool $val The usersBlockRemove
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setUsersBlockRemove($val)
    {
        $this->_propDict["usersBlockRemove"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the volumeBlockAdjustment
    *
    * @return bool The volumeBlockAdjustment
    */
    public function getVolumeBlockAdjustment()
    {
        if (array_key_exists("volumeBlockAdjustment", $this->_propDict)) {
            return $this->_propDict["volumeBlockAdjustment"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the volumeBlockAdjustment
    *
    * @param bool $val The volumeBlockAdjustment
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setVolumeBlockAdjustment($val)
    {
        $this->_propDict["volumeBlockAdjustment"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wifiBlockEditConfigurations
    *
    * @return bool The wifiBlockEditConfigurations
    */
    public function getWifiBlockEditConfigurations()
    {
        if (array_key_exists("wifiBlockEditConfigurations", $this->_propDict)) {
            return $this->_propDict["wifiBlockEditConfigurations"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wifiBlockEditConfigurations
    *
    * @param bool $val The wifiBlockEditConfigurations
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWifiBlockEditConfigurations($val)
    {
        $this->_propDict["wifiBlockEditConfigurations"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wifiBlockEditPolicyDefinedConfigurations
    *
    * @return bool The wifiBlockEditPolicyDefinedConfigurations
    */
    public function getWifiBlockEditPolicyDefinedConfigurations()
    {
        if (array_key_exists("wifiBlockEditPolicyDefinedConfigurations", $this->_propDict)) {
            return $this->_propDict["wifiBlockEditPolicyDefinedConfigurations"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wifiBlockEditPolicyDefinedConfigurations
    *
    * @param bool $val The wifiBlockEditPolicyDefinedConfigurations
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setWifiBlockEditPolicyDefinedConfigurations($val)
    {
        $this->_propDict["wifiBlockEditPolicyDefinedConfigurations"] = boolval($val);
        return $this;
    }
    
}