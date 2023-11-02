<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantSummary File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;
/**
* CrossTenantSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the authTransactionCount
    * Total numbers of authentication sessions in the time frame between startDateTime and endDateTime.
    *
    * @return int|null The authTransactionCount
    */
    public function getAuthTransactionCount()
    {
        if (array_key_exists("authTransactionCount", $this->_propDict)) {
            return $this->_propDict["authTransactionCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authTransactionCount
    * Total numbers of authentication sessions in the time frame between startDateTime and endDateTime.
    *
    * @param int $val The value of the authTransactionCount
    *
    * @return CrossTenantSummary
    */
    public function setAuthTransactionCount($val)
    {
        $this->_propDict["authTransactionCount"] = $val;
        return $this;
    }
    /**
    * Gets the deviceCount
    * Count of unique devices that performed cross-tenant access, in the time frame between startDateTime and endDateTime.
    *
    * @return int|null The deviceCount
    */
    public function getDeviceCount()
    {
        if (array_key_exists("deviceCount", $this->_propDict)) {
            return $this->_propDict["deviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceCount
    * Count of unique devices that performed cross-tenant access, in the time frame between startDateTime and endDateTime.
    *
    * @param int $val The value of the deviceCount
    *
    * @return CrossTenantSummary
    */
    public function setDeviceCount($val)
    {
        $this->_propDict["deviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the newTenantCount
    * Count of unique tenants that were accessed in the time frame between endDateTime to discoveryPivotDateTime, but haven't been accessed in the time frame between discoveryPivotDateTime to startDateTime.
    *
    * @return int|null The newTenantCount
    */
    public function getNewTenantCount()
    {
        if (array_key_exists("newTenantCount", $this->_propDict)) {
            return $this->_propDict["newTenantCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the newTenantCount
    * Count of unique tenants that were accessed in the time frame between endDateTime to discoveryPivotDateTime, but haven't been accessed in the time frame between discoveryPivotDateTime to startDateTime.
    *
    * @param int $val The value of the newTenantCount
    *
    * @return CrossTenantSummary
    */
    public function setNewTenantCount($val)
    {
        $this->_propDict["newTenantCount"] = $val;
        return $this;
    }
    /**
    * Gets the rarelyUsedTenantCount
    *
    * @return int|null The rarelyUsedTenantCount
    */
    public function getRarelyUsedTenantCount()
    {
        if (array_key_exists("rarelyUsedTenantCount", $this->_propDict)) {
            return $this->_propDict["rarelyUsedTenantCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rarelyUsedTenantCount
    *
    * @param int $val The value of the rarelyUsedTenantCount
    *
    * @return CrossTenantSummary
    */
    public function setRarelyUsedTenantCount($val)
    {
        $this->_propDict["rarelyUsedTenantCount"] = $val;
        return $this;
    }
    /**
    * Gets the tenantCount
    * Count of unique tenants that were accessed, that are different from the device's home tenant, in the time frame between startDateTime and endDateTime.
    *
    * @return int|null The tenantCount
    */
    public function getTenantCount()
    {
        if (array_key_exists("tenantCount", $this->_propDict)) {
            return $this->_propDict["tenantCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantCount
    * Count of unique tenants that were accessed, that are different from the device's home tenant, in the time frame between startDateTime and endDateTime.
    *
    * @param int $val The value of the tenantCount
    *
    * @return CrossTenantSummary
    */
    public function setTenantCount($val)
    {
        $this->_propDict["tenantCount"] = $val;
        return $this;
    }
    /**
    * Gets the userCount
    * Count of unique users that performed cross-tenant access, in the time frame between startDateTime and endDateTime.
    *
    * @return int|null The userCount
    */
    public function getUserCount()
    {
        if (array_key_exists("userCount", $this->_propDict)) {
            return $this->_propDict["userCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userCount
    * Count of unique users that performed cross-tenant access, in the time frame between startDateTime and endDateTime.
    *
    * @param int $val The value of the userCount
    *
    * @return CrossTenantSummary
    */
    public function setUserCount($val)
    {
        $this->_propDict["userCount"] = $val;
        return $this;
    }
}
