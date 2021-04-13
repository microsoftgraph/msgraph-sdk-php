<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AdminConsentRequestPolicy File
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
* AdminConsentRequestPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AdminConsentRequestPolicy extends Entity
{
    /**
    * Gets the isEnabled
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    *
    * @param bool $val The isEnabled
    *
    * @return AdminConsentRequestPolicy
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the notifyReviewers
    *
    * @return bool The notifyReviewers
    */
    public function getNotifyReviewers()
    {
        if (array_key_exists("notifyReviewers", $this->_propDict)) {
            return $this->_propDict["notifyReviewers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notifyReviewers
    *
    * @param bool $val The notifyReviewers
    *
    * @return AdminConsentRequestPolicy
    */
    public function setNotifyReviewers($val)
    {
        $this->_propDict["notifyReviewers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the remindersEnabled
    *
    * @return bool The remindersEnabled
    */
    public function getRemindersEnabled()
    {
        if (array_key_exists("remindersEnabled", $this->_propDict)) {
            return $this->_propDict["remindersEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remindersEnabled
    *
    * @param bool $val The remindersEnabled
    *
    * @return AdminConsentRequestPolicy
    */
    public function setRemindersEnabled($val)
    {
        $this->_propDict["remindersEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the requestDurationInDays
    *
    * @return int The requestDurationInDays
    */
    public function getRequestDurationInDays()
    {
        if (array_key_exists("requestDurationInDays", $this->_propDict)) {
            return $this->_propDict["requestDurationInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestDurationInDays
    *
    * @param int $val The requestDurationInDays
    *
    * @return AdminConsentRequestPolicy
    */
    public function setRequestDurationInDays($val)
    {
        $this->_propDict["requestDurationInDays"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the reviewers
     *
     * @return array The reviewers
     */
    public function getReviewers()
    {
        if (array_key_exists("reviewers", $this->_propDict)) {
           return $this->_propDict["reviewers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the reviewers
    *
    * @param AccessReviewScope $val The reviewers
    *
    * @return AdminConsentRequestPolicy
    */
    public function setReviewers($val)
    {
		$this->_propDict["reviewers"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    *
    * @return int The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    *
    * @param int $val The version
    *
    * @return AdminConsentRequestPolicy
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    
}