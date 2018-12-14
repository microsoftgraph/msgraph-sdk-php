<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Entity File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Entity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Entity implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    protected $_propDict;
    
    /**
    * Construct a new Entity
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
	$this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the Entity
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the id
    * Read-only.
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
    * Read-only.
    *
    * @param string $val The id
    *
    * @return Entity
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
     * Gets the drive id
     * @return string
     */
    public function getDriveId(){
        if (array_key_exists("driveId", $this->_propDict)) {
            return $this->_propDict["driveId"];
        } else {
            return null;
        }
    }

    /**
     * Sets the driveId
     *
     * @param string $val drive id
     *
     * @return Entity
     */
    public function setDriveId($val)
    {
        $this->_propDict["driveId"] = $val;
        return $this;
    }

    /**
     * Gets the drive type
     * @return string
     */
    public function getDriveType(){
        if (array_key_exists("driveType", $this->_propDict)) {
            return $this->_propDict["driveType"];
        } else {
            return null;
        }
    }

    /**
     * Sets the driveType
     *
     * @param string $val drive type
     *
     * @return Entity
     */
    public function setDriveType($val)
    {
        $this->_propDict["driveType"] = $val;
        return $this;
    }

    /**
     * Gets the path
     * @return string
     */
    public function getPath(){
        if (array_key_exists("path", $this->_propDict)) {
            return $this->_propDict["path"];
        } else {
            return null;
        }
    }

    /**
     * Sets the driveId
     *
     * @param string $val the path
     *
     * @return Entity
     */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }
    
    /**
    * Gets the ODataType
    *
    * @return string The ODataType
    */
    public function getODataType()
    {
        return $this->_propDict["@odata.type"];
    }
    
    /**
    * Sets the ODataType
    *
    * @param string The ODataType
    *
    * @return Entity
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }
    
    /**
    * Serializes the object by property array
	* Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            }
        }
        return $serializableProperties;
    }
}
