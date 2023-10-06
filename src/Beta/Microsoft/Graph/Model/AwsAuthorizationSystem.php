<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsAuthorizationSystem File
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
* AwsAuthorizationSystem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsAuthorizationSystem extends AuthorizationSystem
{
    /**
    * Gets the associatedIdentities
    *
    * @return AwsAssociatedIdentities|null The associatedIdentities
    */
    public function getAssociatedIdentities()
    {
        if (array_key_exists("associatedIdentities", $this->_propDict)) {
            if (is_a($this->_propDict["associatedIdentities"], "\Beta\Microsoft\Graph\Model\AwsAssociatedIdentities") || is_null($this->_propDict["associatedIdentities"])) {
                return $this->_propDict["associatedIdentities"];
            } else {
                $this->_propDict["associatedIdentities"] = new AwsAssociatedIdentities($this->_propDict["associatedIdentities"]);
                return $this->_propDict["associatedIdentities"];
            }
        }
        return null;
    }

    /**
    * Sets the associatedIdentities
    *
    * @param AwsAssociatedIdentities $val The associatedIdentities
    *
    * @return AwsAuthorizationSystem
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
    * @param AwsAuthorizationSystemTypeAction[] $val The actions
    *
    * @return AwsAuthorizationSystem
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
        return $this;
    }


     /**
     * Gets the policies
     *
     * @return array|null The policies
     */
    public function getPolicies()
    {
        if (array_key_exists("policies", $this->_propDict)) {
           return $this->_propDict["policies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policies
    *
    * @param AwsPolicy[] $val The policies
    *
    * @return AwsAuthorizationSystem
    */
    public function setPolicies($val)
    {
        $this->_propDict["policies"] = $val;
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
    * @param AwsAuthorizationSystemResource[] $val The resources
    *
    * @return AwsAuthorizationSystem
    */
    public function setResources($val)
    {
        $this->_propDict["resources"] = $val;
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
    * @return AwsAuthorizationSystem
    */
    public function setServices($val)
    {
        $this->_propDict["services"] = $val;
        return $this;
    }

}
