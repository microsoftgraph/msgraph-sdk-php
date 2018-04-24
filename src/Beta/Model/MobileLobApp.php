<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileLobApp File
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
* MobileLobApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MobileLobApp extends MobileApp
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
    * @return MobileLobApp
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
    * @return MobileLobApp
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
    * @return MobileLobApp
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
    * @return MobileLobApp
    */
    public function setContentVersions($val)
    {
		$this->_propDict["contentVersions"] = $val;
        return $this;
    }
    
}