<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsDeviceBatteryDetail File
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
* UserExperienceAnalyticsDeviceBatteryDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsDeviceBatteryDetail extends Entity
{
    /**
    * Gets the batteryId
    * Uniquely identifies the batteries in a single device.
    *
    * @return string|null The batteryId
    */
    public function getBatteryId()
    {
        if (array_key_exists("batteryId", $this->_propDict)) {
            return $this->_propDict["batteryId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryId
    * Uniquely identifies the batteries in a single device.
    *
    * @param string $val The value of the batteryId
    *
    * @return UserExperienceAnalyticsDeviceBatteryDetail
    */
    public function setBatteryId($val)
    {
        $this->_propDict["batteryId"] = $val;
        return $this;
    }
    /**
    * Gets the fullBatteryDrainCount
    * Number of times the battery has been discharged an amount that equals 100% of its capacity, but not necessarily by discharging it from 100% to 0%. Valid values 0 to 2147483647
    *
    * @return int|null The fullBatteryDrainCount
    */
    public function getFullBatteryDrainCount()
    {
        if (array_key_exists("fullBatteryDrainCount", $this->_propDict)) {
            return $this->_propDict["fullBatteryDrainCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fullBatteryDrainCount
    * Number of times the battery has been discharged an amount that equals 100% of its capacity, but not necessarily by discharging it from 100% to 0%. Valid values 0 to 2147483647
    *
    * @param int $val The value of the fullBatteryDrainCount
    *
    * @return UserExperienceAnalyticsDeviceBatteryDetail
    */
    public function setFullBatteryDrainCount($val)
    {
        $this->_propDict["fullBatteryDrainCount"] = $val;
        return $this;
    }
    /**
    * Gets the maxCapacityPercentage
    * Ratio of current capacity and design capacity of the battery. Unit in percentage and values range from 0-100. Valid values 0 to 2147483647
    *
    * @return int|null The maxCapacityPercentage
    */
    public function getMaxCapacityPercentage()
    {
        if (array_key_exists("maxCapacityPercentage", $this->_propDict)) {
            return $this->_propDict["maxCapacityPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxCapacityPercentage
    * Ratio of current capacity and design capacity of the battery. Unit in percentage and values range from 0-100. Valid values 0 to 2147483647
    *
    * @param int $val The value of the maxCapacityPercentage
    *
    * @return UserExperienceAnalyticsDeviceBatteryDetail
    */
    public function setMaxCapacityPercentage($val)
    {
        $this->_propDict["maxCapacityPercentage"] = $val;
        return $this;
    }
}
