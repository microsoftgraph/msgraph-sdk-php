<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsBaseline File
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
* UserExperienceAnalyticsBaseline class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsBaseline extends Entity
{
    /**
    * Gets the createdDateTime
    * The date the custom baseline was created. The value cannot be modified and is automatically populated when the baseline is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
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
    * The date the custom baseline was created. The value cannot be modified and is automatically populated when the baseline is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return UserExperienceAnalyticsBaseline
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the baseline.
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
    * The name of the baseline.
    *
    * @param string $val The displayName
    *
    * @return UserExperienceAnalyticsBaseline
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isBuiltIn
    * When TRUE, indicates the current baseline is the commercial median baseline. When FALSE, indicates it is a custom baseline. FALSE by default.
    *
    * @return bool|null The isBuiltIn
    */
    public function getIsBuiltIn()
    {
        if (array_key_exists("isBuiltIn", $this->_propDict)) {
            return $this->_propDict["isBuiltIn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isBuiltIn
    * When TRUE, indicates the current baseline is the commercial median baseline. When FALSE, indicates it is a custom baseline. FALSE by default.
    *
    * @param bool $val The isBuiltIn
    *
    * @return UserExperienceAnalyticsBaseline
    */
    public function setIsBuiltIn($val)
    {
        $this->_propDict["isBuiltIn"] = boolval($val);
        return $this;
    }

    /**
    * Gets the appHealthMetrics
    * The scores and insights for the application health metrics.
    *
    * @return UserExperienceAnalyticsCategory|null The appHealthMetrics
    */
    public function getAppHealthMetrics()
    {
        if (array_key_exists("appHealthMetrics", $this->_propDict)) {
            if (is_a($this->_propDict["appHealthMetrics"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsCategory") || is_null($this->_propDict["appHealthMetrics"])) {
                return $this->_propDict["appHealthMetrics"];
            } else {
                $this->_propDict["appHealthMetrics"] = new UserExperienceAnalyticsCategory($this->_propDict["appHealthMetrics"]);
                return $this->_propDict["appHealthMetrics"];
            }
        }
        return null;
    }

    /**
    * Sets the appHealthMetrics
    * The scores and insights for the application health metrics.
    *
    * @param UserExperienceAnalyticsCategory $val The appHealthMetrics
    *
    * @return UserExperienceAnalyticsBaseline
    */
    public function setAppHealthMetrics($val)
    {
        $this->_propDict["appHealthMetrics"] = $val;
        return $this;
    }

    /**
    * Gets the batteryHealthMetrics
    * The scores and insights for the battery health metrics.
    *
    * @return UserExperienceAnalyticsCategory|null The batteryHealthMetrics
    */
    public function getBatteryHealthMetrics()
    {
        if (array_key_exists("batteryHealthMetrics", $this->_propDict)) {
            if (is_a($this->_propDict["batteryHealthMetrics"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsCategory") || is_null($this->_propDict["batteryHealthMetrics"])) {
                return $this->_propDict["batteryHealthMetrics"];
            } else {
                $this->_propDict["batteryHealthMetrics"] = new UserExperienceAnalyticsCategory($this->_propDict["batteryHealthMetrics"]);
                return $this->_propDict["batteryHealthMetrics"];
            }
        }
        return null;
    }

    /**
    * Sets the batteryHealthMetrics
    * The scores and insights for the battery health metrics.
    *
    * @param UserExperienceAnalyticsCategory $val The batteryHealthMetrics
    *
    * @return UserExperienceAnalyticsBaseline
    */
    public function setBatteryHealthMetrics($val)
    {
        $this->_propDict["batteryHealthMetrics"] = $val;
        return $this;
    }

    /**
    * Gets the bestPracticesMetrics
    * The scores and insights for the best practices metrics.
    *
    * @return UserExperienceAnalyticsCategory|null The bestPracticesMetrics
    */
    public function getBestPracticesMetrics()
    {
        if (array_key_exists("bestPracticesMetrics", $this->_propDict)) {
            if (is_a($this->_propDict["bestPracticesMetrics"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsCategory") || is_null($this->_propDict["bestPracticesMetrics"])) {
                return $this->_propDict["bestPracticesMetrics"];
            } else {
                $this->_propDict["bestPracticesMetrics"] = new UserExperienceAnalyticsCategory($this->_propDict["bestPracticesMetrics"]);
                return $this->_propDict["bestPracticesMetrics"];
            }
        }
        return null;
    }

    /**
    * Sets the bestPracticesMetrics
    * The scores and insights for the best practices metrics.
    *
    * @param UserExperienceAnalyticsCategory $val The bestPracticesMetrics
    *
    * @return UserExperienceAnalyticsBaseline
    */
    public function setBestPracticesMetrics($val)
    {
        $this->_propDict["bestPracticesMetrics"] = $val;
        return $this;
    }

    /**
    * Gets the deviceBootPerformanceMetrics
    * The scores and insights for the device boot performance metrics.
    *
    * @return UserExperienceAnalyticsCategory|null The deviceBootPerformanceMetrics
    */
    public function getDeviceBootPerformanceMetrics()
    {
        if (array_key_exists("deviceBootPerformanceMetrics", $this->_propDict)) {
            if (is_a($this->_propDict["deviceBootPerformanceMetrics"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsCategory") || is_null($this->_propDict["deviceBootPerformanceMetrics"])) {
                return $this->_propDict["deviceBootPerformanceMetrics"];
            } else {
                $this->_propDict["deviceBootPerformanceMetrics"] = new UserExperienceAnalyticsCategory($this->_propDict["deviceBootPerformanceMetrics"]);
                return $this->_propDict["deviceBootPerformanceMetrics"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceBootPerformanceMetrics
    * The scores and insights for the device boot performance metrics.
    *
    * @param UserExperienceAnalyticsCategory $val The deviceBootPerformanceMetrics
    *
    * @return UserExperienceAnalyticsBaseline
    */
    public function setDeviceBootPerformanceMetrics($val)
    {
        $this->_propDict["deviceBootPerformanceMetrics"] = $val;
        return $this;
    }

    /**
    * Gets the rebootAnalyticsMetrics
    * The scores and insights for the reboot analytics metrics.
    *
    * @return UserExperienceAnalyticsCategory|null The rebootAnalyticsMetrics
    */
    public function getRebootAnalyticsMetrics()
    {
        if (array_key_exists("rebootAnalyticsMetrics", $this->_propDict)) {
            if (is_a($this->_propDict["rebootAnalyticsMetrics"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsCategory") || is_null($this->_propDict["rebootAnalyticsMetrics"])) {
                return $this->_propDict["rebootAnalyticsMetrics"];
            } else {
                $this->_propDict["rebootAnalyticsMetrics"] = new UserExperienceAnalyticsCategory($this->_propDict["rebootAnalyticsMetrics"]);
                return $this->_propDict["rebootAnalyticsMetrics"];
            }
        }
        return null;
    }

    /**
    * Sets the rebootAnalyticsMetrics
    * The scores and insights for the reboot analytics metrics.
    *
    * @param UserExperienceAnalyticsCategory $val The rebootAnalyticsMetrics
    *
    * @return UserExperienceAnalyticsBaseline
    */
    public function setRebootAnalyticsMetrics($val)
    {
        $this->_propDict["rebootAnalyticsMetrics"] = $val;
        return $this;
    }

    /**
    * Gets the resourcePerformanceMetrics
    * The scores and insights for the resource performance metrics.
    *
    * @return UserExperienceAnalyticsCategory|null The resourcePerformanceMetrics
    */
    public function getResourcePerformanceMetrics()
    {
        if (array_key_exists("resourcePerformanceMetrics", $this->_propDict)) {
            if (is_a($this->_propDict["resourcePerformanceMetrics"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsCategory") || is_null($this->_propDict["resourcePerformanceMetrics"])) {
                return $this->_propDict["resourcePerformanceMetrics"];
            } else {
                $this->_propDict["resourcePerformanceMetrics"] = new UserExperienceAnalyticsCategory($this->_propDict["resourcePerformanceMetrics"]);
                return $this->_propDict["resourcePerformanceMetrics"];
            }
        }
        return null;
    }

    /**
    * Sets the resourcePerformanceMetrics
    * The scores and insights for the resource performance metrics.
    *
    * @param UserExperienceAnalyticsCategory $val The resourcePerformanceMetrics
    *
    * @return UserExperienceAnalyticsBaseline
    */
    public function setResourcePerformanceMetrics($val)
    {
        $this->_propDict["resourcePerformanceMetrics"] = $val;
        return $this;
    }

    /**
    * Gets the workFromAnywhereMetrics
    * The scores and insights for the work from anywhere metrics.
    *
    * @return UserExperienceAnalyticsCategory|null The workFromAnywhereMetrics
    */
    public function getWorkFromAnywhereMetrics()
    {
        if (array_key_exists("workFromAnywhereMetrics", $this->_propDict)) {
            if (is_a($this->_propDict["workFromAnywhereMetrics"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsCategory") || is_null($this->_propDict["workFromAnywhereMetrics"])) {
                return $this->_propDict["workFromAnywhereMetrics"];
            } else {
                $this->_propDict["workFromAnywhereMetrics"] = new UserExperienceAnalyticsCategory($this->_propDict["workFromAnywhereMetrics"]);
                return $this->_propDict["workFromAnywhereMetrics"];
            }
        }
        return null;
    }

    /**
    * Sets the workFromAnywhereMetrics
    * The scores and insights for the work from anywhere metrics.
    *
    * @param UserExperienceAnalyticsCategory $val The workFromAnywhereMetrics
    *
    * @return UserExperienceAnalyticsBaseline
    */
    public function setWorkFromAnywhereMetrics($val)
    {
        $this->_propDict["workFromAnywhereMetrics"] = $val;
        return $this;
    }

}
