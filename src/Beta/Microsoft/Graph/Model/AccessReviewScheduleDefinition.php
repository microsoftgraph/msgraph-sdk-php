<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewScheduleDefinition File
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
* AccessReviewScheduleDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewScheduleDefinition extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    *
    * @param string $val The status
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the descriptionForAdmins
    *
    * @return string The descriptionForAdmins
    */
    public function getDescriptionForAdmins()
    {
        if (array_key_exists("descriptionForAdmins", $this->_propDict)) {
            return $this->_propDict["descriptionForAdmins"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the descriptionForAdmins
    *
    * @param string $val The descriptionForAdmins
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setDescriptionForAdmins($val)
    {
        $this->_propDict["descriptionForAdmins"] = $val;
        return $this;
    }
    
    /**
    * Gets the descriptionForReviewers
    *
    * @return string The descriptionForReviewers
    */
    public function getDescriptionForReviewers()
    {
        if (array_key_exists("descriptionForReviewers", $this->_propDict)) {
            return $this->_propDict["descriptionForReviewers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the descriptionForReviewers
    *
    * @param string $val The descriptionForReviewers
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setDescriptionForReviewers($val)
    {
        $this->_propDict["descriptionForReviewers"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    *
    * @return UserIdentity The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "Beta\Microsoft\Graph\Model\UserIdentity")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new UserIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    *
    * @param UserIdentity $val The createdBy
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the scope
    *
    * @return AccessReviewScope The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            if (is_a($this->_propDict["scope"], "Beta\Microsoft\Graph\Model\AccessReviewScope")) {
                return $this->_propDict["scope"];
            } else {
                $this->_propDict["scope"] = new AccessReviewScope($this->_propDict["scope"]);
                return $this->_propDict["scope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the scope
    *
    * @param AccessReviewScope $val The scope
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
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
    * @param AccessReviewReviewerScope $val The reviewers
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setReviewers($val)
    {
		$this->_propDict["reviewers"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    *
    * @return AccessReviewScheduleSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "Beta\Microsoft\Graph\Model\AccessReviewScheduleSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new AccessReviewScheduleSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    *
    * @param AccessReviewScheduleSettings $val The settings
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the instances
     *
     * @return array The instances
     */
    public function getInstances()
    {
        if (array_key_exists("instances", $this->_propDict)) {
           return $this->_propDict["instances"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the instances
    *
    * @param AccessReviewInstance $val The instances
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setInstances($val)
    {
		$this->_propDict["instances"] = $val;
        return $this;
    }
    
}