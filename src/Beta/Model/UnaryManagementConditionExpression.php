<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnaryManagementConditionExpression File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* UnaryManagementConditionExpression class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UnaryManagementConditionExpression extends ManagementConditionExpressionModel
{

    /**
    * Gets the operator
    *
    * @return UnaryManagementConditionExpressionOperatorType The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            if (is_a($this->_propDict["operator"], "Microsoft\Graph\Beta\Model\UnaryManagementConditionExpressionOperatorType")) {
                return $this->_propDict["operator"];
            } else {
                $this->_propDict["operator"] = new UnaryManagementConditionExpressionOperatorType($this->_propDict["operator"]);
                return $this->_propDict["operator"];
            }
        }
        return null;
    }

    /**
    * Sets the operator
    *
    * @param UnaryManagementConditionExpressionOperatorType $val The value to assign to the operator
    *
    * @return UnaryManagementConditionExpression The UnaryManagementConditionExpression
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
         return $this;
    }

    /**
    * Gets the operand
    *
    * @return ManagementConditionExpressionModel The operand
    */
    public function getOperand()
    {
        if (array_key_exists("operand", $this->_propDict)) {
            if (is_a($this->_propDict["operand"], "Microsoft\Graph\Beta\Model\ManagementConditionExpressionModel")) {
                return $this->_propDict["operand"];
            } else {
                $this->_propDict["operand"] = new ManagementConditionExpressionModel($this->_propDict["operand"]);
                return $this->_propDict["operand"];
            }
        }
        return null;
    }

    /**
    * Sets the operand
    *
    * @param ManagementConditionExpressionModel $val The value to assign to the operand
    *
    * @return UnaryManagementConditionExpression The UnaryManagementConditionExpression
    */
    public function setOperand($val)
    {
        $this->_propDict["operand"] = $val;
         return $this;
    }
}
