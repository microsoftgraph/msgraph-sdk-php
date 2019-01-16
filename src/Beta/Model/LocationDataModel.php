<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocationDataModel File
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
* LocationDataModel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class LocationDataModel extends Entity
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
    * @return LocationDataModel
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @return LocationDataModel
    */
    public function setLocationEmailAddress($val)
    {
        $this->_propDict["locationEmailAddress"] = $val;
        return $this;
    }

    /**
    * Gets the address
    *
    * @return PostalAddressGriffin The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            if (is_a($this->_propDict["address"], "Microsoft\Graph\Model\PostalAddressGriffin")) {
                return $this->_propDict["address"];
            } else {
                $this->_propDict["address"] = new PostalAddressGriffin($this->_propDict["address"]);
                return $this->_propDict["address"];
            }
        }
        return null;
    }

    /**
    * Sets the address
    *
    * @param PostalAddressGriffin $val The value to assign to the address
    *
    * @return LocationDataModel The LocationDataModel
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
         return $this;
    }
    /**
    * Gets the locationUri
    *
    * @return string The locationUri
    */
    public function getLocationUri()
    {
        if (array_key_exists("locationUri", $this->_propDict)) {
            return $this->_propDict["locationUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locationUri
    *
    * @param string $val The value of the locationUri
    *
    * @return LocationDataModel
    */
    public function setLocationUri($val)
    {
        $this->_propDict["locationUri"] = $val;
        return $this;
    }

    /**
    * Gets the coordinates
    *
    * @return GeoCoordinatesGriffin The coordinates
    */
    public function getCoordinates()
    {
        if (array_key_exists("coordinates", $this->_propDict)) {
            if (is_a($this->_propDict["coordinates"], "Microsoft\Graph\Model\GeoCoordinatesGriffin")) {
                return $this->_propDict["coordinates"];
            } else {
                $this->_propDict["coordinates"] = new GeoCoordinatesGriffin($this->_propDict["coordinates"]);
                return $this->_propDict["coordinates"];
            }
        }
        return null;
    }

    /**
    * Sets the coordinates
    *
    * @param GeoCoordinatesGriffin $val The value to assign to the coordinates
    *
    * @return LocationDataModel The LocationDataModel
    */
    public function setCoordinates($val)
    {
        $this->_propDict["coordinates"] = $val;
         return $this;
    }
}
