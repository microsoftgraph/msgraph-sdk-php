<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Place File
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
* Place class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Place extends Entity
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
    * @return Place
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the geoCoordinates
    *
    * @return OutlookGeoCoordinates The geoCoordinates
    */
    public function getGeoCoordinates()
    {
        if (array_key_exists("geoCoordinates", $this->_propDict)) {
            if (is_a($this->_propDict["geoCoordinates"], "Microsoft\Graph\Beta\Model\OutlookGeoCoordinates")) {
                return $this->_propDict["geoCoordinates"];
            } else {
                $this->_propDict["geoCoordinates"] = new OutlookGeoCoordinates($this->_propDict["geoCoordinates"]);
                return $this->_propDict["geoCoordinates"];
            }
        }
        return null;
    }
    
    /**
    * Sets the geoCoordinates
    *
    * @param OutlookGeoCoordinates $val The geoCoordinates
    *
    * @return Place
    */
    public function setGeoCoordinates($val)
    {
        $this->_propDict["geoCoordinates"] = $val;
        return $this;
    }
    
    /**
    * Gets the phone
    *
    * @return string The phone
    */
    public function getPhone()
    {
        if (array_key_exists("phone", $this->_propDict)) {
            return $this->_propDict["phone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the phone
    *
    * @param string $val The phone
    *
    * @return Place
    */
    public function setPhone($val)
    {
        $this->_propDict["phone"] = $val;
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
            if (is_a($this->_propDict["address"], "Microsoft\Graph\Beta\Model\PhysicalAddress")) {
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
    * @param PhysicalAddress $val The address
    *
    * @return Place
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    
}