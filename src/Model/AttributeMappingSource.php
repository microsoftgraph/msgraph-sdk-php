<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeMappingSource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* AttributeMappingSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttributeMappingSource extends Entity
{
    /**
    * Gets the expression
    * Equivalent expression representation of this attributeMappingSource object.
    *
    * @return string|null The expression
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
    * Equivalent expression representation of this attributeMappingSource object.
    *
    * @param string $val The value of the expression
    *
    * @return AttributeMappingSource
    */
    public function setExpression($val)
    {
        $this->_propDict["expression"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * Name parameter of the mapping source. Depending on the type property value, this can be the name of the function, the name of the source attribute, or a constant value to be used.
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
    * Name parameter of the mapping source. Depending on the type property value, this can be the name of the function, the name of the source attribute, or a constant value to be used.
    *
    * @param string $val The value of the name
    *
    * @return AttributeMappingSource
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the parameters
    * If this object represents a function, lists function parameters. Parameters consist of attributeMappingSource objects themselves, allowing for complex expressions. If type isn't Function, this property is null/empty array.
    *
    * @return StringKeyAttributeMappingSourceValuePair|null The parameters
    */
    public function getParameters()
    {
        if (array_key_exists("parameters", $this->_propDict)) {
            if (is_a($this->_propDict["parameters"], "\Microsoft\Graph\Model\StringKeyAttributeMappingSourceValuePair") || is_null($this->_propDict["parameters"])) {
                return $this->_propDict["parameters"];
            } else {
                $this->_propDict["parameters"] = new StringKeyAttributeMappingSourceValuePair($this->_propDict["parameters"]);
                return $this->_propDict["parameters"];
            }
        }
        return null;
    }

    /**
    * Sets the parameters
    * If this object represents a function, lists function parameters. Parameters consist of attributeMappingSource objects themselves, allowing for complex expressions. If type isn't Function, this property is null/empty array.
    *
    * @param StringKeyAttributeMappingSourceValuePair $val The value to assign to the parameters
    *
    * @return AttributeMappingSource The AttributeMappingSource
    */
    public function setParameters($val)
    {
        $this->_propDict["parameters"] = $val;
         return $this;
    }

    /**
    * Gets the type
    * The type of this attribute mapping source. Possible values are: Attribute, Constant, Function. Default is Attribute.
    *
    * @return AttributeMappingSourceType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Microsoft\Graph\Model\AttributeMappingSourceType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new AttributeMappingSourceType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The type of this attribute mapping source. Possible values are: Attribute, Constant, Function. Default is Attribute.
    *
    * @param AttributeMappingSourceType $val The value to assign to the type
    *
    * @return AttributeMappingSource The AttributeMappingSource
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
