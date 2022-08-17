<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Person File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* Person class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Person extends Entity
{
    /**
    * Gets the birthday
    * The person's birthday.
    *
    * @return string|null The birthday
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
    * The person's birthday.
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
    * Gets the companyName
    * The name of the person's company.
    *
    * @return string|null The companyName
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
    * The name of the person's company.
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
    * Gets the department
    * The person's department.
    *
    * @return string|null The department
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
    * The person's department.
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
    * Gets the displayName
    * The person's display name.
    *
    * @return string|null The displayName
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
    * The person's display name.
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
    * The person's given name.
    *
    * @return string|null The givenName
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
    * The person's given name.
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
    * Gets the imAddress
    * The instant message voice over IP (VOIP) session initiation protocol (SIP) address for the user. Read-only.
    *
    * @return string|null The imAddress
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
    * The instant message voice over IP (VOIP) session initiation protocol (SIP) address for the user. Read-only.
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

    /**
    * Gets the isFavorite
    * true if the user has flagged this person as a favorite.
    *
    * @return bool|null The isFavorite
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
    * true if the user has flagged this person as a favorite.
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
    * Gets the jobTitle
    * The person's job title.
    *
    * @return string|null The jobTitle
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
    * The person's job title.
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
    * Gets the officeLocation
    * The location of the person's office.
    *
    * @return string|null The officeLocation
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
    * The location of the person's office.
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
    * Gets the personNotes
    * Free-form notes that the user has taken about this person.
    *
    * @return string|null The personNotes
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
    * Free-form notes that the user has taken about this person.
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
    * Gets the personType
    * The type of person.
    *
    * @return PersonType|null The personType
    */
    public function getPersonType()
    {
        if (array_key_exists("personType", $this->_propDict)) {
            if (is_a($this->_propDict["personType"], "\Microsoft\Graph\Model\PersonType") || is_null($this->_propDict["personType"])) {
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
    * The type of person.
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
     * Gets the phones
    * The person's phone numbers.
     *
     * @return array|null The phones
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
    * The person's phone numbers.
    *
    * @param Phone[] $val The phones
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
    * The person's addresses.
     *
     * @return array|null The postalAddresses
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
    * The person's addresses.
    *
    * @param Location[] $val The postalAddresses
    *
    * @return Person
    */
    public function setPostalAddresses($val)
    {
        $this->_propDict["postalAddresses"] = $val;
        return $this;
    }

    /**
    * Gets the profession
    * The person's profession.
    *
    * @return string|null The profession
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
    * The person's profession.
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
     * Gets the scoredEmailAddresses
    * The person's email addresses.
     *
     * @return array|null The scoredEmailAddresses
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
    * The person's email addresses.
    *
    * @param ScoredEmailAddress[] $val The scoredEmailAddresses
    *
    * @return Person
    */
    public function setScoredEmailAddresses($val)
    {
        $this->_propDict["scoredEmailAddresses"] = $val;
        return $this;
    }

    /**
    * Gets the surname
    * The person's surname.
    *
    * @return string|null The surname
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
    * The person's surname.
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
    * Gets the userPrincipalName
    * The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard RFC 822. By convention, this should map to the person's email name. The general format is alias@domain.
    *
    * @return string|null The userPrincipalName
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
    * The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard RFC 822. By convention, this should map to the person's email name. The general format is alias@domain.
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
     * Gets the websites
    * The person's websites.
     *
     * @return array|null The websites
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
    * The person's websites.
    *
    * @param Website[] $val The websites
    *
    * @return Person
    */
    public function setWebsites($val)
    {
        $this->_propDict["websites"] = $val;
        return $this;
    }

    /**
    * Gets the yomiCompany
    * The phonetic Japanese name of the person's company.
    *
    * @return string|null The yomiCompany
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
    * The phonetic Japanese name of the person's company.
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

}
