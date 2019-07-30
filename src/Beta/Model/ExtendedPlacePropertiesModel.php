<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExtendedPlacePropertiesModel File
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
* ExtendedPlacePropertiesModel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ExtendedPlacePropertiesModel extends Entity
{
    /**
    * Gets the priceRange
    *
    * @return string The priceRange
    */
    public function getPriceRange()
    {
        if (array_key_exists("priceRange", $this->_propDict)) {
            return $this->_propDict["priceRange"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priceRange
    *
    * @param string $val The value of the priceRange
    *
    * @return ExtendedPlacePropertiesModel
    */
    public function setPriceRange($val)
    {
        $this->_propDict["priceRange"] = $val;
        return $this;
    }
    /**
    * Gets the menuUrl
    *
    * @return string The menuUrl
    */
    public function getMenuUrl()
    {
        if (array_key_exists("menuUrl", $this->_propDict)) {
            return $this->_propDict["menuUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the menuUrl
    *
    * @param string $val The value of the menuUrl
    *
    * @return ExtendedPlacePropertiesModel
    */
    public function setMenuUrl($val)
    {
        $this->_propDict["menuUrl"] = $val;
        return $this;
    }
    /**
    * Gets the businessUrl
    *
    * @return string The businessUrl
    */
    public function getBusinessUrl()
    {
        if (array_key_exists("businessUrl", $this->_propDict)) {
            return $this->_propDict["businessUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the businessUrl
    *
    * @param string $val The value of the businessUrl
    *
    * @return ExtendedPlacePropertiesModel
    */
    public function setBusinessUrl($val)
    {
        $this->_propDict["businessUrl"] = $val;
        return $this;
    }
    /**
    * Gets the formattedAddress
    *
    * @return string The formattedAddress
    */
    public function getFormattedAddress()
    {
        if (array_key_exists("formattedAddress", $this->_propDict)) {
            return $this->_propDict["formattedAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the formattedAddress
    *
    * @param string $val The value of the formattedAddress
    *
    * @return ExtendedPlacePropertiesModel
    */
    public function setFormattedAddress($val)
    {
        $this->_propDict["formattedAddress"] = $val;
        return $this;
    }

    /**
    * Gets the openingHoursSpecifications
    *
    * @return OpeningHoursSpecification The openingHoursSpecifications
    */
    public function getOpeningHoursSpecifications()
    {
        if (array_key_exists("openingHoursSpecifications", $this->_propDict)) {
            if (is_a($this->_propDict["openingHoursSpecifications"], "Microsoft\Graph\Beta\Model\OpeningHoursSpecification")) {
                return $this->_propDict["openingHoursSpecifications"];
            } else {
                $this->_propDict["openingHoursSpecifications"] = new OpeningHoursSpecification($this->_propDict["openingHoursSpecifications"]);
                return $this->_propDict["openingHoursSpecifications"];
            }
        }
        return null;
    }

    /**
    * Sets the openingHoursSpecifications
    *
    * @param OpeningHoursSpecification $val The value to assign to the openingHoursSpecifications
    *
    * @return ExtendedPlacePropertiesModel The ExtendedPlacePropertiesModel
    */
    public function setOpeningHoursSpecifications($val)
    {
        $this->_propDict["openingHoursSpecifications"] = $val;
         return $this;
    }
    /**
    * Gets the timeZone
    *
    * @return string The timeZone
    */
    public function getTimeZone()
    {
        if (array_key_exists("timeZone", $this->_propDict)) {
            return $this->_propDict["timeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeZone
    *
    * @param string $val The value of the timeZone
    *
    * @return ExtendedPlacePropertiesModel
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
        return $this;
    }
}
