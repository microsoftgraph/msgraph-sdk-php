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
namespace Microsoft\Graph\SecurityNamespace\Model;
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
    * @return BlobContainerEvidence
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the storageResource
    *
    * @return AzureResourceEvidence|null The storageResource
    */
    public function getStorageResource()
    {
        if (array_key_exists("storageResource", $this->_propDict)) {
            if (is_a($this->_propDict["storageResource"], "\Microsoft\Graph\SecurityNamespace\Model\AzureResourceEvidence") || is_null($this->_propDict["storageResource"])) {
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
    * @return BlobContainerEvidence
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
}
