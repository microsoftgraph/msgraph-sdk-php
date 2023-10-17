<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Device File
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
* Device class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Device extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the deviceId
    *
    * @return string|null The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    *
    * @param string $val The value of the deviceId
    *
    * @return Device
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return Device
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the isCompliant
    *
    * @return bool|null The isCompliant
    */
    public function getIsCompliant()
    {
        if (array_key_exists("isCompliant", $this->_propDict)) {
            return $this->_propDict["isCompliant"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCompliant
    *
    * @param bool $val The value of the isCompliant
    *
    * @return Device
    */
    public function setIsCompliant($val)
    {
        $this->_propDict["isCompliant"] = $val;
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
    * @return Device The Device
    */
    public function setLastAccessDateTime($val)
    {
        $this->_propDict["lastAccessDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the operatingSystem
    *
    * @return string|null The operatingSystem
    */
    public function getOperatingSystem()
    {
        if (array_key_exists("operatingSystem", $this->_propDict)) {
            return $this->_propDict["operatingSystem"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatingSystem
    *
    * @param string $val The value of the operatingSystem
    *
    * @return Device
    */
    public function setOperatingSystem($val)
    {
        $this->_propDict["operatingSystem"] = $val;
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
    * @return Device The Device
    */
    public function setTrafficType($val)
    {
        $this->_propDict["trafficType"] = $val;
         return $this;
    }
}
