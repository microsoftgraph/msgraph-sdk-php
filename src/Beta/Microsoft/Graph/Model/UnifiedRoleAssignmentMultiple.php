<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleAssignmentMultiple File
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
* UnifiedRoleAssignmentMultiple class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleAssignmentMultiple extends Entity
{
    /**
    * Gets the appScopeIds
    *
    * @return string The appScopeIds
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
    * @return string The condition
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
    *
    * @return string The directoryScopeIds
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
    * @return UnifiedRoleAssignmentMultiple
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the principalIds
    *
    * @return string The principalIds
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
    * @return UnifiedRoleAssignmentMultiple
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appScopes
     *
     * @return array The appScopes
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
     *
     * @return array The directoryScopes
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
     *
     * @return array The principals
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
    *
    * @return UnifiedRoleDefinition The roleDefinition
    */
    public function getRoleDefinition()
    {
        if (array_key_exists("roleDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["roleDefinition"], "Beta\Microsoft\Graph\Model\UnifiedRoleDefinition")) {
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