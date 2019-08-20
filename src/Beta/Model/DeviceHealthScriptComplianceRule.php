<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScriptComplianceRule File
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
* DeviceHealthScriptComplianceRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceHealthScriptComplianceRule extends Entity
{

    /**
    * Gets the detectionType
    *
    * @return DeviceHealthScriptDetectionType The detectionType
    */
    public function getDetectionType()
    {
        if (array_key_exists("detectionType", $this->_propDict)) {
            if (is_a($this->_propDict["detectionType"], "Microsoft\Graph\Beta\Model\DeviceHealthScriptDetectionType")) {
                return $this->_propDict["detectionType"];
            } else {
                $this->_propDict["detectionType"] = new DeviceHealthScriptDetectionType($this->_propDict["detectionType"]);
                return $this->_propDict["detectionType"];
            }
        }
        return null;
    }

    /**
    * Sets the detectionType
    *
    * @param DeviceHealthScriptDetectionType $val The value to assign to the detectionType
    *
    * @return DeviceHealthScriptComplianceRule The DeviceHealthScriptComplianceRule
    */
    public function setDetectionType($val)
    {
        $this->_propDict["detectionType"] = $val;
         return $this;
    }

    /**
    * Gets the operator
    *
    * @return DeviceHealthScriptComplianceRuleOperator The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            if (is_a($this->_propDict["operator"], "Microsoft\Graph\Beta\Model\DeviceHealthScriptComplianceRuleOperator")) {
                return $this->_propDict["operator"];
            } else {
                $this->_propDict["operator"] = new DeviceHealthScriptComplianceRuleOperator($this->_propDict["operator"]);
                return $this->_propDict["operator"];
            }
        }
        return null;
    }

    /**
    * Sets the operator
    *
    * @param DeviceHealthScriptComplianceRuleOperator $val The value to assign to the operator
    *
    * @return DeviceHealthScriptComplianceRule The DeviceHealthScriptComplianceRule
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
         return $this;
    }
    /**
    * Gets the detectionValue
    *
    * @return string The detectionValue
    */
    public function getDetectionValue()
    {
        if (array_key_exists("detectionValue", $this->_propDict)) {
            return $this->_propDict["detectionValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the detectionValue
    *
    * @param string $val The value of the detectionValue
    *
    * @return DeviceHealthScriptComplianceRule
    */
    public function setDetectionValue($val)
    {
        $this->_propDict["detectionValue"] = $val;
        return $this;
    }
}
