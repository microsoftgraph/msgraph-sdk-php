<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExpressionEvaluationDetails File
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
* ExpressionEvaluationDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExpressionEvaluationDetails extends Entity
{
    /**
    * Gets the expression
    *
    * @return string The expression
    */
    public function getExpression()
    {
        if (array_key_exists("expression", $this->_propDict)) {
            return $this->_propDict["expression"];
        } else {
            return null;
        }
    }

    /**
    * Sets the expression
    *
    * @param string $val The value of the expression
    *
    * @return ExpressionEvaluationDetails
    */
    public function setExpression($val)
    {
        $this->_propDict["expression"] = $val;
        return $this;
    }

    /**
    * Gets the expressionEvaluationDetails
    *
    * @return ExpressionEvaluationDetails The expressionEvaluationDetails
    */
    public function getExpressionEvaluationDetails()
    {
        if (array_key_exists("expressionEvaluationDetails", $this->_propDict)) {
            if (is_a($this->_propDict["expressionEvaluationDetails"], "Beta\Microsoft\Graph\Model\ExpressionEvaluationDetails")) {
                return $this->_propDict["expressionEvaluationDetails"];
            } else {
                $this->_propDict["expressionEvaluationDetails"] = new ExpressionEvaluationDetails($this->_propDict["expressionEvaluationDetails"]);
                return $this->_propDict["expressionEvaluationDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the expressionEvaluationDetails
    *
    * @param ExpressionEvaluationDetails $val The value to assign to the expressionEvaluationDetails
    *
    * @return ExpressionEvaluationDetails The ExpressionEvaluationDetails
    */
    public function setExpressionEvaluationDetails($val)
    {
        $this->_propDict["expressionEvaluationDetails"] = $val;
         return $this;
    }
    /**
    * Gets the expressionResult
    *
    * @return bool The expressionResult
    */
    public function getExpressionResult()
    {
        if (array_key_exists("expressionResult", $this->_propDict)) {
            return $this->_propDict["expressionResult"];
        } else {
            return null;
        }
    }

    /**
    * Sets the expressionResult
    *
    * @param bool $val The value of the expressionResult
    *
    * @return ExpressionEvaluationDetails
    */
    public function setExpressionResult($val)
    {
        $this->_propDict["expressionResult"] = $val;
        return $this;
    }

    /**
    * Gets the propertyToEvaluate
    *
    * @return PropertyToEvaluate The propertyToEvaluate
    */
    public function getPropertyToEvaluate()
    {
        if (array_key_exists("propertyToEvaluate", $this->_propDict)) {
            if (is_a($this->_propDict["propertyToEvaluate"], "Beta\Microsoft\Graph\Model\PropertyToEvaluate")) {
                return $this->_propDict["propertyToEvaluate"];
            } else {
                $this->_propDict["propertyToEvaluate"] = new PropertyToEvaluate($this->_propDict["propertyToEvaluate"]);
                return $this->_propDict["propertyToEvaluate"];
            }
        }
        return null;
    }

    /**
    * Sets the propertyToEvaluate
    *
    * @param PropertyToEvaluate $val The value to assign to the propertyToEvaluate
    *
    * @return ExpressionEvaluationDetails The ExpressionEvaluationDetails
    */
    public function setPropertyToEvaluate($val)
    {
        $this->_propDict["propertyToEvaluate"] = $val;
         return $this;
    }
}
