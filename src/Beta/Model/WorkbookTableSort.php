<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookTableSort File
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
* WorkbookTableSort class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookTableSort extends Entity
{

     /** 
     * Gets the fields
     *
     * @return array The fields
     */
    public function getFields()
    {
        if (array_key_exists("fields", $this->_propDict)) {
           return $this->_propDict["fields"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the fields
    *
    * @param WorkbookSortField $val The fields
    *
    * @return WorkbookTableSort
    */
    public function setFields($val)
    {
		$this->_propDict["fields"] = $val;
        return $this;
    }
    
    /**
    * Gets the matchCase
    *
    * @return bool The matchCase
    */
    public function getMatchCase()
    {
        if (array_key_exists("matchCase", $this->_propDict)) {
            return $this->_propDict["matchCase"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the matchCase
    *
    * @param bool $val The matchCase
    *
    * @return WorkbookTableSort
    */
    public function setMatchCase($val)
    {
        $this->_propDict["matchCase"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the method
    *
    * @return string The method
    */
    public function getMethod()
    {
        if (array_key_exists("method", $this->_propDict)) {
            return $this->_propDict["method"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the method
    *
    * @param string $val The method
    *
    * @return WorkbookTableSort
    */
    public function setMethod($val)
    {
        $this->_propDict["method"] = $val;
        return $this;
    }
    
}