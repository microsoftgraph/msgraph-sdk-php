<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResourcePropertiesModel File
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
* ResourcePropertiesModel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ResourcePropertiesModel extends Entity
{
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return ResourcePropertiesModel
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
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
    * @param string $val The value of the label
    *
    * @return ResourcePropertiesModel
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
        return $this;
    }
    /**
    * Gets the type
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    *
    * @param string $val The value of the type
    *
    * @return ResourcePropertiesModel
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
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
    * @param int $val The value of the capacity
    *
    * @return ResourcePropertiesModel
    */
    public function setCapacity($val)
    {
        $this->_propDict["capacity"] = $val;
        return $this;
    }
    /**
    * Gets the isManaged
    *
    * @return bool The isManaged
    */
    public function getIsManaged()
    {
        if (array_key_exists("isManaged", $this->_propDict)) {
            return $this->_propDict["isManaged"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isManaged
    *
    * @param bool $val The value of the isManaged
    *
    * @return ResourcePropertiesModel
    */
    public function setIsManaged($val)
    {
        $this->_propDict["isManaged"] = $val;
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
    * @param BookingType $val The value to assign to the bookingType
    *
    * @return ResourcePropertiesModel The ResourcePropertiesModel
    */
    public function setBookingType($val)
    {
        $this->_propDict["bookingType"] = $val;
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
    * @param string $val The value of the building
    *
    * @return ResourcePropertiesModel
    */
    public function setBuilding($val)
    {
        $this->_propDict["building"] = $val;
        return $this;
    }
    /**
    * Gets the floor
    *
    * @return string The floor
    */
    public function getFloor()
    {
        if (array_key_exists("floor", $this->_propDict)) {
            return $this->_propDict["floor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the floor
    *
    * @param string $val The value of the floor
    *
    * @return ResourcePropertiesModel
    */
    public function setFloor($val)
    {
        $this->_propDict["floor"] = $val;
        return $this;
    }
}
