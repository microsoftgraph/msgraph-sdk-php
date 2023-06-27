<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RedundantAssignmentAlertIncident File
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
* RedundantAssignmentAlertIncident class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RedundantAssignmentAlertIncident extends UnifiedRoleManagementAlertIncident
{
    /**
    * Gets the assigneeDisplayName
    * Display name of the subject that the incident applies to.
    *
    * @return string|null The assigneeDisplayName
    */
    public function getAssigneeDisplayName()
    {
        if (array_key_exists("assigneeDisplayName", $this->_propDict)) {
            return $this->_propDict["assigneeDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assigneeDisplayName
    * Display name of the subject that the incident applies to.
    *
    * @param string $val The assigneeDisplayName
    *
    * @return RedundantAssignmentAlertIncident
    */
    public function setAssigneeDisplayName($val)
    {
        $this->_propDict["assigneeDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the assigneeId
    * The identifier of the subject that the incident applies to.
    *
    * @return string|null The assigneeId
    */
    public function getAssigneeId()
    {
        if (array_key_exists("assigneeId", $this->_propDict)) {
            return $this->_propDict["assigneeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assigneeId
    * The identifier of the subject that the incident applies to.
    *
    * @param string $val The assigneeId
    *
    * @return RedundantAssignmentAlertIncident
    */
    public function setAssigneeId($val)
    {
        $this->_propDict["assigneeId"] = $val;
        return $this;
    }

    /**
    * Gets the assigneeUserPrincipalName
    * User principal name of the subject that the incident applies to. Applies to user principals only.
    *
    * @return string|null The assigneeUserPrincipalName
    */
    public function getAssigneeUserPrincipalName()
    {
        if (array_key_exists("assigneeUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["assigneeUserPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assigneeUserPrincipalName
    * User principal name of the subject that the incident applies to. Applies to user principals only.
    *
    * @param string $val The assigneeUserPrincipalName
    *
    * @return RedundantAssignmentAlertIncident
    */
    public function setAssigneeUserPrincipalName($val)
    {
        $this->_propDict["assigneeUserPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the lastActivationDateTime
    * Date and time of the last activation of the eligible assignment.
    *
    * @return \DateTime|null The lastActivationDateTime
    */
    public function getLastActivationDateTime()
    {
        if (array_key_exists("lastActivationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivationDateTime"], "\DateTime") || is_null($this->_propDict["lastActivationDateTime"])) {
                return $this->_propDict["lastActivationDateTime"];
            } else {
                $this->_propDict["lastActivationDateTime"] = new \DateTime($this->_propDict["lastActivationDateTime"]);
                return $this->_propDict["lastActivationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastActivationDateTime
    * Date and time of the last activation of the eligible assignment.
    *
    * @param \DateTime $val The lastActivationDateTime
    *
    * @return RedundantAssignmentAlertIncident
    */
    public function setLastActivationDateTime($val)
    {
        $this->_propDict["lastActivationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the roleDefinitionId
    * The identifier for the directory role definition that's in scope of this incident.
    *
    * @return string|null The roleDefinitionId
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
    * The identifier for the directory role definition that's in scope of this incident.
    *
    * @param string $val The roleDefinitionId
    *
    * @return RedundantAssignmentAlertIncident
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }

    /**
    * Gets the roleDisplayName
    * The display name for the directory role.
    *
    * @return string|null The roleDisplayName
    */
    public function getRoleDisplayName()
    {
        if (array_key_exists("roleDisplayName", $this->_propDict)) {
            return $this->_propDict["roleDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleDisplayName
    * The display name for the directory role.
    *
    * @param string $val The roleDisplayName
    *
    * @return RedundantAssignmentAlertIncident
    */
    public function setRoleDisplayName($val)
    {
        $this->_propDict["roleDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the roleTemplateId
    * The globally unique identifier for the directory role.
    *
    * @return string|null The roleTemplateId
    */
    public function getRoleTemplateId()
    {
        if (array_key_exists("roleTemplateId", $this->_propDict)) {
            return $this->_propDict["roleTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleTemplateId
    * The globally unique identifier for the directory role.
    *
    * @param string $val The roleTemplateId
    *
    * @return RedundantAssignmentAlertIncident
    */
    public function setRoleTemplateId($val)
    {
        $this->_propDict["roleTemplateId"] = $val;
        return $this;
    }

}
