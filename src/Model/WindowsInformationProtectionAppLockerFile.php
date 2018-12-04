<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionAppLockerFile File
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
* WindowsInformationProtectionAppLockerFile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsInformationProtectionAppLockerFile extends Entity
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
    * @return WindowsInformationProtectionAppLockerFile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileHash
    *
    * @return string The fileHash
    */
    public function getFileHash()
    {
        if (array_key_exists("fileHash", $this->_propDict)) {
            return $this->_propDict["fileHash"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileHash
    *
    * @param string $val The fileHash
    *
    * @return WindowsInformationProtectionAppLockerFile
    */
    public function setFileHash($val)
    {
        $this->_propDict["fileHash"] = $val;
        return $this;
    }
    
    /**
    * Gets the file
    *
    * @return \GuzzleHttp\Psr7\Stream The file
    */
    public function getFile()
    {
        if (array_key_exists("file", $this->_propDict)) {
            if (is_a($this->_propDict["file"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["file"];
            } else {
                $this->_propDict["file"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["file"]);
                return $this->_propDict["file"];
            }
        }
        return null;
    }
    
    /**
    * Sets the file
    *
    * @param \GuzzleHttp\Psr7\Stream $val The file
    *
    * @return WindowsInformationProtectionAppLockerFile
    */
    public function setFile($val)
    {
        $this->_propDict["file"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    *
    * @return string The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    *
    * @param string $val The version
    *
    * @return WindowsInformationProtectionAppLockerFile
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    
}