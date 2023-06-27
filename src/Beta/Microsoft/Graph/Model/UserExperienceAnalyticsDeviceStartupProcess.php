<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsDeviceStartupProcess File
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
* UserExperienceAnalyticsDeviceStartupProcess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsDeviceStartupProcess extends Entity
{
    /**
    * Gets the managedDeviceId
    * The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
    *
    * @return string|null The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceId
    * The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The managedDeviceId
    *
    * @return UserExperienceAnalyticsDeviceStartupProcess
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the processName
    * The name of the process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only.
    *
    * @return string|null The processName
    */
    public function getProcessName()
    {
        if (array_key_exists("processName", $this->_propDict)) {
            return $this->_propDict["processName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processName
    * The name of the process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The processName
    *
    * @return UserExperienceAnalyticsDeviceStartupProcess
    */
    public function setProcessName($val)
    {
        $this->_propDict["processName"] = $val;
        return $this;
    }

    /**
    * Gets the productName
    * The product name of the process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only.
    *
    * @return string|null The productName
    */
    public function getProductName()
    {
        if (array_key_exists("productName", $this->_propDict)) {
            return $this->_propDict["productName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productName
    * The product name of the process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The productName
    *
    * @return UserExperienceAnalyticsDeviceStartupProcess
    */
    public function setProductName($val)
    {
        $this->_propDict["productName"] = $val;
        return $this;
    }

    /**
    * Gets the publisher
    * The publisher of the process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only.
    *
    * @return string|null The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisher
    * The publisher of the process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The publisher
    *
    * @return UserExperienceAnalyticsDeviceStartupProcess
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }

    /**
    * Gets the startupImpactInMs
    * The impact of startup process on device boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @return int|null The startupImpactInMs
    */
    public function getStartupImpactInMs()
    {
        if (array_key_exists("startupImpactInMs", $this->_propDict)) {
            return $this->_propDict["startupImpactInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the startupImpactInMs
    * The impact of startup process on device boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
    *
    * @param int $val The startupImpactInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupProcess
    */
    public function setStartupImpactInMs($val)
    {
        $this->_propDict["startupImpactInMs"] = intval($val);
        return $this;
    }

}
