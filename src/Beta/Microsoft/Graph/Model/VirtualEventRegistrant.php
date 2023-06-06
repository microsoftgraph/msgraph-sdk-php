<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEventRegistrant File
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
* VirtualEventRegistrant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEventRegistrant extends Entity
{
    /**
    * Gets the cancelationDateTime
    * Time in UTC when the registrant cancels their registration for the virtual event. Only appears when applicable.
    *
    * @return \DateTime|null The cancelationDateTime
    */
    public function getCancelationDateTime()
    {
        if (array_key_exists("cancelationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["cancelationDateTime"], "\DateTime") || is_null($this->_propDict["cancelationDateTime"])) {
                return $this->_propDict["cancelationDateTime"];
            } else {
                $this->_propDict["cancelationDateTime"] = new \DateTime($this->_propDict["cancelationDateTime"]);
                return $this->_propDict["cancelationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the cancelationDateTime
    * Time in UTC when the registrant cancels their registration for the virtual event. Only appears when applicable.
    *
    * @param \DateTime $val The cancelationDateTime
    *
    * @return VirtualEventRegistrant
    */
    public function setCancelationDateTime($val)
    {
        $this->_propDict["cancelationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the email
    * Email address of the registrant.
    *
    * @return string|null The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }

    /**
    * Sets the email
    * Email address of the registrant.
    *
    * @param string $val The email
    *
    * @return VirtualEventRegistrant
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }

    /**
    * Gets the firstName
    * First name of the registrant.
    *
    * @return string|null The firstName
    */
    public function getFirstName()
    {
        if (array_key_exists("firstName", $this->_propDict)) {
            return $this->_propDict["firstName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the firstName
    * First name of the registrant.
    *
    * @param string $val The firstName
    *
    * @return VirtualEventRegistrant
    */
    public function setFirstName($val)
    {
        $this->_propDict["firstName"] = $val;
        return $this;
    }

    /**
    * Gets the lastName
    * Last name of the registrant.
    *
    * @return string|null The lastName
    */
    public function getLastName()
    {
        if (array_key_exists("lastName", $this->_propDict)) {
            return $this->_propDict["lastName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastName
    * Last name of the registrant.
    *
    * @param string $val The lastName
    *
    * @return VirtualEventRegistrant
    */
    public function setLastName($val)
    {
        $this->_propDict["lastName"] = $val;
        return $this;
    }

    /**
    * Gets the registrationDateTime
    * Time in UTC when the registrant registers for the virtual event.
    *
    * @return \DateTime|null The registrationDateTime
    */
    public function getRegistrationDateTime()
    {
        if (array_key_exists("registrationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["registrationDateTime"], "\DateTime") || is_null($this->_propDict["registrationDateTime"])) {
                return $this->_propDict["registrationDateTime"];
            } else {
                $this->_propDict["registrationDateTime"] = new \DateTime($this->_propDict["registrationDateTime"]);
                return $this->_propDict["registrationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the registrationDateTime
    * Time in UTC when the registrant registers for the virtual event.
    *
    * @param \DateTime $val The registrationDateTime
    *
    * @return VirtualEventRegistrant
    */
    public function setRegistrationDateTime($val)
    {
        $this->_propDict["registrationDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the registrationQuestionAnswers
    * The registrant's answer to the registration questions.
     *
     * @return array|null The registrationQuestionAnswers
     */
    public function getRegistrationQuestionAnswers()
    {
        if (array_key_exists("registrationQuestionAnswers", $this->_propDict)) {
           return $this->_propDict["registrationQuestionAnswers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registrationQuestionAnswers
    * The registrant's answer to the registration questions.
    *
    * @param VirtualEventRegistrationQuestionAnswer[] $val The registrationQuestionAnswers
    *
    * @return VirtualEventRegistrant
    */
    public function setRegistrationQuestionAnswers($val)
    {
        $this->_propDict["registrationQuestionAnswers"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Registration status of the registrant. Read-only.
    *
    * @return VirtualEventAttendeeRegistrationStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\VirtualEventAttendeeRegistrationStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new VirtualEventAttendeeRegistrationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Registration status of the registrant. Read-only.
    *
    * @param VirtualEventAttendeeRegistrationStatus $val The status
    *
    * @return VirtualEventRegistrant
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the userId
    * The registrant's AAD user ID. Only appears when the registrant is registered in AAD.
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    * The registrant's AAD user ID. Only appears when the registrant is registered in AAD.
    *
    * @param string $val The userId
    *
    * @return VirtualEventRegistrant
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }

}
