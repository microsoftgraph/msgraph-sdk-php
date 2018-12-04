<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutlookGeoCoordinates File
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
* OutlookGeoCoordinates class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OutlookGeoCoordinates extends Entity
{
    /**
    * Gets the altitude
    *
    * @return float The altitude
    */
    public function getAltitude()
    {
        if (array_key_exists("altitude", $this->_propDict)) {
            return $this->_propDict["altitude"];
        } else {
            return null;
        }
    }

    /**
    * Sets the altitude
    *
    * @param float $val The value of the altitude
    *
    * @return OutlookGeoCoordinates
    */
    public function setAltitude($val)
    {
        $this->_propDict["altitude"] = $val;
        return $this;
    }
    /**
    * Gets the latitude
    *
    * @return float The latitude
    */
    public function getLatitude()
    {
        if (array_key_exists("latitude", $this->_propDict)) {
            return $this->_propDict["latitude"];
        } else {
            return null;
        }
    }

    /**
    * Sets the latitude
    *
    * @param float $val The value of the latitude
    *
    * @return OutlookGeoCoordinates
    */
    public function setLatitude($val)
    {
        $this->_propDict["latitude"] = $val;
        return $this;
    }
    /**
    * Gets the longitude
    *
    * @return float The longitude
    */
    public function getLongitude()
    {
        if (array_key_exists("longitude", $this->_propDict)) {
            return $this->_propDict["longitude"];
        } else {
            return null;
        }
    }

    /**
    * Sets the longitude
    *
    * @param float $val The value of the longitude
    *
    * @return OutlookGeoCoordinates
    */
    public function setLongitude($val)
    {
        $this->_propDict["longitude"] = $val;
        return $this;
    }
    /**
    * Gets the accuracy
    *
    * @return float The accuracy
    */
    public function getAccuracy()
    {
        if (array_key_exists("accuracy", $this->_propDict)) {
            return $this->_propDict["accuracy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accuracy
    *
    * @param float $val The value of the accuracy
    *
    * @return OutlookGeoCoordinates
    */
    public function setAccuracy($val)
    {
        $this->_propDict["accuracy"] = $val;
        return $this;
    }
    /**
    * Gets the altitudeAccuracy
    *
    * @return float The altitudeAccuracy
    */
    public function getAltitudeAccuracy()
    {
        if (array_key_exists("altitudeAccuracy", $this->_propDict)) {
            return $this->_propDict["altitudeAccuracy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the altitudeAccuracy
    *
    * @param float $val The value of the altitudeAccuracy
    *
    * @return OutlookGeoCoordinates
    */
    public function setAltitudeAccuracy($val)
    {
        $this->_propDict["altitudeAccuracy"] = $val;
        return $this;
    }
}
