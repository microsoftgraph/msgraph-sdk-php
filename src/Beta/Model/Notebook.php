<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Notebook File
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
* Notebook class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Notebook extends OnenoteEntityHierarchyModel
{
    /**
    * Gets the isDefault
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefault
    *
    * @param bool $val The isDefault
    *
    * @return Notebook
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the userRole
    *
    * @return OnenoteUserRole The userRole
    */
    public function getUserRole()
    {
        if (array_key_exists("userRole", $this->_propDict)) {
            if (is_a($this->_propDict["userRole"], "Microsoft\Graph\Beta\Model\OnenoteUserRole")) {
                return $this->_propDict["userRole"];
            } else {
                $this->_propDict["userRole"] = new OnenoteUserRole($this->_propDict["userRole"]);
                return $this->_propDict["userRole"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRole
    *
    * @param OnenoteUserRole $val The userRole
    *
    * @return Notebook
    */
    public function setUserRole($val)
    {
        $this->_propDict["userRole"] = $val;
        return $this;
    }
    
    /**
    * Gets the isShared
    *
    * @return bool The isShared
    */
    public function getIsShared()
    {
        if (array_key_exists("isShared", $this->_propDict)) {
            return $this->_propDict["isShared"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isShared
    *
    * @param bool $val The isShared
    *
    * @return Notebook
    */
    public function setIsShared($val)
    {
        $this->_propDict["isShared"] = boolval($val);
        return $this;
    }
    
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
    * @return Notebook
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
    * @return Notebook
    */
    public function setSectionGroupsUrl($val)
    {
        $this->_propDict["sectionGroupsUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the links
    *
    * @return NotebookLinks The links
    */
    public function getLinks()
    {
        if (array_key_exists("links", $this->_propDict)) {
            if (is_a($this->_propDict["links"], "Microsoft\Graph\Beta\Model\NotebookLinks")) {
                return $this->_propDict["links"];
            } else {
                $this->_propDict["links"] = new NotebookLinks($this->_propDict["links"]);
                return $this->_propDict["links"];
            }
        }
        return null;
    }
    
    /**
    * Sets the links
    *
    * @param NotebookLinks $val The links
    *
    * @return Notebook
    */
    public function setLinks($val)
    {
        $this->_propDict["links"] = $val;
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
    * @return Notebook
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
    * @return Notebook
    */
    public function setSectionGroups($val)
    {
		$this->_propDict["sectionGroups"] = $val;
        return $this;
    }
    
}