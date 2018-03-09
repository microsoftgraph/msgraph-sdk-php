<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ListItem File
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
* ListItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ListItem extends BaseItem
{
    /**
    * Gets the contentType
    * The content type of this list item
    *
    * @return ContentTypeInfo The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            if (is_a($this->_propDict["contentType"], "Microsoft\Graph\Model\ContentTypeInfo")) {
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
    *
    * @return SharepointIds The sharepointIds
    */
    public function getSharepointIds()
    {
        if (array_key_exists("sharepointIds", $this->_propDict)) {
            if (is_a($this->_propDict["sharepointIds"], "Microsoft\Graph\Model\SharepointIds")) {
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
    * Gets the driveItem
    * For document libraries, the driveItem relationship exposes the listItem as a [driveItem][]
    *
    * @return DriveItem The driveItem
    */
    public function getDriveItem()
    {
        if (array_key_exists("driveItem", $this->_propDict)) {
            if (is_a($this->_propDict["driveItem"], "Microsoft\Graph\Model\DriveItem")) {
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
    *
    * @return FieldValueSet The fields
    */
    public function getFields()
    {
        if (array_key_exists("fields", $this->_propDict)) {
            if (is_a($this->_propDict["fields"], "Microsoft\Graph\Model\FieldValueSet")) {
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
    
}