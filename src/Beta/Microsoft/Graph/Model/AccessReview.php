<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReview File
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
* AccessReview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReview extends Entity
{
    /**
    * Gets the businessFlowTemplateId
    *
    * @return string The businessFlowTemplateId
    */
    public function getBusinessFlowTemplateId()
    {
        if (array_key_exists("businessFlowTemplateId", $this->_propDict)) {
            return $this->_propDict["businessFlowTemplateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the businessFlowTemplateId
    *
    * @param string $val The businessFlowTemplateId
    *
    * @return AccessReview
    */
    public function setBusinessFlowTemplateId($val)
    {
        $this->_propDict["businessFlowTemplateId"] = $val;
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
    * @return AccessReview
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
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
    * @return AccessReview
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
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
    * @return AccessReview
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDateTime
    *
    * @return \DateTime The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
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
    * @return AccessReview
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewedEntity
    *
    * @return Identity The reviewedEntity
    */
    public function getReviewedEntity()
    {
        if (array_key_exists("reviewedEntity", $this->_propDict)) {
            if (is_a($this->_propDict["reviewedEntity"], "Beta\Microsoft\Graph\Model\Identity")) {
                return $this->_propDict["reviewedEntity"];
            } else {
                $this->_propDict["reviewedEntity"] = new Identity($this->_propDict["reviewedEntity"]);
                return $this->_propDict["reviewedEntity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reviewedEntity
    *
    * @param Identity $val The reviewedEntity
    *
    * @return AccessReview
    */
    public function setReviewedEntity($val)
    {
        $this->_propDict["reviewedEntity"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewerType
    *
    * @return string The reviewerType
    */
    public function getReviewerType()
    {
        if (array_key_exists("reviewerType", $this->_propDict)) {
            return $this->_propDict["reviewerType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reviewerType
    *
    * @param string $val The reviewerType
    *
    * @return AccessReview
    */
    public function setReviewerType($val)
    {
        $this->_propDict["reviewerType"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    *
    * @return AccessReviewSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "Beta\Microsoft\Graph\Model\AccessReviewSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new AccessReviewSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    *
    * @param AccessReviewSettings $val The settings
    *
    * @return AccessReview
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
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
    * @return AccessReview
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
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
    * @return AccessReview
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the decisions
     *
     * @return array The decisions
     */
    public function getDecisions()
    {
        if (array_key_exists("decisions", $this->_propDict)) {
           return $this->_propDict["decisions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the decisions
    *
    * @param AccessReviewDecision $val The decisions
    *
    * @return AccessReview
    */
    public function setDecisions($val)
    {
		$this->_propDict["decisions"] = $val;
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
    * @param AccessReview $val The instances
    *
    * @return AccessReview
    */
    public function setInstances($val)
    {
		$this->_propDict["instances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the myDecisions
     *
     * @return array The myDecisions
     */
    public function getMyDecisions()
    {
        if (array_key_exists("myDecisions", $this->_propDict)) {
           return $this->_propDict["myDecisions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the myDecisions
    *
    * @param AccessReviewDecision $val The myDecisions
    *
    * @return AccessReview
    */
    public function setMyDecisions($val)
    {
		$this->_propDict["myDecisions"] = $val;
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
    * @param AccessReviewReviewer $val The reviewers
    *
    * @return AccessReview
    */
    public function setReviewers($val)
    {
		$this->_propDict["reviewers"] = $val;
        return $this;
    }
    
}