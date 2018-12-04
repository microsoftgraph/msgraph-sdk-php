<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* DeviceManagementSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementSettings extends Entity
{
    /**
    * Gets the deviceComplianceCheckinThresholdDays
    *
    * @return int The deviceComplianceCheckinThresholdDays
    */
    public function getDeviceComplianceCheckinThresholdDays()
    {
        if (array_key_exists("deviceComplianceCheckinThresholdDays", $this->_propDict)) {
            return $this->_propDict["deviceComplianceCheckinThresholdDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceComplianceCheckinThresholdDays
    *
    * @param int $val The value of the deviceComplianceCheckinThresholdDays
    *
    * @return DeviceManagementSettings
    */
    public function setDeviceComplianceCheckinThresholdDays($val)
    {
        $this->_propDict["deviceComplianceCheckinThresholdDays"] = $val;
        return $this;
    }
    /**
    * Gets the isScheduledActionEnabled
    *
    * @return bool The isScheduledActionEnabled
    */
    public function getIsScheduledActionEnabled()
    {
        if (array_key_exists("isScheduledActionEnabled", $this->_propDict)) {
            return $this->_propDict["isScheduledActionEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isScheduledActionEnabled
    *
    * @param bool $val The value of the isScheduledActionEnabled
    *
    * @return DeviceManagementSettings
    */
    public function setIsScheduledActionEnabled($val)
    {
        $this->_propDict["isScheduledActionEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the secureByDefault
    *
    * @return bool The secureByDefault
    */
    public function getSecureByDefault()
    {
        if (array_key_exists("secureByDefault", $this->_propDict)) {
            return $this->_propDict["secureByDefault"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secureByDefault
    *
    * @param bool $val The value of the secureByDefault
    *
    * @return DeviceManagementSettings
    */
    public function setSecureByDefault($val)
    {
        $this->_propDict["secureByDefault"] = $val;
        return $this;
    }
}
