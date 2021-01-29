<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewInstanceDecisionItem File
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
* AccessReviewInstanceDecisionItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewInstanceDecisionItem extends Entity
{
    /**
    * Gets the accessReviewId
    * The identifier of the accessReviewInstance parent.
    *
    * @return string The accessReviewId
    */
    public function getAccessReviewId()
    {
        if (array_key_exists("accessReviewId", $this->_propDict)) {
            return $this->_propDict["accessReviewId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accessReviewId
    * The identifier of the accessReviewInstance parent.
    *
    * @param string $val The accessReviewId
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setAccessReviewId($val)
    {
        $this->_propDict["accessReviewId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appliedBy
    * The identifier of the user who applied the decision.
    *
    * @return UserIdentity The appliedBy
    */
    public function getAppliedBy()
    {
        if (array_key_exists("appliedBy", $this->_propDict)) {
            if (is_a($this->_propDict["appliedBy"], "Beta\Microsoft\Graph\Model\UserIdentity")) {
                return $this->_propDict["appliedBy"];
            } else {
                $this->_propDict["appliedBy"] = new UserIdentity($this->_propDict["appliedBy"]);
                return $this->_propDict["appliedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appliedBy
    * The identifier of the user who applied the decision.
    *
    * @param UserIdentity $val The appliedBy
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setAppliedBy($val)
    {
        $this->_propDict["appliedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the appliedDateTime
    * The DateTime when the approval decision was applied.
    *
    * @return \DateTime The appliedDateTime
    */
    public function getAppliedDateTime()
    {
        if (array_key_exists("appliedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["appliedDateTime"], "\DateTime")) {
                return $this->_propDict["appliedDateTime"];
            } else {
                $this->_propDict["appliedDateTime"] = new \DateTime($this->_propDict["appliedDateTime"]);
                return $this->_propDict["appliedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appliedDateTime
    * The DateTime when the approval decision was applied.
    *
    * @param \DateTime $val The appliedDateTime
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setAppliedDateTime($val)
    {
        $this->_propDict["appliedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the applyResult
    * The result of applying the decision. Possible values: NotApplied, Success, Failed, NotFound, or NotSupported.
    *
    * @return string The applyResult
    */
    public function getApplyResult()
    {
        if (array_key_exists("applyResult", $this->_propDict)) {
            return $this->_propDict["applyResult"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applyResult
    * The result of applying the decision. Possible values: NotApplied, Success, Failed, NotFound, or NotSupported.
    *
    * @param string $val The applyResult
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setApplyResult($val)
    {
        $this->_propDict["applyResult"] = $val;
        return $this;
    }
    
    /**
    * Gets the decision
    * Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow.
    *
    * @return string The decision
    */
    public function getDecision()
    {
        if (array_key_exists("decision", $this->_propDict)) {
            return $this->_propDict["decision"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the decision
    * Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow.
    *
    * @param string $val The decision
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setDecision($val)
    {
        $this->_propDict["decision"] = $val;
        return $this;
    }
    
    /**
    * Gets the justification
    * The review decision justification.
    *
    * @return string The justification
    */
    public function getJustification()
    {
        if (array_key_exists("justification", $this->_propDict)) {
            return $this->_propDict["justification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the justification
    * The review decision justification.
    *
    * @param string $val The justification
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setJustification($val)
    {
        $this->_propDict["justification"] = $val;
        return $this;
    }
    
    /**
    * Gets the recommendation
    * A system-generated recommendation for the approval decision. Possible values: Approve, Deny, or NotAvailable.
    *
    * @return string The recommendation
    */
    public function getRecommendation()
    {
        if (array_key_exists("recommendation", $this->_propDict)) {
            return $this->_propDict["recommendation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recommendation
    * A system-generated recommendation for the approval decision. Possible values: Approve, Deny, or NotAvailable.
    *
    * @param string $val The recommendation
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setRecommendation($val)
    {
        $this->_propDict["recommendation"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewedBy
    * The identifier of the reviewer.
    *
    * @return UserIdentity The reviewedBy
    */
    public function getReviewedBy()
    {
        if (array_key_exists("reviewedBy", $this->_propDict)) {
            if (is_a($this->_propDict["reviewedBy"], "Beta\Microsoft\Graph\Model\UserIdentity")) {
                return $this->_propDict["reviewedBy"];
            } else {
                $this->_propDict["reviewedBy"] = new UserIdentity($this->_propDict["reviewedBy"]);
                return $this->_propDict["reviewedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reviewedBy
    * The identifier of the reviewer.
    *
    * @param UserIdentity $val The reviewedBy
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setReviewedBy($val)
    {
        $this->_propDict["reviewedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewedDateTime
    * The DateTime when the review occurred.
    *
    * @return \DateTime The reviewedDateTime
    */
    public function getReviewedDateTime()
    {
        if (array_key_exists("reviewedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reviewedDateTime"], "\DateTime")) {
                return $this->_propDict["reviewedDateTime"];
            } else {
                $this->_propDict["reviewedDateTime"] = new \DateTime($this->_propDict["reviewedDateTime"]);
                return $this->_propDict["reviewedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reviewedDateTime
    * The DateTime when the review occurred.
    *
    * @param \DateTime $val The reviewedDateTime
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setReviewedDateTime($val)
    {
        $this->_propDict["reviewedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the target
    * The target of this specific decision. Decision targets can be of different types – each one with its own specific properties. See accessReviewInstanceDecisionItemTarget.
    *
    * @return AccessReviewInstanceDecisionItemTarget The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "Beta\Microsoft\Graph\Model\AccessReviewInstanceDecisionItemTarget")) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new AccessReviewInstanceDecisionItemTarget($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }
    
    /**
    * Sets the target
    * The target of this specific decision. Decision targets can be of different types – each one with its own specific properties. See accessReviewInstanceDecisionItemTarget.
    *
    * @param AccessReviewInstanceDecisionItemTarget $val The target
    *
    * @return AccessReviewInstanceDecisionItem
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
    
}