<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceRoleAssignment File
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
* GovernanceRoleAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernanceRoleAssignment extends Entity
{
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
    * @return GovernanceRoleAssignment
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
    * @return GovernanceRoleAssignment
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
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
    * @return GovernanceRoleAssignment
    */
    public function setSubjectId($val)
    {
        $this->_propDict["subjectId"] = $val;
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
    * @return GovernanceRoleAssignment
    */
    public function setLinkedEligibleRoleAssignmentId($val)
    {
        $this->_propDict["linkedEligibleRoleAssignmentId"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalId
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalId
    *
    * @param string $val The externalId
    *
    * @return GovernanceRoleAssignment
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
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
    * @return GovernanceRoleAssignment
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
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
    * @return GovernanceRoleAssignment
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the memberType
    *
    * @return string The memberType
    */
    public function getMemberType()
    {
        if (array_key_exists("memberType", $this->_propDict)) {
            return $this->_propDict["memberType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the memberType
    *
    * @param string $val The memberType
    *
    * @return GovernanceRoleAssignment
    */
    public function setMemberType($val)
    {
        $this->_propDict["memberType"] = $val;
        return $this;
    }
    
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
    * @return GovernanceRoleAssignment
    */
    public function setAssignmentState($val)
    {
        $this->_propDict["assignmentState"] = $val;
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
    * @return GovernanceRoleAssignment
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
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
    * @return GovernanceRoleAssignment
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
    * @return GovernanceRoleAssignment
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
    * @return GovernanceRoleAssignment
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    
    /**
    * Gets the linkedEligibleRoleAssignment
    *
    * @return GovernanceRoleAssignment The linkedEligibleRoleAssignment
    */
    public function getLinkedEligibleRoleAssignment()
    {
        if (array_key_exists("linkedEligibleRoleAssignment", $this->_propDict)) {
            if (is_a($this->_propDict["linkedEligibleRoleAssignment"], "Beta\Microsoft\Graph\Model\GovernanceRoleAssignment")) {
                return $this->_propDict["linkedEligibleRoleAssignment"];
            } else {
                $this->_propDict["linkedEligibleRoleAssignment"] = new GovernanceRoleAssignment($this->_propDict["linkedEligibleRoleAssignment"]);
                return $this->_propDict["linkedEligibleRoleAssignment"];
            }
        }
        return null;
    }
    
    /**
    * Sets the linkedEligibleRoleAssignment
    *
    * @param GovernanceRoleAssignment $val The linkedEligibleRoleAssignment
    *
    * @return GovernanceRoleAssignment
    */
    public function setLinkedEligibleRoleAssignment($val)
    {
        $this->_propDict["linkedEligibleRoleAssignment"] = $val;
        return $this;
    }
    
}