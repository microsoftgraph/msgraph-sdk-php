<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationDetail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* ApplicationDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplicationDetail extends Entity
{
    /**
    * Gets the fileDescription
    * The path of the file in the request for elevation, for example, %programfiles%\git\cmd
    *
    * @return string|null The fileDescription
    */
    public function getFileDescription()
    {
        if (array_key_exists("fileDescription", $this->_propDict)) {
            return $this->_propDict["fileDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileDescription
    * The path of the file in the request for elevation, for example, %programfiles%\git\cmd
    *
    * @param string $val The value of the fileDescription
    *
    * @return ApplicationDetail
    */
    public function setFileDescription($val)
    {
        $this->_propDict["fileDescription"] = $val;
        return $this;
    }
    /**
    * Gets the fileHash
    * The SHA256 hash of the file in the request for elevation, for example, '18ee24150dcb1d96752a4d6dd0f20dfd8ba8c38527e40aa8509b7adecf78f9c6'
    *
    * @return string|null The fileHash
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
    * The SHA256 hash of the file in the request for elevation, for example, '18ee24150dcb1d96752a4d6dd0f20dfd8ba8c38527e40aa8509b7adecf78f9c6'
    *
    * @param string $val The value of the fileHash
    *
    * @return ApplicationDetail
    */
    public function setFileHash($val)
    {
        $this->_propDict["fileHash"] = $val;
        return $this;
    }
    /**
    * Gets the fileName
    * The name of the file in the request for elevation, for example, git.exe
    *
    * @return string|null The fileName
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
    * The name of the file in the request for elevation, for example, git.exe
    *
    * @param string $val The value of the fileName
    *
    * @return ApplicationDetail
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
    /**
    * Gets the filePath
    * The path of the file in the request for elevation, for example, %programfiles%\git\cmd
    *
    * @return string|null The filePath
    */
    public function getFilePath()
    {
        if (array_key_exists("filePath", $this->_propDict)) {
            return $this->_propDict["filePath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the filePath
    * The path of the file in the request for elevation, for example, %programfiles%\git\cmd
    *
    * @param string $val The value of the filePath
    *
    * @return ApplicationDetail
    */
    public function setFilePath($val)
    {
        $this->_propDict["filePath"] = $val;
        return $this;
    }
    /**
    * Gets the productInternalName
    * The internal name of the application for which elevation request has been made. For example, 'git'
    *
    * @return string|null The productInternalName
    */
    public function getProductInternalName()
    {
        if (array_key_exists("productInternalName", $this->_propDict)) {
            return $this->_propDict["productInternalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productInternalName
    * The internal name of the application for which elevation request has been made. For example, 'git'
    *
    * @param string $val The value of the productInternalName
    *
    * @return ApplicationDetail
    */
    public function setProductInternalName($val)
    {
        $this->_propDict["productInternalName"] = $val;
        return $this;
    }
    /**
    * Gets the productName
    * The product name of the application for which elevation request has been made. For example, 'Git'
    *
    * @return string|null The productName
    */
    public function getProductName()
    {
        if (array_key_exists("productName", $this->_propDict)) {
            return $this->_propDict["productName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productName
    * The product name of the application for which elevation request has been made. For example, 'Git'
    *
    * @param string $val The value of the productName
    *
    * @return ApplicationDetail
    */
    public function setProductName($val)
    {
        $this->_propDict["productName"] = $val;
        return $this;
    }
    /**
    * Gets the productVersion
    * The product version of the application for which elevation request has been made. For example, '2.40.1.0'
    *
    * @return string|null The productVersion
    */
    public function getProductVersion()
    {
        if (array_key_exists("productVersion", $this->_propDict)) {
            return $this->_propDict["productVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productVersion
    * The product version of the application for which elevation request has been made. For example, '2.40.1.0'
    *
    * @param string $val The value of the productVersion
    *
    * @return ApplicationDetail
    */
    public function setProductVersion($val)
    {
        $this->_propDict["productVersion"] = $val;
        return $this;
    }
    /**
    * Gets the publisherName
    * The certificate issuer name of the certificate used to sign the application, for example, 'Sectigo Public Code Signing CA R36'
    *
    * @return string|null The publisherName
    */
    public function getPublisherName()
    {
        if (array_key_exists("publisherName", $this->_propDict)) {
            return $this->_propDict["publisherName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisherName
    * The certificate issuer name of the certificate used to sign the application, for example, 'Sectigo Public Code Signing CA R36'
    *
    * @param string $val The value of the publisherName
    *
    * @return ApplicationDetail
    */
    public function setPublisherName($val)
    {
        $this->_propDict["publisherName"] = $val;
        return $this;
    }
}
