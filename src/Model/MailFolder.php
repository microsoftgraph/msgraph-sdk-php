<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailFolder File
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
* MailFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MailFolder extends Entity
{
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
    * @return MailFolder
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentFolderId
    *
    * @return string The parentFolderId
    */
    public function getParentFolderId()
    {
        if (array_key_exists("parentFolderId", $this->_propDict)) {
            return $this->_propDict["parentFolderId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentFolderId
    *
    * @param string $val The parentFolderId
    *
    * @return MailFolder
    */
    public function setParentFolderId($val)
    {
        $this->_propDict["parentFolderId"] = $val;
        return $this;
    }
    
    /**
    * Gets the childFolderCount
    *
    * @return int The childFolderCount
    */
    public function getChildFolderCount()
    {
        if (array_key_exists("childFolderCount", $this->_propDict)) {
            return $this->_propDict["childFolderCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the childFolderCount
    *
    * @param int $val The childFolderCount
    *
    * @return MailFolder
    */
    public function setChildFolderCount($val)
    {
        $this->_propDict["childFolderCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the unreadItemCount
    *
    * @return int The unreadItemCount
    */
    public function getUnreadItemCount()
    {
        if (array_key_exists("unreadItemCount", $this->_propDict)) {
            return $this->_propDict["unreadItemCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unreadItemCount
    *
    * @param int $val The unreadItemCount
    *
    * @return MailFolder
    */
    public function setUnreadItemCount($val)
    {
        $this->_propDict["unreadItemCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalItemCount
    *
    * @return int The totalItemCount
    */
    public function getTotalItemCount()
    {
        if (array_key_exists("totalItemCount", $this->_propDict)) {
            return $this->_propDict["totalItemCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalItemCount
    *
    * @param int $val The totalItemCount
    *
    * @return MailFolder
    */
    public function setTotalItemCount($val)
    {
        $this->_propDict["totalItemCount"] = intval($val);
        return $this;
    }
    
    /** 
    * Gets the messages
    *
    * @return array The messages
    */
    public function getMessages()
    {
        if (array_key_exists("messages", $this->_propDict)) {
           return $this->_propDict["messages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the messages
    *
    * @param string $val The messages
    *
    * @return MailFolder
    */
    public function setMessages($val)
    {
		$this->_propDict["messages"] = $val;
        return $this;
    }
    
    /** 
    * Gets the childFolders
    *
    * @return array The childFolders
    */
    public function getChildFolders()
    {
        if (array_key_exists("childFolders", $this->_propDict)) {
           return $this->_propDict["childFolders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the childFolders
    *
    * @param string $val The childFolders
    *
    * @return MailFolder
    */
    public function setChildFolders($val)
    {
		$this->_propDict["childFolders"] = $val;
        return $this;
    }
    
    /** 
    * Gets the singleValueExtendedProperties
    *
    * @return array The singleValueExtendedProperties
    */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the singleValueExtendedProperties
    *
    * @param string $val The singleValueExtendedProperties
    *
    * @return MailFolder
    */
    public function setSingleValueExtendedProperties($val)
    {
		$this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }
    
    /** 
    * Gets the multiValueExtendedProperties
    *
    * @return array The multiValueExtendedProperties
    */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the multiValueExtendedProperties
    *
    * @param string $val The multiValueExtendedProperties
    *
    * @return MailFolder
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }
    
}