<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Location File
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
* Location class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Location extends Entity
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
    * @return Location
    */
    public function setDisplayName($val)
    {
        $this->_propDict["display_name"] = $val;
        return $this;
    }
    /**
    * Gets the locationEmailAddress
    *
    * @return string The locationEmailAddress
    */
    public function getLocationEmailAddress()
    {
        if (array_key_exists("locationEmailAddress", $this->_propDict)) {
            return $this->_propDict["locationEmailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locationEmailAddress
    *
    * @param string $val The value of the locationEmailAddress
    *
    * @return Location
    */
    public function setLocationEmailAddress($val)
    {
        $this->_propDict["location_email_address"] = $val;
        return $this;
    }

    /**
    * Gets the address
    *
    * @return PhysicalAddress The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            if (is_a($this->_propDict["address"], "PhysicalAddress")) {
                return $this->_propDict["address"];
            } else {
                $this->_propDict["address"] = new PhysicalAddress($this->_propDict["address"]);
                return $this->_propDict["address"];
            }
        }
        return null;
    }

    /**
    * Sets the address
    *
    * @param PhysicalAddress $val The value to assign to the address
    *
    * @return Location The Location
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
         return $this;
    }
}
