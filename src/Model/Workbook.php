<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Workbook File
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
* Workbook class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Workbook extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new Workbook
    *
    * @param array $propDict A list of properties to set
    *
    * @return Workbook
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the Workbook
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the application
    *
    * @return WorkbookApplication The application
    */
    public function getApplication()
    {
        if (array_key_exists("application", $this->_propDict)) {
            if (is_a($this->_propDict["application"], "WorkbookApplication")) {
                return $this->_propDict["application"];
            } else {
                $this->_propDict["application"] = new WorkbookApplication($this->_propDict["application"]);
                return $this->_propDict["application"];
            }
        }
        return null;
    }

    /**
    * Sets the application
    *
    * @param string $val The application
    *
    * @return Workbook
    */
    public function setApplication($val)
    {
        $this->_propDict["application"] = $val;
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
    * @param string $val The names
    *
    * @return Workbook
    */
    public function setNames($val)
    {
		$this->_propDict["names"] = $val;
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
    * @return Workbook
    */
    public function setTables($val)
    {
		$this->_propDict["tables"] = $val;
        return $this;
    }


    /** 
    * Gets the worksheets
    *
    * @return array The worksheets
    */
    public function getWorksheets()
    {
        if (array_key_exists("worksheets", $this->_propDict)) {
           return $this->_propDict["worksheets"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the worksheets
    *
    * @param string $val The worksheets
    *
    * @return Workbook
    */
    public function setWorksheets($val)
    {
		$this->_propDict["worksheets"] = $val;
        return $this;
    }


    /**
    * Gets the functions
    *
    * @return WorkbookFunctions The functions
    */
    public function getFunctions()
    {
        if (array_key_exists("functions", $this->_propDict)) {
            if (is_a($this->_propDict["functions"], "WorkbookFunctions")) {
                return $this->_propDict["functions"];
            } else {
                $this->_propDict["functions"] = new WorkbookFunctions($this->_propDict["functions"]);
                return $this->_propDict["functions"];
            }
        }
        return null;
    }

    /**
    * Sets the functions
    *
    * @param string $val The functions
    *
    * @return Workbook
    */
    public function setFunctions($val)
    {
        $this->_propDict["functions"] = $val;
        return $this;
    }
}