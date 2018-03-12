<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationRule File
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
* SynchronizationRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SynchronizationRule extends Entity
{
    /**
    * Gets the editable
    *
    * @return bool The editable
    */
    public function getEditable()
    {
        if (array_key_exists("editable", $this->_propDict)) {
            return $this->_propDict["editable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the editable
    *
    * @param bool $val The value of the editable
    *
    * @return SynchronizationRule
    */
    public function setEditable($val)
    {
        $this->_propDict["editable"] = $val;
        return $this;
    }
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return SynchronizationRule
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the metadata
    *
    * @return StringKeyStringValuePair The metadata
    */
    public function getMetadata()
    {
        if (array_key_exists("metadata", $this->_propDict)) {
            if (is_a($this->_propDict["metadata"], "Microsoft\Graph\Beta\Model\StringKeyStringValuePair")) {
                return $this->_propDict["metadata"];
            } else {
                $this->_propDict["metadata"] = new StringKeyStringValuePair($this->_propDict["metadata"]);
                return $this->_propDict["metadata"];
            }
        }
        return null;
    }

    /**
    * Sets the metadata
    *
    * @param StringKeyStringValuePair $val The value to assign to the metadata
    *
    * @return SynchronizationRule The SynchronizationRule
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
    * @return SynchronizationRule
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the objectMappings
    *
    * @return ObjectMapping The objectMappings
    */
    public function getObjectMappings()
    {
        if (array_key_exists("objectMappings", $this->_propDict)) {
            if (is_a($this->_propDict["objectMappings"], "Microsoft\Graph\Beta\Model\ObjectMapping")) {
                return $this->_propDict["objectMappings"];
            } else {
                $this->_propDict["objectMappings"] = new ObjectMapping($this->_propDict["objectMappings"]);
                return $this->_propDict["objectMappings"];
            }
        }
        return null;
    }

    /**
    * Sets the objectMappings
    *
    * @param ObjectMapping $val The value to assign to the objectMappings
    *
    * @return SynchronizationRule The SynchronizationRule
    */
    public function setObjectMappings($val)
    {
        $this->_propDict["objectMappings"] = $val;
         return $this;
    }
    /**
    * Gets the priority
    *
    * @return int The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    *
    * @param int $val The value of the priority
    *
    * @return SynchronizationRule
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
        return $this;
    }
    /**
    * Gets the sourceDirectoryName
    *
    * @return string The sourceDirectoryName
    */
    public function getSourceDirectoryName()
    {
        if (array_key_exists("sourceDirectoryName", $this->_propDict)) {
            return $this->_propDict["sourceDirectoryName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceDirectoryName
    *
    * @param string $val The value of the sourceDirectoryName
    *
    * @return SynchronizationRule
    */
    public function setSourceDirectoryName($val)
    {
        $this->_propDict["sourceDirectoryName"] = $val;
        return $this;
    }
    /**
    * Gets the targetDirectoryName
    *
    * @return string The targetDirectoryName
    */
    public function getTargetDirectoryName()
    {
        if (array_key_exists("targetDirectoryName", $this->_propDict)) {
            return $this->_propDict["targetDirectoryName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetDirectoryName
    *
    * @param string $val The value of the targetDirectoryName
    *
    * @return SynchronizationRule
    */
    public function setTargetDirectoryName($val)
    {
        $this->_propDict["targetDirectoryName"] = $val;
        return $this;
    }
}
