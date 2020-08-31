<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ObjectMapping File
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
* ObjectMapping class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ObjectMapping extends Entity
{

    /**
    * Gets the attributeMappings
    *
    * @return AttributeMapping The attributeMappings
    */
    public function getAttributeMappings()
    {
        if (array_key_exists("attributeMappings", $this->_propDict)) {
            if (is_a($this->_propDict["attributeMappings"], "Beta\Microsoft\Graph\Model\AttributeMapping")) {
                return $this->_propDict["attributeMappings"];
            } else {
                $this->_propDict["attributeMappings"] = new AttributeMapping($this->_propDict["attributeMappings"]);
                return $this->_propDict["attributeMappings"];
            }
        }
        return null;
    }

    /**
    * Sets the attributeMappings
    *
    * @param AttributeMapping $val The value to assign to the attributeMappings
    *
    * @return ObjectMapping The ObjectMapping
    */
    public function setAttributeMappings($val)
    {
        $this->_propDict["attributeMappings"] = $val;
         return $this;
    }
    /**
    * Gets the enabled
    *
    * @return bool The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabled
    *
    * @param bool $val The value of the enabled
    *
    * @return ObjectMapping
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = $val;
        return $this;
    }

    /**
    * Gets the flowTypes
    *
    * @return ObjectFlowTypes The flowTypes
    */
    public function getFlowTypes()
    {
        if (array_key_exists("flowTypes", $this->_propDict)) {
            if (is_a($this->_propDict["flowTypes"], "Beta\Microsoft\Graph\Model\ObjectFlowTypes")) {
                return $this->_propDict["flowTypes"];
            } else {
                $this->_propDict["flowTypes"] = new ObjectFlowTypes($this->_propDict["flowTypes"]);
                return $this->_propDict["flowTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the flowTypes
    *
    * @param ObjectFlowTypes $val The value to assign to the flowTypes
    *
    * @return ObjectMapping The ObjectMapping
    */
    public function setFlowTypes($val)
    {
        $this->_propDict["flowTypes"] = $val;
         return $this;
    }

    /**
    * Gets the metadata
    *
    * @return MetadataEntry The metadata
    */
    public function getMetadata()
    {
        if (array_key_exists("metadata", $this->_propDict)) {
            if (is_a($this->_propDict["metadata"], "Beta\Microsoft\Graph\Model\MetadataEntry")) {
                return $this->_propDict["metadata"];
            } else {
                $this->_propDict["metadata"] = new MetadataEntry($this->_propDict["metadata"]);
                return $this->_propDict["metadata"];
            }
        }
        return null;
    }

    /**
    * Sets the metadata
    *
    * @param MetadataEntry $val The value to assign to the metadata
    *
    * @return ObjectMapping The ObjectMapping
    */
    public function setMetadata($val)
    {
        $this->_propDict["metadata"] = $val;
         return $this;
    }
    /**
    * Gets the name
    *
    * @return string The name
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
    * @return ObjectMapping
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the scope
    *
    * @return Filter The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            if (is_a($this->_propDict["scope"], "Beta\Microsoft\Graph\Model\Filter")) {
                return $this->_propDict["scope"];
            } else {
                $this->_propDict["scope"] = new Filter($this->_propDict["scope"]);
                return $this->_propDict["scope"];
            }
        }
        return null;
    }

    /**
    * Sets the scope
    *
    * @param Filter $val The value to assign to the scope
    *
    * @return ObjectMapping The ObjectMapping
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
         return $this;
    }
    /**
    * Gets the sourceObjectName
    *
    * @return string The sourceObjectName
    */
    public function getSourceObjectName()
    {
        if (array_key_exists("sourceObjectName", $this->_propDict)) {
            return $this->_propDict["sourceObjectName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceObjectName
    *
    * @param string $val The value of the sourceObjectName
    *
    * @return ObjectMapping
    */
    public function setSourceObjectName($val)
    {
        $this->_propDict["sourceObjectName"] = $val;
        return $this;
    }
    /**
    * Gets the targetObjectName
    *
    * @return string The targetObjectName
    */
    public function getTargetObjectName()
    {
        if (array_key_exists("targetObjectName", $this->_propDict)) {
            return $this->_propDict["targetObjectName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetObjectName
    *
    * @param string $val The value of the targetObjectName
    *
    * @return ObjectMapping
    */
    public function setTargetObjectName($val)
    {
        $this->_propDict["targetObjectName"] = $val;
        return $this;
    }
}
