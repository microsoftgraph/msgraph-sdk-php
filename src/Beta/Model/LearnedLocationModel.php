<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LearnedLocationModel File
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
* LearnedLocationModel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class LearnedLocationModel extends Entity
{

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
    * @param PhysicalAddress $val The value to assign to the address
    *
    * @return LearnedLocationModel The LearnedLocationModel
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
         return $this;
    }

    /**
    * Gets the coordinates
    *
    * @return OutlookGeoCoordinates The coordinates
    */
    public function getCoordinates()
    {
        if (array_key_exists("coordinates", $this->_propDict)) {
            if (is_a($this->_propDict["coordinates"], "Microsoft\Graph\Beta\Model\OutlookGeoCoordinates")) {
                return $this->_propDict["coordinates"];
            } else {
                $this->_propDict["coordinates"] = new OutlookGeoCoordinates($this->_propDict["coordinates"]);
                return $this->_propDict["coordinates"];
            }
        }
        return null;
    }

    /**
    * Sets the coordinates
    *
    * @param OutlookGeoCoordinates $val The value to assign to the coordinates
    *
    * @return LearnedLocationModel The LearnedLocationModel
    */
    public function setCoordinates($val)
    {
        $this->_propDict["coordinates"] = $val;
         return $this;
    }
}
