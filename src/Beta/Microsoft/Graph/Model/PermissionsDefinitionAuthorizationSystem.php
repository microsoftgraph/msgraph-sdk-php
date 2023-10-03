<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionsDefinitionAuthorizationSystem File
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
* PermissionsDefinitionAuthorizationSystem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionsDefinitionAuthorizationSystem extends Entity
{
    /**
    * Gets the authorizationSystemId
    *
    * @return string|null The authorizationSystemId
    */
    public function getAuthorizationSystemId()
    {
        if (array_key_exists("authorizationSystemId", $this->_propDict)) {
            return $this->_propDict["authorizationSystemId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authorizationSystemId
    *
    * @param string $val The value of the authorizationSystemId
    *
    * @return PermissionsDefinitionAuthorizationSystem
    */
    public function setAuthorizationSystemId($val)
    {
        $this->_propDict["authorizationSystemId"] = $val;
        return $this;
    }
    /**
    * Gets the authorizationSystemType
    *
    * @return string|null The authorizationSystemType
    */
    public function getAuthorizationSystemType()
    {
        if (array_key_exists("authorizationSystemType", $this->_propDict)) {
            return $this->_propDict["authorizationSystemType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authorizationSystemType
    *
    * @param string $val The value of the authorizationSystemType
    *
    * @return PermissionsDefinitionAuthorizationSystem
    */
    public function setAuthorizationSystemType($val)
    {
        $this->_propDict["authorizationSystemType"] = $val;
        return $this;
    }
}
