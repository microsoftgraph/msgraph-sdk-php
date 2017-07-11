<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileAttachment File
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
* FileAttachment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class FileAttachment extends Attachment
{
    /**
    * Gets the contentId
    * The ID of the attachment in the Exchange store.
    *
    * @return string The contentId
    */
    public function getContentId()
    {
        if (array_key_exists("contentId", $this->_propDict)) {
            return $this->_propDict["contentId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentId
    * The ID of the attachment in the Exchange store.
    *
    * @param string $val The contentId
    *
    * @return FileAttachment
    */
    public function setContentId($val)
    {
        $this->_propDict["contentId"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentLocation
    * The Uniform Resource Identifier (URI) that corresponds to the location of the content of the attachment.
    *
    * @return string The contentLocation
    */
    public function getContentLocation()
    {
        if (array_key_exists("contentLocation", $this->_propDict)) {
            return $this->_propDict["contentLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentLocation
    * The Uniform Resource Identifier (URI) that corresponds to the location of the content of the attachment.
    *
    * @param string $val The contentLocation
    *
    * @return FileAttachment
    */
    public function setContentLocation($val)
    {
        $this->_propDict["contentLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentBytes
    * The binary contents of the file.
    *
    * @return \GuzzleHttp\Psr7\Stream The contentBytes
    */
    public function getContentBytes()
    {
        if (array_key_exists("contentBytes", $this->_propDict)) {
            if (is_a($this->_propDict["contentBytes"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["contentBytes"];
            } else {
                $this->_propDict["contentBytes"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["contentBytes"]);
                return $this->_propDict["contentBytes"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contentBytes
    * The binary contents of the file.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The contentBytes
    *
    * @return FileAttachment
    */
    public function setContentBytes($val)
    {
        $this->_propDict["contentBytes"] = $val;
        return $this;
    }
    
}