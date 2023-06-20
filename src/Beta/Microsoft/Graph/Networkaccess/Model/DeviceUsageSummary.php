<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceUsageSummary File
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
* DeviceUsageSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceUsageSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the activeDeviceCount
    *
    * @return int|null The activeDeviceCount
    */
    public function getActiveDeviceCount()
    {
        if (array_key_exists("activeDeviceCount", $this->_propDict)) {
            return $this->_propDict["activeDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activeDeviceCount
    *
    * @param int $val The value of the activeDeviceCount
    *
    * @return DeviceUsageSummary
    */
    public function setActiveDeviceCount($val)
    {
        $this->_propDict["activeDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the inactiveDeviceCount
    *
    * @return int|null The inactiveDeviceCount
    */
    public function getInactiveDeviceCount()
    {
        if (array_key_exists("inactiveDeviceCount", $this->_propDict)) {
            return $this->_propDict["inactiveDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inactiveDeviceCount
    *
    * @param int $val The value of the inactiveDeviceCount
    *
    * @return DeviceUsageSummary
    */
    public function setInactiveDeviceCount($val)
    {
        $this->_propDict["inactiveDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the totalDeviceCount
    *
    * @return int|null The totalDeviceCount
    */
    public function getTotalDeviceCount()
    {
        if (array_key_exists("totalDeviceCount", $this->_propDict)) {
            return $this->_propDict["totalDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalDeviceCount
    *
    * @param int $val The value of the totalDeviceCount
    *
    * @return DeviceUsageSummary
    */
    public function setTotalDeviceCount($val)
    {
        $this->_propDict["totalDeviceCount"] = $val;
        return $this;
    }
}
