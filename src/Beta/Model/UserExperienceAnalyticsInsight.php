<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsInsight File
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
* UserExperienceAnalyticsInsight class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserExperienceAnalyticsInsight extends Entity
{
    /**
    * Gets the userExperienceAnalyticsMetricId
    * The unique identifier of the user experience analytics insight.
    *
    * @return string The userExperienceAnalyticsMetricId
    */
    public function getUserExperienceAnalyticsMetricId()
    {
        if (array_key_exists("userExperienceAnalyticsMetricId", $this->_propDict)) {
            return $this->_propDict["userExperienceAnalyticsMetricId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsMetricId
    * The unique identifier of the user experience analytics insight.
    *
    * @param string $val The value of the userExperienceAnalyticsMetricId
    *
    * @return UserExperienceAnalyticsInsight
    */
    public function setUserExperienceAnalyticsMetricId($val)
    {
        $this->_propDict["userExperienceAnalyticsMetricId"] = $val;
        return $this;
    }
    /**
    * Gets the insightId
    * The unique identifier of the user experience analytics insight.
    *
    * @return string The insightId
    */
    public function getInsightId()
    {
        if (array_key_exists("insightId", $this->_propDict)) {
            return $this->_propDict["insightId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the insightId
    * The unique identifier of the user experience analytics insight.
    *
    * @param string $val The value of the insightId
    *
    * @return UserExperienceAnalyticsInsight
    */
    public function setInsightId($val)
    {
        $this->_propDict["insightId"] = $val;
        return $this;
    }

    /**
    * Gets the value
    * The value of the user experience analytics insight.
    *
    * @return UserExperienceAnalyticsInsightValue The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "Microsoft\Graph\Beta\Model\UserExperienceAnalyticsInsightValue")) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = new UserExperienceAnalyticsInsightValue($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    * The value of the user experience analytics insight.
    *
    * @param UserExperienceAnalyticsInsightValue $val The value to assign to the value
    *
    * @return UserExperienceAnalyticsInsight The UserExperienceAnalyticsInsight
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
