<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RegionalAndLanguageSettings File
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
* RegionalAndLanguageSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RegionalAndLanguageSettings extends Entity
{
    /**
    * Gets the defaultDisplayLanguage
    *
    * @return LocaleInfo The defaultDisplayLanguage
    */
    public function getDefaultDisplayLanguage()
    {
        if (array_key_exists("defaultDisplayLanguage", $this->_propDict)) {
            if (is_a($this->_propDict["defaultDisplayLanguage"], "Beta\Microsoft\Graph\Model\LocaleInfo")) {
                return $this->_propDict["defaultDisplayLanguage"];
            } else {
                $this->_propDict["defaultDisplayLanguage"] = new LocaleInfo($this->_propDict["defaultDisplayLanguage"]);
                return $this->_propDict["defaultDisplayLanguage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultDisplayLanguage
    *
    * @param LocaleInfo $val The defaultDisplayLanguage
    *
    * @return RegionalAndLanguageSettings
    */
    public function setDefaultDisplayLanguage($val)
    {
        $this->_propDict["defaultDisplayLanguage"] = $val;
        return $this;
    }
    

     /** 
     * Gets the authoringLanguages
     *
     * @return array The authoringLanguages
     */
    public function getAuthoringLanguages()
    {
        if (array_key_exists("authoringLanguages", $this->_propDict)) {
           return $this->_propDict["authoringLanguages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the authoringLanguages
    *
    * @param LocaleInfo $val The authoringLanguages
    *
    * @return RegionalAndLanguageSettings
    */
    public function setAuthoringLanguages($val)
    {
		$this->_propDict["authoringLanguages"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultTranslationLanguage
    *
    * @return LocaleInfo The defaultTranslationLanguage
    */
    public function getDefaultTranslationLanguage()
    {
        if (array_key_exists("defaultTranslationLanguage", $this->_propDict)) {
            if (is_a($this->_propDict["defaultTranslationLanguage"], "Beta\Microsoft\Graph\Model\LocaleInfo")) {
                return $this->_propDict["defaultTranslationLanguage"];
            } else {
                $this->_propDict["defaultTranslationLanguage"] = new LocaleInfo($this->_propDict["defaultTranslationLanguage"]);
                return $this->_propDict["defaultTranslationLanguage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultTranslationLanguage
    *
    * @param LocaleInfo $val The defaultTranslationLanguage
    *
    * @return RegionalAndLanguageSettings
    */
    public function setDefaultTranslationLanguage($val)
    {
        $this->_propDict["defaultTranslationLanguage"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultSpeechInputLanguage
    *
    * @return LocaleInfo The defaultSpeechInputLanguage
    */
    public function getDefaultSpeechInputLanguage()
    {
        if (array_key_exists("defaultSpeechInputLanguage", $this->_propDict)) {
            if (is_a($this->_propDict["defaultSpeechInputLanguage"], "Beta\Microsoft\Graph\Model\LocaleInfo")) {
                return $this->_propDict["defaultSpeechInputLanguage"];
            } else {
                $this->_propDict["defaultSpeechInputLanguage"] = new LocaleInfo($this->_propDict["defaultSpeechInputLanguage"]);
                return $this->_propDict["defaultSpeechInputLanguage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultSpeechInputLanguage
    *
    * @param LocaleInfo $val The defaultSpeechInputLanguage
    *
    * @return RegionalAndLanguageSettings
    */
    public function setDefaultSpeechInputLanguage($val)
    {
        $this->_propDict["defaultSpeechInputLanguage"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultRegionalFormat
    *
    * @return LocaleInfo The defaultRegionalFormat
    */
    public function getDefaultRegionalFormat()
    {
        if (array_key_exists("defaultRegionalFormat", $this->_propDict)) {
            if (is_a($this->_propDict["defaultRegionalFormat"], "Beta\Microsoft\Graph\Model\LocaleInfo")) {
                return $this->_propDict["defaultRegionalFormat"];
            } else {
                $this->_propDict["defaultRegionalFormat"] = new LocaleInfo($this->_propDict["defaultRegionalFormat"]);
                return $this->_propDict["defaultRegionalFormat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultRegionalFormat
    *
    * @param LocaleInfo $val The defaultRegionalFormat
    *
    * @return RegionalAndLanguageSettings
    */
    public function setDefaultRegionalFormat($val)
    {
        $this->_propDict["defaultRegionalFormat"] = $val;
        return $this;
    }
    
    /**
    * Gets the regionalFormatOverrides
    *
    * @return RegionalFormatOverrides The regionalFormatOverrides
    */
    public function getRegionalFormatOverrides()
    {
        if (array_key_exists("regionalFormatOverrides", $this->_propDict)) {
            if (is_a($this->_propDict["regionalFormatOverrides"], "Beta\Microsoft\Graph\Model\RegionalFormatOverrides")) {
                return $this->_propDict["regionalFormatOverrides"];
            } else {
                $this->_propDict["regionalFormatOverrides"] = new RegionalFormatOverrides($this->_propDict["regionalFormatOverrides"]);
                return $this->_propDict["regionalFormatOverrides"];
            }
        }
        return null;
    }
    
    /**
    * Sets the regionalFormatOverrides
    *
    * @param RegionalFormatOverrides $val The regionalFormatOverrides
    *
    * @return RegionalAndLanguageSettings
    */
    public function setRegionalFormatOverrides($val)
    {
        $this->_propDict["regionalFormatOverrides"] = $val;
        return $this;
    }
    
}