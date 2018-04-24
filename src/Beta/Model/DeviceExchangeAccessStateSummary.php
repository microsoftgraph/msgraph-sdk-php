<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceExchangeAccessStateSummary File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* DeviceExchangeAccessStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceExchangeAccessStateSummary extends Entity
{
    /**
    * Gets the allowedDeviceCount
    *
    * @return int The allowedDeviceCount
    */
    public function getAllowedDeviceCount()
    {
        if (array_key_exists("allowedDeviceCount", $this->_propDict)) {
            return $this->_propDict["allowedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedDeviceCount
    *
    * @param int $val The value of the allowedDeviceCount
    *
    * @return DeviceExchangeAccessStateSummary
    */
    public function setAllowedDeviceCount($val)
    {
        $this->_propDict["allowedDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the blockedDeviceCount
    *
    * @return int The blockedDeviceCount
    */
    public function getBlockedDeviceCount()
    {
        if (array_key_exists("blockedDeviceCount", $this->_propDict)) {
            return $this->_propDict["blockedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockedDeviceCount
    *
    * @param int $val The value of the blockedDeviceCount
    *
    * @return DeviceExchangeAccessStateSummary
    */
    public function setBlockedDeviceCount($val)
    {
        $this->_propDict["blockedDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the quarantinedDeviceCount
    *
    * @return int The quarantinedDeviceCount
    */
    public function getQuarantinedDeviceCount()
    {
        if (array_key_exists("quarantinedDeviceCount", $this->_propDict)) {
            return $this->_propDict["quarantinedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the quarantinedDeviceCount
    *
    * @param int $val The value of the quarantinedDeviceCount
    *
    * @return DeviceExchangeAccessStateSummary
    */
    public function setQuarantinedDeviceCount($val)
    {
        $this->_propDict["quarantinedDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the unknownDeviceCount
    *
    * @return int The unknownDeviceCount
    */
    public function getUnknownDeviceCount()
    {
        if (array_key_exists("unknownDeviceCount", $this->_propDict)) {
            return $this->_propDict["unknownDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unknownDeviceCount
    *
    * @param int $val The value of the unknownDeviceCount
    *
    * @return DeviceExchangeAccessStateSummary
    */
    public function setUnknownDeviceCount($val)
    {
        $this->_propDict["unknownDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the unavailableDeviceCount
    *
    * @return int The unavailableDeviceCount
    */
    public function getUnavailableDeviceCount()
    {
        if (array_key_exists("unavailableDeviceCount", $this->_propDict)) {
            return $this->_propDict["unavailableDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unavailableDeviceCount
    *
    * @param int $val The value of the unavailableDeviceCount
    *
    * @return DeviceExchangeAccessStateSummary
    */
    public function setUnavailableDeviceCount($val)
    {
        $this->_propDict["unavailableDeviceCount"] = $val;
        return $this;
    }
}
