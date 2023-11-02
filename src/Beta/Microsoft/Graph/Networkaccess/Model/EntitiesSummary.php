<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EntitiesSummary File
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
* EntitiesSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EntitiesSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the deviceCount
    * Count of unique devices that were seen.
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
    * Count of unique devices that were seen.
    *
    * @param int $val The value of the deviceCount
    *
    * @return EntitiesSummary
    */
    public function setDeviceCount($val)
    {
        $this->_propDict["deviceCount"] = $val;
        return $this;
    }

    /**
    * Gets the trafficType
    * Traffic classification. The possible values are: internet, private, microsoft365, all, unknownFutureValue.
    *
    * @return TrafficType|null The trafficType
    */
    public function getTrafficType()
    {
        if (array_key_exists("trafficType", $this->_propDict)) {
            if (is_a($this->_propDict["trafficType"], "\Beta\Microsoft\Graph\Networkaccess\Model\TrafficType") || is_null($this->_propDict["trafficType"])) {
                return $this->_propDict["trafficType"];
            } else {
                $this->_propDict["trafficType"] = new TrafficType($this->_propDict["trafficType"]);
                return $this->_propDict["trafficType"];
            }
        }
        return null;
    }

    /**
    * Sets the trafficType
    * Traffic classification. The possible values are: internet, private, microsoft365, all, unknownFutureValue.
    *
    * @param TrafficType $val The value to assign to the trafficType
    *
    * @return EntitiesSummary The EntitiesSummary
    */
    public function setTrafficType($val)
    {
        $this->_propDict["trafficType"] = $val;
         return $this;
    }
    /**
    * Gets the userCount
    * Count of unique Microsoft Entra users that were seen.
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
    * Count of unique Microsoft Entra users that were seen.
    *
    * @param int $val The value of the userCount
    *
    * @return EntitiesSummary
    */
    public function setUserCount($val)
    {
        $this->_propDict["userCount"] = $val;
        return $this;
    }
    /**
    * Gets the workloadCount
    * Count of unique target workloads or hosts that were seen.
    *
    * @return int|null The workloadCount
    */
    public function getWorkloadCount()
    {
        if (array_key_exists("workloadCount", $this->_propDict)) {
            return $this->_propDict["workloadCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workloadCount
    * Count of unique target workloads or hosts that were seen.
    *
    * @param int $val The value of the workloadCount
    *
    * @return EntitiesSummary
    */
    public function setWorkloadCount($val)
    {
        $this->_propDict["workloadCount"] = $val;
        return $this;
    }
}
