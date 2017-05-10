<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PhysicalAddress File
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
* PhysicalAddress class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PhysicalAddress extends Entity
{
    /**
    * Gets the street
    *
    * @return string The street
    */
    public function getStreet()
    {
        if (array_key_exists("street", $this->_propDict)) {
            return $this->_propDict["street"];
        } else {
            return null;
        }
    }

    /**
    * Sets the street
    *
    * @param string $val The value of the street
    *
    * @return PhysicalAddress
    */
    public function setStreet($val)
    {
        $this->_propDict["street"] = $val;
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
    * @return PhysicalAddress
    */
    public function setCity($val)
    {
        $this->_propDict["city"] = $val;
        return $this;
    }
    /**
    * Gets the state
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    *
    * @param string $val The value of the state
    *
    * @return PhysicalAddress
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
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
    * @return PhysicalAddress
    */
    public function setCountryOrRegion($val)
    {
        $this->_propDict["countryOrRegion"] = $val;
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
    * @return PhysicalAddress
    */
    public function setPostalCode($val)
    {
        $this->_propDict["postalCode"] = $val;
        return $this;
    }
}
