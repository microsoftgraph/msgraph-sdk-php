<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ScopedRoleMembership File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* ScopedRoleMembership class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ScopedRoleMembership extends Entity
{
    /**
    * Gets the roleId
    *
    * @return string The roleId
    */
    public function getRoleId()
    {
        if (array_key_exists("roleId", $this->_propDict)) {
            return $this->_propDict["roleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleId
    *
    * @param string $val The roleId
    *
    * @return ScopedRoleMembership
    */
    public function setRoleId($val)
    {
        $this->_propDict["roleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the administrativeUnitId
    *
    * @return string The administrativeUnitId
    */
    public function getAdministrativeUnitId()
    {
        if (array_key_exists("administrativeUnitId", $this->_propDict)) {
            return $this->_propDict["administrativeUnitId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the administrativeUnitId
    *
    * @param string $val The administrativeUnitId
    *
    * @return ScopedRoleMembership
    */
    public function setAdministrativeUnitId($val)
    {
        $this->_propDict["administrativeUnitId"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleMemberInfo
    *
    * @return Identity The roleMemberInfo
    */
    public function getRoleMemberInfo()
    {
        if (array_key_exists("roleMemberInfo", $this->_propDict)) {
            if (is_a($this->_propDict["roleMemberInfo"], "Microsoft\Graph\Beta\Model\Identity")) {
                return $this->_propDict["roleMemberInfo"];
            } else {
                $this->_propDict["roleMemberInfo"] = new Identity($this->_propDict["roleMemberInfo"]);
                return $this->_propDict["roleMemberInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the roleMemberInfo
    *
    * @param Identity $val The roleMemberInfo
    *
    * @return ScopedRoleMembership
    */
    public function setRoleMemberInfo($val)
    {
        $this->_propDict["roleMemberInfo"] = $val;
        return $this;
    }
    
}