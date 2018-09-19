<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementUserRightsSetting File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* DeviceManagementUserRightsSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementUserRightsSetting extends Entity
{

    /**
    * Gets the state
    *
    * @return StateManagementSetting The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Microsoft\Graph\Beta\Model\StateManagementSetting")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new StateManagementSetting($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    *
    * @param StateManagementSetting $val The value to assign to the state
    *
    * @return DeviceManagementUserRightsSetting The DeviceManagementUserRightsSetting
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }

    /**
    * Gets the localUsersOrGroups
    *
    * @return DeviceManagementUserRightsLocalUserOrGroup The localUsersOrGroups
    */
    public function getLocalUsersOrGroups()
    {
        if (array_key_exists("localUsersOrGroups", $this->_propDict)) {
            if (is_a($this->_propDict["localUsersOrGroups"], "Microsoft\Graph\Beta\Model\DeviceManagementUserRightsLocalUserOrGroup")) {
                return $this->_propDict["localUsersOrGroups"];
            } else {
                $this->_propDict["localUsersOrGroups"] = new DeviceManagementUserRightsLocalUserOrGroup($this->_propDict["localUsersOrGroups"]);
                return $this->_propDict["localUsersOrGroups"];
            }
        }
        return null;
    }

    /**
    * Sets the localUsersOrGroups
    *
    * @param DeviceManagementUserRightsLocalUserOrGroup $val The value to assign to the localUsersOrGroups
    *
    * @return DeviceManagementUserRightsSetting The DeviceManagementUserRightsSetting
    */
    public function setLocalUsersOrGroups($val)
    {
        $this->_propDict["localUsersOrGroups"] = $val;
         return $this;
    }
}
