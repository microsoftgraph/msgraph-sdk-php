<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationUser File
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
* EducationUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationUser extends Entity
{
    /**
    * Gets the primaryRole
    *
    * @return EducationUserRole The primaryRole
    */
    public function getPrimaryRole()
    {
        if (array_key_exists("primaryRole", $this->_propDict)) {
            if (is_a($this->_propDict["primaryRole"], "Microsoft\Graph\Beta\Model\EducationUserRole")) {
                return $this->_propDict["primaryRole"];
            } else {
                $this->_propDict["primaryRole"] = new EducationUserRole($this->_propDict["primaryRole"]);
                return $this->_propDict["primaryRole"];
            }
        }
        return null;
    }
    
    /**
    * Sets the primaryRole
    *
    * @param EducationUserRole $val The primaryRole
    *
    * @return EducationUser
    */
    public function setPrimaryRole($val)
    {
        $this->_propDict["primaryRole"] = $val;
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
    * @return EducationUser
    */
    public function setMiddleName($val)
    {
        $this->_propDict["middleName"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalSource
    *
    * @return EducationExternalSource The externalSource
    */
    public function getExternalSource()
    {
        if (array_key_exists("externalSource", $this->_propDict)) {
            if (is_a($this->_propDict["externalSource"], "Microsoft\Graph\Beta\Model\EducationExternalSource")) {
                return $this->_propDict["externalSource"];
            } else {
                $this->_propDict["externalSource"] = new EducationExternalSource($this->_propDict["externalSource"]);
                return $this->_propDict["externalSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the externalSource
    *
    * @param EducationExternalSource $val The externalSource
    *
    * @return EducationUser
    */
    public function setExternalSource($val)
    {
        $this->_propDict["externalSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the residenceAddress
    *
    * @return PhysicalAddress The residenceAddress
    */
    public function getResidenceAddress()
    {
        if (array_key_exists("residenceAddress", $this->_propDict)) {
            if (is_a($this->_propDict["residenceAddress"], "Microsoft\Graph\Beta\Model\PhysicalAddress")) {
                return $this->_propDict["residenceAddress"];
            } else {
                $this->_propDict["residenceAddress"] = new PhysicalAddress($this->_propDict["residenceAddress"]);
                return $this->_propDict["residenceAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the residenceAddress
    *
    * @param PhysicalAddress $val The residenceAddress
    *
    * @return EducationUser
    */
    public function setResidenceAddress($val)
    {
        $this->_propDict["residenceAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the mailingAddress
    *
    * @return PhysicalAddress The mailingAddress
    */
    public function getMailingAddress()
    {
        if (array_key_exists("mailingAddress", $this->_propDict)) {
            if (is_a($this->_propDict["mailingAddress"], "Microsoft\Graph\Beta\Model\PhysicalAddress")) {
                return $this->_propDict["mailingAddress"];
            } else {
                $this->_propDict["mailingAddress"] = new PhysicalAddress($this->_propDict["mailingAddress"]);
                return $this->_propDict["mailingAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mailingAddress
    *
    * @param PhysicalAddress $val The mailingAddress
    *
    * @return EducationUser
    */
    public function setMailingAddress($val)
    {
        $this->_propDict["mailingAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the student
    *
    * @return EducationStudent The student
    */
    public function getStudent()
    {
        if (array_key_exists("student", $this->_propDict)) {
            if (is_a($this->_propDict["student"], "Microsoft\Graph\Beta\Model\EducationStudent")) {
                return $this->_propDict["student"];
            } else {
                $this->_propDict["student"] = new EducationStudent($this->_propDict["student"]);
                return $this->_propDict["student"];
            }
        }
        return null;
    }
    
    /**
    * Sets the student
    *
    * @param EducationStudent $val The student
    *
    * @return EducationUser
    */
    public function setStudent($val)
    {
        $this->_propDict["student"] = $val;
        return $this;
    }
    
    /**
    * Gets the teacher
    *
    * @return EducationTeacher The teacher
    */
    public function getTeacher()
    {
        if (array_key_exists("teacher", $this->_propDict)) {
            if (is_a($this->_propDict["teacher"], "Microsoft\Graph\Beta\Model\EducationTeacher")) {
                return $this->_propDict["teacher"];
            } else {
                $this->_propDict["teacher"] = new EducationTeacher($this->_propDict["teacher"]);
                return $this->_propDict["teacher"];
            }
        }
        return null;
    }
    
    /**
    * Sets the teacher
    *
    * @param EducationTeacher $val The teacher
    *
    * @return EducationUser
    */
    public function setTeacher($val)
    {
        $this->_propDict["teacher"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    *
    * @return IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "Microsoft\Graph\Beta\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    *
    * @param IdentitySet $val The createdBy
    *
    * @return EducationUser
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the accountEnabled
    *
    * @return bool The accountEnabled
    */
    public function getAccountEnabled()
    {
        if (array_key_exists("accountEnabled", $this->_propDict)) {
            return $this->_propDict["accountEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountEnabled
    *
    * @param bool $val The accountEnabled
    *
    * @return EducationUser
    */
    public function setAccountEnabled($val)
    {
        $this->_propDict["accountEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the assignedLicenses
     *
     * @return array The assignedLicenses
     */
    public function getAssignedLicenses()
    {
        if (array_key_exists("assignedLicenses", $this->_propDict)) {
           return $this->_propDict["assignedLicenses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignedLicenses
    *
    * @param AssignedLicense $val The assignedLicenses
    *
    * @return EducationUser
    */
    public function setAssignedLicenses($val)
    {
		$this->_propDict["assignedLicenses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignedPlans
     *
     * @return array The assignedPlans
     */
    public function getAssignedPlans()
    {
        if (array_key_exists("assignedPlans", $this->_propDict)) {
           return $this->_propDict["assignedPlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignedPlans
    *
    * @param AssignedPlan $val The assignedPlans
    *
    * @return EducationUser
    */
    public function setAssignedPlans($val)
    {
		$this->_propDict["assignedPlans"] = $val;
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
    * @return EducationUser
    */
    public function setBusinessPhones($val)
    {
        $this->_propDict["businessPhones"] = $val;
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
    * @return EducationUser
    */
    public function setDepartment($val)
    {
        $this->_propDict["department"] = $val;
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
    * @return EducationUser
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
    * @return EducationUser
    */
    public function setGivenName($val)
    {
        $this->_propDict["givenName"] = $val;
        return $this;
    }
    
    /**
    * Gets the mail
    *
    * @return string The mail
    */
    public function getMail()
    {
        if (array_key_exists("mail", $this->_propDict)) {
            return $this->_propDict["mail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mail
    *
    * @param string $val The mail
    *
    * @return EducationUser
    */
    public function setMail($val)
    {
        $this->_propDict["mail"] = $val;
        return $this;
    }
    
    /**
    * Gets the mailNickname
    *
    * @return string The mailNickname
    */
    public function getMailNickname()
    {
        if (array_key_exists("mailNickname", $this->_propDict)) {
            return $this->_propDict["mailNickname"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mailNickname
    *
    * @param string $val The mailNickname
    *
    * @return EducationUser
    */
    public function setMailNickname($val)
    {
        $this->_propDict["mailNickname"] = $val;
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
    * @return EducationUser
    */
    public function setMobilePhone($val)
    {
        $this->_propDict["mobilePhone"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordPolicies
    *
    * @return string The passwordPolicies
    */
    public function getPasswordPolicies()
    {
        if (array_key_exists("passwordPolicies", $this->_propDict)) {
            return $this->_propDict["passwordPolicies"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordPolicies
    *
    * @param string $val The passwordPolicies
    *
    * @return EducationUser
    */
    public function setPasswordPolicies($val)
    {
        $this->_propDict["passwordPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordProfile
    *
    * @return PasswordProfile The passwordProfile
    */
    public function getPasswordProfile()
    {
        if (array_key_exists("passwordProfile", $this->_propDict)) {
            if (is_a($this->_propDict["passwordProfile"], "Microsoft\Graph\Beta\Model\PasswordProfile")) {
                return $this->_propDict["passwordProfile"];
            } else {
                $this->_propDict["passwordProfile"] = new PasswordProfile($this->_propDict["passwordProfile"]);
                return $this->_propDict["passwordProfile"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passwordProfile
    *
    * @param PasswordProfile $val The passwordProfile
    *
    * @return EducationUser
    */
    public function setPasswordProfile($val)
    {
        $this->_propDict["passwordProfile"] = $val;
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
    * @return EducationUser
    */
    public function setOfficeLocation($val)
    {
        $this->_propDict["officeLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferredLanguage
    *
    * @return string The preferredLanguage
    */
    public function getPreferredLanguage()
    {
        if (array_key_exists("preferredLanguage", $this->_propDict)) {
            return $this->_propDict["preferredLanguage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preferredLanguage
    *
    * @param string $val The preferredLanguage
    *
    * @return EducationUser
    */
    public function setPreferredLanguage($val)
    {
        $this->_propDict["preferredLanguage"] = $val;
        return $this;
    }
    

     /** 
     * Gets the provisionedPlans
     *
     * @return array The provisionedPlans
     */
    public function getProvisionedPlans()
    {
        if (array_key_exists("provisionedPlans", $this->_propDict)) {
           return $this->_propDict["provisionedPlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the provisionedPlans
    *
    * @param ProvisionedPlan $val The provisionedPlans
    *
    * @return EducationUser
    */
    public function setProvisionedPlans($val)
    {
		$this->_propDict["provisionedPlans"] = $val;
        return $this;
    }
    
    /**
    * Gets the refreshTokensValidFromDateTime
    *
    * @return \DateTime The refreshTokensValidFromDateTime
    */
    public function getRefreshTokensValidFromDateTime()
    {
        if (array_key_exists("refreshTokensValidFromDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["refreshTokensValidFromDateTime"], "\DateTime")) {
                return $this->_propDict["refreshTokensValidFromDateTime"];
            } else {
                $this->_propDict["refreshTokensValidFromDateTime"] = new \DateTime($this->_propDict["refreshTokensValidFromDateTime"]);
                return $this->_propDict["refreshTokensValidFromDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the refreshTokensValidFromDateTime
    *
    * @param \DateTime $val The refreshTokensValidFromDateTime
    *
    * @return EducationUser
    */
    public function setRefreshTokensValidFromDateTime($val)
    {
        $this->_propDict["refreshTokensValidFromDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the showInAddressList
    *
    * @return bool The showInAddressList
    */
    public function getShowInAddressList()
    {
        if (array_key_exists("showInAddressList", $this->_propDict)) {
            return $this->_propDict["showInAddressList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showInAddressList
    *
    * @param bool $val The showInAddressList
    *
    * @return EducationUser
    */
    public function setShowInAddressList($val)
    {
        $this->_propDict["showInAddressList"] = boolval($val);
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
    * @return EducationUser
    */
    public function setSurname($val)
    {
        $this->_propDict["surname"] = $val;
        return $this;
    }
    
    /**
    * Gets the usageLocation
    *
    * @return string The usageLocation
    */
    public function getUsageLocation()
    {
        if (array_key_exists("usageLocation", $this->_propDict)) {
            return $this->_propDict["usageLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usageLocation
    *
    * @param string $val The usageLocation
    *
    * @return EducationUser
    */
    public function setUsageLocation($val)
    {
        $this->_propDict["usageLocation"] = $val;
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
    * @return EducationUser
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userType
    *
    * @return string The userType
    */
    public function getUserType()
    {
        if (array_key_exists("userType", $this->_propDict)) {
            return $this->_propDict["userType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userType
    *
    * @param string $val The userType
    *
    * @return EducationUser
    */
    public function setUserType($val)
    {
        $this->_propDict["userType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the schools
     *
     * @return array The schools
     */
    public function getSchools()
    {
        if (array_key_exists("schools", $this->_propDict)) {
           return $this->_propDict["schools"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the schools
    *
    * @param EducationSchool $val The schools
    *
    * @return EducationUser
    */
    public function setSchools($val)
    {
		$this->_propDict["schools"] = $val;
        return $this;
    }
    

     /** 
     * Gets the classes
     *
     * @return array The classes
     */
    public function getClasses()
    {
        if (array_key_exists("classes", $this->_propDict)) {
           return $this->_propDict["classes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the classes
    *
    * @param EducationClass $val The classes
    *
    * @return EducationUser
    */
    public function setClasses($val)
    {
		$this->_propDict["classes"] = $val;
        return $this;
    }
    
    /**
    * Gets the user
    *
    * @return User The user
    */
    public function getUser()
    {
        if (array_key_exists("user", $this->_propDict)) {
            if (is_a($this->_propDict["user"], "Microsoft\Graph\Beta\Model\User")) {
                return $this->_propDict["user"];
            } else {
                $this->_propDict["user"] = new User($this->_propDict["user"]);
                return $this->_propDict["user"];
            }
        }
        return null;
    }
    
    /**
    * Sets the user
    *
    * @param User $val The user
    *
    * @return EducationUser
    */
    public function setUser($val)
    {
        $this->_propDict["user"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    *
    * @param EducationAssignment $val The assignments
    *
    * @return EducationUser
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
}