<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsPolicyPermissionsDefinitionAction File
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
* AwsPolicyPermissionsDefinitionAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsPolicyPermissionsDefinitionAction extends AwsPermissionsDefinitionAction
{
    /**
    * Gets the assignToRoleId
    *
    * @return string|null The assignToRoleId
    */
    public function getAssignToRoleId()
    {
        if (array_key_exists("assignToRoleId", $this->_propDict)) {
            return $this->_propDict["assignToRoleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignToRoleId
    *
    * @param string $val The value of the assignToRoleId
    *
    * @return AwsPolicyPermissionsDefinitionAction
    */
    public function setAssignToRoleId($val)
    {
        $this->_propDict["assignToRoleId"] = $val;
        return $this;
    }

    /**
    * Gets the policies
    *
    * @return PermissionsDefinitionAwsPolicy|null The policies
    */
    public function getPolicies()
    {
        if (array_key_exists("policies", $this->_propDict)) {
            if (is_a($this->_propDict["policies"], "\Beta\Microsoft\Graph\Model\PermissionsDefinitionAwsPolicy") || is_null($this->_propDict["policies"])) {
                return $this->_propDict["policies"];
            } else {
                $this->_propDict["policies"] = new PermissionsDefinitionAwsPolicy($this->_propDict["policies"]);
                return $this->_propDict["policies"];
            }
        }
        return null;
    }

    /**
    * Sets the policies
    *
    * @param PermissionsDefinitionAwsPolicy $val The value to assign to the policies
    *
    * @return AwsPolicyPermissionsDefinitionAction The AwsPolicyPermissionsDefinitionAction
    */
    public function setPolicies($val)
    {
        $this->_propDict["policies"] = $val;
         return $this;
    }
}
