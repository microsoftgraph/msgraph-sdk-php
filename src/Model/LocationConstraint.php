<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocationConstraint File
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
* LocationConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class LocationConstraint extends Entity
{
    /**
    * Gets the isRequired
    *
    * @return bool The isRequired
    */
    public function getIsRequired()
    {
        if (array_key_exists("isRequired", $this->_propDict)) {
            return $this->_propDict["isRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRequired
    *
    * @param bool $val The value of the isRequired
    *
    * @return LocationConstraint
    */
    public function setIsRequired($val)
    {
        $this->_propDict["isRequired"] = $val;
        return $this;
    }

    /**
    * Gets the locations
    *
    * @return LocationConstraintItem The locations
    */
    public function getLocations()
    {
        if (array_key_exists("locations", $this->_propDict)) {
            if (is_a($this->_propDict["locations"], "LocationConstraintItem")) {
                return $this->_propDict["locations"];
            } else {
                $this->_propDict["locations"] = new LocationConstraintItem($this->_propDict["locations"]);
                return $this->_propDict["locations"];
            }
        }
        return null;
    }

    /**
    * Sets the locations
    *
    * @param LocationConstraintItem $val The value to assign to the locations
    *
    * @return LocationConstraint The LocationConstraint
    */
    public function setLocations($val)
    {
        $this->_propDict["locations"] = $val;
         return $this;
    }
    /**
    * Gets the suggestLocation
    *
    * @return bool The suggestLocation
    */
    public function getSuggestLocation()
    {
        if (array_key_exists("suggestLocation", $this->_propDict)) {
            return $this->_propDict["suggestLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the suggestLocation
    *
    * @param bool $val The value of the suggestLocation
    *
    * @return LocationConstraint
    */
    public function setSuggestLocation($val)
    {
        $this->_propDict["suggestLocation"] = $val;
        return $this;
    }
}
