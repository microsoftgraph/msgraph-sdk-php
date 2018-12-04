<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPhone81GeneralConfiguration File
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
* WindowsPhone81GeneralConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsPhone81GeneralConfiguration extends DeviceConfiguration
{
    /**
    * Gets the applyOnlyToWindowsPhone81
    *
    * @return bool The applyOnlyToWindowsPhone81
    */
    public function getApplyOnlyToWindowsPhone81()
    {
        if (array_key_exists("applyOnlyToWindowsPhone81", $this->_propDict)) {
            return $this->_propDict["applyOnlyToWindowsPhone81"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applyOnlyToWindowsPhone81
    *
    * @param bool $val The applyOnlyToWindowsPhone81
    *
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setApplyOnlyToWindowsPhone81($val)
    {
        $this->_propDict["applyOnlyToWindowsPhone81"] = boolval($val);
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
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setAppsBlockCopyPaste($val)
    {
        $this->_propDict["appsBlockCopyPaste"] = boolval($val);
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
    * @return WindowsPhone81GeneralConfiguration
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
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setCameraBlocked($val)
    {
        $this->_propDict["cameraBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockWifiTethering
    *
    * @return bool The cellularBlockWifiTethering
    */
    public function getCellularBlockWifiTethering()
    {
        if (array_key_exists("cellularBlockWifiTethering", $this->_propDict)) {
            return $this->_propDict["cellularBlockWifiTethering"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockWifiTethering
    *
    * @param bool $val The cellularBlockWifiTethering
    *
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setCellularBlockWifiTethering($val)
    {
        $this->_propDict["cellularBlockWifiTethering"] = boolval($val);
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
    * @return WindowsPhone81GeneralConfiguration
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
    * @return WindowsPhone81GeneralConfiguration
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
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setDiagnosticDataBlockSubmission($val)
    {
        $this->_propDict["diagnosticDataBlockSubmission"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the emailBlockAddingAccounts
    *
    * @return bool The emailBlockAddingAccounts
    */
    public function getEmailBlockAddingAccounts()
    {
        if (array_key_exists("emailBlockAddingAccounts", $this->_propDict)) {
            return $this->_propDict["emailBlockAddingAccounts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailBlockAddingAccounts
    *
    * @param bool $val The emailBlockAddingAccounts
    *
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setEmailBlockAddingAccounts($val)
    {
        $this->_propDict["emailBlockAddingAccounts"] = boolval($val);
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
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setLocationServicesBlocked($val)
    {
        $this->_propDict["locationServicesBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the microsoftAccountBlocked
    *
    * @return bool The microsoftAccountBlocked
    */
    public function getMicrosoftAccountBlocked()
    {
        if (array_key_exists("microsoftAccountBlocked", $this->_propDict)) {
            return $this->_propDict["microsoftAccountBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the microsoftAccountBlocked
    *
    * @param bool $val The microsoftAccountBlocked
    *
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setMicrosoftAccountBlocked($val)
    {
        $this->_propDict["microsoftAccountBlocked"] = boolval($val);
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
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setNfcBlocked($val)
    {
        $this->_propDict["nfcBlocked"] = boolval($val);
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
    * @return WindowsPhone81GeneralConfiguration
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
    * @return WindowsPhone81GeneralConfiguration
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
    * @return WindowsPhone81GeneralConfiguration
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
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
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
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setPasswordMinimumCharacterSetCount($val)
    {
        $this->_propDict["passwordMinimumCharacterSetCount"] = intval($val);
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
    * @return WindowsPhone81GeneralConfiguration
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
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"] = intval($val);
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
    * @return WindowsPhone81GeneralConfiguration
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
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
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
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
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
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setStorageBlockRemovableStorage($val)
    {
        $this->_propDict["storageBlockRemovableStorage"] = boolval($val);
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
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setStorageRequireEncryption($val)
    {
        $this->_propDict["storageRequireEncryption"] = boolval($val);
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
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setWebBrowserBlocked($val)
    {
        $this->_propDict["webBrowserBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wifiBlocked
    *
    * @return bool The wifiBlocked
    */
    public function getWifiBlocked()
    {
        if (array_key_exists("wifiBlocked", $this->_propDict)) {
            return $this->_propDict["wifiBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wifiBlocked
    *
    * @param bool $val The wifiBlocked
    *
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setWifiBlocked($val)
    {
        $this->_propDict["wifiBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wifiBlockAutomaticConnectHotspots
    *
    * @return bool The wifiBlockAutomaticConnectHotspots
    */
    public function getWifiBlockAutomaticConnectHotspots()
    {
        if (array_key_exists("wifiBlockAutomaticConnectHotspots", $this->_propDict)) {
            return $this->_propDict["wifiBlockAutomaticConnectHotspots"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wifiBlockAutomaticConnectHotspots
    *
    * @param bool $val The wifiBlockAutomaticConnectHotspots
    *
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setWifiBlockAutomaticConnectHotspots($val)
    {
        $this->_propDict["wifiBlockAutomaticConnectHotspots"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wifiBlockHotspotReporting
    *
    * @return bool The wifiBlockHotspotReporting
    */
    public function getWifiBlockHotspotReporting()
    {
        if (array_key_exists("wifiBlockHotspotReporting", $this->_propDict)) {
            return $this->_propDict["wifiBlockHotspotReporting"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wifiBlockHotspotReporting
    *
    * @param bool $val The wifiBlockHotspotReporting
    *
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setWifiBlockHotspotReporting($val)
    {
        $this->_propDict["wifiBlockHotspotReporting"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsStoreBlocked
    *
    * @return bool The windowsStoreBlocked
    */
    public function getWindowsStoreBlocked()
    {
        if (array_key_exists("windowsStoreBlocked", $this->_propDict)) {
            return $this->_propDict["windowsStoreBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsStoreBlocked
    *
    * @param bool $val The windowsStoreBlocked
    *
    * @return WindowsPhone81GeneralConfiguration
    */
    public function setWindowsStoreBlocked($val)
    {
        $this->_propDict["windowsStoreBlocked"] = boolval($val);
        return $this;
    }
    
}