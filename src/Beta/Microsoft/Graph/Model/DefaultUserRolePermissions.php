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
namespace Beta\Microsoft\Graph\Model;
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
}
