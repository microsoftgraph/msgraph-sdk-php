<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NotificationMessageTemplate File
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
* NotificationMessageTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class NotificationMessageTemplate extends Entity
{
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return NotificationMessageTemplate
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return NotificationMessageTemplate
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultLocale
    *
    * @return string The defaultLocale
    */
    public function getDefaultLocale()
    {
        if (array_key_exists("defaultLocale", $this->_propDict)) {
            return $this->_propDict["defaultLocale"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultLocale
    *
    * @param string $val The defaultLocale
    *
    * @return NotificationMessageTemplate
    */
    public function setDefaultLocale($val)
    {
        $this->_propDict["defaultLocale"] = $val;
        return $this;
    }
    
    /**
    * Gets the brandingOptions
    *
    * @return NotificationTemplateBrandingOptions The brandingOptions
    */
    public function getBrandingOptions()
    {
        if (array_key_exists("brandingOptions", $this->_propDict)) {
            if (is_a($this->_propDict["brandingOptions"], "Microsoft\Graph\Beta\Model\NotificationTemplateBrandingOptions")) {
                return $this->_propDict["brandingOptions"];
            } else {
                $this->_propDict["brandingOptions"] = new NotificationTemplateBrandingOptions($this->_propDict["brandingOptions"]);
                return $this->_propDict["brandingOptions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the brandingOptions
    *
    * @param NotificationTemplateBrandingOptions $val The brandingOptions
    *
    * @return NotificationMessageTemplate
    */
    public function setBrandingOptions($val)
    {
        $this->_propDict["brandingOptions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the localizedNotificationMessages
     *
     * @return array The localizedNotificationMessages
     */
    public function getLocalizedNotificationMessages()
    {
        if (array_key_exists("localizedNotificationMessages", $this->_propDict)) {
           return $this->_propDict["localizedNotificationMessages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the localizedNotificationMessages
    *
    * @param LocalizedNotificationMessage $val The localizedNotificationMessages
    *
    * @return NotificationMessageTemplate
    */
    public function setLocalizedNotificationMessages($val)
    {
		$this->_propDict["localizedNotificationMessages"] = $val;
        return $this;
    }
    
}