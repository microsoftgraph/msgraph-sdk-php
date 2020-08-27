<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementAbstractComplexSettingDefinition File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* DeviceManagementAbstractComplexSettingDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementAbstractComplexSettingDefinition extends DeviceManagementSettingDefinition
{
    /**
    * Gets the implementations
    * List of definition IDs for all possible implementations of this abstract complex setting
    *
    * @return string The implementations
    */
    public function getImplementations()
    {
        if (array_key_exists("implementations", $this->_propDict)) {
            return $this->_propDict["implementations"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the implementations
    * List of definition IDs for all possible implementations of this abstract complex setting
    *
    * @param string $val The implementations
    *
    * @return DeviceManagementAbstractComplexSettingDefinition
    */
    public function setImplementations($val)
    {
        $this->_propDict["implementations"] = $val;
        return $this;
    }
    
}