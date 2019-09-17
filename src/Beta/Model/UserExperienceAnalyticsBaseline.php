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
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* UserExperienceAnalyticsBaseline class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
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
    * Gets the overallScore
    * The overall score of the user experience analytics baseline.
    *
    * @return int The overallScore
    */
    public function getOverallScore()
    {
        if (array_key_exists("overallScore", $this->_propDict)) {
            return $this->_propDict["overallScore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the overallScore
    * The overall score of the user experience analytics baseline.
    *
    * @param int $val The overallScore
    *
    * @return UserExperienceAnalyticsBaseline
    */
    public function setOverallScore($val)
    {
        $this->_propDict["overallScore"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the overallRegressionThreshold
    * The overall regression threshold of the user experience analytics baseline.
    *
    * @return int The overallRegressionThreshold
    */
    public function getOverallRegressionThreshold()
    {
        if (array_key_exists("overallRegressionThreshold", $this->_propDict)) {
            return $this->_propDict["overallRegressionThreshold"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the overallRegressionThreshold
    * The overall regression threshold of the user experience analytics baseline.
    *
    * @param int $val The overallRegressionThreshold
    *
    * @return UserExperienceAnalyticsBaseline
    */
    public function setOverallRegressionThreshold($val)
    {
        $this->_propDict["overallRegressionThreshold"] = intval($val);
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
            if (is_a($this->_propDict["deviceBootPerformanceMetrics"], "Microsoft\Graph\Beta\Model\UserExperienceAnalyticsCategory")) {
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
            if (is_a($this->_propDict["bestPracticesMetrics"], "Microsoft\Graph\Beta\Model\UserExperienceAnalyticsCategory")) {
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