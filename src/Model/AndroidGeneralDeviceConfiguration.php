<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidGeneralDeviceConfiguration File
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
* AndroidGeneralDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidGeneralDeviceConfiguration extends DeviceConfiguration
{
    /**
    * Gets the appsBlockClipboardSharing
    *
    * @return bool The appsBlockClipboardSharing
    */
    public function getAppsBlockClipboardSharing()
    {
        if (array_key_exists("appsBlockClipboardSharing", $this->_propDict)) {
            return $this->_propDict["appsBlockClipboardSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appsBlockClipboardSharing
    *
    * @param bool $val The appsBlockClipboardSharing
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setAppsBlockClipboardSharing($val)
    {
        $this->_propDict["appsBlockClipboardSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appsBlockCopyPaste
    *
    * @return bool The appsBlockCopyPaste
    */
    public function getAppsBlockCopyPaste()
    {
        if (array_key_exists("appsBlockCopyPaste", $this->_propDict)) {
            return $this->_propDict["appsBlockCopyPaste"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appsBlockCopyPaste
    *
    * @param bool $val The appsBlockCopyPaste
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setAppsBlockCopyPaste($val)
    {
        $this->_propDict["appsBlockCopyPaste"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appsBlockYouTube
    *
    * @return bool The appsBlockYouTube
    */
    public function getAppsBlockYouTube()
    {
        if (array_key_exists("appsBlockYouTube", $this->_propDict)) {
            return $this->_propDict["appsBlockYouTube"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appsBlockYouTube
    *
    * @param bool $val The appsBlockYouTube
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setAppsBlockYouTube($val)
    {
        $this->_propDict["appsBlockYouTube"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bluetoothBlocked
    *
    * @return bool The bluetoothBlocked
    */
    public function getBluetoothBlocked()
    {
        if (array_key_exists("bluetoothBlocked", $this->_propDict)) {
            return $this->_propDict["bluetoothBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bluetoothBlocked
    *
    * @param bool $val The bluetoothBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setBluetoothBlocked($val)
    {
        $this->_propDict["bluetoothBlocked"] = boolval($val);
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
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCameraBlocked($val)
    {
        $this->_propDict["cameraBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockDataRoaming
    *
    * @return bool The cellularBlockDataRoaming
    */
    public function getCellularBlockDataRoaming()
    {
        if (array_key_exists("cellularBlockDataRoaming", $this->_propDict)) {
            return $this->_propDict["cellularBlockDataRoaming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockDataRoaming
    *
    * @param bool $val The cellularBlockDataRoaming
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCellularBlockDataRoaming($val)
    {
        $this->_propDict["cellularBlockDataRoaming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockMessaging
    *
    * @return bool The cellularBlockMessaging
    */
    public function getCellularBlockMessaging()
    {
        if (array_key_exists("cellularBlockMessaging", $this->_propDict)) {
            return $this->_propDict["cellularBlockMessaging"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockMessaging
    *
    * @param bool $val The cellularBlockMessaging
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCellularBlockMessaging($val)
    {
        $this->_propDict["cellularBlockMessaging"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockVoiceRoaming
    *
    * @return bool The cellularBlockVoiceRoaming
    */
    public function getCellularBlockVoiceRoaming()
    {
        if (array_key_exists("cellularBlockVoiceRoaming", $this->_propDict)) {
            return $this->_propDict["cellularBlockVoiceRoaming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockVoiceRoaming
    *
    * @param bool $val The cellularBlockVoiceRoaming
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCellularBlockVoiceRoaming($val)
    {
        $this->_propDict["cellularBlockVoiceRoaming"] = boolval($val);
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
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCellularBlockWiFiTethering($val)
    {
        $this->_propDict["cellularBlockWiFiTethering"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the compliantAppsList
     *
     * @return array The compliantAppsList
     */
    public function getCompliantAppsList()
    {
        if (array_key_exists("compliantAppsList", $this->_propDict)) {
           return $this->_propDict["compliantAppsList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the compliantAppsList
    *
    * @param AppListItem $val The compliantAppsList
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCompliantAppsList($val)
    {
		$this->_propDict["compliantAppsList"] = $val;
        return $this;
    }
    
    /**
    * Gets the compliantAppListType
    *
    * @return AppListType The compliantAppListType
    */
    public function getCompliantAppListType()
    {
        if (array_key_exists("compliantAppListType", $this->_propDict)) {
            if (is_a($this->_propDict["compliantAppListType"], "Microsoft\Graph\Model\AppListType")) {
                return $this->_propDict["compliantAppListType"];
            } else {
                $this->_propDict["compliantAppListType"] = new AppListType($this->_propDict["compliantAppListType"]);
                return $this->_propDict["compliantAppListType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the compliantAppListType
    *
    * @param AppListType $val The compliantAppListType
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCompliantAppListType($val)
    {
        $this->_propDict["compliantAppListType"] = $val;
        return $this;
    }
    
    /**
    * Gets the diagnosticDataBlockSubmission
    *
    * @return bool The diagnosticDataBlockSubmission
    */
    public function getDiagnosticDataBlockSubmission()
    {
        if (array_key_exists("diagnosticDataBlockSubmission", $this->_propDict)) {
            return $this->_propDict["diagnosticDataBlockSubmission"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the diagnosticDataBlockSubmission
    *
    * @param bool $val The diagnosticDataBlockSubmission
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setDiagnosticDataBlockSubmission($val)
    {
        $this->_propDict["diagnosticDataBlockSubmission"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the locationServicesBlocked
    *
    * @return bool The locationServicesBlocked
    */
    public function getLocationServicesBlocked()
    {
        if (array_key_exists("locationServicesBlocked", $this->_propDict)) {
            return $this->_propDict["locationServicesBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the locationServicesBlocked
    *
    * @param bool $val The locationServicesBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setLocationServicesBlocked($val)
    {
        $this->_propDict["locationServicesBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the googleAccountBlockAutoSync
    *
    * @return bool The googleAccountBlockAutoSync
    */
    public function getGoogleAccountBlockAutoSync()
    {
        if (array_key_exists("googleAccountBlockAutoSync", $this->_propDict)) {
            return $this->_propDict["googleAccountBlockAutoSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the googleAccountBlockAutoSync
    *
    * @param bool $val The googleAccountBlockAutoSync
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setGoogleAccountBlockAutoSync($val)
    {
        $this->_propDict["googleAccountBlockAutoSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the googlePlayStoreBlocked
    *
    * @return bool The googlePlayStoreBlocked
    */
    public function getGooglePlayStoreBlocked()
    {
        if (array_key_exists("googlePlayStoreBlocked", $this->_propDict)) {
            return $this->_propDict["googlePlayStoreBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the googlePlayStoreBlocked
    *
    * @param bool $val The googlePlayStoreBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setGooglePlayStoreBlocked($val)
    {
        $this->_propDict["googlePlayStoreBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeBlockSleepButton
    *
    * @return bool The kioskModeBlockSleepButton
    */
    public function getKioskModeBlockSleepButton()
    {
        if (array_key_exists("kioskModeBlockSleepButton", $this->_propDict)) {
            return $this->_propDict["kioskModeBlockSleepButton"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeBlockSleepButton
    *
    * @param bool $val The kioskModeBlockSleepButton
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setKioskModeBlockSleepButton($val)
    {
        $this->_propDict["kioskModeBlockSleepButton"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeBlockVolumeButtons
    *
    * @return bool The kioskModeBlockVolumeButtons
    */
    public function getKioskModeBlockVolumeButtons()
    {
        if (array_key_exists("kioskModeBlockVolumeButtons", $this->_propDict)) {
            return $this->_propDict["kioskModeBlockVolumeButtons"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeBlockVolumeButtons
    *
    * @param bool $val The kioskModeBlockVolumeButtons
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setKioskModeBlockVolumeButtons($val)
    {
        $this->_propDict["kioskModeBlockVolumeButtons"] = boolval($val);
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
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setKioskModeApps($val)
    {
		$this->_propDict["kioskModeApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the nfcBlocked
    *
    * @return bool The nfcBlocked
    */
    public function getNfcBlocked()
    {
        if (array_key_exists("nfcBlocked", $this->_propDict)) {
            return $this->_propDict["nfcBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nfcBlocked
    *
    * @param bool $val The nfcBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setNfcBlocked($val)
    {
        $this->_propDict["nfcBlocked"] = boolval($val);
        return $this;
    }
    
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
    * @return AndroidGeneralDeviceConfiguration
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
    * @return AndroidGeneralDeviceConfiguration
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
    * @return AndroidGeneralDeviceConfiguration
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
    * @return AndroidGeneralDeviceConfiguration
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
    * @return AndroidGeneralDeviceConfiguration
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
    * @return AndroidGeneralDeviceConfiguration
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
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"] = intval($val);
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
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }
    
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
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the powerOffBlocked
    *
    * @return bool The powerOffBlocked
    */
    public function getPowerOffBlocked()
    {
        if (array_key_exists("powerOffBlocked", $this->_propDict)) {
            return $this->_propDict["powerOffBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the powerOffBlocked
    *
    * @param bool $val The powerOffBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPowerOffBlocked($val)
    {
        $this->_propDict["powerOffBlocked"] = boolval($val);
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
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setFactoryResetBlocked($val)
    {
        $this->_propDict["factoryResetBlocked"] = boolval($val);
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
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceSharingAllowed
    *
    * @return bool The deviceSharingAllowed
    */
    public function getDeviceSharingAllowed()
    {
        if (array_key_exists("deviceSharingAllowed", $this->_propDict)) {
            return $this->_propDict["deviceSharingAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceSharingAllowed
    *
    * @param bool $val The deviceSharingAllowed
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setDeviceSharingAllowed($val)
    {
        $this->_propDict["deviceSharingAllowed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageBlockGoogleBackup
    *
    * @return bool The storageBlockGoogleBackup
    */
    public function getStorageBlockGoogleBackup()
    {
        if (array_key_exists("storageBlockGoogleBackup", $this->_propDict)) {
            return $this->_propDict["storageBlockGoogleBackup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageBlockGoogleBackup
    *
    * @param bool $val The storageBlockGoogleBackup
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setStorageBlockGoogleBackup($val)
    {
        $this->_propDict["storageBlockGoogleBackup"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageBlockRemovableStorage
    *
    * @return bool The storageBlockRemovableStorage
    */
    public function getStorageBlockRemovableStorage()
    {
        if (array_key_exists("storageBlockRemovableStorage", $this->_propDict)) {
            return $this->_propDict["storageBlockRemovableStorage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageBlockRemovableStorage
    *
    * @param bool $val The storageBlockRemovableStorage
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setStorageBlockRemovableStorage($val)
    {
        $this->_propDict["storageBlockRemovableStorage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageRequireDeviceEncryption
    *
    * @return bool The storageRequireDeviceEncryption
    */
    public function getStorageRequireDeviceEncryption()
    {
        if (array_key_exists("storageRequireDeviceEncryption", $this->_propDict)) {
            return $this->_propDict["storageRequireDeviceEncryption"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageRequireDeviceEncryption
    *
    * @param bool $val The storageRequireDeviceEncryption
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setStorageRequireDeviceEncryption($val)
    {
        $this->_propDict["storageRequireDeviceEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageRequireRemovableStorageEncryption
    *
    * @return bool The storageRequireRemovableStorageEncryption
    */
    public function getStorageRequireRemovableStorageEncryption()
    {
        if (array_key_exists("storageRequireRemovableStorageEncryption", $this->_propDict)) {
            return $this->_propDict["storageRequireRemovableStorageEncryption"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageRequireRemovableStorageEncryption
    *
    * @param bool $val The storageRequireRemovableStorageEncryption
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setStorageRequireRemovableStorageEncryption($val)
    {
        $this->_propDict["storageRequireRemovableStorageEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the voiceAssistantBlocked
    *
    * @return bool The voiceAssistantBlocked
    */
    public function getVoiceAssistantBlocked()
    {
        if (array_key_exists("voiceAssistantBlocked", $this->_propDict)) {
            return $this->_propDict["voiceAssistantBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the voiceAssistantBlocked
    *
    * @param bool $val The voiceAssistantBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setVoiceAssistantBlocked($val)
    {
        $this->_propDict["voiceAssistantBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the voiceDialingBlocked
    *
    * @return bool The voiceDialingBlocked
    */
    public function getVoiceDialingBlocked()
    {
        if (array_key_exists("voiceDialingBlocked", $this->_propDict)) {
            return $this->_propDict["voiceDialingBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the voiceDialingBlocked
    *
    * @param bool $val The voiceDialingBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setVoiceDialingBlocked($val)
    {
        $this->_propDict["voiceDialingBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the webBrowserBlockPopups
    *
    * @return bool The webBrowserBlockPopups
    */
    public function getWebBrowserBlockPopups()
    {
        if (array_key_exists("webBrowserBlockPopups", $this->_propDict)) {
            return $this->_propDict["webBrowserBlockPopups"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webBrowserBlockPopups
    *
    * @param bool $val The webBrowserBlockPopups
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setWebBrowserBlockPopups($val)
    {
        $this->_propDict["webBrowserBlockPopups"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the webBrowserBlockAutofill
    *
    * @return bool The webBrowserBlockAutofill
    */
    public function getWebBrowserBlockAutofill()
    {
        if (array_key_exists("webBrowserBlockAutofill", $this->_propDict)) {
            return $this->_propDict["webBrowserBlockAutofill"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webBrowserBlockAutofill
    *
    * @param bool $val The webBrowserBlockAutofill
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setWebBrowserBlockAutofill($val)
    {
        $this->_propDict["webBrowserBlockAutofill"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the webBrowserBlockJavaScript
    *
    * @return bool The webBrowserBlockJavaScript
    */
    public function getWebBrowserBlockJavaScript()
    {
        if (array_key_exists("webBrowserBlockJavaScript", $this->_propDict)) {
            return $this->_propDict["webBrowserBlockJavaScript"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webBrowserBlockJavaScript
    *
    * @param bool $val The webBrowserBlockJavaScript
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setWebBrowserBlockJavaScript($val)
    {
        $this->_propDict["webBrowserBlockJavaScript"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the webBrowserBlocked
    *
    * @return bool The webBrowserBlocked
    */
    public function getWebBrowserBlocked()
    {
        if (array_key_exists("webBrowserBlocked", $this->_propDict)) {
            return $this->_propDict["webBrowserBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webBrowserBlocked
    *
    * @param bool $val The webBrowserBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setWebBrowserBlocked($val)
    {
        $this->_propDict["webBrowserBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the webBrowserCookieSettings
    *
    * @return WebBrowserCookieSettings The webBrowserCookieSettings
    */
    public function getWebBrowserCookieSettings()
    {
        if (array_key_exists("webBrowserCookieSettings", $this->_propDict)) {
            if (is_a($this->_propDict["webBrowserCookieSettings"], "Microsoft\Graph\Model\WebBrowserCookieSettings")) {
                return $this->_propDict["webBrowserCookieSettings"];
            } else {
                $this->_propDict["webBrowserCookieSettings"] = new WebBrowserCookieSettings($this->_propDict["webBrowserCookieSettings"]);
                return $this->_propDict["webBrowserCookieSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the webBrowserCookieSettings
    *
    * @param WebBrowserCookieSettings $val The webBrowserCookieSettings
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setWebBrowserCookieSettings($val)
    {
        $this->_propDict["webBrowserCookieSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the wiFiBlocked
    *
    * @return bool The wiFiBlocked
    */
    public function getWiFiBlocked()
    {
        if (array_key_exists("wiFiBlocked", $this->_propDict)) {
            return $this->_propDict["wiFiBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wiFiBlocked
    *
    * @param bool $val The wiFiBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setWiFiBlocked($val)
    {
        $this->_propDict["wiFiBlocked"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the appsInstallAllowList
     *
     * @return array The appsInstallAllowList
     */
    public function getAppsInstallAllowList()
    {
        if (array_key_exists("appsInstallAllowList", $this->_propDict)) {
           return $this->_propDict["appsInstallAllowList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appsInstallAllowList
    *
    * @param AppListItem $val The appsInstallAllowList
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setAppsInstallAllowList($val)
    {
		$this->_propDict["appsInstallAllowList"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appsLaunchBlockList
     *
     * @return array The appsLaunchBlockList
     */
    public function getAppsLaunchBlockList()
    {
        if (array_key_exists("appsLaunchBlockList", $this->_propDict)) {
           return $this->_propDict["appsLaunchBlockList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appsLaunchBlockList
    *
    * @param AppListItem $val The appsLaunchBlockList
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setAppsLaunchBlockList($val)
    {
		$this->_propDict["appsLaunchBlockList"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appsHideList
     *
     * @return array The appsHideList
     */
    public function getAppsHideList()
    {
        if (array_key_exists("appsHideList", $this->_propDict)) {
           return $this->_propDict["appsHideList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appsHideList
    *
    * @param AppListItem $val The appsHideList
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setAppsHideList($val)
    {
		$this->_propDict["appsHideList"] = $val;
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
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setSecurityRequireVerifyApps($val)
    {
        $this->_propDict["securityRequireVerifyApps"] = boolval($val);
        return $this;
    }
    
}