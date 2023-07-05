<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsDeviceStartupHistory File
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
* UserExperienceAnalyticsDeviceStartupHistory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsDeviceStartupHistory extends Entity
{
    /**
    * Gets the coreBootTimeInMs
    * The device core boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @return int|null The coreBootTimeInMs
    */
    public function getCoreBootTimeInMs()
    {
        if (array_key_exists("coreBootTimeInMs", $this->_propDict)) {
            return $this->_propDict["coreBootTimeInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the coreBootTimeInMs
    * The device core boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @param int $val The coreBootTimeInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setCoreBootTimeInMs($val)
    {
        $this->_propDict["coreBootTimeInMs"] = intval($val);
        return $this;
    }

    /**
    * Gets the coreLoginTimeInMs
    * The device core login time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @return int|null The coreLoginTimeInMs
    */
    public function getCoreLoginTimeInMs()
    {
        if (array_key_exists("coreLoginTimeInMs", $this->_propDict)) {
            return $this->_propDict["coreLoginTimeInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the coreLoginTimeInMs
    * The device core login time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @param int $val The coreLoginTimeInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setCoreLoginTimeInMs($val)
    {
        $this->_propDict["coreLoginTimeInMs"] = intval($val);
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
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the featureUpdateBootTimeInMs
    * The impact of device feature updates on boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @return int|null The featureUpdateBootTimeInMs
    */
    public function getFeatureUpdateBootTimeInMs()
    {
        if (array_key_exists("featureUpdateBootTimeInMs", $this->_propDict)) {
            return $this->_propDict["featureUpdateBootTimeInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the featureUpdateBootTimeInMs
    * The impact of device feature updates on boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @param int $val The featureUpdateBootTimeInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setFeatureUpdateBootTimeInMs($val)
    {
        $this->_propDict["featureUpdateBootTimeInMs"] = intval($val);
        return $this;
    }

    /**
    * Gets the groupPolicyBootTimeInMs
    * The impact of device group policy client on boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @return int|null The groupPolicyBootTimeInMs
    */
    public function getGroupPolicyBootTimeInMs()
    {
        if (array_key_exists("groupPolicyBootTimeInMs", $this->_propDict)) {
            return $this->_propDict["groupPolicyBootTimeInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupPolicyBootTimeInMs
    * The impact of device group policy client on boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @param int $val The groupPolicyBootTimeInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setGroupPolicyBootTimeInMs($val)
    {
        $this->_propDict["groupPolicyBootTimeInMs"] = intval($val);
        return $this;
    }

    /**
    * Gets the groupPolicyLoginTimeInMs
    * The impact of device group policy client on login time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @return int|null The groupPolicyLoginTimeInMs
    */
    public function getGroupPolicyLoginTimeInMs()
    {
        if (array_key_exists("groupPolicyLoginTimeInMs", $this->_propDict)) {
            return $this->_propDict["groupPolicyLoginTimeInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupPolicyLoginTimeInMs
    * The impact of device group policy client on login time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @param int $val The groupPolicyLoginTimeInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setGroupPolicyLoginTimeInMs($val)
    {
        $this->_propDict["groupPolicyLoginTimeInMs"] = intval($val);
        return $this;
    }

    /**
    * Gets the isFeatureUpdate
    * When TRUE, indicates the device boot record is associated with feature updates. When FALSE, indicates the device boot record is not associated with feature updates. Supports: $select, $OrderBy. Read-only.
    *
    * @return bool|null The isFeatureUpdate
    */
    public function getIsFeatureUpdate()
    {
        if (array_key_exists("isFeatureUpdate", $this->_propDict)) {
            return $this->_propDict["isFeatureUpdate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isFeatureUpdate
    * When TRUE, indicates the device boot record is associated with feature updates. When FALSE, indicates the device boot record is not associated with feature updates. Supports: $select, $OrderBy. Read-only.
    *
    * @param bool $val The isFeatureUpdate
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setIsFeatureUpdate($val)
    {
        $this->_propDict["isFeatureUpdate"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isFirstLogin
    * When TRUE, indicates the device login is the first login after a reboot. When FALSE, indicates the device login is not the first login after a reboot. Supports: $select, $OrderBy. Read-only.
    *
    * @return bool|null The isFirstLogin
    */
    public function getIsFirstLogin()
    {
        if (array_key_exists("isFirstLogin", $this->_propDict)) {
            return $this->_propDict["isFirstLogin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isFirstLogin
    * When TRUE, indicates the device login is the first login after a reboot. When FALSE, indicates the device login is not the first login after a reboot. Supports: $select, $OrderBy. Read-only.
    *
    * @param bool $val The isFirstLogin
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setIsFirstLogin($val)
    {
        $this->_propDict["isFirstLogin"] = boolval($val);
        return $this;
    }

    /**
    * Gets the operatingSystemVersion
    * The user experience analytics device boot record's operating system version. Supports: $select, $OrderBy. Read-only.
    *
    * @return string|null The operatingSystemVersion
    */
    public function getOperatingSystemVersion()
    {
        if (array_key_exists("operatingSystemVersion", $this->_propDict)) {
            return $this->_propDict["operatingSystemVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatingSystemVersion
    * The user experience analytics device boot record's operating system version. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The operatingSystemVersion
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setOperatingSystemVersion($val)
    {
        $this->_propDict["operatingSystemVersion"] = $val;
        return $this;
    }

    /**
    * Gets the responsiveDesktopTimeInMs
    * The time for desktop to become responsive during login process in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @return int|null The responsiveDesktopTimeInMs
    */
    public function getResponsiveDesktopTimeInMs()
    {
        if (array_key_exists("responsiveDesktopTimeInMs", $this->_propDict)) {
            return $this->_propDict["responsiveDesktopTimeInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the responsiveDesktopTimeInMs
    * The time for desktop to become responsive during login process in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @param int $val The responsiveDesktopTimeInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setResponsiveDesktopTimeInMs($val)
    {
        $this->_propDict["responsiveDesktopTimeInMs"] = intval($val);
        return $this;
    }

    /**
    * Gets the restartCategory
    * OS restart category. Possible values are: unknown, restartWithUpdate, restartWithoutUpdate, blueScreen, shutdownWithUpdate, shutdownWithoutUpdate, longPowerButtonPress, bootError, update. Unknown by default. Supports: $select, $OrderBy. Read-only.
    *
    * @return UserExperienceAnalyticsOperatingSystemRestartCategory|null The restartCategory
    */
    public function getRestartCategory()
    {
        if (array_key_exists("restartCategory", $this->_propDict)) {
            if (is_a($this->_propDict["restartCategory"], "\Microsoft\Graph\Model\UserExperienceAnalyticsOperatingSystemRestartCategory") || is_null($this->_propDict["restartCategory"])) {
                return $this->_propDict["restartCategory"];
            } else {
                $this->_propDict["restartCategory"] = new UserExperienceAnalyticsOperatingSystemRestartCategory($this->_propDict["restartCategory"]);
                return $this->_propDict["restartCategory"];
            }
        }
        return null;
    }

    /**
    * Sets the restartCategory
    * OS restart category. Possible values are: unknown, restartWithUpdate, restartWithoutUpdate, blueScreen, shutdownWithUpdate, shutdownWithoutUpdate, longPowerButtonPress, bootError, update. Unknown by default. Supports: $select, $OrderBy. Read-only.
    *
    * @param UserExperienceAnalyticsOperatingSystemRestartCategory $val The restartCategory
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setRestartCategory($val)
    {
        $this->_propDict["restartCategory"] = $val;
        return $this;
    }

    /**
    * Gets the restartFaultBucket
    * OS restart fault bucket. The fault bucket is used to find additional information about a system crash. Supports: $select, $OrderBy. Read-only.
    *
    * @return string|null The restartFaultBucket
    */
    public function getRestartFaultBucket()
    {
        if (array_key_exists("restartFaultBucket", $this->_propDict)) {
            return $this->_propDict["restartFaultBucket"];
        } else {
            return null;
        }
    }

    /**
    * Sets the restartFaultBucket
    * OS restart fault bucket. The fault bucket is used to find additional information about a system crash. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The restartFaultBucket
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setRestartFaultBucket($val)
    {
        $this->_propDict["restartFaultBucket"] = $val;
        return $this;
    }

    /**
    * Gets the restartStopCode
    * OS restart stop code. This shows the bug check code which can be used to look up the blue screen reason. Supports: $select, $OrderBy. Read-only.
    *
    * @return string|null The restartStopCode
    */
    public function getRestartStopCode()
    {
        if (array_key_exists("restartStopCode", $this->_propDict)) {
            return $this->_propDict["restartStopCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the restartStopCode
    * OS restart stop code. This shows the bug check code which can be used to look up the blue screen reason. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The restartStopCode
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setRestartStopCode($val)
    {
        $this->_propDict["restartStopCode"] = $val;
        return $this;
    }

    /**
    * Gets the startTime
    * The device boot start time. The value cannot be modified and is automatically populated when the device performs a reboot. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: '2022-01-01T00:00:00Z'. Returned by default. Read-only.
    *
    * @return \DateTime|null The startTime
    */
    public function getStartTime()
    {
        if (array_key_exists("startTime", $this->_propDict)) {
            if (is_a($this->_propDict["startTime"], "\DateTime") || is_null($this->_propDict["startTime"])) {
                return $this->_propDict["startTime"];
            } else {
                $this->_propDict["startTime"] = new \DateTime($this->_propDict["startTime"]);
                return $this->_propDict["startTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startTime
    * The device boot start time. The value cannot be modified and is automatically populated when the device performs a reboot. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: '2022-01-01T00:00:00Z'. Returned by default. Read-only.
    *
    * @param \DateTime $val The startTime
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setStartTime($val)
    {
        $this->_propDict["startTime"] = $val;
        return $this;
    }

    /**
    * Gets the totalBootTimeInMs
    * The device total boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @return int|null The totalBootTimeInMs
    */
    public function getTotalBootTimeInMs()
    {
        if (array_key_exists("totalBootTimeInMs", $this->_propDict)) {
            return $this->_propDict["totalBootTimeInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalBootTimeInMs
    * The device total boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @param int $val The totalBootTimeInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setTotalBootTimeInMs($val)
    {
        $this->_propDict["totalBootTimeInMs"] = intval($val);
        return $this;
    }

    /**
    * Gets the totalLoginTimeInMs
    * The device total login time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @return int|null The totalLoginTimeInMs
    */
    public function getTotalLoginTimeInMs()
    {
        if (array_key_exists("totalLoginTimeInMs", $this->_propDict)) {
            return $this->_propDict["totalLoginTimeInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalLoginTimeInMs
    * The device total login time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @param int $val The totalLoginTimeInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setTotalLoginTimeInMs($val)
    {
        $this->_propDict["totalLoginTimeInMs"] = intval($val);
        return $this;
    }

}
