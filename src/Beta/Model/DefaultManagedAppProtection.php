<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefaultManagedAppProtection File
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
* DefaultManagedAppProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DefaultManagedAppProtection extends ManagedAppProtection
{
    /**
    * Gets the appDataEncryptionType
    * Type of encryption which should be used for data in a managed app. (iOS Only). Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked.
    *
    * @return ManagedAppDataEncryptionType The appDataEncryptionType
    */
    public function getAppDataEncryptionType()
    {
        if (array_key_exists("appDataEncryptionType", $this->_propDict)) {
            if (is_a($this->_propDict["appDataEncryptionType"], "Microsoft\Graph\Beta\Model\ManagedAppDataEncryptionType")) {
                return $this->_propDict["appDataEncryptionType"];
            } else {
                $this->_propDict["appDataEncryptionType"] = new ManagedAppDataEncryptionType($this->_propDict["appDataEncryptionType"]);
                return $this->_propDict["appDataEncryptionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appDataEncryptionType
    * Type of encryption which should be used for data in a managed app. (iOS Only). Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked.
    *
    * @param ManagedAppDataEncryptionType $val The appDataEncryptionType
    *
    * @return DefaultManagedAppProtection
    */
    public function setAppDataEncryptionType($val)
    {
        $this->_propDict["appDataEncryptionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the screenCaptureBlocked
    * Indicates whether screen capture is blocked. (Android only)
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
    * Indicates whether screen capture is blocked. (Android only)
    *
    * @param bool $val The screenCaptureBlocked
    *
    * @return DefaultManagedAppProtection
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the encryptAppData
    * Indicates whether managed-app data should be encrypted. (Android only)
    *
    * @return bool The encryptAppData
    */
    public function getEncryptAppData()
    {
        if (array_key_exists("encryptAppData", $this->_propDict)) {
            return $this->_propDict["encryptAppData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the encryptAppData
    * Indicates whether managed-app data should be encrypted. (Android only)
    *
    * @param bool $val The encryptAppData
    *
    * @return DefaultManagedAppProtection
    */
    public function setEncryptAppData($val)
    {
        $this->_propDict["encryptAppData"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableAppEncryptionIfDeviceEncryptionIsEnabled
    * When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only)
    *
    * @return bool The disableAppEncryptionIfDeviceEncryptionIsEnabled
    */
    public function getDisableAppEncryptionIfDeviceEncryptionIsEnabled()
    {
        if (array_key_exists("disableAppEncryptionIfDeviceEncryptionIsEnabled", $this->_propDict)) {
            return $this->_propDict["disableAppEncryptionIfDeviceEncryptionIsEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableAppEncryptionIfDeviceEncryptionIsEnabled
    * When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only)
    *
    * @param bool $val The disableAppEncryptionIfDeviceEncryptionIsEnabled
    *
    * @return DefaultManagedAppProtection
    */
    public function setDisableAppEncryptionIfDeviceEncryptionIsEnabled($val)
    {
        $this->_propDict["disableAppEncryptionIfDeviceEncryptionIsEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the minimumRequiredSdkVersion
    * Versions less than the specified version will block the managed app from accessing company data. (iOS Only)
    *
    * @return string The minimumRequiredSdkVersion
    */
    public function getMinimumRequiredSdkVersion()
    {
        if (array_key_exists("minimumRequiredSdkVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredSdkVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumRequiredSdkVersion
    * Versions less than the specified version will block the managed app from accessing company data. (iOS Only)
    *
    * @param string $val The minimumRequiredSdkVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumRequiredSdkVersion($val)
    {
        $this->_propDict["minimumRequiredSdkVersion"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customSettings
    * A set of string key and string value pairs to be sent to the affected users, unalterned by this service
     *
     * @return array The customSettings
     */
    public function getCustomSettings()
    {
        if (array_key_exists("customSettings", $this->_propDict)) {
           return $this->_propDict["customSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customSettings
    * A set of string key and string value pairs to be sent to the affected users, unalterned by this service
    *
    * @param KeyValuePair $val The customSettings
    *
    * @return DefaultManagedAppProtection
    */
    public function setCustomSettings($val)
    {
		$this->_propDict["customSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the deployedAppCount
    * Count of apps to which the current policy is deployed.
    *
    * @return int The deployedAppCount
    */
    public function getDeployedAppCount()
    {
        if (array_key_exists("deployedAppCount", $this->_propDict)) {
            return $this->_propDict["deployedAppCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deployedAppCount
    * Count of apps to which the current policy is deployed.
    *
    * @param int $val The deployedAppCount
    *
    * @return DefaultManagedAppProtection
    */
    public function setDeployedAppCount($val)
    {
        $this->_propDict["deployedAppCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minimumRequiredPatchVersion
    * Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only)
    *
    * @return string The minimumRequiredPatchVersion
    */
    public function getMinimumRequiredPatchVersion()
    {
        if (array_key_exists("minimumRequiredPatchVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredPatchVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumRequiredPatchVersion
    * Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only)
    *
    * @param string $val The minimumRequiredPatchVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumRequiredPatchVersion($val)
    {
        $this->_propDict["minimumRequiredPatchVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWarningPatchVersion
    * Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only)
    *
    * @return string The minimumWarningPatchVersion
    */
    public function getMinimumWarningPatchVersion()
    {
        if (array_key_exists("minimumWarningPatchVersion", $this->_propDict)) {
            return $this->_propDict["minimumWarningPatchVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWarningPatchVersion
    * Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only)
    *
    * @param string $val The minimumWarningPatchVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumWarningPatchVersion($val)
    {
        $this->_propDict["minimumWarningPatchVersion"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exemptedAppProtocols
    * iOS Apps in this list will be exempt from the policy and will be able to receive data from managed apps. (iOS Only)
     *
     * @return array The exemptedAppProtocols
     */
    public function getExemptedAppProtocols()
    {
        if (array_key_exists("exemptedAppProtocols", $this->_propDict)) {
           return $this->_propDict["exemptedAppProtocols"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the exemptedAppProtocols
    * iOS Apps in this list will be exempt from the policy and will be able to receive data from managed apps. (iOS Only)
    *
    * @param KeyValuePair $val The exemptedAppProtocols
    *
    * @return DefaultManagedAppProtection
    */
    public function setExemptedAppProtocols($val)
    {
		$this->_propDict["exemptedAppProtocols"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exemptedAppPackages
    * Android App packages in this list will be exempt from the policy and will be able to receive data from managed apps. (Android only)
     *
     * @return array The exemptedAppPackages
     */
    public function getExemptedAppPackages()
    {
        if (array_key_exists("exemptedAppPackages", $this->_propDict)) {
           return $this->_propDict["exemptedAppPackages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the exemptedAppPackages
    * Android App packages in this list will be exempt from the policy and will be able to receive data from managed apps. (Android only)
    *
    * @param KeyValuePair $val The exemptedAppPackages
    *
    * @return DefaultManagedAppProtection
    */
    public function setExemptedAppPackages($val)
    {
		$this->_propDict["exemptedAppPackages"] = $val;
        return $this;
    }
    
    /**
    * Gets the faceIdBlocked
    * Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only)
    *
    * @return bool The faceIdBlocked
    */
    public function getFaceIdBlocked()
    {
        if (array_key_exists("faceIdBlocked", $this->_propDict)) {
            return $this->_propDict["faceIdBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the faceIdBlocked
    * Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only)
    *
    * @param bool $val The faceIdBlocked
    *
    * @return DefaultManagedAppProtection
    */
    public function setFaceIdBlocked($val)
    {
        $this->_propDict["faceIdBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the minimumWipeSdkVersion
    * Versions less than the specified version will block the managed app from accessing company data.
    *
    * @return string The minimumWipeSdkVersion
    */
    public function getMinimumWipeSdkVersion()
    {
        if (array_key_exists("minimumWipeSdkVersion", $this->_propDict)) {
            return $this->_propDict["minimumWipeSdkVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWipeSdkVersion
    * Versions less than the specified version will block the managed app from accessing company data.
    *
    * @param string $val The minimumWipeSdkVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumWipeSdkVersion($val)
    {
        $this->_propDict["minimumWipeSdkVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWipePatchVersion
    * Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data. (Android only)
    *
    * @return string The minimumWipePatchVersion
    */
    public function getMinimumWipePatchVersion()
    {
        if (array_key_exists("minimumWipePatchVersion", $this->_propDict)) {
            return $this->_propDict["minimumWipePatchVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWipePatchVersion
    * Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data. (Android only)
    *
    * @param string $val The minimumWipePatchVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumWipePatchVersion($val)
    {
        $this->_propDict["minimumWipePatchVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowedIosDeviceModels
    * Semicolon seperated list of device models allowed, as a string, for the managed app to work. (iOS Only)
    *
    * @return string The allowedIosDeviceModels
    */
    public function getAllowedIosDeviceModels()
    {
        if (array_key_exists("allowedIosDeviceModels", $this->_propDict)) {
            return $this->_propDict["allowedIosDeviceModels"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowedIosDeviceModels
    * Semicolon seperated list of device models allowed, as a string, for the managed app to work. (iOS Only)
    *
    * @param string $val The allowedIosDeviceModels
    *
    * @return DefaultManagedAppProtection
    */
    public function setAllowedIosDeviceModels($val)
    {
        $this->_propDict["allowedIosDeviceModels"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfIosDeviceModelNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device model is not allowed. (iOS Only)
    *
    * @return ManagedAppRemediationAction The appActionIfIosDeviceModelNotAllowed
    */
    public function getAppActionIfIosDeviceModelNotAllowed()
    {
        if (array_key_exists("appActionIfIosDeviceModelNotAllowed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfIosDeviceModelNotAllowed"], "Microsoft\Graph\Beta\Model\ManagedAppRemediationAction")) {
                return $this->_propDict["appActionIfIosDeviceModelNotAllowed"];
            } else {
                $this->_propDict["appActionIfIosDeviceModelNotAllowed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfIosDeviceModelNotAllowed"]);
                return $this->_propDict["appActionIfIosDeviceModelNotAllowed"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appActionIfIosDeviceModelNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device model is not allowed. (iOS Only)
    *
    * @param ManagedAppRemediationAction $val The appActionIfIosDeviceModelNotAllowed
    *
    * @return DefaultManagedAppProtection
    */
    public function setAppActionIfIosDeviceModelNotAllowed($val)
    {
        $this->_propDict["appActionIfIosDeviceModelNotAllowed"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowedAndroidDeviceManufacturers
    * Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work. (Android only)
    *
    * @return string The allowedAndroidDeviceManufacturers
    */
    public function getAllowedAndroidDeviceManufacturers()
    {
        if (array_key_exists("allowedAndroidDeviceManufacturers", $this->_propDict)) {
            return $this->_propDict["allowedAndroidDeviceManufacturers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowedAndroidDeviceManufacturers
    * Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work. (Android only)
    *
    * @param string $val The allowedAndroidDeviceManufacturers
    *
    * @return DefaultManagedAppProtection
    */
    public function setAllowedAndroidDeviceManufacturers($val)
    {
        $this->_propDict["allowedAndroidDeviceManufacturers"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfAndroidDeviceManufacturerNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device manufacturer is not allowed. (Android only)
    *
    * @return ManagedAppRemediationAction The appActionIfAndroidDeviceManufacturerNotAllowed
    */
    public function getAppActionIfAndroidDeviceManufacturerNotAllowed()
    {
        if (array_key_exists("appActionIfAndroidDeviceManufacturerNotAllowed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"], "Microsoft\Graph\Beta\Model\ManagedAppRemediationAction")) {
                return $this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"];
            } else {
                $this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"]);
                return $this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appActionIfAndroidDeviceManufacturerNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device manufacturer is not allowed. (Android only)
    *
    * @param ManagedAppRemediationAction $val The appActionIfAndroidDeviceManufacturerNotAllowed
    *
    * @return DefaultManagedAppProtection
    */
    public function setAppActionIfAndroidDeviceManufacturerNotAllowed($val)
    {
        $this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"] = $val;
        return $this;
    }
    
    /**
    * Gets the thirdPartyKeyboardsBlocked
    * Defines if third party keyboards are allowed while accessing a managed app. (iOS Only)
    *
    * @return bool The thirdPartyKeyboardsBlocked
    */
    public function getThirdPartyKeyboardsBlocked()
    {
        if (array_key_exists("thirdPartyKeyboardsBlocked", $this->_propDict)) {
            return $this->_propDict["thirdPartyKeyboardsBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the thirdPartyKeyboardsBlocked
    * Defines if third party keyboards are allowed while accessing a managed app. (iOS Only)
    *
    * @param bool $val The thirdPartyKeyboardsBlocked
    *
    * @return DefaultManagedAppProtection
    */
    public function setThirdPartyKeyboardsBlocked($val)
    {
        $this->_propDict["thirdPartyKeyboardsBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the filterOpenInToOnlyManagedApps
    * Defines if open-in operation is supported from the managed app to the filesharing locations selected. This setting only applies when AllowedOutboundDataTransferDestinations is set to ManagedApps and DisableProtectionOfManagedOutboundOpenInData is set to False. (iOS Only)
    *
    * @return bool The filterOpenInToOnlyManagedApps
    */
    public function getFilterOpenInToOnlyManagedApps()
    {
        if (array_key_exists("filterOpenInToOnlyManagedApps", $this->_propDict)) {
            return $this->_propDict["filterOpenInToOnlyManagedApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the filterOpenInToOnlyManagedApps
    * Defines if open-in operation is supported from the managed app to the filesharing locations selected. This setting only applies when AllowedOutboundDataTransferDestinations is set to ManagedApps and DisableProtectionOfManagedOutboundOpenInData is set to False. (iOS Only)
    *
    * @param bool $val The filterOpenInToOnlyManagedApps
    *
    * @return DefaultManagedAppProtection
    */
    public function setFilterOpenInToOnlyManagedApps($val)
    {
        $this->_propDict["filterOpenInToOnlyManagedApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableProtectionOfManagedOutboundOpenInData
    * Disable protection of data transferred to other apps through IOS OpenIn option. This setting is only allowed to be True when AllowedOutboundDataTransferDestinations is set to ManagedApps. (iOS Only)
    *
    * @return bool The disableProtectionOfManagedOutboundOpenInData
    */
    public function getDisableProtectionOfManagedOutboundOpenInData()
    {
        if (array_key_exists("disableProtectionOfManagedOutboundOpenInData", $this->_propDict)) {
            return $this->_propDict["disableProtectionOfManagedOutboundOpenInData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableProtectionOfManagedOutboundOpenInData
    * Disable protection of data transferred to other apps through IOS OpenIn option. This setting is only allowed to be True when AllowedOutboundDataTransferDestinations is set to ManagedApps. (iOS Only)
    *
    * @param bool $val The disableProtectionOfManagedOutboundOpenInData
    *
    * @return DefaultManagedAppProtection
    */
    public function setDisableProtectionOfManagedOutboundOpenInData($val)
    {
        $this->_propDict["disableProtectionOfManagedOutboundOpenInData"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the protectInboundDataFromUnknownSources
    * Protect incoming data from unknown source. This setting is only allowed to be True when AllowedInboundDataTransferSources is set to AllApps. (iOS Only)
    *
    * @return bool The protectInboundDataFromUnknownSources
    */
    public function getProtectInboundDataFromUnknownSources()
    {
        if (array_key_exists("protectInboundDataFromUnknownSources", $this->_propDict)) {
            return $this->_propDict["protectInboundDataFromUnknownSources"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the protectInboundDataFromUnknownSources
    * Protect incoming data from unknown source. This setting is only allowed to be True when AllowedInboundDataTransferSources is set to AllApps. (iOS Only)
    *
    * @param bool $val The protectInboundDataFromUnknownSources
    *
    * @return DefaultManagedAppProtection
    */
    public function setProtectInboundDataFromUnknownSources($val)
    {
        $this->_propDict["protectInboundDataFromUnknownSources"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the apps
    * List of apps to which the policy is deployed.
     *
     * @return array The apps
     */
    public function getApps()
    {
        if (array_key_exists("apps", $this->_propDict)) {
           return $this->_propDict["apps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the apps
    * List of apps to which the policy is deployed.
    *
    * @param ManagedMobileApp $val The apps
    *
    * @return DefaultManagedAppProtection
    */
    public function setApps($val)
    {
		$this->_propDict["apps"] = $val;
        return $this;
    }
    
    /**
    * Gets the deploymentSummary
    * Navigation property to deployment summary of the configuration.
    *
    * @return ManagedAppPolicyDeploymentSummary The deploymentSummary
    */
    public function getDeploymentSummary()
    {
        if (array_key_exists("deploymentSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentSummary"], "Microsoft\Graph\Beta\Model\ManagedAppPolicyDeploymentSummary")) {
                return $this->_propDict["deploymentSummary"];
            } else {
                $this->_propDict["deploymentSummary"] = new ManagedAppPolicyDeploymentSummary($this->_propDict["deploymentSummary"]);
                return $this->_propDict["deploymentSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deploymentSummary
    * Navigation property to deployment summary of the configuration.
    *
    * @param ManagedAppPolicyDeploymentSummary $val The deploymentSummary
    *
    * @return DefaultManagedAppProtection
    */
    public function setDeploymentSummary($val)
    {
        $this->_propDict["deploymentSummary"] = $val;
        return $this;
    }
    
}