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
namespace Beta\Microsoft\Graph\Model;

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
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\PrintSettings") || is_null($this->_propDict["settings"])) {
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
     * @return array|null The connectors
     */
    public function getConnectors()
    {
        if (array_key_exists("connectors", $this->_propDict)) {
           return $this->_propDict["connectors"];
        } else {
            return null;
        }
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
     *
     * @return array|null The operations
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
     * @return array|null The printers
     */
    public function getPrinters()
    {
        if (array_key_exists("printers", $this->_propDict)) {
           return $this->_propDict["printers"];
        } else {
            return null;
        }
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
     * Gets the printerShares
     *
     * @return array|null The printerShares
     */
    public function getPrinterShares()
    {
        if (array_key_exists("printerShares", $this->_propDict)) {
           return $this->_propDict["printerShares"];
        } else {
            return null;
        }
    }

    /**
    * Sets the printerShares
    *
    * @param PrinterShare[] $val The printerShares
    *
    * @return GraphPrint
    */
    public function setPrinterShares($val)
    {
        $this->_propDict["printerShares"] = $val;
        return $this;
    }

    /**
    * Gets the reports
    *
    * @return ReportRoot|null The reports
    */
    public function getReports()
    {
        if (array_key_exists("reports", $this->_propDict)) {
            if (is_a($this->_propDict["reports"], "\Beta\Microsoft\Graph\Model\ReportRoot") || is_null($this->_propDict["reports"])) {
                return $this->_propDict["reports"];
            } else {
                $this->_propDict["reports"] = new ReportRoot($this->_propDict["reports"]);
                return $this->_propDict["reports"];
            }
        }
        return null;
    }

    /**
    * Sets the reports
    *
    * @param ReportRoot $val The reports
    *
    * @return GraphPrint
    */
    public function setReports($val)
    {
        $this->_propDict["reports"] = $val;
        return $this;
    }


     /**
     * Gets the services
    * The list of available Universal Print service endpoints.
     *
     * @return array|null The services
     */
    public function getServices()
    {
        if (array_key_exists("services", $this->_propDict)) {
           return $this->_propDict["services"];
        } else {
            return null;
        }
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
     * @return array|null The shares
     */
    public function getShares()
    {
        if (array_key_exists("shares", $this->_propDict)) {
           return $this->_propDict["shares"];
        } else {
            return null;
        }
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
     *
     * @return array|null The taskDefinitions
     */
    public function getTaskDefinitions()
    {
        if (array_key_exists("taskDefinitions", $this->_propDict)) {
           return $this->_propDict["taskDefinitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the taskDefinitions
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
