<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppContentFile File
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
* MobileAppContentFile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MobileAppContentFile extends Entity
{
    /**
    * Gets the azureStorageUri
    *
    * @return string The azureStorageUri
    */
    public function getAzureStorageUri()
    {
        if (array_key_exists("azureStorageUri", $this->_propDict)) {
            return $this->_propDict["azureStorageUri"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureStorageUri
    *
    * @param string $val The azureStorageUri
    *
    * @return MobileAppContentFile
    */
    public function setAzureStorageUri($val)
    {
        $this->_propDict["azureStorageUri"] = $val;
        return $this;
    }
    
    /**
    * Gets the isCommitted
    *
    * @return bool The isCommitted
    */
    public function getIsCommitted()
    {
        if (array_key_exists("isCommitted", $this->_propDict)) {
            return $this->_propDict["isCommitted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isCommitted
    *
    * @param bool $val The isCommitted
    *
    * @return MobileAppContentFile
    */
    public function setIsCommitted($val)
    {
        $this->_propDict["isCommitted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the createdDateTime
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
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return MobileAppContentFile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
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
    *
    * @param string $val The name
    *
    * @return MobileAppContentFile
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
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
    * @return MobileAppContentFile
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the sizeEncrypted
    *
    * @return int The sizeEncrypted
    */
    public function getSizeEncrypted()
    {
        if (array_key_exists("sizeEncrypted", $this->_propDict)) {
            return $this->_propDict["sizeEncrypted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sizeEncrypted
    *
    * @param int $val The sizeEncrypted
    *
    * @return MobileAppContentFile
    */
    public function setSizeEncrypted($val)
    {
        $this->_propDict["sizeEncrypted"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the azureStorageUriExpirationDateTime
    *
    * @return \DateTime The azureStorageUriExpirationDateTime
    */
    public function getAzureStorageUriExpirationDateTime()
    {
        if (array_key_exists("azureStorageUriExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["azureStorageUriExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["azureStorageUriExpirationDateTime"];
            } else {
                $this->_propDict["azureStorageUriExpirationDateTime"] = new \DateTime($this->_propDict["azureStorageUriExpirationDateTime"]);
                return $this->_propDict["azureStorageUriExpirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the azureStorageUriExpirationDateTime
    *
    * @param \DateTime $val The azureStorageUriExpirationDateTime
    *
    * @return MobileAppContentFile
    */
    public function setAzureStorageUriExpirationDateTime($val)
    {
        $this->_propDict["azureStorageUriExpirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the manifest
    *
    * @return \GuzzleHttp\Psr7\Stream The manifest
    */
    public function getManifest()
    {
        if (array_key_exists("manifest", $this->_propDict)) {
            if (is_a($this->_propDict["manifest"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["manifest"];
            } else {
                $this->_propDict["manifest"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["manifest"]);
                return $this->_propDict["manifest"];
            }
        }
        return null;
    }
    
    /**
    * Sets the manifest
    *
    * @param \GuzzleHttp\Psr7\Stream $val The manifest
    *
    * @return MobileAppContentFile
    */
    public function setManifest($val)
    {
        $this->_propDict["manifest"] = $val;
        return $this;
    }
    
    /**
    * Gets the uploadState
    *
    * @return MobileAppContentFileUploadState The uploadState
    */
    public function getUploadState()
    {
        if (array_key_exists("uploadState", $this->_propDict)) {
            if (is_a($this->_propDict["uploadState"], "Microsoft\Graph\Model\MobileAppContentFileUploadState")) {
                return $this->_propDict["uploadState"];
            } else {
                $this->_propDict["uploadState"] = new MobileAppContentFileUploadState($this->_propDict["uploadState"]);
                return $this->_propDict["uploadState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the uploadState
    *
    * @param MobileAppContentFileUploadState $val The uploadState
    *
    * @return MobileAppContentFile
    */
    public function setUploadState($val)
    {
        $this->_propDict["uploadState"] = $val;
        return $this;
    }
    
}