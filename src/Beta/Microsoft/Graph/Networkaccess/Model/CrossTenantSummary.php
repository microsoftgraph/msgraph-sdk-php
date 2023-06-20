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
    * Gets the tenantCount
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
