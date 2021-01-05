<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceRoleAssignmentRequest File
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
* GovernanceRoleAssignmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernanceRoleAssignmentRequest extends Entity
{
    /**
    * Gets the assignmentState
    *
    * @return string The assignmentState
    */
    public function getAssignmentState()
    {
        if (array_key_exists("assignmentState", $this->_propDict)) {
            return $this->_propDict["assignmentState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignmentState
    *
    * @param string $val The assignmentState
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setAssignmentState($val)
    {
        $this->_propDict["assignmentState"] = $val;
        return $this;
    }
    
    /**
    * Gets the linkedEligibleRoleAssignmentId
    *
    * @return string The linkedEligibleRoleAssignmentId
    */
    public function getLinkedEligibleRoleAssignmentId()
    {
        if (array_key_exists("linkedEligibleRoleAssignmentId", $this->_propDict)) {
            return $this->_propDict["linkedEligibleRoleAssignmentId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the linkedEligibleRoleAssignmentId
    *
    * @param string $val The linkedEligibleRoleAssignmentId
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setLinkedEligibleRoleAssignmentId($val)
    {
        $this->_propDict["linkedEligibleRoleAssignmentId"] = $val;
        return $this;
    }
    
    /**
    * Gets the reason
    *
    * @return string The reason
    */
    public function getReason()
    {
        if (array_key_exists("reason", $this->_propDict)) {
            return $this->_propDict["reason"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reason
    *
    * @param string $val The reason
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setReason($val)
    {
        $this->_propDict["reason"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestedDateTime
    *
    * @return \DateTime The requestedDateTime
    */
    public function getRequestedDateTime()
    {
        if (array_key_exists("requestedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["requestedDateTime"], "\DateTime")) {
                return $this->_propDict["requestedDateTime"];
            } else {
                $this->_propDict["requestedDateTime"] = new \DateTime($this->_propDict["requestedDateTime"]);
                return $this->_propDict["requestedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requestedDateTime
    *
    * @param \DateTime $val The requestedDateTime
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setRequestedDateTime($val)
    {
        $this->_propDict["requestedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceId
    *
    * @return string The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceId
    *
    * @param string $val The resourceId
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinitionId
    *
    * @return string The roleDefinitionId
    */
    public function getRoleDefinitionId()
    {
        if (array_key_exists("roleDefinitionId", $this->_propDict)) {
            return $this->_propDict["roleDefinitionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleDefinitionId
    *
    * @param string $val The roleDefinitionId
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the schedule
    *
    * @return GovernanceSchedule The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "Beta\Microsoft\Graph\Model\GovernanceSchedule")) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new GovernanceSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the schedule
    *
    * @param GovernanceSchedule $val The schedule
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return GovernanceRoleAssignmentRequestStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Beta\Microsoft\Graph\Model\GovernanceRoleAssignmentRequestStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new GovernanceRoleAssignmentRequestStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param GovernanceRoleAssignmentRequestStatus $val The status
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the subjectId
    *
    * @return string The subjectId
    */
    public function getSubjectId()
    {
        if (array_key_exists("subjectId", $this->_propDict)) {
            return $this->_propDict["subjectId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subjectId
    *
    * @param string $val The subjectId
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setSubjectId($val)
    {
        $this->_propDict["subjectId"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the type
    *
    * @param string $val The type
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
    /**
    * Gets the resource
    *
    * @return GovernanceResource The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "Beta\Microsoft\Graph\Model\GovernanceResource")) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new GovernanceResource($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resource
    *
    * @param GovernanceResource $val The resource
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinition
    *
    * @return GovernanceRoleDefinition The roleDefinition
    */
    public function getRoleDefinition()
    {
        if (array_key_exists("roleDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["roleDefinition"], "Beta\Microsoft\Graph\Model\GovernanceRoleDefinition")) {
                return $this->_propDict["roleDefinition"];
            } else {
                $this->_propDict["roleDefinition"] = new GovernanceRoleDefinition($this->_propDict["roleDefinition"]);
                return $this->_propDict["roleDefinition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the roleDefinition
    *
    * @param GovernanceRoleDefinition $val The roleDefinition
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setRoleDefinition($val)
    {
        $this->_propDict["roleDefinition"] = $val;
        return $this;
    }
    
    /**
    * Gets the subject
    *
    * @return GovernanceSubject The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            if (is_a($this->_propDict["subject"], "Beta\Microsoft\Graph\Model\GovernanceSubject")) {
                return $this->_propDict["subject"];
            } else {
                $this->_propDict["subject"] = new GovernanceSubject($this->_propDict["subject"]);
                return $this->_propDict["subject"];
            }
        }
        return null;
    }
    
    /**
    * Sets the subject
    *
    * @param GovernanceSubject $val The subject
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    
}