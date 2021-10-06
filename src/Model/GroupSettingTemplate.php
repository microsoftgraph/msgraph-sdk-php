<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupSettingTemplate File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* GroupSettingTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupSettingTemplate extends DirectoryObject
{
    /**
    * Gets the description
    * Description of the template.
    *
    * @return string|null The description
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
    * Description of the template.
    *
    * @param string $val The description
    *
    * @return GroupSettingTemplate
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Display name of the template.
    *
    * @return string|null The displayName
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
    * Display name of the template.
    *
    * @param string $val The displayName
    *
    * @return GroupSettingTemplate
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the values
    * Collection of settingTemplateValues that list the set of available settings, defaults and types that make up this template.
     *
     * @return SettingTemplateValue[]|null The values
     */
    public function getValues()
    {
        if (array_key_exists('values', $this->_propDict) && !is_null($this->_propDict['values'])) {
            $values = [];
            if (count($this->_propDict['values']) > 0 && is_a($this->_propDict['values'][0], 'SettingTemplateValue')) {
                return $this->_propDict['values'];
            }
            foreach ($this->_propDict['values'] as $singleValue) {
                $values []= new SettingTemplateValue($singleValue);
            }
            $this->_propDict['values'] = $values;
            return $this->_propDict['values'];
        }
        return null;
    }
    
    /** 
    * Sets the values
    * Collection of settingTemplateValues that list the set of available settings, defaults and types that make up this template.
    *
    * @param SettingTemplateValue[] $val The values
    *
    * @return GroupSettingTemplate
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }
    
}
