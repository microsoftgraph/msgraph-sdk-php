<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RegistrationAndResetTarget File
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
* RegistrationAndResetTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RegistrationAndResetTarget extends Entity
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
    * @return RegistrationAndResetTarget
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the minAuthMethodsToRegister
    *
    * @return int The minAuthMethodsToRegister
    */
    public function getMinAuthMethodsToRegister()
    {
        if (array_key_exists("minAuthMethodsToRegister", $this->_propDict)) {
            return $this->_propDict["minAuthMethodsToRegister"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minAuthMethodsToRegister
    *
    * @param int $val The value of the minAuthMethodsToRegister
    *
    * @return RegistrationAndResetTarget
    */
    public function setMinAuthMethodsToRegister($val)
    {
        $this->_propDict["minAuthMethodsToRegister"] = $val;
        return $this;
    }
    /**
    * Gets the minAuthMethodsToReset
    *
    * @return int The minAuthMethodsToReset
    */
    public function getMinAuthMethodsToReset()
    {
        if (array_key_exists("minAuthMethodsToReset", $this->_propDict)) {
            return $this->_propDict["minAuthMethodsToReset"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minAuthMethodsToReset
    *
    * @param int $val The value of the minAuthMethodsToReset
    *
    * @return RegistrationAndResetTarget
    */
    public function setMinAuthMethodsToReset($val)
    {
        $this->_propDict["minAuthMethodsToReset"] = $val;
        return $this;
    }

    /**
    * Gets the targetType
    *
    * @return AuthenticationMethodTargetType The targetType
    */
    public function getTargetType()
    {
        if (array_key_exists("targetType", $this->_propDict)) {
            if (is_a($this->_propDict["targetType"], "Beta\Microsoft\Graph\Model\AuthenticationMethodTargetType")) {
                return $this->_propDict["targetType"];
            } else {
                $this->_propDict["targetType"] = new AuthenticationMethodTargetType($this->_propDict["targetType"]);
                return $this->_propDict["targetType"];
            }
        }
        return null;
    }

    /**
    * Sets the targetType
    *
    * @param AuthenticationMethodTargetType $val The value to assign to the targetType
    *
    * @return RegistrationAndResetTarget The RegistrationAndResetTarget
    */
    public function setTargetType($val)
    {
        $this->_propDict["targetType"] = $val;
         return $this;
    }
}
