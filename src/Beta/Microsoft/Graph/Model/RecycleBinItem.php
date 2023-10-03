<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecycleBinItem File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* RecycleBinItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecycleBinItem extends BaseItem
{
    /**
    * Gets the deletedDateTime
    *
    * @return \DateTime|null The deletedDateTime
    */
    public function getDeletedDateTime()
    {
        if (array_key_exists("deletedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deletedDateTime"], "\DateTime") || is_null($this->_propDict["deletedDateTime"])) {
                return $this->_propDict["deletedDateTime"];
            } else {
                $this->_propDict["deletedDateTime"] = new \DateTime($this->_propDict["deletedDateTime"]);
                return $this->_propDict["deletedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the deletedDateTime
    *
    * @param \DateTime $val The deletedDateTime
    *
    * @return RecycleBinItem
    */
    public function setDeletedDateTime($val)
    {
        $this->_propDict["deletedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the deletedFromLocation
    *
    * @return string|null The deletedFromLocation
    */
    public function getDeletedFromLocation()
    {
        if (array_key_exists("deletedFromLocation", $this->_propDict)) {
            return $this->_propDict["deletedFromLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deletedFromLocation
    *
    * @param string $val The deletedFromLocation
    *
    * @return RecycleBinItem
    */
    public function setDeletedFromLocation($val)
    {
        $this->_propDict["deletedFromLocation"] = $val;
        return $this;
    }

    /**
    * Gets the size
    *
    * @return int|null The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }

    /**
    * Sets the size
    *
    * @param int $val The size
    *
    * @return RecycleBinItem
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = intval($val);
        return $this;
    }

}
