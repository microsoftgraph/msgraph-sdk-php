<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationTemplate File
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
* SynchronizationTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationTemplate extends Entity
{
    /**
    * Gets the applicationId
    *
    * @return string The applicationId
    */
    public function getApplicationId()
    {
        if (array_key_exists("applicationId", $this->_propDict)) {
            return $this->_propDict["applicationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationId
    *
    * @param string $val The applicationId
    *
    * @return SynchronizationTemplate
    */
    public function setApplicationId($val)
    {
        $this->_propDict["applicationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the default
    *
    * @return bool The default
    */
    public function getDefault()
    {
        if (array_key_exists("default", $this->_propDict)) {
            return $this->_propDict["default"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the default
    *
    * @param bool $val The default
    *
    * @return SynchronizationTemplate
    */
    public function setDefault($val)
    {
        $this->_propDict["default"] = boolval($val);
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
    * @return SynchronizationTemplate
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the discoverable
    *
    * @return bool The discoverable
    */
    public function getDiscoverable()
    {
        if (array_key_exists("discoverable", $this->_propDict)) {
            return $this->_propDict["discoverable"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the discoverable
    *
    * @param bool $val The discoverable
    *
    * @return SynchronizationTemplate
    */
    public function setDiscoverable($val)
    {
        $this->_propDict["discoverable"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the factoryTag
    *
    * @return string The factoryTag
    */
    public function getFactoryTag()
    {
        if (array_key_exists("factoryTag", $this->_propDict)) {
            return $this->_propDict["factoryTag"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the factoryTag
    *
    * @param string $val The factoryTag
    *
    * @return SynchronizationTemplate
    */
    public function setFactoryTag($val)
    {
        $this->_propDict["factoryTag"] = $val;
        return $this;
    }
    

     /** 
     * Gets the metadata
     *
     * @return array The metadata
     */
    public function getMetadata()
    {
        if (array_key_exists("metadata", $this->_propDict)) {
           return $this->_propDict["metadata"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the metadata
    *
    * @param MetadataEntry $val The metadata
    *
    * @return SynchronizationTemplate
    */
    public function setMetadata($val)
    {
		$this->_propDict["metadata"] = $val;
        return $this;
    }
    
    /**
    * Gets the schema
    *
    * @return SynchronizationSchema The schema
    */
    public function getSchema()
    {
        if (array_key_exists("schema", $this->_propDict)) {
            if (is_a($this->_propDict["schema"], "Beta\Microsoft\Graph\Model\SynchronizationSchema")) {
                return $this->_propDict["schema"];
            } else {
                $this->_propDict["schema"] = new SynchronizationSchema($this->_propDict["schema"]);
                return $this->_propDict["schema"];
            }
        }
        return null;
    }
    
    /**
    * Sets the schema
    *
    * @param SynchronizationSchema $val The schema
    *
    * @return SynchronizationTemplate
    */
    public function setSchema($val)
    {
        $this->_propDict["schema"] = $val;
        return $this;
    }
    
}