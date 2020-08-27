<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsBaseline File
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
* UserExperienceAnalyticsBaseline class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsBaseline extends Entity
{
    /**
    * Gets the displayName
    * The name of the user experience analytics baseline.
    *
    * @return string The displayName
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
    * The name of the user experience analytics baseline.
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
    * Signifies if the current baseline is the commercial median baseline or a custom baseline.
    *
    * @return bool The isBuiltIn
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
    * Signifies if the current baseline is the commercial median baseline or a custom baseline.
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
    * Gets the createdDateTime
    * The date the custom baseline was created.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
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
    * The date the custom baseline was created.
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
    * Gets the deviceBootPerformanceMetrics
    * The user experience analytics device boot performance metrics.
    *
    * @return UserExperienceAnalyticsCategory The deviceBootPerformanceMetrics
    */
    public function getDeviceBootPerformanceMetrics()
    {
        if (array_key_exists("deviceBootPerformanceMetrics", $this->_propDict)) {
            if (is_a($this->_propDict["deviceBootPerformanceMetrics"], "Beta\Microsoft\Graph\Model\UserExperienceAnalyticsCategory")) {
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
    * The user experience analytics device boot performance metrics.
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
    * Gets the bestPracticesMetrics
    * The user experience analytics best practices metrics.
    *
    * @return UserExperienceAnalyticsCategory The bestPracticesMetrics
    */
    public function getBestPracticesMetrics()
    {
        if (array_key_exists("bestPracticesMetrics", $this->_propDict)) {
            if (is_a($this->_propDict["bestPracticesMetrics"], "Beta\Microsoft\Graph\Model\UserExperienceAnalyticsCategory")) {
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
    * The user experience analytics best practices metrics.
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
    
}