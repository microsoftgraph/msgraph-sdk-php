<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureAuthorizationSystem File
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
* AzureAuthorizationSystem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureAuthorizationSystem extends AuthorizationSystem
{
    /**
    * Gets the associatedIdentities
    *
    * @return AzureAssociatedIdentities|null The associatedIdentities
    */
    public function getAssociatedIdentities()
    {
        if (array_key_exists("associatedIdentities", $this->_propDict)) {
            if (is_a($this->_propDict["associatedIdentities"], "\Beta\Microsoft\Graph\Model\AzureAssociatedIdentities") || is_null($this->_propDict["associatedIdentities"])) {
                return $this->_propDict["associatedIdentities"];
            } else {
                $this->_propDict["associatedIdentities"] = new AzureAssociatedIdentities($this->_propDict["associatedIdentities"]);
                return $this->_propDict["associatedIdentities"];
            }
        }
        return null;
    }

    /**
    * Sets the associatedIdentities
    *
    * @param AzureAssociatedIdentities $val The associatedIdentities
    *
    * @return AzureAuthorizationSystem
    */
    public function setAssociatedIdentities($val)
    {
        $this->_propDict["associatedIdentities"] = $val;
        return $this;
    }


     /**
     * Gets the actions
     *
     * @return array|null The actions
     */
    public function getActions()
    {
        if (array_key_exists("actions", $this->_propDict)) {
           return $this->_propDict["actions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actions
    *
    * @param AzureAuthorizationSystemTypeAction[] $val The actions
    *
    * @return AzureAuthorizationSystem
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
        return $this;
    }


     /**
     * Gets the resources
     *
     * @return array|null The resources
     */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
           return $this->_propDict["resources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resources
    *
    * @param AzureAuthorizationSystemResource[] $val The resources
    *
    * @return AzureAuthorizationSystem
    */
    public function setResources($val)
    {
        $this->_propDict["resources"] = $val;
        return $this;
    }


     /**
     * Gets the roleDefinitions
     *
     * @return array|null The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists("roleDefinitions", $this->_propDict)) {
           return $this->_propDict["roleDefinitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleDefinitions
    *
    * @param AzureRoleDefinition[] $val The roleDefinitions
    *
    * @return AzureAuthorizationSystem
    */
    public function setRoleDefinitions($val)
    {
        $this->_propDict["roleDefinitions"] = $val;
        return $this;
    }


     /**
     * Gets the services
     *
     * @return array|null The services
     */
    public function getServices()
    {
        if (array_key_exists("services", $this->_propDict)) {
           return $this->_propDict["services"];
        } else {
            return null;
        }
    }

    /**
    * Sets the services
    *
    * @param AuthorizationSystemTypeService[] $val The services
    *
    * @return AzureAuthorizationSystem
    */
    public function setServices($val)
    {
        $this->_propDict["services"] = $val;
        return $this;
    }

}
