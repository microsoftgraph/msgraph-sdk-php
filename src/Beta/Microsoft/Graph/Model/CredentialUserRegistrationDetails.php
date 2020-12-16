<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CredentialUserRegistrationDetails File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* CredentialUserRegistrationDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CredentialUserRegistrationDetails extends Entity
{

     /** 
     * Gets the authMethods
     *
     * @return array The authMethods
     */
    public function getAuthMethods()
    {
        if (array_key_exists("authMethods", $this->_propDict)) {
           return $this->_propDict["authMethods"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the authMethods
    *
    * @param RegistrationAuthMethod $val The authMethods
    *
    * @return CredentialUserRegistrationDetails
    */
    public function setAuthMethods($val)
    {
		$this->_propDict["authMethods"] = $val;
        return $this;
    }
    
    /**
    * Gets the isCapable
    *
    * @return bool The isCapable
    */
    public function getIsCapable()
    {
        if (array_key_exists("isCapable", $this->_propDict)) {
            return $this->_propDict["isCapable"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isCapable
    *
    * @param bool $val The isCapable
    *
    * @return CredentialUserRegistrationDetails
    */
    public function setIsCapable($val)
    {
        $this->_propDict["isCapable"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isEnabled
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    *
    * @param bool $val The isEnabled
    *
    * @return CredentialUserRegistrationDetails
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isMfaRegistered
    *
    * @return bool The isMfaRegistered
    */
    public function getIsMfaRegistered()
    {
        if (array_key_exists("isMfaRegistered", $this->_propDict)) {
            return $this->_propDict["isMfaRegistered"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isMfaRegistered
    *
    * @param bool $val The isMfaRegistered
    *
    * @return CredentialUserRegistrationDetails
    */
    public function setIsMfaRegistered($val)
    {
        $this->_propDict["isMfaRegistered"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isRegistered
    *
    * @return bool The isRegistered
    */
    public function getIsRegistered()
    {
        if (array_key_exists("isRegistered", $this->_propDict)) {
            return $this->_propDict["isRegistered"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRegistered
    *
    * @param bool $val The isRegistered
    *
    * @return CredentialUserRegistrationDetails
    */
    public function setIsRegistered($val)
    {
        $this->_propDict["isRegistered"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the userDisplayName
    *
    * @return string The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userDisplayName
    *
    * @param string $val The userDisplayName
    *
    * @return CredentialUserRegistrationDetails
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
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
    * @return CredentialUserRegistrationDetails
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}