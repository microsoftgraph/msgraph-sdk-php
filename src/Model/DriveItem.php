<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DriveItem File
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
* DriveItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DriveItem extends Entity
{
    /**
    * Gets the audio
    * Audio metadata, if the item is an audio file. Read-only.
    *
    * @return Audio The audio
    */
    public function getAudio()
    {
        if (array_key_exists("audio", $this->_propDict)) {
            if (is_a($this->_propDict["audio"], "Microsoft\Graph\Model\Audio")) {
                return $this->_propDict["audio"];
            } else {
                $this->_propDict["audio"] = new Audio($this->_propDict["audio"]);
                return $this->_propDict["audio"];
            }
        }
        return null;
    }
    
    /**
    * Sets the audio
    * Audio metadata, if the item is an audio file. Read-only.
    *
    * @param string $val The audio
    *
    * @return DriveItem
    */
    public function setAudio($val)
    {
        $this->_propDict["audio"] = $val;
        return $this;
    }
    
    /**
    * Gets the content
    * The content stream, if the item represents a file.
    *
    * @return \GuzzleHttp\Psr7\Stream The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }
    
    /**
    * Sets the content
    * The content stream, if the item represents a file.
    *
    * @param string $val The content
    *
    * @return DriveItem
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * Identity of the user, device, and application which created the item. Read-only.
    *
    * @return IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    * Identity of the user, device, and application which created the item. Read-only.
    *
    * @param string $val The createdBy
    *
    * @return DriveItem
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Date and time of item creation. Read-only.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Date and time of item creation. Read-only.
    *
    * @param string $val The createdDateTime
    *
    * @return DriveItem
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the cTag
    * An eTag for the content of the item. This eTag is not changed if only the metadata is changed. Note This property is not returned if the item is a folder. Read-only.
    *
    * @return string The cTag
    */
    public function getCTag()
    {
        if (array_key_exists("cTag", $this->_propDict)) {
            return $this->_propDict["cTag"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cTag
    * An eTag for the content of the item. This eTag is not changed if only the metadata is changed. Note This property is not returned if the item is a folder. Read-only.
    *
    * @param string $val The cTag
    *
    * @return DriveItem
    */
    public function setCTag($val)
    {
        $this->_propDict["cTag"] = $val;
        return $this;
    }
    
    /**
    * Gets the deleted
    * Information about the deleted state of the item. Read-only.
    *
    * @return Deleted The deleted
    */
    public function getDeleted()
    {
        if (array_key_exists("deleted", $this->_propDict)) {
            if (is_a($this->_propDict["deleted"], "Microsoft\Graph\Model\Deleted")) {
                return $this->_propDict["deleted"];
            } else {
                $this->_propDict["deleted"] = new Deleted($this->_propDict["deleted"]);
                return $this->_propDict["deleted"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deleted
    * Information about the deleted state of the item. Read-only.
    *
    * @param string $val The deleted
    *
    * @return DriveItem
    */
    public function setDeleted($val)
    {
        $this->_propDict["deleted"] = $val;
        return $this;
    }
    
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
    * @return DriveItem
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the eTag
    * eTag for the entire item (metadata + content). Read-only.
    *
    * @return string The eTag
    */
    public function getETag()
    {
        if (array_key_exists("eTag", $this->_propDict)) {
            return $this->_propDict["eTag"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the eTag
    * eTag for the entire item (metadata + content). Read-only.
    *
    * @param string $val The eTag
    *
    * @return DriveItem
    */
    public function setETag($val)
    {
        $this->_propDict["eTag"] = $val;
        return $this;
    }
    
    /**
    * Gets the file
    * File metadata, if the item is a file. Read-only.
    *
    * @return File The file
    */
    public function getFile()
    {
        if (array_key_exists("file", $this->_propDict)) {
            if (is_a($this->_propDict["file"], "Microsoft\Graph\Model\File")) {
                return $this->_propDict["file"];
            } else {
                $this->_propDict["file"] = new File($this->_propDict["file"]);
                return $this->_propDict["file"];
            }
        }
        return null;
    }
    
    /**
    * Sets the file
    * File metadata, if the item is a file. Read-only.
    *
    * @param string $val The file
    *
    * @return DriveItem
    */
    public function setFile($val)
    {
        $this->_propDict["file"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileSystemInfo
    * File system information on client. Read-write.
    *
    * @return FileSystemInfo The fileSystemInfo
    */
    public function getFileSystemInfo()
    {
        if (array_key_exists("fileSystemInfo", $this->_propDict)) {
            if (is_a($this->_propDict["fileSystemInfo"], "Microsoft\Graph\Model\FileSystemInfo")) {
                return $this->_propDict["fileSystemInfo"];
            } else {
                $this->_propDict["fileSystemInfo"] = new FileSystemInfo($this->_propDict["fileSystemInfo"]);
                return $this->_propDict["fileSystemInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fileSystemInfo
    * File system information on client. Read-write.
    *
    * @param string $val The fileSystemInfo
    *
    * @return DriveItem
    */
    public function setFileSystemInfo($val)
    {
        $this->_propDict["fileSystemInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the folder
    * Folder metadata, if the item is a folder. Read-only.
    *
    * @return Folder The folder
    */
    public function getFolder()
    {
        if (array_key_exists("folder", $this->_propDict)) {
            if (is_a($this->_propDict["folder"], "Microsoft\Graph\Model\Folder")) {
                return $this->_propDict["folder"];
            } else {
                $this->_propDict["folder"] = new Folder($this->_propDict["folder"]);
                return $this->_propDict["folder"];
            }
        }
        return null;
    }
    
    /**
    * Sets the folder
    * Folder metadata, if the item is a folder. Read-only.
    *
    * @param string $val The folder
    *
    * @return DriveItem
    */
    public function setFolder($val)
    {
        $this->_propDict["folder"] = $val;
        return $this;
    }
    
    /**
    * Gets the image
    * Image metadata, if the item is an image. Read-only.
    *
    * @return Image The image
    */
    public function getImage()
    {
        if (array_key_exists("image", $this->_propDict)) {
            if (is_a($this->_propDict["image"], "Microsoft\Graph\Model\Image")) {
                return $this->_propDict["image"];
            } else {
                $this->_propDict["image"] = new Image($this->_propDict["image"]);
                return $this->_propDict["image"];
            }
        }
        return null;
    }
    
    /**
    * Sets the image
    * Image metadata, if the item is an image. Read-only.
    *
    * @param string $val The image
    *
    * @return DriveItem
    */
    public function setImage($val)
    {
        $this->_propDict["image"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedBy
    * Identity of the user, device, and application which last modified the item. Read-only.
    *
    * @return IdentitySet The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedBy
    * Identity of the user, device, and application which last modified the item. Read-only.
    *
    * @param string $val The lastModifiedBy
    *
    * @return DriveItem
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Date and time the item was last modified. Read-only.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * Date and time the item was last modified. Read-only.
    *
    * @param string $val The lastModifiedDateTime
    *
    * @return DriveItem
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the location
    * Location metadata, if the item has location data. Read-only.
    *
    * @return GeoCoordinates The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "Microsoft\Graph\Model\GeoCoordinates")) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new GeoCoordinates($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }
    
    /**
    * Sets the location
    * Location metadata, if the item has location data. Read-only.
    *
    * @param string $val The location
    *
    * @return DriveItem
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * The name of the item (filename and extension). Read-write.
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
    * The name of the item (filename and extension). Read-write.
    *
    * @param string $val The name
    *
    * @return DriveItem
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the package
    * If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
    *
    * @return Package The package
    */
    public function getPackage()
    {
        if (array_key_exists("package", $this->_propDict)) {
            if (is_a($this->_propDict["package"], "Microsoft\Graph\Model\Package")) {
                return $this->_propDict["package"];
            } else {
                $this->_propDict["package"] = new Package($this->_propDict["package"]);
                return $this->_propDict["package"];
            }
        }
        return null;
    }
    
    /**
    * Sets the package
    * If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
    *
    * @param string $val The package
    *
    * @return DriveItem
    */
    public function setPackage($val)
    {
        $this->_propDict["package"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentReference
    * Parent information, if the item has a parent. Read-write.
    *
    * @return ItemReference The parentReference
    */
    public function getParentReference()
    {
        if (array_key_exists("parentReference", $this->_propDict)) {
            if (is_a($this->_propDict["parentReference"], "Microsoft\Graph\Model\ItemReference")) {
                return $this->_propDict["parentReference"];
            } else {
                $this->_propDict["parentReference"] = new ItemReference($this->_propDict["parentReference"]);
                return $this->_propDict["parentReference"];
            }
        }
        return null;
    }
    
    /**
    * Sets the parentReference
    * Parent information, if the item has a parent. Read-write.
    *
    * @param string $val The parentReference
    *
    * @return DriveItem
    */
    public function setParentReference($val)
    {
        $this->_propDict["parentReference"] = $val;
        return $this;
    }
    
    /**
    * Gets the photo
    * Photo metadata, if the item is a photo. Read-only.
    *
    * @return Photo The photo
    */
    public function getPhoto()
    {
        if (array_key_exists("photo", $this->_propDict)) {
            if (is_a($this->_propDict["photo"], "Microsoft\Graph\Model\Photo")) {
                return $this->_propDict["photo"];
            } else {
                $this->_propDict["photo"] = new Photo($this->_propDict["photo"]);
                return $this->_propDict["photo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the photo
    * Photo metadata, if the item is a photo. Read-only.
    *
    * @param string $val The photo
    *
    * @return DriveItem
    */
    public function setPhoto($val)
    {
        $this->_propDict["photo"] = $val;
        return $this;
    }
    
    /**
    * Gets the remoteItem
    * Remote item data, if the item is shared from a drive other than the one being accessed. Read-only.
    *
    * @return RemoteItem The remoteItem
    */
    public function getRemoteItem()
    {
        if (array_key_exists("remoteItem", $this->_propDict)) {
            if (is_a($this->_propDict["remoteItem"], "Microsoft\Graph\Model\RemoteItem")) {
                return $this->_propDict["remoteItem"];
            } else {
                $this->_propDict["remoteItem"] = new RemoteItem($this->_propDict["remoteItem"]);
                return $this->_propDict["remoteItem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the remoteItem
    * Remote item data, if the item is shared from a drive other than the one being accessed. Read-only.
    *
    * @param string $val The remoteItem
    *
    * @return DriveItem
    */
    public function setRemoteItem($val)
    {
        $this->_propDict["remoteItem"] = $val;
        return $this;
    }
    
    /**
    * Gets the root
    *
    * @return Root The root
    */
    public function getRoot()
    {
        if (array_key_exists("root", $this->_propDict)) {
            if (is_a($this->_propDict["root"], "Microsoft\Graph\Model\Root")) {
                return $this->_propDict["root"];
            } else {
                $this->_propDict["root"] = new Root($this->_propDict["root"]);
                return $this->_propDict["root"];
            }
        }
        return null;
    }
    
    /**
    * Sets the root
    *
    * @param string $val The root
    *
    * @return DriveItem
    */
    public function setRoot($val)
    {
        $this->_propDict["root"] = $val;
        return $this;
    }
    
    /**
    * Gets the searchResult
    * Search metadata, if the item is from a search result. Read-only.
    *
    * @return SearchResult The searchResult
    */
    public function getSearchResult()
    {
        if (array_key_exists("searchResult", $this->_propDict)) {
            if (is_a($this->_propDict["searchResult"], "Microsoft\Graph\Model\SearchResult")) {
                return $this->_propDict["searchResult"];
            } else {
                $this->_propDict["searchResult"] = new SearchResult($this->_propDict["searchResult"]);
                return $this->_propDict["searchResult"];
            }
        }
        return null;
    }
    
    /**
    * Sets the searchResult
    * Search metadata, if the item is from a search result. Read-only.
    *
    * @param string $val The searchResult
    *
    * @return DriveItem
    */
    public function setSearchResult($val)
    {
        $this->_propDict["searchResult"] = $val;
        return $this;
    }
    
    /**
    * Gets the shared
    * Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
    *
    * @return Shared The shared
    */
    public function getShared()
    {
        if (array_key_exists("shared", $this->_propDict)) {
            if (is_a($this->_propDict["shared"], "Microsoft\Graph\Model\Shared")) {
                return $this->_propDict["shared"];
            } else {
                $this->_propDict["shared"] = new Shared($this->_propDict["shared"]);
                return $this->_propDict["shared"];
            }
        }
        return null;
    }
    
    /**
    * Sets the shared
    * Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
    *
    * @param string $val The shared
    *
    * @return DriveItem
    */
    public function setShared($val)
    {
        $this->_propDict["shared"] = $val;
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
    * @param string $val The sharepointIds
    *
    * @return DriveItem
    */
    public function setSharepointIds($val)
    {
        $this->_propDict["sharepointIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the size
    * Size of the item in bytes. Read-only.
    *
    * @return int The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the size
    * Size of the item in bytes. Read-only.
    *
    * @param int $val The size
    *
    * @return DriveItem
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the specialFolder
    * If the current item is also available as a special folder, this facet is returned. Read-only.
    *
    * @return SpecialFolder The specialFolder
    */
    public function getSpecialFolder()
    {
        if (array_key_exists("specialFolder", $this->_propDict)) {
            if (is_a($this->_propDict["specialFolder"], "Microsoft\Graph\Model\SpecialFolder")) {
                return $this->_propDict["specialFolder"];
            } else {
                $this->_propDict["specialFolder"] = new SpecialFolder($this->_propDict["specialFolder"]);
                return $this->_propDict["specialFolder"];
            }
        }
        return null;
    }
    
    /**
    * Sets the specialFolder
    * If the current item is also available as a special folder, this facet is returned. Read-only.
    *
    * @param string $val The specialFolder
    *
    * @return DriveItem
    */
    public function setSpecialFolder($val)
    {
        $this->_propDict["specialFolder"] = $val;
        return $this;
    }
    
    /**
    * Gets the video
    * Video metadata, if the item is a video. Read-only.
    *
    * @return Video The video
    */
    public function getVideo()
    {
        if (array_key_exists("video", $this->_propDict)) {
            if (is_a($this->_propDict["video"], "Microsoft\Graph\Model\Video")) {
                return $this->_propDict["video"];
            } else {
                $this->_propDict["video"] = new Video($this->_propDict["video"]);
                return $this->_propDict["video"];
            }
        }
        return null;
    }
    
    /**
    * Sets the video
    * Video metadata, if the item is a video. Read-only.
    *
    * @param string $val The video
    *
    * @return DriveItem
    */
    public function setVideo($val)
    {
        $this->_propDict["video"] = $val;
        return $this;
    }
    
    /**
    * Gets the webDavUrl
    *
    * @return string The webDavUrl
    */
    public function getWebDavUrl()
    {
        if (array_key_exists("webDavUrl", $this->_propDict)) {
            return $this->_propDict["webDavUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webDavUrl
    *
    * @param string $val The webDavUrl
    *
    * @return DriveItem
    */
    public function setWebDavUrl($val)
    {
        $this->_propDict["webDavUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the webUrl
    * URL that displays the resource in the browser. Read-only.
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
    * URL that displays the resource in the browser. Read-only.
    *
    * @param string $val The webUrl
    *
    * @return DriveItem
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    

     /** 
     * Gets the children
    * Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable.
     *
     * @return array The children
     */
    public function getChildren()
    {
        if (array_key_exists("children", $this->_propDict)) {
           return $this->_propDict["children"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the children
    * Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable.
    *
    * @param string $val The children
    *
    * @return DriveItem
    */
    public function setChildren($val)
    {
		$this->_propDict["children"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdByUser
    * Identity of the user, device, and application which created the item. Read-only.
    *
    * @return User The createdByUser
    */
    public function getCreatedByUser()
    {
        if (array_key_exists("createdByUser", $this->_propDict)) {
            if (is_a($this->_propDict["createdByUser"], "Microsoft\Graph\Model\User")) {
                return $this->_propDict["createdByUser"];
            } else {
                $this->_propDict["createdByUser"] = new User($this->_propDict["createdByUser"]);
                return $this->_propDict["createdByUser"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdByUser
    * Identity of the user, device, and application which created the item. Read-only.
    *
    * @param string $val The createdByUser
    *
    * @return DriveItem
    */
    public function setCreatedByUser($val)
    {
        $this->_propDict["createdByUser"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedByUser
    * Identity of the user, device, and application which last modified the item. Read-only.
    *
    * @return User The lastModifiedByUser
    */
    public function getLastModifiedByUser()
    {
        if (array_key_exists("lastModifiedByUser", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedByUser"], "Microsoft\Graph\Model\User")) {
                return $this->_propDict["lastModifiedByUser"];
            } else {
                $this->_propDict["lastModifiedByUser"] = new User($this->_propDict["lastModifiedByUser"]);
                return $this->_propDict["lastModifiedByUser"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedByUser
    * Identity of the user, device, and application which last modified the item. Read-only.
    *
    * @param string $val The lastModifiedByUser
    *
    * @return DriveItem
    */
    public function setLastModifiedByUser($val)
    {
        $this->_propDict["lastModifiedByUser"] = $val;
        return $this;
    }
    

     /** 
     * Gets the permissions
    * The set of permissions for the item. Read-only. Nullable.
     *
     * @return array The permissions
     */
    public function getPermissions()
    {
        if (array_key_exists("permissions", $this->_propDict)) {
           return $this->_propDict["permissions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the permissions
    * The set of permissions for the item. Read-only. Nullable.
    *
    * @param string $val The permissions
    *
    * @return DriveItem
    */
    public function setPermissions($val)
    {
		$this->_propDict["permissions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the thumbnails
    * Collection containing ThumbnailSet objects associated with the item. For more info, see getting thumbnails. Read-only. Nullable.
     *
     * @return array The thumbnails
     */
    public function getThumbnails()
    {
        if (array_key_exists("thumbnails", $this->_propDict)) {
           return $this->_propDict["thumbnails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the thumbnails
    * Collection containing ThumbnailSet objects associated with the item. For more info, see getting thumbnails. Read-only. Nullable.
    *
    * @param string $val The thumbnails
    *
    * @return DriveItem
    */
    public function setThumbnails($val)
    {
		$this->_propDict["thumbnails"] = $val;
        return $this;
    }
    
    /**
    * Gets the workbook
    *
    * @return Workbook The workbook
    */
    public function getWorkbook()
    {
        if (array_key_exists("workbook", $this->_propDict)) {
            if (is_a($this->_propDict["workbook"], "Microsoft\Graph\Model\Workbook")) {
                return $this->_propDict["workbook"];
            } else {
                $this->_propDict["workbook"] = new Workbook($this->_propDict["workbook"]);
                return $this->_propDict["workbook"];
            }
        }
        return null;
    }
    
    /**
    * Sets the workbook
    *
    * @param string $val The workbook
    *
    * @return DriveItem
    */
    public function setWorkbook($val)
    {
        $this->_propDict["workbook"] = $val;
        return $this;
    }
    
}