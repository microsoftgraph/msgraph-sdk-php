<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleDefinition File
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
* UnifiedRoleDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleDefinition extends Entity
{
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
    * @return UnifiedRoleDefinition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @return UnifiedRoleDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isBuiltIn
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
    *
    * @param bool $val The isBuiltIn
    *
    * @return UnifiedRoleDefinition
    */
    public function setIsBuiltIn($val)
    {
        $this->_propDict["isBuiltIn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isEnabled
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    *
    * @param bool $val The isEnabled
    *
    * @return UnifiedRoleDefinition
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the resourceScopes
    *
    * @return string The resourceScopes
    */
    public function getResourceScopes()
    {
        if (array_key_exists("resourceScopes", $this->_propDict)) {
            return $this->_propDict["resourceScopes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceScopes
    *
    * @param string $val The resourceScopes
    *
    * @return UnifiedRoleDefinition
    */
    public function setResourceScopes($val)
    {
        $this->_propDict["resourceScopes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rolePermissions
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
    *
    * @param UnifiedRolePermission $val The rolePermissions
    *
    * @return UnifiedRoleDefinition
    */
    public function setRolePermissions($val)
    {
		$this->_propDict["rolePermissions"] = $val;
        return $this;
    }
    
    /**
    * Gets the templateId
    *
    * @return string The templateId
    */
    public function getTemplateId()
    {
        if (array_key_exists("templateId", $this->_propDict)) {
            return $this->_propDict["templateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the templateId
    *
    * @param string $val The templateId
    *
    * @return UnifiedRoleDefinition
    */
    public function setTemplateId($val)
    {
        $this->_propDict["templateId"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    *
    * @return string The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    *
    * @param string $val The version
    *
    * @return UnifiedRoleDefinition
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    

     /** 
     * Gets the inheritsPermissionsFrom
     *
     * @return array The inheritsPermissionsFrom
     */
    public function getInheritsPermissionsFrom()
    {
        if (array_key_exists("inheritsPermissionsFrom", $this->_propDict)) {
           return $this->_propDict["inheritsPermissionsFrom"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the inheritsPermissionsFrom
    *
    * @param UnifiedRoleDefinition $val The inheritsPermissionsFrom
    *
    * @return UnifiedRoleDefinition
    */
    public function setInheritsPermissionsFrom($val)
    {
		$this->_propDict["inheritsPermissionsFrom"] = $val;
        return $this;
    }
    
}