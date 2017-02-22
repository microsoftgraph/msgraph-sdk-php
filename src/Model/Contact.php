<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Contact File
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
* Contact class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Contact extends OutlookItem
{
    /**
    * Gets the parentFolderId
    *
    * @return string The parentFolderId
    */
    public function getParentFolderId()
    {
        if (array_key_exists("parentFolderId", $this->_propDict)) {
            return $this->_propDict["parentFolderId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentFolderId
    *
    * @param string $val The parentFolderId
    *
    * @return Contact
    */
    public function setParentFolderId($val)
    {
        $this->_propDict["parentFolderId"] = $val;
        return $this;
    }
    
    /**
    * Gets the birthday
    *
    * @return \DateTime The birthday
    */
    public function getBirthday()
    {
        if (array_key_exists("birthday", $this->_propDict)) {
            if (is_a($this->_propDict["birthday"], "\DateTime")) {
                return $this->_propDict["birthday"];
            } else {
                $this->_propDict["birthday"] = new \DateTime($this->_propDict["birthday"]);
                return $this->_propDict["birthday"];
            }
        }
        return null;
    }
    
    /**
    * Sets the birthday
    *
    * @param string $val The birthday
    *
    * @return Contact
    */
    public function setBirthday($val)
    {
        $this->_propDict["birthday"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileAs
    *
    * @return string The fileAs
    */
    public function getFileAs()
    {
        if (array_key_exists("fileAs", $this->_propDict)) {
            return $this->_propDict["fileAs"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileAs
    *
    * @param string $val The fileAs
    *
    * @return Contact
    */
    public function setFileAs($val)
    {
        $this->_propDict["fileAs"] = $val;
        return $this;
    }
    
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
    * @return Contact
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
    * @return Contact
    */
    public function setGivenName($val)
    {
        $this->_propDict["givenName"] = $val;
        return $this;
    }
    
    /**
    * Gets the initials
    *
    * @return string The initials
    */
    public function getInitials()
    {
        if (array_key_exists("initials", $this->_propDict)) {
            return $this->_propDict["initials"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the initials
    *
    * @param string $val The initials
    *
    * @return Contact
    */
    public function setInitials($val)
    {
        $this->_propDict["initials"] = $val;
        return $this;
    }
    
    /**
    * Gets the middleName
    *
    * @return string The middleName
    */
    public function getMiddleName()
    {
        if (array_key_exists("middleName", $this->_propDict)) {
            return $this->_propDict["middleName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the middleName
    *
    * @param string $val The middleName
    *
    * @return Contact
    */
    public function setMiddleName($val)
    {
        $this->_propDict["middleName"] = $val;
        return $this;
    }
    
    /**
    * Gets the nickName
    *
    * @return string The nickName
    */
    public function getNickName()
    {
        if (array_key_exists("nickName", $this->_propDict)) {
            return $this->_propDict["nickName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nickName
    *
    * @param string $val The nickName
    *
    * @return Contact
    */
    public function setNickName($val)
    {
        $this->_propDict["nickName"] = $val;
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
    * @return Contact
    */
    public function setSurname($val)
    {
        $this->_propDict["surname"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the title
    *
    * @param string $val The title
    *
    * @return Contact
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
    /**
    * Gets the yomiGivenName
    *
    * @return string The yomiGivenName
    */
    public function getYomiGivenName()
    {
        if (array_key_exists("yomiGivenName", $this->_propDict)) {
            return $this->_propDict["yomiGivenName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yomiGivenName
    *
    * @param string $val The yomiGivenName
    *
    * @return Contact
    */
    public function setYomiGivenName($val)
    {
        $this->_propDict["yomiGivenName"] = $val;
        return $this;
    }
    
    /**
    * Gets the yomiSurname
    *
    * @return string The yomiSurname
    */
    public function getYomiSurname()
    {
        if (array_key_exists("yomiSurname", $this->_propDict)) {
            return $this->_propDict["yomiSurname"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yomiSurname
    *
    * @param string $val The yomiSurname
    *
    * @return Contact
    */
    public function setYomiSurname($val)
    {
        $this->_propDict["yomiSurname"] = $val;
        return $this;
    }
    
    /**
    * Gets the yomiCompanyName
    *
    * @return string The yomiCompanyName
    */
    public function getYomiCompanyName()
    {
        if (array_key_exists("yomiCompanyName", $this->_propDict)) {
            return $this->_propDict["yomiCompanyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yomiCompanyName
    *
    * @param string $val The yomiCompanyName
    *
    * @return Contact
    */
    public function setYomiCompanyName($val)
    {
        $this->_propDict["yomiCompanyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the generation
    *
    * @return string The generation
    */
    public function getGeneration()
    {
        if (array_key_exists("generation", $this->_propDict)) {
            return $this->_propDict["generation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the generation
    *
    * @param string $val The generation
    *
    * @return Contact
    */
    public function setGeneration($val)
    {
        $this->_propDict["generation"] = $val;
        return $this;
    }
    
    /** 
    * Gets the emailAddresses
    *
    * @return array The emailAddresses
    */
    public function getEmailAddresses()
    {
        if (array_key_exists("emailAddresses", $this->_propDict)) {
           return $this->_propDict["emailAddresses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the emailAddresses
    *
    * @param string $val The emailAddresses
    *
    * @return Contact
    */
    public function setEmailAddresses($val)
    {
		$this->_propDict["emailAddresses"] = $val;
        return $this;
    }
    
    /**
    * Gets the imAddresses
    *
    * @return string The imAddresses
    */
    public function getImAddresses()
    {
        if (array_key_exists("imAddresses", $this->_propDict)) {
            return $this->_propDict["imAddresses"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the imAddresses
    *
    * @param string $val The imAddresses
    *
    * @return Contact
    */
    public function setImAddresses($val)
    {
        $this->_propDict["imAddresses"] = $val;
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
    * @return Contact
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
    * @return Contact
    */
    public function setCompanyName($val)
    {
        $this->_propDict["companyName"] = $val;
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
    * @return Contact
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
    * @return Contact
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
    * @return Contact
    */
    public function setProfession($val)
    {
        $this->_propDict["profession"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessHomePage
    *
    * @return string The businessHomePage
    */
    public function getBusinessHomePage()
    {
        if (array_key_exists("businessHomePage", $this->_propDict)) {
            return $this->_propDict["businessHomePage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the businessHomePage
    *
    * @param string $val The businessHomePage
    *
    * @return Contact
    */
    public function setBusinessHomePage($val)
    {
        $this->_propDict["businessHomePage"] = $val;
        return $this;
    }
    
    /**
    * Gets the assistantName
    *
    * @return string The assistantName
    */
    public function getAssistantName()
    {
        if (array_key_exists("assistantName", $this->_propDict)) {
            return $this->_propDict["assistantName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assistantName
    *
    * @param string $val The assistantName
    *
    * @return Contact
    */
    public function setAssistantName($val)
    {
        $this->_propDict["assistantName"] = $val;
        return $this;
    }
    
    /**
    * Gets the manager
    *
    * @return string The manager
    */
    public function getManager()
    {
        if (array_key_exists("manager", $this->_propDict)) {
            return $this->_propDict["manager"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the manager
    *
    * @param string $val The manager
    *
    * @return Contact
    */
    public function setManager($val)
    {
        $this->_propDict["manager"] = $val;
        return $this;
    }
    
    /**
    * Gets the homePhones
    *
    * @return string The homePhones
    */
    public function getHomePhones()
    {
        if (array_key_exists("homePhones", $this->_propDict)) {
            return $this->_propDict["homePhones"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the homePhones
    *
    * @param string $val The homePhones
    *
    * @return Contact
    */
    public function setHomePhones($val)
    {
        $this->_propDict["homePhones"] = $val;
        return $this;
    }
    
    /**
    * Gets the mobilePhone
    *
    * @return string The mobilePhone
    */
    public function getMobilePhone()
    {
        if (array_key_exists("mobilePhone", $this->_propDict)) {
            return $this->_propDict["mobilePhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mobilePhone
    *
    * @param string $val The mobilePhone
    *
    * @return Contact
    */
    public function setMobilePhone($val)
    {
        $this->_propDict["mobilePhone"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessPhones
    *
    * @return string The businessPhones
    */
    public function getBusinessPhones()
    {
        if (array_key_exists("businessPhones", $this->_propDict)) {
            return $this->_propDict["businessPhones"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the businessPhones
    *
    * @param string $val The businessPhones
    *
    * @return Contact
    */
    public function setBusinessPhones($val)
    {
        $this->_propDict["businessPhones"] = $val;
        return $this;
    }
    
    /**
    * Gets the homeAddress
    *
    * @return PhysicalAddress The homeAddress
    */
    public function getHomeAddress()
    {
        if (array_key_exists("homeAddress", $this->_propDict)) {
            if (is_a($this->_propDict["homeAddress"], "PhysicalAddress")) {
                return $this->_propDict["homeAddress"];
            } else {
                $this->_propDict["homeAddress"] = new PhysicalAddress($this->_propDict["homeAddress"]);
                return $this->_propDict["homeAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the homeAddress
    *
    * @param string $val The homeAddress
    *
    * @return Contact
    */
    public function setHomeAddress($val)
    {
        $this->_propDict["homeAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessAddress
    *
    * @return PhysicalAddress The businessAddress
    */
    public function getBusinessAddress()
    {
        if (array_key_exists("businessAddress", $this->_propDict)) {
            if (is_a($this->_propDict["businessAddress"], "PhysicalAddress")) {
                return $this->_propDict["businessAddress"];
            } else {
                $this->_propDict["businessAddress"] = new PhysicalAddress($this->_propDict["businessAddress"]);
                return $this->_propDict["businessAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the businessAddress
    *
    * @param string $val The businessAddress
    *
    * @return Contact
    */
    public function setBusinessAddress($val)
    {
        $this->_propDict["businessAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the otherAddress
    *
    * @return PhysicalAddress The otherAddress
    */
    public function getOtherAddress()
    {
        if (array_key_exists("otherAddress", $this->_propDict)) {
            if (is_a($this->_propDict["otherAddress"], "PhysicalAddress")) {
                return $this->_propDict["otherAddress"];
            } else {
                $this->_propDict["otherAddress"] = new PhysicalAddress($this->_propDict["otherAddress"]);
                return $this->_propDict["otherAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the otherAddress
    *
    * @param string $val The otherAddress
    *
    * @return Contact
    */
    public function setOtherAddress($val)
    {
        $this->_propDict["otherAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the spouseName
    *
    * @return string The spouseName
    */
    public function getSpouseName()
    {
        if (array_key_exists("spouseName", $this->_propDict)) {
            return $this->_propDict["spouseName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the spouseName
    *
    * @param string $val The spouseName
    *
    * @return Contact
    */
    public function setSpouseName($val)
    {
        $this->_propDict["spouseName"] = $val;
        return $this;
    }
    
    /**
    * Gets the personalNotes
    *
    * @return string The personalNotes
    */
    public function getPersonalNotes()
    {
        if (array_key_exists("personalNotes", $this->_propDict)) {
            return $this->_propDict["personalNotes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the personalNotes
    *
    * @param string $val The personalNotes
    *
    * @return Contact
    */
    public function setPersonalNotes($val)
    {
        $this->_propDict["personalNotes"] = $val;
        return $this;
    }
    
    /**
    * Gets the children
    *
    * @return string The children
    */
    public function getChildren()
    {
        if (array_key_exists("children", $this->_propDict)) {
            return $this->_propDict["children"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the children
    *
    * @param string $val The children
    *
    * @return Contact
    */
    public function setChildren($val)
    {
        $this->_propDict["children"] = $val;
        return $this;
    }
    
    /** 
    * Gets the extensions
    *
    * @return array The extensions
    */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extensions
    *
    * @param string $val The extensions
    *
    * @return Contact
    */
    public function setExtensions($val)
    {
		$this->_propDict["extensions"] = $val;
        return $this;
    }
    
    /** 
    * Gets the singleValueExtendedProperties
    *
    * @return array The singleValueExtendedProperties
    */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the singleValueExtendedProperties
    *
    * @param string $val The singleValueExtendedProperties
    *
    * @return Contact
    */
    public function setSingleValueExtendedProperties($val)
    {
		$this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }
    
    /** 
    * Gets the multiValueExtendedProperties
    *
    * @return array The multiValueExtendedProperties
    */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the multiValueExtendedProperties
    *
    * @param string $val The multiValueExtendedProperties
    *
    * @return Contact
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }
    
    /**
    * Gets the photo
    *
    * @return ProfilePhoto The photo
    */
    public function getPhoto()
    {
        if (array_key_exists("photo", $this->_propDict)) {
            if (is_a($this->_propDict["photo"], "ProfilePhoto")) {
                return $this->_propDict["photo"];
            } else {
                $this->_propDict["photo"] = new ProfilePhoto($this->_propDict["photo"]);
                return $this->_propDict["photo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the photo
    *
    * @param string $val The photo
    *
    * @return Contact
    */
    public function setPhoto($val)
    {
        $this->_propDict["photo"] = $val;
        return $this;
    }
    
}