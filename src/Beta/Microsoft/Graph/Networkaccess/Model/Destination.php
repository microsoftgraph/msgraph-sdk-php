<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Destination File
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
* Destination class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Destination extends \Beta\Microsoft\Graph\Model\Entity
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
    * @return Destination
    */
    public function setDeviceCount($val)
    {
        $this->_propDict["deviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the fqdn
    *
    * @return string|null The fqdn
    */
    public function getFqdn()
    {
        if (array_key_exists("fqdn", $this->_propDict)) {
            return $this->_propDict["fqdn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fqdn
    *
    * @param string $val The value of the fqdn
    *
    * @return Destination
    */
    public function setFqdn($val)
    {
        $this->_propDict["fqdn"] = $val;
        return $this;
    }
    /**
    * Gets the ip
    *
    * @return string|null The ip
    */
    public function getIp()
    {
        if (array_key_exists("ip", $this->_propDict)) {
            return $this->_propDict["ip"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ip
    *
    * @param string $val The value of the ip
    *
    * @return Destination
    */
    public function setIp($val)
    {
        $this->_propDict["ip"] = $val;
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
    * @return Destination The Destination
    */
    public function setLastAccessDateTime($val)
    {
        $this->_propDict["lastAccessDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the networkingProtocol
    *
    * @return NetworkingProtocol|null The networkingProtocol
    */
    public function getNetworkingProtocol()
    {
        if (array_key_exists("networkingProtocol", $this->_propDict)) {
            if (is_a($this->_propDict["networkingProtocol"], "\Beta\Microsoft\Graph\Networkaccess\Model\NetworkingProtocol") || is_null($this->_propDict["networkingProtocol"])) {
                return $this->_propDict["networkingProtocol"];
            } else {
                $this->_propDict["networkingProtocol"] = new NetworkingProtocol($this->_propDict["networkingProtocol"]);
                return $this->_propDict["networkingProtocol"];
            }
        }
        return null;
    }

    /**
    * Sets the networkingProtocol
    *
    * @param NetworkingProtocol $val The value to assign to the networkingProtocol
    *
    * @return Destination The Destination
    */
    public function setNetworkingProtocol($val)
    {
        $this->_propDict["networkingProtocol"] = $val;
         return $this;
    }
    /**
    * Gets the port
    *
    * @return int|null The port
    */
    public function getPort()
    {
        if (array_key_exists("port", $this->_propDict)) {
            return $this->_propDict["port"];
        } else {
            return null;
        }
    }

    /**
    * Sets the port
    *
    * @param int $val The value of the port
    *
    * @return Destination
    */
    public function setPort($val)
    {
        $this->_propDict["port"] = $val;
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
    * @return Destination The Destination
    */
    public function setTrafficType($val)
    {
        $this->_propDict["trafficType"] = $val;
         return $this;
    }
    /**
    * Gets the transactionCount
    *
    * @return int|null The transactionCount
    */
    public function getTransactionCount()
    {
        if (array_key_exists("transactionCount", $this->_propDict)) {
            return $this->_propDict["transactionCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the transactionCount
    *
    * @param int $val The value of the transactionCount
    *
    * @return Destination
    */
    public function setTransactionCount($val)
    {
        $this->_propDict["transactionCount"] = $val;
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
    * @return Destination
    */
    public function setUserCount($val)
    {
        $this->_propDict["userCount"] = $val;
        return $this;
    }
}
