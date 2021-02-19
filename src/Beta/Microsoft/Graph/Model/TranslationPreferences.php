<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TranslationPreferences File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* TranslationPreferences class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TranslationPreferences extends Entity
{

    /**
    * Gets the languageOverrides
    *
    * @return TranslationLanguageOverride The languageOverrides
    */
    public function getLanguageOverrides()
    {
        if (array_key_exists("languageOverrides", $this->_propDict)) {
            if (is_a($this->_propDict["languageOverrides"], "Beta\Microsoft\Graph\Model\TranslationLanguageOverride")) {
                return $this->_propDict["languageOverrides"];
            } else {
                $this->_propDict["languageOverrides"] = new TranslationLanguageOverride($this->_propDict["languageOverrides"]);
                return $this->_propDict["languageOverrides"];
            }
        }
        return null;
    }

    /**
    * Sets the languageOverrides
    *
    * @param TranslationLanguageOverride $val The value to assign to the languageOverrides
    *
    * @return TranslationPreferences The TranslationPreferences
    */
    public function setLanguageOverrides($val)
    {
        $this->_propDict["languageOverrides"] = $val;
         return $this;
    }

    /**
    * Gets the translationBehavior
    *
    * @return TranslationBehavior The translationBehavior
    */
    public function getTranslationBehavior()
    {
        if (array_key_exists("translationBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["translationBehavior"], "Beta\Microsoft\Graph\Model\TranslationBehavior")) {
                return $this->_propDict["translationBehavior"];
            } else {
                $this->_propDict["translationBehavior"] = new TranslationBehavior($this->_propDict["translationBehavior"]);
                return $this->_propDict["translationBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the translationBehavior
    *
    * @param TranslationBehavior $val The value to assign to the translationBehavior
    *
    * @return TranslationPreferences The TranslationPreferences
    */
    public function setTranslationBehavior($val)
    {
        $this->_propDict["translationBehavior"] = $val;
         return $this;
    }
    /**
    * Gets the untranslatedLanguages
    *
    * @return string The untranslatedLanguages
    */
    public function getUntranslatedLanguages()
    {
        if (array_key_exists("untranslatedLanguages", $this->_propDict)) {
            return $this->_propDict["untranslatedLanguages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the untranslatedLanguages
    *
    * @param string $val The value of the untranslatedLanguages
    *
    * @return TranslationPreferences
    */
    public function setUntranslatedLanguages($val)
    {
        $this->_propDict["untranslatedLanguages"] = $val;
        return $this;
    }
}
