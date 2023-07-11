<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResourceRoleScope File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* AccessPackageResourceRoleScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageResourceRoleScope extends Entity
{
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AccessPackageResourceRoleScope
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the role
    *
    * @return AccessPackageResourceRole|null The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            if (is_a($this->_propDict["role"], "\Microsoft\Graph\Model\AccessPackageResourceRole") || is_null($this->_propDict["role"])) {
                return $this->_propDict["role"];
            } else {
                $this->_propDict["role"] = new AccessPackageResourceRole($this->_propDict["role"]);
                return $this->_propDict["role"];
            }
        }
        return null;
    }

    /**
    * Sets the role
    *
    * @param AccessPackageResourceRole $val The role
    *
    * @return AccessPackageResourceRoleScope
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }

    /**
    * Gets the scope
    *
    * @return AccessPackageResourceScope|null The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            if (is_a($this->_propDict["scope"], "\Microsoft\Graph\Model\AccessPackageResourceScope") || is_null($this->_propDict["scope"])) {
                return $this->_propDict["scope"];
            } else {
                $this->_propDict["scope"] = new AccessPackageResourceScope($this->_propDict["scope"]);
                return $this->_propDict["scope"];
            }
        }
        return null;
    }

    /**
    * Sets the scope
    *
    * @param AccessPackageResourceScope $val The scope
    *
    * @return AccessPackageResourceRoleScope
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }

}
