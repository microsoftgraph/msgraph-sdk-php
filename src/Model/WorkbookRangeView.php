<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookRangeView File
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
* WorkbookRangeView class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookRangeView extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new WorkbookRangeView
    *
    * @param array $propDict A list of properties to set
    *
    * @return WorkbookRangeView
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the WorkbookRangeView
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the cellAddresses
    *
    * @return string The cellAddresses
    */
    public function getCellAddresses()
    {
        if (array_key_exists("cellAddresses", $this->_propDict)) {
            return $this->_propDict["cellAddresses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cellAddresses
    *
    * @param string $val The cellAddresses
    *
    * @return WorkbookRangeView
    */
    public function setCellAddresses($val)
    {
        $this->_propDict["cellAddresses"] = $val;
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
    * @return WorkbookRangeView
    */
    public function setColumnCount($val)
    {
        $this->_propDict["columnCount"] = intval($val);
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
    * @return WorkbookRangeView
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
    * @return WorkbookRangeView
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
    * @return WorkbookRangeView
    */
    public function setFormulasR1C1($val)
    {
        $this->_propDict["formulasR1C1"] = $val;
        return $this;
    }

    /**
    * Gets the index
    *
    * @return int The index
    */
    public function getIndex()
    {
        if (array_key_exists("index", $this->_propDict)) {
            return $this->_propDict["index"];
        } else {
            return null;
        }
    }

    /**
    * Sets the index
    *
    * @param int $val The index
    *
    * @return WorkbookRangeView
    */
    public function setIndex($val)
    {
        $this->_propDict["index"] = intval($val);
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
    * @return WorkbookRangeView
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
    * @return WorkbookRangeView
    */
    public function setRowCount($val)
    {
        $this->_propDict["rowCount"] = intval($val);
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
    * @return WorkbookRangeView
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
    * @return WorkbookRangeView
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
    * @return WorkbookRangeView
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
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
    * @return WorkbookRangeView
    */
    public function setRows($val)
    {
		$this->_propDict["rows"] = $val;
        return $this;
    }

}