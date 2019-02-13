<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemActivity File
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
* ItemActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ItemActivity extends Entity
{
    /**
    * Gets the access
    *
    * @return AccessAction The access
    */
    public function getAccess()
    {
        if (array_key_exists("access", $this->_propDict)) {
            if (is_a($this->_propDict["access"], "Microsoft\Graph\Beta\Model\AccessAction")) {
                return $this->_propDict["access"];
            } else {
                $this->_propDict["access"] = new AccessAction($this->_propDict["access"]);
                return $this->_propDict["access"];
            }
        }
        return null;
    }
    
    /**
    * Sets the access
    *
    * @param AccessAction $val The access
    *
    * @return ItemActivity
    */
    public function setAccess($val)
    {
        $this->_propDict["access"] = $val;
        return $this;
    }
    
    /**
    * Gets the activityDateTime
    *
    * @return \DateTime The activityDateTime
    */
    public function getActivityDateTime()
    {
        if (array_key_exists("activityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["activityDateTime"], "\DateTime")) {
                return $this->_propDict["activityDateTime"];
            } else {
                $this->_propDict["activityDateTime"] = new \DateTime($this->_propDict["activityDateTime"]);
                return $this->_propDict["activityDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activityDateTime
    *
    * @param \DateTime $val The activityDateTime
    *
    * @return ItemActivity
    */
    public function setActivityDateTime($val)
    {
        $this->_propDict["activityDateTime"] = $val;
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
            if (is_a($this->_propDict["actor"], "Microsoft\Graph\Beta\Model\IdentitySet")) {
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
    * Gets the driveItem
    *
    * @return DriveItem The driveItem
    */
    public function getDriveItem()
    {
        if (array_key_exists("driveItem", $this->_propDict)) {
            if (is_a($this->_propDict["driveItem"], "Microsoft\Graph\Beta\Model\DriveItem")) {
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
    
}