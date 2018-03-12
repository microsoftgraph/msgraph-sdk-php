<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoleDefinition File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* RoleDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class RoleDefinition extends Entity
{
    /**
    * Gets the displayName
    * Display Name of the Role definition.
    *
    * @return string The displayName
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
    * Display Name of the Role definition.
    *
    * @param string $val The displayName
    *
    * @return RoleDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description of the Role definition.
    *
    * @return string The description
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
    * Description of the Role definition.
    *
    * @param string $val The description
    *
    * @return RoleDefinition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    

     /** 
     * Gets the permissions
     *
     * @return array The permissions
     */
    public function getPermissions()
    {
        if (array_key_exists("permissions", $this->_propDict)) {
           return $this->_propDict["permissions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the permissions
    *
    * @param RolePermission $val The permissions
    *
    * @return RoleDefinition
    */
    public function setPermissions($val)
    {
		$this->_propDict["permissions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rolePermissions
    * List of Role Permissions this role is allowed to perform. These must match the actionName that is defined as part of the rolePermission.
     *
     * @return array The rolePermissions
     */
    public function getRolePermissions()
    {
        if (array_key_exists("rolePermissions", $this->_propDict)) {
           return $this->_propDict["rolePermissions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rolePermissions
    * List of Role Permissions this role is allowed to perform. These must match the actionName that is defined as part of the rolePermission.
    *
    * @param RolePermission $val The rolePermissions
    *
    * @return RoleDefinition
    */
    public function setRolePermissions($val)
    {
		$this->_propDict["rolePermissions"] = $val;
        return $this;
    }
    
    /**
    * Gets the isBuiltInRoleDefinition
    *
    * @return bool The isBuiltInRoleDefinition
    */
    public function getIsBuiltInRoleDefinition()
    {
        if (array_key_exists("isBuiltInRoleDefinition", $this->_propDict)) {
            return $this->_propDict["isBuiltInRoleDefinition"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isBuiltInRoleDefinition
    *
    * @param bool $val The isBuiltInRoleDefinition
    *
    * @return RoleDefinition
    */
    public function setIsBuiltInRoleDefinition($val)
    {
        $this->_propDict["isBuiltInRoleDefinition"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isBuiltIn
    * Type of Role. Set to True if it is built-in, or set to False if it is a custom role definition.
    *
    * @return bool The isBuiltIn
    */
    public function getIsBuiltIn()
    {
        if (array_key_exists("isBuiltIn", $this->_propDict)) {
            return $this->_propDict["isBuiltIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isBuiltIn
    * Type of Role. Set to True if it is built-in, or set to False if it is a custom role definition.
    *
    * @param bool $val The isBuiltIn
    *
    * @return RoleDefinition
    */
    public function setIsBuiltIn($val)
    {
        $this->_propDict["isBuiltIn"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the roleAssignments
    * List of Role assignments for this role definition.
     *
     * @return array The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists("roleAssignments", $this->_propDict)) {
           return $this->_propDict["roleAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleAssignments
    * List of Role assignments for this role definition.
    *
    * @param RoleAssignment $val The roleAssignments
    *
    * @return RoleDefinition
    */
    public function setRoleAssignments($val)
    {
		$this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    
}