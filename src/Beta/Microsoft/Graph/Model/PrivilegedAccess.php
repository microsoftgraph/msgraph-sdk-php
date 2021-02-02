<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedAccess File
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
* PrivilegedAccess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedAccess extends Entity
{
    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return PrivilegedAccess
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resources
     *
     * @return array The resources
     */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
           return $this->_propDict["resources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the resources
    *
    * @param GovernanceResource $val The resources
    *
    * @return PrivilegedAccess
    */
    public function setResources($val)
    {
		$this->_propDict["resources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignmentRequests
     *
     * @return array The roleAssignmentRequests
     */
    public function getRoleAssignmentRequests()
    {
        if (array_key_exists("roleAssignmentRequests", $this->_propDict)) {
           return $this->_propDict["roleAssignmentRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleAssignmentRequests
    *
    * @param GovernanceRoleAssignmentRequest $val The roleAssignmentRequests
    *
    * @return PrivilegedAccess
    */
    public function setRoleAssignmentRequests($val)
    {
		$this->_propDict["roleAssignmentRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignments
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
    *
    * @param GovernanceRoleAssignment $val The roleAssignments
    *
    * @return PrivilegedAccess
    */
    public function setRoleAssignments($val)
    {
		$this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleDefinitions
     *
     * @return array The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists("roleDefinitions", $this->_propDict)) {
           return $this->_propDict["roleDefinitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleDefinitions
    *
    * @param GovernanceRoleDefinition $val The roleDefinitions
    *
    * @return PrivilegedAccess
    */
    public function setRoleDefinitions($val)
    {
		$this->_propDict["roleDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleSettings
     *
     * @return array The roleSettings
     */
    public function getRoleSettings()
    {
        if (array_key_exists("roleSettings", $this->_propDict)) {
           return $this->_propDict["roleSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleSettings
    *
    * @param GovernanceRoleSetting $val The roleSettings
    *
    * @return PrivilegedAccess
    */
    public function setRoleSettings($val)
    {
		$this->_propDict["roleSettings"] = $val;
        return $this;
    }
    
}