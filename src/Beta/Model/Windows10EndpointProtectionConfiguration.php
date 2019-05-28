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
namespace Microsoft\Graph\Beta\Model;

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
    * Gets the dmaGuardDeviceEnumerationPolicy
    * This policy is intended to provide additional security against external DMA capable devices. It allows for more control over the enumeration of external DMA capable devices incompatible with DMA Remapping/device memory isolation and sandboxing. This policy only takes effect when Kernel DMA Protection is supported and enabled by the system firmware. Kernel DMA Protection is a platform feature that cannot be controlled via policy or by end user. It has to be supported by the system at the time of manufacturing. To check if the system supports Kernel DMA Protection, please check the Kernel DMA Protection field in the Summary page of MSINFO32.exe.
    *
    * @return DmaGuardDeviceEnumerationPolicyType The dmaGuardDeviceEnumerationPolicy
    */
    public function getDmaGuardDeviceEnumerationPolicy()
    {
        if (array_key_exists("dmaGuardDeviceEnumerationPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["dmaGuardDeviceEnumerationPolicy"], "Microsoft\Graph\Beta\Model\DmaGuardDeviceEnumerationPolicyType")) {
                return $this->_propDict["dmaGuardDeviceEnumerationPolicy"];
            } else {
                $this->_propDict["dmaGuardDeviceEnumerationPolicy"] = new DmaGuardDeviceEnumerationPolicyType($this->_propDict["dmaGuardDeviceEnumerationPolicy"]);
                return $this->_propDict["dmaGuardDeviceEnumerationPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dmaGuardDeviceEnumerationPolicy
    * This policy is intended to provide additional security against external DMA capable devices. It allows for more control over the enumeration of external DMA capable devices incompatible with DMA Remapping/device memory isolation and sandboxing. This policy only takes effect when Kernel DMA Protection is supported and enabled by the system firmware. Kernel DMA Protection is a platform feature that cannot be controlled via policy or by end user. It has to be supported by the system at the time of manufacturing. To check if the system supports Kernel DMA Protection, please check the Kernel DMA Protection field in the Summary page of MSINFO32.exe.
    *
    * @param DmaGuardDeviceEnumerationPolicyType $val The dmaGuardDeviceEnumerationPolicy
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDmaGuardDeviceEnumerationPolicy($val)
    {
        $this->_propDict["dmaGuardDeviceEnumerationPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the firewallRules
    * Configures the firewall rule settings. This collection can contain a maximum of 150 elements.
     *
     * @return array The firewallRules
     */
    public function getFirewallRules()
    {
        if (array_key_exists("firewallRules", $this->_propDict)) {
           return $this->_propDict["firewallRules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the firewallRules
    * Configures the firewall rule settings. This collection can contain a maximum of 150 elements.
    *
    * @param WindowsFirewallRule $val The firewallRules
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallRules($val)
    {
		$this->_propDict["firewallRules"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsAccessCredentialManagerAsTrustedCaller
    * This user right is used by Credential Manager during Backup/Restore. Users' saved credentials might be compromised if this privilege is given to other entities. Only states NotConfigured and Allowed are supported
    *
    * @return DeviceManagementUserRightsSetting The userRightsAccessCredentialManagerAsTrustedCaller
    */
    public function getUserRightsAccessCredentialManagerAsTrustedCaller()
    {
        if (array_key_exists("userRightsAccessCredentialManagerAsTrustedCaller", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsAccessCredentialManagerAsTrustedCaller"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsAccessCredentialManagerAsTrustedCaller"];
            } else {
                $this->_propDict["userRightsAccessCredentialManagerAsTrustedCaller"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsAccessCredentialManagerAsTrustedCaller"]);
                return $this->_propDict["userRightsAccessCredentialManagerAsTrustedCaller"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsAccessCredentialManagerAsTrustedCaller
    * This user right is used by Credential Manager during Backup/Restore. Users' saved credentials might be compromised if this privilege is given to other entities. Only states NotConfigured and Allowed are supported
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsAccessCredentialManagerAsTrustedCaller
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsAccessCredentialManagerAsTrustedCaller($val)
    {
        $this->_propDict["userRightsAccessCredentialManagerAsTrustedCaller"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsAllowAccessFromNetwork
    * This user right determines which users and groups are allowed to connect to the computer over the network. State Allowed is supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsAllowAccessFromNetwork
    */
    public function getUserRightsAllowAccessFromNetwork()
    {
        if (array_key_exists("userRightsAllowAccessFromNetwork", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsAllowAccessFromNetwork"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsAllowAccessFromNetwork"];
            } else {
                $this->_propDict["userRightsAllowAccessFromNetwork"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsAllowAccessFromNetwork"]);
                return $this->_propDict["userRightsAllowAccessFromNetwork"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsAllowAccessFromNetwork
    * This user right determines which users and groups are allowed to connect to the computer over the network. State Allowed is supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsAllowAccessFromNetwork
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsAllowAccessFromNetwork($val)
    {
        $this->_propDict["userRightsAllowAccessFromNetwork"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsBlockAccessFromNetwork
    * This user right determines which users and groups are block from connecting to the computer over the network. State Block is supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsBlockAccessFromNetwork
    */
    public function getUserRightsBlockAccessFromNetwork()
    {
        if (array_key_exists("userRightsBlockAccessFromNetwork", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsBlockAccessFromNetwork"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsBlockAccessFromNetwork"];
            } else {
                $this->_propDict["userRightsBlockAccessFromNetwork"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsBlockAccessFromNetwork"]);
                return $this->_propDict["userRightsBlockAccessFromNetwork"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsBlockAccessFromNetwork
    * This user right determines which users and groups are block from connecting to the computer over the network. State Block is supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsBlockAccessFromNetwork
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsBlockAccessFromNetwork($val)
    {
        $this->_propDict["userRightsBlockAccessFromNetwork"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsActAsPartOfTheOperatingSystem
    * This user right allows a process to impersonate any user without authentication. The process can therefore gain access to the same local resources as that user. Only states NotConfigured and Allowed are supported
    *
    * @return DeviceManagementUserRightsSetting The userRightsActAsPartOfTheOperatingSystem
    */
    public function getUserRightsActAsPartOfTheOperatingSystem()
    {
        if (array_key_exists("userRightsActAsPartOfTheOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsActAsPartOfTheOperatingSystem"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsActAsPartOfTheOperatingSystem"];
            } else {
                $this->_propDict["userRightsActAsPartOfTheOperatingSystem"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsActAsPartOfTheOperatingSystem"]);
                return $this->_propDict["userRightsActAsPartOfTheOperatingSystem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsActAsPartOfTheOperatingSystem
    * This user right allows a process to impersonate any user without authentication. The process can therefore gain access to the same local resources as that user. Only states NotConfigured and Allowed are supported
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsActAsPartOfTheOperatingSystem
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsActAsPartOfTheOperatingSystem($val)
    {
        $this->_propDict["userRightsActAsPartOfTheOperatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsLocalLogOn
    * This user right determines which users can log on to the computer. States NotConfigured, Allowed and Blocked are all supported 
    *
    * @return DeviceManagementUserRightsSetting The userRightsLocalLogOn
    */
    public function getUserRightsLocalLogOn()
    {
        if (array_key_exists("userRightsLocalLogOn", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsLocalLogOn"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsLocalLogOn"];
            } else {
                $this->_propDict["userRightsLocalLogOn"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsLocalLogOn"]);
                return $this->_propDict["userRightsLocalLogOn"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsLocalLogOn
    * This user right determines which users can log on to the computer. States NotConfigured, Allowed and Blocked are all supported 
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsLocalLogOn
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsLocalLogOn($val)
    {
        $this->_propDict["userRightsLocalLogOn"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsBackupData
    * This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when backing up files and directories. Only states NotConfigured and Allowed are supported
    *
    * @return DeviceManagementUserRightsSetting The userRightsBackupData
    */
    public function getUserRightsBackupData()
    {
        if (array_key_exists("userRightsBackupData", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsBackupData"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsBackupData"];
            } else {
                $this->_propDict["userRightsBackupData"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsBackupData"]);
                return $this->_propDict["userRightsBackupData"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsBackupData
    * This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when backing up files and directories. Only states NotConfigured and Allowed are supported
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsBackupData
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsBackupData($val)
    {
        $this->_propDict["userRightsBackupData"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsChangeSystemTime
    * This user right determines which users and groups can change the time and date on the internal clock of the computer. Only states NotConfigured and Allowed are supported
    *
    * @return DeviceManagementUserRightsSetting The userRightsChangeSystemTime
    */
    public function getUserRightsChangeSystemTime()
    {
        if (array_key_exists("userRightsChangeSystemTime", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsChangeSystemTime"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsChangeSystemTime"];
            } else {
                $this->_propDict["userRightsChangeSystemTime"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsChangeSystemTime"]);
                return $this->_propDict["userRightsChangeSystemTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsChangeSystemTime
    * This user right determines which users and groups can change the time and date on the internal clock of the computer. Only states NotConfigured and Allowed are supported
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsChangeSystemTime
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsChangeSystemTime($val)
    {
        $this->_propDict["userRightsChangeSystemTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsCreateGlobalObjects
    * This security setting determines whether users can create global objects that are available to all sessions. Users who can create global objects could affect processes that run under other users' sessions, which could lead to application failure or data corruption. Only states NotConfigured and Allowed are supported
    *
    * @return DeviceManagementUserRightsSetting The userRightsCreateGlobalObjects
    */
    public function getUserRightsCreateGlobalObjects()
    {
        if (array_key_exists("userRightsCreateGlobalObjects", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsCreateGlobalObjects"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsCreateGlobalObjects"];
            } else {
                $this->_propDict["userRightsCreateGlobalObjects"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsCreateGlobalObjects"]);
                return $this->_propDict["userRightsCreateGlobalObjects"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsCreateGlobalObjects
    * This security setting determines whether users can create global objects that are available to all sessions. Users who can create global objects could affect processes that run under other users' sessions, which could lead to application failure or data corruption. Only states NotConfigured and Allowed are supported
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsCreateGlobalObjects
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsCreateGlobalObjects($val)
    {
        $this->_propDict["userRightsCreateGlobalObjects"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsCreatePageFile
    * This user right determines which users and groups can call an internal API to create and change the size of a page file. Only states NotConfigured and Allowed are supported
    *
    * @return DeviceManagementUserRightsSetting The userRightsCreatePageFile
    */
    public function getUserRightsCreatePageFile()
    {
        if (array_key_exists("userRightsCreatePageFile", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsCreatePageFile"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsCreatePageFile"];
            } else {
                $this->_propDict["userRightsCreatePageFile"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsCreatePageFile"]);
                return $this->_propDict["userRightsCreatePageFile"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsCreatePageFile
    * This user right determines which users and groups can call an internal API to create and change the size of a page file. Only states NotConfigured and Allowed are supported
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsCreatePageFile
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsCreatePageFile($val)
    {
        $this->_propDict["userRightsCreatePageFile"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsCreatePermanentSharedObjects
    * This user right determines which accounts can be used by processes to create a directory object using the object manager. Only states NotConfigured and Allowed are supported
    *
    * @return DeviceManagementUserRightsSetting The userRightsCreatePermanentSharedObjects
    */
    public function getUserRightsCreatePermanentSharedObjects()
    {
        if (array_key_exists("userRightsCreatePermanentSharedObjects", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsCreatePermanentSharedObjects"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsCreatePermanentSharedObjects"];
            } else {
                $this->_propDict["userRightsCreatePermanentSharedObjects"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsCreatePermanentSharedObjects"]);
                return $this->_propDict["userRightsCreatePermanentSharedObjects"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsCreatePermanentSharedObjects
    * This user right determines which accounts can be used by processes to create a directory object using the object manager. Only states NotConfigured and Allowed are supported
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsCreatePermanentSharedObjects
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsCreatePermanentSharedObjects($val)
    {
        $this->_propDict["userRightsCreatePermanentSharedObjects"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsCreateSymbolicLinks
    * This user right determines if the user can create a symbolic link from the computer to which they are logged on. Only states NotConfigured and Allowed are supported
    *
    * @return DeviceManagementUserRightsSetting The userRightsCreateSymbolicLinks
    */
    public function getUserRightsCreateSymbolicLinks()
    {
        if (array_key_exists("userRightsCreateSymbolicLinks", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsCreateSymbolicLinks"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsCreateSymbolicLinks"];
            } else {
                $this->_propDict["userRightsCreateSymbolicLinks"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsCreateSymbolicLinks"]);
                return $this->_propDict["userRightsCreateSymbolicLinks"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsCreateSymbolicLinks
    * This user right determines if the user can create a symbolic link from the computer to which they are logged on. Only states NotConfigured and Allowed are supported
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsCreateSymbolicLinks
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsCreateSymbolicLinks($val)
    {
        $this->_propDict["userRightsCreateSymbolicLinks"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsCreateToken
    * This user right determines which users/groups can be used by processes to create a token that can then be used to get access to any local resources when the process uses an internal API to create an access token. Only states NotConfigured and Allowed are supported
    *
    * @return DeviceManagementUserRightsSetting The userRightsCreateToken
    */
    public function getUserRightsCreateToken()
    {
        if (array_key_exists("userRightsCreateToken", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsCreateToken"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsCreateToken"];
            } else {
                $this->_propDict["userRightsCreateToken"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsCreateToken"]);
                return $this->_propDict["userRightsCreateToken"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsCreateToken
    * This user right determines which users/groups can be used by processes to create a token that can then be used to get access to any local resources when the process uses an internal API to create an access token. Only states NotConfigured and Allowed are supported
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsCreateToken
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsCreateToken($val)
    {
        $this->_propDict["userRightsCreateToken"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsDebugPrograms
    * This user right determines which users can attach a debugger to any process or to the kernel. Only states NotConfigured and Allowed are supported
    *
    * @return DeviceManagementUserRightsSetting The userRightsDebugPrograms
    */
    public function getUserRightsDebugPrograms()
    {
        if (array_key_exists("userRightsDebugPrograms", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsDebugPrograms"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsDebugPrograms"];
            } else {
                $this->_propDict["userRightsDebugPrograms"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsDebugPrograms"]);
                return $this->_propDict["userRightsDebugPrograms"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsDebugPrograms
    * This user right determines which users can attach a debugger to any process or to the kernel. Only states NotConfigured and Allowed are supported
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsDebugPrograms
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsDebugPrograms($val)
    {
        $this->_propDict["userRightsDebugPrograms"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsRemoteDesktopServicesLogOn
    * This user right determines which users and groups are prohibited from logging on as a Remote Desktop Services client. Only states NotConfigured and Blocked are supported
    *
    * @return DeviceManagementUserRightsSetting The userRightsRemoteDesktopServicesLogOn
    */
    public function getUserRightsRemoteDesktopServicesLogOn()
    {
        if (array_key_exists("userRightsRemoteDesktopServicesLogOn", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsRemoteDesktopServicesLogOn"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsRemoteDesktopServicesLogOn"];
            } else {
                $this->_propDict["userRightsRemoteDesktopServicesLogOn"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsRemoteDesktopServicesLogOn"]);
                return $this->_propDict["userRightsRemoteDesktopServicesLogOn"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsRemoteDesktopServicesLogOn
    * This user right determines which users and groups are prohibited from logging on as a Remote Desktop Services client. Only states NotConfigured and Blocked are supported
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsRemoteDesktopServicesLogOn
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsRemoteDesktopServicesLogOn($val)
    {
        $this->_propDict["userRightsRemoteDesktopServicesLogOn"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsDelegation
    * This user right determines which users can set the Trusted for Delegation setting on a user or computer object. Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsDelegation
    */
    public function getUserRightsDelegation()
    {
        if (array_key_exists("userRightsDelegation", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsDelegation"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsDelegation"];
            } else {
                $this->_propDict["userRightsDelegation"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsDelegation"]);
                return $this->_propDict["userRightsDelegation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsDelegation
    * This user right determines which users can set the Trusted for Delegation setting on a user or computer object. Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsDelegation
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsDelegation($val)
    {
        $this->_propDict["userRightsDelegation"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsGenerateSecurityAudits
    * This user right determines which accounts can be used by a process to add entries to the security log. The security log is used to trace unauthorized system access.  Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsGenerateSecurityAudits
    */
    public function getUserRightsGenerateSecurityAudits()
    {
        if (array_key_exists("userRightsGenerateSecurityAudits", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsGenerateSecurityAudits"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsGenerateSecurityAudits"];
            } else {
                $this->_propDict["userRightsGenerateSecurityAudits"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsGenerateSecurityAudits"]);
                return $this->_propDict["userRightsGenerateSecurityAudits"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsGenerateSecurityAudits
    * This user right determines which accounts can be used by a process to add entries to the security log. The security log is used to trace unauthorized system access.  Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsGenerateSecurityAudits
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsGenerateSecurityAudits($val)
    {
        $this->_propDict["userRightsGenerateSecurityAudits"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsImpersonateClient
    * Assigning this user right to a user allows programs running on behalf of that user to impersonate a client. Requiring this user right for this kind of impersonation prevents an unauthorized user from convincing a client to connect to a service that they have created and then impersonating that client, which can elevate the unauthorized user's permissions to administrative or system levels. Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsImpersonateClient
    */
    public function getUserRightsImpersonateClient()
    {
        if (array_key_exists("userRightsImpersonateClient", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsImpersonateClient"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsImpersonateClient"];
            } else {
                $this->_propDict["userRightsImpersonateClient"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsImpersonateClient"]);
                return $this->_propDict["userRightsImpersonateClient"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsImpersonateClient
    * Assigning this user right to a user allows programs running on behalf of that user to impersonate a client. Requiring this user right for this kind of impersonation prevents an unauthorized user from convincing a client to connect to a service that they have created and then impersonating that client, which can elevate the unauthorized user's permissions to administrative or system levels. Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsImpersonateClient
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsImpersonateClient($val)
    {
        $this->_propDict["userRightsImpersonateClient"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsIncreaseSchedulingPriority
    * This user right determines which accounts can use a process with Write Property access to another process to increase the execution priority assigned to the other process. Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsIncreaseSchedulingPriority
    */
    public function getUserRightsIncreaseSchedulingPriority()
    {
        if (array_key_exists("userRightsIncreaseSchedulingPriority", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsIncreaseSchedulingPriority"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsIncreaseSchedulingPriority"];
            } else {
                $this->_propDict["userRightsIncreaseSchedulingPriority"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsIncreaseSchedulingPriority"]);
                return $this->_propDict["userRightsIncreaseSchedulingPriority"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsIncreaseSchedulingPriority
    * This user right determines which accounts can use a process with Write Property access to another process to increase the execution priority assigned to the other process. Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsIncreaseSchedulingPriority
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsIncreaseSchedulingPriority($val)
    {
        $this->_propDict["userRightsIncreaseSchedulingPriority"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsLoadUnloadDrivers
    * This user right determines which users can dynamically load and unload device drivers or other code in to kernel mode. Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsLoadUnloadDrivers
    */
    public function getUserRightsLoadUnloadDrivers()
    {
        if (array_key_exists("userRightsLoadUnloadDrivers", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsLoadUnloadDrivers"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsLoadUnloadDrivers"];
            } else {
                $this->_propDict["userRightsLoadUnloadDrivers"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsLoadUnloadDrivers"]);
                return $this->_propDict["userRightsLoadUnloadDrivers"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsLoadUnloadDrivers
    * This user right determines which users can dynamically load and unload device drivers or other code in to kernel mode. Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsLoadUnloadDrivers
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsLoadUnloadDrivers($val)
    {
        $this->_propDict["userRightsLoadUnloadDrivers"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsLockMemory
    * This user right determines which accounts can use a process to keep data in physical memory, which prevents the system from paging the data to virtual memory on disk. Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsLockMemory
    */
    public function getUserRightsLockMemory()
    {
        if (array_key_exists("userRightsLockMemory", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsLockMemory"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsLockMemory"];
            } else {
                $this->_propDict["userRightsLockMemory"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsLockMemory"]);
                return $this->_propDict["userRightsLockMemory"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsLockMemory
    * This user right determines which accounts can use a process to keep data in physical memory, which prevents the system from paging the data to virtual memory on disk. Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsLockMemory
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsLockMemory($val)
    {
        $this->_propDict["userRightsLockMemory"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsManageAuditingAndSecurityLogs
    * This user right determines which users can specify object access auditing options for individual resources, such as files, Active Directory objects, and registry keys. Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsManageAuditingAndSecurityLogs
    */
    public function getUserRightsManageAuditingAndSecurityLogs()
    {
        if (array_key_exists("userRightsManageAuditingAndSecurityLogs", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsManageAuditingAndSecurityLogs"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsManageAuditingAndSecurityLogs"];
            } else {
                $this->_propDict["userRightsManageAuditingAndSecurityLogs"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsManageAuditingAndSecurityLogs"]);
                return $this->_propDict["userRightsManageAuditingAndSecurityLogs"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsManageAuditingAndSecurityLogs
    * This user right determines which users can specify object access auditing options for individual resources, such as files, Active Directory objects, and registry keys. Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsManageAuditingAndSecurityLogs
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsManageAuditingAndSecurityLogs($val)
    {
        $this->_propDict["userRightsManageAuditingAndSecurityLogs"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsManageVolumes
    * This user right determines which users and groups can run maintenance tasks on a volume, such as remote defragmentation. Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsManageVolumes
    */
    public function getUserRightsManageVolumes()
    {
        if (array_key_exists("userRightsManageVolumes", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsManageVolumes"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsManageVolumes"];
            } else {
                $this->_propDict["userRightsManageVolumes"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsManageVolumes"]);
                return $this->_propDict["userRightsManageVolumes"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsManageVolumes
    * This user right determines which users and groups can run maintenance tasks on a volume, such as remote defragmentation. Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsManageVolumes
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsManageVolumes($val)
    {
        $this->_propDict["userRightsManageVolumes"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsModifyFirmwareEnvironment
    * This user right determines who can modify firmware environment values. Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsModifyFirmwareEnvironment
    */
    public function getUserRightsModifyFirmwareEnvironment()
    {
        if (array_key_exists("userRightsModifyFirmwareEnvironment", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsModifyFirmwareEnvironment"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsModifyFirmwareEnvironment"];
            } else {
                $this->_propDict["userRightsModifyFirmwareEnvironment"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsModifyFirmwareEnvironment"]);
                return $this->_propDict["userRightsModifyFirmwareEnvironment"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsModifyFirmwareEnvironment
    * This user right determines who can modify firmware environment values. Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsModifyFirmwareEnvironment
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsModifyFirmwareEnvironment($val)
    {
        $this->_propDict["userRightsModifyFirmwareEnvironment"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsModifyObjectLabels
    * This user right determines which user accounts can modify the integrity label of objects, such as files, registry keys, or processes owned by other users. Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsModifyObjectLabels
    */
    public function getUserRightsModifyObjectLabels()
    {
        if (array_key_exists("userRightsModifyObjectLabels", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsModifyObjectLabels"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsModifyObjectLabels"];
            } else {
                $this->_propDict["userRightsModifyObjectLabels"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsModifyObjectLabels"]);
                return $this->_propDict["userRightsModifyObjectLabels"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsModifyObjectLabels
    * This user right determines which user accounts can modify the integrity label of objects, such as files, registry keys, or processes owned by other users. Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsModifyObjectLabels
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsModifyObjectLabels($val)
    {
        $this->_propDict["userRightsModifyObjectLabels"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsProfileSingleProcess
    * This user right determines which users can use performance monitoring tools to monitor the performance of system processes. Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsProfileSingleProcess
    */
    public function getUserRightsProfileSingleProcess()
    {
        if (array_key_exists("userRightsProfileSingleProcess", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsProfileSingleProcess"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsProfileSingleProcess"];
            } else {
                $this->_propDict["userRightsProfileSingleProcess"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsProfileSingleProcess"]);
                return $this->_propDict["userRightsProfileSingleProcess"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsProfileSingleProcess
    * This user right determines which users can use performance monitoring tools to monitor the performance of system processes. Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsProfileSingleProcess
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsProfileSingleProcess($val)
    {
        $this->_propDict["userRightsProfileSingleProcess"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsRemoteShutdown
    * This user right determines which users are allowed to shut down a computer from a remote location on the network. Misuse of this user right can result in a denial of service. Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsRemoteShutdown
    */
    public function getUserRightsRemoteShutdown()
    {
        if (array_key_exists("userRightsRemoteShutdown", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsRemoteShutdown"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsRemoteShutdown"];
            } else {
                $this->_propDict["userRightsRemoteShutdown"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsRemoteShutdown"]);
                return $this->_propDict["userRightsRemoteShutdown"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsRemoteShutdown
    * This user right determines which users are allowed to shut down a computer from a remote location on the network. Misuse of this user right can result in a denial of service. Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsRemoteShutdown
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsRemoteShutdown($val)
    {
        $this->_propDict["userRightsRemoteShutdown"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsRestoreData
    * This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when restoring backed up files and directories, and determines which users can set any valid security principal as the owner of an object. Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsRestoreData
    */
    public function getUserRightsRestoreData()
    {
        if (array_key_exists("userRightsRestoreData", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsRestoreData"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsRestoreData"];
            } else {
                $this->_propDict["userRightsRestoreData"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsRestoreData"]);
                return $this->_propDict["userRightsRestoreData"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsRestoreData
    * This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when restoring backed up files and directories, and determines which users can set any valid security principal as the owner of an object. Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsRestoreData
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsRestoreData($val)
    {
        $this->_propDict["userRightsRestoreData"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsTakeOwnership
    * This user right determines which users can take ownership of any securable object in the system, including Active Directory objects, files and folders, printers, registry keys, processes, and threads. Only states NotConfigured and Allowed are supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsTakeOwnership
    */
    public function getUserRightsTakeOwnership()
    {
        if (array_key_exists("userRightsTakeOwnership", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsTakeOwnership"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsTakeOwnership"];
            } else {
                $this->_propDict["userRightsTakeOwnership"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsTakeOwnership"]);
                return $this->_propDict["userRightsTakeOwnership"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsTakeOwnership
    * This user right determines which users can take ownership of any securable object in the system, including Active Directory objects, files and folders, printers, registry keys, processes, and threads. Only states NotConfigured and Allowed are supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsTakeOwnership
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsTakeOwnership($val)
    {
        $this->_propDict["userRightsTakeOwnership"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRightsRegisterProcessAsService
    * This security setting determines which service accounts are prevented from registering a process as a service. Note: This security setting does not apply to the System, Local Service, or Network Service accounts. Only state Blocked is supported.
    *
    * @return DeviceManagementUserRightsSetting The userRightsRegisterProcessAsService
    */
    public function getUserRightsRegisterProcessAsService()
    {
        if (array_key_exists("userRightsRegisterProcessAsService", $this->_propDict)) {
            if (is_a($this->_propDict["userRightsRegisterProcessAsService"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsSetting")) {
                return $this->_propDict["userRightsRegisterProcessAsService"];
            } else {
                $this->_propDict["userRightsRegisterProcessAsService"] = new DeviceManagementUserRightsSetting($this->_propDict["userRightsRegisterProcessAsService"]);
                return $this->_propDict["userRightsRegisterProcessAsService"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRightsRegisterProcessAsService
    * This security setting determines which service accounts are prevented from registering a process as a service. Note: This security setting does not apply to the System, Local Service, or Network Service accounts. Only state Blocked is supported.
    *
    * @param DeviceManagementUserRightsSetting $val The userRightsRegisterProcessAsService
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setUserRightsRegisterProcessAsService($val)
    {
        $this->_propDict["userRightsRegisterProcessAsService"] = $val;
        return $this;
    }
    
    /**
    * Gets the xboxServicesEnableXboxGameSaveTask
    * This setting determines whether xbox game save is enabled (1) or disabled (0).
    *
    * @return bool The xboxServicesEnableXboxGameSaveTask
    */
    public function getXboxServicesEnableXboxGameSaveTask()
    {
        if (array_key_exists("xboxServicesEnableXboxGameSaveTask", $this->_propDict)) {
            return $this->_propDict["xboxServicesEnableXboxGameSaveTask"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the xboxServicesEnableXboxGameSaveTask
    * This setting determines whether xbox game save is enabled (1) or disabled (0).
    *
    * @param bool $val The xboxServicesEnableXboxGameSaveTask
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setXboxServicesEnableXboxGameSaveTask($val)
    {
        $this->_propDict["xboxServicesEnableXboxGameSaveTask"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the xboxServicesAccessoryManagementServiceStartupMode
    * This setting determines whether the Accessory management service's start type is Automatic(2), Manual(3), Disabled(4). Default: Manual.
    *
    * @return ServiceStartType The xboxServicesAccessoryManagementServiceStartupMode
    */
    public function getXboxServicesAccessoryManagementServiceStartupMode()
    {
        if (array_key_exists("xboxServicesAccessoryManagementServiceStartupMode", $this->_propDict)) {
            if (is_a($this->_propDict["xboxServicesAccessoryManagementServiceStartupMode"], "Microsoft\Graph\Beta\Model\ServiceStartType")) {
                return $this->_propDict["xboxServicesAccessoryManagementServiceStartupMode"];
            } else {
                $this->_propDict["xboxServicesAccessoryManagementServiceStartupMode"] = new ServiceStartType($this->_propDict["xboxServicesAccessoryManagementServiceStartupMode"]);
                return $this->_propDict["xboxServicesAccessoryManagementServiceStartupMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the xboxServicesAccessoryManagementServiceStartupMode
    * This setting determines whether the Accessory management service's start type is Automatic(2), Manual(3), Disabled(4). Default: Manual.
    *
    * @param ServiceStartType $val The xboxServicesAccessoryManagementServiceStartupMode
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setXboxServicesAccessoryManagementServiceStartupMode($val)
    {
        $this->_propDict["xboxServicesAccessoryManagementServiceStartupMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the xboxServicesLiveAuthManagerServiceStartupMode
    * This setting determines whether Live Auth Manager service's start type is Automatic(2), Manual(3), Disabled(4). Default: Manual.
    *
    * @return ServiceStartType The xboxServicesLiveAuthManagerServiceStartupMode
    */
    public function getXboxServicesLiveAuthManagerServiceStartupMode()
    {
        if (array_key_exists("xboxServicesLiveAuthManagerServiceStartupMode", $this->_propDict)) {
            if (is_a($this->_propDict["xboxServicesLiveAuthManagerServiceStartupMode"], "Microsoft\Graph\Beta\Model\ServiceStartType")) {
                return $this->_propDict["xboxServicesLiveAuthManagerServiceStartupMode"];
            } else {
                $this->_propDict["xboxServicesLiveAuthManagerServiceStartupMode"] = new ServiceStartType($this->_propDict["xboxServicesLiveAuthManagerServiceStartupMode"]);
                return $this->_propDict["xboxServicesLiveAuthManagerServiceStartupMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the xboxServicesLiveAuthManagerServiceStartupMode
    * This setting determines whether Live Auth Manager service's start type is Automatic(2), Manual(3), Disabled(4). Default: Manual.
    *
    * @param ServiceStartType $val The xboxServicesLiveAuthManagerServiceStartupMode
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setXboxServicesLiveAuthManagerServiceStartupMode($val)
    {
        $this->_propDict["xboxServicesLiveAuthManagerServiceStartupMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the xboxServicesLiveGameSaveServiceStartupMode
    * This setting determines whether Live Game save service's start type is Automatic(2), Manual(3), Disabled(4). Default: Manual.
    *
    * @return ServiceStartType The xboxServicesLiveGameSaveServiceStartupMode
    */
    public function getXboxServicesLiveGameSaveServiceStartupMode()
    {
        if (array_key_exists("xboxServicesLiveGameSaveServiceStartupMode", $this->_propDict)) {
            if (is_a($this->_propDict["xboxServicesLiveGameSaveServiceStartupMode"], "Microsoft\Graph\Beta\Model\ServiceStartType")) {
                return $this->_propDict["xboxServicesLiveGameSaveServiceStartupMode"];
            } else {
                $this->_propDict["xboxServicesLiveGameSaveServiceStartupMode"] = new ServiceStartType($this->_propDict["xboxServicesLiveGameSaveServiceStartupMode"]);
                return $this->_propDict["xboxServicesLiveGameSaveServiceStartupMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the xboxServicesLiveGameSaveServiceStartupMode
    * This setting determines whether Live Game save service's start type is Automatic(2), Manual(3), Disabled(4). Default: Manual.
    *
    * @param ServiceStartType $val The xboxServicesLiveGameSaveServiceStartupMode
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setXboxServicesLiveGameSaveServiceStartupMode($val)
    {
        $this->_propDict["xboxServicesLiveGameSaveServiceStartupMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the xboxServicesLiveNetworkingServiceStartupMode
    * This setting determines whether Networking service's start type is Automatic(2), Manual(3), Disabled(4). Default: Manual.
    *
    * @return ServiceStartType The xboxServicesLiveNetworkingServiceStartupMode
    */
    public function getXboxServicesLiveNetworkingServiceStartupMode()
    {
        if (array_key_exists("xboxServicesLiveNetworkingServiceStartupMode", $this->_propDict)) {
            if (is_a($this->_propDict["xboxServicesLiveNetworkingServiceStartupMode"], "Microsoft\Graph\Beta\Model\ServiceStartType")) {
                return $this->_propDict["xboxServicesLiveNetworkingServiceStartupMode"];
            } else {
                $this->_propDict["xboxServicesLiveNetworkingServiceStartupMode"] = new ServiceStartType($this->_propDict["xboxServicesLiveNetworkingServiceStartupMode"]);
                return $this->_propDict["xboxServicesLiveNetworkingServiceStartupMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the xboxServicesLiveNetworkingServiceStartupMode
    * This setting determines whether Networking service's start type is Automatic(2), Manual(3), Disabled(4). Default: Manual.
    *
    * @param ServiceStartType $val The xboxServicesLiveNetworkingServiceStartupMode
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setXboxServicesLiveNetworkingServiceStartupMode($val)
    {
        $this->_propDict["xboxServicesLiveNetworkingServiceStartupMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsBlockMicrosoftAccounts
    * Prevent users from adding new Microsoft accounts to this computer.
    *
    * @return bool The localSecurityOptionsBlockMicrosoftAccounts
    */
    public function getLocalSecurityOptionsBlockMicrosoftAccounts()
    {
        if (array_key_exists("localSecurityOptionsBlockMicrosoftAccounts", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsBlockMicrosoftAccounts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsBlockMicrosoftAccounts
    * Prevent users from adding new Microsoft accounts to this computer.
    *
    * @param bool $val The localSecurityOptionsBlockMicrosoftAccounts
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsBlockMicrosoftAccounts($val)
    {
        $this->_propDict["localSecurityOptionsBlockMicrosoftAccounts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsBlockRemoteLogonWithBlankPassword
    * Enable Local accounts that are not password protected to log on from locations other than the physical device.Default is enabled
    *
    * @return bool The localSecurityOptionsBlockRemoteLogonWithBlankPassword
    */
    public function getLocalSecurityOptionsBlockRemoteLogonWithBlankPassword()
    {
        if (array_key_exists("localSecurityOptionsBlockRemoteLogonWithBlankPassword", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsBlockRemoteLogonWithBlankPassword"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsBlockRemoteLogonWithBlankPassword
    * Enable Local accounts that are not password protected to log on from locations other than the physical device.Default is enabled
    *
    * @param bool $val The localSecurityOptionsBlockRemoteLogonWithBlankPassword
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsBlockRemoteLogonWithBlankPassword($val)
    {
        $this->_propDict["localSecurityOptionsBlockRemoteLogonWithBlankPassword"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsDisableAdministratorAccount
    * Determines whether the Local Administrator account is enabled or disabled.
    *
    * @return bool The localSecurityOptionsDisableAdministratorAccount
    */
    public function getLocalSecurityOptionsDisableAdministratorAccount()
    {
        if (array_key_exists("localSecurityOptionsDisableAdministratorAccount", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsDisableAdministratorAccount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsDisableAdministratorAccount
    * Determines whether the Local Administrator account is enabled or disabled.
    *
    * @param bool $val The localSecurityOptionsDisableAdministratorAccount
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsDisableAdministratorAccount($val)
    {
        $this->_propDict["localSecurityOptionsDisableAdministratorAccount"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAdministratorAccountName
    * Define a different account name to be associated with the security identifier (SID) for the account â€œAdministratorâ€.
    *
    * @return string The localSecurityOptionsAdministratorAccountName
    */
    public function getLocalSecurityOptionsAdministratorAccountName()
    {
        if (array_key_exists("localSecurityOptionsAdministratorAccountName", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAdministratorAccountName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAdministratorAccountName
    * Define a different account name to be associated with the security identifier (SID) for the account â€œAdministratorâ€.
    *
    * @param string $val The localSecurityOptionsAdministratorAccountName
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAdministratorAccountName($val)
    {
        $this->_propDict["localSecurityOptionsAdministratorAccountName"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsDisableGuestAccount
    * Determines if the Guest account is enabled or disabled.
    *
    * @return bool The localSecurityOptionsDisableGuestAccount
    */
    public function getLocalSecurityOptionsDisableGuestAccount()
    {
        if (array_key_exists("localSecurityOptionsDisableGuestAccount", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsDisableGuestAccount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsDisableGuestAccount
    * Determines if the Guest account is enabled or disabled.
    *
    * @param bool $val The localSecurityOptionsDisableGuestAccount
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsDisableGuestAccount($val)
    {
        $this->_propDict["localSecurityOptionsDisableGuestAccount"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsGuestAccountName
    * Define a different account name to be associated with the security identifier (SID) for the account â€œGuestâ€.
    *
    * @return string The localSecurityOptionsGuestAccountName
    */
    public function getLocalSecurityOptionsGuestAccountName()
    {
        if (array_key_exists("localSecurityOptionsGuestAccountName", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsGuestAccountName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsGuestAccountName
    * Define a different account name to be associated with the security identifier (SID) for the account â€œGuestâ€.
    *
    * @param string $val The localSecurityOptionsGuestAccountName
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsGuestAccountName($val)
    {
        $this->_propDict["localSecurityOptionsGuestAccountName"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowUndockWithoutHavingToLogon
    * Prevent a portable computer from being undocked without having to log in.
    *
    * @return bool The localSecurityOptionsAllowUndockWithoutHavingToLogon
    */
    public function getLocalSecurityOptionsAllowUndockWithoutHavingToLogon()
    {
        if (array_key_exists("localSecurityOptionsAllowUndockWithoutHavingToLogon", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowUndockWithoutHavingToLogon"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowUndockWithoutHavingToLogon
    * Prevent a portable computer from being undocked without having to log in.
    *
    * @param bool $val The localSecurityOptionsAllowUndockWithoutHavingToLogon
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowUndockWithoutHavingToLogon($val)
    {
        $this->_propDict["localSecurityOptionsAllowUndockWithoutHavingToLogon"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsBlockUsersInstallingPrinterDrivers
    * Restrict installing printer drivers as part of connecting to a shared printer to admins only.
    *
    * @return bool The localSecurityOptionsBlockUsersInstallingPrinterDrivers
    */
    public function getLocalSecurityOptionsBlockUsersInstallingPrinterDrivers()
    {
        if (array_key_exists("localSecurityOptionsBlockUsersInstallingPrinterDrivers", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsBlockUsersInstallingPrinterDrivers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsBlockUsersInstallingPrinterDrivers
    * Restrict installing printer drivers as part of connecting to a shared printer to admins only.
    *
    * @param bool $val The localSecurityOptionsBlockUsersInstallingPrinterDrivers
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsBlockUsersInstallingPrinterDrivers($val)
    {
        $this->_propDict["localSecurityOptionsBlockUsersInstallingPrinterDrivers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsBlockRemoteOpticalDriveAccess
    * Enabling this settings allows only interactively logged on user to access CD-ROM media.
    *
    * @return bool The localSecurityOptionsBlockRemoteOpticalDriveAccess
    */
    public function getLocalSecurityOptionsBlockRemoteOpticalDriveAccess()
    {
        if (array_key_exists("localSecurityOptionsBlockRemoteOpticalDriveAccess", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsBlockRemoteOpticalDriveAccess"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsBlockRemoteOpticalDriveAccess
    * Enabling this settings allows only interactively logged on user to access CD-ROM media.
    *
    * @param bool $val The localSecurityOptionsBlockRemoteOpticalDriveAccess
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsBlockRemoteOpticalDriveAccess($val)
    {
        $this->_propDict["localSecurityOptionsBlockRemoteOpticalDriveAccess"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser
    * Define who is allowed to format and eject removable NTFS media.
    *
    * @return LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType The localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser
    */
    public function getLocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser()
    {
        if (array_key_exists("localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser", $this->_propDict)) {
            if (is_a($this->_propDict["localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser"], "Microsoft\Graph\Beta\Model\LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType")) {
                return $this->_propDict["localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser"];
            } else {
                $this->_propDict["localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser"] = new LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType($this->_propDict["localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser"]);
                return $this->_propDict["localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser
    * Define who is allowed to format and eject removable NTFS media.
    *
    * @param LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType $val The localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser($val)
    {
        $this->_propDict["localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsMachineInactivityLimit
    * Define maximum minutes of inactivity on the interactive desktopâ€™s login screen until the screen saver runs. Valid values 0 to 9999
    *
    * @return int The localSecurityOptionsMachineInactivityLimit
    */
    public function getLocalSecurityOptionsMachineInactivityLimit()
    {
        if (array_key_exists("localSecurityOptionsMachineInactivityLimit", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsMachineInactivityLimit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsMachineInactivityLimit
    * Define maximum minutes of inactivity on the interactive desktopâ€™s login screen until the screen saver runs. Valid values 0 to 9999
    *
    * @param int $val The localSecurityOptionsMachineInactivityLimit
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsMachineInactivityLimit($val)
    {
        $this->_propDict["localSecurityOptionsMachineInactivityLimit"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsMachineInactivityLimitInMinutes
    * Define maximum minutes of inactivity on the interactive desktopâ€™s login screen until the screen saver runs. Valid values 0 to 9999
    *
    * @return int The localSecurityOptionsMachineInactivityLimitInMinutes
    */
    public function getLocalSecurityOptionsMachineInactivityLimitInMinutes()
    {
        if (array_key_exists("localSecurityOptionsMachineInactivityLimitInMinutes", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsMachineInactivityLimitInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsMachineInactivityLimitInMinutes
    * Define maximum minutes of inactivity on the interactive desktopâ€™s login screen until the screen saver runs. Valid values 0 to 9999
    *
    * @param int $val The localSecurityOptionsMachineInactivityLimitInMinutes
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsMachineInactivityLimitInMinutes($val)
    {
        $this->_propDict["localSecurityOptionsMachineInactivityLimitInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsDoNotRequireCtrlAltDel
    * Require CTRL+ALT+DEL to be pressed before a user can log on.
    *
    * @return bool The localSecurityOptionsDoNotRequireCtrlAltDel
    */
    public function getLocalSecurityOptionsDoNotRequireCtrlAltDel()
    {
        if (array_key_exists("localSecurityOptionsDoNotRequireCtrlAltDel", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsDoNotRequireCtrlAltDel"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsDoNotRequireCtrlAltDel
    * Require CTRL+ALT+DEL to be pressed before a user can log on.
    *
    * @param bool $val The localSecurityOptionsDoNotRequireCtrlAltDel
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsDoNotRequireCtrlAltDel($val)
    {
        $this->_propDict["localSecurityOptionsDoNotRequireCtrlAltDel"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsHideLastSignedInUser
    * Do not display the username of the last person who signed in on this device.
    *
    * @return bool The localSecurityOptionsHideLastSignedInUser
    */
    public function getLocalSecurityOptionsHideLastSignedInUser()
    {
        if (array_key_exists("localSecurityOptionsHideLastSignedInUser", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsHideLastSignedInUser"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsHideLastSignedInUser
    * Do not display the username of the last person who signed in on this device.
    *
    * @param bool $val The localSecurityOptionsHideLastSignedInUser
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsHideLastSignedInUser($val)
    {
        $this->_propDict["localSecurityOptionsHideLastSignedInUser"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsHideUsernameAtSignIn
    * Do not display the username of the person signing in to this device after credentials are entered and before the deviceâ€™s desktop is shown.
    *
    * @return bool The localSecurityOptionsHideUsernameAtSignIn
    */
    public function getLocalSecurityOptionsHideUsernameAtSignIn()
    {
        if (array_key_exists("localSecurityOptionsHideUsernameAtSignIn", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsHideUsernameAtSignIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsHideUsernameAtSignIn
    * Do not display the username of the person signing in to this device after credentials are entered and before the deviceâ€™s desktop is shown.
    *
    * @param bool $val The localSecurityOptionsHideUsernameAtSignIn
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsHideUsernameAtSignIn($val)
    {
        $this->_propDict["localSecurityOptionsHideUsernameAtSignIn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsLogOnMessageTitle
    * Set message title for users attempting to log in.
    *
    * @return string The localSecurityOptionsLogOnMessageTitle
    */
    public function getLocalSecurityOptionsLogOnMessageTitle()
    {
        if (array_key_exists("localSecurityOptionsLogOnMessageTitle", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsLogOnMessageTitle"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsLogOnMessageTitle
    * Set message title for users attempting to log in.
    *
    * @param string $val The localSecurityOptionsLogOnMessageTitle
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsLogOnMessageTitle($val)
    {
        $this->_propDict["localSecurityOptionsLogOnMessageTitle"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsLogOnMessageText
    * Set message text for users attempting to log in.
    *
    * @return string The localSecurityOptionsLogOnMessageText
    */
    public function getLocalSecurityOptionsLogOnMessageText()
    {
        if (array_key_exists("localSecurityOptionsLogOnMessageText", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsLogOnMessageText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsLogOnMessageText
    * Set message text for users attempting to log in.
    *
    * @param string $val The localSecurityOptionsLogOnMessageText
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsLogOnMessageText($val)
    {
        $this->_propDict["localSecurityOptionsLogOnMessageText"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowPKU2UAuthenticationRequests
    * Block PKU2U authentication requests to this device to use online identities.
    *
    * @return bool The localSecurityOptionsAllowPKU2UAuthenticationRequests
    */
    public function getLocalSecurityOptionsAllowPKU2UAuthenticationRequests()
    {
        if (array_key_exists("localSecurityOptionsAllowPKU2UAuthenticationRequests", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowPKU2UAuthenticationRequests"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowPKU2UAuthenticationRequests
    * Block PKU2U authentication requests to this device to use online identities.
    *
    * @param bool $val The localSecurityOptionsAllowPKU2UAuthenticationRequests
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowPKU2UAuthenticationRequests($val)
    {
        $this->_propDict["localSecurityOptionsAllowPKU2UAuthenticationRequests"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool
    * UI helper boolean for LocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager entity
    *
    * @return bool The localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool
    */
    public function getLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool()
    {
        if (array_key_exists("localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool
    * UI helper boolean for LocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager entity
    *
    * @param bool $val The localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool($val)
    {
        $this->_propDict["localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager
    * Edit the default Security Descriptor Definition Language string to allow or deny users and groups to make remote calls to the SAM.
    *
    * @return string The localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager
    */
    public function getLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager()
    {
        if (array_key_exists("localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager
    * Edit the default Security Descriptor Definition Language string to allow or deny users and groups to make remote calls to the SAM.
    *
    * @param string $val The localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager($val)
    {
        $this->_propDict["localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients
    * This security setting allows a client to require the negotiation of 128-bit encryption and/or NTLMv2 session security.
    *
    * @return LocalSecurityOptionsMinimumSessionSecurity The localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients
    */
    public function getLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients()
    {
        if (array_key_exists("localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients", $this->_propDict)) {
            if (is_a($this->_propDict["localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients"], "Microsoft\Graph\Beta\Model\LocalSecurityOptionsMinimumSessionSecurity")) {
                return $this->_propDict["localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients"];
            } else {
                $this->_propDict["localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients"] = new LocalSecurityOptionsMinimumSessionSecurity($this->_propDict["localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients"]);
                return $this->_propDict["localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients
    * This security setting allows a client to require the negotiation of 128-bit encryption and/or NTLMv2 session security.
    *
    * @param LocalSecurityOptionsMinimumSessionSecurity $val The localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients($val)
    {
        $this->_propDict["localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers
    * This security setting allows a server to require the negotiation of 128-bit encryption and/or NTLMv2 session security.
    *
    * @return LocalSecurityOptionsMinimumSessionSecurity The localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers
    */
    public function getLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers()
    {
        if (array_key_exists("localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers", $this->_propDict)) {
            if (is_a($this->_propDict["localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers"], "Microsoft\Graph\Beta\Model\LocalSecurityOptionsMinimumSessionSecurity")) {
                return $this->_propDict["localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers"];
            } else {
                $this->_propDict["localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers"] = new LocalSecurityOptionsMinimumSessionSecurity($this->_propDict["localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers"]);
                return $this->_propDict["localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers
    * This security setting allows a server to require the negotiation of 128-bit encryption and/or NTLMv2 session security.
    *
    * @param LocalSecurityOptionsMinimumSessionSecurity $val The localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers($val)
    {
        $this->_propDict["localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers"] = $val;
        return $this;
    }
    
    /**
    * Gets the lanManagerAuthenticationLevel
    * This security setting determines which challenge/response authentication protocol is used for network logons.
    *
    * @return LanManagerAuthenticationLevel The lanManagerAuthenticationLevel
    */
    public function getLanManagerAuthenticationLevel()
    {
        if (array_key_exists("lanManagerAuthenticationLevel", $this->_propDict)) {
            if (is_a($this->_propDict["lanManagerAuthenticationLevel"], "Microsoft\Graph\Beta\Model\LanManagerAuthenticationLevel")) {
                return $this->_propDict["lanManagerAuthenticationLevel"];
            } else {
                $this->_propDict["lanManagerAuthenticationLevel"] = new LanManagerAuthenticationLevel($this->_propDict["lanManagerAuthenticationLevel"]);
                return $this->_propDict["lanManagerAuthenticationLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lanManagerAuthenticationLevel
    * This security setting determines which challenge/response authentication protocol is used for network logons.
    *
    * @param LanManagerAuthenticationLevel $val The lanManagerAuthenticationLevel
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLanManagerAuthenticationLevel($val)
    {
        $this->_propDict["lanManagerAuthenticationLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the lanManagerWorkstationDisableInsecureGuestLogons
    * If enabled,the SMB client will allow insecure guest logons. If not configured, the SMB client will reject insecure guest logons.
    *
    * @return bool The lanManagerWorkstationDisableInsecureGuestLogons
    */
    public function getLanManagerWorkstationDisableInsecureGuestLogons()
    {
        if (array_key_exists("lanManagerWorkstationDisableInsecureGuestLogons", $this->_propDict)) {
            return $this->_propDict["lanManagerWorkstationDisableInsecureGuestLogons"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lanManagerWorkstationDisableInsecureGuestLogons
    * If enabled,the SMB client will allow insecure guest logons. If not configured, the SMB client will reject insecure guest logons.
    *
    * @param bool $val The lanManagerWorkstationDisableInsecureGuestLogons
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLanManagerWorkstationDisableInsecureGuestLogons($val)
    {
        $this->_propDict["lanManagerWorkstationDisableInsecureGuestLogons"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsClearVirtualMemoryPageFile
    * This security setting determines whether the virtual memory pagefile is cleared when the system is shut down.
    *
    * @return bool The localSecurityOptionsClearVirtualMemoryPageFile
    */
    public function getLocalSecurityOptionsClearVirtualMemoryPageFile()
    {
        if (array_key_exists("localSecurityOptionsClearVirtualMemoryPageFile", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsClearVirtualMemoryPageFile"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsClearVirtualMemoryPageFile
    * This security setting determines whether the virtual memory pagefile is cleared when the system is shut down.
    *
    * @param bool $val The localSecurityOptionsClearVirtualMemoryPageFile
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsClearVirtualMemoryPageFile($val)
    {
        $this->_propDict["localSecurityOptionsClearVirtualMemoryPageFile"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn
    * This security setting determines whether a computer can be shut down without having to log on to Windows.
    *
    * @return bool The localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn
    */
    public function getLocalSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn()
    {
        if (array_key_exists("localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn
    * This security setting determines whether a computer can be shut down without having to log on to Windows.
    *
    * @param bool $val The localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn($val)
    {
        $this->_propDict["localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowUIAccessApplicationElevation
    * Allow UIAccess apps to prompt for elevation without using the secure desktop.
    *
    * @return bool The localSecurityOptionsAllowUIAccessApplicationElevation
    */
    public function getLocalSecurityOptionsAllowUIAccessApplicationElevation()
    {
        if (array_key_exists("localSecurityOptionsAllowUIAccessApplicationElevation", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowUIAccessApplicationElevation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowUIAccessApplicationElevation
    * Allow UIAccess apps to prompt for elevation without using the secure desktop.
    *
    * @param bool $val The localSecurityOptionsAllowUIAccessApplicationElevation
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowUIAccessApplicationElevation($val)
    {
        $this->_propDict["localSecurityOptionsAllowUIAccessApplicationElevation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations
    * Virtualize file and registry write failures to per user locations
    *
    * @return bool The localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations
    */
    public function getLocalSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations()
    {
        if (array_key_exists("localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations
    * Virtualize file and registry write failures to per user locations
    *
    * @param bool $val The localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations($val)
    {
        $this->_propDict["localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsOnlyElevateSignedExecutables
    * Enforce PKI certification path validation for a given executable file before it is permitted to run.
    *
    * @return bool The localSecurityOptionsOnlyElevateSignedExecutables
    */
    public function getLocalSecurityOptionsOnlyElevateSignedExecutables()
    {
        if (array_key_exists("localSecurityOptionsOnlyElevateSignedExecutables", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsOnlyElevateSignedExecutables"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsOnlyElevateSignedExecutables
    * Enforce PKI certification path validation for a given executable file before it is permitted to run.
    *
    * @param bool $val The localSecurityOptionsOnlyElevateSignedExecutables
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsOnlyElevateSignedExecutables($val)
    {
        $this->_propDict["localSecurityOptionsOnlyElevateSignedExecutables"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAdministratorElevationPromptBehavior
    * Define the behavior of the elevation prompt for admins in Admin Approval Mode.
    *
    * @return LocalSecurityOptionsAdministratorElevationPromptBehaviorType The localSecurityOptionsAdministratorElevationPromptBehavior
    */
    public function getLocalSecurityOptionsAdministratorElevationPromptBehavior()
    {
        if (array_key_exists("localSecurityOptionsAdministratorElevationPromptBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["localSecurityOptionsAdministratorElevationPromptBehavior"], "Microsoft\Graph\Beta\Model\LocalSecurityOptionsAdministratorElevationPromptBehaviorType")) {
                return $this->_propDict["localSecurityOptionsAdministratorElevationPromptBehavior"];
            } else {
                $this->_propDict["localSecurityOptionsAdministratorElevationPromptBehavior"] = new LocalSecurityOptionsAdministratorElevationPromptBehaviorType($this->_propDict["localSecurityOptionsAdministratorElevationPromptBehavior"]);
                return $this->_propDict["localSecurityOptionsAdministratorElevationPromptBehavior"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localSecurityOptionsAdministratorElevationPromptBehavior
    * Define the behavior of the elevation prompt for admins in Admin Approval Mode.
    *
    * @param LocalSecurityOptionsAdministratorElevationPromptBehaviorType $val The localSecurityOptionsAdministratorElevationPromptBehavior
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAdministratorElevationPromptBehavior($val)
    {
        $this->_propDict["localSecurityOptionsAdministratorElevationPromptBehavior"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsStandardUserElevationPromptBehavior
    * Define the behavior of the elevation prompt for standard users.
    *
    * @return LocalSecurityOptionsStandardUserElevationPromptBehaviorType The localSecurityOptionsStandardUserElevationPromptBehavior
    */
    public function getLocalSecurityOptionsStandardUserElevationPromptBehavior()
    {
        if (array_key_exists("localSecurityOptionsStandardUserElevationPromptBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["localSecurityOptionsStandardUserElevationPromptBehavior"], "Microsoft\Graph\Beta\Model\LocalSecurityOptionsStandardUserElevationPromptBehaviorType")) {
                return $this->_propDict["localSecurityOptionsStandardUserElevationPromptBehavior"];
            } else {
                $this->_propDict["localSecurityOptionsStandardUserElevationPromptBehavior"] = new LocalSecurityOptionsStandardUserElevationPromptBehaviorType($this->_propDict["localSecurityOptionsStandardUserElevationPromptBehavior"]);
                return $this->_propDict["localSecurityOptionsStandardUserElevationPromptBehavior"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localSecurityOptionsStandardUserElevationPromptBehavior
    * Define the behavior of the elevation prompt for standard users.
    *
    * @param LocalSecurityOptionsStandardUserElevationPromptBehaviorType $val The localSecurityOptionsStandardUserElevationPromptBehavior
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsStandardUserElevationPromptBehavior($val)
    {
        $this->_propDict["localSecurityOptionsStandardUserElevationPromptBehavior"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation
    * Enable all elevation requests to go to the interactive user's desktop rather than the secure desktop. Prompt behavior policy settings for admins and standard users are used.
    *
    * @return bool The localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation
    */
    public function getLocalSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation()
    {
        if (array_key_exists("localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation
    * Enable all elevation requests to go to the interactive user's desktop rather than the secure desktop. Prompt behavior policy settings for admins and standard users are used.
    *
    * @param bool $val The localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation($val)
    {
        $this->_propDict["localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation
    * App installations requiring elevated privileges will prompt for admin credentials.Default is enabled
    *
    * @return bool The localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation
    */
    public function getLocalSecurityOptionsDetectApplicationInstallationsAndPromptForElevation()
    {
        if (array_key_exists("localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation
    * App installations requiring elevated privileges will prompt for admin credentials.Default is enabled
    *
    * @param bool $val The localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsDetectApplicationInstallationsAndPromptForElevation($val)
    {
        $this->_propDict["localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowUIAccessApplicationsForSecureLocations
    * Allow UIAccess apps to prompt for elevation without using the secure desktop.Default is enabled
    *
    * @return bool The localSecurityOptionsAllowUIAccessApplicationsForSecureLocations
    */
    public function getLocalSecurityOptionsAllowUIAccessApplicationsForSecureLocations()
    {
        if (array_key_exists("localSecurityOptionsAllowUIAccessApplicationsForSecureLocations", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowUIAccessApplicationsForSecureLocations"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowUIAccessApplicationsForSecureLocations
    * Allow UIAccess apps to prompt for elevation without using the secure desktop.Default is enabled
    *
    * @param bool $val The localSecurityOptionsAllowUIAccessApplicationsForSecureLocations
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowUIAccessApplicationsForSecureLocations($val)
    {
        $this->_propDict["localSecurityOptionsAllowUIAccessApplicationsForSecureLocations"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsUseAdminApprovalMode
    * Defines whether the built-in admin account uses Admin Approval Mode or runs all apps with full admin privileges.Default is enabled
    *
    * @return bool The localSecurityOptionsUseAdminApprovalMode
    */
    public function getLocalSecurityOptionsUseAdminApprovalMode()
    {
        if (array_key_exists("localSecurityOptionsUseAdminApprovalMode", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsUseAdminApprovalMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsUseAdminApprovalMode
    * Defines whether the built-in admin account uses Admin Approval Mode or runs all apps with full admin privileges.Default is enabled
    *
    * @param bool $val The localSecurityOptionsUseAdminApprovalMode
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsUseAdminApprovalMode($val)
    {
        $this->_propDict["localSecurityOptionsUseAdminApprovalMode"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsUseAdminApprovalModeForAdministrators
    * Define whether Admin Approval Mode and all UAC policy settings are enabled, default is enabled
    *
    * @return bool The localSecurityOptionsUseAdminApprovalModeForAdministrators
    */
    public function getLocalSecurityOptionsUseAdminApprovalModeForAdministrators()
    {
        if (array_key_exists("localSecurityOptionsUseAdminApprovalModeForAdministrators", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsUseAdminApprovalModeForAdministrators"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsUseAdminApprovalModeForAdministrators
    * Define whether Admin Approval Mode and all UAC policy settings are enabled, default is enabled
    *
    * @param bool $val The localSecurityOptionsUseAdminApprovalModeForAdministrators
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsUseAdminApprovalModeForAdministrators($val)
    {
        $this->_propDict["localSecurityOptionsUseAdminApprovalModeForAdministrators"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsInformationShownOnLockScreen
    * Configure the user information that is displayed when the session is locked. If not configured, user display name, domain and username are shown
    *
    * @return LocalSecurityOptionsInformationShownOnLockScreenType The localSecurityOptionsInformationShownOnLockScreen
    */
    public function getLocalSecurityOptionsInformationShownOnLockScreen()
    {
        if (array_key_exists("localSecurityOptionsInformationShownOnLockScreen", $this->_propDict)) {
            if (is_a($this->_propDict["localSecurityOptionsInformationShownOnLockScreen"], "Microsoft\Graph\Beta\Model\LocalSecurityOptionsInformationShownOnLockScreenType")) {
                return $this->_propDict["localSecurityOptionsInformationShownOnLockScreen"];
            } else {
                $this->_propDict["localSecurityOptionsInformationShownOnLockScreen"] = new LocalSecurityOptionsInformationShownOnLockScreenType($this->_propDict["localSecurityOptionsInformationShownOnLockScreen"]);
                return $this->_propDict["localSecurityOptionsInformationShownOnLockScreen"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localSecurityOptionsInformationShownOnLockScreen
    * Configure the user information that is displayed when the session is locked. If not configured, user display name, domain and username are shown
    *
    * @param LocalSecurityOptionsInformationShownOnLockScreenType $val The localSecurityOptionsInformationShownOnLockScreen
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsInformationShownOnLockScreen($val)
    {
        $this->_propDict["localSecurityOptionsInformationShownOnLockScreen"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsInformationDisplayedOnLockScreen
    * Configure the user information that is displayed when the session is locked. If not configured, user display name, domain and username are shown
    *
    * @return LocalSecurityOptionsInformationDisplayedOnLockScreenType The localSecurityOptionsInformationDisplayedOnLockScreen
    */
    public function getLocalSecurityOptionsInformationDisplayedOnLockScreen()
    {
        if (array_key_exists("localSecurityOptionsInformationDisplayedOnLockScreen", $this->_propDict)) {
            if (is_a($this->_propDict["localSecurityOptionsInformationDisplayedOnLockScreen"], "Microsoft\Graph\Beta\Model\LocalSecurityOptionsInformationDisplayedOnLockScreenType")) {
                return $this->_propDict["localSecurityOptionsInformationDisplayedOnLockScreen"];
            } else {
                $this->_propDict["localSecurityOptionsInformationDisplayedOnLockScreen"] = new LocalSecurityOptionsInformationDisplayedOnLockScreenType($this->_propDict["localSecurityOptionsInformationDisplayedOnLockScreen"]);
                return $this->_propDict["localSecurityOptionsInformationDisplayedOnLockScreen"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localSecurityOptionsInformationDisplayedOnLockScreen
    * Configure the user information that is displayed when the session is locked. If not configured, user display name, domain and username are shown
    *
    * @param LocalSecurityOptionsInformationDisplayedOnLockScreenType $val The localSecurityOptionsInformationDisplayedOnLockScreen
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsInformationDisplayedOnLockScreen($val)
    {
        $this->_propDict["localSecurityOptionsInformationDisplayedOnLockScreen"] = $val;
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees
    * This security setting determines whether the SMB client attempts to negotiate SMB packet signing.
    *
    * @return bool The localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees
    */
    public function getLocalSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees()
    {
        if (array_key_exists("localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees
    * This security setting determines whether the SMB client attempts to negotiate SMB packet signing.
    *
    * @param bool $val The localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees($val)
    {
        $this->_propDict["localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsClientDigitallySignCommunicationsAlways
    * This security setting determines whether packet signing is required by the SMB client component.
    *
    * @return bool The localSecurityOptionsClientDigitallySignCommunicationsAlways
    */
    public function getLocalSecurityOptionsClientDigitallySignCommunicationsAlways()
    {
        if (array_key_exists("localSecurityOptionsClientDigitallySignCommunicationsAlways", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsClientDigitallySignCommunicationsAlways"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsClientDigitallySignCommunicationsAlways
    * This security setting determines whether packet signing is required by the SMB client component.
    *
    * @param bool $val The localSecurityOptionsClientDigitallySignCommunicationsAlways
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsClientDigitallySignCommunicationsAlways($val)
    {
        $this->_propDict["localSecurityOptionsClientDigitallySignCommunicationsAlways"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers
    * If this security setting is enabled, the Server Message Block (SMB) redirector is allowed to send plaintext passwords to non-Microsoft SMB servers that do not support password encryption during authentication.
    *
    * @return bool The localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers
    */
    public function getLocalSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers()
    {
        if (array_key_exists("localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers
    * If this security setting is enabled, the Server Message Block (SMB) redirector is allowed to send plaintext passwords to non-Microsoft SMB servers that do not support password encryption during authentication.
    *
    * @param bool $val The localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers($val)
    {
        $this->_propDict["localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsDisableServerDigitallySignCommunicationsAlways
    * This security setting determines whether packet signing is required by the SMB server component.
    *
    * @return bool The localSecurityOptionsDisableServerDigitallySignCommunicationsAlways
    */
    public function getLocalSecurityOptionsDisableServerDigitallySignCommunicationsAlways()
    {
        if (array_key_exists("localSecurityOptionsDisableServerDigitallySignCommunicationsAlways", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsDisableServerDigitallySignCommunicationsAlways"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsDisableServerDigitallySignCommunicationsAlways
    * This security setting determines whether packet signing is required by the SMB server component.
    *
    * @param bool $val The localSecurityOptionsDisableServerDigitallySignCommunicationsAlways
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsDisableServerDigitallySignCommunicationsAlways($val)
    {
        $this->_propDict["localSecurityOptionsDisableServerDigitallySignCommunicationsAlways"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees
    * This security setting determines whether the SMB server will negotiate SMB packet signing with clients that request it.
    *
    * @return bool The localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees
    */
    public function getLocalSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees()
    {
        if (array_key_exists("localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees
    * This security setting determines whether the SMB server will negotiate SMB packet signing with clients that request it.
    *
    * @param bool $val The localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees($val)
    {
        $this->_propDict["localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares
    * By default, this security setting restricts anonymous access to shares and pipes to the settings for named pipes that can be accessed anonymously and Shares that can be accessed anonymously
    *
    * @return bool The localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares
    */
    public function getLocalSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares()
    {
        if (array_key_exists("localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares
    * By default, this security setting restricts anonymous access to shares and pipes to the settings for named pipes that can be accessed anonymously and Shares that can be accessed anonymously
    *
    * @param bool $val The localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares($val)
    {
        $this->_propDict["localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts
    * This security setting determines what additional permissions will be granted for anonymous connections to the computer.
    *
    * @return bool The localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts
    */
    public function getLocalSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts()
    {
        if (array_key_exists("localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts
    * This security setting determines what additional permissions will be granted for anonymous connections to the computer.
    *
    * @param bool $val The localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts($val)
    {
        $this->_propDict["localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares
    * This security setting determines whether to allows anonymous users to perform certain activities, such as enumerating the names of domain accounts and network shares.
    *
    * @return bool The localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares
    */
    public function getLocalSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares()
    {
        if (array_key_exists("localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares
    * This security setting determines whether to allows anonymous users to perform certain activities, such as enumerating the names of domain accounts and network shares.
    *
    * @param bool $val The localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares($val)
    {
        $this->_propDict["localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange
    * This security setting determines if, at the next password change, the LAN Manager (LM) hash value for the new password is stored. Itâ€™s not stored by default.
    *
    * @return bool The localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange
    */
    public function getLocalSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange()
    {
        if (array_key_exists("localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange", $this->_propDict)) {
            return $this->_propDict["localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange
    * This security setting determines if, at the next password change, the LAN Manager (LM) hash value for the new password is stored. Itâ€™s not stored by default.
    *
    * @param bool $val The localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange($val)
    {
        $this->_propDict["localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localSecurityOptionsSmartCardRemovalBehavior
    * This security setting determines what happens when the smart card for a logged-on user is removed from the smart card reader.
    *
    * @return LocalSecurityOptionsSmartCardRemovalBehaviorType The localSecurityOptionsSmartCardRemovalBehavior
    */
    public function getLocalSecurityOptionsSmartCardRemovalBehavior()
    {
        if (array_key_exists("localSecurityOptionsSmartCardRemovalBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["localSecurityOptionsSmartCardRemovalBehavior"], "Microsoft\Graph\Beta\Model\LocalSecurityOptionsSmartCardRemovalBehaviorType")) {
                return $this->_propDict["localSecurityOptionsSmartCardRemovalBehavior"];
            } else {
                $this->_propDict["localSecurityOptionsSmartCardRemovalBehavior"] = new LocalSecurityOptionsSmartCardRemovalBehaviorType($this->_propDict["localSecurityOptionsSmartCardRemovalBehavior"]);
                return $this->_propDict["localSecurityOptionsSmartCardRemovalBehavior"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localSecurityOptionsSmartCardRemovalBehavior
    * This security setting determines what happens when the smart card for a logged-on user is removed from the smart card reader.
    *
    * @param LocalSecurityOptionsSmartCardRemovalBehaviorType $val The localSecurityOptionsSmartCardRemovalBehavior
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setLocalSecurityOptionsSmartCardRemovalBehavior($val)
    {
        $this->_propDict["localSecurityOptionsSmartCardRemovalBehavior"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableAppBrowserUI
    * Used to disable the display of the app and browser protection area.
    *
    * @return bool The defenderSecurityCenterDisableAppBrowserUI
    */
    public function getDefenderSecurityCenterDisableAppBrowserUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableAppBrowserUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableAppBrowserUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableAppBrowserUI
    * Used to disable the display of the app and browser protection area.
    *
    * @param bool $val The defenderSecurityCenterDisableAppBrowserUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableAppBrowserUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableAppBrowserUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableFamilyUI
    * Used to disable the display of the family options area.
    *
    * @return bool The defenderSecurityCenterDisableFamilyUI
    */
    public function getDefenderSecurityCenterDisableFamilyUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableFamilyUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableFamilyUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableFamilyUI
    * Used to disable the display of the family options area.
    *
    * @param bool $val The defenderSecurityCenterDisableFamilyUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableFamilyUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableFamilyUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableHealthUI
    * Used to disable the display of the device performance and health area.
    *
    * @return bool The defenderSecurityCenterDisableHealthUI
    */
    public function getDefenderSecurityCenterDisableHealthUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableHealthUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableHealthUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableHealthUI
    * Used to disable the display of the device performance and health area.
    *
    * @param bool $val The defenderSecurityCenterDisableHealthUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableHealthUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableHealthUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableNetworkUI
    * Used to disable the display of the firewall and network protection area.
    *
    * @return bool The defenderSecurityCenterDisableNetworkUI
    */
    public function getDefenderSecurityCenterDisableNetworkUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableNetworkUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableNetworkUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableNetworkUI
    * Used to disable the display of the firewall and network protection area.
    *
    * @param bool $val The defenderSecurityCenterDisableNetworkUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableNetworkUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableNetworkUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableVirusUI
    * Used to disable the display of the virus and threat protection area.
    *
    * @return bool The defenderSecurityCenterDisableVirusUI
    */
    public function getDefenderSecurityCenterDisableVirusUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableVirusUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableVirusUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableVirusUI
    * Used to disable the display of the virus and threat protection area.
    *
    * @param bool $val The defenderSecurityCenterDisableVirusUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableVirusUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableVirusUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableAccountUI
    * Used to disable the display of the account protection area.
    *
    * @return bool The defenderSecurityCenterDisableAccountUI
    */
    public function getDefenderSecurityCenterDisableAccountUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableAccountUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableAccountUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableAccountUI
    * Used to disable the display of the account protection area.
    *
    * @param bool $val The defenderSecurityCenterDisableAccountUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableAccountUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableAccountUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableClearTpmUI
    * Used to disable the display of the Clear TPM button.
    *
    * @return bool The defenderSecurityCenterDisableClearTpmUI
    */
    public function getDefenderSecurityCenterDisableClearTpmUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableClearTpmUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableClearTpmUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableClearTpmUI
    * Used to disable the display of the Clear TPM button.
    *
    * @param bool $val The defenderSecurityCenterDisableClearTpmUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableClearTpmUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableClearTpmUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableHardwareUI
    * Used to disable the display of the hardware protection area.
    *
    * @return bool The defenderSecurityCenterDisableHardwareUI
    */
    public function getDefenderSecurityCenterDisableHardwareUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableHardwareUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableHardwareUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableHardwareUI
    * Used to disable the display of the hardware protection area.
    *
    * @param bool $val The defenderSecurityCenterDisableHardwareUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableHardwareUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableHardwareUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableNotificationAreaUI
    * Used to disable the display of the notification area control. The user needs to either sign out and sign in or reboot the computer for this setting to take effect.
    *
    * @return bool The defenderSecurityCenterDisableNotificationAreaUI
    */
    public function getDefenderSecurityCenterDisableNotificationAreaUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableNotificationAreaUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableNotificationAreaUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableNotificationAreaUI
    * Used to disable the display of the notification area control. The user needs to either sign out and sign in or reboot the computer for this setting to take effect.
    *
    * @param bool $val The defenderSecurityCenterDisableNotificationAreaUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableNotificationAreaUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableNotificationAreaUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableRansomwareUI
    * Used to disable the display of the ransomware protection area. 
    *
    * @return bool The defenderSecurityCenterDisableRansomwareUI
    */
    public function getDefenderSecurityCenterDisableRansomwareUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableRansomwareUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableRansomwareUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableRansomwareUI
    * Used to disable the display of the ransomware protection area. 
    *
    * @param bool $val The defenderSecurityCenterDisableRansomwareUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableRansomwareUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableRansomwareUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableSecureBootUI
    * Used to disable the display of the secure boot area under Device security.
    *
    * @return bool The defenderSecurityCenterDisableSecureBootUI
    */
    public function getDefenderSecurityCenterDisableSecureBootUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableSecureBootUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableSecureBootUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableSecureBootUI
    * Used to disable the display of the secure boot area under Device security.
    *
    * @param bool $val The defenderSecurityCenterDisableSecureBootUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableSecureBootUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableSecureBootUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableTroubleshootingUI
    * Used to disable the display of the security process troubleshooting under Device security.
    *
    * @return bool The defenderSecurityCenterDisableTroubleshootingUI
    */
    public function getDefenderSecurityCenterDisableTroubleshootingUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableTroubleshootingUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableTroubleshootingUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableTroubleshootingUI
    * Used to disable the display of the security process troubleshooting under Device security.
    *
    * @param bool $val The defenderSecurityCenterDisableTroubleshootingUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableTroubleshootingUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableTroubleshootingUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI
    * Used to disable the display of update TPM Firmware when a vulnerable firmware is detected.
    *
    * @return bool The defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI
    */
    public function getDefenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI()
    {
        if (array_key_exists("defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI
    * Used to disable the display of update TPM Firmware when a vulnerable firmware is detected.
    *
    * @param bool $val The defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI($val)
    {
        $this->_propDict["defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterOrganizationDisplayName
    * The company name that is displayed to the users.
    *
    * @return string The defenderSecurityCenterOrganizationDisplayName
    */
    public function getDefenderSecurityCenterOrganizationDisplayName()
    {
        if (array_key_exists("defenderSecurityCenterOrganizationDisplayName", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterOrganizationDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterOrganizationDisplayName
    * The company name that is displayed to the users.
    *
    * @param string $val The defenderSecurityCenterOrganizationDisplayName
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterOrganizationDisplayName($val)
    {
        $this->_propDict["defenderSecurityCenterOrganizationDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterHelpEmail
    * The email address that is displayed to users.
    *
    * @return string The defenderSecurityCenterHelpEmail
    */
    public function getDefenderSecurityCenterHelpEmail()
    {
        if (array_key_exists("defenderSecurityCenterHelpEmail", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterHelpEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterHelpEmail
    * The email address that is displayed to users.
    *
    * @param string $val The defenderSecurityCenterHelpEmail
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterHelpEmail($val)
    {
        $this->_propDict["defenderSecurityCenterHelpEmail"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterHelpPhone
    * The phone number or Skype ID that is displayed to users.
    *
    * @return string The defenderSecurityCenterHelpPhone
    */
    public function getDefenderSecurityCenterHelpPhone()
    {
        if (array_key_exists("defenderSecurityCenterHelpPhone", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterHelpPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterHelpPhone
    * The phone number or Skype ID that is displayed to users.
    *
    * @param string $val The defenderSecurityCenterHelpPhone
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterHelpPhone($val)
    {
        $this->_propDict["defenderSecurityCenterHelpPhone"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterHelpURL
    * The help portal URL this is displayed to users.
    *
    * @return string The defenderSecurityCenterHelpURL
    */
    public function getDefenderSecurityCenterHelpURL()
    {
        if (array_key_exists("defenderSecurityCenterHelpURL", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterHelpURL"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterHelpURL
    * The help portal URL this is displayed to users.
    *
    * @param string $val The defenderSecurityCenterHelpURL
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterHelpURL($val)
    {
        $this->_propDict["defenderSecurityCenterHelpURL"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterNotificationsFromApp
    * Notifications to show from the displayed areas of app
    *
    * @return DefenderSecurityCenterNotificationsFromAppType The defenderSecurityCenterNotificationsFromApp
    */
    public function getDefenderSecurityCenterNotificationsFromApp()
    {
        if (array_key_exists("defenderSecurityCenterNotificationsFromApp", $this->_propDict)) {
            if (is_a($this->_propDict["defenderSecurityCenterNotificationsFromApp"], "Microsoft\Graph\Beta\Model\DefenderSecurityCenterNotificationsFromAppType")) {
                return $this->_propDict["defenderSecurityCenterNotificationsFromApp"];
            } else {
                $this->_propDict["defenderSecurityCenterNotificationsFromApp"] = new DefenderSecurityCenterNotificationsFromAppType($this->_propDict["defenderSecurityCenterNotificationsFromApp"]);
                return $this->_propDict["defenderSecurityCenterNotificationsFromApp"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderSecurityCenterNotificationsFromApp
    * Notifications to show from the displayed areas of app
    *
    * @param DefenderSecurityCenterNotificationsFromAppType $val The defenderSecurityCenterNotificationsFromApp
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterNotificationsFromApp($val)
    {
        $this->_propDict["defenderSecurityCenterNotificationsFromApp"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterITContactDisplay
    * Configure where to display IT contact information to end users.
    *
    * @return DefenderSecurityCenterITContactDisplayType The defenderSecurityCenterITContactDisplay
    */
    public function getDefenderSecurityCenterITContactDisplay()
    {
        if (array_key_exists("defenderSecurityCenterITContactDisplay", $this->_propDict)) {
            if (is_a($this->_propDict["defenderSecurityCenterITContactDisplay"], "Microsoft\Graph\Beta\Model\DefenderSecurityCenterITContactDisplayType")) {
                return $this->_propDict["defenderSecurityCenterITContactDisplay"];
            } else {
                $this->_propDict["defenderSecurityCenterITContactDisplay"] = new DefenderSecurityCenterITContactDisplayType($this->_propDict["defenderSecurityCenterITContactDisplay"]);
                return $this->_propDict["defenderSecurityCenterITContactDisplay"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderSecurityCenterITContactDisplay
    * Configure where to display IT contact information to end users.
    *
    * @param DefenderSecurityCenterITContactDisplayType $val The defenderSecurityCenterITContactDisplay
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterITContactDisplay($val)
    {
        $this->_propDict["defenderSecurityCenterITContactDisplay"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallBlockStatefulFTP
    * Blocks stateful FTP connections to the device
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
    * Blocks stateful FTP connections to the device
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
    * Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
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
    * Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
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
    * Select the preshared key encoding to be used. Possible values are: deviceDefault, none, utF8.
    *
    * @return FirewallPreSharedKeyEncodingMethodType The firewallPreSharedKeyEncodingMethod
    */
    public function getFirewallPreSharedKeyEncodingMethod()
    {
        if (array_key_exists("firewallPreSharedKeyEncodingMethod", $this->_propDict)) {
            if (is_a($this->_propDict["firewallPreSharedKeyEncodingMethod"], "Microsoft\Graph\Beta\Model\FirewallPreSharedKeyEncodingMethodType")) {
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
    * Select the preshared key encoding to be used. Possible values are: deviceDefault, none, utF8.
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
    * Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
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
    * Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
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
    * Configures IPSec exemptions to allow ICMP
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
    * Configures IPSec exemptions to allow ICMP
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
    * Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
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
    * Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
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
    * Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
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
    * Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
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
    * Specify how the certificate revocation list is to be enforced. Possible values are: deviceDefault, none, attempt, require.
    *
    * @return FirewallCertificateRevocationListCheckMethodType The firewallCertificateRevocationListCheckMethod
    */
    public function getFirewallCertificateRevocationListCheckMethod()
    {
        if (array_key_exists("firewallCertificateRevocationListCheckMethod", $this->_propDict)) {
            if (is_a($this->_propDict["firewallCertificateRevocationListCheckMethod"], "Microsoft\Graph\Beta\Model\FirewallCertificateRevocationListCheckMethodType")) {
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
    * Specify how the certificate revocation list is to be enforced. Possible values are: deviceDefault, none, attempt, require.
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
    * If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
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
    * If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
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
    * Configures how packet queueing should be applied in the tunnel gateway scenario. Possible values are: deviceDefault, disabled, queueInbound, queueOutbound, queueBoth.
    *
    * @return FirewallPacketQueueingMethodType The firewallPacketQueueingMethod
    */
    public function getFirewallPacketQueueingMethod()
    {
        if (array_key_exists("firewallPacketQueueingMethod", $this->_propDict)) {
            if (is_a($this->_propDict["firewallPacketQueueingMethod"], "Microsoft\Graph\Beta\Model\FirewallPacketQueueingMethodType")) {
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
    * Configures how packet queueing should be applied in the tunnel gateway scenario. Possible values are: deviceDefault, disabled, queueInbound, queueOutbound, queueBoth.
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
    * Configures the firewall profile settings for domain networks
    *
    * @return WindowsFirewallNetworkProfile The firewallProfileDomain
    */
    public function getFirewallProfileDomain()
    {
        if (array_key_exists("firewallProfileDomain", $this->_propDict)) {
            if (is_a($this->_propDict["firewallProfileDomain"], "Microsoft\Graph\Beta\Model\WindowsFirewallNetworkProfile")) {
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
    * Configures the firewall profile settings for domain networks
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
    * Configures the firewall profile settings for public networks
    *
    * @return WindowsFirewallNetworkProfile The firewallProfilePublic
    */
    public function getFirewallProfilePublic()
    {
        if (array_key_exists("firewallProfilePublic", $this->_propDict)) {
            if (is_a($this->_propDict["firewallProfilePublic"], "Microsoft\Graph\Beta\Model\WindowsFirewallNetworkProfile")) {
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
    * Configures the firewall profile settings for public networks
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
    * Configures the firewall profile settings for private networks
    *
    * @return WindowsFirewallNetworkProfile The firewallProfilePrivate
    */
    public function getFirewallProfilePrivate()
    {
        if (array_key_exists("firewallProfilePrivate", $this->_propDict)) {
            if (is_a($this->_propDict["firewallProfilePrivate"], "Microsoft\Graph\Beta\Model\WindowsFirewallNetworkProfile")) {
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
    * Configures the firewall profile settings for private networks
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
    * Gets the defenderAdobeReaderLaunchChildProcess
    * Value indicating the behavior of Adobe Reader from creating child processes
    *
    * @return DefenderProtectionType The defenderAdobeReaderLaunchChildProcess
    */
    public function getDefenderAdobeReaderLaunchChildProcess()
    {
        if (array_key_exists("defenderAdobeReaderLaunchChildProcess", $this->_propDict)) {
            if (is_a($this->_propDict["defenderAdobeReaderLaunchChildProcess"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderAdobeReaderLaunchChildProcess"];
            } else {
                $this->_propDict["defenderAdobeReaderLaunchChildProcess"] = new DefenderProtectionType($this->_propDict["defenderAdobeReaderLaunchChildProcess"]);
                return $this->_propDict["defenderAdobeReaderLaunchChildProcess"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderAdobeReaderLaunchChildProcess
    * Value indicating the behavior of Adobe Reader from creating child processes
    *
    * @param DefenderProtectionType $val The defenderAdobeReaderLaunchChildProcess
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderAdobeReaderLaunchChildProcess($val)
    {
        $this->_propDict["defenderAdobeReaderLaunchChildProcess"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderAttackSurfaceReductionExcludedPaths
    * List of exe files and folders to be excluded from attack surface reduction rules
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
    * List of exe files and folders to be excluded from attack surface reduction rules
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
    * Gets the defenderOfficeAppsOtherProcessInjectionType
    * Value indicating the behavior ofÂ Office applications injecting into other processes
    *
    * @return DefenderAttackSurfaceType The defenderOfficeAppsOtherProcessInjectionType
    */
    public function getDefenderOfficeAppsOtherProcessInjectionType()
    {
        if (array_key_exists("defenderOfficeAppsOtherProcessInjectionType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderOfficeAppsOtherProcessInjectionType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderOfficeAppsOtherProcessInjectionType"];
            } else {
                $this->_propDict["defenderOfficeAppsOtherProcessInjectionType"] = new DefenderAttackSurfaceType($this->_propDict["defenderOfficeAppsOtherProcessInjectionType"]);
                return $this->_propDict["defenderOfficeAppsOtherProcessInjectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderOfficeAppsOtherProcessInjectionType
    * Value indicating the behavior ofÂ Office applications injecting into other processes
    *
    * @param DefenderAttackSurfaceType $val The defenderOfficeAppsOtherProcessInjectionType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderOfficeAppsOtherProcessInjectionType($val)
    {
        $this->_propDict["defenderOfficeAppsOtherProcessInjectionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderOfficeAppsOtherProcessInjection
    * Value indicating the behavior ofÂ  Office applications injecting into other processes
    *
    * @return DefenderProtectionType The defenderOfficeAppsOtherProcessInjection
    */
    public function getDefenderOfficeAppsOtherProcessInjection()
    {
        if (array_key_exists("defenderOfficeAppsOtherProcessInjection", $this->_propDict)) {
            if (is_a($this->_propDict["defenderOfficeAppsOtherProcessInjection"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderOfficeAppsOtherProcessInjection"];
            } else {
                $this->_propDict["defenderOfficeAppsOtherProcessInjection"] = new DefenderProtectionType($this->_propDict["defenderOfficeAppsOtherProcessInjection"]);
                return $this->_propDict["defenderOfficeAppsOtherProcessInjection"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderOfficeAppsOtherProcessInjection
    * Value indicating the behavior ofÂ  Office applications injecting into other processes
    *
    * @param DefenderProtectionType $val The defenderOfficeAppsOtherProcessInjection
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderOfficeAppsOtherProcessInjection($val)
    {
        $this->_propDict["defenderOfficeAppsOtherProcessInjection"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderOfficeCommunicationAppsLaunchChildProcess
    * Value indicating the behavior of Office communication applications, including Microsoft Outlook, from creating child processes
    *
    * @return DefenderProtectionType The defenderOfficeCommunicationAppsLaunchChildProcess
    */
    public function getDefenderOfficeCommunicationAppsLaunchChildProcess()
    {
        if (array_key_exists("defenderOfficeCommunicationAppsLaunchChildProcess", $this->_propDict)) {
            if (is_a($this->_propDict["defenderOfficeCommunicationAppsLaunchChildProcess"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderOfficeCommunicationAppsLaunchChildProcess"];
            } else {
                $this->_propDict["defenderOfficeCommunicationAppsLaunchChildProcess"] = new DefenderProtectionType($this->_propDict["defenderOfficeCommunicationAppsLaunchChildProcess"]);
                return $this->_propDict["defenderOfficeCommunicationAppsLaunchChildProcess"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderOfficeCommunicationAppsLaunchChildProcess
    * Value indicating the behavior of Office communication applications, including Microsoft Outlook, from creating child processes
    *
    * @param DefenderProtectionType $val The defenderOfficeCommunicationAppsLaunchChildProcess
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderOfficeCommunicationAppsLaunchChildProcess($val)
    {
        $this->_propDict["defenderOfficeCommunicationAppsLaunchChildProcess"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderOfficeAppsExecutableContentCreationOrLaunchType
    * Value indicating the behavior of Office applications/macros creating or launching executable content
    *
    * @return DefenderAttackSurfaceType The defenderOfficeAppsExecutableContentCreationOrLaunchType
    */
    public function getDefenderOfficeAppsExecutableContentCreationOrLaunchType()
    {
        if (array_key_exists("defenderOfficeAppsExecutableContentCreationOrLaunchType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunchType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunchType"];
            } else {
                $this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunchType"] = new DefenderAttackSurfaceType($this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunchType"]);
                return $this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunchType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderOfficeAppsExecutableContentCreationOrLaunchType
    * Value indicating the behavior of Office applications/macros creating or launching executable content
    *
    * @param DefenderAttackSurfaceType $val The defenderOfficeAppsExecutableContentCreationOrLaunchType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderOfficeAppsExecutableContentCreationOrLaunchType($val)
    {
        $this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunchType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderOfficeAppsExecutableContentCreationOrLaunch
    * Value indicating the behavior of Office applications/macros creating or launching executable content
    *
    * @return DefenderProtectionType The defenderOfficeAppsExecutableContentCreationOrLaunch
    */
    public function getDefenderOfficeAppsExecutableContentCreationOrLaunch()
    {
        if (array_key_exists("defenderOfficeAppsExecutableContentCreationOrLaunch", $this->_propDict)) {
            if (is_a($this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunch"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunch"];
            } else {
                $this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunch"] = new DefenderProtectionType($this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunch"]);
                return $this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunch"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderOfficeAppsExecutableContentCreationOrLaunch
    * Value indicating the behavior of Office applications/macros creating or launching executable content
    *
    * @param DefenderProtectionType $val The defenderOfficeAppsExecutableContentCreationOrLaunch
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderOfficeAppsExecutableContentCreationOrLaunch($val)
    {
        $this->_propDict["defenderOfficeAppsExecutableContentCreationOrLaunch"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderOfficeAppsLaunchChildProcessType
    * Value indicating the behavior of Office application launching child processes
    *
    * @return DefenderAttackSurfaceType The defenderOfficeAppsLaunchChildProcessType
    */
    public function getDefenderOfficeAppsLaunchChildProcessType()
    {
        if (array_key_exists("defenderOfficeAppsLaunchChildProcessType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderOfficeAppsLaunchChildProcessType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderOfficeAppsLaunchChildProcessType"];
            } else {
                $this->_propDict["defenderOfficeAppsLaunchChildProcessType"] = new DefenderAttackSurfaceType($this->_propDict["defenderOfficeAppsLaunchChildProcessType"]);
                return $this->_propDict["defenderOfficeAppsLaunchChildProcessType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderOfficeAppsLaunchChildProcessType
    * Value indicating the behavior of Office application launching child processes
    *
    * @param DefenderAttackSurfaceType $val The defenderOfficeAppsLaunchChildProcessType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderOfficeAppsLaunchChildProcessType($val)
    {
        $this->_propDict["defenderOfficeAppsLaunchChildProcessType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderOfficeAppsLaunchChildProcess
    * Value indicating the behavior of Office application launching child processes
    *
    * @return DefenderProtectionType The defenderOfficeAppsLaunchChildProcess
    */
    public function getDefenderOfficeAppsLaunchChildProcess()
    {
        if (array_key_exists("defenderOfficeAppsLaunchChildProcess", $this->_propDict)) {
            if (is_a($this->_propDict["defenderOfficeAppsLaunchChildProcess"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderOfficeAppsLaunchChildProcess"];
            } else {
                $this->_propDict["defenderOfficeAppsLaunchChildProcess"] = new DefenderProtectionType($this->_propDict["defenderOfficeAppsLaunchChildProcess"]);
                return $this->_propDict["defenderOfficeAppsLaunchChildProcess"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderOfficeAppsLaunchChildProcess
    * Value indicating the behavior of Office application launching child processes
    *
    * @param DefenderProtectionType $val The defenderOfficeAppsLaunchChildProcess
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderOfficeAppsLaunchChildProcess($val)
    {
        $this->_propDict["defenderOfficeAppsLaunchChildProcess"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderOfficeMacroCodeAllowWin32ImportsType
    * Value indicating the behavior of Win32 imports from Macro code in Office
    *
    * @return DefenderAttackSurfaceType The defenderOfficeMacroCodeAllowWin32ImportsType
    */
    public function getDefenderOfficeMacroCodeAllowWin32ImportsType()
    {
        if (array_key_exists("defenderOfficeMacroCodeAllowWin32ImportsType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderOfficeMacroCodeAllowWin32ImportsType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderOfficeMacroCodeAllowWin32ImportsType"];
            } else {
                $this->_propDict["defenderOfficeMacroCodeAllowWin32ImportsType"] = new DefenderAttackSurfaceType($this->_propDict["defenderOfficeMacroCodeAllowWin32ImportsType"]);
                return $this->_propDict["defenderOfficeMacroCodeAllowWin32ImportsType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderOfficeMacroCodeAllowWin32ImportsType
    * Value indicating the behavior of Win32 imports from Macro code in Office
    *
    * @param DefenderAttackSurfaceType $val The defenderOfficeMacroCodeAllowWin32ImportsType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderOfficeMacroCodeAllowWin32ImportsType($val)
    {
        $this->_propDict["defenderOfficeMacroCodeAllowWin32ImportsType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderOfficeMacroCodeAllowWin32Imports
    * Value indicating the behavior of Win32 imports from Macro code in Office
    *
    * @return DefenderProtectionType The defenderOfficeMacroCodeAllowWin32Imports
    */
    public function getDefenderOfficeMacroCodeAllowWin32Imports()
    {
        if (array_key_exists("defenderOfficeMacroCodeAllowWin32Imports", $this->_propDict)) {
            if (is_a($this->_propDict["defenderOfficeMacroCodeAllowWin32Imports"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderOfficeMacroCodeAllowWin32Imports"];
            } else {
                $this->_propDict["defenderOfficeMacroCodeAllowWin32Imports"] = new DefenderProtectionType($this->_propDict["defenderOfficeMacroCodeAllowWin32Imports"]);
                return $this->_propDict["defenderOfficeMacroCodeAllowWin32Imports"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderOfficeMacroCodeAllowWin32Imports
    * Value indicating the behavior of Win32 imports from Macro code in Office
    *
    * @param DefenderProtectionType $val The defenderOfficeMacroCodeAllowWin32Imports
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderOfficeMacroCodeAllowWin32Imports($val)
    {
        $this->_propDict["defenderOfficeMacroCodeAllowWin32Imports"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderScriptObfuscatedMacroCodeType
    * Value indicating the behavior of obfuscated js/vbs/ps/macro code
    *
    * @return DefenderAttackSurfaceType The defenderScriptObfuscatedMacroCodeType
    */
    public function getDefenderScriptObfuscatedMacroCodeType()
    {
        if (array_key_exists("defenderScriptObfuscatedMacroCodeType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderScriptObfuscatedMacroCodeType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderScriptObfuscatedMacroCodeType"];
            } else {
                $this->_propDict["defenderScriptObfuscatedMacroCodeType"] = new DefenderAttackSurfaceType($this->_propDict["defenderScriptObfuscatedMacroCodeType"]);
                return $this->_propDict["defenderScriptObfuscatedMacroCodeType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderScriptObfuscatedMacroCodeType
    * Value indicating the behavior of obfuscated js/vbs/ps/macro code
    *
    * @param DefenderAttackSurfaceType $val The defenderScriptObfuscatedMacroCodeType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderScriptObfuscatedMacroCodeType($val)
    {
        $this->_propDict["defenderScriptObfuscatedMacroCodeType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderScriptObfuscatedMacroCode
    * Value indicating the behavior of obfuscated js/vbs/ps/macro code
    *
    * @return DefenderProtectionType The defenderScriptObfuscatedMacroCode
    */
    public function getDefenderScriptObfuscatedMacroCode()
    {
        if (array_key_exists("defenderScriptObfuscatedMacroCode", $this->_propDict)) {
            if (is_a($this->_propDict["defenderScriptObfuscatedMacroCode"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderScriptObfuscatedMacroCode"];
            } else {
                $this->_propDict["defenderScriptObfuscatedMacroCode"] = new DefenderProtectionType($this->_propDict["defenderScriptObfuscatedMacroCode"]);
                return $this->_propDict["defenderScriptObfuscatedMacroCode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderScriptObfuscatedMacroCode
    * Value indicating the behavior of obfuscated js/vbs/ps/macro code
    *
    * @param DefenderProtectionType $val The defenderScriptObfuscatedMacroCode
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderScriptObfuscatedMacroCode($val)
    {
        $this->_propDict["defenderScriptObfuscatedMacroCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderScriptDownloadedPayloadExecutionType
    * Value indicating the behavior of js/vbs executing payload downloaded from Internet
    *
    * @return DefenderAttackSurfaceType The defenderScriptDownloadedPayloadExecutionType
    */
    public function getDefenderScriptDownloadedPayloadExecutionType()
    {
        if (array_key_exists("defenderScriptDownloadedPayloadExecutionType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderScriptDownloadedPayloadExecutionType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderScriptDownloadedPayloadExecutionType"];
            } else {
                $this->_propDict["defenderScriptDownloadedPayloadExecutionType"] = new DefenderAttackSurfaceType($this->_propDict["defenderScriptDownloadedPayloadExecutionType"]);
                return $this->_propDict["defenderScriptDownloadedPayloadExecutionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderScriptDownloadedPayloadExecutionType
    * Value indicating the behavior of js/vbs executing payload downloaded from Internet
    *
    * @param DefenderAttackSurfaceType $val The defenderScriptDownloadedPayloadExecutionType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderScriptDownloadedPayloadExecutionType($val)
    {
        $this->_propDict["defenderScriptDownloadedPayloadExecutionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderScriptDownloadedPayloadExecution
    * Value indicating the behavior of js/vbs executing payload downloaded from Internet
    *
    * @return DefenderProtectionType The defenderScriptDownloadedPayloadExecution
    */
    public function getDefenderScriptDownloadedPayloadExecution()
    {
        if (array_key_exists("defenderScriptDownloadedPayloadExecution", $this->_propDict)) {
            if (is_a($this->_propDict["defenderScriptDownloadedPayloadExecution"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderScriptDownloadedPayloadExecution"];
            } else {
                $this->_propDict["defenderScriptDownloadedPayloadExecution"] = new DefenderProtectionType($this->_propDict["defenderScriptDownloadedPayloadExecution"]);
                return $this->_propDict["defenderScriptDownloadedPayloadExecution"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderScriptDownloadedPayloadExecution
    * Value indicating the behavior of js/vbs executing payload downloaded from Internet
    *
    * @param DefenderProtectionType $val The defenderScriptDownloadedPayloadExecution
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderScriptDownloadedPayloadExecution($val)
    {
        $this->_propDict["defenderScriptDownloadedPayloadExecution"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderPreventCredentialStealingType
    * Value indicating if credential stealing from the Windows local security authority subsystem is permitted
    *
    * @return DefenderProtectionType The defenderPreventCredentialStealingType
    */
    public function getDefenderPreventCredentialStealingType()
    {
        if (array_key_exists("defenderPreventCredentialStealingType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderPreventCredentialStealingType"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderPreventCredentialStealingType"];
            } else {
                $this->_propDict["defenderPreventCredentialStealingType"] = new DefenderProtectionType($this->_propDict["defenderPreventCredentialStealingType"]);
                return $this->_propDict["defenderPreventCredentialStealingType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderPreventCredentialStealingType
    * Value indicating if credential stealing from the Windows local security authority subsystem is permitted
    *
    * @param DefenderProtectionType $val The defenderPreventCredentialStealingType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderPreventCredentialStealingType($val)
    {
        $this->_propDict["defenderPreventCredentialStealingType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderProcessCreationType
    * Value indicating response to process creations originating from PSExec and WMI commands
    *
    * @return DefenderAttackSurfaceType The defenderProcessCreationType
    */
    public function getDefenderProcessCreationType()
    {
        if (array_key_exists("defenderProcessCreationType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderProcessCreationType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderProcessCreationType"];
            } else {
                $this->_propDict["defenderProcessCreationType"] = new DefenderAttackSurfaceType($this->_propDict["defenderProcessCreationType"]);
                return $this->_propDict["defenderProcessCreationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderProcessCreationType
    * Value indicating response to process creations originating from PSExec and WMI commands
    *
    * @param DefenderAttackSurfaceType $val The defenderProcessCreationType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderProcessCreationType($val)
    {
        $this->_propDict["defenderProcessCreationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderProcessCreation
    * Value indicating response to process creations originating from PSExec and WMI commands
    *
    * @return DefenderProtectionType The defenderProcessCreation
    */
    public function getDefenderProcessCreation()
    {
        if (array_key_exists("defenderProcessCreation", $this->_propDict)) {
            if (is_a($this->_propDict["defenderProcessCreation"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderProcessCreation"];
            } else {
                $this->_propDict["defenderProcessCreation"] = new DefenderProtectionType($this->_propDict["defenderProcessCreation"]);
                return $this->_propDict["defenderProcessCreation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderProcessCreation
    * Value indicating response to process creations originating from PSExec and WMI commands
    *
    * @param DefenderProtectionType $val The defenderProcessCreation
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderProcessCreation($val)
    {
        $this->_propDict["defenderProcessCreation"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderUntrustedUSBProcessType
    * Value indicating response to untrusted and unsigned processes that run from USB
    *
    * @return DefenderAttackSurfaceType The defenderUntrustedUSBProcessType
    */
    public function getDefenderUntrustedUSBProcessType()
    {
        if (array_key_exists("defenderUntrustedUSBProcessType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderUntrustedUSBProcessType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderUntrustedUSBProcessType"];
            } else {
                $this->_propDict["defenderUntrustedUSBProcessType"] = new DefenderAttackSurfaceType($this->_propDict["defenderUntrustedUSBProcessType"]);
                return $this->_propDict["defenderUntrustedUSBProcessType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderUntrustedUSBProcessType
    * Value indicating response to untrusted and unsigned processes that run from USB
    *
    * @param DefenderAttackSurfaceType $val The defenderUntrustedUSBProcessType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderUntrustedUSBProcessType($val)
    {
        $this->_propDict["defenderUntrustedUSBProcessType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderUntrustedUSBProcess
    * Value indicating response to untrusted and unsigned processes that run from USB
    *
    * @return DefenderProtectionType The defenderUntrustedUSBProcess
    */
    public function getDefenderUntrustedUSBProcess()
    {
        if (array_key_exists("defenderUntrustedUSBProcess", $this->_propDict)) {
            if (is_a($this->_propDict["defenderUntrustedUSBProcess"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderUntrustedUSBProcess"];
            } else {
                $this->_propDict["defenderUntrustedUSBProcess"] = new DefenderProtectionType($this->_propDict["defenderUntrustedUSBProcess"]);
                return $this->_propDict["defenderUntrustedUSBProcess"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderUntrustedUSBProcess
    * Value indicating response to untrusted and unsigned processes that run from USB
    *
    * @param DefenderProtectionType $val The defenderUntrustedUSBProcess
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderUntrustedUSBProcess($val)
    {
        $this->_propDict["defenderUntrustedUSBProcess"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderUntrustedExecutableType
    * Value indicating response to executables that don't meet a prevalence, age, or trusted list criteria
    *
    * @return DefenderAttackSurfaceType The defenderUntrustedExecutableType
    */
    public function getDefenderUntrustedExecutableType()
    {
        if (array_key_exists("defenderUntrustedExecutableType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderUntrustedExecutableType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderUntrustedExecutableType"];
            } else {
                $this->_propDict["defenderUntrustedExecutableType"] = new DefenderAttackSurfaceType($this->_propDict["defenderUntrustedExecutableType"]);
                return $this->_propDict["defenderUntrustedExecutableType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderUntrustedExecutableType
    * Value indicating response to executables that don't meet a prevalence, age, or trusted list criteria
    *
    * @param DefenderAttackSurfaceType $val The defenderUntrustedExecutableType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderUntrustedExecutableType($val)
    {
        $this->_propDict["defenderUntrustedExecutableType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderUntrustedExecutable
    * Value indicating response to executables that don't meet a prevalence, age, or trusted list criteria
    *
    * @return DefenderProtectionType The defenderUntrustedExecutable
    */
    public function getDefenderUntrustedExecutable()
    {
        if (array_key_exists("defenderUntrustedExecutable", $this->_propDict)) {
            if (is_a($this->_propDict["defenderUntrustedExecutable"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderUntrustedExecutable"];
            } else {
                $this->_propDict["defenderUntrustedExecutable"] = new DefenderProtectionType($this->_propDict["defenderUntrustedExecutable"]);
                return $this->_propDict["defenderUntrustedExecutable"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderUntrustedExecutable
    * Value indicating response to executables that don't meet a prevalence, age, or trusted list criteria
    *
    * @param DefenderProtectionType $val The defenderUntrustedExecutable
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderUntrustedExecutable($val)
    {
        $this->_propDict["defenderUntrustedExecutable"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderEmailContentExecutionType
    * Value indicating if execution of executable content (exe, dll, ps, js, vbs, etc) should be dropped from email (webmail/mail-client)
    *
    * @return DefenderAttackSurfaceType The defenderEmailContentExecutionType
    */
    public function getDefenderEmailContentExecutionType()
    {
        if (array_key_exists("defenderEmailContentExecutionType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderEmailContentExecutionType"], "Microsoft\Graph\Beta\Model\DefenderAttackSurfaceType")) {
                return $this->_propDict["defenderEmailContentExecutionType"];
            } else {
                $this->_propDict["defenderEmailContentExecutionType"] = new DefenderAttackSurfaceType($this->_propDict["defenderEmailContentExecutionType"]);
                return $this->_propDict["defenderEmailContentExecutionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderEmailContentExecutionType
    * Value indicating if execution of executable content (exe, dll, ps, js, vbs, etc) should be dropped from email (webmail/mail-client)
    *
    * @param DefenderAttackSurfaceType $val The defenderEmailContentExecutionType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderEmailContentExecutionType($val)
    {
        $this->_propDict["defenderEmailContentExecutionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderEmailContentExecution
    * Value indicating if execution of executable content (exe, dll, ps, js, vbs, etc) should be dropped from email (webmail/mail-client)
    *
    * @return DefenderProtectionType The defenderEmailContentExecution
    */
    public function getDefenderEmailContentExecution()
    {
        if (array_key_exists("defenderEmailContentExecution", $this->_propDict)) {
            if (is_a($this->_propDict["defenderEmailContentExecution"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderEmailContentExecution"];
            } else {
                $this->_propDict["defenderEmailContentExecution"] = new DefenderProtectionType($this->_propDict["defenderEmailContentExecution"]);
                return $this->_propDict["defenderEmailContentExecution"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderEmailContentExecution
    * Value indicating if execution of executable content (exe, dll, ps, js, vbs, etc) should be dropped from email (webmail/mail-client)
    *
    * @param DefenderProtectionType $val The defenderEmailContentExecution
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderEmailContentExecution($val)
    {
        $this->_propDict["defenderEmailContentExecution"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderAdvancedRansomewareProtectionType
    * Value indicating use of advanced protection against ransomeware
    *
    * @return DefenderProtectionType The defenderAdvancedRansomewareProtectionType
    */
    public function getDefenderAdvancedRansomewareProtectionType()
    {
        if (array_key_exists("defenderAdvancedRansomewareProtectionType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderAdvancedRansomewareProtectionType"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderAdvancedRansomewareProtectionType"];
            } else {
                $this->_propDict["defenderAdvancedRansomewareProtectionType"] = new DefenderProtectionType($this->_propDict["defenderAdvancedRansomewareProtectionType"]);
                return $this->_propDict["defenderAdvancedRansomewareProtectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderAdvancedRansomewareProtectionType
    * Value indicating use of advanced protection against ransomeware
    *
    * @param DefenderProtectionType $val The defenderAdvancedRansomewareProtectionType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderAdvancedRansomewareProtectionType($val)
    {
        $this->_propDict["defenderAdvancedRansomewareProtectionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderGuardMyFoldersType
    * Value indicating the behavior of protected folders
    *
    * @return FolderProtectionType The defenderGuardMyFoldersType
    */
    public function getDefenderGuardMyFoldersType()
    {
        if (array_key_exists("defenderGuardMyFoldersType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderGuardMyFoldersType"], "Microsoft\Graph\Beta\Model\FolderProtectionType")) {
                return $this->_propDict["defenderGuardMyFoldersType"];
            } else {
                $this->_propDict["defenderGuardMyFoldersType"] = new FolderProtectionType($this->_propDict["defenderGuardMyFoldersType"]);
                return $this->_propDict["defenderGuardMyFoldersType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderGuardMyFoldersType
    * Value indicating the behavior of protected folders
    *
    * @param FolderProtectionType $val The defenderGuardMyFoldersType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderGuardMyFoldersType($val)
    {
        $this->_propDict["defenderGuardMyFoldersType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderGuardedFoldersAllowedAppPaths
    * List of paths to exe that are allowed to access protected folders
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
    * List of paths to exe that are allowed to access protected folders
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
    * List of folder paths to be added to the list of protected folders
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
    * List of folder paths to be added to the list of protected folders
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
    * Gets the defenderNetworkProtectionType
    * Value indicating the behavior of NetworkProtection
    *
    * @return DefenderProtectionType The defenderNetworkProtectionType
    */
    public function getDefenderNetworkProtectionType()
    {
        if (array_key_exists("defenderNetworkProtectionType", $this->_propDict)) {
            if (is_a($this->_propDict["defenderNetworkProtectionType"], "Microsoft\Graph\Beta\Model\DefenderProtectionType")) {
                return $this->_propDict["defenderNetworkProtectionType"];
            } else {
                $this->_propDict["defenderNetworkProtectionType"] = new DefenderProtectionType($this->_propDict["defenderNetworkProtectionType"]);
                return $this->_propDict["defenderNetworkProtectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderNetworkProtectionType
    * Value indicating the behavior of NetworkProtection
    *
    * @param DefenderProtectionType $val The defenderNetworkProtectionType
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderNetworkProtectionType($val)
    {
        $this->_propDict["defenderNetworkProtectionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderExploitProtectionXml
    * Xml content containing information regarding exploit protection details.
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
    * Xml content containing information regarding exploit protection details.
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
    * Name of the file from which DefenderExploitProtectionXml was obtained.
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
    * Name of the file from which DefenderExploitProtectionXml was obtained.
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
    * Indicates whether or not to block user from overriding Exploit Protection settings.
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
    * Indicates whether or not to block user from overriding Exploit Protection settings.
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
    * Enables the Admin to choose what types of app to allow on devices. Possible values are: notConfigured, enforceComponentsAndStoreApps, auditComponentsAndStoreApps, enforceComponentsStoreAppsAndSmartlocker, auditComponentsStoreAppsAndSmartlocker.
    *
    * @return AppLockerApplicationControlType The appLockerApplicationControl
    */
    public function getAppLockerApplicationControl()
    {
        if (array_key_exists("appLockerApplicationControl", $this->_propDict)) {
            if (is_a($this->_propDict["appLockerApplicationControl"], "Microsoft\Graph\Beta\Model\AppLockerApplicationControlType")) {
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
    * Enables the Admin to choose what types of app to allow on devices. Possible values are: notConfigured, enforceComponentsAndStoreApps, auditComponentsAndStoreApps, enforceComponentsStoreAppsAndSmartlocker, auditComponentsStoreAppsAndSmartlocker.
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
    * Gets the deviceGuardLocalSystemAuthorityCredentialGuardSettings
    * Turn on Credential Guard when Platform Security Level with Secure Boot and Virtualization Based Security are both enabled.
    *
    * @return DeviceGuardLocalSystemAuthorityCredentialGuardType The deviceGuardLocalSystemAuthorityCredentialGuardSettings
    */
    public function getDeviceGuardLocalSystemAuthorityCredentialGuardSettings()
    {
        if (array_key_exists("deviceGuardLocalSystemAuthorityCredentialGuardSettings", $this->_propDict)) {
            if (is_a($this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardSettings"], "Microsoft\Graph\Beta\Model\DeviceGuardLocalSystemAuthorityCredentialGuardType")) {
                return $this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardSettings"];
            } else {
                $this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardSettings"] = new DeviceGuardLocalSystemAuthorityCredentialGuardType($this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardSettings"]);
                return $this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceGuardLocalSystemAuthorityCredentialGuardSettings
    * Turn on Credential Guard when Platform Security Level with Secure Boot and Virtualization Based Security are both enabled.
    *
    * @param DeviceGuardLocalSystemAuthorityCredentialGuardType $val The deviceGuardLocalSystemAuthorityCredentialGuardSettings
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDeviceGuardLocalSystemAuthorityCredentialGuardSettings($val)
    {
        $this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceGuardEnableVirtualizationBasedSecurity
    * Turns On Virtualization Based Security(VBS).
    *
    * @return bool The deviceGuardEnableVirtualizationBasedSecurity
    */
    public function getDeviceGuardEnableVirtualizationBasedSecurity()
    {
        if (array_key_exists("deviceGuardEnableVirtualizationBasedSecurity", $this->_propDict)) {
            return $this->_propDict["deviceGuardEnableVirtualizationBasedSecurity"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceGuardEnableVirtualizationBasedSecurity
    * Turns On Virtualization Based Security(VBS).
    *
    * @param bool $val The deviceGuardEnableVirtualizationBasedSecurity
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDeviceGuardEnableVirtualizationBasedSecurity($val)
    {
        $this->_propDict["deviceGuardEnableVirtualizationBasedSecurity"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceGuardEnableSecureBootWithDMA
    * Specifies whether Platform Security Level is enabled at next reboot.
    *
    * @return bool The deviceGuardEnableSecureBootWithDMA
    */
    public function getDeviceGuardEnableSecureBootWithDMA()
    {
        if (array_key_exists("deviceGuardEnableSecureBootWithDMA", $this->_propDict)) {
            return $this->_propDict["deviceGuardEnableSecureBootWithDMA"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceGuardEnableSecureBootWithDMA
    * Specifies whether Platform Security Level is enabled at next reboot.
    *
    * @param bool $val The deviceGuardEnableSecureBootWithDMA
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDeviceGuardEnableSecureBootWithDMA($val)
    {
        $this->_propDict["deviceGuardEnableSecureBootWithDMA"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceGuardLaunchSystemGuard
    * Allows the IT admin to configure the launch of System Guard.
    *
    * @return Enablement The deviceGuardLaunchSystemGuard
    */
    public function getDeviceGuardLaunchSystemGuard()
    {
        if (array_key_exists("deviceGuardLaunchSystemGuard", $this->_propDict)) {
            if (is_a($this->_propDict["deviceGuardLaunchSystemGuard"], "Microsoft\Graph\Beta\Model\Enablement")) {
                return $this->_propDict["deviceGuardLaunchSystemGuard"];
            } else {
                $this->_propDict["deviceGuardLaunchSystemGuard"] = new Enablement($this->_propDict["deviceGuardLaunchSystemGuard"]);
                return $this->_propDict["deviceGuardLaunchSystemGuard"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceGuardLaunchSystemGuard
    * Allows the IT admin to configure the launch of System Guard.
    *
    * @param Enablement $val The deviceGuardLaunchSystemGuard
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDeviceGuardLaunchSystemGuard($val)
    {
        $this->_propDict["deviceGuardLaunchSystemGuard"] = $val;
        return $this;
    }
    
    /**
    * Gets the smartScreenEnableInShell
    * Allows IT Admins to configure SmartScreen for Windows.
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
    * Allows IT Admins to configure SmartScreen for Windows.
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
    * Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
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
    * Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
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
    * Enable Windows Defender Application Guard
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
    * Enable Windows Defender Application Guard
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
    * Gets the applicationGuardEnabledOptions
    * Enable Windows Defender Application Guard for newer Windows builds
    *
    * @return ApplicationGuardEnabledOptions The applicationGuardEnabledOptions
    */
    public function getApplicationGuardEnabledOptions()
    {
        if (array_key_exists("applicationGuardEnabledOptions", $this->_propDict)) {
            if (is_a($this->_propDict["applicationGuardEnabledOptions"], "Microsoft\Graph\Beta\Model\ApplicationGuardEnabledOptions")) {
                return $this->_propDict["applicationGuardEnabledOptions"];
            } else {
                $this->_propDict["applicationGuardEnabledOptions"] = new ApplicationGuardEnabledOptions($this->_propDict["applicationGuardEnabledOptions"]);
                return $this->_propDict["applicationGuardEnabledOptions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicationGuardEnabledOptions
    * Enable Windows Defender Application Guard for newer Windows builds
    *
    * @param ApplicationGuardEnabledOptions $val The applicationGuardEnabledOptions
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardEnabledOptions($val)
    {
        $this->_propDict["applicationGuardEnabledOptions"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicationGuardBlockFileTransfer
    * Block clipboard to transfer image file, text file or neither of them. Possible values are: notConfigured, blockImageAndTextFile, blockImageFile, blockNone, blockTextFile.
    *
    * @return ApplicationGuardBlockFileTransferType The applicationGuardBlockFileTransfer
    */
    public function getApplicationGuardBlockFileTransfer()
    {
        if (array_key_exists("applicationGuardBlockFileTransfer", $this->_propDict)) {
            if (is_a($this->_propDict["applicationGuardBlockFileTransfer"], "Microsoft\Graph\Beta\Model\ApplicationGuardBlockFileTransferType")) {
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
    * Block clipboard to transfer image file, text file or neither of them. Possible values are: notConfigured, blockImageAndTextFile, blockImageFile, blockNone, blockTextFile.
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
    * Block enterprise sites to load non-enterprise content, such as third party plug-ins
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
    * Block enterprise sites to load non-enterprise content, such as third party plug-ins
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
    * Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
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
    * Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
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
    * Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
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
    * Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
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
    * Block clipboard to share data from Host to Container, or from Container to Host, or both ways, or neither ways. Possible values are: notConfigured, blockBoth, blockHostToContainer, blockContainerToHost, blockNone.
    *
    * @return ApplicationGuardBlockClipboardSharingType The applicationGuardBlockClipboardSharing
    */
    public function getApplicationGuardBlockClipboardSharing()
    {
        if (array_key_exists("applicationGuardBlockClipboardSharing", $this->_propDict)) {
            if (is_a($this->_propDict["applicationGuardBlockClipboardSharing"], "Microsoft\Graph\Beta\Model\ApplicationGuardBlockClipboardSharingType")) {
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
    * Block clipboard to share data from Host to Container, or from Container to Host, or both ways, or neither ways. Possible values are: notConfigured, blockBoth, blockHostToContainer, blockContainerToHost, blockNone.
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
    * Allow printing to PDF from Container
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
    * Allow printing to PDF from Container
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
    * Allow printing to XPS from Container
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
    * Allow printing to XPS from Container
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
    * Allow printing to Local Printers from Container
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
    * Allow printing to Local Printers from Container
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
    * Allow printing to Network Printers from Container
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
    * Allow printing to Network Printers from Container
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
    * Gets the applicationGuardAllowVirtualGPU
    * Allow application guard to use virtual GPU
    *
    * @return bool The applicationGuardAllowVirtualGPU
    */
    public function getApplicationGuardAllowVirtualGPU()
    {
        if (array_key_exists("applicationGuardAllowVirtualGPU", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowVirtualGPU"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowVirtualGPU
    * Allow application guard to use virtual GPU
    *
    * @param bool $val The applicationGuardAllowVirtualGPU
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowVirtualGPU($val)
    {
        $this->_propDict["applicationGuardAllowVirtualGPU"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowFileSaveOnHost
    * Allow users to download files from Edge in the application guard container and save them on the host file system
    *
    * @return bool The applicationGuardAllowFileSaveOnHost
    */
    public function getApplicationGuardAllowFileSaveOnHost()
    {
        if (array_key_exists("applicationGuardAllowFileSaveOnHost", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowFileSaveOnHost"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowFileSaveOnHost
    * Allow users to download files from Edge in the application guard container and save them on the host file system
    *
    * @param bool $val The applicationGuardAllowFileSaveOnHost
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowFileSaveOnHost($val)
    {
        $this->_propDict["applicationGuardAllowFileSaveOnHost"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerAllowStandardUserEncryption
    * Allows the admin to allow standard users to enable encrpytion during Azure AD Join.
    *
    * @return bool The bitLockerAllowStandardUserEncryption
    */
    public function getBitLockerAllowStandardUserEncryption()
    {
        if (array_key_exists("bitLockerAllowStandardUserEncryption", $this->_propDict)) {
            return $this->_propDict["bitLockerAllowStandardUserEncryption"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bitLockerAllowStandardUserEncryption
    * Allows the admin to allow standard users to enable encrpytion during Azure AD Join.
    *
    * @param bool $val The bitLockerAllowStandardUserEncryption
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerAllowStandardUserEncryption($val)
    {
        $this->_propDict["bitLockerAllowStandardUserEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerDisableWarningForOtherDiskEncryption
    * Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
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
    * Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
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
    * Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
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
    * Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
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
    * Allows the admin to require encryption to be turned on using BitLocker.
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
    * Allows the admin to require encryption to be turned on using BitLocker.
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
    * Gets the bitLockerSystemDrivePolicy
    * BitLocker System Drive Policy.
    *
    * @return BitLockerSystemDrivePolicy The bitLockerSystemDrivePolicy
    */
    public function getBitLockerSystemDrivePolicy()
    {
        if (array_key_exists("bitLockerSystemDrivePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["bitLockerSystemDrivePolicy"], "Microsoft\Graph\Beta\Model\BitLockerSystemDrivePolicy")) {
                return $this->_propDict["bitLockerSystemDrivePolicy"];
            } else {
                $this->_propDict["bitLockerSystemDrivePolicy"] = new BitLockerSystemDrivePolicy($this->_propDict["bitLockerSystemDrivePolicy"]);
                return $this->_propDict["bitLockerSystemDrivePolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bitLockerSystemDrivePolicy
    * BitLocker System Drive Policy.
    *
    * @param BitLockerSystemDrivePolicy $val The bitLockerSystemDrivePolicy
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerSystemDrivePolicy($val)
    {
        $this->_propDict["bitLockerSystemDrivePolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the bitLockerFixedDrivePolicy
    * BitLocker Fixed Drive Policy.
    *
    * @return BitLockerFixedDrivePolicy The bitLockerFixedDrivePolicy
    */
    public function getBitLockerFixedDrivePolicy()
    {
        if (array_key_exists("bitLockerFixedDrivePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["bitLockerFixedDrivePolicy"], "Microsoft\Graph\Beta\Model\BitLockerFixedDrivePolicy")) {
                return $this->_propDict["bitLockerFixedDrivePolicy"];
            } else {
                $this->_propDict["bitLockerFixedDrivePolicy"] = new BitLockerFixedDrivePolicy($this->_propDict["bitLockerFixedDrivePolicy"]);
                return $this->_propDict["bitLockerFixedDrivePolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bitLockerFixedDrivePolicy
    * BitLocker Fixed Drive Policy.
    *
    * @param BitLockerFixedDrivePolicy $val The bitLockerFixedDrivePolicy
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerFixedDrivePolicy($val)
    {
        $this->_propDict["bitLockerFixedDrivePolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the bitLockerRemovableDrivePolicy
    * BitLocker Removable Drive Policy.
    *
    * @return BitLockerRemovableDrivePolicy The bitLockerRemovableDrivePolicy
    */
    public function getBitLockerRemovableDrivePolicy()
    {
        if (array_key_exists("bitLockerRemovableDrivePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["bitLockerRemovableDrivePolicy"], "Microsoft\Graph\Beta\Model\BitLockerRemovableDrivePolicy")) {
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
    * BitLocker Removable Drive Policy.
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