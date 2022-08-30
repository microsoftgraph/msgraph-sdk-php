<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Parameter File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernance\Model;
/**
* Parameter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Parameter extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the name
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return Parameter
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the values
    *
    * @return string|null The values
    */
    public function getValues()
    {
        if (array_key_exists("values", $this->_propDict)) {
            return $this->_propDict["values"];
        } else {
            return null;
        }
    }

    /**
    * Sets the values
    *
    * @param string $val The value of the values
    *
    * @return Parameter
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }

    /**
    * Gets the valueType
    *
    * @return ValueType|null The valueType
    */
    public function getValueType()
    {
        if (array_key_exists("valueType", $this->_propDict)) {
            if (is_a($this->_propDict["valueType"], "\Beta\Microsoft\Graph\IdentityGovernance\Model\ValueType") || is_null($this->_propDict["valueType"])) {
                return $this->_propDict["valueType"];
            } else {
                $this->_propDict["valueType"] = new ValueType($this->_propDict["valueType"]);
                return $this->_propDict["valueType"];
            }
        }
        return null;
    }

    /**
    * Sets the valueType
    *
    * @param ValueType $val The value to assign to the valueType
    *
    * @return Parameter The Parameter
    */
    public function setValueType($val)
    {
        $this->_propDict["valueType"] = $val;
         return $this;
    }
}
