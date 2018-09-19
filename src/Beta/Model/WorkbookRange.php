<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookRange File
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
* WorkbookRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WorkbookRange extends Entity
{
    /**
    * Gets the address
    *
    * @return string The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            return $this->_propDict["address"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the address
    *
    * @param string $val The address
    *
    * @return WorkbookRange
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    
    /**
    * Gets the addressLocal
    *
    * @return string The addressLocal
    */
    public function getAddressLocal()
    {
        if (array_key_exists("addressLocal", $this->_propDict)) {
            return $this->_propDict["addressLocal"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the addressLocal
    *
    * @param string $val The addressLocal
    *
    * @return WorkbookRange
    */
    public function setAddressLocal($val)
    {
        $this->_propDict["addressLocal"] = $val;
        return $this;
    }
    
    /**
    * Gets the cellCount
    *
    * @return int The cellCount
    */
    public function getCellCount()
    {
        if (array_key_exists("cellCount", $this->_propDict)) {
            return $this->_propDict["cellCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellCount
    *
    * @param int $val The cellCount
    *
    * @return WorkbookRange
    */
    public function setCellCount($val)
    {
        $this->_propDict["cellCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the columnCount
    *
    * @return int The columnCount
    */
    public function getColumnCount()
    {
        if (array_key_exists("columnCount", $this->_propDict)) {
            return $this->_propDict["columnCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the columnCount
    *
    * @param int $val The columnCount
    *
    * @return WorkbookRange
    */
    public function setColumnCount($val)
    {
        $this->_propDict["columnCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the columnHidden
    *
    * @return bool The columnHidden
    */
    public function getColumnHidden()
    {
        if (array_key_exists("columnHidden", $this->_propDict)) {
            return $this->_propDict["columnHidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the columnHidden
    *
    * @param bool $val The columnHidden
    *
    * @return WorkbookRange
    */
    public function setColumnHidden($val)
    {
        $this->_propDict["columnHidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the columnIndex
    *
    * @return int The columnIndex
    */
    public function getColumnIndex()
    {
        if (array_key_exists("columnIndex", $this->_propDict)) {
            return $this->_propDict["columnIndex"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the columnIndex
    *
    * @param int $val The columnIndex
    *
    * @return WorkbookRange
    */
    public function setColumnIndex($val)
    {
        $this->_propDict["columnIndex"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the formulas
    *
    * @return string The formulas
    */
    public function getFormulas()
    {
        if (array_key_exists("formulas", $this->_propDict)) {
            return $this->_propDict["formulas"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the formulas
    *
    * @param string $val The formulas
    *
    * @return WorkbookRange
    */
    public function setFormulas($val)
    {
        $this->_propDict["formulas"] = $val;
        return $this;
    }
    
    /**
    * Gets the formulasLocal
    *
    * @return string The formulasLocal
    */
    public function getFormulasLocal()
    {
        if (array_key_exists("formulasLocal", $this->_propDict)) {
            return $this->_propDict["formulasLocal"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the formulasLocal
    *
    * @param string $val The formulasLocal
    *
    * @return WorkbookRange
    */
    public function setFormulasLocal($val)
    {
        $this->_propDict["formulasLocal"] = $val;
        return $this;
    }
    
    /**
    * Gets the formulasR1C1
    *
    * @return string The formulasR1C1
    */
    public function getFormulasR1C1()
    {
        if (array_key_exists("formulasR1C1", $this->_propDict)) {
            return $this->_propDict["formulasR1C1"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the formulasR1C1
    *
    * @param string $val The formulasR1C1
    *
    * @return WorkbookRange
    */
    public function setFormulasR1C1($val)
    {
        $this->_propDict["formulasR1C1"] = $val;
        return $this;
    }
    
    /**
    * Gets the hidden
    *
    * @return bool The hidden
    */
    public function getHidden()
    {
        if (array_key_exists("hidden", $this->_propDict)) {
            return $this->_propDict["hidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hidden
    *
    * @param bool $val The hidden
    *
    * @return WorkbookRange
    */
    public function setHidden($val)
    {
        $this->_propDict["hidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the numberFormat
    *
    * @return string The numberFormat
    */
    public function getNumberFormat()
    {
        if (array_key_exists("numberFormat", $this->_propDict)) {
            return $this->_propDict["numberFormat"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberFormat
    *
    * @param string $val The numberFormat
    *
    * @return WorkbookRange
    */
    public function setNumberFormat($val)
    {
        $this->_propDict["numberFormat"] = $val;
        return $this;
    }
    
    /**
    * Gets the rowCount
    *
    * @return int The rowCount
    */
    public function getRowCount()
    {
        if (array_key_exists("rowCount", $this->_propDict)) {
            return $this->_propDict["rowCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rowCount
    *
    * @param int $val The rowCount
    *
    * @return WorkbookRange
    */
    public function setRowCount($val)
    {
        $this->_propDict["rowCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the rowHidden
    *
    * @return bool The rowHidden
    */
    public function getRowHidden()
    {
        if (array_key_exists("rowHidden", $this->_propDict)) {
            return $this->_propDict["rowHidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rowHidden
    *
    * @param bool $val The rowHidden
    *
    * @return WorkbookRange
    */
    public function setRowHidden($val)
    {
        $this->_propDict["rowHidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the rowIndex
    *
    * @return int The rowIndex
    */
    public function getRowIndex()
    {
        if (array_key_exists("rowIndex", $this->_propDict)) {
            return $this->_propDict["rowIndex"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rowIndex
    *
    * @param int $val The rowIndex
    *
    * @return WorkbookRange
    */
    public function setRowIndex($val)
    {
        $this->_propDict["rowIndex"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the text
    *
    * @return string The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the text
    *
    * @param string $val The text
    *
    * @return WorkbookRange
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    
    /**
    * Gets the valueTypes
    *
    * @return string The valueTypes
    */
    public function getValueTypes()
    {
        if (array_key_exists("valueTypes", $this->_propDict)) {
            return $this->_propDict["valueTypes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the valueTypes
    *
    * @param string $val The valueTypes
    *
    * @return WorkbookRange
    */
    public function setValueTypes($val)
    {
        $this->_propDict["valueTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the values
    *
    * @return string The values
    */
    public function getValues()
    {
        if (array_key_exists("values", $this->_propDict)) {
            return $this->_propDict["values"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the values
    *
    * @param string $val The values
    *
    * @return WorkbookRange
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }
    
    /**
    * Gets the format
    *
    * @return WorkbookRangeFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "Microsoft\Graph\Beta\Model\WorkbookRangeFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookRangeFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    *
    * @param WorkbookRangeFormat $val The format
    *
    * @return WorkbookRange
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
    /**
    * Gets the sort
    *
    * @return WorkbookRangeSort The sort
    */
    public function getSort()
    {
        if (array_key_exists("sort", $this->_propDict)) {
            if (is_a($this->_propDict["sort"], "Microsoft\Graph\Beta\Model\WorkbookRangeSort")) {
                return $this->_propDict["sort"];
            } else {
                $this->_propDict["sort"] = new WorkbookRangeSort($this->_propDict["sort"]);
                return $this->_propDict["sort"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sort
    *
    * @param WorkbookRangeSort $val The sort
    *
    * @return WorkbookRange
    */
    public function setSort($val)
    {
        $this->_propDict["sort"] = $val;
        return $this;
    }
    
    /**
    * Gets the worksheet
    *
    * @return WorkbookWorksheet The worksheet
    */
    public function getWorksheet()
    {
        if (array_key_exists("worksheet", $this->_propDict)) {
            if (is_a($this->_propDict["worksheet"], "Microsoft\Graph\Beta\Model\WorkbookWorksheet")) {
                return $this->_propDict["worksheet"];
            } else {
                $this->_propDict["worksheet"] = new WorkbookWorksheet($this->_propDict["worksheet"]);
                return $this->_propDict["worksheet"];
            }
        }
        return null;
    }
    
    /**
    * Sets the worksheet
    *
    * @param WorkbookWorksheet $val The worksheet
    *
    * @return WorkbookRange
    */
    public function setWorksheet($val)
    {
        $this->_propDict["worksheet"] = $val;
        return $this;
    }
    
}