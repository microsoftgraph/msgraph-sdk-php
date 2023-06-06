<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ObjectDefinitionMetadataEntry File
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
* ObjectDefinitionMetadataEntry class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ObjectDefinitionMetadataEntry extends Entity
{

    /**
    * Gets the key
    *
    * @return ObjectDefinitionMetadata|null The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            if (is_a($this->_propDict["key"], "\Microsoft\Graph\Model\ObjectDefinitionMetadata") || is_null($this->_propDict["key"])) {
                return $this->_propDict["key"];
            } else {
                $this->_propDict["key"] = new ObjectDefinitionMetadata($this->_propDict["key"]);
                return $this->_propDict["key"];
            }
        }
        return null;
    }

    /**
    * Sets the key
    *
    * @param ObjectDefinitionMetadata $val The value to assign to the key
    *
    * @return ObjectDefinitionMetadataEntry The ObjectDefinitionMetadataEntry
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
         return $this;
    }
    /**
    * Gets the value
    *
    * @return string|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    *
    * @param string $val The value of the value
    *
    * @return ObjectDefinitionMetadataEntry
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
