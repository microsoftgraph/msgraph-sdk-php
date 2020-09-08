<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApprovalStage File
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
* ApprovalStage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApprovalStage extends Entity
{
    /**
    * Gets the approvalStageTimeOutInDays
    *
    * @return int The approvalStageTimeOutInDays
    */
    public function getApprovalStageTimeOutInDays()
    {
        if (array_key_exists("approvalStageTimeOutInDays", $this->_propDict)) {
            return $this->_propDict["approvalStageTimeOutInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the approvalStageTimeOutInDays
    *
    * @param int $val The value of the approvalStageTimeOutInDays
    *
    * @return ApprovalStage
    */
    public function setApprovalStageTimeOutInDays($val)
    {
        $this->_propDict["approvalStageTimeOutInDays"] = $val;
        return $this;
    }

    /**
    * Gets the escalationApprovers
    *
    * @return UserSet The escalationApprovers
    */
    public function getEscalationApprovers()
    {
        if (array_key_exists("escalationApprovers", $this->_propDict)) {
            if (is_a($this->_propDict["escalationApprovers"], "Beta\Microsoft\Graph\Model\UserSet")) {
                return $this->_propDict["escalationApprovers"];
            } else {
                $this->_propDict["escalationApprovers"] = new UserSet($this->_propDict["escalationApprovers"]);
                return $this->_propDict["escalationApprovers"];
            }
        }
        return null;
    }

    /**
    * Sets the escalationApprovers
    *
    * @param UserSet $val The value to assign to the escalationApprovers
    *
    * @return ApprovalStage The ApprovalStage
    */
    public function setEscalationApprovers($val)
    {
        $this->_propDict["escalationApprovers"] = $val;
         return $this;
    }
    /**
    * Gets the escalationTimeInMinutes
    *
    * @return int The escalationTimeInMinutes
    */
    public function getEscalationTimeInMinutes()
    {
        if (array_key_exists("escalationTimeInMinutes", $this->_propDict)) {
            return $this->_propDict["escalationTimeInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the escalationTimeInMinutes
    *
    * @param int $val The value of the escalationTimeInMinutes
    *
    * @return ApprovalStage
    */
    public function setEscalationTimeInMinutes($val)
    {
        $this->_propDict["escalationTimeInMinutes"] = $val;
        return $this;
    }
    /**
    * Gets the isApproverJustificationRequired
    *
    * @return bool The isApproverJustificationRequired
    */
    public function getIsApproverJustificationRequired()
    {
        if (array_key_exists("isApproverJustificationRequired", $this->_propDict)) {
            return $this->_propDict["isApproverJustificationRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApproverJustificationRequired
    *
    * @param bool $val The value of the isApproverJustificationRequired
    *
    * @return ApprovalStage
    */
    public function setIsApproverJustificationRequired($val)
    {
        $this->_propDict["isApproverJustificationRequired"] = $val;
        return $this;
    }
    /**
    * Gets the isEscalationEnabled
    *
    * @return bool The isEscalationEnabled
    */
    public function getIsEscalationEnabled()
    {
        if (array_key_exists("isEscalationEnabled", $this->_propDict)) {
            return $this->_propDict["isEscalationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEscalationEnabled
    *
    * @param bool $val The value of the isEscalationEnabled
    *
    * @return ApprovalStage
    */
    public function setIsEscalationEnabled($val)
    {
        $this->_propDict["isEscalationEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the primaryApprovers
    *
    * @return UserSet The primaryApprovers
    */
    public function getPrimaryApprovers()
    {
        if (array_key_exists("primaryApprovers", $this->_propDict)) {
            if (is_a($this->_propDict["primaryApprovers"], "Beta\Microsoft\Graph\Model\UserSet")) {
                return $this->_propDict["primaryApprovers"];
            } else {
                $this->_propDict["primaryApprovers"] = new UserSet($this->_propDict["primaryApprovers"]);
                return $this->_propDict["primaryApprovers"];
            }
        }
        return null;
    }

    /**
    * Sets the primaryApprovers
    *
    * @param UserSet $val The value to assign to the primaryApprovers
    *
    * @return ApprovalStage The ApprovalStage
    */
    public function setPrimaryApprovers($val)
    {
        $this->_propDict["primaryApprovers"] = $val;
         return $this;
    }
}
