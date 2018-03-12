<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeDefinition File
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
* AttributeDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AttributeDefinition extends Entity
{
    /**
    * Gets the anchor
    *
    * @return bool The anchor
    */
    public function getAnchor()
    {
        if (array_key_exists("anchor", $this->_propDict)) {
            return $this->_propDict["anchor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the anchor
    *
    * @param bool $val The value of the anchor
    *
    * @return AttributeDefinition
    */
    public function setAnchor($val)
    {
        $this->_propDict["anchor"] = $val;
        return $this;
    }

    /**
    * Gets the apiExpressions
    *
    * @return StringKeyStringValuePair The apiExpressions
    */
    public function getApiExpressions()
    {
        if (array_key_exists("apiExpressions", $this->_propDict)) {
            if (is_a($this->_propDict["apiExpressions"], "Microsoft\Graph\Beta\Model\StringKeyStringValuePair")) {
                return $this->_propDict["apiExpressions"];
            } else {
                $this->_propDict["apiExpressions"] = new StringKeyStringValuePair($this->_propDict["apiExpressions"]);
                return $this->_propDict["apiExpressions"];
            }
        }
        return null;
    }

    /**
    * Sets the apiExpressions
    *
    * @param StringKeyStringValuePair $val The value to assign to the apiExpressions
    *
    * @return AttributeDefinition The AttributeDefinition
    */
    public function setApiExpressions($val)
    {
        $this->_propDict["apiExpressions"] = $val;
         return $this;
    }
    /**
    * Gets the caseExact
    *
    * @return bool The caseExact
    */
    public function getCaseExact()
    {
        if (array_key_exists("caseExact", $this->_propDict)) {
            return $this->_propDict["caseExact"];
        } else {
            return null;
        }
    }

    /**
    * Sets the caseExact
    *
    * @param bool $val The value of the caseExact
    *
    * @return AttributeDefinition
    */
    public function setCaseExact($val)
    {
        $this->_propDict["caseExact"] = $val;
        return $this;
    }
    /**
    * Gets the defaultValue
    *
    * @return string The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict)) {
            return $this->_propDict["defaultValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultValue
    *
    * @param string $val The value of the defaultValue
    *
    * @return AttributeDefinition
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
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
            if (is_a($this->_propDict["metadata"], "Microsoft\Graph\Beta\Model\MetadataEntry")) {
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
    * @return AttributeDefinition The AttributeDefinition
    */
    public function setMetadata($val)
    {
        $this->_propDict["metadata"] = $val;
         return $this;
    }
    /**
    * Gets the multivalued
    *
    * @return bool The multivalued
    */
    public function getMultivalued()
    {
        if (array_key_exists("multivalued", $this->_propDict)) {
            return $this->_propDict["multivalued"];
        } else {
            return null;
        }
    }

    /**
    * Sets the multivalued
    *
    * @param bool $val The value of the multivalued
    *
    * @return AttributeDefinition
    */
    public function setMultivalued($val)
    {
        $this->_propDict["multivalued"] = $val;
        return $this;
    }

    /**
    * Gets the mutability
    *
    * @return Mutability The mutability
    */
    public function getMutability()
    {
        if (array_key_exists("mutability", $this->_propDict)) {
            if (is_a($this->_propDict["mutability"], "Microsoft\Graph\Beta\Model\Mutability")) {
                return $this->_propDict["mutability"];
            } else {
                $this->_propDict["mutability"] = new Mutability($this->_propDict["mutability"]);
                return $this->_propDict["mutability"];
            }
        }
        return null;
    }

    /**
    * Sets the mutability
    *
    * @param Mutability $val The value to assign to the mutability
    *
    * @return AttributeDefinition The AttributeDefinition
    */
    public function setMutability($val)
    {
        $this->_propDict["mutability"] = $val;
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
    * @return AttributeDefinition
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the required
    *
    * @return bool The required
    */
    public function getRequired()
    {
        if (array_key_exists("required", $this->_propDict)) {
            return $this->_propDict["required"];
        } else {
            return null;
        }
    }

    /**
    * Sets the required
    *
    * @param bool $val The value of the required
    *
    * @return AttributeDefinition
    */
    public function setRequired($val)
    {
        $this->_propDict["required"] = $val;
        return $this;
    }

    /**
    * Gets the referencedObjects
    *
    * @return ReferencedObject The referencedObjects
    */
    public function getReferencedObjects()
    {
        if (array_key_exists("referencedObjects", $this->_propDict)) {
            if (is_a($this->_propDict["referencedObjects"], "Microsoft\Graph\Beta\Model\ReferencedObject")) {
                return $this->_propDict["referencedObjects"];
            } else {
                $this->_propDict["referencedObjects"] = new ReferencedObject($this->_propDict["referencedObjects"]);
                return $this->_propDict["referencedObjects"];
            }
        }
        return null;
    }

    /**
    * Sets the referencedObjects
    *
    * @param ReferencedObject $val The value to assign to the referencedObjects
    *
    * @return AttributeDefinition The AttributeDefinition
    */
    public function setReferencedObjects($val)
    {
        $this->_propDict["referencedObjects"] = $val;
         return $this;
    }

    /**
    * Gets the type
    *
    * @return AttributeType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "Microsoft\Graph\Beta\Model\AttributeType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new AttributeType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param AttributeType $val The value to assign to the type
    *
    * @return AttributeDefinition The AttributeDefinition
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
