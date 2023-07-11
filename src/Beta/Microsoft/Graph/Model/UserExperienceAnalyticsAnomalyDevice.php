<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAnomalyDevice File
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
* UserExperienceAnalyticsAnomalyDevice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAnomalyDevice extends Entity
{
    /**
    * Gets the anomalyId
    * The unique identifier of the anomaly.
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
    * The unique identifier of the anomaly.
    *
    * @param string $val The anomalyId
    *
    * @return UserExperienceAnalyticsAnomalyDevice
    */
    public function setAnomalyId($val)
    {
        $this->_propDict["anomalyId"] = $val;
        return $this;
    }

    /**
    * Gets the anomalyOnDeviceFirstOccurrenceDateTime
    * Indicates the first occurance date and time for the anomaly on the device.
    *
    * @return \DateTime|null The anomalyOnDeviceFirstOccurrenceDateTime
    */
    public function getAnomalyOnDeviceFirstOccurrenceDateTime()
    {
        if (array_key_exists("anomalyOnDeviceFirstOccurrenceDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["anomalyOnDeviceFirstOccurrenceDateTime"], "\DateTime") || is_null($this->_propDict["anomalyOnDeviceFirstOccurrenceDateTime"])) {
                return $this->_propDict["anomalyOnDeviceFirstOccurrenceDateTime"];
            } else {
                $this->_propDict["anomalyOnDeviceFirstOccurrenceDateTime"] = new \DateTime($this->_propDict["anomalyOnDeviceFirstOccurrenceDateTime"]);
                return $this->_propDict["anomalyOnDeviceFirstOccurrenceDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the anomalyOnDeviceFirstOccurrenceDateTime
    * Indicates the first occurance date and time for the anomaly on the device.
    *
    * @param \DateTime $val The anomalyOnDeviceFirstOccurrenceDateTime
    *
    * @return UserExperienceAnalyticsAnomalyDevice
    */
    public function setAnomalyOnDeviceFirstOccurrenceDateTime($val)
    {
        $this->_propDict["anomalyOnDeviceFirstOccurrenceDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the anomalyOnDeviceLatestOccurrenceDateTime
    * Indicates the latest occurance date and time for the anomaly on the device.
    *
    * @return \DateTime|null The anomalyOnDeviceLatestOccurrenceDateTime
    */
    public function getAnomalyOnDeviceLatestOccurrenceDateTime()
    {
        if (array_key_exists("anomalyOnDeviceLatestOccurrenceDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["anomalyOnDeviceLatestOccurrenceDateTime"], "\DateTime") || is_null($this->_propDict["anomalyOnDeviceLatestOccurrenceDateTime"])) {
                return $this->_propDict["anomalyOnDeviceLatestOccurrenceDateTime"];
            } else {
                $this->_propDict["anomalyOnDeviceLatestOccurrenceDateTime"] = new \DateTime($this->_propDict["anomalyOnDeviceLatestOccurrenceDateTime"]);
                return $this->_propDict["anomalyOnDeviceLatestOccurrenceDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the anomalyOnDeviceLatestOccurrenceDateTime
    * Indicates the latest occurance date and time for the anomaly on the device.
    *
    * @param \DateTime $val The anomalyOnDeviceLatestOccurrenceDateTime
    *
    * @return UserExperienceAnalyticsAnomalyDevice
    */
    public function setAnomalyOnDeviceLatestOccurrenceDateTime($val)
    {
        $this->_propDict["anomalyOnDeviceLatestOccurrenceDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the correlationGroupId
    * The unique identifier of the correlation group.
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
    * The unique identifier of the correlation group.
    *
    * @param string $val The correlationGroupId
    *
    * @return UserExperienceAnalyticsAnomalyDevice
    */
    public function setCorrelationGroupId($val)
    {
        $this->_propDict["correlationGroupId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceId
    * The unique identifier of the device.
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
    * The unique identifier of the device.
    *
    * @param string $val The deviceId
    *
    * @return UserExperienceAnalyticsAnomalyDevice
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceManufacturer
    * The manufacturer name of the device.
    *
    * @return string|null The deviceManufacturer
    */
    public function getDeviceManufacturer()
    {
        if (array_key_exists("deviceManufacturer", $this->_propDict)) {
            return $this->_propDict["deviceManufacturer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceManufacturer
    * The manufacturer name of the device.
    *
    * @param string $val The deviceManufacturer
    *
    * @return UserExperienceAnalyticsAnomalyDevice
    */
    public function setDeviceManufacturer($val)
    {
        $this->_propDict["deviceManufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the deviceModel
    * The model name of the device.
    *
    * @return string|null The deviceModel
    */
    public function getDeviceModel()
    {
        if (array_key_exists("deviceModel", $this->_propDict)) {
            return $this->_propDict["deviceModel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceModel
    * The model name of the device.
    *
    * @param string $val The deviceModel
    *
    * @return UserExperienceAnalyticsAnomalyDevice
    */
    public function setDeviceModel($val)
    {
        $this->_propDict["deviceModel"] = $val;
        return $this;
    }

    /**
    * Gets the deviceName
    * The name of the device.
    *
    * @return string|null The deviceName
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
    * The name of the device.
    *
    * @param string $val The deviceName
    *
    * @return UserExperienceAnalyticsAnomalyDevice
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the deviceStatus
    * Indicates the device status with respect to the correlation group. At risk devices are devices that share correlation group features but may not yet be affected by an anomaly, such as when a device is experiencing crashes on an application but that application has not been used on the device but is currently installed. This could lead to the device becoming anomalous if the application in question were to be used. Possible values are: anomolous, affected or atRisk. Possible values are: anomalous, affected, atRisk, unknownFutureValue.
    *
    * @return UserExperienceAnalyticsDeviceStatus|null The deviceStatus
    */
    public function getDeviceStatus()
    {
        if (array_key_exists("deviceStatus", $this->_propDict)) {
            if (is_a($this->_propDict["deviceStatus"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsDeviceStatus") || is_null($this->_propDict["deviceStatus"])) {
                return $this->_propDict["deviceStatus"];
            } else {
                $this->_propDict["deviceStatus"] = new UserExperienceAnalyticsDeviceStatus($this->_propDict["deviceStatus"]);
                return $this->_propDict["deviceStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceStatus
    * Indicates the device status with respect to the correlation group. At risk devices are devices that share correlation group features but may not yet be affected by an anomaly, such as when a device is experiencing crashes on an application but that application has not been used on the device but is currently installed. This could lead to the device becoming anomalous if the application in question were to be used. Possible values are: anomolous, affected or atRisk. Possible values are: anomalous, affected, atRisk, unknownFutureValue.
    *
    * @param UserExperienceAnalyticsDeviceStatus $val The deviceStatus
    *
    * @return UserExperienceAnalyticsAnomalyDevice
    */
    public function setDeviceStatus($val)
    {
        $this->_propDict["deviceStatus"] = $val;
        return $this;
    }

    /**
    * Gets the osName
    * The name of the OS installed on the device.
    *
    * @return string|null The osName
    */
    public function getOsName()
    {
        if (array_key_exists("osName", $this->_propDict)) {
            return $this->_propDict["osName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osName
    * The name of the OS installed on the device.
    *
    * @param string $val The osName
    *
    * @return UserExperienceAnalyticsAnomalyDevice
    */
    public function setOsName($val)
    {
        $this->_propDict["osName"] = $val;
        return $this;
    }

    /**
    * Gets the osVersion
    * The OS version installed on the device.
    *
    * @return string|null The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osVersion
    * The OS version installed on the device.
    *
    * @param string $val The osVersion
    *
    * @return UserExperienceAnalyticsAnomalyDevice
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }

}
