<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAnomalyCorrelationGroupFeature File
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
* UserExperienceAnalyticsAnomalyCorrelationGroupFeature class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAnomalyCorrelationGroupFeature extends Entity
{

    /**
    * Gets the deviceFeatureType
    * The type of device feature. Possible values are: manufacturer, model, osVersion, application or driver
    *
    * @return UserExperienceAnalyticsAnomalyDeviceFeatureType|null The deviceFeatureType
    */
    public function getDeviceFeatureType()
    {
        if (array_key_exists("deviceFeatureType", $this->_propDict)) {
            if (is_a($this->_propDict["deviceFeatureType"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsAnomalyDeviceFeatureType") || is_null($this->_propDict["deviceFeatureType"])) {
                return $this->_propDict["deviceFeatureType"];
            } else {
                $this->_propDict["deviceFeatureType"] = new UserExperienceAnalyticsAnomalyDeviceFeatureType($this->_propDict["deviceFeatureType"]);
                return $this->_propDict["deviceFeatureType"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceFeatureType
    * The type of device feature. Possible values are: manufacturer, model, osVersion, application or driver
    *
    * @param UserExperienceAnalyticsAnomalyDeviceFeatureType $val The value to assign to the deviceFeatureType
    *
    * @return UserExperienceAnalyticsAnomalyCorrelationGroupFeature The UserExperienceAnalyticsAnomalyCorrelationGroupFeature
    */
    public function setDeviceFeatureType($val)
    {
        $this->_propDict["deviceFeatureType"] = $val;
         return $this;
    }
    /**
    * Gets the values
    * Specific metric values that describe the features of the given device feature type.
    *
    * @return string|null The values
    */
    public function getValues()
    {
        if (array_key_exists("values", $this->_propDict)) {
            return $this->_propDict["values"];
        } else {
            return null;
        }
    }

    /**
    * Sets the values
    * Specific metric values that describe the features of the given device feature type.
    *
    * @param string $val The value of the values
    *
    * @return UserExperienceAnalyticsAnomalyCorrelationGroupFeature
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }
}
