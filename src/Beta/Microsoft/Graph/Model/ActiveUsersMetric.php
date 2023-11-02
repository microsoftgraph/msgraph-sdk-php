<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActiveUsersMetric File
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
* ActiveUsersMetric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ActiveUsersMetric extends Entity
{
    /**
    * Gets the count
    *
    * @return int|null The count
    */
    public function getCount()
    {
        if (array_key_exists("count", $this->_propDict)) {
            return $this->_propDict["count"];
        } else {
            return null;
        }
    }

    /**
    * Sets the count
    *
    * @param int $val The count
    *
    * @return ActiveUsersMetric
    */
    public function setCount($val)
    {
        $this->_propDict["count"] = intval($val);
        return $this;
    }

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
    * @return ActiveUsersMetric
    */
    public function setFactDate($val)
    {
        $this->_propDict["factDate"] = $val;
        return $this;
    }

}
