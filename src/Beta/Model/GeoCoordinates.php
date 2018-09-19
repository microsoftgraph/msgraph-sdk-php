<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GeoCoordinates File
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
* GeoCoordinates class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class GeoCoordinates extends Entity
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
    * @return GeoCoordinates
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
    * @return GeoCoordinates
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
    * @return GeoCoordinates
    */
    public function setLongitude($val)
    {
        $this->_propDict["longitude"] = $val;
        return $this;
    }
}
