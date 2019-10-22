<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsDevicePerformance File
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
* UserExperienceAnalyticsDevicePerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserExperienceAnalyticsDevicePerformance extends Entity
{
    /**
    * Gets the deviceName
    * The user experience analytics device name.
    *
    * @return string The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceName
    * The user experience analytics device name.
    *
    * @param string $val The deviceName
    *
    * @return UserExperienceAnalyticsDevicePerformance
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the model
    * The user experience analytics device model.
    *
    * @return string The model
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
    * The user experience analytics device model.
    *
    * @param string $val The model
    *
    * @return UserExperienceAnalyticsDevicePerformance
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }
    
    /**
    * Gets the manufacturer
    * The user experience analytics device manufacturer.
    *
    * @return string The manufacturer
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
    * The user experience analytics device manufacturer.
    *
    * @param string $val The manufacturer
    *
    * @return UserExperienceAnalyticsDevicePerformance
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }
    
    /**
    * Gets the diskType
    * The user experience analytics device disk type.
    *
    * @return DiskType The diskType
    */
    public function getDiskType()
    {
        if (array_key_exists("diskType", $this->_propDict)) {
            if (is_a($this->_propDict["diskType"], "Microsoft\Graph\Beta\Model\DiskType")) {
                return $this->_propDict["diskType"];
            } else {
                $this->_propDict["diskType"] = new DiskType($this->_propDict["diskType"]);
                return $this->_propDict["diskType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the diskType
    * The user experience analytics device disk type.
    *
    * @param DiskType $val The diskType
    *
    * @return UserExperienceAnalyticsDevicePerformance
    */
    public function setDiskType($val)
    {
        $this->_propDict["diskType"] = $val;
        return $this;
    }
    
    /**
    * Gets the operatingSystemVersion
    * The user experience analytics device Operating System version.
    *
    * @return string The operatingSystemVersion
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
    * The user experience analytics device Operating System version.
    *
    * @param string $val The operatingSystemVersion
    *
    * @return UserExperienceAnalyticsDevicePerformance
    */
    public function setOperatingSystemVersion($val)
    {
        $this->_propDict["operatingSystemVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the bootScore
    * The user experience analytics device boot score.
    *
    * @return int The bootScore
    */
    public function getBootScore()
    {
        if (array_key_exists("bootScore", $this->_propDict)) {
            return $this->_propDict["bootScore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bootScore
    * The user experience analytics device boot score.
    *
    * @param int $val The bootScore
    *
    * @return UserExperienceAnalyticsDevicePerformance
    */
    public function setBootScore($val)
    {
        $this->_propDict["bootScore"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the coreBootTimeInMs
    * The user experience analytics device core boot time in milliseconds.
    *
    * @return int The coreBootTimeInMs
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
    * The user experience analytics device core boot time in milliseconds.
    *
    * @param int $val The coreBootTimeInMs
    *
    * @return UserExperienceAnalyticsDevicePerformance
    */
    public function setCoreBootTimeInMs($val)
    {
        $this->_propDict["coreBootTimeInMs"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the groupPolicyBootTimeInMs
    * The user experience analytics device group policy boot time in milliseconds.
    *
    * @return int The groupPolicyBootTimeInMs
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
    * The user experience analytics device group policy boot time in milliseconds.
    *
    * @param int $val The groupPolicyBootTimeInMs
    *
    * @return UserExperienceAnalyticsDevicePerformance
    */
    public function setGroupPolicyBootTimeInMs($val)
    {
        $this->_propDict["groupPolicyBootTimeInMs"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the healthStatus
    * The health state of the user experience analytics device.
    *
    * @return UserExperienceAnalyticsHealthState The healthStatus
    */
    public function getHealthStatus()
    {
        if (array_key_exists("healthStatus", $this->_propDict)) {
            if (is_a($this->_propDict["healthStatus"], "Microsoft\Graph\Beta\Model\UserExperienceAnalyticsHealthState")) {
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
    * The health state of the user experience analytics device.
    *
    * @param UserExperienceAnalyticsHealthState $val The healthStatus
    *
    * @return UserExperienceAnalyticsDevicePerformance
    */
    public function setHealthStatus($val)
    {
        $this->_propDict["healthStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the loginScore
    * The user experience analytics device login score.
    *
    * @return int The loginScore
    */
    public function getLoginScore()
    {
        if (array_key_exists("loginScore", $this->_propDict)) {
            return $this->_propDict["loginScore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the loginScore
    * The user experience analytics device login score.
    *
    * @param int $val The loginScore
    *
    * @return UserExperienceAnalyticsDevicePerformance
    */
    public function setLoginScore($val)
    {
        $this->_propDict["loginScore"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the coreLoginTimeInMs
    * The user experience analytics device core login time in milliseconds.
    *
    * @return int The coreLoginTimeInMs
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
    * The user experience analytics device core login time in milliseconds.
    *
    * @param int $val The coreLoginTimeInMs
    *
    * @return UserExperienceAnalyticsDevicePerformance
    */
    public function setCoreLoginTimeInMs($val)
    {
        $this->_propDict["coreLoginTimeInMs"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the groupPolicyLoginTimeInMs
    * The user experience analytics device group policy login time in milliseconds.
    *
    * @return int The groupPolicyLoginTimeInMs
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
    * The user experience analytics device group policy login time in milliseconds.
    *
    * @param int $val The groupPolicyLoginTimeInMs
    *
    * @return UserExperienceAnalyticsDevicePerformance
    */
    public function setGroupPolicyLoginTimeInMs($val)
    {
        $this->_propDict["groupPolicyLoginTimeInMs"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the deviceCount
    * User experience analytics summarized device count.
    *
    * @return int The deviceCount
    */
    public function getDeviceCount()
    {
        if (array_key_exists("deviceCount", $this->_propDict)) {
            return $this->_propDict["deviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceCount
    * User experience analytics summarized device count.
    *
    * @param int $val The deviceCount
    *
    * @return UserExperienceAnalyticsDevicePerformance
    */
    public function setDeviceCount($val)
    {
        $this->_propDict["deviceCount"] = intval($val);
        return $this;
    }
    
}