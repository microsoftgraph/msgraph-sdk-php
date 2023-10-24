<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceLevelAgreementAttainment File
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
* ServiceLevelAgreementAttainment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceLevelAgreementAttainment extends Entity
{

    /**
    * Gets the endDate
    * The end date for the calendar month for which SLA attainment is measured.
    *
    * @return \DateTime|null The endDate
    */
    public function getEndDate()
    {
        if (array_key_exists("endDate", $this->_propDict)) {
            if (is_a($this->_propDict["endDate"], "\DateTime") || is_null($this->_propDict["endDate"])) {
                return $this->_propDict["endDate"];
            } else {
                $this->_propDict["endDate"] = new \DateTime($this->_propDict["endDate"]);
                return $this->_propDict["endDate"];
            }
        }
        return null;
    }

    /**
    * Sets the endDate
    * The end date for the calendar month for which SLA attainment is measured.
    *
    * @param \DateTime $val The value to assign to the endDate
    *
    * @return ServiceLevelAgreementAttainment The ServiceLevelAgreementAttainment
    */
    public function setEndDate($val)
    {
        $this->_propDict["endDate"] = $val;
         return $this;
    }
    /**
    * Gets the score
    * The level of SLA attainment achieved by the tenant for the calendar month identified, as described in Microsoft Entra SLA performance. Values are truncated, not rounded, so the actual value is always equal to or higher than the displayed value. Values are expressed as a percentage of availability for the tenant.
    *
    * @return float|null The score
    */
    public function getScore()
    {
        if (array_key_exists("score", $this->_propDict)) {
            return $this->_propDict["score"];
        } else {
            return null;
        }
    }

    /**
    * Sets the score
    * The level of SLA attainment achieved by the tenant for the calendar month identified, as described in Microsoft Entra SLA performance. Values are truncated, not rounded, so the actual value is always equal to or higher than the displayed value. Values are expressed as a percentage of availability for the tenant.
    *
    * @param float $val The value of the score
    *
    * @return ServiceLevelAgreementAttainment
    */
    public function setScore($val)
    {
        $this->_propDict["score"] = $val;
        return $this;
    }

    /**
    * Gets the startDate
    * The start date for the calendar month for which SLA attainment is measured.
    *
    * @return \DateTime|null The startDate
    */
    public function getStartDate()
    {
        if (array_key_exists("startDate", $this->_propDict)) {
            if (is_a($this->_propDict["startDate"], "\DateTime") || is_null($this->_propDict["startDate"])) {
                return $this->_propDict["startDate"];
            } else {
                $this->_propDict["startDate"] = new \DateTime($this->_propDict["startDate"]);
                return $this->_propDict["startDate"];
            }
        }
        return null;
    }

    /**
    * Sets the startDate
    * The start date for the calendar month for which SLA attainment is measured.
    *
    * @param \DateTime $val The value to assign to the startDate
    *
    * @return ServiceLevelAgreementAttainment The ServiceLevelAgreementAttainment
    */
    public function setStartDate($val)
    {
        $this->_propDict["startDate"] = $val;
         return $this;
    }
}
