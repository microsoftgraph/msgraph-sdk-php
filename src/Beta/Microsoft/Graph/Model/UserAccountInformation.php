<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserAccountInformation File
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
* UserAccountInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserAccountInformation extends ItemFacet
{
    /**
    * Gets the ageGroup
    *
    * @return string The ageGroup
    */
    public function getAgeGroup()
    {
        if (array_key_exists("ageGroup", $this->_propDict)) {
            return $this->_propDict["ageGroup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ageGroup
    *
    * @param string $val The ageGroup
    *
    * @return UserAccountInformation
    */
    public function setAgeGroup($val)
    {
        $this->_propDict["ageGroup"] = $val;
        return $this;
    }
    
    /**
    * Gets the countryCode
    *
    * @return string The countryCode
    */
    public function getCountryCode()
    {
        if (array_key_exists("countryCode", $this->_propDict)) {
            return $this->_propDict["countryCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the countryCode
    *
    * @param string $val The countryCode
    *
    * @return UserAccountInformation
    */
    public function setCountryCode($val)
    {
        $this->_propDict["countryCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferredLanguageTag
    *
    * @return LocaleInfo The preferredLanguageTag
    */
    public function getPreferredLanguageTag()
    {
        if (array_key_exists("preferredLanguageTag", $this->_propDict)) {
            if (is_a($this->_propDict["preferredLanguageTag"], "Beta\Microsoft\Graph\Model\LocaleInfo")) {
                return $this->_propDict["preferredLanguageTag"];
            } else {
                $this->_propDict["preferredLanguageTag"] = new LocaleInfo($this->_propDict["preferredLanguageTag"]);
                return $this->_propDict["preferredLanguageTag"];
            }
        }
        return null;
    }
    
    /**
    * Sets the preferredLanguageTag
    *
    * @param LocaleInfo $val The preferredLanguageTag
    *
    * @return UserAccountInformation
    */
    public function setPreferredLanguageTag($val)
    {
        $this->_propDict["preferredLanguageTag"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    *
    * @param string $val The userPrincipalName
    *
    * @return UserAccountInformation
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}