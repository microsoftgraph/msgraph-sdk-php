<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppProtection File
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
* ManagedAppProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ManagedAppProtection extends ManagedAppPolicy
{
    /**
    * Gets the periodOfflineBeforeAccessCheck
    *
    * @return Duration The periodOfflineBeforeAccessCheck
    */
    public function getPeriodOfflineBeforeAccessCheck()
    {
        if (array_key_exists("periodOfflineBeforeAccessCheck", $this->_propDict)) {
            if (is_a($this->_propDict["periodOfflineBeforeAccessCheck"], "Microsoft\Graph\Beta\Model\Duration")) {
                return $this->_propDict["periodOfflineBeforeAccessCheck"];
            } else {
                $this->_propDict["periodOfflineBeforeAccessCheck"] = new Duration($this->_propDict["periodOfflineBeforeAccessCheck"]);
                return $this->_propDict["periodOfflineBeforeAccessCheck"];
            }
        }
        return null;
    }
    
    /**
    * Sets the periodOfflineBeforeAccessCheck
    *
    * @param Duration $val The periodOfflineBeforeAccessCheck
    *
    * @return ManagedAppProtection
    */
    public function setPeriodOfflineBeforeAccessCheck($val)
    {
        $this->_propDict["periodOfflineBeforeAccessCheck"] = $val;
        return $this;
    }
    
    /**
    * Gets the periodOnlineBeforeAccessCheck
    *
    * @return Duration The periodOnlineBeforeAccessCheck
    */
    public function getPeriodOnlineBeforeAccessCheck()
    {
        if (array_key_exists("periodOnlineBeforeAccessCheck", $this->_propDict)) {
            if (is_a($this->_propDict["periodOnlineBeforeAccessCheck"], "Microsoft\Graph\Beta\Model\Duration")) {
                return $this->_propDict["periodOnlineBeforeAccessCheck"];
            } else {
                $this->_propDict["periodOnlineBeforeAccessCheck"] = new Duration($this->_propDict["periodOnlineBeforeAccessCheck"]);
                return $this->_propDict["periodOnlineBeforeAccessCheck"];
            }
        }
        return null;
    }
    
    /**
    * Sets the periodOnlineBeforeAccessCheck
    *
    * @param Duration $val The periodOnlineBeforeAccessCheck
    *
    * @return ManagedAppProtection
    */
    public function setPeriodOnlineBeforeAccessCheck($val)
    {
        $this->_propDict["periodOnlineBeforeAccessCheck"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowedInboundDataTransferSources
    *
    * @return ManagedAppDataTransferLevel The allowedInboundDataTransferSources
    */
    public function getAllowedInboundDataTransferSources()
    {
        if (array_key_exists("allowedInboundDataTransferSources", $this->_propDict)) {
            if (is_a($this->_propDict["allowedInboundDataTransferSources"], "Microsoft\Graph\Beta\Model\ManagedAppDataTransferLevel")) {
                return $this->_propDict["allowedInboundDataTransferSources"];
            } else {
                $this->_propDict["allowedInboundDataTransferSources"] = new ManagedAppDataTransferLevel($this->_propDict["allowedInboundDataTransferSources"]);
                return $this->_propDict["allowedInboundDataTransferSources"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowedInboundDataTransferSources
    *
    * @param ManagedAppDataTransferLevel $val The allowedInboundDataTransferSources
    *
    * @return ManagedAppProtection
    */
    public function setAllowedInboundDataTransferSources($val)
    {
        $this->_propDict["allowedInboundDataTransferSources"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowedOutboundDataTransferDestinations
    *
    * @return ManagedAppDataTransferLevel The allowedOutboundDataTransferDestinations
    */
    public function getAllowedOutboundDataTransferDestinations()
    {
        if (array_key_exists("allowedOutboundDataTransferDestinations", $this->_propDict)) {
            if (is_a($this->_propDict["allowedOutboundDataTransferDestinations"], "Microsoft\Graph\Beta\Model\ManagedAppDataTransferLevel")) {
                return $this->_propDict["allowedOutboundDataTransferDestinations"];
            } else {
                $this->_propDict["allowedOutboundDataTransferDestinations"] = new ManagedAppDataTransferLevel($this->_propDict["allowedOutboundDataTransferDestinations"]);
                return $this->_propDict["allowedOutboundDataTransferDestinations"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowedOutboundDataTransferDestinations
    *
    * @param ManagedAppDataTransferLevel $val The allowedOutboundDataTransferDestinations
    *
    * @return ManagedAppProtection
    */
    public function setAllowedOutboundDataTransferDestinations($val)
    {
        $this->_propDict["allowedOutboundDataTransferDestinations"] = $val;
        return $this;
    }
    
    /**
    * Gets the organizationalCredentialsRequired
    *
    * @return bool The organizationalCredentialsRequired
    */
    public function getOrganizationalCredentialsRequired()
    {
        if (array_key_exists("organizationalCredentialsRequired", $this->_propDict)) {
            return $this->_propDict["organizationalCredentialsRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizationalCredentialsRequired
    *
    * @param bool $val The organizationalCredentialsRequired
    *
    * @return ManagedAppProtection
    */
    public function setOrganizationalCredentialsRequired($val)
    {
        $this->_propDict["organizationalCredentialsRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowedOutboundClipboardSharingLevel
    *
    * @return ManagedAppClipboardSharingLevel The allowedOutboundClipboardSharingLevel
    */
    public function getAllowedOutboundClipboardSharingLevel()
    {
        if (array_key_exists("allowedOutboundClipboardSharingLevel", $this->_propDict)) {
            if (is_a($this->_propDict["allowedOutboundClipboardSharingLevel"], "Microsoft\Graph\Beta\Model\ManagedAppClipboardSharingLevel")) {
                return $this->_propDict["allowedOutboundClipboardSharingLevel"];
            } else {
                $this->_propDict["allowedOutboundClipboardSharingLevel"] = new ManagedAppClipboardSharingLevel($this->_propDict["allowedOutboundClipboardSharingLevel"]);
                return $this->_propDict["allowedOutboundClipboardSharingLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowedOutboundClipboardSharingLevel
    *
    * @param ManagedAppClipboardSharingLevel $val The allowedOutboundClipboardSharingLevel
    *
    * @return ManagedAppProtection
    */
    public function setAllowedOutboundClipboardSharingLevel($val)
    {
        $this->_propDict["allowedOutboundClipboardSharingLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataBackupBlocked
    *
    * @return bool The dataBackupBlocked
    */
    public function getDataBackupBlocked()
    {
        if (array_key_exists("dataBackupBlocked", $this->_propDict)) {
            return $this->_propDict["dataBackupBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dataBackupBlocked
    *
    * @param bool $val The dataBackupBlocked
    *
    * @return ManagedAppProtection
    */
    public function setDataBackupBlocked($val)
    {
        $this->_propDict["dataBackupBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceComplianceRequired
    *
    * @return bool The deviceComplianceRequired
    */
    public function getDeviceComplianceRequired()
    {
        if (array_key_exists("deviceComplianceRequired", $this->_propDict)) {
            return $this->_propDict["deviceComplianceRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceComplianceRequired
    *
    * @param bool $val The deviceComplianceRequired
    *
    * @return ManagedAppProtection
    */
    public function setDeviceComplianceRequired($val)
    {
        $this->_propDict["deviceComplianceRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the managedBrowserToOpenLinksRequired
    *
    * @return bool The managedBrowserToOpenLinksRequired
    */
    public function getManagedBrowserToOpenLinksRequired()
    {
        if (array_key_exists("managedBrowserToOpenLinksRequired", $this->_propDict)) {
            return $this->_propDict["managedBrowserToOpenLinksRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedBrowserToOpenLinksRequired
    *
    * @param bool $val The managedBrowserToOpenLinksRequired
    *
    * @return ManagedAppProtection
    */
    public function setManagedBrowserToOpenLinksRequired($val)
    {
        $this->_propDict["managedBrowserToOpenLinksRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the saveAsBlocked
    *
    * @return bool The saveAsBlocked
    */
    public function getSaveAsBlocked()
    {
        if (array_key_exists("saveAsBlocked", $this->_propDict)) {
            return $this->_propDict["saveAsBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the saveAsBlocked
    *
    * @param bool $val The saveAsBlocked
    *
    * @return ManagedAppProtection
    */
    public function setSaveAsBlocked($val)
    {
        $this->_propDict["saveAsBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the periodOfflineBeforeWipeIsEnforced
    *
    * @return Duration The periodOfflineBeforeWipeIsEnforced
    */
    public function getPeriodOfflineBeforeWipeIsEnforced()
    {
        if (array_key_exists("periodOfflineBeforeWipeIsEnforced", $this->_propDict)) {
            if (is_a($this->_propDict["periodOfflineBeforeWipeIsEnforced"], "Microsoft\Graph\Beta\Model\Duration")) {
                return $this->_propDict["periodOfflineBeforeWipeIsEnforced"];
            } else {
                $this->_propDict["periodOfflineBeforeWipeIsEnforced"] = new Duration($this->_propDict["periodOfflineBeforeWipeIsEnforced"]);
                return $this->_propDict["periodOfflineBeforeWipeIsEnforced"];
            }
        }
        return null;
    }
    
    /**
    * Sets the periodOfflineBeforeWipeIsEnforced
    *
    * @param Duration $val The periodOfflineBeforeWipeIsEnforced
    *
    * @return ManagedAppProtection
    */
    public function setPeriodOfflineBeforeWipeIsEnforced($val)
    {
        $this->_propDict["periodOfflineBeforeWipeIsEnforced"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinRequired
    *
    * @return bool The pinRequired
    */
    public function getPinRequired()
    {
        if (array_key_exists("pinRequired", $this->_propDict)) {
            return $this->_propDict["pinRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinRequired
    *
    * @param bool $val The pinRequired
    *
    * @return ManagedAppProtection
    */
    public function setPinRequired($val)
    {
        $this->_propDict["pinRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the maximumPinRetries
    *
    * @return int The maximumPinRetries
    */
    public function getMaximumPinRetries()
    {
        if (array_key_exists("maximumPinRetries", $this->_propDict)) {
            return $this->_propDict["maximumPinRetries"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumPinRetries
    *
    * @param int $val The maximumPinRetries
    *
    * @return ManagedAppProtection
    */
    public function setMaximumPinRetries($val)
    {
        $this->_propDict["maximumPinRetries"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the simplePinBlocked
    *
    * @return bool The simplePinBlocked
    */
    public function getSimplePinBlocked()
    {
        if (array_key_exists("simplePinBlocked", $this->_propDict)) {
            return $this->_propDict["simplePinBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the simplePinBlocked
    *
    * @param bool $val The simplePinBlocked
    *
    * @return ManagedAppProtection
    */
    public function setSimplePinBlocked($val)
    {
        $this->_propDict["simplePinBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the minimumPinLength
    *
    * @return int The minimumPinLength
    */
    public function getMinimumPinLength()
    {
        if (array_key_exists("minimumPinLength", $this->_propDict)) {
            return $this->_propDict["minimumPinLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumPinLength
    *
    * @param int $val The minimumPinLength
    *
    * @return ManagedAppProtection
    */
    public function setMinimumPinLength($val)
    {
        $this->_propDict["minimumPinLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinCharacterSet
    *
    * @return ManagedAppPinCharacterSet The pinCharacterSet
    */
    public function getPinCharacterSet()
    {
        if (array_key_exists("pinCharacterSet", $this->_propDict)) {
            if (is_a($this->_propDict["pinCharacterSet"], "Microsoft\Graph\Beta\Model\ManagedAppPinCharacterSet")) {
                return $this->_propDict["pinCharacterSet"];
            } else {
                $this->_propDict["pinCharacterSet"] = new ManagedAppPinCharacterSet($this->_propDict["pinCharacterSet"]);
                return $this->_propDict["pinCharacterSet"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinCharacterSet
    *
    * @param ManagedAppPinCharacterSet $val The pinCharacterSet
    *
    * @return ManagedAppProtection
    */
    public function setPinCharacterSet($val)
    {
        $this->_propDict["pinCharacterSet"] = $val;
        return $this;
    }
    
    /**
    * Gets the periodBeforePinReset
    *
    * @return Duration The periodBeforePinReset
    */
    public function getPeriodBeforePinReset()
    {
        if (array_key_exists("periodBeforePinReset", $this->_propDict)) {
            if (is_a($this->_propDict["periodBeforePinReset"], "Microsoft\Graph\Beta\Model\Duration")) {
                return $this->_propDict["periodBeforePinReset"];
            } else {
                $this->_propDict["periodBeforePinReset"] = new Duration($this->_propDict["periodBeforePinReset"]);
                return $this->_propDict["periodBeforePinReset"];
            }
        }
        return null;
    }
    
    /**
    * Sets the periodBeforePinReset
    *
    * @param Duration $val The periodBeforePinReset
    *
    * @return ManagedAppProtection
    */
    public function setPeriodBeforePinReset($val)
    {
        $this->_propDict["periodBeforePinReset"] = $val;
        return $this;
    }
    

     /** 
     * Gets the allowedDataStorageLocations
     *
     * @return array The allowedDataStorageLocations
     */
    public function getAllowedDataStorageLocations()
    {
        if (array_key_exists("allowedDataStorageLocations", $this->_propDict)) {
           return $this->_propDict["allowedDataStorageLocations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the allowedDataStorageLocations
    *
    * @param ManagedAppDataStorageLocation $val The allowedDataStorageLocations
    *
    * @return ManagedAppProtection
    */
    public function setAllowedDataStorageLocations($val)
    {
		$this->_propDict["allowedDataStorageLocations"] = $val;
        return $this;
    }
    
    /**
    * Gets the contactSyncBlocked
    *
    * @return bool The contactSyncBlocked
    */
    public function getContactSyncBlocked()
    {
        if (array_key_exists("contactSyncBlocked", $this->_propDict)) {
            return $this->_propDict["contactSyncBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contactSyncBlocked
    *
    * @param bool $val The contactSyncBlocked
    *
    * @return ManagedAppProtection
    */
    public function setContactSyncBlocked($val)
    {
        $this->_propDict["contactSyncBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the printBlocked
    *
    * @return bool The printBlocked
    */
    public function getPrintBlocked()
    {
        if (array_key_exists("printBlocked", $this->_propDict)) {
            return $this->_propDict["printBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the printBlocked
    *
    * @param bool $val The printBlocked
    *
    * @return ManagedAppProtection
    */
    public function setPrintBlocked($val)
    {
        $this->_propDict["printBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fingerprintBlocked
    *
    * @return bool The fingerprintBlocked
    */
    public function getFingerprintBlocked()
    {
        if (array_key_exists("fingerprintBlocked", $this->_propDict)) {
            return $this->_propDict["fingerprintBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fingerprintBlocked
    *
    * @param bool $val The fingerprintBlocked
    *
    * @return ManagedAppProtection
    */
    public function setFingerprintBlocked($val)
    {
        $this->_propDict["fingerprintBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableAppPinIfDevicePinIsSet
    *
    * @return bool The disableAppPinIfDevicePinIsSet
    */
    public function getDisableAppPinIfDevicePinIsSet()
    {
        if (array_key_exists("disableAppPinIfDevicePinIsSet", $this->_propDict)) {
            return $this->_propDict["disableAppPinIfDevicePinIsSet"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableAppPinIfDevicePinIsSet
    *
    * @param bool $val The disableAppPinIfDevicePinIsSet
    *
    * @return ManagedAppProtection
    */
    public function setDisableAppPinIfDevicePinIsSet($val)
    {
        $this->_propDict["disableAppPinIfDevicePinIsSet"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the minimumRequiredOsVersion
    *
    * @return string The minimumRequiredOsVersion
    */
    public function getMinimumRequiredOsVersion()
    {
        if (array_key_exists("minimumRequiredOsVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredOsVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumRequiredOsVersion
    *
    * @param string $val The minimumRequiredOsVersion
    *
    * @return ManagedAppProtection
    */
    public function setMinimumRequiredOsVersion($val)
    {
        $this->_propDict["minimumRequiredOsVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWarningOsVersion
    *
    * @return string The minimumWarningOsVersion
    */
    public function getMinimumWarningOsVersion()
    {
        if (array_key_exists("minimumWarningOsVersion", $this->_propDict)) {
            return $this->_propDict["minimumWarningOsVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWarningOsVersion
    *
    * @param string $val The minimumWarningOsVersion
    *
    * @return ManagedAppProtection
    */
    public function setMinimumWarningOsVersion($val)
    {
        $this->_propDict["minimumWarningOsVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumRequiredAppVersion
    *
    * @return string The minimumRequiredAppVersion
    */
    public function getMinimumRequiredAppVersion()
    {
        if (array_key_exists("minimumRequiredAppVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredAppVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumRequiredAppVersion
    *
    * @param string $val The minimumRequiredAppVersion
    *
    * @return ManagedAppProtection
    */
    public function setMinimumRequiredAppVersion($val)
    {
        $this->_propDict["minimumRequiredAppVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWarningAppVersion
    *
    * @return string The minimumWarningAppVersion
    */
    public function getMinimumWarningAppVersion()
    {
        if (array_key_exists("minimumWarningAppVersion", $this->_propDict)) {
            return $this->_propDict["minimumWarningAppVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWarningAppVersion
    *
    * @param string $val The minimumWarningAppVersion
    *
    * @return ManagedAppProtection
    */
    public function setMinimumWarningAppVersion($val)
    {
        $this->_propDict["minimumWarningAppVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWipeOsVersion
    *
    * @return string The minimumWipeOsVersion
    */
    public function getMinimumWipeOsVersion()
    {
        if (array_key_exists("minimumWipeOsVersion", $this->_propDict)) {
            return $this->_propDict["minimumWipeOsVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWipeOsVersion
    *
    * @param string $val The minimumWipeOsVersion
    *
    * @return ManagedAppProtection
    */
    public function setMinimumWipeOsVersion($val)
    {
        $this->_propDict["minimumWipeOsVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWipeAppVersion
    *
    * @return string The minimumWipeAppVersion
    */
    public function getMinimumWipeAppVersion()
    {
        if (array_key_exists("minimumWipeAppVersion", $this->_propDict)) {
            return $this->_propDict["minimumWipeAppVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWipeAppVersion
    *
    * @param string $val The minimumWipeAppVersion
    *
    * @return ManagedAppProtection
    */
    public function setMinimumWipeAppVersion($val)
    {
        $this->_propDict["minimumWipeAppVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfDeviceComplianceRequired
    *
    * @return ManagedAppRemediationAction The appActionIfDeviceComplianceRequired
    */
    public function getAppActionIfDeviceComplianceRequired()
    {
        if (array_key_exists("appActionIfDeviceComplianceRequired", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfDeviceComplianceRequired"], "Microsoft\Graph\Beta\Model\ManagedAppRemediationAction")) {
                return $this->_propDict["appActionIfDeviceComplianceRequired"];
            } else {
                $this->_propDict["appActionIfDeviceComplianceRequired"] = new ManagedAppRemediationAction($this->_propDict["appActionIfDeviceComplianceRequired"]);
                return $this->_propDict["appActionIfDeviceComplianceRequired"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appActionIfDeviceComplianceRequired
    *
    * @param ManagedAppRemediationAction $val The appActionIfDeviceComplianceRequired
    *
    * @return ManagedAppProtection
    */
    public function setAppActionIfDeviceComplianceRequired($val)
    {
        $this->_propDict["appActionIfDeviceComplianceRequired"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfMaximumPinRetriesExceeded
    *
    * @return ManagedAppRemediationAction The appActionIfMaximumPinRetriesExceeded
    */
    public function getAppActionIfMaximumPinRetriesExceeded()
    {
        if (array_key_exists("appActionIfMaximumPinRetriesExceeded", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfMaximumPinRetriesExceeded"], "Microsoft\Graph\Beta\Model\ManagedAppRemediationAction")) {
                return $this->_propDict["appActionIfMaximumPinRetriesExceeded"];
            } else {
                $this->_propDict["appActionIfMaximumPinRetriesExceeded"] = new ManagedAppRemediationAction($this->_propDict["appActionIfMaximumPinRetriesExceeded"]);
                return $this->_propDict["appActionIfMaximumPinRetriesExceeded"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appActionIfMaximumPinRetriesExceeded
    *
    * @param ManagedAppRemediationAction $val The appActionIfMaximumPinRetriesExceeded
    *
    * @return ManagedAppProtection
    */
    public function setAppActionIfMaximumPinRetriesExceeded($val)
    {
        $this->_propDict["appActionIfMaximumPinRetriesExceeded"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinRequiredOnLaunchInsteadOfBiometric
    *
    * @return bool The pinRequiredOnLaunchInsteadOfBiometric
    */
    public function getPinRequiredOnLaunchInsteadOfBiometric()
    {
        if (array_key_exists("pinRequiredOnLaunchInsteadOfBiometric", $this->_propDict)) {
            return $this->_propDict["pinRequiredOnLaunchInsteadOfBiometric"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinRequiredOnLaunchInsteadOfBiometric
    *
    * @param bool $val The pinRequiredOnLaunchInsteadOfBiometric
    *
    * @return ManagedAppProtection
    */
    public function setPinRequiredOnLaunchInsteadOfBiometric($val)
    {
        $this->_propDict["pinRequiredOnLaunchInsteadOfBiometric"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the pinRequiredInsteadOfBiometricTimeout
    *
    * @return Duration The pinRequiredInsteadOfBiometricTimeout
    */
    public function getPinRequiredInsteadOfBiometricTimeout()
    {
        if (array_key_exists("pinRequiredInsteadOfBiometricTimeout", $this->_propDict)) {
            if (is_a($this->_propDict["pinRequiredInsteadOfBiometricTimeout"], "Microsoft\Graph\Beta\Model\Duration")) {
                return $this->_propDict["pinRequiredInsteadOfBiometricTimeout"];
            } else {
                $this->_propDict["pinRequiredInsteadOfBiometricTimeout"] = new Duration($this->_propDict["pinRequiredInsteadOfBiometricTimeout"]);
                return $this->_propDict["pinRequiredInsteadOfBiometricTimeout"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinRequiredInsteadOfBiometricTimeout
    *
    * @param Duration $val The pinRequiredInsteadOfBiometricTimeout
    *
    * @return ManagedAppProtection
    */
    public function setPinRequiredInsteadOfBiometricTimeout($val)
    {
        $this->_propDict["pinRequiredInsteadOfBiometricTimeout"] = $val;
        return $this;
    }
    
}