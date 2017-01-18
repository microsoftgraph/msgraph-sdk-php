<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharepointIds File
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
* SharepointIds class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SharepointIds extends Entity
{
    /**
    * Gets the property dictionary of the SharepointIds
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the listId
    *
    * @return string The listId
    */
    public function getListId()
    {
        if (array_key_exists("listId", $this->_propDict)) {
            return $this->_propDict["listId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the listId
    *
    * @param string $val The value of the listId
    *
    * @return SharepointIds
    */
    public function setListId($val)
    {
        $this->_propDict["list_id"] = $val;
        return $this;
    }
    
    /**
    * Gets the listItemId
    *
    * @return string The listItemId
    */
    public function getListItemId()
    {
        if (array_key_exists("listItemId", $this->_propDict)) {
            return $this->_propDict["listItemId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the listItemId
    *
    * @param string $val The value of the listItemId
    *
    * @return SharepointIds
    */
    public function setListItemId($val)
    {
        $this->_propDict["list_item_id"] = $val;
        return $this;
    }
    
    /**
    * Gets the listItemUniqueId
    *
    * @return string The listItemUniqueId
    */
    public function getListItemUniqueId()
    {
        if (array_key_exists("listItemUniqueId", $this->_propDict)) {
            return $this->_propDict["listItemUniqueId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the listItemUniqueId
    *
    * @param string $val The value of the listItemUniqueId
    *
    * @return SharepointIds
    */
    public function setListItemUniqueId($val)
    {
        $this->_propDict["list_item_unique_id"] = $val;
        return $this;
    }
    
    /**
    * Gets the siteId
    *
    * @return string The siteId
    */
    public function getSiteId()
    {
        if (array_key_exists("siteId", $this->_propDict)) {
            return $this->_propDict["siteId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the siteId
    *
    * @param string $val The value of the siteId
    *
    * @return SharepointIds
    */
    public function setSiteId($val)
    {
        $this->_propDict["site_id"] = $val;
        return $this;
    }
    
    /**
    * Gets the webId
    *
    * @return string The webId
    */
    public function getWebId()
    {
        if (array_key_exists("webId", $this->_propDict)) {
            return $this->_propDict["webId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webId
    *
    * @param string $val The value of the webId
    *
    * @return SharepointIds
    */
    public function setWebId($val)
    {
        $this->_propDict["web_id"] = $val;
        return $this;
    }
}
