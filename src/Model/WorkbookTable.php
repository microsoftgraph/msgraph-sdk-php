<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookTable File
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
* WorkbookTable class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookTable extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new WorkbookTable
    *
    * @param array $propDict A list of properties to set
    *
    * @return WorkbookTable
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the WorkbookTable
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the highlightFirstColumn
    *
    * @return bool The highlightFirstColumn
    */
    public function getHighlightFirstColumn()
    {
        if (array_key_exists("highlightFirstColumn", $this->_propDict)) {
            return $this->_propDict["highlightFirstColumn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the highlightFirstColumn
    *
    * @param bool $val The highlightFirstColumn
    *
    * @return WorkbookTable
    */
    public function setHighlightFirstColumn($val)
    {
        $this->_propDict["highlightFirstColumn"] = boolval($val);
        return $this;
    }

    /**
    * Gets the highlightLastColumn
    *
    * @return bool The highlightLastColumn
    */
    public function getHighlightLastColumn()
    {
        if (array_key_exists("highlightLastColumn", $this->_propDict)) {
            return $this->_propDict["highlightLastColumn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the highlightLastColumn
    *
    * @param bool $val The highlightLastColumn
    *
    * @return WorkbookTable
    */
    public function setHighlightLastColumn($val)
    {
        $this->_propDict["highlightLastColumn"] = boolval($val);
        return $this;
    }

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
    * @return WorkbookTable
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the showBandedColumns
    *
    * @return bool The showBandedColumns
    */
    public function getShowBandedColumns()
    {
        if (array_key_exists("showBandedColumns", $this->_propDict)) {
            return $this->_propDict["showBandedColumns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showBandedColumns
    *
    * @param bool $val The showBandedColumns
    *
    * @return WorkbookTable
    */
    public function setShowBandedColumns($val)
    {
        $this->_propDict["showBandedColumns"] = boolval($val);
        return $this;
    }

    /**
    * Gets the showBandedRows
    *
    * @return bool The showBandedRows
    */
    public function getShowBandedRows()
    {
        if (array_key_exists("showBandedRows", $this->_propDict)) {
            return $this->_propDict["showBandedRows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showBandedRows
    *
    * @param bool $val The showBandedRows
    *
    * @return WorkbookTable
    */
    public function setShowBandedRows($val)
    {
        $this->_propDict["showBandedRows"] = boolval($val);
        return $this;
    }

    /**
    * Gets the showFilterButton
    *
    * @return bool The showFilterButton
    */
    public function getShowFilterButton()
    {
        if (array_key_exists("showFilterButton", $this->_propDict)) {
            return $this->_propDict["showFilterButton"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showFilterButton
    *
    * @param bool $val The showFilterButton
    *
    * @return WorkbookTable
    */
    public function setShowFilterButton($val)
    {
        $this->_propDict["showFilterButton"] = boolval($val);
        return $this;
    }

    /**
    * Gets the showHeaders
    *
    * @return bool The showHeaders
    */
    public function getShowHeaders()
    {
        if (array_key_exists("showHeaders", $this->_propDict)) {
            return $this->_propDict["showHeaders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showHeaders
    *
    * @param bool $val The showHeaders
    *
    * @return WorkbookTable
    */
    public function setShowHeaders($val)
    {
        $this->_propDict["showHeaders"] = boolval($val);
        return $this;
    }

    /**
    * Gets the showTotals
    *
    * @return bool The showTotals
    */
    public function getShowTotals()
    {
        if (array_key_exists("showTotals", $this->_propDict)) {
            return $this->_propDict["showTotals"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showTotals
    *
    * @param bool $val The showTotals
    *
    * @return WorkbookTable
    */
    public function setShowTotals($val)
    {
        $this->_propDict["showTotals"] = boolval($val);
        return $this;
    }

    /**
    * Gets the style
    *
    * @return string The style
    */
    public function getStyle()
    {
        if (array_key_exists("style", $this->_propDict)) {
            return $this->_propDict["style"];
        } else {
            return null;
        }
    }

    /**
    * Sets the style
    *
    * @param string $val The style
    *
    * @return WorkbookTable
    */
    public function setStyle($val)
    {
        $this->_propDict["style"] = $val;
        return $this;
    }

    /** 
    * Gets the columns
    *
    * @return array The columns
    */
    public function getColumns()
    {
        if (array_key_exists("columns", $this->_propDict)) {
           return $this->_propDict["columns"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the columns
    *
    * @param string $val The columns
    *
    * @return WorkbookTable
    */
    public function setColumns($val)
    {
		$this->_propDict["columns"] = $val;
        return $this;
    }


    /** 
    * Gets the rows
    *
    * @return array The rows
    */
    public function getRows()
    {
        if (array_key_exists("rows", $this->_propDict)) {
           return $this->_propDict["rows"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the rows
    *
    * @param string $val The rows
    *
    * @return WorkbookTable
    */
    public function setRows($val)
    {
		$this->_propDict["rows"] = $val;
        return $this;
    }


    /**
    * Gets the sort
    *
    * @return WorkbookTableSort The sort
    */
    public function getSort()
    {
        if (array_key_exists("sort", $this->_propDict)) {
            if (is_a($this->_propDict["sort"], "WorkbookTableSort")) {
                return $this->_propDict["sort"];
            } else {
                $this->_propDict["sort"] = new WorkbookTableSort($this->_propDict["sort"]);
                return $this->_propDict["sort"];
            }
        }
        return null;
    }

    /**
    * Sets the sort
    *
    * @param string $val The sort
    *
    * @return WorkbookTable
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
            if (is_a($this->_propDict["worksheet"], "WorkbookWorksheet")) {
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
    * @param string $val The worksheet
    *
    * @return WorkbookTable
    */
    public function setWorksheet($val)
    {
        $this->_propDict["worksheet"] = $val;
        return $this;
    }
}