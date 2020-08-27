<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationTemplate File
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
* ApplicationTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplicationTemplate extends Entity
{
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
    * @return ApplicationTemplate
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the homePageUrl
    *
    * @return string The homePageUrl
    */
    public function getHomePageUrl()
    {
        if (array_key_exists("homePageUrl", $this->_propDict)) {
            return $this->_propDict["homePageUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the homePageUrl
    *
    * @param string $val The homePageUrl
    *
    * @return ApplicationTemplate
    */
    public function setHomePageUrl($val)
    {
        $this->_propDict["homePageUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportedSingleSignOnModes
    *
    * @return string The supportedSingleSignOnModes
    */
    public function getSupportedSingleSignOnModes()
    {
        if (array_key_exists("supportedSingleSignOnModes", $this->_propDict)) {
            return $this->_propDict["supportedSingleSignOnModes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportedSingleSignOnModes
    *
    * @param string $val The supportedSingleSignOnModes
    *
    * @return ApplicationTemplate
    */
    public function setSupportedSingleSignOnModes($val)
    {
        $this->_propDict["supportedSingleSignOnModes"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportedProvisioningTypes
    *
    * @return string The supportedProvisioningTypes
    */
    public function getSupportedProvisioningTypes()
    {
        if (array_key_exists("supportedProvisioningTypes", $this->_propDict)) {
            return $this->_propDict["supportedProvisioningTypes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportedProvisioningTypes
    *
    * @param string $val The supportedProvisioningTypes
    *
    * @return ApplicationTemplate
    */
    public function setSupportedProvisioningTypes($val)
    {
        $this->_propDict["supportedProvisioningTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the logoUrl
    *
    * @return string The logoUrl
    */
    public function getLogoUrl()
    {
        if (array_key_exists("logoUrl", $this->_propDict)) {
            return $this->_propDict["logoUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the logoUrl
    *
    * @param string $val The logoUrl
    *
    * @return ApplicationTemplate
    */
    public function setLogoUrl($val)
    {
        $this->_propDict["logoUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the categories
    *
    * @return string The categories
    */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
            return $this->_propDict["categories"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the categories
    *
    * @param string $val The categories
    *
    * @return ApplicationTemplate
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
        return $this;
    }
    
    /**
    * Gets the publisher
    *
    * @return string The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publisher
    *
    * @param string $val The publisher
    *
    * @return ApplicationTemplate
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return ApplicationTemplate
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
}