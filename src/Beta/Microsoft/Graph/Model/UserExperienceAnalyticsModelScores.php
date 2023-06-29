<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsModelScores File
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
* UserExperienceAnalyticsModelScores class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsModelScores extends Entity
{
    /**
    * Gets the appReliabilityScore
    * Indicates a score calculated from application health data to indicate when a device is having problems running one or more applications. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The appReliabilityScore
    */
    public function getAppReliabilityScore()
    {
        if (array_key_exists("appReliabilityScore", $this->_propDict)) {
            return $this->_propDict["appReliabilityScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appReliabilityScore
    * Indicates a score calculated from application health data to indicate when a device is having problems running one or more applications. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The appReliabilityScore
    *
    * @return UserExperienceAnalyticsModelScores
    */
    public function setAppReliabilityScore($val)
    {
        $this->_propDict["appReliabilityScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the batteryHealthScore
    * Indicates a calulated score indicating the health of the device's battery. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The batteryHealthScore
    */
    public function getBatteryHealthScore()
    {
        if (array_key_exists("batteryHealthScore", $this->_propDict)) {
            return $this->_propDict["batteryHealthScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryHealthScore
    * Indicates a calulated score indicating the health of the device's battery. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The batteryHealthScore
    *
    * @return UserExperienceAnalyticsModelScores
    */
    public function setBatteryHealthScore($val)
    {
        $this->_propDict["batteryHealthScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the endpointAnalyticsScore
    * Indicates a weighted average of the various scores. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The endpointAnalyticsScore
    */
    public function getEndpointAnalyticsScore()
    {
        if (array_key_exists("endpointAnalyticsScore", $this->_propDict)) {
            return $this->_propDict["endpointAnalyticsScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the endpointAnalyticsScore
    * Indicates a weighted average of the various scores. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The endpointAnalyticsScore
    *
    * @return UserExperienceAnalyticsModelScores
    */
    public function setEndpointAnalyticsScore($val)
    {
        $this->_propDict["endpointAnalyticsScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the healthStatus
    * The health status of the device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals. Unknown by default. Supports: $filter, $select, $OrderBy. Read-only. Possible values are: unknown, insufficientData, needsAttention, meetingGoals, unknownFutureValue.
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
    * The health status of the device. Possible values are: unknown, insufficientData, needsAttention, meetingGoals. Unknown by default. Supports: $filter, $select, $OrderBy. Read-only. Possible values are: unknown, insufficientData, needsAttention, meetingGoals, unknownFutureValue.
    *
    * @param UserExperienceAnalyticsHealthState $val The healthStatus
    *
    * @return UserExperienceAnalyticsModelScores
    */
    public function setHealthStatus($val)
    {
        $this->_propDict["healthStatus"] = $val;
        return $this;
    }

    /**
    * Gets the manufacturer
    * The manufacturer name of the device. Examples: Microsoft Corporation, HP, Lenovo. Supports: $select, $OrderBy. Read-only.
    *
    * @return string|null The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the manufacturer
    * The manufacturer name of the device. Examples: Microsoft Corporation, HP, Lenovo. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The manufacturer
    *
    * @return UserExperienceAnalyticsModelScores
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the model
    * The model name of the device. Supports: $select, $OrderBy. Read-only.
    *
    * @return string|null The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }

    /**
    * Sets the model
    * The model name of the device. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The model
    *
    * @return UserExperienceAnalyticsModelScores
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }

    /**
    * Gets the modelDeviceCount
    * Indicates unique devices count of given model in a consolidated report. Supports: $select, $OrderBy. Read-only. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
    *
    * @return int|null The modelDeviceCount
    */
    public function getModelDeviceCount()
    {
        if (array_key_exists("modelDeviceCount", $this->_propDict)) {
            return $this->_propDict["modelDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the modelDeviceCount
    * Indicates unique devices count of given model in a consolidated report. Supports: $select, $OrderBy. Read-only. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
    *
    * @param int $val The modelDeviceCount
    *
    * @return UserExperienceAnalyticsModelScores
    */
    public function setModelDeviceCount($val)
    {
        $this->_propDict["modelDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the startupPerformanceScore
    * Indicates a weighted average of boot score and logon score used for measuring startup performance. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The startupPerformanceScore
    */
    public function getStartupPerformanceScore()
    {
        if (array_key_exists("startupPerformanceScore", $this->_propDict)) {
            return $this->_propDict["startupPerformanceScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the startupPerformanceScore
    * Indicates a weighted average of boot score and logon score used for measuring startup performance. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The startupPerformanceScore
    *
    * @return UserExperienceAnalyticsModelScores
    */
    public function setStartupPerformanceScore($val)
    {
        $this->_propDict["startupPerformanceScore"] = floatval($val);
        return $this;
    }

    /**
    * Gets the workFromAnywhereScore
    * Indicates a weighted score of the work from anywhere on a device level. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The workFromAnywhereScore
    */
    public function getWorkFromAnywhereScore()
    {
        if (array_key_exists("workFromAnywhereScore", $this->_propDict)) {
            return $this->_propDict["workFromAnywhereScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workFromAnywhereScore
    * Indicates a weighted score of the work from anywhere on a device level. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The workFromAnywhereScore
    *
    * @return UserExperienceAnalyticsModelScores
    */
    public function setWorkFromAnywhereScore($val)
    {
        $this->_propDict["workFromAnywhereScore"] = floatval($val);
        return $this;
    }

}
