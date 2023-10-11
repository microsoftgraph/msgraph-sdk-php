<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureAssociatedIdentities File
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
* AzureAssociatedIdentities class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureAssociatedIdentities extends Entity
{

    /**
    * Gets the all
    *
    * @return AzureIdentity|null The all
    */
    public function getAll()
    {
        if (array_key_exists("all", $this->_propDict)) {
            if (is_a($this->_propDict["all"], "\Beta\Microsoft\Graph\Model\AzureIdentity") || is_null($this->_propDict["all"])) {
                return $this->_propDict["all"];
            } else {
                $this->_propDict["all"] = new AzureIdentity($this->_propDict["all"]);
                return $this->_propDict["all"];
            }
        }
        return null;
    }

    /**
    * Sets the all
    *
    * @param AzureIdentity $val The value to assign to the all
    *
    * @return AzureAssociatedIdentities The AzureAssociatedIdentities
    */
    public function setAll($val)
    {
        $this->_propDict["all"] = $val;
         return $this;
    }

    /**
    * Gets the managedIdentities
    *
    * @return AzureManagedIdentity|null The managedIdentities
    */
    public function getManagedIdentities()
    {
        if (array_key_exists("managedIdentities", $this->_propDict)) {
            if (is_a($this->_propDict["managedIdentities"], "\Beta\Microsoft\Graph\Model\AzureManagedIdentity") || is_null($this->_propDict["managedIdentities"])) {
                return $this->_propDict["managedIdentities"];
            } else {
                $this->_propDict["managedIdentities"] = new AzureManagedIdentity($this->_propDict["managedIdentities"]);
                return $this->_propDict["managedIdentities"];
            }
        }
        return null;
    }

    /**
    * Sets the managedIdentities
    *
    * @param AzureManagedIdentity $val The value to assign to the managedIdentities
    *
    * @return AzureAssociatedIdentities The AzureAssociatedIdentities
    */
    public function setManagedIdentities($val)
    {
        $this->_propDict["managedIdentities"] = $val;
         return $this;
    }

    /**
    * Gets the servicePrincipals
    *
    * @return AzureServicePrincipal|null The servicePrincipals
    */
    public function getServicePrincipals()
    {
        if (array_key_exists("servicePrincipals", $this->_propDict)) {
            if (is_a($this->_propDict["servicePrincipals"], "\Beta\Microsoft\Graph\Model\AzureServicePrincipal") || is_null($this->_propDict["servicePrincipals"])) {
                return $this->_propDict["servicePrincipals"];
            } else {
                $this->_propDict["servicePrincipals"] = new AzureServicePrincipal($this->_propDict["servicePrincipals"]);
                return $this->_propDict["servicePrincipals"];
            }
        }
        return null;
    }

    /**
    * Sets the servicePrincipals
    *
    * @param AzureServicePrincipal $val The value to assign to the servicePrincipals
    *
    * @return AzureAssociatedIdentities The AzureAssociatedIdentities
    */
    public function setServicePrincipals($val)
    {
        $this->_propDict["servicePrincipals"] = $val;
         return $this;
    }

    /**
    * Gets the users
    *
    * @return AzureUser|null The users
    */
    public function getUsers()
    {
        if (array_key_exists("users", $this->_propDict)) {
            if (is_a($this->_propDict["users"], "\Beta\Microsoft\Graph\Model\AzureUser") || is_null($this->_propDict["users"])) {
                return $this->_propDict["users"];
            } else {
                $this->_propDict["users"] = new AzureUser($this->_propDict["users"]);
                return $this->_propDict["users"];
            }
        }
        return null;
    }

    /**
    * Sets the users
    *
    * @param AzureUser $val The value to assign to the users
    *
    * @return AzureAssociatedIdentities The AzureAssociatedIdentities
    */
    public function setUsers($val)
    {
        $this->_propDict["users"] = $val;
         return $this;
    }
}
