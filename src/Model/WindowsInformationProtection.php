<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtection File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* WindowsInformationProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsInformationProtection extends ManagedAppPolicy
{
    /**
    * Gets the azureRightsManagementServicesAllowed
    * Specifies whether to allow Azure RMS encryption for WIP
    *
    * @return bool|null The azureRightsManagementServicesAllowed
    */
    public function getAzureRightsManagementServicesAllowed()
    {
        if (array_key_exists("azureRightsManagementServicesAllowed", $this->_propDict)) {
            return $this->_propDict["azureRightsManagementServicesAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureRightsManagementServicesAllowed
    * Specifies whether to allow Azure RMS encryption for WIP
    *
    * @param bool $val The azureRightsManagementServicesAllowed
    *
    * @return WindowsInformationProtection
    */
    public function setAzureRightsManagementServicesAllowed($val)
    {
        $this->_propDict["azureRightsManagementServicesAllowed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the dataRecoveryCertificate
    * Specifies a recovery certificate that can be used for data recovery of encrypted files. This is the same as the data recovery agent(DRA) certificate for encrypting file system(EFS)
    *
    * @return WindowsInformationProtectionDataRecoveryCertificate|null The dataRecoveryCertificate
    */
    public function getDataRecoveryCertificate()
    {
        if (array_key_exists("dataRecoveryCertificate", $this->_propDict) && !is_null($this->_propDict["dataRecoveryCertificate"])) {
            if (is_a($this->_propDict["dataRecoveryCertificate"], "\Microsoft\Graph\Model\WindowsInformationProtectionDataRecoveryCertificate")) {
                return $this->_propDict["dataRecoveryCertificate"];
            } else {
                $this->_propDict["dataRecoveryCertificate"] = new WindowsInformationProtectionDataRecoveryCertificate($this->_propDict["dataRecoveryCertificate"]);
                return $this->_propDict["dataRecoveryCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dataRecoveryCertificate
    * Specifies a recovery certificate that can be used for data recovery of encrypted files. This is the same as the data recovery agent(DRA) certificate for encrypting file system(EFS)
    *
    * @param WindowsInformationProtectionDataRecoveryCertificate $val The dataRecoveryCertificate
    *
    * @return WindowsInformationProtection
    */
    public function setDataRecoveryCertificate($val)
    {
        $this->_propDict["dataRecoveryCertificate"] = $val;
        return $this;
    }
    
    /**
    * Gets the enforcementLevel
    * WIP enforcement level.See the Enum definition for supported values. Possible values are: noProtection, encryptAndAuditOnly, encryptAuditAndPrompt, encryptAuditAndBlock.
    *
    * @return WindowsInformationProtectionEnforcementLevel|null The enforcementLevel
    */
    public function getEnforcementLevel()
    {
        if (array_key_exists("enforcementLevel", $this->_propDict) && !is_null($this->_propDict["enforcementLevel"])) {
            if (is_a($this->_propDict["enforcementLevel"], "\Microsoft\Graph\Model\WindowsInformationProtectionEnforcementLevel")) {
                return $this->_propDict["enforcementLevel"];
            } else {
                $this->_propDict["enforcementLevel"] = new WindowsInformationProtectionEnforcementLevel($this->_propDict["enforcementLevel"]);
                return $this->_propDict["enforcementLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enforcementLevel
    * WIP enforcement level.See the Enum definition for supported values. Possible values are: noProtection, encryptAndAuditOnly, encryptAuditAndPrompt, encryptAuditAndBlock.
    *
    * @param WindowsInformationProtectionEnforcementLevel $val The enforcementLevel
    *
    * @return WindowsInformationProtection
    */
    public function setEnforcementLevel($val)
    {
        $this->_propDict["enforcementLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the enterpriseDomain
    * Primary enterprise domain
    *
    * @return string|null The enterpriseDomain
    */
    public function getEnterpriseDomain()
    {
        if (array_key_exists("enterpriseDomain", $this->_propDict)) {
            return $this->_propDict["enterpriseDomain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseDomain
    * Primary enterprise domain
    *
    * @param string $val The enterpriseDomain
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseDomain($val)
    {
        $this->_propDict["enterpriseDomain"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enterpriseInternalProxyServers
    * This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseProxiedDomains policy to force traffic to the matched domains through these proxies
     *
     * @return WindowsInformationProtectionResourceCollection[]|null The enterpriseInternalProxyServers
     */
    public function getEnterpriseInternalProxyServers()
    {
        if (array_key_exists('enterpriseInternalProxyServers', $this->_propDict) && !is_null($this->_propDict['enterpriseInternalProxyServers'])) {
            $enterpriseInternalProxyServers = [];
            if (count($this->_propDict['enterpriseInternalProxyServers']) > 0 && is_a($this->_propDict['enterpriseInternalProxyServers'][0], 'WindowsInformationProtectionResourceCollection')) {
                return $this->_propDict['enterpriseInternalProxyServers'];
            }
            foreach ($this->_propDict['enterpriseInternalProxyServers'] as $singleValue) {
                $enterpriseInternalProxyServers []= new WindowsInformationProtectionResourceCollection($singleValue);
            }
            $this->_propDict['enterpriseInternalProxyServers'] = $enterpriseInternalProxyServers;
            return $this->_propDict['enterpriseInternalProxyServers'];
        }
        return null;
    }
    
    /** 
    * Sets the enterpriseInternalProxyServers
    * This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseProxiedDomains policy to force traffic to the matched domains through these proxies
    *
    * @param WindowsInformationProtectionResourceCollection[] $val The enterpriseInternalProxyServers
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseInternalProxyServers($val)
    {
        $this->_propDict["enterpriseInternalProxyServers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enterpriseIPRanges
    * Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to
     *
     * @return WindowsInformationProtectionIPRangeCollection[]|null The enterpriseIPRanges
     */
    public function getEnterpriseIPRanges()
    {
        if (array_key_exists('enterpriseIPRanges', $this->_propDict) && !is_null($this->_propDict['enterpriseIPRanges'])) {
            $enterpriseIPRanges = [];
            if (count($this->_propDict['enterpriseIPRanges']) > 0 && is_a($this->_propDict['enterpriseIPRanges'][0], 'WindowsInformationProtectionIPRangeCollection')) {
                return $this->_propDict['enterpriseIPRanges'];
            }
            foreach ($this->_propDict['enterpriseIPRanges'] as $singleValue) {
                $enterpriseIPRanges []= new WindowsInformationProtectionIPRangeCollection($singleValue);
            }
            $this->_propDict['enterpriseIPRanges'] = $enterpriseIPRanges;
            return $this->_propDict['enterpriseIPRanges'];
        }
        return null;
    }
    
    /** 
    * Sets the enterpriseIPRanges
    * Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to
    *
    * @param WindowsInformationProtectionIPRangeCollection[] $val The enterpriseIPRanges
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseIPRanges($val)
    {
        $this->_propDict["enterpriseIPRanges"] = $val;
        return $this;
    }
    
    /**
    * Gets the enterpriseIPRangesAreAuthoritative
    * Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false
    *
    * @return bool|null The enterpriseIPRangesAreAuthoritative
    */
    public function getEnterpriseIPRangesAreAuthoritative()
    {
        if (array_key_exists("enterpriseIPRangesAreAuthoritative", $this->_propDict)) {
            return $this->_propDict["enterpriseIPRangesAreAuthoritative"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseIPRangesAreAuthoritative
    * Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false
    *
    * @param bool $val The enterpriseIPRangesAreAuthoritative
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseIPRangesAreAuthoritative($val)
    {
        $this->_propDict["enterpriseIPRangesAreAuthoritative"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the enterpriseNetworkDomainNames
    * This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected These locations will be considered a safe destination for enterprise data to be shared to
     *
     * @return WindowsInformationProtectionResourceCollection[]|null The enterpriseNetworkDomainNames
     */
    public function getEnterpriseNetworkDomainNames()
    {
        if (array_key_exists('enterpriseNetworkDomainNames', $this->_propDict) && !is_null($this->_propDict['enterpriseNetworkDomainNames'])) {
            $enterpriseNetworkDomainNames = [];
            if (count($this->_propDict['enterpriseNetworkDomainNames']) > 0 && is_a($this->_propDict['enterpriseNetworkDomainNames'][0], 'WindowsInformationProtectionResourceCollection')) {
                return $this->_propDict['enterpriseNetworkDomainNames'];
            }
            foreach ($this->_propDict['enterpriseNetworkDomainNames'] as $singleValue) {
                $enterpriseNetworkDomainNames []= new WindowsInformationProtectionResourceCollection($singleValue);
            }
            $this->_propDict['enterpriseNetworkDomainNames'] = $enterpriseNetworkDomainNames;
            return $this->_propDict['enterpriseNetworkDomainNames'];
        }
        return null;
    }
    
    /** 
    * Sets the enterpriseNetworkDomainNames
    * This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected These locations will be considered a safe destination for enterprise data to be shared to
    *
    * @param WindowsInformationProtectionResourceCollection[] $val The enterpriseNetworkDomainNames
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseNetworkDomainNames($val)
    {
        $this->_propDict["enterpriseNetworkDomainNames"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enterpriseProtectedDomainNames
    * List of enterprise domains to be protected
     *
     * @return WindowsInformationProtectionResourceCollection[]|null The enterpriseProtectedDomainNames
     */
    public function getEnterpriseProtectedDomainNames()
    {
        if (array_key_exists('enterpriseProtectedDomainNames', $this->_propDict) && !is_null($this->_propDict['enterpriseProtectedDomainNames'])) {
            $enterpriseProtectedDomainNames = [];
            if (count($this->_propDict['enterpriseProtectedDomainNames']) > 0 && is_a($this->_propDict['enterpriseProtectedDomainNames'][0], 'WindowsInformationProtectionResourceCollection')) {
                return $this->_propDict['enterpriseProtectedDomainNames'];
            }
            foreach ($this->_propDict['enterpriseProtectedDomainNames'] as $singleValue) {
                $enterpriseProtectedDomainNames []= new WindowsInformationProtectionResourceCollection($singleValue);
            }
            $this->_propDict['enterpriseProtectedDomainNames'] = $enterpriseProtectedDomainNames;
            return $this->_propDict['enterpriseProtectedDomainNames'];
        }
        return null;
    }
    
    /** 
    * Sets the enterpriseProtectedDomainNames
    * List of enterprise domains to be protected
    *
    * @param WindowsInformationProtectionResourceCollection[] $val The enterpriseProtectedDomainNames
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseProtectedDomainNames($val)
    {
        $this->_propDict["enterpriseProtectedDomainNames"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enterpriseProxiedDomains
    * Contains a list of Enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy
     *
     * @return WindowsInformationProtectionProxiedDomainCollection[]|null The enterpriseProxiedDomains
     */
    public function getEnterpriseProxiedDomains()
    {
        if (array_key_exists('enterpriseProxiedDomains', $this->_propDict) && !is_null($this->_propDict['enterpriseProxiedDomains'])) {
            $enterpriseProxiedDomains = [];
            if (count($this->_propDict['enterpriseProxiedDomains']) > 0 && is_a($this->_propDict['enterpriseProxiedDomains'][0], 'WindowsInformationProtectionProxiedDomainCollection')) {
                return $this->_propDict['enterpriseProxiedDomains'];
            }
            foreach ($this->_propDict['enterpriseProxiedDomains'] as $singleValue) {
                $enterpriseProxiedDomains []= new WindowsInformationProtectionProxiedDomainCollection($singleValue);
            }
            $this->_propDict['enterpriseProxiedDomains'] = $enterpriseProxiedDomains;
            return $this->_propDict['enterpriseProxiedDomains'];
        }
        return null;
    }
    
    /** 
    * Sets the enterpriseProxiedDomains
    * Contains a list of Enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy
    *
    * @param WindowsInformationProtectionProxiedDomainCollection[] $val The enterpriseProxiedDomains
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseProxiedDomains($val)
    {
        $this->_propDict["enterpriseProxiedDomains"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enterpriseProxyServers
    * This is a list of proxy servers. Any server not on this list is considered non-enterprise
     *
     * @return WindowsInformationProtectionResourceCollection[]|null The enterpriseProxyServers
     */
    public function getEnterpriseProxyServers()
    {
        if (array_key_exists('enterpriseProxyServers', $this->_propDict) && !is_null($this->_propDict['enterpriseProxyServers'])) {
            $enterpriseProxyServers = [];
            if (count($this->_propDict['enterpriseProxyServers']) > 0 && is_a($this->_propDict['enterpriseProxyServers'][0], 'WindowsInformationProtectionResourceCollection')) {
                return $this->_propDict['enterpriseProxyServers'];
            }
            foreach ($this->_propDict['enterpriseProxyServers'] as $singleValue) {
                $enterpriseProxyServers []= new WindowsInformationProtectionResourceCollection($singleValue);
            }
            $this->_propDict['enterpriseProxyServers'] = $enterpriseProxyServers;
            return $this->_propDict['enterpriseProxyServers'];
        }
        return null;
    }
    
    /** 
    * Sets the enterpriseProxyServers
    * This is a list of proxy servers. Any server not on this list is considered non-enterprise
    *
    * @param WindowsInformationProtectionResourceCollection[] $val The enterpriseProxyServers
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseProxyServers($val)
    {
        $this->_propDict["enterpriseProxyServers"] = $val;
        return $this;
    }
    
    /**
    * Gets the enterpriseProxyServersAreAuthoritative
    * Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
    *
    * @return bool|null The enterpriseProxyServersAreAuthoritative
    */
    public function getEnterpriseProxyServersAreAuthoritative()
    {
        if (array_key_exists("enterpriseProxyServersAreAuthoritative", $this->_propDict)) {
            return $this->_propDict["enterpriseProxyServersAreAuthoritative"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseProxyServersAreAuthoritative
    * Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
    *
    * @param bool $val The enterpriseProxyServersAreAuthoritative
    *
    * @return WindowsInformationProtection
    */
    public function setEnterpriseProxyServersAreAuthoritative($val)
    {
        $this->_propDict["enterpriseProxyServersAreAuthoritative"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the exemptApps
    * Exempt applications can also access enterprise data, but the data handled by those applications are not protected. This is because some critical enterprise applications may have compatibility problems with encrypted data.
     *
     * @return WindowsInformationProtectionApp[]|null The exemptApps
     */
    public function getExemptApps()
    {
        if (array_key_exists('exemptApps', $this->_propDict) && !is_null($this->_propDict['exemptApps'])) {
            $exemptApps = [];
            if (count($this->_propDict['exemptApps']) > 0 && is_a($this->_propDict['exemptApps'][0], 'WindowsInformationProtectionApp')) {
                return $this->_propDict['exemptApps'];
            }
            foreach ($this->_propDict['exemptApps'] as $singleValue) {
                $exemptApps []= new WindowsInformationProtectionApp($singleValue);
            }
            $this->_propDict['exemptApps'] = $exemptApps;
            return $this->_propDict['exemptApps'];
        }
        return null;
    }
    
    /** 
    * Sets the exemptApps
    * Exempt applications can also access enterprise data, but the data handled by those applications are not protected. This is because some critical enterprise applications may have compatibility problems with encrypted data.
    *
    * @param WindowsInformationProtectionApp[] $val The exemptApps
    *
    * @return WindowsInformationProtection
    */
    public function setExemptApps($val)
    {
        $this->_propDict["exemptApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the iconsVisible
    * Determines whether overlays are added to icons for WIP protected files in Explorer and enterprise only app tiles in the Start menu. Starting in Windows 10, version 1703 this setting also configures the visibility of the WIP icon in the title bar of a WIP-protected app
    *
    * @return bool|null The iconsVisible
    */
    public function getIconsVisible()
    {
        if (array_key_exists("iconsVisible", $this->_propDict)) {
            return $this->_propDict["iconsVisible"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iconsVisible
    * Determines whether overlays are added to icons for WIP protected files in Explorer and enterprise only app tiles in the Start menu. Starting in Windows 10, version 1703 this setting also configures the visibility of the WIP icon in the title bar of a WIP-protected app
    *
    * @param bool $val The iconsVisible
    *
    * @return WindowsInformationProtection
    */
    public function setIconsVisible($val)
    {
        $this->_propDict["iconsVisible"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the indexingEncryptedStoresOrItemsBlocked
    * This switch is for the Windows Search Indexer, to allow or disallow indexing of items
    *
    * @return bool|null The indexingEncryptedStoresOrItemsBlocked
    */
    public function getIndexingEncryptedStoresOrItemsBlocked()
    {
        if (array_key_exists("indexingEncryptedStoresOrItemsBlocked", $this->_propDict)) {
            return $this->_propDict["indexingEncryptedStoresOrItemsBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the indexingEncryptedStoresOrItemsBlocked
    * This switch is for the Windows Search Indexer, to allow or disallow indexing of items
    *
    * @param bool $val The indexingEncryptedStoresOrItemsBlocked
    *
    * @return WindowsInformationProtection
    */
    public function setIndexingEncryptedStoresOrItemsBlocked($val)
    {
        $this->_propDict["indexingEncryptedStoresOrItemsBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isAssigned
    * Indicates if the policy is deployed to any inclusion groups or not.
    *
    * @return bool|null The isAssigned
    */
    public function getIsAssigned()
    {
        if (array_key_exists("isAssigned", $this->_propDict)) {
            return $this->_propDict["isAssigned"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAssigned
    * Indicates if the policy is deployed to any inclusion groups or not.
    *
    * @param bool $val The isAssigned
    *
    * @return WindowsInformationProtection
    */
    public function setIsAssigned($val)
    {
        $this->_propDict["isAssigned"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the neutralDomainResources
    * List of domain names that can used for work or personal resource
     *
     * @return WindowsInformationProtectionResourceCollection[]|null The neutralDomainResources
     */
    public function getNeutralDomainResources()
    {
        if (array_key_exists('neutralDomainResources', $this->_propDict) && !is_null($this->_propDict['neutralDomainResources'])) {
            $neutralDomainResources = [];
            if (count($this->_propDict['neutralDomainResources']) > 0 && is_a($this->_propDict['neutralDomainResources'][0], 'WindowsInformationProtectionResourceCollection')) {
                return $this->_propDict['neutralDomainResources'];
            }
            foreach ($this->_propDict['neutralDomainResources'] as $singleValue) {
                $neutralDomainResources []= new WindowsInformationProtectionResourceCollection($singleValue);
            }
            $this->_propDict['neutralDomainResources'] = $neutralDomainResources;
            return $this->_propDict['neutralDomainResources'];
        }
        return null;
    }
    
    /** 
    * Sets the neutralDomainResources
    * List of domain names that can used for work or personal resource
    *
    * @param WindowsInformationProtectionResourceCollection[] $val The neutralDomainResources
    *
    * @return WindowsInformationProtection
    */
    public function setNeutralDomainResources($val)
    {
        $this->_propDict["neutralDomainResources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the protectedApps
    * Protected applications can access enterprise data and the data handled by those applications are protected with encryption
     *
     * @return WindowsInformationProtectionApp[]|null The protectedApps
     */
    public function getProtectedApps()
    {
        if (array_key_exists('protectedApps', $this->_propDict) && !is_null($this->_propDict['protectedApps'])) {
            $protectedApps = [];
            if (count($this->_propDict['protectedApps']) > 0 && is_a($this->_propDict['protectedApps'][0], 'WindowsInformationProtectionApp')) {
                return $this->_propDict['protectedApps'];
            }
            foreach ($this->_propDict['protectedApps'] as $singleValue) {
                $protectedApps []= new WindowsInformationProtectionApp($singleValue);
            }
            $this->_propDict['protectedApps'] = $protectedApps;
            return $this->_propDict['protectedApps'];
        }
        return null;
    }
    
    /** 
    * Sets the protectedApps
    * Protected applications can access enterprise data and the data handled by those applications are protected with encryption
    *
    * @param WindowsInformationProtectionApp[] $val The protectedApps
    *
    * @return WindowsInformationProtection
    */
    public function setProtectedApps($val)
    {
        $this->_propDict["protectedApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the protectionUnderLockConfigRequired
    * Specifies whether the protection under lock feature (also known as encrypt under pin) should be configured
    *
    * @return bool|null The protectionUnderLockConfigRequired
    */
    public function getProtectionUnderLockConfigRequired()
    {
        if (array_key_exists("protectionUnderLockConfigRequired", $this->_propDict)) {
            return $this->_propDict["protectionUnderLockConfigRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the protectionUnderLockConfigRequired
    * Specifies whether the protection under lock feature (also known as encrypt under pin) should be configured
    *
    * @param bool $val The protectionUnderLockConfigRequired
    *
    * @return WindowsInformationProtection
    */
    public function setProtectionUnderLockConfigRequired($val)
    {
        $this->_propDict["protectionUnderLockConfigRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the revokeOnUnenrollDisabled
    * This policy controls whether to revoke the WIP keys when a device unenrolls from the management service. If set to 1 (Don't revoke keys), the keys will not be revoked and the user will continue to have access to protected files after unenrollment. If the keys are not revoked, there will be no revoked file cleanup subsequently.
    *
    * @return bool|null The revokeOnUnenrollDisabled
    */
    public function getRevokeOnUnenrollDisabled()
    {
        if (array_key_exists("revokeOnUnenrollDisabled", $this->_propDict)) {
            return $this->_propDict["revokeOnUnenrollDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the revokeOnUnenrollDisabled
    * This policy controls whether to revoke the WIP keys when a device unenrolls from the management service. If set to 1 (Don't revoke keys), the keys will not be revoked and the user will continue to have access to protected files after unenrollment. If the keys are not revoked, there will be no revoked file cleanup subsequently.
    *
    * @param bool $val The revokeOnUnenrollDisabled
    *
    * @return WindowsInformationProtection
    */
    public function setRevokeOnUnenrollDisabled($val)
    {
        $this->_propDict["revokeOnUnenrollDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the rightsManagementServicesTemplateId
    * TemplateID GUID to use for RMS encryption. The RMS template allows the IT admin to configure the details about who has access to RMS-protected file and how long they have access
    *
    * @return string|null The rightsManagementServicesTemplateId
    */
    public function getRightsManagementServicesTemplateId()
    {
        if (array_key_exists("rightsManagementServicesTemplateId", $this->_propDict)) {
            return $this->_propDict["rightsManagementServicesTemplateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rightsManagementServicesTemplateId
    * TemplateID GUID to use for RMS encryption. The RMS template allows the IT admin to configure the details about who has access to RMS-protected file and how long they have access
    *
    * @param string $val The rightsManagementServicesTemplateId
    *
    * @return WindowsInformationProtection
    */
    public function setRightsManagementServicesTemplateId($val)
    {
        $this->_propDict["rightsManagementServicesTemplateId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the smbAutoEncryptedFileExtensions
    * Specifies a list of file extensions, so that files with these extensions are encrypted when copying from an SMB share within the corporate boundary
     *
     * @return WindowsInformationProtectionResourceCollection[]|null The smbAutoEncryptedFileExtensions
     */
    public function getSmbAutoEncryptedFileExtensions()
    {
        if (array_key_exists('smbAutoEncryptedFileExtensions', $this->_propDict) && !is_null($this->_propDict['smbAutoEncryptedFileExtensions'])) {
            $smbAutoEncryptedFileExtensions = [];
            if (count($this->_propDict['smbAutoEncryptedFileExtensions']) > 0 && is_a($this->_propDict['smbAutoEncryptedFileExtensions'][0], 'WindowsInformationProtectionResourceCollection')) {
                return $this->_propDict['smbAutoEncryptedFileExtensions'];
            }
            foreach ($this->_propDict['smbAutoEncryptedFileExtensions'] as $singleValue) {
                $smbAutoEncryptedFileExtensions []= new WindowsInformationProtectionResourceCollection($singleValue);
            }
            $this->_propDict['smbAutoEncryptedFileExtensions'] = $smbAutoEncryptedFileExtensions;
            return $this->_propDict['smbAutoEncryptedFileExtensions'];
        }
        return null;
    }
    
    /** 
    * Sets the smbAutoEncryptedFileExtensions
    * Specifies a list of file extensions, so that files with these extensions are encrypted when copying from an SMB share within the corporate boundary
    *
    * @param WindowsInformationProtectionResourceCollection[] $val The smbAutoEncryptedFileExtensions
    *
    * @return WindowsInformationProtection
    */
    public function setSmbAutoEncryptedFileExtensions($val)
    {
        $this->_propDict["smbAutoEncryptedFileExtensions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * Navigation property to list of security groups targeted for policy.
     *
     * @return TargetedManagedAppPolicyAssignment[]|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists('assignments', $this->_propDict) && !is_null($this->_propDict['assignments'])) {
            $assignments = [];
            if (count($this->_propDict['assignments']) > 0 && is_a($this->_propDict['assignments'][0], 'TargetedManagedAppPolicyAssignment')) {
                return $this->_propDict['assignments'];
            }
            foreach ($this->_propDict['assignments'] as $singleValue) {
                $assignments []= new TargetedManagedAppPolicyAssignment($singleValue);
            }
            $this->_propDict['assignments'] = $assignments;
            return $this->_propDict['assignments'];
        }
        return null;
    }
    
    /** 
    * Sets the assignments
    * Navigation property to list of security groups targeted for policy.
    *
    * @param TargetedManagedAppPolicyAssignment[] $val The assignments
    *
    * @return WindowsInformationProtection
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exemptAppLockerFiles
    * Another way to input exempt apps through xml files
     *
     * @return WindowsInformationProtectionAppLockerFile[]|null The exemptAppLockerFiles
     */
    public function getExemptAppLockerFiles()
    {
        if (array_key_exists('exemptAppLockerFiles', $this->_propDict) && !is_null($this->_propDict['exemptAppLockerFiles'])) {
            $exemptAppLockerFiles = [];
            if (count($this->_propDict['exemptAppLockerFiles']) > 0 && is_a($this->_propDict['exemptAppLockerFiles'][0], 'WindowsInformationProtectionAppLockerFile')) {
                return $this->_propDict['exemptAppLockerFiles'];
            }
            foreach ($this->_propDict['exemptAppLockerFiles'] as $singleValue) {
                $exemptAppLockerFiles []= new WindowsInformationProtectionAppLockerFile($singleValue);
            }
            $this->_propDict['exemptAppLockerFiles'] = $exemptAppLockerFiles;
            return $this->_propDict['exemptAppLockerFiles'];
        }
        return null;
    }
    
    /** 
    * Sets the exemptAppLockerFiles
    * Another way to input exempt apps through xml files
    *
    * @param WindowsInformationProtectionAppLockerFile[] $val The exemptAppLockerFiles
    *
    * @return WindowsInformationProtection
    */
    public function setExemptAppLockerFiles($val)
    {
        $this->_propDict["exemptAppLockerFiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the protectedAppLockerFiles
    * Another way to input protected apps through xml files
     *
     * @return WindowsInformationProtectionAppLockerFile[]|null The protectedAppLockerFiles
     */
    public function getProtectedAppLockerFiles()
    {
        if (array_key_exists('protectedAppLockerFiles', $this->_propDict) && !is_null($this->_propDict['protectedAppLockerFiles'])) {
            $protectedAppLockerFiles = [];
            if (count($this->_propDict['protectedAppLockerFiles']) > 0 && is_a($this->_propDict['protectedAppLockerFiles'][0], 'WindowsInformationProtectionAppLockerFile')) {
                return $this->_propDict['protectedAppLockerFiles'];
            }
            foreach ($this->_propDict['protectedAppLockerFiles'] as $singleValue) {
                $protectedAppLockerFiles []= new WindowsInformationProtectionAppLockerFile($singleValue);
            }
            $this->_propDict['protectedAppLockerFiles'] = $protectedAppLockerFiles;
            return $this->_propDict['protectedAppLockerFiles'];
        }
        return null;
    }
    
    /** 
    * Sets the protectedAppLockerFiles
    * Another way to input protected apps through xml files
    *
    * @param WindowsInformationProtectionAppLockerFile[] $val The protectedAppLockerFiles
    *
    * @return WindowsInformationProtection
    */
    public function setProtectedAppLockerFiles($val)
    {
        $this->_propDict["protectedAppLockerFiles"] = $val;
        return $this;
    }
    
}
