<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserRegistrationCount File
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
* UserRegistrationCount class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserRegistrationCount extends Entity
{
    /**
    * Gets the registrationCount
    *
    * @return int The registrationCount
    */
    public function getRegistrationCount()
    {
        if (array_key_exists("registrationCount", $this->_propDict)) {
            return $this->_propDict["registrationCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registrationCount
    *
    * @param int $val The value of the registrationCount
    *
    * @return UserRegistrationCount
    */
    public function setRegistrationCount($val)
    {
        $this->_propDict["registrationCount"] = $val;
        return $this;
    }

    /**
    * Gets the registrationStatus
    *
    * @return RegistrationStatusType The registrationStatus
    */
    public function getRegistrationStatus()
    {
        if (array_key_exists("registrationStatus", $this->_propDict)) {
            if (is_a($this->_propDict["registrationStatus"], "Beta\Microsoft\Graph\Model\RegistrationStatusType")) {
                return $this->_propDict["registrationStatus"];
            } else {
                $this->_propDict["registrationStatus"] = new RegistrationStatusType($this->_propDict["registrationStatus"]);
                return $this->_propDict["registrationStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the registrationStatus
    *
    * @param RegistrationStatusType $val The value to assign to the registrationStatus
    *
    * @return UserRegistrationCount The UserRegistrationCount
    */
    public function setRegistrationStatus($val)
    {
        $this->_propDict["registrationStatus"] = $val;
         return $this;
    }
}
