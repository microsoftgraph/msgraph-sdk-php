<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookWorksheet File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* WorkbookWorksheet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
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
    * @param WorkbookChart $val The charts
    *
    * @return WorkbookWorksheet
    */
    public function setCharts($val)
    {
		$this->_propDict["charts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the names
     *
     * @return array The names
     */
    public function getNames()
    {
        if (array_key_exists("names", $this->_propDict)) {
           return $this->_propDict["names"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the names
    *
    * @param WorkbookNamedItem $val The names
    *
    * @return WorkbookWorksheet
    */
    public function setNames($val)
    {
		$this->_propDict["names"] = $val;
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
    * @param WorkbookPivotTable $val The pivotTables
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
            if (is_a($this->_propDict["protection"], "Microsoft\Graph\Beta\Model\WorkbookWorksheetProtection")) {
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
    * @param WorkbookWorksheetProtection $val The protection
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
    * @param WorkbookTable $val The tables
    *
    * @return WorkbookWorksheet
    */
    public function setTables($val)
    {
		$this->_propDict["tables"] = $val;
        return $this;
    }
    
}