<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthorizationPolicy File
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
* AuthorizationPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthorizationPolicy extends PolicyBase
{
    /**
    * Gets the allowedToSignUpEmailBasedSubscriptions
    *
    * @return bool The allowedToSignUpEmailBasedSubscriptions
    */
    public function getAllowedToSignUpEmailBasedSubscriptions()
    {
        if (array_key_exists("allowedToSignUpEmailBasedSubscriptions", $this->_propDict)) {
            return $this->_propDict["allowedToSignUpEmailBasedSubscriptions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowedToSignUpEmailBasedSubscriptions
    *
    * @param bool $val The allowedToSignUpEmailBasedSubscriptions
    *
    * @return AuthorizationPolicy
    */
    public function setAllowedToSignUpEmailBasedSubscriptions($val)
    {
        $this->_propDict["allowedToSignUpEmailBasedSubscriptions"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowedToUseSSPR
    *
    * @return bool The allowedToUseSSPR
    */
    public function getAllowedToUseSSPR()
    {
        if (array_key_exists("allowedToUseSSPR", $this->_propDict)) {
            return $this->_propDict["allowedToUseSSPR"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowedToUseSSPR
    *
    * @param bool $val The allowedToUseSSPR
    *
    * @return AuthorizationPolicy
    */
    public function setAllowedToUseSSPR($val)
    {
        $this->_propDict["allowedToUseSSPR"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowEmailVerifiedUsersToJoinOrganization
    *
    * @return bool The allowEmailVerifiedUsersToJoinOrganization
    */
    public function getAllowEmailVerifiedUsersToJoinOrganization()
    {
        if (array_key_exists("allowEmailVerifiedUsersToJoinOrganization", $this->_propDict)) {
            return $this->_propDict["allowEmailVerifiedUsersToJoinOrganization"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowEmailVerifiedUsersToJoinOrganization
    *
    * @param bool $val The allowEmailVerifiedUsersToJoinOrganization
    *
    * @return AuthorizationPolicy
    */
    public function setAllowEmailVerifiedUsersToJoinOrganization($val)
    {
        $this->_propDict["allowEmailVerifiedUsersToJoinOrganization"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowInvitesFrom
    *
    * @return AllowInvitesFrom The allowInvitesFrom
    */
    public function getAllowInvitesFrom()
    {
        if (array_key_exists("allowInvitesFrom", $this->_propDict)) {
            if (is_a($this->_propDict["allowInvitesFrom"], "Beta\Microsoft\Graph\Model\AllowInvitesFrom")) {
                return $this->_propDict["allowInvitesFrom"];
            } else {
                $this->_propDict["allowInvitesFrom"] = new AllowInvitesFrom($this->_propDict["allowInvitesFrom"]);
                return $this->_propDict["allowInvitesFrom"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowInvitesFrom
    *
    * @param AllowInvitesFrom $val The allowInvitesFrom
    *
    * @return AuthorizationPolicy
    */
    public function setAllowInvitesFrom($val)
    {
        $this->_propDict["allowInvitesFrom"] = $val;
        return $this;
    }
    
    /**
    * Gets the blockMsolPowerShell
    *
    * @return bool The blockMsolPowerShell
    */
    public function getBlockMsolPowerShell()
    {
        if (array_key_exists("blockMsolPowerShell", $this->_propDict)) {
            return $this->_propDict["blockMsolPowerShell"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the blockMsolPowerShell
    *
    * @param bool $val The blockMsolPowerShell
    *
    * @return AuthorizationPolicy
    */
    public function setBlockMsolPowerShell($val)
    {
        $this->_propDict["blockMsolPowerShell"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defaultUserRolePermissions
    *
    * @return DefaultUserRolePermissions The defaultUserRolePermissions
    */
    public function getDefaultUserRolePermissions()
    {
        if (array_key_exists("defaultUserRolePermissions", $this->_propDict)) {
            if (is_a($this->_propDict["defaultUserRolePermissions"], "Beta\Microsoft\Graph\Model\DefaultUserRolePermissions")) {
                return $this->_propDict["defaultUserRolePermissions"];
            } else {
                $this->_propDict["defaultUserRolePermissions"] = new DefaultUserRolePermissions($this->_propDict["defaultUserRolePermissions"]);
                return $this->_propDict["defaultUserRolePermissions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultUserRolePermissions
    *
    * @param DefaultUserRolePermissions $val The defaultUserRolePermissions
    *
    * @return AuthorizationPolicy
    */
    public function setDefaultUserRolePermissions($val)
    {
        $this->_propDict["defaultUserRolePermissions"] = $val;
        return $this;
    }
    
    /**
    * Gets the enabledPreviewFeatures
    *
    * @return string The enabledPreviewFeatures
    */
    public function getEnabledPreviewFeatures()
    {
        if (array_key_exists("enabledPreviewFeatures", $this->_propDict)) {
            return $this->_propDict["enabledPreviewFeatures"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enabledPreviewFeatures
    *
    * @param string $val The enabledPreviewFeatures
    *
    * @return AuthorizationPolicy
    */
    public function setEnabledPreviewFeatures($val)
    {
        $this->_propDict["enabledPreviewFeatures"] = $val;
        return $this;
    }
    
    /**
    * Gets the guestUserRoleId
    *
    * @return string The guestUserRoleId
    */
    public function getGuestUserRoleId()
    {
        if (array_key_exists("guestUserRoleId", $this->_propDict)) {
            return $this->_propDict["guestUserRoleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the guestUserRoleId
    *
    * @param string $val The guestUserRoleId
    *
    * @return AuthorizationPolicy
    */
    public function setGuestUserRoleId($val)
    {
        $this->_propDict["guestUserRoleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the permissionGrantPolicyIdsAssignedToDefaultUserRole
    *
    * @return string The permissionGrantPolicyIdsAssignedToDefaultUserRole
    */
    public function getPermissionGrantPolicyIdsAssignedToDefaultUserRole()
    {
        if (array_key_exists("permissionGrantPolicyIdsAssignedToDefaultUserRole", $this->_propDict)) {
            return $this->_propDict["permissionGrantPolicyIdsAssignedToDefaultUserRole"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the permissionGrantPolicyIdsAssignedToDefaultUserRole
    *
    * @param string $val The permissionGrantPolicyIdsAssignedToDefaultUserRole
    *
    * @return AuthorizationPolicy
    */
    public function setPermissionGrantPolicyIdsAssignedToDefaultUserRole($val)
    {
        $this->_propDict["permissionGrantPolicyIdsAssignedToDefaultUserRole"] = $val;
        return $this;
    }
    
}