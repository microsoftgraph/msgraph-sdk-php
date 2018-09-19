<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FilterOperatorSchema File
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
* FilterOperatorSchema class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class FilterOperatorSchema extends Entity
{
    /**
    * Gets the arity
    *
    * @return ScopeOperatorType The arity
    */
    public function getArity()
    {
        if (array_key_exists("arity", $this->_propDict)) {
            if (is_a($this->_propDict["arity"], "Microsoft\Graph\Beta\Model\ScopeOperatorType")) {
                return $this->_propDict["arity"];
            } else {
                $this->_propDict["arity"] = new ScopeOperatorType($this->_propDict["arity"]);
                return $this->_propDict["arity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the arity
    *
    * @param ScopeOperatorType $val The arity
    *
    * @return FilterOperatorSchema
    */
    public function setArity($val)
    {
        $this->_propDict["arity"] = $val;
        return $this;
    }
    
    /**
    * Gets the multivaluedComparisonType
    *
    * @return ScopeOperatorMultiValuedComparisonType The multivaluedComparisonType
    */
    public function getMultivaluedComparisonType()
    {
        if (array_key_exists("multivaluedComparisonType", $this->_propDict)) {
            if (is_a($this->_propDict["multivaluedComparisonType"], "Microsoft\Graph\Beta\Model\ScopeOperatorMultiValuedComparisonType")) {
                return $this->_propDict["multivaluedComparisonType"];
            } else {
                $this->_propDict["multivaluedComparisonType"] = new ScopeOperatorMultiValuedComparisonType($this->_propDict["multivaluedComparisonType"]);
                return $this->_propDict["multivaluedComparisonType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the multivaluedComparisonType
    *
    * @param ScopeOperatorMultiValuedComparisonType $val The multivaluedComparisonType
    *
    * @return FilterOperatorSchema
    */
    public function setMultivaluedComparisonType($val)
    {
        $this->_propDict["multivaluedComparisonType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the supportedAttributeTypes
     *
     * @return array The supportedAttributeTypes
     */
    public function getSupportedAttributeTypes()
    {
        if (array_key_exists("supportedAttributeTypes", $this->_propDict)) {
           return $this->_propDict["supportedAttributeTypes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the supportedAttributeTypes
    *
    * @param AttributeType $val The supportedAttributeTypes
    *
    * @return FilterOperatorSchema
    */
    public function setSupportedAttributeTypes($val)
    {
		$this->_propDict["supportedAttributeTypes"] = $val;
        return $this;
    }
    
}