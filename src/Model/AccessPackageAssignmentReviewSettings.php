<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentReviewSettings File
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
* AccessPackageAssignmentReviewSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignmentReviewSettings extends Entity
{

    /**
    * Gets the expirationBehavior
    *
    * @return AccessReviewExpirationBehavior|null The expirationBehavior
    */
    public function getExpirationBehavior()
    {
        if (array_key_exists("expirationBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["expirationBehavior"], "\Microsoft\Graph\Model\AccessReviewExpirationBehavior") || is_null($this->_propDict["expirationBehavior"])) {
                return $this->_propDict["expirationBehavior"];
            } else {
                $this->_propDict["expirationBehavior"] = new AccessReviewExpirationBehavior($this->_propDict["expirationBehavior"]);
                return $this->_propDict["expirationBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationBehavior
    *
    * @param AccessReviewExpirationBehavior $val The value to assign to the expirationBehavior
    *
    * @return AccessPackageAssignmentReviewSettings The AccessPackageAssignmentReviewSettings
    */
    public function setExpirationBehavior($val)
    {
        $this->_propDict["expirationBehavior"] = $val;
         return $this;
    }

    /**
    * Gets the fallbackReviewers
    *
    * @return SubjectSet|null The fallbackReviewers
    */
    public function getFallbackReviewers()
    {
        if (array_key_exists("fallbackReviewers", $this->_propDict)) {
            if (is_a($this->_propDict["fallbackReviewers"], "\Microsoft\Graph\Model\SubjectSet") || is_null($this->_propDict["fallbackReviewers"])) {
                return $this->_propDict["fallbackReviewers"];
            } else {
                $this->_propDict["fallbackReviewers"] = new SubjectSet($this->_propDict["fallbackReviewers"]);
                return $this->_propDict["fallbackReviewers"];
            }
        }
        return null;
    }

    /**
    * Sets the fallbackReviewers
    *
    * @param SubjectSet $val The value to assign to the fallbackReviewers
    *
    * @return AccessPackageAssignmentReviewSettings The AccessPackageAssignmentReviewSettings
    */
    public function setFallbackReviewers($val)
    {
        $this->_propDict["fallbackReviewers"] = $val;
         return $this;
    }
    /**
    * Gets the isEnabled
    *
    * @return bool|null The isEnabled
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
    * @return AccessPackageAssignmentReviewSettings
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isRecommendationEnabled
    *
    * @return bool|null The isRecommendationEnabled
    */
    public function getIsRecommendationEnabled()
    {
        if (array_key_exists("isRecommendationEnabled", $this->_propDict)) {
            return $this->_propDict["isRecommendationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRecommendationEnabled
    *
    * @param bool $val The value of the isRecommendationEnabled
    *
    * @return AccessPackageAssignmentReviewSettings
    */
    public function setIsRecommendationEnabled($val)
    {
        $this->_propDict["isRecommendationEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isReviewerJustificationRequired
    *
    * @return bool|null The isReviewerJustificationRequired
    */
    public function getIsReviewerJustificationRequired()
    {
        if (array_key_exists("isReviewerJustificationRequired", $this->_propDict)) {
            return $this->_propDict["isReviewerJustificationRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isReviewerJustificationRequired
    *
    * @param bool $val The value of the isReviewerJustificationRequired
    *
    * @return AccessPackageAssignmentReviewSettings
    */
    public function setIsReviewerJustificationRequired($val)
    {
        $this->_propDict["isReviewerJustificationRequired"] = $val;
        return $this;
    }
    /**
    * Gets the isSelfReview
    *
    * @return bool|null The isSelfReview
    */
    public function getIsSelfReview()
    {
        if (array_key_exists("isSelfReview", $this->_propDict)) {
            return $this->_propDict["isSelfReview"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSelfReview
    *
    * @param bool $val The value of the isSelfReview
    *
    * @return AccessPackageAssignmentReviewSettings
    */
    public function setIsSelfReview($val)
    {
        $this->_propDict["isSelfReview"] = $val;
        return $this;
    }

    /**
    * Gets the primaryReviewers
    *
    * @return SubjectSet|null The primaryReviewers
    */
    public function getPrimaryReviewers()
    {
        if (array_key_exists("primaryReviewers", $this->_propDict)) {
            if (is_a($this->_propDict["primaryReviewers"], "\Microsoft\Graph\Model\SubjectSet") || is_null($this->_propDict["primaryReviewers"])) {
                return $this->_propDict["primaryReviewers"];
            } else {
                $this->_propDict["primaryReviewers"] = new SubjectSet($this->_propDict["primaryReviewers"]);
                return $this->_propDict["primaryReviewers"];
            }
        }
        return null;
    }

    /**
    * Sets the primaryReviewers
    *
    * @param SubjectSet $val The value to assign to the primaryReviewers
    *
    * @return AccessPackageAssignmentReviewSettings The AccessPackageAssignmentReviewSettings
    */
    public function setPrimaryReviewers($val)
    {
        $this->_propDict["primaryReviewers"] = $val;
         return $this;
    }

    /**
    * Gets the schedule
    *
    * @return EntitlementManagementSchedule|null The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Microsoft\Graph\Model\EntitlementManagementSchedule") || is_null($this->_propDict["schedule"])) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new EntitlementManagementSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }

    /**
    * Sets the schedule
    *
    * @param EntitlementManagementSchedule $val The value to assign to the schedule
    *
    * @return AccessPackageAssignmentReviewSettings The AccessPackageAssignmentReviewSettings
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
         return $this;
    }
}
