<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalScope File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* OrganizationalScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalScope extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the scopeNames
    *
    * @return string|null The scopeNames
    */
    public function getScopeNames()
    {
        if (array_key_exists("scopeNames", $this->_propDict)) {
            return $this->_propDict["scopeNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopeNames
    *
    * @param string $val The value of the scopeNames
    *
    * @return OrganizationalScope
    */
    public function setScopeNames($val)
    {
        $this->_propDict["scopeNames"] = $val;
        return $this;
    }

    /**
    * Gets the scopeType
    *
    * @return ScopeType|null The scopeType
    */
    public function getScopeType()
    {
        if (array_key_exists("scopeType", $this->_propDict)) {
            if (is_a($this->_propDict["scopeType"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\ScopeType") || is_null($this->_propDict["scopeType"])) {
                return $this->_propDict["scopeType"];
            } else {
                $this->_propDict["scopeType"] = new ScopeType($this->_propDict["scopeType"]);
                return $this->_propDict["scopeType"];
            }
        }
        return null;
    }

    /**
    * Sets the scopeType
    *
    * @param ScopeType $val The value to assign to the scopeType
    *
    * @return OrganizationalScope The OrganizationalScope
    */
    public function setScopeType($val)
    {
        $this->_propDict["scopeType"] = $val;
         return $this;
    }
}
