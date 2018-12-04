<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceOperatingSystemSummary File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* DeviceOperatingSystemSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceOperatingSystemSummary extends Entity
{
    /**
    * Gets the androidCount
    *
    * @return int The androidCount
    */
    public function getAndroidCount()
    {
        if (array_key_exists("androidCount", $this->_propDict)) {
            return $this->_propDict["androidCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the androidCount
    *
    * @param int $val The value of the androidCount
    *
    * @return DeviceOperatingSystemSummary
    */
    public function setAndroidCount($val)
    {
        $this->_propDict["androidCount"] = $val;
        return $this;
    }
    /**
    * Gets the iosCount
    *
    * @return int The iosCount
    */
    public function getIosCount()
    {
        if (array_key_exists("iosCount", $this->_propDict)) {
            return $this->_propDict["iosCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the iosCount
    *
    * @param int $val The value of the iosCount
    *
    * @return DeviceOperatingSystemSummary
    */
    public function setIosCount($val)
    {
        $this->_propDict["iosCount"] = $val;
        return $this;
    }
    /**
    * Gets the macOSCount
    *
    * @return int The macOSCount
    */
    public function getMacOSCount()
    {
        if (array_key_exists("macOSCount", $this->_propDict)) {
            return $this->_propDict["macOSCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the macOSCount
    *
    * @param int $val The value of the macOSCount
    *
    * @return DeviceOperatingSystemSummary
    */
    public function setMacOSCount($val)
    {
        $this->_propDict["macOSCount"] = $val;
        return $this;
    }
    /**
    * Gets the windowsMobileCount
    *
    * @return int The windowsMobileCount
    */
    public function getWindowsMobileCount()
    {
        if (array_key_exists("windowsMobileCount", $this->_propDict)) {
            return $this->_propDict["windowsMobileCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsMobileCount
    *
    * @param int $val The value of the windowsMobileCount
    *
    * @return DeviceOperatingSystemSummary
    */
    public function setWindowsMobileCount($val)
    {
        $this->_propDict["windowsMobileCount"] = $val;
        return $this;
    }
    /**
    * Gets the windowsCount
    *
    * @return int The windowsCount
    */
    public function getWindowsCount()
    {
        if (array_key_exists("windowsCount", $this->_propDict)) {
            return $this->_propDict["windowsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsCount
    *
    * @param int $val The value of the windowsCount
    *
    * @return DeviceOperatingSystemSummary
    */
    public function setWindowsCount($val)
    {
        $this->_propDict["windowsCount"] = $val;
        return $this;
    }
    /**
    * Gets the unknownCount
    *
    * @return int The unknownCount
    */
    public function getUnknownCount()
    {
        if (array_key_exists("unknownCount", $this->_propDict)) {
            return $this->_propDict["unknownCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unknownCount
    *
    * @param int $val The value of the unknownCount
    *
    * @return DeviceOperatingSystemSummary
    */
    public function setUnknownCount($val)
    {
        $this->_propDict["unknownCount"] = $val;
        return $this;
    }
}
