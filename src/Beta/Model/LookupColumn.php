<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LookupColumn File
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
* LookupColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class LookupColumn extends Entity
{
    /**
    * Gets the allowMultipleValues
    *
    * @return bool The allowMultipleValues
    */
    public function getAllowMultipleValues()
    {
        if (array_key_exists("allowMultipleValues", $this->_propDict)) {
            return $this->_propDict["allowMultipleValues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowMultipleValues
    *
    * @param bool $val The value of the allowMultipleValues
    *
    * @return LookupColumn
    */
    public function setAllowMultipleValues($val)
    {
        $this->_propDict["allowMultipleValues"] = $val;
        return $this;
    }
    /**
    * Gets the allowUnlimitedLength
    *
    * @return bool The allowUnlimitedLength
    */
    public function getAllowUnlimitedLength()
    {
        if (array_key_exists("allowUnlimitedLength", $this->_propDict)) {
            return $this->_propDict["allowUnlimitedLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowUnlimitedLength
    *
    * @param bool $val The value of the allowUnlimitedLength
    *
    * @return LookupColumn
    */
    public function setAllowUnlimitedLength($val)
    {
        $this->_propDict["allowUnlimitedLength"] = $val;
        return $this;
    }
    /**
    * Gets the columnName
    *
    * @return string The columnName
    */
    public function getColumnName()
    {
        if (array_key_exists("columnName", $this->_propDict)) {
            return $this->_propDict["columnName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the columnName
    *
    * @param string $val The value of the columnName
    *
    * @return LookupColumn
    */
    public function setColumnName($val)
    {
        $this->_propDict["columnName"] = $val;
        return $this;
    }
    /**
    * Gets the listId
    *
    * @return string The listId
    */
    public function getListId()
    {
        if (array_key_exists("listId", $this->_propDict)) {
            return $this->_propDict["listId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the listId
    *
    * @param string $val The value of the listId
    *
    * @return LookupColumn
    */
    public function setListId($val)
    {
        $this->_propDict["listId"] = $val;
        return $this;
    }
    /**
    * Gets the primaryLookupColumnId
    *
    * @return string The primaryLookupColumnId
    */
    public function getPrimaryLookupColumnId()
    {
        if (array_key_exists("primaryLookupColumnId", $this->_propDict)) {
            return $this->_propDict["primaryLookupColumnId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the primaryLookupColumnId
    *
    * @param string $val The value of the primaryLookupColumnId
    *
    * @return LookupColumn
    */
    public function setPrimaryLookupColumnId($val)
    {
        $this->_propDict["primaryLookupColumnId"] = $val;
        return $this;
    }
}
