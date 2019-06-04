<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedAppProtection File
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
* AndroidManagedAppProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidManagedAppProtection extends TargetedManagedAppProtection
{
    /**
    * Gets the screenCaptureBlocked
    * Indicates whether a managed user can take screen captures of managed apps
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
    * Indicates whether a managed user can take screen captures of managed apps
    *
    * @param bool $val The screenCaptureBlocked
    *
    * @return AndroidManagedAppProtection
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableAppEncryptionIfDeviceEncryptionIsEnabled
    * When this setting is enabled, app level encryption is disabled if device level encryption is enabled
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
    * When this setting is enabled, app level encryption is disabled if device level encryption is enabled
    *
    * @param bool $val The disableAppEncryptionIfDeviceEncryptionIsEnabled
    *
    * @return AndroidManagedAppProtection
    */
    public function setDisableAppEncryptionIfDeviceEncryptionIsEnabled($val)
    {
        $this->_propDict["disableAppEncryptionIfDeviceEncryptionIsEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the encryptAppData
    * Indicates whether application data for managed apps should be encrypted
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
    * Indicates whether application data for managed apps should be encrypted
    *
    * @param bool $val The encryptAppData
    *
    * @return AndroidManagedAppProtection
    */
    public function setEncryptAppData($val)
    {
        $this->_propDict["encryptAppData"] = boolval($val);
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
    * @return AndroidManagedAppProtection
    */
    public function setDeployedAppCount($val)
    {
        $this->_propDict["deployedAppCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minimumRequiredPatchVersion
    * Define the oldest required Android security patch level a user can have to gain secure access to the app.
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
    * Define the oldest required Android security patch level a user can have to gain secure access to the app.
    *
    * @param string $val The minimumRequiredPatchVersion
    *
    * @return AndroidManagedAppProtection
    */
    public function setMinimumRequiredPatchVersion($val)
    {
        $this->_propDict["minimumRequiredPatchVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWarningPatchVersion
    * Define the oldest recommended Android security patch level a user can have for secure access to the app.
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
    * Define the oldest recommended Android security patch level a user can have for secure access to the app.
    *
    * @param string $val The minimumWarningPatchVersion
    *
    * @return AndroidManagedAppProtection
    */
    public function setMinimumWarningPatchVersion($val)
    {
        $this->_propDict["minimumWarningPatchVersion"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exemptedAppPackages
    * App packages in this list will be exempt from the policy and will be able to receive data from managed apps.
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
    * App packages in this list will be exempt from the policy and will be able to receive data from managed apps.
    *
    * @param KeyValuePair $val The exemptedAppPackages
    *
    * @return AndroidManagedAppProtection
    */
    public function setExemptedAppPackages($val)
    {
		$this->_propDict["exemptedAppPackages"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWipePatchVersion
    * Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data.
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
    * Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data.
    *
    * @param string $val The minimumWipePatchVersion
    *
    * @return AndroidManagedAppProtection
    */
    public function setMinimumWipePatchVersion($val)
    {
        $this->_propDict["minimumWipePatchVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowedAndroidDeviceManufacturers
    * Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work.
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
    * Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work.
    *
    * @param string $val The allowedAndroidDeviceManufacturers
    *
    * @return AndroidManagedAppProtection
    */
    public function setAllowedAndroidDeviceManufacturers($val)
    {
        $this->_propDict["allowedAndroidDeviceManufacturers"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfAndroidDeviceManufacturerNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device manufacturer is not allowed.
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
    * Defines a managed app behavior, either block or wipe, if the specified device manufacturer is not allowed.
    *
    * @param ManagedAppRemediationAction $val The appActionIfAndroidDeviceManufacturerNotAllowed
    *
    * @return AndroidManagedAppProtection
    */
    public function setAppActionIfAndroidDeviceManufacturerNotAllowed($val)
    {
        $this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"] = $val;
        return $this;
    }
    
    /**
    * Gets the requiredAndroidSafetyNetDeviceAttestationType
    * Defines the Android SafetyNet Device Attestation requirement for a managed app to work.
    *
    * @return AndroidManagedAppSafetyNetDeviceAttestationType The requiredAndroidSafetyNetDeviceAttestationType
    */
    public function getRequiredAndroidSafetyNetDeviceAttestationType()
    {
        if (array_key_exists("requiredAndroidSafetyNetDeviceAttestationType", $this->_propDict)) {
            if (is_a($this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"], "Microsoft\Graph\Beta\Model\AndroidManagedAppSafetyNetDeviceAttestationType")) {
                return $this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"];
            } else {
                $this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"] = new AndroidManagedAppSafetyNetDeviceAttestationType($this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"]);
                return $this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requiredAndroidSafetyNetDeviceAttestationType
    * Defines the Android SafetyNet Device Attestation requirement for a managed app to work.
    *
    * @param AndroidManagedAppSafetyNetDeviceAttestationType $val The requiredAndroidSafetyNetDeviceAttestationType
    *
    * @return AndroidManagedAppProtection
    */
    public function setRequiredAndroidSafetyNetDeviceAttestationType($val)
    {
        $this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfAndroidSafetyNetDeviceAttestationFailed
    * Defines a managed app behavior, either warn or block, if the specified Android SafetyNet Attestation requirment fails.
    *
    * @return ManagedAppRemediationAction The appActionIfAndroidSafetyNetDeviceAttestationFailed
    */
    public function getAppActionIfAndroidSafetyNetDeviceAttestationFailed()
    {
        if (array_key_exists("appActionIfAndroidSafetyNetDeviceAttestationFailed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"], "Microsoft\Graph\Beta\Model\ManagedAppRemediationAction")) {
                return $this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"];
            } else {
                $this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"]);
                return $this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appActionIfAndroidSafetyNetDeviceAttestationFailed
    * Defines a managed app behavior, either warn or block, if the specified Android SafetyNet Attestation requirment fails.
    *
    * @param ManagedAppRemediationAction $val The appActionIfAndroidSafetyNetDeviceAttestationFailed
    *
    * @return AndroidManagedAppProtection
    */
    public function setAppActionIfAndroidSafetyNetDeviceAttestationFailed($val)
    {
        $this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"] = $val;
        return $this;
    }
    
    /**
    * Gets the requiredAndroidSafetyNetAppsVerificationType
    * Defines the Android SafetyNet Apps Verification requirement for a managed app to work.
    *
    * @return AndroidManagedAppSafetyNetAppsVerificationType The requiredAndroidSafetyNetAppsVerificationType
    */
    public function getRequiredAndroidSafetyNetAppsVerificationType()
    {
        if (array_key_exists("requiredAndroidSafetyNetAppsVerificationType", $this->_propDict)) {
            if (is_a($this->_propDict["requiredAndroidSafetyNetAppsVerificationType"], "Microsoft\Graph\Beta\Model\AndroidManagedAppSafetyNetAppsVerificationType")) {
                return $this->_propDict["requiredAndroidSafetyNetAppsVerificationType"];
            } else {
                $this->_propDict["requiredAndroidSafetyNetAppsVerificationType"] = new AndroidManagedAppSafetyNetAppsVerificationType($this->_propDict["requiredAndroidSafetyNetAppsVerificationType"]);
                return $this->_propDict["requiredAndroidSafetyNetAppsVerificationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requiredAndroidSafetyNetAppsVerificationType
    * Defines the Android SafetyNet Apps Verification requirement for a managed app to work.
    *
    * @param AndroidManagedAppSafetyNetAppsVerificationType $val The requiredAndroidSafetyNetAppsVerificationType
    *
    * @return AndroidManagedAppProtection
    */
    public function setRequiredAndroidSafetyNetAppsVerificationType($val)
    {
        $this->_propDict["requiredAndroidSafetyNetAppsVerificationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfAndroidSafetyNetAppsVerificationFailed
    * Defines a managed app behavior, either warn or block, if the specified Android App Verification requirment fails.
    *
    * @return ManagedAppRemediationAction The appActionIfAndroidSafetyNetAppsVerificationFailed
    */
    public function getAppActionIfAndroidSafetyNetAppsVerificationFailed()
    {
        if (array_key_exists("appActionIfAndroidSafetyNetAppsVerificationFailed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"], "Microsoft\Graph\Beta\Model\ManagedAppRemediationAction")) {
                return $this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"];
            } else {
                $this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"]);
                return $this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appActionIfAndroidSafetyNetAppsVerificationFailed
    * Defines a managed app behavior, either warn or block, if the specified Android App Verification requirment fails.
    *
    * @param ManagedAppRemediationAction $val The appActionIfAndroidSafetyNetAppsVerificationFailed
    *
    * @return AndroidManagedAppProtection
    */
    public function setAppActionIfAndroidSafetyNetAppsVerificationFailed($val)
    {
        $this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"] = $val;
        return $this;
    }
    
    /**
    * Gets the customBrowserPackageId
    * Unique identifier of a custom browser to open weblink on Android.
    *
    * @return string The customBrowserPackageId
    */
    public function getCustomBrowserPackageId()
    {
        if (array_key_exists("customBrowserPackageId", $this->_propDict)) {
            return $this->_propDict["customBrowserPackageId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customBrowserPackageId
    * Unique identifier of a custom browser to open weblink on Android.
    *
    * @param string $val The customBrowserPackageId
    *
    * @return AndroidManagedAppProtection
    */
    public function setCustomBrowserPackageId($val)
    {
        $this->_propDict["customBrowserPackageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the customBrowserDisplayName
    * Friendly name of the preferred custom browser to open weblink on Android.
    *
    * @return string The customBrowserDisplayName
    */
    public function getCustomBrowserDisplayName()
    {
        if (array_key_exists("customBrowserDisplayName", $this->_propDict)) {
            return $this->_propDict["customBrowserDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customBrowserDisplayName
    * Friendly name of the preferred custom browser to open weblink on Android.
    *
    * @param string $val The customBrowserDisplayName
    *
    * @return AndroidManagedAppProtection
    */
    public function setCustomBrowserDisplayName($val)
    {
        $this->_propDict["customBrowserDisplayName"] = $val;
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
    * @return AndroidManagedAppProtection
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
    * @return AndroidManagedAppProtection
    */
    public function setDeploymentSummary($val)
    {
        $this->_propDict["deploymentSummary"] = $val;
        return $this;
    }
    
}