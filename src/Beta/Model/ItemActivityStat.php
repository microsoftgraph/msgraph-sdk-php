<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemActivityStat File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* ItemActivityStat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ItemActivityStat extends Entity
{
    /**
    * Gets the startDateTime
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    *
    * @param \DateTime $val The startDateTime
    *
    * @return ItemActivityStat
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDateTime
    *
    * @return \DateTime The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endDateTime
    *
    * @param \DateTime $val The endDateTime
    *
    * @return ItemActivityStat
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the access
    *
    * @return ItemActionStat The access
    */
    public function getAccess()
    {
        if (array_key_exists("access", $this->_propDict)) {
            if (is_a($this->_propDict["access"], "Microsoft\Graph\Model\ItemActionStat")) {
                return $this->_propDict["access"];
            } else {
                $this->_propDict["access"] = new ItemActionStat($this->_propDict["access"]);
                return $this->_propDict["access"];
            }
        }
        return null;
    }
    
    /**
    * Sets the access
    *
    * @param ItemActionStat $val The access
    *
    * @return ItemActivityStat
    */
    public function setAccess($val)
    {
        $this->_propDict["access"] = $val;
        return $this;
    }
    
    /**
    * Gets the create
    *
    * @return ItemActionStat The create
    */
    public function getCreate()
    {
        if (array_key_exists("create", $this->_propDict)) {
            if (is_a($this->_propDict["create"], "Microsoft\Graph\Model\ItemActionStat")) {
                return $this->_propDict["create"];
            } else {
                $this->_propDict["create"] = new ItemActionStat($this->_propDict["create"]);
                return $this->_propDict["create"];
            }
        }
        return null;
    }
    
    /**
    * Sets the create
    *
    * @param ItemActionStat $val The create
    *
    * @return ItemActivityStat
    */
    public function setCreate($val)
    {
        $this->_propDict["create"] = $val;
        return $this;
    }
    
    /**
    * Gets the delete
    *
    * @return ItemActionStat The delete
    */
    public function getDelete()
    {
        if (array_key_exists("delete", $this->_propDict)) {
            if (is_a($this->_propDict["delete"], "Microsoft\Graph\Model\ItemActionStat")) {
                return $this->_propDict["delete"];
            } else {
                $this->_propDict["delete"] = new ItemActionStat($this->_propDict["delete"]);
                return $this->_propDict["delete"];
            }
        }
        return null;
    }
    
    /**
    * Sets the delete
    *
    * @param ItemActionStat $val The delete
    *
    * @return ItemActivityStat
    */
    public function setDelete($val)
    {
        $this->_propDict["delete"] = $val;
        return $this;
    }
    
    /**
    * Gets the edit
    *
    * @return ItemActionStat The edit
    */
    public function getEdit()
    {
        if (array_key_exists("edit", $this->_propDict)) {
            if (is_a($this->_propDict["edit"], "Microsoft\Graph\Model\ItemActionStat")) {
                return $this->_propDict["edit"];
            } else {
                $this->_propDict["edit"] = new ItemActionStat($this->_propDict["edit"]);
                return $this->_propDict["edit"];
            }
        }
        return null;
    }
    
    /**
    * Sets the edit
    *
    * @param ItemActionStat $val The edit
    *
    * @return ItemActivityStat
    */
    public function setEdit($val)
    {
        $this->_propDict["edit"] = $val;
        return $this;
    }
    
    /**
    * Gets the move
    *
    * @return ItemActionStat The move
    */
    public function getMove()
    {
        if (array_key_exists("move", $this->_propDict)) {
            if (is_a($this->_propDict["move"], "Microsoft\Graph\Model\ItemActionStat")) {
                return $this->_propDict["move"];
            } else {
                $this->_propDict["move"] = new ItemActionStat($this->_propDict["move"]);
                return $this->_propDict["move"];
            }
        }
        return null;
    }
    
    /**
    * Sets the move
    *
    * @param ItemActionStat $val The move
    *
    * @return ItemActivityStat
    */
    public function setMove($val)
    {
        $this->_propDict["move"] = $val;
        return $this;
    }
    
    /**
    * Gets the isTrending
    *
    * @return bool The isTrending
    */
    public function getIsTrending()
    {
        if (array_key_exists("isTrending", $this->_propDict)) {
            return $this->_propDict["isTrending"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isTrending
    *
    * @param bool $val The isTrending
    *
    * @return ItemActivityStat
    */
    public function setIsTrending($val)
    {
        $this->_propDict["isTrending"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the incompleteData
    *
    * @return IncompleteData The incompleteData
    */
    public function getIncompleteData()
    {
        if (array_key_exists("incompleteData", $this->_propDict)) {
            if (is_a($this->_propDict["incompleteData"], "Microsoft\Graph\Model\IncompleteData")) {
                return $this->_propDict["incompleteData"];
            } else {
                $this->_propDict["incompleteData"] = new IncompleteData($this->_propDict["incompleteData"]);
                return $this->_propDict["incompleteData"];
            }
        }
        return null;
    }
    
    /**
    * Sets the incompleteData
    *
    * @param IncompleteData $val The incompleteData
    *
    * @return ItemActivityStat
    */
    public function setIncompleteData($val)
    {
        $this->_propDict["incompleteData"] = $val;
        return $this;
    }
    
}