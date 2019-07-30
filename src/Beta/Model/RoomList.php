<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoomList File
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
* RoomList class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RoomList extends Place
{
    /**
    * Gets the emailAddress
    *
    * @return string The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            return $this->_propDict["emailAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailAddress
    *
    * @param string $val The emailAddress
    *
    * @return RoomList
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rooms
     *
     * @return array The rooms
     */
    public function getRooms()
    {
        if (array_key_exists("rooms", $this->_propDict)) {
           return $this->_propDict["rooms"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rooms
    *
    * @param Room $val The rooms
    *
    * @return RoomList
    */
    public function setRooms($val)
    {
		$this->_propDict["rooms"] = $val;
        return $this;
    }
    
}