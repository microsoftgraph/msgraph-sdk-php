<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GcpAuthorizationSystem File
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
* GcpAuthorizationSystem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GcpAuthorizationSystem extends AuthorizationSystem
{
    /**
    * Gets the associatedIdentities
    *
    * @return GcpAssociatedIdentities|null The associatedIdentities
    */
    public function getAssociatedIdentities()
    {
        if (array_key_exists("associatedIdentities", $this->_propDict)) {
            if (is_a($this->_propDict["associatedIdentities"], "\Beta\Microsoft\Graph\Model\GcpAssociatedIdentities") || is_null($this->_propDict["associatedIdentities"])) {
                return $this->_propDict["associatedIdentities"];
            } else {
                $this->_propDict["associatedIdentities"] = new GcpAssociatedIdentities($this->_propDict["associatedIdentities"]);
                return $this->_propDict["associatedIdentities"];
            }
        }
        return null;
    }

    /**
    * Sets the associatedIdentities
    *
    * @param GcpAssociatedIdentities $val The associatedIdentities
    *
    * @return GcpAuthorizationSystem
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
    * @param GcpAuthorizationSystemTypeAction[] $val The actions
    *
    * @return GcpAuthorizationSystem
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
    * @param GcpAuthorizationSystemResource[] $val The resources
    *
    * @return GcpAuthorizationSystem
    */
    public function setResources($val)
    {
        $this->_propDict["resources"] = $val;
        return $this;
    }


     /**
     * Gets the roles
     *
     * @return array|null The roles
     */
    public function getRoles()
    {
        if (array_key_exists("roles", $this->_propDict)) {
           return $this->_propDict["roles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roles
    *
    * @param GcpRole[] $val The roles
    *
    * @return GcpAuthorizationSystem
    */
    public function setRoles($val)
    {
        $this->_propDict["roles"] = $val;
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
    * @return GcpAuthorizationSystem
    */
    public function setServices($val)
    {
        $this->_propDict["services"] = $val;
        return $this;
    }

}
