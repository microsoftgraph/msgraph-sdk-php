<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsAssociatedIdentities File
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
* AwsAssociatedIdentities class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsAssociatedIdentities extends Entity
{

    /**
    * Gets the all
    *
    * @return AwsIdentity|null The all
    */
    public function getAll()
    {
        if (array_key_exists("all", $this->_propDict)) {
            if (is_a($this->_propDict["all"], "\Beta\Microsoft\Graph\Model\AwsIdentity") || is_null($this->_propDict["all"])) {
                return $this->_propDict["all"];
            } else {
                $this->_propDict["all"] = new AwsIdentity($this->_propDict["all"]);
                return $this->_propDict["all"];
            }
        }
        return null;
    }

    /**
    * Sets the all
    *
    * @param AwsIdentity $val The value to assign to the all
    *
    * @return AwsAssociatedIdentities The AwsAssociatedIdentities
    */
    public function setAll($val)
    {
        $this->_propDict["all"] = $val;
         return $this;
    }

    /**
    * Gets the roles
    *
    * @return AwsRole|null The roles
    */
    public function getRoles()
    {
        if (array_key_exists("roles", $this->_propDict)) {
            if (is_a($this->_propDict["roles"], "\Beta\Microsoft\Graph\Model\AwsRole") || is_null($this->_propDict["roles"])) {
                return $this->_propDict["roles"];
            } else {
                $this->_propDict["roles"] = new AwsRole($this->_propDict["roles"]);
                return $this->_propDict["roles"];
            }
        }
        return null;
    }

    /**
    * Sets the roles
    *
    * @param AwsRole $val The value to assign to the roles
    *
    * @return AwsAssociatedIdentities The AwsAssociatedIdentities
    */
    public function setRoles($val)
    {
        $this->_propDict["roles"] = $val;
         return $this;
    }

    /**
    * Gets the users
    *
    * @return AwsUser|null The users
    */
    public function getUsers()
    {
        if (array_key_exists("users", $this->_propDict)) {
            if (is_a($this->_propDict["users"], "\Beta\Microsoft\Graph\Model\AwsUser") || is_null($this->_propDict["users"])) {
                return $this->_propDict["users"];
            } else {
                $this->_propDict["users"] = new AwsUser($this->_propDict["users"]);
                return $this->_propDict["users"];
            }
        }
        return null;
    }

    /**
    * Sets the users
    *
    * @param AwsUser $val The value to assign to the users
    *
    * @return AwsAssociatedIdentities The AwsAssociatedIdentities
    */
    public function setUsers($val)
    {
        $this->_propDict["users"] = $val;
         return $this;
    }
}
