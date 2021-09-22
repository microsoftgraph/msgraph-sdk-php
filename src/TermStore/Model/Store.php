<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Store File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\TermStore\Model;

/**
* Store class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Store extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the defaultLanguageTag
    * Default language of the term store.
    *
    * @return string|null The defaultLanguageTag
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
    * Default language of the term store.
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
    * List of languages for the term store.
    *
    * @return string|null The languageTags
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
    * List of languages for the term store.
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
    * Collection of all groups available in the term store.
     *
     * @return Group[]|null The groups
     */
    public function getGroups()
    {
        if (array_key_exists('groups', $this->_propDict) && !is_null($this->_propDict['groups'])) {
            $groups = [];
            if (count($this->_propDict['groups']) > 0 && is_a($this->_propDict['groups'][0], 'Group')) {
                return $this->_propDict['groups'];
            }
            foreach ($this->_propDict['groups'] as $singleValue) {
                $groups []= new Group($singleValue);
            }
            $this->_propDict['groups'] = $groups;
            return $this->_propDict['groups'];
        }
        return null;
    }
    
    /** 
    * Sets the groups
    * Collection of all groups available in the term store.
    *
    * @param Group[] $val The groups
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
    * Collection of all sets available in the term store.
     *
     * @return Set[]|null The sets
     */
    public function getSets()
    {
        if (array_key_exists('sets', $this->_propDict) && !is_null($this->_propDict['sets'])) {
            $sets = [];
            if (count($this->_propDict['sets']) > 0 && is_a($this->_propDict['sets'][0], 'Set')) {
                return $this->_propDict['sets'];
            }
            foreach ($this->_propDict['sets'] as $singleValue) {
                $sets []= new Set($singleValue);
            }
            $this->_propDict['sets'] = $sets;
            return $this->_propDict['sets'];
        }
        return null;
    }
    
    /** 
    * Sets the sets
    * Collection of all sets available in the term store.
    *
    * @param Set[] $val The sets
    *
    * @return Store
    */
    public function setSets($val)
    {
        $this->_propDict["sets"] = $val;
        return $this;
    }
    
}
