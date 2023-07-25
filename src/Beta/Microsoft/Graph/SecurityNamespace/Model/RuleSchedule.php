<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RuleSchedule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* RuleSchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RuleSchedule extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the nextRunDateTime
    *
    * @return \DateTime|null The nextRunDateTime
    */
    public function getNextRunDateTime()
    {
        if (array_key_exists("nextRunDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["nextRunDateTime"], "\DateTime") || is_null($this->_propDict["nextRunDateTime"])) {
                return $this->_propDict["nextRunDateTime"];
            } else {
                $this->_propDict["nextRunDateTime"] = new \DateTime($this->_propDict["nextRunDateTime"]);
                return $this->_propDict["nextRunDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the nextRunDateTime
    *
    * @param \DateTime $val The value to assign to the nextRunDateTime
    *
    * @return RuleSchedule The RuleSchedule
    */
    public function setNextRunDateTime($val)
    {
        $this->_propDict["nextRunDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the period
    *
    * @return string|null The period
    */
    public function getPeriod()
    {
        if (array_key_exists("period", $this->_propDict)) {
            return $this->_propDict["period"];
        } else {
            return null;
        }
    }

    /**
    * Sets the period
    *
    * @param string $val The value of the period
    *
    * @return RuleSchedule
    */
    public function setPeriod($val)
    {
        $this->_propDict["period"] = $val;
        return $this;
    }
}
