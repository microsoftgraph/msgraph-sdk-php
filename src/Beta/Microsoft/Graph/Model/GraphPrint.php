<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GraphPrint File
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
* GraphPrint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GraphPrint extends 
{
    /**
    * Gets the settings
    *
    * @return PrintSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "Beta\Microsoft\Graph\Model\PrintSettings")) {
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
    *
    * @param PrintSettings $val The settings
    *
    * @return Print
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the connectors
     *
     * @return array The connectors
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
    *
    * @param PrintConnector $val The connectors
    *
    * @return Print
    */
    public function setConnectors($val)
    {
		$this->_propDict["connectors"] = $val;
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
    * @param PrintOperation $val The operations
    *
    * @return Print
    */
    public function setOperations($val)
    {
		$this->_propDict["operations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the printers
     *
     * @return array The printers
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
    *
    * @param Printer $val The printers
    *
    * @return Print
    */
    public function setPrinters($val)
    {
		$this->_propDict["printers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the printerShares
     *
     * @return array The printerShares
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
    * @param PrinterShare $val The printerShares
    *
    * @return Print
    */
    public function setPrinterShares($val)
    {
		$this->_propDict["printerShares"] = $val;
        return $this;
    }
    

     /** 
     * Gets the reports
     *
     * @return array The reports
     */
    public function getReports()
    {
        if (array_key_exists("reports", $this->_propDict)) {
           return $this->_propDict["reports"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the reports
    *
    * @param ReportRoot $val The reports
    *
    * @return Print
    */
    public function setReports($val)
    {
		$this->_propDict["reports"] = $val;
        return $this;
    }
    

     /** 
     * Gets the services
     *
     * @return array The services
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
    *
    * @param PrintService $val The services
    *
    * @return Print
    */
    public function setServices($val)
    {
		$this->_propDict["services"] = $val;
        return $this;
    }
    

     /** 
     * Gets the shares
     *
     * @return array The shares
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
    *
    * @param PrinterShare $val The shares
    *
    * @return Print
    */
    public function setShares($val)
    {
		$this->_propDict["shares"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taskDefinitions
     *
     * @return array The taskDefinitions
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
    * @param PrintTaskDefinition $val The taskDefinitions
    *
    * @return Print
    */
    public function setTaskDefinitions($val)
    {
		$this->_propDict["taskDefinitions"] = $val;
        return $this;
    }
    
}