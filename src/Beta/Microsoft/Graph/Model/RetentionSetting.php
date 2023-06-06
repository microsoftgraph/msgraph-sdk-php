<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RetentionSetting File
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
* RetentionSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RetentionSetting extends Entity
{
    /**
    * Gets the interval
    *
    * @return string|null The interval
    */
    public function getInterval()
    {
        if (array_key_exists("interval", $this->_propDict)) {
            return $this->_propDict["interval"];
        } else {
            return null;
        }
    }

    /**
    * Sets the interval
    *
    * @param string $val The value of the interval
    *
    * @return RetentionSetting
    */
    public function setInterval($val)
    {
        $this->_propDict["interval"] = $val;
        return $this;
    }

    /**
    * Gets the period
    *
    * @return \DateInterval|null The period
    */
    public function getPeriod()
    {
        if (array_key_exists("period", $this->_propDict)) {
            if (is_a($this->_propDict["period"], "\DateInterval") || is_null($this->_propDict["period"])) {
                return $this->_propDict["period"];
            } else {
                $this->_propDict["period"] = new \DateInterval($this->_propDict["period"]);
                return $this->_propDict["period"];
            }
        }
        return null;
    }

    /**
    * Sets the period
    *
    * @param \DateInterval $val The value to assign to the period
    *
    * @return RetentionSetting The RetentionSetting
    */
    public function setPeriod($val)
    {
        $this->_propDict["period"] = $val;
         return $this;
    }
}
