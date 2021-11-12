<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* DeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceConfiguration extends Entity
{
    /**
    * Gets the createdDateTime
    * DateTime the object was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict) && !is_null($this->_propDict["createdDateTime"])) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * DateTime the object was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceConfiguration
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Admin provided description of the Device Configuration.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Admin provided description of the Device Configuration.
    *
    * @param string $val The description
    *
    * @return DeviceConfiguration
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Admin provided name of the device configuration.
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
    * Admin provided name of the device configuration.
    *
    * @param string $val The displayName
    *
    * @return DeviceConfiguration
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * DateTime the object was last modified.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict) && !is_null($this->_propDict["lastModifiedDateTime"])) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * DateTime the object was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceConfiguration
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * Version of the device configuration.
    *
    * @return int|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    * Version of the device configuration.
    *
    * @param int $val The version
    *
    * @return DeviceConfiguration
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }


     /**
     * Gets the assignments
    * The list of assignments for the device configuration profile.
     *
     * @return DeviceConfigurationAssignment[]|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists('assignments', $this->_propDict) && !is_null($this->_propDict['assignments'])) {
            $assignments = [];
            if (count($this->_propDict['assignments']) > 0 && is_a($this->_propDict['assignments'][0], 'DeviceConfigurationAssignment')) {
                return $this->_propDict['assignments'];
            }
            foreach ($this->_propDict['assignments'] as $singleValue) {
                $assignments []= new DeviceConfigurationAssignment($singleValue);
            }
            $this->_propDict['assignments'] = $assignments;
            return $this->_propDict['assignments'];
        }
        return null;
    }

    /**
    * Sets the assignments
    * The list of assignments for the device configuration profile.
    *
    * @param DeviceConfigurationAssignment[] $val The assignments
    *
    * @return DeviceConfiguration
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }


     /**
     * Gets the deviceSettingStateSummaries
    * Device Configuration Setting State Device Summary
     *
     * @return SettingStateDeviceSummary[]|null The deviceSettingStateSummaries
     */
    public function getDeviceSettingStateSummaries()
    {
        if (array_key_exists('deviceSettingStateSummaries', $this->_propDict) && !is_null($this->_propDict['deviceSettingStateSummaries'])) {
            $deviceSettingStateSummaries = [];
            if (count($this->_propDict['deviceSettingStateSummaries']) > 0 && is_a($this->_propDict['deviceSettingStateSummaries'][0], 'SettingStateDeviceSummary')) {
                return $this->_propDict['deviceSettingStateSummaries'];
            }
            foreach ($this->_propDict['deviceSettingStateSummaries'] as $singleValue) {
                $deviceSettingStateSummaries []= new SettingStateDeviceSummary($singleValue);
            }
            $this->_propDict['deviceSettingStateSummaries'] = $deviceSettingStateSummaries;
            return $this->_propDict['deviceSettingStateSummaries'];
        }
        return null;
    }

    /**
    * Sets the deviceSettingStateSummaries
    * Device Configuration Setting State Device Summary
    *
    * @param SettingStateDeviceSummary[] $val The deviceSettingStateSummaries
    *
    * @return DeviceConfiguration
    */
    public function setDeviceSettingStateSummaries($val)
    {
        $this->_propDict["deviceSettingStateSummaries"] = $val;
        return $this;
    }


     /**
     * Gets the deviceStatuses
    * Device configuration installation status by device.
     *
     * @return DeviceConfigurationDeviceStatus[]|null The deviceStatuses
     */
    public function getDeviceStatuses()
    {
        if (array_key_exists('deviceStatuses', $this->_propDict) && !is_null($this->_propDict['deviceStatuses'])) {
            $deviceStatuses = [];
            if (count($this->_propDict['deviceStatuses']) > 0 && is_a($this->_propDict['deviceStatuses'][0], 'DeviceConfigurationDeviceStatus')) {
                return $this->_propDict['deviceStatuses'];
            }
            foreach ($this->_propDict['deviceStatuses'] as $singleValue) {
                $deviceStatuses []= new DeviceConfigurationDeviceStatus($singleValue);
            }
            $this->_propDict['deviceStatuses'] = $deviceStatuses;
            return $this->_propDict['deviceStatuses'];
        }
        return null;
    }

    /**
    * Sets the deviceStatuses
    * Device configuration installation status by device.
    *
    * @param DeviceConfigurationDeviceStatus[] $val The deviceStatuses
    *
    * @return DeviceConfiguration
    */
    public function setDeviceStatuses($val)
    {
        $this->_propDict["deviceStatuses"] = $val;
        return $this;
    }

    /**
    * Gets the deviceStatusOverview
    * Device Configuration devices status overview
    *
    * @return DeviceConfigurationDeviceOverview|null The deviceStatusOverview
    */
    public function getDeviceStatusOverview()
    {
        if (array_key_exists("deviceStatusOverview", $this->_propDict) && !is_null($this->_propDict["deviceStatusOverview"])) {
            if (is_a($this->_propDict["deviceStatusOverview"], "\Microsoft\Graph\Model\DeviceConfigurationDeviceOverview")) {
                return $this->_propDict["deviceStatusOverview"];
            } else {
                $this->_propDict["deviceStatusOverview"] = new DeviceConfigurationDeviceOverview($this->_propDict["deviceStatusOverview"]);
                return $this->_propDict["deviceStatusOverview"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceStatusOverview
    * Device Configuration devices status overview
    *
    * @param DeviceConfigurationDeviceOverview $val The deviceStatusOverview
    *
    * @return DeviceConfiguration
    */
    public function setDeviceStatusOverview($val)
    {
        $this->_propDict["deviceStatusOverview"] = $val;
        return $this;
    }


     /**
     * Gets the userStatuses
    * Device configuration installation status by user.
     *
     * @return DeviceConfigurationUserStatus[]|null The userStatuses
     */
    public function getUserStatuses()
    {
        if (array_key_exists('userStatuses', $this->_propDict) && !is_null($this->_propDict['userStatuses'])) {
            $userStatuses = [];
            if (count($this->_propDict['userStatuses']) > 0 && is_a($this->_propDict['userStatuses'][0], 'DeviceConfigurationUserStatus')) {
                return $this->_propDict['userStatuses'];
            }
            foreach ($this->_propDict['userStatuses'] as $singleValue) {
                $userStatuses []= new DeviceConfigurationUserStatus($singleValue);
            }
            $this->_propDict['userStatuses'] = $userStatuses;
            return $this->_propDict['userStatuses'];
        }
        return null;
    }

    /**
    * Sets the userStatuses
    * Device configuration installation status by user.
    *
    * @param DeviceConfigurationUserStatus[] $val The userStatuses
    *
    * @return DeviceConfiguration
    */
    public function setUserStatuses($val)
    {
        $this->_propDict["userStatuses"] = $val;
        return $this;
    }

    /**
    * Gets the userStatusOverview
    * Device Configuration users status overview
    *
    * @return DeviceConfigurationUserOverview|null The userStatusOverview
    */
    public function getUserStatusOverview()
    {
        if (array_key_exists("userStatusOverview", $this->_propDict) && !is_null($this->_propDict["userStatusOverview"])) {
            if (is_a($this->_propDict["userStatusOverview"], "\Microsoft\Graph\Model\DeviceConfigurationUserOverview")) {
                return $this->_propDict["userStatusOverview"];
            } else {
                $this->_propDict["userStatusOverview"] = new DeviceConfigurationUserOverview($this->_propDict["userStatusOverview"]);
                return $this->_propDict["userStatusOverview"];
            }
        }
        return null;
    }

    /**
    * Sets the userStatusOverview
    * Device Configuration users status overview
    *
    * @param DeviceConfigurationUserOverview $val The userStatusOverview
    *
    * @return DeviceConfiguration
    */
    public function setUserStatusOverview($val)
    {
        $this->_propDict["userStatusOverview"] = $val;
        return $this;
    }

}
