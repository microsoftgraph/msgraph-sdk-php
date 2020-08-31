<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RegistrationEnforcement File
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
* RegistrationEnforcement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RegistrationEnforcement extends Entity
{
    /**
    * Gets the isAllowedToSkipRegistration
    *
    * @return bool The isAllowedToSkipRegistration
    */
    public function getIsAllowedToSkipRegistration()
    {
        if (array_key_exists("isAllowedToSkipRegistration", $this->_propDict)) {
            return $this->_propDict["isAllowedToSkipRegistration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAllowedToSkipRegistration
    *
    * @param bool $val The value of the isAllowedToSkipRegistration
    *
    * @return RegistrationEnforcement
    */
    public function setIsAllowedToSkipRegistration($val)
    {
        $this->_propDict["isAllowedToSkipRegistration"] = $val;
        return $this;
    }
    /**
    * Gets the registrationSkipDurationInDays
    *
    * @return int The registrationSkipDurationInDays
    */
    public function getRegistrationSkipDurationInDays()
    {
        if (array_key_exists("registrationSkipDurationInDays", $this->_propDict)) {
            return $this->_propDict["registrationSkipDurationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registrationSkipDurationInDays
    *
    * @param int $val The value of the registrationSkipDurationInDays
    *
    * @return RegistrationEnforcement
    */
    public function setRegistrationSkipDurationInDays($val)
    {
        $this->_propDict["registrationSkipDurationInDays"] = $val;
        return $this;
    }
}
