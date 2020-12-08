<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefaultUserRolePermissions File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* DefaultUserRolePermissions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DefaultUserRolePermissions extends Entity
{
    /**
    * Gets the allowedToCreateApps
    * Indicates whether the default user role can create applications.
    *
    * @return bool The allowedToCreateApps
    */
    public function getAllowedToCreateApps()
    {
        if (array_key_exists("allowedToCreateApps", $this->_propDict)) {
            return $this->_propDict["allowedToCreateApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedToCreateApps
    * Indicates whether the default user role can create applications.
    *
    * @param bool $val The value of the allowedToCreateApps
    *
    * @return DefaultUserRolePermissions
    */
    public function setAllowedToCreateApps($val)
    {
        $this->_propDict["allowedToCreateApps"] = $val;
        return $this;
    }
    /**
    * Gets the allowedToCreateSecurityGroups
    * Indicates whether the default user role can create security groups.
    *
    * @return bool The allowedToCreateSecurityGroups
    */
    public function getAllowedToCreateSecurityGroups()
    {
        if (array_key_exists("allowedToCreateSecurityGroups", $this->_propDict)) {
            return $this->_propDict["allowedToCreateSecurityGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedToCreateSecurityGroups
    * Indicates whether the default user role can create security groups.
    *
    * @param bool $val The value of the allowedToCreateSecurityGroups
    *
    * @return DefaultUserRolePermissions
    */
    public function setAllowedToCreateSecurityGroups($val)
    {
        $this->_propDict["allowedToCreateSecurityGroups"] = $val;
        return $this;
    }
    /**
    * Gets the allowedToReadOtherUsers
    * Indicates whether the default user role can read other users.
    *
    * @return bool The allowedToReadOtherUsers
    */
    public function getAllowedToReadOtherUsers()
    {
        if (array_key_exists("allowedToReadOtherUsers", $this->_propDict)) {
            return $this->_propDict["allowedToReadOtherUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedToReadOtherUsers
    * Indicates whether the default user role can read other users.
    *
    * @param bool $val The value of the allowedToReadOtherUsers
    *
    * @return DefaultUserRolePermissions
    */
    public function setAllowedToReadOtherUsers($val)
    {
        $this->_propDict["allowedToReadOtherUsers"] = $val;
        return $this;
    }
    /**
    * Gets the permissionGrantPoliciesAssigned
    * Indicates if user consent to apps is allowed, and if it is, which permission to grant consent and which app consent policy (permissionGrantPolicy) govern the permission for users to grant consent. Value should be in the format managePermissionGrantsForSelf.{id}, where {id} is the id of a built-in or custom app consent policy. An empty list indicates user consent to apps is disabled.
    *
    * @return string The permissionGrantPoliciesAssigned
    */
    public function getPermissionGrantPoliciesAssigned()
    {
        if (array_key_exists("permissionGrantPoliciesAssigned", $this->_propDict)) {
            return $this->_propDict["permissionGrantPoliciesAssigned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permissionGrantPoliciesAssigned
    * Indicates if user consent to apps is allowed, and if it is, which permission to grant consent and which app consent policy (permissionGrantPolicy) govern the permission for users to grant consent. Value should be in the format managePermissionGrantsForSelf.{id}, where {id} is the id of a built-in or custom app consent policy. An empty list indicates user consent to apps is disabled.
    *
    * @param string $val The value of the permissionGrantPoliciesAssigned
    *
    * @return DefaultUserRolePermissions
    */
    public function setPermissionGrantPoliciesAssigned($val)
    {
        $this->_propDict["permissionGrantPoliciesAssigned"] = $val;
        return $this;
    }
}
