<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordAuthenticationMethod File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* PasswordAuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PasswordAuthenticationMethod extends AuthenticationMethod
{
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
    * @param string $val The password
    *
    * @return PasswordAuthenticationMethod
    */
    public function setPassword($val)
    {
        $this->_propDict["password"] = $val;
        return $this;
    }
    
    /**
    * Gets the creationDateTime
    *
    * @return \DateTime The creationDateTime
    */
    public function getCreationDateTime()
    {
        if (array_key_exists("creationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["creationDateTime"], "\DateTime")) {
                return $this->_propDict["creationDateTime"];
            } else {
                $this->_propDict["creationDateTime"] = new \DateTime($this->_propDict["creationDateTime"]);
                return $this->_propDict["creationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the creationDateTime
    *
    * @param \DateTime $val The creationDateTime
    *
    * @return PasswordAuthenticationMethod
    */
    public function setCreationDateTime($val)
    {
        $this->_propDict["creationDateTime"] = $val;
        return $this;
    }
    
}