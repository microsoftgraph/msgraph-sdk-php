<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocalizedLabel File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\TermStore\Model;
/**
* LocalizedLabel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LocalizedLabel extends \Beta\Microsoft\Graph\Model\Entity
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
    * @param bool $val The value of the isDefault
    *
    * @return LocalizedLabel
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = $val;
        return $this;
    }
    /**
    * Gets the languageTag
    *
    * @return string The languageTag
    */
    public function getLanguageTag()
    {
        if (array_key_exists("languageTag", $this->_propDict)) {
            return $this->_propDict["languageTag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the languageTag
    *
    * @param string $val The value of the languageTag
    *
    * @return LocalizedLabel
    */
    public function setLanguageTag($val)
    {
        $this->_propDict["languageTag"] = $val;
        return $this;
    }
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return LocalizedLabel
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
}
