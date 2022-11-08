<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesDirectorySynchronizationFeature File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* OnPremisesDirectorySynchronizationFeature class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesDirectorySynchronizationFeature extends Entity
{
    /**
    * Gets the blockCloudObjectTakeoverThroughHardMatchEnabled
    *
    * @return bool|null The blockCloudObjectTakeoverThroughHardMatchEnabled
    */
    public function getBlockCloudObjectTakeoverThroughHardMatchEnabled()
    {
        if (array_key_exists("blockCloudObjectTakeoverThroughHardMatchEnabled", $this->_propDict)) {
            return $this->_propDict["blockCloudObjectTakeoverThroughHardMatchEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockCloudObjectTakeoverThroughHardMatchEnabled
    *
    * @param bool $val The value of the blockCloudObjectTakeoverThroughHardMatchEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setBlockCloudObjectTakeoverThroughHardMatchEnabled($val)
    {
        $this->_propDict["blockCloudObjectTakeoverThroughHardMatchEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the blockSoftMatchEnabled
    *
    * @return bool|null The blockSoftMatchEnabled
    */
    public function getBlockSoftMatchEnabled()
    {
        if (array_key_exists("blockSoftMatchEnabled", $this->_propDict)) {
            return $this->_propDict["blockSoftMatchEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockSoftMatchEnabled
    *
    * @param bool $val The value of the blockSoftMatchEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setBlockSoftMatchEnabled($val)
    {
        $this->_propDict["blockSoftMatchEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the bypassDirSyncOverridesEnabled
    *
    * @return bool|null The bypassDirSyncOverridesEnabled
    */
    public function getBypassDirSyncOverridesEnabled()
    {
        if (array_key_exists("bypassDirSyncOverridesEnabled", $this->_propDict)) {
            return $this->_propDict["bypassDirSyncOverridesEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bypassDirSyncOverridesEnabled
    *
    * @param bool $val The value of the bypassDirSyncOverridesEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setBypassDirSyncOverridesEnabled($val)
    {
        $this->_propDict["bypassDirSyncOverridesEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the cloudPasswordPolicyForPasswordSyncedUsersEnabled
    *
    * @return bool|null The cloudPasswordPolicyForPasswordSyncedUsersEnabled
    */
    public function getCloudPasswordPolicyForPasswordSyncedUsersEnabled()
    {
        if (array_key_exists("cloudPasswordPolicyForPasswordSyncedUsersEnabled", $this->_propDict)) {
            return $this->_propDict["cloudPasswordPolicyForPasswordSyncedUsersEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPasswordPolicyForPasswordSyncedUsersEnabled
    *
    * @param bool $val The value of the cloudPasswordPolicyForPasswordSyncedUsersEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setCloudPasswordPolicyForPasswordSyncedUsersEnabled($val)
    {
        $this->_propDict["cloudPasswordPolicyForPasswordSyncedUsersEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the concurrentCredentialUpdateEnabled
    *
    * @return bool|null The concurrentCredentialUpdateEnabled
    */
    public function getConcurrentCredentialUpdateEnabled()
    {
        if (array_key_exists("concurrentCredentialUpdateEnabled", $this->_propDict)) {
            return $this->_propDict["concurrentCredentialUpdateEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the concurrentCredentialUpdateEnabled
    *
    * @param bool $val The value of the concurrentCredentialUpdateEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setConcurrentCredentialUpdateEnabled($val)
    {
        $this->_propDict["concurrentCredentialUpdateEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the concurrentOrgIdProvisioningEnabled
    *
    * @return bool|null The concurrentOrgIdProvisioningEnabled
    */
    public function getConcurrentOrgIdProvisioningEnabled()
    {
        if (array_key_exists("concurrentOrgIdProvisioningEnabled", $this->_propDict)) {
            return $this->_propDict["concurrentOrgIdProvisioningEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the concurrentOrgIdProvisioningEnabled
    *
    * @param bool $val The value of the concurrentOrgIdProvisioningEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setConcurrentOrgIdProvisioningEnabled($val)
    {
        $this->_propDict["concurrentOrgIdProvisioningEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the deviceWritebackEnabled
    *
    * @return bool|null The deviceWritebackEnabled
    */
    public function getDeviceWritebackEnabled()
    {
        if (array_key_exists("deviceWritebackEnabled", $this->_propDict)) {
            return $this->_propDict["deviceWritebackEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceWritebackEnabled
    *
    * @param bool $val The value of the deviceWritebackEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setDeviceWritebackEnabled($val)
    {
        $this->_propDict["deviceWritebackEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the directoryExtensionsEnabled
    *
    * @return bool|null The directoryExtensionsEnabled
    */
    public function getDirectoryExtensionsEnabled()
    {
        if (array_key_exists("directoryExtensionsEnabled", $this->_propDict)) {
            return $this->_propDict["directoryExtensionsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the directoryExtensionsEnabled
    *
    * @param bool $val The value of the directoryExtensionsEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setDirectoryExtensionsEnabled($val)
    {
        $this->_propDict["directoryExtensionsEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the fopeConflictResolutionEnabled
    *
    * @return bool|null The fopeConflictResolutionEnabled
    */
    public function getFopeConflictResolutionEnabled()
    {
        if (array_key_exists("fopeConflictResolutionEnabled", $this->_propDict)) {
            return $this->_propDict["fopeConflictResolutionEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fopeConflictResolutionEnabled
    *
    * @param bool $val The value of the fopeConflictResolutionEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setFopeConflictResolutionEnabled($val)
    {
        $this->_propDict["fopeConflictResolutionEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the groupWriteBackEnabled
    *
    * @return bool|null The groupWriteBackEnabled
    */
    public function getGroupWriteBackEnabled()
    {
        if (array_key_exists("groupWriteBackEnabled", $this->_propDict)) {
            return $this->_propDict["groupWriteBackEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupWriteBackEnabled
    *
    * @param bool $val The value of the groupWriteBackEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setGroupWriteBackEnabled($val)
    {
        $this->_propDict["groupWriteBackEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the passwordSyncEnabled
    *
    * @return bool|null The passwordSyncEnabled
    */
    public function getPasswordSyncEnabled()
    {
        if (array_key_exists("passwordSyncEnabled", $this->_propDict)) {
            return $this->_propDict["passwordSyncEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordSyncEnabled
    *
    * @param bool $val The value of the passwordSyncEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setPasswordSyncEnabled($val)
    {
        $this->_propDict["passwordSyncEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the passwordWritebackEnabled
    *
    * @return bool|null The passwordWritebackEnabled
    */
    public function getPasswordWritebackEnabled()
    {
        if (array_key_exists("passwordWritebackEnabled", $this->_propDict)) {
            return $this->_propDict["passwordWritebackEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordWritebackEnabled
    *
    * @param bool $val The value of the passwordWritebackEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setPasswordWritebackEnabled($val)
    {
        $this->_propDict["passwordWritebackEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the quarantineUponProxyAddressesConflictEnabled
    *
    * @return bool|null The quarantineUponProxyAddressesConflictEnabled
    */
    public function getQuarantineUponProxyAddressesConflictEnabled()
    {
        if (array_key_exists("quarantineUponProxyAddressesConflictEnabled", $this->_propDict)) {
            return $this->_propDict["quarantineUponProxyAddressesConflictEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the quarantineUponProxyAddressesConflictEnabled
    *
    * @param bool $val The value of the quarantineUponProxyAddressesConflictEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setQuarantineUponProxyAddressesConflictEnabled($val)
    {
        $this->_propDict["quarantineUponProxyAddressesConflictEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the quarantineUponUpnConflictEnabled
    *
    * @return bool|null The quarantineUponUpnConflictEnabled
    */
    public function getQuarantineUponUpnConflictEnabled()
    {
        if (array_key_exists("quarantineUponUpnConflictEnabled", $this->_propDict)) {
            return $this->_propDict["quarantineUponUpnConflictEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the quarantineUponUpnConflictEnabled
    *
    * @param bool $val The value of the quarantineUponUpnConflictEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setQuarantineUponUpnConflictEnabled($val)
    {
        $this->_propDict["quarantineUponUpnConflictEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the softMatchOnUpnEnabled
    *
    * @return bool|null The softMatchOnUpnEnabled
    */
    public function getSoftMatchOnUpnEnabled()
    {
        if (array_key_exists("softMatchOnUpnEnabled", $this->_propDict)) {
            return $this->_propDict["softMatchOnUpnEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the softMatchOnUpnEnabled
    *
    * @param bool $val The value of the softMatchOnUpnEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setSoftMatchOnUpnEnabled($val)
    {
        $this->_propDict["softMatchOnUpnEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the synchronizeUpnForManagedUsersEnabled
    *
    * @return bool|null The synchronizeUpnForManagedUsersEnabled
    */
    public function getSynchronizeUpnForManagedUsersEnabled()
    {
        if (array_key_exists("synchronizeUpnForManagedUsersEnabled", $this->_propDict)) {
            return $this->_propDict["synchronizeUpnForManagedUsersEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the synchronizeUpnForManagedUsersEnabled
    *
    * @param bool $val The value of the synchronizeUpnForManagedUsersEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setSynchronizeUpnForManagedUsersEnabled($val)
    {
        $this->_propDict["synchronizeUpnForManagedUsersEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the unifiedGroupWritebackEnabled
    *
    * @return bool|null The unifiedGroupWritebackEnabled
    */
    public function getUnifiedGroupWritebackEnabled()
    {
        if (array_key_exists("unifiedGroupWritebackEnabled", $this->_propDict)) {
            return $this->_propDict["unifiedGroupWritebackEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unifiedGroupWritebackEnabled
    *
    * @param bool $val The value of the unifiedGroupWritebackEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setUnifiedGroupWritebackEnabled($val)
    {
        $this->_propDict["unifiedGroupWritebackEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the userForcePasswordChangeOnLogonEnabled
    *
    * @return bool|null The userForcePasswordChangeOnLogonEnabled
    */
    public function getUserForcePasswordChangeOnLogonEnabled()
    {
        if (array_key_exists("userForcePasswordChangeOnLogonEnabled", $this->_propDict)) {
            return $this->_propDict["userForcePasswordChangeOnLogonEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userForcePasswordChangeOnLogonEnabled
    *
    * @param bool $val The value of the userForcePasswordChangeOnLogonEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setUserForcePasswordChangeOnLogonEnabled($val)
    {
        $this->_propDict["userForcePasswordChangeOnLogonEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the userWritebackEnabled
    *
    * @return bool|null The userWritebackEnabled
    */
    public function getUserWritebackEnabled()
    {
        if (array_key_exists("userWritebackEnabled", $this->_propDict)) {
            return $this->_propDict["userWritebackEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userWritebackEnabled
    *
    * @param bool $val The value of the userWritebackEnabled
    *
    * @return OnPremisesDirectorySynchronizationFeature
    */
    public function setUserWritebackEnabled($val)
    {
        $this->_propDict["userWritebackEnabled"] = $val;
        return $this;
    }
}
