<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAnomalyCorrelationGroupOverview File
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
* UserExperienceAnalyticsAnomalyCorrelationGroupOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAnomalyCorrelationGroupOverview extends Entity
{
    /**
    * Gets the anomalyCorrelationGroupCount
    * Indicates the number of correlation groups in the anomaly. Valid values -2147483648 to 2147483647
    *
    * @return int|null The anomalyCorrelationGroupCount
    */
    public function getAnomalyCorrelationGroupCount()
    {
        if (array_key_exists("anomalyCorrelationGroupCount", $this->_propDict)) {
            return $this->_propDict["anomalyCorrelationGroupCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the anomalyCorrelationGroupCount
    * Indicates the number of correlation groups in the anomaly. Valid values -2147483648 to 2147483647
    *
    * @param int $val The anomalyCorrelationGroupCount
    *
    * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverview
    */
    public function setAnomalyCorrelationGroupCount($val)
    {
        $this->_propDict["anomalyCorrelationGroupCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the anomalyId
    * The unique identifier of the anomaly. Anomaly details such as name and type can be found in the UserExperienceAnalyticsAnomalySeverityOverview entity.
    *
    * @return string|null The anomalyId
    */
    public function getAnomalyId()
    {
        if (array_key_exists("anomalyId", $this->_propDict)) {
            return $this->_propDict["anomalyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the anomalyId
    * The unique identifier of the anomaly. Anomaly details such as name and type can be found in the UserExperienceAnalyticsAnomalySeverityOverview entity.
    *
    * @param string $val The anomalyId
    *
    * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverview
    */
    public function setAnomalyId($val)
    {
        $this->_propDict["anomalyId"] = $val;
        return $this;
    }

    /**
    * Gets the correlationGroupAnomalousDeviceCount
    * Indicates the total number of devices affected by the anomaly in the correlation group. Valid values -2147483648 to 2147483647
    *
    * @return int|null The correlationGroupAnomalousDeviceCount
    */
    public function getCorrelationGroupAnomalousDeviceCount()
    {
        if (array_key_exists("correlationGroupAnomalousDeviceCount", $this->_propDict)) {
            return $this->_propDict["correlationGroupAnomalousDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the correlationGroupAnomalousDeviceCount
    * Indicates the total number of devices affected by the anomaly in the correlation group. Valid values -2147483648 to 2147483647
    *
    * @param int $val The correlationGroupAnomalousDeviceCount
    *
    * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverview
    */
    public function setCorrelationGroupAnomalousDeviceCount($val)
    {
        $this->_propDict["correlationGroupAnomalousDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the correlationGroupAtRiskDeviceCount
    * Indicates the total number of devices at risk in the correlation group. Valid values -2147483648 to 2147483647
    *
    * @return int|null The correlationGroupAtRiskDeviceCount
    */
    public function getCorrelationGroupAtRiskDeviceCount()
    {
        if (array_key_exists("correlationGroupAtRiskDeviceCount", $this->_propDict)) {
            return $this->_propDict["correlationGroupAtRiskDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the correlationGroupAtRiskDeviceCount
    * Indicates the total number of devices at risk in the correlation group. Valid values -2147483648 to 2147483647
    *
    * @param int $val The correlationGroupAtRiskDeviceCount
    *
    * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverview
    */
    public function setCorrelationGroupAtRiskDeviceCount($val)
    {
        $this->_propDict["correlationGroupAtRiskDeviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the correlationGroupDeviceCount
    * Indicates the total number of devices in a correlation group. Valid values -2147483648 to 2147483647
    *
    * @return int|null The correlationGroupDeviceCount
    */
    public function getCorrelationGroupDeviceCount()
    {
        if (array_key_exists("correlationGroupDeviceCount", $this->_propDict)) {
            return $this->_propDict["correlationGroupDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the correlationGroupDeviceCount
    * Indicates the total number of devices in a correlation group. Valid values -2147483648 to 2147483647
    *
    * @param int $val The correlationGroupDeviceCount
    *
    * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverview
    */
    public function setCorrelationGroupDeviceCount($val)
    {
        $this->_propDict["correlationGroupDeviceCount"] = intval($val);
        return $this;
    }


     /**
     * Gets the correlationGroupFeatures
    * Describes the features of a device that are shared between all devices in a correlation group.
     *
     * @return array|null The correlationGroupFeatures
     */
    public function getCorrelationGroupFeatures()
    {
        if (array_key_exists("correlationGroupFeatures", $this->_propDict)) {
           return $this->_propDict["correlationGroupFeatures"];
        } else {
            return null;
        }
    }

    /**
    * Sets the correlationGroupFeatures
    * Describes the features of a device that are shared between all devices in a correlation group.
    *
    * @param UserExperienceAnalyticsAnomalyCorrelationGroupFeature[] $val The correlationGroupFeatures
    *
    * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverview
    */
    public function setCorrelationGroupFeatures($val)
    {
        $this->_propDict["correlationGroupFeatures"] = $val;
        return $this;
    }

    /**
    * Gets the correlationGroupId
    * The unique identifier for the correlation group which will uniquely identify one of the correlation group within an anomaly. The correlation Id can be mapped to the correlation group name by concatinating the correlation group features. Example of correlation group name which is the indicative of concatenated features names are  for names, Contoso manufacture 4.4.1 and Windows 11.22621.1485.
    *
    * @return string|null The correlationGroupId
    */
    public function getCorrelationGroupId()
    {
        if (array_key_exists("correlationGroupId", $this->_propDict)) {
            return $this->_propDict["correlationGroupId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the correlationGroupId
    * The unique identifier for the correlation group which will uniquely identify one of the correlation group within an anomaly. The correlation Id can be mapped to the correlation group name by concatinating the correlation group features. Example of correlation group name which is the indicative of concatenated features names are  for names, Contoso manufacture 4.4.1 and Windows 11.22621.1485.
    *
    * @param string $val The correlationGroupId
    *
    * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverview
    */
    public function setCorrelationGroupId($val)
    {
        $this->_propDict["correlationGroupId"] = $val;
        return $this;
    }

    /**
    * Gets the correlationGroupPrevalence
    * The prevalence of the correlation group. Possible values are: high, medium or low.
    *
    * @return UserExperienceAnalyticsAnomalyCorrelationGroupPrevalence|null The correlationGroupPrevalence
    */
    public function getCorrelationGroupPrevalence()
    {
        if (array_key_exists("correlationGroupPrevalence", $this->_propDict)) {
            if (is_a($this->_propDict["correlationGroupPrevalence"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsAnomalyCorrelationGroupPrevalence") || is_null($this->_propDict["correlationGroupPrevalence"])) {
                return $this->_propDict["correlationGroupPrevalence"];
            } else {
                $this->_propDict["correlationGroupPrevalence"] = new UserExperienceAnalyticsAnomalyCorrelationGroupPrevalence($this->_propDict["correlationGroupPrevalence"]);
                return $this->_propDict["correlationGroupPrevalence"];
            }
        }
        return null;
    }

    /**
    * Sets the correlationGroupPrevalence
    * The prevalence of the correlation group. Possible values are: high, medium or low.
    *
    * @param UserExperienceAnalyticsAnomalyCorrelationGroupPrevalence $val The correlationGroupPrevalence
    *
    * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverview
    */
    public function setCorrelationGroupPrevalence($val)
    {
        $this->_propDict["correlationGroupPrevalence"] = $val;
        return $this;
    }

    /**
    * Gets the correlationGroupPrevalencePercentage
    * The percentage of the devices in the correlation group that are anomalous. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float|null The correlationGroupPrevalencePercentage
    */
    public function getCorrelationGroupPrevalencePercentage()
    {
        if (array_key_exists("correlationGroupPrevalencePercentage", $this->_propDict)) {
            return $this->_propDict["correlationGroupPrevalencePercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the correlationGroupPrevalencePercentage
    * The percentage of the devices in the correlation group that are anomalous. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The correlationGroupPrevalencePercentage
    *
    * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverview
    */
    public function setCorrelationGroupPrevalencePercentage($val)
    {
        $this->_propDict["correlationGroupPrevalencePercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the totalDeviceCount
    * Indicates the total number of devices in the tenant. Valid values -2147483648 to 2147483647
    *
    * @return int|null The totalDeviceCount
    */
    public function getTotalDeviceCount()
    {
        if (array_key_exists("totalDeviceCount", $this->_propDict)) {
            return $this->_propDict["totalDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalDeviceCount
    * Indicates the total number of devices in the tenant. Valid values -2147483648 to 2147483647
    *
    * @param int $val The totalDeviceCount
    *
    * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverview
    */
    public function setTotalDeviceCount($val)
    {
        $this->_propDict["totalDeviceCount"] = intval($val);
        return $this;
    }

}
