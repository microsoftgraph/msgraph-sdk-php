<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RunDetails File
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
* RunDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RunDetails extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the errorCode
    *
    * @return HuntingRuleErrorCode|null The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            if (is_a($this->_propDict["errorCode"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\HuntingRuleErrorCode") || is_null($this->_propDict["errorCode"])) {
                return $this->_propDict["errorCode"];
            } else {
                $this->_propDict["errorCode"] = new HuntingRuleErrorCode($this->_propDict["errorCode"]);
                return $this->_propDict["errorCode"];
            }
        }
        return null;
    }

    /**
    * Sets the errorCode
    *
    * @param HuntingRuleErrorCode $val The value to assign to the errorCode
    *
    * @return RunDetails The RunDetails
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
         return $this;
    }
    /**
    * Gets the failureReason
    *
    * @return string|null The failureReason
    */
    public function getFailureReason()
    {
        if (array_key_exists("failureReason", $this->_propDict)) {
            return $this->_propDict["failureReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failureReason
    *
    * @param string $val The value of the failureReason
    *
    * @return RunDetails
    */
    public function setFailureReason($val)
    {
        $this->_propDict["failureReason"] = $val;
        return $this;
    }

    /**
    * Gets the lastRunDateTime
    *
    * @return \DateTime|null The lastRunDateTime
    */
    public function getLastRunDateTime()
    {
        if (array_key_exists("lastRunDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRunDateTime"], "\DateTime") || is_null($this->_propDict["lastRunDateTime"])) {
                return $this->_propDict["lastRunDateTime"];
            } else {
                $this->_propDict["lastRunDateTime"] = new \DateTime($this->_propDict["lastRunDateTime"]);
                return $this->_propDict["lastRunDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRunDateTime
    *
    * @param \DateTime $val The value to assign to the lastRunDateTime
    *
    * @return RunDetails The RunDetails
    */
    public function setLastRunDateTime($val)
    {
        $this->_propDict["lastRunDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the status
    *
    * @return HuntingRuleRunStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\HuntingRuleRunStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new HuntingRuleRunStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param HuntingRuleRunStatus $val The value to assign to the status
    *
    * @return RunDetails The RunDetails
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
