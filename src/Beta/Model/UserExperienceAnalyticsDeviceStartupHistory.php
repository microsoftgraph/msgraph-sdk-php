<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsDeviceStartupHistory File
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
* UserExperienceAnalyticsDeviceStartupHistory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserExperienceAnalyticsDeviceStartupHistory extends Entity
{
    /**
    * Gets the deviceId
    * The user experience analytics device id.
    *
    * @return string The deviceId
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
    * The user experience analytics device id.
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
    * Gets the startTime
    * The user experience analytics device boot start time.
    *
    * @return \DateTime The startTime
    */
    public function getStartTime()
    {
        if (array_key_exists("startTime", $this->_propDict)) {
            if (is_a($this->_propDict["startTime"], "\DateTime")) {
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
    * The user experience analytics device boot start time.
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
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setCoreBootTimeInMs($val)
    {
        $this->_propDict["coreBootTimeInMs"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the groupPolicyBootTimeInMs
    * The User experience analytics Device group policy boot time in milliseconds.
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
    * The User experience analytics Device group policy boot time in milliseconds.
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
    * Gets the featureUpdateBootTimeInMs
    * The user experience analytics device feature update time in milliseconds.
    *
    * @return int The featureUpdateBootTimeInMs
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
    * The user experience analytics device feature update time in milliseconds.
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
    * Gets the totalBootTimeInMs
    * The user experience analytics device total boot time in milliseconds.
    *
    * @return int The totalBootTimeInMs
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
    * The user experience analytics device total boot time in milliseconds.
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
    * Gets the groupPolicyLoginTimeInMs
    * The User experience analytics Device group policy login time in milliseconds.
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
    * The User experience analytics Device group policy login time in milliseconds.
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
    * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public function setCoreLoginTimeInMs($val)
    {
        $this->_propDict["coreLoginTimeInMs"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalLoginTimeInMs
    * The user experience analytics device total login time in milliseconds.
    *
    * @return int The totalLoginTimeInMs
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
    * The user experience analytics device total login time in milliseconds.
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
    
    /**
    * Gets the isFirstLogin
    * The user experience analytics device first login.
    *
    * @return bool The isFirstLogin
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
    * The user experience analytics device first login.
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
    
}