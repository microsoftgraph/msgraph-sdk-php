<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookTableRow File
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
* WorkbookTableRow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookTableRow extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new WorkbookTableRow
    *
    * @param array $propDict A list of properties to set
    *
    * @return WorkbookTableRow
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the WorkbookTableRow
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
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
    * @return WorkbookTableRow
    */
    public function setIndex($val)
    {
        $this->_propDict["index"] = intval($val);
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
    * @return WorkbookTableRow
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }
}