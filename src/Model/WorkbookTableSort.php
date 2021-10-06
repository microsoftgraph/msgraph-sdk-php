<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookTableSort File
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
* WorkbookTableSort class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookTableSort extends Entity
{

     /** 
     * Gets the fields
    * Represents the current conditions used to last sort the table. Read-only.
     *
     * @return WorkbookSortField[]|null The fields
     */
    public function getFields()
    {
        if (array_key_exists('fields', $this->_propDict) && !is_null($this->_propDict['fields'])) {
            $fields = [];
            if (count($this->_propDict['fields']) > 0 && is_a($this->_propDict['fields'][0], 'WorkbookSortField')) {
                return $this->_propDict['fields'];
            }
            foreach ($this->_propDict['fields'] as $singleValue) {
                $fields []= new WorkbookSortField($singleValue);
            }
            $this->_propDict['fields'] = $fields;
            return $this->_propDict['fields'];
        }
        return null;
    }
    
    /** 
    * Sets the fields
    * Represents the current conditions used to last sort the table. Read-only.
    *
    * @param WorkbookSortField[] $val The fields
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
    * Represents whether the casing impacted the last sort of the table. Read-only.
    *
    * @return bool|null The matchCase
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
    * Represents whether the casing impacted the last sort of the table. Read-only.
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
    * Represents Chinese character ordering method last used to sort the table. The possible values are: PinYin, StrokeCount. Read-only.
    *
    * @return string|null The method
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
    * Represents Chinese character ordering method last used to sort the table. The possible values are: PinYin, StrokeCount. Read-only.
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
