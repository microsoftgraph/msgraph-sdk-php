<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ShiftItem File
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
* ShiftItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ShiftItem extends ScheduleEntity
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
    * @param string $val The value of the displayName
    *
    * @return ShiftItem
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the notes
    *
    * @return string The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notes
    *
    * @param string $val The value of the notes
    *
    * @return ShiftItem
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }

    /**
    * Gets the activities
    *
    * @return ShiftActivity The activities
    */
    public function getActivities()
    {
        if (array_key_exists("activities", $this->_propDict)) {
            if (is_a($this->_propDict["activities"], "Microsoft\Graph\Beta\Model\ShiftActivity")) {
                return $this->_propDict["activities"];
            } else {
                $this->_propDict["activities"] = new ShiftActivity($this->_propDict["activities"]);
                return $this->_propDict["activities"];
            }
        }
        return null;
    }

    /**
    * Sets the activities
    *
    * @param ShiftActivity $val The value to assign to the activities
    *
    * @return ShiftItem The ShiftItem
    */
    public function setActivities($val)
    {
        $this->_propDict["activities"] = $val;
         return $this;
    }
}
