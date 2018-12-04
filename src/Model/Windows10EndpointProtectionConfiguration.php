<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10EndpointProtectionConfiguration File
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
* Windows10EndpointProtectionConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Windows10EndpointProtectionConfiguration extends DeviceConfiguration
{
    /**
    * Gets the firewallBlockStatefulFTP
    *
    * @return bool The firewallBlockStatefulFTP
    */
    public function getFirewallBlockStatefulFTP()
    {
        if (array_key_exists("firewallBlockStatefulFTP", $this->_propDict)) {
            return $this->_propDict["firewallBlockStatefulFTP"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallBlockStatefulFTP
    *
    * @param bool $val The firewallBlockStatefulFTP
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallBlockStatefulFTP($val)
    {
        $this->_propDict["firewallBlockStatefulFTP"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallIdleTimeoutForSecurityAssociationInSeconds
    *
    * @return int The firewallIdleTimeoutForSecurityAssociationInSeconds
    */
    public function getFirewallIdleTimeoutForSecurityAssociationInSeconds()
    {
        if (array_key_exists("firewallIdleTimeoutForSecurityAssociationInSeconds", $this->_propDict)) {
            return $this->_propDict["firewallIdleTimeoutForSecurityAssociationInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIdleTimeoutForSecurityAssociationInSeconds
    *
    * @param int $val The firewallIdleTimeoutForSecurityAssociationInSeconds
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIdleTimeoutForSecurityAssociationInSeconds($val)
    {
        $this->_propDict["firewallIdleTimeoutForSecurityAssociationInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the firewallPreSharedKeyEncodingMethod
    *
    * @return FirewallPreSharedKeyEncodingMethodType The firewallPreSharedKeyEncodingMethod
    */
    public function getFirewallPreSharedKeyEncodingMethod()
    {
        if (array_key_exists("firewallPreSharedKeyEncodingMethod", $this->_propDict)) {
            if (is_a($this->_propDict["firewallPreSharedKeyEncodingMethod"], "Microsoft\Graph\Model\FirewallPreSharedKeyEncodingMethodType")) {
                return $this->_propDict["firewallPreSharedKeyEncodingMethod"];
            } else {
                $this->_propDict["firewallPreSharedKeyEncodingMethod"] = new FirewallPreSharedKeyEncodingMethodType($this->_propDict["firewallPreSharedKeyEncodingMethod"]);
                return $this->_propDict["firewallPreSharedKeyEncodingMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallPreSharedKeyEncodingMethod
    *
    * @param FirewallPreSharedKeyEncodingMethodType $val The firewallPreSharedKeyEncodingMethod
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallPreSharedKeyEncodingMethod($val)
    {
        $this->_propDict["firewallPreSharedKeyEncodingMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallIPSecExemptionsAllowNeighborDiscovery
    *
    * @return bool The firewallIPSecExemptionsAllowNeighborDiscovery
    */
    public function getFirewallIPSecExemptionsAllowNeighborDiscovery()
    {
        if (array_key_exists("firewallIPSecExemptionsAllowNeighborDiscovery", $this->_propDict)) {
            return $this->_propDict["firewallIPSecExemptionsAllowNeighborDiscovery"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIPSecExemptionsAllowNeighborDiscovery
    *
    * @param bool $val The firewallIPSecExemptionsAllowNeighborDiscovery
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIPSecExemptionsAllowNeighborDiscovery($val)
    {
        $this->_propDict["firewallIPSecExemptionsAllowNeighborDiscovery"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallIPSecExemptionsAllowICMP
    *
    * @return bool The firewallIPSecExemptionsAllowICMP
    */
    public function getFirewallIPSecExemptionsAllowICMP()
    {
        if (array_key_exists("firewallIPSecExemptionsAllowICMP", $this->_propDict)) {
            return $this->_propDict["firewallIPSecExemptionsAllowICMP"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIPSecExemptionsAllowICMP
    *
    * @param bool $val The firewallIPSecExemptionsAllowICMP
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIPSecExemptionsAllowICMP($val)
    {
        $this->_propDict["firewallIPSecExemptionsAllowICMP"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallIPSecExemptionsAllowRouterDiscovery
    *
    * @return bool The firewallIPSecExemptionsAllowRouterDiscovery
    */
    public function getFirewallIPSecExemptionsAllowRouterDiscovery()
    {
        if (array_key_exists("firewallIPSecExemptionsAllowRouterDiscovery", $this->_propDict)) {
            return $this->_propDict["firewallIPSecExemptionsAllowRouterDiscovery"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIPSecExemptionsAllowRouterDiscovery
    *
    * @param bool $val The firewallIPSecExemptionsAllowRouterDiscovery
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIPSecExemptionsAllowRouterDiscovery($val)
    {
        $this->_propDict["firewallIPSecExemptionsAllowRouterDiscovery"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallIPSecExemptionsAllowDHCP
    *
    * @return bool The firewallIPSecExemptionsAllowDHCP
    */
    public function getFirewallIPSecExemptionsAllowDHCP()
    {
        if (array_key_exists("firewallIPSecExemptionsAllowDHCP", $this->_propDict)) {
            return $this->_propDict["firewallIPSecExemptionsAllowDHCP"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIPSecExemptionsAllowDHCP
    *
    * @param bool $val The firewallIPSecExemptionsAllowDHCP
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIPSecExemptionsAllowDHCP($val)
    {
        $this->_propDict["firewallIPSecExemptionsAllowDHCP"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallCertificateRevocationListCheckMethod
    *
    * @return FirewallCertificateRevocationListCheckMethodType The firewallCertificateRevocationListCheckMethod
    */
    public function getFirewallCertificateRevocationListCheckMethod()
    {
        if (array_key_exists("firewallCertificateRevocationListCheckMethod", $this->_propDict)) {
            if (is_a($this->_propDict["firewallCertificateRevocationListCheckMethod"], "Microsoft\Graph\Model\FirewallCertificateRevocationListCheckMethodType")) {
                return $this->_propDict["firewallCertificateRevocationListCheckMethod"];
            } else {
                $this->_propDict["firewallCertificateRevocationListCheckMethod"] = new FirewallCertificateRevocationListCheckMethodType($this->_propDict["firewallCertificateRevocationListCheckMethod"]);
                return $this->_propDict["firewallCertificateRevocationListCheckMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallCertificateRevocationListCheckMethod
    *
    * @param FirewallCertificateRevocationListCheckMethodType $val The firewallCertificateRevocationListCheckMethod
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallCertificateRevocationListCheckMethod($val)
    {
        $this->_propDict["firewallCertificateRevocationListCheckMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallMergeKeyingModuleSettings
    *
    * @return bool The firewallMergeKeyingModuleSettings
    */
    public function getFirewallMergeKeyingModuleSettings()
    {
        if (array_key_exists("firewallMergeKeyingModuleSettings", $this->_propDict)) {
            return $this->_propDict["firewallMergeKeyingModuleSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallMergeKeyingModuleSettings
    *
    * @param bool $val The firewallMergeKeyingModuleSettings
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallMergeKeyingModuleSettings($val)
    {
        $this->_propDict["firewallMergeKeyingModuleSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallPacketQueueingMethod
    *
    * @return FirewallPacketQueueingMethodType The firewallPacketQueueingMethod
    */
    public function getFirewallPacketQueueingMethod()
    {
        if (array_key_exists("firewallPacketQueueingMethod", $this->_propDict)) {
            if (is_a($this->_propDict["firewallPacketQueueingMethod"], "Microsoft\Graph\Model\FirewallPacketQueueingMethodType")) {
                return $this->_propDict["firewallPacketQueueingMethod"];
            } else {
                $this->_propDict["firewallPacketQueueingMethod"] = new FirewallPacketQueueingMethodType($this->_propDict["firewallPacketQueueingMethod"]);
                return $this->_propDict["firewallPacketQueueingMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallPacketQueueingMethod
    *
    * @param FirewallPacketQueueingMethodType $val The firewallPacketQueueingMethod
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallPacketQueueingMethod($val)
    {
        $this->_propDict["firewallPacketQueueingMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallProfileDomain
    *
    * @return WindowsFirewallNetworkProfile The firewallProfileDomain
    */
    public function getFirewallProfileDomain()
    {
        if (array_key_exists("firewallProfileDomain", $this->_propDict)) {
            if (is_a($this->_propDict["firewallProfileDomain"], "Microsoft\Graph\Model\WindowsFirewallNetworkProfile")) {
                return $this->_propDict["firewallProfileDomain"];
            } else {
                $this->_propDict["firewallProfileDomain"] = new WindowsFirewallNetworkProfile($this->_propDict["firewallProfileDomain"]);
                return $this->_propDict["firewallProfileDomain"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallProfileDomain
    *
    * @param WindowsFirewallNetworkProfile $val The firewallProfileDomain
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallProfileDomain($val)
    {
        $this->_propDict["firewallProfileDomain"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallProfilePublic
    *
    * @return WindowsFirewallNetworkProfile The firewallProfilePublic
    */
    public function getFirewallProfilePublic()
    {
        if (array_key_exists("firewallProfilePublic", $this->_propDict)) {
            if (is_a($this->_propDict["firewallProfilePublic"], "Microsoft\Graph\Model\WindowsFirewallNetworkProfile")) {
                return $this->_propDict["firewallProfilePublic"];
            } else {
                $this->_propDict["firewallProfilePublic"] = new WindowsFirewallNetworkProfile($this->_propDict["firewallProfilePublic"]);
                return $this->_propDict["firewallProfilePublic"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallProfilePublic
    *
    * @param WindowsFirewallNetworkProfile $val The firewallProfilePublic
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallProfilePublic($val)
    {
        $this->_propDict["firewallProfilePublic"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallProfilePrivate
    *
    * @return WindowsFirewallNetworkProfile The firewallProfilePrivate
    */
    public function getFirewallProfilePrivate()
    {
        if (array_key_exists("firewallProfilePrivate", $this->_propDict)) {
            if (is_a($this->_propDict["firewallProfilePrivate"], "Microsoft\Graph\Model\WindowsFirewallNetworkProfile")) {
                return $this->_propDict["firewallProfilePrivate"];
            } else {
                $this->_propDict["firewallProfilePrivate"] = new WindowsFirewallNetworkProfile($this->_propDict["firewallProfilePrivate"]);
                return $this->_propDict["firewallProfilePrivate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallProfilePrivate
    *
    * @param WindowsFirewallNetworkProfile $val The firewallProfilePrivate
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallProfilePrivate($val)
    {
        $this->_propDict["firewallProfilePrivate"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderAttackSurfaceReductionExcludedPaths
    *
    * @return string The defenderAttackSurfaceReductionExcludedPaths
    */
    public function getDefenderAttackSurfaceReductionExcludedPaths()
    {
        if (array_key_exists("defenderAttackSurfaceReductionExcludedPaths", $this->_propDict)) {
            return $this->_propDict["defenderAttackSurfaceReductionExcludedPaths"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderAttackSurfaceReductionExcludedPaths
    *
    * @param string $val The defenderAttackSurfaceReductionExcludedPaths
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderAttackSurfaceReductionExcludedPaths($val)
    {
        $this->_propDict["defenderAttackSurfaceReductionExcludedPaths"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderGuardedFoldersAllowedAppPaths
    *
    * @return string The defenderGuardedFoldersAllowedAppPaths
    */
    public function getDefenderGuardedFoldersAllowedAppPaths()
    {
        if (array_key_exists("defenderGuardedFoldersAllowedAppPaths", $this->_propDict)) {
            return $this->_propDict["defenderGuardedFoldersAllowedAppPaths"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderGuardedFoldersAllowedAppPaths
    *
    * @param string $val The defenderGuardedFoldersAllowedAppPaths
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderGuardedFoldersAllowedAppPaths($val)
    {
        $this->_propDict["defenderGuardedFoldersAllowedAppPaths"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderAdditionalGuardedFolders
    *
    * @return string The defenderAdditionalGuardedFolders
    */
    public function getDefenderAdditionalGuardedFolders()
    {
        if (array_key_exists("defenderAdditionalGuardedFolders", $this->_propDict)) {
            return $this->_propDict["defenderAdditionalGuardedFolders"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderAdditionalGuardedFolders
    *
    * @param string $val The defenderAdditionalGuardedFolders
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderAdditionalGuardedFolders($val)
    {
        $this->_propDict["defenderAdditionalGuardedFolders"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderExploitProtectionXml
    *
    * @return \GuzzleHttp\Psr7\Stream The defenderExploitProtectionXml
    */
    public function getDefenderExploitProtectionXml()
    {
        if (array_key_exists("defenderExploitProtectionXml", $this->_propDict)) {
            if (is_a($this->_propDict["defenderExploitProtectionXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["defenderExploitProtectionXml"];
            } else {
                $this->_propDict["defenderExploitProtectionXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["defenderExploitProtectionXml"]);
                return $this->_propDict["defenderExploitProtectionXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderExploitProtectionXml
    *
    * @param \GuzzleHttp\Psr7\Stream $val The defenderExploitProtectionXml
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderExploitProtectionXml($val)
    {
        $this->_propDict["defenderExploitProtectionXml"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderExploitProtectionXmlFileName
    *
    * @return string The defenderExploitProtectionXmlFileName
    */
    public function getDefenderExploitProtectionXmlFileName()
    {
        if (array_key_exists("defenderExploitProtectionXmlFileName", $this->_propDict)) {
            return $this->_propDict["defenderExploitProtectionXmlFileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderExploitProtectionXmlFileName
    *
    * @param string $val The defenderExploitProtectionXmlFileName
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderExploitProtectionXmlFileName($val)
    {
        $this->_propDict["defenderExploitProtectionXmlFileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterBlockExploitProtectionOverride
    *
    * @return bool The defenderSecurityCenterBlockExploitProtectionOverride
    */
    public function getDefenderSecurityCenterBlockExploitProtectionOverride()
    {
        if (array_key_exists("defenderSecurityCenterBlockExploitProtectionOverride", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterBlockExploitProtectionOverride"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterBlockExploitProtectionOverride
    *
    * @param bool $val The defenderSecurityCenterBlockExploitProtectionOverride
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterBlockExploitProtectionOverride($val)
    {
        $this->_propDict["defenderSecurityCenterBlockExploitProtectionOverride"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appLockerApplicationControl
    *
    * @return AppLockerApplicationControlType The appLockerApplicationControl
    */
    public function getAppLockerApplicationControl()
    {
        if (array_key_exists("appLockerApplicationControl", $this->_propDict)) {
            if (is_a($this->_propDict["appLockerApplicationControl"], "Microsoft\Graph\Model\AppLockerApplicationControlType")) {
                return $this->_propDict["appLockerApplicationControl"];
            } else {
                $this->_propDict["appLockerApplicationControl"] = new AppLockerApplicationControlType($this->_propDict["appLockerApplicationControl"]);
                return $this->_propDict["appLockerApplicationControl"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appLockerApplicationControl
    *
    * @param AppLockerApplicationControlType $val The appLockerApplicationControl
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setAppLockerApplicationControl($val)
    {
        $this->_propDict["appLockerApplicationControl"] = $val;
        return $this;
    }
    
    /**
    * Gets the smartScreenEnableInShell
    *
    * @return bool The smartScreenEnableInShell
    */
    public function getSmartScreenEnableInShell()
    {
        if (array_key_exists("smartScreenEnableInShell", $this->_propDict)) {
            return $this->_propDict["smartScreenEnableInShell"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smartScreenEnableInShell
    *
    * @param bool $val The smartScreenEnableInShell
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setSmartScreenEnableInShell($val)
    {
        $this->_propDict["smartScreenEnableInShell"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smartScreenBlockOverrideForFiles
    *
    * @return bool The smartScreenBlockOverrideForFiles
    */
    public function getSmartScreenBlockOverrideForFiles()
    {
        if (array_key_exists("smartScreenBlockOverrideForFiles", $this->_propDict)) {
            return $this->_propDict["smartScreenBlockOverrideForFiles"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smartScreenBlockOverrideForFiles
    *
    * @param bool $val The smartScreenBlockOverrideForFiles
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setSmartScreenBlockOverrideForFiles($val)
    {
        $this->_propDict["smartScreenBlockOverrideForFiles"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardEnabled
    *
    * @return bool The applicationGuardEnabled
    */
    public function getApplicationGuardEnabled()
    {
        if (array_key_exists("applicationGuardEnabled", $this->_propDict)) {
            return $this->_propDict["applicationGuardEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardEnabled
    *
    * @param bool $val The applicationGuardEnabled
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardEnabled($val)
    {
        $this->_propDict["applicationGuardEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardBlockFileTransfer
    *
    * @return ApplicationGuardBlockFileTransferType The applicationGuardBlockFileTransfer
    */
    public function getApplicationGuardBlockFileTransfer()
    {
        if (array_key_exists("applicationGuardBlockFileTransfer", $this->_propDict)) {
            if (is_a($this->_propDict["applicationGuardBlockFileTransfer"], "Microsoft\Graph\Model\ApplicationGuardBlockFileTransferType")) {
                return $this->_propDict["applicationGuardBlockFileTransfer"];
            } else {
                $this->_propDict["applicationGuardBlockFileTransfer"] = new ApplicationGuardBlockFileTransferType($this->_propDict["applicationGuardBlockFileTransfer"]);
                return $this->_propDict["applicationGuardBlockFileTransfer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicationGuardBlockFileTransfer
    *
    * @param ApplicationGuardBlockFileTransferType $val The applicationGuardBlockFileTransfer
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardBlockFileTransfer($val)
    {
        $this->_propDict["applicationGuardBlockFileTransfer"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicationGuardBlockNonEnterpriseContent
    *
    * @return bool The applicationGuardBlockNonEnterpriseContent
    */
    public function getApplicationGuardBlockNonEnterpriseContent()
    {
        if (array_key_exists("applicationGuardBlockNonEnterpriseContent", $this->_propDict)) {
            return $this->_propDict["applicationGuardBlockNonEnterpriseContent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardBlockNonEnterpriseContent
    *
    * @param bool $val The applicationGuardBlockNonEnterpriseContent
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardBlockNonEnterpriseContent($val)
    {
        $this->_propDict["applicationGuardBlockNonEnterpriseContent"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPersistence
    *
    * @return bool The applicationGuardAllowPersistence
    */
    public function getApplicationGuardAllowPersistence()
    {
        if (array_key_exists("applicationGuardAllowPersistence", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPersistence"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPersistence
    *
    * @param bool $val The applicationGuardAllowPersistence
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPersistence($val)
    {
        $this->_propDict["applicationGuardAllowPersistence"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardForceAuditing
    *
    * @return bool The applicationGuardForceAuditing
    */
    public function getApplicationGuardForceAuditing()
    {
        if (array_key_exists("applicationGuardForceAuditing", $this->_propDict)) {
            return $this->_propDict["applicationGuardForceAuditing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardForceAuditing
    *
    * @param bool $val The applicationGuardForceAuditing
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardForceAuditing($val)
    {
        $this->_propDict["applicationGuardForceAuditing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardBlockClipboardSharing
    *
    * @return ApplicationGuardBlockClipboardSharingType The applicationGuardBlockClipboardSharing
    */
    public function getApplicationGuardBlockClipboardSharing()
    {
        if (array_key_exists("applicationGuardBlockClipboardSharing", $this->_propDict)) {
            if (is_a($this->_propDict["applicationGuardBlockClipboardSharing"], "Microsoft\Graph\Model\ApplicationGuardBlockClipboardSharingType")) {
                return $this->_propDict["applicationGuardBlockClipboardSharing"];
            } else {
                $this->_propDict["applicationGuardBlockClipboardSharing"] = new ApplicationGuardBlockClipboardSharingType($this->_propDict["applicationGuardBlockClipboardSharing"]);
                return $this->_propDict["applicationGuardBlockClipboardSharing"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicationGuardBlockClipboardSharing
    *
    * @param ApplicationGuardBlockClipboardSharingType $val The applicationGuardBlockClipboardSharing
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardBlockClipboardSharing($val)
    {
        $this->_propDict["applicationGuardBlockClipboardSharing"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPrintToPDF
    *
    * @return bool The applicationGuardAllowPrintToPDF
    */
    public function getApplicationGuardAllowPrintToPDF()
    {
        if (array_key_exists("applicationGuardAllowPrintToPDF", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPrintToPDF"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPrintToPDF
    *
    * @param bool $val The applicationGuardAllowPrintToPDF
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPrintToPDF($val)
    {
        $this->_propDict["applicationGuardAllowPrintToPDF"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPrintToXPS
    *
    * @return bool The applicationGuardAllowPrintToXPS
    */
    public function getApplicationGuardAllowPrintToXPS()
    {
        if (array_key_exists("applicationGuardAllowPrintToXPS", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPrintToXPS"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPrintToXPS
    *
    * @param bool $val The applicationGuardAllowPrintToXPS
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPrintToXPS($val)
    {
        $this->_propDict["applicationGuardAllowPrintToXPS"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPrintToLocalPrinters
    *
    * @return bool The applicationGuardAllowPrintToLocalPrinters
    */
    public function getApplicationGuardAllowPrintToLocalPrinters()
    {
        if (array_key_exists("applicationGuardAllowPrintToLocalPrinters", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPrintToLocalPrinters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPrintToLocalPrinters
    *
    * @param bool $val The applicationGuardAllowPrintToLocalPrinters
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPrintToLocalPrinters($val)
    {
        $this->_propDict["applicationGuardAllowPrintToLocalPrinters"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPrintToNetworkPrinters
    *
    * @return bool The applicationGuardAllowPrintToNetworkPrinters
    */
    public function getApplicationGuardAllowPrintToNetworkPrinters()
    {
        if (array_key_exists("applicationGuardAllowPrintToNetworkPrinters", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPrintToNetworkPrinters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPrintToNetworkPrinters
    *
    * @param bool $val The applicationGuardAllowPrintToNetworkPrinters
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPrintToNetworkPrinters($val)
    {
        $this->_propDict["applicationGuardAllowPrintToNetworkPrinters"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerDisableWarningForOtherDiskEncryption
    *
    * @return bool The bitLockerDisableWarningForOtherDiskEncryption
    */
    public function getBitLockerDisableWarningForOtherDiskEncryption()
    {
        if (array_key_exists("bitLockerDisableWarningForOtherDiskEncryption", $this->_propDict)) {
            return $this->_propDict["bitLockerDisableWarningForOtherDiskEncryption"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bitLockerDisableWarningForOtherDiskEncryption
    *
    * @param bool $val The bitLockerDisableWarningForOtherDiskEncryption
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerDisableWarningForOtherDiskEncryption($val)
    {
        $this->_propDict["bitLockerDisableWarningForOtherDiskEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerEnableStorageCardEncryptionOnMobile
    *
    * @return bool The bitLockerEnableStorageCardEncryptionOnMobile
    */
    public function getBitLockerEnableStorageCardEncryptionOnMobile()
    {
        if (array_key_exists("bitLockerEnableStorageCardEncryptionOnMobile", $this->_propDict)) {
            return $this->_propDict["bitLockerEnableStorageCardEncryptionOnMobile"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bitLockerEnableStorageCardEncryptionOnMobile
    *
    * @param bool $val The bitLockerEnableStorageCardEncryptionOnMobile
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerEnableStorageCardEncryptionOnMobile($val)
    {
        $this->_propDict["bitLockerEnableStorageCardEncryptionOnMobile"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerEncryptDevice
    *
    * @return bool The bitLockerEncryptDevice
    */
    public function getBitLockerEncryptDevice()
    {
        if (array_key_exists("bitLockerEncryptDevice", $this->_propDict)) {
            return $this->_propDict["bitLockerEncryptDevice"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bitLockerEncryptDevice
    *
    * @param bool $val The bitLockerEncryptDevice
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerEncryptDevice($val)
    {
        $this->_propDict["bitLockerEncryptDevice"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerRemovableDrivePolicy
    *
    * @return BitLockerRemovableDrivePolicy The bitLockerRemovableDrivePolicy
    */
    public function getBitLockerRemovableDrivePolicy()
    {
        if (array_key_exists("bitLockerRemovableDrivePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["bitLockerRemovableDrivePolicy"], "Microsoft\Graph\Model\BitLockerRemovableDrivePolicy")) {
                return $this->_propDict["bitLockerRemovableDrivePolicy"];
            } else {
                $this->_propDict["bitLockerRemovableDrivePolicy"] = new BitLockerRemovableDrivePolicy($this->_propDict["bitLockerRemovableDrivePolicy"]);
                return $this->_propDict["bitLockerRemovableDrivePolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bitLockerRemovableDrivePolicy
    *
    * @param BitLockerRemovableDrivePolicy $val The bitLockerRemovableDrivePolicy
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerRemovableDrivePolicy($val)
    {
        $this->_propDict["bitLockerRemovableDrivePolicy"] = $val;
        return $this;
    }
    
}