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
namespace Microsoft\Graph\Beta\Model;
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
    * Number of android device count.
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
    * Number of android device count.
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
    * Number of iOS device count.
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
    * Number of iOS device count.
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
    * Number of Mac OS X device count.
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
    * Number of Mac OS X device count.
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
    * Number of Windows mobile device count.
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
    * Number of Windows mobile device count.
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
    * Number of Windows device count.
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
    * Number of Windows device count.
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
    * Number of unknown device count.
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
    * Number of unknown device count.
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
    /**
    * Gets the androidDedicatedCount
    * Number of dedicated Android devices.
    *
    * @return int The androidDedicatedCount
    */
    public function getAndroidDedicatedCount()
    {
        if (array_key_exists("androidDedicatedCount", $this->_propDict)) {
            return $this->_propDict["androidDedicatedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the androidDedicatedCount
    * Number of dedicated Android devices.
    *
    * @param int $val The value of the androidDedicatedCount
    *
    * @return DeviceOperatingSystemSummary
    */
    public function setAndroidDedicatedCount($val)
    {
        $this->_propDict["androidDedicatedCount"] = $val;
        return $this;
    }
    /**
    * Gets the androidDeviceAdminCount
    * Number of device admin Android devices.
    *
    * @return int The androidDeviceAdminCount
    */
    public function getAndroidDeviceAdminCount()
    {
        if (array_key_exists("androidDeviceAdminCount", $this->_propDict)) {
            return $this->_propDict["androidDeviceAdminCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the androidDeviceAdminCount
    * Number of device admin Android devices.
    *
    * @param int $val The value of the androidDeviceAdminCount
    *
    * @return DeviceOperatingSystemSummary
    */
    public function setAndroidDeviceAdminCount($val)
    {
        $this->_propDict["androidDeviceAdminCount"] = $val;
        return $this;
    }
    /**
    * Gets the androidFullyManagedCount
    * Number of fully managed Android devices.
    *
    * @return int The androidFullyManagedCount
    */
    public function getAndroidFullyManagedCount()
    {
        if (array_key_exists("androidFullyManagedCount", $this->_propDict)) {
            return $this->_propDict["androidFullyManagedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the androidFullyManagedCount
    * Number of fully managed Android devices.
    *
    * @param int $val The value of the androidFullyManagedCount
    *
    * @return DeviceOperatingSystemSummary
    */
    public function setAndroidFullyManagedCount($val)
    {
        $this->_propDict["androidFullyManagedCount"] = $val;
        return $this;
    }
    /**
    * Gets the androidWorkProfileCount
    * Number of work profile Android devices.
    *
    * @return int The androidWorkProfileCount
    */
    public function getAndroidWorkProfileCount()
    {
        if (array_key_exists("androidWorkProfileCount", $this->_propDict)) {
            return $this->_propDict["androidWorkProfileCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the androidWorkProfileCount
    * Number of work profile Android devices.
    *
    * @param int $val The value of the androidWorkProfileCount
    *
    * @return DeviceOperatingSystemSummary
    */
    public function setAndroidWorkProfileCount($val)
    {
        $this->_propDict["androidWorkProfileCount"] = $val;
        return $this;
    }
}
