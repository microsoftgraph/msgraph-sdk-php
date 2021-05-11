<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewHistoryDefinition File
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
* AccessReviewHistoryDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewHistoryDefinition extends Entity
{
    /**
    * Gets the createdBy
    * User who created this review history definition.
    *
    * @return UserIdentity The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\UserIdentity")) {
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
    * User who created this review history definition.
    *
    * @param UserIdentity $val The createdBy
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Timestamp when the access review definition was created.
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
    * Timestamp when the access review definition was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the decisions
    * Determines which review decisions will be included in the fetched review history data if specified. Optional on create. All decisions will be included by default if no decisions are provided on create. Possible values are: approve, deny, dontKnow, notReviewed, and notNotified.
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
    * Determines which review decisions will be included in the fetched review history data if specified. Optional on create. All decisions will be included by default if no decisions are provided on create. Possible values are: approve, deny, dontKnow, notReviewed, and notNotified.
    *
    * @param AccessReviewHistoryDecisionFilter $val The decisions
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setDecisions($val)
    {
		$this->_propDict["decisions"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name for the access review history data collection. Required.
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
    * Name for the access review history data collection. Required.
    *
    * @param string $val The displayName
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the downloadUri
    * Uri which can be used to retrieve review history data. This URI will be active for 24 hours after being generated.
    *
    * @return string The downloadUri
    */
    public function getDownloadUri()
    {
        if (array_key_exists("downloadUri", $this->_propDict)) {
            return $this->_propDict["downloadUri"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the downloadUri
    * Uri which can be used to retrieve review history data. This URI will be active for 24 hours after being generated.
    *
    * @param string $val The downloadUri
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setDownloadUri($val)
    {
        $this->_propDict["downloadUri"] = $val;
        return $this;
    }
    
    /**
    * Gets the fulfilledDateTime
    * Timestamp when all of the available data for this definition was collected. This will be set after this definition's status is set to done.
    *
    * @return \DateTime The fulfilledDateTime
    */
    public function getFulfilledDateTime()
    {
        if (array_key_exists("fulfilledDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["fulfilledDateTime"], "\DateTime")) {
                return $this->_propDict["fulfilledDateTime"];
            } else {
                $this->_propDict["fulfilledDateTime"] = new \DateTime($this->_propDict["fulfilledDateTime"]);
                return $this->_propDict["fulfilledDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fulfilledDateTime
    * Timestamp when all of the available data for this definition was collected. This will be set after this definition's status is set to done.
    *
    * @param \DateTime $val The fulfilledDateTime
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setFulfilledDateTime($val)
    {
        $this->_propDict["fulfilledDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewHistoryPeriodEndDateTime
    * Timestamp, reviews starting on or after this date will be included in the fetched history data. Required.
    *
    * @return \DateTime The reviewHistoryPeriodEndDateTime
    */
    public function getReviewHistoryPeriodEndDateTime()
    {
        if (array_key_exists("reviewHistoryPeriodEndDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reviewHistoryPeriodEndDateTime"], "\DateTime")) {
                return $this->_propDict["reviewHistoryPeriodEndDateTime"];
            } else {
                $this->_propDict["reviewHistoryPeriodEndDateTime"] = new \DateTime($this->_propDict["reviewHistoryPeriodEndDateTime"]);
                return $this->_propDict["reviewHistoryPeriodEndDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reviewHistoryPeriodEndDateTime
    * Timestamp, reviews starting on or after this date will be included in the fetched history data. Required.
    *
    * @param \DateTime $val The reviewHistoryPeriodEndDateTime
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setReviewHistoryPeriodEndDateTime($val)
    {
        $this->_propDict["reviewHistoryPeriodEndDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewHistoryPeriodStartDateTime
    * Timestamp, reviews starting on or before this date will be included in the fetched history data. Required.
    *
    * @return \DateTime The reviewHistoryPeriodStartDateTime
    */
    public function getReviewHistoryPeriodStartDateTime()
    {
        if (array_key_exists("reviewHistoryPeriodStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reviewHistoryPeriodStartDateTime"], "\DateTime")) {
                return $this->_propDict["reviewHistoryPeriodStartDateTime"];
            } else {
                $this->_propDict["reviewHistoryPeriodStartDateTime"] = new \DateTime($this->_propDict["reviewHistoryPeriodStartDateTime"]);
                return $this->_propDict["reviewHistoryPeriodStartDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reviewHistoryPeriodStartDateTime
    * Timestamp, reviews starting on or before this date will be included in the fetched history data. Required.
    *
    * @param \DateTime $val The reviewHistoryPeriodStartDateTime
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setReviewHistoryPeriodStartDateTime($val)
    {
        $this->_propDict["reviewHistoryPeriodStartDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the scopes
    * Used to scope what reviews are included in the fetched history data. Fetches reviews whose scope matches with this provided scope. See accessreviewqueryscope. Required.
     *
     * @return array The scopes
     */
    public function getScopes()
    {
        if (array_key_exists("scopes", $this->_propDict)) {
           return $this->_propDict["scopes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the scopes
    * Used to scope what reviews are included in the fetched history data. Fetches reviews whose scope matches with this provided scope. See accessreviewqueryscope. Required.
    *
    * @param AccessReviewScope $val The scopes
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setScopes($val)
    {
		$this->_propDict["scopes"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Represents the status of the review history data collection. Possible values are: done, inprogress, error, requested.
    *
    * @return AccessReviewHistoryStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\AccessReviewHistoryStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AccessReviewHistoryStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Represents the status of the review history data collection. Possible values are: done, inprogress, error, requested.
    *
    * @param AccessReviewHistoryStatus $val The status
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
}
