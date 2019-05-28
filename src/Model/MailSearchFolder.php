<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailSearchFolder File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* MailSearchFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MailSearchFolder extends MailFolder
{
    /**
    * Gets the isSupported
    *
    * @return bool The isSupported
    */
    public function getIsSupported()
    {
        if (array_key_exists("isSupported", $this->_propDict)) {
            return $this->_propDict["isSupported"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSupported
    *
    * @param bool $val The isSupported
    *
    * @return MailSearchFolder
    */
    public function setIsSupported($val)
    {
        $this->_propDict["isSupported"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the includeNestedFolders
    *
    * @return bool The includeNestedFolders
    */
    public function getIncludeNestedFolders()
    {
        if (array_key_exists("includeNestedFolders", $this->_propDict)) {
            return $this->_propDict["includeNestedFolders"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the includeNestedFolders
    *
    * @param bool $val The includeNestedFolders
    *
    * @return MailSearchFolder
    */
    public function setIncludeNestedFolders($val)
    {
        $this->_propDict["includeNestedFolders"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the sourceFolderIds
    *
    * @return string The sourceFolderIds
    */
    public function getSourceFolderIds()
    {
        if (array_key_exists("sourceFolderIds", $this->_propDict)) {
            return $this->_propDict["sourceFolderIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sourceFolderIds
    *
    * @param string $val The sourceFolderIds
    *
    * @return MailSearchFolder
    */
    public function setSourceFolderIds($val)
    {
        $this->_propDict["sourceFolderIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the filterQuery
    *
    * @return string The filterQuery
    */
    public function getFilterQuery()
    {
        if (array_key_exists("filterQuery", $this->_propDict)) {
            return $this->_propDict["filterQuery"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the filterQuery
    *
    * @param string $val The filterQuery
    *
    * @return MailSearchFolder
    */
    public function setFilterQuery($val)
    {
        $this->_propDict["filterQuery"] = $val;
        return $this;
    }
    
}