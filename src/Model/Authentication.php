<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Authentication File
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
* Authentication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Authentication extends Entity
{

     /**
     * Gets the fido2Methods
    * Represents the FIDO2 security keys registered to a user for authentication.
     *
     * @return array|null The fido2Methods
     */
    public function getFido2Methods()
    {
        if (array_key_exists("fido2Methods", $this->_propDict)) {
           return $this->_propDict["fido2Methods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fido2Methods
    * Represents the FIDO2 security keys registered to a user for authentication.
    *
    * @param Fido2AuthenticationMethod[] $val The fido2Methods
    *
    * @return Authentication
    */
    public function setFido2Methods($val)
    {
        $this->_propDict["fido2Methods"] = $val;
        return $this;
    }


     /**
     * Gets the methods
    * Represents all authentication methods registered to a user.
     *
     * @return array|null The methods
     */
    public function getMethods()
    {
        if (array_key_exists("methods", $this->_propDict)) {
           return $this->_propDict["methods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the methods
    * Represents all authentication methods registered to a user.
    *
    * @param AuthenticationMethod[] $val The methods
    *
    * @return Authentication
    */
    public function setMethods($val)
    {
        $this->_propDict["methods"] = $val;
        return $this;
    }


     /**
     * Gets the microsoftAuthenticatorMethods
    * The details of the Microsoft Authenticator app registered to a user for authentication.
     *
     * @return array|null The microsoftAuthenticatorMethods
     */
    public function getMicrosoftAuthenticatorMethods()
    {
        if (array_key_exists("microsoftAuthenticatorMethods", $this->_propDict)) {
           return $this->_propDict["microsoftAuthenticatorMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microsoftAuthenticatorMethods
    * The details of the Microsoft Authenticator app registered to a user for authentication.
    *
    * @param MicrosoftAuthenticatorAuthenticationMethod[] $val The microsoftAuthenticatorMethods
    *
    * @return Authentication
    */
    public function setMicrosoftAuthenticatorMethods($val)
    {
        $this->_propDict["microsoftAuthenticatorMethods"] = $val;
        return $this;
    }


     /**
     * Gets the operations
     *
     * @return array|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operations
    *
    * @param LongRunningOperation[] $val The operations
    *
    * @return Authentication
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }


     /**
     * Gets the passwordMethods
    * Represents the details of the password authentication method registered to a user for authentication.
     *
     * @return array|null The passwordMethods
     */
    public function getPasswordMethods()
    {
        if (array_key_exists("passwordMethods", $this->_propDict)) {
           return $this->_propDict["passwordMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMethods
    * Represents the details of the password authentication method registered to a user for authentication.
    *
    * @param PasswordAuthenticationMethod[] $val The passwordMethods
    *
    * @return Authentication
    */
    public function setPasswordMethods($val)
    {
        $this->_propDict["passwordMethods"] = $val;
        return $this;
    }


     /**
     * Gets the temporaryAccessPassMethods
    * Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
     *
     * @return array|null The temporaryAccessPassMethods
     */
    public function getTemporaryAccessPassMethods()
    {
        if (array_key_exists("temporaryAccessPassMethods", $this->_propDict)) {
           return $this->_propDict["temporaryAccessPassMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the temporaryAccessPassMethods
    * Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
    *
    * @param TemporaryAccessPassAuthenticationMethod[] $val The temporaryAccessPassMethods
    *
    * @return Authentication
    */
    public function setTemporaryAccessPassMethods($val)
    {
        $this->_propDict["temporaryAccessPassMethods"] = $val;
        return $this;
    }


     /**
     * Gets the windowsHelloForBusinessMethods
    * Represents the Windows Hello for Business authentication method registered to a user for authentication.
     *
     * @return array|null The windowsHelloForBusinessMethods
     */
    public function getWindowsHelloForBusinessMethods()
    {
        if (array_key_exists("windowsHelloForBusinessMethods", $this->_propDict)) {
           return $this->_propDict["windowsHelloForBusinessMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsHelloForBusinessMethods
    * Represents the Windows Hello for Business authentication method registered to a user for authentication.
    *
    * @param WindowsHelloForBusinessAuthenticationMethod[] $val The windowsHelloForBusinessMethods
    *
    * @return Authentication
    */
    public function setWindowsHelloForBusinessMethods($val)
    {
        $this->_propDict["windowsHelloForBusinessMethods"] = $val;
        return $this;
    }

}
