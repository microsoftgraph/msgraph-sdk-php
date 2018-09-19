<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReferenceAttachment File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* ReferenceAttachment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ReferenceAttachment extends Attachment
{
    /**
    * Gets the sourceUrl
    *
    * @return string The sourceUrl
    */
    public function getSourceUrl()
    {
        if (array_key_exists("sourceUrl", $this->_propDict)) {
            return $this->_propDict["sourceUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sourceUrl
    *
    * @param string $val The sourceUrl
    *
    * @return ReferenceAttachment
    */
    public function setSourceUrl($val)
    {
        $this->_propDict["sourceUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the providerType
    *
    * @return ReferenceAttachmentProvider The providerType
    */
    public function getProviderType()
    {
        if (array_key_exists("providerType", $this->_propDict)) {
            if (is_a($this->_propDict["providerType"], "Microsoft\Graph\Beta\Model\ReferenceAttachmentProvider")) {
                return $this->_propDict["providerType"];
            } else {
                $this->_propDict["providerType"] = new ReferenceAttachmentProvider($this->_propDict["providerType"]);
                return $this->_propDict["providerType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the providerType
    *
    * @param ReferenceAttachmentProvider $val The providerType
    *
    * @return ReferenceAttachment
    */
    public function setProviderType($val)
    {
        $this->_propDict["providerType"] = $val;
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
    * @return ReferenceAttachment
    */
    public function setThumbnailUrl($val)
    {
        $this->_propDict["thumbnailUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the previewUrl
    *
    * @return string The previewUrl
    */
    public function getPreviewUrl()
    {
        if (array_key_exists("previewUrl", $this->_propDict)) {
            return $this->_propDict["previewUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the previewUrl
    *
    * @param string $val The previewUrl
    *
    * @return ReferenceAttachment
    */
    public function setPreviewUrl($val)
    {
        $this->_propDict["previewUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the permission
    *
    * @return ReferenceAttachmentPermission The permission
    */
    public function getPermission()
    {
        if (array_key_exists("permission", $this->_propDict)) {
            if (is_a($this->_propDict["permission"], "Microsoft\Graph\Beta\Model\ReferenceAttachmentPermission")) {
                return $this->_propDict["permission"];
            } else {
                $this->_propDict["permission"] = new ReferenceAttachmentPermission($this->_propDict["permission"]);
                return $this->_propDict["permission"];
            }
        }
        return null;
    }
    
    /**
    * Sets the permission
    *
    * @param ReferenceAttachmentPermission $val The permission
    *
    * @return ReferenceAttachment
    */
    public function setPermission($val)
    {
        $this->_propDict["permission"] = $val;
        return $this;
    }
    
    /**
    * Gets the isFolder
    *
    * @return bool The isFolder
    */
    public function getIsFolder()
    {
        if (array_key_exists("isFolder", $this->_propDict)) {
            return $this->_propDict["isFolder"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isFolder
    *
    * @param bool $val The isFolder
    *
    * @return ReferenceAttachment
    */
    public function setIsFolder($val)
    {
        $this->_propDict["isFolder"] = boolval($val);
        return $this;
    }
    
}