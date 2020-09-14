<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EvaluateDynamicMembershipResult File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* EvaluateDynamicMembershipResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EvaluateDynamicMembershipResult extends Entity
{
    /**
    * Gets the membershipRule
    *
    * @return string The membershipRule
    */
    public function getMembershipRule()
    {
        if (array_key_exists("membershipRule", $this->_propDict)) {
            return $this->_propDict["membershipRule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the membershipRule
    *
    * @param string $val The value of the membershipRule
    *
    * @return EvaluateDynamicMembershipResult
    */
    public function setMembershipRule($val)
    {
        $this->_propDict["membershipRule"] = $val;
        return $this;
    }

    /**
    * Gets the membershipRuleEvaluationDetails
    *
    * @return ExpressionEvaluationDetails The membershipRuleEvaluationDetails
    */
    public function getMembershipRuleEvaluationDetails()
    {
        if (array_key_exists("membershipRuleEvaluationDetails", $this->_propDict)) {
            if (is_a($this->_propDict["membershipRuleEvaluationDetails"], "Beta\Microsoft\Graph\Model\ExpressionEvaluationDetails")) {
                return $this->_propDict["membershipRuleEvaluationDetails"];
            } else {
                $this->_propDict["membershipRuleEvaluationDetails"] = new ExpressionEvaluationDetails($this->_propDict["membershipRuleEvaluationDetails"]);
                return $this->_propDict["membershipRuleEvaluationDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the membershipRuleEvaluationDetails
    *
    * @param ExpressionEvaluationDetails $val The value to assign to the membershipRuleEvaluationDetails
    *
    * @return EvaluateDynamicMembershipResult The EvaluateDynamicMembershipResult
    */
    public function setMembershipRuleEvaluationDetails($val)
    {
        $this->_propDict["membershipRuleEvaluationDetails"] = $val;
         return $this;
    }
    /**
    * Gets the membershipRuleEvaluationResult
    *
    * @return bool The membershipRuleEvaluationResult
    */
    public function getMembershipRuleEvaluationResult()
    {
        if (array_key_exists("membershipRuleEvaluationResult", $this->_propDict)) {
            return $this->_propDict["membershipRuleEvaluationResult"];
        } else {
            return null;
        }
    }

    /**
    * Sets the membershipRuleEvaluationResult
    *
    * @param bool $val The value of the membershipRuleEvaluationResult
    *
    * @return EvaluateDynamicMembershipResult
    */
    public function setMembershipRuleEvaluationResult($val)
    {
        $this->_propDict["membershipRuleEvaluationResult"] = $val;
        return $this;
    }
}
