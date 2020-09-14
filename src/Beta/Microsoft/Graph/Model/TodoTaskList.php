<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TodoTaskList File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* TodoTaskList class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TodoTaskList extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return TodoTaskList
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isOwner
    *
    * @return bool The isOwner
    */
    public function getIsOwner()
    {
        if (array_key_exists("isOwner", $this->_propDict)) {
            return $this->_propDict["isOwner"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isOwner
    *
    * @param bool $val The isOwner
    *
    * @return TodoTaskList
    */
    public function setIsOwner($val)
    {
        $this->_propDict["isOwner"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isShared
    *
    * @return bool The isShared
    */
    public function getIsShared()
    {
        if (array_key_exists("isShared", $this->_propDict)) {
            return $this->_propDict["isShared"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isShared
    *
    * @param bool $val The isShared
    *
    * @return TodoTaskList
    */
    public function setIsShared($val)
    {
        $this->_propDict["isShared"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wellknownListName
    *
    * @return WellknownListName The wellknownListName
    */
    public function getWellknownListName()
    {
        if (array_key_exists("wellknownListName", $this->_propDict)) {
            if (is_a($this->_propDict["wellknownListName"], "Beta\Microsoft\Graph\Model\WellknownListName")) {
                return $this->_propDict["wellknownListName"];
            } else {
                $this->_propDict["wellknownListName"] = new WellknownListName($this->_propDict["wellknownListName"]);
                return $this->_propDict["wellknownListName"];
            }
        }
        return null;
    }
    
    /**
    * Sets the wellknownListName
    *
    * @param WellknownListName $val The wellknownListName
    *
    * @return TodoTaskList
    */
    public function setWellknownListName($val)
    {
        $this->_propDict["wellknownListName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extensions
     *
     * @return array The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extensions
    *
    * @param Extension $val The extensions
    *
    * @return TodoTaskList
    */
    public function setExtensions($val)
    {
		$this->_propDict["extensions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tasks
     *
     * @return array The tasks
     */
    public function getTasks()
    {
        if (array_key_exists("tasks", $this->_propDict)) {
           return $this->_propDict["tasks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tasks
    *
    * @param TodoTask $val The tasks
    *
    * @return TodoTaskList
    */
    public function setTasks($val)
    {
		$this->_propDict["tasks"] = $val;
        return $this;
    }
    
}