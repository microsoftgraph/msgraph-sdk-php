<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemActivity File
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
* ItemActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ItemActivity extends Entity
{
    /**
    * Gets the action
    *
    * @return ItemActionSet The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "Microsoft\Graph\Model\ItemActionSet")) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new ItemActionSet($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }
    
    /**
    * Sets the action
    *
    * @param ItemActionSet $val The action
    *
    * @return ItemActivity
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
        return $this;
    }
    
    /**
    * Gets the actor
    *
    * @return IdentitySet The actor
    */
    public function getActor()
    {
        if (array_key_exists("actor", $this->_propDict)) {
            if (is_a($this->_propDict["actor"], "Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["actor"];
            } else {
                $this->_propDict["actor"] = new IdentitySet($this->_propDict["actor"]);
                return $this->_propDict["actor"];
            }
        }
        return null;
    }
    
    /**
    * Sets the actor
    *
    * @param IdentitySet $val The actor
    *
    * @return ItemActivity
    */
    public function setActor($val)
    {
        $this->_propDict["actor"] = $val;
        return $this;
    }
    
    /**
    * Gets the times
    *
    * @return ItemActivityTimeSet The times
    */
    public function getTimes()
    {
        if (array_key_exists("times", $this->_propDict)) {
            if (is_a($this->_propDict["times"], "Microsoft\Graph\Model\ItemActivityTimeSet")) {
                return $this->_propDict["times"];
            } else {
                $this->_propDict["times"] = new ItemActivityTimeSet($this->_propDict["times"]);
                return $this->_propDict["times"];
            }
        }
        return null;
    }
    
    /**
    * Sets the times
    *
    * @param ItemActivityTimeSet $val The times
    *
    * @return ItemActivity
    */
    public function setTimes($val)
    {
        $this->_propDict["times"] = $val;
        return $this;
    }
    
    /**
    * Gets the driveItem
    *
    * @return DriveItem The driveItem
    */
    public function getDriveItem()
    {
        if (array_key_exists("driveItem", $this->_propDict)) {
            if (is_a($this->_propDict["driveItem"], "Microsoft\Graph\Model\DriveItem")) {
                return $this->_propDict["driveItem"];
            } else {
                $this->_propDict["driveItem"] = new DriveItem($this->_propDict["driveItem"]);
                return $this->_propDict["driveItem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the driveItem
    *
    * @param DriveItem $val The driveItem
    *
    * @return ItemActivity
    */
    public function setDriveItem($val)
    {
        $this->_propDict["driveItem"] = $val;
        return $this;
    }
    
    /**
    * Gets the listItem
    *
    * @return ListItem The listItem
    */
    public function getListItem()
    {
        if (array_key_exists("listItem", $this->_propDict)) {
            if (is_a($this->_propDict["listItem"], "Microsoft\Graph\Model\ListItem")) {
                return $this->_propDict["listItem"];
            } else {
                $this->_propDict["listItem"] = new ListItem($this->_propDict["listItem"]);
                return $this->_propDict["listItem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the listItem
    *
    * @param ListItem $val The listItem
    *
    * @return ItemActivity
    */
    public function setListItem($val)
    {
        $this->_propDict["listItem"] = $val;
        return $this;
    }
    
}