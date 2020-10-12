<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Store File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\TermStore\Model;

/**
* Store class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Store extends 
{
    /**
    * Gets the defaultLanguageTag
    *
    * @return string The defaultLanguageTag
    */
    public function getDefaultLanguageTag()
    {
        if (array_key_exists("defaultLanguageTag", $this->_propDict)) {
            return $this->_propDict["defaultLanguageTag"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultLanguageTag
    *
    * @param string $val The defaultLanguageTag
    *
    * @return Store
    */
    public function setDefaultLanguageTag($val)
    {
        $this->_propDict["defaultLanguageTag"] = $val;
        return $this;
    }
    
    /**
    * Gets the languageTags
    *
    * @return string The languageTags
    */
    public function getLanguageTags()
    {
        if (array_key_exists("languageTags", $this->_propDict)) {
            return $this->_propDict["languageTags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the languageTags
    *
    * @param string $val The languageTags
    *
    * @return Store
    */
    public function setLanguageTags($val)
    {
        $this->_propDict["languageTags"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groups
     *
     * @return array The groups
     */
    public function getGroups()
    {
        if (array_key_exists("groups", $this->_propDict)) {
           return $this->_propDict["groups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the groups
    *
    * @param Group $val The groups
    *
    * @return Store
    */
    public function setGroups($val)
    {
		$this->_propDict["groups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sets
     *
     * @return array The sets
     */
    public function getSets()
    {
        if (array_key_exists("sets", $this->_propDict)) {
           return $this->_propDict["sets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sets
    *
    * @param Set $val The sets
    *
    * @return Store
    */
    public function setSets($val)
    {
		$this->_propDict["sets"] = $val;
        return $this;
    }
    
}