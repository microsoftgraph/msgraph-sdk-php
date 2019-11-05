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
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* LanguageProficiency class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
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
    * Gets the proficiency
    *
    * @return LanguageProficiencyLevel The proficiency
    */
    public function getProficiency()
    {
        if (array_key_exists("proficiency", $this->_propDict)) {
            if (is_a($this->_propDict["proficiency"], "Microsoft\Graph\Beta\Model\LanguageProficiencyLevel")) {
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
    
}