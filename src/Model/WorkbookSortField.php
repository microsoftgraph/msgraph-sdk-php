<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookSortField File
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
* WorkbookSortField class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookSortField extends Entity
{
    /**
    * Gets the ascending
    *
    * @return bool The ascending
    */
    public function getAscending()
    {
        if (array_key_exists("ascending", $this->_propDict)) {
            return $this->_propDict["ascending"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ascending
    *
    * @param bool $val The value of the ascending
    *
    * @return WorkbookSortField
    */
    public function setAscending($val)
    {
        $this->_propDict["ascending"] = $val;
        return $this;
    }
    /**
    * Gets the color
    *
    * @return string The color
    */
    public function getColor()
    {
        if (array_key_exists("color", $this->_propDict)) {
            return $this->_propDict["color"];
        } else {
            return null;
        }
    }

    /**
    * Sets the color
    *
    * @param string $val The value of the color
    *
    * @return WorkbookSortField
    */
    public function setColor($val)
    {
        $this->_propDict["color"] = $val;
        return $this;
    }
    /**
    * Gets the dataOption
    *
    * @return string The dataOption
    */
    public function getDataOption()
    {
        if (array_key_exists("dataOption", $this->_propDict)) {
            return $this->_propDict["dataOption"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataOption
    *
    * @param string $val The value of the dataOption
    *
    * @return WorkbookSortField
    */
    public function setDataOption($val)
    {
        $this->_propDict["dataOption"] = $val;
        return $this;
    }

    /**
    * Gets the icon
    *
    * @return WorkbookIcon The icon
    */
    public function getIcon()
    {
        if (array_key_exists("icon", $this->_propDict)) {
            if (is_a($this->_propDict["icon"], "WorkbookIcon")) {
                return $this->_propDict["icon"];
            } else {
                $this->_propDict["icon"] = new WorkbookIcon($this->_propDict["icon"]);
                return $this->_propDict["icon"];
            }
        }
        return null;
    }

    /**
    * Sets the icon
    *
    * @param WorkbookIcon $val The value to assign to the icon
    *
    * @return WorkbookSortField The WorkbookSortField
    */
    public function setIcon($val)
    {
        $this->_propDict["icon"] = $val;
         return $this;
    }
    /**
    * Gets the key
    *
    * @return int The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            return $this->_propDict["key"];
        } else {
            return null;
        }
    }

    /**
    * Sets the key
    *
    * @param int $val The value of the key
    *
    * @return WorkbookSortField
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
        return $this;
    }
    /**
    * Gets the sortOn
    *
    * @return string The sortOn
    */
    public function getSortOn()
    {
        if (array_key_exists("sortOn", $this->_propDict)) {
            return $this->_propDict["sortOn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sortOn
    *
    * @param string $val The value of the sortOn
    *
    * @return WorkbookSortField
    */
    public function setSortOn($val)
    {
        $this->_propDict["sortOn"] = $val;
        return $this;
    }
}
