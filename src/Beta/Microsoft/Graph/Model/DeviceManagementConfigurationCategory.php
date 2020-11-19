<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationCategory File
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
* DeviceManagementConfigurationCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationCategory extends Entity
{
    /**
    * Gets the description
    * Description of the item
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
    * Description of the item
    *
    * @param string $val The description
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Display name of the item
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
    * Display name of the item
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the helpText
    * Help text of the item
    *
    * @return string The helpText
    */
    public function getHelpText()
    {
        if (array_key_exists("helpText", $this->_propDict)) {
            return $this->_propDict["helpText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the helpText
    * Help text of the item
    *
    * @param string $val The helpText
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setHelpText($val)
    {
        $this->_propDict["helpText"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * Name of the item
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    * Name of the item
    *
    * @param string $val The name
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the platforms
    * Platforms types, which settings in the category have.
    *
    * @return DeviceManagementConfigurationPlatforms The platforms
    */
    public function getPlatforms()
    {
        if (array_key_exists("platforms", $this->_propDict)) {
            if (is_a($this->_propDict["platforms"], "Beta\Microsoft\Graph\Model\DeviceManagementConfigurationPlatforms")) {
                return $this->_propDict["platforms"];
            } else {
                $this->_propDict["platforms"] = new DeviceManagementConfigurationPlatforms($this->_propDict["platforms"]);
                return $this->_propDict["platforms"];
            }
        }
        return null;
    }
    
    /**
    * Sets the platforms
    * Platforms types, which settings in the category have.
    *
    * @param DeviceManagementConfigurationPlatforms $val The platforms
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setPlatforms($val)
    {
        $this->_propDict["platforms"] = $val;
        return $this;
    }
    
    /**
    * Gets the technologies
    * Technologies types, which settings in the category have.
    *
    * @return DeviceManagementConfigurationTechnologies The technologies
    */
    public function getTechnologies()
    {
        if (array_key_exists("technologies", $this->_propDict)) {
            if (is_a($this->_propDict["technologies"], "Beta\Microsoft\Graph\Model\DeviceManagementConfigurationTechnologies")) {
                return $this->_propDict["technologies"];
            } else {
                $this->_propDict["technologies"] = new DeviceManagementConfigurationTechnologies($this->_propDict["technologies"]);
                return $this->_propDict["technologies"];
            }
        }
        return null;
    }
    
    /**
    * Sets the technologies
    * Technologies types, which settings in the category have.
    *
    * @param DeviceManagementConfigurationTechnologies $val The technologies
    *
    * @return DeviceManagementConfigurationCategory
    */
    public function setTechnologies($val)
    {
        $this->_propDict["technologies"] = $val;
        return $this;
    }
    
}