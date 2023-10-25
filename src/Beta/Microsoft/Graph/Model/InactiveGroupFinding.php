<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InactiveGroupFinding File
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
* InactiveGroupFinding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InactiveGroupFinding extends Finding
{
    /**
    * Gets the actionSummary
    *
    * @return ActionSummary|null The actionSummary
    */
    public function getActionSummary()
    {
        if (array_key_exists("actionSummary", $this->_propDict)) {
            if (is_a($this->_propDict["actionSummary"], "\Beta\Microsoft\Graph\Model\ActionSummary") || is_null($this->_propDict["actionSummary"])) {
                return $this->_propDict["actionSummary"];
            } else {
                $this->_propDict["actionSummary"] = new ActionSummary($this->_propDict["actionSummary"]);
                return $this->_propDict["actionSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the actionSummary
    *
    * @param ActionSummary $val The actionSummary
    *
    * @return InactiveGroupFinding
    */
    public function setActionSummary($val)
    {
        $this->_propDict["actionSummary"] = $val;
        return $this;
    }

    /**
    * Gets the permissionsCreepIndex
    *
    * @return PermissionsCreepIndex|null The permissionsCreepIndex
    */
    public function getPermissionsCreepIndex()
    {
        if (array_key_exists("permissionsCreepIndex", $this->_propDict)) {
            if (is_a($this->_propDict["permissionsCreepIndex"], "\Beta\Microsoft\Graph\Model\PermissionsCreepIndex") || is_null($this->_propDict["permissionsCreepIndex"])) {
                return $this->_propDict["permissionsCreepIndex"];
            } else {
                $this->_propDict["permissionsCreepIndex"] = new PermissionsCreepIndex($this->_propDict["permissionsCreepIndex"]);
                return $this->_propDict["permissionsCreepIndex"];
            }
        }
        return null;
    }

    /**
    * Sets the permissionsCreepIndex
    *
    * @param PermissionsCreepIndex $val The permissionsCreepIndex
    *
    * @return InactiveGroupFinding
    */
    public function setPermissionsCreepIndex($val)
    {
        $this->_propDict["permissionsCreepIndex"] = $val;
        return $this;
    }

    /**
    * Gets the group
    *
    * @return AuthorizationSystemIdentity|null The group
    */
    public function getGroup()
    {
        if (array_key_exists("group", $this->_propDict)) {
            if (is_a($this->_propDict["group"], "\Beta\Microsoft\Graph\Model\AuthorizationSystemIdentity") || is_null($this->_propDict["group"])) {
                return $this->_propDict["group"];
            } else {
                $this->_propDict["group"] = new AuthorizationSystemIdentity($this->_propDict["group"]);
                return $this->_propDict["group"];
            }
        }
        return null;
    }

    /**
    * Sets the group
    *
    * @param AuthorizationSystemIdentity $val The group
    *
    * @return InactiveGroupFinding
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }

}
