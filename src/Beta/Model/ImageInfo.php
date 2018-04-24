<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImageInfo File
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
* ImageInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ImageInfo extends Entity
{
    /**
    * Gets the iconUrl
    *
    * @return string The iconUrl
    */
    public function getIconUrl()
    {
        if (array_key_exists("iconUrl", $this->_propDict)) {
            return $this->_propDict["iconUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the iconUrl
    *
    * @param string $val The value of the iconUrl
    *
    * @return ImageInfo
    */
    public function setIconUrl($val)
    {
        $this->_propDict["iconUrl"] = $val;
        return $this;
    }
    /**
    * Gets the alternativeText
    *
    * @return string The alternativeText
    */
    public function getAlternativeText()
    {
        if (array_key_exists("alternativeText", $this->_propDict)) {
            return $this->_propDict["alternativeText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alternativeText
    *
    * @param string $val The value of the alternativeText
    *
    * @return ImageInfo
    */
    public function setAlternativeText($val)
    {
        $this->_propDict["alternativeText"] = $val;
        return $this;
    }
    /**
    * Gets the alternateText
    *
    * @return string The alternateText
    */
    public function getAlternateText()
    {
        if (array_key_exists("alternateText", $this->_propDict)) {
            return $this->_propDict["alternateText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alternateText
    *
    * @param string $val The value of the alternateText
    *
    * @return ImageInfo
    */
    public function setAlternateText($val)
    {
        $this->_propDict["alternateText"] = $val;
        return $this;
    }
    /**
    * Gets the addImageQuery
    *
    * @return bool The addImageQuery
    */
    public function getAddImageQuery()
    {
        if (array_key_exists("addImageQuery", $this->_propDict)) {
            return $this->_propDict["addImageQuery"];
        } else {
            return null;
        }
    }

    /**
    * Sets the addImageQuery
    *
    * @param bool $val The value of the addImageQuery
    *
    * @return ImageInfo
    */
    public function setAddImageQuery($val)
    {
        $this->_propDict["addImageQuery"] = $val;
        return $this;
    }
}
