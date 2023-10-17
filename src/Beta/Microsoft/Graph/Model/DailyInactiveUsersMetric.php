<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DailyInactiveUsersMetric File
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
* DailyInactiveUsersMetric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DailyInactiveUsersMetric extends InactiveUsersMetricBase
{
    /**
    * Gets the inactive1DayCount
    *
    * @return int|null The inactive1DayCount
    */
    public function getInactive1DayCount()
    {
        if (array_key_exists("inactive1DayCount", $this->_propDict)) {
            return $this->_propDict["inactive1DayCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inactive1DayCount
    *
    * @param int $val The inactive1DayCount
    *
    * @return DailyInactiveUsersMetric
    */
    public function setInactive1DayCount($val)
    {
        $this->_propDict["inactive1DayCount"] = intval($val);
        return $this;
    }

}
