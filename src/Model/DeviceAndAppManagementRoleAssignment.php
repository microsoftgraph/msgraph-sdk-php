<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceAndAppManagementRoleAssignment File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* DeviceAndAppManagementRoleAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceAndAppManagementRoleAssignment extends RoleAssignment
{
    /**
    * Gets the members
    *
    * @return string The members
    */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
            return $this->_propDict["members"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the members
    *
    * @param string $val The members
    *
    * @return DeviceAndAppManagementRoleAssignment
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }
    
}