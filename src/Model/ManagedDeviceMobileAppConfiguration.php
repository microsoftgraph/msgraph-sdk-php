<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceMobileAppConfiguration File
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
* ManagedDeviceMobileAppConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedDeviceMobileAppConfiguration extends Entity
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
    * @return ManagedDeviceMobileAppConfiguration
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
    * @return ManagedDeviceMobileAppConfiguration
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
    * @return ManagedDeviceMobileAppConfiguration
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
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the targetedMobileApps
    * the associated app.
    *
    * @return string|null The targetedMobileApps
    */
    public function getTargetedMobileApps()
    {
        if (array_key_exists("targetedMobileApps", $this->_propDict)) {
            return $this->_propDict["targetedMobileApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetedMobileApps
    * the associated app.
    *
    * @param string $val The targetedMobileApps
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setTargetedMobileApps($val)
    {
        $this->_propDict["targetedMobileApps"] = $val;
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
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }


     /**
     * Gets the assignments
    * The list of group assignemenets for app configration.
     *
     * @return ManagedDeviceMobileAppConfigurationAssignment[]|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists('assignments', $this->_propDict) && !is_null($this->_propDict['assignments'])) {
            $assignments = [];
            if (count($this->_propDict['assignments']) > 0 && is_a($this->_propDict['assignments'][0], 'ManagedDeviceMobileAppConfigurationAssignment')) {
                return $this->_propDict['assignments'];
            }
            foreach ($this->_propDict['assignments'] as $singleValue) {
                $assignments []= new ManagedDeviceMobileAppConfigurationAssignment($singleValue);
            }
            $this->_propDict['assignments'] = $assignments;
            return $this->_propDict['assignments'];
        }
        return null;
    }

    /**
    * Sets the assignments
    * The list of group assignemenets for app configration.
    *
    * @param ManagedDeviceMobileAppConfigurationAssignment[] $val The assignments
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }


     /**
     * Gets the deviceStatuses
    * List of ManagedDeviceMobileAppConfigurationDeviceStatus.
     *
     * @return ManagedDeviceMobileAppConfigurationDeviceStatus[]|null The deviceStatuses
     */
    public function getDeviceStatuses()
    {
        if (array_key_exists('deviceStatuses', $this->_propDict) && !is_null($this->_propDict['deviceStatuses'])) {
            $deviceStatuses = [];
            if (count($this->_propDict['deviceStatuses']) > 0 && is_a($this->_propDict['deviceStatuses'][0], 'ManagedDeviceMobileAppConfigurationDeviceStatus')) {
                return $this->_propDict['deviceStatuses'];
            }
            foreach ($this->_propDict['deviceStatuses'] as $singleValue) {
                $deviceStatuses []= new ManagedDeviceMobileAppConfigurationDeviceStatus($singleValue);
            }
            $this->_propDict['deviceStatuses'] = $deviceStatuses;
            return $this->_propDict['deviceStatuses'];
        }
        return null;
    }

    /**
    * Sets the deviceStatuses
    * List of ManagedDeviceMobileAppConfigurationDeviceStatus.
    *
    * @param ManagedDeviceMobileAppConfigurationDeviceStatus[] $val The deviceStatuses
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setDeviceStatuses($val)
    {
        $this->_propDict["deviceStatuses"] = $val;
        return $this;
    }

    /**
    * Gets the deviceStatusSummary
    * App configuration device status summary.
    *
    * @return ManagedDeviceMobileAppConfigurationDeviceSummary|null The deviceStatusSummary
    */
    public function getDeviceStatusSummary()
    {
        if (array_key_exists("deviceStatusSummary", $this->_propDict) && !is_null($this->_propDict["deviceStatusSummary"])) {
            if (is_a($this->_propDict["deviceStatusSummary"], "\Microsoft\Graph\Model\ManagedDeviceMobileAppConfigurationDeviceSummary")) {
                return $this->_propDict["deviceStatusSummary"];
            } else {
                $this->_propDict["deviceStatusSummary"] = new ManagedDeviceMobileAppConfigurationDeviceSummary($this->_propDict["deviceStatusSummary"]);
                return $this->_propDict["deviceStatusSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceStatusSummary
    * App configuration device status summary.
    *
    * @param ManagedDeviceMobileAppConfigurationDeviceSummary $val The deviceStatusSummary
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setDeviceStatusSummary($val)
    {
        $this->_propDict["deviceStatusSummary"] = $val;
        return $this;
    }


     /**
     * Gets the userStatuses
    * List of ManagedDeviceMobileAppConfigurationUserStatus.
     *
     * @return ManagedDeviceMobileAppConfigurationUserStatus[]|null The userStatuses
     */
    public function getUserStatuses()
    {
        if (array_key_exists('userStatuses', $this->_propDict) && !is_null($this->_propDict['userStatuses'])) {
            $userStatuses = [];
            if (count($this->_propDict['userStatuses']) > 0 && is_a($this->_propDict['userStatuses'][0], 'ManagedDeviceMobileAppConfigurationUserStatus')) {
                return $this->_propDict['userStatuses'];
            }
            foreach ($this->_propDict['userStatuses'] as $singleValue) {
                $userStatuses []= new ManagedDeviceMobileAppConfigurationUserStatus($singleValue);
            }
            $this->_propDict['userStatuses'] = $userStatuses;
            return $this->_propDict['userStatuses'];
        }
        return null;
    }

    /**
    * Sets the userStatuses
    * List of ManagedDeviceMobileAppConfigurationUserStatus.
    *
    * @param ManagedDeviceMobileAppConfigurationUserStatus[] $val The userStatuses
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setUserStatuses($val)
    {
        $this->_propDict["userStatuses"] = $val;
        return $this;
    }

    /**
    * Gets the userStatusSummary
    * App configuration user status summary.
    *
    * @return ManagedDeviceMobileAppConfigurationUserSummary|null The userStatusSummary
    */
    public function getUserStatusSummary()
    {
        if (array_key_exists("userStatusSummary", $this->_propDict) && !is_null($this->_propDict["userStatusSummary"])) {
            if (is_a($this->_propDict["userStatusSummary"], "\Microsoft\Graph\Model\ManagedDeviceMobileAppConfigurationUserSummary")) {
                return $this->_propDict["userStatusSummary"];
            } else {
                $this->_propDict["userStatusSummary"] = new ManagedDeviceMobileAppConfigurationUserSummary($this->_propDict["userStatusSummary"]);
                return $this->_propDict["userStatusSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the userStatusSummary
    * App configuration user status summary.
    *
    * @param ManagedDeviceMobileAppConfigurationUserSummary $val The userStatusSummary
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setUserStatusSummary($val)
    {
        $this->_propDict["userStatusSummary"] = $val;
        return $this;
    }

}
