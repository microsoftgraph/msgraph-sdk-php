<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Person File
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
* Person class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Person extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return Person
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the givenName
    *
    * @return string The givenName
    */
    public function getGivenName()
    {
        if (array_key_exists("givenName", $this->_propDict)) {
            return $this->_propDict["givenName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the givenName
    *
    * @param string $val The givenName
    *
    * @return Person
    */
    public function setGivenName($val)
    {
        $this->_propDict["givenName"] = $val;
        return $this;
    }
    
    /**
    * Gets the surname
    *
    * @return string The surname
    */
    public function getSurname()
    {
        if (array_key_exists("surname", $this->_propDict)) {
            return $this->_propDict["surname"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the surname
    *
    * @param string $val The surname
    *
    * @return Person
    */
    public function setSurname($val)
    {
        $this->_propDict["surname"] = $val;
        return $this;
    }
    
    /**
    * Gets the birthday
    *
    * @return string The birthday
    */
    public function getBirthday()
    {
        if (array_key_exists("birthday", $this->_propDict)) {
            return $this->_propDict["birthday"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the birthday
    *
    * @param string $val The birthday
    *
    * @return Person
    */
    public function setBirthday($val)
    {
        $this->_propDict["birthday"] = $val;
        return $this;
    }
    
    /**
    * Gets the personNotes
    *
    * @return string The personNotes
    */
    public function getPersonNotes()
    {
        if (array_key_exists("personNotes", $this->_propDict)) {
            return $this->_propDict["personNotes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the personNotes
    *
    * @param string $val The personNotes
    *
    * @return Person
    */
    public function setPersonNotes($val)
    {
        $this->_propDict["personNotes"] = $val;
        return $this;
    }
    
    /**
    * Gets the isFavorite
    *
    * @return bool The isFavorite
    */
    public function getIsFavorite()
    {
        if (array_key_exists("isFavorite", $this->_propDict)) {
            return $this->_propDict["isFavorite"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isFavorite
    *
    * @param bool $val The isFavorite
    *
    * @return Person
    */
    public function setIsFavorite($val)
    {
        $this->_propDict["isFavorite"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the scoredEmailAddresses
     *
     * @return array The scoredEmailAddresses
     */
    public function getScoredEmailAddresses()
    {
        if (array_key_exists("scoredEmailAddresses", $this->_propDict)) {
           return $this->_propDict["scoredEmailAddresses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the scoredEmailAddresses
    *
    * @param ScoredEmailAddress $val The scoredEmailAddresses
    *
    * @return Person
    */
    public function setScoredEmailAddresses($val)
    {
		$this->_propDict["scoredEmailAddresses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the phones
     *
     * @return array The phones
     */
    public function getPhones()
    {
        if (array_key_exists("phones", $this->_propDict)) {
           return $this->_propDict["phones"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the phones
    *
    * @param Phone $val The phones
    *
    * @return Person
    */
    public function setPhones($val)
    {
		$this->_propDict["phones"] = $val;
        return $this;
    }
    

     /** 
     * Gets the postalAddresses
     *
     * @return array The postalAddresses
     */
    public function getPostalAddresses()
    {
        if (array_key_exists("postalAddresses", $this->_propDict)) {
           return $this->_propDict["postalAddresses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the postalAddresses
    *
    * @param Location $val The postalAddresses
    *
    * @return Person
    */
    public function setPostalAddresses($val)
    {
		$this->_propDict["postalAddresses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the websites
     *
     * @return array The websites
     */
    public function getWebsites()
    {
        if (array_key_exists("websites", $this->_propDict)) {
           return $this->_propDict["websites"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the websites
    *
    * @param Website $val The websites
    *
    * @return Person
    */
    public function setWebsites($val)
    {
		$this->_propDict["websites"] = $val;
        return $this;
    }
    
    /**
    * Gets the jobTitle
    *
    * @return string The jobTitle
    */
    public function getJobTitle()
    {
        if (array_key_exists("jobTitle", $this->_propDict)) {
            return $this->_propDict["jobTitle"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the jobTitle
    *
    * @param string $val The jobTitle
    *
    * @return Person
    */
    public function setJobTitle($val)
    {
        $this->_propDict["jobTitle"] = $val;
        return $this;
    }
    
    /**
    * Gets the companyName
    *
    * @return string The companyName
    */
    public function getCompanyName()
    {
        if (array_key_exists("companyName", $this->_propDict)) {
            return $this->_propDict["companyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the companyName
    *
    * @param string $val The companyName
    *
    * @return Person
    */
    public function setCompanyName($val)
    {
        $this->_propDict["companyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the yomiCompany
    *
    * @return string The yomiCompany
    */
    public function getYomiCompany()
    {
        if (array_key_exists("yomiCompany", $this->_propDict)) {
            return $this->_propDict["yomiCompany"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yomiCompany
    *
    * @param string $val The yomiCompany
    *
    * @return Person
    */
    public function setYomiCompany($val)
    {
        $this->_propDict["yomiCompany"] = $val;
        return $this;
    }
    
    /**
    * Gets the department
    *
    * @return string The department
    */
    public function getDepartment()
    {
        if (array_key_exists("department", $this->_propDict)) {
            return $this->_propDict["department"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the department
    *
    * @param string $val The department
    *
    * @return Person
    */
    public function setDepartment($val)
    {
        $this->_propDict["department"] = $val;
        return $this;
    }
    
    /**
    * Gets the officeLocation
    *
    * @return string The officeLocation
    */
    public function getOfficeLocation()
    {
        if (array_key_exists("officeLocation", $this->_propDict)) {
            return $this->_propDict["officeLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the officeLocation
    *
    * @param string $val The officeLocation
    *
    * @return Person
    */
    public function setOfficeLocation($val)
    {
        $this->_propDict["officeLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the profession
    *
    * @return string The profession
    */
    public function getProfession()
    {
        if (array_key_exists("profession", $this->_propDict)) {
            return $this->_propDict["profession"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the profession
    *
    * @param string $val The profession
    *
    * @return Person
    */
    public function setProfession($val)
    {
        $this->_propDict["profession"] = $val;
        return $this;
    }
    
    /**
    * Gets the personType
    *
    * @return PersonType The personType
    */
    public function getPersonType()
    {
        if (array_key_exists("personType", $this->_propDict)) {
            if (is_a($this->_propDict["personType"], "Microsoft\Graph\Model\PersonType")) {
                return $this->_propDict["personType"];
            } else {
                $this->_propDict["personType"] = new PersonType($this->_propDict["personType"]);
                return $this->_propDict["personType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the personType
    *
    * @param PersonType $val The personType
    *
    * @return Person
    */
    public function setPersonType($val)
    {
        $this->_propDict["personType"] = $val;
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
    * @return Person
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the imAddress
    *
    * @return string The imAddress
    */
    public function getImAddress()
    {
        if (array_key_exists("imAddress", $this->_propDict)) {
            return $this->_propDict["imAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the imAddress
    *
    * @param string $val The imAddress
    *
    * @return Person
    */
    public function setImAddress($val)
    {
        $this->_propDict["imAddress"] = $val;
        return $this;
    }
    
}