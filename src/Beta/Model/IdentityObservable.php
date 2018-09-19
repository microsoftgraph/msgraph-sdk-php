<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityObservable File
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
* IdentityObservable class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IdentityObservable extends Entity
{
    /**
    * Gets the identityIndividualName
    *
    * @return string The identityIndividualName
    */
    public function getIdentityIndividualName()
    {
        if (array_key_exists("identityIndividualName", $this->_propDict)) {
            return $this->_propDict["identityIndividualName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityIndividualName
    *
    * @param string $val The value of the identityIndividualName
    *
    * @return IdentityObservable
    */
    public function setIdentityIndividualName($val)
    {
        $this->_propDict["identityIndividualName"] = $val;
        return $this;
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
    * @return IdentityObservable
    */
    public function setPassword($val)
    {
        $this->_propDict["password"] = $val;
        return $this;
    }
    /**
    * Gets the username
    *
    * @return string The username
    */
    public function getUsername()
    {
        if (array_key_exists("username", $this->_propDict)) {
            return $this->_propDict["username"];
        } else {
            return null;
        }
    }

    /**
    * Sets the username
    *
    * @param string $val The value of the username
    *
    * @return IdentityObservable
    */
    public function setUsername($val)
    {
        $this->_propDict["username"] = $val;
        return $this;
    }
}
