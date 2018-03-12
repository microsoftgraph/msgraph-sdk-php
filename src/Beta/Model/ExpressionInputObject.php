<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExpressionInputObject File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* ExpressionInputObject class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ExpressionInputObject extends Entity
{

    /**
    * Gets the definition
    *
    * @return ObjectDefinition The definition
    */
    public function getDefinition()
    {
        if (array_key_exists("definition", $this->_propDict)) {
            if (is_a($this->_propDict["definition"], "Microsoft\Graph\Beta\Model\ObjectDefinition")) {
                return $this->_propDict["definition"];
            } else {
                $this->_propDict["definition"] = new ObjectDefinition($this->_propDict["definition"]);
                return $this->_propDict["definition"];
            }
        }
        return null;
    }

    /**
    * Sets the definition
    *
    * @param ObjectDefinition $val The value to assign to the definition
    *
    * @return ExpressionInputObject The ExpressionInputObject
    */
    public function setDefinition($val)
    {
        $this->_propDict["definition"] = $val;
         return $this;
    }

    /**
    * Gets the expressionInputObjectProperties
    *
    * @return StringKeyObjectValuePair The expressionInputObjectProperties
    */
    public function getExpressionInputObjectProperties()
    {
        if (array_key_exists("properties", $this->_propDict)) {
            if (is_a($this->_propDict["properties"], "Microsoft\Graph\Beta\Model\StringKeyObjectValuePair")) {
                return $this->_propDict["properties"];
            } else {
                $this->_propDict["properties"] = new StringKeyObjectValuePair($this->_propDict["properties"]);
                return $this->_propDict["properties"];
            }
        }
        return null;
    }

    /**
    * Sets the expressionInputObjectProperties
    *
    * @param StringKeyObjectValuePair $val The value to assign to the properties
    *
    * @return ExpressionInputObject The ExpressionInputObject
    */
    public function setExpressionInputObjectProperties($val)
    {
        $this->_propDict["properties"] = $val;
         return $this;
    }
}
