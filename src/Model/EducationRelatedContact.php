<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationRelatedContact File
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
* EducationRelatedContact class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EducationRelatedContact extends Entity
{
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return EducationRelatedContact
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
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
    * @param string $val The value of the displayName
    *
    * @return EducationRelatedContact
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the emailAddress
    *
    * @return string The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            return $this->_propDict["emailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailAddress
    *
    * @param string $val The value of the emailAddress
    *
    * @return EducationRelatedContact
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
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
    * @param string $val The value of the mobilePhone
    *
    * @return EducationRelatedContact
    */
    public function setMobilePhone($val)
    {
        $this->_propDict["mobilePhone"] = $val;
        return $this;
    }

    /**
    * Gets the relationship
    *
    * @return EducationContactRelationship The relationship
    */
    public function getRelationship()
    {
        if (array_key_exists("relationship", $this->_propDict)) {
            if (is_a($this->_propDict["relationship"], "Microsoft\Graph\Model\EducationContactRelationship")) {
                return $this->_propDict["relationship"];
            } else {
                $this->_propDict["relationship"] = new EducationContactRelationship($this->_propDict["relationship"]);
                return $this->_propDict["relationship"];
            }
        }
        return null;
    }

    /**
    * Sets the relationship
    *
    * @param EducationContactRelationship $val The value to assign to the relationship
    *
    * @return EducationRelatedContact The EducationRelatedContact
    */
    public function setRelationship($val)
    {
        $this->_propDict["relationship"] = $val;
         return $this;
    }
    /**
    * Gets the accessConsent
    *
    * @return bool The accessConsent
    */
    public function getAccessConsent()
    {
        if (array_key_exists("accessConsent", $this->_propDict)) {
            return $this->_propDict["accessConsent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessConsent
    *
    * @param bool $val The value of the accessConsent
    *
    * @return EducationRelatedContact
    */
    public function setAccessConsent($val)
    {
        $this->_propDict["accessConsent"] = $val;
        return $this;
    }
}
