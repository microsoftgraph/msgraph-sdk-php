<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookWorksheet File
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
* WorkbookWorksheet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookWorksheet extends Entity
{
    /**
    * Gets the name
    * The display name of the worksheet.
    *
    * @return string|null The name
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
    * The display name of the worksheet.
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
    * The zero-based position of the worksheet within the workbook.
    *
    * @return int|null The position
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
    * The zero-based position of the worksheet within the workbook.
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
    * The Visibility of the worksheet. The possible values are: Visible, Hidden, VeryHidden.
    *
    * @return string|null The visibility
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
    * The Visibility of the worksheet. The possible values are: Visible, Hidden, VeryHidden.
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
    * Returns collection of charts that are part of the worksheet. Read-only.
     *
     * @return WorkbookChart[]|null The charts
     */
    public function getCharts()
    {
        if (array_key_exists('charts', $this->_propDict) && !is_null($this->_propDict['charts'])) {
            $charts = [];
            if (count($this->_propDict['charts']) > 0 && is_a($this->_propDict['charts'][0], 'WorkbookChart')) {
                return $this->_propDict['charts'];
            }
            foreach ($this->_propDict['charts'] as $singleValue) {
                $charts []= new WorkbookChart($singleValue);
            }
            $this->_propDict['charts'] = $charts;
            return $this->_propDict['charts'];
        }
        return null;
    }
    
    /** 
    * Sets the charts
    * Returns collection of charts that are part of the worksheet. Read-only.
    *
    * @param WorkbookChart[] $val The charts
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
    * Returns collection of names that are associated with the worksheet. Read-only.
     *
     * @return WorkbookNamedItem[]|null The names
     */
    public function getNames()
    {
        if (array_key_exists('names', $this->_propDict) && !is_null($this->_propDict['names'])) {
            $names = [];
            if (count($this->_propDict['names']) > 0 && is_a($this->_propDict['names'][0], 'WorkbookNamedItem')) {
                return $this->_propDict['names'];
            }
            foreach ($this->_propDict['names'] as $singleValue) {
                $names []= new WorkbookNamedItem($singleValue);
            }
            $this->_propDict['names'] = $names;
            return $this->_propDict['names'];
        }
        return null;
    }
    
    /** 
    * Sets the names
    * Returns collection of names that are associated with the worksheet. Read-only.
    *
    * @param WorkbookNamedItem[] $val The names
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
    * Collection of PivotTables that are part of the worksheet.
     *
     * @return WorkbookPivotTable[]|null The pivotTables
     */
    public function getPivotTables()
    {
        if (array_key_exists('pivotTables', $this->_propDict) && !is_null($this->_propDict['pivotTables'])) {
            $pivotTables = [];
            if (count($this->_propDict['pivotTables']) > 0 && is_a($this->_propDict['pivotTables'][0], 'WorkbookPivotTable')) {
                return $this->_propDict['pivotTables'];
            }
            foreach ($this->_propDict['pivotTables'] as $singleValue) {
                $pivotTables []= new WorkbookPivotTable($singleValue);
            }
            $this->_propDict['pivotTables'] = $pivotTables;
            return $this->_propDict['pivotTables'];
        }
        return null;
    }
    
    /** 
    * Sets the pivotTables
    * Collection of PivotTables that are part of the worksheet.
    *
    * @param WorkbookPivotTable[] $val The pivotTables
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
    * Returns sheet protection object for a worksheet. Read-only.
    *
    * @return WorkbookWorksheetProtection|null The protection
    */
    public function getProtection()
    {
        if (array_key_exists("protection", $this->_propDict) && !is_null($this->_propDict["protection"])) {
            if (is_a($this->_propDict["protection"], "\Microsoft\Graph\Model\WorkbookWorksheetProtection")) {
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
    * Returns sheet protection object for a worksheet. Read-only.
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
    * Collection of tables that are part of the worksheet. Read-only.
     *
     * @return WorkbookTable[]|null The tables
     */
    public function getTables()
    {
        if (array_key_exists('tables', $this->_propDict) && !is_null($this->_propDict['tables'])) {
            $tables = [];
            if (count($this->_propDict['tables']) > 0 && is_a($this->_propDict['tables'][0], 'WorkbookTable')) {
                return $this->_propDict['tables'];
            }
            foreach ($this->_propDict['tables'] as $singleValue) {
                $tables []= new WorkbookTable($singleValue);
            }
            $this->_propDict['tables'] = $tables;
            return $this->_propDict['tables'];
        }
        return null;
    }
    
    /** 
    * Sets the tables
    * Collection of tables that are part of the worksheet. Read-only.
    *
    * @param WorkbookTable[] $val The tables
    *
    * @return WorkbookWorksheet
    */
    public function setTables($val)
    {
        $this->_propDict["tables"] = $val;
        return $this;
    }
    
}
