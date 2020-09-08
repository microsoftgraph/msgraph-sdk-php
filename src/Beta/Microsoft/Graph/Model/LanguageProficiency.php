<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LanguageProficiency File
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
* LanguageProficiency class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LanguageProficiency extends ItemFacet
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
    * @return LanguageProficiency
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the proficiency
    *
    * @return LanguageProficiencyLevel The proficiency
    */
    public function getProficiency()
    {
        if (array_key_exists("proficiency", $this->_propDict)) {
            if (is_a($this->_propDict["proficiency"], "Beta\Microsoft\Graph\Model\LanguageProficiencyLevel")) {
                return $this->_propDict["proficiency"];
            } else {
                $this->_propDict["proficiency"] = new LanguageProficiencyLevel($this->_propDict["proficiency"]);
                return $this->_propDict["proficiency"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proficiency
    *
    * @param LanguageProficiencyLevel $val The proficiency
    *
    * @return LanguageProficiency
    */
    public function setProficiency($val)
    {
        $this->_propDict["proficiency"] = $val;
        return $this;
    }
    
    /**
    * Gets the reading
    *
    * @return LanguageProficiencyLevel The reading
    */
    public function getReading()
    {
        if (array_key_exists("reading", $this->_propDict)) {
            if (is_a($this->_propDict["reading"], "Beta\Microsoft\Graph\Model\LanguageProficiencyLevel")) {
                return $this->_propDict["reading"];
            } else {
                $this->_propDict["reading"] = new LanguageProficiencyLevel($this->_propDict["reading"]);
                return $this->_propDict["reading"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reading
    *
    * @param LanguageProficiencyLevel $val The reading
    *
    * @return LanguageProficiency
    */
    public function setReading($val)
    {
        $this->_propDict["reading"] = $val;
        return $this;
    }
    
    /**
    * Gets the spoken
    *
    * @return LanguageProficiencyLevel The spoken
    */
    public function getSpoken()
    {
        if (array_key_exists("spoken", $this->_propDict)) {
            if (is_a($this->_propDict["spoken"], "Beta\Microsoft\Graph\Model\LanguageProficiencyLevel")) {
                return $this->_propDict["spoken"];
            } else {
                $this->_propDict["spoken"] = new LanguageProficiencyLevel($this->_propDict["spoken"]);
                return $this->_propDict["spoken"];
            }
        }
        return null;
    }
    
    /**
    * Sets the spoken
    *
    * @param LanguageProficiencyLevel $val The spoken
    *
    * @return LanguageProficiency
    */
    public function setSpoken($val)
    {
        $this->_propDict["spoken"] = $val;
        return $this;
    }
    
    /**
    * Gets the tag
    *
    * @return string The tag
    */
    public function getTag()
    {
        if (array_key_exists("tag", $this->_propDict)) {
            return $this->_propDict["tag"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tag
    *
    * @param string $val The tag
    *
    * @return LanguageProficiency
    */
    public function setTag($val)
    {
        $this->_propDict["tag"] = $val;
        return $this;
    }
    
    /**
    * Gets the written
    *
    * @return LanguageProficiencyLevel The written
    */
    public function getWritten()
    {
        if (array_key_exists("written", $this->_propDict)) {
            if (is_a($this->_propDict["written"], "Beta\Microsoft\Graph\Model\LanguageProficiencyLevel")) {
                return $this->_propDict["written"];
            } else {
                $this->_propDict["written"] = new LanguageProficiencyLevel($this->_propDict["written"]);
                return $this->_propDict["written"];
            }
        }
        return null;
    }
    
    /**
    * Sets the written
    *
    * @param LanguageProficiencyLevel $val The written
    *
    * @return LanguageProficiency
    */
    public function setWritten($val)
    {
        $this->_propDict["written"] = $val;
        return $this;
    }
    
}