<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleEligibilityScheduleRequest File
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
* UnifiedRoleEligibilityScheduleRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleEligibilityScheduleRequest extends Request
{
    /**
    * Gets the action
    * Representing the type of the operation on the role assignment. The value can be AdminAdd: Administrators assign users/groups to roles;UserAdd: Users activate eligible assignments; AdminUpdate: Administrators change existing role assignmentsAdminRemove: Administrators remove users/groups from roles;UserRemove: Users deactivate active assignments;UserExtend: Users request to extend their expiring assignments;AdminExtend: Administrators extend expiring assignments.UserRenew: Users request to renew their expired assignments;AdminRenew: Administrators extend expiring assignments.
    *
    * @return string|null The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            return $this->_propDict["action"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the action
    * Representing the type of the operation on the role assignment. The value can be AdminAdd: Administrators assign users/groups to roles;UserAdd: Users activate eligible assignments; AdminUpdate: Administrators change existing role assignmentsAdminRemove: Administrators remove users/groups from roles;UserRemove: Users deactivate active assignments;UserExtend: Users request to extend their expiring assignments;AdminExtend: Administrators extend expiring assignments.UserRenew: Users request to renew their expired assignments;AdminRenew: Administrators extend expiring assignments.
    *
    * @param string $val The action
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
        return $this;
    }
    
    /**
    * Gets the appScopeId
    * Id of the app specific scope when the assignment scope is app specific. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use '/' for tenant-wide scope. App scopes are scopes that are defined and understood by this application only.
    *
    * @return string|null The appScopeId
    */
    public function getAppScopeId()
    {
        if (array_key_exists("appScopeId", $this->_propDict)) {
            return $this->_propDict["appScopeId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appScopeId
    * Id of the app specific scope when the assignment scope is app specific. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use '/' for tenant-wide scope. App scopes are scopes that are defined and understood by this application only.
    *
    * @param string $val The appScopeId
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setAppScopeId($val)
    {
        $this->_propDict["appScopeId"] = $val;
        return $this;
    }
    
    /**
    * Gets the directoryScopeId
    * Id of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. App scopes are scopes that are defined and understood by this application only.
    *
    * @return string|null The directoryScopeId
    */
    public function getDirectoryScopeId()
    {
        if (array_key_exists("directoryScopeId", $this->_propDict)) {
            return $this->_propDict["directoryScopeId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the directoryScopeId
    * Id of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. App scopes are scopes that are defined and understood by this application only.
    *
    * @param string $val The directoryScopeId
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setDirectoryScopeId($val)
    {
        $this->_propDict["directoryScopeId"] = $val;
        return $this;
    }
    
    /**
    * Gets the isValidationOnly
    * Boolean
    *
    * @return bool|null The isValidationOnly
    */
    public function getIsValidationOnly()
    {
        if (array_key_exists("isValidationOnly", $this->_propDict)) {
            return $this->_propDict["isValidationOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isValidationOnly
    * Boolean
    *
    * @param bool $val The isValidationOnly
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setIsValidationOnly($val)
    {
        $this->_propDict["isValidationOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the justification
    * A message provided by users and administrators when create the request about why it is needed.
    *
    * @return string|null The justification
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
    * A message provided by users and administrators when create the request about why it is needed.
    *
    * @param string $val The justification
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setJustification($val)
    {
        $this->_propDict["justification"] = $val;
        return $this;
    }
    
    /**
    * Gets the principalId
    * Objectid of the principal to which the assignment is being granted to.
    *
    * @return string|null The principalId
    */
    public function getPrincipalId()
    {
        if (array_key_exists("principalId", $this->_propDict)) {
            return $this->_propDict["principalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the principalId
    * Objectid of the principal to which the assignment is being granted to.
    *
    * @param string $val The principalId
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setPrincipalId($val)
    {
        $this->_propDict["principalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinitionId
    * ID of the unifiedRoleDefinition the assignment is for. Read only.
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
    * ID of the unifiedRoleDefinition the assignment is for. Read only.
    *
    * @param string $val The roleDefinitionId
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the scheduleInfo
    * The schedule object of the role assignment request.
    *
    * @return RequestSchedule|null The scheduleInfo
    */
    public function getScheduleInfo()
    {
        if (array_key_exists("scheduleInfo", $this->_propDict)) {
            if (is_a($this->_propDict["scheduleInfo"], "\Beta\Microsoft\Graph\Model\RequestSchedule") || is_null($this->_propDict["scheduleInfo"])) {
                return $this->_propDict["scheduleInfo"];
            } else {
                $this->_propDict["scheduleInfo"] = new RequestSchedule($this->_propDict["scheduleInfo"]);
                return $this->_propDict["scheduleInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the scheduleInfo
    * The schedule object of the role assignment request.
    *
    * @param RequestSchedule $val The scheduleInfo
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setScheduleInfo($val)
    {
        $this->_propDict["scheduleInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetScheduleId
    * ID of the schedule object attached to the assignment.
    *
    * @return string|null The targetScheduleId
    */
    public function getTargetScheduleId()
    {
        if (array_key_exists("targetScheduleId", $this->_propDict)) {
            return $this->_propDict["targetScheduleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetScheduleId
    * ID of the schedule object attached to the assignment.
    *
    * @param string $val The targetScheduleId
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setTargetScheduleId($val)
    {
        $this->_propDict["targetScheduleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the ticketInfo
    * The ticketInfo object attached to the role assignment request which includes details of the ticket number and ticket system.
    *
    * @return TicketInfo|null The ticketInfo
    */
    public function getTicketInfo()
    {
        if (array_key_exists("ticketInfo", $this->_propDict)) {
            if (is_a($this->_propDict["ticketInfo"], "\Beta\Microsoft\Graph\Model\TicketInfo") || is_null($this->_propDict["ticketInfo"])) {
                return $this->_propDict["ticketInfo"];
            } else {
                $this->_propDict["ticketInfo"] = new TicketInfo($this->_propDict["ticketInfo"]);
                return $this->_propDict["ticketInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the ticketInfo
    * The ticketInfo object attached to the role assignment request which includes details of the ticket number and ticket system.
    *
    * @param TicketInfo $val The ticketInfo
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setTicketInfo($val)
    {
        $this->_propDict["ticketInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the appScope
    * Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity.
    *
    * @return AppScope|null The appScope
    */
    public function getAppScope()
    {
        if (array_key_exists("appScope", $this->_propDict)) {
            if (is_a($this->_propDict["appScope"], "\Beta\Microsoft\Graph\Model\AppScope") || is_null($this->_propDict["appScope"])) {
                return $this->_propDict["appScope"];
            } else {
                $this->_propDict["appScope"] = new AppScope($this->_propDict["appScope"]);
                return $this->_propDict["appScope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appScope
    * Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity.
    *
    * @param AppScope $val The appScope
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setAppScope($val)
    {
        $this->_propDict["appScope"] = $val;
        return $this;
    }
    
    /**
    * Gets the directoryScope
    * Property referencing the directory object that is the scope of the assignment. Provided so that callers can get the directory object using $expand at the same time as getting the role assignment. Read-only.
    *
    * @return DirectoryObject|null The directoryScope
    */
    public function getDirectoryScope()
    {
        if (array_key_exists("directoryScope", $this->_propDict)) {
            if (is_a($this->_propDict["directoryScope"], "\Beta\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["directoryScope"])) {
                return $this->_propDict["directoryScope"];
            } else {
                $this->_propDict["directoryScope"] = new DirectoryObject($this->_propDict["directoryScope"]);
                return $this->_propDict["directoryScope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the directoryScope
    * Property referencing the directory object that is the scope of the assignment. Provided so that callers can get the directory object using $expand at the same time as getting the role assignment. Read-only.
    *
    * @param DirectoryObject $val The directoryScope
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setDirectoryScope($val)
    {
        $this->_propDict["directoryScope"] = $val;
        return $this;
    }
    
    /**
    * Gets the principal
    * Property referencing the principal that is getting a role assignment through the request. Provided so that callers can get the principal using $expand at the same time as getting the role assignment. Read-only.
    *
    * @return DirectoryObject|null The principal
    */
    public function getPrincipal()
    {
        if (array_key_exists("principal", $this->_propDict)) {
            if (is_a($this->_propDict["principal"], "\Beta\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["principal"])) {
                return $this->_propDict["principal"];
            } else {
                $this->_propDict["principal"] = new DirectoryObject($this->_propDict["principal"]);
                return $this->_propDict["principal"];
            }
        }
        return null;
    }
    
    /**
    * Sets the principal
    * Property referencing the principal that is getting a role assignment through the request. Provided so that callers can get the principal using $expand at the same time as getting the role assignment. Read-only.
    *
    * @param DirectoryObject $val The principal
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setPrincipal($val)
    {
        $this->_propDict["principal"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinition
    * Property indicating the roleDefinition the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment. roleDefinition.Id will be auto expanded
    *
    * @return UnifiedRoleDefinition|null The roleDefinition
    */
    public function getRoleDefinition()
    {
        if (array_key_exists("roleDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["roleDefinition"], "\Beta\Microsoft\Graph\Model\UnifiedRoleDefinition") || is_null($this->_propDict["roleDefinition"])) {
                return $this->_propDict["roleDefinition"];
            } else {
                $this->_propDict["roleDefinition"] = new UnifiedRoleDefinition($this->_propDict["roleDefinition"]);
                return $this->_propDict["roleDefinition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the roleDefinition
    * Property indicating the roleDefinition the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment. roleDefinition.Id will be auto expanded
    *
    * @param UnifiedRoleDefinition $val The roleDefinition
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setRoleDefinition($val)
    {
        $this->_propDict["roleDefinition"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetSchedule
    *
    * @return UnifiedRoleEligibilitySchedule|null The targetSchedule
    */
    public function getTargetSchedule()
    {
        if (array_key_exists("targetSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["targetSchedule"], "\Beta\Microsoft\Graph\Model\UnifiedRoleEligibilitySchedule") || is_null($this->_propDict["targetSchedule"])) {
                return $this->_propDict["targetSchedule"];
            } else {
                $this->_propDict["targetSchedule"] = new UnifiedRoleEligibilitySchedule($this->_propDict["targetSchedule"]);
                return $this->_propDict["targetSchedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the targetSchedule
    *
    * @param UnifiedRoleEligibilitySchedule $val The targetSchedule
    *
    * @return UnifiedRoleEligibilityScheduleRequest
    */
    public function setTargetSchedule($val)
    {
        $this->_propDict["targetSchedule"] = $val;
        return $this;
    }
    
}
