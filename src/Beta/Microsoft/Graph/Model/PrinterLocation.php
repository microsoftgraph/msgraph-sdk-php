<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterLocation File
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
* PrinterLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterLocation extends Entity
{
    /**
    * Gets the altitudeInMeters
    *
    * @return int The altitudeInMeters
    */
    public function getAltitudeInMeters()
    {
        if (array_key_exists("altitudeInMeters", $this->_propDict)) {
            return $this->_propDict["altitudeInMeters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the altitudeInMeters
    *
    * @param int $val The value of the altitudeInMeters
    *
    * @return PrinterLocation
    */
    public function setAltitudeInMeters($val)
    {
        $this->_propDict["altitudeInMeters"] = $val;
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
    * @return PrinterLocation
    */
    public function setBuilding($val)
    {
        $this->_propDict["building"] = $val;
        return $this;
    }
    /**
    * Gets the city
    *
    * @return string The city
    */
    public function getCity()
    {
        if (array_key_exists("city", $this->_propDict)) {
            return $this->_propDict["city"];
        } else {
            return null;
        }
    }

    /**
    * Sets the city
    *
    * @param string $val The value of the city
    *
    * @return PrinterLocation
    */
    public function setCity($val)
    {
        $this->_propDict["city"] = $val;
        return $this;
    }
    /**
    * Gets the countryOrRegion
    *
    * @return string The countryOrRegion
    */
    public function getCountryOrRegion()
    {
        if (array_key_exists("countryOrRegion", $this->_propDict)) {
            return $this->_propDict["countryOrRegion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countryOrRegion
    *
    * @param string $val The value of the countryOrRegion
    *
    * @return PrinterLocation
    */
    public function setCountryOrRegion($val)
    {
        $this->_propDict["countryOrRegion"] = $val;
        return $this;
    }
    /**
    * Gets the floorDescription
    *
    * @return string The floorDescription
    */
    public function getFloorDescription()
    {
        if (array_key_exists("floorDescription", $this->_propDict)) {
            return $this->_propDict["floorDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the floorDescription
    *
    * @param string $val The value of the floorDescription
    *
    * @return PrinterLocation
    */
    public function setFloorDescription($val)
    {
        $this->_propDict["floorDescription"] = $val;
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
    * @param int $val The value of the floorNumber
    *
    * @return PrinterLocation
    */
    public function setFloorNumber($val)
    {
        $this->_propDict["floorNumber"] = $val;
        return $this;
    }

    /**
    * Gets the latitude
    *
    * @return Single The latitude
    */
    public function getLatitude()
    {
        if (array_key_exists("latitude", $this->_propDict)) {
            if (is_a($this->_propDict["latitude"], "Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["latitude"];
            } else {
                $this->_propDict["latitude"] = new Single($this->_propDict["latitude"]);
                return $this->_propDict["latitude"];
            }
        }
        return null;
    }

    /**
    * Sets the latitude
    *
    * @param Single $val The value to assign to the latitude
    *
    * @return PrinterLocation The PrinterLocation
    */
    public function setLatitude($val)
    {
        $this->_propDict["latitude"] = $val;
         return $this;
    }

    /**
    * Gets the longitude
    *
    * @return Single The longitude
    */
    public function getLongitude()
    {
        if (array_key_exists("longitude", $this->_propDict)) {
            if (is_a($this->_propDict["longitude"], "Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["longitude"];
            } else {
                $this->_propDict["longitude"] = new Single($this->_propDict["longitude"]);
                return $this->_propDict["longitude"];
            }
        }
        return null;
    }

    /**
    * Sets the longitude
    *
    * @param Single $val The value to assign to the longitude
    *
    * @return PrinterLocation The PrinterLocation
    */
    public function setLongitude($val)
    {
        $this->_propDict["longitude"] = $val;
         return $this;
    }
    /**
    * Gets the organization
    *
    * @return string The organization
    */
    public function getOrganization()
    {
        if (array_key_exists("organization", $this->_propDict)) {
            return $this->_propDict["organization"];
        } else {
            return null;
        }
    }

    /**
    * Sets the organization
    *
    * @param string $val The value of the organization
    *
    * @return PrinterLocation
    */
    public function setOrganization($val)
    {
        $this->_propDict["organization"] = $val;
        return $this;
    }
    /**
    * Gets the postalCode
    *
    * @return string The postalCode
    */
    public function getPostalCode()
    {
        if (array_key_exists("postalCode", $this->_propDict)) {
            return $this->_propDict["postalCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the postalCode
    *
    * @param string $val The value of the postalCode
    *
    * @return PrinterLocation
    */
    public function setPostalCode($val)
    {
        $this->_propDict["postalCode"] = $val;
        return $this;
    }
    /**
    * Gets the roomDescription
    *
    * @return string The roomDescription
    */
    public function getRoomDescription()
    {
        if (array_key_exists("roomDescription", $this->_propDict)) {
            return $this->_propDict["roomDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roomDescription
    *
    * @param string $val The value of the roomDescription
    *
    * @return PrinterLocation
    */
    public function setRoomDescription($val)
    {
        $this->_propDict["roomDescription"] = $val;
        return $this;
    }
    /**
    * Gets the roomNumber
    *
    * @return int The roomNumber
    */
    public function getRoomNumber()
    {
        if (array_key_exists("roomNumber", $this->_propDict)) {
            return $this->_propDict["roomNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roomNumber
    *
    * @param int $val The value of the roomNumber
    *
    * @return PrinterLocation
    */
    public function setRoomNumber($val)
    {
        $this->_propDict["roomNumber"] = $val;
        return $this;
    }
    /**
    * Gets the site
    *
    * @return string The site
    */
    public function getSite()
    {
        if (array_key_exists("site", $this->_propDict)) {
            return $this->_propDict["site"];
        } else {
            return null;
        }
    }

    /**
    * Sets the site
    *
    * @param string $val The value of the site
    *
    * @return PrinterLocation
    */
    public function setSite($val)
    {
        $this->_propDict["site"] = $val;
        return $this;
    }
    /**
    * Gets the stateOrProvince
    *
    * @return string The stateOrProvince
    */
    public function getStateOrProvince()
    {
        if (array_key_exists("stateOrProvince", $this->_propDict)) {
            return $this->_propDict["stateOrProvince"];
        } else {
            return null;
        }
    }

    /**
    * Sets the stateOrProvince
    *
    * @param string $val The value of the stateOrProvince
    *
    * @return PrinterLocation
    */
    public function setStateOrProvince($val)
    {
        $this->_propDict["stateOrProvince"] = $val;
        return $this;
    }
    /**
    * Gets the streetAddress
    *
    * @return string The streetAddress
    */
    public function getStreetAddress()
    {
        if (array_key_exists("streetAddress", $this->_propDict)) {
            return $this->_propDict["streetAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the streetAddress
    *
    * @param string $val The value of the streetAddress
    *
    * @return PrinterLocation
    */
    public function setStreetAddress($val)
    {
        $this->_propDict["streetAddress"] = $val;
        return $this;
    }
    /**
    * Gets the subdivision
    *
    * @return string The subdivision
    */
    public function getSubdivision()
    {
        if (array_key_exists("subdivision", $this->_propDict)) {
            return $this->_propDict["subdivision"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subdivision
    *
    * @param string $val The value of the subdivision
    *
    * @return PrinterLocation
    */
    public function setSubdivision($val)
    {
        $this->_propDict["subdivision"] = $val;
        return $this;
    }
    /**
    * Gets the subunit
    *
    * @return string The subunit
    */
    public function getSubunit()
    {
        if (array_key_exists("subunit", $this->_propDict)) {
            return $this->_propDict["subunit"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subunit
    *
    * @param string $val The value of the subunit
    *
    * @return PrinterLocation
    */
    public function setSubunit($val)
    {
        $this->_propDict["subunit"] = $val;
        return $this;
    }
}
