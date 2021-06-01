<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantRelationship File
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
* TenantRelationship class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantRelationship implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    protected $_propDict;
    
    /**
    * Construct a new TenantRelationship
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
    * Gets the property dictionary of the TenantRelationship
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the managedTenants
    *
    * @return \Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenant|null The managedTenants
    */
    public function getManagedTenants()
    {
        if (array_key_exists("managedTenants", $this->_propDict)) {
            if (is_a($this->_propDict["managedTenants"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenant") || is_null($this->_propDict["managedTenants"])) {
                return $this->_propDict["managedTenants"];
            } else {
                $this->_propDict["managedTenants"] = new \Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenant($this->_propDict["managedTenants"]);
                return $this->_propDict["managedTenants"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managedTenants
    *
    * @param \Beta\Microsoft\Graph\ManagedTenants\Model\ManagedTenant $val The managedTenants
    *
    * @return TenantRelationship
    */
    public function setManagedTenants($val)
    {
        $this->_propDict["managedTenants"] = $val;
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
