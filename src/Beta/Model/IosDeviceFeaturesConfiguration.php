<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosDeviceFeaturesConfiguration File
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
* IosDeviceFeaturesConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
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
    * Gets the contentFilterSettings
    *
    * @return IosWebContentFilterBase The contentFilterSettings
    */
    public function getContentFilterSettings()
    {
        if (array_key_exists("contentFilterSettings", $this->_propDict)) {
            if (is_a($this->_propDict["contentFilterSettings"], "Microsoft\Graph\Beta\Model\IosWebContentFilterBase")) {
                return $this->_propDict["contentFilterSettings"];
            } else {
                $this->_propDict["contentFilterSettings"] = new IosWebContentFilterBase($this->_propDict["contentFilterSettings"]);
                return $this->_propDict["contentFilterSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contentFilterSettings
    *
    * @param IosWebContentFilterBase $val The contentFilterSettings
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setContentFilterSettings($val)
    {
        $this->_propDict["contentFilterSettings"] = $val;
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
    
    /**
    * Gets the singleSignOnSettings
    *
    * @return IosSingleSignOnSettings The singleSignOnSettings
    */
    public function getSingleSignOnSettings()
    {
        if (array_key_exists("singleSignOnSettings", $this->_propDict)) {
            if (is_a($this->_propDict["singleSignOnSettings"], "Microsoft\Graph\Beta\Model\IosSingleSignOnSettings")) {
                return $this->_propDict["singleSignOnSettings"];
            } else {
                $this->_propDict["singleSignOnSettings"] = new IosSingleSignOnSettings($this->_propDict["singleSignOnSettings"]);
                return $this->_propDict["singleSignOnSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the singleSignOnSettings
    *
    * @param IosSingleSignOnSettings $val The singleSignOnSettings
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setSingleSignOnSettings($val)
    {
        $this->_propDict["singleSignOnSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificateForClientAuthentication
    *
    * @return IosCertificateProfileBase The identityCertificateForClientAuthentication
    */
    public function getIdentityCertificateForClientAuthentication()
    {
        if (array_key_exists("identityCertificateForClientAuthentication", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificateForClientAuthentication"], "Microsoft\Graph\Beta\Model\IosCertificateProfileBase")) {
                return $this->_propDict["identityCertificateForClientAuthentication"];
            } else {
                $this->_propDict["identityCertificateForClientAuthentication"] = new IosCertificateProfileBase($this->_propDict["identityCertificateForClientAuthentication"]);
                return $this->_propDict["identityCertificateForClientAuthentication"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificateForClientAuthentication
    *
    * @param IosCertificateProfileBase $val The identityCertificateForClientAuthentication
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setIdentityCertificateForClientAuthentication($val)
    {
        $this->_propDict["identityCertificateForClientAuthentication"] = $val;
        return $this;
    }
    
}