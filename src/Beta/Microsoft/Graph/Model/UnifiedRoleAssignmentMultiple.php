<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleAssignmentMultiple File
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
* UnifiedRoleAssignmentMultiple class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleAssignmentMultiple extends Entity
{
    /**
    * Gets the appScopeIds
    * Ids of the app specific scopes when the assignment scopes are app specific. The scopes of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. App scopes are scopes that are defined and understood by this application only.
    *
    * @return string|null The appScopeIds
    */
    public function getAppScopeIds()
    {
        if (array_key_exists("appScopeIds", $this->_propDict)) {
            return $this->_propDict["appScopeIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appScopeIds
    * Ids of the app specific scopes when the assignment scopes are app specific. The scopes of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. App scopes are scopes that are defined and understood by this application only.
    *
    * @param string $val The appScopeIds
    *
    * @return UnifiedRoleAssignmentMultiple
    */
    public function setAppScopeIds($val)
    {
        $this->_propDict["appScopeIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the condition
    *
    * @return string|null The condition
    */
    public function getCondition()
    {
        if (array_key_exists("condition", $this->_propDict)) {
            return $this->_propDict["condition"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the condition
    *
    * @param string $val The condition
    *
    * @return UnifiedRoleAssignmentMultiple
    */
    public function setCondition($val)
    {
        $this->_propDict["condition"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description of the role assignment.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Description of the role assignment.
    *
    * @param string $val The description
    *
    * @return UnifiedRoleAssignmentMultiple
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the directoryScopeIds
    * Ids of the directory objects representing the scopes of the assignment. The scopes of an assignment determine the set of resources for which the principals have been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. App scopes are scopes that are defined and understood by this application only.
    *
    * @return string|null The directoryScopeIds
    */
    public function getDirectoryScopeIds()
    {
        if (array_key_exists("directoryScopeIds", $this->_propDict)) {
            return $this->_propDict["directoryScopeIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the directoryScopeIds
    * Ids of the directory objects representing the scopes of the assignment. The scopes of an assignment determine the set of resources for which the principals have been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. App scopes are scopes that are defined and understood by this application only.
    *
    * @param string $val The directoryScopeIds
    *
    * @return UnifiedRoleAssignmentMultiple
    */
    public function setDirectoryScopeIds($val)
    {
        $this->_propDict["directoryScopeIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name of the role assignment. Required.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Name of the role assignment. Required.
    *
    * @param string $val The displayName
    *
    * @return UnifiedRoleAssignmentMultiple
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the principalIds
    * Identifiers of the principals to which the assignment is granted.  Supports $filter (any operator only).
    *
    * @return string|null The principalIds
    */
    public function getPrincipalIds()
    {
        if (array_key_exists("principalIds", $this->_propDict)) {
            return $this->_propDict["principalIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the principalIds
    * Identifiers of the principals to which the assignment is granted.  Supports $filter (any operator only).
    *
    * @param string $val The principalIds
    *
    * @return UnifiedRoleAssignmentMultiple
    */
    public function setPrincipalIds($val)
    {
        $this->_propDict["principalIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinitionId
    * Identifier of the unifiedRoleDefinition the assignment is for.
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
    * Identifier of the unifiedRoleDefinition the assignment is for.
    *
    * @param string $val The roleDefinitionId
    *
    * @return UnifiedRoleAssignmentMultiple
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appScopes
    * Read-only collection with details of the app specific scopes when the assignment scopes are app specific. Containment entity. Read-only.
     *
     * @return array|null The appScopes
     */
    public function getAppScopes()
    {
        if (array_key_exists("appScopes", $this->_propDict)) {
           return $this->_propDict["appScopes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appScopes
    * Read-only collection with details of the app specific scopes when the assignment scopes are app specific. Containment entity. Read-only.
    *
    * @param AppScope $val The appScopes
    *
    * @return UnifiedRoleAssignmentMultiple
    */
    public function setAppScopes($val)
    {
        $this->_propDict["appScopes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the directoryScopes
    * Read-only collection referencing the directory objects that are scope of the assignment. Provided so that callers can get the directory objects using $expand at the same time as getting the role assignment. Read-only.  Supports $expand.
     *
     * @return array|null The directoryScopes
     */
    public function getDirectoryScopes()
    {
        if (array_key_exists("directoryScopes", $this->_propDict)) {
           return $this->_propDict["directoryScopes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the directoryScopes
    * Read-only collection referencing the directory objects that are scope of the assignment. Provided so that callers can get the directory objects using $expand at the same time as getting the role assignment. Read-only.  Supports $expand.
    *
    * @param DirectoryObject $val The directoryScopes
    *
    * @return UnifiedRoleAssignmentMultiple
    */
    public function setDirectoryScopes($val)
    {
        $this->_propDict["directoryScopes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the principals
    * Read-only collection referencing the assigned principals. Provided so that callers can get the principals using $expand at the same time as getting the role assignment. Read-only.  Supports $expand.
     *
     * @return array|null The principals
     */
    public function getPrincipals()
    {
        if (array_key_exists("principals", $this->_propDict)) {
           return $this->_propDict["principals"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the principals
    * Read-only collection referencing the assigned principals. Provided so that callers can get the principals using $expand at the same time as getting the role assignment. Read-only.  Supports $expand.
    *
    * @param DirectoryObject $val The principals
    *
    * @return UnifiedRoleAssignmentMultiple
    */
    public function setPrincipals($val)
    {
        $this->_propDict["principals"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinition
    * Specifies the roleDefinition that the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment.  Supports $filter (eq operator on id, isBuiltIn, and displayName, and startsWith operator on displayName)  and $expand.
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
    * Specifies the roleDefinition that the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment.  Supports $filter (eq operator on id, isBuiltIn, and displayName, and startsWith operator on displayName)  and $expand.
    *
    * @param UnifiedRoleDefinition $val The roleDefinition
    *
    * @return UnifiedRoleAssignmentMultiple
    */
    public function setRoleDefinition($val)
    {
        $this->_propDict["roleDefinition"] = $val;
        return $this;
    }
    
}
