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
namespace Microsoft\Graph\Beta\Model;

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
    * @param \DateTime $val The birthday
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
    * @param EmailAddress $val The emailAddresses
    *
    * @return Contact
    */
    public function setEmailAddresses($val)
    {
		$this->_propDict["emailAddresses"] = $val;
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
    * @return Contact
    */
    public function setWebsites($val)
    {
		$this->_propDict["websites"] = $val;
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
    * @return Contact
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
    * @param PhysicalAddress $val The postalAddresses
    *
    * @return Contact
    */
    public function setPostalAddresses($val)
    {
		$this->_propDict["postalAddresses"] = $val;
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
    * Gets the weddingAnniversary
    *
    * @return \DateTime The weddingAnniversary
    */
    public function getWeddingAnniversary()
    {
        if (array_key_exists("weddingAnniversary", $this->_propDict)) {
            if (is_a($this->_propDict["weddingAnniversary"], "\DateTime")) {
                return $this->_propDict["weddingAnniversary"];
            } else {
                $this->_propDict["weddingAnniversary"] = new \DateTime($this->_propDict["weddingAnniversary"]);
                return $this->_propDict["weddingAnniversary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the weddingAnniversary
    *
    * @param \DateTime $val The weddingAnniversary
    *
    * @return Contact
    */
    public function setWeddingAnniversary($val)
    {
        $this->_propDict["weddingAnniversary"] = $val;
        return $this;
    }
    
    /**
    * Gets the gender
    *
    * @return string The gender
    */
    public function getGender()
    {
        if (array_key_exists("gender", $this->_propDict)) {
            return $this->_propDict["gender"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gender
    *
    * @param string $val The gender
    *
    * @return Contact
    */
    public function setGender($val)
    {
        $this->_propDict["gender"] = $val;
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
    * @return Contact
    */
    public function setIsFavorite($val)
    {
        $this->_propDict["isFavorite"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the flag
    *
    * @return FollowupFlag The flag
    */
    public function getFlag()
    {
        if (array_key_exists("flag", $this->_propDict)) {
            if (is_a($this->_propDict["flag"], "Microsoft\Graph\Beta\Model\FollowupFlag")) {
                return $this->_propDict["flag"];
            } else {
                $this->_propDict["flag"] = new FollowupFlag($this->_propDict["flag"]);
                return $this->_propDict["flag"];
            }
        }
        return null;
    }
    
    /**
    * Sets the flag
    *
    * @param FollowupFlag $val The flag
    *
    * @return Contact
    */
    public function setFlag($val)
    {
        $this->_propDict["flag"] = $val;
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
    * @param Extension $val The extensions
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
    * @param SingleValueLegacyExtendedProperty $val The singleValueExtendedProperties
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
    * @param MultiValueLegacyExtendedProperty $val The multiValueExtendedProperties
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
            if (is_a($this->_propDict["photo"], "Microsoft\Graph\Beta\Model\ProfilePhoto")) {
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
    * @param ProfilePhoto $val The photo
    *
    * @return Contact
    */
    public function setPhoto($val)
    {
        $this->_propDict["photo"] = $val;
        return $this;
    }
    
}