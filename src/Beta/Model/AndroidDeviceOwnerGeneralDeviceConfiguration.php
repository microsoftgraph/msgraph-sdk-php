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
    * Indicates whether or not adding or removing accounts is disabled.
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
    * Indicates whether or not adding or removing accounts is disabled.
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
    * Indicates whether or not the user is allowed to enable to unknown sources setting.
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
    * Indicates whether or not the user is allowed to enable to unknown sources setting.
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
    * Indicates the value of the app auto update policy.
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
    * Indicates the value of the app auto update policy.
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
    * Indicates the permission policy for requests for runtime permissions if one is not defined for the app specifically.
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
    * Indicates the permission policy for requests for runtime permissions if one is not defined for the app specifically.
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
    * Gets the appsRecommendSkippingFirstUseHints
    * Whether or not to recommend all apps skip any first-time-use hints they may have added.
    *
    * @return bool The appsRecommendSkippingFirstUseHints
    */
    public function getAppsRecommendSkippingFirstUseHints()
    {
        if (array_key_exists("appsRecommendSkippingFirstUseHints", $this->_propDict)) {
            return $this->_propDict["appsRecommendSkippingFirstUseHints"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appsRecommendSkippingFirstUseHints
    * Whether or not to recommend all apps skip any first-time-use hints they may have added.
    *
    * @param bool $val The appsRecommendSkippingFirstUseHints
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setAppsRecommendSkippingFirstUseHints($val)
    {
        $this->_propDict["appsRecommendSkippingFirstUseHints"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bluetoothBlockConfiguration
    * Indicates whether or not to block a user from configuring bluetooth.
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
    * Indicates whether or not to block a user from configuring bluetooth.
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
    * Indicates whether or not to block a user from sharing contacts via bluetooth.
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
    * Indicates whether or not to block a user from sharing contacts via bluetooth.
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
    * Indicates whether or not to disable the use of the camera.
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
    * Indicates whether or not to disable the use of the camera.
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
    * Indicates whether or not to block Wi-Fi tethering.
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
    * Indicates whether or not to block Wi-Fi tethering.
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
    * Indicates whether or not to block a user from data roaming.
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
    * Indicates whether or not to block a user from data roaming.
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
    * Indicates whether or not to block the user from manually changing the date or time on the device
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
    * Indicates whether or not to block the user from manually changing the date or time on the device
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
    * List of Google account emails that will be required to authenticate after a device is factory reset before it can be set up.
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
    * List of Google account emails that will be required to authenticate after a device is factory reset before it can be set up.
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
    * Indicates whether or not the factory reset option in settings is disabled.
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
    * Indicates whether or not the factory reset option in settings is disabled.
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
    * Gets the kioskModeScreenSaverConfigurationEnabled
    * Whether or not to enable screen saver mode or not in Kiosk Mode.
    *
    * @return bool The kioskModeScreenSaverConfigurationEnabled
    */
    public function getKioskModeScreenSaverConfigurationEnabled()
    {
        if (array_key_exists("kioskModeScreenSaverConfigurationEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeScreenSaverConfigurationEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeScreenSaverConfigurationEnabled
    * Whether or not to enable screen saver mode or not in Kiosk Mode.
    *
    * @param bool $val The kioskModeScreenSaverConfigurationEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeScreenSaverConfigurationEnabled($val)
    {
        $this->_propDict["kioskModeScreenSaverConfigurationEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeScreenSaverImageUrl
    * URL for an image that will be the device's screen saver in Kiosk Mode.
    *
    * @return string The kioskModeScreenSaverImageUrl
    */
    public function getKioskModeScreenSaverImageUrl()
    {
        if (array_key_exists("kioskModeScreenSaverImageUrl", $this->_propDict)) {
            return $this->_propDict["kioskModeScreenSaverImageUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeScreenSaverImageUrl
    * URL for an image that will be the device's screen saver in Kiosk Mode.
    *
    * @param string $val The kioskModeScreenSaverImageUrl
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeScreenSaverImageUrl($val)
    {
        $this->_propDict["kioskModeScreenSaverImageUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskModeScreenSaverDisplayTimeInSeconds
    * The number of seconds that the device will display the screen saver for in Kiosk Mode. Valid values 0 to 9999999
    *
    * @return int The kioskModeScreenSaverDisplayTimeInSeconds
    */
    public function getKioskModeScreenSaverDisplayTimeInSeconds()
    {
        if (array_key_exists("kioskModeScreenSaverDisplayTimeInSeconds", $this->_propDict)) {
            return $this->_propDict["kioskModeScreenSaverDisplayTimeInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeScreenSaverDisplayTimeInSeconds
    * The number of seconds that the device will display the screen saver for in Kiosk Mode. Valid values 0 to 9999999
    *
    * @param int $val The kioskModeScreenSaverDisplayTimeInSeconds
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeScreenSaverDisplayTimeInSeconds($val)
    {
        $this->_propDict["kioskModeScreenSaverDisplayTimeInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeScreenSaverStartDelayInSeconds
    * The number of seconds the device needs to be inactive for before the screen saver is shown in Kiosk Mode. Valid values 1 to 9999999
    *
    * @return int The kioskModeScreenSaverStartDelayInSeconds
    */
    public function getKioskModeScreenSaverStartDelayInSeconds()
    {
        if (array_key_exists("kioskModeScreenSaverStartDelayInSeconds", $this->_propDict)) {
            return $this->_propDict["kioskModeScreenSaverStartDelayInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeScreenSaverStartDelayInSeconds
    * The number of seconds the device needs to be inactive for before the screen saver is shown in Kiosk Mode. Valid values 1 to 9999999
    *
    * @param int $val The kioskModeScreenSaverStartDelayInSeconds
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeScreenSaverStartDelayInSeconds($val)
    {
        $this->_propDict["kioskModeScreenSaverStartDelayInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeScreenSaverDetectMediaDisabled
    * Whether or not the device screen should show the screen saver if audio/video is playing in Kiosk Mode.
    *
    * @return bool The kioskModeScreenSaverDetectMediaDisabled
    */
    public function getKioskModeScreenSaverDetectMediaDisabled()
    {
        if (array_key_exists("kioskModeScreenSaverDetectMediaDisabled", $this->_propDict)) {
            return $this->_propDict["kioskModeScreenSaverDetectMediaDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeScreenSaverDetectMediaDisabled
    * Whether or not the device screen should show the screen saver if audio/video is playing in Kiosk Mode.
    *
    * @param bool $val The kioskModeScreenSaverDetectMediaDisabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeScreenSaverDetectMediaDisabled($val)
    {
        $this->_propDict["kioskModeScreenSaverDetectMediaDisabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the kioskModeApps
    * A list of managed apps that will be shown when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
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
    * A list of managed apps that will be shown when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
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
    * Gets the kioskModeWallpaperUrl
    * URL to a publicly accessible image to use for the wallpaper when the device is in Kiosk Mode.
    *
    * @return string The kioskModeWallpaperUrl
    */
    public function getKioskModeWallpaperUrl()
    {
        if (array_key_exists("kioskModeWallpaperUrl", $this->_propDict)) {
            return $this->_propDict["kioskModeWallpaperUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeWallpaperUrl
    * URL to a publicly accessible image to use for the wallpaper when the device is in Kiosk Mode.
    *
    * @param string $val The kioskModeWallpaperUrl
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeWallpaperUrl($val)
    {
        $this->_propDict["kioskModeWallpaperUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskModeExitCode
    * Exit code to allow a user to escape from Kiosk Mode when the device is in Kiosk Mode.
    *
    * @return string The kioskModeExitCode
    */
    public function getKioskModeExitCode()
    {
        if (array_key_exists("kioskModeExitCode", $this->_propDict)) {
            return $this->_propDict["kioskModeExitCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeExitCode
    * Exit code to allow a user to escape from Kiosk Mode when the device is in Kiosk Mode.
    *
    * @param string $val The kioskModeExitCode
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeExitCode($val)
    {
        $this->_propDict["kioskModeExitCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskModeVirtualHomeButtonEnabled
    * Whether or not to display a virtual home button when the device is in Kiosk Mode.
    *
    * @return bool The kioskModeVirtualHomeButtonEnabled
    */
    public function getKioskModeVirtualHomeButtonEnabled()
    {
        if (array_key_exists("kioskModeVirtualHomeButtonEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeVirtualHomeButtonEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeVirtualHomeButtonEnabled
    * Whether or not to display a virtual home button when the device is in Kiosk Mode.
    *
    * @param bool $val The kioskModeVirtualHomeButtonEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeVirtualHomeButtonEnabled($val)
    {
        $this->_propDict["kioskModeVirtualHomeButtonEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeVirtualHomeButtonType
    * Indicates whether the virtual home button is a swipe up home button or a floating home button.
    *
    * @return AndroidDeviceOwnerVirtualHomeButtonType The kioskModeVirtualHomeButtonType
    */
    public function getKioskModeVirtualHomeButtonType()
    {
        if (array_key_exists("kioskModeVirtualHomeButtonType", $this->_propDict)) {
            if (is_a($this->_propDict["kioskModeVirtualHomeButtonType"], "Microsoft\Graph\Beta\Model\AndroidDeviceOwnerVirtualHomeButtonType")) {
                return $this->_propDict["kioskModeVirtualHomeButtonType"];
            } else {
                $this->_propDict["kioskModeVirtualHomeButtonType"] = new AndroidDeviceOwnerVirtualHomeButtonType($this->_propDict["kioskModeVirtualHomeButtonType"]);
                return $this->_propDict["kioskModeVirtualHomeButtonType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the kioskModeVirtualHomeButtonType
    * Indicates whether the virtual home button is a swipe up home button or a floating home button.
    *
    * @param AndroidDeviceOwnerVirtualHomeButtonType $val The kioskModeVirtualHomeButtonType
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeVirtualHomeButtonType($val)
    {
        $this->_propDict["kioskModeVirtualHomeButtonType"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskModeBluetoothConfigurationEnabled
    * Whether or not to allow a user to configure Bluetooth settings in Kiosk Mode.
    *
    * @return bool The kioskModeBluetoothConfigurationEnabled
    */
    public function getKioskModeBluetoothConfigurationEnabled()
    {
        if (array_key_exists("kioskModeBluetoothConfigurationEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeBluetoothConfigurationEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeBluetoothConfigurationEnabled
    * Whether or not to allow a user to configure Bluetooth settings in Kiosk Mode.
    *
    * @param bool $val The kioskModeBluetoothConfigurationEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeBluetoothConfigurationEnabled($val)
    {
        $this->_propDict["kioskModeBluetoothConfigurationEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeWiFiConfigurationEnabled
    * Whether or not to allow a user to configure Wi-Fi settings in Kiosk Mode.
    *
    * @return bool The kioskModeWiFiConfigurationEnabled
    */
    public function getKioskModeWiFiConfigurationEnabled()
    {
        if (array_key_exists("kioskModeWiFiConfigurationEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeWiFiConfigurationEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeWiFiConfigurationEnabled
    * Whether or not to allow a user to configure Wi-Fi settings in Kiosk Mode.
    *
    * @param bool $val The kioskModeWiFiConfigurationEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeWiFiConfigurationEnabled($val)
    {
        $this->_propDict["kioskModeWiFiConfigurationEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeFlashlightConfigurationEnabled
    * Whether or not to allow a user to use the flashlight in Kiosk Mode.
    *
    * @return bool The kioskModeFlashlightConfigurationEnabled
    */
    public function getKioskModeFlashlightConfigurationEnabled()
    {
        if (array_key_exists("kioskModeFlashlightConfigurationEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeFlashlightConfigurationEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeFlashlightConfigurationEnabled
    * Whether or not to allow a user to use the flashlight in Kiosk Mode.
    *
    * @param bool $val The kioskModeFlashlightConfigurationEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeFlashlightConfigurationEnabled($val)
    {
        $this->_propDict["kioskModeFlashlightConfigurationEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeMediaVolumeConfigurationEnabled
    * Whether or not to allow a user to change the media volume in Kiosk Mode.
    *
    * @return bool The kioskModeMediaVolumeConfigurationEnabled
    */
    public function getKioskModeMediaVolumeConfigurationEnabled()
    {
        if (array_key_exists("kioskModeMediaVolumeConfigurationEnabled", $this->_propDict)) {
            return $this->_propDict["kioskModeMediaVolumeConfigurationEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeMediaVolumeConfigurationEnabled
    * Whether or not to allow a user to change the media volume in Kiosk Mode.
    *
    * @param bool $val The kioskModeMediaVolumeConfigurationEnabled
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setKioskModeMediaVolumeConfigurationEnabled($val)
    {
        $this->_propDict["kioskModeMediaVolumeConfigurationEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the microphoneForceMute
    * Indicates whether or not to block unmuting the microphone on the device.
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
    * Indicates whether or not to block unmuting the microphone on the device.
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
    * Indicates whether or not the device will allow connecting to a temporary network connection at boot time.
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
    * Indicates whether or not the device will allow connecting to a temporary network connection at boot time.
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
    * Indicates whether or not to block NFC outgoing beam.
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
    * Indicates whether or not to block NFC outgoing beam.
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
    * Indicates whether or not the keyguard is disabled.
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
    * Indicates whether or not the keyguard is disabled.
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
     * Gets the passwordBlockKeyguardFeatures
    * List of device keyguard features to block. This collection can contain a maximum of 7 elements.
     *
     * @return array The passwordBlockKeyguardFeatures
     */
    public function getPasswordBlockKeyguardFeatures()
    {
        if (array_key_exists("passwordBlockKeyguardFeatures", $this->_propDict)) {
           return $this->_propDict["passwordBlockKeyguardFeatures"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the passwordBlockKeyguardFeatures
    * List of device keyguard features to block. This collection can contain a maximum of 7 elements.
    *
    * @param AndroidKeyguardFeature $val The passwordBlockKeyguardFeatures
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordBlockKeyguardFeatures($val)
    {
		$this->_propDict["passwordBlockKeyguardFeatures"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordExpirationDays
    * Indicates the amount of time in seconds that a password can be set for before it expires and a new password will be required. Valid values 1 to 365
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
    * Indicates the amount of time in seconds that a password can be set for before it expires and a new password will be required. Valid values 1 to 365
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
    * Indicates the minimum length of the password required on the device. Valid values 4 to 16
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
    * Indicates the minimum length of the password required on the device. Valid values 4 to 16
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
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
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
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
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
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
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
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
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
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordMinimumSymbolCharacters($val)
    {
        $this->_propDict["passwordMinimumSymbolCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumUpperCaseCharacters
    * Indicates the minimum number of upper caseletter characters required for device password. Valid values 1 to 16
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
    * Indicates the minimum number of upper caseletter characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumUpperCaseCharacters
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPasswordMinimumUpperCaseCharacters($val)
    {
        $this->_propDict["passwordMinimumUpperCaseCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinutesOfInactivityBeforeScreenTimeout
    * Milliseconds of inactivity before the screen times out.
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
    * Milliseconds of inactivity before the screen times out.
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
    * Indicates the length of password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
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
    * Indicates the length of password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
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
    * Indicates the minimum password quality required on the device.
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
    * Indicates the minimum password quality required on the device.
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
    * Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
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
    * Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
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
    * Gets the playStoreMode
    * Indicates the Play Store mode of the device.
    *
    * @return AndroidDeviceOwnerPlayStoreMode The playStoreMode
    */
    public function getPlayStoreMode()
    {
        if (array_key_exists("playStoreMode", $this->_propDict)) {
            if (is_a($this->_propDict["playStoreMode"], "Microsoft\Graph\Beta\Model\AndroidDeviceOwnerPlayStoreMode")) {
                return $this->_propDict["playStoreMode"];
            } else {
                $this->_propDict["playStoreMode"] = new AndroidDeviceOwnerPlayStoreMode($this->_propDict["playStoreMode"]);
                return $this->_propDict["playStoreMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the playStoreMode
    * Indicates the Play Store mode of the device.
    *
    * @param AndroidDeviceOwnerPlayStoreMode $val The playStoreMode
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setPlayStoreMode($val)
    {
        $this->_propDict["playStoreMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the safeBootBlocked
    * Indicates whether or not rebooting the device into safe boot is disabled.
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
    * Indicates whether or not rebooting the device into safe boot is disabled.
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
    * Indicates whether or not to disable the capability to take screenshots.
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
    * Indicates whether or not to disable the capability to take screenshots.
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
    * Indicates whether or not to block the user from enabling debugging features on the device.
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
    * Indicates whether or not to block the user from enabling debugging features on the device.
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
    * Indicates whether or not verify apps is required.
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
    * Indicates whether or not verify apps is required.
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
    * Indicates whether or the status bar is disabled, including notifications, quick settings and other screen overlays.
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
    * Indicates whether or the status bar is disabled, including notifications, quick settings and other screen overlays.
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
    * List of modes in which the device's display will stay powered-on. This collection can contain a maximum of 4 elements.
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
    * List of modes in which the device's display will stay powered-on. This collection can contain a maximum of 4 elements.
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
    * Indicates whether or not to allow USB mass storage.
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
    * Indicates whether or not to allow USB mass storage.
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
    * Indicates whether or not to block external media.
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
    * Indicates whether or not to block external media.
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
    * Indicates whether or not to block USB file transfer.
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
    * Indicates whether or not to block USB file transfer.
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
    * Indicates the number of minutes after midnight that the system update window starts. Valid values 0 to 1440
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
    * Indicates the number of minutes after midnight that the system update window starts. Valid values 0 to 1440
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
    * Indicates the number of minutes after midnight that the system update window ends. Valid values 0 to 1440
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
    * Indicates the number of minutes after midnight that the system update window ends. Valid values 0 to 1440
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
    * The type of system update configuration.
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
    * The type of system update configuration.
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
    * Gets the systemWindowsBlocked
    * Whether or not to block Android system prompt windows, like toasts, phone activities, and system alerts.
    *
    * @return bool The systemWindowsBlocked
    */
    public function getSystemWindowsBlocked()
    {
        if (array_key_exists("systemWindowsBlocked", $this->_propDict)) {
            return $this->_propDict["systemWindowsBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the systemWindowsBlocked
    * Whether or not to block Android system prompt windows, like toasts, phone activities, and system alerts.
    *
    * @param bool $val The systemWindowsBlocked
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setSystemWindowsBlocked($val)
    {
        $this->_propDict["systemWindowsBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usersBlockAdd
    * Indicates whether or not adding users and profiles is disabled.
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
    * Indicates whether or not adding users and profiles is disabled.
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
    * Indicates whether or not to disable removing other users from the device.
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
    * Indicates whether or not to disable removing other users from the device.
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
    * Indicates whether or not adjusting the master volume is disabled.
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
    * Indicates whether or not adjusting the master volume is disabled.
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
    * Gets the vpnAlwaysOnPackageIdentifier
    * Android app package name for app that will handle an always-on VPN connection.
    *
    * @return string The vpnAlwaysOnPackageIdentifier
    */
    public function getVpnAlwaysOnPackageIdentifier()
    {
        if (array_key_exists("vpnAlwaysOnPackageIdentifier", $this->_propDict)) {
            return $this->_propDict["vpnAlwaysOnPackageIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vpnAlwaysOnPackageIdentifier
    * Android app package name for app that will handle an always-on VPN connection.
    *
    * @param string $val The vpnAlwaysOnPackageIdentifier
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setVpnAlwaysOnPackageIdentifier($val)
    {
        $this->_propDict["vpnAlwaysOnPackageIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the vpnAlwaysOnLockdownMode
    * If an always on VPN package name is specified, whether or not to lock network traffic when that VPN is disconnected.
    *
    * @return bool The vpnAlwaysOnLockdownMode
    */
    public function getVpnAlwaysOnLockdownMode()
    {
        if (array_key_exists("vpnAlwaysOnLockdownMode", $this->_propDict)) {
            return $this->_propDict["vpnAlwaysOnLockdownMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vpnAlwaysOnLockdownMode
    * If an always on VPN package name is specified, whether or not to lock network traffic when that VPN is disconnected.
    *
    * @param bool $val The vpnAlwaysOnLockdownMode
    *
    * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public function setVpnAlwaysOnLockdownMode($val)
    {
        $this->_propDict["vpnAlwaysOnLockdownMode"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wifiBlockEditConfigurations
    * Indicates whether or not to block the user from editing the wifi connection settings.
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
    * Indicates whether or not to block the user from editing the wifi connection settings.
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
    * Indicates whether or not to block the user from editing just the networks defined by the policy.
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
    * Indicates whether or not to block the user from editing just the networks defined by the policy.
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