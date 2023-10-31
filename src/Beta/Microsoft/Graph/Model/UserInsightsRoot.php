<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserInsightsRoot File
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
* UserInsightsRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserInsightsRoot extends Entity
{
    /**
    * Gets the daily
    *
    * @return DailyUserInsightMetricsRoot|null The daily
    */
    public function getDaily()
    {
        if (array_key_exists("daily", $this->_propDict)) {
            if (is_a($this->_propDict["daily"], "\Beta\Microsoft\Graph\Model\DailyUserInsightMetricsRoot") || is_null($this->_propDict["daily"])) {
                return $this->_propDict["daily"];
            } else {
                $this->_propDict["daily"] = new DailyUserInsightMetricsRoot($this->_propDict["daily"]);
                return $this->_propDict["daily"];
            }
        }
        return null;
    }

    /**
    * Sets the daily
    *
    * @param DailyUserInsightMetricsRoot $val The daily
    *
    * @return UserInsightsRoot
    */
    public function setDaily($val)
    {
        $this->_propDict["daily"] = $val;
        return $this;
    }

    /**
    * Gets the monthly
    *
    * @return MonthlyUserInsightMetricsRoot|null The monthly
    */
    public function getMonthly()
    {
        if (array_key_exists("monthly", $this->_propDict)) {
            if (is_a($this->_propDict["monthly"], "\Beta\Microsoft\Graph\Model\MonthlyUserInsightMetricsRoot") || is_null($this->_propDict["monthly"])) {
                return $this->_propDict["monthly"];
            } else {
                $this->_propDict["monthly"] = new MonthlyUserInsightMetricsRoot($this->_propDict["monthly"]);
                return $this->_propDict["monthly"];
            }
        }
        return null;
    }

    /**
    * Sets the monthly
    *
    * @param MonthlyUserInsightMetricsRoot $val The monthly
    *
    * @return UserInsightsRoot
    */
    public function setMonthly($val)
    {
        $this->_propDict["monthly"] = $val;
        return $this;
    }

}
