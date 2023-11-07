<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceActivityValueMetric File
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
* ServiceActivityValueMetric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceActivityValueMetric extends Entity
{

    /**
    * Gets the intervalStartDateTime
    * The starting date and time (UTC) of the interval.
    *
    * @return \DateTime|null The intervalStartDateTime
    */
    public function getIntervalStartDateTime()
    {
        if (array_key_exists("intervalStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["intervalStartDateTime"], "\DateTime") || is_null($this->_propDict["intervalStartDateTime"])) {
                return $this->_propDict["intervalStartDateTime"];
            } else {
                $this->_propDict["intervalStartDateTime"] = new \DateTime($this->_propDict["intervalStartDateTime"]);
                return $this->_propDict["intervalStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the intervalStartDateTime
    * The starting date and time (UTC) of the interval.
    *
    * @param \DateTime $val The value to assign to the intervalStartDateTime
    *
    * @return ServiceActivityValueMetric The ServiceActivityValueMetric
    */
    public function setIntervalStartDateTime($val)
    {
        $this->_propDict["intervalStartDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the value
    * The aggregated value over the given aggregation interval starting from the intervalStartDateTime. The value is caculated at the minute level. The value at the starting minute of the intervalStartDateTime is included. The value at the last minute of the given interval is excluded. For example, if intervalStartDateTime is 2023-09-20T18:00:00Z and aggregation interval is 5 minutes, then the value is aggregated from 2023-09-20T18:00:00Z(inclusive) to 2023-09-20T18:05:00Z(exclusive).
    *
    * @return int|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * The aggregated value over the given aggregation interval starting from the intervalStartDateTime. The value is caculated at the minute level. The value at the starting minute of the intervalStartDateTime is included. The value at the last minute of the given interval is excluded. For example, if intervalStartDateTime is 2023-09-20T18:00:00Z and aggregation interval is 5 minutes, then the value is aggregated from 2023-09-20T18:00:00Z(inclusive) to 2023-09-20T18:05:00Z(exclusive).
    *
    * @param int $val The value of the value
    *
    * @return ServiceActivityValueMetric
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
