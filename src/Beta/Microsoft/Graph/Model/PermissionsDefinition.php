<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionsDefinition File
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
* PermissionsDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionsDefinition extends Entity
{

    /**
    * Gets the authorizationSystemInfo
    *
    * @return PermissionsDefinitionAuthorizationSystem|null The authorizationSystemInfo
    */
    public function getAuthorizationSystemInfo()
    {
        if (array_key_exists("authorizationSystemInfo", $this->_propDict)) {
            if (is_a($this->_propDict["authorizationSystemInfo"], "\Beta\Microsoft\Graph\Model\PermissionsDefinitionAuthorizationSystem") || is_null($this->_propDict["authorizationSystemInfo"])) {
                return $this->_propDict["authorizationSystemInfo"];
            } else {
                $this->_propDict["authorizationSystemInfo"] = new PermissionsDefinitionAuthorizationSystem($this->_propDict["authorizationSystemInfo"]);
                return $this->_propDict["authorizationSystemInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the authorizationSystemInfo
    *
    * @param PermissionsDefinitionAuthorizationSystem $val The value to assign to the authorizationSystemInfo
    *
    * @return PermissionsDefinition The PermissionsDefinition
    */
    public function setAuthorizationSystemInfo($val)
    {
        $this->_propDict["authorizationSystemInfo"] = $val;
         return $this;
    }

    /**
    * Gets the identityInfo
    *
    * @return PermissionsDefinitionAuthorizationSystemIdentity|null The identityInfo
    */
    public function getIdentityInfo()
    {
        if (array_key_exists("identityInfo", $this->_propDict)) {
            if (is_a($this->_propDict["identityInfo"], "\Beta\Microsoft\Graph\Model\PermissionsDefinitionAuthorizationSystemIdentity") || is_null($this->_propDict["identityInfo"])) {
                return $this->_propDict["identityInfo"];
            } else {
                $this->_propDict["identityInfo"] = new PermissionsDefinitionAuthorizationSystemIdentity($this->_propDict["identityInfo"]);
                return $this->_propDict["identityInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the identityInfo
    *
    * @param PermissionsDefinitionAuthorizationSystemIdentity $val The value to assign to the identityInfo
    *
    * @return PermissionsDefinition The PermissionsDefinition
    */
    public function setIdentityInfo($val)
    {
        $this->_propDict["identityInfo"] = $val;
         return $this;
    }
}
