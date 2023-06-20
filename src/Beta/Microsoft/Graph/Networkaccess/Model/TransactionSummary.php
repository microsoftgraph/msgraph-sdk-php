<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TransactionSummary File
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
* TransactionSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TransactionSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the blockedCount
    *
    * @return int|null The blockedCount
    */
    public function getBlockedCount()
    {
        if (array_key_exists("blockedCount", $this->_propDict)) {
            return $this->_propDict["blockedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockedCount
    *
    * @param int $val The value of the blockedCount
    *
    * @return TransactionSummary
    */
    public function setBlockedCount($val)
    {
        $this->_propDict["blockedCount"] = $val;
        return $this;
    }
    /**
    * Gets the totalCount
    *
    * @return int|null The totalCount
    */
    public function getTotalCount()
    {
        if (array_key_exists("totalCount", $this->_propDict)) {
            return $this->_propDict["totalCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalCount
    *
    * @param int $val The value of the totalCount
    *
    * @return TransactionSummary
    */
    public function setTotalCount($val)
    {
        $this->_propDict["totalCount"] = $val;
        return $this;
    }

    /**
    * Gets the trafficType
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
    *
    * @param TrafficType $val The value to assign to the trafficType
    *
    * @return TransactionSummary The TransactionSummary
    */
    public function setTrafficType($val)
    {
        $this->_propDict["trafficType"] = $val;
         return $this;
    }
}
