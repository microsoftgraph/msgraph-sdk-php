<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsDeviceStartupProcessPerformance File
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
* UserExperienceAnalyticsDeviceStartupProcessPerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsDeviceStartupProcessPerformance extends Entity
{
    /**
    * Gets the deviceCount
    * The count of devices which initiated this process on startup. Supports: $filter, $select, $OrderBy. Read-only.
    *
    * @return int|null The deviceCount
    */
    public function getDeviceCount()
    {
        if (array_key_exists("deviceCount", $this->_propDict)) {
            return $this->_propDict["deviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceCount
    * The count of devices which initiated this process on startup. Supports: $filter, $select, $OrderBy. Read-only.
    *
    * @param int $val The deviceCount
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setDeviceCount($val)
    {
        $this->_propDict["deviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the medianImpactInMs
    * The median impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only.
    *
    * @return int|null The medianImpactInMs
    */
    public function getMedianImpactInMs()
    {
        if (array_key_exists("medianImpactInMs", $this->_propDict)) {
            return $this->_propDict["medianImpactInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the medianImpactInMs
    * The median impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only.
    *
    * @param int $val The medianImpactInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setMedianImpactInMs($val)
    {
        $this->_propDict["medianImpactInMs"] = intval($val);
        return $this;
    }

    /**
    * Gets the medianImpactInMs2
    * The median impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only.
    *
    * @return int|null The medianImpactInMs2
    */
    public function getMedianImpactInMs2()
    {
        if (array_key_exists("medianImpactInMs2", $this->_propDict)) {
            return $this->_propDict["medianImpactInMs2"];
        } else {
            return null;
        }
    }

    /**
    * Sets the medianImpactInMs2
    * The median impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only.
    *
    * @param int $val The medianImpactInMs2
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setMedianImpactInMs2($val)
    {
        $this->_propDict["medianImpactInMs2"] = intval($val);
        return $this;
    }

    /**
    * Gets the processName
    * The name of the startup process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only.
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
    * The name of the startup process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The processName
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setProcessName($val)
    {
        $this->_propDict["processName"] = $val;
        return $this;
    }

    /**
    * Gets the productName
    * The product name of the startup process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only.
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
    * The product name of the startup process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The productName
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setProductName($val)
    {
        $this->_propDict["productName"] = $val;
        return $this;
    }

    /**
    * Gets the publisher
    * The publisher of the startup process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only.
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
    * The publisher of the startup process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only.
    *
    * @param string $val The publisher
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }

    /**
    * Gets the totalImpactInMs
    * The total impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only.
    *
    * @return int|null The totalImpactInMs
    */
    public function getTotalImpactInMs()
    {
        if (array_key_exists("totalImpactInMs", $this->_propDict)) {
            return $this->_propDict["totalImpactInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalImpactInMs
    * The total impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only.
    *
    * @param int $val The totalImpactInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setTotalImpactInMs($val)
    {
        $this->_propDict["totalImpactInMs"] = intval($val);
        return $this;
    }

    /**
    * Gets the totalImpactInMs2
    * The total impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only.
    *
    * @return int|null The totalImpactInMs2
    */
    public function getTotalImpactInMs2()
    {
        if (array_key_exists("totalImpactInMs2", $this->_propDict)) {
            return $this->_propDict["totalImpactInMs2"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalImpactInMs2
    * The total impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only.
    *
    * @param int $val The totalImpactInMs2
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setTotalImpactInMs2($val)
    {
        $this->_propDict["totalImpactInMs2"] = intval($val);
        return $this;
    }

}
