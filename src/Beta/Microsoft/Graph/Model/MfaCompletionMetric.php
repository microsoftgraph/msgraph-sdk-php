<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MfaCompletionMetric File
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
* MfaCompletionMetric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MfaCompletionMetric extends Entity
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
    * @return MfaCompletionMetric
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
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
    * @return MfaCompletionMetric
    */
    public function setAttemptsCount($val)
    {
        $this->_propDict["attemptsCount"] = intval($val);
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
    * @return MfaCompletionMetric
    */
    public function setFactDate($val)
    {
        $this->_propDict["factDate"] = $val;
        return $this;
    }

    /**
    * Gets the mfaMethod
    *
    * @return string|null The mfaMethod
    */
    public function getMfaMethod()
    {
        if (array_key_exists("mfaMethod", $this->_propDict)) {
            return $this->_propDict["mfaMethod"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mfaMethod
    *
    * @param string $val The mfaMethod
    *
    * @return MfaCompletionMetric
    */
    public function setMfaMethod($val)
    {
        $this->_propDict["mfaMethod"] = $val;
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
    * @return MfaCompletionMetric
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
    * @return MfaCompletionMetric
    */
    public function setSuccessCount($val)
    {
        $this->_propDict["successCount"] = intval($val);
        return $this;
    }

}
