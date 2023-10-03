<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GcpAssociatedIdentities File
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
* GcpAssociatedIdentities class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GcpAssociatedIdentities extends Entity
{

    /**
    * Gets the all
    *
    * @return GcpIdentity|null The all
    */
    public function getAll()
    {
        if (array_key_exists("all", $this->_propDict)) {
            if (is_a($this->_propDict["all"], "\Beta\Microsoft\Graph\Model\GcpIdentity") || is_null($this->_propDict["all"])) {
                return $this->_propDict["all"];
            } else {
                $this->_propDict["all"] = new GcpIdentity($this->_propDict["all"]);
                return $this->_propDict["all"];
            }
        }
        return null;
    }

    /**
    * Sets the all
    *
    * @param GcpIdentity $val The value to assign to the all
    *
    * @return GcpAssociatedIdentities The GcpAssociatedIdentities
    */
    public function setAll($val)
    {
        $this->_propDict["all"] = $val;
         return $this;
    }

    /**
    * Gets the serviceAccounts
    *
    * @return GcpServiceAccount|null The serviceAccounts
    */
    public function getServiceAccounts()
    {
        if (array_key_exists("serviceAccounts", $this->_propDict)) {
            if (is_a($this->_propDict["serviceAccounts"], "\Beta\Microsoft\Graph\Model\GcpServiceAccount") || is_null($this->_propDict["serviceAccounts"])) {
                return $this->_propDict["serviceAccounts"];
            } else {
                $this->_propDict["serviceAccounts"] = new GcpServiceAccount($this->_propDict["serviceAccounts"]);
                return $this->_propDict["serviceAccounts"];
            }
        }
        return null;
    }

    /**
    * Sets the serviceAccounts
    *
    * @param GcpServiceAccount $val The value to assign to the serviceAccounts
    *
    * @return GcpAssociatedIdentities The GcpAssociatedIdentities
    */
    public function setServiceAccounts($val)
    {
        $this->_propDict["serviceAccounts"] = $val;
         return $this;
    }

    /**
    * Gets the users
    *
    * @return GcpUser|null The users
    */
    public function getUsers()
    {
        if (array_key_exists("users", $this->_propDict)) {
            if (is_a($this->_propDict["users"], "\Beta\Microsoft\Graph\Model\GcpUser") || is_null($this->_propDict["users"])) {
                return $this->_propDict["users"];
            } else {
                $this->_propDict["users"] = new GcpUser($this->_propDict["users"]);
                return $this->_propDict["users"];
            }
        }
        return null;
    }

    /**
    * Sets the users
    *
    * @param GcpUser $val The value to assign to the users
    *
    * @return GcpAssociatedIdentities The GcpAssociatedIdentities
    */
    public function setUsers($val)
    {
        $this->_propDict["users"] = $val;
         return $this;
    }
}
