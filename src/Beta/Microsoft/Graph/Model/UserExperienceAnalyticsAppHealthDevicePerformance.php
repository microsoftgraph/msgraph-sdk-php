<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAppHealthDevicePerformance File
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
* UserExperienceAnalyticsAppHealthDevicePerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAppHealthDevicePerformance extends Entity
{
    /**
    * Gets the appCrashCount
    * The number of application crashes for the device. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
    *
    * @return int|null The appCrashCount
    */
    public function getAppCrashCount()
    {
        if (array_key_exists("appCrashCount", $this->_propDict)) {
            return $this->_propDict["appCrashCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appCrashCount
    * The number of application crashes for the device. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
    *
    * @param int $val The appCrashCount
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setAppCrashCount($val)
    {
        $this->_propDict["appCrashCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the appHangCount
    * The number of application hangs for the device. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
    *
    * @return int|null The appHangCount
    */
    public function getAppHangCount()
    {
        if (array_key_exists("appHangCount", $this->_propDict)) {
            return $this->_propDict["appHangCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appHangCount
    * The number of application hangs for the device. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
    *
    * @param int $val The appHangCount
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setAppHangCount($val)
    {
        $this->_propDict["appHangCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the crashedAppCount
    * The number of distinct application crashes for the device. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
    *
    * @return int|null The crashedAppCount
    */
    public function getCrashedAppCount()
    {
        if (array_key_exists("crashedAppCount", $this->_propDict)) {
            return $this->_propDict["crashedAppCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the crashedAppCount
    * The number of distinct application crashes for the device. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
    *
    * @param int $val The crashedAppCount
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setCrashedAppCount($val)
    {
        $this->_propDict["crashedAppCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the deviceAppHealthScore
    * The application health score of the device. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The deviceAppHealthScore
    */
    public function getDeviceAppHealthScore()
    {
        if (array_key_exists("deviceAppHealthScore", $this->_propDict)) {
            return $this->_propDict["deviceAppHealthScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceAppHealthScore
    * The application health score of the device. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The deviceAppHealthScore
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setDeviceAppHealthScore($val)
    {
        $this->_propDict["deviceAppHealthScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the deviceDisplayName
    * The name of the device. Supports: $select, $OrderBy. Read-only.
    *
    * @return string|null The deviceDisplayName
    */
    public function getDeviceDisplayName()
    {
        if (array_key_exists("deviceDisplayName", $this->_propDict)) {
            return $this->_propDict["deviceDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceDisplayName
    * The name of the device. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The deviceDisplayName
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setDeviceDisplayName($val)
    {
        $this->_propDict["deviceDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the deviceId
    * The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
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
    * The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The deviceId
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceManufacturer
    * The manufacturer name of the device. Supports: $select, $OrderBy. Read-only.
    *
    * @return string|null The deviceManufacturer
    */
    public function getDeviceManufacturer()
    {
        if (array_key_exists("deviceManufacturer", $this->_propDict)) {
            return $this->_propDict["deviceManufacturer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceManufacturer
    * The manufacturer name of the device. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The deviceManufacturer
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setDeviceManufacturer($val)
    {
        $this->_propDict["deviceManufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the deviceModel
    * The model name of the device. Supports: $select, $OrderBy. Read-only.
    *
    * @return string|null The deviceModel
    */
    public function getDeviceModel()
    {
        if (array_key_exists("deviceModel", $this->_propDict)) {
            return $this->_propDict["deviceModel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceModel
    * The model name of the device. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The deviceModel
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setDeviceModel($val)
    {
        $this->_propDict["deviceModel"] = $val;
        return $this;
    }

    /**
    * Gets the healthStatus
    * The health state of the user experience analytics device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals. Unknown by default. Supports: $filter, $select, $OrderBy. Read-only. Possible values are: unknown, insufficientData, needsAttention, meetingGoals, unknownFutureValue.
    *
    * @return UserExperienceAnalyticsHealthState|null The healthStatus
    */
    public function getHealthStatus()
    {
        if (array_key_exists("healthStatus", $this->_propDict)) {
            if (is_a($this->_propDict["healthStatus"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsHealthState") || is_null($this->_propDict["healthStatus"])) {
                return $this->_propDict["healthStatus"];
            } else {
                $this->_propDict["healthStatus"] = new UserExperienceAnalyticsHealthState($this->_propDict["healthStatus"]);
                return $this->_propDict["healthStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the healthStatus
    * The health state of the user experience analytics device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals. Unknown by default. Supports: $filter, $select, $OrderBy. Read-only. Possible values are: unknown, insufficientData, needsAttention, meetingGoals, unknownFutureValue.
    *
    * @param UserExperienceAnalyticsHealthState $val The healthStatus
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setHealthStatus($val)
    {
        $this->_propDict["healthStatus"] = $val;
        return $this;
    }

    /**
    * Gets the meanTimeToFailureInMinutes
    * The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
    *
    * @return int|null The meanTimeToFailureInMinutes
    */
    public function getMeanTimeToFailureInMinutes()
    {
        if (array_key_exists("meanTimeToFailureInMinutes", $this->_propDict)) {
            return $this->_propDict["meanTimeToFailureInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the meanTimeToFailureInMinutes
    * The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
    *
    * @param int $val The meanTimeToFailureInMinutes
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setMeanTimeToFailureInMinutes($val)
    {
        $this->_propDict["meanTimeToFailureInMinutes"] = intval($val);
        return $this;
    }

    /**
    * Gets the processedDateTime
    * The date and time when the statistics were last computed. The value cannot be modified and is automatically populated when the statistics are computed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: '2022-01-01T00:00:00Z'. Returned by default. Read-only.
    *
    * @return \DateTime|null The processedDateTime
    */
    public function getProcessedDateTime()
    {
        if (array_key_exists("processedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["processedDateTime"], "\DateTime") || is_null($this->_propDict["processedDateTime"])) {
                return $this->_propDict["processedDateTime"];
            } else {
                $this->_propDict["processedDateTime"] = new \DateTime($this->_propDict["processedDateTime"]);
                return $this->_propDict["processedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the processedDateTime
    * The date and time when the statistics were last computed. The value cannot be modified and is automatically populated when the statistics are computed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: '2022-01-01T00:00:00Z'. Returned by default. Read-only.
    *
    * @param \DateTime $val The processedDateTime
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setProcessedDateTime($val)
    {
        $this->_propDict["processedDateTime"] = $val;
        return $this;
    }

}
