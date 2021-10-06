<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewScheduleDefinition File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* AccessReviewScheduleDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewScheduleDefinition extends Entity
{
    /**
    * Gets the createdBy
    * User who created this review. Read-only.
    *
    * @return UserIdentity|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict) && !is_null($this->_propDict["createdBy"])) {
            if (is_a($this->_propDict["createdBy"], "\Microsoft\Graph\Model\UserIdentity")) {
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
    * User who created this review. Read-only.
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
    * Gets the createdDateTime
    * Timestamp when the access review series was created. Supports $select and $orderBy. Read-only.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict) && !is_null($this->_propDict["createdDateTime"])) {
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
    * Timestamp when the access review series was created. Supports $select and $orderBy. Read-only.
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
    * Gets the descriptionForAdmins
    * Description provided by review creators to provide more context of the review to admins. Supports $select.
    *
    * @return string|null The descriptionForAdmins
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
    * Description provided by review creators to provide more context of the review to admins. Supports $select.
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
    * Description provided  by review creators to provide more context of the review to reviewers. Reviewers will see this description in the email sent to them requesting their review. Email notifications support up to 256 characters. Supports $select.
    *
    * @return string|null The descriptionForReviewers
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
    * Description provided  by review creators to provide more context of the review to reviewers. Reviewers will see this description in the email sent to them requesting their review. Email notifications support up to 256 characters. Supports $select.
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
    * Gets the displayName
    * Name of the access review series. Supports $select and $orderBy. Required on create.
    *
    * @return string|null The displayName
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
    * Name of the access review series. Supports $select and $orderBy. Required on create.
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
     * Gets the fallbackReviewers
    * This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. See accessReviewReviewerScope. Replaces backupReviewers. Supports $select.
     *
     * @return AccessReviewReviewerScope[]|null The fallbackReviewers
     */
    public function getFallbackReviewers()
    {
        if (array_key_exists('fallbackReviewers', $this->_propDict) && !is_null($this->_propDict['fallbackReviewers'])) {
            $fallbackReviewers = [];
            if (count($this->_propDict['fallbackReviewers']) > 0 && is_a($this->_propDict['fallbackReviewers'][0], 'AccessReviewReviewerScope')) {
                return $this->_propDict['fallbackReviewers'];
            }
            foreach ($this->_propDict['fallbackReviewers'] as $singleValue) {
                $fallbackReviewers []= new AccessReviewReviewerScope($singleValue);
            }
            $this->_propDict['fallbackReviewers'] = $fallbackReviewers;
            return $this->_propDict['fallbackReviewers'];
        }
        return null;
    }
    
    /** 
    * Sets the fallbackReviewers
    * This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. See accessReviewReviewerScope. Replaces backupReviewers. Supports $select.
    *
    * @param AccessReviewReviewerScope[] $val The fallbackReviewers
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setFallbackReviewers($val)
    {
        $this->_propDict["fallbackReviewers"] = $val;
        return $this;
    }
    
    /**
    * Gets the instanceEnumerationScope
    * This property is required when scoping a review to guest users' access across all Microsoft 365 groups and determines which Microsoft 365 groups are reviewed. Each group will become a unique accessReviewInstance of the access review series.  For supported scopes, see accessReviewScope. Supports $select. For examples of options for configuring instanceEnumerationScope, see Configure the scope of your access review definition using the Microsoft Graph API.
    *
    * @return AccessReviewScope|null The instanceEnumerationScope
    */
    public function getInstanceEnumerationScope()
    {
        if (array_key_exists("instanceEnumerationScope", $this->_propDict) && !is_null($this->_propDict["instanceEnumerationScope"])) {
            if (is_a($this->_propDict["instanceEnumerationScope"], "\Microsoft\Graph\Model\AccessReviewScope")) {
                return $this->_propDict["instanceEnumerationScope"];
            } else {
                $this->_propDict["instanceEnumerationScope"] = new AccessReviewScope($this->_propDict["instanceEnumerationScope"]);
                return $this->_propDict["instanceEnumerationScope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the instanceEnumerationScope
    * This property is required when scoping a review to guest users' access across all Microsoft 365 groups and determines which Microsoft 365 groups are reviewed. Each group will become a unique accessReviewInstance of the access review series.  For supported scopes, see accessReviewScope. Supports $select. For examples of options for configuring instanceEnumerationScope, see Configure the scope of your access review definition using the Microsoft Graph API.
    *
    * @param AccessReviewScope $val The instanceEnumerationScope
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setInstanceEnumerationScope($val)
    {
        $this->_propDict["instanceEnumerationScope"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Timestamp when the access review series was last modified. Supports $select. Read-only.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict) && !is_null($this->_propDict["lastModifiedDateTime"])) {
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
    * Timestamp when the access review series was last modified. Supports $select. Read-only.
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
     * Gets the reviewers
    * This collection of access review scopes is used to define who are the reviewers. The reviewers property is only updatable if individual users are assigned as reviewers. Required on create. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
     *
     * @return AccessReviewReviewerScope[]|null The reviewers
     */
    public function getReviewers()
    {
        if (array_key_exists('reviewers', $this->_propDict) && !is_null($this->_propDict['reviewers'])) {
            $reviewers = [];
            if (count($this->_propDict['reviewers']) > 0 && is_a($this->_propDict['reviewers'][0], 'AccessReviewReviewerScope')) {
                return $this->_propDict['reviewers'];
            }
            foreach ($this->_propDict['reviewers'] as $singleValue) {
                $reviewers []= new AccessReviewReviewerScope($singleValue);
            }
            $this->_propDict['reviewers'] = $reviewers;
            return $this->_propDict['reviewers'];
        }
        return null;
    }
    
    /** 
    * Sets the reviewers
    * This collection of access review scopes is used to define who are the reviewers. The reviewers property is only updatable if individual users are assigned as reviewers. Required on create. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
    *
    * @param AccessReviewReviewerScope[] $val The reviewers
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setReviewers($val)
    {
        $this->_propDict["reviewers"] = $val;
        return $this;
    }
    
    /**
    * Gets the scope
    * Defines the entities whose access is reviewed.  For supported scopes, see accessReviewScope. Required on create. Supports $select and $filter (contains only). For examples of options for configuring scope, see Configure the scope of your access review definition using the Microsoft Graph API.
    *
    * @return AccessReviewScope|null The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict) && !is_null($this->_propDict["scope"])) {
            if (is_a($this->_propDict["scope"], "\Microsoft\Graph\Model\AccessReviewScope")) {
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
    * Defines the entities whose access is reviewed.  For supported scopes, see accessReviewScope. Required on create. Supports $select and $filter (contains only). For examples of options for configuring scope, see Configure the scope of your access review definition using the Microsoft Graph API.
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
    * Gets the settings
    * The settings for an access review series, see type definition below. Supports $select. Required on create.
    *
    * @return AccessReviewScheduleSettings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict) && !is_null($this->_propDict["settings"])) {
            if (is_a($this->_propDict["settings"], "\Microsoft\Graph\Model\AccessReviewScheduleSettings")) {
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
    * The settings for an access review series, see type definition below. Supports $select. Required on create.
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
    * Gets the status
    * This read-only field specifies the status of an access review. The typical states include Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.  Supports $select, $orderby, and $filter (eq only). Read-only.
    *
    * @return string|null The status
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
    * This read-only field specifies the status of an access review. The typical states include Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.  Supports $select, $orderby, and $filter (eq only). Read-only.
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
     * Gets the instances
    * If the accessReviewScheduleDefinition is a recurring access review, instances represent each recurrence. A review that does not recur will have exactly one instance. Instances also represent each unique resource under review in the accessReviewScheduleDefinition. If a review has multiple resources and multiple instances, each resource will have a unique instance for each recurrence.
     *
     * @return AccessReviewInstance[]|null The instances
     */
    public function getInstances()
    {
        if (array_key_exists('instances', $this->_propDict) && !is_null($this->_propDict['instances'])) {
            $instances = [];
            if (count($this->_propDict['instances']) > 0 && is_a($this->_propDict['instances'][0], 'AccessReviewInstance')) {
                return $this->_propDict['instances'];
            }
            foreach ($this->_propDict['instances'] as $singleValue) {
                $instances []= new AccessReviewInstance($singleValue);
            }
            $this->_propDict['instances'] = $instances;
            return $this->_propDict['instances'];
        }
        return null;
    }
    
    /** 
    * Sets the instances
    * If the accessReviewScheduleDefinition is a recurring access review, instances represent each recurrence. A review that does not recur will have exactly one instance. Instances also represent each unique resource under review in the accessReviewScheduleDefinition. If a review has multiple resources and multiple instances, each resource will have a unique instance for each recurrence.
    *
    * @param AccessReviewInstance[] $val The instances
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setInstances($val)
    {
        $this->_propDict["instances"] = $val;
        return $this;
    }
    
}
