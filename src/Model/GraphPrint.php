<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GraphPrint File
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
* GraphPrint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GraphPrint implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;
    
    /**
    * Construct a new GraphPrint
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
    * Gets the property dictionary of the Print
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the settings
    * Tenant-wide settings for the Universal Print service.
    *
    * @return PrintSettings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict) && !is_null($this->_propDict["settings"])) {
            if (is_a($this->_propDict["settings"], "\Microsoft\Graph\Model\PrintSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new PrintSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    * Tenant-wide settings for the Universal Print service.
    *
    * @param PrintSettings $val The settings
    *
    * @return GraphPrint
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the connectors
    * The list of available print connectors.
     *
     * @return PrintConnector[]|null The connectors
     */
    public function getConnectors()
    {
        if (array_key_exists('connectors', $this->_propDict) && !is_null($this->_propDict['connectors'])) {
            $connectors = [];
            if (count($this->_propDict['connectors']) > 0 && is_a($this->_propDict['connectors'][0], 'PrintConnector')) {
                return $this->_propDict['connectors'];
            }
            foreach ($this->_propDict['connectors'] as $singleValue) {
                $connectors []= new PrintConnector($singleValue);
            }
            $this->_propDict['connectors'] = $connectors;
            return $this->_propDict['connectors'];
        }
        return null;
    }
    
    /** 
    * Sets the connectors
    * The list of available print connectors.
    *
    * @param PrintConnector[] $val The connectors
    *
    * @return GraphPrint
    */
    public function setConnectors($val)
    {
        $this->_propDict["connectors"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
    * The list of print long running operations.
     *
     * @return PrintOperation[]|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists('operations', $this->_propDict) && !is_null($this->_propDict['operations'])) {
            $operations = [];
            if (count($this->_propDict['operations']) > 0 && is_a($this->_propDict['operations'][0], 'PrintOperation')) {
                return $this->_propDict['operations'];
            }
            foreach ($this->_propDict['operations'] as $singleValue) {
                $operations []= new PrintOperation($singleValue);
            }
            $this->_propDict['operations'] = $operations;
            return $this->_propDict['operations'];
        }
        return null;
    }
    
    /** 
    * Sets the operations
    * The list of print long running operations.
    *
    * @param PrintOperation[] $val The operations
    *
    * @return GraphPrint
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the printers
    * The list of printers registered in the tenant.
     *
     * @return Printer[]|null The printers
     */
    public function getPrinters()
    {
        if (array_key_exists('printers', $this->_propDict) && !is_null($this->_propDict['printers'])) {
            $printers = [];
            if (count($this->_propDict['printers']) > 0 && is_a($this->_propDict['printers'][0], 'Printer')) {
                return $this->_propDict['printers'];
            }
            foreach ($this->_propDict['printers'] as $singleValue) {
                $printers []= new Printer($singleValue);
            }
            $this->_propDict['printers'] = $printers;
            return $this->_propDict['printers'];
        }
        return null;
    }
    
    /** 
    * Sets the printers
    * The list of printers registered in the tenant.
    *
    * @param Printer[] $val The printers
    *
    * @return GraphPrint
    */
    public function setPrinters($val)
    {
        $this->_propDict["printers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the services
    * The list of available Universal Print service endpoints.
     *
     * @return PrintService[]|null The services
     */
    public function getServices()
    {
        if (array_key_exists('services', $this->_propDict) && !is_null($this->_propDict['services'])) {
            $services = [];
            if (count($this->_propDict['services']) > 0 && is_a($this->_propDict['services'][0], 'PrintService')) {
                return $this->_propDict['services'];
            }
            foreach ($this->_propDict['services'] as $singleValue) {
                $services []= new PrintService($singleValue);
            }
            $this->_propDict['services'] = $services;
            return $this->_propDict['services'];
        }
        return null;
    }
    
    /** 
    * Sets the services
    * The list of available Universal Print service endpoints.
    *
    * @param PrintService[] $val The services
    *
    * @return GraphPrint
    */
    public function setServices($val)
    {
        $this->_propDict["services"] = $val;
        return $this;
    }
    

     /** 
     * Gets the shares
    * The list of printer shares registered in the tenant.
     *
     * @return PrinterShare[]|null The shares
     */
    public function getShares()
    {
        if (array_key_exists('shares', $this->_propDict) && !is_null($this->_propDict['shares'])) {
            $shares = [];
            if (count($this->_propDict['shares']) > 0 && is_a($this->_propDict['shares'][0], 'PrinterShare')) {
                return $this->_propDict['shares'];
            }
            foreach ($this->_propDict['shares'] as $singleValue) {
                $shares []= new PrinterShare($singleValue);
            }
            $this->_propDict['shares'] = $shares;
            return $this->_propDict['shares'];
        }
        return null;
    }
    
    /** 
    * Sets the shares
    * The list of printer shares registered in the tenant.
    *
    * @param PrinterShare[] $val The shares
    *
    * @return GraphPrint
    */
    public function setShares($val)
    {
        $this->_propDict["shares"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taskDefinitions
    * List of abstract definition for a task that can be triggered when various events occur within Universal Print.
     *
     * @return PrintTaskDefinition[]|null The taskDefinitions
     */
    public function getTaskDefinitions()
    {
        if (array_key_exists('taskDefinitions', $this->_propDict) && !is_null($this->_propDict['taskDefinitions'])) {
            $taskDefinitions = [];
            if (count($this->_propDict['taskDefinitions']) > 0 && is_a($this->_propDict['taskDefinitions'][0], 'PrintTaskDefinition')) {
                return $this->_propDict['taskDefinitions'];
            }
            foreach ($this->_propDict['taskDefinitions'] as $singleValue) {
                $taskDefinitions []= new PrintTaskDefinition($singleValue);
            }
            $this->_propDict['taskDefinitions'] = $taskDefinitions;
            return $this->_propDict['taskDefinitions'];
        }
        return null;
    }
    
    /** 
    * Sets the taskDefinitions
    * List of abstract definition for a task that can be triggered when various events occur within Universal Print.
    *
    * @param PrintTaskDefinition[] $val The taskDefinitions
    *
    * @return GraphPrint
    */
    public function setTaskDefinitions($val)
    {
        $this->_propDict["taskDefinitions"] = $val;
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
    * @return GraphPrint
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
                } else if(count($val) > 0 && is_a($val[0], '\Microsoft\Graph\Core\Enum')) {
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
