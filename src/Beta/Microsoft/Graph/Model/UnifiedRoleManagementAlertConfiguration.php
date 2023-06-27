<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementAlertConfiguration File
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
* UnifiedRoleManagementAlertConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementAlertConfiguration extends Entity
{
    /**
    * Gets the alertDefinitionId
    * The identifier of an alert definition. Supports $filter (eq, ne).
    *
    * @return string|null The alertDefinitionId
    */
    public function getAlertDefinitionId()
    {
        if (array_key_exists("alertDefinitionId", $this->_propDict)) {
            return $this->_propDict["alertDefinitionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertDefinitionId
    * The identifier of an alert definition. Supports $filter (eq, ne).
    *
    * @param string $val The alertDefinitionId
    *
    * @return UnifiedRoleManagementAlertConfiguration
    */
    public function setAlertDefinitionId($val)
    {
        $this->_propDict["alertDefinitionId"] = $val;
        return $this;
    }

    /**
    * Gets the isEnabled
    * true if the alert is enabled. Setting it to false disables PIM scanning the tenant to identify instances that trigger the alert.
    *
    * @return bool|null The isEnabled
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
    * true if the alert is enabled. Setting it to false disables PIM scanning the tenant to identify instances that trigger the alert.
    *
    * @param bool $val The isEnabled
    *
    * @return UnifiedRoleManagementAlertConfiguration
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the scopeId
    * The identifier of the scope to which the alert is related. Only / is supported to represent the tenant scope. Supports $filter (eq, ne).
    *
    * @return string|null The scopeId
    */
    public function getScopeId()
    {
        if (array_key_exists("scopeId", $this->_propDict)) {
            return $this->_propDict["scopeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopeId
    * The identifier of the scope to which the alert is related. Only / is supported to represent the tenant scope. Supports $filter (eq, ne).
    *
    * @param string $val The scopeId
    *
    * @return UnifiedRoleManagementAlertConfiguration
    */
    public function setScopeId($val)
    {
        $this->_propDict["scopeId"] = $val;
        return $this;
    }

    /**
    * Gets the scopeType
    * The type of scope where the alert is created. DirectoryRole is the only currently supported scope type for Azure AD roles.
    *
    * @return string|null The scopeType
    */
    public function getScopeType()
    {
        if (array_key_exists("scopeType", $this->_propDict)) {
            return $this->_propDict["scopeType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopeType
    * The type of scope where the alert is created. DirectoryRole is the only currently supported scope type for Azure AD roles.
    *
    * @param string $val The scopeType
    *
    * @return UnifiedRoleManagementAlertConfiguration
    */
    public function setScopeType($val)
    {
        $this->_propDict["scopeType"] = $val;
        return $this;
    }

    /**
    * Gets the alertDefinition
    * The definition of the alert that contains its description, impact, and measures to mitigate or prevent it. Supports $expand.
    *
    * @return UnifiedRoleManagementAlertDefinition|null The alertDefinition
    */
    public function getAlertDefinition()
    {
        if (array_key_exists("alertDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["alertDefinition"], "\Beta\Microsoft\Graph\Model\UnifiedRoleManagementAlertDefinition") || is_null($this->_propDict["alertDefinition"])) {
                return $this->_propDict["alertDefinition"];
            } else {
                $this->_propDict["alertDefinition"] = new UnifiedRoleManagementAlertDefinition($this->_propDict["alertDefinition"]);
                return $this->_propDict["alertDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the alertDefinition
    * The definition of the alert that contains its description, impact, and measures to mitigate or prevent it. Supports $expand.
    *
    * @param UnifiedRoleManagementAlertDefinition $val The alertDefinition
    *
    * @return UnifiedRoleManagementAlertConfiguration
    */
    public function setAlertDefinition($val)
    {
        $this->_propDict["alertDefinition"] = $val;
        return $this;
    }

}
