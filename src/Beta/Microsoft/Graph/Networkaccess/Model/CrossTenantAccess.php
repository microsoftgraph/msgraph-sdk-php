<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantAccess File
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
* CrossTenantAccess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantAccess extends \Beta\Microsoft\Graph\Model\Entity
{
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
    * @return CrossTenantAccess
    */
    public function setDeviceCount($val)
    {
        $this->_propDict["deviceCount"] = $val;
        return $this;
    }

    /**
    * Gets the lastAccessDateTime
    *
    * @return \DateTime|null The lastAccessDateTime
    */
    public function getLastAccessDateTime()
    {
        if (array_key_exists("lastAccessDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastAccessDateTime"], "\DateTime") || is_null($this->_propDict["lastAccessDateTime"])) {
                return $this->_propDict["lastAccessDateTime"];
            } else {
                $this->_propDict["lastAccessDateTime"] = new \DateTime($this->_propDict["lastAccessDateTime"]);
                return $this->_propDict["lastAccessDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastAccessDateTime
    *
    * @param \DateTime $val The value to assign to the lastAccessDateTime
    *
    * @return CrossTenantAccess The CrossTenantAccess
    */
    public function setLastAccessDateTime($val)
    {
        $this->_propDict["lastAccessDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the resourceTenantId
    *
    * @return string|null The resourceTenantId
    */
    public function getResourceTenantId()
    {
        if (array_key_exists("resourceTenantId", $this->_propDict)) {
            return $this->_propDict["resourceTenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceTenantId
    *
    * @param string $val The value of the resourceTenantId
    *
    * @return CrossTenantAccess
    */
    public function setResourceTenantId($val)
    {
        $this->_propDict["resourceTenantId"] = $val;
        return $this;
    }
    /**
    * Gets the resourceTenantName
    *
    * @return string|null The resourceTenantName
    */
    public function getResourceTenantName()
    {
        if (array_key_exists("resourceTenantName", $this->_propDict)) {
            return $this->_propDict["resourceTenantName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceTenantName
    *
    * @param string $val The value of the resourceTenantName
    *
    * @return CrossTenantAccess
    */
    public function setResourceTenantName($val)
    {
        $this->_propDict["resourceTenantName"] = $val;
        return $this;
    }
    /**
    * Gets the resourceTenantPrimaryDomain
    *
    * @return string|null The resourceTenantPrimaryDomain
    */
    public function getResourceTenantPrimaryDomain()
    {
        if (array_key_exists("resourceTenantPrimaryDomain", $this->_propDict)) {
            return $this->_propDict["resourceTenantPrimaryDomain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceTenantPrimaryDomain
    *
    * @param string $val The value of the resourceTenantPrimaryDomain
    *
    * @return CrossTenantAccess
    */
    public function setResourceTenantPrimaryDomain($val)
    {
        $this->_propDict["resourceTenantPrimaryDomain"] = $val;
        return $this;
    }

    /**
    * Gets the usageStatus
    *
    * @return UsageStatus|null The usageStatus
    */
    public function getUsageStatus()
    {
        if (array_key_exists("usageStatus", $this->_propDict)) {
            if (is_a($this->_propDict["usageStatus"], "\Beta\Microsoft\Graph\Networkaccess\Model\UsageStatus") || is_null($this->_propDict["usageStatus"])) {
                return $this->_propDict["usageStatus"];
            } else {
                $this->_propDict["usageStatus"] = new UsageStatus($this->_propDict["usageStatus"]);
                return $this->_propDict["usageStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the usageStatus
    *
    * @param UsageStatus $val The value to assign to the usageStatus
    *
    * @return CrossTenantAccess The CrossTenantAccess
    */
    public function setUsageStatus($val)
    {
        $this->_propDict["usageStatus"] = $val;
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
    * @return CrossTenantAccess
    */
    public function setUserCount($val)
    {
        $this->_propDict["userCount"] = $val;
        return $this;
    }
}
