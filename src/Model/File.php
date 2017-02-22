<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* File File
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
* File class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class File extends Entity
{

    /**
    * Gets the hashes
    *
    * @return Hashes The hashes
    */
    public function getHashes()
    {
        if (array_key_exists("hashes", $this->_propDict)) {
            if (is_a($this->_propDict["hashes"], "Hashes")) {
                return $this->_propDict["hashes"];
            } else {
                $this->_propDict["hashes"] = new Hashes($this->_propDict["hashes"]);
                return $this->_propDict["hashes"];
            }
        }
        return null;
    }

    /**
    * Sets the hashes
    *
    * @param Hashes $val The value to assign to the hashes
    *
    * @return File The File
    */
    public function setHashes($val)
    {
        $this->_propDict["hashes"] = $val;
         return $this;
    }
    /**
    * Gets the mimeType
    *
    * @return string The mimeType
    */
    public function getMimeType()
    {
        if (array_key_exists("mimeType", $this->_propDict)) {
            return $this->_propDict["mimeType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mimeType
    *
    * @param string $val The value of the mimeType
    *
    * @return File
    */
    public function setMimeType($val)
    {
        $this->_propDict["mime_type"] = $val;
        return $this;
    }
    /**
    * Gets the processingMetadata
    *
    * @return bool The processingMetadata
    */
    public function getProcessingMetadata()
    {
        if (array_key_exists("processingMetadata", $this->_propDict)) {
            return $this->_propDict["processingMetadata"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processingMetadata
    *
    * @param bool $val The value of the processingMetadata
    *
    * @return File
    */
    public function setProcessingMetadata($val)
    {
        $this->_propDict["processing_metadata"] = $val;
        return $this;
    }
}
