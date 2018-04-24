<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10GeneralConfiguration File
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
* Windows10GeneralConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Windows10GeneralConfiguration extends DeviceConfiguration
{
    /**
    * Gets the enableAutomaticRedeployment
    *
    * @return bool The enableAutomaticRedeployment
    */
    public function getEnableAutomaticRedeployment()
    {
        if (array_key_exists("enableAutomaticRedeployment", $this->_propDict)) {
            return $this->_propDict["enableAutomaticRedeployment"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableAutomaticRedeployment
    *
    * @param bool $val The enableAutomaticRedeployment
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEnableAutomaticRedeployment($val)
    {
        $this->_propDict["enableAutomaticRedeployment"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the assignedAccessSingleModeUserName
    *
    * @return string The assignedAccessSingleModeUserName
    */
    public function getAssignedAccessSingleModeUserName()
    {
        if (array_key_exists("assignedAccessSingleModeUserName", $this->_propDict)) {
            return $this->_propDict["assignedAccessSingleModeUserName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignedAccessSingleModeUserName
    *
    * @param string $val The assignedAccessSingleModeUserName
    *
    * @return Windows10GeneralConfiguration
    */
    public function setAssignedAccessSingleModeUserName($val)
    {
        $this->_propDict["assignedAccessSingleModeUserName"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignedAccessSingleModeAppUserModelId
    *
    * @return string The assignedAccessSingleModeAppUserModelId
    */
    public function getAssignedAccessSingleModeAppUserModelId()
    {
        if (array_key_exists("assignedAccessSingleModeAppUserModelId", $this->_propDict)) {
            return $this->_propDict["assignedAccessSingleModeAppUserModelId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignedAccessSingleModeAppUserModelId
    *
    * @param string $val The assignedAccessSingleModeAppUserModelId
    *
    * @return Windows10GeneralConfiguration
    */
    public function setAssignedAccessSingleModeAppUserModelId($val)
    {
        $this->_propDict["assignedAccessSingleModeAppUserModelId"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftAccountSignInAssistantSettings
    *
    * @return SignInAssistantOptions The microsoftAccountSignInAssistantSettings
    */
    public function getMicrosoftAccountSignInAssistantSettings()
    {
        if (array_key_exists("microsoftAccountSignInAssistantSettings", $this->_propDict)) {
            if (is_a($this->_propDict["microsoftAccountSignInAssistantSettings"], "Microsoft\Graph\Beta\Model\SignInAssistantOptions")) {
                return $this->_propDict["microsoftAccountSignInAssistantSettings"];
            } else {
                $this->_propDict["microsoftAccountSignInAssistantSettings"] = new SignInAssistantOptions($this->_propDict["microsoftAccountSignInAssistantSettings"]);
                return $this->_propDict["microsoftAccountSignInAssistantSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the microsoftAccountSignInAssistantSettings
    *
    * @param SignInAssistantOptions $val The microsoftAccountSignInAssistantSettings
    *
    * @return Windows10GeneralConfiguration
    */
    public function setMicrosoftAccountSignInAssistantSettings($val)
    {
        $this->_propDict["microsoftAccountSignInAssistantSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationAllowSecondaryDevice
    *
    * @return bool The authenticationAllowSecondaryDevice
    */
    public function getAuthenticationAllowSecondaryDevice()
    {
        if (array_key_exists("authenticationAllowSecondaryDevice", $this->_propDict)) {
            return $this->_propDict["authenticationAllowSecondaryDevice"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authenticationAllowSecondaryDevice
    *
    * @param bool $val The authenticationAllowSecondaryDevice
    *
    * @return Windows10GeneralConfiguration
    */
    public function setAuthenticationAllowSecondaryDevice($val)
    {
        $this->_propDict["authenticationAllowSecondaryDevice"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the authenticationAllowFIDODevice
    *
    * @return bool The authenticationAllowFIDODevice
    */
    public function getAuthenticationAllowFIDODevice()
    {
        if (array_key_exists("authenticationAllowFIDODevice", $this->_propDict)) {
            return $this->_propDict["authenticationAllowFIDODevice"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authenticationAllowFIDODevice
    *
    * @param bool $val The authenticationAllowFIDODevice
    *
    * @return Windows10GeneralConfiguration
    */
    public function setAuthenticationAllowFIDODevice($val)
    {
        $this->_propDict["authenticationAllowFIDODevice"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cryptographyAllowFipsAlgorithmPolicy
    *
    * @return bool The cryptographyAllowFipsAlgorithmPolicy
    */
    public function getCryptographyAllowFipsAlgorithmPolicy()
    {
        if (array_key_exists("cryptographyAllowFipsAlgorithmPolicy", $this->_propDict)) {
            return $this->_propDict["cryptographyAllowFipsAlgorithmPolicy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cryptographyAllowFipsAlgorithmPolicy
    *
    * @param bool $val The cryptographyAllowFipsAlgorithmPolicy
    *
    * @return Windows10GeneralConfiguration
    */
    public function setCryptographyAllowFipsAlgorithmPolicy($val)
    {
        $this->_propDict["cryptographyAllowFipsAlgorithmPolicy"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the displayAppListWithGdiDPIScalingTurnedOn
    *
    * @return string The displayAppListWithGdiDPIScalingTurnedOn
    */
    public function getDisplayAppListWithGdiDPIScalingTurnedOn()
    {
        if (array_key_exists("displayAppListWithGdiDPIScalingTurnedOn", $this->_propDict)) {
            return $this->_propDict["displayAppListWithGdiDPIScalingTurnedOn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayAppListWithGdiDPIScalingTurnedOn
    *
    * @param string $val The displayAppListWithGdiDPIScalingTurnedOn
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDisplayAppListWithGdiDPIScalingTurnedOn($val)
    {
        $this->_propDict["displayAppListWithGdiDPIScalingTurnedOn"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayAppListWithGdiDPIScalingTurnedOff
    *
    * @return string The displayAppListWithGdiDPIScalingTurnedOff
    */
    public function getDisplayAppListWithGdiDPIScalingTurnedOff()
    {
        if (array_key_exists("displayAppListWithGdiDPIScalingTurnedOff", $this->_propDict)) {
            return $this->_propDict["displayAppListWithGdiDPIScalingTurnedOff"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayAppListWithGdiDPIScalingTurnedOff
    *
    * @param string $val The displayAppListWithGdiDPIScalingTurnedOff
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDisplayAppListWithGdiDPIScalingTurnedOff($val)
    {
        $this->_propDict["displayAppListWithGdiDPIScalingTurnedOff"] = $val;
        return $this;
    }
    
    /**
    * Gets the enterpriseCloudPrintDiscoveryEndPoint
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
    * Gets the messagingBlockSync
    *
    * @return bool The messagingBlockSync
    */
    public function getMessagingBlockSync()
    {
        if (array_key_exists("messagingBlockSync", $this->_propDict)) {
            return $this->_propDict["messagingBlockSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the messagingBlockSync
    *
    * @param bool $val The messagingBlockSync
    *
    * @return Windows10GeneralConfiguration
    */
    public function setMessagingBlockSync($val)
    {
        $this->_propDict["messagingBlockSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the messagingBlockMMS
    *
    * @return bool The messagingBlockMMS
    */
    public function getMessagingBlockMMS()
    {
        if (array_key_exists("messagingBlockMMS", $this->_propDict)) {
            return $this->_propDict["messagingBlockMMS"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the messagingBlockMMS
    *
    * @param bool $val The messagingBlockMMS
    *
    * @return Windows10GeneralConfiguration
    */
    public function setMessagingBlockMMS($val)
    {
        $this->_propDict["messagingBlockMMS"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the messagingBlockRichCommunicationServices
    *
    * @return bool The messagingBlockRichCommunicationServices
    */
    public function getMessagingBlockRichCommunicationServices()
    {
        if (array_key_exists("messagingBlockRichCommunicationServices", $this->_propDict)) {
            return $this->_propDict["messagingBlockRichCommunicationServices"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the messagingBlockRichCommunicationServices
    *
    * @param bool $val The messagingBlockRichCommunicationServices
    *
    * @return Windows10GeneralConfiguration
    */
    public function setMessagingBlockRichCommunicationServices($val)
    {
        $this->_propDict["messagingBlockRichCommunicationServices"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the searchBlockDiacritics
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
    * Gets the searchDisableUseLocation
    *
    * @return bool The searchDisableUseLocation
    */
    public function getSearchDisableUseLocation()
    {
        if (array_key_exists("searchDisableUseLocation", $this->_propDict)) {
            return $this->_propDict["searchDisableUseLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the searchDisableUseLocation
    *
    * @param bool $val The searchDisableUseLocation
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSearchDisableUseLocation($val)
    {
        $this->_propDict["searchDisableUseLocation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the searchDisableIndexerBackoff
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
    * Gets the securityBlockAzureADJoinedDevicesAutoEncryption
    *
    * @return bool The securityBlockAzureADJoinedDevicesAutoEncryption
    */
    public function getSecurityBlockAzureADJoinedDevicesAutoEncryption()
    {
        if (array_key_exists("securityBlockAzureADJoinedDevicesAutoEncryption", $this->_propDict)) {
            return $this->_propDict["securityBlockAzureADJoinedDevicesAutoEncryption"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityBlockAzureADJoinedDevicesAutoEncryption
    *
    * @param bool $val The securityBlockAzureADJoinedDevicesAutoEncryption
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSecurityBlockAzureADJoinedDevicesAutoEncryption($val)
    {
        $this->_propDict["securityBlockAzureADJoinedDevicesAutoEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the diagnosticsDataSubmissionMode
    *
    * @return DiagnosticDataSubmissionMode The diagnosticsDataSubmissionMode
    */
    public function getDiagnosticsDataSubmissionMode()
    {
        if (array_key_exists("diagnosticsDataSubmissionMode", $this->_propDict)) {
            if (is_a($this->_propDict["diagnosticsDataSubmissionMode"], "Microsoft\Graph\Beta\Model\DiagnosticDataSubmissionMode")) {
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
    * Gets the systemTelemetryProxyServer
    *
    * @return string The systemTelemetryProxyServer
    */
    public function getSystemTelemetryProxyServer()
    {
        if (array_key_exists("systemTelemetryProxyServer", $this->_propDict)) {
            return $this->_propDict["systemTelemetryProxyServer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the systemTelemetryProxyServer
    *
    * @param string $val The systemTelemetryProxyServer
    *
    * @return Windows10GeneralConfiguration
    */
    public function setSystemTelemetryProxyServer($val)
    {
        $this->_propDict["systemTelemetryProxyServer"] = $val;
        return $this;
    }
    
    /**
    * Gets the inkWorkspaceAccess
    *
    * @return InkAccessSetting The inkWorkspaceAccess
    */
    public function getInkWorkspaceAccess()
    {
        if (array_key_exists("inkWorkspaceAccess", $this->_propDict)) {
            if (is_a($this->_propDict["inkWorkspaceAccess"], "Microsoft\Graph\Beta\Model\InkAccessSetting")) {
                return $this->_propDict["inkWorkspaceAccess"];
            } else {
                $this->_propDict["inkWorkspaceAccess"] = new InkAccessSetting($this->_propDict["inkWorkspaceAccess"]);
                return $this->_propDict["inkWorkspaceAccess"];
            }
        }
        return null;
    }
    
    /**
    * Sets the inkWorkspaceAccess
    *
    * @param InkAccessSetting $val The inkWorkspaceAccess
    *
    * @return Windows10GeneralConfiguration
    */
    public function setInkWorkspaceAccess($val)
    {
        $this->_propDict["inkWorkspaceAccess"] = $val;
        return $this;
    }
    
    /**
    * Gets the inkWorkspaceBlockSuggestedApps
    *
    * @return bool The inkWorkspaceBlockSuggestedApps
    */
    public function getInkWorkspaceBlockSuggestedApps()
    {
        if (array_key_exists("inkWorkspaceBlockSuggestedApps", $this->_propDict)) {
            return $this->_propDict["inkWorkspaceBlockSuggestedApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the inkWorkspaceBlockSuggestedApps
    *
    * @param bool $val The inkWorkspaceBlockSuggestedApps
    *
    * @return Windows10GeneralConfiguration
    */
    public function setInkWorkspaceBlockSuggestedApps($val)
    {
        $this->_propDict["inkWorkspaceBlockSuggestedApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smartScreenEnableAppInstallControl
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
    *
    * @return EdgeCookiePolicy The edgeCookiePolicy
    */
    public function getEdgeCookiePolicy()
    {
        if (array_key_exists("edgeCookiePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["edgeCookiePolicy"], "Microsoft\Graph\Beta\Model\EdgeCookiePolicy")) {
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
    * Gets the edgeFavoritesListLocation
    *
    * @return string The edgeFavoritesListLocation
    */
    public function getEdgeFavoritesListLocation()
    {
        if (array_key_exists("edgeFavoritesListLocation", $this->_propDict)) {
            return $this->_propDict["edgeFavoritesListLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeFavoritesListLocation
    *
    * @param string $val The edgeFavoritesListLocation
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeFavoritesListLocation($val)
    {
        $this->_propDict["edgeFavoritesListLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the edgeBlockEditFavorites
    *
    * @return bool The edgeBlockEditFavorites
    */
    public function getEdgeBlockEditFavorites()
    {
        if (array_key_exists("edgeBlockEditFavorites", $this->_propDict)) {
            return $this->_propDict["edgeBlockEditFavorites"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the edgeBlockEditFavorites
    *
    * @param bool $val The edgeBlockEditFavorites
    *
    * @return Windows10GeneralConfiguration
    */
    public function setEdgeBlockEditFavorites($val)
    {
        $this->_propDict["edgeBlockEditFavorites"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockDataWhenRoaming
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
    * Gets the cellularData
    *
    * @return ConfigurationUsage The cellularData
    */
    public function getCellularData()
    {
        if (array_key_exists("cellularData", $this->_propDict)) {
            if (is_a($this->_propDict["cellularData"], "Microsoft\Graph\Beta\Model\ConfigurationUsage")) {
                return $this->_propDict["cellularData"];
            } else {
                $this->_propDict["cellularData"] = new ConfigurationUsage($this->_propDict["cellularData"]);
                return $this->_propDict["cellularData"];
            }
        }
        return null;
    }
    
    /**
    * Sets the cellularData
    *
    * @param ConfigurationUsage $val The cellularData
    *
    * @return Windows10GeneralConfiguration
    */
    public function setCellularData($val)
    {
        $this->_propDict["cellularData"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderBlockEndUserAccess
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
    *
    * @return DefenderDetectedMalwareActions The defenderDetectedMalwareActions
    */
    public function getDefenderDetectedMalwareActions()
    {
        if (array_key_exists("defenderDetectedMalwareActions", $this->_propDict)) {
            if (is_a($this->_propDict["defenderDetectedMalwareActions"], "Microsoft\Graph\Beta\Model\DefenderDetectedMalwareActions")) {
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
    *
    * @return WeeklySchedule The defenderSystemScanSchedule
    */
    public function getDefenderSystemScanSchedule()
    {
        if (array_key_exists("defenderSystemScanSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["defenderSystemScanSchedule"], "Microsoft\Graph\Beta\Model\WeeklySchedule")) {
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
    *
    * @return DefenderMonitorFileActivity The defenderMonitorFileActivity
    */
    public function getDefenderMonitorFileActivity()
    {
        if (array_key_exists("defenderMonitorFileActivity", $this->_propDict)) {
            if (is_a($this->_propDict["defenderMonitorFileActivity"], "Microsoft\Graph\Beta\Model\DefenderMonitorFileActivity")) {
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
    * Gets the defenderPotentiallyUnwantedAppAction
    *
    * @return DefenderPotentiallyUnwantedAppAction The defenderPotentiallyUnwantedAppAction
    */
    public function getDefenderPotentiallyUnwantedAppAction()
    {
        if (array_key_exists("defenderPotentiallyUnwantedAppAction", $this->_propDict)) {
            if (is_a($this->_propDict["defenderPotentiallyUnwantedAppAction"], "Microsoft\Graph\Beta\Model\DefenderPotentiallyUnwantedAppAction")) {
                return $this->_propDict["defenderPotentiallyUnwantedAppAction"];
            } else {
                $this->_propDict["defenderPotentiallyUnwantedAppAction"] = new DefenderPotentiallyUnwantedAppAction($this->_propDict["defenderPotentiallyUnwantedAppAction"]);
                return $this->_propDict["defenderPotentiallyUnwantedAppAction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderPotentiallyUnwantedAppAction
    *
    * @param DefenderPotentiallyUnwantedAppAction $val The defenderPotentiallyUnwantedAppAction
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderPotentiallyUnwantedAppAction($val)
    {
        $this->_propDict["defenderPotentiallyUnwantedAppAction"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderProcessesToExclude
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
    *
    * @return DefenderPromptForSampleSubmission The defenderPromptForSampleSubmission
    */
    public function getDefenderPromptForSampleSubmission()
    {
        if (array_key_exists("defenderPromptForSampleSubmission", $this->_propDict)) {
            if (is_a($this->_propDict["defenderPromptForSampleSubmission"], "Microsoft\Graph\Beta\Model\DefenderPromptForSampleSubmission")) {
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
    *
    * @return DefenderScanType The defenderScanType
    */
    public function getDefenderScanType()
    {
        if (array_key_exists("defenderScanType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderScanType"], "Microsoft\Graph\Beta\Model\DefenderScanType")) {
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
    *
    * @return TimeOfDay The defenderScheduledScanTime
    */
    public function getDefenderScheduledScanTime()
    {
        if (array_key_exists("defenderScheduledScanTime", $this->_propDict)) {
            if (is_a($this->_propDict["defenderScheduledScanTime"], "Microsoft\Graph\Beta\Model\TimeOfDay")) {
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
    *
    * @return TimeOfDay The defenderScheduledQuickScanTime
    */
    public function getDefenderScheduledQuickScanTime()
    {
        if (array_key_exists("defenderScheduledQuickScanTime", $this->_propDict)) {
            if (is_a($this->_propDict["defenderScheduledQuickScanTime"], "Microsoft\Graph\Beta\Model\TimeOfDay")) {
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
    *
    * @return DefenderCloudBlockLevelType The defenderCloudBlockLevel
    */
    public function getDefenderCloudBlockLevel()
    {
        if (array_key_exists("defenderCloudBlockLevel", $this->_propDict)) {
            if (is_a($this->_propDict["defenderCloudBlockLevel"], "Microsoft\Graph\Beta\Model\DefenderCloudBlockLevelType")) {
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
    * Gets the defenderCloudExtendedTimeout
    *
    * @return int The defenderCloudExtendedTimeout
    */
    public function getDefenderCloudExtendedTimeout()
    {
        if (array_key_exists("defenderCloudExtendedTimeout", $this->_propDict)) {
            return $this->_propDict["defenderCloudExtendedTimeout"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderCloudExtendedTimeout
    *
    * @param int $val The defenderCloudExtendedTimeout
    *
    * @return Windows10GeneralConfiguration
    */
    public function setDefenderCloudExtendedTimeout($val)
    {
        $this->_propDict["defenderCloudExtendedTimeout"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the lockScreenAllowTimeoutConfiguration
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
    * @return Windows10GeneralConfiguration
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
    * @return Windows10GeneralConfiguration
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
    * @return Windows10GeneralConfiguration
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
    * @return Windows10GeneralConfiguration
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
    * @return Windows10GeneralConfiguration
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
    * @return Windows10GeneralConfiguration
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
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
    * @return Windows10GeneralConfiguration
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequireWhenResumeFromIdleState
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
    *
    * @return RequiredPasswordType The passwordRequiredType
    */
    public function getPasswordRequiredType()
    {
        if (array_key_exists("passwordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequiredType"], "Microsoft\Graph\Beta\Model\RequiredPasswordType")) {
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
    * @return Windows10GeneralConfiguration
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
    * @return Windows10GeneralConfiguration
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the privacyAdvertisingId
    *
    * @return StateManagementSetting The privacyAdvertisingId
    */
    public function getPrivacyAdvertisingId()
    {
        if (array_key_exists("privacyAdvertisingId", $this->_propDict)) {
            if (is_a($this->_propDict["privacyAdvertisingId"], "Microsoft\Graph\Beta\Model\StateManagementSetting")) {
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
    * Gets the privacyBlockPublishUserActivities
    *
    * @return bool The privacyBlockPublishUserActivities
    */
    public function getPrivacyBlockPublishUserActivities()
    {
        if (array_key_exists("privacyBlockPublishUserActivities", $this->_propDict)) {
            return $this->_propDict["privacyBlockPublishUserActivities"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the privacyBlockPublishUserActivities
    *
    * @param bool $val The privacyBlockPublishUserActivities
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPrivacyBlockPublishUserActivities($val)
    {
        $this->_propDict["privacyBlockPublishUserActivities"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the privacyBlockActivityFeed
    *
    * @return bool The privacyBlockActivityFeed
    */
    public function getPrivacyBlockActivityFeed()
    {
        if (array_key_exists("privacyBlockActivityFeed", $this->_propDict)) {
            return $this->_propDict["privacyBlockActivityFeed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the privacyBlockActivityFeed
    *
    * @param bool $val The privacyBlockActivityFeed
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPrivacyBlockActivityFeed($val)
    {
        $this->_propDict["privacyBlockActivityFeed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startBlockUnpinningAppsFromTaskbar
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
    *
    * @return WindowsStartMenuAppListVisibilityType The startMenuAppListVisibility
    */
    public function getStartMenuAppListVisibility()
    {
        if (array_key_exists("startMenuAppListVisibility", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuAppListVisibility"], "Microsoft\Graph\Beta\Model\WindowsStartMenuAppListVisibilityType")) {
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
    *
    * @return WindowsStartMenuModeType The startMenuMode
    */
    public function getStartMenuMode()
    {
        if (array_key_exists("startMenuMode", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuMode"], "Microsoft\Graph\Beta\Model\WindowsStartMenuModeType")) {
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
    *
    * @return VisibilitySetting The startMenuPinnedFolderDocuments
    */
    public function getStartMenuPinnedFolderDocuments()
    {
        if (array_key_exists("startMenuPinnedFolderDocuments", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderDocuments"], "Microsoft\Graph\Beta\Model\VisibilitySetting")) {
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
    *
    * @return VisibilitySetting The startMenuPinnedFolderDownloads
    */
    public function getStartMenuPinnedFolderDownloads()
    {
        if (array_key_exists("startMenuPinnedFolderDownloads", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderDownloads"], "Microsoft\Graph\Beta\Model\VisibilitySetting")) {
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
    *
    * @return VisibilitySetting The startMenuPinnedFolderFileExplorer
    */
    public function getStartMenuPinnedFolderFileExplorer()
    {
        if (array_key_exists("startMenuPinnedFolderFileExplorer", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderFileExplorer"], "Microsoft\Graph\Beta\Model\VisibilitySetting")) {
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
    *
    * @return VisibilitySetting The startMenuPinnedFolderHomeGroup
    */
    public function getStartMenuPinnedFolderHomeGroup()
    {
        if (array_key_exists("startMenuPinnedFolderHomeGroup", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderHomeGroup"], "Microsoft\Graph\Beta\Model\VisibilitySetting")) {
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
    *
    * @return VisibilitySetting The startMenuPinnedFolderMusic
    */
    public function getStartMenuPinnedFolderMusic()
    {
        if (array_key_exists("startMenuPinnedFolderMusic", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderMusic"], "Microsoft\Graph\Beta\Model\VisibilitySetting")) {
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
    *
    * @return VisibilitySetting The startMenuPinnedFolderNetwork
    */
    public function getStartMenuPinnedFolderNetwork()
    {
        if (array_key_exists("startMenuPinnedFolderNetwork", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderNetwork"], "Microsoft\Graph\Beta\Model\VisibilitySetting")) {
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
    *
    * @return VisibilitySetting The startMenuPinnedFolderPersonalFolder
    */
    public function getStartMenuPinnedFolderPersonalFolder()
    {
        if (array_key_exists("startMenuPinnedFolderPersonalFolder", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderPersonalFolder"], "Microsoft\Graph\Beta\Model\VisibilitySetting")) {
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
    *
    * @return VisibilitySetting The startMenuPinnedFolderPictures
    */
    public function getStartMenuPinnedFolderPictures()
    {
        if (array_key_exists("startMenuPinnedFolderPictures", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderPictures"], "Microsoft\Graph\Beta\Model\VisibilitySetting")) {
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
    *
    * @return VisibilitySetting The startMenuPinnedFolderSettings
    */
    public function getStartMenuPinnedFolderSettings()
    {
        if (array_key_exists("startMenuPinnedFolderSettings", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderSettings"], "Microsoft\Graph\Beta\Model\VisibilitySetting")) {
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
    *
    * @return VisibilitySetting The startMenuPinnedFolderVideos
    */
    public function getStartMenuPinnedFolderVideos()
    {
        if (array_key_exists("startMenuPinnedFolderVideos", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuPinnedFolderVideos"], "Microsoft\Graph\Beta\Model\VisibilitySetting")) {
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
    *
    * @return WindowsSpotlightEnablementSettings The windowsSpotlightConfigureOnLockScreen
    */
    public function getWindowsSpotlightConfigureOnLockScreen()
    {
        if (array_key_exists("windowsSpotlightConfigureOnLockScreen", $this->_propDict)) {
            if (is_a($this->_propDict["windowsSpotlightConfigureOnLockScreen"], "Microsoft\Graph\Beta\Model\WindowsSpotlightEnablementSettings")) {
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
    *
    * @return Windows10NetworkProxyServer The networkProxyServer
    */
    public function getNetworkProxyServer()
    {
        if (array_key_exists("networkProxyServer", $this->_propDict)) {
            if (is_a($this->_propDict["networkProxyServer"], "Microsoft\Graph\Beta\Model\Windows10NetworkProxyServer")) {
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
    * @return Windows10GeneralConfiguration
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
    * @return Windows10GeneralConfiguration
    */
    public function setCameraBlocked($val)
    {
        $this->_propDict["cameraBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the connectedDevicesServiceBlocked
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
    *
    * @return SafeSearchFilterType The safeSearchFilter
    */
    public function getSafeSearchFilter()
    {
        if (array_key_exists("safeSearchFilter", $this->_propDict)) {
            if (is_a($this->_propDict["safeSearchFilter"], "Microsoft\Graph\Beta\Model\SafeSearchFilterType")) {
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
    * Gets the edgeRequireSmartScreen
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
    *
    * @return EdgeSearchEngineBase The edgeSearchEngine
    */
    public function getEdgeSearchEngine()
    {
        if (array_key_exists("edgeSearchEngine", $this->_propDict)) {
            if (is_a($this->_propDict["edgeSearchEngine"], "Microsoft\Graph\Beta\Model\EdgeSearchEngineBase")) {
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
    * @return Windows10GeneralConfiguration
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
    * @return Windows10GeneralConfiguration
    */
    public function setMicrosoftAccountBlocked($val)
    {
        $this->_propDict["microsoftAccountBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the microsoftAccountBlockSettingsSync
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
    * @return Windows10GeneralConfiguration
    */
    public function setNfcBlocked($val)
    {
        $this->_propDict["nfcBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the resetProtectionModeBlocked
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
    * @return Windows10GeneralConfiguration
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
    * @return Windows10GeneralConfiguration
    */
    public function setStorageBlockRemovableStorage($val)
    {
        $this->_propDict["storageBlockRemovableStorage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageRequireMobileDeviceEncryption
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
    * @return Windows10GeneralConfiguration
    */
    public function setWiFiBlocked($val)
    {
        $this->_propDict["wiFiBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wiFiBlockManualConfiguration
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
    * @return Windows10GeneralConfiguration
    */
    public function setWindowsStoreBlocked($val)
    {
        $this->_propDict["windowsStoreBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appsAllowTrustedAppsSideloading
    *
    * @return StateManagementSetting The appsAllowTrustedAppsSideloading
    */
    public function getAppsAllowTrustedAppsSideloading()
    {
        if (array_key_exists("appsAllowTrustedAppsSideloading", $this->_propDict)) {
            if (is_a($this->_propDict["appsAllowTrustedAppsSideloading"], "Microsoft\Graph\Beta\Model\StateManagementSetting")) {
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
    *
    * @return StateManagementSetting The developerUnlockSetting
    */
    public function getDeveloperUnlockSetting()
    {
        if (array_key_exists("developerUnlockSetting", $this->_propDict)) {
            if (is_a($this->_propDict["developerUnlockSetting"], "Microsoft\Graph\Beta\Model\StateManagementSetting")) {
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
     * Gets the assignedAccessMultiModeProfiles
     *
     * @return array The assignedAccessMultiModeProfiles
     */
    public function getAssignedAccessMultiModeProfiles()
    {
        if (array_key_exists("assignedAccessMultiModeProfiles", $this->_propDict)) {
           return $this->_propDict["assignedAccessMultiModeProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignedAccessMultiModeProfiles
    *
    * @param WindowsAssignedAccessProfile $val The assignedAccessMultiModeProfiles
    *
    * @return Windows10GeneralConfiguration
    */
    public function setAssignedAccessMultiModeProfiles($val)
    {
		$this->_propDict["assignedAccessMultiModeProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the privacyAccessControls
     *
     * @return array The privacyAccessControls
     */
    public function getPrivacyAccessControls()
    {
        if (array_key_exists("privacyAccessControls", $this->_propDict)) {
           return $this->_propDict["privacyAccessControls"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the privacyAccessControls
    *
    * @param WindowsPrivacyDataAccessControlItem $val The privacyAccessControls
    *
    * @return Windows10GeneralConfiguration
    */
    public function setPrivacyAccessControls($val)
    {
		$this->_propDict["privacyAccessControls"] = $val;
        return $this;
    }
    
}