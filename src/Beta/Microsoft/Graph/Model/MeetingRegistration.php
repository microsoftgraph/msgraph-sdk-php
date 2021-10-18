<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingRegistration File
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
* MeetingRegistration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingRegistration extends Entity
{
    /**
    * Gets the allowedRegistrant
    *
    * @return MeetingAudience|null The allowedRegistrant
    */
    public function getAllowedRegistrant()
    {
        if (array_key_exists("allowedRegistrant", $this->_propDict)) {
            if (is_a($this->_propDict["allowedRegistrant"], "\Beta\Microsoft\Graph\Model\MeetingAudience") || is_null($this->_propDict["allowedRegistrant"])) {
                return $this->_propDict["allowedRegistrant"];
            } else {
                $this->_propDict["allowedRegistrant"] = new MeetingAudience($this->_propDict["allowedRegistrant"]);
                return $this->_propDict["allowedRegistrant"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowedRegistrant
    *
    * @param MeetingAudience $val The allowedRegistrant
    *
    * @return MeetingRegistration
    */
    public function setAllowedRegistrant($val)
    {
        $this->_propDict["allowedRegistrant"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
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
    *
    * @param string $val The description
    *
    * @return MeetingRegistration
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDateTime
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endDateTime
    *
    * @param \DateTime $val The endDateTime
    *
    * @return MeetingRegistration
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the registrationPageViewCount
    *
    * @return int|null The registrationPageViewCount
    */
    public function getRegistrationPageViewCount()
    {
        if (array_key_exists("registrationPageViewCount", $this->_propDict)) {
            return $this->_propDict["registrationPageViewCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the registrationPageViewCount
    *
    * @param int $val The registrationPageViewCount
    *
    * @return MeetingRegistration
    */
    public function setRegistrationPageViewCount($val)
    {
        $this->_propDict["registrationPageViewCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the registrationPageWebUrl
    *
    * @return string|null The registrationPageWebUrl
    */
    public function getRegistrationPageWebUrl()
    {
        if (array_key_exists("registrationPageWebUrl", $this->_propDict)) {
            return $this->_propDict["registrationPageWebUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the registrationPageWebUrl
    *
    * @param string $val The registrationPageWebUrl
    *
    * @return MeetingRegistration
    */
    public function setRegistrationPageWebUrl($val)
    {
        $this->_propDict["registrationPageWebUrl"] = $val;
        return $this;
    }
    

     /** 
     * Gets the speakers
     *
     * @return array|null The speakers
     */
    public function getSpeakers()
    {
        if (array_key_exists("speakers", $this->_propDict)) {
           return $this->_propDict["speakers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the speakers
    *
    * @param MeetingSpeaker $val The speakers
    *
    * @return MeetingRegistration
    */
    public function setSpeakers($val)
    {
        $this->_propDict["speakers"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    *
    * @param \DateTime $val The startDateTime
    *
    * @return MeetingRegistration
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the subject
    *
    * @return string|null The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subject
    *
    * @param string $val The subject
    *
    * @return MeetingRegistration
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customQuestions
     *
     * @return array|null The customQuestions
     */
    public function getCustomQuestions()
    {
        if (array_key_exists("customQuestions", $this->_propDict)) {
           return $this->_propDict["customQuestions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customQuestions
    *
    * @param MeetingRegistrationQuestion $val The customQuestions
    *
    * @return MeetingRegistration
    */
    public function setCustomQuestions($val)
    {
        $this->_propDict["customQuestions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the registrants
     *
     * @return array|null The registrants
     */
    public function getRegistrants()
    {
        if (array_key_exists("registrants", $this->_propDict)) {
           return $this->_propDict["registrants"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the registrants
    *
    * @param MeetingRegistrant $val The registrants
    *
    * @return MeetingRegistration
    */
    public function setRegistrants($val)
    {
        $this->_propDict["registrants"] = $val;
        return $this;
    }
    
}
