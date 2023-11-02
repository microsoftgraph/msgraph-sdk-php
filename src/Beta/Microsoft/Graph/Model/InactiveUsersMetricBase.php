<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InactiveUsersMetricBase File
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
* InactiveUsersMetricBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InactiveUsersMetricBase extends Entity
{
    /**
    * Gets the factDate
    *
    * @return \DateTime|null The factDate
    */
    public function getFactDate()
    {
        if (array_key_exists("factDate", $this->_propDict)) {
            if (is_a($this->_propDict["factDate"], "\DateTime") || is_null($this->_propDict["factDate"])) {
                return $this->_propDict["factDate"];
            } else {
                $this->_propDict["factDate"] = new \DateTime($this->_propDict["factDate"]);
                return $this->_propDict["factDate"];
            }
        }
        return null;
    }

    /**
    * Sets the factDate
    *
    * @param \DateTime $val The factDate
    *
    * @return InactiveUsersMetricBase
    */
    public function setFactDate($val)
    {
        $this->_propDict["factDate"] = $val;
        return $this;
    }

    /**
    * Gets the inactive30DayCount
    *
    * @return int|null The inactive30DayCount
    */
    public function getInactive30DayCount()
    {
        if (array_key_exists("inactive30DayCount", $this->_propDict)) {
            return $this->_propDict["inactive30DayCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inactive30DayCount
    *
    * @param int $val The inactive30DayCount
    *
    * @return InactiveUsersMetricBase
    */
    public function setInactive30DayCount($val)
    {
        $this->_propDict["inactive30DayCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the inactive60DayCount
    *
    * @return int|null The inactive60DayCount
    */
    public function getInactive60DayCount()
    {
        if (array_key_exists("inactive60DayCount", $this->_propDict)) {
            return $this->_propDict["inactive60DayCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inactive60DayCount
    *
    * @param int $val The inactive60DayCount
    *
    * @return InactiveUsersMetricBase
    */
    public function setInactive60DayCount($val)
    {
        $this->_propDict["inactive60DayCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the inactive90DayCount
    *
    * @return int|null The inactive90DayCount
    */
    public function getInactive90DayCount()
    {
        if (array_key_exists("inactive90DayCount", $this->_propDict)) {
            return $this->_propDict["inactive90DayCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inactive90DayCount
    *
    * @param int $val The inactive90DayCount
    *
    * @return InactiveUsersMetricBase
    */
    public function setInactive90DayCount($val)
    {
        $this->_propDict["inactive90DayCount"] = intval($val);
        return $this;
    }

}
