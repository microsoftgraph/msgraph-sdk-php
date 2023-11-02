<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationsMetric File
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
* AuthenticationsMetric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationsMetric extends Entity
{
    /**
    * Gets the appid
    *
    * @return string|null The appid
    */
    public function getAppid()
    {
        if (array_key_exists("appid", $this->_propDict)) {
            return $this->_propDict["appid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appid
    *
    * @param string $val The appid
    *
    * @return AuthenticationsMetric
    */
    public function setAppid($val)
    {
        $this->_propDict["appid"] = $val;
        return $this;
    }

    /**
    * Gets the attemptsCount
    *
    * @return int|null The attemptsCount
    */
    public function getAttemptsCount()
    {
        if (array_key_exists("attemptsCount", $this->_propDict)) {
            return $this->_propDict["attemptsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attemptsCount
    *
    * @param int $val The attemptsCount
    *
    * @return AuthenticationsMetric
    */
    public function setAttemptsCount($val)
    {
        $this->_propDict["attemptsCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the country
    *
    * @return string|null The country
    */
    public function getCountry()
    {
        if (array_key_exists("country", $this->_propDict)) {
            return $this->_propDict["country"];
        } else {
            return null;
        }
    }

    /**
    * Sets the country
    *
    * @param string $val The country
    *
    * @return AuthenticationsMetric
    */
    public function setCountry($val)
    {
        $this->_propDict["country"] = $val;
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
    * @return AuthenticationsMetric
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
    * @return AuthenticationsMetric
    */
    public function setOs($val)
    {
        $this->_propDict["os"] = $val;
        return $this;
    }

    /**
    * Gets the successCount
    *
    * @return int|null The successCount
    */
    public function getSuccessCount()
    {
        if (array_key_exists("successCount", $this->_propDict)) {
            return $this->_propDict["successCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successCount
    *
    * @param int $val The successCount
    *
    * @return AuthenticationsMetric
    */
    public function setSuccessCount($val)
    {
        $this->_propDict["successCount"] = intval($val);
        return $this;
    }

}
