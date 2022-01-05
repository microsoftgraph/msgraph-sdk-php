<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewInstance File
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
* AccessReviewInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewInstance extends Entity
{
    /**
    * Gets the endDateTime
    * DateTime when review instance is scheduled to end.The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only.
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict) && !is_null($this->_propDict["endDateTime"])) {
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
    * DateTime when review instance is scheduled to end.The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only.
    *
    * @param \DateTime $val The endDateTime
    *
    * @return AccessReviewInstance
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the fallbackReviewers
    * This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. Supports $select.
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
    * This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. Supports $select.
    *
    * @param AccessReviewReviewerScope[] $val The fallbackReviewers
    *
    * @return AccessReviewInstance
    */
    public function setFallbackReviewers($val)
    {
        $this->_propDict["fallbackReviewers"] = $val;
        return $this;
    }


     /**
     * Gets the reviewers
    * This collection of access review scopes is used to define who the reviewers are. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
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
    * This collection of access review scopes is used to define who the reviewers are. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
    *
    * @param AccessReviewReviewerScope[] $val The reviewers
    *
    * @return AccessReviewInstance
    */
    public function setReviewers($val)
    {
        $this->_propDict["reviewers"] = $val;
        return $this;
    }

    /**
    * Gets the scope
    * Created based on scope and instanceEnumerationScope at the accessReviewScheduleDefinition level. Defines the scope of users reviewed in a group. Supports $select and $filter (contains only). Read-only.
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
    * Created based on scope and instanceEnumerationScope at the accessReviewScheduleDefinition level. Defines the scope of users reviewed in a group. Supports $select and $filter (contains only). Read-only.
    *
    * @param AccessReviewScope $val The scope
    *
    * @return AccessReviewInstance
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * DateTime when review instance is scheduled to start. May be in the future. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only.
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict) && !is_null($this->_propDict["startDateTime"])) {
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
    * DateTime when review instance is scheduled to start. May be in the future. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return AccessReviewInstance
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Specifies the status of an accessReview. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $select, $orderby, and $filter (eq only). Read-only.
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
    * Specifies the status of an accessReview. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $select, $orderby, and $filter (eq only). Read-only.
    *
    * @param string $val The status
    *
    * @return AccessReviewInstance
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the contactedReviewers
    * Returns the collection of reviewers who were contacted to complete this review. While the reviewers and fallbackReviewers properties of the accessReviewScheduleDefinition might specify group owners or managers as reviewers, contactedReviewers returns their individual identities. Supports $select. Read-only.
     *
     * @return AccessReviewReviewer[]|null The contactedReviewers
     */
    public function getContactedReviewers()
    {
        if (array_key_exists('contactedReviewers', $this->_propDict) && !is_null($this->_propDict['contactedReviewers'])) {
            $contactedReviewers = [];
            if (count($this->_propDict['contactedReviewers']) > 0 && is_a($this->_propDict['contactedReviewers'][0], 'AccessReviewReviewer')) {
                return $this->_propDict['contactedReviewers'];
            }
            foreach ($this->_propDict['contactedReviewers'] as $singleValue) {
                $contactedReviewers []= new AccessReviewReviewer($singleValue);
            }
            $this->_propDict['contactedReviewers'] = $contactedReviewers;
            return $this->_propDict['contactedReviewers'];
        }
        return null;
    }

    /**
    * Sets the contactedReviewers
    * Returns the collection of reviewers who were contacted to complete this review. While the reviewers and fallbackReviewers properties of the accessReviewScheduleDefinition might specify group owners or managers as reviewers, contactedReviewers returns their individual identities. Supports $select. Read-only.
    *
    * @param AccessReviewReviewer[] $val The contactedReviewers
    *
    * @return AccessReviewInstance
    */
    public function setContactedReviewers($val)
    {
        $this->_propDict["contactedReviewers"] = $val;
        return $this;
    }


     /**
     * Gets the decisions
    * Each principal reviewed in an accessReviewInstance has a decision item representing if they were approved, denied, or not yet reviewed.
     *
     * @return AccessReviewInstanceDecisionItem[]|null The decisions
     */
    public function getDecisions()
    {
        if (array_key_exists('decisions', $this->_propDict) && !is_null($this->_propDict['decisions'])) {
            $decisions = [];
            if (count($this->_propDict['decisions']) > 0 && is_a($this->_propDict['decisions'][0], 'AccessReviewInstanceDecisionItem')) {
                return $this->_propDict['decisions'];
            }
            foreach ($this->_propDict['decisions'] as $singleValue) {
                $decisions []= new AccessReviewInstanceDecisionItem($singleValue);
            }
            $this->_propDict['decisions'] = $decisions;
            return $this->_propDict['decisions'];
        }
        return null;
    }

    /**
    * Sets the decisions
    * Each principal reviewed in an accessReviewInstance has a decision item representing if they were approved, denied, or not yet reviewed.
    *
    * @param AccessReviewInstanceDecisionItem[] $val The decisions
    *
    * @return AccessReviewInstance
    */
    public function setDecisions($val)
    {
        $this->_propDict["decisions"] = $val;
        return $this;
    }

}
