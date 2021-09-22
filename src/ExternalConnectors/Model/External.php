<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* External File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\ExternalConnectors\Model;

/**
* External class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class External implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;
    
    /**
    * Construct a new External
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
    * Gets the property dictionary of the External
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    

     /** 
     * Gets the connections
     *
     * @return ExternalConnection[]|null The connections
     */
    public function getConnections()
    {
        if (array_key_exists('connections', $this->_propDict) && !is_null($this->_propDict['connections'])) {
            $connections = [];
            if (count($this->_propDict['connections']) > 0 && is_a($this->_propDict['connections'][0], 'ExternalConnection')) {
                return $this->_propDict['connections'];
            }
            foreach ($this->_propDict['connections'] as $singleValue) {
                $connections []= new ExternalConnection($singleValue);
            }
            $this->_propDict['connections'] = $connections;
            return $this->_propDict['connections'];
        }
        return null;
    }
    
    /** 
    * Sets the connections
    *
    * @param ExternalConnection[] $val The connections
    *
    * @return External
    */
    public function setConnections($val)
    {
        $this->_propDict["connections"] = $val;
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
    * @return External
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
            if (is_a($val, '\DateTime')) {
                $serializableProperties[$property] = $val->format(\DateTimeInterface::RFC3339);
            } else if (is_a($val, '\Microsoft\Graph\Core\Enum')) {
                $serializableProperties[$property] = $val->value();
            } else if (is_array($val)) {
                $values = [];
                if (count($val) > 0 && is_a($val[0], '\DateTime')) {
                   foreach ($values as $propertyValue) {
                       $values []= $propertyValue->format(\DateTimeInterface::RFC3339);
                   }
                } else if(count > 0 && is_a($val[0], '\Microsoft\Graph\Core\Enum')) {
                    foreach ($values as $propertyValue) {
                       $values []= $propertyValue->value();
                   }
                }
                $serializableProperties[$property] = $values;
            }
        }
        return $serializableProperties;
    }
}
