<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Onenote File
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
* Onenote class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Onenote extends Entity
{

     /** 
     * Gets the notebooks
     *
     * @return array The notebooks
     */
    public function getNotebooks()
    {
        if (array_key_exists("notebooks", $this->_propDict)) {
           return $this->_propDict["notebooks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the notebooks
    *
    * @param Notebook $val The notebooks
    *
    * @return Onenote
    */
    public function setNotebooks($val)
    {
		$this->_propDict["notebooks"] = $val;
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
    * @return Onenote
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
    * @return Onenote
    */
    public function setSectionGroups($val)
    {
		$this->_propDict["sectionGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the pages
     *
     * @return array The pages
     */
    public function getPages()
    {
        if (array_key_exists("pages", $this->_propDict)) {
           return $this->_propDict["pages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the pages
    *
    * @param OnenotePage $val The pages
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
     *
     * @return array The resources
     */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
           return $this->_propDict["resources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the resources
    *
    * @param OnenoteResource $val The resources
    *
    * @return Onenote
    */
    public function setResources($val)
    {
		$this->_propDict["resources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
     *
     * @return array The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the operations
    *
    * @param OnenoteOperation $val The operations
    *
    * @return Onenote
    */
    public function setOperations($val)
    {
		$this->_propDict["operations"] = $val;
        return $this;
    }
    
}