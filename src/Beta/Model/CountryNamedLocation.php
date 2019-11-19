<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CountryNamedLocation File
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
* CountryNamedLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CountryNamedLocation extends NamedLocation
{
    /**
    * Gets the countriesAndRegions
    *
    * @return string The countriesAndRegions
    */
    public function getCountriesAndRegions()
    {
        if (array_key_exists("countriesAndRegions", $this->_propDict)) {
            return $this->_propDict["countriesAndRegions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the countriesAndRegions
    *
    * @param string $val The countriesAndRegions
    *
    * @return CountryNamedLocation
    */
    public function setCountriesAndRegions($val)
    {
        $this->_propDict["countriesAndRegions"] = $val;
        return $this;
    }
    
    /**
    * Gets the includeUnknownCountriesAndRegions
    *
    * @return bool The includeUnknownCountriesAndRegions
    */
    public function getIncludeUnknownCountriesAndRegions()
    {
        if (array_key_exists("includeUnknownCountriesAndRegions", $this->_propDict)) {
            return $this->_propDict["includeUnknownCountriesAndRegions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the includeUnknownCountriesAndRegions
    *
    * @param bool $val The includeUnknownCountriesAndRegions
    *
    * @return CountryNamedLocation
    */
    public function setIncludeUnknownCountriesAndRegions($val)
    {
        $this->_propDict["includeUnknownCountriesAndRegions"] = boolval($val);
        return $this;
    }
    
}