<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ParentalControlSettings File
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
* ParentalControlSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ParentalControlSettings extends Entity
{
    /**
    * Gets the countriesBlockedForMinors
    *
    * @return string The countriesBlockedForMinors
    */
    public function getCountriesBlockedForMinors()
    {
        if (array_key_exists("countriesBlockedForMinors", $this->_propDict)) {
            return $this->_propDict["countriesBlockedForMinors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countriesBlockedForMinors
    *
    * @param string $val The value of the countriesBlockedForMinors
    *
    * @return ParentalControlSettings
    */
    public function setCountriesBlockedForMinors($val)
    {
        $this->_propDict["countriesBlockedForMinors"] = $val;
        return $this;
    }
    /**
    * Gets the legalAgeGroupRule
    *
    * @return string The legalAgeGroupRule
    */
    public function getLegalAgeGroupRule()
    {
        if (array_key_exists("legalAgeGroupRule", $this->_propDict)) {
            return $this->_propDict["legalAgeGroupRule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the legalAgeGroupRule
    *
    * @param string $val The value of the legalAgeGroupRule
    *
    * @return ParentalControlSettings
    */
    public function setLegalAgeGroupRule($val)
    {
        $this->_propDict["legalAgeGroupRule"] = $val;
        return $this;
    }
}
