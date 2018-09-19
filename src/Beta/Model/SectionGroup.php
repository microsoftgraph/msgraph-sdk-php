<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SectionGroup File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* SectionGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SectionGroup extends OnenoteEntityHierarchyModel
{
    /**
    * Gets the sectionsUrl
    *
    * @return string The sectionsUrl
    */
    public function getSectionsUrl()
    {
        if (array_key_exists("sectionsUrl", $this->_propDict)) {
            return $this->_propDict["sectionsUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sectionsUrl
    *
    * @param string $val The sectionsUrl
    *
    * @return SectionGroup
    */
    public function setSectionsUrl($val)
    {
        $this->_propDict["sectionsUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the sectionGroupsUrl
    *
    * @return string The sectionGroupsUrl
    */
    public function getSectionGroupsUrl()
    {
        if (array_key_exists("sectionGroupsUrl", $this->_propDict)) {
            return $this->_propDict["sectionGroupsUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sectionGroupsUrl
    *
    * @param string $val The sectionGroupsUrl
    *
    * @return SectionGroup
    */
    public function setSectionGroupsUrl($val)
    {
        $this->_propDict["sectionGroupsUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentNotebook
    *
    * @return Notebook The parentNotebook
    */
    public function getParentNotebook()
    {
        if (array_key_exists("parentNotebook", $this->_propDict)) {
            if (is_a($this->_propDict["parentNotebook"], "Microsoft\Graph\Beta\Model\Notebook")) {
                return $this->_propDict["parentNotebook"];
            } else {
                $this->_propDict["parentNotebook"] = new Notebook($this->_propDict["parentNotebook"]);
                return $this->_propDict["parentNotebook"];
            }
        }
        return null;
    }
    
    /**
    * Sets the parentNotebook
    *
    * @param Notebook $val The parentNotebook
    *
    * @return SectionGroup
    */
    public function setParentNotebook($val)
    {
        $this->_propDict["parentNotebook"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentSectionGroup
    *
    * @return SectionGroup The parentSectionGroup
    */
    public function getParentSectionGroup()
    {
        if (array_key_exists("parentSectionGroup", $this->_propDict)) {
            if (is_a($this->_propDict["parentSectionGroup"], "Microsoft\Graph\Beta\Model\SectionGroup")) {
                return $this->_propDict["parentSectionGroup"];
            } else {
                $this->_propDict["parentSectionGroup"] = new SectionGroup($this->_propDict["parentSectionGroup"]);
                return $this->_propDict["parentSectionGroup"];
            }
        }
        return null;
    }
    
    /**
    * Sets the parentSectionGroup
    *
    * @param SectionGroup $val The parentSectionGroup
    *
    * @return SectionGroup
    */
    public function setParentSectionGroup($val)
    {
        $this->_propDict["parentSectionGroup"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sections
     *
     * @return array The sections
     */
    public function getSections()
    {
        if (array_key_exists("sections", $this->_propDict)) {
           return $this->_propDict["sections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sections
    *
    * @param OnenoteSection $val The sections
    *
    * @return SectionGroup
    */
    public function setSections($val)
    {
		$this->_propDict["sections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sectionGroups
     *
     * @return array The sectionGroups
     */
    public function getSectionGroups()
    {
        if (array_key_exists("sectionGroups", $this->_propDict)) {
           return $this->_propDict["sectionGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sectionGroups
    *
    * @param SectionGroup $val The sectionGroups
    *
    * @return SectionGroup
    */
    public function setSectionGroups($val)
    {
		$this->_propDict["sectionGroups"] = $val;
        return $this;
    }
    
}