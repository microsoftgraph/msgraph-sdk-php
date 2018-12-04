<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedMobileLobApp File
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
* ManagedMobileLobApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ManagedMobileLobApp extends ManagedApp
{
    /**
    * Gets the committedContentVersion
    *
    * @return string The committedContentVersion
    */
    public function getCommittedContentVersion()
    {
        if (array_key_exists("committedContentVersion", $this->_propDict)) {
            return $this->_propDict["committedContentVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the committedContentVersion
    *
    * @param string $val The committedContentVersion
    *
    * @return ManagedMobileLobApp
    */
    public function setCommittedContentVersion($val)
    {
        $this->_propDict["committedContentVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileName
    *
    * @return string The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileName
    *
    * @param string $val The fileName
    *
    * @return ManagedMobileLobApp
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the size
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
    *
    * @param int $val The size
    *
    * @return ManagedMobileLobApp
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the contentVersions
     *
     * @return array The contentVersions
     */
    public function getContentVersions()
    {
        if (array_key_exists("contentVersions", $this->_propDict)) {
           return $this->_propDict["contentVersions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contentVersions
    *
    * @param MobileAppContent $val The contentVersions
    *
    * @return ManagedMobileLobApp
    */
    public function setContentVersions($val)
    {
		$this->_propDict["contentVersions"] = $val;
        return $this;
    }
    
}