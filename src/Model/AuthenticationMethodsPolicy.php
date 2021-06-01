<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodsPolicy File
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
* AuthenticationMethodsPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodsPolicy extends Entity
{
    /**
    * Gets the description
    * A description of the policy.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * A description of the policy.
    *
    * @param string $val The description
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of the policy.
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
    * The name of the policy.
    *
    * @param string $val The displayName
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time of the last update to the policy.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * The date and time of the last update to the policy.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the policyVersion
    * The version of the policy in use.
    *
    * @return string|null The policyVersion
    */
    public function getPolicyVersion()
    {
        if (array_key_exists("policyVersion", $this->_propDict)) {
            return $this->_propDict["policyVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the policyVersion
    * The version of the policy in use.
    *
    * @param string $val The policyVersion
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setPolicyVersion($val)
    {
        $this->_propDict["policyVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the reconfirmationInDays
    *
    * @return int|null The reconfirmationInDays
    */
    public function getReconfirmationInDays()
    {
        if (array_key_exists("reconfirmationInDays", $this->_propDict)) {
            return $this->_propDict["reconfirmationInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reconfirmationInDays
    *
    * @param int $val The reconfirmationInDays
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setReconfirmationInDays($val)
    {
        $this->_propDict["reconfirmationInDays"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the authenticationMethodConfigurations
    * Represents the settings for each authentication method.
     *
     * @return array|null The authenticationMethodConfigurations
     */
    public function getAuthenticationMethodConfigurations()
    {
        if (array_key_exists("authenticationMethodConfigurations", $this->_propDict)) {
           return $this->_propDict["authenticationMethodConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the authenticationMethodConfigurations
    * Represents the settings for each authentication method.
    *
    * @param AuthenticationMethodConfiguration $val The authenticationMethodConfigurations
    *
    * @return AuthenticationMethodsPolicy
    */
    public function setAuthenticationMethodConfigurations($val)
    {
        $this->_propDict["authenticationMethodConfigurations"] = $val;
        return $this;
    }
    
}
