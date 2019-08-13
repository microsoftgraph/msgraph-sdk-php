<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Room File
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
* Room class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Room extends Place
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
    * @return Room
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the nickname
    *
    * @return string The nickname
    */
    public function getNickname()
    {
        if (array_key_exists("nickname", $this->_propDict)) {
            return $this->_propDict["nickname"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nickname
    *
    * @param string $val The nickname
    *
    * @return Room
    */
    public function setNickname($val)
    {
        $this->_propDict["nickname"] = $val;
        return $this;
    }
    
    /**
    * Gets the building
    *
    * @return string The building
    */
    public function getBuilding()
    {
        if (array_key_exists("building", $this->_propDict)) {
            return $this->_propDict["building"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the building
    *
    * @param string $val The building
    *
    * @return Room
    */
    public function setBuilding($val)
    {
        $this->_propDict["building"] = $val;
        return $this;
    }
    
    /**
    * Gets the floorNumber
    *
    * @return int The floorNumber
    */
    public function getFloorNumber()
    {
        if (array_key_exists("floorNumber", $this->_propDict)) {
            return $this->_propDict["floorNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the floorNumber
    *
    * @param int $val The floorNumber
    *
    * @return Room
    */
    public function setFloorNumber($val)
    {
        $this->_propDict["floorNumber"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the label
    *
    * @return string The label
    */
    public function getLabel()
    {
        if (array_key_exists("label", $this->_propDict)) {
            return $this->_propDict["label"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the label
    *
    * @param string $val The label
    *
    * @return Room
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
        return $this;
    }
    
    /**
    * Gets the capacity
    *
    * @return int The capacity
    */
    public function getCapacity()
    {
        if (array_key_exists("capacity", $this->_propDict)) {
            return $this->_propDict["capacity"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the capacity
    *
    * @param int $val The capacity
    *
    * @return Room
    */
    public function setCapacity($val)
    {
        $this->_propDict["capacity"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the bookingType
    *
    * @return BookingType The bookingType
    */
    public function getBookingType()
    {
        if (array_key_exists("bookingType", $this->_propDict)) {
            if (is_a($this->_propDict["bookingType"], "Microsoft\Graph\Beta\Model\BookingType")) {
                return $this->_propDict["bookingType"];
            } else {
                $this->_propDict["bookingType"] = new BookingType($this->_propDict["bookingType"]);
                return $this->_propDict["bookingType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bookingType
    *
    * @param BookingType $val The bookingType
    *
    * @return Room
    */
    public function setBookingType($val)
    {
        $this->_propDict["bookingType"] = $val;
        return $this;
    }
    
    /**
    * Gets the audioDeviceName
    *
    * @return string The audioDeviceName
    */
    public function getAudioDeviceName()
    {
        if (array_key_exists("audioDeviceName", $this->_propDict)) {
            return $this->_propDict["audioDeviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the audioDeviceName
    *
    * @param string $val The audioDeviceName
    *
    * @return Room
    */
    public function setAudioDeviceName($val)
    {
        $this->_propDict["audioDeviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the videoDeviceName
    *
    * @return string The videoDeviceName
    */
    public function getVideoDeviceName()
    {
        if (array_key_exists("videoDeviceName", $this->_propDict)) {
            return $this->_propDict["videoDeviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the videoDeviceName
    *
    * @param string $val The videoDeviceName
    *
    * @return Room
    */
    public function setVideoDeviceName($val)
    {
        $this->_propDict["videoDeviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayDeviceName
    *
    * @return string The displayDeviceName
    */
    public function getDisplayDeviceName()
    {
        if (array_key_exists("displayDeviceName", $this->_propDict)) {
            return $this->_propDict["displayDeviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayDeviceName
    *
    * @param string $val The displayDeviceName
    *
    * @return Room
    */
    public function setDisplayDeviceName($val)
    {
        $this->_propDict["displayDeviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isWheelChairAccessible
    *
    * @return bool The isWheelChairAccessible
    */
    public function getIsWheelChairAccessible()
    {
        if (array_key_exists("isWheelChairAccessible", $this->_propDict)) {
            return $this->_propDict["isWheelChairAccessible"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isWheelChairAccessible
    *
    * @param bool $val The isWheelChairAccessible
    *
    * @return Room
    */
    public function setIsWheelChairAccessible($val)
    {
        $this->_propDict["isWheelChairAccessible"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the tags
    *
    * @return string The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tags
    *
    * @param string $val The tags
    *
    * @return Room
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
}