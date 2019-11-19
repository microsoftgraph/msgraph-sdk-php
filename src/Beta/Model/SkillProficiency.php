<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SkillProficiency File
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
* SkillProficiency class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SkillProficiency extends ItemFacet
{
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
    * @return SkillProficiency
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
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
    * @return SkillProficiency
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the proficiency
    *
    * @return SkillProficiencyLevel The proficiency
    */
    public function getProficiency()
    {
        if (array_key_exists("proficiency", $this->_propDict)) {
            if (is_a($this->_propDict["proficiency"], "Microsoft\Graph\Beta\Model\SkillProficiencyLevel")) {
                return $this->_propDict["proficiency"];
            } else {
                $this->_propDict["proficiency"] = new SkillProficiencyLevel($this->_propDict["proficiency"]);
                return $this->_propDict["proficiency"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proficiency
    *
    * @param SkillProficiencyLevel $val The proficiency
    *
    * @return SkillProficiency
    */
    public function setProficiency($val)
    {
        $this->_propDict["proficiency"] = $val;
        return $this;
    }
    
    /**
    * Gets the webUrl
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webUrl
    *
    * @param string $val The webUrl
    *
    * @return SkillProficiency
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    
}