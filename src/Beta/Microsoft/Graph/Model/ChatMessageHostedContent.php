<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessageHostedContent File
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
* ChatMessageHostedContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessageHostedContent extends Entity
{
    /**
    * Gets the contentBytes
    * Write-only. When posting new chat message hosted content, represents the bytes of the payload. These are represented as a base64Encoded string.
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
    * Write-only. When posting new chat message hosted content, represents the bytes of the payload. These are represented as a base64Encoded string.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The contentBytes
    *
    * @return ChatMessageHostedContent
    */
    public function setContentBytes($val)
    {
        $this->_propDict["contentBytes"] = $val;
        return $this;
    }

    /**
    * Gets the contentType
    * Write-only. When posting new chat message hosted content, represents the type of content, such as image/png.
    *
    * @return string The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            return $this->_propDict["contentType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentType
    * Write-only. When posting new chat message hosted content, represents the type of content, such as image/png.
    *
    * @param string $val The contentType
    *
    * @return ChatMessageHostedContent
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }

}
