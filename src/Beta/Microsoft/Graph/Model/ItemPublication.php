<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemPublication File
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
* ItemPublication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemPublication extends ItemFacet
{
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return ItemPublication
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @return ItemPublication
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the publishedDate
    *
    * @return \DateTime The publishedDate
    */
    public function getPublishedDate()
    {
        if (array_key_exists("publishedDate", $this->_propDict)) {
            if (is_a($this->_propDict["publishedDate"], "\DateTime")) {
                return $this->_propDict["publishedDate"];
            } else {
                $this->_propDict["publishedDate"] = new \DateTime($this->_propDict["publishedDate"]);
                return $this->_propDict["publishedDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the publishedDate
    *
    * @param \DateTime $val The publishedDate
    *
    * @return ItemPublication
    */
    public function setPublishedDate($val)
    {
        $this->_propDict["publishedDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the publisher
    *
    * @return string The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publisher
    *
    * @param string $val The publisher
    *
    * @return ItemPublication
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    
    /**
    * Gets the thumbnailUrl
    *
    * @return string The thumbnailUrl
    */
    public function getThumbnailUrl()
    {
        if (array_key_exists("thumbnailUrl", $this->_propDict)) {
            return $this->_propDict["thumbnailUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the thumbnailUrl
    *
    * @param string $val The thumbnailUrl
    *
    * @return ItemPublication
    */
    public function setThumbnailUrl($val)
    {
        $this->_propDict["thumbnailUrl"] = $val;
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
    * @return ItemPublication
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    
}