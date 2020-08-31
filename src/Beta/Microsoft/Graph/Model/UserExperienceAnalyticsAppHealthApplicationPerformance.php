<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAppHealthApplicationPerformance File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* UserExperienceAnalyticsAppHealthApplicationPerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAppHealthApplicationPerformance extends Entity
{
    /**
    * Gets the appName
    * The name of the application.
    *
    * @return string The appName
    */
    public function getAppName()
    {
        if (array_key_exists("appName", $this->_propDict)) {
            return $this->_propDict["appName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appName
    * The name of the application.
    *
    * @param string $val The appName
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setAppName($val)
    {
        $this->_propDict["appName"] = $val;
        return $this;
    }
    
    /**
    * Gets the appFriendlyName
    * The friendly name of the application.
    *
    * @return string The appFriendlyName
    */
    public function getAppFriendlyName()
    {
        if (array_key_exists("appFriendlyName", $this->_propDict)) {
            return $this->_propDict["appFriendlyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appFriendlyName
    * The friendly name of the application.
    *
    * @param string $val The appFriendlyName
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setAppFriendlyName($val)
    {
        $this->_propDict["appFriendlyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the appPublisher
    * The publisher of the application.
    *
    * @return string The appPublisher
    */
    public function getAppPublisher()
    {
        if (array_key_exists("appPublisher", $this->_propDict)) {
            return $this->_propDict["appPublisher"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appPublisher
    * The publisher of the application.
    *
    * @param string $val The appPublisher
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setAppPublisher($val)
    {
        $this->_propDict["appPublisher"] = $val;
        return $this;
    }
    
    /**
    * Gets the activeDevices
    * The number of devices where the app has been active. Valid values -2147483648 to 2147483647
    *
    * @return int The activeDevices
    */
    public function getActiveDevices()
    {
        if (array_key_exists("activeDevices", $this->_propDict)) {
            return $this->_propDict["activeDevices"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activeDevices
    * The number of devices where the app has been active. Valid values -2147483648 to 2147483647
    *
    * @param int $val The activeDevices
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setActiveDevices($val)
    {
        $this->_propDict["activeDevices"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalAppUsageDuration
    * The total usage time of the application in minutes. Valid values -2147483648 to 2147483647
    *
    * @return int The totalAppUsageDuration
    */
    public function getTotalAppUsageDuration()
    {
        if (array_key_exists("totalAppUsageDuration", $this->_propDict)) {
            return $this->_propDict["totalAppUsageDuration"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalAppUsageDuration
    * The total usage time of the application in minutes. Valid values -2147483648 to 2147483647
    *
    * @param int $val The totalAppUsageDuration
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setTotalAppUsageDuration($val)
    {
        $this->_propDict["totalAppUsageDuration"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalAppCrashes
    * The number of crashes for the app. Valid values -2147483648 to 2147483647
    *
    * @return int The totalAppCrashes
    */
    public function getTotalAppCrashes()
    {
        if (array_key_exists("totalAppCrashes", $this->_propDict)) {
            return $this->_propDict["totalAppCrashes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalAppCrashes
    * The number of crashes for the app. Valid values -2147483648 to 2147483647
    *
    * @param int $val The totalAppCrashes
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setTotalAppCrashes($val)
    {
        $this->_propDict["totalAppCrashes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalAppHangs
    * The number of hangs for the app. Valid values -2147483648 to 2147483647
    *
    * @return int The totalAppHangs
    */
    public function getTotalAppHangs()
    {
        if (array_key_exists("totalAppHangs", $this->_propDict)) {
            return $this->_propDict["totalAppHangs"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalAppHangs
    * The number of hangs for the app. Valid values -2147483648 to 2147483647
    *
    * @param int $val The totalAppHangs
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setTotalAppHangs($val)
    {
        $this->_propDict["totalAppHangs"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the meanTimeToFailure
    * The mean time to failure for the app in minutes. Valid values -2147483648 to 2147483647
    *
    * @return int The meanTimeToFailure
    */
    public function getMeanTimeToFailure()
    {
        if (array_key_exists("meanTimeToFailure", $this->_propDict)) {
            return $this->_propDict["meanTimeToFailure"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the meanTimeToFailure
    * The mean time to failure for the app in minutes. Valid values -2147483648 to 2147483647
    *
    * @param int $val The meanTimeToFailure
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setMeanTimeToFailure($val)
    {
        $this->_propDict["meanTimeToFailure"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the appHealthScore
    * The health score of the app. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float The appHealthScore
    */
    public function getAppHealthScore()
    {
        if (array_key_exists("appHealthScore", $this->_propDict)) {
            return $this->_propDict["appHealthScore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appHealthScore
    * The health score of the app. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The appHealthScore
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setAppHealthScore($val)
    {
        $this->_propDict["appHealthScore"] = $val;
        return $this;
    }
    
    /**
    * Gets the appHealthStatus
    * The overall health status of the app.
    *
    * @return string The appHealthStatus
    */
    public function getAppHealthStatus()
    {
        if (array_key_exists("appHealthStatus", $this->_propDict)) {
            return $this->_propDict["appHealthStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appHealthStatus
    * The overall health status of the app.
    *
    * @param string $val The appHealthStatus
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setAppHealthStatus($val)
    {
        $this->_propDict["appHealthStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the allOrgsHealthScore
    * The median health score of the application across all organizations. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float The allOrgsHealthScore
    */
    public function getAllOrgsHealthScore()
    {
        if (array_key_exists("allOrgsHealthScore", $this->_propDict)) {
            return $this->_propDict["allOrgsHealthScore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allOrgsHealthScore
    * The median health score of the application across all organizations. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The allOrgsHealthScore
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setAllOrgsHealthScore($val)
    {
        $this->_propDict["allOrgsHealthScore"] = $val;
        return $this;
    }
    
    /**
    * Gets the allOrgsMeanTimeToFailure
    * The median mean time to failure across all orgs for the app in minutes. Valid values -2147483648 to 2147483647
    *
    * @return int The allOrgsMeanTimeToFailure
    */
    public function getAllOrgsMeanTimeToFailure()
    {
        if (array_key_exists("allOrgsMeanTimeToFailure", $this->_propDict)) {
            return $this->_propDict["allOrgsMeanTimeToFailure"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allOrgsMeanTimeToFailure
    * The median mean time to failure across all orgs for the app in minutes. Valid values -2147483648 to 2147483647
    *
    * @param int $val The allOrgsMeanTimeToFailure
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setAllOrgsMeanTimeToFailure($val)
    {
        $this->_propDict["allOrgsMeanTimeToFailure"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the tenantId
    * The id of the tenant associated with this app object.
    *
    * @return string The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantId
    * The id of the tenant associated with this app object.
    *
    * @param string $val The tenantId
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the memaTimeGenerated
    * The time when aggregation was performed in MEMA.
    *
    * @return string The memaTimeGenerated
    */
    public function getMemaTimeGenerated()
    {
        if (array_key_exists("memaTimeGenerated", $this->_propDict)) {
            return $this->_propDict["memaTimeGenerated"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the memaTimeGenerated
    * The time when aggregation was performed in MEMA.
    *
    * @param string $val The memaTimeGenerated
    *
    * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function setMemaTimeGenerated($val)
    {
        $this->_propDict["memaTimeGenerated"] = $val;
        return $this;
    }
    
}