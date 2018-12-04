<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTask File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* PlannerTask class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PlannerTask extends Entity
{
    /**
    * Gets the createdBy
    *
    * @return IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    *
    * @param IdentitySet $val The createdBy
    *
    * @return PlannerTask
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the planId
    *
    * @return string The planId
    */
    public function getPlanId()
    {
        if (array_key_exists("planId", $this->_propDict)) {
            return $this->_propDict["planId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the planId
    *
    * @param string $val The planId
    *
    * @return PlannerTask
    */
    public function setPlanId($val)
    {
        $this->_propDict["planId"] = $val;
        return $this;
    }
    
    /**
    * Gets the bucketId
    *
    * @return string The bucketId
    */
    public function getBucketId()
    {
        if (array_key_exists("bucketId", $this->_propDict)) {
            return $this->_propDict["bucketId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bucketId
    *
    * @param string $val The bucketId
    *
    * @return PlannerTask
    */
    public function setBucketId($val)
    {
        $this->_propDict["bucketId"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the title
    *
    * @param string $val The title
    *
    * @return PlannerTask
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
    /**
    * Gets the orderHint
    *
    * @return string The orderHint
    */
    public function getOrderHint()
    {
        if (array_key_exists("orderHint", $this->_propDict)) {
            return $this->_propDict["orderHint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the orderHint
    *
    * @param string $val The orderHint
    *
    * @return PlannerTask
    */
    public function setOrderHint($val)
    {
        $this->_propDict["orderHint"] = $val;
        return $this;
    }
    
    /**
    * Gets the assigneePriority
    *
    * @return string The assigneePriority
    */
    public function getAssigneePriority()
    {
        if (array_key_exists("assigneePriority", $this->_propDict)) {
            return $this->_propDict["assigneePriority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assigneePriority
    *
    * @param string $val The assigneePriority
    *
    * @return PlannerTask
    */
    public function setAssigneePriority($val)
    {
        $this->_propDict["assigneePriority"] = $val;
        return $this;
    }
    
    /**
    * Gets the percentComplete
    *
    * @return int The percentComplete
    */
    public function getPercentComplete()
    {
        if (array_key_exists("percentComplete", $this->_propDict)) {
            return $this->_propDict["percentComplete"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the percentComplete
    *
    * @param int $val The percentComplete
    *
    * @return PlannerTask
    */
    public function setPercentComplete($val)
    {
        $this->_propDict["percentComplete"] = intval($val);
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
    * @return PlannerTask
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
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
    * @return PlannerTask
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the dueDateTime
    *
    * @return \DateTime The dueDateTime
    */
    public function getDueDateTime()
    {
        if (array_key_exists("dueDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dueDateTime"], "\DateTime")) {
                return $this->_propDict["dueDateTime"];
            } else {
                $this->_propDict["dueDateTime"] = new \DateTime($this->_propDict["dueDateTime"]);
                return $this->_propDict["dueDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dueDateTime
    *
    * @param \DateTime $val The dueDateTime
    *
    * @return PlannerTask
    */
    public function setDueDateTime($val)
    {
        $this->_propDict["dueDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the hasDescription
    *
    * @return bool The hasDescription
    */
    public function getHasDescription()
    {
        if (array_key_exists("hasDescription", $this->_propDict)) {
            return $this->_propDict["hasDescription"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasDescription
    *
    * @param bool $val The hasDescription
    *
    * @return PlannerTask
    */
    public function setHasDescription($val)
    {
        $this->_propDict["hasDescription"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the previewType
    *
    * @return PlannerPreviewType The previewType
    */
    public function getPreviewType()
    {
        if (array_key_exists("previewType", $this->_propDict)) {
            if (is_a($this->_propDict["previewType"], "Microsoft\Graph\Model\PlannerPreviewType")) {
                return $this->_propDict["previewType"];
            } else {
                $this->_propDict["previewType"] = new PlannerPreviewType($this->_propDict["previewType"]);
                return $this->_propDict["previewType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the previewType
    *
    * @param PlannerPreviewType $val The previewType
    *
    * @return PlannerTask
    */
    public function setPreviewType($val)
    {
        $this->_propDict["previewType"] = $val;
        return $this;
    }
    
    /**
    * Gets the completedDateTime
    *
    * @return \DateTime The completedDateTime
    */
    public function getCompletedDateTime()
    {
        if (array_key_exists("completedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completedDateTime"], "\DateTime")) {
                return $this->_propDict["completedDateTime"];
            } else {
                $this->_propDict["completedDateTime"] = new \DateTime($this->_propDict["completedDateTime"]);
                return $this->_propDict["completedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the completedDateTime
    *
    * @param \DateTime $val The completedDateTime
    *
    * @return PlannerTask
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the completedBy
    *
    * @return IdentitySet The completedBy
    */
    public function getCompletedBy()
    {
        if (array_key_exists("completedBy", $this->_propDict)) {
            if (is_a($this->_propDict["completedBy"], "Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["completedBy"];
            } else {
                $this->_propDict["completedBy"] = new IdentitySet($this->_propDict["completedBy"]);
                return $this->_propDict["completedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the completedBy
    *
    * @param IdentitySet $val The completedBy
    *
    * @return PlannerTask
    */
    public function setCompletedBy($val)
    {
        $this->_propDict["completedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the referenceCount
    *
    * @return int The referenceCount
    */
    public function getReferenceCount()
    {
        if (array_key_exists("referenceCount", $this->_propDict)) {
            return $this->_propDict["referenceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the referenceCount
    *
    * @param int $val The referenceCount
    *
    * @return PlannerTask
    */
    public function setReferenceCount($val)
    {
        $this->_propDict["referenceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the checklistItemCount
    *
    * @return int The checklistItemCount
    */
    public function getChecklistItemCount()
    {
        if (array_key_exists("checklistItemCount", $this->_propDict)) {
            return $this->_propDict["checklistItemCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the checklistItemCount
    *
    * @param int $val The checklistItemCount
    *
    * @return PlannerTask
    */
    public function setChecklistItemCount($val)
    {
        $this->_propDict["checklistItemCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the activeChecklistItemCount
    *
    * @return int The activeChecklistItemCount
    */
    public function getActiveChecklistItemCount()
    {
        if (array_key_exists("activeChecklistItemCount", $this->_propDict)) {
            return $this->_propDict["activeChecklistItemCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activeChecklistItemCount
    *
    * @param int $val The activeChecklistItemCount
    *
    * @return PlannerTask
    */
    public function setActiveChecklistItemCount($val)
    {
        $this->_propDict["activeChecklistItemCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the appliedCategories
    *
    * @return PlannerAppliedCategories The appliedCategories
    */
    public function getAppliedCategories()
    {
        if (array_key_exists("appliedCategories", $this->_propDict)) {
            if (is_a($this->_propDict["appliedCategories"], "Microsoft\Graph\Model\PlannerAppliedCategories")) {
                return $this->_propDict["appliedCategories"];
            } else {
                $this->_propDict["appliedCategories"] = new PlannerAppliedCategories($this->_propDict["appliedCategories"]);
                return $this->_propDict["appliedCategories"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appliedCategories
    *
    * @param PlannerAppliedCategories $val The appliedCategories
    *
    * @return PlannerTask
    */
    public function setAppliedCategories($val)
    {
        $this->_propDict["appliedCategories"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignments
    *
    * @return PlannerAssignments The assignments
    */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
            if (is_a($this->_propDict["assignments"], "Microsoft\Graph\Model\PlannerAssignments")) {
                return $this->_propDict["assignments"];
            } else {
                $this->_propDict["assignments"] = new PlannerAssignments($this->_propDict["assignments"]);
                return $this->_propDict["assignments"];
            }
        }
        return null;
    }
    
    /**
    * Sets the assignments
    *
    * @param PlannerAssignments $val The assignments
    *
    * @return PlannerTask
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the conversationThreadId
    *
    * @return string The conversationThreadId
    */
    public function getConversationThreadId()
    {
        if (array_key_exists("conversationThreadId", $this->_propDict)) {
            return $this->_propDict["conversationThreadId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conversationThreadId
    *
    * @param string $val The conversationThreadId
    *
    * @return PlannerTask
    */
    public function setConversationThreadId($val)
    {
        $this->_propDict["conversationThreadId"] = $val;
        return $this;
    }
    
    /**
    * Gets the details
    *
    * @return PlannerTaskDetails The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "Microsoft\Graph\Model\PlannerTaskDetails")) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new PlannerTaskDetails($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }
    
    /**
    * Sets the details
    *
    * @param PlannerTaskDetails $val The details
    *
    * @return PlannerTask
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignedToTaskBoardFormat
    *
    * @return PlannerAssignedToTaskBoardTaskFormat The assignedToTaskBoardFormat
    */
    public function getAssignedToTaskBoardFormat()
    {
        if (array_key_exists("assignedToTaskBoardFormat", $this->_propDict)) {
            if (is_a($this->_propDict["assignedToTaskBoardFormat"], "Microsoft\Graph\Model\PlannerAssignedToTaskBoardTaskFormat")) {
                return $this->_propDict["assignedToTaskBoardFormat"];
            } else {
                $this->_propDict["assignedToTaskBoardFormat"] = new PlannerAssignedToTaskBoardTaskFormat($this->_propDict["assignedToTaskBoardFormat"]);
                return $this->_propDict["assignedToTaskBoardFormat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the assignedToTaskBoardFormat
    *
    * @param PlannerAssignedToTaskBoardTaskFormat $val The assignedToTaskBoardFormat
    *
    * @return PlannerTask
    */
    public function setAssignedToTaskBoardFormat($val)
    {
        $this->_propDict["assignedToTaskBoardFormat"] = $val;
        return $this;
    }
    
    /**
    * Gets the progressTaskBoardFormat
    *
    * @return PlannerProgressTaskBoardTaskFormat The progressTaskBoardFormat
    */
    public function getProgressTaskBoardFormat()
    {
        if (array_key_exists("progressTaskBoardFormat", $this->_propDict)) {
            if (is_a($this->_propDict["progressTaskBoardFormat"], "Microsoft\Graph\Model\PlannerProgressTaskBoardTaskFormat")) {
                return $this->_propDict["progressTaskBoardFormat"];
            } else {
                $this->_propDict["progressTaskBoardFormat"] = new PlannerProgressTaskBoardTaskFormat($this->_propDict["progressTaskBoardFormat"]);
                return $this->_propDict["progressTaskBoardFormat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the progressTaskBoardFormat
    *
    * @param PlannerProgressTaskBoardTaskFormat $val The progressTaskBoardFormat
    *
    * @return PlannerTask
    */
    public function setProgressTaskBoardFormat($val)
    {
        $this->_propDict["progressTaskBoardFormat"] = $val;
        return $this;
    }
    
    /**
    * Gets the bucketTaskBoardFormat
    *
    * @return PlannerBucketTaskBoardTaskFormat The bucketTaskBoardFormat
    */
    public function getBucketTaskBoardFormat()
    {
        if (array_key_exists("bucketTaskBoardFormat", $this->_propDict)) {
            if (is_a($this->_propDict["bucketTaskBoardFormat"], "Microsoft\Graph\Model\PlannerBucketTaskBoardTaskFormat")) {
                return $this->_propDict["bucketTaskBoardFormat"];
            } else {
                $this->_propDict["bucketTaskBoardFormat"] = new PlannerBucketTaskBoardTaskFormat($this->_propDict["bucketTaskBoardFormat"]);
                return $this->_propDict["bucketTaskBoardFormat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bucketTaskBoardFormat
    *
    * @param PlannerBucketTaskBoardTaskFormat $val The bucketTaskBoardFormat
    *
    * @return PlannerTask
    */
    public function setBucketTaskBoardFormat($val)
    {
        $this->_propDict["bucketTaskBoardFormat"] = $val;
        return $this;
    }
    
}