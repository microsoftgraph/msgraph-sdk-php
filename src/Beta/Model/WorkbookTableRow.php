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
namespace Microsoft\Graph\Beta\Model;

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