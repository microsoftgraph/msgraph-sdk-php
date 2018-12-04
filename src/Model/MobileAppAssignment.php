<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppAssignment File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* MobileAppAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MobileAppAssignment extends Entity
{
    /**
    * Gets the intent
    *
    * @return InstallIntent The intent
    */
    public function getIntent()
    {
        if (array_key_exists("intent", $this->_propDict)) {
            if (is_a($this->_propDict["intent"], "Microsoft\Graph\Model\InstallIntent")) {
                return $this->_propDict["intent"];
            } else {
                $this->_propDict["intent"] = new InstallIntent($this->_propDict["intent"]);
                return $this->_propDict["intent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the intent
    *
    * @param InstallIntent $val The intent
    *
    * @return MobileAppAssignment
    */
    public function setIntent($val)
    {
        $this->_propDict["intent"] = $val;
        return $this;
    }
    
    /**
    * Gets the target
    *
    * @return DeviceAndAppManagementAssignmentTarget The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "Microsoft\Graph\Model\DeviceAndAppManagementAssignmentTarget")) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new DeviceAndAppManagementAssignmentTarget($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }
    
    /**
    * Sets the target
    *
    * @param DeviceAndAppManagementAssignmentTarget $val The target
    *
    * @return MobileAppAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    *
    * @return MobileAppAssignmentSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "Microsoft\Graph\Model\MobileAppAssignmentSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new MobileAppAssignmentSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    *
    * @param MobileAppAssignmentSettings $val The settings
    *
    * @return MobileAppAssignment
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
}