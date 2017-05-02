<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookWorksheet File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* WorkbookWorksheet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookWorksheet extends Entity
{
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
    * @return WorkbookWorksheet
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the position
    *
    * @return int The position
    */
    public function getPosition()
    {
        if (array_key_exists("position", $this->_propDict)) {
            return $this->_propDict["position"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the position
    *
    * @param int $val The position
    *
    * @return WorkbookWorksheet
    */
    public function setPosition($val)
    {
        $this->_propDict["position"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the visibility
    *
    * @return string The visibility
    */
    public function getVisibility()
    {
        if (array_key_exists("visibility", $this->_propDict)) {
            return $this->_propDict["visibility"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the visibility
    *
    * @param string $val The visibility
    *
    * @return WorkbookWorksheet
    */
    public function setVisibility($val)
    {
        $this->_propDict["visibility"] = $val;
        return $this;
    }
    

     /** 
     * Gets the charts
     *
     * @return array The charts
     */
    public function getCharts()
    {
        if (array_key_exists("charts", $this->_propDict)) {
           return $this->_propDict["charts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the charts
    *
    * @param string $val The charts
    *
    * @return WorkbookWorksheet
    */
    public function setCharts($val)
    {
		$this->_propDict["charts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the pivotTables
     *
     * @return array The pivotTables
     */
    public function getPivotTables()
    {
        if (array_key_exists("pivotTables", $this->_propDict)) {
           return $this->_propDict["pivotTables"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the pivotTables
    *
    * @param string $val The pivotTables
    *
    * @return WorkbookWorksheet
    */
    public function setPivotTables($val)
    {
		$this->_propDict["pivotTables"] = $val;
        return $this;
    }
    
    /**
    * Gets the protection
    *
    * @return WorkbookWorksheetProtection The protection
    */
    public function getProtection()
    {
        if (array_key_exists("protection", $this->_propDict)) {
            if (is_a($this->_propDict["protection"], "Microsoft\Graph\Model\WorkbookWorksheetProtection")) {
                return $this->_propDict["protection"];
            } else {
                $this->_propDict["protection"] = new WorkbookWorksheetProtection($this->_propDict["protection"]);
                return $this->_propDict["protection"];
            }
        }
        return null;
    }
    
    /**
    * Sets the protection
    *
    * @param string $val The protection
    *
    * @return WorkbookWorksheet
    */
    public function setProtection($val)
    {
        $this->_propDict["protection"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tables
     *
     * @return array The tables
     */
    public function getTables()
    {
        if (array_key_exists("tables", $this->_propDict)) {
           return $this->_propDict["tables"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tables
    *
    * @param string $val The tables
    *
    * @return WorkbookWorksheet
    */
    public function setTables($val)
    {
		$this->_propDict["tables"] = $val;
        return $this;
    }
    
}