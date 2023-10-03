<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GcpRolePermissionsDefinitionAction File
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
* GcpRolePermissionsDefinitionAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GcpRolePermissionsDefinitionAction extends GcpPermissionsDefinitionAction
{

    /**
    * Gets the roles
    *
    * @return PermissionsDefinitionGcpRole|null The roles
    */
    public function getRoles()
    {
        if (array_key_exists("roles", $this->_propDict)) {
            if (is_a($this->_propDict["roles"], "\Beta\Microsoft\Graph\Model\PermissionsDefinitionGcpRole") || is_null($this->_propDict["roles"])) {
                return $this->_propDict["roles"];
            } else {
                $this->_propDict["roles"] = new PermissionsDefinitionGcpRole($this->_propDict["roles"]);
                return $this->_propDict["roles"];
            }
        }
        return null;
    }

    /**
    * Sets the roles
    *
    * @param PermissionsDefinitionGcpRole $val The value to assign to the roles
    *
    * @return GcpRolePermissionsDefinitionAction The GcpRolePermissionsDefinitionAction
    */
    public function setRoles($val)
    {
        $this->_propDict["roles"] = $val;
         return $this;
    }
}
