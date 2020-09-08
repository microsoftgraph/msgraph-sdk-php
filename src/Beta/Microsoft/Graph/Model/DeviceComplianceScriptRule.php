<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceScriptRule File
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
* DeviceComplianceScriptRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceComplianceScriptRule extends Entity
{

    /**
    * Gets the dataType
    * Data type specified in the rule.
    *
    * @return DataType The dataType
    */
    public function getDataType()
    {
        if (array_key_exists("dataType", $this->_propDict)) {
            if (is_a($this->_propDict["dataType"], "Beta\Microsoft\Graph\Model\DataType")) {
                return $this->_propDict["dataType"];
            } else {
                $this->_propDict["dataType"] = new DataType($this->_propDict["dataType"]);
                return $this->_propDict["dataType"];
            }
        }
        return null;
    }

    /**
    * Sets the dataType
    * Data type specified in the rule.
    *
    * @param DataType $val The value to assign to the dataType
    *
    * @return DeviceComplianceScriptRule The DeviceComplianceScriptRule
    */
    public function setDataType($val)
    {
        $this->_propDict["dataType"] = $val;
         return $this;
    }
    /**
    * Gets the operand
    * Operand specified in the rule.
    *
    * @return string The operand
    */
    public function getOperand()
    {
        if (array_key_exists("operand", $this->_propDict)) {
            return $this->_propDict["operand"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operand
    * Operand specified in the rule.
    *
    * @param string $val The value of the operand
    *
    * @return DeviceComplianceScriptRule
    */
    public function setOperand($val)
    {
        $this->_propDict["operand"] = $val;
        return $this;
    }

    /**
    * Gets the operator
    * Operator specified in the rule.
    *
    * @return Operator The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            if (is_a($this->_propDict["operator"], "Beta\Microsoft\Graph\Model\Operator")) {
                return $this->_propDict["operator"];
            } else {
                $this->_propDict["operator"] = new Operator($this->_propDict["operator"]);
                return $this->_propDict["operator"];
            }
        }
        return null;
    }

    /**
    * Sets the operator
    * Operator specified in the rule.
    *
    * @param Operator $val The value to assign to the operator
    *
    * @return DeviceComplianceScriptRule The DeviceComplianceScriptRule
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
         return $this;
    }
    /**
    * Gets the settingName
    * Setting name specified in the rule.
    *
    * @return string The settingName
    */
    public function getSettingName()
    {
        if (array_key_exists("settingName", $this->_propDict)) {
            return $this->_propDict["settingName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settingName
    * Setting name specified in the rule.
    *
    * @param string $val The value of the settingName
    *
    * @return DeviceComplianceScriptRule
    */
    public function setSettingName($val)
    {
        $this->_propDict["settingName"] = $val;
        return $this;
    }
}
