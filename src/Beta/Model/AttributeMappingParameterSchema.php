<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeMappingParameterSchema File
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
* AttributeMappingParameterSchema class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AttributeMappingParameterSchema extends Entity
{
    /**
    * Gets the allowMultipleOccurrences
    *
    * @return bool The allowMultipleOccurrences
    */
    public function getAllowMultipleOccurrences()
    {
        if (array_key_exists("allowMultipleOccurrences", $this->_propDict)) {
            return $this->_propDict["allowMultipleOccurrences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowMultipleOccurrences
    *
    * @param bool $val The value of the allowMultipleOccurrences
    *
    * @return AttributeMappingParameterSchema
    */
    public function setAllowMultipleOccurrences($val)
    {
        $this->_propDict["allowMultipleOccurrences"] = $val;
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
    * @return AttributeMappingParameterSchema
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
    * @return AttributeMappingParameterSchema
    */
    public function setRequired($val)
    {
        $this->_propDict["required"] = $val;
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
    * @return AttributeMappingParameterSchema The AttributeMappingParameterSchema
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
