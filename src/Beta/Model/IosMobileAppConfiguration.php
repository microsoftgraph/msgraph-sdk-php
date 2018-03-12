<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosMobileAppConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* IosMobileAppConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosMobileAppConfiguration extends ManagedDeviceMobileAppConfiguration
{
    /**
    * Gets the settingXml
    *
    * @return string The settingXml
    */
    public function getSettingXml()
    {
        if (array_key_exists("settingXml", $this->_propDict)) {
            return $this->_propDict["settingXml"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingXml
    *
    * @param string $val The settingXml
    *
    * @return IosMobileAppConfiguration
    */
    public function setSettingXml($val)
    {
        $this->_propDict["settingXml"] = $val;
        return $this;
    }
    

     /** 
     * Gets the settings
     *
     * @return array The settings
     */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
           return $this->_propDict["settings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the settings
    *
    * @param AppConfigurationSettingItem $val The settings
    *
    * @return IosMobileAppConfiguration
    */
    public function setSettings($val)
    {
		$this->_propDict["settings"] = $val;
        return $this;
    }
    
}