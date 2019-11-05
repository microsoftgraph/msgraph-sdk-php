<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Profile File
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
* Profile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Profile extends Entity
{

     /** 
     * Gets the account
     *
     * @return array The account
     */
    public function getAccount()
    {
        if (array_key_exists("account", $this->_propDict)) {
           return $this->_propDict["account"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the account
    *
    * @param UserAccountInformation $val The account
    *
    * @return Profile
    */
    public function setAccount($val)
    {
		$this->_propDict["account"] = $val;
        return $this;
    }
    

     /** 
     * Gets the anniversaries
     *
     * @return array The anniversaries
     */
    public function getAnniversaries()
    {
        if (array_key_exists("anniversaries", $this->_propDict)) {
           return $this->_propDict["anniversaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the anniversaries
    *
    * @param PersonAnniversary $val The anniversaries
    *
    * @return Profile
    */
    public function setAnniversaries($val)
    {
		$this->_propDict["anniversaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the educationalActivities
     *
     * @return array The educationalActivities
     */
    public function getEducationalActivities()
    {
        if (array_key_exists("educationalActivities", $this->_propDict)) {
           return $this->_propDict["educationalActivities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the educationalActivities
    *
    * @param EducationalActivity $val The educationalActivities
    *
    * @return Profile
    */
    public function setEducationalActivities($val)
    {
		$this->_propDict["educationalActivities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the emails
     *
     * @return array The emails
     */
    public function getEmails()
    {
        if (array_key_exists("emails", $this->_propDict)) {
           return $this->_propDict["emails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the emails
    *
    * @param ItemEmail $val The emails
    *
    * @return Profile
    */
    public function setEmails($val)
    {
		$this->_propDict["emails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the interests
     *
     * @return array The interests
     */
    public function getInterests()
    {
        if (array_key_exists("interests", $this->_propDict)) {
           return $this->_propDict["interests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the interests
    *
    * @param PersonInterest $val The interests
    *
    * @return Profile
    */
    public function setInterests($val)
    {
		$this->_propDict["interests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the languages
     *
     * @return array The languages
     */
    public function getLanguages()
    {
        if (array_key_exists("languages", $this->_propDict)) {
           return $this->_propDict["languages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the languages
    *
    * @param LanguageProficiency $val The languages
    *
    * @return Profile
    */
    public function setLanguages($val)
    {
		$this->_propDict["languages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the names
     *
     * @return array The names
     */
    public function getNames()
    {
        if (array_key_exists("names", $this->_propDict)) {
           return $this->_propDict["names"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the names
    *
    * @param PersonName $val The names
    *
    * @return Profile
    */
    public function setNames($val)
    {
		$this->_propDict["names"] = $val;
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
    * @param ItemPhone $val The phones
    *
    * @return Profile
    */
    public function setPhones($val)
    {
		$this->_propDict["phones"] = $val;
        return $this;
    }
    

     /** 
     * Gets the positions
     *
     * @return array The positions
     */
    public function getPositions()
    {
        if (array_key_exists("positions", $this->_propDict)) {
           return $this->_propDict["positions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the positions
    *
    * @param WorkPosition $val The positions
    *
    * @return Profile
    */
    public function setPositions($val)
    {
		$this->_propDict["positions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the projects
     *
     * @return array The projects
     */
    public function getProjects()
    {
        if (array_key_exists("projects", $this->_propDict)) {
           return $this->_propDict["projects"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the projects
    *
    * @param ProjectParticipation $val The projects
    *
    * @return Profile
    */
    public function setProjects($val)
    {
		$this->_propDict["projects"] = $val;
        return $this;
    }
    

     /** 
     * Gets the skills
     *
     * @return array The skills
     */
    public function getSkills()
    {
        if (array_key_exists("skills", $this->_propDict)) {
           return $this->_propDict["skills"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the skills
    *
    * @param SkillProficiency $val The skills
    *
    * @return Profile
    */
    public function setSkills($val)
    {
		$this->_propDict["skills"] = $val;
        return $this;
    }
    

     /** 
     * Gets the webAccounts
     *
     * @return array The webAccounts
     */
    public function getWebAccounts()
    {
        if (array_key_exists("webAccounts", $this->_propDict)) {
           return $this->_propDict["webAccounts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the webAccounts
    *
    * @param WebAccount $val The webAccounts
    *
    * @return Profile
    */
    public function setWebAccounts($val)
    {
		$this->_propDict["webAccounts"] = $val;
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
    * @param PersonWebsite $val The websites
    *
    * @return Profile
    */
    public function setWebsites($val)
    {
		$this->_propDict["websites"] = $val;
        return $this;
    }
    
}