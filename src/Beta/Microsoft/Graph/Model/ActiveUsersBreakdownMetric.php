<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActiveUsersBreakdownMetric File
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
* ActiveUsersBreakdownMetric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ActiveUsersBreakdownMetric extends Entity
{
    /**
    * Gets the appId
    *
    * @return string|null The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    *
    * @param string $val The appId
    *
    * @return ActiveUsersBreakdownMetric
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }

    /**
    * Gets the appName
    *
    * @return string|null The appName
    */
    public function getAppName()
    {
        if (array_key_exists("appName", $this->_propDict)) {
            return $this->_propDict["appName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appName
    *
    * @param string $val The appName
    *
    * @return ActiveUsersBreakdownMetric
    */
    public function setAppName($val)
    {
        $this->_propDict["appName"] = $val;
        return $this;
    }

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
    * @return ActiveUsersBreakdownMetric
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
    * @return ActiveUsersBreakdownMetric
    */
    public function setFactDate($val)
    {
        $this->_propDict["factDate"] = $val;
        return $this;
    }

    /**
    * Gets the os
    *
    * @return string|null The os
    */
    public function getOs()
    {
        if (array_key_exists("os", $this->_propDict)) {
            return $this->_propDict["os"];
        } else {
            return null;
        }
    }

    /**
    * Sets the os
    *
    * @param string $val The os
    *
    * @return ActiveUsersBreakdownMetric
    */
    public function setOs($val)
    {
        $this->_propDict["os"] = $val;
        return $this;
    }

}
