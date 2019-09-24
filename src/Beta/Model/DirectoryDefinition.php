<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DirectoryDefinition File
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
* DirectoryDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DirectoryDefinition extends Entity
{
    /**
    * Gets the discoveryDateTime
    *
    * @return \DateTime The discoveryDateTime
    */
    public function getDiscoveryDateTime()
    {
        if (array_key_exists("discoveryDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["discoveryDateTime"], "\DateTime")) {
                return $this->_propDict["discoveryDateTime"];
            } else {
                $this->_propDict["discoveryDateTime"] = new \DateTime($this->_propDict["discoveryDateTime"]);
                return $this->_propDict["discoveryDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the discoveryDateTime
    *
    * @param \DateTime $val The discoveryDateTime
    *
    * @return DirectoryDefinition
    */
    public function setDiscoveryDateTime($val)
    {
        $this->_propDict["discoveryDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the discoverabilities
    *
    * @return DirectoryDefinitionDiscoverabilities The discoverabilities
    */
    public function getDiscoverabilities()
    {
        if (array_key_exists("discoverabilities", $this->_propDict)) {
            if (is_a($this->_propDict["discoverabilities"], "Microsoft\Graph\Beta\Model\DirectoryDefinitionDiscoverabilities")) {
                return $this->_propDict["discoverabilities"];
            } else {
                $this->_propDict["discoverabilities"] = new DirectoryDefinitionDiscoverabilities($this->_propDict["discoverabilities"]);
                return $this->_propDict["discoverabilities"];
            }
        }
        return null;
    }
    
    /**
    * Sets the discoverabilities
    *
    * @param DirectoryDefinitionDiscoverabilities $val The discoverabilities
    *
    * @return DirectoryDefinition
    */
    public function setDiscoverabilities($val)
    {
        $this->_propDict["discoverabilities"] = $val;
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
    * @param string $val The name
    *
    * @return DirectoryDefinition
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    

     /** 
     * Gets the objects
     *
     * @return array The objects
     */
    public function getObjects()
    {
        if (array_key_exists("objects", $this->_propDict)) {
           return $this->_propDict["objects"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the objects
    *
    * @param ObjectDefinition $val The objects
    *
    * @return DirectoryDefinition
    */
    public function setObjects($val)
    {
		$this->_propDict["objects"] = $val;
        return $this;
    }
    
    /**
    * Gets the readOnly
    *
    * @return bool The readOnly
    */
    public function getReadOnly()
    {
        if (array_key_exists("readOnly", $this->_propDict)) {
            return $this->_propDict["readOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the readOnly
    *
    * @param bool $val The readOnly
    *
    * @return DirectoryDefinition
    */
    public function setReadOnly($val)
    {
        $this->_propDict["readOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the version
    *
    * @return string The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    *
    * @param string $val The version
    *
    * @return DirectoryDefinition
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    
}