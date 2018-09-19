<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharedPCAccountManagerPolicy File
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
* SharedPCAccountManagerPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SharedPCAccountManagerPolicy extends Entity
{

    /**
    * Gets the accountDeletionPolicy
    *
    * @return SharedPCAccountDeletionPolicyType The accountDeletionPolicy
    */
    public function getAccountDeletionPolicy()
    {
        if (array_key_exists("accountDeletionPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["accountDeletionPolicy"], "Microsoft\Graph\Beta\Model\SharedPCAccountDeletionPolicyType")) {
                return $this->_propDict["accountDeletionPolicy"];
            } else {
                $this->_propDict["accountDeletionPolicy"] = new SharedPCAccountDeletionPolicyType($this->_propDict["accountDeletionPolicy"]);
                return $this->_propDict["accountDeletionPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the accountDeletionPolicy
    *
    * @param SharedPCAccountDeletionPolicyType $val The value to assign to the accountDeletionPolicy
    *
    * @return SharedPCAccountManagerPolicy The SharedPCAccountManagerPolicy
    */
    public function setAccountDeletionPolicy($val)
    {
        $this->_propDict["accountDeletionPolicy"] = $val;
         return $this;
    }
    /**
    * Gets the cacheAccountsAboveDiskFreePercentage
    *
    * @return int The cacheAccountsAboveDiskFreePercentage
    */
    public function getCacheAccountsAboveDiskFreePercentage()
    {
        if (array_key_exists("cacheAccountsAboveDiskFreePercentage", $this->_propDict)) {
            return $this->_propDict["cacheAccountsAboveDiskFreePercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cacheAccountsAboveDiskFreePercentage
    *
    * @param int $val The value of the cacheAccountsAboveDiskFreePercentage
    *
    * @return SharedPCAccountManagerPolicy
    */
    public function setCacheAccountsAboveDiskFreePercentage($val)
    {
        $this->_propDict["cacheAccountsAboveDiskFreePercentage"] = $val;
        return $this;
    }
    /**
    * Gets the inactiveThresholdDays
    *
    * @return int The inactiveThresholdDays
    */
    public function getInactiveThresholdDays()
    {
        if (array_key_exists("inactiveThresholdDays", $this->_propDict)) {
            return $this->_propDict["inactiveThresholdDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inactiveThresholdDays
    *
    * @param int $val The value of the inactiveThresholdDays
    *
    * @return SharedPCAccountManagerPolicy
    */
    public function setInactiveThresholdDays($val)
    {
        $this->_propDict["inactiveThresholdDays"] = $val;
        return $this;
    }
    /**
    * Gets the removeAccountsBelowDiskFreePercentage
    *
    * @return int The removeAccountsBelowDiskFreePercentage
    */
    public function getRemoveAccountsBelowDiskFreePercentage()
    {
        if (array_key_exists("removeAccountsBelowDiskFreePercentage", $this->_propDict)) {
            return $this->_propDict["removeAccountsBelowDiskFreePercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the removeAccountsBelowDiskFreePercentage
    *
    * @param int $val The value of the removeAccountsBelowDiskFreePercentage
    *
    * @return SharedPCAccountManagerPolicy
    */
    public function setRemoveAccountsBelowDiskFreePercentage($val)
    {
        $this->_propDict["removeAccountsBelowDiskFreePercentage"] = $val;
        return $this;
    }
}
