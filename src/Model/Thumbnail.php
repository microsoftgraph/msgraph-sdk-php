<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Thumbnail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* Thumbnail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Thumbnail extends Entity
{
    /**
    * Gets the property dictionary of the Thumbnail
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the content
    *
    * @return \GuzzleHttp\Psr7\Stream The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = new \GuzzleHttp\Psr7\Stream($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }

    /**
    * Sets the content
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the content
    *
    * @return Thumbnail The Thumbnail
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
         return $this;
    }
    
    /**
    * Gets the height
    *
    * @return int The height
    */
    public function getHeight()
    {
        if (array_key_exists("height", $this->_propDict)) {
            return $this->_propDict["height"];
        } else {
            return null;
        }
    }

    /**
    * Sets the height
    *
    * @param int $val The value of the height
    *
    * @return Thumbnail
    */
    public function setHeight($val)
    {
        $this->_propDict["height"] = $val;
        return $this;
    }
    
    /**
    * Gets the url
    *
    * @return string The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    *
    * @param string $val The value of the url
    *
    * @return Thumbnail
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
    
    /**
    * Gets the width
    *
    * @return int The width
    */
    public function getWidth()
    {
        if (array_key_exists("width", $this->_propDict)) {
            return $this->_propDict["width"];
        } else {
            return null;
        }
    }

    /**
    * Sets the width
    *
    * @param int $val The value of the width
    *
    * @return Thumbnail
    */
    public function setWidth($val)
    {
        $this->_propDict["width"] = $val;
        return $this;
    }
}
