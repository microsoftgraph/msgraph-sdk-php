<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookWorksheetProtectionOptions File
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
* WorkbookWorksheetProtectionOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookWorksheetProtectionOptions extends Entity
{
    /**
    * Gets the allowAutoFilter
    *
    * @return bool The allowAutoFilter
    */
    public function getAllowAutoFilter()
    {
        if (array_key_exists("allowAutoFilter", $this->_propDict)) {
            return $this->_propDict["allowAutoFilter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowAutoFilter
    *
    * @param bool $val The value of the allowAutoFilter
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowAutoFilter($val)
    {
        $this->_propDict["allow_auto_filter"] = $val;
        return $this;
    }
    /**
    * Gets the allowDeleteColumns
    *
    * @return bool The allowDeleteColumns
    */
    public function getAllowDeleteColumns()
    {
        if (array_key_exists("allowDeleteColumns", $this->_propDict)) {
            return $this->_propDict["allowDeleteColumns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowDeleteColumns
    *
    * @param bool $val The value of the allowDeleteColumns
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowDeleteColumns($val)
    {
        $this->_propDict["allow_delete_columns"] = $val;
        return $this;
    }
    /**
    * Gets the allowDeleteRows
    *
    * @return bool The allowDeleteRows
    */
    public function getAllowDeleteRows()
    {
        if (array_key_exists("allowDeleteRows", $this->_propDict)) {
            return $this->_propDict["allowDeleteRows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowDeleteRows
    *
    * @param bool $val The value of the allowDeleteRows
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowDeleteRows($val)
    {
        $this->_propDict["allow_delete_rows"] = $val;
        return $this;
    }
    /**
    * Gets the allowFormatCells
    *
    * @return bool The allowFormatCells
    */
    public function getAllowFormatCells()
    {
        if (array_key_exists("allowFormatCells", $this->_propDict)) {
            return $this->_propDict["allowFormatCells"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowFormatCells
    *
    * @param bool $val The value of the allowFormatCells
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowFormatCells($val)
    {
        $this->_propDict["allow_format_cells"] = $val;
        return $this;
    }
    /**
    * Gets the allowFormatColumns
    *
    * @return bool The allowFormatColumns
    */
    public function getAllowFormatColumns()
    {
        if (array_key_exists("allowFormatColumns", $this->_propDict)) {
            return $this->_propDict["allowFormatColumns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowFormatColumns
    *
    * @param bool $val The value of the allowFormatColumns
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowFormatColumns($val)
    {
        $this->_propDict["allow_format_columns"] = $val;
        return $this;
    }
    /**
    * Gets the allowFormatRows
    *
    * @return bool The allowFormatRows
    */
    public function getAllowFormatRows()
    {
        if (array_key_exists("allowFormatRows", $this->_propDict)) {
            return $this->_propDict["allowFormatRows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowFormatRows
    *
    * @param bool $val The value of the allowFormatRows
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowFormatRows($val)
    {
        $this->_propDict["allow_format_rows"] = $val;
        return $this;
    }
    /**
    * Gets the allowInsertColumns
    *
    * @return bool The allowInsertColumns
    */
    public function getAllowInsertColumns()
    {
        if (array_key_exists("allowInsertColumns", $this->_propDict)) {
            return $this->_propDict["allowInsertColumns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowInsertColumns
    *
    * @param bool $val The value of the allowInsertColumns
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowInsertColumns($val)
    {
        $this->_propDict["allow_insert_columns"] = $val;
        return $this;
    }
    /**
    * Gets the allowInsertHyperlinks
    *
    * @return bool The allowInsertHyperlinks
    */
    public function getAllowInsertHyperlinks()
    {
        if (array_key_exists("allowInsertHyperlinks", $this->_propDict)) {
            return $this->_propDict["allowInsertHyperlinks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowInsertHyperlinks
    *
    * @param bool $val The value of the allowInsertHyperlinks
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowInsertHyperlinks($val)
    {
        $this->_propDict["allow_insert_hyperlinks"] = $val;
        return $this;
    }
    /**
    * Gets the allowInsertRows
    *
    * @return bool The allowInsertRows
    */
    public function getAllowInsertRows()
    {
        if (array_key_exists("allowInsertRows", $this->_propDict)) {
            return $this->_propDict["allowInsertRows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowInsertRows
    *
    * @param bool $val The value of the allowInsertRows
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowInsertRows($val)
    {
        $this->_propDict["allow_insert_rows"] = $val;
        return $this;
    }
    /**
    * Gets the allowPivotTables
    *
    * @return bool The allowPivotTables
    */
    public function getAllowPivotTables()
    {
        if (array_key_exists("allowPivotTables", $this->_propDict)) {
            return $this->_propDict["allowPivotTables"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowPivotTables
    *
    * @param bool $val The value of the allowPivotTables
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowPivotTables($val)
    {
        $this->_propDict["allow_pivot_tables"] = $val;
        return $this;
    }
    /**
    * Gets the allowSort
    *
    * @return bool The allowSort
    */
    public function getAllowSort()
    {
        if (array_key_exists("allowSort", $this->_propDict)) {
            return $this->_propDict["allowSort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowSort
    *
    * @param bool $val The value of the allowSort
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowSort($val)
    {
        $this->_propDict["allow_sort"] = $val;
        return $this;
    }
}
