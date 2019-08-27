<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsOverview File
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
* UserExperienceAnalyticsOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserExperienceAnalyticsOverview extends Entity
{
    /**
    * Gets the overallScore
    * The user experience analytics overall score.
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
    * The user experience analytics overall score.
    *
    * @param int $val The overallScore
    *
    * @return UserExperienceAnalyticsOverview
    */
    public function setOverallScore($val)
    {
        $this->_propDict["overallScore"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the deviceBootPerformanceOverallScore
    * The user experience analytics device boot performance overall score.
    *
    * @return int The deviceBootPerformanceOverallScore
    */
    public function getDeviceBootPerformanceOverallScore()
    {
        if (array_key_exists("deviceBootPerformanceOverallScore", $this->_propDict)) {
            return $this->_propDict["deviceBootPerformanceOverallScore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceBootPerformanceOverallScore
    * The user experience analytics device boot performance overall score.
    *
    * @param int $val The deviceBootPerformanceOverallScore
    *
    * @return UserExperienceAnalyticsOverview
    */
    public function setDeviceBootPerformanceOverallScore($val)
    {
        $this->_propDict["deviceBootPerformanceOverallScore"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the bestPracticesOverallScore
    * The user experience analytics best practices overall score.
    *
    * @return int The bestPracticesOverallScore
    */
    public function getBestPracticesOverallScore()
    {
        if (array_key_exists("bestPracticesOverallScore", $this->_propDict)) {
            return $this->_propDict["bestPracticesOverallScore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bestPracticesOverallScore
    * The user experience analytics best practices overall score.
    *
    * @param int $val The bestPracticesOverallScore
    *
    * @return UserExperienceAnalyticsOverview
    */
    public function setBestPracticesOverallScore($val)
    {
        $this->_propDict["bestPracticesOverallScore"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the insights
    * The user experience analytics insights.
     *
     * @return array The insights
     */
    public function getInsights()
    {
        if (array_key_exists("insights", $this->_propDict)) {
           return $this->_propDict["insights"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the insights
    * The user experience analytics insights.
    *
    * @param UserExperienceAnalyticsInsight $val The insights
    *
    * @return UserExperienceAnalyticsOverview
    */
    public function setInsights($val)
    {
		$this->_propDict["insights"] = $val;
        return $this;
    }
    
}