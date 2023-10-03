<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionsDefinitionAuthorizationSystemIdentity File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* PermissionsDefinitionAuthorizationSystemIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionsDefinitionAuthorizationSystemIdentity implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new PermissionsDefinitionAuthorizationSystemIdentity
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the PermissionsDefinitionAuthorizationSystemIdentity
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the externalId
    *
    * @return string|null The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalId
    *
    * @param string $val The externalId
    *
    * @return PermissionsDefinitionAuthorizationSystemIdentity
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }

    /**
    * Gets the identityType
    *
    * @return PermissionsDefinitionIdentityType|null The identityType
    */
    public function getIdentityType()
    {
        if (array_key_exists("identityType", $this->_propDict)) {
            if (is_a($this->_propDict["identityType"], "\Beta\Microsoft\Graph\Model\PermissionsDefinitionIdentityType") || is_null($this->_propDict["identityType"])) {
                return $this->_propDict["identityType"];
            } else {
                $this->_propDict["identityType"] = new PermissionsDefinitionIdentityType($this->_propDict["identityType"]);
                return $this->_propDict["identityType"];
            }
        }
        return null;
    }

    /**
    * Sets the identityType
    *
    * @param PermissionsDefinitionIdentityType $val The identityType
    *
    * @return PermissionsDefinitionAuthorizationSystemIdentity
    */
    public function setIdentityType($val)
    {
        $this->_propDict["identityType"] = $val;
        return $this;
    }

    /**
    * Gets the source
    *
    * @return PermissionsDefinitionIdentitySource|null The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Beta\Microsoft\Graph\Model\PermissionsDefinitionIdentitySource") || is_null($this->_propDict["source"])) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new PermissionsDefinitionIdentitySource($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }

    /**
    * Sets the source
    *
    * @param PermissionsDefinitionIdentitySource $val The source
    *
    * @return PermissionsDefinitionAuthorizationSystemIdentity
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return PermissionsDefinitionAuthorizationSystemIdentity
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
