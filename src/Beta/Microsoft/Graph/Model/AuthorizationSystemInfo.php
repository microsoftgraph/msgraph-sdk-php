<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthorizationSystemInfo File
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
* AuthorizationSystemInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthorizationSystemInfo extends Entity
{

    /**
    * Gets the authorizationSystemType
    *
    * @return AuthorizationSystemType|null The authorizationSystemType
    */
    public function getAuthorizationSystemType()
    {
        if (array_key_exists("authorizationSystemType", $this->_propDict)) {
            if (is_a($this->_propDict["authorizationSystemType"], "\Beta\Microsoft\Graph\Model\AuthorizationSystemType") || is_null($this->_propDict["authorizationSystemType"])) {
                return $this->_propDict["authorizationSystemType"];
            } else {
                $this->_propDict["authorizationSystemType"] = new AuthorizationSystemType($this->_propDict["authorizationSystemType"]);
                return $this->_propDict["authorizationSystemType"];
            }
        }
        return null;
    }

    /**
    * Sets the authorizationSystemType
    *
    * @param AuthorizationSystemType $val The value to assign to the authorizationSystemType
    *
    * @return AuthorizationSystemInfo The AuthorizationSystemInfo
    */
    public function setAuthorizationSystemType($val)
    {
        $this->_propDict["authorizationSystemType"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return AuthorizationSystemInfo
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return AuthorizationSystemInfo
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
}
