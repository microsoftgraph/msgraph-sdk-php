<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalConnection File
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
* ExternalConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ExternalConnection extends Entity
{
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
    * @param string $val The name
    *
    * @return ExternalConnection
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
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
    * @return ExternalConnection
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the configuration
    *
    * @return Configuration The configuration
    */
    public function getConfiguration()
    {
        if (array_key_exists("configuration", $this->_propDict)) {
            if (is_a($this->_propDict["configuration"], "Microsoft\Graph\Beta\Model\Configuration")) {
                return $this->_propDict["configuration"];
            } else {
                $this->_propDict["configuration"] = new Configuration($this->_propDict["configuration"]);
                return $this->_propDict["configuration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configuration
    *
    * @param Configuration $val The configuration
    *
    * @return ExternalConnection
    */
    public function setConfiguration($val)
    {
        $this->_propDict["configuration"] = $val;
        return $this;
    }
    
    /**
    * Gets the schema
    *
    * @return Schema The schema
    */
    public function getSchema()
    {
        if (array_key_exists("schema", $this->_propDict)) {
            if (is_a($this->_propDict["schema"], "Microsoft\Graph\Beta\Model\Schema")) {
                return $this->_propDict["schema"];
            } else {
                $this->_propDict["schema"] = new Schema($this->_propDict["schema"]);
                return $this->_propDict["schema"];
            }
        }
        return null;
    }
    
    /**
    * Sets the schema
    *
    * @param Schema $val The schema
    *
    * @return ExternalConnection
    */
    public function setSchema($val)
    {
        $this->_propDict["schema"] = $val;
        return $this;
    }
    

     /** 
     * Gets the items
     *
     * @return array The items
     */
    public function getItems()
    {
        if (array_key_exists("items", $this->_propDict)) {
           return $this->_propDict["items"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the items
    *
    * @param ExternalItem $val The items
    *
    * @return ExternalConnection
    */
    public function setItems($val)
    {
		$this->_propDict["items"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
     *
     * @return array The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the operations
    *
    * @param ConnectionOperation $val The operations
    *
    * @return ExternalConnection
    */
    public function setOperations($val)
    {
		$this->_propDict["operations"] = $val;
        return $this;
    }
    
}