<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordProfile File
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
* PasswordProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PasswordProfile extends Entity
{
    /**
    * Gets the property dictionary of the PasswordProfile
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the password
    *
    * @return string The password
    */
    public function getPassword()
    {
        if (array_key_exists("password", $this->_propDict)) {
            return $this->_propDict["password"];
        } else {
            return null;
        }
    }

    /**
    * Sets the password
    *
    * @param string $val The value of the password
    *
    * @return PasswordProfile
    */
    public function setPassword($val)
    {
        $this->_propDict["password"] = $val;
        return $this;
    }
    
    /**
    * Gets the forceChangePasswordNextSignIn
    *
    * @return bool The forceChangePasswordNextSignIn
    */
    public function getForceChangePasswordNextSignIn()
    {
        if (array_key_exists("forceChangePasswordNextSignIn", $this->_propDict)) {
            return $this->_propDict["forceChangePasswordNextSignIn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the forceChangePasswordNextSignIn
    *
    * @param bool $val The value of the forceChangePasswordNextSignIn
    *
    * @return PasswordProfile
    */
    public function setForceChangePasswordNextSignIn($val)
    {
        $this->_propDict["force_change_password_next_sign_in"] = $val;
        return $this;
    }
}
