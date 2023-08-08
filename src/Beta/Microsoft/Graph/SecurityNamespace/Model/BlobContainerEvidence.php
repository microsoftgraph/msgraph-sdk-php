<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BlobContainerEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* BlobContainerEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BlobContainerEvidence extends AlertEvidence
{
    /**
    * Gets the name
    * The name of the blob container.
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
    * The name of the blob container.
    *
    * @param string $val The value of the name
    *
    * @return BlobContainerEvidence
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the storageResource
    * The storage which the blob container belongs to.
    *
    * @return AzureResourceEvidence|null The storageResource
    */
    public function getStorageResource()
    {
        if (array_key_exists("storageResource", $this->_propDict)) {
            if (is_a($this->_propDict["storageResource"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AzureResourceEvidence") || is_null($this->_propDict["storageResource"])) {
                return $this->_propDict["storageResource"];
            } else {
                $this->_propDict["storageResource"] = new AzureResourceEvidence($this->_propDict["storageResource"]);
                return $this->_propDict["storageResource"];
            }
        }
        return null;
    }

    /**
    * Sets the storageResource
    * The storage which the blob container belongs to.
    *
    * @param AzureResourceEvidence $val The value to assign to the storageResource
    *
    * @return BlobContainerEvidence The BlobContainerEvidence
    */
    public function setStorageResource($val)
    {
        $this->_propDict["storageResource"] = $val;
         return $this;
    }
    /**
    * Gets the url
    * The full URL representation of the blob container.
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
    * The full URL representation of the blob container.
    *
    * @param string $val The value of the url
    *
    * @return BlobContainerEvidence
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
}
