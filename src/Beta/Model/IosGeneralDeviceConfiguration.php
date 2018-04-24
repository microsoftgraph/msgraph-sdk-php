<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosGeneralDeviceConfiguration File
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
* IosGeneralDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosGeneralDeviceConfiguration extends DeviceConfiguration
{
    /**
    * Gets the accountBlockModification
    *
    * @return bool The accountBlockModification
    */
    public function getAccountBlockModification()
    {
        if (array_key_exists("accountBlockModification", $this->_propDict)) {
            return $this->_propDict["accountBlockModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountBlockModification
    *
    * @param bool $val The accountBlockModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAccountBlockModification($val)
    {
        $this->_propDict["accountBlockModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the activationLockAllowWhenSupervised
    *
    * @return bool The activationLockAllowWhenSupervised
    */
    public function getActivationLockAllowWhenSupervised()
    {
        if (array_key_exists("activationLockAllowWhenSupervised", $this->_propDict)) {
            return $this->_propDict["activationLockAllowWhenSupervised"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activationLockAllowWhenSupervised
    *
    * @param bool $val The activationLockAllowWhenSupervised
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setActivationLockAllowWhenSupervised($val)
    {
        $this->_propDict["activationLockAllowWhenSupervised"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the airDropBlocked
    *
    * @return bool The airDropBlocked
    */
    public function getAirDropBlocked()
    {
        if (array_key_exists("airDropBlocked", $this->_propDict)) {
            return $this->_propDict["airDropBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the airDropBlocked
    *
    * @param bool $val The airDropBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAirDropBlocked($val)
    {
        $this->_propDict["airDropBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the airDropForceUnmanagedDropTarget
    *
    * @return bool The airDropForceUnmanagedDropTarget
    */
    public function getAirDropForceUnmanagedDropTarget()
    {
        if (array_key_exists("airDropForceUnmanagedDropTarget", $this->_propDict)) {
            return $this->_propDict["airDropForceUnmanagedDropTarget"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the airDropForceUnmanagedDropTarget
    *
    * @param bool $val The airDropForceUnmanagedDropTarget
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAirDropForceUnmanagedDropTarget($val)
    {
        $this->_propDict["airDropForceUnmanagedDropTarget"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the airPlayForcePairingPasswordForOutgoingRequests
    *
    * @return bool The airPlayForcePairingPasswordForOutgoingRequests
    */
    public function getAirPlayForcePairingPasswordForOutgoingRequests()
    {
        if (array_key_exists("airPlayForcePairingPasswordForOutgoingRequests", $this->_propDict)) {
            return $this->_propDict["airPlayForcePairingPasswordForOutgoingRequests"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the airPlayForcePairingPasswordForOutgoingRequests
    *
    * @param bool $val The airPlayForcePairingPasswordForOutgoingRequests
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAirPlayForcePairingPasswordForOutgoingRequests($val)
    {
        $this->_propDict["airPlayForcePairingPasswordForOutgoingRequests"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appleWatchBlockPairing
    *
    * @return bool The appleWatchBlockPairing
    */
    public function getAppleWatchBlockPairing()
    {
        if (array_key_exists("appleWatchBlockPairing", $this->_propDict)) {
            return $this->_propDict["appleWatchBlockPairing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleWatchBlockPairing
    *
    * @param bool $val The appleWatchBlockPairing
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppleWatchBlockPairing($val)
    {
        $this->_propDict["appleWatchBlockPairing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appleWatchForceWristDetection
    *
    * @return bool The appleWatchForceWristDetection
    */
    public function getAppleWatchForceWristDetection()
    {
        if (array_key_exists("appleWatchForceWristDetection", $this->_propDict)) {
            return $this->_propDict["appleWatchForceWristDetection"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleWatchForceWristDetection
    *
    * @param bool $val The appleWatchForceWristDetection
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppleWatchForceWristDetection($val)
    {
        $this->_propDict["appleWatchForceWristDetection"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appleNewsBlocked
    *
    * @return bool The appleNewsBlocked
    */
    public function getAppleNewsBlocked()
    {
        if (array_key_exists("appleNewsBlocked", $this->_propDict)) {
            return $this->_propDict["appleNewsBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleNewsBlocked
    *
    * @param bool $val The appleNewsBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppleNewsBlocked($val)
    {
        $this->_propDict["appleNewsBlocked"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the appsSingleAppModeList
     *
     * @return array The appsSingleAppModeList
     */
    public function getAppsSingleAppModeList()
    {
        if (array_key_exists("appsSingleAppModeList", $this->_propDict)) {
           return $this->_propDict["appsSingleAppModeList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appsSingleAppModeList
    *
    * @param AppListItem $val The appsSingleAppModeList
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppsSingleAppModeList($val)
    {
		$this->_propDict["appsSingleAppModeList"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appsVisibilityList
     *
     * @return array The appsVisibilityList
     */
    public function getAppsVisibilityList()
    {
        if (array_key_exists("appsVisibilityList", $this->_propDict)) {
           return $this->_propDict["appsVisibilityList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appsVisibilityList
    *
    * @param AppListItem $val The appsVisibilityList
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppsVisibilityList($val)
    {
		$this->_propDict["appsVisibilityList"] = $val;
        return $this;
    }
    
    /**
    * Gets the appsVisibilityListType
    *
    * @return AppListType The appsVisibilityListType
    */
    public function getAppsVisibilityListType()
    {
        if (array_key_exists("appsVisibilityListType", $this->_propDict)) {
            if (is_a($this->_propDict["appsVisibilityListType"], "Microsoft\Graph\Beta\Model\AppListType")) {
                return $this->_propDict["appsVisibilityListType"];
            } else {
                $this->_propDict["appsVisibilityListType"] = new AppListType($this->_propDict["appsVisibilityListType"]);
                return $this->_propDict["appsVisibilityListType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appsVisibilityListType
    *
    * @param AppListType $val The appsVisibilityListType
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppsVisibilityListType($val)
    {
        $this->_propDict["appsVisibilityListType"] = $val;
        return $this;
    }
    
    /**
    * Gets the appStoreBlockAutomaticDownloads
    *
    * @return bool The appStoreBlockAutomaticDownloads
    */
    public function getAppStoreBlockAutomaticDownloads()
    {
        if (array_key_exists("appStoreBlockAutomaticDownloads", $this->_propDict)) {
            return $this->_propDict["appStoreBlockAutomaticDownloads"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreBlockAutomaticDownloads
    *
    * @param bool $val The appStoreBlockAutomaticDownloads
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppStoreBlockAutomaticDownloads($val)
    {
        $this->_propDict["appStoreBlockAutomaticDownloads"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appStoreBlocked
    *
    * @return bool The appStoreBlocked
    */
    public function getAppStoreBlocked()
    {
        if (array_key_exists("appStoreBlocked", $this->_propDict)) {
            return $this->_propDict["appStoreBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreBlocked
    *
    * @param bool $val The appStoreBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppStoreBlocked($val)
    {
        $this->_propDict["appStoreBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appStoreBlockInAppPurchases
    *
    * @return bool The appStoreBlockInAppPurchases
    */
    public function getAppStoreBlockInAppPurchases()
    {
        if (array_key_exists("appStoreBlockInAppPurchases", $this->_propDict)) {
            return $this->_propDict["appStoreBlockInAppPurchases"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreBlockInAppPurchases
    *
    * @param bool $val The appStoreBlockInAppPurchases
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppStoreBlockInAppPurchases($val)
    {
        $this->_propDict["appStoreBlockInAppPurchases"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appStoreBlockUIAppInstallation
    *
    * @return bool The appStoreBlockUIAppInstallation
    */
    public function getAppStoreBlockUIAppInstallation()
    {
        if (array_key_exists("appStoreBlockUIAppInstallation", $this->_propDict)) {
            return $this->_propDict["appStoreBlockUIAppInstallation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreBlockUIAppInstallation
    *
    * @param bool $val The appStoreBlockUIAppInstallation
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppStoreBlockUIAppInstallation($val)
    {
        $this->_propDict["appStoreBlockUIAppInstallation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appStoreRequirePassword
    *
    * @return bool The appStoreRequirePassword
    */
    public function getAppStoreRequirePassword()
    {
        if (array_key_exists("appStoreRequirePassword", $this->_propDict)) {
            return $this->_propDict["appStoreRequirePassword"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreRequirePassword
    *
    * @param bool $val The appStoreRequirePassword
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppStoreRequirePassword($val)
    {
        $this->_propDict["appStoreRequirePassword"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bluetoothBlockModification
    *
    * @return bool The bluetoothBlockModification
    */
    public function getBluetoothBlockModification()
    {
        if (array_key_exists("bluetoothBlockModification", $this->_propDict)) {
            return $this->_propDict["bluetoothBlockModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bluetoothBlockModification
    *
    * @param bool $val The bluetoothBlockModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setBluetoothBlockModification($val)
    {
        $this->_propDict["bluetoothBlockModification"] = boolval($val);
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
    * @return IosGeneralDeviceConfiguration
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
    * @return IosGeneralDeviceConfiguration
    */
    public function setCellularBlockDataRoaming($val)
    {
        $this->_propDict["cellularBlockDataRoaming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockGlobalBackgroundFetchWhileRoaming
    *
    * @return bool The cellularBlockGlobalBackgroundFetchWhileRoaming
    */
    public function getCellularBlockGlobalBackgroundFetchWhileRoaming()
    {
        if (array_key_exists("cellularBlockGlobalBackgroundFetchWhileRoaming", $this->_propDict)) {
            return $this->_propDict["cellularBlockGlobalBackgroundFetchWhileRoaming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockGlobalBackgroundFetchWhileRoaming
    *
    * @param bool $val The cellularBlockGlobalBackgroundFetchWhileRoaming
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setCellularBlockGlobalBackgroundFetchWhileRoaming($val)
    {
        $this->_propDict["cellularBlockGlobalBackgroundFetchWhileRoaming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockPerAppDataModification
    *
    * @return bool The cellularBlockPerAppDataModification
    */
    public function getCellularBlockPerAppDataModification()
    {
        if (array_key_exists("cellularBlockPerAppDataModification", $this->_propDict)) {
            return $this->_propDict["cellularBlockPerAppDataModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockPerAppDataModification
    *
    * @param bool $val The cellularBlockPerAppDataModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setCellularBlockPerAppDataModification($val)
    {
        $this->_propDict["cellularBlockPerAppDataModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockPersonalHotspot
    *
    * @return bool The cellularBlockPersonalHotspot
    */
    public function getCellularBlockPersonalHotspot()
    {
        if (array_key_exists("cellularBlockPersonalHotspot", $this->_propDict)) {
            return $this->_propDict["cellularBlockPersonalHotspot"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockPersonalHotspot
    *
    * @param bool $val The cellularBlockPersonalHotspot
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setCellularBlockPersonalHotspot($val)
    {
        $this->_propDict["cellularBlockPersonalHotspot"] = boolval($val);
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
    * @return IosGeneralDeviceConfiguration
    */
    public function setCellularBlockVoiceRoaming($val)
    {
        $this->_propDict["cellularBlockVoiceRoaming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the certificatesBlockUntrustedTlsCertificates
    *
    * @return bool The certificatesBlockUntrustedTlsCertificates
    */
    public function getCertificatesBlockUntrustedTlsCertificates()
    {
        if (array_key_exists("certificatesBlockUntrustedTlsCertificates", $this->_propDict)) {
            return $this->_propDict["certificatesBlockUntrustedTlsCertificates"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificatesBlockUntrustedTlsCertificates
    *
    * @param bool $val The certificatesBlockUntrustedTlsCertificates
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setCertificatesBlockUntrustedTlsCertificates($val)
    {
        $this->_propDict["certificatesBlockUntrustedTlsCertificates"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the classroomAppBlockRemoteScreenObservation
    *
    * @return bool The classroomAppBlockRemoteScreenObservation
    */
    public function getClassroomAppBlockRemoteScreenObservation()
    {
        if (array_key_exists("classroomAppBlockRemoteScreenObservation", $this->_propDict)) {
            return $this->_propDict["classroomAppBlockRemoteScreenObservation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classroomAppBlockRemoteScreenObservation
    *
    * @param bool $val The classroomAppBlockRemoteScreenObservation
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setClassroomAppBlockRemoteScreenObservation($val)
    {
        $this->_propDict["classroomAppBlockRemoteScreenObservation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the classroomAppForceUnpromptedScreenObservation
    *
    * @return bool The classroomAppForceUnpromptedScreenObservation
    */
    public function getClassroomAppForceUnpromptedScreenObservation()
    {
        if (array_key_exists("classroomAppForceUnpromptedScreenObservation", $this->_propDict)) {
            return $this->_propDict["classroomAppForceUnpromptedScreenObservation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classroomAppForceUnpromptedScreenObservation
    *
    * @param bool $val The classroomAppForceUnpromptedScreenObservation
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setClassroomAppForceUnpromptedScreenObservation($val)
    {
        $this->_propDict["classroomAppForceUnpromptedScreenObservation"] = boolval($val);
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
    * @return IosGeneralDeviceConfiguration
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
            if (is_a($this->_propDict["compliantAppListType"], "Microsoft\Graph\Beta\Model\AppListType")) {
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
    * @return IosGeneralDeviceConfiguration
    */
    public function setCompliantAppListType($val)
    {
        $this->_propDict["compliantAppListType"] = $val;
        return $this;
    }
    
    /**
    * Gets the configurationProfileBlockChanges
    *
    * @return bool The configurationProfileBlockChanges
    */
    public function getConfigurationProfileBlockChanges()
    {
        if (array_key_exists("configurationProfileBlockChanges", $this->_propDict)) {
            return $this->_propDict["configurationProfileBlockChanges"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configurationProfileBlockChanges
    *
    * @param bool $val The configurationProfileBlockChanges
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setConfigurationProfileBlockChanges($val)
    {
        $this->_propDict["configurationProfileBlockChanges"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the definitionLookupBlocked
    *
    * @return bool The definitionLookupBlocked
    */
    public function getDefinitionLookupBlocked()
    {
        if (array_key_exists("definitionLookupBlocked", $this->_propDict)) {
            return $this->_propDict["definitionLookupBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the definitionLookupBlocked
    *
    * @param bool $val The definitionLookupBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDefinitionLookupBlocked($val)
    {
        $this->_propDict["definitionLookupBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceBlockEnableRestrictions
    *
    * @return bool The deviceBlockEnableRestrictions
    */
    public function getDeviceBlockEnableRestrictions()
    {
        if (array_key_exists("deviceBlockEnableRestrictions", $this->_propDict)) {
            return $this->_propDict["deviceBlockEnableRestrictions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceBlockEnableRestrictions
    *
    * @param bool $val The deviceBlockEnableRestrictions
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDeviceBlockEnableRestrictions($val)
    {
        $this->_propDict["deviceBlockEnableRestrictions"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceBlockEraseContentAndSettings
    *
    * @return bool The deviceBlockEraseContentAndSettings
    */
    public function getDeviceBlockEraseContentAndSettings()
    {
        if (array_key_exists("deviceBlockEraseContentAndSettings", $this->_propDict)) {
            return $this->_propDict["deviceBlockEraseContentAndSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceBlockEraseContentAndSettings
    *
    * @param bool $val The deviceBlockEraseContentAndSettings
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDeviceBlockEraseContentAndSettings($val)
    {
        $this->_propDict["deviceBlockEraseContentAndSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceBlockNameModification
    *
    * @return bool The deviceBlockNameModification
    */
    public function getDeviceBlockNameModification()
    {
        if (array_key_exists("deviceBlockNameModification", $this->_propDict)) {
            return $this->_propDict["deviceBlockNameModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceBlockNameModification
    *
    * @param bool $val The deviceBlockNameModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDeviceBlockNameModification($val)
    {
        $this->_propDict["deviceBlockNameModification"] = boolval($val);
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
    * @return IosGeneralDeviceConfiguration
    */
    public function setDiagnosticDataBlockSubmission($val)
    {
        $this->_propDict["diagnosticDataBlockSubmission"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the diagnosticDataBlockSubmissionModification
    *
    * @return bool The diagnosticDataBlockSubmissionModification
    */
    public function getDiagnosticDataBlockSubmissionModification()
    {
        if (array_key_exists("diagnosticDataBlockSubmissionModification", $this->_propDict)) {
            return $this->_propDict["diagnosticDataBlockSubmissionModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the diagnosticDataBlockSubmissionModification
    *
    * @param bool $val The diagnosticDataBlockSubmissionModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDiagnosticDataBlockSubmissionModification($val)
    {
        $this->_propDict["diagnosticDataBlockSubmissionModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the documentsBlockManagedDocumentsInUnmanagedApps
    *
    * @return bool The documentsBlockManagedDocumentsInUnmanagedApps
    */
    public function getDocumentsBlockManagedDocumentsInUnmanagedApps()
    {
        if (array_key_exists("documentsBlockManagedDocumentsInUnmanagedApps", $this->_propDict)) {
            return $this->_propDict["documentsBlockManagedDocumentsInUnmanagedApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the documentsBlockManagedDocumentsInUnmanagedApps
    *
    * @param bool $val The documentsBlockManagedDocumentsInUnmanagedApps
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDocumentsBlockManagedDocumentsInUnmanagedApps($val)
    {
        $this->_propDict["documentsBlockManagedDocumentsInUnmanagedApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the documentsBlockUnmanagedDocumentsInManagedApps
    *
    * @return bool The documentsBlockUnmanagedDocumentsInManagedApps
    */
    public function getDocumentsBlockUnmanagedDocumentsInManagedApps()
    {
        if (array_key_exists("documentsBlockUnmanagedDocumentsInManagedApps", $this->_propDict)) {
            return $this->_propDict["documentsBlockUnmanagedDocumentsInManagedApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the documentsBlockUnmanagedDocumentsInManagedApps
    *
    * @param bool $val The documentsBlockUnmanagedDocumentsInManagedApps
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDocumentsBlockUnmanagedDocumentsInManagedApps($val)
    {
        $this->_propDict["documentsBlockUnmanagedDocumentsInManagedApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the emailInDomainSuffixes
    *
    * @return string The emailInDomainSuffixes
    */
    public function getEmailInDomainSuffixes()
    {
        if (array_key_exists("emailInDomainSuffixes", $this->_propDict)) {
            return $this->_propDict["emailInDomainSuffixes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailInDomainSuffixes
    *
    * @param string $val The emailInDomainSuffixes
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setEmailInDomainSuffixes($val)
    {
        $this->_propDict["emailInDomainSuffixes"] = $val;
        return $this;
    }
    
    /**
    * Gets the enterpriseAppBlockTrust
    *
    * @return bool The enterpriseAppBlockTrust
    */
    public function getEnterpriseAppBlockTrust()
    {
        if (array_key_exists("enterpriseAppBlockTrust", $this->_propDict)) {
            return $this->_propDict["enterpriseAppBlockTrust"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseAppBlockTrust
    *
    * @param bool $val The enterpriseAppBlockTrust
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setEnterpriseAppBlockTrust($val)
    {
        $this->_propDict["enterpriseAppBlockTrust"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enterpriseAppBlockTrustModification
    *
    * @return bool The enterpriseAppBlockTrustModification
    */
    public function getEnterpriseAppBlockTrustModification()
    {
        if (array_key_exists("enterpriseAppBlockTrustModification", $this->_propDict)) {
            return $this->_propDict["enterpriseAppBlockTrustModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseAppBlockTrustModification
    *
    * @param bool $val The enterpriseAppBlockTrustModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setEnterpriseAppBlockTrustModification($val)
    {
        $this->_propDict["enterpriseAppBlockTrustModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the faceTimeBlocked
    *
    * @return bool The faceTimeBlocked
    */
    public function getFaceTimeBlocked()
    {
        if (array_key_exists("faceTimeBlocked", $this->_propDict)) {
            return $this->_propDict["faceTimeBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the faceTimeBlocked
    *
    * @param bool $val The faceTimeBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setFaceTimeBlocked($val)
    {
        $this->_propDict["faceTimeBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the findMyFriendsBlocked
    *
    * @return bool The findMyFriendsBlocked
    */
    public function getFindMyFriendsBlocked()
    {
        if (array_key_exists("findMyFriendsBlocked", $this->_propDict)) {
            return $this->_propDict["findMyFriendsBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the findMyFriendsBlocked
    *
    * @param bool $val The findMyFriendsBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setFindMyFriendsBlocked($val)
    {
        $this->_propDict["findMyFriendsBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the gamingBlockGameCenterFriends
    *
    * @return bool The gamingBlockGameCenterFriends
    */
    public function getGamingBlockGameCenterFriends()
    {
        if (array_key_exists("gamingBlockGameCenterFriends", $this->_propDict)) {
            return $this->_propDict["gamingBlockGameCenterFriends"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gamingBlockGameCenterFriends
    *
    * @param bool $val The gamingBlockGameCenterFriends
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setGamingBlockGameCenterFriends($val)
    {
        $this->_propDict["gamingBlockGameCenterFriends"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the gamingBlockMultiplayer
    *
    * @return bool The gamingBlockMultiplayer
    */
    public function getGamingBlockMultiplayer()
    {
        if (array_key_exists("gamingBlockMultiplayer", $this->_propDict)) {
            return $this->_propDict["gamingBlockMultiplayer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gamingBlockMultiplayer
    *
    * @param bool $val The gamingBlockMultiplayer
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setGamingBlockMultiplayer($val)
    {
        $this->_propDict["gamingBlockMultiplayer"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the gameCenterBlocked
    *
    * @return bool The gameCenterBlocked
    */
    public function getGameCenterBlocked()
    {
        if (array_key_exists("gameCenterBlocked", $this->_propDict)) {
            return $this->_propDict["gameCenterBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gameCenterBlocked
    *
    * @param bool $val The gameCenterBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setGameCenterBlocked($val)
    {
        $this->_propDict["gameCenterBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hostPairingBlocked
    *
    * @return bool The hostPairingBlocked
    */
    public function getHostPairingBlocked()
    {
        if (array_key_exists("hostPairingBlocked", $this->_propDict)) {
            return $this->_propDict["hostPairingBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hostPairingBlocked
    *
    * @param bool $val The hostPairingBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setHostPairingBlocked($val)
    {
        $this->_propDict["hostPairingBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iBooksStoreBlocked
    *
    * @return bool The iBooksStoreBlocked
    */
    public function getIBooksStoreBlocked()
    {
        if (array_key_exists("iBooksStoreBlocked", $this->_propDict)) {
            return $this->_propDict["iBooksStoreBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iBooksStoreBlocked
    *
    * @param bool $val The iBooksStoreBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setIBooksStoreBlocked($val)
    {
        $this->_propDict["iBooksStoreBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iBooksStoreBlockErotica
    *
    * @return bool The iBooksStoreBlockErotica
    */
    public function getIBooksStoreBlockErotica()
    {
        if (array_key_exists("iBooksStoreBlockErotica", $this->_propDict)) {
            return $this->_propDict["iBooksStoreBlockErotica"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iBooksStoreBlockErotica
    *
    * @param bool $val The iBooksStoreBlockErotica
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setIBooksStoreBlockErotica($val)
    {
        $this->_propDict["iBooksStoreBlockErotica"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockActivityContinuation
    *
    * @return bool The iCloudBlockActivityContinuation
    */
    public function getICloudBlockActivityContinuation()
    {
        if (array_key_exists("iCloudBlockActivityContinuation", $this->_propDict)) {
            return $this->_propDict["iCloudBlockActivityContinuation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockActivityContinuation
    *
    * @param bool $val The iCloudBlockActivityContinuation
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockActivityContinuation($val)
    {
        $this->_propDict["iCloudBlockActivityContinuation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockBackup
    *
    * @return bool The iCloudBlockBackup
    */
    public function getICloudBlockBackup()
    {
        if (array_key_exists("iCloudBlockBackup", $this->_propDict)) {
            return $this->_propDict["iCloudBlockBackup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockBackup
    *
    * @param bool $val The iCloudBlockBackup
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockBackup($val)
    {
        $this->_propDict["iCloudBlockBackup"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockDocumentSync
    *
    * @return bool The iCloudBlockDocumentSync
    */
    public function getICloudBlockDocumentSync()
    {
        if (array_key_exists("iCloudBlockDocumentSync", $this->_propDict)) {
            return $this->_propDict["iCloudBlockDocumentSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockDocumentSync
    *
    * @param bool $val The iCloudBlockDocumentSync
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockDocumentSync($val)
    {
        $this->_propDict["iCloudBlockDocumentSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockManagedAppsSync
    *
    * @return bool The iCloudBlockManagedAppsSync
    */
    public function getICloudBlockManagedAppsSync()
    {
        if (array_key_exists("iCloudBlockManagedAppsSync", $this->_propDict)) {
            return $this->_propDict["iCloudBlockManagedAppsSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockManagedAppsSync
    *
    * @param bool $val The iCloudBlockManagedAppsSync
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockManagedAppsSync($val)
    {
        $this->_propDict["iCloudBlockManagedAppsSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockPhotoLibrary
    *
    * @return bool The iCloudBlockPhotoLibrary
    */
    public function getICloudBlockPhotoLibrary()
    {
        if (array_key_exists("iCloudBlockPhotoLibrary", $this->_propDict)) {
            return $this->_propDict["iCloudBlockPhotoLibrary"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockPhotoLibrary
    *
    * @param bool $val The iCloudBlockPhotoLibrary
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockPhotoLibrary($val)
    {
        $this->_propDict["iCloudBlockPhotoLibrary"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockPhotoStreamSync
    *
    * @return bool The iCloudBlockPhotoStreamSync
    */
    public function getICloudBlockPhotoStreamSync()
    {
        if (array_key_exists("iCloudBlockPhotoStreamSync", $this->_propDict)) {
            return $this->_propDict["iCloudBlockPhotoStreamSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockPhotoStreamSync
    *
    * @param bool $val The iCloudBlockPhotoStreamSync
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockPhotoStreamSync($val)
    {
        $this->_propDict["iCloudBlockPhotoStreamSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockSharedPhotoStream
    *
    * @return bool The iCloudBlockSharedPhotoStream
    */
    public function getICloudBlockSharedPhotoStream()
    {
        if (array_key_exists("iCloudBlockSharedPhotoStream", $this->_propDict)) {
            return $this->_propDict["iCloudBlockSharedPhotoStream"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockSharedPhotoStream
    *
    * @param bool $val The iCloudBlockSharedPhotoStream
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockSharedPhotoStream($val)
    {
        $this->_propDict["iCloudBlockSharedPhotoStream"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudRequireEncryptedBackup
    *
    * @return bool The iCloudRequireEncryptedBackup
    */
    public function getICloudRequireEncryptedBackup()
    {
        if (array_key_exists("iCloudRequireEncryptedBackup", $this->_propDict)) {
            return $this->_propDict["iCloudRequireEncryptedBackup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudRequireEncryptedBackup
    *
    * @param bool $val The iCloudRequireEncryptedBackup
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudRequireEncryptedBackup($val)
    {
        $this->_propDict["iCloudRequireEncryptedBackup"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iTunesBlockExplicitContent
    *
    * @return bool The iTunesBlockExplicitContent
    */
    public function getITunesBlockExplicitContent()
    {
        if (array_key_exists("iTunesBlockExplicitContent", $this->_propDict)) {
            return $this->_propDict["iTunesBlockExplicitContent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iTunesBlockExplicitContent
    *
    * @param bool $val The iTunesBlockExplicitContent
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setITunesBlockExplicitContent($val)
    {
        $this->_propDict["iTunesBlockExplicitContent"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iTunesBlockMusicService
    *
    * @return bool The iTunesBlockMusicService
    */
    public function getITunesBlockMusicService()
    {
        if (array_key_exists("iTunesBlockMusicService", $this->_propDict)) {
            return $this->_propDict["iTunesBlockMusicService"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iTunesBlockMusicService
    *
    * @param bool $val The iTunesBlockMusicService
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setITunesBlockMusicService($val)
    {
        $this->_propDict["iTunesBlockMusicService"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iTunesBlockRadio
    *
    * @return bool The iTunesBlockRadio
    */
    public function getITunesBlockRadio()
    {
        if (array_key_exists("iTunesBlockRadio", $this->_propDict)) {
            return $this->_propDict["iTunesBlockRadio"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iTunesBlockRadio
    *
    * @param bool $val The iTunesBlockRadio
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setITunesBlockRadio($val)
    {
        $this->_propDict["iTunesBlockRadio"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keyboardBlockAutoCorrect
    *
    * @return bool The keyboardBlockAutoCorrect
    */
    public function getKeyboardBlockAutoCorrect()
    {
        if (array_key_exists("keyboardBlockAutoCorrect", $this->_propDict)) {
            return $this->_propDict["keyboardBlockAutoCorrect"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyboardBlockAutoCorrect
    *
    * @param bool $val The keyboardBlockAutoCorrect
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKeyboardBlockAutoCorrect($val)
    {
        $this->_propDict["keyboardBlockAutoCorrect"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keyboardBlockDictation
    *
    * @return bool The keyboardBlockDictation
    */
    public function getKeyboardBlockDictation()
    {
        if (array_key_exists("keyboardBlockDictation", $this->_propDict)) {
            return $this->_propDict["keyboardBlockDictation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyboardBlockDictation
    *
    * @param bool $val The keyboardBlockDictation
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKeyboardBlockDictation($val)
    {
        $this->_propDict["keyboardBlockDictation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keyboardBlockPredictive
    *
    * @return bool The keyboardBlockPredictive
    */
    public function getKeyboardBlockPredictive()
    {
        if (array_key_exists("keyboardBlockPredictive", $this->_propDict)) {
            return $this->_propDict["keyboardBlockPredictive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyboardBlockPredictive
    *
    * @param bool $val The keyboardBlockPredictive
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKeyboardBlockPredictive($val)
    {
        $this->_propDict["keyboardBlockPredictive"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keyboardBlockShortcuts
    *
    * @return bool The keyboardBlockShortcuts
    */
    public function getKeyboardBlockShortcuts()
    {
        if (array_key_exists("keyboardBlockShortcuts", $this->_propDict)) {
            return $this->_propDict["keyboardBlockShortcuts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyboardBlockShortcuts
    *
    * @param bool $val The keyboardBlockShortcuts
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKeyboardBlockShortcuts($val)
    {
        $this->_propDict["keyboardBlockShortcuts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keyboardBlockSpellCheck
    *
    * @return bool The keyboardBlockSpellCheck
    */
    public function getKeyboardBlockSpellCheck()
    {
        if (array_key_exists("keyboardBlockSpellCheck", $this->_propDict)) {
            return $this->_propDict["keyboardBlockSpellCheck"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyboardBlockSpellCheck
    *
    * @param bool $val The keyboardBlockSpellCheck
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKeyboardBlockSpellCheck($val)
    {
        $this->_propDict["keyboardBlockSpellCheck"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowAssistiveSpeak
    *
    * @return bool The kioskModeAllowAssistiveSpeak
    */
    public function getKioskModeAllowAssistiveSpeak()
    {
        if (array_key_exists("kioskModeAllowAssistiveSpeak", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowAssistiveSpeak"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowAssistiveSpeak
    *
    * @param bool $val The kioskModeAllowAssistiveSpeak
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowAssistiveSpeak($val)
    {
        $this->_propDict["kioskModeAllowAssistiveSpeak"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowAssistiveTouchSettings
    *
    * @return bool The kioskModeAllowAssistiveTouchSettings
    */
    public function getKioskModeAllowAssistiveTouchSettings()
    {
        if (array_key_exists("kioskModeAllowAssistiveTouchSettings", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowAssistiveTouchSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowAssistiveTouchSettings
    *
    * @param bool $val The kioskModeAllowAssistiveTouchSettings
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowAssistiveTouchSettings($val)
    {
        $this->_propDict["kioskModeAllowAssistiveTouchSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowAutoLock
    *
    * @return bool The kioskModeAllowAutoLock
    */
    public function getKioskModeAllowAutoLock()
    {
        if (array_key_exists("kioskModeAllowAutoLock", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowAutoLock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowAutoLock
    *
    * @param bool $val The kioskModeAllowAutoLock
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowAutoLock($val)
    {
        $this->_propDict["kioskModeAllowAutoLock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowColorInversionSettings
    *
    * @return bool The kioskModeAllowColorInversionSettings
    */
    public function getKioskModeAllowColorInversionSettings()
    {
        if (array_key_exists("kioskModeAllowColorInversionSettings", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowColorInversionSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowColorInversionSettings
    *
    * @param bool $val The kioskModeAllowColorInversionSettings
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowColorInversionSettings($val)
    {
        $this->_propDict["kioskModeAllowColorInversionSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowRingerSwitch
    *
    * @return bool The kioskModeAllowRingerSwitch
    */
    public function getKioskModeAllowRingerSwitch()
    {
        if (array_key_exists("kioskModeAllowRingerSwitch", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowRingerSwitch"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowRingerSwitch
    *
    * @param bool $val The kioskModeAllowRingerSwitch
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowRingerSwitch($val)
    {
        $this->_propDict["kioskModeAllowRingerSwitch"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowScreenRotation
    *
    * @return bool The kioskModeAllowScreenRotation
    */
    public function getKioskModeAllowScreenRotation()
    {
        if (array_key_exists("kioskModeAllowScreenRotation", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowScreenRotation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowScreenRotation
    *
    * @param bool $val The kioskModeAllowScreenRotation
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowScreenRotation($val)
    {
        $this->_propDict["kioskModeAllowScreenRotation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowSleepButton
    *
    * @return bool The kioskModeAllowSleepButton
    */
    public function getKioskModeAllowSleepButton()
    {
        if (array_key_exists("kioskModeAllowSleepButton", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowSleepButton"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowSleepButton
    *
    * @param bool $val The kioskModeAllowSleepButton
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowSleepButton($val)
    {
        $this->_propDict["kioskModeAllowSleepButton"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowTouchscreen
    *
    * @return bool The kioskModeAllowTouchscreen
    */
    public function getKioskModeAllowTouchscreen()
    {
        if (array_key_exists("kioskModeAllowTouchscreen", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowTouchscreen"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowTouchscreen
    *
    * @param bool $val The kioskModeAllowTouchscreen
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowTouchscreen($val)
    {
        $this->_propDict["kioskModeAllowTouchscreen"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowVoiceOverSettings
    *
    * @return bool The kioskModeAllowVoiceOverSettings
    */
    public function getKioskModeAllowVoiceOverSettings()
    {
        if (array_key_exists("kioskModeAllowVoiceOverSettings", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowVoiceOverSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowVoiceOverSettings
    *
    * @param bool $val The kioskModeAllowVoiceOverSettings
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowVoiceOverSettings($val)
    {
        $this->_propDict["kioskModeAllowVoiceOverSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowVolumeButtons
    *
    * @return bool The kioskModeAllowVolumeButtons
    */
    public function getKioskModeAllowVolumeButtons()
    {
        if (array_key_exists("kioskModeAllowVolumeButtons", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowVolumeButtons"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowVolumeButtons
    *
    * @param bool $val The kioskModeAllowVolumeButtons
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowVolumeButtons($val)
    {
        $this->_propDict["kioskModeAllowVolumeButtons"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowZoomSettings
    *
    * @return bool The kioskModeAllowZoomSettings
    */
    public function getKioskModeAllowZoomSettings()
    {
        if (array_key_exists("kioskModeAllowZoomSettings", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowZoomSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowZoomSettings
    *
    * @param bool $val The kioskModeAllowZoomSettings
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowZoomSettings($val)
    {
        $this->_propDict["kioskModeAllowZoomSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAppStoreUrl
    *
    * @return string The kioskModeAppStoreUrl
    */
    public function getKioskModeAppStoreUrl()
    {
        if (array_key_exists("kioskModeAppStoreUrl", $this->_propDict)) {
            return $this->_propDict["kioskModeAppStoreUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAppStoreUrl
    *
    * @param string $val The kioskModeAppStoreUrl
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAppStoreUrl($val)
    {
        $this->_propDict["kioskModeAppStoreUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskModeRequireAssistiveTouch
    *
    * @return bool The kioskModeRequireAssistiveTouch
    */
    public function getKioskModeRequireAssistiveTouch()
    {
        if (array_key_exists("kioskModeRequireAssistiveTouch", $this->_propDict)) {
            return $this->_propDict["kioskModeRequireAssistiveTouch"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeRequireAssistiveTouch
    *
    * @param bool $val The kioskModeRequireAssistiveTouch
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeRequireAssistiveTouch($val)
    {
        $this->_propDict["kioskModeRequireAssistiveTouch"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeRequireColorInversion
    *
    * @return bool The kioskModeRequireColorInversion
    */
    public function getKioskModeRequireColorInversion()
    {
        if (array_key_exists("kioskModeRequireColorInversion", $this->_propDict)) {
            return $this->_propDict["kioskModeRequireColorInversion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeRequireColorInversion
    *
    * @param bool $val The kioskModeRequireColorInversion
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeRequireColorInversion($val)
    {
        $this->_propDict["kioskModeRequireColorInversion"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeRequireMonoAudio
    *
    * @return bool The kioskModeRequireMonoAudio
    */
    public function getKioskModeRequireMonoAudio()
    {
        if (array_key_exists("kioskModeRequireMonoAudio", $this->_propDict)) {
            return $this->_propDict["kioskModeRequireMonoAudio"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeRequireMonoAudio
    *
    * @param bool $val The kioskModeRequireMonoAudio
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeRequireMonoAudio($val)
    {
        $this->_propDict["kioskModeRequireMonoAudio"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeRequireVoiceOver
    *
    * @return bool The kioskModeRequireVoiceOver
    */
    public function getKioskModeRequireVoiceOver()
    {
        if (array_key_exists("kioskModeRequireVoiceOver", $this->_propDict)) {
            return $this->_propDict["kioskModeRequireVoiceOver"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeRequireVoiceOver
    *
    * @param bool $val The kioskModeRequireVoiceOver
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeRequireVoiceOver($val)
    {
        $this->_propDict["kioskModeRequireVoiceOver"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeRequireZoom
    *
    * @return bool The kioskModeRequireZoom
    */
    public function getKioskModeRequireZoom()
    {
        if (array_key_exists("kioskModeRequireZoom", $this->_propDict)) {
            return $this->_propDict["kioskModeRequireZoom"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeRequireZoom
    *
    * @param bool $val The kioskModeRequireZoom
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeRequireZoom($val)
    {
        $this->_propDict["kioskModeRequireZoom"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeManagedAppId
    *
    * @return string The kioskModeManagedAppId
    */
    public function getKioskModeManagedAppId()
    {
        if (array_key_exists("kioskModeManagedAppId", $this->_propDict)) {
            return $this->_propDict["kioskModeManagedAppId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeManagedAppId
    *
    * @param string $val The kioskModeManagedAppId
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeManagedAppId($val)
    {
        $this->_propDict["kioskModeManagedAppId"] = $val;
        return $this;
    }
    
    /**
    * Gets the lockScreenBlockControlCenter
    *
    * @return bool The lockScreenBlockControlCenter
    */
    public function getLockScreenBlockControlCenter()
    {
        if (array_key_exists("lockScreenBlockControlCenter", $this->_propDict)) {
            return $this->_propDict["lockScreenBlockControlCenter"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenBlockControlCenter
    *
    * @param bool $val The lockScreenBlockControlCenter
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setLockScreenBlockControlCenter($val)
    {
        $this->_propDict["lockScreenBlockControlCenter"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lockScreenBlockNotificationView
    *
    * @return bool The lockScreenBlockNotificationView
    */
    public function getLockScreenBlockNotificationView()
    {
        if (array_key_exists("lockScreenBlockNotificationView", $this->_propDict)) {
            return $this->_propDict["lockScreenBlockNotificationView"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenBlockNotificationView
    *
    * @param bool $val The lockScreenBlockNotificationView
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setLockScreenBlockNotificationView($val)
    {
        $this->_propDict["lockScreenBlockNotificationView"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lockScreenBlockPassbook
    *
    * @return bool The lockScreenBlockPassbook
    */
    public function getLockScreenBlockPassbook()
    {
        if (array_key_exists("lockScreenBlockPassbook", $this->_propDict)) {
            return $this->_propDict["lockScreenBlockPassbook"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenBlockPassbook
    *
    * @param bool $val The lockScreenBlockPassbook
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setLockScreenBlockPassbook($val)
    {
        $this->_propDict["lockScreenBlockPassbook"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lockScreenBlockTodayView
    *
    * @return bool The lockScreenBlockTodayView
    */
    public function getLockScreenBlockTodayView()
    {
        if (array_key_exists("lockScreenBlockTodayView", $this->_propDict)) {
            return $this->_propDict["lockScreenBlockTodayView"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenBlockTodayView
    *
    * @param bool $val The lockScreenBlockTodayView
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setLockScreenBlockTodayView($val)
    {
        $this->_propDict["lockScreenBlockTodayView"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingAustralia
    *
    * @return MediaContentRatingAustralia The mediaContentRatingAustralia
    */
    public function getMediaContentRatingAustralia()
    {
        if (array_key_exists("mediaContentRatingAustralia", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingAustralia"], "Microsoft\Graph\Beta\Model\MediaContentRatingAustralia")) {
                return $this->_propDict["mediaContentRatingAustralia"];
            } else {
                $this->_propDict["mediaContentRatingAustralia"] = new MediaContentRatingAustralia($this->_propDict["mediaContentRatingAustralia"]);
                return $this->_propDict["mediaContentRatingAustralia"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingAustralia
    *
    * @param MediaContentRatingAustralia $val The mediaContentRatingAustralia
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingAustralia($val)
    {
        $this->_propDict["mediaContentRatingAustralia"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingCanada
    *
    * @return MediaContentRatingCanada The mediaContentRatingCanada
    */
    public function getMediaContentRatingCanada()
    {
        if (array_key_exists("mediaContentRatingCanada", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingCanada"], "Microsoft\Graph\Beta\Model\MediaContentRatingCanada")) {
                return $this->_propDict["mediaContentRatingCanada"];
            } else {
                $this->_propDict["mediaContentRatingCanada"] = new MediaContentRatingCanada($this->_propDict["mediaContentRatingCanada"]);
                return $this->_propDict["mediaContentRatingCanada"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingCanada
    *
    * @param MediaContentRatingCanada $val The mediaContentRatingCanada
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingCanada($val)
    {
        $this->_propDict["mediaContentRatingCanada"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingFrance
    *
    * @return MediaContentRatingFrance The mediaContentRatingFrance
    */
    public function getMediaContentRatingFrance()
    {
        if (array_key_exists("mediaContentRatingFrance", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingFrance"], "Microsoft\Graph\Beta\Model\MediaContentRatingFrance")) {
                return $this->_propDict["mediaContentRatingFrance"];
            } else {
                $this->_propDict["mediaContentRatingFrance"] = new MediaContentRatingFrance($this->_propDict["mediaContentRatingFrance"]);
                return $this->_propDict["mediaContentRatingFrance"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingFrance
    *
    * @param MediaContentRatingFrance $val The mediaContentRatingFrance
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingFrance($val)
    {
        $this->_propDict["mediaContentRatingFrance"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingGermany
    *
    * @return MediaContentRatingGermany The mediaContentRatingGermany
    */
    public function getMediaContentRatingGermany()
    {
        if (array_key_exists("mediaContentRatingGermany", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingGermany"], "Microsoft\Graph\Beta\Model\MediaContentRatingGermany")) {
                return $this->_propDict["mediaContentRatingGermany"];
            } else {
                $this->_propDict["mediaContentRatingGermany"] = new MediaContentRatingGermany($this->_propDict["mediaContentRatingGermany"]);
                return $this->_propDict["mediaContentRatingGermany"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingGermany
    *
    * @param MediaContentRatingGermany $val The mediaContentRatingGermany
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingGermany($val)
    {
        $this->_propDict["mediaContentRatingGermany"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingIreland
    *
    * @return MediaContentRatingIreland The mediaContentRatingIreland
    */
    public function getMediaContentRatingIreland()
    {
        if (array_key_exists("mediaContentRatingIreland", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingIreland"], "Microsoft\Graph\Beta\Model\MediaContentRatingIreland")) {
                return $this->_propDict["mediaContentRatingIreland"];
            } else {
                $this->_propDict["mediaContentRatingIreland"] = new MediaContentRatingIreland($this->_propDict["mediaContentRatingIreland"]);
                return $this->_propDict["mediaContentRatingIreland"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingIreland
    *
    * @param MediaContentRatingIreland $val The mediaContentRatingIreland
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingIreland($val)
    {
        $this->_propDict["mediaContentRatingIreland"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingJapan
    *
    * @return MediaContentRatingJapan The mediaContentRatingJapan
    */
    public function getMediaContentRatingJapan()
    {
        if (array_key_exists("mediaContentRatingJapan", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingJapan"], "Microsoft\Graph\Beta\Model\MediaContentRatingJapan")) {
                return $this->_propDict["mediaContentRatingJapan"];
            } else {
                $this->_propDict["mediaContentRatingJapan"] = new MediaContentRatingJapan($this->_propDict["mediaContentRatingJapan"]);
                return $this->_propDict["mediaContentRatingJapan"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingJapan
    *
    * @param MediaContentRatingJapan $val The mediaContentRatingJapan
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingJapan($val)
    {
        $this->_propDict["mediaContentRatingJapan"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingNewZealand
    *
    * @return MediaContentRatingNewZealand The mediaContentRatingNewZealand
    */
    public function getMediaContentRatingNewZealand()
    {
        if (array_key_exists("mediaContentRatingNewZealand", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingNewZealand"], "Microsoft\Graph\Beta\Model\MediaContentRatingNewZealand")) {
                return $this->_propDict["mediaContentRatingNewZealand"];
            } else {
                $this->_propDict["mediaContentRatingNewZealand"] = new MediaContentRatingNewZealand($this->_propDict["mediaContentRatingNewZealand"]);
                return $this->_propDict["mediaContentRatingNewZealand"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingNewZealand
    *
    * @param MediaContentRatingNewZealand $val The mediaContentRatingNewZealand
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingNewZealand($val)
    {
        $this->_propDict["mediaContentRatingNewZealand"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingUnitedKingdom
    *
    * @return MediaContentRatingUnitedKingdom The mediaContentRatingUnitedKingdom
    */
    public function getMediaContentRatingUnitedKingdom()
    {
        if (array_key_exists("mediaContentRatingUnitedKingdom", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingUnitedKingdom"], "Microsoft\Graph\Beta\Model\MediaContentRatingUnitedKingdom")) {
                return $this->_propDict["mediaContentRatingUnitedKingdom"];
            } else {
                $this->_propDict["mediaContentRatingUnitedKingdom"] = new MediaContentRatingUnitedKingdom($this->_propDict["mediaContentRatingUnitedKingdom"]);
                return $this->_propDict["mediaContentRatingUnitedKingdom"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingUnitedKingdom
    *
    * @param MediaContentRatingUnitedKingdom $val The mediaContentRatingUnitedKingdom
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingUnitedKingdom($val)
    {
        $this->_propDict["mediaContentRatingUnitedKingdom"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingUnitedStates
    *
    * @return MediaContentRatingUnitedStates The mediaContentRatingUnitedStates
    */
    public function getMediaContentRatingUnitedStates()
    {
        if (array_key_exists("mediaContentRatingUnitedStates", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingUnitedStates"], "Microsoft\Graph\Beta\Model\MediaContentRatingUnitedStates")) {
                return $this->_propDict["mediaContentRatingUnitedStates"];
            } else {
                $this->_propDict["mediaContentRatingUnitedStates"] = new MediaContentRatingUnitedStates($this->_propDict["mediaContentRatingUnitedStates"]);
                return $this->_propDict["mediaContentRatingUnitedStates"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingUnitedStates
    *
    * @param MediaContentRatingUnitedStates $val The mediaContentRatingUnitedStates
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingUnitedStates($val)
    {
        $this->_propDict["mediaContentRatingUnitedStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the networkUsageRules
     *
     * @return array The networkUsageRules
     */
    public function getNetworkUsageRules()
    {
        if (array_key_exists("networkUsageRules", $this->_propDict)) {
           return $this->_propDict["networkUsageRules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the networkUsageRules
    *
    * @param IosNetworkUsageRule $val The networkUsageRules
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setNetworkUsageRules($val)
    {
		$this->_propDict["networkUsageRules"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingApps
    *
    * @return RatingAppsType The mediaContentRatingApps
    */
    public function getMediaContentRatingApps()
    {
        if (array_key_exists("mediaContentRatingApps", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingApps"], "Microsoft\Graph\Beta\Model\RatingAppsType")) {
                return $this->_propDict["mediaContentRatingApps"];
            } else {
                $this->_propDict["mediaContentRatingApps"] = new RatingAppsType($this->_propDict["mediaContentRatingApps"]);
                return $this->_propDict["mediaContentRatingApps"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingApps
    *
    * @param RatingAppsType $val The mediaContentRatingApps
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingApps($val)
    {
        $this->_propDict["mediaContentRatingApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the messagesBlocked
    *
    * @return bool The messagesBlocked
    */
    public function getMessagesBlocked()
    {
        if (array_key_exists("messagesBlocked", $this->_propDict)) {
            return $this->_propDict["messagesBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the messagesBlocked
    *
    * @param bool $val The messagesBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMessagesBlocked($val)
    {
        $this->_propDict["messagesBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the notificationsBlockSettingsModification
    *
    * @return bool The notificationsBlockSettingsModification
    */
    public function getNotificationsBlockSettingsModification()
    {
        if (array_key_exists("notificationsBlockSettingsModification", $this->_propDict)) {
            return $this->_propDict["notificationsBlockSettingsModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notificationsBlockSettingsModification
    *
    * @param bool $val The notificationsBlockSettingsModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setNotificationsBlockSettingsModification($val)
    {
        $this->_propDict["notificationsBlockSettingsModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeBlockFingerprintUnlock
    *
    * @return bool The passcodeBlockFingerprintUnlock
    */
    public function getPasscodeBlockFingerprintUnlock()
    {
        if (array_key_exists("passcodeBlockFingerprintUnlock", $this->_propDict)) {
            return $this->_propDict["passcodeBlockFingerprintUnlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeBlockFingerprintUnlock
    *
    * @param bool $val The passcodeBlockFingerprintUnlock
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeBlockFingerprintUnlock($val)
    {
        $this->_propDict["passcodeBlockFingerprintUnlock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeBlockFingerprintModification
    *
    * @return bool The passcodeBlockFingerprintModification
    */
    public function getPasscodeBlockFingerprintModification()
    {
        if (array_key_exists("passcodeBlockFingerprintModification", $this->_propDict)) {
            return $this->_propDict["passcodeBlockFingerprintModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeBlockFingerprintModification
    *
    * @param bool $val The passcodeBlockFingerprintModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeBlockFingerprintModification($val)
    {
        $this->_propDict["passcodeBlockFingerprintModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeBlockModification
    *
    * @return bool The passcodeBlockModification
    */
    public function getPasscodeBlockModification()
    {
        if (array_key_exists("passcodeBlockModification", $this->_propDict)) {
            return $this->_propDict["passcodeBlockModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeBlockModification
    *
    * @param bool $val The passcodeBlockModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeBlockModification($val)
    {
        $this->_propDict["passcodeBlockModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeBlockSimple
    *
    * @return bool The passcodeBlockSimple
    */
    public function getPasscodeBlockSimple()
    {
        if (array_key_exists("passcodeBlockSimple", $this->_propDict)) {
            return $this->_propDict["passcodeBlockSimple"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeBlockSimple
    *
    * @param bool $val The passcodeBlockSimple
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeBlockSimple($val)
    {
        $this->_propDict["passcodeBlockSimple"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeExpirationDays
    *
    * @return int The passcodeExpirationDays
    */
    public function getPasscodeExpirationDays()
    {
        if (array_key_exists("passcodeExpirationDays", $this->_propDict)) {
            return $this->_propDict["passcodeExpirationDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeExpirationDays
    *
    * @param int $val The passcodeExpirationDays
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeExpirationDays($val)
    {
        $this->_propDict["passcodeExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeMinimumLength
    *
    * @return int The passcodeMinimumLength
    */
    public function getPasscodeMinimumLength()
    {
        if (array_key_exists("passcodeMinimumLength", $this->_propDict)) {
            return $this->_propDict["passcodeMinimumLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeMinimumLength
    *
    * @param int $val The passcodeMinimumLength
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeMinimumLength($val)
    {
        $this->_propDict["passcodeMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeMinutesOfInactivityBeforeLock
    *
    * @return int The passcodeMinutesOfInactivityBeforeLock
    */
    public function getPasscodeMinutesOfInactivityBeforeLock()
    {
        if (array_key_exists("passcodeMinutesOfInactivityBeforeLock", $this->_propDict)) {
            return $this->_propDict["passcodeMinutesOfInactivityBeforeLock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeMinutesOfInactivityBeforeLock
    *
    * @param int $val The passcodeMinutesOfInactivityBeforeLock
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeMinutesOfInactivityBeforeLock($val)
    {
        $this->_propDict["passcodeMinutesOfInactivityBeforeLock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeMinutesOfInactivityBeforeScreenTimeout
    *
    * @return int The passcodeMinutesOfInactivityBeforeScreenTimeout
    */
    public function getPasscodeMinutesOfInactivityBeforeScreenTimeout()
    {
        if (array_key_exists("passcodeMinutesOfInactivityBeforeScreenTimeout", $this->_propDict)) {
            return $this->_propDict["passcodeMinutesOfInactivityBeforeScreenTimeout"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeMinutesOfInactivityBeforeScreenTimeout
    *
    * @param int $val The passcodeMinutesOfInactivityBeforeScreenTimeout
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["passcodeMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeMinimumCharacterSetCount
    *
    * @return int The passcodeMinimumCharacterSetCount
    */
    public function getPasscodeMinimumCharacterSetCount()
    {
        if (array_key_exists("passcodeMinimumCharacterSetCount", $this->_propDict)) {
            return $this->_propDict["passcodeMinimumCharacterSetCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeMinimumCharacterSetCount
    *
    * @param int $val The passcodeMinimumCharacterSetCount
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeMinimumCharacterSetCount($val)
    {
        $this->_propDict["passcodeMinimumCharacterSetCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodePreviousPasscodeBlockCount
    *
    * @return int The passcodePreviousPasscodeBlockCount
    */
    public function getPasscodePreviousPasscodeBlockCount()
    {
        if (array_key_exists("passcodePreviousPasscodeBlockCount", $this->_propDict)) {
            return $this->_propDict["passcodePreviousPasscodeBlockCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodePreviousPasscodeBlockCount
    *
    * @param int $val The passcodePreviousPasscodeBlockCount
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodePreviousPasscodeBlockCount($val)
    {
        $this->_propDict["passcodePreviousPasscodeBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeSignInFailureCountBeforeWipe
    *
    * @return int The passcodeSignInFailureCountBeforeWipe
    */
    public function getPasscodeSignInFailureCountBeforeWipe()
    {
        if (array_key_exists("passcodeSignInFailureCountBeforeWipe", $this->_propDict)) {
            return $this->_propDict["passcodeSignInFailureCountBeforeWipe"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeSignInFailureCountBeforeWipe
    *
    * @param int $val The passcodeSignInFailureCountBeforeWipe
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeSignInFailureCountBeforeWipe($val)
    {
        $this->_propDict["passcodeSignInFailureCountBeforeWipe"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeRequiredType
    *
    * @return RequiredPasswordType The passcodeRequiredType
    */
    public function getPasscodeRequiredType()
    {
        if (array_key_exists("passcodeRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passcodeRequiredType"], "Microsoft\Graph\Beta\Model\RequiredPasswordType")) {
                return $this->_propDict["passcodeRequiredType"];
            } else {
                $this->_propDict["passcodeRequiredType"] = new RequiredPasswordType($this->_propDict["passcodeRequiredType"]);
                return $this->_propDict["passcodeRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passcodeRequiredType
    *
    * @param RequiredPasswordType $val The passcodeRequiredType
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeRequiredType($val)
    {
        $this->_propDict["passcodeRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the passcodeRequired
    *
    * @return bool The passcodeRequired
    */
    public function getPasscodeRequired()
    {
        if (array_key_exists("passcodeRequired", $this->_propDict)) {
            return $this->_propDict["passcodeRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeRequired
    *
    * @param bool $val The passcodeRequired
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeRequired($val)
    {
        $this->_propDict["passcodeRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the podcastsBlocked
    *
    * @return bool The podcastsBlocked
    */
    public function getPodcastsBlocked()
    {
        if (array_key_exists("podcastsBlocked", $this->_propDict)) {
            return $this->_propDict["podcastsBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the podcastsBlocked
    *
    * @param bool $val The podcastsBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPodcastsBlocked($val)
    {
        $this->_propDict["podcastsBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the safariBlockAutofill
    *
    * @return bool The safariBlockAutofill
    */
    public function getSafariBlockAutofill()
    {
        if (array_key_exists("safariBlockAutofill", $this->_propDict)) {
            return $this->_propDict["safariBlockAutofill"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariBlockAutofill
    *
    * @param bool $val The safariBlockAutofill
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariBlockAutofill($val)
    {
        $this->_propDict["safariBlockAutofill"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the safariBlockJavaScript
    *
    * @return bool The safariBlockJavaScript
    */
    public function getSafariBlockJavaScript()
    {
        if (array_key_exists("safariBlockJavaScript", $this->_propDict)) {
            return $this->_propDict["safariBlockJavaScript"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariBlockJavaScript
    *
    * @param bool $val The safariBlockJavaScript
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariBlockJavaScript($val)
    {
        $this->_propDict["safariBlockJavaScript"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the safariBlockPopups
    *
    * @return bool The safariBlockPopups
    */
    public function getSafariBlockPopups()
    {
        if (array_key_exists("safariBlockPopups", $this->_propDict)) {
            return $this->_propDict["safariBlockPopups"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariBlockPopups
    *
    * @param bool $val The safariBlockPopups
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariBlockPopups($val)
    {
        $this->_propDict["safariBlockPopups"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the safariBlocked
    *
    * @return bool The safariBlocked
    */
    public function getSafariBlocked()
    {
        if (array_key_exists("safariBlocked", $this->_propDict)) {
            return $this->_propDict["safariBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariBlocked
    *
    * @param bool $val The safariBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariBlocked($val)
    {
        $this->_propDict["safariBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the safariCookieSettings
    *
    * @return WebBrowserCookieSettings The safariCookieSettings
    */
    public function getSafariCookieSettings()
    {
        if (array_key_exists("safariCookieSettings", $this->_propDict)) {
            if (is_a($this->_propDict["safariCookieSettings"], "Microsoft\Graph\Beta\Model\WebBrowserCookieSettings")) {
                return $this->_propDict["safariCookieSettings"];
            } else {
                $this->_propDict["safariCookieSettings"] = new WebBrowserCookieSettings($this->_propDict["safariCookieSettings"]);
                return $this->_propDict["safariCookieSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the safariCookieSettings
    *
    * @param WebBrowserCookieSettings $val The safariCookieSettings
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariCookieSettings($val)
    {
        $this->_propDict["safariCookieSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the safariManagedDomains
    *
    * @return string The safariManagedDomains
    */
    public function getSafariManagedDomains()
    {
        if (array_key_exists("safariManagedDomains", $this->_propDict)) {
            return $this->_propDict["safariManagedDomains"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariManagedDomains
    *
    * @param string $val The safariManagedDomains
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariManagedDomains($val)
    {
        $this->_propDict["safariManagedDomains"] = $val;
        return $this;
    }
    
    /**
    * Gets the safariPasswordAutoFillDomains
    *
    * @return string The safariPasswordAutoFillDomains
    */
    public function getSafariPasswordAutoFillDomains()
    {
        if (array_key_exists("safariPasswordAutoFillDomains", $this->_propDict)) {
            return $this->_propDict["safariPasswordAutoFillDomains"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariPasswordAutoFillDomains
    *
    * @param string $val The safariPasswordAutoFillDomains
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariPasswordAutoFillDomains($val)
    {
        $this->_propDict["safariPasswordAutoFillDomains"] = $val;
        return $this;
    }
    
    /**
    * Gets the safariRequireFraudWarning
    *
    * @return bool The safariRequireFraudWarning
    */
    public function getSafariRequireFraudWarning()
    {
        if (array_key_exists("safariRequireFraudWarning", $this->_propDict)) {
            return $this->_propDict["safariRequireFraudWarning"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariRequireFraudWarning
    *
    * @param bool $val The safariRequireFraudWarning
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariRequireFraudWarning($val)
    {
        $this->_propDict["safariRequireFraudWarning"] = boolval($val);
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
    * @return IosGeneralDeviceConfiguration
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the siriBlocked
    *
    * @return bool The siriBlocked
    */
    public function getSiriBlocked()
    {
        if (array_key_exists("siriBlocked", $this->_propDict)) {
            return $this->_propDict["siriBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siriBlocked
    *
    * @param bool $val The siriBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSiriBlocked($val)
    {
        $this->_propDict["siriBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the siriBlockedWhenLocked
    *
    * @return bool The siriBlockedWhenLocked
    */
    public function getSiriBlockedWhenLocked()
    {
        if (array_key_exists("siriBlockedWhenLocked", $this->_propDict)) {
            return $this->_propDict["siriBlockedWhenLocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siriBlockedWhenLocked
    *
    * @param bool $val The siriBlockedWhenLocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSiriBlockedWhenLocked($val)
    {
        $this->_propDict["siriBlockedWhenLocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the siriBlockUserGeneratedContent
    *
    * @return bool The siriBlockUserGeneratedContent
    */
    public function getSiriBlockUserGeneratedContent()
    {
        if (array_key_exists("siriBlockUserGeneratedContent", $this->_propDict)) {
            return $this->_propDict["siriBlockUserGeneratedContent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siriBlockUserGeneratedContent
    *
    * @param bool $val The siriBlockUserGeneratedContent
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSiriBlockUserGeneratedContent($val)
    {
        $this->_propDict["siriBlockUserGeneratedContent"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the siriRequireProfanityFilter
    *
    * @return bool The siriRequireProfanityFilter
    */
    public function getSiriRequireProfanityFilter()
    {
        if (array_key_exists("siriRequireProfanityFilter", $this->_propDict)) {
            return $this->_propDict["siriRequireProfanityFilter"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siriRequireProfanityFilter
    *
    * @param bool $val The siriRequireProfanityFilter
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSiriRequireProfanityFilter($val)
    {
        $this->_propDict["siriRequireProfanityFilter"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the spotlightBlockInternetResults
    *
    * @return bool The spotlightBlockInternetResults
    */
    public function getSpotlightBlockInternetResults()
    {
        if (array_key_exists("spotlightBlockInternetResults", $this->_propDict)) {
            return $this->_propDict["spotlightBlockInternetResults"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the spotlightBlockInternetResults
    *
    * @param bool $val The spotlightBlockInternetResults
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSpotlightBlockInternetResults($val)
    {
        $this->_propDict["spotlightBlockInternetResults"] = boolval($val);
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
    * @return IosGeneralDeviceConfiguration
    */
    public function setVoiceDialingBlocked($val)
    {
        $this->_propDict["voiceDialingBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wallpaperBlockModification
    *
    * @return bool The wallpaperBlockModification
    */
    public function getWallpaperBlockModification()
    {
        if (array_key_exists("wallpaperBlockModification", $this->_propDict)) {
            return $this->_propDict["wallpaperBlockModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wallpaperBlockModification
    *
    * @param bool $val The wallpaperBlockModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setWallpaperBlockModification($val)
    {
        $this->_propDict["wallpaperBlockModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wiFiConnectOnlyToConfiguredNetworks
    *
    * @return bool The wiFiConnectOnlyToConfiguredNetworks
    */
    public function getWiFiConnectOnlyToConfiguredNetworks()
    {
        if (array_key_exists("wiFiConnectOnlyToConfiguredNetworks", $this->_propDict)) {
            return $this->_propDict["wiFiConnectOnlyToConfiguredNetworks"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wiFiConnectOnlyToConfiguredNetworks
    *
    * @param bool $val The wiFiConnectOnlyToConfiguredNetworks
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setWiFiConnectOnlyToConfiguredNetworks($val)
    {
        $this->_propDict["wiFiConnectOnlyToConfiguredNetworks"] = boolval($val);
        return $this;
    }
    
}