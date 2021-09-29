<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ListItem File
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
* ListItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ListItem extends BaseItem
{
    /**
    * Gets the contentType
    * The content type of this list item
    *
    * @return ContentTypeInfo|null The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict) && !is_null($this->_propDict["contentType"])) {
            if (is_a($this->_propDict["contentType"], "\Microsoft\Graph\Model\ContentTypeInfo")) {
                return $this->_propDict["contentType"];
            } else {
                $this->_propDict["contentType"] = new ContentTypeInfo($this->_propDict["contentType"]);
                return $this->_propDict["contentType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contentType
    * The content type of this list item
    *
    * @param ContentTypeInfo $val The contentType
    *
    * @return ListItem
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharepointIds
    * Returns identifiers useful for SharePoint REST compatibility. Read-only.
    *
    * @return SharepointIds|null The sharepointIds
    */
    public function getSharepointIds()
    {
        if (array_key_exists("sharepointIds", $this->_propDict) && !is_null($this->_propDict["sharepointIds"])) {
            if (is_a($this->_propDict["sharepointIds"], "\Microsoft\Graph\Model\SharepointIds")) {
                return $this->_propDict["sharepointIds"];
            } else {
                $this->_propDict["sharepointIds"] = new SharepointIds($this->_propDict["sharepointIds"]);
                return $this->_propDict["sharepointIds"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharepointIds
    * Returns identifiers useful for SharePoint REST compatibility. Read-only.
    *
    * @param SharepointIds $val The sharepointIds
    *
    * @return ListItem
    */
    public function setSharepointIds($val)
    {
        $this->_propDict["sharepointIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the analytics
    * Analytics about the view activities that took place on this item.
    *
    * @return ItemAnalytics|null The analytics
    */
    public function getAnalytics()
    {
        if (array_key_exists("analytics", $this->_propDict) && !is_null($this->_propDict["analytics"])) {
            if (is_a($this->_propDict["analytics"], "\Microsoft\Graph\Model\ItemAnalytics")) {
                return $this->_propDict["analytics"];
            } else {
                $this->_propDict["analytics"] = new ItemAnalytics($this->_propDict["analytics"]);
                return $this->_propDict["analytics"];
            }
        }
        return null;
    }
    
    /**
    * Sets the analytics
    * Analytics about the view activities that took place on this item.
    *
    * @param ItemAnalytics $val The analytics
    *
    * @return ListItem
    */
    public function setAnalytics($val)
    {
        $this->_propDict["analytics"] = $val;
        return $this;
    }
    
    /**
    * Gets the driveItem
    * For document libraries, the driveItem relationship exposes the listItem as a [driveItem][]
    *
    * @return DriveItem|null The driveItem
    */
    public function getDriveItem()
    {
        if (array_key_exists("driveItem", $this->_propDict) && !is_null($this->_propDict["driveItem"])) {
            if (is_a($this->_propDict["driveItem"], "\Microsoft\Graph\Model\DriveItem")) {
                return $this->_propDict["driveItem"];
            } else {
                $this->_propDict["driveItem"] = new DriveItem($this->_propDict["driveItem"]);
                return $this->_propDict["driveItem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the driveItem
    * For document libraries, the driveItem relationship exposes the listItem as a [driveItem][]
    *
    * @param DriveItem $val The driveItem
    *
    * @return ListItem
    */
    public function setDriveItem($val)
    {
        $this->_propDict["driveItem"] = $val;
        return $this;
    }
    
    /**
    * Gets the fields
    * The values of the columns set on this list item.
    *
    * @return FieldValueSet|null The fields
    */
    public function getFields()
    {
        if (array_key_exists("fields", $this->_propDict) && !is_null($this->_propDict["fields"])) {
            if (is_a($this->_propDict["fields"], "\Microsoft\Graph\Model\FieldValueSet")) {
                return $this->_propDict["fields"];
            } else {
                $this->_propDict["fields"] = new FieldValueSet($this->_propDict["fields"]);
                return $this->_propDict["fields"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fields
    * The values of the columns set on this list item.
    *
    * @param FieldValueSet $val The fields
    *
    * @return ListItem
    */
    public function setFields($val)
    {
        $this->_propDict["fields"] = $val;
        return $this;
    }
    

     /** 
     * Gets the versions
    * The list of previous versions of the list item.
     *
     * @return ListItemVersion[]|null The versions
     */
    public function getVersions()
    {
        if (array_key_exists('versions', $this->_propDict) && !is_null($this->_propDict['versions'])) {
            $versions = [];
            if (count($this->_propDict['versions']) > 0 && is_a($this->_propDict['versions'][0], 'ListItemVersion')) {
                return $this->_propDict['versions'];
            }
            foreach ($this->_propDict['versions'] as $singleValue) {
                $versions []= new ListItemVersion($singleValue);
            }
            $this->_propDict['versions'] = $versions;
            return $this->_propDict['versions'];
        }
        return null;
    }
    
    /** 
    * Sets the versions
    * The list of previous versions of the list item.
    *
    * @param ListItemVersion[] $val The versions
    *
    * @return ListItem
    */
    public function setVersions($val)
    {
        $this->_propDict["versions"] = $val;
        return $this;
    }
    
}
