<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosDeviceFeaturesConfiguration File
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
* IosDeviceFeaturesConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IosDeviceFeaturesConfiguration extends AppleDeviceFeaturesConfigurationBase
{
    /**
    * Gets the assetTagTemplate
    *
    * @return string The assetTagTemplate
    */
    public function getAssetTagTemplate()
    {
        if (array_key_exists("assetTagTemplate", $this->_propDict)) {
            return $this->_propDict["assetTagTemplate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assetTagTemplate
    *
    * @param string $val The assetTagTemplate
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setAssetTagTemplate($val)
    {
        $this->_propDict["assetTagTemplate"] = $val;
        return $this;
    }
    
    /**
    * Gets the lockScreenFootnote
    *
    * @return string The lockScreenFootnote
    */
    public function getLockScreenFootnote()
    {
        if (array_key_exists("lockScreenFootnote", $this->_propDict)) {
            return $this->_propDict["lockScreenFootnote"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenFootnote
    *
    * @param string $val The lockScreenFootnote
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setLockScreenFootnote($val)
    {
        $this->_propDict["lockScreenFootnote"] = $val;
        return $this;
    }
    

     /** 
     * Gets the homeScreenDockIcons
     *
     * @return array The homeScreenDockIcons
     */
    public function getHomeScreenDockIcons()
    {
        if (array_key_exists("homeScreenDockIcons", $this->_propDict)) {
           return $this->_propDict["homeScreenDockIcons"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the homeScreenDockIcons
    *
    * @param IosHomeScreenItem $val The homeScreenDockIcons
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setHomeScreenDockIcons($val)
    {
		$this->_propDict["homeScreenDockIcons"] = $val;
        return $this;
    }
    

     /** 
     * Gets the homeScreenPages
     *
     * @return array The homeScreenPages
     */
    public function getHomeScreenPages()
    {
        if (array_key_exists("homeScreenPages", $this->_propDict)) {
           return $this->_propDict["homeScreenPages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the homeScreenPages
    *
    * @param IosHomeScreenPage $val The homeScreenPages
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setHomeScreenPages($val)
    {
		$this->_propDict["homeScreenPages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the notificationSettings
     *
     * @return array The notificationSettings
     */
    public function getNotificationSettings()
    {
        if (array_key_exists("notificationSettings", $this->_propDict)) {
           return $this->_propDict["notificationSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the notificationSettings
    *
    * @param IosNotificationSettings $val The notificationSettings
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setNotificationSettings($val)
    {
		$this->_propDict["notificationSettings"] = $val;
        return $this;
    }
    
}