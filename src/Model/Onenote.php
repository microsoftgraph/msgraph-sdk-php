<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Onenote File
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
* Onenote class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Onenote extends Entity
{

     /** 
     * Gets the notebooks
    * The collection of OneNote notebooks that are owned by the user or group. Read-only. Nullable.
     *
     * @return Notebook[]|null The notebooks
     */
    public function getNotebooks()
    {
        if (array_key_exists('notebooks', $this->_propDict) && !is_null($this->_propDict['notebooks'])) {
            $notebooks = [];
            if (count($this->_propDict['notebooks']) > 0 && is_a($this->_propDict['notebooks'][0], 'Notebook')) {
                return $this->_propDict['notebooks'];
            }
            foreach ($this->_propDict['notebooks'] as $singleValue) {
                $notebooks []= new Notebook($singleValue);
            }
            $this->_propDict['notebooks'] = $notebooks;
            return $this->_propDict['notebooks'];
        }
        return null;
    }
    
    /** 
    * Sets the notebooks
    * The collection of OneNote notebooks that are owned by the user or group. Read-only. Nullable.
    *
    * @param Notebook[] $val The notebooks
    *
    * @return Onenote
    */
    public function setNotebooks($val)
    {
        $this->_propDict["notebooks"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
    * The status of OneNote operations. Getting an operations collection is not supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable.
     *
     * @return OnenoteOperation[]|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists('operations', $this->_propDict) && !is_null($this->_propDict['operations'])) {
            $operations = [];
            if (count($this->_propDict['operations']) > 0 && is_a($this->_propDict['operations'][0], 'OnenoteOperation')) {
                return $this->_propDict['operations'];
            }
            foreach ($this->_propDict['operations'] as $singleValue) {
                $operations []= new OnenoteOperation($singleValue);
            }
            $this->_propDict['operations'] = $operations;
            return $this->_propDict['operations'];
        }
        return null;
    }
    
    /** 
    * Sets the operations
    * The status of OneNote operations. Getting an operations collection is not supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable.
    *
    * @param OnenoteOperation[] $val The operations
    *
    * @return Onenote
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the pages
    * The pages in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     *
     * @return OnenotePage[]|null The pages
     */
    public function getPages()
    {
        if (array_key_exists('pages', $this->_propDict) && !is_null($this->_propDict['pages'])) {
            $pages = [];
            if (count($this->_propDict['pages']) > 0 && is_a($this->_propDict['pages'][0], 'OnenotePage')) {
                return $this->_propDict['pages'];
            }
            foreach ($this->_propDict['pages'] as $singleValue) {
                $pages []= new OnenotePage($singleValue);
            }
            $this->_propDict['pages'] = $pages;
            return $this->_propDict['pages'];
        }
        return null;
    }
    
    /** 
    * Sets the pages
    * The pages in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
    *
    * @param OnenotePage[] $val The pages
    *
    * @return Onenote
    */
    public function setPages($val)
    {
        $this->_propDict["pages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resources
    * The image and other file resources in OneNote pages. Getting a resources collection is not supported, but you can get the binary content of a specific resource. Read-only. Nullable.
     *
     * @return OnenoteResource[]|null The resources
     */
    public function getResources()
    {
        if (array_key_exists('resources', $this->_propDict) && !is_null($this->_propDict['resources'])) {
            $resources = [];
            if (count($this->_propDict['resources']) > 0 && is_a($this->_propDict['resources'][0], 'OnenoteResource')) {
                return $this->_propDict['resources'];
            }
            foreach ($this->_propDict['resources'] as $singleValue) {
                $resources []= new OnenoteResource($singleValue);
            }
            $this->_propDict['resources'] = $resources;
            return $this->_propDict['resources'];
        }
        return null;
    }
    
    /** 
    * Sets the resources
    * The image and other file resources in OneNote pages. Getting a resources collection is not supported, but you can get the binary content of a specific resource. Read-only. Nullable.
    *
    * @param OnenoteResource[] $val The resources
    *
    * @return Onenote
    */
    public function setResources($val)
    {
        $this->_propDict["resources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sectionGroups
    * The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     *
     * @return SectionGroup[]|null The sectionGroups
     */
    public function getSectionGroups()
    {
        if (array_key_exists('sectionGroups', $this->_propDict) && !is_null($this->_propDict['sectionGroups'])) {
            $sectionGroups = [];
            if (count($this->_propDict['sectionGroups']) > 0 && is_a($this->_propDict['sectionGroups'][0], 'SectionGroup')) {
                return $this->_propDict['sectionGroups'];
            }
            foreach ($this->_propDict['sectionGroups'] as $singleValue) {
                $sectionGroups []= new SectionGroup($singleValue);
            }
            $this->_propDict['sectionGroups'] = $sectionGroups;
            return $this->_propDict['sectionGroups'];
        }
        return null;
    }
    
    /** 
    * Sets the sectionGroups
    * The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
    *
    * @param SectionGroup[] $val The sectionGroups
    *
    * @return Onenote
    */
    public function setSectionGroups($val)
    {
        $this->_propDict["sectionGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sections
    * The sections in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     *
     * @return OnenoteSection[]|null The sections
     */
    public function getSections()
    {
        if (array_key_exists('sections', $this->_propDict) && !is_null($this->_propDict['sections'])) {
            $sections = [];
            if (count($this->_propDict['sections']) > 0 && is_a($this->_propDict['sections'][0], 'OnenoteSection')) {
                return $this->_propDict['sections'];
            }
            foreach ($this->_propDict['sections'] as $singleValue) {
                $sections []= new OnenoteSection($singleValue);
            }
            $this->_propDict['sections'] = $sections;
            return $this->_propDict['sections'];
        }
        return null;
    }
    
    /** 
    * Sets the sections
    * The sections in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
    *
    * @param OnenoteSection[] $val The sections
    *
    * @return Onenote
    */
    public function setSections($val)
    {
        $this->_propDict["sections"] = $val;
        return $this;
    }
    
}
