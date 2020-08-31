<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignmentReviewSettings File
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
* AssignmentReviewSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignmentReviewSettings extends Entity
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
    * @param bool $val The value of the isEnabled
    *
    * @return AssignmentReviewSettings
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the recurrenceType
    *
    * @return string The recurrenceType
    */
    public function getRecurrenceType()
    {
        if (array_key_exists("recurrenceType", $this->_propDict)) {
            return $this->_propDict["recurrenceType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recurrenceType
    *
    * @param string $val The value of the recurrenceType
    *
    * @return AssignmentReviewSettings
    */
    public function setRecurrenceType($val)
    {
        $this->_propDict["recurrenceType"] = $val;
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
    * @param string $val The value of the reviewerType
    *
    * @return AssignmentReviewSettings
    */
    public function setReviewerType($val)
    {
        $this->_propDict["reviewerType"] = $val;
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
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return AssignmentReviewSettings The AssignmentReviewSettings
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the durationInDays
    *
    * @return int The durationInDays
    */
    public function getDurationInDays()
    {
        if (array_key_exists("durationInDays", $this->_propDict)) {
            return $this->_propDict["durationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the durationInDays
    *
    * @param int $val The value of the durationInDays
    *
    * @return AssignmentReviewSettings
    */
    public function setDurationInDays($val)
    {
        $this->_propDict["durationInDays"] = $val;
        return $this;
    }

    /**
    * Gets the reviewers
    *
    * @return UserSet The reviewers
    */
    public function getReviewers()
    {
        if (array_key_exists("reviewers", $this->_propDict)) {
            if (is_a($this->_propDict["reviewers"], "Beta\Microsoft\Graph\Model\UserSet")) {
                return $this->_propDict["reviewers"];
            } else {
                $this->_propDict["reviewers"] = new UserSet($this->_propDict["reviewers"]);
                return $this->_propDict["reviewers"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewers
    *
    * @param UserSet $val The value to assign to the reviewers
    *
    * @return AssignmentReviewSettings The AssignmentReviewSettings
    */
    public function setReviewers($val)
    {
        $this->_propDict["reviewers"] = $val;
         return $this;
    }
}
