<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookPivotTable File
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
* WorkbookPivotTable class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookPivotTable extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new WorkbookPivotTable
    *
    * @param array $propDict A list of properties to set
    *
    * @return WorkbookPivotTable
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the WorkbookPivotTable
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
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
    * @return WorkbookPivotTable
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
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
    * @return WorkbookPivotTable
    */
    public function setWorksheet($val)
    {
        $this->_propDict["worksheet"] = $val;
        return $this;
    }
}