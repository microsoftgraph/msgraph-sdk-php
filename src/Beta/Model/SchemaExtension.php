<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SchemaExtension File
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
* SchemaExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SchemaExtension extends Entity
{
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return SchemaExtension
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetTypes
    *
    * @return string The targetTypes
    */
    public function getTargetTypes()
    {
        if (array_key_exists("targetTypes", $this->_propDict)) {
            return $this->_propDict["targetTypes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetTypes
    *
    * @param string $val The targetTypes
    *
    * @return SchemaExtension
    */
    public function setTargetTypes($val)
    {
        $this->_propDict["targetTypes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the schemaExtensionProperties
     *
     * @return array The schemaExtensionProperties
     */
    public function getSchemaExtensionProperties()
    {
        if (array_key_exists("properties", $this->_propDict)) {
           return $this->_propDict["properties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the schemaExtensionProperties
    *
    * @param ExtensionSchemaProperty $val The schemaExtensionProperties
    *
    * @return SchemaExtension
    */
    public function setSchemaExtensionProperties($val)
    {
		$this->_propDict["properties"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    *
    * @param string $val The status
    *
    * @return SchemaExtension
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the owner
    *
    * @return string The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            return $this->_propDict["owner"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the owner
    *
    * @param string $val The owner
    *
    * @return SchemaExtension
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }
    
}