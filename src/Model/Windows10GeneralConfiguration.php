<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10GeneralConfiguration File
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
* Windows10GeneralConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Windows10GeneralConfiguration extends DeviceConfiguration
{
    /**
    * Gets the enterpriseCloudPrintDiscoveryEndPoint
    * Endpoint for discovering cloud printers.
    *
    * @return string The enterpriseCloudPrintDiscoveryEndPoint
    */
    public function getEnterpriseCloudPrintDiscoveryEndPoint()
    {
        if (array_key_exists("enterpriseCloudPrintDiscoveryEndPoint", $this->_propDict)) {
            return $this->_propDict["enterpriseCloudPrintDiscoveryEndPoint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseCloudPrintDiscoveryEndPoint
    * Endpoint for discovering cloud printers.
    *
    * @param string $val The enterpriseCloudPrintDiscoveryEndPoint
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEnterpriseCloudPrintDiscoveryEndPoint($val)
    {
        $this->_propDict["enterpriseCloudPrintDiscoveryEndPoint"] = $val;
        return $this;
    }
    
    /**
    * Gets the enterpriseCloudPrintOAuthAuthority
    * Authentication endpoint for acquiring OAuth tokens.
    *
    * @return string The enterpriseCloudPrintOAuthAuthority
    */
    public function getEnterpriseCloudPrintOAuthAuthority()
    {
        if (array_key_exists("enterpriseCloudPrintOAuthAuthority", $this->_propDict)) {
            return $this->_propDict["enterpriseCloudPrintOAuthAuthority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseCloudPrintOAuthAuthority
    * Authentication endpoint for acquiring OAuth tokens.
    *
    * @param string $val The enterpriseCloudPrintOAuthAuthority
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEnterpriseCloudPrintOAuthAuthority($val)
    {
        $this->_propDict["enterpriseCloudPrintOAuthAuthority"] = $val;
        return $this;
    }
    
    /**
    * Gets the enterpriseCloudPrintOAuthClientIdentifier
    * GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority.
    *
    * @return string The enterpriseCloudPrintOAuthClientIdentifier
    */
    public function getEnterpriseCloudPrintOAuthClientIdentifier()
    {
        if (array_key_exists("enterpriseCloudPrintOAuthClientIdentifier", $this->_propDict)) {
            return $this->_propDict["enterpriseCloudPrintOAuthClientIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseCloudPrintOAuthClientIdentifier
    * GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority.
    *
    * @param string $val The enterpriseCloudPrintOAuthClientIdentifier
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEnterpriseCloudPrintOAuthClientIdentifier($val)
    {
        $this->_propDict["enterpriseCloudPrintOAuthClientIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the enterpriseCloudPrintResourceIdentifier
    * OAuth resource URI for print service as configured in the Azure portal.
    *
    * @return string The enterpriseCloudPrintResourceIdentifier
    */
    public function getEnterpriseCloudPrintResourceIdentifier()
    {
        if (array_key_exists("enterpriseCloudPrintResourceIdentifier", $this->_propDict)) {
            return $this->_propDict["enterpriseCloudPrintResourceIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseCloudPrintResourceIdentifier
    * OAuth resource URI for print service as configured in the Azure portal.
    *
    * @param string $val The enterpriseCloudPrintResourceIdentifier
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEnterpriseCloudPrintResourceIdentifier($val)
    {
        $this->_propDict["enterpriseCloudPrintResourceIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the enterpriseCloudPrintDiscoveryMaxLimit
    * Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535
    *
    * @return int The enterpriseCloudPrintDiscoveryMaxLimit
    */
    public function getEnterpriseCloudPrintDiscoveryMaxLimit()
    {
        if (array_key_exists("enterpriseCloudPrintDiscoveryMaxLimit", $this->_propDict)) {
            return $this->_propDict["enterpriseCloudPrintDiscoveryMaxLimit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseCloudPrintDiscoveryMaxLimit
    * Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535
    *
    * @param int $val The enterpriseCloudPrintDiscoveryMaxLimit
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEnterpriseCloudPrintDiscoveryMaxLimit($val)
    {
        $this->_propDict["enterpriseCloudPrintDiscoveryMaxLimit"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier
    * OAuth resource URI for printer discovery service as configured in Azure portal.
    *
    * @return string The enterpriseCloudPrintMopriaDiscoveryResourceIdentifier
    */
    public function getEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier()
    {
        if (array_key_exists("enterpriseCloudPrintMopriaDiscoveryResourceIdentifier", $this->_propDict)) {
            return $this->_propDict["enterpriseCloudPrintMopriaDiscoveryResourceIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier
    * OAuth resource URI for printer discovery service as configured in Azure portal.
    *
    * @param string $val The enterpriseCloudPrintMopriaDiscoveryResourceIdentifier
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier($val)
    {
        $this->_propDict["enterpriseCloudPrintMopriaDiscoveryResourceIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the searchBlockDiacritics
    * Specifies if search can use diacritics.
    *
    * @return bool The searchBlockDiacritics
    */
    public function getSearchBlockDiacritics()
    {
        if (array_key_exists("searchBlockDiacritics", $this->_propDict)) {
            return $this->_propDict["searchBlockDiacritics"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the searchBlockDiacritics
    * Specifies if search can use diacritics.
    *
    * @param bool $val The searchBlockDiacritics
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSearchBlockDiacritics($val)
    {
        $this->_propDict["searchBlockDiacritics"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the searchDisableAutoLanguageDetection
    * Specifies whether to use automatic language detection when indexing content and properties.
    *
    * @return bool The searchDisableAutoLanguageDetection
    */
    public function getSearchDisableAutoLanguageDetection()
    {
        if (array_key_exists("searchDisableAutoLanguageDetection", $this->_propDict)) {
            return $this->_propDict["searchDisableAutoLanguageDetection"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the searchDisableAutoLanguageDetection
    * Specifies whether to use automatic language detection when indexing content and properties.
    *
    * @param bool $val The searchDisableAutoLanguageDetection
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSearchDisableAutoLanguageDetection($val)
    {
        $this->_propDict["searchDisableAutoLanguageDetection"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the searchDisableIndexingEncryptedItems
    * Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer.
    *
    * @return bool The searchDisableIndexingEncryptedItems
    */
    public function getSearchDisableIndexingEncryptedItems()
    {
        if (array_key_exists("searchDisableIndexingEncryptedItems", $this->_propDict)) {
            return $this->_propDict["searchDisableIndexingEncryptedItems"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the searchDisableIndexingEncryptedItems
    * Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer.
    *
    * @param bool $val The searchDisableIndexingEncryptedItems
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSearchDisableIndexingEncryptedItems($val)
    {
        $this->_propDict["searchDisableIndexingEncryptedItems"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the searchEnableRemoteQueries
    * Indicates whether or not to block remote queries of this computer’s index.
    *
    * @return bool The searchEnableRemoteQueries
    */
    public function getSearchEnableRemoteQueries()
    {
        if (array_key_exists("searchEnableRemoteQueries", $this->_propDict)) {
            return $this->_propDict["searchEnableRemoteQueries"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the searchEnableRemoteQueries
    * Indicates whether or not to block remote queries of this computer’s index.
    *
    * @param bool $val The searchEnableRemoteQueries
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSearchEnableRemoteQueries($val)
    {
        $this->_propDict["searchEnableRemoteQueries"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the searchDisableIndexerBackoff
    * Indicates whether or not to disable the search indexer backoff feature.
    *
    * @return bool The searchDisableIndexerBackoff
    */
    public function getSearchDisableIndexerBackoff()
    {
        if (array_key_exists("searchDisableIndexerBackoff", $this->_propDict)) {
            return $this->_propDict["searchDisableIndexerBackoff"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the searchDisableIndexerBackoff
    * Indicates whether or not to disable the search indexer backoff feature.
    *
    * @param bool $val The searchDisableIndexerBackoff
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSearchDisableIndexerBackoff($val)
    {
        $this->_propDict["searchDisableIndexerBackoff"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the searchDisableIndexingRemovableDrive
    * Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed.
    *
    * @return bool The searchDisableIndexingRemovableDrive
    */
    public function getSearchDisableIndexingRemovableDrive()
    {
        if (array_key_exists("searchDisableIndexingRemovableDrive", $this->_propDict)) {
            return $this->_propDict["searchDisableIndexingRemovableDrive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the searchDisableIndexingRemovableDrive
    * Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed.
    *
    * @param bool $val The searchDisableIndexingRemovableDrive
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSearchDisableIndexingRemovableDrive($val)
    {
        $this->_propDict["searchDisableIndexingRemovableDrive"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the searchEnableAutomaticIndexSizeManangement
    * Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops.
    *
    * @return bool The searchEnableAutomaticIndexSizeManangement
    */
    public function getSearchEnableAutomaticIndexSizeManangement()
    {
        if (array_key_exists("searchEnableAutomaticIndexSizeManangement", $this->_propDict)) {
            return $this->_propDict["searchEnableAutomaticIndexSizeManangement"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the searchEnableAutomaticIndexSizeManangement
    * Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops.
    *
    * @param bool $val The searchEnableAutomaticIndexSizeManangement
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSearchEnableAutomaticIndexSizeManangement($val)
    {
        $this->_propDict["searchEnableAutomaticIndexSizeManangement"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the diagnosticsDataSubmissionMode
    * Gets or sets a value allowing the device to send diagnostic and usage telemetry data, such as Watson. Possible values are: userDefined, none, basic, enhanced, full.
    *
    * @return DiagnosticDataSubmissionMode The diagnosticsDataSubmissionMode
    */
    public function getDiagnosticsDataSubmissionMode()
    {
        if (array_key_exists("diagnosticsDataSubmissionMode", $this->_propDict)) {
            if (is_a($this->_propDict["diagnosticsDataSubmissionMode"], "Microsoft\Graph\Model\DiagnosticDataSubmissionMode")) {
                return $this->_propDict["diagnosticsDataSubmissionMode"];
            } else {
                $this->_propDict["diagnosticsDataSubmissionMode"] = new DiagnosticDataSubmissionMode($this->_propDict["diagnosticsDataSubmissionMode"]);
                return $this->_propDict["diagnosticsDataSubmissionMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the diagnosticsDataSubmissionMode
    * Gets or sets a value allowing the device to send diagnostic and usage telemetry data, such as Watson. Possible values are: userDefined, none, basic, enhanced, full.
    *
    * @param DiagnosticDataSubmissionMode $val The diagnosticsDataSubmissionMode
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDiagnosticsDataSubmissionMode($val)
    {
        $this->_propDict["diagnosticsDataSubmissionMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the oneDriveDisableFileSync
    * Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive.
    *
    * @return bool The oneDriveDisableFileSync
    */
    public function getOneDriveDisableFileSync()
    {
        if (array_key_exists("oneDriveDisableFileSync", $this->_propDict)) {
            return $this->_propDict["oneDriveDisableFileSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the oneDriveDisableFileSync
    * Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive.
    *
    * @param bool $val The oneDriveDisableFileSync
    *
    * @return Windows10GeneralConfiguration
    */
    public function setOneDriveDisableFileSync($val)
    {
        $this->_propDict["oneDriveDisableFileSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smartScreenEnableAppInstallControl
    * Allows IT Admins to control whether users are allowed to install apps from places other than the Store.
    *
    * @return bool The smartScreenEnableAppInstallControl
    */
    public function getSmartScreenEnableAppInstallControl()
    {
        if (array_key_exists("smartScreenEnableAppInstallControl", $this->_propDict)) {
            return $this->_propDict["smartScreenEnableAppInstallControl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smartScreenEnableAppInstallControl
    * Allows IT Admins to control whether users are allowed to install apps from places other than the Store.
    *
    * @param bool $val The smartScreenEnableAppInstallControl
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSmartScreenEnableAppInstallControl($val)
    {
        $this->_propDict["smartScreenEnableAppInstallControl"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the personalizationDesktopImageUrl
    * A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image.
    *
    * @return string The personalizationDesktopImageUrl
    */
    public function getPersonalizationDesktopImageUrl()
    {
        if (array_key_exists("personalizationDesktopImageUrl", $this->_propDict)) {
            return $this->_propDict["personalizationDesktopImageUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the personalizationDesktopImageUrl
    * A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image.
    *
    * @param string $val The personalizationDesktopImageUrl
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPersonalizationDesktopImageUrl($val)
    {
        $this->_propDict["personalizationDesktopImageUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the personalizationLockScreenImageUrl
    * A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image.
    *
    * @return string The personalizationLockScreenImageUrl
    */
    public function getPersonalizationLockScreenImageUrl()
    {
        if (array_key_exists("personalizationLockScreenImageUrl", $this->_propDict)) {
            return $this->_propDict["personalizationLockScreenImageUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the personalizationLockScreenImageUrl
    * A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image.
    *
    * @param string $val The personalizationLockScreenImageUrl
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPersonalizationLockScreenImageUrl($val)
    {
        $this->_propDict["personalizationLockScreenImageUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the bluetoothAllowedServices
    * Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
    *
    * @return string The bluetoothAllowedServices
    */
    public function getBluetoothAllowedServices()
    {
        if (array_key_exists("bluetoothAllowedServices", $this->_propDict)) {
            return $this->_propDict["bluetoothAllowedServices"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bluetoothAllowedServices
    * Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
    *
    * @param string $val The bluetoothAllowedServices
    *
    * @return Windows10GeneralConfiguration
    */
    public function setBluetoothAllowedServices($val)
    {
        $this->_propDict["bluetoothAllowedServices"] = $val;
        return $this;
    }
    
    /**
    * Gets the bluetoothBlockAdvertising
    * Whether or not to Block the user from using bluetooth advertising.
    *
    * @return bool The bluetoothBlockAdvertising
    */
    public function getBluetoothBlockAdvertising()
    {
        if (array_key_exists("bluetoothBlockAdvertising", $this->_propDict)) {
            return $this->_propDict["bluetoothBlockAdvertising"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bluetoothBlockAdvertising
    * Whether or not to Block the user from using bluetooth advertising.
    *
    * @param bool $val The bluetoothBlockAdvertising
    *
    * @return Windows10GeneralConfiguration
    */
    public function setBluetoothBlockAdvertising($val)
    {
        $this->_propDict["bluetoothBlockAdvertising"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bluetoothBlockDiscoverableMode
    * Whether or not to Block the user from using bluetooth discoverable mode.
    *
    * @return bool The bluetoothBlockDiscoverableMode
    */
    public function getBluetoothBlockDiscoverableMode()
    {
        if (array_key_exists("bluetoothBlockDiscoverableMode", $this->_propDict)) {
            return $this->_propDict["bluetoothBlockDiscoverableMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bluetoothBlockDiscoverableMode
    * Whether or not to Block the user from using bluetooth discoverable mode.
    *
    * @param bool $val The bluetoothBlockDiscoverableMode
    *
    * @return Windows10GeneralConfiguration
    */
    public function setBluetoothBlockDiscoverableMode($val)
    {
        $this->_propDict["bluetoothBlockDiscoverableMode"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bluetoothBlockPrePairing
    * Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device.
    *
    * @return bool The bluetoothBlockPrePairing
    */
    public function getBluetoothBlockPrePairing()
    {
        if (array_key_exists("bluetoothBlockPrePairing", $this->_propDict)) {
            return $this->_propDict["bluetoothBlockPrePairing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bluetoothBlockPrePairing
    * Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device.
    *
    * @param bool $val The bluetoothBlockPrePairing
    *
    * @return Windows10GeneralConfiguration
    */
    public function setBluetoothBlockPrePairing($val)
    {
        $this->_propDict["bluetoothBlockPrePairing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeBlockAutofill
    * Indicates whether or not to block auto fill.
    *
    * @return bool The edgeBlockAutofill
    */
    public function getEdgeBlockAutofill()
    {
        if (array_key_exists("edgeBlockAutofill", $this->_propDict)) {
            return $this->_propDict["edgeBlockAutofill"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockAutofill
    * Indicates whether or not to block auto fill.
    *
    * @param bool $val The edgeBlockAutofill
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockAutofill($val)
    {
        $this->_propDict["edgeBlockAutofill"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeBlocked
    * Indicates whether or not to Block the user from using the Edge browser.
    *
    * @return bool The edgeBlocked
    */
    public function getEdgeBlocked()
    {
        if (array_key_exists("edgeBlocked", $this->_propDict)) {
            return $this->_propDict["edgeBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlocked
    * Indicates whether or not to Block the user from using the Edge browser.
    *
    * @param bool $val The edgeBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlocked($val)
    {
        $this->_propDict["edgeBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeCookiePolicy
    * Indicates which cookies to block in the Edge browser. Possible values are: userDefined, allow, blockThirdParty, blockAll.
    *
    * @return EdgeCookiePolicy The edgeCookiePolicy
    */
    public function getEdgeCookiePolicy()
    {
        if (array_key_exists("edgeCookiePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["edgeCookiePolicy"], "Microsoft\Graph\Model\EdgeCookiePolicy")) {
                return $this->_propDict["edgeCookiePolicy"];
            } else {
                $this->_propDict["edgeCookiePolicy"] = new EdgeCookiePolicy($this->_propDict["edgeCookiePolicy"]);
                return $this->_propDict["edgeCookiePolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the edgeCookiePolicy
    * Indicates which cookies to block in the Edge browser. Possible values are: userDefined, allow, blockThirdParty, blockAll.
    *
    * @param EdgeCookiePolicy $val The edgeCookiePolicy
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeCookiePolicy($val)
    {
        $this->_propDict["edgeCookiePolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the edgeBlockDeveloperTools
    * Indicates whether or not to block developer tools in the Edge browser.
    *
    * @return bool The edgeBlockDeveloperTools
    */
    public function getEdgeBlockDeveloperTools()
    {
        if (array_key_exists("edgeBlockDeveloperTools", $this->_propDict)) {
            return $this->_propDict["edgeBlockDeveloperTools"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockDeveloperTools
    * Indicates whether or not to block developer tools in the Edge browser.
    *
    * @param bool $val The edgeBlockDeveloperTools
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockDeveloperTools($val)
    {
        $this->_propDict["edgeBlockDeveloperTools"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeBlockSendingDoNotTrackHeader
    * Indicates whether or not to Block the user from sending the do not track header.
    *
    * @return bool The edgeBlockSendingDoNotTrackHeader
    */
    public function getEdgeBlockSendingDoNotTrackHeader()
    {
        if (array_key_exists("edgeBlockSendingDoNotTrackHeader", $this->_propDict)) {
            return $this->_propDict["edgeBlockSendingDoNotTrackHeader"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockSendingDoNotTrackHeader
    * Indicates whether or not to Block the user from sending the do not track header.
    *
    * @param bool $val The edgeBlockSendingDoNotTrackHeader
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockSendingDoNotTrackHeader($val)
    {
        $this->_propDict["edgeBlockSendingDoNotTrackHeader"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeBlockExtensions
    * Indicates whether or not to block extensions in the Edge browser.
    *
    * @return bool The edgeBlockExtensions
    */
    public function getEdgeBlockExtensions()
    {
        if (array_key_exists("edgeBlockExtensions", $this->_propDict)) {
            return $this->_propDict["edgeBlockExtensions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockExtensions
    * Indicates whether or not to block extensions in the Edge browser.
    *
    * @param bool $val The edgeBlockExtensions
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockExtensions($val)
    {
        $this->_propDict["edgeBlockExtensions"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeBlockInPrivateBrowsing
    * Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser.
    *
    * @return bool The edgeBlockInPrivateBrowsing
    */
    public function getEdgeBlockInPrivateBrowsing()
    {
        if (array_key_exists("edgeBlockInPrivateBrowsing", $this->_propDict)) {
            return $this->_propDict["edgeBlockInPrivateBrowsing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockInPrivateBrowsing
    * Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser.
    *
    * @param bool $val The edgeBlockInPrivateBrowsing
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockInPrivateBrowsing($val)
    {
        $this->_propDict["edgeBlockInPrivateBrowsing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeBlockJavaScript
    * Indicates whether or not to Block the user from using JavaScript.
    *
    * @return bool The edgeBlockJavaScript
    */
    public function getEdgeBlockJavaScript()
    {
        if (array_key_exists("edgeBlockJavaScript", $this->_propDict)) {
            return $this->_propDict["edgeBlockJavaScript"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockJavaScript
    * Indicates whether or not to Block the user from using JavaScript.
    *
    * @param bool $val The edgeBlockJavaScript
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockJavaScript($val)
    {
        $this->_propDict["edgeBlockJavaScript"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeBlockPasswordManager
    * Indicates whether or not to Block password manager.
    *
    * @return bool The edgeBlockPasswordManager
    */
    public function getEdgeBlockPasswordManager()
    {
        if (array_key_exists("edgeBlockPasswordManager", $this->_propDict)) {
            return $this->_propDict["edgeBlockPasswordManager"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockPasswordManager
    * Indicates whether or not to Block password manager.
    *
    * @param bool $val The edgeBlockPasswordManager
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockPasswordManager($val)
    {
        $this->_propDict["edgeBlockPasswordManager"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeBlockAddressBarDropdown
    * Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services.
    *
    * @return bool The edgeBlockAddressBarDropdown
    */
    public function getEdgeBlockAddressBarDropdown()
    {
        if (array_key_exists("edgeBlockAddressBarDropdown", $this->_propDict)) {
            return $this->_propDict["edgeBlockAddressBarDropdown"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockAddressBarDropdown
    * Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services.
    *
    * @param bool $val The edgeBlockAddressBarDropdown
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockAddressBarDropdown($val)
    {
        $this->_propDict["edgeBlockAddressBarDropdown"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeBlockCompatibilityList
    * Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues.
    *
    * @return bool The edgeBlockCompatibilityList
    */
    public function getEdgeBlockCompatibilityList()
    {
        if (array_key_exists("edgeBlockCompatibilityList", $this->_propDict)) {
            return $this->_propDict["edgeBlockCompatibilityList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockCompatibilityList
    * Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues.
    *
    * @param bool $val The edgeBlockCompatibilityList
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockCompatibilityList($val)
    {
        $this->_propDict["edgeBlockCompatibilityList"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeClearBrowsingDataOnExit
    * Clear browsing data on exiting Microsoft Edge.
    *
    * @return bool The edgeClearBrowsingDataOnExit
    */
    public function getEdgeClearBrowsingDataOnExit()
    {
        if (array_key_exists("edgeClearBrowsingDataOnExit", $this->_propDict)) {
            return $this->_propDict["edgeClearBrowsingDataOnExit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeClearBrowsingDataOnExit
    * Clear browsing data on exiting Microsoft Edge.
    *
    * @param bool $val The edgeClearBrowsingDataOnExit
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeClearBrowsingDataOnExit($val)
    {
        $this->_propDict["edgeClearBrowsingDataOnExit"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeAllowStartPagesModification
    * Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge.
    *
    * @return bool The edgeAllowStartPagesModification
    */
    public function getEdgeAllowStartPagesModification()
    {
        if (array_key_exists("edgeAllowStartPagesModification", $this->_propDict)) {
            return $this->_propDict["edgeAllowStartPagesModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeAllowStartPagesModification
    * Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge.
    *
    * @param bool $val The edgeAllowStartPagesModification
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeAllowStartPagesModification($val)
    {
        $this->_propDict["edgeAllowStartPagesModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeDisableFirstRunPage
    * Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page.
    *
    * @return bool The edgeDisableFirstRunPage
    */
    public function getEdgeDisableFirstRunPage()
    {
        if (array_key_exists("edgeDisableFirstRunPage", $this->_propDict)) {
            return $this->_propDict["edgeDisableFirstRunPage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeDisableFirstRunPage
    * Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page.
    *
    * @param bool $val The edgeDisableFirstRunPage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeDisableFirstRunPage($val)
    {
        $this->_propDict["edgeDisableFirstRunPage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeBlockLiveTileDataCollection
    * Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge.
    *
    * @return bool The edgeBlockLiveTileDataCollection
    */
    public function getEdgeBlockLiveTileDataCollection()
    {
        if (array_key_exists("edgeBlockLiveTileDataCollection", $this->_propDict)) {
            return $this->_propDict["edgeBlockLiveTileDataCollection"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockLiveTileDataCollection
    * Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge.
    *
    * @param bool $val The edgeBlockLiveTileDataCollection
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockLiveTileDataCollection($val)
    {
        $this->_propDict["edgeBlockLiveTileDataCollection"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeSyncFavoritesWithInternetExplorer
    * Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers.
    *
    * @return bool The edgeSyncFavoritesWithInternetExplorer
    */
    public function getEdgeSyncFavoritesWithInternetExplorer()
    {
        if (array_key_exists("edgeSyncFavoritesWithInternetExplorer", $this->_propDict)) {
            return $this->_propDict["edgeSyncFavoritesWithInternetExplorer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeSyncFavoritesWithInternetExplorer
    * Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers.
    *
    * @param bool $val The edgeSyncFavoritesWithInternetExplorer
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeSyncFavoritesWithInternetExplorer($val)
    {
        $this->_propDict["edgeSyncFavoritesWithInternetExplorer"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockDataWhenRoaming
    * Whether or not to Block the user from using data over cellular while roaming.
    *
    * @return bool The cellularBlockDataWhenRoaming
    */
    public function getCellularBlockDataWhenRoaming()
    {
        if (array_key_exists("cellularBlockDataWhenRoaming", $this->_propDict)) {
            return $this->_propDict["cellularBlockDataWhenRoaming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockDataWhenRoaming
    * Whether or not to Block the user from using data over cellular while roaming.
    *
    * @param bool $val The cellularBlockDataWhenRoaming
    *
    * @return Windows10GeneralConfiguration
    */
    public function setCellularBlockDataWhenRoaming($val)
    {
        $this->_propDict["cellularBlockDataWhenRoaming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockVpn
    * Whether or not to Block the user from using VPN over cellular.
    *
    * @return bool The cellularBlockVpn
    */
    public function getCellularBlockVpn()
    {
        if (array_key_exists("cellularBlockVpn", $this->_propDict)) {
            return $this->_propDict["cellularBlockVpn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockVpn
    * Whether or not to Block the user from using VPN over cellular.
    *
    * @param bool $val The cellularBlockVpn
    *
    * @return Windows10GeneralConfiguration
    */
    public function setCellularBlockVpn($val)
    {
        $this->_propDict["cellularBlockVpn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockVpnWhenRoaming
    * Whether or not to Block the user from using VPN when roaming over cellular.
    *
    * @return bool The cellularBlockVpnWhenRoaming
    */
    public function getCellularBlockVpnWhenRoaming()
    {
        if (array_key_exists("cellularBlockVpnWhenRoaming", $this->_propDict)) {
            return $this->_propDict["cellularBlockVpnWhenRoaming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockVpnWhenRoaming
    * Whether or not to Block the user from using VPN when roaming over cellular.
    *
    * @param bool $val The cellularBlockVpnWhenRoaming
    *
    * @return Windows10GeneralConfiguration
    */
    public function setCellularBlockVpnWhenRoaming($val)
    {
        $this->_propDict["cellularBlockVpnWhenRoaming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderBlockEndUserAccess
    * Whether or not to block end user access to Defender.
    *
    * @return bool The defenderBlockEndUserAccess
    */
    public function getDefenderBlockEndUserAccess()
    {
        if (array_key_exists("defenderBlockEndUserAccess", $this->_propDict)) {
            return $this->_propDict["defenderBlockEndUserAccess"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderBlockEndUserAccess
    * Whether or not to block end user access to Defender.
    *
    * @param bool $val The defenderBlockEndUserAccess
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderBlockEndUserAccess($val)
    {
        $this->_propDict["defenderBlockEndUserAccess"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderDaysBeforeDeletingQuarantinedMalware
    * Number of days before deleting quarantined malware. Valid values 0 to 90
    *
    * @return int The defenderDaysBeforeDeletingQuarantinedMalware
    */
    public function getDefenderDaysBeforeDeletingQuarantinedMalware()
    {
        if (array_key_exists("defenderDaysBeforeDeletingQuarantinedMalware", $this->_propDict)) {
            return $this->_propDict["defenderDaysBeforeDeletingQuarantinedMalware"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderDaysBeforeDeletingQuarantinedMalware
    * Number of days before deleting quarantined malware. Valid values 0 to 90
    *
    * @param int $val The defenderDaysBeforeDeletingQuarantinedMalware
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderDaysBeforeDeletingQuarantinedMalware($val)
    {
        $this->_propDict["defenderDaysBeforeDeletingQuarantinedMalware"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the defenderDetectedMalwareActions
    * Gets or sets Defender’s actions to take on detected Malware per threat level.
    *
    * @return DefenderDetectedMalwareActions The defenderDetectedMalwareActions
    */
    public function getDefenderDetectedMalwareActions()
    {
        if (array_key_exists("defenderDetectedMalwareActions", $this->_propDict)) {
            if (is_a($this->_propDict["defenderDetectedMalwareActions"], "Microsoft\Graph\Model\DefenderDetectedMalwareActions")) {
                return $this->_propDict["defenderDetectedMalwareActions"];
            } else {
                $this->_propDict["defenderDetectedMalwareActions"] = new DefenderDetectedMalwareActions($this->_propDict["defenderDetectedMalwareActions"]);
                return $this->_propDict["defenderDetectedMalwareActions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderDetectedMalwareActions
    * Gets or sets Defender’s actions to take on detected Malware per threat level.
    *
    * @param DefenderDetectedMalwareActions $val The defenderDetectedMalwareActions
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderDetectedMalwareActions($val)
    {
        $this->_propDict["defenderDetectedMalwareActions"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSystemScanSchedule
    * Defender day of the week for the system scan. Possible values are: userDefined, everyday, sunday, monday, tuesday, wednesday, thursday, friday, saturday.
    *
    * @return WeeklySchedule The defenderSystemScanSchedule
    */
    public function getDefenderSystemScanSchedule()
    {
        if (array_key_exists("defenderSystemScanSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["defenderSystemScanSchedule"], "Microsoft\Graph\Model\WeeklySchedule")) {
                return $this->_propDict["defenderSystemScanSchedule"];
            } else {
                $this->_propDict["defenderSystemScanSchedule"] = new WeeklySchedule($this->_propDict["defenderSystemScanSchedule"]);
                return $this->_propDict["defenderSystemScanSchedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderSystemScanSchedule
    * Defender day of the week for the system scan. Possible values are: userDefined, everyday, sunday, monday, tuesday, wednesday, thursday, friday, saturday.
    *
    * @param WeeklySchedule $val The defenderSystemScanSchedule
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderSystemScanSchedule($val)
    {
        $this->_propDict["defenderSystemScanSchedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderFilesAndFoldersToExclude
    * Files and folder to exclude from scans and real time protection.
    *
    * @return string The defenderFilesAndFoldersToExclude
    */
    public function getDefenderFilesAndFoldersToExclude()
    {
        if (array_key_exists("defenderFilesAndFoldersToExclude", $this->_propDict)) {
            return $this->_propDict["defenderFilesAndFoldersToExclude"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderFilesAndFoldersToExclude
    * Files and folder to exclude from scans and real time protection.
    *
    * @param string $val The defenderFilesAndFoldersToExclude
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderFilesAndFoldersToExclude($val)
    {
        $this->_propDict["defenderFilesAndFoldersToExclude"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderFileExtensionsToExclude
    * File extensions to exclude from scans and real time protection.
    *
    * @return string The defenderFileExtensionsToExclude
    */
    public function getDefenderFileExtensionsToExclude()
    {
        if (array_key_exists("defenderFileExtensionsToExclude", $this->_propDict)) {
            return $this->_propDict["defenderFileExtensionsToExclude"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderFileExtensionsToExclude
    * File extensions to exclude from scans and real time protection.
    *
    * @param string $val The defenderFileExtensionsToExclude
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderFileExtensionsToExclude($val)
    {
        $this->_propDict["defenderFileExtensionsToExclude"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderScanMaxCpu
    * Max CPU usage percentage during scan. Valid values 0 to 100
    *
    * @return int The defenderScanMaxCpu
    */
    public function getDefenderScanMaxCpu()
    {
        if (array_key_exists("defenderScanMaxCpu", $this->_propDict)) {
            return $this->_propDict["defenderScanMaxCpu"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderScanMaxCpu
    * Max CPU usage percentage during scan. Valid values 0 to 100
    *
    * @param int $val The defenderScanMaxCpu
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderScanMaxCpu($val)
    {
        $this->_propDict["defenderScanMaxCpu"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the defenderMonitorFileActivity
    * Value for monitoring file activity. Possible values are: userDefined, disable, monitorAllFiles, monitorIncomingFilesOnly, monitorOutgoingFilesOnly.
    *
    * @return DefenderMonitorFileActivity The defenderMonitorFileActivity
    */
    public function getDefenderMonitorFileActivity()
    {
        if (array_key_exists("defenderMonitorFileActivity", $this->_propDict)) {
            if (is_a($this->_propDict["defenderMonitorFileActivity"], "Microsoft\Graph\Model\DefenderMonitorFileActivity")) {
                return $this->_propDict["defenderMonitorFileActivity"];
            } else {
                $this->_propDict["defenderMonitorFileActivity"] = new DefenderMonitorFileActivity($this->_propDict["defenderMonitorFileActivity"]);
                return $this->_propDict["defenderMonitorFileActivity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderMonitorFileActivity
    * Value for monitoring file activity. Possible values are: userDefined, disable, monitorAllFiles, monitorIncomingFilesOnly, monitorOutgoingFilesOnly.
    *
    * @param DefenderMonitorFileActivity $val The defenderMonitorFileActivity
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderMonitorFileActivity($val)
    {
        $this->_propDict["defenderMonitorFileActivity"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderProcessesToExclude
    * Processes to exclude from scans and real time protection.
    *
    * @return string The defenderProcessesToExclude
    */
    public function getDefenderProcessesToExclude()
    {
        if (array_key_exists("defenderProcessesToExclude", $this->_propDict)) {
            return $this->_propDict["defenderProcessesToExclude"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderProcessesToExclude
    * Processes to exclude from scans and real time protection.
    *
    * @param string $val The defenderProcessesToExclude
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderProcessesToExclude($val)
    {
        $this->_propDict["defenderProcessesToExclude"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderPromptForSampleSubmission
    * The configuration for how to prompt user for sample submission. Possible values are: userDefined, alwaysPrompt, promptBeforeSendingPersonalData, neverSendData, sendAllDataWithoutPrompting.
    *
    * @return DefenderPromptForSampleSubmission The defenderPromptForSampleSubmission
    */
    public function getDefenderPromptForSampleSubmission()
    {
        if (array_key_exists("defenderPromptForSampleSubmission", $this->_propDict)) {
            if (is_a($this->_propDict["defenderPromptForSampleSubmission"], "Microsoft\Graph\Model\DefenderPromptForSampleSubmission")) {
                return $this->_propDict["defenderPromptForSampleSubmission"];
            } else {
                $this->_propDict["defenderPromptForSampleSubmission"] = new DefenderPromptForSampleSubmission($this->_propDict["defenderPromptForSampleSubmission"]);
                return $this->_propDict["defenderPromptForSampleSubmission"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderPromptForSampleSubmission
    * The configuration for how to prompt user for sample submission. Possible values are: userDefined, alwaysPrompt, promptBeforeSendingPersonalData, neverSendData, sendAllDataWithoutPrompting.
    *
    * @param DefenderPromptForSampleSubmission $val The defenderPromptForSampleSubmission
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderPromptForSampleSubmission($val)
    {
        $this->_propDict["defenderPromptForSampleSubmission"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderRequireBehaviorMonitoring
    * Indicates whether or not to require behavior monitoring.
    *
    * @return bool The defenderRequireBehaviorMonitoring
    */
    public function getDefenderRequireBehaviorMonitoring()
    {
        if (array_key_exists("defenderRequireBehaviorMonitoring", $this->_propDict)) {
            return $this->_propDict["defenderRequireBehaviorMonitoring"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderRequireBehaviorMonitoring
    * Indicates whether or not to require behavior monitoring.
    *
    * @param bool $val The defenderRequireBehaviorMonitoring
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderRequireBehaviorMonitoring($val)
    {
        $this->_propDict["defenderRequireBehaviorMonitoring"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderRequireCloudProtection
    * Indicates whether or not to require cloud protection.
    *
    * @return bool The defenderRequireCloudProtection
    */
    public function getDefenderRequireCloudProtection()
    {
        if (array_key_exists("defenderRequireCloudProtection", $this->_propDict)) {
            return $this->_propDict["defenderRequireCloudProtection"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderRequireCloudProtection
    * Indicates whether or not to require cloud protection.
    *
    * @param bool $val The defenderRequireCloudProtection
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderRequireCloudProtection($val)
    {
        $this->_propDict["defenderRequireCloudProtection"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderRequireNetworkInspectionSystem
    * Indicates whether or not to require network inspection system.
    *
    * @return bool The defenderRequireNetworkInspectionSystem
    */
    public function getDefenderRequireNetworkInspectionSystem()
    {
        if (array_key_exists("defenderRequireNetworkInspectionSystem", $this->_propDict)) {
            return $this->_propDict["defenderRequireNetworkInspectionSystem"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderRequireNetworkInspectionSystem
    * Indicates whether or not to require network inspection system.
    *
    * @param bool $val The defenderRequireNetworkInspectionSystem
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderRequireNetworkInspectionSystem($val)
    {
        $this->_propDict["defenderRequireNetworkInspectionSystem"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderRequireRealTimeMonitoring
    * Indicates whether or not to require real time monitoring.
    *
    * @return bool The defenderRequireRealTimeMonitoring
    */
    public function getDefenderRequireRealTimeMonitoring()
    {
        if (array_key_exists("defenderRequireRealTimeMonitoring", $this->_propDict)) {
            return $this->_propDict["defenderRequireRealTimeMonitoring"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderRequireRealTimeMonitoring
    * Indicates whether or not to require real time monitoring.
    *
    * @param bool $val The defenderRequireRealTimeMonitoring
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderRequireRealTimeMonitoring($val)
    {
        $this->_propDict["defenderRequireRealTimeMonitoring"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderScanArchiveFiles
    * Indicates whether or not to scan archive files.
    *
    * @return bool The defenderScanArchiveFiles
    */
    public function getDefenderScanArchiveFiles()
    {
        if (array_key_exists("defenderScanArchiveFiles", $this->_propDict)) {
            return $this->_propDict["defenderScanArchiveFiles"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderScanArchiveFiles
    * Indicates whether or not to scan archive files.
    *
    * @param bool $val The defenderScanArchiveFiles
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderScanArchiveFiles($val)
    {
        $this->_propDict["defenderScanArchiveFiles"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderScanDownloads
    * Indicates whether or not to scan downloads.
    *
    * @return bool The defenderScanDownloads
    */
    public function getDefenderScanDownloads()
    {
        if (array_key_exists("defenderScanDownloads", $this->_propDict)) {
            return $this->_propDict["defenderScanDownloads"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderScanDownloads
    * Indicates whether or not to scan downloads.
    *
    * @param bool $val The defenderScanDownloads
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderScanDownloads($val)
    {
        $this->_propDict["defenderScanDownloads"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderScanNetworkFiles
    * Indicates whether or not to scan files opened from a network folder.
    *
    * @return bool The defenderScanNetworkFiles
    */
    public function getDefenderScanNetworkFiles()
    {
        if (array_key_exists("defenderScanNetworkFiles", $this->_propDict)) {
            return $this->_propDict["defenderScanNetworkFiles"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderScanNetworkFiles
    * Indicates whether or not to scan files opened from a network folder.
    *
    * @param bool $val The defenderScanNetworkFiles
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderScanNetworkFiles($val)
    {
        $this->_propDict["defenderScanNetworkFiles"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderScanIncomingMail
    * Indicates whether or not to scan incoming mail messages.
    *
    * @return bool The defenderScanIncomingMail
    */
    public function getDefenderScanIncomingMail()
    {
        if (array_key_exists("defenderScanIncomingMail", $this->_propDict)) {
            return $this->_propDict["defenderScanIncomingMail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderScanIncomingMail
    * Indicates whether or not to scan incoming mail messages.
    *
    * @param bool $val The defenderScanIncomingMail
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderScanIncomingMail($val)
    {
        $this->_propDict["defenderScanIncomingMail"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderScanMappedNetworkDrivesDuringFullScan
    * Indicates whether or not to scan mapped network drives during full scan.
    *
    * @return bool The defenderScanMappedNetworkDrivesDuringFullScan
    */
    public function getDefenderScanMappedNetworkDrivesDuringFullScan()
    {
        if (array_key_exists("defenderScanMappedNetworkDrivesDuringFullScan", $this->_propDict)) {
            return $this->_propDict["defenderScanMappedNetworkDrivesDuringFullScan"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderScanMappedNetworkDrivesDuringFullScan
    * Indicates whether or not to scan mapped network drives during full scan.
    *
    * @param bool $val The defenderScanMappedNetworkDrivesDuringFullScan
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderScanMappedNetworkDrivesDuringFullScan($val)
    {
        $this->_propDict["defenderScanMappedNetworkDrivesDuringFullScan"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderScanRemovableDrivesDuringFullScan
    * Indicates whether or not to scan removable drives during full scan.
    *
    * @return bool The defenderScanRemovableDrivesDuringFullScan
    */
    public function getDefenderScanRemovableDrivesDuringFullScan()
    {
        if (array_key_exists("defenderScanRemovableDrivesDuringFullScan", $this->_propDict)) {
            return $this->_propDict["defenderScanRemovableDrivesDuringFullScan"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderScanRemovableDrivesDuringFullScan
    * Indicates whether or not to scan removable drives during full scan.
    *
    * @param bool $val The defenderScanRemovableDrivesDuringFullScan
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderScanRemovableDrivesDuringFullScan($val)
    {
        $this->_propDict["defenderScanRemovableDrivesDuringFullScan"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderScanScriptsLoadedInInternetExplorer
    * Indicates whether or not to scan scripts loaded in Internet Explorer browser.
    *
    * @return bool The defenderScanScriptsLoadedInInternetExplorer
    */
    public function getDefenderScanScriptsLoadedInInternetExplorer()
    {
        if (array_key_exists("defenderScanScriptsLoadedInInternetExplorer", $this->_propDict)) {
            return $this->_propDict["defenderScanScriptsLoadedInInternetExplorer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderScanScriptsLoadedInInternetExplorer
    * Indicates whether or not to scan scripts loaded in Internet Explorer browser.
    *
    * @param bool $val The defenderScanScriptsLoadedInInternetExplorer
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderScanScriptsLoadedInInternetExplorer($val)
    {
        $this->_propDict["defenderScanScriptsLoadedInInternetExplorer"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSignatureUpdateIntervalInHours
    * The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24
    *
    * @return int The defenderSignatureUpdateIntervalInHours
    */
    public function getDefenderSignatureUpdateIntervalInHours()
    {
        if (array_key_exists("defenderSignatureUpdateIntervalInHours", $this->_propDict)) {
            return $this->_propDict["defenderSignatureUpdateIntervalInHours"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSignatureUpdateIntervalInHours
    * The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24
    *
    * @param int $val The defenderSignatureUpdateIntervalInHours
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderSignatureUpdateIntervalInHours($val)
    {
        $this->_propDict["defenderSignatureUpdateIntervalInHours"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the defenderScanType
    * The defender system scan type. Possible values are: userDefined, disabled, quick, full.
    *
    * @return DefenderScanType The defenderScanType
    */
    public function getDefenderScanType()
    {
        if (array_key_exists("defenderScanType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderScanType"], "Microsoft\Graph\Model\DefenderScanType")) {
                return $this->_propDict["defenderScanType"];
            } else {
                $this->_propDict["defenderScanType"] = new DefenderScanType($this->_propDict["defenderScanType"]);
                return $this->_propDict["defenderScanType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderScanType
    * The defender system scan type. Possible values are: userDefined, disabled, quick, full.
    *
    * @param DefenderScanType $val The defenderScanType
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderScanType($val)
    {
        $this->_propDict["defenderScanType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderScheduledScanTime
    * The defender time for the system scan.
    *
    * @return TimeOfDay The defenderScheduledScanTime
    */
    public function getDefenderScheduledScanTime()
    {
        if (array_key_exists("defenderScheduledScanTime", $this->_propDict)) {
            if (is_a($this->_propDict["defenderScheduledScanTime"], "Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["defenderScheduledScanTime"];
            } else {
                $this->_propDict["defenderScheduledScanTime"] = new TimeOfDay($this->_propDict["defenderScheduledScanTime"]);
                return $this->_propDict["defenderScheduledScanTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderScheduledScanTime
    * The defender time for the system scan.
    *
    * @param TimeOfDay $val The defenderScheduledScanTime
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderScheduledScanTime($val)
    {
        $this->_propDict["defenderScheduledScanTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderScheduledQuickScanTime
    * The time to perform a daily quick scan.
    *
    * @return TimeOfDay The defenderScheduledQuickScanTime
    */
    public function getDefenderScheduledQuickScanTime()
    {
        if (array_key_exists("defenderScheduledQuickScanTime", $this->_propDict)) {
            if (is_a($this->_propDict["defenderScheduledQuickScanTime"], "Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["defenderScheduledQuickScanTime"];
            } else {
                $this->_propDict["defenderScheduledQuickScanTime"] = new TimeOfDay($this->_propDict["defenderScheduledQuickScanTime"]);
                return $this->_propDict["defenderScheduledQuickScanTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderScheduledQuickScanTime
    * The time to perform a daily quick scan.
    *
    * @param TimeOfDay $val The defenderScheduledQuickScanTime
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderScheduledQuickScanTime($val)
    {
        $this->_propDict["defenderScheduledQuickScanTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderCloudBlockLevel
    * Specifies the level of cloud-delivered protection. Possible values are: notConfigured, high, highPlus, zeroTolerance.
    *
    * @return DefenderCloudBlockLevelType The defenderCloudBlockLevel
    */
    public function getDefenderCloudBlockLevel()
    {
        if (array_key_exists("defenderCloudBlockLevel", $this->_propDict)) {
            if (is_a($this->_propDict["defenderCloudBlockLevel"], "Microsoft\Graph\Model\DefenderCloudBlockLevelType")) {
                return $this->_propDict["defenderCloudBlockLevel"];
            } else {
                $this->_propDict["defenderCloudBlockLevel"] = new DefenderCloudBlockLevelType($this->_propDict["defenderCloudBlockLevel"]);
                return $this->_propDict["defenderCloudBlockLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderCloudBlockLevel
    * Specifies the level of cloud-delivered protection. Possible values are: notConfigured, high, highPlus, zeroTolerance.
    *
    * @param DefenderCloudBlockLevelType $val The defenderCloudBlockLevel
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderCloudBlockLevel($val)
    {
        $this->_propDict["defenderCloudBlockLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the lockScreenAllowTimeoutConfiguration
    * Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored.
    *
    * @return bool The lockScreenAllowTimeoutConfiguration
    */
    public function getLockScreenAllowTimeoutConfiguration()
    {
        if (array_key_exists("lockScreenAllowTimeoutConfiguration", $this->_propDict)) {
            return $this->_propDict["lockScreenAllowTimeoutConfiguration"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenAllowTimeoutConfiguration
    * Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored.
    *
    * @param bool $val The lockScreenAllowTimeoutConfiguration
    *
    * @return Windows10GeneralConfiguration
    */
    public function setLockScreenAllowTimeoutConfiguration($val)
    {
        $this->_propDict["lockScreenAllowTimeoutConfiguration"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lockScreenBlockActionCenterNotifications
    * Indicates whether or not to block action center notifications over lock screen.
    *
    * @return bool The lockScreenBlockActionCenterNotifications
    */
    public function getLockScreenBlockActionCenterNotifications()
    {
        if (array_key_exists("lockScreenBlockActionCenterNotifications", $this->_propDict)) {
            return $this->_propDict["lockScreenBlockActionCenterNotifications"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenBlockActionCenterNotifications
    * Indicates whether or not to block action center notifications over lock screen.
    *
    * @param bool $val The lockScreenBlockActionCenterNotifications
    *
    * @return Windows10GeneralConfiguration
    */
    public function setLockScreenBlockActionCenterNotifications($val)
    {
        $this->_propDict["lockScreenBlockActionCenterNotifications"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lockScreenBlockCortana
    * Indicates whether or not the user can interact with Cortana using speech while the system is locked.
    *
    * @return bool The lockScreenBlockCortana
    */
    public function getLockScreenBlockCortana()
    {
        if (array_key_exists("lockScreenBlockCortana", $this->_propDict)) {
            return $this->_propDict["lockScreenBlockCortana"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenBlockCortana
    * Indicates whether or not the user can interact with Cortana using speech while the system is locked.
    *
    * @param bool $val The lockScreenBlockCortana
    *
    * @return Windows10GeneralConfiguration
    */
    public function setLockScreenBlockCortana($val)
    {
        $this->_propDict["lockScreenBlockCortana"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lockScreenBlockToastNotifications
    * Indicates whether to allow toast notifications above the device lock screen.
    *
    * @return bool The lockScreenBlockToastNotifications
    */
    public function getLockScreenBlockToastNotifications()
    {
        if (array_key_exists("lockScreenBlockToastNotifications", $this->_propDict)) {
            return $this->_propDict["lockScreenBlockToastNotifications"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenBlockToastNotifications
    * Indicates whether to allow toast notifications above the device lock screen.
    *
    * @param bool $val The lockScreenBlockToastNotifications
    *
    * @return Windows10GeneralConfiguration
    */
    public function setLockScreenBlockToastNotifications($val)
    {
        $this->_propDict["lockScreenBlockToastNotifications"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lockScreenTimeoutInSeconds
    * Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800
    *
    * @return int The lockScreenTimeoutInSeconds
    */
    public function getLockScreenTimeoutInSeconds()
    {
        if (array_key_exists("lockScreenTimeoutInSeconds", $this->_propDict)) {
            return $this->_propDict["lockScreenTimeoutInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenTimeoutInSeconds
    * Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800
    *
    * @param int $val The lockScreenTimeoutInSeconds
    *
    * @return Windows10GeneralConfiguration
    */
    public function setLockScreenTimeoutInSeconds($val)
    {
        $this->_propDict["lockScreenTimeoutInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockSimple
    * Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords.
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
    * Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords.
    *
    * @param bool $val The passwordBlockSimple
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPasswordBlockSimple($val)
    {
        $this->_propDict["passwordBlockSimple"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordExpirationDays
    * The password expiration in days. Valid values 0 to 730
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
    * The password expiration in days. Valid values 0 to 730
    *
    * @param int $val The passwordExpirationDays
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLength
    * The minimum password length. Valid values 4 to 16
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
    * The minimum password length. Valid values 4 to 16
    *
    * @param int $val The passwordMinimumLength
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinutesOfInactivityBeforeScreenTimeout
    * The minutes of inactivity before the screen times out.
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
    * The minutes of inactivity before the screen times out.
    *
    * @param int $val The passwordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumCharacterSetCount
    * The number of character sets required in the password.
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
    * The number of character sets required in the password.
    *
    * @param int $val The passwordMinimumCharacterSetCount
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPasswordMinimumCharacterSetCount($val)
    {
        $this->_propDict["passwordMinimumCharacterSetCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordPreviousPasswordBlockCount
    * The number of previous passwords to prevent reuse of. Valid values 0 to 50
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
    * The number of previous passwords to prevent reuse of. Valid values 0 to 50
    *
    * @param int $val The passwordPreviousPasswordBlockCount
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequired
    * Indicates whether or not to require the user to have a password.
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
    * Indicates whether or not to require the user to have a password.
    *
    * @param bool $val The passwordRequired
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequireWhenResumeFromIdleState
    * Indicates whether or not to require a password upon resuming from an idle state.
    *
    * @return bool The passwordRequireWhenResumeFromIdleState
    */
    public function getPasswordRequireWhenResumeFromIdleState()
    {
        if (array_key_exists("passwordRequireWhenResumeFromIdleState", $this->_propDict)) {
            return $this->_propDict["passwordRequireWhenResumeFromIdleState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordRequireWhenResumeFromIdleState
    * Indicates whether or not to require a password upon resuming from an idle state.
    *
    * @param bool $val The passwordRequireWhenResumeFromIdleState
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPasswordRequireWhenResumeFromIdleState($val)
    {
        $this->_propDict["passwordRequireWhenResumeFromIdleState"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredType
    * The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
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
    * The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
    *
    * @param RequiredPasswordType $val The passwordRequiredType
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordSignInFailureCountBeforeFactoryReset
    * The number of sign in failures before factory reset. Valid values 0 to 999
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
    * The number of sign in failures before factory reset. Valid values 0 to 999
    *
    * @param int $val The passwordSignInFailureCountBeforeFactoryReset
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the privacyAdvertisingId
    * Enables or disables the use of advertising ID. Added in Windows 10, version 1607. Possible values are: notConfigured, blocked, allowed.
    *
    * @return StateManagementSetting The privacyAdvertisingId
    */
    public function getPrivacyAdvertisingId()
    {
        if (array_key_exists("privacyAdvertisingId", $this->_propDict)) {
            if (is_a($this->_propDict["privacyAdvertisingId"], "Microsoft\Graph\Model\StateManagementSetting")) {
                return $this->_propDict["privacyAdvertisingId"];
            } else {
                $this->_propDict["privacyAdvertisingId"] = new StateManagementSetting($this->_propDict["privacyAdvertisingId"]);
                return $this->_propDict["privacyAdvertisingId"];
            }
        }
        return null;
    }
    
    /**
    * Sets the privacyAdvertisingId
    * Enables or disables the use of advertising ID. Added in Windows 10, version 1607. Possible values are: notConfigured, blocked, allowed.
    *
    * @param StateManagementSetting $val The privacyAdvertisingId
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPrivacyAdvertisingId($val)
    {
        $this->_propDict["privacyAdvertisingId"] = $val;
        return $this;
    }
    
    /**
    * Gets the privacyAutoAcceptPairingAndConsentPrompts
    * Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps.
    *
    * @return bool The privacyAutoAcceptPairingAndConsentPrompts
    */
    public function getPrivacyAutoAcceptPairingAndConsentPrompts()
    {
        if (array_key_exists("privacyAutoAcceptPairingAndConsentPrompts", $this->_propDict)) {
            return $this->_propDict["privacyAutoAcceptPairingAndConsentPrompts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the privacyAutoAcceptPairingAndConsentPrompts
    * Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps.
    *
    * @param bool $val The privacyAutoAcceptPairingAndConsentPrompts
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPrivacyAutoAcceptPairingAndConsentPrompts($val)
    {
        $this->_propDict["privacyAutoAcceptPairingAndConsentPrompts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the privacyBlockInputPersonalization
    * Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications.
    *
    * @return bool The privacyBlockInputPersonalization
    */
    public function getPrivacyBlockInputPersonalization()
    {
        if (array_key_exists("privacyBlockInputPersonalization", $this->_propDict)) {
            return $this->_propDict["privacyBlockInputPersonalization"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the privacyBlockInputPersonalization
    * Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications.
    *
    * @param bool $val The privacyBlockInputPersonalization
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPrivacyBlockInputPersonalization($val)
    {
        $this->_propDict["privacyBlockInputPersonalization"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startBlockUnpinningAppsFromTaskbar
    * Indicates whether or not to block the user from unpinning apps from taskbar.
    *
    * @return bool The startBlockUnpinningAppsFromTaskbar
    */
    public function getStartBlockUnpinningAppsFromTaskbar()
    {
        if (array_key_exists("startBlockUnpinningAppsFromTaskbar", $this->_propDict)) {
            return $this->_propDict["startBlockUnpinningAppsFromTaskbar"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startBlockUnpinningAppsFromTaskbar
    * Indicates whether or not to block the user from unpinning apps from taskbar.
    *
    * @param bool $val The startBlockUnpinningAppsFromTaskbar
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartBlockUnpinningAppsFromTaskbar($val)
    {
        $this->_propDict["startBlockUnpinningAppsFromTaskbar"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuAppListVisibility
    * Setting the value of this collapses the app list, removes the app list entirely, or disables the corresponding toggle in the Settings app. Possible values are: userDefined, collapse, remove, disableSettingsApp.
    *
    * @return WindowsStartMenuAppListVisibilityType The startMenuAppListVisibility
    */
    public function getStartMenuAppListVisibility()
    {
        if (array_key_exists("startMenuAppListVisibility", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuAppListVisibility"], "Microsoft\Graph\Model\WindowsStartMenuAppListVisibilityType")) {
                return $this->_propDict["startMenuAppListVisibility"];
            } else {
                $this->_propDict["startMenuAppListVisibility"] = new WindowsStartMenuAppListVisibilityType($this->_propDict["startMenuAppListVisibility"]);
                return $this->_propDict["startMenuAppListVisibility"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuAppListVisibility
    * Setting the value of this collapses the app list, removes the app list entirely, or disables the corresponding toggle in the Settings app. Possible values are: userDefined, collapse, remove, disableSettingsApp.
    *
    * @param WindowsStartMenuAppListVisibilityType $val The startMenuAppListVisibility
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuAppListVisibility($val)
    {
        $this->_propDict["startMenuAppListVisibility"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuHideChangeAccountSettings
    * Enabling this policy hides the change account setting from appearing in the user tile in the start menu.
    *
    * @return bool The startMenuHideChangeAccountSettings
    */
    public function getStartMenuHideChangeAccountSettings()
    {
        if (array_key_exists("startMenuHideChangeAccountSettings", $this->_propDict)) {
            return $this->_propDict["startMenuHideChangeAccountSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startMenuHideChangeAccountSettings
    * Enabling this policy hides the change account setting from appearing in the user tile in the start menu.
    *
    * @param bool $val The startMenuHideChangeAccountSettings
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuHideChangeAccountSettings($val)
    {
        $this->_propDict["startMenuHideChangeAccountSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuHideFrequentlyUsedApps
    * Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
    *
    * @return bool The startMenuHideFrequentlyUsedApps
    */
    public function getStartMenuHideFrequentlyUsedApps()
    {
        if (array_key_exists("startMenuHideFrequentlyUsedApps", $this->_propDict)) {
            return $this->_propDict["startMenuHideFrequentlyUsedApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startMenuHideFrequentlyUsedApps
    * Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
    *
    * @param bool $val The startMenuHideFrequentlyUsedApps
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuHideFrequentlyUsedApps($val)
    {
        $this->_propDict["startMenuHideFrequentlyUsedApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuHideHibernate
    * Enabling this policy hides hibernate from appearing in the power button in the start menu.
    *
    * @return bool The startMenuHideHibernate
    */
    public function getStartMenuHideHibernate()
    {
        if (array_key_exists("startMenuHideHibernate", $this->_propDict)) {
            return $this->_propDict["startMenuHideHibernate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startMenuHideHibernate
    * Enabling this policy hides hibernate from appearing in the power button in the start menu.
    *
    * @param bool $val The startMenuHideHibernate
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuHideHibernate($val)
    {
        $this->_propDict["startMenuHideHibernate"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuHideLock
    * Enabling this policy hides lock from appearing in the user tile in the start menu.
    *
    * @return bool The startMenuHideLock
    */
    public function getStartMenuHideLock()
    {
        if (array_key_exists("startMenuHideLock", $this->_propDict)) {
            return $this->_propDict["startMenuHideLock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startMenuHideLock
    * Enabling this policy hides lock from appearing in the user tile in the start menu.
    *
    * @param bool $val The startMenuHideLock
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuHideLock($val)
    {
        $this->_propDict["startMenuHideLock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuHidePowerButton
    * Enabling this policy hides the power button from appearing in the start menu.
    *
    * @return bool The startMenuHidePowerButton
    */
    public function getStartMenuHidePowerButton()
    {
        if (array_key_exists("startMenuHidePowerButton", $this->_propDict)) {
            return $this->_propDict["startMenuHidePowerButton"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startMenuHidePowerButton
    * Enabling this policy hides the power button from appearing in the start menu.
    *
    * @param bool $val The startMenuHidePowerButton
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuHidePowerButton($val)
    {
        $this->_propDict["startMenuHidePowerButton"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuHideRecentJumpLists
    * Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app.
    *
    * @return bool The startMenuHideRecentJumpLists
    */
    public function getStartMenuHideRecentJumpLists()
    {
        if (array_key_exists("startMenuHideRecentJumpLists", $this->_propDict)) {
            return $this->_propDict["startMenuHideRecentJumpLists"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startMenuHideRecentJumpLists
    * Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app.
    *
    * @param bool $val The startMenuHideRecentJumpLists
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuHideRecentJumpLists($val)
    {
        $this->_propDict["startMenuHideRecentJumpLists"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuHideRecentlyAddedApps
    * Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
    *
    * @return bool The startMenuHideRecentlyAddedApps
    */
    public function getStartMenuHideRecentlyAddedApps()
    {
        if (array_key_exists("startMenuHideRecentlyAddedApps", $this->_propDict)) {
            return $this->_propDict["startMenuHideRecentlyAddedApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startMenuHideRecentlyAddedApps
    * Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
    *
    * @param bool $val The startMenuHideRecentlyAddedApps
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuHideRecentlyAddedApps($val)
    {
        $this->_propDict["startMenuHideRecentlyAddedApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuHideRestartOptions
    * Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu.
    *
    * @return bool The startMenuHideRestartOptions
    */
    public function getStartMenuHideRestartOptions()
    {
        if (array_key_exists("startMenuHideRestartOptions", $this->_propDict)) {
            return $this->_propDict["startMenuHideRestartOptions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startMenuHideRestartOptions
    * Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu.
    *
    * @param bool $val The startMenuHideRestartOptions
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuHideRestartOptions($val)
    {
        $this->_propDict["startMenuHideRestartOptions"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuHideShutDown
    * Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu.
    *
    * @return bool The startMenuHideShutDown
    */
    public function getStartMenuHideShutDown()
    {
        if (array_key_exists("startMenuHideShutDown", $this->_propDict)) {
            return $this->_propDict["startMenuHideShutDown"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startMenuHideShutDown
    * Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu.
    *
    * @param bool $val The startMenuHideShutDown
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuHideShutDown($val)
    {
        $this->_propDict["startMenuHideShutDown"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuHideSignOut
    * Enabling this policy hides sign out from appearing in the user tile in the start menu.
    *
    * @return bool The startMenuHideSignOut
    */
    public function getStartMenuHideSignOut()
    {
        if (array_key_exists("startMenuHideSignOut", $this->_propDict)) {
            return $this->_propDict["startMenuHideSignOut"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startMenuHideSignOut
    * Enabling this policy hides sign out from appearing in the user tile in the start menu.
    *
    * @param bool $val The startMenuHideSignOut
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuHideSignOut($val)
    {
        $this->_propDict["startMenuHideSignOut"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuHideSleep
    * Enabling this policy hides sleep from appearing in the power button in the start menu.
    *
    * @return bool The startMenuHideSleep
    */
    public function getStartMenuHideSleep()
    {
        if (array_key_exists("startMenuHideSleep", $this->_propDict)) {
            return $this->_propDict["startMenuHideSleep"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startMenuHideSleep
    * Enabling this policy hides sleep from appearing in the power button in the start menu.
    *
    * @param bool $val The startMenuHideSleep
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuHideSleep($val)
    {
        $this->_propDict["startMenuHideSleep"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuHideSwitchAccount
    * Enabling this policy hides switch account from appearing in the user tile in the start menu.
    *
    * @return bool The startMenuHideSwitchAccount
    */
    public function getStartMenuHideSwitchAccount()
    {
        if (array_key_exists("startMenuHideSwitchAccount", $this->_propDict)) {
            return $this->_propDict["startMenuHideSwitchAccount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startMenuHideSwitchAccount
    * Enabling this policy hides switch account from appearing in the user tile in the start menu.
    *
    * @param bool $val The startMenuHideSwitchAccount
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuHideSwitchAccount($val)
    {
        $this->_propDict["startMenuHideSwitchAccount"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuHideUserTile
    * Enabling this policy hides the user tile from appearing in the start menu.
    *
    * @return bool The startMenuHideUserTile
    */
    public function getStartMenuHideUserTile()
    {
        if (array_key_exists("startMenuHideUserTile", $this->_propDict)) {
            return $this->_propDict["startMenuHideUserTile"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startMenuHideUserTile
    * Enabling this policy hides the user tile from appearing in the start menu.
    *
    * @param bool $val The startMenuHideUserTile
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuHideUserTile($val)
    {
        $this->_propDict["startMenuHideUserTile"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuLayoutEdgeAssetsXml
    * This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array.
    *
    * @return \GuzzleHttp\Psr7\Stream The startMenuLayoutEdgeAssetsXml
    */
    public function getStartMenuLayoutEdgeAssetsXml()
    {
        if (array_key_exists("startMenuLayoutEdgeAssetsXml", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuLayoutEdgeAssetsXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["startMenuLayoutEdgeAssetsXml"];
            } else {
                $this->_propDict["startMenuLayoutEdgeAssetsXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["startMenuLayoutEdgeAssetsXml"]);
                return $this->_propDict["startMenuLayoutEdgeAssetsXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuLayoutEdgeAssetsXml
    * This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The startMenuLayoutEdgeAssetsXml
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuLayoutEdgeAssetsXml($val)
    {
        $this->_propDict["startMenuLayoutEdgeAssetsXml"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuLayoutXml
    * Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format.
    *
    * @return \GuzzleHttp\Psr7\Stream The startMenuLayoutXml
    */
    public function getStartMenuLayoutXml()
    {
        if (array_key_exists("startMenuLayoutXml", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuLayoutXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["startMenuLayoutXml"];
            } else {
                $this->_propDict["startMenuLayoutXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["startMenuLayoutXml"]);
                return $this->_propDict["startMenuLayoutXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuLayoutXml
    * Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The startMenuLayoutXml
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuLayoutXml($val)
    {
        $this->_propDict["startMenuLayoutXml"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuMode
    * Allows admins to decide how the Start menu is displayed. Possible values are: userDefined, fullScreen, nonFullScreen.
    *
    * @return WindowsStartMenuModeType The startMenuMode
    */
    public function getStartMenuMode()
    {
        if (array_key_exists("startMenuMode", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuMode"], "Microsoft\Graph\Model\WindowsStartMenuModeType")) {
                return $this->_propDict["startMenuMode"];
            } else {
                $this->_propDict["startMenuMode"] = new WindowsStartMenuModeType($this->_propDict["startMenuMode"]);
                return $this->_propDict["startMenuMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuMode
    * Allows admins to decide how the Start menu is displayed. Possible values are: userDefined, fullScreen, nonFullScreen.
    *
    * @param WindowsStartMenuModeType $val The startMenuMode
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuMode($val)
    {
        $this->_propDict["startMenuMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuPinnedFolderDocuments
    * Enforces the visibility (Show/Hide) of the Documents folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @return VisibilitySetting The startMenuPinnedFolderDocuments
    */
    public function getStartMenuPinnedFolderDocuments()
    {
        if (array_key_exists("startMenuPinnedFolderDocuments", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderDocuments"], "Microsoft\Graph\Model\VisibilitySetting")) {
                return $this->_propDict["startMenuPinnedFolderDocuments"];
            } else {
                $this->_propDict["startMenuPinnedFolderDocuments"] = new VisibilitySetting($this->_propDict["startMenuPinnedFolderDocuments"]);
                return $this->_propDict["startMenuPinnedFolderDocuments"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuPinnedFolderDocuments
    * Enforces the visibility (Show/Hide) of the Documents folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @param VisibilitySetting $val The startMenuPinnedFolderDocuments
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuPinnedFolderDocuments($val)
    {
        $this->_propDict["startMenuPinnedFolderDocuments"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuPinnedFolderDownloads
    * Enforces the visibility (Show/Hide) of the Downloads folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @return VisibilitySetting The startMenuPinnedFolderDownloads
    */
    public function getStartMenuPinnedFolderDownloads()
    {
        if (array_key_exists("startMenuPinnedFolderDownloads", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderDownloads"], "Microsoft\Graph\Model\VisibilitySetting")) {
                return $this->_propDict["startMenuPinnedFolderDownloads"];
            } else {
                $this->_propDict["startMenuPinnedFolderDownloads"] = new VisibilitySetting($this->_propDict["startMenuPinnedFolderDownloads"]);
                return $this->_propDict["startMenuPinnedFolderDownloads"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuPinnedFolderDownloads
    * Enforces the visibility (Show/Hide) of the Downloads folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @param VisibilitySetting $val The startMenuPinnedFolderDownloads
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuPinnedFolderDownloads($val)
    {
        $this->_propDict["startMenuPinnedFolderDownloads"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuPinnedFolderFileExplorer
    * Enforces the visibility (Show/Hide) of the FileExplorer shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @return VisibilitySetting The startMenuPinnedFolderFileExplorer
    */
    public function getStartMenuPinnedFolderFileExplorer()
    {
        if (array_key_exists("startMenuPinnedFolderFileExplorer", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderFileExplorer"], "Microsoft\Graph\Model\VisibilitySetting")) {
                return $this->_propDict["startMenuPinnedFolderFileExplorer"];
            } else {
                $this->_propDict["startMenuPinnedFolderFileExplorer"] = new VisibilitySetting($this->_propDict["startMenuPinnedFolderFileExplorer"]);
                return $this->_propDict["startMenuPinnedFolderFileExplorer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuPinnedFolderFileExplorer
    * Enforces the visibility (Show/Hide) of the FileExplorer shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @param VisibilitySetting $val The startMenuPinnedFolderFileExplorer
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuPinnedFolderFileExplorer($val)
    {
        $this->_propDict["startMenuPinnedFolderFileExplorer"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuPinnedFolderHomeGroup
    * Enforces the visibility (Show/Hide) of the HomeGroup folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @return VisibilitySetting The startMenuPinnedFolderHomeGroup
    */
    public function getStartMenuPinnedFolderHomeGroup()
    {
        if (array_key_exists("startMenuPinnedFolderHomeGroup", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderHomeGroup"], "Microsoft\Graph\Model\VisibilitySetting")) {
                return $this->_propDict["startMenuPinnedFolderHomeGroup"];
            } else {
                $this->_propDict["startMenuPinnedFolderHomeGroup"] = new VisibilitySetting($this->_propDict["startMenuPinnedFolderHomeGroup"]);
                return $this->_propDict["startMenuPinnedFolderHomeGroup"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuPinnedFolderHomeGroup
    * Enforces the visibility (Show/Hide) of the HomeGroup folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @param VisibilitySetting $val The startMenuPinnedFolderHomeGroup
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuPinnedFolderHomeGroup($val)
    {
        $this->_propDict["startMenuPinnedFolderHomeGroup"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuPinnedFolderMusic
    * Enforces the visibility (Show/Hide) of the Music folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @return VisibilitySetting The startMenuPinnedFolderMusic
    */
    public function getStartMenuPinnedFolderMusic()
    {
        if (array_key_exists("startMenuPinnedFolderMusic", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderMusic"], "Microsoft\Graph\Model\VisibilitySetting")) {
                return $this->_propDict["startMenuPinnedFolderMusic"];
            } else {
                $this->_propDict["startMenuPinnedFolderMusic"] = new VisibilitySetting($this->_propDict["startMenuPinnedFolderMusic"]);
                return $this->_propDict["startMenuPinnedFolderMusic"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuPinnedFolderMusic
    * Enforces the visibility (Show/Hide) of the Music folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @param VisibilitySetting $val The startMenuPinnedFolderMusic
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuPinnedFolderMusic($val)
    {
        $this->_propDict["startMenuPinnedFolderMusic"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuPinnedFolderNetwork
    * Enforces the visibility (Show/Hide) of the Network folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @return VisibilitySetting The startMenuPinnedFolderNetwork
    */
    public function getStartMenuPinnedFolderNetwork()
    {
        if (array_key_exists("startMenuPinnedFolderNetwork", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderNetwork"], "Microsoft\Graph\Model\VisibilitySetting")) {
                return $this->_propDict["startMenuPinnedFolderNetwork"];
            } else {
                $this->_propDict["startMenuPinnedFolderNetwork"] = new VisibilitySetting($this->_propDict["startMenuPinnedFolderNetwork"]);
                return $this->_propDict["startMenuPinnedFolderNetwork"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuPinnedFolderNetwork
    * Enforces the visibility (Show/Hide) of the Network folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @param VisibilitySetting $val The startMenuPinnedFolderNetwork
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuPinnedFolderNetwork($val)
    {
        $this->_propDict["startMenuPinnedFolderNetwork"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuPinnedFolderPersonalFolder
    * Enforces the visibility (Show/Hide) of the PersonalFolder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @return VisibilitySetting The startMenuPinnedFolderPersonalFolder
    */
    public function getStartMenuPinnedFolderPersonalFolder()
    {
        if (array_key_exists("startMenuPinnedFolderPersonalFolder", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderPersonalFolder"], "Microsoft\Graph\Model\VisibilitySetting")) {
                return $this->_propDict["startMenuPinnedFolderPersonalFolder"];
            } else {
                $this->_propDict["startMenuPinnedFolderPersonalFolder"] = new VisibilitySetting($this->_propDict["startMenuPinnedFolderPersonalFolder"]);
                return $this->_propDict["startMenuPinnedFolderPersonalFolder"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuPinnedFolderPersonalFolder
    * Enforces the visibility (Show/Hide) of the PersonalFolder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @param VisibilitySetting $val The startMenuPinnedFolderPersonalFolder
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuPinnedFolderPersonalFolder($val)
    {
        $this->_propDict["startMenuPinnedFolderPersonalFolder"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuPinnedFolderPictures
    * Enforces the visibility (Show/Hide) of the Pictures folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @return VisibilitySetting The startMenuPinnedFolderPictures
    */
    public function getStartMenuPinnedFolderPictures()
    {
        if (array_key_exists("startMenuPinnedFolderPictures", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderPictures"], "Microsoft\Graph\Model\VisibilitySetting")) {
                return $this->_propDict["startMenuPinnedFolderPictures"];
            } else {
                $this->_propDict["startMenuPinnedFolderPictures"] = new VisibilitySetting($this->_propDict["startMenuPinnedFolderPictures"]);
                return $this->_propDict["startMenuPinnedFolderPictures"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuPinnedFolderPictures
    * Enforces the visibility (Show/Hide) of the Pictures folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @param VisibilitySetting $val The startMenuPinnedFolderPictures
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuPinnedFolderPictures($val)
    {
        $this->_propDict["startMenuPinnedFolderPictures"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuPinnedFolderSettings
    * Enforces the visibility (Show/Hide) of the Settings folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @return VisibilitySetting The startMenuPinnedFolderSettings
    */
    public function getStartMenuPinnedFolderSettings()
    {
        if (array_key_exists("startMenuPinnedFolderSettings", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderSettings"], "Microsoft\Graph\Model\VisibilitySetting")) {
                return $this->_propDict["startMenuPinnedFolderSettings"];
            } else {
                $this->_propDict["startMenuPinnedFolderSettings"] = new VisibilitySetting($this->_propDict["startMenuPinnedFolderSettings"]);
                return $this->_propDict["startMenuPinnedFolderSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuPinnedFolderSettings
    * Enforces the visibility (Show/Hide) of the Settings folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @param VisibilitySetting $val The startMenuPinnedFolderSettings
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuPinnedFolderSettings($val)
    {
        $this->_propDict["startMenuPinnedFolderSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMenuPinnedFolderVideos
    * Enforces the visibility (Show/Hide) of the Videos folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @return VisibilitySetting The startMenuPinnedFolderVideos
    */
    public function getStartMenuPinnedFolderVideos()
    {
        if (array_key_exists("startMenuPinnedFolderVideos", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderVideos"], "Microsoft\Graph\Model\VisibilitySetting")) {
                return $this->_propDict["startMenuPinnedFolderVideos"];
            } else {
                $this->_propDict["startMenuPinnedFolderVideos"] = new VisibilitySetting($this->_propDict["startMenuPinnedFolderVideos"]);
                return $this->_propDict["startMenuPinnedFolderVideos"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuPinnedFolderVideos
    * Enforces the visibility (Show/Hide) of the Videos folder shortcut on the Start menu. Possible values are: notConfigured, hide, show.
    *
    * @param VisibilitySetting $val The startMenuPinnedFolderVideos
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStartMenuPinnedFolderVideos($val)
    {
        $this->_propDict["startMenuPinnedFolderVideos"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingsBlockSettingsApp
    * Indicates whether or not to block access to Settings app.
    *
    * @return bool The settingsBlockSettingsApp
    */
    public function getSettingsBlockSettingsApp()
    {
        if (array_key_exists("settingsBlockSettingsApp", $this->_propDict)) {
            return $this->_propDict["settingsBlockSettingsApp"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockSettingsApp
    * Indicates whether or not to block access to Settings app.
    *
    * @param bool $val The settingsBlockSettingsApp
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockSettingsApp($val)
    {
        $this->_propDict["settingsBlockSettingsApp"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockSystemPage
    * Indicates whether or not to block access to System in Settings app.
    *
    * @return bool The settingsBlockSystemPage
    */
    public function getSettingsBlockSystemPage()
    {
        if (array_key_exists("settingsBlockSystemPage", $this->_propDict)) {
            return $this->_propDict["settingsBlockSystemPage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockSystemPage
    * Indicates whether or not to block access to System in Settings app.
    *
    * @param bool $val The settingsBlockSystemPage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockSystemPage($val)
    {
        $this->_propDict["settingsBlockSystemPage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockDevicesPage
    * Indicates whether or not to block access to Devices in Settings app.
    *
    * @return bool The settingsBlockDevicesPage
    */
    public function getSettingsBlockDevicesPage()
    {
        if (array_key_exists("settingsBlockDevicesPage", $this->_propDict)) {
            return $this->_propDict["settingsBlockDevicesPage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockDevicesPage
    * Indicates whether or not to block access to Devices in Settings app.
    *
    * @param bool $val The settingsBlockDevicesPage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockDevicesPage($val)
    {
        $this->_propDict["settingsBlockDevicesPage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockNetworkInternetPage
    * Indicates whether or not to block access to Network &amp; Internet in Settings app.
    *
    * @return bool The settingsBlockNetworkInternetPage
    */
    public function getSettingsBlockNetworkInternetPage()
    {
        if (array_key_exists("settingsBlockNetworkInternetPage", $this->_propDict)) {
            return $this->_propDict["settingsBlockNetworkInternetPage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockNetworkInternetPage
    * Indicates whether or not to block access to Network &amp; Internet in Settings app.
    *
    * @param bool $val The settingsBlockNetworkInternetPage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockNetworkInternetPage($val)
    {
        $this->_propDict["settingsBlockNetworkInternetPage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockPersonalizationPage
    * Indicates whether or not to block access to Personalization in Settings app.
    *
    * @return bool The settingsBlockPersonalizationPage
    */
    public function getSettingsBlockPersonalizationPage()
    {
        if (array_key_exists("settingsBlockPersonalizationPage", $this->_propDict)) {
            return $this->_propDict["settingsBlockPersonalizationPage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockPersonalizationPage
    * Indicates whether or not to block access to Personalization in Settings app.
    *
    * @param bool $val The settingsBlockPersonalizationPage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockPersonalizationPage($val)
    {
        $this->_propDict["settingsBlockPersonalizationPage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockAccountsPage
    * Indicates whether or not to block access to Accounts in Settings app.
    *
    * @return bool The settingsBlockAccountsPage
    */
    public function getSettingsBlockAccountsPage()
    {
        if (array_key_exists("settingsBlockAccountsPage", $this->_propDict)) {
            return $this->_propDict["settingsBlockAccountsPage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockAccountsPage
    * Indicates whether or not to block access to Accounts in Settings app.
    *
    * @param bool $val The settingsBlockAccountsPage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockAccountsPage($val)
    {
        $this->_propDict["settingsBlockAccountsPage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockTimeLanguagePage
    * Indicates whether or not to block access to Time &amp; Language in Settings app.
    *
    * @return bool The settingsBlockTimeLanguagePage
    */
    public function getSettingsBlockTimeLanguagePage()
    {
        if (array_key_exists("settingsBlockTimeLanguagePage", $this->_propDict)) {
            return $this->_propDict["settingsBlockTimeLanguagePage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockTimeLanguagePage
    * Indicates whether or not to block access to Time &amp; Language in Settings app.
    *
    * @param bool $val The settingsBlockTimeLanguagePage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockTimeLanguagePage($val)
    {
        $this->_propDict["settingsBlockTimeLanguagePage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockEaseOfAccessPage
    * Indicates whether or not to block access to Ease of Access in Settings app.
    *
    * @return bool The settingsBlockEaseOfAccessPage
    */
    public function getSettingsBlockEaseOfAccessPage()
    {
        if (array_key_exists("settingsBlockEaseOfAccessPage", $this->_propDict)) {
            return $this->_propDict["settingsBlockEaseOfAccessPage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockEaseOfAccessPage
    * Indicates whether or not to block access to Ease of Access in Settings app.
    *
    * @param bool $val The settingsBlockEaseOfAccessPage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockEaseOfAccessPage($val)
    {
        $this->_propDict["settingsBlockEaseOfAccessPage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockPrivacyPage
    * Indicates whether or not to block access to Privacy in Settings app.
    *
    * @return bool The settingsBlockPrivacyPage
    */
    public function getSettingsBlockPrivacyPage()
    {
        if (array_key_exists("settingsBlockPrivacyPage", $this->_propDict)) {
            return $this->_propDict["settingsBlockPrivacyPage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockPrivacyPage
    * Indicates whether or not to block access to Privacy in Settings app.
    *
    * @param bool $val The settingsBlockPrivacyPage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockPrivacyPage($val)
    {
        $this->_propDict["settingsBlockPrivacyPage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockUpdateSecurityPage
    * Indicates whether or not to block access to Update &amp; Security in Settings app.
    *
    * @return bool The settingsBlockUpdateSecurityPage
    */
    public function getSettingsBlockUpdateSecurityPage()
    {
        if (array_key_exists("settingsBlockUpdateSecurityPage", $this->_propDict)) {
            return $this->_propDict["settingsBlockUpdateSecurityPage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockUpdateSecurityPage
    * Indicates whether or not to block access to Update &amp; Security in Settings app.
    *
    * @param bool $val The settingsBlockUpdateSecurityPage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockUpdateSecurityPage($val)
    {
        $this->_propDict["settingsBlockUpdateSecurityPage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockAppsPage
    * Indicates whether or not to block access to Apps in Settings app.
    *
    * @return bool The settingsBlockAppsPage
    */
    public function getSettingsBlockAppsPage()
    {
        if (array_key_exists("settingsBlockAppsPage", $this->_propDict)) {
            return $this->_propDict["settingsBlockAppsPage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockAppsPage
    * Indicates whether or not to block access to Apps in Settings app.
    *
    * @param bool $val The settingsBlockAppsPage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockAppsPage($val)
    {
        $this->_propDict["settingsBlockAppsPage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockGamingPage
    * Indicates whether or not to block access to Gaming in Settings app.
    *
    * @return bool The settingsBlockGamingPage
    */
    public function getSettingsBlockGamingPage()
    {
        if (array_key_exists("settingsBlockGamingPage", $this->_propDict)) {
            return $this->_propDict["settingsBlockGamingPage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockGamingPage
    * Indicates whether or not to block access to Gaming in Settings app.
    *
    * @param bool $val The settingsBlockGamingPage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockGamingPage($val)
    {
        $this->_propDict["settingsBlockGamingPage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsSpotlightBlockConsumerSpecificFeatures
    * Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles.
    *
    * @return bool The windowsSpotlightBlockConsumerSpecificFeatures
    */
    public function getWindowsSpotlightBlockConsumerSpecificFeatures()
    {
        if (array_key_exists("windowsSpotlightBlockConsumerSpecificFeatures", $this->_propDict)) {
            return $this->_propDict["windowsSpotlightBlockConsumerSpecificFeatures"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsSpotlightBlockConsumerSpecificFeatures
    * Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles.
    *
    * @param bool $val The windowsSpotlightBlockConsumerSpecificFeatures
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWindowsSpotlightBlockConsumerSpecificFeatures($val)
    {
        $this->_propDict["windowsSpotlightBlockConsumerSpecificFeatures"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsSpotlightBlocked
    * Allows IT admins to turn off all Windows Spotlight features
    *
    * @return bool The windowsSpotlightBlocked
    */
    public function getWindowsSpotlightBlocked()
    {
        if (array_key_exists("windowsSpotlightBlocked", $this->_propDict)) {
            return $this->_propDict["windowsSpotlightBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsSpotlightBlocked
    * Allows IT admins to turn off all Windows Spotlight features
    *
    * @param bool $val The windowsSpotlightBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWindowsSpotlightBlocked($val)
    {
        $this->_propDict["windowsSpotlightBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsSpotlightBlockOnActionCenter
    * Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed
    *
    * @return bool The windowsSpotlightBlockOnActionCenter
    */
    public function getWindowsSpotlightBlockOnActionCenter()
    {
        if (array_key_exists("windowsSpotlightBlockOnActionCenter", $this->_propDict)) {
            return $this->_propDict["windowsSpotlightBlockOnActionCenter"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsSpotlightBlockOnActionCenter
    * Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed
    *
    * @param bool $val The windowsSpotlightBlockOnActionCenter
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWindowsSpotlightBlockOnActionCenter($val)
    {
        $this->_propDict["windowsSpotlightBlockOnActionCenter"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsSpotlightBlockTailoredExperiences
    * Block personalized content in Windows spotlight based on user’s device usage.
    *
    * @return bool The windowsSpotlightBlockTailoredExperiences
    */
    public function getWindowsSpotlightBlockTailoredExperiences()
    {
        if (array_key_exists("windowsSpotlightBlockTailoredExperiences", $this->_propDict)) {
            return $this->_propDict["windowsSpotlightBlockTailoredExperiences"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsSpotlightBlockTailoredExperiences
    * Block personalized content in Windows spotlight based on user’s device usage.
    *
    * @param bool $val The windowsSpotlightBlockTailoredExperiences
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWindowsSpotlightBlockTailoredExperiences($val)
    {
        $this->_propDict["windowsSpotlightBlockTailoredExperiences"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsSpotlightBlockThirdPartyNotifications
    * Block third party content delivered via Windows Spotlight
    *
    * @return bool The windowsSpotlightBlockThirdPartyNotifications
    */
    public function getWindowsSpotlightBlockThirdPartyNotifications()
    {
        if (array_key_exists("windowsSpotlightBlockThirdPartyNotifications", $this->_propDict)) {
            return $this->_propDict["windowsSpotlightBlockThirdPartyNotifications"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsSpotlightBlockThirdPartyNotifications
    * Block third party content delivered via Windows Spotlight
    *
    * @param bool $val The windowsSpotlightBlockThirdPartyNotifications
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWindowsSpotlightBlockThirdPartyNotifications($val)
    {
        $this->_propDict["windowsSpotlightBlockThirdPartyNotifications"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsSpotlightBlockWelcomeExperience
    * Block Windows Spotlight Windows welcome experience
    *
    * @return bool The windowsSpotlightBlockWelcomeExperience
    */
    public function getWindowsSpotlightBlockWelcomeExperience()
    {
        if (array_key_exists("windowsSpotlightBlockWelcomeExperience", $this->_propDict)) {
            return $this->_propDict["windowsSpotlightBlockWelcomeExperience"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsSpotlightBlockWelcomeExperience
    * Block Windows Spotlight Windows welcome experience
    *
    * @param bool $val The windowsSpotlightBlockWelcomeExperience
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWindowsSpotlightBlockWelcomeExperience($val)
    {
        $this->_propDict["windowsSpotlightBlockWelcomeExperience"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsSpotlightBlockWindowsTips
    * Allows IT admins to turn off the popup of Windows Tips.
    *
    * @return bool The windowsSpotlightBlockWindowsTips
    */
    public function getWindowsSpotlightBlockWindowsTips()
    {
        if (array_key_exists("windowsSpotlightBlockWindowsTips", $this->_propDict)) {
            return $this->_propDict["windowsSpotlightBlockWindowsTips"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsSpotlightBlockWindowsTips
    * Allows IT admins to turn off the popup of Windows Tips.
    *
    * @param bool $val The windowsSpotlightBlockWindowsTips
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWindowsSpotlightBlockWindowsTips($val)
    {
        $this->_propDict["windowsSpotlightBlockWindowsTips"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsSpotlightConfigureOnLockScreen
    * Specifies the type of Spotlight. Possible values are: notConfigured, disabled, enabled.
    *
    * @return WindowsSpotlightEnablementSettings The windowsSpotlightConfigureOnLockScreen
    */
    public function getWindowsSpotlightConfigureOnLockScreen()
    {
        if (array_key_exists("windowsSpotlightConfigureOnLockScreen", $this->_propDict)) {
            if (is_a($this->_propDict["windowsSpotlightConfigureOnLockScreen"], "Microsoft\Graph\Model\WindowsSpotlightEnablementSettings")) {
                return $this->_propDict["windowsSpotlightConfigureOnLockScreen"];
            } else {
                $this->_propDict["windowsSpotlightConfigureOnLockScreen"] = new WindowsSpotlightEnablementSettings($this->_propDict["windowsSpotlightConfigureOnLockScreen"]);
                return $this->_propDict["windowsSpotlightConfigureOnLockScreen"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsSpotlightConfigureOnLockScreen
    * Specifies the type of Spotlight. Possible values are: notConfigured, disabled, enabled.
    *
    * @param WindowsSpotlightEnablementSettings $val The windowsSpotlightConfigureOnLockScreen
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWindowsSpotlightConfigureOnLockScreen($val)
    {
        $this->_propDict["windowsSpotlightConfigureOnLockScreen"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkProxyApplySettingsDeviceWide
    * If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM.
    *
    * @return bool The networkProxyApplySettingsDeviceWide
    */
    public function getNetworkProxyApplySettingsDeviceWide()
    {
        if (array_key_exists("networkProxyApplySettingsDeviceWide", $this->_propDict)) {
            return $this->_propDict["networkProxyApplySettingsDeviceWide"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkProxyApplySettingsDeviceWide
    * If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM.
    *
    * @param bool $val The networkProxyApplySettingsDeviceWide
    *
    * @return Windows10GeneralConfiguration
    */
    public function setNetworkProxyApplySettingsDeviceWide($val)
    {
        $this->_propDict["networkProxyApplySettingsDeviceWide"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the networkProxyDisableAutoDetect
    * Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script.
    *
    * @return bool The networkProxyDisableAutoDetect
    */
    public function getNetworkProxyDisableAutoDetect()
    {
        if (array_key_exists("networkProxyDisableAutoDetect", $this->_propDict)) {
            return $this->_propDict["networkProxyDisableAutoDetect"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkProxyDisableAutoDetect
    * Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script.
    *
    * @param bool $val The networkProxyDisableAutoDetect
    *
    * @return Windows10GeneralConfiguration
    */
    public function setNetworkProxyDisableAutoDetect($val)
    {
        $this->_propDict["networkProxyDisableAutoDetect"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the networkProxyAutomaticConfigurationUrl
    * Address to the proxy auto-config (PAC) script you want to use.
    *
    * @return string The networkProxyAutomaticConfigurationUrl
    */
    public function getNetworkProxyAutomaticConfigurationUrl()
    {
        if (array_key_exists("networkProxyAutomaticConfigurationUrl", $this->_propDict)) {
            return $this->_propDict["networkProxyAutomaticConfigurationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkProxyAutomaticConfigurationUrl
    * Address to the proxy auto-config (PAC) script you want to use.
    *
    * @param string $val The networkProxyAutomaticConfigurationUrl
    *
    * @return Windows10GeneralConfiguration
    */
    public function setNetworkProxyAutomaticConfigurationUrl($val)
    {
        $this->_propDict["networkProxyAutomaticConfigurationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkProxyServer
    * Specifies manual proxy server settings.
    *
    * @return Windows10NetworkProxyServer The networkProxyServer
    */
    public function getNetworkProxyServer()
    {
        if (array_key_exists("networkProxyServer", $this->_propDict)) {
            if (is_a($this->_propDict["networkProxyServer"], "Microsoft\Graph\Model\Windows10NetworkProxyServer")) {
                return $this->_propDict["networkProxyServer"];
            } else {
                $this->_propDict["networkProxyServer"] = new Windows10NetworkProxyServer($this->_propDict["networkProxyServer"]);
                return $this->_propDict["networkProxyServer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the networkProxyServer
    * Specifies manual proxy server settings.
    *
    * @param Windows10NetworkProxyServer $val The networkProxyServer
    *
    * @return Windows10GeneralConfiguration
    */
    public function setNetworkProxyServer($val)
    {
        $this->_propDict["networkProxyServer"] = $val;
        return $this;
    }
    
    /**
    * Gets the accountsBlockAddingNonMicrosoftAccountEmail
    * Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
    *
    * @return bool The accountsBlockAddingNonMicrosoftAccountEmail
    */
    public function getAccountsBlockAddingNonMicrosoftAccountEmail()
    {
        if (array_key_exists("accountsBlockAddingNonMicrosoftAccountEmail", $this->_propDict)) {
            return $this->_propDict["accountsBlockAddingNonMicrosoftAccountEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountsBlockAddingNonMicrosoftAccountEmail
    * Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
    *
    * @param bool $val The accountsBlockAddingNonMicrosoftAccountEmail
    *
    * @return Windows10GeneralConfiguration
    */
    public function setAccountsBlockAddingNonMicrosoftAccountEmail($val)
    {
        $this->_propDict["accountsBlockAddingNonMicrosoftAccountEmail"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the antiTheftModeBlocked
    * Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only).
    *
    * @return bool The antiTheftModeBlocked
    */
    public function getAntiTheftModeBlocked()
    {
        if (array_key_exists("antiTheftModeBlocked", $this->_propDict)) {
            return $this->_propDict["antiTheftModeBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the antiTheftModeBlocked
    * Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only).
    *
    * @param bool $val The antiTheftModeBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setAntiTheftModeBlocked($val)
    {
        $this->_propDict["antiTheftModeBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bluetoothBlocked
    * Whether or not to Block the user from using bluetooth.
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
    * Whether or not to Block the user from using bluetooth.
    *
    * @param bool $val The bluetoothBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setBluetoothBlocked($val)
    {
        $this->_propDict["bluetoothBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cameraBlocked
    * Whether or not to Block the user from accessing the camera of the device.
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
    * Whether or not to Block the user from accessing the camera of the device.
    *
    * @param bool $val The cameraBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setCameraBlocked($val)
    {
        $this->_propDict["cameraBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the connectedDevicesServiceBlocked
    * Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences.
    *
    * @return bool The connectedDevicesServiceBlocked
    */
    public function getConnectedDevicesServiceBlocked()
    {
        if (array_key_exists("connectedDevicesServiceBlocked", $this->_propDict)) {
            return $this->_propDict["connectedDevicesServiceBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectedDevicesServiceBlocked
    * Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences.
    *
    * @param bool $val The connectedDevicesServiceBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setConnectedDevicesServiceBlocked($val)
    {
        $this->_propDict["connectedDevicesServiceBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the certificatesBlockManualRootCertificateInstallation
    * Whether or not to Block the user from doing manual root certificate installation.
    *
    * @return bool The certificatesBlockManualRootCertificateInstallation
    */
    public function getCertificatesBlockManualRootCertificateInstallation()
    {
        if (array_key_exists("certificatesBlockManualRootCertificateInstallation", $this->_propDict)) {
            return $this->_propDict["certificatesBlockManualRootCertificateInstallation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificatesBlockManualRootCertificateInstallation
    * Whether or not to Block the user from doing manual root certificate installation.
    *
    * @param bool $val The certificatesBlockManualRootCertificateInstallation
    *
    * @return Windows10GeneralConfiguration
    */
    public function setCertificatesBlockManualRootCertificateInstallation($val)
    {
        $this->_propDict["certificatesBlockManualRootCertificateInstallation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the copyPasteBlocked
    * Whether or not to Block the user from using copy paste.
    *
    * @return bool The copyPasteBlocked
    */
    public function getCopyPasteBlocked()
    {
        if (array_key_exists("copyPasteBlocked", $this->_propDict)) {
            return $this->_propDict["copyPasteBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the copyPasteBlocked
    * Whether or not to Block the user from using copy paste.
    *
    * @param bool $val The copyPasteBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setCopyPasteBlocked($val)
    {
        $this->_propDict["copyPasteBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cortanaBlocked
    * Whether or not to Block the user from using Cortana.
    *
    * @return bool The cortanaBlocked
    */
    public function getCortanaBlocked()
    {
        if (array_key_exists("cortanaBlocked", $this->_propDict)) {
            return $this->_propDict["cortanaBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cortanaBlocked
    * Whether or not to Block the user from using Cortana.
    *
    * @param bool $val The cortanaBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setCortanaBlocked($val)
    {
        $this->_propDict["cortanaBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceManagementBlockFactoryResetOnMobile
    * Indicates whether or not to Block the user from resetting their phone.
    *
    * @return bool The deviceManagementBlockFactoryResetOnMobile
    */
    public function getDeviceManagementBlockFactoryResetOnMobile()
    {
        if (array_key_exists("deviceManagementBlockFactoryResetOnMobile", $this->_propDict)) {
            return $this->_propDict["deviceManagementBlockFactoryResetOnMobile"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceManagementBlockFactoryResetOnMobile
    * Indicates whether or not to Block the user from resetting their phone.
    *
    * @param bool $val The deviceManagementBlockFactoryResetOnMobile
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDeviceManagementBlockFactoryResetOnMobile($val)
    {
        $this->_propDict["deviceManagementBlockFactoryResetOnMobile"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceManagementBlockManualUnenroll
    * Indicates whether or not to Block the user from doing manual un-enrollment from device management.
    *
    * @return bool The deviceManagementBlockManualUnenroll
    */
    public function getDeviceManagementBlockManualUnenroll()
    {
        if (array_key_exists("deviceManagementBlockManualUnenroll", $this->_propDict)) {
            return $this->_propDict["deviceManagementBlockManualUnenroll"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceManagementBlockManualUnenroll
    * Indicates whether or not to Block the user from doing manual un-enrollment from device management.
    *
    * @param bool $val The deviceManagementBlockManualUnenroll
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDeviceManagementBlockManualUnenroll($val)
    {
        $this->_propDict["deviceManagementBlockManualUnenroll"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the safeSearchFilter
    * Specifies what filter level of safe search is required. Possible values are: userDefined, strict, moderate.
    *
    * @return SafeSearchFilterType The safeSearchFilter
    */
    public function getSafeSearchFilter()
    {
        if (array_key_exists("safeSearchFilter", $this->_propDict)) {
            if (is_a($this->_propDict["safeSearchFilter"], "Microsoft\Graph\Model\SafeSearchFilterType")) {
                return $this->_propDict["safeSearchFilter"];
            } else {
                $this->_propDict["safeSearchFilter"] = new SafeSearchFilterType($this->_propDict["safeSearchFilter"]);
                return $this->_propDict["safeSearchFilter"];
            }
        }
        return null;
    }
    
    /**
    * Sets the safeSearchFilter
    * Specifies what filter level of safe search is required. Possible values are: userDefined, strict, moderate.
    *
    * @param SafeSearchFilterType $val The safeSearchFilter
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSafeSearchFilter($val)
    {
        $this->_propDict["safeSearchFilter"] = $val;
        return $this;
    }
    
    /**
    * Gets the edgeBlockPopups
    * Indicates whether or not to block popups.
    *
    * @return bool The edgeBlockPopups
    */
    public function getEdgeBlockPopups()
    {
        if (array_key_exists("edgeBlockPopups", $this->_propDict)) {
            return $this->_propDict["edgeBlockPopups"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockPopups
    * Indicates whether or not to block popups.
    *
    * @param bool $val The edgeBlockPopups
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockPopups($val)
    {
        $this->_propDict["edgeBlockPopups"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeBlockSearchSuggestions
    * Indicates whether or not to block the user from using the search suggestions in the address bar.
    *
    * @return bool The edgeBlockSearchSuggestions
    */
    public function getEdgeBlockSearchSuggestions()
    {
        if (array_key_exists("edgeBlockSearchSuggestions", $this->_propDict)) {
            return $this->_propDict["edgeBlockSearchSuggestions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockSearchSuggestions
    * Indicates whether or not to block the user from using the search suggestions in the address bar.
    *
    * @param bool $val The edgeBlockSearchSuggestions
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockSearchSuggestions($val)
    {
        $this->_propDict["edgeBlockSearchSuggestions"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeBlockSendingIntranetTrafficToInternetExplorer
    * Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead.
    *
    * @return bool The edgeBlockSendingIntranetTrafficToInternetExplorer
    */
    public function getEdgeBlockSendingIntranetTrafficToInternetExplorer()
    {
        if (array_key_exists("edgeBlockSendingIntranetTrafficToInternetExplorer", $this->_propDict)) {
            return $this->_propDict["edgeBlockSendingIntranetTrafficToInternetExplorer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockSendingIntranetTrafficToInternetExplorer
    * Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead.
    *
    * @param bool $val The edgeBlockSendingIntranetTrafficToInternetExplorer
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockSendingIntranetTrafficToInternetExplorer($val)
    {
        $this->_propDict["edgeBlockSendingIntranetTrafficToInternetExplorer"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeSendIntranetTrafficToInternetExplorer
    * Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer.
    *
    * @return bool The edgeSendIntranetTrafficToInternetExplorer
    */
    public function getEdgeSendIntranetTrafficToInternetExplorer()
    {
        if (array_key_exists("edgeSendIntranetTrafficToInternetExplorer", $this->_propDict)) {
            return $this->_propDict["edgeSendIntranetTrafficToInternetExplorer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeSendIntranetTrafficToInternetExplorer
    * Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer.
    *
    * @param bool $val The edgeSendIntranetTrafficToInternetExplorer
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeSendIntranetTrafficToInternetExplorer($val)
    {
        $this->_propDict["edgeSendIntranetTrafficToInternetExplorer"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeRequireSmartScreen
    * Indicates whether or not to Require the user to use the smart screen filter.
    *
    * @return bool The edgeRequireSmartScreen
    */
    public function getEdgeRequireSmartScreen()
    {
        if (array_key_exists("edgeRequireSmartScreen", $this->_propDict)) {
            return $this->_propDict["edgeRequireSmartScreen"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeRequireSmartScreen
    * Indicates whether or not to Require the user to use the smart screen filter.
    *
    * @param bool $val The edgeRequireSmartScreen
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeRequireSmartScreen($val)
    {
        $this->_propDict["edgeRequireSmartScreen"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the edgeEnterpriseModeSiteListLocation
    * Indicates the enterprise mode site list location. Could be a local file, local network or http location.
    *
    * @return string The edgeEnterpriseModeSiteListLocation
    */
    public function getEdgeEnterpriseModeSiteListLocation()
    {
        if (array_key_exists("edgeEnterpriseModeSiteListLocation", $this->_propDict)) {
            return $this->_propDict["edgeEnterpriseModeSiteListLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeEnterpriseModeSiteListLocation
    * Indicates the enterprise mode site list location. Could be a local file, local network or http location.
    *
    * @param string $val The edgeEnterpriseModeSiteListLocation
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeEnterpriseModeSiteListLocation($val)
    {
        $this->_propDict["edgeEnterpriseModeSiteListLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the edgeFirstRunUrl
    * The first run URL for when Edge browser is opened for the first time.
    *
    * @return string The edgeFirstRunUrl
    */
    public function getEdgeFirstRunUrl()
    {
        if (array_key_exists("edgeFirstRunUrl", $this->_propDict)) {
            return $this->_propDict["edgeFirstRunUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeFirstRunUrl
    * The first run URL for when Edge browser is opened for the first time.
    *
    * @param string $val The edgeFirstRunUrl
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeFirstRunUrl($val)
    {
        $this->_propDict["edgeFirstRunUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the edgeSearchEngine
    * Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
    *
    * @return EdgeSearchEngineBase The edgeSearchEngine
    */
    public function getEdgeSearchEngine()
    {
        if (array_key_exists("edgeSearchEngine", $this->_propDict)) {
            if (is_a($this->_propDict["edgeSearchEngine"], "Microsoft\Graph\Model\EdgeSearchEngineBase")) {
                return $this->_propDict["edgeSearchEngine"];
            } else {
                $this->_propDict["edgeSearchEngine"] = new EdgeSearchEngineBase($this->_propDict["edgeSearchEngine"]);
                return $this->_propDict["edgeSearchEngine"];
            }
        }
        return null;
    }
    
    /**
    * Sets the edgeSearchEngine
    * Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
    *
    * @param EdgeSearchEngineBase $val The edgeSearchEngine
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeSearchEngine($val)
    {
        $this->_propDict["edgeSearchEngine"] = $val;
        return $this;
    }
    
    /**
    * Gets the edgeHomepageUrls
    * The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
    *
    * @return string The edgeHomepageUrls
    */
    public function getEdgeHomepageUrls()
    {
        if (array_key_exists("edgeHomepageUrls", $this->_propDict)) {
            return $this->_propDict["edgeHomepageUrls"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeHomepageUrls
    * The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
    *
    * @param string $val The edgeHomepageUrls
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeHomepageUrls($val)
    {
        $this->_propDict["edgeHomepageUrls"] = $val;
        return $this;
    }
    
    /**
    * Gets the edgeBlockAccessToAboutFlags
    * Indicates whether or not to prevent access to about flags on Edge browser.
    *
    * @return bool The edgeBlockAccessToAboutFlags
    */
    public function getEdgeBlockAccessToAboutFlags()
    {
        if (array_key_exists("edgeBlockAccessToAboutFlags", $this->_propDict)) {
            return $this->_propDict["edgeBlockAccessToAboutFlags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockAccessToAboutFlags
    * Indicates whether or not to prevent access to about flags on Edge browser.
    *
    * @param bool $val The edgeBlockAccessToAboutFlags
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockAccessToAboutFlags($val)
    {
        $this->_propDict["edgeBlockAccessToAboutFlags"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smartScreenBlockPromptOverride
    * Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites.
    *
    * @return bool The smartScreenBlockPromptOverride
    */
    public function getSmartScreenBlockPromptOverride()
    {
        if (array_key_exists("smartScreenBlockPromptOverride", $this->_propDict)) {
            return $this->_propDict["smartScreenBlockPromptOverride"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smartScreenBlockPromptOverride
    * Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites.
    *
    * @param bool $val The smartScreenBlockPromptOverride
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSmartScreenBlockPromptOverride($val)
    {
        $this->_propDict["smartScreenBlockPromptOverride"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smartScreenBlockPromptOverrideForFiles
    * Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files
    *
    * @return bool The smartScreenBlockPromptOverrideForFiles
    */
    public function getSmartScreenBlockPromptOverrideForFiles()
    {
        if (array_key_exists("smartScreenBlockPromptOverrideForFiles", $this->_propDict)) {
            return $this->_propDict["smartScreenBlockPromptOverrideForFiles"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smartScreenBlockPromptOverrideForFiles
    * Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files
    *
    * @param bool $val The smartScreenBlockPromptOverrideForFiles
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSmartScreenBlockPromptOverrideForFiles($val)
    {
        $this->_propDict["smartScreenBlockPromptOverrideForFiles"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the webRtcBlockLocalhostIpAddress
    * Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC
    *
    * @return bool The webRtcBlockLocalhostIpAddress
    */
    public function getWebRtcBlockLocalhostIpAddress()
    {
        if (array_key_exists("webRtcBlockLocalhostIpAddress", $this->_propDict)) {
            return $this->_propDict["webRtcBlockLocalhostIpAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webRtcBlockLocalhostIpAddress
    * Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC
    *
    * @param bool $val The webRtcBlockLocalhostIpAddress
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWebRtcBlockLocalhostIpAddress($val)
    {
        $this->_propDict["webRtcBlockLocalhostIpAddress"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the internetSharingBlocked
    * Indicates whether or not to Block the user from using internet sharing.
    *
    * @return bool The internetSharingBlocked
    */
    public function getInternetSharingBlocked()
    {
        if (array_key_exists("internetSharingBlocked", $this->_propDict)) {
            return $this->_propDict["internetSharingBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the internetSharingBlocked
    * Indicates whether or not to Block the user from using internet sharing.
    *
    * @param bool $val The internetSharingBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setInternetSharingBlocked($val)
    {
        $this->_propDict["internetSharingBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockAddProvisioningPackage
    * Indicates whether or not to block the user from installing provisioning packages.
    *
    * @return bool The settingsBlockAddProvisioningPackage
    */
    public function getSettingsBlockAddProvisioningPackage()
    {
        if (array_key_exists("settingsBlockAddProvisioningPackage", $this->_propDict)) {
            return $this->_propDict["settingsBlockAddProvisioningPackage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockAddProvisioningPackage
    * Indicates whether or not to block the user from installing provisioning packages.
    *
    * @param bool $val The settingsBlockAddProvisioningPackage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockAddProvisioningPackage($val)
    {
        $this->_propDict["settingsBlockAddProvisioningPackage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockRemoveProvisioningPackage
    * Indicates whether or not to block the runtime configuration agent from removing provisioning packages.
    *
    * @return bool The settingsBlockRemoveProvisioningPackage
    */
    public function getSettingsBlockRemoveProvisioningPackage()
    {
        if (array_key_exists("settingsBlockRemoveProvisioningPackage", $this->_propDict)) {
            return $this->_propDict["settingsBlockRemoveProvisioningPackage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockRemoveProvisioningPackage
    * Indicates whether or not to block the runtime configuration agent from removing provisioning packages.
    *
    * @param bool $val The settingsBlockRemoveProvisioningPackage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockRemoveProvisioningPackage($val)
    {
        $this->_propDict["settingsBlockRemoveProvisioningPackage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockChangeSystemTime
    * Indicates whether or not to block the user from changing date and time settings.
    *
    * @return bool The settingsBlockChangeSystemTime
    */
    public function getSettingsBlockChangeSystemTime()
    {
        if (array_key_exists("settingsBlockChangeSystemTime", $this->_propDict)) {
            return $this->_propDict["settingsBlockChangeSystemTime"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockChangeSystemTime
    * Indicates whether or not to block the user from changing date and time settings.
    *
    * @param bool $val The settingsBlockChangeSystemTime
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockChangeSystemTime($val)
    {
        $this->_propDict["settingsBlockChangeSystemTime"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockEditDeviceName
    * Indicates whether or not to block the user from editing the device name.
    *
    * @return bool The settingsBlockEditDeviceName
    */
    public function getSettingsBlockEditDeviceName()
    {
        if (array_key_exists("settingsBlockEditDeviceName", $this->_propDict)) {
            return $this->_propDict["settingsBlockEditDeviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockEditDeviceName
    * Indicates whether or not to block the user from editing the device name.
    *
    * @param bool $val The settingsBlockEditDeviceName
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockEditDeviceName($val)
    {
        $this->_propDict["settingsBlockEditDeviceName"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockChangeRegion
    * Indicates whether or not to block the user from changing the region settings.
    *
    * @return bool The settingsBlockChangeRegion
    */
    public function getSettingsBlockChangeRegion()
    {
        if (array_key_exists("settingsBlockChangeRegion", $this->_propDict)) {
            return $this->_propDict["settingsBlockChangeRegion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockChangeRegion
    * Indicates whether or not to block the user from changing the region settings.
    *
    * @param bool $val The settingsBlockChangeRegion
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockChangeRegion($val)
    {
        $this->_propDict["settingsBlockChangeRegion"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockChangeLanguage
    * Indicates whether or not to block the user from changing the language settings.
    *
    * @return bool The settingsBlockChangeLanguage
    */
    public function getSettingsBlockChangeLanguage()
    {
        if (array_key_exists("settingsBlockChangeLanguage", $this->_propDict)) {
            return $this->_propDict["settingsBlockChangeLanguage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockChangeLanguage
    * Indicates whether or not to block the user from changing the language settings.
    *
    * @param bool $val The settingsBlockChangeLanguage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockChangeLanguage($val)
    {
        $this->_propDict["settingsBlockChangeLanguage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the settingsBlockChangePowerSleep
    * Indicates whether or not to block the user from changing power and sleep settings.
    *
    * @return bool The settingsBlockChangePowerSleep
    */
    public function getSettingsBlockChangePowerSleep()
    {
        if (array_key_exists("settingsBlockChangePowerSleep", $this->_propDict)) {
            return $this->_propDict["settingsBlockChangePowerSleep"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingsBlockChangePowerSleep
    * Indicates whether or not to block the user from changing power and sleep settings.
    *
    * @param bool $val The settingsBlockChangePowerSleep
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSettingsBlockChangePowerSleep($val)
    {
        $this->_propDict["settingsBlockChangePowerSleep"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the locationServicesBlocked
    * Indicates whether or not to Block the user from location services.
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
    * Indicates whether or not to Block the user from location services.
    *
    * @param bool $val The locationServicesBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setLocationServicesBlocked($val)
    {
        $this->_propDict["locationServicesBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the microsoftAccountBlocked
    * Indicates whether or not to Block a Microsoft account.
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
    * Indicates whether or not to Block a Microsoft account.
    *
    * @param bool $val The microsoftAccountBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setMicrosoftAccountBlocked($val)
    {
        $this->_propDict["microsoftAccountBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the microsoftAccountBlockSettingsSync
    * Indicates whether or not to Block Microsoft account settings sync.
    *
    * @return bool The microsoftAccountBlockSettingsSync
    */
    public function getMicrosoftAccountBlockSettingsSync()
    {
        if (array_key_exists("microsoftAccountBlockSettingsSync", $this->_propDict)) {
            return $this->_propDict["microsoftAccountBlockSettingsSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the microsoftAccountBlockSettingsSync
    * Indicates whether or not to Block Microsoft account settings sync.
    *
    * @param bool $val The microsoftAccountBlockSettingsSync
    *
    * @return Windows10GeneralConfiguration
    */
    public function setMicrosoftAccountBlockSettingsSync($val)
    {
        $this->_propDict["microsoftAccountBlockSettingsSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the nfcBlocked
    * Indicates whether or not to Block the user from using near field communication.
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
    * Indicates whether or not to Block the user from using near field communication.
    *
    * @param bool $val The nfcBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setNfcBlocked($val)
    {
        $this->_propDict["nfcBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the resetProtectionModeBlocked
    * Indicates whether or not to Block the user from reset protection mode.
    *
    * @return bool The resetProtectionModeBlocked
    */
    public function getResetProtectionModeBlocked()
    {
        if (array_key_exists("resetProtectionModeBlocked", $this->_propDict)) {
            return $this->_propDict["resetProtectionModeBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resetProtectionModeBlocked
    * Indicates whether or not to Block the user from reset protection mode.
    *
    * @param bool $val The resetProtectionModeBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setResetProtectionModeBlocked($val)
    {
        $this->_propDict["resetProtectionModeBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the screenCaptureBlocked
    * Indicates whether or not to Block the user from taking Screenshots.
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
    * Indicates whether or not to Block the user from taking Screenshots.
    *
    * @param bool $val The screenCaptureBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageBlockRemovableStorage
    * Indicates whether or not to Block the user from using removable storage.
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
    * Indicates whether or not to Block the user from using removable storage.
    *
    * @param bool $val The storageBlockRemovableStorage
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStorageBlockRemovableStorage($val)
    {
        $this->_propDict["storageBlockRemovableStorage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageRequireMobileDeviceEncryption
    * Indicating whether or not to require encryption on a mobile device.
    *
    * @return bool The storageRequireMobileDeviceEncryption
    */
    public function getStorageRequireMobileDeviceEncryption()
    {
        if (array_key_exists("storageRequireMobileDeviceEncryption", $this->_propDict)) {
            return $this->_propDict["storageRequireMobileDeviceEncryption"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageRequireMobileDeviceEncryption
    * Indicating whether or not to require encryption on a mobile device.
    *
    * @param bool $val The storageRequireMobileDeviceEncryption
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStorageRequireMobileDeviceEncryption($val)
    {
        $this->_propDict["storageRequireMobileDeviceEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usbBlocked
    * Indicates whether or not to Block the user from USB connection.
    *
    * @return bool The usbBlocked
    */
    public function getUsbBlocked()
    {
        if (array_key_exists("usbBlocked", $this->_propDict)) {
            return $this->_propDict["usbBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usbBlocked
    * Indicates whether or not to Block the user from USB connection.
    *
    * @param bool $val The usbBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setUsbBlocked($val)
    {
        $this->_propDict["usbBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the voiceRecordingBlocked
    * Indicates whether or not to Block the user from voice recording.
    *
    * @return bool The voiceRecordingBlocked
    */
    public function getVoiceRecordingBlocked()
    {
        if (array_key_exists("voiceRecordingBlocked", $this->_propDict)) {
            return $this->_propDict["voiceRecordingBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the voiceRecordingBlocked
    * Indicates whether or not to Block the user from voice recording.
    *
    * @param bool $val The voiceRecordingBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setVoiceRecordingBlocked($val)
    {
        $this->_propDict["voiceRecordingBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wiFiBlockAutomaticConnectHotspots
    * Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
    *
    * @return bool The wiFiBlockAutomaticConnectHotspots
    */
    public function getWiFiBlockAutomaticConnectHotspots()
    {
        if (array_key_exists("wiFiBlockAutomaticConnectHotspots", $this->_propDict)) {
            return $this->_propDict["wiFiBlockAutomaticConnectHotspots"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wiFiBlockAutomaticConnectHotspots
    * Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
    *
    * @param bool $val The wiFiBlockAutomaticConnectHotspots
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWiFiBlockAutomaticConnectHotspots($val)
    {
        $this->_propDict["wiFiBlockAutomaticConnectHotspots"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wiFiBlocked
    * Indicates whether or not to Block the user from using Wi-Fi.
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
    * Indicates whether or not to Block the user from using Wi-Fi.
    *
    * @param bool $val The wiFiBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWiFiBlocked($val)
    {
        $this->_propDict["wiFiBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wiFiBlockManualConfiguration
    * Indicates whether or not to Block the user from using Wi-Fi manual configuration.
    *
    * @return bool The wiFiBlockManualConfiguration
    */
    public function getWiFiBlockManualConfiguration()
    {
        if (array_key_exists("wiFiBlockManualConfiguration", $this->_propDict)) {
            return $this->_propDict["wiFiBlockManualConfiguration"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wiFiBlockManualConfiguration
    * Indicates whether or not to Block the user from using Wi-Fi manual configuration.
    *
    * @param bool $val The wiFiBlockManualConfiguration
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWiFiBlockManualConfiguration($val)
    {
        $this->_propDict["wiFiBlockManualConfiguration"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wiFiScanInterval
    * Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500
    *
    * @return int The wiFiScanInterval
    */
    public function getWiFiScanInterval()
    {
        if (array_key_exists("wiFiScanInterval", $this->_propDict)) {
            return $this->_propDict["wiFiScanInterval"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wiFiScanInterval
    * Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500
    *
    * @param int $val The wiFiScanInterval
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWiFiScanInterval($val)
    {
        $this->_propDict["wiFiScanInterval"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the wirelessDisplayBlockProjectionToThisDevice
    * Indicates whether or not to allow other devices from discovering this PC for projection.
    *
    * @return bool The wirelessDisplayBlockProjectionToThisDevice
    */
    public function getWirelessDisplayBlockProjectionToThisDevice()
    {
        if (array_key_exists("wirelessDisplayBlockProjectionToThisDevice", $this->_propDict)) {
            return $this->_propDict["wirelessDisplayBlockProjectionToThisDevice"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wirelessDisplayBlockProjectionToThisDevice
    * Indicates whether or not to allow other devices from discovering this PC for projection.
    *
    * @param bool $val The wirelessDisplayBlockProjectionToThisDevice
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWirelessDisplayBlockProjectionToThisDevice($val)
    {
        $this->_propDict["wirelessDisplayBlockProjectionToThisDevice"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wirelessDisplayBlockUserInputFromReceiver
    * Indicates whether or not to allow user input from wireless display receiver.
    *
    * @return bool The wirelessDisplayBlockUserInputFromReceiver
    */
    public function getWirelessDisplayBlockUserInputFromReceiver()
    {
        if (array_key_exists("wirelessDisplayBlockUserInputFromReceiver", $this->_propDict)) {
            return $this->_propDict["wirelessDisplayBlockUserInputFromReceiver"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wirelessDisplayBlockUserInputFromReceiver
    * Indicates whether or not to allow user input from wireless display receiver.
    *
    * @param bool $val The wirelessDisplayBlockUserInputFromReceiver
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWirelessDisplayBlockUserInputFromReceiver($val)
    {
        $this->_propDict["wirelessDisplayBlockUserInputFromReceiver"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wirelessDisplayRequirePinForPairing
    * Indicates whether or not to require a PIN for new devices to initiate pairing.
    *
    * @return bool The wirelessDisplayRequirePinForPairing
    */
    public function getWirelessDisplayRequirePinForPairing()
    {
        if (array_key_exists("wirelessDisplayRequirePinForPairing", $this->_propDict)) {
            return $this->_propDict["wirelessDisplayRequirePinForPairing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wirelessDisplayRequirePinForPairing
    * Indicates whether or not to require a PIN for new devices to initiate pairing.
    *
    * @param bool $val The wirelessDisplayRequirePinForPairing
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWirelessDisplayRequirePinForPairing($val)
    {
        $this->_propDict["wirelessDisplayRequirePinForPairing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsStoreBlocked
    * Indicates whether or not to Block the user from using the Windows store.
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
    * Indicates whether or not to Block the user from using the Windows store.
    *
    * @param bool $val The windowsStoreBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWindowsStoreBlocked($val)
    {
        $this->_propDict["windowsStoreBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appsAllowTrustedAppsSideloading
    * Indicates whether apps from AppX packages signed with a trusted certificate can be side loaded. Possible values are: notConfigured, blocked, allowed.
    *
    * @return StateManagementSetting The appsAllowTrustedAppsSideloading
    */
    public function getAppsAllowTrustedAppsSideloading()
    {
        if (array_key_exists("appsAllowTrustedAppsSideloading", $this->_propDict)) {
            if (is_a($this->_propDict["appsAllowTrustedAppsSideloading"], "Microsoft\Graph\Model\StateManagementSetting")) {
                return $this->_propDict["appsAllowTrustedAppsSideloading"];
            } else {
                $this->_propDict["appsAllowTrustedAppsSideloading"] = new StateManagementSetting($this->_propDict["appsAllowTrustedAppsSideloading"]);
                return $this->_propDict["appsAllowTrustedAppsSideloading"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appsAllowTrustedAppsSideloading
    * Indicates whether apps from AppX packages signed with a trusted certificate can be side loaded. Possible values are: notConfigured, blocked, allowed.
    *
    * @param StateManagementSetting $val The appsAllowTrustedAppsSideloading
    *
    * @return Windows10GeneralConfiguration
    */
    public function setAppsAllowTrustedAppsSideloading($val)
    {
        $this->_propDict["appsAllowTrustedAppsSideloading"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsStoreBlockAutoUpdate
    * Indicates whether or not to block automatic update of apps from Windows Store.
    *
    * @return bool The windowsStoreBlockAutoUpdate
    */
    public function getWindowsStoreBlockAutoUpdate()
    {
        if (array_key_exists("windowsStoreBlockAutoUpdate", $this->_propDict)) {
            return $this->_propDict["windowsStoreBlockAutoUpdate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsStoreBlockAutoUpdate
    * Indicates whether or not to block automatic update of apps from Windows Store.
    *
    * @param bool $val The windowsStoreBlockAutoUpdate
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWindowsStoreBlockAutoUpdate($val)
    {
        $this->_propDict["windowsStoreBlockAutoUpdate"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the developerUnlockSetting
    * Indicates whether or not to allow developer unlock. Possible values are: notConfigured, blocked, allowed.
    *
    * @return StateManagementSetting The developerUnlockSetting
    */
    public function getDeveloperUnlockSetting()
    {
        if (array_key_exists("developerUnlockSetting", $this->_propDict)) {
            if (is_a($this->_propDict["developerUnlockSetting"], "Microsoft\Graph\Model\StateManagementSetting")) {
                return $this->_propDict["developerUnlockSetting"];
            } else {
                $this->_propDict["developerUnlockSetting"] = new StateManagementSetting($this->_propDict["developerUnlockSetting"]);
                return $this->_propDict["developerUnlockSetting"];
            }
        }
        return null;
    }
    
    /**
    * Sets the developerUnlockSetting
    * Indicates whether or not to allow developer unlock. Possible values are: notConfigured, blocked, allowed.
    *
    * @param StateManagementSetting $val The developerUnlockSetting
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDeveloperUnlockSetting($val)
    {
        $this->_propDict["developerUnlockSetting"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharedUserAppDataAllowed
    * Indicates whether or not to block multiple users of the same app to share data.
    *
    * @return bool The sharedUserAppDataAllowed
    */
    public function getSharedUserAppDataAllowed()
    {
        if (array_key_exists("sharedUserAppDataAllowed", $this->_propDict)) {
            return $this->_propDict["sharedUserAppDataAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharedUserAppDataAllowed
    * Indicates whether or not to block multiple users of the same app to share data.
    *
    * @param bool $val The sharedUserAppDataAllowed
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSharedUserAppDataAllowed($val)
    {
        $this->_propDict["sharedUserAppDataAllowed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appsBlockWindowsStoreOriginatedApps
    * Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded.
    *
    * @return bool The appsBlockWindowsStoreOriginatedApps
    */
    public function getAppsBlockWindowsStoreOriginatedApps()
    {
        if (array_key_exists("appsBlockWindowsStoreOriginatedApps", $this->_propDict)) {
            return $this->_propDict["appsBlockWindowsStoreOriginatedApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appsBlockWindowsStoreOriginatedApps
    * Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded.
    *
    * @param bool $val The appsBlockWindowsStoreOriginatedApps
    *
    * @return Windows10GeneralConfiguration
    */
    public function setAppsBlockWindowsStoreOriginatedApps($val)
    {
        $this->_propDict["appsBlockWindowsStoreOriginatedApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsStoreEnablePrivateStoreOnly
    * Indicates whether or not to enable Private Store Only.
    *
    * @return bool The windowsStoreEnablePrivateStoreOnly
    */
    public function getWindowsStoreEnablePrivateStoreOnly()
    {
        if (array_key_exists("windowsStoreEnablePrivateStoreOnly", $this->_propDict)) {
            return $this->_propDict["windowsStoreEnablePrivateStoreOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsStoreEnablePrivateStoreOnly
    * Indicates whether or not to enable Private Store Only.
    *
    * @param bool $val The windowsStoreEnablePrivateStoreOnly
    *
    * @return Windows10GeneralConfiguration
    */
    public function setWindowsStoreEnablePrivateStoreOnly($val)
    {
        $this->_propDict["windowsStoreEnablePrivateStoreOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageRestrictAppDataToSystemVolume
    * Indicates whether application data is restricted to the system drive.
    *
    * @return bool The storageRestrictAppDataToSystemVolume
    */
    public function getStorageRestrictAppDataToSystemVolume()
    {
        if (array_key_exists("storageRestrictAppDataToSystemVolume", $this->_propDict)) {
            return $this->_propDict["storageRestrictAppDataToSystemVolume"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageRestrictAppDataToSystemVolume
    * Indicates whether application data is restricted to the system drive.
    *
    * @param bool $val The storageRestrictAppDataToSystemVolume
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStorageRestrictAppDataToSystemVolume($val)
    {
        $this->_propDict["storageRestrictAppDataToSystemVolume"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageRestrictAppInstallToSystemVolume
    * Indicates whether the installation of applications is restricted to the system drive.
    *
    * @return bool The storageRestrictAppInstallToSystemVolume
    */
    public function getStorageRestrictAppInstallToSystemVolume()
    {
        if (array_key_exists("storageRestrictAppInstallToSystemVolume", $this->_propDict)) {
            return $this->_propDict["storageRestrictAppInstallToSystemVolume"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageRestrictAppInstallToSystemVolume
    * Indicates whether the installation of applications is restricted to the system drive.
    *
    * @param bool $val The storageRestrictAppInstallToSystemVolume
    *
    * @return Windows10GeneralConfiguration
    */
    public function setStorageRestrictAppInstallToSystemVolume($val)
    {
        $this->_propDict["storageRestrictAppInstallToSystemVolume"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the gameDvrBlocked
    * Indicates whether or not to block DVR and broadcasting.
    *
    * @return bool The gameDvrBlocked
    */
    public function getGameDvrBlocked()
    {
        if (array_key_exists("gameDvrBlocked", $this->_propDict)) {
            return $this->_propDict["gameDvrBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gameDvrBlocked
    * Indicates whether or not to block DVR and broadcasting.
    *
    * @param bool $val The gameDvrBlocked
    *
    * @return Windows10GeneralConfiguration
    */
    public function setGameDvrBlocked($val)
    {
        $this->_propDict["gameDvrBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the experienceBlockDeviceDiscovery
    * Indicates whether or not to enable device discovery UX.
    *
    * @return bool The experienceBlockDeviceDiscovery
    */
    public function getExperienceBlockDeviceDiscovery()
    {
        if (array_key_exists("experienceBlockDeviceDiscovery", $this->_propDict)) {
            return $this->_propDict["experienceBlockDeviceDiscovery"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the experienceBlockDeviceDiscovery
    * Indicates whether or not to enable device discovery UX.
    *
    * @param bool $val The experienceBlockDeviceDiscovery
    *
    * @return Windows10GeneralConfiguration
    */
    public function setExperienceBlockDeviceDiscovery($val)
    {
        $this->_propDict["experienceBlockDeviceDiscovery"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the experienceBlockErrorDialogWhenNoSIM
    * Indicates whether or not to allow the error dialog from displaying if no SIM card is detected.
    *
    * @return bool The experienceBlockErrorDialogWhenNoSIM
    */
    public function getExperienceBlockErrorDialogWhenNoSIM()
    {
        if (array_key_exists("experienceBlockErrorDialogWhenNoSIM", $this->_propDict)) {
            return $this->_propDict["experienceBlockErrorDialogWhenNoSIM"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the experienceBlockErrorDialogWhenNoSIM
    * Indicates whether or not to allow the error dialog from displaying if no SIM card is detected.
    *
    * @param bool $val The experienceBlockErrorDialogWhenNoSIM
    *
    * @return Windows10GeneralConfiguration
    */
    public function setExperienceBlockErrorDialogWhenNoSIM($val)
    {
        $this->_propDict["experienceBlockErrorDialogWhenNoSIM"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the experienceBlockTaskSwitcher
    * Indicates whether or not to enable task switching on the device.
    *
    * @return bool The experienceBlockTaskSwitcher
    */
    public function getExperienceBlockTaskSwitcher()
    {
        if (array_key_exists("experienceBlockTaskSwitcher", $this->_propDict)) {
            return $this->_propDict["experienceBlockTaskSwitcher"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the experienceBlockTaskSwitcher
    * Indicates whether or not to enable task switching on the device.
    *
    * @param bool $val The experienceBlockTaskSwitcher
    *
    * @return Windows10GeneralConfiguration
    */
    public function setExperienceBlockTaskSwitcher($val)
    {
        $this->_propDict["experienceBlockTaskSwitcher"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the logonBlockFastUserSwitching
    * Disables the ability to quickly switch between users that are logged on simultaneously without logging off.
    *
    * @return bool The logonBlockFastUserSwitching
    */
    public function getLogonBlockFastUserSwitching()
    {
        if (array_key_exists("logonBlockFastUserSwitching", $this->_propDict)) {
            return $this->_propDict["logonBlockFastUserSwitching"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the logonBlockFastUserSwitching
    * Disables the ability to quickly switch between users that are logged on simultaneously without logging off.
    *
    * @param bool $val The logonBlockFastUserSwitching
    *
    * @return Windows10GeneralConfiguration
    */
    public function setLogonBlockFastUserSwitching($val)
    {
        $this->_propDict["logonBlockFastUserSwitching"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the tenantLockdownRequireNetworkDuringOutOfBoxExperience
    * Whether the device is required to connect to the network.
    *
    * @return bool The tenantLockdownRequireNetworkDuringOutOfBoxExperience
    */
    public function getTenantLockdownRequireNetworkDuringOutOfBoxExperience()
    {
        if (array_key_exists("tenantLockdownRequireNetworkDuringOutOfBoxExperience", $this->_propDict)) {
            return $this->_propDict["tenantLockdownRequireNetworkDuringOutOfBoxExperience"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantLockdownRequireNetworkDuringOutOfBoxExperience
    * Whether the device is required to connect to the network.
    *
    * @param bool $val The tenantLockdownRequireNetworkDuringOutOfBoxExperience
    *
    * @return Windows10GeneralConfiguration
    */
    public function setTenantLockdownRequireNetworkDuringOutOfBoxExperience($val)
    {
        $this->_propDict["tenantLockdownRequireNetworkDuringOutOfBoxExperience"] = boolval($val);
        return $this;
    }
    
}