<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HardwareConfigurationRunSummary File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* HardwareConfigurationRunSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HardwareConfigurationRunSummary extends Entity
{
    /**
    * Gets the errorDeviceCount
    * Number of devices for which hardware configuration state is error
    *
    * @return int|null The errorDeviceCount
    */
    public function getErrorDeviceCount()
    {
        if (array_key_exists("errorDeviceCount", $this->_propDict)) {
            return $this->_propDict["errorDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorDeviceCount
    * Number of devices for which hardware configuration state is error
    *
    * @param int $val The errorDeviceCount
    *
    * @return HardwareConfigurationRunSummary
    */
    public function setErrorDeviceCount($val)
    {
        $this->_propDict["errorDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the errorUserCount
    * Number of users for which hardware configuration state is error
    *
    * @return int|null The errorUserCount
    */
    public function getErrorUserCount()
    {
        if (array_key_exists("errorUserCount", $this->_propDict)) {
            return $this->_propDict["errorUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorUserCount
    * Number of users for which hardware configuration state is error
    *
    * @param int $val The errorUserCount
    *
    * @return HardwareConfigurationRunSummary
    */
    public function setErrorUserCount($val)
    {
        $this->_propDict["errorUserCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the failedDeviceCount
    * Number of devices for which hardware configuration found an issue
    *
    * @return int|null The failedDeviceCount
    */
    public function getFailedDeviceCount()
    {
        if (array_key_exists("failedDeviceCount", $this->_propDict)) {
            return $this->_propDict["failedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedDeviceCount
    * Number of devices for which hardware configuration found an issue
    *
    * @param int $val The failedDeviceCount
    *
    * @return HardwareConfigurationRunSummary
    */
    public function setFailedDeviceCount($val)
    {
        $this->_propDict["failedDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the failedUserCount
    * Number of users for which hardware configuration found an issue
    *
    * @return int|null The failedUserCount
    */
    public function getFailedUserCount()
    {
        if (array_key_exists("failedUserCount", $this->_propDict)) {
            return $this->_propDict["failedUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedUserCount
    * Number of users for which hardware configuration found an issue
    *
    * @param int $val The failedUserCount
    *
    * @return HardwareConfigurationRunSummary
    */
    public function setFailedUserCount($val)
    {
        $this->_propDict["failedUserCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the lastRunDateTime
    * Last run time for the configuration across all devices
    *
    * @return \DateTime|null The lastRunDateTime
    */
    public function getLastRunDateTime()
    {
        if (array_key_exists("lastRunDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRunDateTime"], "\DateTime") || is_null($this->_propDict["lastRunDateTime"])) {
                return $this->_propDict["lastRunDateTime"];
            } else {
                $this->_propDict["lastRunDateTime"] = new \DateTime($this->_propDict["lastRunDateTime"]);
                return $this->_propDict["lastRunDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRunDateTime
    * Last run time for the configuration across all devices
    *
    * @param \DateTime $val The lastRunDateTime
    *
    * @return HardwareConfigurationRunSummary
    */
    public function setLastRunDateTime($val)
    {
        $this->_propDict["lastRunDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the notApplicableDeviceCount
    * Number of devices for which hardware configuration state is not applicable
    *
    * @return int|null The notApplicableDeviceCount
    */
    public function getNotApplicableDeviceCount()
    {
        if (array_key_exists("notApplicableDeviceCount", $this->_propDict)) {
            return $this->_propDict["notApplicableDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notApplicableDeviceCount
    * Number of devices for which hardware configuration state is not applicable
    *
    * @param int $val The notApplicableDeviceCount
    *
    * @return HardwareConfigurationRunSummary
    */
    public function setNotApplicableDeviceCount($val)
    {
        $this->_propDict["notApplicableDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the notApplicableUserCount
    * Number of users for which hardware configuration state is not applicable
    *
    * @return int|null The notApplicableUserCount
    */
    public function getNotApplicableUserCount()
    {
        if (array_key_exists("notApplicableUserCount", $this->_propDict)) {
            return $this->_propDict["notApplicableUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notApplicableUserCount
    * Number of users for which hardware configuration state is not applicable
    *
    * @param int $val The notApplicableUserCount
    *
    * @return HardwareConfigurationRunSummary
    */
    public function setNotApplicableUserCount($val)
    {
        $this->_propDict["notApplicableUserCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the pendingDeviceCount
    * Number of devices for which hardware configuration is in pending state
    *
    * @return int|null The pendingDeviceCount
    */
    public function getPendingDeviceCount()
    {
        if (array_key_exists("pendingDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingDeviceCount
    * Number of devices for which hardware configuration is in pending state
    *
    * @param int $val The pendingDeviceCount
    *
    * @return HardwareConfigurationRunSummary
    */
    public function setPendingDeviceCount($val)
    {
        $this->_propDict["pendingDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the pendingUserCount
    * Number of users for which hardware configuration is in pending state
    *
    * @return int|null The pendingUserCount
    */
    public function getPendingUserCount()
    {
        if (array_key_exists("pendingUserCount", $this->_propDict)) {
            return $this->_propDict["pendingUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingUserCount
    * Number of users for which hardware configuration is in pending state
    *
    * @param int $val The pendingUserCount
    *
    * @return HardwareConfigurationRunSummary
    */
    public function setPendingUserCount($val)
    {
        $this->_propDict["pendingUserCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the successfulDeviceCount
    * Number of devices for which hardware configured without any issue
    *
    * @return int|null The successfulDeviceCount
    */
    public function getSuccessfulDeviceCount()
    {
        if (array_key_exists("successfulDeviceCount", $this->_propDict)) {
            return $this->_propDict["successfulDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulDeviceCount
    * Number of devices for which hardware configured without any issue
    *
    * @param int $val The successfulDeviceCount
    *
    * @return HardwareConfigurationRunSummary
    */
    public function setSuccessfulDeviceCount($val)
    {
        $this->_propDict["successfulDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the successfulUserCount
    * Number of users for which hardware configured without any issue
    *
    * @return int|null The successfulUserCount
    */
    public function getSuccessfulUserCount()
    {
        if (array_key_exists("successfulUserCount", $this->_propDict)) {
            return $this->_propDict["successfulUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulUserCount
    * Number of users for which hardware configured without any issue
    *
    * @param int $val The successfulUserCount
    *
    * @return HardwareConfigurationRunSummary
    */
    public function setSuccessfulUserCount($val)
    {
        $this->_propDict["successfulUserCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the unknownDeviceCount
    * Number of devices for which hardware configuration state is unknown
    *
    * @return int|null The unknownDeviceCount
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
    * Number of devices for which hardware configuration state is unknown
    *
    * @param int $val The unknownDeviceCount
    *
    * @return HardwareConfigurationRunSummary
    */
    public function setUnknownDeviceCount($val)
    {
        $this->_propDict["unknownDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the unknownUserCount
    * Number of users for which hardware configuration state is unknown
    *
    * @return int|null The unknownUserCount
    */
    public function getUnknownUserCount()
    {
        if (array_key_exists("unknownUserCount", $this->_propDict)) {
            return $this->_propDict["unknownUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unknownUserCount
    * Number of users for which hardware configuration state is unknown
    *
    * @param int $val The unknownUserCount
    *
    * @return HardwareConfigurationRunSummary
    */
    public function setUnknownUserCount($val)
    {
        $this->_propDict["unknownUserCount"] = intval($val);
        return $this;
    }

}
