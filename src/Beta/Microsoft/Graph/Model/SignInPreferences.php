<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignInPreferences File
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
* SignInPreferences class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SignInPreferences extends Entity
{
    /**
    * Gets the isSystemPreferredAuthenticationMethodEnabled
    * Indicates whether the credential preferences of the system are enabled.
    *
    * @return bool|null The isSystemPreferredAuthenticationMethodEnabled
    */
    public function getIsSystemPreferredAuthenticationMethodEnabled()
    {
        if (array_key_exists("isSystemPreferredAuthenticationMethodEnabled", $this->_propDict)) {
            return $this->_propDict["isSystemPreferredAuthenticationMethodEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSystemPreferredAuthenticationMethodEnabled
    * Indicates whether the credential preferences of the system are enabled.
    *
    * @param bool $val The value of the isSystemPreferredAuthenticationMethodEnabled
    *
    * @return SignInPreferences
    */
    public function setIsSystemPreferredAuthenticationMethodEnabled($val)
    {
        $this->_propDict["isSystemPreferredAuthenticationMethodEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the userPreferredMethodForSecondaryAuthentication
    *
    * @return UserDefaultAuthenticationMethodType|null The userPreferredMethodForSecondaryAuthentication
    */
    public function getUserPreferredMethodForSecondaryAuthentication()
    {
        if (array_key_exists("userPreferredMethodForSecondaryAuthentication", $this->_propDict)) {
            if (is_a($this->_propDict["userPreferredMethodForSecondaryAuthentication"], "\Beta\Microsoft\Graph\Model\UserDefaultAuthenticationMethodType") || is_null($this->_propDict["userPreferredMethodForSecondaryAuthentication"])) {
                return $this->_propDict["userPreferredMethodForSecondaryAuthentication"];
            } else {
                $this->_propDict["userPreferredMethodForSecondaryAuthentication"] = new UserDefaultAuthenticationMethodType($this->_propDict["userPreferredMethodForSecondaryAuthentication"]);
                return $this->_propDict["userPreferredMethodForSecondaryAuthentication"];
            }
        }
        return null;
    }

    /**
    * Sets the userPreferredMethodForSecondaryAuthentication
    *
    * @param UserDefaultAuthenticationMethodType $val The value to assign to the userPreferredMethodForSecondaryAuthentication
    *
    * @return SignInPreferences The SignInPreferences
    */
    public function setUserPreferredMethodForSecondaryAuthentication($val)
    {
        $this->_propDict["userPreferredMethodForSecondaryAuthentication"] = $val;
         return $this;
    }
}
