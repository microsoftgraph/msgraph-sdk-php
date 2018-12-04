<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSchool File
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
* EducationSchool class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationSchool extends EducationOrganization
{
    /**
    * Gets the principalEmail
    *
    * @return string The principalEmail
    */
    public function getPrincipalEmail()
    {
        if (array_key_exists("principalEmail", $this->_propDict)) {
            return $this->_propDict["principalEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the principalEmail
    *
    * @param string $val The principalEmail
    *
    * @return EducationSchool
    */
    public function setPrincipalEmail($val)
    {
        $this->_propDict["principalEmail"] = $val;
        return $this;
    }
    
    /**
    * Gets the principalName
    *
    * @return string The principalName
    */
    public function getPrincipalName()
    {
        if (array_key_exists("principalName", $this->_propDict)) {
            return $this->_propDict["principalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the principalName
    *
    * @param string $val The principalName
    *
    * @return EducationSchool
    */
    public function setPrincipalName($val)
    {
        $this->_propDict["principalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalPrincipalId
    *
    * @return string The externalPrincipalId
    */
    public function getExternalPrincipalId()
    {
        if (array_key_exists("externalPrincipalId", $this->_propDict)) {
            return $this->_propDict["externalPrincipalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalPrincipalId
    *
    * @param string $val The externalPrincipalId
    *
    * @return EducationSchool
    */
    public function setExternalPrincipalId($val)
    {
        $this->_propDict["externalPrincipalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the lowestGrade
    *
    * @return string The lowestGrade
    */
    public function getLowestGrade()
    {
        if (array_key_exists("lowestGrade", $this->_propDict)) {
            return $this->_propDict["lowestGrade"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lowestGrade
    *
    * @param string $val The lowestGrade
    *
    * @return EducationSchool
    */
    public function setLowestGrade($val)
    {
        $this->_propDict["lowestGrade"] = $val;
        return $this;
    }
    
    /**
    * Gets the highestGrade
    *
    * @return string The highestGrade
    */
    public function getHighestGrade()
    {
        if (array_key_exists("highestGrade", $this->_propDict)) {
            return $this->_propDict["highestGrade"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the highestGrade
    *
    * @param string $val The highestGrade
    *
    * @return EducationSchool
    */
    public function setHighestGrade($val)
    {
        $this->_propDict["highestGrade"] = $val;
        return $this;
    }
    
    /**
    * Gets the schoolNumber
    *
    * @return string The schoolNumber
    */
    public function getSchoolNumber()
    {
        if (array_key_exists("schoolNumber", $this->_propDict)) {
            return $this->_propDict["schoolNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the schoolNumber
    *
    * @param string $val The schoolNumber
    *
    * @return EducationSchool
    */
    public function setSchoolNumber($val)
    {
        $this->_propDict["schoolNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalId
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalId
    *
    * @param string $val The externalId
    *
    * @return EducationSchool
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the phone
    *
    * @return string The phone
    */
    public function getPhone()
    {
        if (array_key_exists("phone", $this->_propDict)) {
            return $this->_propDict["phone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the phone
    *
    * @param string $val The phone
    *
    * @return EducationSchool
    */
    public function setPhone($val)
    {
        $this->_propDict["phone"] = $val;
        return $this;
    }
    
    /**
    * Gets the fax
    *
    * @return string The fax
    */
    public function getFax()
    {
        if (array_key_exists("fax", $this->_propDict)) {
            return $this->_propDict["fax"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fax
    *
    * @param string $val The fax
    *
    * @return EducationSchool
    */
    public function setFax($val)
    {
        $this->_propDict["fax"] = $val;
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
            if (is_a($this->_propDict["createdBy"], "Microsoft\Graph\Model\IdentitySet")) {
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
    * @return EducationSchool
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the address
    *
    * @return PhysicalAddress The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            if (is_a($this->_propDict["address"], "Microsoft\Graph\Model\PhysicalAddress")) {
                return $this->_propDict["address"];
            } else {
                $this->_propDict["address"] = new PhysicalAddress($this->_propDict["address"]);
                return $this->_propDict["address"];
            }
        }
        return null;
    }
    
    /**
    * Sets the address
    *
    * @param PhysicalAddress $val The address
    *
    * @return EducationSchool
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
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
    * @return EducationSchool
    */
    public function setClasses($val)
    {
		$this->_propDict["classes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the users
     *
     * @return array The users
     */
    public function getUsers()
    {
        if (array_key_exists("users", $this->_propDict)) {
           return $this->_propDict["users"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the users
    *
    * @param EducationUser $val The users
    *
    * @return EducationSchool
    */
    public function setUsers($val)
    {
		$this->_propDict["users"] = $val;
        return $this;
    }
    
}