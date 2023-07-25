<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BlobEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* BlobEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BlobEvidence extends AlertEvidence
{

    /**
    * Gets the blobContainer
    *
    * @return BlobContainerEvidence|null The blobContainer
    */
    public function getBlobContainer()
    {
        if (array_key_exists("blobContainer", $this->_propDict)) {
            if (is_a($this->_propDict["blobContainer"], "\Microsoft\Graph\SecurityNamespace\Model\BlobContainerEvidence") || is_null($this->_propDict["blobContainer"])) {
                return $this->_propDict["blobContainer"];
            } else {
                $this->_propDict["blobContainer"] = new BlobContainerEvidence($this->_propDict["blobContainer"]);
                return $this->_propDict["blobContainer"];
            }
        }
        return null;
    }

    /**
    * Sets the blobContainer
    *
    * @param BlobContainerEvidence $val The value to assign to the blobContainer
    *
    * @return BlobEvidence The BlobEvidence
    */
    public function setBlobContainer($val)
    {
        $this->_propDict["blobContainer"] = $val;
         return $this;
    }
    /**
    * Gets the etag
    *
    * @return string|null The etag
    */
    public function getEtag()
    {
        if (array_key_exists("etag", $this->_propDict)) {
            return $this->_propDict["etag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the etag
    *
    * @param string $val The value of the etag
    *
    * @return BlobEvidence
    */
    public function setEtag($val)
    {
        $this->_propDict["etag"] = $val;
        return $this;
    }

    /**
    * Gets the fileHashes
    *
    * @return FileHash|null The fileHashes
    */
    public function getFileHashes()
    {
        if (array_key_exists("fileHashes", $this->_propDict)) {
            if (is_a($this->_propDict["fileHashes"], "\Microsoft\Graph\SecurityNamespace\Model\FileHash") || is_null($this->_propDict["fileHashes"])) {
                return $this->_propDict["fileHashes"];
            } else {
                $this->_propDict["fileHashes"] = new FileHash($this->_propDict["fileHashes"]);
                return $this->_propDict["fileHashes"];
            }
        }
        return null;
    }

    /**
    * Sets the fileHashes
    *
    * @param FileHash $val The value to assign to the fileHashes
    *
    * @return BlobEvidence The BlobEvidence
    */
    public function setFileHashes($val)
    {
        $this->_propDict["fileHashes"] = $val;
         return $this;
    }
    /**
    * Gets the name
    *
    * @return string|null The name
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
    * @param string $val The value of the name
    *
    * @return BlobEvidence
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the url
    *
    * @return string|null The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    *
    * @param string $val The value of the url
    *
    * @return BlobEvidence
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
}
