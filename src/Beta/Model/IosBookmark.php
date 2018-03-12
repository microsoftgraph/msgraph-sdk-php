<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosBookmark File
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
* IosBookmark class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosBookmark extends Entity
{
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
    * @return IosBookmark
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
    /**
    * Gets the bookmarkFolder
    *
    * @return string The bookmarkFolder
    */
    public function getBookmarkFolder()
    {
        if (array_key_exists("bookmarkFolder", $this->_propDict)) {
            return $this->_propDict["bookmarkFolder"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bookmarkFolder
    *
    * @param string $val The value of the bookmarkFolder
    *
    * @return IosBookmark
    */
    public function setBookmarkFolder($val)
    {
        $this->_propDict["bookmarkFolder"] = $val;
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
    * @param string $val The value of the displayName
    *
    * @return IosBookmark
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
}
