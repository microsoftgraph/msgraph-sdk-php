<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsActionsPermissionsDefinitionAction File
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
* AwsActionsPermissionsDefinitionAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsActionsPermissionsDefinitionAction extends AwsPermissionsDefinitionAction
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
    * @return AwsActionsPermissionsDefinitionAction
    */
    public function setAssignToRoleId($val)
    {
        $this->_propDict["assignToRoleId"] = $val;
        return $this;
    }

    /**
    * Gets the statements
    *
    * @return AwsStatement|null The statements
    */
    public function getStatements()
    {
        if (array_key_exists("statements", $this->_propDict)) {
            if (is_a($this->_propDict["statements"], "\Beta\Microsoft\Graph\Model\AwsStatement") || is_null($this->_propDict["statements"])) {
                return $this->_propDict["statements"];
            } else {
                $this->_propDict["statements"] = new AwsStatement($this->_propDict["statements"]);
                return $this->_propDict["statements"];
            }
        }
        return null;
    }

    /**
    * Sets the statements
    *
    * @param AwsStatement $val The value to assign to the statements
    *
    * @return AwsActionsPermissionsDefinitionAction The AwsActionsPermissionsDefinitionAction
    */
    public function setStatements($val)
    {
        $this->_propDict["statements"] = $val;
         return $this;
    }
}
