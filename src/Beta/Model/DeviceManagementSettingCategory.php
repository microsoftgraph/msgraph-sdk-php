<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingCategory File
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
* DeviceManagementSettingCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementSettingCategory extends Entity
{
    /**
    * Gets the displayName
    * The category name
    *
    * @return string The displayName
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
    * The category name
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementSettingCategory
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the settingDefinitions
    * The setting definitions this category contains
     *
     * @return array The settingDefinitions
     */
    public function getSettingDefinitions()
    {
        if (array_key_exists("settingDefinitions", $this->_propDict)) {
           return $this->_propDict["settingDefinitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the settingDefinitions
    * The setting definitions this category contains
    *
    * @param DeviceManagementSettingDefinition $val The settingDefinitions
    *
    * @return DeviceManagementSettingCategory
    */
    public function setSettingDefinitions($val)
    {
		$this->_propDict["settingDefinitions"] = $val;
        return $this;
    }
    
}