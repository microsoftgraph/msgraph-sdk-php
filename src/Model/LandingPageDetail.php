<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LandingPageDetail File
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
* LandingPageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LandingPageDetail extends Entity
{
    /**
    * Gets the content
    * Landing page detail content.
    *
    * @return string|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }

    /**
    * Sets the content
    * Landing page detail content.
    *
    * @param string $val The content
    *
    * @return LandingPageDetail
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the isDefaultLangauge
    * Indicates whether this language detail is default for the landing page.
    *
    * @return bool|null The isDefaultLangauge
    */
    public function getIsDefaultLangauge()
    {
        if (array_key_exists("isDefaultLangauge", $this->_propDict)) {
            return $this->_propDict["isDefaultLangauge"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDefaultLangauge
    * Indicates whether this language detail is default for the landing page.
    *
    * @param bool $val The isDefaultLangauge
    *
    * @return LandingPageDetail
    */
    public function setIsDefaultLangauge($val)
    {
        $this->_propDict["isDefaultLangauge"] = boolval($val);
        return $this;
    }

    /**
    * Gets the language
    * The content language for the landing page.
    *
    * @return string|null The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            return $this->_propDict["language"];
        } else {
            return null;
        }
    }

    /**
    * Sets the language
    * The content language for the landing page.
    *
    * @param string $val The language
    *
    * @return LandingPageDetail
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
        return $this;
    }

}
